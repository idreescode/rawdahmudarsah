<style>
    .switch-field {
        display: flex;
        overflow: hidden;
    }

    .switch-field input {
        position: absolute !important;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        width: 1px;
        border: 0;
        overflow: hidden;
    }

    .switch-field label {
        font-size: 14px;
        line-height: 1;
        text-align: center;
        margin-right: -1px;
        transition: all 0.1s ease-in-out;
        background: transparent;
        color: var(--rm-secondary);
        border: 0;
        border-radius: 0.25rem;
        font-weight: bold;
        padding: 10px;
    }

    .switch-field label:hover {
        cursor: pointer;
    }

    .switch-field input:checked+label {
        background: var(--rm-secondary);
        color: var(--rm-white);
        box-shadow: none;
    }

    .switch-field label:first-of-type {
        border-radius: 4px 0 0 4px;
    }

    .switch-field label:last-of-type {
        border-radius: 0 4px 4px 0;
    }

    .form-control,
    .form-select {
        background-color: rgb(0, 53, 74) !important;
        border-color: #bf9743 !important;
        color: white !important;
    }

    .submitBtn {
        color: white !important;
        background-color: #bf9743 !important;
        border-color: #bf9743 !important;
        font-family: 'Times New Roman', Times, serif;
        /* font-weight: bold !important; */
        /* font-size: large !important; */
        padding: 0.75rem 1.5rem !important;
        margin: 1.5rem auto !important;
        display: block !important;
        min-width: 340px !important;
    }

    .modal-submit-btn {
        color: white !important;
        background-color: #bf9743 !important;
        border-color: #bf9743 !important;
        font-family: 'Times New Roman', Times, serif;

    }

    .modal-btn {
        color: white !important;
        background-color: #bf9743 !important;
        border-color: #bf9743 !important;
        font-family: 'Times New Roman', Times, serif;

    }

    .modal-submit-btn:hover,
    .modal-btn:hover {
        background-color: rgb(86, 133, 60) !important;
        border-color: rgb(86, 133, 60) !important;
    }

    .submitBtn:hover {
        background-color: rgb(86, 133, 60) !important;
        border-color: rgb(86, 133, 60) !important;
    }

    input::placeholder,
    textarea::placeholder {
        display: none !important;
        color: transparent !important;
    }

    .modal-dialog {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
    }
    input[type="checkbox"] {
    border: 1px solid var(--rm-secondary);
}
</style>
<main class="main">
    <!-- Hero -->
    <section id="pageTitle" class="page-title registration-page-title"
        style="background-image: url(assets/img/banners/MMregistration.jpg);">
        <div class="page-title-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Registration</h1>
                        <h2 class="title">The academic year 2024-2025 has now commenced and we are no longer taking registrations.</h2>
                    <h5 class="title">You may still complete a registration form. However please be aware that you will only be contacted if a space becomes available.</h5>
 
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div>
        <div class="overlay"></div>
    </section>
    <!-- End Hero -->

    <!-- Registration -->
    <section id="registration" class="registration-section d-flex align-items-center justify-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 registration-content">
                    <h2 class="section-title">Rawḍah Madrasah, Muṣṭafā
                        Mount, Bradford<br>
                        <small>Registration For New Students Aged 7-8 Years</small>
                    </h2>
                    <!-- <h6 class="section-sub-title">If your child is age 7 in September 2024, please complete the registration form below for a new class which will start in September 2024.</h6> -->
                    <div class="registration-tab-content">
                        <div class="registration">
                            <div class="reg-info">
                                <p>This registration form is for children who are 7 years of age on the 31st August 2024 and
                                    below the age of 9 years. In some cases, dependent on the ability of the child, we will consider applications for children who are aged 7 lunar year.</p>
                                <p>
                                    If your child meets the age criteria please complete the form below to register your child
                                    for a new class which will start in September 2024.</p>
                                <p>
                                    The Rawḍah Madrasah is a four year course. In order to benefit from the programme we
                                    expect your child will be attending for the duration of the whole course.</p>


                                <h6>Fees Information</h6>
                                <ul>
                                    <li>For information related to
                                        fees please visit the
                                        <a href="<?= base_url('parents') ?>">Parent’s page</a>
                                    </li>
                                    <li>Upon submitting your registration a member of our team will be in touch with you in
                                        order to take a deposit and complete your registration. We aim to do this within 10
                                        working days.</li>
                                    <!-- <li>A deposit of £250 will be required to process the registration.</li>
                                    <li>Upon submitting your registration, a member of our team will be in touch.</li>
                                    <li>Our admission team will contact you to take a deposit to complete your registration. We aim to do this in 10 working days.</li> -->
                                </ul>
                                <p>Please save the following email
                                addresses to your contacts <a href="mailto:info@rawdahmadrasah.co.uk">info@rawdahmadrasah.co.uk</a>,
                                    <a href="mailto:finance@greensvilletrust.org">finance@greensvilletrust.org</a> </p>
                                    <p>This will ensure that any correspondence from us is not sent to your junk mail.</p>
                                <!-- <p>(In exceptional circumstances, we can consider a child who is close to age 7 at the time of admission, especially if there is a sibling already enrolled at the Rawdah Madrasah)</p> -->
                            </div>
                            <form class="registration-tab-content" id="admission">


                                <!-- for local  -->
                                <!-- <input type="hidden" id="class-one" name="class_ids" value="5" checked /> -->
                                <!-- for live  -->
                                <input type="hidden" id="class-one" name="class_ids" value="13" checked />



                                <div class="row">
                                    <div class="registration">



                                        <div class="row g-3 form-section">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">My child is currently on the
                                                        following
                                                        level of Arabic</label>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" checked name="ArabicLevels" id="ArabicLevelsBasic" value="Basic">
                                                        <label class="form-check-label" for="ArabicLevelsBasic"><small>Basic</small></label>
                                                        <p>Has not reached the level of reading Arabic in the Qur'ān.</p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="ArabicLevels" id="ArabicLevelsIntermediate" value="Intermediate">
                                                        <label class="form-check-label" for="ArabicLevelsIntermediate"><small> Intermediate
                                                            </small></label>
                                                        <p>Has reached the level of reading the Qur'ān and is developing skills in applying tajweed rules appropriately.
                                                        </p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="ArabicLevels" id="ArabicLevelsAdvanced" value="Advanced">
                                                        <label class="form-check-label" for="ArabicLevelsAdvanced"><small>
                                                                Advanced</small></label>
                                                        <p>Can read the Qur'ān fluently with all the
                                                            tajweed
                                                            rules.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 form-section">
                                            <h5>Child’s Details</h5>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Legal forename*</label>

                                                    <input type="text" class="form-control" name="ChildForename" placeholder="Enter your legal forename">


                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Middle name(s)</label>
                                                    <input type="text" class="form-control" name="ChildMiddleName" placeholder="Enter your middle name">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Preferred forename*</label>
                                                    <input type="text" class="form-control" name="Child_Pref_Forename" placeholder="Enter your preferred forename">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Legal surname*</label>

                                                    <input type="text" class="form-control" name="ChildLegalSurname" placeholder="Enter your legal surname*">

                                                </div>

                                            </div>

                                            <div class="col-12">
                                                <h6 class="form-section-sub-title">Address*</h6>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>

                                                    <input type="text" class="form-control" name="ChildAddress" placeholder="Enter your address">

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>

                                                    <input type="text" class="form-control" name="ChildCity" placeholder="Enter your city">

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postcode</label>

                                                    <input type="text" class="form-control" name="ChildPostCode" placeholder="Enter your postcode">

                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <p>The above address will be used for all correspondence unless
                                                    you
                                                    provide an alternative address at the
                                                    end of this form</p>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Child’s date of birth*</label>

                                                    <input type="text" class="form-control " readonly="readonly" name="ChildDOB" placeholder="Enter your date of birth " id="admission_date">

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Gender</label>
                                                    <select class="form-select" aria-label="Default" name="Gender">
                                                        <option selected value="Male">
                                                            Male
                                                        </option>
                                                        <option value="Female">
                                                            Female
                                                        </option>
                                                        <!-- <option value="Other">
                                                    Other
                                                </option> -->

                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Ethnicity*</label>

                                                    <input type="text" class="form-control" name="Ethnicity" placeholder="Ethnicity">

                                                </div>

                                            </div>
                                        </div>

                                        <!-- <div class="row g-3 form-section">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Which passport does your child
                                                hold?*</label>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" checked name="whichPassport" id="whichPassportUk" value="Uk">
                                                <label class="form-check-label" for="whichPassportUk"><small>Uk</small></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="whichPassport" id="whichPassportEEA">
                                                <label class="form-check-label" for="whichPassportEEA"><small>
                                                        EEA (Please Specify Below) </small></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="whichPassport" id="whichPassportOther">
                                                <label class="form-check-label" for="whichPassportOther"><small>
                                                        Other (please specify below)</small></label>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">If ‘EEA’ or ‘Other’ was selected
                                                above,
                                                please specify your child’s nationality and your current
                                                VISA status:</label>
                                            <textarea class="form-control" rows="3" name="ChildOtherPassport" placeholder="your current VISA status:"></textarea>

                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 form-section">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Child’s
                                                hobbies/interests/achievements</label>
                                            <textarea class="form-control" rows="3" name="ChildHobbies" placeholder="hobbies/interests/achievements"></textarea>

                                        </div>
                                    </div>
                                </div> -->

                                        <div class="row g-3 form-section">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Does you child have any special educational needs or disabilities that we need to
                                                        be aware of?*</label>


                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="disability" id="disabilityYes" value="Yes">
                                                        <label class="form-check-label" for="disabilityYes"><small>Yes</small></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" checked name="disability" id="disabilityNo" value="No">
                                                        <label class="form-check-label" for="disabilityNo"><small>No</small></label>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Details</label>
                                                    <textarea class="form-control" rows="3" name="disabilityDetails" placeholder="Enter your details"></textarea>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 form-section">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Does your child have any allergies?*</label>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="medicalConditions" id="medicaConditionsYes" value="Yes">
                                                        <label class="form-check-label" for="medicaConditionsYes"><small>Yes</small></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="medicalConditions" id="medicaConditionsNo" checked value="No">
                                                        <label class="form-check-label" for="medicaConditionsNo"><small>No</small></label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Please give details of any
                                                        allergies
                                                        or
                                                        medical conditions below</label>
                                                    <textarea class="form-control" rows="3" name="medicalConditionsInfo" placeholder="Enter your message"></textarea>

                                                </div>
                                            </div>
                                            <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Please add any other information
                                                you
                                                would
                                                like to share</label>
                                            <textarea class="form-control" rows="3" name="OtherInfo" placeholder="Enter your message">

                                </textarea>

                                        </div>
                                    </div> -->
                                            <div class="col-12">
                                                <h6 class="form-section-sub-title">Doctor / Medical Practice
                                                </h6>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Name*</label>
                                                    <input type="text" class="form-control" name="DoctorName" placeholder="Enter your name">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Address*</label>
                                                    <input type="text" class="form-control" name="DoctorAddress" placeholder="Enter your address">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City*</label>
                                                    <input type="text" class="form-control" name="DoctorCity" placeholder="Enter your city">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postcode*</label>
                                                    <input type="text" class="form-control" name="DoctorPostcode" placeholder="Enter your postcode">

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Telephone*</label>

                                                    <input type="tel" class="form-control" name="doctorTelephone" placeholder="Enter your phone number ">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row g-3 form-section">
                                            <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Proposed year of entry</label>
                                            <select class="form-select" aria-label="Default" name="proposedYear">
                                                <option value="2023" selected>2023
                                                </option>
                                                <option value="2022">
                                                    2022
                                                </option>
                                                <option value="2021">
                                                    2021
                                                </option>
                                                <option value="2020">
                                                    2020
                                                </option>

                                            </select>

                                        </div>
                                    </div> -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">In September 2024 which school
                                                    year will your child be in?</label>
                                                    <select class="form-select" aria-label="Default" name="CurrentYear" id="currentyear">


                                                        <option value="Year 4">
                                                            Year 4
                                                        </option>
                                                        <option value="Year 3">
                                                            Year 3
                                                        </option>
                                                        <option value="Year 2">
                                                            Year 2
                                                        </option>
                                                        <option value="Home Schooled">
                                                            Home Schooled
                                                        </option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 form-section">
                                            <div class="col-12">
                                                <h5 class="form-section-title">Parent/Guardian 1 (This is the parent with whom
                                                the child mainly resides)</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Title</label>
                                                    <select class="form-select" aria-label="Default" name="Guardian1_Title">
                                                        <option value="Mr." selected>Mr.
                                                        </option>
                                                        <option value="Mrs.">Mrs.
                                                        </option>
                                                        <option value="Miss">Miss
                                                        </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First name*</label>

                                                    <input type="text" class="form-control" name="Guardian1_fname" placeholder="Enter your first name ">

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Middle name</label>
                                                    <input type="text" class="form-control" name="Guardian1_mname" placeholder="Enter your middle name">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Surname*</label>

                                                    <input type="text" class="form-control" name="Guardian1_sname" placeholder="Enter your surname">

                                                </div>

                                            </div>
                                            <div class="parent1adresscheck">
                                    <input class="form-check-input" type="checkbox" name="parent1adresscheck" id="parent1adresscheck">
                                                <label class="form-check-label" for="parent1adresscheck">&nbsp;Address is same as the child</label>
                                    </div>
                                    <div class="parent1adressdiv">
                                            <div class="col-12">
                                                <h6 class="form-section-sub-title">Address (if different from
                                                    child’s)</h6>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="Guardian1_address" placeholder="Enter your address">

                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control" name="Guardian1_City" placeholder="Enter your city">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postcode*</label>
                                                    <input type="text" class="form-control" name="Guardian1_postcode" placeholder="Enter your postcode">

                                                </div>
                                            </div>
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Home telephone*</label>

                                                    <input type="tel" class="form-control" name="Guardian1_telephone" placeholder="Enter your phone number ">

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Mobile telephone*</label>

                                                    <input type="tel" class="form-control" name="Guardian1_mobile" placeholder="Enter your mobile number">

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Other/work telephone</label>
                                                    <input type="tel" class="form-control" name="Guardian1_workTel" placeholder="Enter your other/work telephone">

                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Email*</label>

                                                    <input type="email" class="form-control" name="Guardian1_email" placeholder="Enter your email ">

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Relationship to child*</label>
                                                    <select name="Guardian1_relation" id="Guardian1_relation" class="form-select">
                                                        <option value="Father" selected>Father</option>
                                                        <option value="Mother">Mother</option>
                                                        <option value="Other">Guardian</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" name="Guardian1_relation" placeholder="eg mother, father etc"> -->

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Occupation*</label>

                                                    <input type="text" class="form-control" name="Guardian1_occupation" placeholder="Enter your occupation">

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row g-3 form-section">
                                            <div class="col-12">
                                            <label class="form-label">Are you a single parent and do not wish to provide this information?</label>
                                <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="singleparentcheck" id="singleparentcheckYes" value="1">
                                                <label class="form-check-label" for="singleparentcheckYes"><small>Yes</small></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="singleparentcheck" id="singleparentcheckNo" checked value="0">
                                                <label class="form-check-label" for="singleparentcheckNo"><small>No</small></label>
                                            </div>

                                </div>
                                                <h5 class="form-section-title">Parent/Guardian 2</h5>
                                                <!-- <small> (If you are a single parent, please provide details of another emergency contact in case we are unable to contact you.) </small> -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Title</label>
                                                    <select class="form-select" aria-label="Default" name="Guardian2_Title">
                                                        <option value="Mrs." selected>
                                                            Mrs.
                                                        </option>
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Miss">Miss
                                                        </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First name*</label>

                                                    <input type="text" class="form-control" name="Guardian2_fname" placeholder="Enter your first name ">

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Middle name</label>
                                                    <input type="text" class="form-control" name="Guardian2_mname" placeholder="Enter your middle name">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Surname*</label>

                                                    <input type="text" class="form-control" name="Guardian2_sname" placeholder="Enter your surname">

                                                </div>

                                            </div>
                                            <div class="parent2adresscheck">
                                    <input class="form-check-input" type="checkbox" name="parent2adresscheck" id="parent2adresscheck">
                                                <label class="form-check-label" for="parent2adresscheck">&nbsp;Address is same as the child</label>
                                    </div>
                                    <div class="parent2adressdiv">
                                            <div class="col-12">
                                                <h6 class="form-section-sub-title">Address (if different from
                                                    child’s)</h6>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="Guardian2_address" placeholder="Enter your address">

                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control" name="Guardian2_City" placeholder="Enter your city">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postcode</label>
                                                    <input type="text" class="form-control" name="Guardian2_postcode" placeholder="Enter your postcode">

                                                </div>
                                            </div>
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Home telephone*</label>

                                                    <input type="tel" class="form-control" name="Guardian2_telephone" placeholder="Enter your phone number ">

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Mobile telephone*</label>

                                                    <input type="tel" class="form-control" name="Guardian2_mobile" placeholder="Enter your mobile number">

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Other/work telephone</label>
                                                    <input type="tel" class="form-control" name="Guardian2_workTel" placeholder="Enter your other/work telephone">

                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Email*</label>

                                                    <input type="email" class="form-control" name="Guardian2_email" placeholder="Enter your email ">

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Relationship to child*</label>
                                                    <select name="Guardian2_relation" id="Guardian2_relation" class="form-select">
                                                        <option value="Father">Father</option>
                                                        <option value="Mother" selected>Mother</option>
                                                        <option value="Other">Guardian</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" name="Guardian2_relation" placeholder="eg mother, father etc"> -->

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Occupation*</label>

                                                    <input type="text" class="form-control" name="Guardian2_occupation" placeholder="Enter your occupation">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row g-3 form-section">
                                            <div class="col-12 row">
                                                <h5 class="form-section-title">
                                                Emergency Contact Details
                                                </h5>

                                                <p>In the event we are unable to contact you in an emergency please provide details of who to contact.</p>
                                                

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emergencyforename" class="form-label">Forename*</label>
                                                        <input type="text" class="form-control" id="emergencyforename" name="emergencyforename">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emergencysurname" class="form-label">Surname*</label>
                                                        <input type="text" class="form-control" id="emergencysurname" name="emergencysurname">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emergencycontact" class="form-label">Contact Number*</label>
                                                        <input type="text" class="form-control" id="emergencycontact" name="emergencycontact">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emergencyemail" class="form-label">Email*</label>
                                                        <input type="text" class="form-control" id="emergencyemail" name="emergencyemail">
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>

                                        <div class="row g-3 form-section">
                                            <div class="col-12">
                                                <h5 class="form-section-title">Payments</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Invoices for payments are to be emailed to:</label>
                                                    <select name="invoice_to" id="invoice_to" class="form-select">
                                                        <option value="Parent / Guardian 1">Parent / Guardian 1</option>
                                                        <option value="Parent / Guardian 2">Parent / Guardian 2</option>
                                                        <!-- <option value="Both Parents">Both Parents</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 form-section">
                                            <div class="col-md-12">
                                                <!-- <h5 class="form-section-title">Sibling(s) Attending Rawdah</h5> -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Does the child you are registering have a
