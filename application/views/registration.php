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

    .submitBtn:hover {
        background-color: rgb(86, 133, 60) !important;
        border-color: rgb(86, 133, 60) !important;
    }
</style>
<!-- Main Body -->
<main class="main">
    <!-- Hero -->
    <section id="pageTitle" class="page-title registration-page-title" style="background-image: url(assets/img/banners/registration.jpg);">
        <div class="page-title-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Registration</h1>
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
                    <h2 class="section-title">Please complete the following form to register your child</h2>

                    <!-- form -->
                    <form class="registration-tab-content" id="admission">

                        <nav>
                            <div class="nav nav-tabs tabs-center tabs-secondary" id="nav-tab" role="tablist">
                                <div class="switch-field">
                                    <input type="radio" id="class-one" name="class_ids" value="5" checked />
                                    <label for="class-one">Mustafa Mount </label>
                                    <input type="radio" id="class-two" name="class_ids" value="6" />
                                    <label for="class-two"> Felicity House </label>
                                </div>
                            </div>
                        </nav>
                        <div class="row">
                            <div class="registration">
                                <div class="reg-info">
                                    <p>For information about the fees for a student,
                                        please visit the parent’s page or <a href="#">CLICK HERE.</a></p>
                                    <p>A deposit of £250 will be required to process the registration.</p>
                                    <p>Upon submitting your registration, a member of our team will be in
                                        touch.
                                    </p>
                                    <p>Our admission team will contact you to take a deposit to complete
                                        your
                                        registration. We aim to do this in 10 working days.</p>
                                    <p>Please save our email address in your contacts
                                        <a href="#">(info@rawdahmadrasah.co.uk)</a>to ensure our messages
                                        are being received and
                                        not going to junk mail.
                                    </p>
                                </div>


                                <div class="row g-3 form-section">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">My child is currently on the
                                                following
                                                levels of Arabic</label>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" checked name="ArabicLevels" id="ArabicLevelsBasic" value="Basic">
                                                <label class="form-check-label" for="ArabicLevelsBasic"><small>Basic</small></label>
                                                <p>(Has not reached the level of reading Arabic in the
                                                    Holy
                                                    Qur’ān)</p>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ArabicLevels" id="ArabicLevelsIntermediate" value="Intermediate">
                                                <label class="form-check-label" for="ArabicLevelsIntermediate"><small> Intermediate
                                                    </small></label>
                                                <p>(Has reached the level of reading Qur’ān, still trying
                                                    to
                                                    gain
                                                    mastery of the tajweed rules)
                                                </p>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ArabicLevels" id="ArabicLevelsAdvanced" value="Advanced">
                                                <label class="form-check-label" for="ArabicLevelsAdvanced"><small>
                                                        Advanced</small></label>
                                                <p>(can read Qur’ān fluently with all the
                                                    tajweed
                                                    rules)
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 form-section">
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
                                            <label class="form-label">Preferred forename</label>
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
                                            <label class="form-label"><small>Address</small></label>

                                            <input type="text" class="form-control" name="ChildAddress" placeholder="Enter your address">

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>City</small></label>

                                            <input type="text" class="form-control" name="ChildCity" placeholder="Enter your city">

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>Postcode</small></label>

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
                                                <option value="Other">
                                                    Other
                                                </option>

                                            </select>

                                        </div>

                                    </div>
                                </div>

                                <div class="row g-3 form-section">
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
                                </div>

                                <div class="row g-3 form-section">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Does your child have any special
                                                educational need or disability that we need to be aware
                                                of?*</label>


                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="disability" id="disabilityYes">
                                                <label class="form-check-label" for="disabilityYes"><small>Yes</small></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" checked name="disability" id="disabilityNo">
                                                <label class="form-check-label" for="disabilityNo"><small>No</small></label>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Details:</label>
                                            <textarea class="form-control" rows="3" name="disabilityDetails" placeholder="Enter your details"></textarea>

                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 form-section">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Does your child have any allergies
                                                or
                                                medical conditions that we need to be aware of?</label>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="medicalConditions" id="medicaConditionsYes">
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Please add any other information
                                                you
                                                would
                                                like to share</label>
                                            <textarea class="form-control" rows="3" name="OtherInfo" placeholder="Enter your message">

                                </textarea>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h6 class="form-section-sub-title">Doctor / Medical Practice
                                        </h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="DoctorName" placeholder="Enter your name">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" name="DoctorAddress" placeholder="Enter your address">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" name="DoctorCity" placeholder="Enter your city">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Postcode</label>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Proposed year of entry</label>
                                            <select class="form-select" aria-label="Default" name="proposedYear">
                                                <option value="2026">2026
                                                </option>
                                                <option value="2025">
                                                    2025
                                                </option>
                                                <option value="2024">
                                                    2024
                                                </option>
                                                <option value="2023" selected>
                                                    2023
                                                </option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">What is the current year in school
                                                of your child ? </label>
                                            <select class="form-select" aria-label="Default" name="CurrentYear" id="currentyear">

                                                <option value="Year 8">
                                                    Year 8
                                                </option>
                                                <option value="Year 7">
                                                    Year 7
                                                </option>
                                                <option value="Year 6">
                                                    Year 6
                                                </option>
                                                <option value="Year 5">
                                                    Year 5
                                                </option>
                                                <option value="Year 4">
                                                    Year 4
                                                </option>
                                                <option value="Year 3">
                                                    Year 3
                                                </option>
                                                <option value="Year 2">
                                                    Year 2
                                                </option>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 form-section">
                                    <div class="col-12">
                                        <h5 class="form-section-title">Father/Guardian 1</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Title</label>
                                            <select class="form-select" aria-label="Default" name="Guardian1_Title">
                                                <option value="Mr." selected>Mr.
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
                                    <div class="col-12">
                                        <h6 class="form-section-sub-title">Address (if different from
                                            child’s)</h6>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label"><small>Address</small></label>
                                            <input type="text" class="form-control" name="Guardian1_address" placeholder="Enter your address">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>City</small></label>
                                            <input type="text" class="form-control" name="Guardian1_City" placeholder="Enter your city">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>Postcode</small></label>
                                            <input type="text" class="form-control" name="Guardian1_postcode" placeholder="Enter your postcode">

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

                                            <input type="text" class="form-control" name="Guardian1_relation" placeholder="eg mother, father etc">

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
                                        <h5 class="form-section-title">Mother/Guardian 2</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Title</label>
                                            <select class="form-select" aria-label="Default" name="Guardian2_Title">
                                                <option value="Mrs.">
                                                    Mrs.
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
                                    <div class="col-12">
                                        <h6 class="form-section-sub-title">Address (if different from
                                            child’s)</h6>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label"><small>Address</small></label>
                                            <input type="text" class="form-control" name="Guardian2_address" placeholder="Enter your address">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>City</small></label>
                                            <input type="text" class="form-control" name="Guardian2_City" placeholder="Enter your city">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>Postcode</small></label>
                                            <input type="text" class="form-control" name="Guardian2_postcode" placeholder="Enter your postcode">

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

                                            <input type="text" class="form-control" name="Guardian2_relation" placeholder="eg mother, father etc">

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
                                    <div class="col-12">
                                        <h5 class="form-section-title">Other information</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Names of any siblings either being
                                                registered for the Rawḍah or currently
                                                attending:</label>
                                            <input type="text" class="form-control" name="siblingName" placeholder="Names of any siblings">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name of present school*</label>

                                            <input type="text" class="form-control" name="presentSchool" placeholder="Name of present school">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name of headteacher*</label>

                                            <input type="text" class="form-control" name="presentSchool_headteacher" placeholder="Name of headteacher">
                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <h6 class="form-section-sub-title"></h6>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label"><small>Address</small></label>
                                            <input type="text" class="form-control" name="Sibling_address" placeholder="Enter your address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>City</small></label>
                                            <input type="text" class="form-control" name="Sibling_city" placeholder="Enter your city">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label"><small>Postcode</small></label>
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
                                                    Monthly Payments (Exceptional Grounds)
                                                </option>


                                            </select>

                                        </div>
                                        <br>
                                        <div style="display:flex; margin:auto;">
                                            <!-- <p class="text-danger">Please fill the captcha*</p> -->
                                            <!-- <div class="g-recaptcha"style="display:flex; margin:auto;" data-sitekey="6Ldx_bspAAAAAIZvuUma-ifE97wkDwnxvU17x_lw"></div> -->
                                            <div class="g-recaptcha" style="display:flex; margin:auto;" data-sitekey="6LfOBdUpAAAAADp7CJoC1HIf6OTauJlLs19vCFC_"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center ">
                                        <button type="submit" class="btn btn-primary submitBtn">Register
                                            Now
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </div>
            </div>

           
        </div>
        </div>


        </div>
        </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- End Registration -->
