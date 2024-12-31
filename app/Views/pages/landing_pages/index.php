<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- ======= Welcome Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 class="fw-bold">Welcome to Quran Academy</h1>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-double text-muted mt-3"></i>
                        <span><strong class="text-success">خيركم من تعلم القرآن وعلّمه.</strong><br>The best of you are those who learn the Quran and teach it. (Sahih al-Bukhari, 5027)</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-double text-muted mt-3"></i>
                        <span><strong class="text-success">اقْرَؤُوا الْقُرْآنَ؛ فَإِنَّهُ يَأْتِي يَوْمَ الْقِيَامَةِ شَفِيعًا لِصَاحِبِهِ.</strong><br>Recite the Quran, for it will come on the Day of Judgment as an intercessor for its reciter. (Sahih Muslim, 804)</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-double text-muted mt-3"></i>
                        <span><strong class="text-success">من قرأ حرفًا من كتاب الله فله به حسنة، والحسنة بعشر أمثالها</strong><br>Whoever reads a letter from the Book of Allah will have a good deed recorded for him, and a good deed is multiplied tenfold. (Sahih al-Bukhari, 5010)</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fas fa-check-double text-muted mt-3"></i>
                        <span><strong class="text-success">إنَّ الذي يَقْرَأُ الْقُرْآنَ وَيَتَعَلَّمُهُ وَيَسْتَمِعُ لَهُ يُحْشَرُ مَعَ السَّبْعِينَ أَلْفًا مِنَ الْمَلَائِكَةِ.</strong><br>The one who recites the Quran and learns it and listens to it will be gathered with seventy thousand angels. (Sunan al-Tirmidhi, 2918)</span>
                    </li>
                </ul>
                <div class="mt-3">
                    <a href="<?= base_url('/') ?>#faq" class="btn-get-quote">Request a Quote</a>
                    <a href="<?= base_url('/login') ?>" class="btn-get-started scrollto">Register Now</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img">
                <img src="assets/img/hero.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s">
            <h3 class="display-8 fw-bold text-secondary">WHY TO CHOOSE US</h3>
            <p class="fs-5 text-uppercase text-primary fw-bold">Expert guidance from qualified Quran scholars</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="box">
                    <span>01</span>
                    <h5 class="fw-bold">Expert Quranic Scholars</h5>
                    <p>Learn from experienced and qualified Quranic scholars who provide authentic and comprehensive guidance in Quran memorization, Tajweed (pronunciation), and Islamic teachings.</p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">
                    <span>02</span>
                    <h5 class="fw-bold">Personalized Learning Experience</h5>
                    <p>Enjoy a personalized learning journey tailored to your pace and needs, with one-on-one sessions and small group classes that ensure individual attention and progress.</p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">
                    <span>03</span>
                    <h5 class="fw-bold">Interactive and Engaging Classes</h5>
                    <p>Engage in interactive classes that utilize modern teaching methods and technology, fostering a deep understanding and love for the Quran through multimedia resources and engaging discussions.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Happy Students</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Courses</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Donation</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Teachers</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- WHAT WE OFFER -->
<div id="services" class="container-fluid activities">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h3 class="display-8 fw-bold text-secondary">WHAT WE OFFER</h3>
            <p class="fs-5 text-uppercase text-primary fw-bold">We Offer Effective Arabic & Quran Services</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn text-center" data-wow-delay="0.1s">
                    <i class="fa fa-book quran-icon fa-2x mb-3 text-info"></i>
                    <div class="ms-4">
                        <h5 class="fw-bold" id="service1">Online Quran Classes</h5>
                        <p class="mb-4">Engage in interactive online Quran classes focusing on memorization and recitation, tailored to your learning pace.</p>
                        <button id="readMoreBtn1" class="btn btn-primary px-3">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn text-center" data-wow-delay="0.3s">
                    <i class="fa fa-donate fa-2x mb-3 text-warning"></i>
                    <div class="ms-4">
                        <h5 class="fw-bold" id="service2">Charity & Donation</h5>
                        <p class="mb-4">Support our charitable initiatives and make a difference through various donation programs aimed at helping those in need.</p>
                        <button id="readMoreBtn2" class="btn btn-primary px-3">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn text-center" data-wow-delay="0.5s">
                    <i class="fa fa-book-open fa-2x mb-3 text-danger"></i>
                    <div class="ms-4">
                        <h5 class="fw-bold" id="service3">Tafseer Course</h5>
                        <p class="mb-4">Deepen your understanding of the Quran with our Tafseer course, which provides comprehensive explanations and insights into the verses.</p>
                        <button id="readMoreBtn3" class="btn btn-primary px-3">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn text-center" data-wow-delay="0.1s">
                    <i class="fa fa-graduation-cap fa-2x mb-3 text-primary"></i>
                    <div class="ms-4">
                        <h5 class="fw-bold" id="service4">We Value Our Students</h5>
                        <p class="mb-4">Our dedicated approach ensures that each student's progress is monitored and supported, emphasizing their personal growth and learning journey.</p>
                        <button id="readMoreBtn4" class="btn btn-primary px-3">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn text-center" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-2x mb-3 text-success"></i>
                    <div class="ms-4">
                        <h5 class="fw-bold" id="service5">Parent Education</h5>
                        <p class="mb-4">We offer educational programs for parents to enhance their understanding of Islamic teachings and support their children's learning.</p>
                        <button id="readMoreBtn5" class="btn btn-primary px-3">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="activities-item p-4 wow fadeIn text-center" data-wow-delay="0.5s">
                    <i class="fa fa-hand-holding-heart fa-2x mb-3 text-dark"></i>
                    <div class="ms-4">
                        <h5 class="fw-bold" id="service6">Community Outreach</h5>
                        <p class="mb-4">Participate in our community outreach programs designed to promote social harmony and support local initiatives.</p>
                        <button id="readMoreBtn6" class="btn btn-primary px-3">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card -->