sibling/s currently attending the Rawḍah
Madrasah?*</label>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sibling_attending" id="sibling_attendingYes" value="Yes">
                                                        <label class="form-check-label" for="sibling_attendingYes"><small>Yes</small></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sibling_attending" id="sibling_attendingNo" checked value="No">
                                                        <label class="form-check-label" for="sibling_attendingNo"><small>No</small></label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Please give details of name of sibling(s) attending the Rawḍah and their date of birth:</label>
                                                    <textarea class="form-control" rows="3" name="siblings_detail" placeholder="Enter your message"></textarea>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 form-section">
                                            <div class="col-12">
                                                <h5 class="form-section-title">Please provide
                                                details about your child’s current schooling</h5>
                                            </div>
                                            <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Names of any siblings either being
                                                registered for the Rawdah or currently
                                                attending:</label>
                                            <input type="text" class="form-control" name="siblingName" placeholder="Names of any siblings">
                                        </div>
                                    </div> -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">My child is home schooled.</label>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="homeschooled" id="homeschooledYes" value="Yes">
                                                        <label class="form-check-label" for="homeschooledYes"><small>Yes</small></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="homeschooled" id="homeschooledNo" checked value="No">
                                                        <label class="form-check-label" for="homeschooledNo"><small>No</small></label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Name of current school</label>

                                                    <input type="text" class="form-control" name="presentSchool" placeholder="Name of present school">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Name of headteacher</label>

                                                    <input type="text" class="form-control" name="presentSchool_headteacher" placeholder="Name of headteacher">
                                                </div>

                                            </div>

                                            <div class="col-12">
                                                <h6 class="form-section-sub-title"></h6>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="Sibling_address" placeholder="Enter your address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control" name="Sibling_city" placeholder="Enter your city">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postcode</label>
                                                    <input type="text" class="form-control" name="Sibling_postcode" placeholder="Enter your postcode">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 form-section">
                                            <div class="col-12">
                                                <h5 class="form-section-title">Preferred Method of Payment</h5>
                                                <div class="form-group">
                                                    <select class="form-select" aria-label="Default" name="payMethod">

                                                        <option value="0" selected> Full Payment after deposit
                                                        </option>


                                                        <option value="1">
                                                            Two Instalments after deposit
                                                        </option>


                                                        <option value="2">
                                                            Monthly Payments
                                                        </option>


                                                    </select>

                                                </div>
                                                <br>
                                        <input type="hidden" name="termsandconditions_check" value="Agree">
                                        <input type="hidden" name="photos_permission_check" value="Disagree" id="photos_permission_check">
                                                <div style="display:flex; margin:auto;">
                                                    <!-- <p class="text-danger">Please fill the captcha*</p> -->
                                                    <!-- <div class="g-recaptcha"style="display:flex; margin:auto;" data-sitekey="6Ldx_bspAAAAAIZvuUma-ifE97wkDwnxvU17x_lw"></div> -->
                                                    <div class="g-recaptcha" style="display:flex; margin:auto;" data-sitekey="6LfOBdUpAAAAADp7CJoC1HIf6OTauJlLs19vCFC_"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center ">
                                                <button type="button" class="btn btn-primary submitBtn" data-toggle="modal" data-target="#termsModal">Register
                                                    Now
                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- End Registration -->


    <!-- Bootstrap Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
                </div>
                <div class="modal-body">
                    <p>Please read and agree to the terms and conditions before submitting.</p>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheckbox">
                        <label class="form-check-label" for="termsCheckbox">I have read this agreement, understood its content and agree to its <a target="_blank" href="<?= base_url('termsandconditions') ?>">terms and conditions.</a> I also declare that the information given on this form is correct and agree that my child/children will abide by the rules and regulations of the Rawḍah. I agree to receive correspondence from Greensville Trust unless I specify otherwise.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="photographyCheckbox">
                        <label class="form-check-label" for="photographyCheckbox">I give permission for my child's/children's photograph and video to be used for displays and marketing purposes.</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modal-btn" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning modal-submit-btn " id="submitButton" disabled>Submit</button>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>



