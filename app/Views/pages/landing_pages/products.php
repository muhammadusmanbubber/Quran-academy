<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<style>
    .carousel {
        margin: 50px auto;
        /* padding: 0 70px; */
    }

    .carousel .item {
        color: #747d89;
        min-height: 325px;
        text-align: center;
        overflow: hidden;
    }

    .carousel .thumb-wrapper {
        padding: 25px 15px;
        background: #fff;
        border-radius: 6px;
        text-align: center;
        position: relative;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    }

    .carousel .item .img-box {
        height: 120px;
        margin-bottom: 20px;
        width: 100%;
        position: relative;
    }

    .carousel .item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }

    .carousel .item h4 {
        font-size: 18px;
    }

    .carousel .item h4,
    .carousel .item p,
    .carousel .item ul {
        margin-bottom: 5px;
    }

    .carousel .thumb-content .btn {
        color: #7ac400;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #7ac400;
        padding: 6px 14px;
        margin-top: 5px;
        line-height: 16px;
        border-radius: 20px;
    }

    .carousel .thumb-content .btn:hover,
    .carousel .thumb-content .btn:focus {
        color: #fff;
        background: #7ac400;
        box-shadow: none;
    }

    .carousel .thumb-content .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }

    .carousel .carousel-control {
        height: 44px;
        width: 40px;
        background: #7ac400;
        margin: auto 0;
        border-radius: 4px;
        opacity: 0.8;
    }

    .carousel .carousel-control:hover {
        background: #78bf00;
        opacity: 1;
    }

    .carousel .carousel-control i {
        font-size: 36px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -19px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: #fff;
        text-shadow: none;
        font-weight: bold;
    }

    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }

    .carousel .item-price strike {
        opacity: 0.7;
        margin-right: 5px;
    }

    .carousel .carousel-control.left i {
        margin-left: -2px;
    }

    .carousel .carousel-control.right i {
        margin-right: -4px;
    }

    .carousel .carousel-indicators {
        bottom: -50px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border: none;
    }

    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }

    .carousel .wish-icon {
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 99;
        cursor: pointer;
        font-size: 16px;
        color: #abb0b8;
    }

    .carousel .wish-icon .fa-heart {
        color: #ff6161;
    }

    .star-rating li {
        padding: 0;
    }

    .star-rating i {
        font-size: 14px;
        color: #ffc000;
    }
</style>
<div class="container" style="margin-top: 100px;">
        <div class="mx-auto text-center">
            <h3 class="display-8 fw-bold text-secondary">Islamic Products</h3>
        </div>
        <!-- Filters Row -->
        <div class="row mt-4">
            <!-- price range filter  -->
            <div class="col-lg-3 col-md-3">
                <div class="dropdown">
                    <label class="form-label passenger_form_label mb-1">Price Range</label>
                    <button class="text-start form-select passenger_form_select_input passenger_form_input rounded-pill price_range" type="button" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">
                        Price Range
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton12">
                        <li>
                            <div class="px-3 pb-1">
                                <div class="range-input">
                                    <input type="range" id="min_range" class="range-min products_search" min="0" max="2000" value="0" step="10">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Category filter  -->
            <div class="col-lg-3 col-md-3">
                <label class="form-label passenger_form_label mb-1">Categories</label>
                <select class="form-select passenger_form_select_input passenger_form_input rounded-pill all_category bg-white">
                    <option selected value="0">All Categories</option>
                    <option value="">1</option>
                </select>
            </div>
            <!-- search filter  -->
            <div class="col-lg-3 col-md-3">
                <label class="form-label passenger_form_label mb-1">Search Product</label>
                <input type="search" class="form-control passenger_form_input rounded-pill search_product" placeholder="Search">
            </div>
            <!-- Reset Filters  -->
            <div class="col-lg-3 col-md-3 mt-4">
                <a href="javascript:void(0)" class="btn btn-light rounded-pill reset_and_clear_btn text-center w-100">Reset Filters</a>
            </div>
        </div>
        <!-- Products Row -->
        <div class="row">
            <div class="col-lg-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/tasbi.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Islamic Tasbhi</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/sent.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Al-Madinah Sent</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/digital_tasbeeh.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Digital Tasbeeh</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/cap.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Namaz Cap</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/1.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Islamic Tasbhi</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/2.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Al-Madinah Sent</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/3.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Digital Tasbeeh</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/4.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Namaz Cap</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/5.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Islamic Tasbhi</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/6.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Al-Madinah Sent</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/tasbi.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Digital Tasbeeh</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="thumb-wrapper border">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="<?= base_url('assets/img/products/1.jpg') ?>" style="width: 180px;" alt="cap image">
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Namaz Cap</h4>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>