</main>
<!-- End Main Body -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>



<script>
    $(document).ready(function() {
        $('#admission').validate({
            rules: {
                'ArabicLevels': 'required',
                'ChildForename': 'required',
                'ChildLegalSurname': 'required',
                'ChildAddress': 'required',
                'ChildCity': 'required',
                'ChildPostCode': 'required',
                'ChildDOB': 'required',
                'Gender': 'required',
                'whichPassport': 'required',
                'disability': 'required',
                'doctorTelephone': 'required',
                'Guardian1_fname': 'required',
                'Guardian1_sname': 'required',
                'Guardian1_telephone': 'required',
                'Guardian1_mobile': 'required',
                'Guardian1_email': {
                    required: true,
                    email: true
                },
                'Guardian1_relation': 'required',
                'Guardian1_occupation': 'required',
                'Guardian2_fname': 'required',
                'Guardian2_sname': 'required',
                'Guardian2_telephone': 'required',
                'Guardian2_mobile': 'required',
                'Guardian2_email': {
                    required: true,
                    email: true
                },
                'Guardian2_relation': 'required',
                'Guardian2_occupation': 'required',
                'presentSchool': 'required',
                'presentSchool_headteacher': 'required'


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
                'doctorTelephone': 'Doctor Telephone is required.',
                'Guardian1_fname': 'Guardian First Name is required.',
                'Guardian1_sname': 'Guardian Surname is required.',
                'Guardian1_telephone': 'Guardian Telephone is required.',
                'Guardian1_mobile': 'Guardian Mobile is required.',
                'Guardian1_email': {
                    required: 'Guardian Email is required.',
                    email: 'Please enter a valid email address for Guardian Email.'
                },
                'Guardian1_relation': 'Guardian Relation is required.',
                'Guardian1_occupation': 'Guardian Occupation is required.',
                'Guardian2_fname': 'Guardian First Name is required.',
                'Guardian2_sname': 'Guardian Surname is required.',
                'Guardian2_telephone': 'Guardian Telephone is required.',
                'Guardian2_mobile': 'Guardian Mobile is required.',
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
                            window.location.href = "<?=base_url('home/thankyou')?>";

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

        var currentYear = new Date().getFullYear();
        var minYear = currentYear - 11;
        $("#admission_date").datepicker({
            dateFormat: 'mm/dd/yy',
            changeMonth: true,
            changeYear: true,
            minDate: new Date(minYear, 0, 1),

        });
    });
</script>