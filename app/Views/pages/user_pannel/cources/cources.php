<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<!--======= Pricing Section ======= -->
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Cources</h2>
        </div>
        <!----- Course 1 ----->
        <div class="row">
            <?php if (!empty($courses) && is_array($courses)): ?>
                <?php foreach ($courses as $key => $course): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card text-center border-light shadow-sm">
                            <!-- Ensure the `course_image` field contains the image path or URL -->
                            <img src="<?= base_url('assets/img/courses/' . $course['cover_image']) ?>" class="card-img-top mx-auto d-block mt-3" style="width: 200px;" alt="image">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($course['course_name']) ?></h5>
                                <p class="card-text"><?= esc($course['description']) ?></p>
                            </div>
                            <div class="card-footer text-center">
                                <h5 class="fw-bold mb-2">$<?= esc($course['price']) ?> <span class="text-muted">per month</span></h5>
                                <!-- Update the Apply Now link as needed -->
                                <a href="<?= base_url('user/cources/registration') ?>" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No courses available.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>