<script>
    $(document).ready(function() {
        $('#parent2adresscheck').click(function(){
        if($(this).prop('checked')){
            $('.parent2adressdiv').addClass('d-none');
        }
        else{
            $('.parent2adressdiv').removeClass('d-none');
        }
    });
    $('#parent1adresscheck').click(function(){
        if($(this).prop('checked')){
            $('.parent1adressdiv').addClass('d-none');
        }
        else{
            $('.parent1adressdiv').removeClass('d-none');
        }
    });
        $('#submitButton').click(function(e) {
            e.preventDefault();
            $('.modal-btn').click();
            $('#admission').submit();

        });

        $('#admission').validate({
            rules: {
                'ArabicLevels': 'required',
                'ChildForename': 'required',
                'Child_Pref_Forename': 'required',
                'ChildLegalSurname': 'required',
                'ChildAddress': 'required',
                'ChildCity': 'required',
                'ChildPostCode': 'required',
                'ChildDOB': 'required',
                'Gender': 'required',
                'Ethnicity': 'required',
                // 'whichPassport': 'required',
                'disability': 'required',
                'disabilityDetails': {
                    required: function(element) {
                        return $('input[name=disability]:checked').val() === 'Yes';
                    }
                },
                'medicalConditions': 'required',
                'medicalConditionsInfo': {
                    required: function(element) {
                        return $('input[name=medicalConditions]:checked').val() === 'Yes';
                    }
                },
                'DoctorName': 'required',
                'doctorTelephone':{
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                },
                'DoctorAddress': 'required',
                'DoctorPostcode': 'required',
                'Guardian1_fname': 'required',
                'Guardian1_sname': 'required',
                'Guardian1_telephone': {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                },
                'Guardian1_mobile': {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                },
                'Guardian1_email': {
                    required: true,
                    email: true
                },
                'Guardian1_postcode': 'required',
                'Guardian1_relation': 'required',
                'Guardian1_occupation': 'required',
                'Guardian2_fname':  {
                    required: function(element) {
                         return $('input[name=singleparentcheck]:checked').val() === '0';
                    }
                },
                'Guardian2_sname':  {
                    required: function(element) {
                         return $('input[name=singleparentcheck]:checked').val() === '0';
                    }
                },
                'Guardian2_telephone': {
                    
                    required: function(element) {
                         return $('input[name=singleparentcheck]:checked').val() === '0';
                    
                },
                    
                    maxlength: 11,
                },
                'Guardian2_mobile': {
                   
                    required: function(element) {
                         return $('input[name=singleparentcheck]:checked').val() === '0';
                    
                },
                    
                    maxlength: 11,
                },
                'Guardian2_email': {
                     
                    required: function(element) {
                         return $('input[name=singleparentcheck]:checked').val() === '0';
                    
                },
                    email: true
                },
                'Guardian2_relation':  {
                    required: function(element) {
                         return $('input[name=singleparentcheck]:checked').val() === '0';
                    }
                },
                'Guardian2_occupation':  {
                    required: function(element) {
                        return $('input[name=singleparentcheck]:checked').val() === '0';
                    }
                },
                'siblings_detail': {
                    required: function(element) {
                        return $('input[name=sibling_attending]:checked').val() === 'Yes';
                    }
                },
                'presentSchool': {
                    required: function(element) {
                        return $('input[name=homeschooled]:checked').val() === 'No';
                    }
                },
                'presentSchool_headteacher': {
                    required: function(element) {
                        return $('input[name=homeschooled]:checked').val() === 'No';
                    }
                },
                'Guardian1_address': {
                    required: function(element) {
                        return $('input[name=parent1adresscheck]:checked').length < 1;
                    }
                },

                'Guardian1_City': {
                    required: function(element) {
                       return $('input[name=parent1adresscheck]:checked').length < 1;
                    }
                },
                'Guardian1_postcode': {
                    required: function(element) {
                       return $('input[name=parent1adresscheck]:checked').length < 1;
                    }
                },
                'Guardian2_address': {
                    required: function(element) {
                        $('input[name=singleparentcheck]:checked').val() === '0';
                    }
                },

                'Guardian2_City': {
                    required: function(element) {
                       $('input[name=singleparentcheck]:checked').val() === '0';
                    }
                },
                'Guardian2_postcode': {
                    required: function(element) {
                       $('input[name=singleparentcheck]:checked').val() === '0';
                    }
                },
                'emergencyforename': {
                    required: true
                },
                'emergencysurname': {
                    required: true
                },
                'emergencycontact': {
                    required: true,
                    minlength: function(element) {
                        return $('input[name=singleparentcheck]:checked').val() === '1' ? 11 : 0;
                    },
                    maxlength: function(element) {
                        return $('input[name=singleparentcheck]:checked').val() === '1' ? 11 : 11;
                    }
                },
                'emergencyemail': {
                    required: true
                },



            },
            messages: {
                'ChildForename': 'Child Forename is required.',
                'ChildLegalSurname': 'Child  Surname is required.',
                'ChildAddress': 'Child Address is required.',
                'ChildCity': 'Child City is required.',
                'ChildPostCode': 'Child Post Code is required.',
                'ChildDOB': 'Child Date of Birth is required.',
                'Gender': 'Gender is required.',
                'whichPassport': 'Passport is required.',
                'disability': 'Disability field is required.',
                'doctorTelephone': 'Doctor Telephone is required and must be of 11 digits.',
                'Guardian1_fname': 'Guardian First Name is required.',
                'Guardian1_sname': 'Guardian Surname is required.',
                'Guardian1_telephone': 'Guardian Telephone is required and must be of 11 digits.',
                'Guardian1_mobile': 'Guardian Mobile is required and must be of 11 digits.',
                'Guardian1_email': {
                    required: 'Guardian Email is required.',
                    email: 'Please enter a valid email address for Guardian Email.'
                },
                'Guardian1_relation': 'Guardian Relation is required.',
                'Guardian1_occupation': 'Guardian Occupation is required.',
                'Guardian2_fname': 'Guardian First Name is required.',
                'Guardian2_sname': 'Guardian Surname is required.',
                'Guardian2_telephone': 'Guardian Telephone is required and must be of 11 digits.',
                'Guardian2_mobile': 'Guardian Mobile is required and must be of 11 digits.',
                'Guardian2_email': {
                    required: 'Guardian Email is required.',
                    email: 'Please enter a valid email address for Guardian Email.'
                },
                'Guardian2_relation': 'Guardian Relation is required.',
                'Guardian2_occupation': 'Guardian Occupation is required.',
                'presentSchool': 'Present School is required.',
                'presentSchool_headteacher': 'Present School Headteacher is required.'

            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid').addClass('is-valid');
            },
            submitHandler: function(form) {
                jQuery('#preloader').show();
                jQuery('#loading').show();
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('home/register') ?>',
                    data: $(form).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        $('#preloader').hide();
                        $('#loading').hide();

                        if (response.success === true) {

                            window.scrollTo({
                                top: 0,
                                left: 0,
                                behavior: 'smooth'
                            });
                            form.reset();
                            grecaptcha.reset();
                            $('#preloader').hide();
                            $('#loading').hide();
                            window.location.href = "<?= base_url('home/thankyou') ?>";

                            toastr.success('Application Submitted', 'Success');
                        } else {
                            grecaptcha.reset();
                            $('#preloader').hide();
                            $('#loading').hide();
                            toastr.error(response.message, 'Error');
                            // console.log(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        grecaptcha.reset();
                        $('#preloader').hide();
                        $('#loading').hide();
                        // toastr.error(error, 'Error');
                    }
                });


            }
        });
    });
    $(function() {

        // var currentYear = new Date().getFullYear();
        // var minYear = currentYear - 11;
        // $("#admission_date").datepicker({
        //     dateFormat: 'mm/dd/yy',
        //     changeMonth: true,
        //     changeYear: true,
        //     minDate: new Date(minYear, 0, 1),

        // });
        var minDate = new Date(2016, 6, 30); // 30th July 2016
var maxDate = new Date(2017, 10, 16); // 16th November 2017

$("#admission_date").datepicker({
    dateFormat: 'mm/dd/yy',
    minDate: minDate,
    maxDate: maxDate,
    changeMonth: true,
    changeYear: true,
    onSelect: function(dateText, inst) {
        var selectedDate = $(this).datepicker('getDate');
        if (selectedDate < minDate) {
            alert("Sorry, your child is too young to register for the new class.");
            $(this).datepicker('setDate', null); // Clear the selected date
        } else if (selectedDate > maxDate) {
            alert("Sorry, your child is too old to register for the new class.");
            $(this).datepicker('setDate', null); // Clear the selected date
        }
    }
});

    });

    $(document).ready(function() {
        $('#termsCheckbox').on('change', function() {
            if ($(this).is(':checked')) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        });
    });

    $('#photographyCheckbox').click(function() {
    if ($(this).prop('checked')) {
        $('#photos_permission_check').val('Agree');
    } else {
        $('#photos_permission_check').val('Disagree');
    }
    });
</script>