<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container ">
    <!-- ********Start form Validation ********* -->
    <?php if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
        $validation = session()->get('validation');
        $fieldErrors = session()->get('errors');
    } ?>
    <!--Start success and error session -->
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success p-2 w-100 text-center border-0">
            <p class="mb-0">
                <?php echo session()->get('success') ?>
            </p>
        </div>
    <?php endif; ?>
    <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger p-2 w-100 text-center border-0">
            <p class="mb-0">
                <?php echo session()->get('fail') ?>
            </p>
        </div>
    <?php endif; ?>
    <!-- **** Form Detail Row ****** -->
    <div class="row justify-content-center align-items-center">
        <h2 class="text-primary fw-bold mb-4 mt-3">User Registration Form</h2>
        <?php if (!empty($registeredChild)): ?>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <!-- Profile Details -->
                <div class="profile-info" style="margin-right: 100px;">
                    <label for="Student Name" class="fw-bold">Student Name:</label>
                    <h3 class="text-primary mb-1"><?= esc($registeredChild['username']) ?></h3>
                </div>
                <!-- Profile Image -->
                <div class="profile-photo mb-4">
                    <?php if (!empty($registeredChild['category_img'])): ?>
                        <img src="<?= esc($imagePath) ?>" alt="Profile Image" class="border border-secondary rounded shadow-sm" style="width: 170px; height: 170px; object-fit: cover;">
                    <?php else: ?>
                        <div class="text-center">
                            <div class="bg-secondary text-white d-flex justify-content-center align-items-center rounded" style="width: 150px; height: 150px; font-size: 24px;">
                                No Image
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
    </div>
    <!-- Profile Details -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <!-- Basic Information -->
            <div class="row mb-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="my-auto fw-bold">Basic Information</h6>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Guardian/Parent Name</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['fathername']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Email ID</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['email']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Gender</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['gender']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Date of Birth</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['birth']) ?></label>
                </div>
            </div>
            <!-- Contact Information -->
            <div class="row mb-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="my-auto fw-bold">Contact Information</h6>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Phone No.</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['phone_number']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Whatsapp No.</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['whatsapp']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Skype ID</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['skype']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Address</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['address']) ?></label>
                </div>
            </div>
            <!-- Classes Information -->
            <div class="row mb-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="my-auto fw-bold">Classes Information</h6>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Classes Per Week</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['classes_per_week']) ?> days</label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Best Contact Time</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['contact_time']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Teacher Gender</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['teacher_gender']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Country</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['country']) ?></label>
                </div>
            </div>
            <!-- Cources Information -->
            <div class="row mb-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="my-auto fw-bold">Cources Information</h6>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">State/Province</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['state']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Language</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['language']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Courses</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['courses']) ?></label>
                </div>
                <div class="col-md-6">
                    <p class="text_orange text_medium mb-0 text-primary fw-bold mt-2">Referred By</p>
                    <label class="form-label passenger_form_label color_primary"><?= esc($registeredChild['referred']) ?></label>
                </div>
            </div>
        </div>
    </div>
    <!-- **** Form Row ****** -->
    <div class="row">
    <?php else: ?>
        <!-- Registration Form -->
        <form class="form" action="<?= site_url('user/cources/store-registeration') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <!-- UserName and Father Name -->
            <div class="row">
                <div class="col-sm-6">
                    <label class="mb-2">Student Name</label>
                    <input type="text" class="form-control" autocomplete="on" name="username" value="<?= set_value('username', isset($user['username']) ? $user['username'] : '') ?>">
                    <p class="text-danger username-error"></p>
                </div>
                <div class="col-sm-6">
                    <label class="mb-2">Guardian/Parent Name</label>
                    <input type="text" class="form-control" autocomplete="on" id="fathername" placeholder="Father Name" name="fathername" value="<?= set_value('fathername') ?>">
                    <p class="text-danger fathername-error"></p>
                </div>
            </div>
            <!-- Email and Gender-->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class="mb-2">Email ID</label><br>
                    <input type="email" class="form-control" autocomplete="on" name="email" value="<?= set_value('email', isset($user['email']) ? $user['email'] : '') ?>">
                    <p class="text-danger email-error"></p>
                </div>
                <div class="col-sm-6">
                    <label class="mt-3">Gender</label>
                    <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                        <span class="elementor-field-option">
                            <input type="radio" value="Male" name="gender" id="gender_male" <?= set_radio('gender', 'Male') ?>>
                            <label for="gender_male">Male</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Female" name="gender" id="gender_female" <?= set_radio('gender', 'Female') ?>>
                            <label for="gender_female">Female</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="Other" name="gender" id="gender_other" <?= set_radio('gender', 'Other') ?>>
                            <label for="gender_other">Other</label>
                        </span>
                    </div>
                    <p class="form-text text-danger mt-2 gender-error" style="margin-top: 5px; clear: both;"></p>
                </div>
            </div>
            <!-- Date of Birth and Phone Number -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class="mb-2">Date Of Birth</label>
                    <input type="date" class="form-control" autocomplete="on" name="birth" value="<?= set_value('birth') ?>">
                    <p class="text-danger birth-error"></p>
                </div>
                <div class="col-sm-6">
                    <label class="mb-2">Phone No.</label>
                    <input type="text" class="form-control" autocomplete="on" name="phone_number" value="<?= set_value('phone_number', isset($user['phone_number']) ? $user['phone_number'] : '') ?>">
                    <p class="text-danger phone_number-error"></p>
                </div>
            </div>
            <!-- Whatsapp and Skype ID -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class="mb-2">Whatsapp No.</label>
                    <input type="text" class="form-control" autocomplete="on" name="whatsapp" placeholder="Whatsapp account number" value="<?= set_value('whatsapp') ?>">
                    <p class="text-danger whatsapp-error"></p>
                </div>
                <div class="col-sm-6">
                    <label class="mb-2">Skype or Emo ID (optional)</label>
                    <input type="text" class="form-control" autocomplete="on" name="skype" placeholder="Skype account number" value="<?= set_value('skype') ?>">
                    <p class="text-danger skype-error"></p>
                </div>
            </div>
            <!-- Address and Classes per Week -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class="mb-2">Address</label>
                    <input type="text" class="form-control" autocomplete="on" placeholder="Your current residential place" name="address" value="<?= set_value('address') ?>">
                    <p class="text-danger address-error"></p>
                </div>
                <div class="col-sm-6">
                    <label class="mb-2">Classes Per Week</label><br>
                    <select name="classes_per_week" class="form-control bg-white">
                        <option disabled selected>Please Tell Us</option>
                        <option value="2">02 Days Classes</option>
                        <option value="3">03 Days Classes</option>
                        <option value="4">04 Days Classes</option>
                        <option value="5">05 Days Classes</option>
                        <option value="6">06 Days Classes</option>
                    </select>
                    <p class="text-danger classes_per_week-error"></p>
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
                    <p class="text-danger contact_time-error"></p>
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
                    <p class="text-danger teacher_gender-error"></p>
                </div>
            </div>
            <!-- Country and State -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="select">
                        <label class="mb-2">Country</label><br>
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
                        <p class="text-danger country-error"></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="select1">
                        <label class="mb-2">State/Province</label><br>
                        <input type="text" class="form-control" placeholder="Tell us your state/province" name="state" value="<?= set_value('state') ?>">
                        <p class="text-danger state-error"></p>
                    </div>
                </div>
            </div>
            <!-- Language and Courses -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class="mb-2">Language</label><br>
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
                    <p class="text-danger language-error"></p>
                </div>
                <div class="col-sm-6">
                    <label class="mb-2">All Courses</label><br>
                    <select name="courses" class="form-control bg-white">
                        <option selected disabled>Select Your Trade</option>
                        <?php if (!empty($courses) && is_array($courses)): ?>
                            <?php foreach ($courses as $key => $course): ?>
                                <option value="<?= esc($course['course_id']) ?>"><?= esc($course['course_name']) ?></option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No courses available.</p>
                        <?php endif; ?>
                    </select>
                    <p class="text-danger courses-error"></p>
                </div>
            </div>
            <!-- Referred By -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class="mb-2">Referred By</label><br>
                    <select name="referred" class="form-control bg-white">
                        <option disabled selected>Please Tell Us</option>
                        <option value="Google">Google</option>
                        <option value="Friends">Friends</option>
                        <option value="Tiktok">Tiktok</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Youtube">Youtube</option>
                        <option value="Instagram">Instagram</option>
                    </select>
                    <p class="text-danger referred-error"></p>
                </div>
                <!-- Profile Image -->
                <div class="col-md-12 mb-4 mt-3">
                    <label class="form-label passenger_form_label color_primary mb-2">
                        Student Profile Image <span class="required_show">*</span>
                    </label>
                    <div id="category_img" action="upload" class="dropzone dropzone_main needsclick dz-clickable">
                        <div class="dz-message needsclick">
                            <span class="text">
                                <img src="<?= base_url('assets/img/svg/panel_svg/upload_icon.svg') ?>" alt="">
                                <span class="text_light">Drag and drop profile image, or <span class="text_orange">Browse</span></span>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" id="profile-image" name="category_img">
                    <input type="hidden" name="is_service" id="is_service_input" value="false">
                </div>
                <!-- Agree to Terms and Conditions -->
                <div class="col-sm-12 mb-2">
                    <label>Agree to terms and conditions</label>
                    <input type="checkbox" name="agree_terms" <?= set_checkbox('agree_terms', '1') ?>>
                    <p class="text-danger agree_terms-error"></p>
                </div>
                <!-- Submit and Reset Buttons -->
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <button class="btn btn-success mb-4" value="submit">Submit Form</button>
                    </div>
                </div>
        </form>
    <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="<?= base_url('assets/js/custom_libs/images_upload.js') ?>"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<!-----Script for Form Validation ----->
<script>
    // ----Upload the image---
    initializeFileUploader(
        '#category_img',
        '<?php echo base_url('user/cources/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#profile-image',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'assets/upload/registered_form/',
            'dir_folder': 'images',
            'dimensionsWithPath': JSON.stringify([{
                thumbnail_path: 'thumbnail40-40',
                width: '40',
                height: '40'
            }, ])
        }
    );
    // ----Display the message for 5 seconds---
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