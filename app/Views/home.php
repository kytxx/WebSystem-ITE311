<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

<section class="py-5 text-center bg-light">
    <div class="container">
        <h1 class="fw-bold mb-3">Welcome to MyWebsite</h1>
        <p class="lead mb-4">A clean and modern sample homepage built with CodeIgniter.</p>

        <a href="<?= base_url('about') ?>" class="btn btn-primary btn-lg">Learn More</a>
        <a href="<?= base_url('contact') ?>" class="btn btn-outline-secondary btn-lg">Contact Us</a>
    </div>
</section>

</body>
</html>
