<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">Teachers Attendance Sheet</h2>
            <!-- <a href="#" id="resetFilters" class="text-decoration-none text_small toggle_itemmm">Reset Filters</a> -->
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <!-- ***** Name and Registered ID Dropdown Filter ***** -->
            <div class="col-md-6 col-lg-3 mb-2 tehsil_dropdown">
                <label class="col-form-label form_label toggle_itemmm">Search Here:</label>
                <input type="search" class="form-control input_fileds toggle_itemmm" id="search_input" placeholder="Reg.No# or Student Name" />
            </div>
            <!-- ***** Union Councils Dropdown ***** -->
            <div class="col-md-6 col-lg-3 mb-2 uc_dropdown">
                <label class="col-form-label form_label toggle_itemmm">Date Range:</label>
                <input type="text" name="basic" id="date_picker3" class="form-control input_fileds toggle_itemmm" placeholder="Select date" />
                <div class="input-group d-none">
                    <input type="date" id="date_picker1" class="form-control input_fileds toggle_itemmm" placeholder="Start Date" />
                    <div class="input-group-append">
                        <span class="p-3">to</span>
                    </div>
                    <input type="date" id="date_picker2" class="form-control input_fileds toggle_itemmm" placeholder="End Date" />
                </div>
            </div>
            <!-- ***** Facility Dropdown ***** -->
            <div class="col-md-6 col-lg-3 mb-2 facility_dropdown">
                <label class="col-form-label form_label toggle_itemmm">Status:</label>
                <select id="sync_status_filter" class="form-select form-control input_fileds toggle_itemmm select_sync_status_org">
                    <option selected disabled>--Select--</option>
                    <option value="synced">Active</option>
                    <option value="not_synced">Inactive</option>
                </select>
            </div>
            <a href="#" id="resetFilters" class="btn btn-success mt-4">Reset Filters</a>
        </div>
        <div class="table-responsive hr_list_table">
            <div class="main-wrapper">
                <div class="page-wrapper">
                    <div class="content">
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0">
                                        <thead>
                                            <tr class="align-middle table-success">
                                                <th>Employee</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                                <th>6</th>
                                                <th>7</th>
                                                <th>8</th>
                                                <th>9</th>
                                                <th>10</th>
                                                <th>11</th>
                                                <th>12</th>
                                                <th>13</th>
                                                <th>14</th>
                                                <th>15</th>
                                                <th>16</th>
                                                <th>17</th>
                                                <th>18</th>
                                                <th>19</th>
                                                <th>20</th>
                                                <th>22</th>
                                                <th>23</th>
                                                <th>24</th>
                                                <th>25</th>
                                                <th>26</th>
                                                <th>27</th>
                                                <th>28</th>
                                                <th>29</th>
                                                <th>30</th>
                                                <th>31</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Albina Simonis</td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td>
                                                    <div class="half-day"><span class="first-off"><i class="fa fa-check text-success"></i></span> <span class="first-off"><i class="fa fa-close text-danger"></i></span></div>
                                                </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td>
                                                    <div class="half-day"><span class="first-off"><i class="fa fa-close text-danger"></i></span> <span class="first-off"><i class="fa fa-check text-success"></i></span></div>
                                                </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                            </tr>
                                            <tr>
                                                <td>Cristina Groves</td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                            </tr>
                                            <tr>
                                                <td>Haylie Feeney</td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                            </tr>
                                            <tr>
                                                <td>Mary Mericle</td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                            </tr>
                                            <tr>
                                                <td>Zoe Butler</td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                            </tr>
                                            <tr>
                                                <td>Cristina Groves</td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                            </tr>
                                            <tr>
                                                <td>Marie Wells</td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-close text-danger"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                                <td><i class="fa fa-check text-success"></i> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="userspagination">
                <p>pagination</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<?= $this->endSection() ?>