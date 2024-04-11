<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="UTF-8">
    <meta name="description" content="myzeon, Credit myzeon." />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Home Loan, Loan Product, Personal Loan" />


    <!-- link -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/assets/assets/front_end/asset/css/mainab59.css') }}" type="text/css" media="all"> -->

    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/commoncalculatorab59.css') }}" type=text/css
        media="all">

    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/reset.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/responsive.css') }}" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">




    <!-- tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />


    <link rel="icon" href="{{ asset('assets/front_end/asset/img/favicon.png') }}" type="image/gif" />


    <!-- tailwind -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


    <!-- Bootstrap CSS -->

    <!-- <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />



    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />


    <!-- Add this in the <head> section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- alphinjs -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>


    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



    <title><?php echo !empty($pageTitle) ? $pageTitle : 'Myzeon'; ?></title>


    <style>
        .color:hover {
            color: #ffd756 !important;
        }

        .error {
            border-color: red !important;
        }

        .error_name {
            color: red;
            margin-left: 10px;
        }


        .spinner-overlay {
            display: flex;
            align-items: center;
        }

        .loader-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            /* Add a semi-transparent overlay */
            z-index: 9999;
            /* Ensure the loader appears above other content */
        }

        .spinner {
            display: inline-block;
            text-align: center;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
            border: 0.25rem solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner-border 0.75s linear infinite;
        }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg);
            }
        }

        .loader-text {
            margin-top: 0.5rem;
            color: #333;
            font-size: 1rem;
        }
    </style>


    <style>
        /* .color {
            color: white;
        } */

        .img-fluid1 {
            margin-top: 88px;
        }

        .font-medium {
            font-weight: bold;

        }

        /* CSS for the hover effect */
        ul.nav-links li a {
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }

        ul.nav-links li a:hover {
            color: #ebc42a;

        }

        #slider {
            position: relative;
            z-index: 1;
        }


        #showpanel {
            position: absolute;
            top: 0px;
            left: 23%;
            z-index: 2;
            position: fixed;
            z-index: 2;
            /* width: 97vw; */
            width: 60%;
            /* height: 65%; */
            height: 45%;
            /* box-shadow: 0px 10px 36px 17px #1338BE; */
        }

        .second-header {
            background-color: #1338BE;
            height: 80px;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        /* Animation for the header */
        .second-header.animated {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Responsive styles using media queries */
        @media (max-width: 768px) {
            .second-header {
                padding: 0 10px;
            }
        }

        @media (max-width: 576px) {
            .second-header {
                padding: 0 5px;
            }
        }

        /* Add hover animation for links in the header */
        .second-header a {
            transition: transform 0.3s ease-in-out;
        }

        .second-header a:hover {
            transform: scale(1.1);
        }

        /* footer */
        .copy-right-section.second-copyright {
            background-color: #1338BE;
        }

        /* footer */
        .footer-area {
            padding: 20px;
            /* Add padding to the footer area */
        }

        .footer-widget,
        .footer-element {
            margin: 10px;
            /* Add margin between widget/element */
            padding: 10px;
            /* Add padding within widget/element */
            /* Background color for clarity */
        }

        .footer-social-icons {
            display: flex;
            justify-content: center;
            /* Center the social icons horizontally */
            margin-top: 20px;
            /* Add margin at the top of the social icons */

            text-align: center;
            /* Center-align the social icons */
        }

        .social-icon {
            margin: 10px;
            /* Add margin between social icons */
        }
    </style>


    <style>
        .footer-social-icons {
            display: flex;
        }

        .social-icon {
            margin: 10px;
            transition: transform 0.3s;
        }

        .social-icon:hover {
            transform: scale(1.2);
            /* Increase size on hover */
            color: #ebc42a;
            color: #1338BE;
            /* Add an underline on hover */

        }


        /* .footer-social-icons {
  display: flex;
} */
        .social-icon:hover i {
            transform: scale(1.2);
            /* Increase the size on hover */
        }

        /* Add hover animation to the icons */
        .social-icon i {
            transition: transform 0.2s;
            display: inline-block;
        }

        .social-icon {
            font-size: 34px;
            margin: 0 10px;
            transition: color 0.3s, transform 0.3s;
        }

        .social-icon:hover {
            color: #007bff;
            /* Change color on hover */
            transform: scale(1.1);
            /* Add scaling effect on hover */
        }

        /* Define custom colors for each icon */
        .whatsapp i {
            color: #25d366;
            /* WhatsApp green */
        }

        .twitter i {
            color: #1da1f2;
            /* Twitter blue */
        }

        .facebook i {
            color: #1877f2;
            /* Facebook blue */
        }

        .linkedin i {
            color: #0077b5;
            /* LinkedIn blue */
        }

        /* Add this CSS to your stylesheet */

        .animated-button {

            background-color: #ff9800;

            color: white;

            border: none;

            padding: 10px 20px;

            text-align: center;

            text-decoration: none;

            display: inline-block;

            font-size: 16px;

            margin: 10px;

            cursor: pointer;

            transition: background-color 0.3s ease;
            /* Add a smooth transition effect */

        }


        .animated-button:hover {

            background-color: #f57c00;
            /* Change the background color on hover */

        }


        /* Button styles */

        .y-button {

            background-color: #FFD756;

            color: #1338BE;

            font-weight: 800;

            border: none;

            padding: 10px 20px;
            /* Adjust the height and width as needed */

            border-radius: 5px;

            transition: background-color 0.3s, transform 0.3s;

        }


        /* Button hover animation */

        .y-button:hover {

            background-color: rgba(28, 27, 26, 0.663);

            transform: scale(1.1);

            color: white;

        }


        /* Additional animation styles */

        .animated-button {

            transition: background-color 0.3s, transform 0.3s;

        }


        .showCaluculatorItem {

            list-style: none;


        }


        #cssmenu ul li a {

            color: #f7f5f5 !important;

            font-size: 15px;

        }

        #showpanel {

            /* background-color: #ffd756; */

        }

        .flex-container {

            display: flex;

            justify-content: space-between;
            /* Equal space between items */

            margin-top: 80px;

        }



        .flex-item {

            flex: 1;
            /* Flex items take equal space */

            padding: 10px;
            /* Add padding or adjust as needed */

            /* border: 1px solid #ccc; Add borders or styling as needed */

        }

        .flex-item li a {

            text-decoration: none;


        }


        .wrp-faq button {

            border: none;

            background: transparent;

            width: 100%;

            outline: none;

            text-align: left;

            font-weight: 600;

            font-size: 13px;

            position: relative;

            padding: 17px 20px 15px 20px;

        }


        .wrp-faq .card-header {

            padding: 0;

        }


        .wrp-faq .card i.fa {

            float: right;

            transition: all 0.5s;

            position: absolute;

            right: 20px;

            font-size: 15px;

        }


        select.form-control.select_multi~.btn-group {

            display: block;

        }


        select.form-control.select_multi~.btn-group>button.multiselect {

            display: flex;

            width: 100%;

            height: calc(1.5em + 0.75rem + 2px);

            padding: 0.375rem 0.75rem;

            font-size: 1rem;

            text-align: left;

            font-weight: 400;

            line-height: 1.5;

            color: #495057;

            background-color: #fff;

            background-clip: padding-box;

            border: 1px solid #ced4da;

            border-radius: 0.25rem;

            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

            align-items: center;

            justify-content: space-between;

        }


        select.form-control.select_multi~.btn-group>button.multiselect>span.multiselect-selected-text {

            font-size: 13px;

        }


        ul.multiselect-container.dropdown-menu.show {

            right: 0px;

        }
    </style>


    <style>
        body {
            font-family: "Montserrat", sans-serif;
            /* Sets the font family for the entire body text */
            color: #ffffff;
            /*
font-size: 18px;

font-weight: 400;
font-family: "Montserrat",Sans-serif; */

        }

        .footer-element ul li a:hover {}

        .footer-element ul li a {

            color: #ffffff;

            font-size: 19px;

            font-weight: 300;
            font-family: "Montserrat", Sans-serif;


            /* text-decoration: none; */

        }

        .float-left {

            float: left;

            margin-right: 10px;

        }


        .footer-anchor-tag {

            /* margin-left: 10px; */

        }


        .footer-main-heading {
            white-space: nowrap;

        }

        .navBarItemButton {
            display: flex;
            justify-content: space-between;

        }


        .yellow-button {

            display: inline-block;

            background-color: #ebc42a;

            color: black;
            /* You can change the text color to your preference */

            text-decoration: none;
            /* Remove the default underline on links */

            border: none;

            transition: background-color 300ms linear;

            border-radius: 10px;

            cursor: pointer;

            text-align: center;

            font-family: "Montserrat", Sans-serif;


        }
    </style>


    <style>
        @media only screen and (max-width: 600px) {
            .headerMainContentButton {
                margin-left: auto;
            }

            .gapBetweenHeaderButton {
                margin-right: auto;

            }


        }

        @media only screen and (min-width: 600px) {
            .headerMainContentButton {
                margin-left: auto;
            }

            .gapBetweenHeaderButton {
                margin-right: auto;

            }

        }

        @media only screen and (min-width: 768px) {
            .headerMainContentButton {
                margin-left: 20px;
            }

            .gapBetweenHeaderButton {
                margin-right: 442px;

            }

        }

        @media only screen and (min-width: 992px) {
            .headerMainContentButton {
                margin-left: 20px;

            }


            .gapBetweenHeaderButton {
                margin-right: 442px;

            }

        }

        @media only screen and (min-width: 1200px) {
            .headerMainContentButton {
                margin-left: 20px;
            }

            .gapBetweenHeaderButton {
                margin-right: 442px;

            }

        }
    </style>


    @stack('personalLoanStyle')
    @stack('indexPageStyle')
    @stack('ifscCodeStyle')
    @stack('homeLoanStyle')
    @stack('startyourjourneystyle')

