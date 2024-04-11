@extends('front_end_layout.home')
@push('homeLoanStyle')
   

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

        <img class="card-img" src="{{website_asset_image_webimage_base_url()}}/cal_car_loan_banner.png"
            alt="Card image" width="auto"  />
    </div>







    <section class="container-fluid">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="eligible slide">What is a Car Loan EMI Calculator?</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        Are you thinking of purchasing your dream car but falling short of funds? When buying a new car,
                        financial planning plays a crucial role. A car loan EMI calculator is a tool that allows potential
                        car buyers to plan their car loan EMIs before applying for a car loan. It provides a clear
                        understanding of their repayment obligations.

                    </p><br>
                    <p class="paraFont">
                        EMI calculator considers key variables such as the loan amount, interest rate, and loan tenure to
                        provide an accurate projection of the monthly EMIs. It utilizes a standard formula to compute the
                        EMI based on these key variables. Anyone considering financing a car can use a <a
                            href="https://www.myzeon.com/car-loan-emi-calculator">car loan EMI
                            calculator </a>, which offers transparency and empowers borrowers to make informed decisions
                        regarding
                        their loans.

                    </p>



                </div>


            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="eligible slide">Importance Of A Car Loan EMI Calculator</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        Owning a dream car is in everyone’s reach because of the car loan EMI facility provided to car
                        buyers. There are different lenders in the marketplace online or offline at different interest
                        rates. Nowadays, you don’t need to save for years just to own a new car. But, how can you calculate
                        your EMI that doesn’t make a hole in your pocket?

                    </p><br>
                    <p class="paraFont">
                        The car loan EMI calculator can help you calculate your car loan EMIs in advance. The calculator
                        breaks down the monthly repayment into principal and interest components. This transparency helps
                        borrowers understand how much of each EMI contributes to repaying the borrowed amount and how much
                        goes towards interest payments.
                    </p>



                </div>


            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Why To Use A Car Loan EMI Calculator? </h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The EMI calculator serves as an indispensable tool in financial planning. It can perform complex
                    calculations with just a blink of an eye and offers users a summary of their monthly repayment
                    obligations. Some of the reasons that you should use a car loan EMI calculator are:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It helps you to judge your financial
                        commitment by providing accurate EMI calculations.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It helps borrowers to customize their
                        repayment plans according to their financial capabilities by allowing them to compare different loan
                        options.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It helps borrowers to make their
                        budget and do financial planning accurately in order to avoid any financial strain in the future.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It allows users to make informed
                        decisions by comparing loan options provided by different lenders.
                    </li>

                </ul>
            </div>



        </div>
    </section>



    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Benefits Of A Car Loan EMI Calculator</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Here are the benefits of using a car loan EMI calculator:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Quick Calculations:
                        </li>
                        <p class="paraFont">
                            The calculator provides you with precise EMI calculations instantly. The results provided by it
                            are accurate. It allows users to judge their financial commitment and plan accordingly.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Comparing Loan Options:
                        </li>
                        <p class="paraFont">
                            You can tweak variables like loan tenure or interest rates to understand the impact on their
                            EMI. This helps borrowers to customize their repayment plans according to their financial
                            capabilities.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Financial Planning:
                        </li>
                        <p class="paraFont">
                            It gives accurate and instant calculations to potential car buyers so that borrowers can plan
                            their monthly budgets more accurately. This helps in the future to avoid any financial strain or
                            unexpected expenses.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Comparing Offers:
                        </li>
                        <p class="paraFont">
                            Borrowers can use the EMI calculator to compare loan offers from different lenders. It ensures
                            that they choose a financing option that aligns with their financial goals and minimizes the
                            overall cost of the loan.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Informed Decisions:
                        </li>
                        <p class="paraFont">
                            By comparing different loan scenarios, borrowers can make informed decisions about the most
                            suitable loan option. This includes considering variations in interest rates, loan amounts, and
                            tenures.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="container-fluid mb-4">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">How To Use A Car Loan EMI Calculator Online?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Using a car loan EMI calculator is a straightforward process. Follow the steps below to use a car loan
                    EMI calculator efficiently:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Visit the website of a trusted
                        financial institution or bank that has a car loan EMI calculator.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Input the desired loan amount that
                        represents the cost of the car you wish to purchase.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Enter the annual interest rate offered
                        by the lender that you want to choose. Ensure accuracy to receive precise calculations. You can also
                        compare interest rates offered by different lenders to get the best option that suits your needs and
                        financial status.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Select the loan tenure in months.
                        Longer tenures often result in lower EMIs but may incur higher overall interest payments.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Upon entering these details, the
                        calculator generates the EMI amount instantly, along with a detailed amortization schedule.

                    </li>

                </ul>
            </div>



        </div>
    </section>

@endsection
