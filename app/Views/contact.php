<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
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
                <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url('contact') ?>">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('register') ?>">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Contact Us</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow-sm">
                <form>
                    <div class="mb-3">
                        <label>Name</label>
                        <input class="form-control" type="text">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input class="form-control" type="email">
                    </div>

                    <div class="mb-3">
                        <label>Message</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>

                    <button class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