</head>

<body>

    <div id="preloader"></div>
    <!-- trial header -->
    <header class="navbar navbar-expand-lg navbar-light " style="background-color: #1338BE;">
        <div class="container-fluid">
            <!-- Company Logo -->
            <nav class="navbar navbar-expand-lg navbar-light container-fluid">
                <a class="navbar-brand" href="http://192.168.120.228/myzeon_web/index.php">
                    <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/logo.png" alt="Company Logo"
                        style="filter: hue-rotate(45deg) brightness(480); height:50px;  ">
                </a>

                <!-- Navbar Toggler for mobile -->
                <div class="conainer-fluid" style="background-color: whitesmoke;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                        id="MainHeadButton">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!--
                <div id="navbarToggler" class="collapse navbar-collapse"> -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto navBarItemButton ">
                        <div class="d-flex justify-content-between text-center gapBetweenHeaderButton"
                            >
                            <li class="nav-item headerMainContentButton"><a
                                    class="btn btn-primary text-yellow-500 font-bold text-2xl" href="#showpanel"
                                    id="showAllloans"><b>ALL SERVICES</b></a></li>
                            <li class="nav-item headerMainContentButton"><a
                                    class="btn btn-primary text-yellow-500 font-bold text-2xl"
                                    href="http://192.168.120.228/myzeon_web/index.php/contact"><b>CONTACT US</b></a>
                            </li>
                            <li class="nav-item headerMainContentButton"><a
                                    class="btn btn-primary text-yellow-500 font-bold text-2xl"
                                    href="http://192.168.120.228/myzeon_web/index.php/about"><b>ABOUT US</b></a></li>
                        </div>

                        <div class="d-flex justify-content-between text-center">
                            <li class="nav-item headerMainContentButton"><a
                                    class="btn btn-primary text-yellow-500 font-bold text-2xl"
                                    href="http://192.168.120.228/myzeon_web/index.php/apply-new">APPLY NOW</a>
                            </li>
                            <li class="nav-item headerMainContentButton "><a
                                    class="btn btn-primary text-yellow-500 font-bold text-2xl"
                                    href="https://www.myzeon.com/cibil-score-check">CIBIL SCORE</a>
                            </li>
                        </div>
                    </ul>
                </div>

                <!-- Navbar Items -->


                <!-- </div> -->


            </nav>
        </div>
    </header>

    <div id="showpanel" class="hidden bg-gradient-to-r from-blue-500 to-yellow-500 p-6 fade-in text-center"
        style="margin-top: 100px;">
        <div class="flex-container justify-between space-x-4">

            <!-- LOANS -->
            <div class="flex-item animate__animated animate__fadeIn">
                <p class="text-xl font-semibold text-white mb-4">LOANS</p>
                <ul class="text-white" style="text-align: left;">
                    <li>
                        <a href="{{ route('personal-loan') }}" class="hover:underline font-medium">PERSONAL LOAN</a>
                    </li>
                    <li>
                        <a href="{{ route('business-loan') }}" class="hover:underline font-medium">BUSINESS LOAN</a>
                    </li>
                    <li>

                        <a href="{{ route('home-loan') }}" class="hover:underline font-medium">HOME LOAN</a>

                    </li>

                    <li>

                        <a href="{{ route('car-loan') }}" class="hover:underline font-medium">CAR LOAN</a>

                    </li>

                    <li>

                        <a href="{{ route('loan-against-property') }}" class="hover:underline font-medium">LOAN
                            AGAINST PROPERTY</a>

                    </li>

                </ul>

            </div>


            <!-- CARDS -->

            <div class="flex-item animate__animated animate__fadeIn">
                <p class="text-xl font-semibold text-white mb-4">CARDS</p>
                <ul class="text-white" style="text-align: left;">
                    <li>
                        <a href="{{ route('credit-cards') }}" class="hover:underline font-medium">CREDIT CARD</a>
                    </li>
                    <li>
                        <a href="{{ route('debit-cards') }}" class="hover:underline font-medium">DEBIT CARD</a>
                    </li>
                </ul>

            </div>


            <!-- INVESTMENTS -->

            <div class="flex-item animate__animated animate__fadeIn">

                <p class="text-xl font-semibold text-white mb-4">INVESTMENTS</p>

                <ul class="text-white" style="text-align: left;">

                    <li><a href="{{ route('mutual-funds') }}" class="hover:underline font-medium">MUTUAL FUNDS</a>
                    </li>

                    <li><a href="{{ route('fixed-deposit') }}" class="hover:underline font-medium">FIXED DEPOSIT</a>
                    </li>

                </ul>

            </div>


            <!-- FINANCIAL TOOLS -->

            <div class="flex-item  animate__animated animate__fadeIn">

                <p class="text-xl font-semibold text-white mb-4">FINANCIAL TOOLS</p>

                <ul class="submenu" id="showcalu">

                    <li class="financelist">

                        <span class="submenu-button group-hover:rotate-180"></span>

                        <a href="#" id="showCaluculatorItem" class="hover:underline font-medium">CALCULATOR</a>

                        <ul class="text-white" style="text-align: left;">

                            <li class="showCaluculatorItem">

                                <a href="{{ route('cal-personal-loan') }}"
                                    class="hover:underline font-medium">Personal Loan</a>

                            </li>

                            <li class="showCaluculatorItem">

                                <a href="{{ route('cal-business-loan') }}"
                                    class="hover:underline font-medium">Business Loan</a>

                            </li>

                            <li class="showCaluculatorItem">

                                <a href="{{ route('cal-home-loan') }}" class="hover:underline font-medium">Home
                                    Loan</a>

                            </li>

                            <li class="showCaluculatorItem">

                                <a href="{{ route('cal-car-loan') }}" class="hover:underline font-medium">Car
                                    Loan</a>

                            </li>

                            <li class="showCaluculatorItem">

                                <a href="{{ route('gst-calculator') }}" class="hover:underline font-medium">GST
                                    Calculator</a>

                            </li>

                            <li class="showCaluculatorItem">

                                <a href="{{ route('fd-calculator') }}" class="hover:underline font-medium">FD
                                    Calculator</a>

                            </li>

                            <li class="showCaluculatorItem">

                                <a href="{{ route('ppf-deposit') }}" class="hover:underline font-medium">PPF
                                    Calculator</a>

                            </li>

                            <a href="#" class="hover:underline font-medium">IFSC CODE</a>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </div>

    <!------------------------------------------------------------------------------------->

    @yield('content')

    <!------------------------------------------------------------------------------------->


    <!-- ----------------------------------------------------------------Footer Start---------------------------------------------------------------------------------------- -->

    <!-- start footer area -->

    <!--  -->
    <section style="color: white; background-color:#1c1d2e ;">
        <div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column 1: Logo and Introduction -->
                    <div class="col-lg-3 col-md-6 mb-4 mt-4">
                        <div class="text-center animated slideInUp">
                            <a href="https://www.myzeon.com/">
                                <img src="https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-300x78.png"
                                    alt="Myzeon" class="img-fluid1">
                            </a>
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div class="col-lg-2 col-md-6 mb-4 mt-4">
                        <h2 class="elementor-heading-title elementor-size-default animated slideInUp">Quick Link</h2>
                        <hr class="mb-4">
                        <ul class="list-unstyled animated slideInUp">
                            <li class="mb-2"><a href="https://www.myzeon.com/" class="color">Home</a></li>
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=1110" class="color">About
                                    Us</a></li>
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=1163" class="color">Why
                                    Choose Us</a></li>
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=1187" class="color">Contact
                                    us</a></li>
                            <li><a href="https://www.myzeon.com/?page_id=1597" class="color">Blog</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Services -->
                    <div class="col-lg-2 col-md-6 mb-4 mt-4">
                        <h2 class="elementor-heading-title elementor-size-default animated slideInUp">Services</h2>
                        <hr class="mb-4">
                        <ul class="list-unstyled animated slideInUp">
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=667" class="color">Personal
                                    Loan</a></li>
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=1360" class="color">Business
                                    Loan</a></li>
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=1362" class="color">Home
                                    Loan</a></li>
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=1365" class="color">Car
                                    Loan</a></li>
                            <li><a href="https://www.myzeon.com/?page_id=1320" class="color">Loan Against
                                    Property</a></li>
                        </ul>
                    </div>



                    <!-- Column 5: Contact Us -->
                    <div class="col-lg-2 col-md-6 mb-4 mt-4">
                        <h2 class="elementor-heading-title elementor-size-default animated slideInUp">Contact us</h2>
                        <hr class="mb-4">


                        <ul class="list-unstyled animated slideInUp">
                            <li class="mb-2">
                                <a href="https://goo.gl/maps/CPzMDB39QHEE4Kud9" target="_blank" rel="noopener"
                                    class="color">
                                    <i class="fa fa-home" aria-hidden="true"
                                        style="color: #ffd756; font-size: 22px; margin-right: 10px;"></i>A-47, Sector-2
                                    Noida, UP-201301
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="mailto:info@myzeon.com" class="color">
                                    <i class="fas fa-mail-bulk"
                                        style="color: #ffd756; font-size: 25px; margin-right: 10px;"></i>
                                    info@myzeon.com
                                </a>
                            </li>
                            <li>
                                <a href="tel:0120-4198166" class="color">
                                    <i class="fa fa-phone" aria-hidden="true"
                                        style="color: #ffd756; font-size: 25px; margin-right: 10px;"></i> 0120-4198166
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Column 4: Important Links -->
                    <div class="col-lg-3 col-md-6 mb-4 mt-4">
                        <h2 class="elementor-heading-title elementor-size-default animated slideInUp">Important Links
                        </h2>
                        <hr class="mb-4">
                        <ul class="list-unstyled animated slideInUp">
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=2634" class="color">Privacy
                                    policy</a></li>
                            <li class="mb-2"><a href="https://www.myzeon.com/?page_id=2655" class="color">Term &
                                    Conditions</a></li>
                            <li class="mb-2"><a href="#" class="color">Admin Login</a></li>
                            <li><a href="/careers" class="color">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>


    <!-- end footer area -->

    <div class="copy-right-section second-copyright">

        <div class="container">

            <div class="row">

                <div class="col-md-6 text-left">

                    <div class="copyright-text">
                        <p>
                            <i class="fa fa-copyright"></i>

                            <?php echo date('Y'); ?>

                            Myzeon. All Rights Reserved

                        </p>

                    </div>

                </div>

                <div class="col-md-6 text-right">
                    <ul class="footer-nav">
                        <li>
                            <a href="{{ route('privacy-policy') }}">Privacy Policy</a>

                        </li>

                        <li>
                            <a href="{{ route('term-and-conditions') }}">Term & Conditions</a>

                        </li>

                        <li>
                            <a href="https://www.myzeon.com/admin-login">Admin Login</a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>


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

            </div>

        </div>

    </div>

    <!-- end of footer area -->

    <!-- <script src="asset/js/jquery-3.3.1.min.js"></script> -->


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/front_end/asset/js/jquery.easing.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
        $(document).ready(function() {

            $("#MainHeadButton").on("click", function() {
                $("#navbarNav").toggle(); // Trigger the navbar toggle button to collapse the navbar
            });

            // Apply Now button animation
            $("#apply-now").hover(
                function() {
                    $(this).addClass("animate__animated animate__rubberBand");
                },
                function() {
                    $(this).removeClass("animate__animated animate__rubberBand");
                }
            );

            // Contact Us button animation
            $("#contact-us").hover(
                function() {
                    $(this).addClass("animate__animated animate__rubberBand");
                },
                function() {
                    $(this).removeClass("animate__animated animate__rubberBand");
                }
            );
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#ShowErrorField").hide();

            $("#btnSubmit").on('click', function() {

                var allFieldsFilled = true;


                $("#my-form input, select ,textarea").each(function() {
                    console.log("check validation");
                    if ($(this).val() === "") {
                        allFieldsFilled = false;
                        $(this).addClass("error");
                        $("#ShowErrorField").show();
                    } else {
                        $(this).removeClass('error');
                    }
                });

                if (allFieldsFilled) {

                    $("#my-form input[name=full_name]").on("change", function() {
                        var name = $(this).val();

                        // Create a regular expression to match alphabets and not special characters
                        var regex = /^[a-zA-Z]+$/;

                        // Check if the name matches the regular expression
                        if (!regex.test(name)) {
                            // The name does not match the regular expression, so it is invalid
                            $(this).addClass("error");
                            $("#error_name").html("*The name field can only contain alphabets.");
                            $("#error_name").addClass('error_name');
                        } else {
                            // The name matches the regular expression, so it is valid
                            $(this).removeClass("error");
                            $("#error_name").html("");
                        }
                    });

                    $("#my-form input[name=number]").on("change", function() {
                        var number = $(this).val();

                        // Create a regular expression to match a valid Indian mobile number
                        var regex = /^([6-9]\d{9})$/;

                        // Check if the phone number matches the regular expression
                        if (!regex.test(number)) {
                            // The phone number does not match the regular expression, so it is invalid
                            $(this).addClass("error");
                            $("#error_no").html(
                                "The phone number field must be a valid Indian mobile number.");
                            $("#error_name").addClass('error_name');
                        } else {
                            // The phone number matches the regular expression, so it is valid
                            $(this).removeClass("error");
                            $("#error_no").html("");
                        }
                    });


                    // ***************form submit******************


                    var name = $('#name').val();
                    var number = $('#number').val();
                    var occupation = $('#occupation').val();
                    var loanType = $('#loan_type').val();
                    var pincode = $('#pincode').val();
                    var city = $('#city').val();
                    var state = $('#stateName').val();
                    var message = $('#message').val();


                    $('#loader').show();

                    $.ajax({
                        url: 'https://crm.myzeon.com/api/cutomer-data-wp-post', // Replace with your server endpoint
                        type: 'POST', // Change to 'GET' or 'POST' depending on your needs
                        data: {
                            'name': name,
                            'phone_no': number,
                            'occupation': occupation,
                            'pincode': pincode,
                            'city': city,
                            'state': state,
                            'message': message
                        },
                        success: function(response) {
                            $('#loader').hide();
                            alert("form submit sccessfully");
                            $('#exampleModal').modal('hide');
                            console.log("form submit successfully");

                        },
                        error: function() {
                            // Handle error here
                            $('#loader').hide();
                            alert('Error submitting the form.');
                        }
                    });

                }

            });



        });
    </script>

    <script>
        $("#my-form input[name=pincode]").on("change", function() {
            console.log("change pin");
            var pincode = $(this).val();
            console.log(pincode);
            var apiUrl = "https://api.postalpincode.in/pincode/" + pincode;
            console.log(apiUrl);

            $.ajax({
                url: apiUrl,
                method: "GET",
                success: function(response) {
                    if (response[0].Status === 'Success') {
                        var data = response[0].PostOffice[0];

                        $('#city').val(data.District);

                        try {
                            var city = data.District;
                            var citySelect = $('#city');
                            citySelect.empty();
                            citySelect.append($('<option value="">Select a State</option>'));
                            citySelect.append($('<option value="' + city + '">' + city +
                                '</option>'));
                        } catch (error) {
                            console.log("error to get city");

                        }

                        try {
                            var state = data.State;
                            var stateSelect = $('#stateName');
                            stateSelect.empty();
                            stateSelect.append($('<option value="">Select a State</option>'));
                            stateSelect.append($('<option value="' + state + '">' + state +
                                '</option>'));
                        } catch (error) {
                            console.log("error to get state");

                        }

                    } else {
                        alert(
                            "Error fetching city and state for the given pincode.");
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".footer-element").hover(
                function() {
                    // When you hover over the element, add the fadeIn animation
                    $(this).addClass("animate__animated animate__fadeIn");
                },
                function() {
                    // When you move the mouse away, remove the fadeIn animation
                    $(this).removeClass("animate__animated animate__fadeIn");
                }
            );
        });
    </script>



    <script src="{{ asset('assets/front_end/asset/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/jquery.ui.touch-punch.min.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/jquery.nice-select.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/menumaker.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="asset/js/owl.carousel.min.js"></script> -->

    <script src="{{ asset('assets/front_end/asset/js/slider.js') }}"></script>

    <!-- calculator -->
    <script src="{{ asset('assets/front_end/asset/js/calculator.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/active.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/mainab59.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/core.minab59.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/mouse.minab59.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/slider.minab59.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/commoncalculatorab59.js') }}"></script>

    <script src="{{ asset('assets/front_end/asset/js/emicalculatorab59.js') }}"></script>

    @if (Route::currentRouteName() == '')
        <script src="{{ asset('assets/front_end/asset/js/commoncalculatorab59.js') }}"></script>

        <script src="{{ asset('assets/front_end/asset/js/emicalculatorab59.js') }}"></script>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <script>
        $(document).ready(function() {
            $(".social-icon").hover(
                function() {
                    $(this).css({
                        transform: "rotate(360deg)"
                    }); // Rotate on hover
                },
                function() {
                    $(this).css({
                        transform: "rotate(0deg)"
                    }); // Reset on mouse out
                }
            );
        });
    </script>


    <script>
        $(window).scroll(function() {

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

        $(".select").select2({

            // placeholder: "Select a programming language",

            allowClear: true,

        });

        $(document).ready(function() {

            // Add minus icon for collapse element which is open by default

            $(".collapse.show").each(function() {

                $(this)

                    .prev(".card-header")

                    .find(".fa")

                    .addClass("fa-angle-up")

                    .removeClass("fa-angle-down");

            });

            // Toggle plus minus icon on show hide of collapse element

            $(".collapse")

                .on("show.bs.collapse", function() {

                    $(this)

                        .prev(".card-header")

                        .find(".fa")

                        .removeClass("fa-angle-down")

                        .addClass("fa-angle-up");

                })

                .on("hide.bs.collapse", function() {

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
        $(document).ready(function() {

            //called when key is pressed in textbox

            $(".numberonly").keypress(function(e) {

                //if the letter is not digit then display error and don't type anything

                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

                    //display error message

                    return false;

                }

            });


            $(".alphaOnly").keypress(function(event) {

                var value = String.fromCharCode(event.which);

                var pattern = new RegExp(/[a-zåäö ]/i);

                return pattern.test(value);

            });

        });
    </script>



    <script>
        if ($(window).width() < 600) {
            $("#showAllloans").on("mouseenter", function() {
                return false;
            });
        } else if ($(window).width() < 992) {
            // The screen is considered a tablet device

            $("#showAllloans").on("mouseenter", function() {
                $("#showpanel").show();
            });

            $("#showpanel").on("mouseleave", function() {
                $(this).hide();
            });

        } else {
            // The screen is considered a desktop device

            $("#showAllloans").on("mouseenter", function() {
                $("#showpanel").show();
            });

            $("#showpanel").on("mouseleave", function() {
                $(this).hide();
            });
        }


        // if ($(window).width() < 600) {
        //     console.log("small screen size")


        // }

        $(document).ready(function() {

            $('.showCaluculatorItem').hide();

            // $("#showAllloans").on("mouseenter", function() {
            //     $("#showpanel").show();
            // });

            // $("#showpanel").on("mouseleave", function() {
            //     $(this).hide();
            // });





            $('#showCaluculatorItem').on('click', function() {

                $('.showCaluculatorItem').toggle();

            });

        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
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
    </script>
    <script>
        $("#carousel-slider").slick({
            arrows: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            mobileFirst: true
        });
    </script>



    <!-- Add these at the end of the <body> section -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSBYTGTv2t6dPrgr9rDoGIt4v+m4=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- @stack('personalLoanStyle') -->

    @stack('indexPageScript')
    @stack('ifscCodeScript')
    @stack('personalLoanScripts')
    @stack('homeLoanScripts')
    @stack('startyourjourneyscript')

</body>

</html>
