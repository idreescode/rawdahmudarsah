<style>
    label.error {
        color: red !important;
        font-size: small !important;
    }
    .g-recaptcha{
        margin-left: 70px !important;
    }
    .submitbtn{
        width: 24vw;
    }
    input::placeholder {
            font-size: 15px;
        }
</style>
<!-- Main Body -->
<main class="main">
    <!-- Hero -->
    <section id="pageTitle" class="page-title contact-page-title" style="background-image: url(assets/img/banners/contact.jpg);">
        <div class="page-title-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Contact Us</h1>

                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div>
        <div class="overlay"></div>
    </section>
    <!-- End Hero -->
    <!-- Contact Us -->
    <section id="contact" class="contact-us-section d-flex align-items-center justify-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 contact-us-content">
                    <div class="contact-us-tab-content">
                        <nav>
                            <div class="nav nav-tabs tabs-center tabs-secondary" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="ContactUsMustafaMountTab" data-bs-toggle="tab" data-bs-target="#ContactUsMustafaMount" type="button" role="tab">Mustafa
                                    Mount</button>

                                <button class="nav-link" id="ContactUsFelicityHouseTab" data-bs-toggle="tab" data-bs-target="#ContactUsFelicityHouse" type="button" role="tab">Felicity
                                    House</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="ContactUsMustafaMount" role="tabpanel" aria-labelledby="ContactUsMustafaMountTab" tabindex="0">
                                <div class="row g-5">
                                    <div class="col-md-7">
                                        <div class="contact-form">
                                            <form id="contact-form" class="row g-3">
                                                <input type="hidden" id="className" name="className" value="mustafa">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Message</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="g-recaptcha" data-sitekey="6LfOBdUpAAAAADp7CJoC1HIf6OTauJlLs19vCFC_"></div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary submitbtn">Send</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="contact-info">
                                                    <span>Mustafa Mount, Emm Lane, BD9 4JU</span>
                                                    <ul class="address-info">
                                                        <li><a href="tel:+44 7404 820563" class="info-link">Phone: +44 7404 820563</a></li>
                                                        <li><a href="#" class="info-link">E-mail:
                                                                info@rawdahmadrasah.co.uk</a>
                                                        </li>
                                                        <!-- <li><a href="#" class="info-link">Admissions:
                                                                info@rawdahmadrasah.co.uk</a></li> -->
                                                    </ul>
                                                </div>
                                    </div>
                                </div>


                            </div>

                            <div class="tab-pane fade" id="ContactUsFelicityHouse" role="tabpanel" aria-labelledby="ContactUsFelicityHouseTab" tabindex="0">
                                <div class="row g-5">
                                    <div class="col-md-7">
                                        <div class="contact-form">
                                            <form id="contact-form2" class="row g-3">
                                                <input type="hidden" id="className" name="className" value="felicity">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Message</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="g-recaptcha" data-sitekey="6LfOBdUpAAAAADp7CJoC1HIf6OTauJlLs19vCFC_"></div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary submitbtn">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="contact-info">
                                                    <span>Felicity House, Northdale Road Liverpool L15 4HT </span>
                                                    <ul class="address-info">
                                                        <li><a href="tel:+44 7736 772 151" class="info-link">Phone: +44 7736 772 151 </a></li>
                                                        <li><a href="#" class="info-link">E-mail:
                                                                rawda@greensvilletrust.org</a></li>
                                                    </ul>
                                                </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- End Contact Us -->
</main>
<!-- End Main Body -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    $(document).ready(function() {
        $('#contact-form').validate({
            rules: {
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phoneNumber: {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                },
                message: {
                    required: true
                },
                'g-recaptcha-response': {
                    required: function() {
                        return grecaptcha.getResponse() === '';
                    }
                }
            },
            messages: {
                firstName: {
                    required: "Please enter your first name."
                },
                lastName: {
                    required: "Please enter your last name."
                },
                email: {
                    required: "Please enter your email address.",
                    email: "Please enter a valid email address."
                },
                phoneNumber: {
                    required: "Please enter your phone number."
                },
                message: {
                    required: "Please enter your message."
                },
                'g-recaptcha-response': {
                    required: "Please complete the reCAPTCHA."
                }
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
                var formData = $(form).serialize();
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('Home/contactus') ?>',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            window.scrollTo({
                                top: 0,
                                left: 0,
                                behavior: 'smooth'
                            });
                            $(form)[0].reset();
                            grecaptcha.reset();
                            jQuery('#preloader').hide();
                            jQuery('#loading').hide();
                            // window.location.href = "<?=base_url('thankyou')?>";
                             toastr.success('Thanks for reaching out. Your information submitted successfully. Our team will contact you soon.', 'Success');
                             window.location.reload();
                        } else {
                            grecaptcha.reset();
                            jQuery('#preloader').hide();
                            jQuery('#loading').hide();
                            toastr.error(response.message, 'Error');

                        }
                    },
                    error: function(xhr, status, error) {
                        grecaptcha.reset();
                        jQuery('#preloader').hide();
                        jQuery('#loading').hide();
                        toastr.error('Error submitting form', 'Error');
                    }
                });
                return false;
            }
        });
    });
</script>

<!-- for second form  -->

<script>
    $(document).ready(function() {
        $('#contact-form2').validate({
            rules: {
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phoneNumber: {
                    required: true
                },
                message: {
                    required: true
                },
                'g-recaptcha-response': {
                    required: function() {
                        return grecaptcha.getResponse() === '';
                    }
                }
            },
            messages: {
                firstName: {
                    required: "Please enter your first name."
                },
                lastName: {
                    required: "Please enter your last name."
                },
                email: {
                    required: "Please enter your email address.",
                    email: "Please enter a valid email address."
                },
                phoneNumber: {
                    required: "Please enter your phone number."
                },
                message: {
                    required: "Please enter your message."
                },
                'g-recaptcha-response': {
                    required: "Please complete the reCAPTCHA."
                }
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
                var formData = $(form).serialize();
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('Home/contactus') ?>',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            window.scrollTo({
                                top: 0,
                                left: 0,
                                behavior: 'smooth'
                            });
                            $(form)[0].reset();
                            grecaptcha.reset();
                            jQuery('#preloader').hide();
                            jQuery('#loading').hide();
                            //  window.location.href = "<?=base_url('thankyou')?>";
                            toastr.success('Thanks for reaching out. Your information submitted successfully. Our team will contact you soon.', 'Success');
                        } else {
                            grecaptcha.reset();
                            jQuery('#preloader').hide();
                            jQuery('#loading').hide();
                            toastr.error(response.message, 'Error');
                            console.log(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        grecaptcha.reset();
                        jQuery('#preloader').hide();
                        jQuery('#loading').hide();
                        toastr.error('Error submitting form', 'Error');
                    }
                });
                return false;
            }
        });
    });
</script>