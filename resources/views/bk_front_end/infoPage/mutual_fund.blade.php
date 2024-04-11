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

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/mutual_fund_banner.png"
            alt="Card image" width="auto" style="margin-top: 100px;" />
    </div>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">What Are Mutual Funds?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            A mutual fund is a type of investment in which money is pooled together from many people with
                            the purpose of investing the money to buy a variety of stocks, bonds, or other securities. A
                            professional money manager manages this mix of investments and offers individuals a portfolio
                            that aligns with the fund's prospectus and individual's objectives. Investing in a mutual fund
                            is less risky than investing in a single stock or bond as individuals gain access to a wide
                            range of investments in Mutual fund return calculator. Investors can have access to a portfolio
                            managed by professionals that includes equities, bonds, and other asset classes.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">How do Home Loan Functions:
                        </h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            Are you thinking of investing in your dream home but falling short on funds? A home loan is a
                            loan that
                            allows individuals to borrow money to purchase a home. It is a secured loan that is backed by
                            collateral
                            and the home itself is the collateral in this type of loan. In case an individual fails to repay
                            the
                            loan, lenders are eligible to take possession of the property that was given as collateral
                            through a
                            legal process known as foreclosure. Borrowers need to make a down payment, which is a percentage
                            of the
                            home’s purchase price. The down payment amount can vary from lender to lender. But, what’s the
                            process
                            of applying for a home loan and it can benefit you in the long run? Are you eligible for a home
                            loan or
                            what are the required documents for a home loan?
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">What Are The Types Of Mutual Funds?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Different types of mutual funds are available for investment. These funds are managed by professional
                    fund managers, who make investment decisions on behalf of the investors. Most mutual funds revolve
                    around four main categories. Some of the main types of mutual funds are:
                </p>
                <div class="loan-types">
                    <div class="loan-type">
                        <i class="fas fa-home"></i>
                        <p>Stock funds</p>
                    </div>
                    <div class="loan-type">
                        <i class="fas fa-landmark"></i>
                        <p>Bond funds</p>
                    </div>
                    <div class="loan-type">
                        <i class="fas fa-hammer"></i>
                        <p>Index funds</p>
                    </div>
                    <div class="loan-type">
                        <i class="fas fa-wrench"></i>
                        <p>Balanced funds</p>
                    </div>
                    <div class="loan-type">
                        <i class="fas fa-home"></i>
                        <p>Money market funds</p>
                    </div>
                    <div class="loan-type">
                        <i class="fas fa-arrows-alt"></i>
                        <p>Income funds</p>
                    </div>
                    <div class="loan-type">
                        <i class="fas fa-arrows-alt"></i>
                        <p>International/Global funds</p>
                    </div>
                    <div class="loan-type">
                        <i class="fas fa-arrows-alt"></i>
                        <p>Specialty funds</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How Are Returns Calculated For Mutual Funds?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    If you invest in mutual funds, the main source of earning returns are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Income:
                        </li>
                        <p class="paraFont">
                            The source of income of a mutual fund is from dividends on stocks and interest on bonds, which
                            is distributed to fund owners throughout the year. <b style="color:#1338be">Mutual fund interest
                                rates</b> often offer
                            investors the option to reinvest their earnings to buy more shares or to get a check for
                            distributions.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Portfolio Distributions:
                        </li>
                        <p class="paraFont">
                            The primary source of returns in mutual funds comes from changes in the value of the securities
                            held in the fund's portfolio. If the value of the stocks, bonds, or other assets in the
                            portfolio increases, the fund experiences capital appreciation. And if the value decreases,
                            there is capital depreciation.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Capital Gains:
                        </li>
                        <p class="paraFont">
                            When the fund manager sells securities in the portfolio for a profit, the fund may distribute
                            those gains to investors in the form of capital gains distributions. Investors often have the
                            option to reinvest dividends and capital gains back into the fund, acquiring additional shares.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How Can You Invest In Mutual Funds?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Mutual fund investment is a straightforward process which includes:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">1:
                        </li>
                        <p class="paraFont">
                            Research and choose a fund that matches your investment goals and risk tolerance.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">2:
                        </li>
                        <p class="paraFont">
                            Decide on what distribution channel you would want to invest in. There are various channels such
                            as directly through the fund company, through a brokerage account, and through a financial
                            advisor.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">3:
                        </li>
                        <p class="paraFont">
                            Open an account depending on the chosen distribution channel. The mutual fund account can be
                            directly with the fund company or a brokerage account if you choose to use a brokerage.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">4:
                        </li>
                        <p class="paraFont">
                            Deposit the amount you want to invest in the mutual fund. Decide whether you want to make a
                            lump-sum investment or use a systematic investment plan (SIP) where you contribute a fixed
                            amount at regular intervals.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">5:
                        </li>
                        <p class="paraFont">
                            Keep monitoring your investment’s performance annually. You can check the fund’s NAV online.
                        </p>
                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Advantages Of Mutual Fund Investing</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The advantages of investing your money in mutual funds are
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Mutual fund investing involves the mixing of investments and assets in a portfolio to reduce risks.
                        Mutual funds invest in a diversified portfolio of assets, such as stocks, bonds, and other
                        securities that help to spread risks. It reduces the impact of poor performance by individual
                        securities on the overall portfolio.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Mutual funds are managed by professional fund managers who have expertise in financial markets.
                        These managers make investment decisions based on thorough research and analysis, potentially
                        leading to better investment outcomes.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        These funds are easy to buy and sell, and the minimum investment requirements are often relatively
                        low. Investors can enter or exit the market on any day at the net asset value price.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Mutual fund investment offers to sell your shares at any time, providing a level of liquidity that
                        may not be available in other investment vehicles, such as individual stocks, etc.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Mutual funds benefit from economies of scale because they pool money from many investors. This
                        allows them to spread transaction costs and management fees across a larger asset base, potentially
                        resulting in lower costs for individual investors.
                    </li>
                </ul>
            </div>



        </div>
    </section>

@endsection
