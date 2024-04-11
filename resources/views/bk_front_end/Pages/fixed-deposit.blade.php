@extends('front_end_layout.home')
@push('homeLoanStyle')
    {{-- libary for filter --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


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
        body {
            /* font-family: 'Arial', sans-serif;
                                                  background-color: #f5f5f5;
                                                  margin: 0;
                                                  display: flex;
                                                  justify-content: center;
                                                  align-items: center;
                                                  height: 100vh; */
        }

        .loan-types {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .loan-type {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .loan-type:hover {
            transform: scale(1.2);
        }

        .loan-type:hover i {
            color: #2c50bc;
        }


        .loan-type i {
            font-size: 2em;
            color: #f9bc05;
            margin-bottom: 10px;
        }

        .loan-type p {
            margin: 0;
            font-size: 1.2em;
            color: #333;
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

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/fixed_deposit_banner.png"
            alt="Card image" width="auto" style="margin-top: 100px;" />
    </div>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">What Is Fixed Deposit?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            Investing in fixed deposits is one of the best ways to secure your money and future. It
                            contributes to saving money and creates extra income in the form of substantial interest.
                            Depositor gets a good return on investment by investing in fixed deposits only once when they
                            open their account. A fixed deposit is offered by banks in which an individual deposits an
                            amount for a fixed tenure at a predetermined interest rate. At the end of the tenure, the
                            principal amount is returned to the depositor with the accrued interest. Investing in fixed
                            deposits is considered a safe investment option because they are not subject to market
                            fluctuations, and the returns are predictable. The amount deposited in the fixed deposit account
                            can be withdrawn after the maturity date, whereas withdrawal before the maturity date may lead
                            to penalties and lower interest earned.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Types of Fixed Deposits</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    There are different types of fixed deposits to help you in fulfilling your diverse needs. Some of the
                    common types are:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Regular fixed deposit
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Senior citizen fixed deposit
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Tax-saver fixed deposit
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Cumulative fixed deposit
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Non-cumulative fixed deposits
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Flexi fixed deposit
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Corporate fixed deposit
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> NRI fixed deposits
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Short-term fixed deposit
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Step-up fixed deposit
                    </li>

                </ul>
            </div>



        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Why Should You Invest In Fixed Deposit?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Investing in fixed deposits may reap great results and higher interest on the principal amount. Some of
                    the reasons that you should invest in fixed deposit are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Returns On Investment is Guaranteed
                        </li>
                        <p class="paraFont">
                            The interest rate fixed at the time of opening a fixed deposit account remains the same until
                            the maturity date of FD. You will already know the exact amount of interest that you will earn
                            on your investment upon maturity. The interest rate offered on fixed deposits can vary from bank
                            to bank and can depend on various factors, such as the duration of the deposit, the amount of
                            the deposit, and prevailing market conditions. This can be an advantage if interest rates in the
                            market drop, as you will continue to earn the same rate of interest that you were offered at the
                            time of opening the deposit.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Tax-saving
                        </li>
                        <p class="paraFont">
                            Investing in fixed deposits also allows for tax deductions under Section 80C of the Income Tax
                            Act. The amount invested in fixed deposits for a tenure of 5 years or more is eligible for a tax
                            deduction of up to Rs. 1.5 lakh per financial year. This makes fixed deposits a popular
                            investment option for those looking to save on taxes while earning a steady income. However, it
                            is important to note that the interest earned on fixed deposits is taxable as per the
                            individual's applicable tax slab.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Against Fixed Deposit (FD)
                        </li>
                        <p class="paraFont">
                            Fixed deposits can be used as collateral to avail loans through an overdraft facility. The
                            credit limit granted is dependent on the amount of fixed deposit pledged as collateral. The
                            interest rate is charged only on the amount withdrawn until the loan is fully repaid.
                            Additionally, the borrower continues to earn interest on the fixed deposit amount used as
                            collateral, throughout the loan tenure. You can withdraw funds up to your credit limit from your
                            overdraft account, and repay it in accordance with your repayment capacity.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Credit Card Facility
                        </li>
                        <p class="paraFont">
                            A credit card against fixed deposit is a facility provided by banks where an individual can
                            avail of a credit card by keeping a fixed deposit as collateral. The credit limit offered by the
                            bank is usually a percentage of the fixed deposit amount. For those who are new to credit or
                            have a low credit score, it provides them with an opportunity to build their credit history and
                            improve their credit score. The interest rate charged on the credit card is usually lower than
                            that of a regular credit card, and the individual can also earn interest on the fixed deposit
                            amount. Any default in payment of credit card dues may lead to the bank using the fixed deposit
                            as collateral to recover the outstanding amount.
                        </p>
                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Features Of Investing in Fixed Deposit</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Investing in fixed deposits comes with several features that make it a preferred investment option for
                    many individuals. It can also add up to your financial health in the long term. The features of
                    investing in fixed deposit are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Fixed Tenure:
                        </li>
                        <p class="paraFont">
                            Fixed deposits come with a fixed tenure, which can range from seven days to 10 years. The
                            depositor have the knowledge of exactly when they will receive their principal amount along with
                            the interest earned.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Minimum Deposit Requirement:
                        </li>
                        <p class="paraFont">
                            When you open a fixed deposit account, it requires a minimum deposit amount. The minimum deposit
                            amount for a fixed deposit account can vary depending on the bank and the type of account you
                            choose. Higher deposit amounts may result in higher interest rates, which can help you earn more
                            on your investment.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Higher Interest Rate:
                        </li>
                        <p class="paraFont">
                            Fixed deposits typically offer higher interest rates compared to savings accounts. The interest
                            rates on fixed deposits vary depending on the tenure and the bank's policies.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Low Risks:
                        </li>
                        <p class="paraFont">
                            FD is considered a low-risk investment option as they are not subject to market fluctuations.
                            The returns are predictable and assured at the time of opening the account. The interest rate is
                            predetermined at the time of deposit, and the depositor knows the amount they will earn at the
                            end of the tenure.
                        </p>
                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Open Online Fixed Deposits?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The steps to follow to open an online fixed deposit account are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 1:
                        </li>
                        <p class="paraFont">
                            Visit the official website of the bank that you chose to open a fixed deposit account.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2:
                        </li>
                        <p class="paraFont">
                            If you already have a bank account then log in to it or create a new account and find the “Fixed
                            deposit” option on the website.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3:
                        </li>
                        <p class="paraFont">
                            Fill out the fixed deposit application form that includes tenure, amount, nominee, and your
                            digital signatures.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 4:
                        </li>
                        <p class="paraFont">
                            Upload the documents asked by the bank or financial institution on their official website.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 5:
                        </li>
                        <p class="paraFont">
                            Check the details that you have filled out and submit.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 6:
                        </li>
                        <p class="paraFont">
                            Transfer the payment from your linked account to the fixed deposit account through Internet
                            banking.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>
@endsection
