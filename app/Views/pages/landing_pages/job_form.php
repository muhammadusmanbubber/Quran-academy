<?= $this->extend('home_template/layout') ?>
<?= $this->section('main_content') ?>
<style>
    .error-message {
        color: #dc3545;
    }

    .form-control {
        color: #495057;
    }

    ::placeholder {
        color: #6c757d !important;
        opacity: 1;
    }

    .form-control option:disabled {
        color: #6c757d !important;
    }
</style>
<div class="container ">
    <!-- form title  -->
    <div class="text-center wow fadeIn" style="margin-top: 100px;">
        <h2 class="display-8 fw-bold text-secondary">Job Portal</h2>
        <p class="fs-5 text-primary">Instructor Job Application Form</p>
    </div>
    <!--Start form Validation -->
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
    <!-- **** Job Application Form ****** -->
    <div class="row border shadow mb-3">
        <form class="form" action="<?= site_url('save-jobs-form') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <!-- Full Name, Email, and Phone Number -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Full Name <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="instructor_name" placeholder="Enter your full name" value="<?= set_value('instructor_name') ?>">
                    <p class="instructor_name-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Email ID <span class="required_show text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address" value="<?= set_value('email') ?>">
                    <p class="email-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Phone No. <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone_no" placeholder="Enter your phone number" value="<?= set_value('phone_no') ?>">
                    <p class="phone_no-error"></p>
                </div>
            </div>
            <!-- Date of Birth, Gender, and Address -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Date Of Birth <span class="required_show text-danger">*</span></label>
                    <input type="date" class="form-control" name="date_of_birth" value="<?= set_value('date_of_birth') ?>">
                    <p class="date_of_birth-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mt-2">Gender <span class="required_show text-danger">*</span></label>
                    <select class="form-control bg-white" name="gender">
                        <option selected disabled>Select your gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <p class="gender-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Address <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="address" placeholder="Enter your address" value="<?= set_value('address') ?>">
                    <p class="address-error"></p>
                </div>
            </div>
            <!-- Country, State/Province, and Language -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Country <span class="required_show text-danger">*</span></label>
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
                    <p class="country-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">State/Province <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="state" placeholder="Enter your state or province" value="<?= set_value('state') ?>">
                    <p class="state-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Language <span class="required_show text-danger">*</span></label>
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
                    <p class="language-error"></p>
                </div>
            </div>
            <!-- Specialization, Courses, and English Level -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Whatsapp <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="whatsapp" placeholder="Enter your whatsapp number" value="<?= set_value('whatsapp') ?>">
                    <p class="whatsapp-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Qualification<span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="certificate" placeholder="Enter your qualification" value="<?= set_value('certificate') ?>">
                    <p class="certificate-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Specialization <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="specialization" placeholder="Enter your special subject" value="<?= set_value('specialization') ?>">
                    <p class="specialization-error"></p>
                </div>
            </div>
            <!-- Other Skills, Certificate, and Employment -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Other Skills (optional)</label>
                    <input type="text" class="form-control" name="other_skills" placeholder="Enter your other skills" value="<?= set_value('other_skills') ?>">
                    <p class="other_skills-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">English Level <span class="required_show text-danger">*</span></label>
                    <select class="form-control bg-white" name="english_level">
                        <option selected disabled>Select your english level</option>
                        <option>Poor</option>
                        <option>Good</option>
                        <option>Excellent</option>
                    </select>
                    <p class="english_level-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Courses <span class="required_show text-danger">*</span></label>
                    <select name="course_id" class="form-control bg-white">
                        <option selected disabled>Select your course</option>
                        <?php if (!empty($courses) && is_array($courses)): ?>
                            <?php foreach ($courses as $course): ?>
                                <option value="<?= esc($course['course_id']) ?>"><?= esc($course['course_name']) ?></option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No courses available.</p>
                        <?php endif; ?>
                    </select>
                    <p class="course_id-error"></p>
                </div>
            </div>
            <!-- Desired Pay, Availability, and Bio -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Desired Pay <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="desired_pay" placeholder="Enter your desired pay in PKR" value="<?= set_value('desired_pay') ?>">
                    <p class="desired_pay-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Availability Schedule <span class="required_show text-danger">*</span></label>
                    <select class="form-control bg-white" name="availability_schedule">
                        <option selected disabled>Select your availability schedule</option>
                        <optgroup label="Part-Time Availability">
                            <option value="morning_time">Morning Time</option>
                            <option value="afternoon_time">Afternoon Time</option>
                            <option value="evening_time">Evening Time</option>
                        </optgroup>
                        <optgroup label="Full-Time Availability">
                            <option value="full_time">Full Time</option>
                        </optgroup>
                        <optgroup label="Flexible Availability">
                            <option value="weekends_only">Weekends Only</option>
                            <option value="weekdays_only">Weekdays Only</option>
                            <option value="flexible_hours">Flexible Hours</option>
                        </optgroup>
                    </select>
                    <p class="availability_schedule-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Referred By <span class="required_show text-danger">*</span></label>
                    <select class="form-control bg-white" name="referred">
                        <option selected disabled>Select how you heard about the job</option>
                        <option value="google_search">Google Search</option>
                        <option value="company_website">Company Website</option>
                        <option value="linkedin">LinkedIn</option>
                        <option value="facebook">Facebook</option>
                        <option value="twitter">Twitter</option>
                        <option value="instagram">Instagram</option>
                        <option value="tiktok">TikTok</option>
                        <option value="job_board">Job Board (e.g., Indeed, Glassdoor)</option>
                        <option value="employee_referral">Employee Referral</option>
                        <option value="word_of_mouth">Word of Mouth (Friends or Family)</option>
                    </select>
                    <p class="referred-error"></p>
                </div>
            </div>
            <!-- Social Media Links and Referral -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Facebook (optional)</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Enter your Facebook profile link" value="<?= set_value('facebook') ?>">
                    <p class="facebook-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Instagram (optional)</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Enter your Instagram profile link" value="<?= set_value('instagram') ?>">
                    <p class="instagram-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">YouTube (optional)</label>
                    <input type="text" class="form-control" name="youtube" placeholder="Enter your YouTube channel link" value="<?= set_value('youtube') ?>">
                    <p class="youtube-error"></p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">Twitter (optional)</label>
                    <input type="text" class="form-control" name="twiter" placeholder="Enter your Twitter handle" value="<?= set_value('twiter') ?>">
                    <p class="twiter-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-2">ID Card No. <span class="required_show text-danger">*</span></label>
                    <input type="text" class="form-control" name="id_card_no" placeholder="Enter your Twitter handle" value="<?= set_value('id_card_no') ?>">
                    <p class="id_card_no-error"></p>
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold mb-1">Are you currently employed? <span class="required_show text-danger">*</span></label>
                    <div class="elementor-field-subgroup elementor-subgroup-inline mt-2">
                        <span class="elementor-field-option">
                            <input type="radio" value="1" name="current_employment" <?= set_radio('current_employment', 'Yes') ?>>
                            <label>Yes</label>
                        </span>
                        <span class="elementor-field-option">
                            <input type="radio" value="0" name="current_employment" <?= set_radio('current_employment', 'No') ?>>
                            <label>No</label>
                        </span>
                    </div>
                    <!-- Error message container for jQuery validation -->
                    <div class="current_employment-error text-danger"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label class="fw-bold mb-2">Description <span class="required_show text-danger">*</span></label>
                    <textarea class="form-control" name="bio" placeholder="Write a short bio"><?= set_value('bio') ?></textarea>
                    <p class="bio-error"></p>
                </div>
            </div>
            <!-- Profile Image Upload -->
            <div class="row">
                <div class="col-sm-4">
                    <label class="fw-bold form-label passenger_form_label color_primary mb-2">
                        Profile Image <span class="required_show text-danger">*</span>
                    </label>
                    <div id="profile_image" action="upload" class="dropzone dropzone_main needsclick dz-clickable">
                        <div class="dz-message needsclick">
                            <span class="text">
                                <!-- #469EE6 this is svg color code -->
                                <img src="<?= base_url('assets/img/svg/panel_svg/upload_icon.svg') ?>" alt="profile image" style="width: 70px;">
                                <span class="text_light">Drag and drop profile image, or <span class="text_orange">Browse</span></span>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" id="profile-image" name="profile_image">
                    <input type="hidden" name="is_service" id="is_service_input" value="false">
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold form-label passenger_form_label color_primary mb-2">
                        ID Card - Front <span class="required_show text-danger">*</span>
                    </label>
                    <div id="id_card_pic_front" action="upload" class="dropzone dropzone_main needsclick dz-clickable">
                        <div class="dz-message needsclick">
                            <span class="text">
                                <img src="<?= base_url('assets/img/svg/panel_svg/add_orange.svg') ?>" alt="id card front image" style="width: 70px;">
                            </span>
                        </div>
                    </div>
                    <input type="hidden" id="idcard_pic_front" name="id_card_pic_front">
                    <input type="hidden" name="is_service" id="is_service_input" value="false">
                </div>
                <div class="col-sm-4">
                    <label class="fw-bold form-label passenger_form_label color_primary mb-2">
                        ID Card - Back <span class="required_show text-danger">*</span>
                    </label>
                    <div id="id_card_pic_back" action="upload" class="dropzone dropzone_main needsclick dz-clickable">
                        <div class="dz-message needsclick">
                            <span class="text">
                                <img src="<?= base_url('assets/img/svg/panel_svg/add_orange.svg') ?>" alt="id card back image" style="width: 70px;">
                            </span>
                        </div>
                    </div>
                    <input type="hidden" id="idcard_pic_back" name="id_card_pic_back">
                    <input type="hidden" name="is_service" id="is_service_input" value="false">
                </div>
            </div>
            <!-- Agree to Terms and Conditions -->
            <div class="col-sm-12 mb-2 mt-3">
                <label>Agree to terms and conditions</label>
                <input type="checkbox" name="agree_terms" <?= set_checkbox('agree_terms', '1') ?>>
                <p class="agree_terms-error"></p>
            </div>
            <!-- Submit Button -->
            <div class="row mt-3 mb-3">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-secondary text-white">Restart</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="<?= base_url('assets/js/custom_libs/images_upload.js') ?>"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<!-----Script for Form Validation ----->
