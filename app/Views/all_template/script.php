<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
<!-- jQuery Validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Moment.js -->
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- Daterangepicker -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<!-- Template Main JS File -->
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
<!-- Registration form Validation custom script-->
<script>
    $(document).ready(function() {
        $('.form').validate({
            errorPlacement: function(error, element) {
                // Special handling for Dropzone
                if (element.attr("name") === "category_img") {
                    error.appendTo('.category_img-error');
                } else {
                    error.insertAfter(element);
                }
            },
            rules: {
                username: {
                    required: true
                },
                fathername: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                gender: {
                    required: true
                },
                birth: {
                    required: true
                },
                phone_number: {
                    required: true,
                    minlength: 9
                },
                whatsapp: {
                    required: true
                },
                skype: {
                    required: false
                },
                address: {
                    required: true
                },
                classes_per_week: {
                    required: true
                },
                contact_time: {
                    required: true
                },
                teacher_gender: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                language: {
                    required: true
                },
                courses: {
                    required: true
                },
                referred: {
                    required: true
                },
                agree_terms: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "Student Name is required"
                },
                fathername: {
                    required: "Guardian/Parent Name is required"
                },
                email: {
                    required: "Email is required",
                    email: "Please enter a valid email address"
                },
                gender: {
                    required: "Please select your Gender",
                },
                birth: {
                    required: "Date of birth is required",
                },
                phone_number: {
                    required: "Phone number is required",
                    minlength: "Mobile Number must be at least 9 characters long"
                },
                whatsapp: {
                    required: "Whatsapp number is required"
                },
                skype: {
                    required: "Skype ID is optional"
                },
                address: {
                    required: "Address is required"
                },
                classes_per_week: {
                    required: "Classes per week is required"
                },
                contact_time: {
                    required: "Choose you class time"
                },
                teacher_gender: {
                    required: "Please select a gender for the teacher"
                },
                country: {
                    required: "Country selection is required"
                },
                state: {
                    required: "State/Province is required"
                },
                language: {
                    required: "Language selection is required"
                },
                courses: {
                    required: "Please select a course"
                },
                referred: {
                    required: "Please specify how you were referred"
                },
                agree_terms: {
                    required: "You must agree to the terms and conditions"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        // Initialize other components like date range picker
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

        // Custom wish icon toggle
        $(".wish-icon i").click(function() {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>
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
<!-- password show and hide icon script  -->
<script>
    $(document).ready(function() {
        $(".wish-icon i").click(function() {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>
<!----Display the message for 5 seconds--- -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(function() {
                    alert.remove();
                }, 500);
            });
        }, 5000);
    });
    $(document).ready(function() {
        $(".toggle-password").click(function() {
            $(this).toggleClass("ti-eye ti-eye-off");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>