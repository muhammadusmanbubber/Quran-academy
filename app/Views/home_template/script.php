<!-- jQuery (must be included first as many plugins depend on it) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 5 (must be included after Bootstrap 4) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- jQuery Validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Moment.js (used by some plugins) -->
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<!-- Daterangepicker (depends on Moment.js) -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/js/main.js'); ?>"></script>

<!-- date and time wise search scripts -->
<script>
    $('#date_picker3').daterangepicker({
        autoUpdateInput: false,
        opens: 'left'
    }, function(start, end, label) {
        console.log('Selected range: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        $('#date_picker1').val(start.format('YYYY-MM-DD'));
        $('#date_picker2').val(end.format('YYYY-MM-DD'));
        user_filter_data();
    });

    $('#date_picker3').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
    });

    $('#date_picker3').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
</script>
<!-- Custom Script for Navbar Active State -->
<script>
    $(document).ready(function() {
        function setActiveLink() {
            var pathname = window.location.pathname;
            var isHomePage = pathname === '/' || pathname === 'pages/landing_pages/index.php';
            var isProductsPage = pathname === '/products' || pathname === 'pages/landing_pages//products.php'; // Adjust based on your server setup

            $('.nav-link').each(function() {
                var href = $(this).attr('href');

                // Remove 'active' class from all links
                $(this).removeClass('active');

                if (isHomePage && href === '<?= base_url('/') ?>') {
                    $(this).addClass('active');
                } else if (isProductsPage && href === '<?= base_url('products') ?>') {
                    $(this).addClass('active');
                } else if (pathname === href) {
                    $(this).addClass('active');
                }
            });
        }

        // Set active link on page load
        setActiveLink();

        // Set active link on click
        $('.nav-link').click(function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<!-- Show Services detail in landing page  -->
<script>
    document.getElementById('readMoreBtn').addEventListener('click', function() {
        var title = document.getElementById('quranClassTitle').innerText;
        var encodedTitle = encodeURIComponent(title); // Encode the title to pass as a URL parameter
        window.location.href = 'detail-page.php?title=' + encodedTitle;
    });
</script>
<!-- Job Application Form Validation-->
<script>
    $(document).ready(function() {
        $('.form').validate({
            errorClass: 'error-message',
            errorPlacement: function(error, element) {
                if (element.attr("name") == "current_employment") {
                    error.appendTo(element.closest('.elementor-field-subgroup').next('.current_employment-error'));
                } else {
                    error.insertAfter(element);
                }
            },
            rules: {
                instructor_name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone_no: {
                    required: true,
                    minlength: 10
                },
                date_of_birth: {
                    required: true
                },
                gender: {
                    required: true
                },
                address: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                id_card_no: {
                    required: true
                },
                course_id: {
                    required: true
                },
                specialization: {
                    required: true
                },
                language: {
                    required: true
                },
                whatsapp: {
                    required: true
                },
                english_level: {
                    required: true
                },
                certificate: {
                    required: true
                },
                current_employment: {
                    required: true
                },
                desired_pay: {
                    required: true
                },
                availability_schedule: {
                    required: true
                },
                bio: {
                    required: true
                },
                status: {
                    required: true
                },
                referred: {
                    required: true
                }
            },
            messages: {
                instructor_name: {
                    required: "Instructor name is required"
                },
                email: {
                    required: "Email is required",
                    email: "Please enter a valid email address"
                },
                phone_no: {
                    required: "Phone number is required",
                    minlength: "Phone number must be at least 10 characters long"
                },
                date_of_birth: {
                    required: "Date of birth is required"
                },
                gender: {
                    required: "Gender is required"
                },
                address: {
                    required: "Current Address is required"
                },
                country: {
                    required: "Country is required"
                },
                state: {
                    required: "State/Province is required"
                },
                id_card_no: {
                    required: "ID card number is required"
                },
                course_id: {
                    required: "Course ID is required"
                },
                specialization: {
                    required: "Specialization is required"
                },
                language: {
                    required: "Language is required"
                },
                whatsapp: {
                    required: "Whatsapp Number is required"
                },
                current_employment: {
                    required: "Please select your current employment status"

                },
                english_level: {
                    required: "English level is required"
                },
                certificate: {
                    required: "Certified Degree name is required"
                },
                desired_pay: {
                    required: "Desired pay is required"
                },
                availability_schedule: {
                    required: "Availability schedule is required"
                },
                referred: {
                    required: "Referred by is required"
                },
                bio: {
                    required: "Description is required"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

    });
</script>
<!-- Login Toggle password visibility  -->
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordField = document.getElementById('password-field');
        const passwordToggleIcon = this.querySelector('img');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            passwordToggleIcon.src = '<?= base_url('assets/img/svg/eye_off.svg') ?>';
        } else {
            passwordField.type = 'password';
            passwordToggleIcon.src = '<?= base_url('assets/img/svg/eye_off.svg') ?>';
        }
    });
</script>
<!-- Signup Toggle password visibility -->
<script>
    document.querySelectorAll('.toggle-password').forEach(element => {
        element.addEventListener('click', function() {
            const passwordField = document.querySelector(this.getAttribute('toggle'));
            const passwordToggleIcon = this.querySelector('img');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordToggleIcon.src = '<?= base_url('assets/img/svg/eye_off.svg') ?>';
            } else {
                passwordField.type = 'password';
                passwordToggleIcon.src = '<?= base_url('assets/img/svg/eye_off.svg') ?>';
            }
        });
    });
</script>
<!-- Current date and time in footer -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentYear = new Date().getFullYear();
        document.getElementById('currentYear').textContent = currentYear;

        function updateDateTime() {
            const now = new Date();
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                weekday: 'long'
            };
            const dateTimeString = now.toLocaleDateString('en-US', options);
            document.getElementById('currentDateTime').textContent = dateTimeString;
        }
        updateDateTime();
        setInterval(updateDateTime, 1000);
    });
</script>
<!-- show validation message for 5 seconds  -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(function() {
                    alert.remove();
                }, 2000);
            });
        }, 60000);
    });
</script>
