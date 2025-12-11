<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            margin: 0;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: #fff;
            padding-top: 30px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }
        .sidebar .profile {
            text-align: center;
            padding: 20px;
        }
        .sidebar .profile .circle {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 32px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .sidebar .profile h4 {
            margin: 5px 0;
            font-size: 20px;
            font-weight: bold;
            color: #ecf0f1;
        }
        .sidebar .profile p {
            font-size: 14px;
            color: #bdc3c7;
        }
        .sidebar a {
            display: block;
            padding: 15px 25px;
            color: #ecf0f1;
            text-decoration: none;
            font-size: 16px;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
            color: #fff;
            border-left-color: #e74c3c;
            transform: translateX(5px);
        }
        .main-content {
            margin-left: 260px;
            padding: 40px;
            background: rgba(255,255,255,0.95);
            min-height: 100vh;
            border-radius: 20px 0 0 0;
        }
        .main-content h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
            font-weight: bold;
            font-size: 36px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            max-width: 700px;
            margin: auto;
            text-align: center;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        .card h4 {
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .card p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                border-radius: 0;
            }
            .main-content {
                margin-left: 0;
                border-radius: 0;
            }
            .main-content h2 {
                font-size: 32px;
            }
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
    <a href="<?= base_url('dashboard') ?>">📊 Admin Dashboard</a>
        <a href="#">👥 Manage Users</a>
        <a href="#">📚 Manage Courses</a>
        <a href="#">⚙️ System Settings</a>
    <a href="<?= base_url('logout') ?>">🚪 Logout</a>
</div>

<div class="main-content">
    <h2>Admin Dashboard</h2>

    <div class="card">
        <h4>Welcome, <strong><?= esc(session()->get('name')) ?></strong>!</h4>
        <p>You are logged in as <strong>Admin</strong>.</p>
        <p>Manage users, courses, and system settings.</p>
    </div>
</div>

</body>
</html>