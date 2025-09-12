<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'My Website') ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364); 
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: #0d6efd; /* bootstrap blue */
        }

        .navbar a {
            color: #fff !important;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #ffc107 !important; /* gold hover */
        }

        .container {
            flex: 1;
            padding: 40px;
        }

        footer {
            background: #0d6efd;
            text-align: center;
            padding: 15px;
            color: #fff;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">ITE311-SARSABA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/contact') ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date('Y') ?> MyCompany. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
