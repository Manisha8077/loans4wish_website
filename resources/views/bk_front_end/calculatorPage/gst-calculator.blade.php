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

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/cal_gst_banner.png"
            alt="Card image" width="auto" style="margin-top: 100px;"/>
    </div>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">What is GST?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    GST which stands for Goods and Services Tax is a taxation system used in India. It was introduced to
                    eliminate all indirect taxation across the country. GST replaces a variety of indirect taxes that were
                    previously levied by both the central and state governments. The unified system simplifies the tax
                    structure and makes compliance easier for businesses. It is a value-added tax levied on the consumption
                    of goods and services at each stage of the supply chain.<a
                        href="https://www.myzeon.com/gst-calculator">Online GST calculator </a> or Goods and Services
                    Tax, is a comprehensive indirect tax that has replaced various indirect taxes in India. The GST system
                    is designed to be a destination-based tax, encompassing multiple components. They are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">CGST (Central Goods and Services Tax)
                        </li>
                        <p class="paraFont">
                            The tax collected by the Central Government on intra-state supplies of goods and services is
                            known as CGST. For example, if a manufacturer in Maharashtra sells goods to a retailer within
                            Maharashtra, then CGST will be applicable, and the revenue will go to the Central Government.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">SGST (State Goods and Services Tax)
                        </li>
                        <p class="paraFont">
                            The tax collected by the State Government on inter-state supplies of goods and services is known
                            as SGST. For example, A furniture store in Rajasthan sells wooden furniture to customers within
                            the state. In this case, SGST would be applicable. The revenue generated from SGST will go to
                            the Rajasthan State Government.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">IGST (Integrated Goods and Services Tax)
                        </li>
                        <p class="paraFont">
                            The tax collected by the Central Government on inter-state supplies of goods and services is
                            known as IGST. It is also applicable to imports. For example, If a supplier in Gujarat sells
                            goods to a customer in Tamil Nadu, IGST will be applicable.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">UTGST (Union Territory Goods and Services Tax)
                        </li>
                        <p class="paraFont">
                            The tax collected by the Union Territories on intra-UT supplies of goods and services is known
                            as UTGST. For example, a company based in Puducherry supplies goods to another business within
                            Puducherry. In this case, UTGST would be applicable, and the revenue collected from UTGST would
                            go to the Union Territory of Puducherry.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="j">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="slide eligible ">What Is GSTIN?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            GSTIN means Goods and Services Tax Identification Number, a unique alphanumeric code assigned to
                            people registered with the Goods and Services Tax regime in India. It serves as a distinctive
                            identifier for businesses and individuals registered for GST and is used for various purposes,
                            including filing tax returns, claiming input tax credits, and conducting business transactions.
                            Each GSTIN is unique to a specific taxpayer and is used to differentiate one business entity
                            from another.
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
                        <h4 class="slide eligible ">What Is a GST Calculator?
                        </h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            GST calculator refers to a handy tool that can be used to calculate the GST payable for a
                            specific period of time. This calculator can be useful for the people who buy, sell, and conduct
                            different types of business. Using a GST calculator online is more convenient than calculating
                            your payable GST manually. It helps individuals and businesses compute the Goods and Services
                            Tax (GST) on the sale or purchase of goods and services. GST is a consumption-based tax that is
                            levied at each stage of the supply chain, and the GST calculator simplifies the process of
                            determining the tax amount payable or receivable.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">How Can Indian GST Calculator Help You?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    A GST calculator online can help you in many ways:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> You can calculate the GST amount and
                        the net price of goods and services according to the GST rate in a matter of seconds. The result
                        shown by the calculator is accurate.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It helps you understand the GST
                        structure and rates and you can plan your budget based on it. It allows businesses for better
                        financial forecasting by considering the GST impact on costs and pricing.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> GST rules and regulations can be
                        complex, with different rates for different goods and services. A GST calculator helps users stay
                        compliant with tax laws by providing accurate calculations based on the current rates and rules.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> For businesses, it's crucial to
                        determine the input tax credit they can claim on their purchases. A GST calculator assists in
                        calculating the eligible input tax credit, which is essential for optimizing tax liabilities.
                    </li>

                </ul>
            </div>



        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">What Are The Advantages Of GST Calculator?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    GST calculator online offers several advantages for individuals and businesses in dealing with GST. Some
                    of them are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Accuracy:
                        </li>
                        <p class="paraFont">
                            GST calculations involve multiple components such as CGST, SGST, and IGST. Using the GST
                            calculator online ensures accurate calculations and decreases the risk of errors and mistakes in
                            the calculation.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Easy compliance:
                        </li>
                        <p class="paraFont">
                            It helps ensure compliance by applying the correct rates and providing accurate tax calculations
                            according to the latest rules.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Input Tax Credit Optimization:
                        </li>
                        <p class="paraFont">
                            It is crucial for businesses to understand and optimize input tax credit and using the GST
                            calculator online aids in calculating the eligible input tax credit, enabling businesses to
                            improve their tax benefits.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Scenario Analysis:
                        </li>
                        <p class="paraFont">
                            Businesses can use a GST calculator to conduct scenario analyses. This allows them to assess the
                            impact of different scenarios on their tax liabilities, helping in decision-making and strategic
                            planning.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Saves time:
                        </li>
                        <p class="paraFont">
                            It can be time-consuming to calculate GST manually for each transaction, especially for
                            businesses with a high volume of transactions. The calculator can automate the process and save
                            time for more efficient financial management.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Use A GST Calculator Online?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Businesses can compute their payable GST easily with the help of this formula:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600; ">Step 1:
                        </li>
                        <p class="paraFont">
                            Choose a reputable and reliable GST calculator available on financial or tax-related websites,
                            accounting software platforms, or official government portals.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2:
                        </li>
                        <p class="paraFont">
                            Input the necessary transaction details into the calculator. This may include
                            transaction type, transaction value, and GST rate.
                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3:
                        </li>
                        <p class="paraFont">
                            After entering the necessary details, click the "Calculate," "Compute," or a similar button. The
                            GST calculator will then process the information and generate the GST amount.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 4:
                        </li>
                        <p class="paraFont">
                            The calculator will display the calculated GST amount, including the CGST, SGST (for intrastate
                            transactions), or IGST (for interstate transactions). Additionally, it may show the total
                            amount, including GST. If you have multiple transactions to calculate, repeat the process for
                            each one. Some calculators allow you to save or print the results for future reference.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>

@endsection
