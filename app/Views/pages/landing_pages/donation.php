<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<!-- ======= Welcome Section ======= -->
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .hero {
        background: url('https://via.placeholder.com/1500x500') no-repeat center center;
        background-size: cover;
        color: white;
        text-align: center;
        padding: 60px 20px;
    }

    .hero h1 {
        font-size: 3rem;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .donation-card {
        transition: transform 0.3s;
    }

    .donation-card:hover {
        transform: scale(1.05);
    }

    .donation-section h2 {
        margin-bottom: 30px;
    }

    .donate-btn {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 0.5rem;
        transition: background-color 0.3s;
    }

    .donate-btn:hover {
        background-color: #0056b3;
    }

    .text-muted {
        color: #6c757d !important;
    }

    .carousel-indicators.custom-indicators {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    /* Custom style for carousel indicators */
    .carousel-indicators.custom-indicators li {
        width: 12px;
        height: 12px;
        background-color: #333;
        border-radius: 50%;
        margin: 0 4px;
        cursor: pointer;
    }

    /* Active indicator style */
    .carousel-indicators.custom-indicators .active {
        background-color: #007bff;
    }

    /* Hover effect for indicators */
    .carousel-indicators.custom-indicators li:hover {
        background-color: #0056b3;
    }
</style>
<!-- ======= Hero Section ======= -->
<div class="container d-flex align-items-center justify-content-center" style="margin-top: 100px;">
    <div class="mx-auto text-center">
        <!--success message-->
        <?php if (session()->get('success')) : ?>
            <div class="alert alert-success text-center mb-4">
                <?php echo session()->get('success'); ?>
            </div>
        <?php endif; ?>
        <!--fail message-->
        <?php if (session()->get('fail')) : ?>
            <div class="alert alert-danger text-center mb-4">
                <?php echo session()->get('fail'); ?>
            </div>
        <?php endif; ?>
        <h3 class="display-8 fw-bold text-secondary">Make a Difference Today</h3>
        <p class="text-muted">Your contribution can make a significant impact in various crucial areas. By donating to support poor families, you help provide essential resources like food, clothing, and medical care to those in need. Contributing to masques aids in the construction and maintenance of places where communities can come together for worship and fellowship. Supporting house-building projects ensures that families have safe and stable homes, giving them a foundation for a better future. Donations to our online madrasah fund help in providing quality education to children and adults, promoting learning and growth even in remote areas.Help the needy then Allah will help you.</p>
    </div>
</div>
<!-- ======= Donations icons section ======= -->
<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-book"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Essential Meal Packages</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-hospital"></i>
                    <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Emergency Medical Fund</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-eye"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Vision Restoration Program</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-person-badge"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Educational Sponsorship Fund</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-person-heart"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Orphan Support Initiative</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-person"></i>
                    <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Citizens Care Program</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-droplet"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Thalassemia Patient Fund</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box border shadow-sm">
                    <i class="bi bi-house"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="fw-bold">Displaced Families Fund</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Donation Table Section ======= -->
<div class="container p-3">
    <p class="fw-bold text-secondary text-center">Thematic Analysis of Donation Report</p>
    <div class="row">
        <table class="table table-bordered text-center">
            <thead>
                <tr class="align-middle table-success">
                    <th scope="col">Donation Type</th>
                    <th scope="col">Total Persons</th>
                    <th scope="col">Amount Raised</th>
                    <th scope="col">Amount Needed</th>
                    <th scope="col" style="width: 290px;">Progress</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Build a Safe Shelter</td>
                    <td>134</td>
                    <td>$10,000</td>
                    <td>$20,000</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </td>
                    <td><button class="mx-2"><a href="<?= base_url('donation-form') ?>">Donate<span class="fa fa-hand-holding-heart ms-2"></span></a></button></td>
                </tr>
                <tr>
                    <td>Feed a Hungry Household</td>
                    <td>203</td>
                    <td>$5,000</td>
                    <td>$15,000</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">33%</div>
                        </div>
                    </td>
                    <td><button class="mx-2"><a href="<?= base_url('donation-form') ?>">Donate<span class="fa fa-hand-holding-heart ms-2"></span></a></button></td>
                </tr>
                <tr>
                    <td>Educate a Future Leader</td>
                    <td>45</td>
                    <td>$8,000</td>
                    <td>$25,000</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 32%;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">32%</div>
                        </div>
                    </td>
                    <td><button class="mx-2"><a href="<?= base_url('donation-form') ?>">Donate<span class="fa fa-hand-holding-heart ms-2"></span></a></button></td>
                </tr>
                <tr>
                    <td>Free Quran Classes for the Needy</td>
                    <td>86</td>
                    <td>$7,000</td>
                    <td>$10,000</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </td>
                    <td><button class="mx-2"><a href="<?= base_url('donation-form') ?>">Donate<span class="fa fa-hand-holding-heart ms-2"></span></a></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- ======= Public Reviews Section ======= -->
<section class="bg-light py-5 mb-5">
    <div class="container">
        <h3 class="fw-bold text-secondary text-center">What People Are Saying</h3>
        <div class="row">
            <!-- Review 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-light">
                    <div class="card-body border rounded shadow-sm">
                        <h5 class="card-title fw-bold text-muted">John Doe</h5>
                        <p class="card-text">"I am truly inspired by the work being done. My donation to the masques project has made a real difference in the community."</p>
                    </div>
                </div>
            </div>
            <!-- Review 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-light">
                    <div class="card-body border rounded shadow-sm">
                        <h5 class="card-title fw-bold text-muted">Jane Smith</h5>
                        <p class="card-text">"Supporting the online madrasah was a great decision. It feels good to know that children are receiving quality education."</p>
                    </div>
                </div>
            </div>
            <!-- Review 3 -->
            <div class="col-md-4 mb-4">
                <div class="card border-light">
                    <div class="card-body border rounded shadow-sm">
                        <h5 class="card-title fw-bold text-muted">Michael Johnson</h5>
                        <p class="card-text">"The transparency and impact of your work are commendable. Happy to support building homes for families in need."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Donation Section ======= -->
<div class="container p-3 bg-light mt-3 rounded  border">
    <div class="row">
        <div class="col-lg-8 col-xl-7">
            <div class="team-item wow fadeIn">
                <!-- Heading -->
                <h3 class="fw-bold text-secondary text-center">Feed a Hungry Household</h3>
                <p class="mb-4 text-center">Feeding a hungry household is more than just providing food; it's about offering hope and comfort to families in their most challenging times. Many families struggle daily to secure their next meal, and your generous contribution can make a significant difference. By supporting this cause, you help ensure that no family goes to bed hungry, and you provide them with the essential nutrition they need to lead healthy and fulfilling lives.</p>
                <p class="mb-4 text-center">Your kindness can transform the lives of those who need it most, offering them a chance for a brighter and more secure future. Every meal shared is a step towards ending hunger and building a stronger, more compassionate community.</p>
                <!-- Highlighted Features -->
                <ul class="list-unstyled mb-4">
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Providing nutritious meals to those in need.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Supporting families to overcome hunger and malnutrition.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Promoting a community effort to fight food insecurity.</li>
                </ul>
                <!-- Call to Action -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('donation-form') ?>">
                        <button class="btn btn-primary">
                            Donate Now <span class="fa fa-hand-holding-heart ms-2"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-5">
            <!-- Bootstrap Carousel -->
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner mt-5">
                    <div class="carousel-item active">
                        <img src="assets/img/donation/food/donation1.png" class="d-block w-100 img-fluid rounded" alt="Image 1" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/food/donation5.png" class="d-block w-100 img-fluid rounded" alt="Image 2" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/food/donation3.png" class="d-block w-100 img-fluid rounded" alt="Image 3" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/food/donation4.png" class="d-block w-100 img-fluid rounded" alt="Image 4" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/food/donation5.png" class="d-block w-100 img-fluid rounded" alt="Image 5" style="height: 350px; object-fit: cover;">
                    </div>
                </div>
                <!-- Carousel Indicators -->
                <div class="carousel-indicators position-relative" style="bottom: -20px;">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5" style="background-color: blue;"></button>
                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container p-3 bg-light mt-3 rounded border">
    <div class="row">
        <div class="col-lg-3 col-xl-5">
            <!-- Bootstrap Carousel -->
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner mt-5">
                    <div class="carousel-item active">
                        <img src="assets/img/donation/shelter/shelter1.png" class="d-block w-100 img-fluid rounded" alt="Image 1" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/shelter/shelter2.png" class="d-block w-100 img-fluid rounded" alt="Image 2" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/shelter/shelter3.png" class="d-block w-100 img-fluid rounded" alt="Image 3" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/shelter/shelter4.png" class="d-block w-100 img-fluid rounded" alt="Image 4" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/shelter/shelter5.png" class="d-block w-100 img-fluid rounded" alt="Image 5" style="height: 350px; object-fit: cover;">
                    </div>
                </div>
                <!-- Carousel Indicators -->
                <div class="carousel-indicators position-relative" style="bottom: -20px;">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5" style="background-color: blue;"></button>
                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-8 col-xl-7">
            <div class="team-item wow fadeIn">
                <!-- Heading -->
                <h3 class="fw-bold text-secondary text-center">Build a Safe Shelter</h3>
                <p class="mb-4 text-center">Building a safe shelter is about more than just providing a roof over someone's head; it's about offering protection, dignity, and a sense of belonging to those in need. Many individuals and families are left without a secure place to call home due to natural disasters, economic hardship, or conflict. Your support in building safe shelters can provide them with a stable environment to rebuild their lives, ensuring safety and security for vulnerable populations.</p>
                <p class="mb-4 text-center">Every contribution helps create a safe space where families can live without fear and uncertainty. By supporting this cause, you help build a future where everyone has access to a secure and welcoming place to call home.</p>
                <!-- Highlighted Features -->
                <ul class="list-unstyled mb-4">
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Providing secure and stable housing for those in need.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Protecting vulnerable populations from harsh conditions.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Promoting safety, dignity, and community support.</li>
                </ul>
                <!-- Call to Action -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('donation-form') ?>">
                        <button class="btn btn-primary">
                            Donate Now <span class="fa fa-hand-holding-heart ms-2"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container p-3 bg-light mt-3 rounded border">
    <div class="row">
        <div class="col-lg-8 col-xl-7">
            <div class="team-item wow fadeIn">
                <!-- Heading -->
                <h3 class="fw-bold text-secondary text-center">Educate a Future Leader</h3>
                <p class="mb-4 text-center">Educating a future leader is about more than imparting knowledge; it's about shaping minds, building character, and inspiring the next generation to reach their full potential. Education is the foundation upon which leaders are built, providing them with the tools and skills they need to make a positive impact in their communities and the world. Your support can help provide access to quality education, ensuring every child has the opportunity to learn, grow, and lead.</p>
                <p class="mb-4 text-center">By investing in education, you are not just helping an individual but empowering a whole generation to rise above their circumstances, think critically, and drive meaningful change. Let's work together to build a brighter, more informed future for all.</p>
                <!-- Highlighted Features -->
                <ul class="list-unstyled mb-4">
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Providing access to quality education for underprivileged children.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Encouraging critical thinking and leadership skills.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Building a foundation for a brighter and more informed future.</li>
                </ul>
                <!-- Call to Action -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('donation-form') ?>">
                        <button class="btn btn-primary">
                            Donate Now <span class="fa fa-hand-holding-heart ms-2"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-5">
            <!-- Bootstrap Carousel -->
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner mt-5">
                    <div class="carousel-item active">
                        <img src="assets/img/donation/education/education1.png" class="d-block w-100 img-fluid rounded" alt="Image 1" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/education/education2.png" class="d-block w-100 img-fluid rounded" alt="Image 2" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/education/education3.png" class="d-block w-100 img-fluid rounded" alt="Image 3" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/education/education4.png" class="d-block w-100 img-fluid rounded" alt="Image 4" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/education/education5.png" class="d-block w-100 img-fluid rounded" alt="Image 5" style="height: 350px; object-fit: cover;">
                    </div>
                </div>
                <!-- Carousel Indicators -->
                <div class="carousel-indicators position-relative" style="bottom: -20px;">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5" style="background-color: blue;"></button>
                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container p-3 bg-light mt-3 rounded border">
    <div class="row">
        <div class="col-lg-3 col-xl-5">
            <!-- Bootstrap Carousel -->
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner mt-5">
                    <div class="carousel-item active">
                        <img src="assets/img/donation/academy/quran1.png" class="d-block w-100 img-fluid rounded" alt="Image 1" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/academy/quran2.png" class="d-block w-100 img-fluid rounded" alt="Image 2" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/academy/quran3.png" class="d-block w-100 img-fluid rounded" alt="Image 3" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/academy/quran4.png" class="d-block w-100 img-fluid rounded" alt="Image 4" style="height: 350px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/donation/academy/quran5.png" class="d-block w-100 img-fluid rounded" alt="Image 5" style="height: 350px; object-fit: cover;">
                    </div>
                </div>
                <!-- Carousel Indicators -->
                <div class="carousel-indicators position-relative" style="bottom: -20px;">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4" style="background-color: blue;"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5" style="background-color: blue;"></button>
                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-8 col-xl-7">
            <div class="team-item wow fadeIn">
                <!-- Heading -->
                <h3 class="fw-bold text-secondary text-center">Free Quran Classes for the Needy</h3>
                <p class="mb-4 text-center">At our Online Quran Academy, we believe that the teachings of the Quran should be accessible to everyone, regardless of their financial situation. Many individuals and families face economic hardships that prevent them from affording education. Your generous donation can help us provide free Quran classes to those who need them most, ensuring that they have the opportunity to learn, grow, and connect with their faith.</p>
                <p class="mb-4 text-center">By supporting this initiative, you contribute to spreading knowledge and empowering individuals with the teachings of the Quran. Your support helps bridge the gap for those who are eager to learn but unable to afford the tuition, fostering a community united by faith and knowledge.</p>
                <!-- Highlighted Features -->
                <ul class="list-unstyled mb-4">
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Providing free access to Quranic education for those in need.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Supporting students who lack the means to afford tuition fees.</li>
                    <li><i class="fa fa-check-circle text-primary me-2"></i> Promoting the spread of Quranic knowledge and spiritual growth.</li>
                </ul>
                <!-- Call to Action -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('donation-form') ?>">
                        <button class="btn btn-primary">
                            Donate Now <span class="fa fa-hand-holding-heart ms-2"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>