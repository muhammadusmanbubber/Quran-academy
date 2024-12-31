<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- Detail Content -->
<section style="padding-bottom: 0;" class="mt-5">
    <div class="container <?= ($course_id === '1') ? '' : 'd-none' ?>" id="1">
        <!-- Course Banner -->
        <div class="text-center">
            <h3 class="display-8 fw-bold text-secondary">Riyad-Us-Saliheen</h3>
            <p class="lead mb-4">An in-depth exploration of Islamic teachings for a righteous life.</p>
        </div>
        <div class="row g-4">
            <!-- About Our Classes -->
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h4 class="fw-bold mb-3">Course Overview</h4>
                <p>According to some Ahadith, the reason for this Hadith is that a person sent a proposal of marriage to a woman named Umm Qais, which she turned down saying that he should have to emigrate to Al-Madinah for it. Accordingly, he did it for this specific purpose, and the two were married there. On account of this event, the man came to be known among the Companions as Muhajir Umm Qais.</p>
                <p>This course offers an immersive journey into the teachings of "Riyad-Us-Saliheen," focusing on the ethical and spiritual principles of Islam. Students will gain a profound understanding of divine rights, human responsibilities, and the application of Hadiths in daily life, leading to personal and spiritual growth.</p>
                <div class="text-center mt-3">
                    <a href="<?= base_url('#') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-email me-2"></i>Schedule a Free Trial</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 mb-4 ps-lg-5">
                <img src="<?= base_url('assets/img/hero.png') ?>" style="max-width: 400px;" alt="Online Quran Classes">
            </div>
        </div>
        <!-- Course Content Section -->
        <div class="row">
            <h4 class="fw-bold">What You'll Learn</h4>
            <ul class="list-group p-3">
                <li>In-depth knowledge of Islamic principles and teachings</li>
                <li>Practical applications of Hadiths in everyday life</li>
                <li>Enhanced understanding of spiritual and ethical practices</li>
            </ul>
        </div>
        <!-- Course Modules Details -->
        <div class="row text-center">
            <div class="section-title">
                <h4 class="fw-bold">Course Modules</h4>
                <p>Guided by a seasoned Islamic scholar, this course provides insights from an expert in Islamic jurisprudence. The instructor’s dedication and expertise ensure a transformative learning experience.</p>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <h5><span class="text-primary">Module 1:</span>Islamic Society Foundations</h5>
                        <p>An overview of the principles shaping the Islamic societal framework.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <h5><span class="text-primary">Module 2:</span>Rights of Allah</h5>
                        <p>A detailed exploration of the divine rights as outlined in the Quran and Hadith.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <h5><span class="text-primary">Module 3:</span>Human Rights and Duties</h5>
                        <p>Understanding the mutual rights and responsibilities among individuals in an Islamic context.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <h5><span class="text-primary">Module 4:</span>Ethical Living</h5>
                        <p>Guidance on maintaining ethical conduct in personal and social spheres.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <h5><span class="text-primary">Module 5:</span>Applying Hadiths</h5>
                        <p>Practical application of Hadiths to modern-day scenarios for effective living.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <h5><span class="text-primary">Module 6:</span>Spiritual Growth</h5>
                        <p>Developing spiritual depth through the study of Islamic teachings and practices.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Content Section -->
        <div class="row">
            <section id="team" class="team">
                <div class="container">
                    <div class="section-title">
                        <h4 class="fw-bold">Specialist Instructors in Riyad-Us-Saliheen</h4>
                        <p>Guided by a seasoned Islamic scholar, this course provides insights from an expert in Islamic jurisprudence. The instructor’s dedication and expertise ensure a transformative learning experience.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('assets/img/team/team-1.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h5 class="fw-bold">Walter White</h5>
                                    <span>Chief Executive Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('assets/img/team/team-2.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h5 class="fw-bold">Sarah Jhonson</h5>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('assets/img/team/team-3.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h5 class="fw-bold">William Anderson</h5>
                                    <span>CTO</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('assets/img/team/team-4.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h5 class="fw-bold">Amanda Jepson</h5>
                                    <span>Accountant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- </section> -->
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>