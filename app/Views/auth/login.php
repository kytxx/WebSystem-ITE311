<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            background: white;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
        }
        .login-card {
            max-width: 420px;
            background: white;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            margin: 80px auto;
        }
        .form-label {
            font-weight: 500;
        }
    </style>
</head>

<body>

<!-- Navbar -->
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
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container">
    <div class="login-card">

        <h3 class="text-center fw-bold mb-4">Login</h3>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if(isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('login') ?>">
            <?= csrf_field() ?>
            
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required/>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required/>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <p class="text-center mt-3">
                Don't have an account?
                <a href="<?= base_url('register') ?>">Register</a>
            </p>

        </form>

    </div>
</div>

</body>
</html>
