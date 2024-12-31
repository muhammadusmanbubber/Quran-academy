<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<!--======= Courses Section ======= -->
<div class="container text-center">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-primary fw-bold mb-4">All Courses</h2>
        <a href="<?= base_url('admin/cources/add-cource') ?>" class="btn btn-success mb-4">Add Course</a>
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
        <div class="col-lg-12">
            <!-- Bootstrap Table -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="align-middle table-success">
                    <th class="border-bottom text-center text-primary" style="width:10px;">Sr.#</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 50px;">Image</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 40px;">Course Name</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 60px;">Description</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 40px;">Price</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 40px;">Duration</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 40px;">Status</th>
                        <th class="border-bottom text-center text-primary" style="width:15px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($courses) && is_array($courses)): ?>
                        <?php foreach ($courses as $course): ?>
                            <tr>
                            <td class="text-center"><?= $course['sequence_number'] ?></td>
                                <td>
                                    <img src="<?= base_url('assets/upload/courses/' . $course['cover_image']) ?>" alt="image" style="height: 50px; width: 36px;">
                                </td>
                                <td><?= esc($course['course_name']) ?></td>
                                <td><?= esc(substr($course['description'], 0, 60)) ?>...</td>
                                <td>$<?= esc($course['price']) ?></td>
                                <td><?= esc($course['course_duration']) ?></td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input status-switch" type="checkbox" id="courseStatusSwitch<?= $course['course_id'] ?>"
                                            data-course-id="<?= $course['course_id'] ?>"
                                            data-url="<?= base_url('admin/cources/update-course-status?course_id=' . $course['course_id']) ?>"
                                            <?= $course['status'] === 'active' ? 'checked' : '' ?>>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/cources/edit-cource/' . $course['course_id']) ?>" class="btn btn-light btn-sm"><i class="mdi mdi-pencil"></i> Edit</a>
                                    <a href="<?= base_url('admin/cources/detail/' . $course['course_id']) ?>" class="btn btn-info btn-sm"><i class="mdi mdi-eye"></i> Details</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">No courses available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div id="userspagination" class="mt-4 d-flex justify-content-center">
                <?= $pager_links ?>
            </div>
        </div>
    </div>
</div>
<!-- HTML for the confirmation modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to change the status?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelStatusChange">No</button>
                <button type="button" class="btn btn-primary" id="confirmStatusChange">Yes</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script>
    $(document).ready(function() {
        var switchElement, redirectUrl, newStatus;

        // Event listener for the toggle switch
        $('.status-switch').on('change', function(event) {
            event.preventDefault();
            switchElement = $(this);
            newStatus = switchElement.is(':checked') ? 'active' : 'inactive';
            redirectUrl = switchElement.data('url') + '&status=' + newStatus;
            // Show confirmation modal
            $('#confirmationModal').modal('show');
        });

        // Event listener for the "Yes" button in the modal
        $('#confirmStatusChange').on('click', function() {
            // Hide the modal
            $('#confirmationModal').modal('hide');
            // Redirect to the specified URL
            window.location.href = redirectUrl;
        });

        // Event listener for the "No" button in the modal
        $('#cancelStatusChange').on('click', function() {
            // Hide the modal
            $('#confirmationModal').modal('hide');
            // Revert the toggle switch state
            switchElement.prop('checked', !switchElement.is(':checked'));
        });
    });
</script>
<!------Display the message for 5 seconds----->
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
</script>
<?= $this->endSection() ?>