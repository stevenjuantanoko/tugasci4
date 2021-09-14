<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main class="container">

    <div class="starter-template text-center">
        <h1>Welcome ! <?= session()->get('name'); ?></h1>
    </div>

</main>
<?= $this->endSection('content'); ?>