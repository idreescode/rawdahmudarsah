<style>
    label.error {
        color: red !important;
        font-size: small !important;
    }
</style>
<!-- Main Body -->
<main class="main">
    <!-- Hero -->
    <section id="pageTitle" class="page-title support-page-title" style="background-image: url(assets/img/banners/support.jpg);">
        <div class="page-title-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Support Us</h1>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div>
        <div class="overlay"></div>
    </section>
    <!-- End Hero -->
    <!-- Zakah & Learning -->
    <section id="ZakahLearning" class="zakah-learning-section d-flex align-items-center justify-center">
        <div class="container">
            <div class="row g-5 align-items-center justify-center">
                <div class="col-md-5 zakah-learning-image">
                    <img class="img-fluid" src="assets/img/bg/zakah-learning.svg" alt="zakah-learning">
                </div>
                <div class="col-md-7 zakah-learning-content">
                            <h2 class="section-title">Charity & Learning</h2>
                            <p>It can be difficult for some parents to afford the madrasah fees for the year, yet they
                                are keen for their children to learn the fundamentals of their faith.</p>

                                <p>The Rawḍah Madrasah is actively looking for support from those who wish to donate
                                    and support parents struggling financially. The donations can help the children to
                                    learn Qur’ān and become stronger in their love for the Prophet ﷺ
                                </p>
                            <p>Your donation can therefore have two blessed purposes:</p>
                            <ol>
                                <li>Help a child to learn their religious knowledge</li>
                                <li>Be rewarded with continuous thawab (sadaqah jariya) of how this learning is passed on</li>
                            </ol>


                        </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- End Zakah & Learning -->

    <!-- Support Us Form -->
    <section id="supportUs" class="support-section d-flex align-items-center justify-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 support-content">
                    <p>If you would like to make a donation please complete the form below and a member of
                    our team will get in touch with you.</p>
                    <div class="support-form">
                        <form class="row g-3 justify-content-end align-items-end" id="supportForm">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" name="firstName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" name="phoneNumber">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="zakahAmount">Amount you wish to donate</label>
                                    <input type="text" class="form-control" id="zakahAmount" placeholder="00.00" name="zakahAmount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="form-group"> -->
                                <div class="g-recaptcha" data-sitekey="6LfOBdUpAAAAADp7CJoC1HIf6OTauJlLs19vCFC_"></div>
                                <!-- </div> -->
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="submitbtn">Send</button>
                            </div>
                        </form>


                    </div>


                </div>
                <div class="col-md-5">

                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- End Support Us Form -->
</main>
<!-- End Main Body -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    $(document).ready(function() {
        $('#supportForm').validate({
            onkeyup: function(element) {
                $(element).valid();
            },
            rules: {
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                address: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phoneNumber: {
                    required: true
                },
                zakahAmount: {
                    required: true,
                    number: true
                }
            },
            messages: {
                firstName: {
                    required: "Please enter your first name"
                },
                lastName: {
                    required: "Please enter your last name"
                },
                address: {
                    required: "Please enter your address"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                phoneNumber: {
                    required: "Please enter your phone number"
                },
                zakahAmount: {
                    required: "Please enter the amount of Zakah you wish to pay",
                    number: "Please enter a valid number"
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
                    url: '<?= base_url('Home/supportsubmit') ?>',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            window.scrollTo({
                                top: 0,
                                left: 0,
                                behavior: 'smooth'
                            });
                            form.reset();
                            grecaptcha.reset();
                            jQuery('#preloader').hide();
                            jQuery('#loading').hide();
                         //    window.location.href = "<?=base_url('thankyou')?>";
                            toastr.success('Thanks for reaching out Rawdah Madrasah. Your information submitted successfully. Our team will contact you soon', 'Success');
                            window.location.reload();

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