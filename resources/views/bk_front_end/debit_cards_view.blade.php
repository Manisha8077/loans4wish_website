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

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/debit_card_banner.jpeg"
            alt="Card image" width="auto" style="margin-top: 100px;"/>
    </div>


    <section class="j">
        <div class="container-fluid mt-4 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">What is a Debit Card?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            Unlike credit cards, debit cards are linked directly to an individual's bank account. They
                            enable users to make purchases, withdraw cash from ATMs, and conduct various transactions
                            without the need for physical currency. Essentially Myzeon, a debit card acts as a digital
                            gateway to one's financial assets. A debit card is referred to as plastic money that is issued
                            by banks to withdraw cash from ATMs and other online and offline transactions in daily life. It
                            can easily access your savings account or current account at any bank. It also allows
                            individuals to withdraw and deposit cash by using the card. You can opt for the online debit
                            card apply option to get a debit card in the comfort of your home.
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
                    <h4 class="eligible slide">Difference Between Credit Card And Debit Card</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        Debit cards and credit cards are two totally different terms used for financial tools, but their
                        function and purpose are different from each other. <a
                            href="https://www.myzeon.com/blog/how-can-you-apply-an-online-debit-card-for-financial-security">apply
                            online debit card</a> is linked to a bank
                        account and transactions made with it are directly deducted from your savings or current account. On
                        the other hand, a credit card is issued by a financial institution, and the cardholder is assigned a
                        predetermined credit limit. The credit card issuer extends a line of credit, and the cardholder is
                        required to pay back the borrowed amount.

                    </p><br>
                    <p class="paraFont">
                        The main difference between these two terms is that a debit card does not involve any borrowing
                        whereas a credit card involves borrowing from the card issuer. Using a debit card does not
                        contribute to building a credit history, whereas responsible use, timely payments, and maintaining a
                        low credit utilization ratio can positively impact your credit score. Online debit card application
                        is the most convenient way to get a debit card in the comfort of your home.
                    </p>



                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">What are the Types of Debit Cards Available in India?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    In India, there are a variety of debit cards to choose from that cater to the diverse needs and
                    preferences of customers. You can easily apply for a debit card online. Each type of debit card has its
                    own set of features, benefits, and eligibility criteria. Some of the common types of debit cards offered
                    by banks in India are:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Visa Debit Card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Rupay Debit Card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> MasterCard Debit Card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Maestro Debit Card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Visa Electron Debit Card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Contactless Debit Card
                    </li>

                </ul>
            </div>



        </div>
    </section>






    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">What Are The Features of a Debit Card?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Some of the features you can avail of if you apply for debit card online:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Debit cards are a convenient and secure alternative to carrying cash, earning them the nickname
                        "plastic money."
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It allows users to withdraw cash from
                        their savings or current account through an ATM.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        They are typically linked to a current or savings account. Transactions made with the debit card are
                        directly deducted from the available balance in the linked account.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Debit cardholders can use ATMs to withdraw cash, check account balances, and perform other banking
                        transactions.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        These cards can be used to make purchases at various point-of-sale (POS) locations, including retail
                        stores, restaurants, and online merchants.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>Transactions of a debit card can be
                        monitored and managed through online banking platforms and mobile apps provided by the issuing bank.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Many debit cards are equipped with contactless technology, allowing users to make quick and secure
                        transactions by tapping the card on contactless-enabled POS terminals.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Debit card transactions often require a Personal Identification Number (PIN) for added security,
                        especially for ATM withdrawals and certain POS transactions.
                    </li>

                </ul>
            </div>



        </div>
    </section>

    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">How Can You Apply Online For A Debit Card?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    You don’t specifically need to apply for a debit card as when you open your bank account, you will
                    automatically get a debit card. In case you want a new debit card or you lost your debit card, then you
                    can apply for a new one with an online debit card. Here are the steps to follow for applying a debit
                    card online:

                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Visit the official website of the bank you want a debit card from.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Select a debit card that fits your needs and requirements and apply for the same.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        You will receive your debit card in a few working days at your mentioned address.
                    </li>

                </ul>
            </div>



        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">Conclusion
                        </h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            Online debit card apply and get a direct access tool to your own funds. As technology continues
                            to shape the financial landscape, online debit card applications are more convenient.
                            Understanding the types of debit card can help you understand what best fits your needs and
                            wants. Debit cards and credit cards differ from each other in many ways. Before online debit
                            card apply, individuals should carefully consider their financial needs, spending habits, and
                            the specific features offered by each type.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
