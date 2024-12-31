<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">User Registration Form</h2>
        </div>
        <form action="<?= site_url('store_registeration') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <!-- UserName and Father Name -->
            <div class="row">
                <div class="col-sm-6">
                    <label>Student Name</label>
                    <input type="text" class="form-control" autocomplete="on" name="username" value="<?= set_value('username', isset($user) ? $user->username : '') ?>">
                    <?php if (isset($validation) && $validation->getError('username')) : ?>
                        <span class="text-danger"><?= $validation->getError('username') ?></span>
                    <?php endif ?>
                </div>
                <div class="col-sm-6">
                    <label>Guardian/Parent Name</label>
                    <input type="text" class="form-control" autocomplete="on" name="fathername" value="<?= set_value('fathername') ?>">
                    <?php if (isset($validation) && $validation->getError('fathername')) : ?>
                        <span class="text-danger"><?= $validation->getError('fathername') ?></span>
                    <?php endif ?>
                </div>
            </div>
            <!-- Email and Gender-->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label>Email ID</label><br>
                    <input type="email" class="form-control" autocomplete="on" name="email" value="<?= set_value('email', isset($user) ? $user->email : '') ?>">
                    <?php if (isset($validation) && $validation->getError('email')) : ?>
                        <div class="text-danger"><?= $validation->getError('email') ?></div>
                    <?php endif ?>
                </div>
                <div class="col-sm-6">
                    <label>Gender</label>
                    <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                        <span class="elementor-field-option">
                            <input type="radio" value="Male" name="gender" <?= set_radio('gender', 'Male') ?>>
                            <label>Male</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Female" name="gender" <?= set_radio('gender', 'Female') ?>>
                            <label>Female</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Other" name="gender" <?= set_radio('gender', 'Other') ?>>
                            <label>Other</label>
                        </span>
                    </div>
                    <?php if (isset($validation) && $validation->getError('gender')) : ?>
                        <div class="text-danger"><?= $validation->getError('gender') ?></div>
                    <?php endif ?>
                </div>
            </div>
            <!-- Date of Birth and Phone Number -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label>Date Of Birth</label>
                    <input type="date" class="form-control" autocomplete="on" name="birth" value="<?= set_value('birth') ?>">
                    <?php if (isset($validation) && $validation->getError('birth')) : ?>
                        <div class="text-danger"><?= $validation->getError('birth') ?></div>
                    <?php endif ?>
                </div>
                <div class="col-sm-6">
                    <label>Phone No.</label>
                    <input type="text" class="form-control" autocomplete="on" name="phone_number" value="<?= set_value('phone_number', isset($user) ? $user->phone_number : '') ?>">
                    <?php if (isset($validation) && $validation->getError('phone_number')) : ?>
                        <div class="text-danger"><?= $validation->getError('phone_number') ?></div>
                    <?php endif ?>
                </div>
            </div>
            <!-- Whatsapp and Skype ID -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label>Whatsapp No.</label>
                    <input type="text" class="form-control" autocomplete="on" name="whatsapp" value="<?= set_value('whatsapp') ?>">
                    <?php if (isset($validation) && $validation->getError('whatsapp')) : ?>
                        <div class="text-danger"><?= $validation->getError('whatsapp') ?></div>
                    <?php endif ?>
                </div>
                <div class="col-sm-6">
                    <label>Skype or Emo ID (optional)</label>
                    <input type="text" class="form-control" autocomplete="on" name="skype" value="<?= set_value('skype') ?>">
                    <?php if (isset($validation) && $validation->getError('skype')) : ?>
                        <div class="text-danger"><?= $validation->getError('skype') ?></div>
                    <?php endif ?>
                </div>
            </div>
            <!-- Address and Classes per Week -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label>Address</label>
                    <input type="text" class="form-control" autocomplete="on" name="address" value="<?= set_value('address') ?>">
                    <?php if (isset($validation) && $validation->getError('address')) : ?>
                        <div class="text-danger"><?= $validation->getError('address') ?></div>
                    <?php endif ?>
                </div>
                <div class="col-sm-6">
                    <label>Classes Per Week</label>
                    <input type="text" class="form-control" name="classes_per_week" value="<?= set_value('classes_per_week') ?>">
                    <?php if (isset($validation) && $validation->getError('classes_per_week')) : ?>
                        <div class="text-danger"><?= $validation->getError('classes_per_week') ?></div>
                    <?php endif ?>
                </div>
            </div>
            <!-- Best Contact Time and Teacher Gender -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label>Best Contact Time</label>
                    <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                        <span class="elementor-field-option">
                            <input type="radio" value="Morning" name="contact_time" <?= set_radio('contact_time', 'Morning') ?>>
                            <label>Morning</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Day" name="contact_time" <?= set_radio('contact_time', 'Day') ?>>
                            <label>Day</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Evening" name="contact_time" <?= set_radio('contact_time', 'Evening') ?>>
                            <label>Evening</label>
                        </span>
                    </div>
                    <?php if (isset($validation) && $validation->getError('contact_time')) : ?>
                        <div class="text-danger"><?= $validation->getError('contact_time') ?></div>
                    <?php endif ?>
                </div>

                <div class="col-sm-6">
                    <label>Teacher</label>
                    <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                        <span class="elementor-field-option">
                            <input type="radio" value="Male" name="teacher_gender" <?= set_radio('teacher_gender', 'Male') ?>>
                            <label>Male</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Female" name="teacher_gender" <?= set_radio('teacher_gender', 'Female') ?>>
                            <label>Female</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Anyone" name="teacher_gender" <?= set_radio('teacher_gender', 'Anyone') ?>>
                            <label>Anyone</label>
                        </span>
                    </div>
                    <?php if (isset($validation) && $validation->getError('teacher_gender')) : ?>
                        <div class="text-danger"><?= $validation->getError('teacher_gender') ?></div>
                    <?php endif ?>
                </div>
            </div>
            <!-- Country and State -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="select">
                        <label>Country</label><br>
                        <select name="country" class="form-control bg-white" value="<?= set_value('country') ?>">
                            <option value="" disabled selected>Select your Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                            </option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                            </option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of
                            </option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                            </option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                            </option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                South
                                Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <?php if (isset($validation) && $validation->getError('country')) : ?>
                            <div class="text-danger"><?= $validation->getError('country') ?></div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="select1">
                        <label>State/Province</label><br>
                        <input type="text" class="form-control" name="state" value="<?= set_value('state') ?>">
                        <?php if (isset($validation) && $validation->getError('state')) : ?>
                            <div class="text-danger"><?= $validation->getError('state') ?></div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <!-- Language and Courses -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label>Language</label><br>
                    <select class="form-control bg-white" name="language">
                        <option selected disabled>Select your language</option>
                        <option>English</option>
                        <option>Hindi - हिन्दी</option>
                        <option>Arabic - العربية</option>
                        <option>Punjabi - ਪੰਜਾਬੀ</option>
                        <option>Spanish - español</option>
                        <option>Chinese - 中文</option>
                        <option>Portuguese - português</option>
                        <option>Bengali - বাংলা</option>
                        <option>Russian - русский</option>
                        <option>Japanese - 日本語</option>
                    </select>
                    <?php if (isset($validation) && $validation->getError('language')) : ?>
                        <div class="text-danger"><?= $validation->getError('language') ?></div>
                    <?php endif ?>
                </div>
                <div class="col-sm-6">
                    <label>All Trades</label><br>
                    <select name="courses" class="form-control bg-white">
                        <option selected disabled>Select Your Trade</option>
                        <optgroup label="Computer Trades">
                            <option value="Amazon">Amazon </option>
                            <option value="Computer Applications">Computer Applications</option>
                            <option value="IT (Computer Operator) NVC">IT (Computer Operator) NVC</option>
                            <option value="IT (Office Assistant) NVC">IT (Office Assistant) NVC</option>
                            <option value="IT (Web Designing & Development) NVC">IT (Web Designing &
                                Development) NVC</option>
                            <option value="Computer Aided Design & Manufacturing (NVC)">Computer Aided
                                Design & Manufacturing (NVC)</option>
                            <option value="Computerized Accounting">Computerized Accounting</option>
                        </optgroup>
                        <optgroup label="Beautician Trades (Only Female)">
                            <option value="Beautician">Beautician</option>
                            <option value="Beauty Care (Beauty Therapy) NVC">Beauty Care (Beauty Therapy)
                                NVC</option>
                            <option value="Beauty Care (Skin Care) NVC">Beauty Care (Skin Care) NVC</option>
                            <option value="Beauty Care (Hair Styling) NVC">Beauty Care (Hair Styling) NVC
                            </option>
                        </optgroup>
                        <optgroup label="Electrical Trades">
                            <option value="Electrician">Electrician</option>
                            <option value="Electrical Wiring Technician">Electrical Wiring Technician
                            </option>
                        </optgroup>
                    </select>
                    <?php if (isset($validation) && $validation->getError('courses')) : ?>
                        <div class="text-danger"><?= $validation->getError('courses') ?></div>
                    <?php endif ?>
                </div>
            </div>
            <!-- Referred By -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label>Referred By</label><br>
                    <select name="referred" class="form-control bg-white">
                        <option disabled selected>Please Tell Us</option>
                        <option value="Google">Google</option>
                        <option value="Friends">Friends</option>
                    </select>
                    <?php if (isset($validation) && $validation->getError('referred')) : ?>
                        <div class="text-danger"><?= $validation->getError('referred') ?></div>
                    <?php endif ?>
                </div>
                <!-- Profile Image -->
                <div class="col-md-12 mb-4 mt-3">
                    <label class="form-label passenger_form_label color_primary mb-1">
                        Cource Image <span class="required_show">*</span>
                    </label>
                    <div action="upload" id="category-pic" class="dropzone dropzone_main needsclick dz-clickable">
                        <div class="dz-message needsclick">
                            <span class="text">
                                <img src="<?= base_url('assets/img/svg/panel_svg/upload_icon.svg') ?>" alt="">
                                <span class="text_light">Drag and drop profile image, or <span class="text_orange">Browse</span></span>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" id="category-image" value="" name="category_img">
                    <input type="hidden" name="is_service" id="is_service_input" value="false">
                </div>
                <!-- Agree to Terms and Conditions -->
                <div class="col-sm-12 mb-2">
                    <label>Agree to terms and conditions</label>
                    <input type="checkbox" name="agree_terms" <?= set_checkbox('agree_terms', '1') ?>>
                    <?php if (isset($validation) && $validation->getError('agree_terms')) : ?>
                        <div class="text-danger"><?= $validation->getError('agree_terms') ?></div>
                    <?php endif ?>
                </div>
                <!-- Submit and Reset Buttons -->
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <a href="<?= base_url('admin/cources/add-cource') ?>" class="btn btn-success mb-4">Add Cource</a>
                    </div>
                </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="<?= base_url('assets/js/custom_libs/images_upload.js') ?>"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<!-----Script for dropzone image ----->
<script>
    initializeFileUploader(
        '#category-pic',
        '<?php echo base_url('admin/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#category-image',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/categories/images/',
            'dir_folder': 'images',
            'dimensionsWithPath': JSON.stringify([{
                thumbnail_path: 'thumbnail90-90',
                width: '90',
                height: '90'
            }, ])
        }
    );
</script>
<?= $this->endSection() ?>