<script>
    // ----Upload Instructor Profile image---
    initializeFileUploader(
        '#profile_image',
        '<?php echo base_url('user/cources/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#profile-image',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'assets/upload/job_applications/profile/',
            'dir_folder': 'images',
            'dimensionsWithPath': JSON.stringify([{
                thumbnail_path: 'thumbnail40-40',
                width: '500',
                height: '500'
            }, ])
        }
    );
    // ----Upload Id Card front side image image---
    initializeFileUploader(
        '#id_card_pic_front',
        '<?php echo base_url('user/cources/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#idcard_pic_front',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'assets/upload/job_applications/idcards/',
            'dir_folder': 'images',
            'dimensionsWithPath': JSON.stringify([{
                thumbnail_path: 'thumbnail40-40',
                width: '600',
                height: '500'
            }, ])
        }
    );
    // ----Upload Id Card Back side image image---
    initializeFileUploader(
        '#id_card_pic_back',
        '<?php echo base_url('user/cources/upload-resized-images') ?>',
        '<?= base_url() ?>',
        1,
        '#idcard_pic_back',
        'image/jpeg,image/png,image/jpg', {
            'directory': 'assets/upload/job_applications/idcards/',
            'dir_folder': 'images',
            'dimensionsWithPath': JSON.stringify([{
                thumbnail_path: 'thumbnail40-40',
                width: '600',
                height: '400'
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
                }, 1500);
            });
        }, 5000);
    });
</script>
<?= $this->endSection() ?>