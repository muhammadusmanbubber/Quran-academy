<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Applicants List</h2>
        </div>
        <div class="table-responsive hr_list_table">
            <?php
            if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
                $validation = session()->get('validation');
                $fieldErrors = session()->get('errors');
            }
            ?>
            <?php if (session()->get('errors')) : ?>
                <div class="alert alert-danger">
                    <p>
                        <?php echo session()->get('errors') ?>
                    </p>
                </div>
            <?php endif; ?>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success">
                    <p>
                        <?php echo session()->get('success') ?>
                    </p>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-between align-items-center">
                <!-- ***** Name and Registered ID Dropdown Filter ***** -->
                <div class="col-md-6 col-lg-3 mb-2 tehsil_dropdown">
                    <label class="col-form-label form_label toggle_itemmm">Search Here:</label>
                    <input type="search" class="form-control input_fileds toggle_itemmm rounded-pill" id="search_input" placeholder="Reg.No# or Student Name" />
                </div>
                <!-- ***** Union Councils Dropdown ***** -->
                <div class="col-md-6 col-lg-3 mb-2 uc_dropdown">
                    <label class="col-form-label form_label toggle_itemmm">Date Range:</label>
                    <input type="text" name="basic" id="date_picker3" class="form-control input_fileds toggle_itemmm rounded-pill" placeholder="Select date" />
                    <div class="input-group d-none">
                        <input type="date" id="date_picker1" class="form-control input_fileds toggle_itemmm rounded-pill" placeholder="Start Date" />
                        <div class="input-group-append">
                            <span class="p-3">to</span>
                        </div>
                        <input type="date" id="date_picker2" class="form-control input_fileds toggle_itemmm rounded-pill" placeholder="End Date" />
                    </div>
                </div>
                <!-- ***** Facility Dropdown ***** -->
                <div class="col-md-6 col-lg-3 mb-2 facility_dropdown">
                    <label class="col-form-label form_label toggle_itemmm">Status:</label>
                    <select id="sync_status_filter" class="form-select form-control input_fileds toggle_itemmm rounded-pill select_sync_status_org">
                        <option selected disabled>--Select--</option>
                        <option value="synced">Active</option>
                        <option value="not_synced">Inactive</option>
                    </select>
                </div>
                <a href="#" id="resetFilters" class="btn btn-success mt-4">Reset Filters</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="align-middle table-success">
                        <th class="border-bottom text-center text-primary">Sr.#</th>
                        <th class="border-bottom text-center text-primary">ProfileImage</th>
                        <th class="border-bottom text-center text-primary">Instructor Name</th>
                        <th class="border-bottom text-center text-primary">Email</th>
                        <th class="border-bottom text-center text-primary">Phone No</th>
                        <th class="border-bottom text-center text-primary">Date of Birth</th>
                        <th class="border-bottom text-center text-primary">Gender</th>
                        <th class="border-bottom text-center text-primary">Country</th>
                        <th class="border-bottom text-center text-primary">Specialization</th>
                        <th class="border-bottom text-center text-primary">ID Dard</th>
                        <th class="border-bottom text-center text-primary">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($instructors) && is_array($instructors)): ?>
                        <?php foreach ($instructors as $instructor): ?>
                            <tr>
                                <td class="text-center"><?= $instructor['sequence_number'] ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url('assets/upload/job_applications/profile/' . $instructor['profile_image']) ?>" alt="Profile Image" style="height: 50px; width: 50px; border-radius: 50%;">
                                </td>
                                <td><?= esc($instructor['instructor_name']) ?></td>
                                <td><?= esc($instructor['email']) ?></td>
                                <td><?= esc($instructor['phone_no']) ?></td>
                                <td><?= esc($instructor['date_of_birth']) ?></td>
                                <td><?= esc(ucfirst($instructor['gender'])) ?></td>
                                <td><?= esc($instructor['country']) ?></td>
                                <td><?= esc($instructor['specialization']) ?></td>
                                <td class="text-center">
                                    <img src="<?= base_url('assets/upload/job_applications/idcards/' . $instructor['id_card_pic_front']) ?>" alt="id_card_pic_front" style="height: 50px; width: 50px;">
                                    <img src="<?= base_url('assets/upload/job_applications/idcards/' . $instructor['id_card_pic_back']) ?>" alt="id_card_pic_back" style="height: 50px; width: 50px;">
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/teachers/applicant-detail/' . $instructor['instructor_id']) ?>" class="btn btn-info btn-sm">Details</a>
                                    <a href="<?= base_url('admin/teachers/add-teacher/' . $instructor['instructor_id']) ?>" class="btn btn-primary btn-sm">Add</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11" class="text-center">No instructors available.</td>
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
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>