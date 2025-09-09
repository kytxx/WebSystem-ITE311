<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="text-center">
        <h1 class="display-4 fw-bold">Welcome to MyCompany</h1>
        <p class="lead">We deliver innovation, technology, and solutions for your success.</p>
        <a href="<?= base_url('home/about') ?>" class="btn btn-warning btn-lg mt-3">Learn More</a>
    </div>
<?= $this->endSection() ?>
