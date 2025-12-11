
<!-- jQuery Library -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- STEP 5: AJAX Enrollment Script -->
<script>
$(document).ready(function() {
    // Get CSRF token from meta tags
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    var csrfName = $('meta[name="csrf-name"]').attr('content');

    // Function to display Bootstrap alert
    function showAlert(type, message) {
        var alertId = 'alert-' + Date.now();
        var alertHTML = `
            <div id="${alertId}" class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        $('#alert-container').append(alertHTML);
        
        // Auto-dismiss after 5 seconds
        setTimeout(function() {
            $('#' + alertId).alert('close');
        }, 5000);
    }

    // Listen for click on Enroll buttons
    $(document).on('click', '.btn-enroll', function(e) {
        e.preventDefault(); // Prevent default form submission

        var $button = $(this);
        var courseId = $button.attr('data-course-id');
        
        // Validation
        if (!courseId) {
            showAlert('danger', 'Error: Invalid course ID');
            return;
        }

        // Disable button and show loading state
        $button.prop('disabled', true).text('Enrolling...');

        // Prepare POST data
        var postData = {
            course_id: courseId
        };

        // Add CSRF token if available
        if (csrfName && csrfToken) {
            postData[csrfName] = csrfToken;
        }

        // AJAX POST request using $.post()
        $.post('<?= site_url("course/enroll") ?>', postData, function(response) {
            // Success callback
            if (response.status === 'success') {
                // Display success alert
                showAlert('success', response.message || 'Successfully enrolled in the course!');

                // Get course details
                var $courseCard = $('#course-' + courseId);
                var courseTitle = $courseCard.find('h4').text();
                var courseDesc = $courseCard.find('p').text();

                // Hide/Disable the Enroll button
                $button.removeClass('btn-enroll')
                       .addClass('btn-enrolled')
                       .text('Enrolled')
                       .prop('disabled', true);

                // Update Enrolled Courses list dynamically
                var enrolledDate = new Date().toLocaleDateString('en-US', { 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric' 
                });

                var newEnrolledCourse = `
                    <div class="course-card" data-course-id="${courseId}">
                        <h4>${courseTitle}</h4>
                        ${courseDesc ? '<p>' + courseDesc + '</p>' : ''}
                        <div class="course-meta">Enrolled: ${enrolledDate}</div>
                    </div>
                `;

                // Remove "no courses" message if it exists
                $('#no-enrollments-message').remove();

                // Add to enrolled courses list (prepend to show at top)
                $('#enrolled-courses-list').prepend(newEnrolledCourse);

            } else {
                // Handle error response
                showAlert('danger', response.message || 'Failed to enroll in the course');
                
                // Re-enable button if not already enrolled
                if (response.message && response.message.includes('already')) {
                    $button.removeClass('btn-enroll')
                           .addClass('btn-enrolled')
                           .text('Enrolled')
                           .prop('disabled', true);
                } else {
                    $button.prop('disabled', false).text('Enroll Now');
                }
            }
        }, 'json')
        .fail(function(jqXHR, textStatus, errorThrown) {
            // Handle AJAX error
            console.error('AJAX Error:', textStatus, errorThrown);
            console.error('Response:', jqXHR.responseText);
            
            var errorMessage = 'An error occurred. Please try again.';
            
            // Try to parse error response
            try {
                var errorResponse = JSON.parse(jqXHR.responseText);
                errorMessage = errorResponse.message || errorMessage;
            } catch (e) {
                // Use default error message
            }

            showAlert('danger', errorMessage);

            // Handle specific HTTP status codes
            if (jqXHR.status === 409) {
                // Already enrolled
                $button.removeClass('btn-enroll')
                       .addClass('btn-enrolled')
                       .text('Enrolled')
                       .prop('disabled', true);
            } else if (jqXHR.status === 401) {
                // Not logged in
                showAlert('warning', 'Please log in to enroll in courses');
            } else {
                // Other errors - re-enable button
                $button.prop('disabled', false).text('Enroll Now');
            }
        });
    });
});
</script>

</body>
</html>