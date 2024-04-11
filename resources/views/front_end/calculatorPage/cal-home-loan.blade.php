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
.listSpan{
    color: #1338be;
    font-weight: 600;
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

        <img class="card-img" src="{{website_asset_image_webimage_base_url()}}/cal_home_loan_banner.png"
            alt="Card image" width="auto" />
    </div>




    <section class="container-fluid">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Why To Calculate Your Home Loan EMI?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>

                <p class="paraFont">
                    The home loan EMI refers to the monthly installment that a borrower is obligated to pay towards the
                    repayment of the home loan. The amount borrowed as a home loan is known as the principal amount and the
                    interest is the cost of borrowing that is charged by the lender for providing the funds. Borrowers need
                    to consider their financial capacity and choose a suitable EMI amount and tenure that aligns with their
                    budget and long-term financial goals. But, why should you calculate your home loan EMI? Here are some
                    reasons:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Calculating home loan EMIs is a
                        complicated process and can be time-consuming. Therefore, a home loan EMI calculator becomes an
                        essential tool for anyone planning to take a home loan or already repaying a home loan.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> A home loan EMI calculator provides
                        you with an accurate and instant calculation of your monthly EMI. This can help you plan your
                        monthly budgets in advance.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> It allows you to get a clear picture
                        of your financial commitments. You can plan your expenses and other financial goals by ensuring that
                        you can comfortably manage your home loan repayments effectively.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The online home loan calculator is
                        absolutely free for you to use any number of times. You can check your EMI for different loan tenure
                        and amounts.
                    </li>

                </ul>
            </div>



        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">What Are The Factors Affecting Home Loan EMIs?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    There are three factors that can affect your home loan EMIs:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Principal amount:
                        </li>
                        <p class="paraFont">
                            The principal amount, or the total amount borrowed, has a direct impact on the EMI. Higher loan
                            amounts result in higher EMIs.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Tenure:
                        </li>
                        <p class="paraFont">

                            The duration for which the loan is taken is known as loan tenure. It plays a crucial role in
                            determining the EMI. Longer tenures result in lower EMIs but higher total interest payments,
                            whereas shorter tenures lead to higher EMIs but lower overall interest costs.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Rate of Interest:
                        </li>
                        <p class="paraFont">
                            The interest rate charged by the lender influences the EMI. A higher interest rate leads to
                            higher EMIs, whereas lower interest rates have lower EMIs.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">What Are Benefits of a Home Loan EMI Calculator?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Home loan EMI calculator has many benefits for a borrower. Some of the benefits are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Easy To Use:
                        </li>
                        <p class="paraFont">
                            A home loan EMI calculator is very easy to use. It can be used to calculate your home loan EMIs
                            by just entering some of the details like loan amount, loan tenure, and interest rate offered by
                            the banks.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Accurate Results:
                        </li>
                        <p class="paraFont">
                            Manually calculating EMIs can create the chances of making mistakes in calculations, but an
                            online home loan EMI calculator gives accurate results. You can experiment with different
                            parameters, such as loan amount, interest rate, and tenure, it gives you the flexibility to find
                            the most suitable combination.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Easy Comparison:
                        </li>
                        <p class="paraFont">
                            You can compare different loan options by inputting various combinations of loan amount,
                            interest rate, and tenure into the calculator. It helps you choose a loan structure that aligns
                            with your financial capacity and long-term goals.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Decision-making:
                        </li>
                        <p class="paraFont">
                            Armed with accurate financial information, you can make well-informed decisions about your home
                            loan. The calculator enables you to understand the implications of different choices, allowing
                            you to choose a loan structure that aligns with your financial goals and capabilities.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Better Financial Planning:
                        </li>
                        <p class="paraFont">
                            Knowing the EMI amount in advance enables better financial planning, helping you budget for
                            other monthly expenses and financial goals. It prevents financial strain and ensures that you
                            can comfortably manage your home loan repayments.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Calculate Home Loan EMI?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p>The formula for calculating home loan EMI is:</p>

                <p>
                    EMI = [P &times; R &times; (1 + R)^N] / [(1 + R)^N - 1]
                </p>

                <p>where:</p>
                <ul>
                    <li>P is the principal loan amount</li>
                    <li>R is the monthly interest rate</li>
                    <li>N is the loan tenure in months</li>
                </ul>

                <p class="paraFont">

                    Instead of manually calculating your home loan EMI, you can simply use a home loan EMI calculator. To
                    use an online home loan EMI calculator, follow these steps:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 1:
                        </li>
                        <p class="paraFont">
                          Visit a fintech portal or the official website of a financial institution.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2:
                        </li>
                        <p class="paraFont">
                          Navigate “Home Loan EMI Calculator” on the website and click on it.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3:
                        </li>
                        <p class="paraFont">
                          Enter the principal loan amount, rate of interest, and loan tenure and submit.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 4:
                        </li>
                        <p class="paraFont">
                          The online EMI calculator will automatically give you accurate results.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>

@endsection