<div class="container text-center section-bg">
    <div class="row g-4 align-items-center">
        <div class="col-lg-2 mb-3">
            <i class="fa fa-mosque fa-5x text-muted"></i>
        </div>
        <div class="col-lg-7 text-center mb-2">
            <h5 class="fw-bold">"Every Muslim needs to realize the importance of the 'Pillar' of Islam in nurturing spiritual growth, maintaining faith, and achieving personal fulfillment."</h5>
        </div>
        <div class="col-lg-3">
            <a href="" class="btn btn-light mb-2 py-2 px-4">Learn More</a>
        </div>
    </div>
</div>
<!-- Events Start -->
<section class="mt-3">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center mb-5">
            <h3 class="display-8 fw-bold text-secondary">Alhamdulillah</h3>
            <p class="fs-4 text-uppercase text-primary fw-semibold">We Have Reached Over</p>
        </div>
        <!-- First Event Section -->
        <div class="row g-4 mb-5 align-items-center">
            <div class="col-12 col-lg-8">
                <div class="p-4 rounded border border-light shadow-sm bg-light">
                    <h3 class="mb-3">Top Ratings On Trustpilot</h3>
                    <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="overflow-hidden rounded">
                    <img src="<?= base_url('assets/img/events-1.jpg') ?>" class="img-fluid" alt="Top Ratings Image">
                </div>
            </div>
        </div>
        <!-- Second Event Section -->
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-4">
                <div class="overflow-hidden rounded border border-light shadow-sm">
                    <img src="<?= base_url('assets/img/events-2.jpg') ?>" class="img-fluid" alt="Active Students Image">
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="p-4 rounded border border-light shadow-sm bg-light">
                    <h4 class="mb-3">Currently Active Students</h4>
                    <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Start -->
