<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
        }
        .navbar {
            background: white;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
        }
        .register-card {
            max-width: 480px;
            margin: 60px auto;
            padding: 40px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?= base_url('') ?>">MyWebsite</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link <?= (url_is('/')) ? 'active' : '' ?>" href="<?= base_url('') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= (url_is('about')) ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link <?= (url_is('contact')) ? 'active' : '' ?>" href="<?= base_url('contact') ?>">Contact</a></li>
                <li class="nav-item"><a class="nav-link <?= (url_is('login')) ? 'active' : '' ?>" href="<?= base_url('login') ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link <?= (url_is('register')) ? 'active' : '' ?>" href="<?= base_url('register') ?>">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="register-card">

        <h3 class="text-center fw-bold mb-4">Create Account</h3>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if(isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('register') ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="username" class="form-control" required value="<?= set_value('username') ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required value="<?= set_value('email') ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirm" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100" type="submit">Register</button>

            <p class="text-center mt-3">
                Already have an account?
                <a href="<?= base_url('login') ?>">Login</a>
            </p>

        </form>

    </div>

</div>

</body>
</html>
