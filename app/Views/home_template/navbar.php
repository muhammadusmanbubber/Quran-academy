<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="<?= base_url('/') ?>">Online Quran Academy</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="<?= base_url('/') ?>">Home</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#services">Services</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#pricing">Courses</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#faq">FAQ</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('/') ?>#contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('products') ?>">Products</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('jobs') ?>">Jobs</a></li>
                <?php if (session()->get('isUserLoggedIn')) : ?>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <ul class="dropdown-menu">
                            <?php
                            $role_id = session()->get('role_id');
                            if ($role_id == 3) : ?>
                                <li><a class="dropdown-item" href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/settings/site-settings') ?>">Settings</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/settings/update-password') ?>">Change Password</a></li>
                            <?php elseif ($role_id == 1) : ?>
                                <li><a class="dropdown-item" href="<?= base_url('user/dashboard') ?>">Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/settings/site-settings') ?>">Settings</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/settings/update-password') ?>">Change Password</a></li>
                            <?php elseif ($role_id == 2) : ?>
                                <li><a class="dropdown-item" href="<?= base_url('teacher/dashboard') ?>">Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/settings/site-settings') ?>">Settings</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/settings/update-password') ?>">Change Password</a></li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="<?= base_url('login') ?>">Login / Signup</a></li>
                    <li><a class="getstarted" href="<?= base_url('donation') ?>">
                            <span class="fa fa-hand-holding-heart mx-2"></span> Donation
                        </a></li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>