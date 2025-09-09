<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1 class="fw-bold">Contact Us</h1>
    <p class="lead">Get in touch with us through the form below:</p>

    <form class="mt-3">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Your Email">
        </div>
        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Send Message</button>
    </form>
<?= $this->endSection() ?>
