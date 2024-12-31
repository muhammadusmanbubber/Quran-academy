<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<!--======= Pricing Section ======= -->
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">All Products List</h2>
            <a href="<?= base_url('admin/products/add-product') ?>" class="btn btn-success mb-4">Add Product</a>
        </div>
        <div class="col-md-12 col-xl-10 mb-3">
            <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row">
                        <!-- image section  -->
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                <img src="<?= base_url('assets/img/products/cap.jpg') ?>" style="width: 150px;" alt="cap image">
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- heading and description section  -->
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="text-danger mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>310</span>
                            </div>
                            <div class="mt-1 mb-0 text-muted small">
                                <span>100% cotton</span>
                                <span class="text-primary"> • </span>
                                <span>Light weight</span>
                                <span class="text-primary"> • </span>
                                <span>Best finish<br /></span>
                            </div>
                            <div class="mb-2 text-muted small">
                                <span>Unique design</span>
                                <span class="text-primary"> • </span>
                                <span>For men</span>
                                <span class="text-primary"> • </span>
                                <span>Casual<br /></span>
                            </div>
                            <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <!-- price and add to card section  -->
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                                <h4 class="mb-1 me-1">$13.99</h4>
                                <span class="text-danger"><s>$20.99</s></span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm" type="button">Details</button>
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-sm mt-2" type="button">
                                    Add to wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-10 mb-3">
            <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row">
                        <!-- image section  -->
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                <img src="<?= base_url('assets/img/products/sent.jpg') ?>" style="width: 150px;" alt="cap image">
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- heading and description section  -->
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="text-danger mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>310</span>
                            </div>
                            <div class="mt-1 mb-0 text-muted small">
                                <span>100% cotton</span>
                                <span class="text-primary"> • </span>
                                <span>Light weight</span>
                                <span class="text-primary"> • </span>
                                <span>Best finish<br /></span>
                            </div>
                            <div class="mb-2 text-muted small">
                                <span>Unique design</span>
                                <span class="text-primary"> • </span>
                                <span>For men</span>
                                <span class="text-primary"> • </span>
                                <span>Casual<br /></span>
                            </div>
                            <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <!-- price and add to card section  -->
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                                <h4 class="mb-1 me-1">$13.99</h4>
                                <span class="text-danger"><s>$20.99</s></span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm" type="button">Details</button>
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-sm mt-2" type="button">
                                    Add to wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-10 mb-3">
            <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row">
                        <!-- image section  -->
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                <img src="<?= base_url('assets/img/products/tasbi.jpg') ?>" style="width: 150px;" alt="cap image">
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- heading and description section  -->
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="text-danger mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>310</span>
                            </div>
                            <div class="mt-1 mb-0 text-muted small">
                                <span>100% cotton</span>
                                <span class="text-primary"> • </span>
                                <span>Light weight</span>
                                <span class="text-primary"> • </span>
                                <span>Best finish<br /></span>
                            </div>
                            <div class="mb-2 text-muted small">
                                <span>Unique design</span>
                                <span class="text-primary"> • </span>
                                <span>For men</span>
                                <span class="text-primary"> • </span>
                                <span>Casual<br /></span>
                            </div>
                            <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <!-- price and add to card section  -->
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                                <h4 class="mb-1 me-1">$13.99</h4>
                                <span class="text-danger"><s>$20.99</s></span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm" type="button">Details</button>
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-sm mt-2" type="button">
                                    Add to wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-10 mb-3">
            <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row">
                        <!-- image section  -->
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                <img src="<?= base_url('assets/img/products/digital_tasbeeh.jpg') ?>" style="width: 150px;" alt="cap image">
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- heading and description section  -->
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>Quant trident shirts</h5>
                            <div class="d-flex flex-row">
                                <div class="text-danger mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>310</span>
                            </div>
                            <div class="mt-1 mb-0 text-muted small">
                                <span>100% cotton</span>
                                <span class="text-primary"> • </span>
                                <span>Light weight</span>
                                <span class="text-primary"> • </span>
                                <span>Best finish<br /></span>
                            </div>
                            <div class="mb-2 text-muted small">
                                <span>Unique design</span>
                                <span class="text-primary"> • </span>
                                <span>For men</span>
                                <span class="text-primary"> • </span>
                                <span>Casual<br /></span>
                            </div>
                            <p class="text-truncate mb-4 mb-md-0">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable.
                            </p>
                        </div>
                        <!-- price and add to card section  -->
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                                <h4 class="mb-1 me-1">$13.99</h4>
                                <span class="text-danger"><s>$20.99</s></span>
                            </div>
                            <h6 class="text-success">Free shipping</h6>
                            <div class="d-flex flex-column mt-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm" type="button">Details</button>
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-sm mt-2" type="button">
                                    Add to wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>