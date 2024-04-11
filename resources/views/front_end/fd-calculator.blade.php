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

        <img class="card-img" src="{{website_asset_image_webimage_base_url()}}/cal_fd_banner.png"
            alt="Card image" width="auto"  />
    </div>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">Understanding Fixed Deposits</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            Fixed deposits are a secure investment option offered by banks and financial institutions.
                            Investors get a predetermined interest rate for a specified period. It is a reliable choice for
                            individuals looking for stable returns on their savings. Before committing your funds to a Fixed
                            Deposit, it's crucial to have a clear understanding of the potential returns. Calculating the
                            returns in advance allows you to make informed financial decisions.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">What Is A Fixed Deposit Calculator?
                        </h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            A <a href="https://www.myzeon.com/fd-calculator">fixed deposit calculator online</a> is a tool
                            that is used to simplify the process of estimating
                            returns on your FD investment. It involves principal amount, interest rate, and tenure to
                            provide an accurate amount at the time of maturity. When you are thinking of financial planning,
                            accuracy becomes crucial. An FD calculator not only eases the calculation process but also
                            encourages investors to plan their finances more effectively. The calculator simplifies the FD
                            investment process by automating complex interest calculations. The calculator can generate a
                            clear and detailed result, allowing investors to make well-informed decisions without the need
                            for extensive manual computations.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Components Of Fixed Deposit Calculator</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The fixed deposit calculator involves some crucial components that you must know before opening a fixed
                    deposit account. The components of a fixed deposit calculator are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Principal Amount:
                        </li>
                        <p class="paraFont">
                            The initial sum of money invested in the fixed deposit is the principal amount. It forms the
                            basis for interest calculations and significantly influences the overall returns.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Interest Rate:
                        </li>
                        <p class="paraFont">
                            The percentage of the principal amount is the interest rate that an investor earns as returns
                            over a predetermined period of time. The interest rates can vary based on the bank, tenure, and
                            prevailing market conditions.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Tenure:
                        </li>
                        <p class="paraFont">
                            The tenure of a fixed deposit is the duration for which the funds are invested. Understanding
                            and knowing your tenure is important to determine the interest earned. Usually longer tenures
                            often result in higher returns.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Maturity Amount:
                        </li>
                        <p class="paraFont">
                            The final figure that represents the total returns an investor can expect upon maturity is the
                            maturity amount. The fixed deposit calculator gives the calculated maturity amount in a clear
                            and concise format.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Use A Fixed Deposit Calculator?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Using a fixed deposit calculator is a straightforward process. Here is a step-by-step guide to help you
                    use the fixed deposit calculator:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 1:
                        </li>
                        <p class="paraFont">
                            Start by entering the initial amount you plan to invest in the fixed deposit account. This could
                            be any sum, you can explore different amounts with different tenures.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2:
                        </li>
                        <p class="paraFont">
                            Enter the applicable interest rate associated with the chosen fixed deposit.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3:
                        </li>
                        <p class="paraFont">
                            Now, define the duration for which you intend to keep the funds invested. The tenure determines
                            the interest earned on this investment.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 4:
                        </li>
                        <p class="paraFont">
                            With the entered data, the fixed deposit calculator will calculate the maturity amount. The
                            result given by the fixed deposit calculator is the maturity amount representing the returns on
                            your investment.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="container-fluid mb-4">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Benefits Of Using Fixed Deposit Calculator</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The fixed deposit calculator can offer you several benefits. Financial planning becomes easier after you
                    know the returns on your fixed deposits so that you can plan your expenses accordingly. Some of the
                    benefits of using a fixed deposit calculator are:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Accurate Calculations:
                        </li>
                        <p class="paraFont">
                            The fixed deposit calculator eliminates the confusion related to FD investments. It helps
                            investors avoid unexpected surprises by providing an accurate maturity amount.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Easy Comparison of Options:
                        </li>
                        <p class="paraFont">
                            The calculator allows you to compare the potential returns of various fixed deposit options
                            available in the marketplace. When you are exploring offerings from different banks or
                            considering FDs with varying tenures and interest rates, the FD calculator can contribute to it.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Time-saving:
                        </li>
                        <p class="paraFont">
                            The calculator can provide swift and error-free results, saving valuable time for investors.
                            Also, automation of the calculation process reduces the risk of human errors and provides
                            reliable and accurate information.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Making Informed Decision:
                        </li>
                        <p class="paraFont">
                            Armed with comparative data, investors can make well-informed decisions that align with their
                            risk tolerance, liquidity needs, and long-term financial objectives.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>

@endsection
