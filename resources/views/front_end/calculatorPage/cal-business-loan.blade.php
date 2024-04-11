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

        <img class="card-img" src="{{website_asset_image_webimage_base_url()}}/bussiness_cal_banner.png"
            alt="Card image" width="auto" />
    </div>

    <section class="container-fluid">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="eligible slide">How Does A Business Loan EMI Calculator Work?</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        A Business Loan EMI calculator is a financial tool that allows businesses or individuals to
                        estimate their loan repayments accurately. The input parameters of a business loan EMI
                        calculator are loan amount, interest rate, and loan tenure. The loan amount is the total amount
                        of money borrowed. The interest rate is the annual interest rate that is charged by the lender.
                        The loan tenure is the period over which the loan is repaid.

                    </p><br>
                    <p class="paraFont">
                        The calculator provides the monthly EMI amount based on the input parameters. Using a<a
                            href="https://www.myzeon.com/business-loan-emi-calculator"> Business
                            Loan EMI calculator </a> helps businesses plan their finances better by providing a clear
                        understanding of the monthly outflow and the total interest paid over the loan tenure. It is
                        essential for budgeting and ensuring that the loan repayment fits within the business's
                        financial capacity.
                    </p>
                </div>


            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">What Are The Types of Home Loans?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
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



    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">What Are The Factors Affecting Business Loan EMI?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Factors that can influence the business loan EMI are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Amount:
                        </li>
                        <p class="paraFont">
                            The principal amount or the total amount of the loan significantly affects the EMI. Higher loan
                            amounts generally result in higher EMIs.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Interest Rate:
                        </li>
                        <p class="paraFont">
                            The interest rate is a critical factor in determining the EMI. A higher interest rate leads to
                            higher EMIs, and vice versa. The interest rate can be fixed or variable, depending on the type
                            of loan.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Tenure:
                        </li>
                        <p class="paraFont">
                            The duration for which you take the loan (loan tenure) is crucial. Longer tenures result in
                            lower EMIs, but you end up paying more interest over the life of the loan. Shorter tenures lead
                            to higher EMIs but lower overall interest payments.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Type of Interest Rate:
                        </li>
                        <p class="paraFont">
                            Business loans can have fixed or floating interest rates. Fixed rates provide stability in EMI
                            amounts throughout the loan tenure while floating rates can change based on market conditions,
                            impacting the EMI.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Processing Fees:
                        </li>
                        <p class="paraFont">
                            Lenders often charge processing fees for disbursing the loan. While this is not directly part of
                            the EMI, it adds to the overall cost of the loan and should be considered when calculating the
                            total repayment amount.
                        </p>


                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Prepayment or Foreclosure:
                        </li>
                        <p class="paraFont">
                            Some lenders charge a penalty for prepayment or foreclosure of the loan. If you plan to repay
                            the loan before the stipulated tenure, it's essential to consider these charges, as they can
                            impact the overall cost of the loan.

                        </p>


                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Calculate Business Loan EMI?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Get <a href="https://www.myzeon.com/blog/apply-for-business-loan-documents-you-need-for-business-loan">Required Documents for a business loan </a> EMI can be a piece of cake with a business loan EMI
                    calculator. You can use this EMI calculator to better understand your financial flow and prepare your
                    budget accordingly.
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 1:
                        </li>
                        <p class="paraFont">
                          Visit the official website of a financial institution that provides a business loan EMI calculator.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2:
                        </li>
                        <p class="paraFont">
                          Enter the loan amount that you wish to borrow for your business.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3:
                        </li>
                        <p class="paraFont">
                          Choose a repayment tenure that aligns with your business goals.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 4:
                        </li>
                        <p class="paraFont">
                          Input the applicable interest rate offered by the financial institution.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 5:
                        </li>
                        <p class="paraFont">
                          Click submit and you will get the accurate EMI for your business loan at the given loan tenure and interest rate.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="container-fluid mb-4">
      <div class="container-fluid mt-4">

          <div class="mt-4">
              <h4 class="eligible slide">Benefits of Using a Business Loan EMI Calculator</h4>
              <div class="bar m-auto">&nbsp;</div><br><br>
              <p class="paraFont">
                Some of the benefits of using a business loan EMI calculator are:
              </p> <br>

              <div>

                  <ul>
                      <li class="eligible">
                          <span style="color: #1338be; font-weight: 600;">Online Accessibility:
                      </li>
                      <p class="paraFont">
                        A business loan EMI calculator is accessible online. You can use it from the comfort of your office or home. It helps in planning your finances at any time. 

                      </p>

                      <li class="eligible">
                          <span style="color: #1338be; font-weight: 600;">Budgeting for Growth:
                      </li>
                      <p class="paraFont">
                        You can take advantage of the insights given by the EMI calculator to strategically make a budget for your business. Any business requirement can be fulfilled once you start budgeting.

                      </p>
                      <li class="eligible">
                          <span style="color: #1338be; font-weight: 600;">Accurate Financial Planning:
                      </li>
                      <p class="paraFont">
                        It can help in financial planning by providing a clear picture of the monthly installment amount to be paid. This will result in effective budgeting and an accurate plan for expenditures.
                      </p>

                      <li class="eligible">
                          <span style="color: #1338be; font-weight: 600;">Time-saving:
                      </li>
                      <p class="paraFont">
                        Calculating EMIs manually can be time-consuming and prone to errors. An EMI calculator provides instant and accurate results, saving time and effort.
                      </p>

                      <li class="eligible">
                          <span style="color: #1338be; font-weight: 600;">Easy Comparison:
                      </li>
                      <p class="paraFont">
                        Businesses often have various loan options available to them. The calculator allows users to input different loan amounts, interest rates, and tenures, making it easy to compare and choose the most suitable option.
                      </p>

                  </ul>

              </div>


          </div>
      </div>
  </section>
@endsection
