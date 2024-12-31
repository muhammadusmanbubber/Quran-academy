<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-primary fw-bold mb-4">All Instructors</h2>
    </div>
    <!-- success Message session -->
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success">
            <p>
                <?php echo session()->get('success') ?>
            </p>
        </div>
    <?php endif; ?>
    <!--Error Message session -->
    <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger">
            <p>
                <?php echo session()->get('fail') ?>
            </p>
        </div>
    <?php endif; ?>
    <!--Form Validation -->
    <?php
    if (!empty(session()->get('validation')) || !empty(session()->get('fieldErrors'))) {
        $validation = session()->get('validation');
        $fieldErrors = session()->get('fieldErrors');
    }
    ?>
    <div class="row">
        <!-- search filter  -->
        <div class="col-lg-4 col-md-3">
            <label class="form-label passenger_form_label mb-1">Search</label>
            <input type="search" class="form-control passenger_form_input rounded-pill search_product" placeholder="Search by name or cnic no.">
        </div>
        <!-- Course Wise filter  -->
        <div class="col-lg-3 col-md-3">
            <label class="form-label passenger_form_label mb-1">Courses</label>
            <select class="form-select passenger_form_select_input passenger_form_input rounded-pill all_category bg-white">
                <option selected value="0">Select any Course</option>
                <option value="">1</option>
            </select>
        </div>
        <!-- Category filter  -->
        <div class="col-lg-3 col-md-3">
            <label class="form-label passenger_form_label mb-1">Status</label>
            <select class="form-select passenger_form_select_input passenger_form_input rounded-pill all_category bg-white">
                <option selected value="0">Select Instructor Status</option>
                <option value="">1</option>
            </select>
        </div>
        <!-- Reset Filters  -->
        <div class="col-lg-2 col-md-3 text-end mt-3">
            <a href="javascript:void(0)" class="btn btn-success rounded-pill reset_and_clear_btn text-center w-100">Reset Filters</a>
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
                <?php if (!empty($teachers) && is_array($teachers)): ?>
                    <?php foreach ($teachers as $teacher): ?>
                        <div class="card-body">
                            <div class="user-content">
                                <div class="user-info mb-3">
                                    <div class="user-img mb-2">
                                        <img class="img-fluid w-50 rounded-circle" src="<?= base_url('assets/upload/job_applications/profile/' . $teacher['profile_image']) ?>" alt="Profile image" />
                                    </div>
                                    <div class="user-details">
                                        <h4 class="user-name mb-1 fw-bold"><?= $teacher['instructor_name'] ?></h4>
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
                                <span class="badge bg-success text-light">course<?= $teacher['course_id'] ?></span>
                                <span class="badge bg-secondary text-light mx-2"><?= $teacher['specialization'] ?></span>
                                <span class="badge bg-danger text-light"><?= $teacher['certificate'] ?></span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="<?= base_url('admin/teachers/teacher-profile') ?>" class="btn btn-primary btn-sm me-2" style="width: 130px;"><i class="mdi mdi-account me-2"></i>Profile</a>
                                <a href="/chat" class="btn btn-outline-primary btn-sm" style="width: 130px;"><i class="mdi mdi-email me-3"></i>Chat</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">No Teacher data available.</td>
                    </tr>
                <?php endif; ?>
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