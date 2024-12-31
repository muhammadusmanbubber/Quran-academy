<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- Detail Content -->
<section class="mt-5">
    <div class="container <?= ($serviceId === 'service1') ? '' : 'd-none' ?>" id="service1">
        <div class="text-center mb-5">
            <h3 class="display-8 fw-bold text-secondary">Online Quran Classes</h3>
            <p class="lead">Discover a flexible and comprehensive approach to learning the Quran from the comfort of your home.</p>
        </div>
        <div class="row g-4">
            <!-- About Our Classes -->
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h4 class="fw-bold mb-3">About Our Classes</h4>
                <p>Our Online Quran Classes are tailored to provide a flexible and individualized learning experience. Whether you're starting out or seeking to improve your recitation, our platform offers a thorough and engaging approach to Quranic education.</p>
                <p>Enjoy interactive sessions with skilled tutors who provide personalized feedback, helping you enhance your understanding and recitation of the Quran from the comfort of your home.</p>
                <div class="text-center mt-3">
                    <a href="<?= base_url('#') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-email me-2"></i>Schedule a Free Trial</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 mb-4 ps-lg-5">
                <img src="<?= base_url('assets/img/hero.png') ?>" style="max-width: 400px;" alt="Online Quran Classes">
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-12">
                <h4 class="fw-bold mb-3">Why Choose Us?</h4>
                <p>Our Online Quran Classes offer a rich and rewarding learning experience. Here’s why you should choose us:</p>
                <ul>
                    <li>Expert tutors provide personalized guidance to help you meet your learning objectives.</li>
                    <li>Flexible scheduling options make it easy to fit classes into your busy life.</li>
                    <li>Interactive sessions ensure engaging and effective learning.</li>
                    <li>Personalized feedback helps you continuously improve.</li>
                    <li>Our structured curriculum covers all levels, from beginners to advanced.</li>
                </ul>
                <p>Experience our dedicated approach to Quranic education. Start your journey with us today and make meaningful progress in your Quran studies.</p>
            </div>
        </div>
        <div class="row g-4 bg-light">
            <!-- Testimonials -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">What Our Students Say</h4>
                <div class="testimonial">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-primary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The online Quran classes have been life-changing. The flexibility and quality of teaching are exceptional. Highly recommend!"</p>
                            <footer class="blockquote-footer mt-1">Ayesha Khan</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-success mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"Interactive sessions and personalized feedback have significantly improved my recitation. The tutors are both knowledgeable and supportive."</p>
                            <footer class="blockquote-footer mt-1">Farhan Ali</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user-circle fa-2x me-3 text-secondary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The classes have been excellent. The detailed feedback and interactive sessions have greatly enhanced my learning experience."</p>
                            <footer class="blockquote-footer mt-1">Mohammed Usman</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- Detailed Curriculum -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Curriculum Overview</h4>
                <p>Our curriculum is meticulously designed to offer a well-rounded learning experience. Here's a brief overview:</p>
                <div class="accordion" id="curriculumAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingBeginner">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBeginner" aria-expanded="true" aria-controls="collapseBeginner">
                                Beginner Level
                            </button>
                        </h2>
                        <div id="collapseBeginner" class="accordion-collapse collapse show" aria-labelledby="headingBeginner" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                Basics of Quranic Arabic, pronunciation, and memorization of short surahs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingIntermediate">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIntermediate" aria-expanded="false" aria-controls="collapseIntermediate">
                                Intermediate Level
                            </button>
                        </h2>
                        <div id="collapseIntermediate" class="accordion-collapse collapse" aria-labelledby="headingIntermediate" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                Advanced pronunciation, memorization of longer surahs, and introduction to Tafseer.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAdvanced">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdvanced" aria-expanded="false" aria-controls="collapseAdvanced">
                                Advanced Level
                            </button>
                        </h2>
                        <div id="collapseAdvanced" class="accordion-collapse collapse" aria-labelledby="headingAdvanced" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                Detailed Tafseer, memorization of Juz’ Amma, and comprehensive Quran revision.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Unique Benefits -->
        <div class="row mt-5">
            <div class="text-center">
                <h3 class="fw-bold">Start Your Journey Today</h3>
                <p class="lead">Get in touch to schedule your free trial class and discover the advantages of our online Quran classes.</p>
                <a href="<?= base_url('#') ?>" class="btn btn-primary mt-2 w-48">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="container <?= ($serviceId === 'service2') ? '' : 'd-none' ?>" id="service2">
        <div class="text-center mb-5">
            <h3 class="display-8 fw-bold text-secondary">Charity & Donation</h3>
            <p class="lead">Support our initiatives and make a difference in the lives of those in need through our charity and donation programs.</p>
        </div>
        <div class="row g-4">
            <!-- About Our Charity Programs -->
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h4 class="fw-bold mb-3">About Our Charity Programs</h4>
                <p>Our charity programs are designed to provide support and assistance to those who need it most. We manage various donation drives and initiatives to address critical needs in the community.</p>
                <p>Whether it's providing food, shelter, or education, our programs are committed to making a tangible difference in people's lives. Join us in our mission to help those in need and bring positive change.</p>
                <div class="text-center mt-3">
                    <a href="<?= base_url('#') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-email me-2"></i>Get Involved</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 mb-4 ps-lg-5">
                <img src="<?= base_url('assets/img/avatar/1.png') ?>" style="max-width: 400px;" alt="Charity & Donation">
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-12">
                <h4 class="fw-bold mb-3">Why Support Us?</h4>
                <p>Here’s why supporting our charity and donation programs is impactful:</p>
                <ul>
                    <li>Your contributions go directly to those in need, making a real difference.</li>
                    <li>We ensure transparency and accountability in all our projects.</li>
                    <li>Various donation options are available to suit your preferences.</li>
                    <li>Our initiatives address a range of needs, from immediate relief to long-term support.</li>
                    <li>Be part of a community dedicated to positive change and humanitarian efforts.</li>
                </ul>
                <p>Get involved today and help us continue our mission to support and uplift those in need.</p>
            </div>
        </div>
        <div class="row g-4 bg-light">
            <!-- Testimonials -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">What Our Supporters Say</h4>
                <div class="testimonial">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-primary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"Supporting this charity has been incredibly fulfilling. Their transparency and impact are commendable. Highly recommend contributing!"</p>
                            <footer class="blockquote-footer mt-1">Sarah Ahmed</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-success mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"I appreciate the way this organization handles donations. They make sure every contribution reaches those who need it most."</p>
                            <footer class="blockquote-footer mt-1">Omar Khan</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user-circle fa-2x me-3 text-secondary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The charity programs are well-organized and impactful. It’s gratifying to see the difference our donations make."</p>
                            <footer class="blockquote-footer mt-1">Hafsa Ali</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- Detailed Programs -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Our Charity Programs</h4>
                <p>Explore the various programs we manage and support:</p>
                <div class="accordion" id="programsAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFood">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFood" aria-expanded="true" aria-controls="collapseFood">
                                Food Distribution
                            </button>
                        </h2>
                        <div id="collapseFood" class="accordion-collapse collapse show" aria-labelledby="headingFood" data-bs-parent="#programsAccordion">
                            <div class="accordion-body">
                                We organize regular food drives to provide essential nourishment to families in need.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEducation">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducation" aria-expanded="false" aria-controls="collapseEducation">
                                Educational Support
                            </button>
                        </h2>
                        <div id="collapseEducation" class="accordion-collapse collapse" aria-labelledby="headingEducation" data-bs-parent="#programsAccordion">
                            <div class="accordion-body">
                                Our programs provide educational materials and support to underprivileged children to help them pursue their studies.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingShelter">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShelter" aria-expanded="false" aria-controls="collapseShelter">
                                Shelter Assistance
                            </button>
                        </h2>
                        <div id="collapseShelter" class="accordion-collapse collapse" aria-labelledby="headingShelter" data-bs-parent="#programsAccordion">
                            <div class="accordion-body">
                                We provide temporary shelter and support to those facing homelessness or displacement.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Unique Benefits -->
        <div class="row mt-5">
            <div class="text-center">
                <h3 class="fw-bold">Make an Impact Today</h3>
                <p class="lead">Join us in our mission to support those in need. Your contributions and involvement can create lasting change.</p>
                <a href="<?= base_url('#') ?>" class="btn btn-primary mt-2 w-48">Get Involved</a>
            </div>
        </div>
    </div>
    <div class="container <?= ($serviceId === 'service3') ? '' : 'd-none' ?>" id="service3">
        <div class="text-center mb-5">
            <h3 class="display-8 fw-bold text-secondary">Tafseer Course</h3>
            <p class="lead">Deepen your understanding of the Quran with our Tafseer course, which provides comprehensive explanations and insights into the verses.</p>
        </div>
        <div class="row g-4">
            <!-- About the Course -->
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h4 class="fw-bold mb-3">About the Tafseer Course</h4>
                <p>Our Tafseer course is designed to provide an in-depth understanding of the Quranic text. The course covers the meanings, contexts, and interpretations of various verses to enhance your comprehension and application of Quranic teachings.</p>
                <p>With expert instructors and a well-structured curriculum, you will explore the principles of Tafseer, gain insights into the historical and linguistic context of the Quran, and develop a deeper connection with the holy text.</p>
                <div class="text-center mt-3">
                    <a href="<?= base_url('#') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-book-open me-2"></i>Enroll Now</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 mb-4 ps-lg-5">
                <img src="<?= base_url('assets/img/tafsir_course.png') ?>" style="max-width: 400px;" alt="Tafseer Course">
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-12">
                <h4 class="fw-bold mb-3">Why Join Our Tafseer Course?</h4>
                <p>Here’s why our Tafseer course stands out:</p>
                <ul>
                    <li>Comprehensive explanations of Quranic verses to deepen your understanding.</li>
                    <li>Expert instructors with extensive knowledge of Tafseer.</li>
                    <li>Interactive sessions to engage with the text and ask questions.</li>
                    <li>Structured curriculum covering various aspects of Tafseer.</li>
                    <li>Flexible learning options to fit your schedule.</li>
                </ul>
                <p>Join our course to explore the profound meanings of the Quran and enhance your spiritual journey.</p>
            </div>
        </div>
        <div class="row g-4 bg-light">
            <!-- Testimonials -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">What Our Students Say</h4>
                <div class="testimonial">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-primary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The Tafseer course has transformed my understanding of the Quran. The insights provided by the instructors are invaluable. Highly recommended!"</p>
                            <footer class="blockquote-footer mt-1">Fatima Ali</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-success mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The course is well-structured and the explanations are clear. It has greatly enhanced my knowledge of Quranic interpretations."</p>
                            <footer class="blockquote-footer mt-1">Ahmed Khan</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user-circle fa-2x me-3 text-secondary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"I appreciate the depth of analysis in this Tafseer course. It has provided me with a better understanding of the Quran and its teachings."</p>
                            <footer class="blockquote-footer mt-1">Aisha Noor</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- Course Curriculum -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Course Curriculum</h4>
                <p>The Tafseer course is divided into several modules, each focusing on different aspects of Quranic interpretation:</p>
                <div class="accordion" id="curriculumAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingIntroduction">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIntroduction" aria-expanded="true" aria-controls="collapseIntroduction">
                                Introduction to Tafseer
                            </button>
                        </h2>
                        <div id="collapseIntroduction" class="accordion-collapse collapse show" aria-labelledby="headingIntroduction" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                Overview of Tafseer principles, history, and methodology.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext" aria-expanded="false" aria-controls="collapseContext">
                                Historical and Linguistic Context
                            </button>
                        </h2>
                        <div id="collapseContext" class="accordion-collapse collapse" aria-labelledby="headingContext" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                Exploration of the historical context and linguistic nuances of Quranic verses.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingApplication">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseApplication" aria-expanded="false" aria-controls="collapseApplication">
                                Application and Reflection
                            </button>
                        </h2>
                        <div id="collapseApplication" class="accordion-collapse collapse" aria-labelledby="headingApplication" data-bs-parent="#curriculumAccordion">
                            <div class="accordion-body">
                                How to apply Tafseer insights to everyday life and personal reflection.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="text-center">
                <h3 class="fw-bold">Join Our Tafseer Course Today</h3>
                <p class="lead">Enhance your understanding of the Quran with our in-depth Tafseer course. Enroll now and start your journey towards greater spiritual knowledge.</p>
                <a href="<?= base_url('#') ?>" class="btn btn-primary mt-2 w-48">Enroll Now</a>
            </div>
        </div>
    </div>
    <div class="container <?= ($serviceId === 'service4') ? '' : 'd-none' ?>" id="service4">
        <div class="text-center mb-5">
            <h3 class="display-8 fw-bold text-secondary">We Value Our Students</h3>
            <p class="lead">Our dedicated approach ensures that each student's progress is monitored and supported, emphasizing their personal growth and learning journey.</p>
        </div>
        <div class="row g-4">
            <!-- Student Support -->
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h4 class="fw-bold mb-3">Comprehensive Student Support</h4>
                <p>We are committed to providing personalized support to each of our students. Our dedicated team of instructors and advisors works closely with students to track their progress, address their needs, and offer guidance throughout their learning journey.</p>
                <p>From one-on-one sessions to group discussions, we ensure that every student receives the attention they need to thrive. Our support system includes regular feedback, progress reports, and tailored assistance to help students achieve their goals.</p>
                <div class="text-center mt-3">
                    <a href="<?= base_url('#') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-account-check me-2"></i>Get in Touch</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 mb-4 ps-lg-5">
                <img src="<?= base_url('assets/img/student_support.png') ?>" style="max-width: 400px;" alt="Student Support">
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-12">
                <h4 class="fw-bold mb-3">Our Approach to Student Growth</h4>
                <p>Our approach is centered around fostering a supportive and nurturing environment where students can grow and excel. Here’s how we support our students:</p>
                <ul>
                    <li>**Personalized Learning Plans**: Tailored to meet each student's unique needs and learning pace.</li>
                    <li>**Regular Check-ins**: Frequent assessments and feedback to monitor progress and address any challenges.</li>
                    <li>**Dedicated Mentors**: Experienced instructors who provide individualized support and encouragement.</li>
                    <li>**Interactive Learning**: Engaging methods and resources that enhance the learning experience.</li>
                    <li>**Community Support**: A supportive community where students can connect, share, and grow together.</li>
                </ul>
                <p>Our goal is to empower every student to reach their full potential and make meaningful progress in their learning journey.</p>
            </div>
        </div>
        <div class="row g-4 bg-light">
            <!-- Success Stories -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Success Stories</h4>
                <div class="testimonial">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-primary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The personalized support I received was incredible. The guidance and feedback helped me overcome my challenges and achieve my goals."</p>
                            <footer class="blockquote-footer mt-1">Zara Ahmed</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-success mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The regular check-ins and one-on-one sessions made a huge difference in my learning experience. The support team truly cares about each student's success."</p>
                            <footer class="blockquote-footer mt-1">Omar Khan</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user-circle fa-2x me-3 text-secondary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"I felt valued and supported throughout my learning journey. The interactive learning methods kept me engaged and motivated."</p>
                            <footer class="blockquote-footer mt-1">Fatima Noor</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- Additional Resources -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Additional Resources</h4>
                <p>We provide a range of additional resources to further support our students:</p>
                <div class="accordion" id="resourcesAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingResource1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResource1" aria-expanded="true" aria-controls="collapseResource1">
                                Resource Center
                            </button>
                        </h2>
                        <div id="collapseResource1" class="accordion-collapse collapse show" aria-labelledby="headingResource1" data-bs-parent="#resourcesAccordion">
                            <div class="accordion-body">
                                Access to a variety of learning materials, including guides, tutorials, and practice exercises.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingResource2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResource2" aria-expanded="false" aria-controls="collapseResource2">
                                Study Groups
                            </button>
                        </h2>
                        <div id="collapseResource2" class="accordion-collapse collapse" aria-labelledby="headingResource2" data-bs-parent="#resourcesAccordion">
                            <div class="accordion-body">
                                Join study groups with peers to collaborate and discuss course material.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingResource3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResource3" aria-expanded="false" aria-controls="collapseResource3">
                                Online Workshops
                            </button>
                        </h2>
                        <div id="collapseResource3" class="accordion-collapse collapse" aria-labelledby="headingResource3" data-bs-parent="#resourcesAccordion">
                            <div class="accordion-body">
                                Participate in workshops to deepen your understanding of key topics and skills.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="text-center">
                <h3 class="fw-bold">Experience Our Support</h3>
                <p class="lead">Join our community and benefit from our dedicated approach to student support. Get in touch with us today to learn more and start your journey.</p>
                <a href="<?= base_url('#') ?>" class="btn btn-primary mt-2 w-48">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="container <?= ($serviceId === 'service5') ? '' : 'd-none' ?>" id="service5">
        <div class="text-center mb-5">
            <h3 class="display-8 fw-bold text-secondary">Parent Education</h3>
            <p class="lead">We offer educational programs for parents to enhance their understanding of Islamic teachings and support their children's learning.</p>
        </div>
        <div class="row g-4">
            <!-- Program Overview -->
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h4 class="fw-bold mb-3">Program Overview</h4>
                <p>Our Parent Education programs are designed to empower parents with the knowledge and skills needed to support their children’s Islamic education. These programs provide valuable insights into Islamic teachings, parenting techniques, and effective strategies for fostering a supportive learning environment at home.</p>
                <p>By participating in our programs, parents will gain a deeper understanding of the principles and practices of Islam, enhancing their ability to guide and support their children in their spiritual and educational journey.</p>
                <div class="text-center mt-3">
                    <a href="<?= base_url('#') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-book-open-page-variant me-2"></i>Learn More</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 mb-4 ps-lg-5">
                <img src="<?= base_url('assets/img/parent_education.png') ?>" style="max-width: 400px;" alt="Parent Education">
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-12">
                <h4 class="fw-bold mb-3">Benefits of Parent Education</h4>
                <p>Our programs offer numerous benefits for parents, including:</p>
                <ul>
                    <li>**Enhanced Understanding**: Gain a comprehensive understanding of Islamic teachings and their application in daily life.</li>
                    <li>**Effective Parenting Strategies**: Learn practical strategies to support and guide your children's learning and development.</li>
                    <li>**Improved Communication**: Develop skills to foster open and effective communication with your children.</li>
                    <li>**Supportive Learning Environment**: Create a nurturing environment that supports your children's educational and spiritual growth.</li>
                    <li>**Community Connection**: Engage with other parents and build a supportive network within the community.</li>
                </ul>
                <p>Join our Parent Education programs to enrich your knowledge and become a more effective guide for your children's learning journey.</p>
            </div>
        </div>
        <div class="row g-4 bg-light">
            <!-- Testimonials -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">What Parents Say</h4>
                <div class="testimonial">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-primary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The Parent Education program has been incredibly insightful. It has helped me better understand how to support my child's Islamic education and foster a positive learning environment at home."</p>
                            <footer class="blockquote-footer mt-1">Fatima Ibrahim</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-success mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"I gained valuable knowledge and practical skills that have made a significant difference in how I support my children’s learning. The program was well-structured and engaging."</p>
                            <footer class="blockquote-footer mt-1">Ali Hassan</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user-circle fa-2x me-3 text-secondary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The insights I gained from the Parent Education program have been instrumental in enhancing my parenting approach and strengthening my relationship with my children."</p>
                            <footer class="blockquote-footer mt-1">Aisha Malik</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- Additional Resources -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Additional Resources</h4>
                <p>We provide a range of resources to support parents:</p>
                <div class="accordion" id="resourcesAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingResource1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResource1" aria-expanded="true" aria-controls="collapseResource1">
                                Educational Guides
                            </button>
                        </h2>
                        <div id="collapseResource1" class="accordion-collapse collapse show" aria-labelledby="headingResource1" data-bs-parent="#resourcesAccordion">
                            <div class="accordion-body">
                                Access comprehensive guides and materials on Islamic teachings and parenting techniques.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingResource2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResource2" aria-expanded="false" aria-controls="collapseResource2">
                                Online Workshops
                            </button>
                        </h2>
                        <div id="collapseResource2" class="accordion-collapse collapse" aria-labelledby="headingResource2" data-bs-parent="#resourcesAccordion">
                            <div class="accordion-body">
                                Participate in interactive workshops to enhance your understanding and skills.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingResource3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResource3" aria-expanded="false" aria-controls="collapseResource3">
                                Support Forums
                            </button>
                        </h2>
                        <div id="collapseResource3" class="accordion-collapse collapse" aria-labelledby="headingResource3" data-bs-parent="#resourcesAccordion">
                            <div class="accordion-body">
                                Join forums to connect with other parents and share experiences and advice.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="text-center">
                <h3 class="fw-bold">Enhance Your Parenting Journey</h3>
                <p class="lead">Join our Parent Education programs to enrich your knowledge and support your child's learning and growth. Contact us to get started.</p>
                <a href="<?= base_url('#') ?>" class="btn btn-primary mt-2 w-48">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="container <?= ($serviceId === 'service6') ? '' : 'd-none' ?>" id="service6">
        <div class="text-center mb-5">
            <h3 class="display-8 fw-bold text-secondary">Community Outreach Programs</h3>
            <p class="lead">Join us in our efforts to foster social harmony and make a positive impact on our local communities through a range of outreach initiatives.</p>
        </div>
        <div class="row g-4">
            <!-- Program Highlights -->
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h4 class="fw-bold mb-3">Program Highlights</h4>
                <p>Our Community Outreach Programs are designed to address various social needs and promote positive change. Here's what you can expect:</p>
                <ul>
                    <li>Engaging activities and events aimed at supporting local causes.</li>
                    <li>Collaboration with local organizations and volunteers.</li>
                    <li>Opportunities to contribute to initiatives such as food drives, educational workshops, and environmental clean-ups.</li>
                    <li>Programs tailored to different community needs and interests.</li>
                </ul>
                <div class="text-center mt-3">
                    <a href="<?= base_url('#') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-calendar-plus me-2"></i>Get Involved</a>
                </div>
            </div>
            <!-- Impact Image -->
            <div class="col-lg-6 mb-4 ps-lg-5">
                <img src="<?= base_url('assets/img/community_outreach.png') ?>" style="max-width: 400px;" alt="Community Outreach Programs">
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-12">
                <h4 class="fw-bold mb-3">Why Participate?</h4>
                <p>Participating in our community outreach programs offers numerous benefits:</p>
                <ul>
                    <li>Make a tangible difference in your community.</li>
                    <li>Develop new skills and gain valuable experience.</li>
                    <li>Meet and collaborate with like-minded individuals.</li>
                    <li>Enhance your personal growth and social responsibility.</li>
                    <li>Experience the fulfillment of contributing to meaningful causes.</li>
                </ul>
                <p>Be part of something bigger and help us create a positive impact. Your involvement can lead to significant changes in our community.</p>
            </div>
        </div>
        <div class="row g-4 bg-light">
            <!-- Volunteer Testimonials -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">What Volunteers Say</h4>
                <div class="testimonial">
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-primary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"Volunteering with the outreach programs has been a truly rewarding experience. I’ve met amazing people and made a real difference in our community."</p>
                            <footer class="blockquote-footer mt-1">Sarah Ahmed</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-user-circle fa-2x me-3 text-success mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"The programs are well-organized and impactful. It’s incredible to see the positive changes we’re making together."</p>
                            <footer class="blockquote-footer mt-1">Hassan Ali</footer>
                        </blockquote>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user-circle fa-2x me-3 text-secondary mb-4"></i>
                        <blockquote class="blockquote mb-0">
                            <p class="fs-6 mb-0">"Being involved in community outreach has broadened my perspective and connected me with many wonderful people. I highly recommend getting involved."</p>
                            <footer class="blockquote-footer mt-1">Laila Khan</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- Upcoming Events -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Upcoming Events</h4>
                <p>Check out our upcoming community outreach events and find out how you can participate:</p>
                <div class="accordion" id="eventsAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEvent1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvent1" aria-expanded="true" aria-controls="collapseEvent1">
                                Food Drive - September 15, 2024
                            </button>
                        </h2>
                        <div id="collapseEvent1" class="accordion-collapse collapse show" aria-labelledby="headingEvent1" data-bs-parent="#eventsAccordion">
                            <div class="accordion-body">
                                Join us in collecting and distributing food to those in need. Volunteers will help with sorting, packing, and distribution.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEvent2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvent2" aria-expanded="false" aria-controls="collapseEvent2">
                                Environmental Clean-Up - October 5, 2024
                            </button>
                        </h2>
                        <div id="collapseEvent2" class="accordion-collapse collapse" aria-labelledby="headingEvent2" data-bs-parent="#eventsAccordion">
                            <div class="accordion-body">
                                Help us clean up local parks and neighborhoods. Gloves, trash bags, and refreshments will be provided.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEvent3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvent3" aria-expanded="false" aria-controls="collapseEvent3">
                                Educational Workshop - November 10, 2024
                            </button>
                        </h2>
                        <div id="collapseEvent3" class="accordion-collapse collapse" aria-labelledby="headingEvent3" data-bs-parent="#eventsAccordion">
                            <div class="accordion-body">
                                Participate in workshops aimed at providing essential skills and knowledge to the community. Topics will include financial literacy, job readiness, and more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Join Us Call to Action -->
        <div class="row mt-5">
            <div class="text-center">
                <h3 class="fw-bold">Get Involved Today</h3>
                <p class="lead">Ready to make a difference? Contact us to learn more about our programs and how you can contribute to our community outreach efforts.</p>
                <a href="<?= base_url('#') ?>" class="btn btn-primary mt-2 w-48">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the service ID from the PHP variable
        const serviceId = '<?= $serviceId; ?>';
        if (serviceId) {
            // Scroll to the section with the corresponding ID
            const section = document.getElementById(serviceId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
</script>
<?= $this->endSection() ?>