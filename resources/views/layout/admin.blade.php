<!DOCTYPE html>
<html lang="en">

<head>
  <!--Title-->
  <title>Mophy - Payment Admin Dashboard Bootstrap Template + FrontEnd | DexignZone</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="DexignZone">
  <meta name="robots" content="index, follow">
  <meta property="og:image" content="social-image.png">

  <meta name="format-detection" content="telephone=no">

  <!-- MOBILE SPECIFIC -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/images/favicon.png">

  <link href="{{ asset('assets') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets') }}/vendor/chartist/css/chartist.min.css">

  <!-- Datatable -->
  <link href="{{ asset('assets') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

  <link href="{{ asset('assets') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link class="main-css" href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

  <style>
    /* Hides the spinner controls in Chrome, Safari, Edge, and Opera */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Hides the spinner controls in Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>

</head>

<body>

  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->

  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
      <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="{{ asset('assets') }}/images/logo-k.png" alt="">
        <img class="logo-compact" src="{{ asset('assets') }}/images/logo-k-text.png" alt="">
        <img class="brand-title" src="{{ asset('assets') }}/images/logo-k-text.png" alt="">
      </a>

      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Chat box start
        ***********************************-->
    <x-part.chatbox></x-part.chatbox>
    <!--**********************************
            Chat box End
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <x-part.header></x-part.header>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <x-part.sidebar></x-part.sidebar>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body default-height">
      {{ isset($slot) ? $slot : '' }}
    </div>
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
      <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://turbo-main.com/" target="_blank">TurboMain</a>
          <span class="current-year">2024</span>
        </p>
      </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="{{ asset('assets') }}/vendor/global/global.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

  <script src="{{ asset('assets') }}/vendor/chart-js/chart.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/owl-carousel/owl.carousel.js"></script>

  <!-- Chart piety plugin files -->
  <script src="{{ asset('assets') }}/vendor/peity/jquery.peity.min.js"></script>

  <!-- Apex Chart -->
  <script src="{{ asset('assets') }}/vendor/apexchart/apexchart.js"></script>

  <!-- Dashboard 1 -->
  <script src="{{ asset('assets') }}/js/dashboard/dashboard-1.js"></script>

  <!-- Datatable -->
  <script src="{{ asset('assets') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/datatables/responsive/responsive.js"></script>
  <script src="{{ asset('assets') }}/js/plugins-init/datatables.init.js"></script>

  <!-- Jquery Validation -->
  <script src="{{ asset('assets') }}/vendor/jquery-validation/jquery.validate.min.js"></script>
  <!-- Form validate init -->
  <script src="{{ asset('assets') }}/js/plugins-init/jquery.validate-init.js"></script>

  <script src="{{ asset('assets') }}/js/custom.min.js"></script>
  <script src="{{ asset('assets') }}/js/deznav-init.js"></script>
  <script src="{{ asset('assets') }}/js/demo.js"></script>
  <script src="{{ asset('assets') }}/js/styleSwitcher.js"></script>

  <script>
    (function() {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>

  <script>
    function carouselReview() {
      /*  testimonial one function by = owl.carousel.js */
      jQuery('.testimonial-one').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        nav: false,
        center: true,
        rtl: true,
        dots: false,
        navText: ['<i class="fas fa-caret-left"></i>', '<i class="fas fa-caret-right"></i>'],
        responsive: {
          0: {
            items: 2
          },
          400: {
            items: 3
          },
          700: {
            items: 5
          },
          991: {
            items: 6
          },

          1200: {
            items: 4
          },
          1600: {
            items: 5
          }
        }
      })
    }

    jQuery(window).on('load', function() {
      setTimeout(function() {
        carouselReview();

      }, 1000);
    });


    // jQuery(document).ready(function(){
    // 	setTimeout(function(){
    // 		dezSettingsOptions.version = 'light';
    // 		new dezSettings(dezSettingsOptions);

    // 		setCookie('version','light');

    // 	},1500)
    // });
  </script>
</body>

</html>
