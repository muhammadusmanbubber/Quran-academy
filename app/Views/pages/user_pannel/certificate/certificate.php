<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <img
                src="<?= base_url('assets/img/certificate.png') ?>" alt="Certificate"
                class="img-fluid border rounded shadow"
                style="max-width: 100%; height: auto; width: 1000px; height: 600px;">
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>