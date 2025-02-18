<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rawḍah Madrasah</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Zohir">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url('assets/img/favicon.svg') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('assets/img/apple-touch-icon.svg') ?>">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- =======================================================
    * Template Name: The Rawḍah Madrasah - v1.0
    * Template URL: https://zohirs.com
    * Author: Zohir
    ======================================================== -->
    <style>
        #shadow-host-companion {
            display: none !important;
        }

        #hero {
            background-image: url('<?= base_url('assets/img/bg/hero_home.png') ?>');
        }
    </style>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "2000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
</head>

<body>
    <section id="hero" class="hero-banner d-flex text-center align-items-center justify-center">

        <div class="container">

            <div class="row">

                <div class="col-md-12 banner-content" style="background:none;">

                    <!-- <h1 class="hero-title"> <br>Form Submitted</h1> -->

                    <h4 class="hero-sub-title">Thank you for your submission. <br>
                        A member of our team will be in touch soon. <br>
                        <br>
                        <br>

                    </h4>

                    <h6>   Please now complete your partial deposit payment (£50) using the link below.

                       

                      Your child’s place is only confirmed upon the payment of the full deposit (£250).

                       <br> Details of how to make the remaining deposit payment (£200) will be sent to you after you have made this initial deposit payment.</h6>
                       <a href="https://buytickets.at/greensvilletrustevents/1371173" target="_blank" class="btn btn-primary hero-btn">Make Payment</a>
                    <a href="<?= base_url() ?>" class="btn btn-primary hero-btn"> Back To Home Page</a>



                </div>

            </div> <!-- End row -->

        </div> <!-- End container -->

    </section>

</body>

</html>