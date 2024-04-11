<!DOCTYPE html>

<html lang="en">

<head>


  <!-- Required meta tags -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

  @stack('personalLoanStyle')
  <!-- add new link css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <!-- Google Fonts -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&amp;display=swap" />


    <!-- add new link 5th_march cdn-->

  <!-- Font Awesome CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" /> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-multiselect.css') }}" />


  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" /> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/(5.11.2)all.min.css') }}" />


  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/(6.0.0)all.min.css') }}" />
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/(7.1.0)mdb.min.css') }}" />
  <!-- end new css link -->


  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/(2.3.4)owl.carousel.min.css') }}" />

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/(4.1.1)animate.min.css') }}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/(6.2.1)all.min.css') }}" /> -->
  <!-- <link rel="stylesheet" href="http://192.168.120.228/myzeon_web/assets/css/(6.2.1)all.min.css"> -->

  <link rel="icon" href="{{ asset('assets/front_end/asset/img/favicon.png') }}" type="image/gif" />

  <meta name="description" content="myzeon, Credit myzeon." />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <meta name="keywords" content="Home Loan, Loan Product, Personal Loan" />

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <title>
    <?php echo !empty($pageTitle) ? $pageTitle : 'Myzeon'; ?>
  </title>

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/commoncalculatorab59.css') }}" type=text/css
    media="all">

  <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}" type="text/css"
    media="all" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/reset.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/style.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/responsive.css') }}" />



  



