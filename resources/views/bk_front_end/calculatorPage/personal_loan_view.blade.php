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


        .active,
        .accordion:hover {
            /* background-color: #ccc; */
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

        /* .owl-carousel .owl-stage-outer .owl-stage{
                                                                                                                                                                                        width: 4000px !important;
                                                                                                                                                                                        overflow: hidden !important;
                                                                                                                                                                                    } */
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

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/cal_personal_loan_banner.png"
            alt="Card image" width="auto" style="margin-top: 100px;"/>
    </div>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">How Does A Personal Loan EMI Calculator Work?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            A Personal Loan EMI Calculator is an online tool designed to compute the monthly installment
                            that a borrower needs to pay towards the repayment of their loan. It considers various factors
                            such as loan amount, interest rate, and tenure to provide an accurate and detailed repayment
                            schedule.
                        </p>

                        <p class="paraFont">
                            The key components of a personal loan EMI calculator are loan amount, interest rate, and loan
                            tenure. The loan amount is the principal sum borrowed from the lender. The personal loan EMI
                            calculator allows you to input this amount, giving you a precise breakdown of your monthly
                            repayments. The interest rate is the cost of borrowing which is expressed as a percentage. EMI
                            calculator takes this rate into account to determine the monthly installment accurately. The
                            loan tenure is the duration for which the borrower agrees to repay the loan. A longer tenure
                            generally results in lower EMIs but higher overall interest payments, and vice versa. The
                            personal loan EMI calculator helps you strike the right loan tenure for lower EMIs.
                        </p>

                        <p class="paraFont">
                            The EMI calculation consists of a standard mathematical formula:
                        </p>

                        <pre>
                            EMI = P &times; R &times; (1 + R)^N / ((1 + R)^N - 1)
                          </pre>

                        <ul>
                            <li class="paraFont">
                                <span style="color: #1338be; font-weight: 600;">&bull;</span> EMI is the Equated Monthly
                                Installment.
                            </li>

                            <li class="paraFont">
                                <span style="color: #1338be; font-weight: 600;">&bull;</span> P is the principal loan
                                amount.
                            </li>

                            <li class="paraFont">
                                <span style="color: #1338be; font-weight: 600;">&bull;</span> R is the monthly interest
                                rate.
                            </li>

                            <li class="paraFont">
                                <span style="color: #1338be; font-weight: 600;">&bull;</span> N is the number of monthly
                                installments.
                            </li>
                        </ul>


                    </div>
                </div>

            </div>

        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">What Factors Influence Personal Loan EMI?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Factors that influence the EMIs of a personal loan are crucial for borrowers to understand. They can
                    make informed decisions and manage their finances accordingly. Some of the factors that affect personal
                    loan EMIs are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan amount:
                        </li>
                        <p class="paraFont">
                            The personal loan EMI is directly proportional to the loan amount. A higher loan amount results
                            in larger EMIs whereas a lower loan amount results in smaller EMIs.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Interest rate:
                        </li>
                        <p class="paraFont">
                            Higher interest rates lead to higher EMIs and the lower the interest rates, the lower the EMIs.
                            Fixed interest rates of personal loans provide stable EMIs throughout the tenure while floating
                            interest rates can result in fluctuations in EMIs on the basis of market conditions.
                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan tenure:
                        </li>
                        <p class="paraFont">
                            the loan tenure has an inverse relationship with the loan EMI. The longer the loan tenure, the
                            smaller will be your EMIs but the overall interest paid over the loan tenure will be higher.
                            Shorter tenures results in higher EMIs but lower interest payments.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Credit score:
                        </li>
                        <p class="paraFont">
                            Borrowers with higher credit scores often qualify for lower interest rates, which can result in
                            more affordable EMIs. Conversely, individuals with lower credit scores may face higher interest
                            rates and, consequently, larger EMIs.

                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Use A Personal Loan EMI Calculator?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Follow the below steps to use an EMI calculator:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 1:
                        </li>
                        <p class="paraFont">
                            Visit the official website of a financial institution that has a facility for <a
                                href="https://www.myzeon.com/blog/how-can-you-get-a-personal-loan-at-lowest-interest-rates">calculating
                                personal loan interest rates </a> with EMI calculator.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2:
                        </li>
                        <p class="paraFont">
                            Input the desired loan amount in the field. This should be the principal amount that you intend
                            to borrow.


                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3:
                        </li>
                        <p class="paraFont">
                            Enter the interest rate that a bank or financial institution is offering on a personal loan. The
                            EMI calculator will use this information to calculate the interest component of your EMI.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 4:
                        </li>
                        <p class="paraFont">
                            Choose the loan tenure or duration for which you want to borrow. This could range from a few
                            months to several years, depending on the lender's terms and your financial preferences.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 5:
                        </li>
                        <p class="paraFont">
                            Once you've filled in the necessary details, click on the 'Calculate' button. The Personal Loan
                            EMI Calculator will process the information and display your monthly EMI.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Decrease Your Personal Loan EMI?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    It's important to evaluate all options and choose the one that works best for your financial situation.
                    There are a few ways to decrease your personal loan EMI.
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Use Personal Loan EMI calculator:
                        </li>
                        <p class="paraFont">
                            Using an EMI calculator to calculate your personal loan EMIs is crucial for financial planning.
                            It allows you to get the exact amount that you will have to pay every month.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Make prepayments:
                        </li>
                        <p class="paraFont">
                            Whenever you have extra funds, you can use them to make prepayments. Do not wait for the due
                            date to pay your EMIs. This will help in the reduction of your loan tenure which can result in
                            the minimization of interest cost on your loan.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Achieve timely payments:
                        </li>
                        <p class="paraFont">
                            Achieving timely payments is another way to decrease your personal loan EMI. Making your
                            payments on time can help you avoid late fees and penalties, as well as improve your credit
                            score. A good credit score can lead to lower interest rates and, consequently, lower EMIs.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">What Are Benefits of Using A Personal Loan EMI Calculator?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Some benefits of using a personal loan EMI calculator are:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It leverages advanced algorithms to
                        ensure accuracy in calculations. The accuracy it provides helps borrowers to plan their finances
                        accordingly.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Manual calculation of your EMI can be
                        time-consuming and prone to errors but online personal EMI calculators simplifies the process and
                        delivers instant and reliable results.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Personal loan EMI calculation helps
                        in financial planning. By knowing the exact EMI amount and repayment schedule, borrowers can plan
                        their finances better, avoiding any surprises and ensuring timely payments.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It allows borrowers to compare
                        different loan offers by adjusting loan amounts, interest rates, and tenures. This can assist in
                        making informed decisions based on your financial capacity.

                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Required Documents For a Home Loan</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The required documents for choosing a home credit loan apply are necessary to satisfy the KYC norms.
                    Here are the documents that you have to assemble before taking a home loan:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Identity proof such as PAN card,
                        Aadhar card, Voter ID, Passport
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Address proof includes Registered
                        rent agreement, Aadhar card, driver's license, Latest utility bills

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Income proof includes salary slips
                        for the last 3 to 6 months
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>Property documents such as copy of the
                        property documents, such as Sale deed, Khata Certificate, and Encumbrance Certificate

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Photographs
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Proof of the down payment made for
                        the property purchase

                    </li>

                </ul>
            </div>



        </div>
    </section>
@endsection
