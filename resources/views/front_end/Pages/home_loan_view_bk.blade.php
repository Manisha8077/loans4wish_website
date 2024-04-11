@extends('front_end.HeaderFile.home')
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

        .accordion {
            /* background-color: #eee;
                                                                              color: #444;
                                                                              cursor: pointer;
                                                                              padding: 18px;
                                                                              width: 100%;
                                                                              border: none;
                                                                              text-align: left;
                                                                              outline: none;
                                                                              font-size: 15px;
                                                                              transition: 0.4s; */
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

        /* .sectionForMessage{
                                                                                            height: 100px;
                                                                                            margin-bottom: 0px;
                                                                                        } */

        /* #sectionForMessage .container{

                                                                                            width: 100%;
                                                                                            max-width: 960px;
                                                                                            margin: 0 auto;

                                                                                        } */

        /* .owl-carousel,
                                                                                        .owl-stage-outer {
                                                                                        width:  100%;
                                                                                        max-width:  100%;
                                                                                        overflow:  hidden;
                                                                                        } */
    </style>
@endpush

@push('homeLoanScripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
        function compareInterestRate() {
            var selectedBanks = document.getElementsByName("selectedBanks");
            var filterInput = document.getElementById("filterInput").value.toUpperCase();
            var table = document.getElementById("tab");
            var rows = table.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var bankName = row.cells[0].innerText.toUpperCase();
                var interestRate = row.cells[1].innerText.toUpperCase();

                var bankSelected = false;
                for (var j = 0; j < selectedBanks.length; j++) {
                    if (selectedBanks[j].checked && bankName.includes(selectedBanks[j].value.toUpperCase())) {
                        bankSelected = true;
                        break;
                    }
                }

                if (bankSelected && (bankName.includes(filterInput) || interestRate.includes(filterInput))) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }

        function compareInterestRate() {
            var selectedBanks = document.getElementsByName("selectedBanks");
            var filteredBanks = [];

            for (var i = 0; i < selectedBanks.length; i++) {
                if (selectedBanks[i].checked) {
                    filteredBanks.push(selectedBanks[i].value);
                }
            }

            var bankRows = document.querySelectorAll("#tab tr");

            for (var i = 1; i < bankRows.length; i++) {
                var bankName = bankRows[i].querySelector("td:first-child").innerText;
                var bankInterestRate = parseFloat(bankRows[i].querySelector("td:nth-child(2)").innerText);
                var bankRating = parseInt(bankRows[i].querySelector("td:nth-child(3)").innerText);

                if (filteredBanks.includes(bankName)) {
                    bankRows[i].style.display = "";
                } else {
                    bankRows[i].style.display = "none";
                }
            }
        }

        function filterByInterestRate() {
            var interestRateSlider = document.getElementById("interestRateSlider");
            var interestRateValue = document.getElementById("interestRateValue");
            var interestRate = parseFloat(interestRateSlider.value);

            interestRateValue.innerHTML = interestRate.toFixed(2) + "%";

            var bankRows = document.querySelectorAll("#tab tr");

            for (var i = 1; i < bankRows.length; i++) {
                var bankInterestRate = parseFloat(bankRows[i].querySelector("td:nth-child(2)").innerText);

                if (bankInterestRate <= interestRate) {
                    bankRows[i].style.display = "";
                } else {
                    bankRows[i].style.display = "none";
                }
            }
        }

        function filterByBankRating() {
            var selectedRatings = document.getElementsByName("selectedRatings");
            var filteredRatings = [];

            for (var i = 0; i < selectedRatings.length; i++) {
                if (selectedRatings[i].checked) {
                    filteredRatings.push(parseInt(selectedRatings[i].value));
                }
            }

            var bankRows = document.querySelectorAll("#tab tr");

            for (var i = 1; i < bankRows.length; i++) {
                var bankRating = parseInt(bankRows[i].querySelector("td:nth-child(3)").innerText);

                if (filteredRatings.includes(bankRating)) {
                    bankRows[i].style.display = "";
                } else {
                    bankRows[i].style.display = "none";
                }
            }
        }

        function filterTable() {
            // Get input value and convert it to lowercase
            var input = document.getElementById("searchInput").value.toLowerCase();

            // Get the table rows
            var rows = document.getElementById("bankTable").getElementsByTagName("tr");

            // Loop through the rows and hide those that don't match the search query
            for (var i = 1; i < rows.length; i++) {
                var bankName = rows[i].getElementsByTagName("td")[0].innerHTML.toLowerCase();
                if (bankName.includes(input)) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        function searchTable() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.getElementsByTagName('tr');

            Array.from(rows).forEach(row => {
                const bankName = row.children[0].innerText.toLowerCase();

                if (bankName.includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
@endpush

@section('content')

<div class="">

    <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/loan_against_pro.jpeg"
        alt="Card image" width="auto" />
</div>


<section class="jumbotron mb-0 py-4">
<div class="container-fluid mt-4 clearfix">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body-right">
                <h4 class="card-title eligible ">Home Loan</h4>
                <div class="bar">&nbsp;</div>
                <p class="paraFont">It uses utility classes for typography and spacing to space content out within the
                    larger container.
                    This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to
                    featured content or information.
                </p>
                
            </div>
        </div>

    </div>

</div>
</section>


<section class="jumbotron mb-0 py-4">
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-8 mt-4">
            <div class="card-body-right">
                <h4 class="card-title eligible ">How do Home Loan Functions:
                </h4>
                <div class="bar">&nbsp;</div>
                <p class="paraFont">
                    Are you thinking of investing in your dream home but falling short on funds? A home loan is a loan that
                    allows individuals to borrow money to purchase a home. It is a secured loan that is backed by collateral
                    and the home itself is the collateral in this type of loan. In case an individual fails to repay the
                    loan, lenders are eligible to take possession of the property that was given as collateral through a
                    legal process known as foreclosure. Borrowers need to make a down payment, which is a percentage of the
                    home’s purchase price. The down payment amount can vary from lender to lender. But, what’s the process
                    of applying for a home loan and it can benefit you in the long run? Are you eligible for a home loan or
                    what are the required documents for a home loan?
                </p>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <img class="card-img"
                src="http://192.168.120.228/myzeon_web/assets/images/web_img/housing_loan.jpg"alt="Card image" />
        </div>
    </div>

</div>
</section>

    <section class="jumbotron mb-0 py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="eligible">When To Take a Home Loan:</h4>
                    <div class="bar">&nbsp;</div>
                    <p class="paraFont">
                        Living in your dream home can be tempting but there are various factors that decide when you should
                        take a home loan. Before you take a home credit loan apply, assess your overall financial situation.
                        <span><a href="#">Apply for Home loan</a></span> is a long-term commitment, therefore being
                        financially stable plays a vital
                        role.

                    </p><br>
                    <p class="paraFont">
                        Do you have a stable income, a good credit score, and a reasonable level of debt? Keep all these
                        questions in your mind whenever taking a home loan. You should have savings for a down payment.
                        Borrowers are required to pay a down payment of around 20% of the home’s purchase price. Lenders are
                        attracted to borrowers with a steady income and if you have been in your current job for a while and
                        expect job stability then it's the right time for you to explore home loans. The most crucial factor
                        is the market conditions. Keep an eye on interest rates and market conditions as low interest rates
                        can make borrowing more affordable for you.

                    </p>



                </div>


            </div>
        </div>
    </section>


    <section class="jumbotron mb-0 py-4">
        <div class="container-fluid">


            <div>
                <h4 class="eligible">What Are The Types of Home Loans?</h4>
                <div class="bar">&nbsp;</div>

                <p class="paraFont">
                    Homebuyers have various types of home loans to choose from, each with its own features and benefits.
                    Here are the types of home loans you can consider according to your needs before home credit loan apply.
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Home purchase loan
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Land purchase loan/ plot loan
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Home construction loan
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Home improvement loan
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Home conversion loan
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Home extension loan
                    </li>

                </ul>
            </div>



        </div>
    </section>



    <section class="jumbotron mb-0 py-4">
        <div class="container-fluid">

            <div class="mt-4">
                <h4 class="eligible">Benefits of a Home Loan:</h4>
                <div class="bar">&nbsp;</div>
                <p class="paraFont">
                    Taking a home credit loan apply can be beneficial to the individual in many ways. Myzeon People looking
                    to purchase a home can easily take a home loan and avail of benefits like:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Homeownership:
                        </li>
                        <p class="paraFont">
                            A home loan allows individuals to purchase their dream home without having to pay the entire
                            amount upfront. This way, they can become homeowners and start building equity in the property.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Building Equity:
                        </li>
                        <p class="paraFont">
                            As the borrower continues to pay off the home loan, their ownership of the property increases,
                            and they build equity in the property. This equity can be used in the future for various
                            purposes like taking a loan against it or selling the property for a profit.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Tax Deductions:
                        </li>
                        <p class="paraFont">
                            Home loan borrowers can claim tax deductions on the principal amount, interest paid on the loan,
                            and other charges associated with the loan. These tax benefits can help reduce the overall tax
                            liability of the borrower.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Stable Monthly Payments with Low-interest Rates:
                        </li>
                        <p class="paraFont">
                            Home loans come with fixed interest rates, which means that the borrower's monthly payments
                            remain stable throughout the loan tenure. Home loan interest rates are generally lower than
                            other types of loans, making it a cost-effective way of borrowing money for home purchases. This
                            makes it easier for borrowers to plan and budget their finances.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Appreciation Potential:
                        </li>
                        <p class="paraFont">
                            Homes generally appreciate in value over the long term. Therefore, by taking a home loan,
                            borrowers can benefit from the potential appreciation in the property's value over time.
                        </p>


                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Flexibility in Loan Types:
                        </li>
                        <p class="paraFont">
                            Home loan borrowers can choose from various types of loans, including home purchase loans, land
                            purchase loans, home construction loans, home improvement loans, home conversion loans, and home
                            extension loans, according to their needs and requirements.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Borrowing for Home Improvements:
                        </li>
                        <p class="paraFont">
                            Home loan borrowers can also use the loan amount to make home improvements, which can increase
                            the property's value and improve the borrower's quality of life. Therefore, you can choose a
                            home credit loan when you want to purchase a home.

                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="jumbotron mb-0 py-4">
        <div class="container-fluid">


            <div>
                <h4 class="eligible">What is the Home Loan Eligibility?</h4>
                <div class="bar">&nbsp;</div>

                <p class="paraFont">
                    In order to take a home loan, you have to qualify for home loan eligibility criteria.
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The age of the borrower should range
                        between 21 to 60 years.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The minimum income for taking a home
                        loan is RS. 1,80,000 p.a.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The borrower should have 2-3 years
                        experience in the current job.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The borrower should have a high
                        credit score ranging from 750 or above.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Home conversion loan
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Home extension loan
                    </li>

                </ul>
            </div>



        </div>
    </section>


    <section class="jumbotron mb-0 py-4">
        <div class="container-fluid">


            <div>
                <h4 class="eligible">Required Documents For a Home Loan</h4>
                <div class="bar">&nbsp;</div>

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

    <section class="jumbotron mb-0 py-4">
        <div class="container-fluid">


            <div>
                <h4 class="eligible">How Can You Apply For Home Loan Online?</h4>
                <div class="bar">&nbsp;</div>

                <p class="paraFont">
                    If you want to apply for a home credit loan, but don’t know how to apply for a home loan online, then
                    you are at the right place. The steps include:

                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Visit the official website of the
                        lender you chose after researching and comparing interest rates and loan tenure offered by different
                        lenders.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Navigate the home loan section and
                        you will see a new window open. Enter the loan amount that you want to borrow for a home loan.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Fill in your personal details in the
                        given blanks.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>Accept the terms and conditions asked
                        at the time of submitting the home loan application.


                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Submit the application.

                    </li>

                </ul>
            </div>



        </div>
    </section>


    <section class="jumbotron mb-0 py-4">
        <div class="container-fluid">


            <div>
                <h4 class="eligible">Tips To Use Home Loan Effectively</h4>
                <div class="bar">&nbsp;</div>

                <p class="paraFont">
                    Some tips for home credit loan apply to avail the benefits of home loan effectively are:


                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Before you choose a home credit loan, it's essential to plan your finances. Evaluate your income,
                        expenses, debts, and other financial obligations to determine how much you can afford to borrow and
                        repay also to <span><a href="#">apply online for car loan</a></span>.


                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Shop around and compare different lenders and their loan features, interest rates, fees, and other
                        terms and conditions.


                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Making a larger down payment can help
                        you reduce your loan amount and monthly payments. It can also help you get a better interest rate
                        and save money on interest charges over the loan tenure.


                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>Choosing a shorter loan tenure can
                        help you save money on interest charges and repay your loan faster. However, it may also increase
                        your monthly payments, so make sure you can afford it.


                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> If you have additional income or
                        savings, consider making prepayments towards your home loan. This can help you reduce your loan
                        amount and interest charges and repay your loan faster.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Your credit score plays a crucial
                        role in determining your home loan eligibility and interest rate. Maintain a good credit score by
                        paying your bills on time, reducing your debts, and avoiding new credit applications.
                    </li>

                </ul>
            </div>



        </div>
    </section>


    <section class="jumbotron clearfix">
        <div class="container-fluid">
            <div class="row">

                <div id="bankSelection">
                    <div class="col-md-12">
                        <h5></h5>
                        <div class="dropdown" id="bankSelection">

                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Compare Interest Rates
                            </button>
                            <div class="dropdown-menu">
                                <input type="checkbox" name="selectedBanks" value="Axis Bank Personal Loan"
                                    onchange="compareInterestRate()"> Axis Bank<br>
                                <input type="checkbox" name="selectedBanks" value="Ashv Finance Personal Loan"
                                    onchange="compareInterestRate()"> Ashv Finance<br>
                                <input type="checkbox" name="selectedBanks" value="Aditya Birla Finance Personal Loan"
                                    onchange="compareInterestRate()"> Aditya Birla<br>
                                <input type="checkbox" name="selectedBanks" value="Bank of Baroda Personal Loan"
                                    onchange="compareInterestRate()"> Bank of Baroda<br>
                                <input type="checkbox" name="selectedBanks" value=""
                                    onchange="compareInterestRate()">
                                Bank of Maharastra<br>
                                <input type="checkbox" name="selectedBanks" value="Bank of India Personal Loan"
                                    onchange="compareInterestRate()"> Bank of India<br>

                                <input type="checkbox" name="selectedBanks" value="Bajaj Finserv Personal Loan"
                                    onchange="compareInterestRate()"> Bajaj Finserv<br>
                                <input type="checkbox" name="selectedBanks" value="Citibank Personal Loan"
                                    onchange="compareInterestRate()"> Citibank<br>
                                <input type="checkbox" name="selectedBanks" value=""
                                    onchange="compareInterestRate()">
                                Canara Bank<br>
                                <input type="checkbox" name="selectedBanks" value=""
                                    onchange="compareInterestRate()"> DBS
                                Home<br>
                                <input type="checkbox" name="selectedBanks" value="Fullerton Personal Loan"
                                    onchange="compareInterestRate()"> Fullerton India<br>
                                <input type="checkbox" name="selectedBanks" value=""
                                    onchange="compareInterestRate()">
                                Federal Bank<br>
                                <input type="checkbox" name="selectedBanks" value="Paysense Personal Loan"
                                    onchange="compareInterestRate()"> Finnable<br>
                                <input type="checkbox" name="selectedBanks" value="Finnable Personal Loan"
                                    onchange="compareInterestRate()"> Finzy<br>
                                <input type="checkbox" name="selectedBanks" value="HDFC Bank Personal Loan"
                                    onchange="compareInterestRate()"> HDFC Bank<br>
                                <input type="checkbox" name="selectedBanks" value="Home Credit Personal Loan"
                                    onchange="compareInterestRate()"> Home Credit<br>
                                <input type="checkbox" name="selectedBanks" value="ICICI Bank Personal Loan"
                                    onchange="compareInterestRate()"> ICICI Bank<br>
                                <input type="checkbox" name="selectedBanks" value="IDBI Personal Loan"
                                    onchange="compareInterestRate()"> IDBI<br>
                                <input type="checkbox" name="selectedBanks" value="IndusInd Bank Personal Loan"
                                    onchange="compareInterestRate()"> IndusInd Bank<br>
                                <input type="checkbox" name="selectedBanks" value="IDFC First Bank Personal Loan"
                                    onchange="compareInterestRate()"> IDFC First Bank<br>
                                <input type="checkbox" name="selectedBanks" value=""
                                    onchange="compareInterestRate()">
                                Indiabulls<br>
                                <input type="checkbox" name="selectedBanks" value="IIFL Personal Loan"
                                    onchange="compareInterestRate()"> IIFL<br>

                                <input type="checkbox" name="selectedBanks" value="Kotak Mahindra Bank Personal Loan"
                                    onchange="compareInterestRate()"> Kotak Mahindra Bank<br>
                                <input type="checkbox" name="selectedBanks" value=""
                                    onchange="compareInterestRate()">
                                Karnataka Bank<br>
                                <input type="checkbox" name="selectedBanks" value=""
                                    onchange="compareInterestRate()">
                                LIC Housing Finance Ltd.<br>
                                <input type="checkbox" name="selectedBanks" value="Punjab National Bank Personal Loan"
                                    onchange="compareInterestRate()"> Punjab National Bank<br>
                                <input type="checkbox" name="selectedBanks" value="Incred Personal Loan"
                                    onchange="compareInterestRate()"> Paysense<br>
                                <input type="checkbox" name="selectedBanks" value="RBL Bank Personal Loan"
                                    onchange="compareInterestRate()"> RBL<br>
                                <input type="checkbox" name="selectedBanks" value="AU Small Finance Bank Personal Loan"
                                    onchange="compareInterestRate()"> Sundaram Home Finance Limited<br>
                                <input type="checkbox" name="selectedBanks" value="Standard Chartered Bank Personal Loan"
                                    onchange="compareInterestRate()"> Standard Chartered Bank<br>
                                <input type="checkbox" name="selectedBanks" value="Tata Capital Personal Loan"
                                    onchange="compareInterestRate()"> Tata Capital<br>
                                <input type="checkbox" name="selectedBanks" value="Union Bank of India Personal Loan"
                                    onchange="compareInterestRate()"> United Bank of India<br>
                                <input type="checkbox" name="selectedBanks"
                                    value="Ujjivan Small Finance Bank Personal Loan" onchange="compareInterestRate()">
                                Ujjivan<br>
                                <input type="checkbox" name="selectedBanks" value="Upward Personal Loan"
                                    onchange="compareInterestRate()"> Upward<br>
                                <input type="checkbox" name="selectedBanks" value="Yes Bank Personal Loan"
                                    onchange="compareInterestRate()"> Yes Bank<br>

                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="col-sm-8">
                                <label for="interestRateSlider">Filter by Interest Rate:</label>
                                <div class="range-slider-container">
                                    <input type="range" class="form-range" id="interestRateSlider" min="0"
                                        max="20" step="0.25" value="0" oninput="filterByInterestRate()">
                                        <!-- hide lass="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" in this div id=loanInterestSlider -->
                                    <div id="loanInterestSlider">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min">
                                        </div>
                                        <!-- <span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"></span> -->
                                    </div>
                                    <div id="interestRangeLabels">
                                        <div class="range-label" style="left: 0%;">0</div>
                                        <div class="range-label" style="left: 20%;">5</div>
                                        <div class="range-label" style="left: 40%;">10</div>
                                        <div class="range-label" style="left: 60%;">15</div>
                                        <div class="range-label" style="left: 80%;">20</div>
                                        <div id="selectedInterestRateMarker"></div>
                                    </div>
                                    <div id="interestRateValue"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <br>

                </div>


                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered border-primary">
                            <tbody id="tab">
                                <tr class="bank">
                                    <td><b>Name of the Bank/NBFC</b></td>
                                    <td><b>Interest Rate</b></td>
                                    <td><b>Loan Amount</b></td>
                                    <td><b>Tenure</b></td>
                                    <td><b>Processing Fee</b></td>
                                </tr>
                                <tr>
                                    <td>ICICI Bank Personal Loan</td>
                                    <td>10.75% p.a. onwards</td>
                                    <td>Up to INR 50 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 6 Years</td>
                                    <td>Up to 2.5% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Kotak Mahindra Bank Personal Loan</td>
                                    <td>10.99% p.a. onwards</td>
                                    <td>Up to INR 25 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>Up to 3% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Axis Bank Personal Loan</td>
                                    <td>10.25% p.a. onwards</td>
                                    <td>Up to INR 40 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>Up to 2% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>IDFC First Bank Personal Loan</td>
                                    <td>10.49% p.a. onwards</td>
                                    <td>Up to INR 1 Crore</td>
                                    <td>Up to 5 Years</td>
                                    <td>Up to 3.5% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>HDFC Bank Personal Loan</td>
                                    <td>11% p.a. onwards</td>
                                    <td>Up to INR 40 Lakhs</td>
                                    <td>Up to 6 Years</td>
                                    <td>Up to INR 4999</td>
                                </tr>
                                <tr>
                                    <td>Yes Bank Personal Loan</td>
                                    <td>10.99% p.a. onwards</td>
                                    <td>Up to INR 40 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>As per the Bank’s Norms</td>
                                </tr>
                                <tr>
                                    <td>Bajaj Finserv Personal Loan</td>
                                    <td>13% p.a. Onwards (Salaried)

                                        17% p.a. Onwards (Non-Salaried)</td>
                                    <td>Up to INR 25 Lakhs (Salaried)

                                        Up to INR 45 Lakhs (Non-Salaried)</td>
                                    <td>Up to 5 Years (Salaried)

                                        Up to 7 Years (Non-Salaried)</td>
                                    <td>Up to 4% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Tata Capital Personal Loan</td>
                                    <td>10.99% p.a. onwards</td>
                                    <td>Up to INR 35 Lakhs</td>
                                    <td>Up to 6 Years&nbsp;</td>
                                    <td>Up to 2.75% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Aditya Birla Finance Personal Loan</td>
                                    <td>13% p.a. onwards</td>
                                    <td>Up to INR 50 Lakhs</td>
                                    <td>Up to 7 Years</td>
                                    <td>Up to 3% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Incred Personal Loan</td>
                                    <td>11.49% p.a. onwards</td>
                                    <td>Up to INR 15 Lakhs</td>
                                    <td>Up to 7 Years</td>
                                    <td>As per the Bank’s Norms</td>
                                </tr>
                                <tr>
                                    <td>Paysense Personal Loan</td>
                                    <td>2.3% onwards per month</td>
                                    <td>Up to INR 4 Lakhs</td>
                                    <td>Up to 540 Days</td>
                                    <td>Up to 3% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Finnable Personal Loan</td>
                                    <td>16% p.a. onwards</td>
                                    <td>Up to INR 10 Lakhs</td>
                                    <td>Min:- 6 Months

                                        Max:- 5 Years</td>
                                    <td>Up to 4% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Upward Personal Loan</td>
                                    <td>18% p.a. onwards</td>
                                    <td>Up to INR 7 Lakhs</td>
                                    <td>Up to 5 Years</td>
                                    <td>As per the Company’s Norms</td>
                                </tr>
                                <tr>
                                    <td>Finzy Personal Loan</td>
                                    <td>18% p.a. onwards</td>
                                    <td>Up to INR 5 Lakhs</td>
                                    <td>Up to 3 Years</td>
                                    <td>Up to 5% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Ashv Finance Personal Loan</td>
                                    <td>18% p.a. onwards</td>
                                    <td>Up to INR 7 Lakhs</td>
                                    <td>Min:- 2 Year

                                        Max:- 5 Years</td>
                                    <td>As per the Company’s Norms</td>
                                </tr>
                                <tr>
                                    <td>AU Small Finance Bank Personal Loan</td>
                                    <td>Up to 30% per annum</td>
                                    <td>Up to INR 7.5 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>Up to 5% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>IndusInd Bank Personal Loan</td>
                                    <td>10.49% p.a. onwards</td>
                                    <td>Up to INR 25 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>Up to 3% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Fullerton Personal Loan</td>
                                    <td>11.99% p.a. onwards</td>
                                    <td>Up to INR 30 Lakhs</td>
                                    <td>Up to 5 Years</td>
                                    <td>Up to 6% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>RBL Bank Personal Loan</td>
                                    <td>17.50% p.a. onwards</td>
                                    <td>Up to INR 20 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>Up to 2% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Home Credit Personal Loan</td>
                                    <td>2% onwards per month</td>
                                    <td>Up to INR 5 Lakhs</td>
                                    <td>Min:- 6 Months

                                        Max:- 4 Years</td>
                                    <td>Up to 5% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Citibank Personal Loan</td>
                                    <td>10.75% p.a. onwards</td>
                                    <td>Up to INR 30 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>Up to 2% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Ujjivan Small Finance Bank Personal Loan</td>
                                    <td>11.49% p.a. onwards</td>
                                    <td>Up to INR 10 Lakhs</td>
                                    <td>Up to 5 Years</td>
                                    <td>Up to 2% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Standard Chartered Bank Personal Loan</td>
                                    <td>11.49% p.a. onwards</td>
                                    <td>Up to INR 50 Lakhs</td>
                                    <td>Up to 5 Years</td>
                                    <td>Up to 2.25% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Punjab National Bank Personal Loan</td>
                                    <td>Up to 15.85% per annum</td>
                                    <td>Up to INR 20 Lakhs</td>
                                    <td>Up to 5 Years</td>
                                    <td>Up to 1% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>SBI Personal Loan</td>
                                    <td>10.30% p.a. onwards</td>
                                    <td>Up to INR 20 Lakhs</td>
                                    <td>Up to 6 Years</td>
                                    <td>Up to 1.5% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Bank of Baroda Personal Loan</td>
                                    <td>Up to 17.05% per annum</td>
                                    <td>Up to INR 20 Lakhs</td>
                                    <td>Up to 6 Years</td>
                                    <td>Up to 2% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Bank of India Personal Loan</td>
                                    <td>12.75% p.a. onwards</td>
                                    <td>Up to INR 20 Lakhs</td>
                                    <td>Up to 3 Years</td>
                                    <td>Up to 2% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>IDBI Personal Loan</td>
                                    <td>Up to 14% per annum</td>
                                    <td>Up to INR 5 Lakhs</td>
                                    <td>Min:- 1 Year

                                        Max:- 5 Years</td>
                                    <td>Up to 1% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>Union Bank of India Personal Loan</td>
                                    <td>10.30% p.a. onwards</td>
                                    <td>Up to INR 15 Lakhs</td>
                                    <td>Up to 5 Years</td>
                                    <td>Up to 1% of the Loan Amount</td>
                                </tr>
                                <tr>
                                    <td>IIFL Personal Loan</td>
                                    <td>14.25% p.a. onwards</td>
                                    <td>Up to INR 5 Lakhs</td>
                                    <td>Up to 3 Years</td>
                                    <td>As per the Company’s Norms</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </section>


@endsection