<!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}" /> -->



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- new link fro new navbar -->


  <style>
    .facebook-color { color: #1877f2 !important; }
    .whatsapp-color { color: #25d366 !important; }
    .twitter-color { color: #1da1f2  !important; }
    .google-color { color: #4285f4  !important; }
    .BTN:hover{
      background-color:  #1338be !important;
  color: #ffd756 !important;
    }
</style>

  <style>
.text:hover{
  color: #ffd756;
  background-color: #1338be;
}
  .text-white:hover{
    color: #ffd756 !important;
  }  
.list-group-item{
  font-weight: bold;
  background-color: #b6c7e140;
  border: 0px solid rgba(0,0,0,.125) !important;
}

h5{
  font-size: larger;
  font-weight: bold;
  color: #1338be;
}

    .nav-link {
      color: #fff !important;
      font-weight: bold !important;
    }

    #apply-now {
      border-radius: 25px !important;
    }

    #contact-us {
      border-radius: 25px !important;
    }

    .BTN {
      border-radius: 25px;
      background-color: #ffd756;
      color: #1338be !important;
      font-size: 14px !important;

    }

    .dropdown-menu.show {
      -webkit-animation: fadeIn 0.3s alternate;
      /* Safari 4.0 - 8.0 */
      animation: fadeIn 0.3s alternate;
      
      
    }

    .nav-item.dropdown.dropdown-mega {
      position: static;

    }

    .nav-item.dropdown.dropdown-mega .dropdown-menu {
      width: 90%;
      /* top: auto; */
      left: 5%;
    }

    .navbar-toggler {
      border: none;
      padding: 0;
      outline: none;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler .hamburger-toggle {
      position: relative;
      display: inline-block;
      width: 50px;
      height: 50px;
      z-index: 11;
      float: right;
    }

    .navbar-toggler .hamburger-toggle .hamburger {
      position: absolute;
      transform: translate(-50%, -50%) rotate(0deg);
      left: 50%;
      top: 50%;
      width: 50%;
      height: 50%;
      pointer-events: none;
    }

    .navbar-toggler .hamburger-toggle .hamburger span {
      width: 100%;
      height: 4px;
      position: absolute;
      /* add my mannu */
      background: white;
      border-radius: 2px;
      z-index: 1;
      transition: transform 0.2s cubic-bezier(0.77, 0.2, 0.05, 1),
        background 0.2s cubic-bezier(0.77, 0.2, 0.05, 1), all 0.2s ease-in-out;
      left: 0px;
    }
  </style>

  <!-- footer -->
  <style>
    .me-3 {
      color: #ffd765;
      font-size: 19px;
    }

    /* a:hover {
      --mdb-link-color-rgb: var(--mdb-link-hover-color-rgb);
      color: #ffd756 !important;
      font-size: bold;
    } */

    .icon-link {
      color: white;
      /* Set default color */
      transition: color 0.3s ease-in-out;
      /* Add transition for smooth color change on hover */
    }

    .icon-link:hover {
      color: #007bff;
      /* Change color on hover */
    }

    /* Add animation for hover effect */
    .icon-link:hover i {
      animation: bounce 0.5s ease infinite;
      /* Adjust animation properties as needed */
    }

    @keyframes bounce {

      0%,
      20%,
      50%,
      80%,
      100% {
        transform: translateY(0);
      }

      40% {
        transform: translateY(-10px);
      }

      60% {
        transform: translateY(-5px);
      }
    }

    #whatsapp-icon {
      color: #25D366;
      /* Set WhatsApp color */
      transition: color 0.3s ease-in-out;
      /* Add transition for smooth color change on hover */
    }

    #whatsapp-icon:hover {
      color: #128C7E;
      /* Change color on hover (you can adjust this color as needed) */
    }

    /* Add animation for hover effect */
    #whatsapp-icon:hover i {
      animation: bounce 0.5s ease infinite;
      /* Adjust animation properties as needed */
    }
  </style>

  <!-- hamburger -->
  <style>
    /* * {
    font-family: "Source Sans Pro", "Roboto", Arial, sans-serif;
  } */

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }


    .navbar-toggler .hamburger-toggle {
      position: relative;
      display: inline-block;
      width: 50px;
      height: 50px;
      z-index: 11;
      float: right;
    }

    .navbar-toggler .hamburger-toggle .hamburger {
      position: absolute;
      transform: translate(-50%, -50%) rotate(0deg);
      left: 50%;
      top: 50%;
      width: 50%;
      height: 50%;
      pointer-events: none;
    }

    .navbar-toggler .hamburger-toggle .hamburger span {
      width: 100%;
      height: 4px;
      position: absolute;
      /* add my mannu */
      background: white;
      border-radius: 2px;
      z-index: 1;
      transition: transform 0.2s cubic-bezier(0.77, 0.2, 0.05, 1),
        background 0.2s cubic-bezier(0.77, 0.2, 0.05, 1), all 0.2s ease-in-out;
      left: 0px;
    }

    .navbar-toggler .hamburger-toggle .hamburger span:first-child {
      top: 10%;
      transform-origin: 50% 50%;
      transform: translate(0% -50%) !important;
    }

    .navbar-toggler .hamburger-toggle .hamburger span:nth-child(2) {
      top: 50%;
      transform: translate(0, -50%);
    }

    .navbar-toggler .hamburger-toggle .hamburger span:last-child {
      left: 0px;
      top: auto;
      bottom: 10%;
      transform-origin: 50% 50%;
    }

    .navbar-toggler .hamburger-toggle .hamburger.active span {
      position: absolute;
      margin: 0;
    }

    .navbar-toggler .hamburger-toggle .hamburger.active span:first-child {
      top: 45%;
      transform: rotate(45deg);
    }

    .navbar-toggler .hamburger-toggle .hamburger.active span:nth-child(2) {
      left: 50%;
      width: 0px;
    }

    .navbar-toggler .hamburger-toggle .hamburger.active span:last-child {
      top: 45%;
      transform: rotate(-45deg);
    }
  </style>



  @stack('personalLoanStyle')
  @stack('indexPageStyle')
  @stack('ifscCodeStyle')
  @stack('homeLoanStyle')
  @stack('startyourjourneystyle')
  @stack('aboutPageStyle')
  @stack('contactPageStyle')
  @stack('applyViewStyle')
</head>

