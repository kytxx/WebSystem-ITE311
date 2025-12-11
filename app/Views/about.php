<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?= base_url('') ?>">MyWebsite</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url('about') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('register') ?>">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h2 class="fw-bold mb-4 text-center">About Us</h2>

    <div class="card p-4 shadow-sm">
        <p>
            Welcome to MyWebsite! This project demonstrates a clean, modern frontend
            using CodeIgniter and Bootstrap.
        </p>

        <p>
            The goal is to deliver simplicity, responsiveness, and an easy
            to navigate user experience throughout the pages.
        </p>
    </div>
</div>

</body>
</html>