<section class="team section-bg">
    <div class="container testimonial">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h3 class="display-8 fw-bold text-secondary">Testimonials</h3>
            <p class="fs-5 text-uppercase text-primary fw-bold">
                What Our Students and Parents Say About Our Quran Academy
            </p>
        </div>
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="card bg-white border-0 shadow-sm w-100 d-flex flex-column">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <div class="position-absolute top-0 start-0 p-3">
                            <p class="text-success">Parent</p>
                        </div>
                        <div class="d-flex justify-content-center mb-4 mt-4">
                            <img src="<?= base_url('assets/img/review/1.Png') ?>" class="rounded-circle shadow-1-strong" width="100" height="100" />
                        </div>
                        <h5 class="mb-3 fw-bold text-primary">Aisha Khan</h5>
                        <ul class="list-unstyled d-flex justify-content-center mb-3">
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                        </ul>
                        <p class="card-text">
                            <i class="fas fa-quote-left pe-2"></i>"Enrolling my children in this online Quran academy has been one of the best decisions. The teachers are incredibly supportive, and the flexible online format fits perfectly with our busy schedule."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="card bg-white border-0 shadow-sm w-100 d-flex flex-column">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <div class="position-absolute top-0 start-0 p-3">
                            <h6 class="text-success">Student</h6>
                        </div>
                        <div class="d-flex justify-content-center mb-4 mt-4">
                            <img src="<?= base_url('assets/img/review/3.Png') ?>" class="rounded-circle shadow-1-strong" width="100" height="100" />
                        </div>
                        <h5 class="mb-3 fw-bold text-primary">Mohammed Ali</h5>
                        <ul class="list-unstyled d-flex justify-content-center mb-3">
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                        </ul>
                        <p class="card-text">
                            <i class="fas fa-quote-left pe-2"></i>"The online Quran classes have been exceptional. The interactive sessions and engaging teaching methods have made learning Quran enjoyable and effective."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="card bg-white border-0 shadow-sm w-100 d-flex flex-column">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <div class="position-absolute top-0 start-0 p-3">
                            <h6 class="text-success">Parent</h6>
                        </div>
                        <div class="d-flex justify-content-center mb-4 mt-4">
                            <img src="<?= base_url('assets/img/review/6.PNG') ?>" class="rounded-circle shadow-1-strong" width="100" height="100" />
                        </div>
                        <h5 class="mb-3 fw-bold text-primary">Fatima Zahra</h5>
                        <ul class="list-unstyled d-flex justify-content-center mb-3">
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="far fa-star fa-sm text-warning"></i></li>
                        </ul>
                        <p class="card-text">
                            <i class="fas fa-quote-left pe-2"></i>"Our experience with this online Quran academy has been wonderful. The structured classes and dedicated teachers have greatly enhanced my children's understanding and appreciation of the Quran."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="card bg-white border-0 shadow-sm w-100 d-flex flex-column">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <div class="position-absolute top-0 start-0 p-3">
                            <h6 class="text-success">Student</h6>
                        </div>
                        <div class="d-flex justify-content-center mb-4 mt-4">
                            <img src="<?= base_url('assets/img/review/4.png') ?>" class="rounded-circle shadow-1-strong" width="100" height="100" />
                        </div>
                        <h5 class="mb-3 fw-bold text-primary">Ahmed Noor</h5>
                        <ul class="list-unstyled d-flex justify-content-center mb-3">
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                        </ul>
                        <p class="card-text">
                            <i class="fas fa-quote-left pe-2"></i>"The online Quran academy offers a great balance of tradition and modernity. The flexibility of online learning, combined with the high quality of instruction, has truly enriched my Quranic studies."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= courses Section ======= -->
<section id="pricing" class="pricing">
    <div class="container">.
        <div class="section-title" style="padding-bottom:0;">
            <h2>Courses</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row text-center">
            <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php if (!empty($courses) && is_array($courses)): ?>
                        <?php
                        // Filter active courses
                        $activeCourses = array_filter($courses, function ($course) {
                            return $course['status'] === 'active';
                        });

                        if (!empty($activeCourses)):
                        ?>
                            <?php foreach (array_chunk($activeCourses, 3) as $index => $courseChunk): ?>
                                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                    <div class="row">
                                        <?php foreach ($courseChunk as $course): ?>
                                            <div class="col-lg-4 mb-4">
                                                <div class="card h-100 shadow-sm border">
                                                    <div class="card-img-top position-relative">
                                                        <img src="<?= base_url('assets/upload/courses/' . $course['cover_image']) ?>" class="img-fluid rounded-top mt-2" alt="image" style="height: 200px; object-fit: cover;">
                                                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-top" style="display: none;"></div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title fw-bold text-primary"><?= esc($course['course_name']) ?></h5>
                                                        <p class="card-text text-muted"><?= esc(substr($course['description'], 0, 120)) ?>...<a href="<?= base_url('course-detail/' . $course['course_id']) ?>" class="text-primary text-decoration-none">Read more</a></p>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h6 class="fw-bold mb-2">$<?= esc($course['price']) ?> <span class="text-muted">/month</span></h6>
                                                            <h6 class="fw-bold mb-2">Duration: <span class="text-muted"><?= esc($course['course_duration']) ?></span></h6>
                                                        </div>
                                                        <a href="<?= base_url('user/cources/registration') ?>" class="btn btn-outline-primary btn-block mt-3">Apply Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No active courses available.</p>
                        <?php endif; ?>
                    <?php else: ?>
                        <p>No courses available.</p>
                    <?php endif; ?>
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Team</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
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
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
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
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
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
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
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
<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

            <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                </div>
            </li>

        </ul>

    </div>
</section>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="mx-auto text-center mb-5">
                        <h5 class="fw-bold text-secondary">Leave a message!</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script>
    const baseUrl = '<?php echo base_url(); ?>';

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('button[id^="readMoreBtn"]').forEach(button => {
            button.addEventListener('click', function() {
                // Extract the ID from the associated h5 element
                const serviceId = this.closest('.activities-item').querySelector('h5').id;
                // Redirect to the detail page with the service ID
                window.location.href = `${baseUrl}/detail/${serviceId}`;
            });
        });
    });
</script>
<?= $this->endSection() ?>