<body class="js">

  <div id="preloader"></div>
  <!-- trial header -->

  <!-- <header class="intro">
        <div class="action"></div>
      </header> -->

  <main>
    <!-- Start Mega Menu HTML -->
    <nav class="navbar navbar-expand-lg navbar-light  navbar-dark shadow" style="background-color: #1338be;">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{website_base_url()}}">
          <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/logo.png" alt="Company Logo"
            style="filter: hue-rotate(45deg) brightness(480); height: 50px; margin-right: 30px; margin-top: -15px;" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbar-content">
          <div class="hamburger-toggle">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown dropdown-mega position-static">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">ALL
                SERVICES</a>
              <div class="dropdown-menu shadow" style="background-color: aliceblue; margin-top: 0;">
                <div class="mega-content px-4 text-center">
                  <div class="">
                    <div class="row">
                      <div class="col-12 col-sm-4 col-md-3 py-4">
                        <h5>LOANS</h5>
                        <div class="list-group">
                          <a class="list-group-item text"
                            href="{{website_base_url()}}/personal-loan">PERSONAL LOAN</a>
                          <a class="list-group-item text"
                            href="{{website_base_url()}}/business-loan">BUSINESS LOAN</a>
                          <a class="list-group-item text" href="{{website_base_url()}}/home-loan">HOME
                            LOAN</a>
                          <a class="list-group-item text" href="{{website_base_url()}}/car-loan">CAR
                            LOAN</a>
                          <a class="list-group-item text"
                            href="{{website_base_url()}}/loan-against-property">LOAN AGAINST
                            PROPERTY</a>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4 col-md-3 py-4">
                        <h5>CARDS</h5>
                        <div class="list-group">
                          <a class="list-group-item text"
                            href="{{website_base_url()}}/credit-cards">CREDIT CARD</a>
                          <a class="list-group-item text"
                            href="{{website_base_url()}}/debit-cards">DEBIT CARD</a>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4 col-md-3 py-4">
                        <h5>INVESTMENTS</h5>
                        <div class="list-group">
                          <a class="list-group-item text"
                            href="{{website_base_url()}}/mutual-funds">MUTUAL FUNDS</a>
                          <a class="list-group-item text"
                            href="{{website_base_url()}}/fixed-deposit">FIXED DEPOSIT</a>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-3 py-4">
                        <h5>FINANCIAL TOOLS</h5>
                        <div class="list-group">

                          <a class="list-group-item text" href="{{website_base_url()}}/ifsc">IFSC</a>
                          <a class="list-group-item dropdown-toggle" onclick="showHide()"
                            style="cursor: pointer;">CALCULATOR </a>
                          <ul style="display: none; list-style: none; text-decoration: none;" id="showHide">
                            <li><a class="list-group-item text"
                                href="{{website_base_url()}}/cal-personal-loan">PERSONAL LOAN</a>
                            </li>
                            <li><a class="list-group-item text"
                                href="{{website_base_url()}}/cal-business-loan">BUSINESS LOAN</a>
                            </li>
                            <li><a class="list-group-item text"
                                href="{{website_base_url()}}/cal-home-loan">HOME LOAN</a></li>
                            <li><a class="list-group-item text"
                                href="{{website_base_url()}}/cal-car-loan">CAR LOAN</a></li>
                            <li><a class="list-group-item text"
                                href="{{website_base_url()}}/gst-calculator">GST CALCULATOR</a>
                            </li>
                            <li><a class="list-group-item text"
                                href="{{website_base_url()}}/fd-calculator">FD CALCULATOR</a></li>
                            <li><a class="list-group-item text"
                                href="{{website_base_url()}}/ppf-deposit">PPF DEPOSIT</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{website_base_url()}}/contact">CONTACT
                US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{website_base_url()}}/about#showpanel">ABOUT US</a>
            </li>

          </ul>
          <form action="">
            <a href="{{website_base_url()}}/contact-us" class="btn BTN  border-0"
              style=" border-radius: 25px;">APPLY NOW</a>

            <a href="{{website_base_url()}}/check-cibil" class="btn BTN border-0"
              style=" border-radius: 25px;">CIBIL SCORE </a>
          </form>

        </div>
      </div>
    </nav>
    <!-- END Mega Menu HTML -->
  </main>

  @yield('content')

  <footer class=" text-lg-start bg-black text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block text-white">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div style="font-size: 26px;">
    <a href="https://www.facebook.com/people/Myzeon-Loans/61551106282364/" class="me-4  icon-link facebook-color">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://web.whatsapp.com/" class="me-4  icon-link whatsapp-color" id="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://twitter.com/Myzeonloans" class="me-4 e icon-link twitter-color">
        <i class="fab fa-twitter"></i>
    </a>
    <!-- <a href="" class="me-4  icon-link google-color">
        <i class="fab fa-google"></i>
    </a> -->
