@extends('front_end_layout.home')
@push('homeLoanStyle')
    {{-- libary for filter --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    {{--
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    {{--
<script src="//unpkg.com/alpinejs" defer></script> --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{--
<script src="https://cdn.tailwindcss.com"></script> --}}


<style>

    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateX(20%);
        }

        100% {
            opacity: 1;
            transform: translateX(10);
        }
    }

    .slide {
        animation: slideIn 7s ease-in-out;
        padding-top: 1.25rem; /* Adjust as needed */
  margin-bottom: 0.5rem; /* Adjust as needed */
  font-family: 'Josefin Sans', sans-serif;
  text-align: center;
  font-size: 2.1rem; /* Adjust as needed */
  font-weight: bold;
  /* color: #dfaf37; */ 
    }
</style>
<style>
        .paraFont {

            color: #4b5563;
            text-align: justify;
            /* line-height: 2.1rem; */
            font-size: 19px;
        }

        .eligible {
            color: #1338be;
            font-weight: 600;
            list-style: disc;

        }

        .eligible1 {
            color: #1338be;
            font-weight: 600;
            list-style: disc;
            font-size: 19px;
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 150px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        #bankTable {
            width: 100%;
            border-collapse: collapse;
        }

        #bankTable td,
        #bankTable th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #bankTable tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #searchInput,
        #bankSelection {
            margin-bottom: 10px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 150px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .range-slider-container {
            position: relative;
        }

        .range-slider-container input[type="range"] {
            width: 80%;
            background-color: transparent;
            -webkit-appearance: none;
            height: 5px;
            border-radius: 5px;
            outline: none;
        }

        .range-slider-container input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 15px;
            height: 15px;
            background-color: #007bff;
            border-radius: 50%;
            cursor: pointer;
        }

        .range-slider-container input[type="range"]::-moz-range-thumb {
            appearance: none;
            width: 15px;
            height: 15px;
            background-color: #007bff;
            border-radius: 50%;
            cursor: pointer;
        }

        .ui-slider {
            position: relative;
            height: 5px;
            border: none;
            background: transparent;
        }

        .ui-slider .ui-slider-range {
            position: absolute;
            height: 100%;
            border-radius: 5px;
            background-color: #007bff;
        }

        .ui-slider .ui-slider-handle {
            position: absolute;
            top: 50%;

            height: 15px;
            background-color: #007bff;
            border-radius: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .range-label {
            position: absolute;
            top: 100%;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        #selectedInterestRateMarker {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 15px;
            background-color: ;
        }

        .col-sm-4 {

            margin-left: 10PX;
            float: right;
            margin-right: 480px;
            margin-bottom: -10px;
        }

        @media (max-width: 768px) {
            .col-sm-4 {
                margin-left: 0;
                margin-right: 0;
                margin-bottom: 10px;
                float: none;

            }
        }

        .dropdown-menu.show {
            display: block;
            overflow: auto;
            max-height: 300px;
        }

        #searchInput {
            position: absolute;
            right: 30px;
            top: 100px;
            right: 0px;
            padding: 5px;
            font-size: 14px;
        }
    </style>


    <style>
        .paraFont {

            color: #4b5563;
            text-align: justify;
            /* line-height: 2.1rem; */
            font-size: 17px;
        }

        .eligible {
            color: #1338be;
            font-weight: 600;
            list-style: disc;

        }

        .eligible1 {
            color: #1338be;
            font-weight: 600;
            list-style: disc;
            font-size: 17px;
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>


    <style>
        /* Set the width and height of the carousel container */
        .card-text {
            text-align: justify;
        }

        .text-4xl {
            font-size: 2.0rem;
        }

        .owl-carousel {
            width: 100%;
            /* Set your desired width */
            height: 50%;
            /* Set your desired height */
            overflow: hidden;
        }

        /* Set the width and height of the carousel items */
        .owl-carousel .item {
            width: 50%;
            /* Set the width of each carousel item */
            height: 50%;
            /* Set the height of each carousel item */
        }

        /* Style for the images within the carousel items */
        .owl-carousel .item img {
            width: 100%;
            /* Ensure the image takes the full width of the item */
            height: 100%;
            /* Ensure the image takes the full height of the item */
            object-fit: cover;
            /* You can use 'cover' or 'contain' for image scaling */
        }
    </style>

    <style>
        .jumbotron {
            background-color: white;
        }

        .sectiontable {
            margin-top: 0px;
        }

        .personaloan-header {
            height: 250px;
        }

        .paddingtop {
            padding-top: 7px;
            color: #fef08a;
        }
    </style>
@endpush

@push('homeLoanScripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endpush

@section('content')
    <div class="">

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/cal_ppf_banner.png"
            alt="Card image" width="auto" style="margin-top: 100px;"/>
    </div>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">Understanding Public Provident Fund (PPF)</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            The Public Provident Fund is a scheme provided by the central government in India. The
                            government-backed tax savings scheme, PPF, was introduced in 1968. The objective was to mobilize
                            small savings of the people through an investment with a return on it. Returns on a PPF are
                            tax-free, which is why it is one of the most loved investments for investors. It is known for
                            its safety, tax benefits, and long-term wealth-creation potential. In order to take advantage of
                            the investment, you should have an understanding of an <a
                                href="https://www.myzeon.com/ppf-calculator">online PPF calculator</a>. It can assist you
                            in selecting the right deal without any manual calculation.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="eligible slide">What Is A PPF Calculator?</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        A PPF calculator is a tool that can estimate the returns on investments made in a Public Provident
                        Fund account. The primary purpose of a PPF calculator is to assist investors in planning their
                        contributions and projecting future wealth accumulation. It can calculate your returns with just the
                        principal amount, the tenure of the investment, and the prevailing interest rate.

                    </p><br>
                    <p class="paraFont">
                        It employs the compound interest formula to calculate the interest accrued on the principal amount
                        and provides investors with an estimate of the maturity amount, the total amount they can expect at
                        the end of the investment tenure. Some PPF calculators provide graphical representations of the
                        investment growth over time, giving investors a visual understanding of how their PPF investment is
                        expected to perform.

                    </p>



                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">What Are The Benefits Of PPF Calculator?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Using a PPF calculator can offer you numerous advantages of precision, goal-oriented planning,
                    comparative analysis, and many more. Some of the benefits you can avail of by using a PPF calculator
                    are:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It gives a clear understanding to the
                        investors of how much interest they will get with the investment.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> A PPF calculator allows investors to
                        align their PPF investments with specific financial objectives. Whether the goal is to save for a
                        child's education, purchase a home, or build a retirement corpus, the calculator enables goal-based
                        planning.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It also offers the advantage of making
                        comparative analyses. Investors can experiment with different scenarios by adjusting variables such
                        as the principal amount, interest rate, and tenure.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Interest rates on PPF are subject to
                        periodic revisions. A PPF calculator can adapt to changes in interest rates and investors can easily
                        see how alterations in interest rates are impacting the results. It allows them to make adjustments
                        to their investment strategy based on it.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It assists investors in getting the
                        accurate result of their investment and it saves you from paying a hefty amount of tax.
                    </li>
                </ul>
            </div>



        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Use A PPF Calculator?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    You need to have a clear understanding of how the calculator works to take advantage of its full
                    potential. The investors only have to put values in the blanks and they will get an accurate maturity
                    amount. Here are some steps to follow to use a PPF calculator:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 1:
                        </li>
                        <p class="paraFont">
                            Visit the official website of a financial institution that has a reliable PPF calculator online.
                            There are many financial websites and institutions that provide PPF calculators that are
                            user-friendly.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2:
                        </li>
                        <p class="paraFont">
                            Enter the initial amount you want to invest in your PPF account that will accrue interest over
                            time.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3:
                        </li>
                        <p class="paraFont">
                            Input the tenure that you prefer to keep your funds invested in the PPF account. The average
                            tenure is 15 years and the minimum tenure you can opt for is 5 years.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 4:
                        </li>
                        <p class="paraFont">
                            Enter the current interest rate offered on the PPF and choose the compounding frequency. Ensure
                            it is set to “Annually” for precise results.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 5:
                        </li>
                        <p class="paraFont">
                            Click on the “calculate” button to receive the maturity amount of your PPF investment.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">What Is The Formula To Calculate PPF Interest?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            The formula to calculate the interest on a PPF account is based on the compound interest
                            formula. The interest is compounded annually in PPF. It's important to note that the interest
                            rate used in the formula is the annual interest rate, and it is subject to periodic revisions by
                            the government. Therefore, when using this formula, ensure that you use the most up-to-date
                            interest rate to obtain accurate calculations. The formula to calculate your PPF interest is:
                        </p>
                        <p>A= P [&times; (({(1+i)^n}-1)/i)]</p>

                        <p class="paraFont">
                            Where I is the rate of interest, F is the maturity of PPF, N is the total number of years, and P is the annual installments.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
