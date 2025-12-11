<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instructor Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background: #ffffff;
            color: #333;
            padding-top: 30px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            border-right: 1px solid #ddd;
        }
        .sidebar .profile {
            text-align: center;
            padding: 20px;
        }
        .sidebar .profile .circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #007bff;
            margin: 0 auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        .sidebar .profile h4 {
            margin: 5px 0;
            font-size: 18px;
            font-weight: bold;
        }
        .sidebar .profile p {
            font-size: 14px;
            color: #666;
        }
        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #f8f9fa;
            color: #007bff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .main-content h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
        }
        .card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 700px;
            margin: auto;
            text-align: center;
        }
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .course-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s;
            text-decoration: none;
            color: inherit;
        }
        .course-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
        }
        .course-header {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
        }
        .course-title {
            padding: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="profile">
        <div class="circle"><?= strtoupper(substr(session()->get('name'), 0, 1)) ?></div>
        <h4><?= esc(session()->get('name')) ?></h4>
        <p><?= esc(session()->get('email')) ?></p>
    </div>
    <a href="<?= base_url('instructor/dashboard') ?>">📘 Dashboard</a>
    <a href="<?= base_url('instructor/course/courses') ?>">📚 My Courses</a>
    <a href="<?= base_url('instructor/my_students') ?>">🧑 My Students</a>
    <a href="#">📅 Class Schedule</a>
    <a href="<?= base_url('logout') ?>">🚪 Logout</a>
</div>

<div class="main-content">
    <h2>Instructor Dashboard</h2>

    <div class="card">
        <h4>Welcome, <strong><?= esc(session()->get('name')) ?></strong>!</h4>
        <p>You are logged in as <strong>Instructor</strong>.</p>
        <p>You can manage your students, lessons, and grades.</p>
    </div>

    <?php if (!empty($courses)): ?>
    <div class="courses-grid">
        <?php foreach ($courses as $course): ?>
            <?php
                $colors = ['#9594e6ff', '#68eb87ff', '#d6747eff'];
                $color = $colors[$course['course_id'] % 3];
            ?>
            <a href="<?= base_url('instructor/course/' . $course['course_id'] . '/manage') ?>" class="course-box">
                <div class="course-header" style="background-color: <?= $color ?>;">
                    <?= esc(substr($course['course_name'], 0, 20)) ?>
                </div>
                <div class="course-title">
                    <?= esc($course['course_name']) ?>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
    <p>No courses found. <a href="<?= base_url('instructor/course/courses') ?>">Manage Courses</a></p>
    <?php endif; ?>
</div>

</body>
</html>