</div>

      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container-fluid text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->

            <div class="text-center animated slideInUp">
              <a href="{{website_base_url()}}">
                <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/logo.png" class="img-fluid1"
                  alt="Company Logo"
                  style="filter: hue-rotate(45deg) brightness(480); height:90px; width: 290px; margin-top: 60px; margin-left: 60px;">

              </a>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h3 class="text-uppercase  text-white fw-bold mb-4" style="font-size: 20px;">
              quick link
            </h3>
            <p>
              <a href="{{website_base_url()}}/" class="text-white">Home</a>
            </p>
            <p>
              <a href="{{website_base_url()}}/about#showpanel" class="text-white">About Us</a>
            </p>
            <p>
              <a href="{{website_base_url()}}/contact" class="text-white">Contact Us</a>
            </p>
            <p>
              <a href="https://www.myzeon.com/?page_id=1597" class="text-white">Blog</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h3 class="text-uppercase text-white fw-bold mb-4" style="font-size: 20px;">
              Services
            </h3>
            <p>
              <a href="{{website_base_url()}}/personal-loan" class="text-white">Personal Loan</a>
            </p>
            <p>
              <a href="{{website_base_url()}}/business-loan" class="text-white">Business Loan</a>
            </p>
            <p>
              <a href="{{website_base_url()}}/home-loan" class="text-white">Home Loan</a>
            </p>
            <p>
              <a href="{{website_base_url()}}/car-loan" class="text-white">Car Loan</a>
            </p>
            <p>
              <a href="{{website_base_url()}}/loan-against-property" class="text-white">
                Loan Against Property</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h3 class="text-uppercase text-white fw-bold mb-4" style="font-size: 20px;">
              Important links
            </h3>
            <p>
              <a href="{{website_base_url()}}/privacy-policy" class="text-white">Privacy Policy</a>
            </p>
            <p>
              <a href="{{website_base_url()}}/term-and-conditions" class="text-white">Term &
                Conditions</a>
            </p>
           
          </div>
          <!-- Grid column -->


          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h3 class="text-uppercase fw-bold text-white mb-4" style="font-size: 20px;">Contact us</h3>
            <p class="text-white"><i class="fas fa-home me-3 "></i> <a href="https://goo.gl/maps/CPzMDB39QHEE4Kud9"
                class="text-white">A-47, Sector-2 Noida, UP-201301 </a></p>
            <p class="text-white">
              <i class="fas fa-envelope me-3 "></i>
              <a href="mailto:info@myzeon.com" class="text-white">info@myzeon.com </a>
            </p>
            <p class="text-white"><i class="fas fa-phone me-3 "></i> <a href="tel:0120-4198166" class="text-white">+
                0120-4198166</a> </p>
         
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center text-white p-2" style="background-color: rgba(143, 133, 133, 0.23);">
      © 2024 Myzeon. All Rights Reserved
      <p class="text-center p-1" style="opacity: 0.2;">Version: 1.1.0</p>
      <!-- <a class="text-white fw-bold " href="https://mdbootstrap.com/">Privacy Policy</a> -->
    </div>
    <!-- Copyright -->


  </footer>


  <!-- The Modal -->

  <div class="modal" id="myModal">

    <div class="modal-dialog">

      <div class="modal-content">

        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title">Modal Heading</h4>

          <button type="button" class="close" data-dismiss="modal">

            &times;

          </button>

        </div>


        <!-- Modal body -->




        <!-- Modal footer -->



      </div>

    </div>

  </div>

  <!-- end of footer area -->

  <!-- new js for header or footer -->

  <!-- MDB -->


  <!-- Bootstrap 5 JS -->
  <script src="http://192.168.120.228/myzeon_web/assets/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="{{ asset('assets/front_end/asset/js/jquery.easing.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- add by mannu new script -->

  <script>
    $(document).ready(function () {
      $("#toggleNavbar").click(function () {
        $("#navbarNav").toggleClass("show");
      });
    });
  </script>
  <!-- new script add by mannu -->
  <script>
    $(document).ready(function () {
      // Apply Now button animation
      $("#apply-now").hover(
        function () {
          $(this).addClass("animate__animated animate__rubberBand");
        },
        function () {
          $(this).removeClass("animate__animated animate__rubberBand");
        }
      );

      // Contact Us button animation
      $("#contact-us").hover(
        function () {
          $(this).addClass("animate__animated animate__rubberBand");
        },
        function () {
          $(this).removeClass("animate__animated animate__rubberBand");
        }
      );
    });
  </script>


  <script>
    $(document).ready(function () {
      $(".footer-element").hover(
        function () {
          // When you hover over the element, add the fadeIn animation
          $(this).addClass("animate__animated animate__fadeIn");
        },
        function () {
          // When you move the mouse away, remove the fadeIn animation
          $(this).removeClass("animate__animated animate__fadeIn");
        }
      );
    });
  </script>

  
  <!-- <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script> -->

  <script src="{{ asset('assets/front_end/asset/js/jquery-ui.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/jquery.ui.touch-punch.min.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/jquery.nice-select.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/menumaker.js') }}"></script>

<!-- add new js -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="{{ asset('assets/js/(2.3.4)owl.carousel.min.js') }}"></script>


  <script src="{{ asset('assets/front_end/asset/js/slider.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/calculator.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/active.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/mainab59.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/core.minab59.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/mouse.minab59.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/slider.minab59.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/commoncalculatorab59.js') }}"></script>

  <script src="{{ asset('assets/front_end/asset/js/emicalculatorab59.js') }}"></script>

  <script>
    function CaluculatorFunction() {
      $("#calList").toggle();

    }

    $(document).ready(function () {
      $("#calList").hide();



      $(".social-icon").hover(
        function () {
          $(this).css({
            transform: "rotate(360deg)"
          }); // Rotate on hover
        },
        function () {
          $(this).css({
            transform: "rotate(0deg)"
          }); // Reset on mouse out
        }
      );
    });
  </script>


  <script>
    $(window).scroll(function () {

      if ($(this).scrollTop() > 50) {

        $(".second-header").addClass("sticky");

      } else {

        $(".second-header").removeClass("sticky");

      }

    });

    $(".owl-carousel").owlCarousel({

      loop: true,

      margin: 50,

      nav: false,

      dots: false,

      autoplay: true,

      autoplayTimeout: 4000,

      smartSpeed: 4000,

      responsive: {

        0: {

          items: 1,

        },

        600: {

          items: 3,

        },

        1000: {

          items: 8,

        },

      },

    });

    // $(".select").select2({

    //   // placeholder: "Select a programming language",

    //   allowClear: true,

    // });

    $(document).ready(function () {

      // Add minus icon for collapse element which is open by default

      $(".collapse.show").each(function () {

        $(this)

          .prev(".card-header")

          .find(".fa")

          .addClass("fa-angle-up")

          .removeClass("fa-angle-down");

      });

      // Toggle plus minus icon on show hide of collapse element

      $(".collapse")

        .on("show.bs.collapse", function () {

          $(this)

            .prev(".card-header")

            .find(".fa")

            .removeClass("fa-angle-down")

            .addClass("fa-angle-up");

        })

        .on("hide.bs.collapse", function () {

          $(this)

            .prev(".card-header")

            .find(".fa")

            .removeClass("fa-angle-up")

            .addClass("fa-angle-down");

        });

      // multiselect js

      $(".select_multi").multiselect({

        nonSelectedText: "Select Bank",

      });

    });
  </script>

  <script>
    $(document).ready(function () {

      //called when key is pressed in textbox

      $(".numberonly").keypress(function (e) {

        //if the letter is not digit then display error and don't type anything

        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

          //display error message

          return false;

        }

      });


      $(".alphaOnly").keypress(function (event) {

        var value = String.fromCharCode(event.which);

        var pattern = new RegExp(/[a-zåäö ]/i);

        return pattern.test(value);

      });

    });
  </script>



  <script>
    $(document).ready(function () {
      $('.showCaluculatorItem').hide();

      $("#showAllloans").on("mouseenter", function () {
        $("#showpanel").show();
      });

      $("#showpanel").on("mouseleave", function () {
        $(this).hide();
      });



      $('#showCaluculatorItem').on('click', function () {

        $('.showCaluculatorItem').toggle();

      });

    });
  </script>


  <!-- <script>
    $(document).ready(function () {
      $('.blog-slider').slick({
        slidesToShow: 3, // Number of slides to show at a time
        slidesToScroll: 1, // Number of slides to scroll
        prevArrow: '<button class="slick-prev">Previous</button>', // Custom previous button
        nextArrow: '<button class="slick-next">Next</button>', // Custom next button
        responsive: [{
          breakpoint: 992, // Adjust the settings for screens larger than 992px
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768, // Adjust the settings for screens larger than 768px
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        ]
      });
    });
  </script> -->
  <!-- <script>
    $("#carousel-slider").slick({
      arrows: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      mobileFirst: true
    });
  </script> -->
  <!-- new script add 1st march -->

  <script>
    function showHide() {
      var element = document.getElementById("showHide"); // Toggle thevisibility
      if (element.style.display === "none") {
        element.style.display = "block";
      } else {
        element.style.display = "none";
      }
    }
  </script>



  @stack('personalLoanScript')
  @stack('indexPageScript')
  @stack('ifscCodeScript')
  @stack('personalLoanScripts')
  @stack('homeLoanScripts')
  @stack('startyourjourneyscript')
  @stack('aboutPageScript')
  @stack('contactPageScript')
  @stack('applyViewScript')

</body>

</html>