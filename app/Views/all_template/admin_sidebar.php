<!--sidebar-->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!--Dashboard Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <!--student Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/users/user-list') ?>">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Students</span>
            </a>
        </li>
        <!--Courses Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/cources/cources-list') ?>">
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                <span class="menu-title">Courses</span>
            </a>
        </li>
        <!--Registration Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/registration') ?>">
                <i class="mdi mdi-form-select menu-icon"></i>
                <span class="menu-title">Registration Form</span>
            </a>
        </li>
        <!--Attendance Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/attendance/attendance') ?>">
                <i class="mdi mdi-calendar-check menu-icon"></i>
                <span class="menu-title">Attendance</span>
            </a>
        </li>
        <!--Certification Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/certificate/certificate') ?>">
                <i class="mdi mdi-school menu-icon"></i>
                <span class="menu-title">Certification</span>
            </a>
        </li>
        <!--Products Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/products/product-list') ?>">
                <i class="mdi mdi-cube-outline menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <!--Teacher Li-->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account-tie menu-icon"></i>
                <span class="menu-title">Teacher</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/teachers/teacher-list') ?>">All Teachers</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/teachers/applicants') ?>">Applicants</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/teachers/attendance') ?>">Attendance</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/teachers/salary-slip') ?>">Salary Slip</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/teachers/shedule') ?>">Schedule</a></li>
                </ul>
            </div>
        </li>
        <!--Donation Li-->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-heart menu-icon"></i>
                <span class="menu-title">Donation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/donation/donation-payment') ?>">Donation Payment Report</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/donation/donation-category-list') ?>">Donation Categories</a></li>

                    <!-- <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/donation/mosque-donation') ?>">Masques</a></li> -->
                    <!-- <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/donation/houses-donation') ?>">Houses</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/donation/our-donation') ?>">Online Madrasah</a></li> -->
                </ul>
            </div>
        </li>
        <!--Settings Li-->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-cog menu-icon"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/settings/site-settings') ?>">Site Settings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/settings/update-password') ?>">Change Password</a></li>
                </ul>
            </div>
        </li>
        <!--Logout Li-->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout') ?>">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>