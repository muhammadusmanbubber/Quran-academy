<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Teachers</h2>
        </div>
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
        <div class="col-lg-4 col-md-3">
            <label class="form-label passenger_form_label mb-1">Search Product</label>
            <input type="search" class="form-control passenger_form_input rounded-pill search_product" placeholder="Search">
        </div>
        <!-- Reset Filters  -->
        <div class="col-lg-2 col-md-3 text-end mt-3">
            <a href="javascript:void(0)" class="btn btn-light rounded-pill reset_and_clear_btn text-center w-100">Reset Filters</a>
        </div>
    </div>
    <div class="row mt-5">
        <!--Teacher 1-->
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
            <div class="card text-center border-light shadow-sm position-relative">
                <div class="card-body">
                    <div class="user-content">
                        <div class="user-info mb-3">
                            <div class="user-img mb-2">
                                <img class="img-fluid w-50 rounded-circle" src="<?= base_url('assets/img/usman.png') ?>" alt="Profile image" />
                            </div>
                            <div class="user-details">
                                <h4 class="user-name mb-1 fw-bold">Muhammad Usman</h4>
                                <p class="text-muted">Teacher</p>
                            </div>
                        </div>
                        <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                            <a href="javascript:void(0);" class="btn btn-light btn-sm" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0; border: none; background: transparent;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="12" r="2" fill="#000" />
                                    <circle cx="12" cy="12" r="2" fill="#000" />
                                    <circle cx="18" cy="12" r="2" fill="#000" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end position-absolute top-100 start-0 mt-2" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-icon mb-3">
                        <span class="badge bg-success text-light">Mathematics</span>
                        <span class="badge bg-secondary text-light mx-2">Science</span>
                        <span class="badge bg-danger text-light">Art</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('admin/teachers/teacher-profile') ?>" class="btn btn-primary btn-sm me-2" style="width: 130px;"><i class="mdi mdi-account me-2"></i>Profile</a>
                        <a href="/chat" class="btn btn-outline-primary btn-sm" style="width: 130px;"><i class="mdi mdi-email me-3"></i>Chat</a>
                    </div>
                </div>
            </div>
        </div>
                <!--Teacher 1-->
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
            <div class="card text-center border-light shadow-sm position-relative">
                <div class="card-body">
                    <div class="user-content">
                        <div class="user-info mb-3">
                            <div class="user-img mb-2">
                                <img class="img-fluid w-50 rounded-circle" src="<?= base_url('assets/img/usman.png') ?>" alt="Profile image" />
                            </div>
                            <div class="user-details">
                                <h4 class="user-name mb-1 fw-bold">Muhammad Usman</h4>
                                <p class="text-muted">Teacher</p>
                            </div>
                        </div>
                        <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                            <a href="javascript:void(0);" class="btn btn-light btn-sm" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0; border: none; background: transparent;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="12" r="2" fill="#000" />
                                    <circle cx="12" cy="12" r="2" fill="#000" />
                                    <circle cx="18" cy="12" r="2" fill="#000" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end position-absolute top-100 start-0 mt-2" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-icon mb-3">
                        <span class="badge bg-success text-light">Mathematics</span>
                        <span class="badge bg-secondary text-light mx-2">Science</span>
                        <span class="badge bg-danger text-light">Art</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('admin/teachers/teacher-profile') ?>" class="btn btn-primary btn-sm me-2" style="width: 130px;"><i class="mdi mdi-account me-2"></i>Profile</a>
                        <a href="/chat" class="btn btn-outline-primary btn-sm" style="width: 130px;"><i class="mdi mdi-email me-3"></i>Chat</a>
                    </div>
                </div>
            </div>
        </div>
                <!--Teacher 1-->
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
            <div class="card text-center border-light shadow-sm position-relative">
                <div class="card-body">
                    <div class="user-content">
                        <div class="user-info mb-3">
                            <div class="user-img mb-2">
                                <img class="img-fluid w-50 rounded-circle" src="<?= base_url('assets/img/usman.png') ?>" alt="Profile image" />
                            </div>
                            <div class="user-details">
                                <h4 class="user-name mb-1 fw-bold">Muhammad Usman</h4>
                                <p class="text-muted">Teacher</p>
                            </div>
                        </div>
                        <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                            <a href="javascript:void(0);" class="btn btn-light btn-sm" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0; border: none; background: transparent;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="12" r="2" fill="#000" />
                                    <circle cx="12" cy="12" r="2" fill="#000" />
                                    <circle cx="18" cy="12" r="2" fill="#000" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end position-absolute top-100 start-0 mt-2" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-icon mb-3">
                        <span class="badge bg-success text-light">Mathematics</span>
                        <span class="badge bg-secondary text-light mx-2">Science</span>
                        <span class="badge bg-danger text-light">Art</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('admin/teachers/teacher-profile') ?>" class="btn btn-primary btn-sm me-2" style="width: 130px;"><i class="mdi mdi-account me-2"></i>Profile</a>
                        <a href="/chat" class="btn btn-outline-primary btn-sm" style="width: 130px;"><i class="mdi mdi-email me-3"></i>Chat</a>
                    </div>
                </div>
            </div>
        </div>
                <!--Teacher 1-->
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3">
            <div class="card text-center border-light shadow-sm position-relative">
                <div class="card-body">
                    <div class="user-content">
                        <div class="user-info mb-3">
                            <div class="user-img mb-2">
                                <img class="img-fluid w-50 rounded-circle" src="<?= base_url('assets/img/usman.png') ?>" alt="Profile image" />
                            </div>
                            <div class="user-details">
                                <h4 class="user-name mb-1 fw-bold">Muhammad Usman</h4>
                                <p class="text-muted">Teacher</p>
                            </div>
                        </div>
                        <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                            <a href="javascript:void(0);" class="btn btn-light btn-sm" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0; border: none; background: transparent;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="12" r="2" fill="#000" />
                                    <circle cx="12" cy="12" r="2" fill="#000" />
                                    <circle cx="18" cy="12" r="2" fill="#000" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end position-absolute top-100 start-0 mt-2" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-icon mb-3">
                        <span class="badge bg-success text-light">Mathematics</span>
                        <span class="badge bg-secondary text-light mx-2">Science</span>
                        <span class="badge bg-danger text-light">Art</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('admin/teachers/teacher-profile') ?>" class="btn btn-primary btn-sm me-2" style="width: 130px;"><i class="mdi mdi-account me-2"></i>Profile</a>
                        <a href="/chat" class="btn btn-outline-primary btn-sm" style="width: 130px;"><i class="mdi mdi-email me-3"></i>Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>