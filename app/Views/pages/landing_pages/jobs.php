<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- ======= Welcome Section ======= -->
<style>
    body {
        background-color: #f8f9fa;
    }

    .job-card {
        transition: transform 0.2s ease-in-out;
    }

    .job-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .apply-btn {
        background-color: #007bff;
        border: none;
        transition: background-color 0.2s ease-in-out;
    }

    .apply-btn:hover {
        background-color: #0056b3;
    }
</style>
<!-- Hero Section -->
<section class="mt-5 d-flex align-items-center justify-content-center">
    <div class="mx-auto text-center">
        <h3 class="display-8 fw-bold text-secondary">Welcome to Our Teacher Job Portal</h3>
        <p class="fs-5 text-uppercase text-primary fw-bold">Your journey to a rewarding teaching career starts here.</p>
    </div>
</section>
<!-- Job Listings -->
<div class="container">
    <div class="row">
        <!-- Job Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card job-card h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Online Quran Teacher</h5>
                    <p class="card-text">
                        Join our team of dedicated online Quran teachers. Work from the comfort of your home while making a meaningful impact on students' lives.
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Requirements:</strong> Fluent in Arabic and English, Tajweed expertise</li>
                        <li class="list-group-item"><strong>Vacancies:</strong> 02 Instructors</li>
                        <li class="list-group-item"><strong>Gender:</strong> Male</li>
                        <li class="list-group-item"><strong>Location:</strong> Rawalpindi Islamabad</li>
                        <li class="list-group-item"><strong>Salary:</strong> $20/hour</li>
                    </ul>
                    <div class="d-grid mt-3">
                        <a href="<?= site_url('jobs-form') ?>" class="btn btn-primary apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card job-card h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Islamic Studies Teacher</h5>
                    <p class="card-text">
                        We are looking for an experienced Islamic Studies teacher to provide online lessons to students worldwide.
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Requirements:</strong> Degree in Islamic Studies, Teaching experience</li>
                        <li class="list-group-item"><strong>Vacancies:</strong> 03 Instructors</li>
                        <li class="list-group-item"><strong>Gender:</strong> Female</li>
                        <li class="list-group-item"><strong>Location:</strong> Remote</li>
                        <li class="list-group-item"><strong>Salary:</strong> $25/hour</li>
                    </ul>
                    <div class="d-grid mt-3">
                        <a href="<?= site_url('jobs-form') ?>" class="btn btn-primary apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card job-card h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">Arabic Language Teacher</h5>
                    <p class="card-text">
                        Teach Arabic language online to students of various age groups. Flexible hours and rewarding work.Good Classrooms.
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Requirements:</strong> Native Arabic speaker, Experience in teaching Arabic</li>
                        <li class="list-group-item"><strong>Vacancies:</strong> 05 Instructors</li>
                        <li class="list-group-item"><strong>Gender:</strong> Male</li>
                        <li class="list-group-item"><strong>Location:</strong> Remote</li>
                        <li class="list-group-item"><strong>Salary:</strong> $18/hour</li>
                    </ul>
                    <div class="d-grid mt-3">
                        <a href="<?= site_url('jobs-form') ?>" class="btn btn-primary apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>

<?= $this->endSection() ?>