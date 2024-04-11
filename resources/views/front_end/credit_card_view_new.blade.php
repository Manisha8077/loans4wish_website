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
@endpush

@section('content')
    <div class="">

        <img class="card-img" src="{{website_asset_image_webimage_base_url()}}/credit_card_banner.jpeg"
            alt="Card image" width="auto" />
    </div>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">How Credit Card Works?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            A credit card is a physical card that is used to make purchases, pay bills, or withdraw cash
                            with some credit cards. It works by allowing individuals to make purchases on credit, meaning
                            they can borrow money up to a predetermined credit limit set by the card issuer. When you use a
                            <a href="https://www.myzeon.com/credit-card">credit card apply online</a> to make a purchase,
                            the card issuer pays the merchant on your behalf,
                            and you are required to pay back the amount you borrowed to the card issuer. If you pay the full
                            amount by the due date, you won't be charged any interest. However, if you carry a balance on
                            your credit card and don't pay the full amount by the due date, you will be charged interest on
                            the outstanding balance.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="">
        <div class="container-fluid">


            <div>
                <h4 class="eligible slide">Types of Credit Card</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    There are many types of credit cards available in the market based on different needs and requirements.
                    Some of them are as follows:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Mastercard
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Student credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Fuel credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Standard Chartered Credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Lifestyle credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Business credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Charge credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Rewards credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Cashback credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Balance transfer credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Money transfer credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Virtual credit card
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Prepaid credit card
                    </li>

                </ul>
            </div>



        </div>
    </section>

    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Is Credit Card Good or Bad?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Whether a credit card is good or bad, has become a controversy. It all depends on how it is used and
                    managed by the cardholder. When used responsibly it can offer several benefits.
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> If you use a credit card responsibly,
                        it can help build a positive credit history. However, a good credit history is crucial for future
                        financial attempts like taking a loan or mortgage.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Some credit cards offer rewards
                        programs, cashback, or other perks. Responsible cardholders can take advantage of these benefits to
                        get discounts or earn rewards on their everyday spending.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Credit cards can also be useful in
                        emergencies when immediate funds are needed. They provide a financial safety net when unexpected
                        expenses arise.

                    </li>

                </ul>


                <p class="paraFont">
                    Till now, you have learned all the positive traits of a credit card but it also has some drawbacks. It
                    can be negative for you in the following ways:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        Carrying a balance on a credit card and not paying the full amount by the due date can lead to
                        accumulating high-interest debt.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>
                        If you fail to manage credit card bills or exceed credit limits, it can negatively impact your
                        credit score.

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
                        <h4 class="card-title eligible slide">Why Your Credit Card Application Is Getting Rejected?
                        </h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            Rejection of a credit card application may be disheartening but if you know how you can get your
                            application accepted, then it will be very easy for you. One of the most crucial reasons for
                            rejection can be your poor credit score. <a href="https://www.myzeon.com/">Myzeon</a> - Your
                            application can be rejected if your
                            credit score is less than 750. Another reason can be your low income, even after you have a high
                            credit score some lenders focus on the income. Income indicates your repayment capacity and
                            lenders are satisfied when your income is high as it shows that you can repay your loan. If you
                            own multiple credit cards, it can also affect your chances of getting approved for a credit
                            card. Mistakes in the application form such as entering the wrong details or missing crucial
                            information can also lead to the rejection of your application.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Eligibility Criteria For Credit Card</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The eligibility criteria for a credit card are as follows:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The applicant should be 18 years to 65
                        years old at the time of application.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The salaried applicant must have an
                        annual income of Rs.2 lakhs and self-employed applicants must have Rs.1.5 lakhs of annual income to
                        get the approval on credit card application.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The applicant should have a high
                        credit score of 750 or above.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>The applicant should have at least one
                        year of experience with their current employer. This demonstrates to lenders that the applicant has
                        a steady income from employment and is financially stable.

                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Apply For a Credit Card? </h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The three easy steps that you can follow to get a credit card on your doorstep are as follows:
                </p>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 1: Choose a Credit Card
                        </li>
                        <p class="paraFont">
                            Browse the available credit cards on the website and choose the one that suits your needs and
                            requirements. Look at the features, benefits, and fees of the card before making a decision.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 2: Fill in the Application Form
                        </li>
                        <p class="paraFont">
                            Once you have chosen the credit card, click on the “Apply Now” button and fill in the
                            application form. Provide your personal details, contact information, employment details, and
                            income details. Make sure to fill in your details accurately and completely. Also, provide the
                            necessary documents required for the application, such as ID proof, address proof, and income
                            proof. Submit the application to send it for processing.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Step 3: Activate Your Card
                        </li>
                        <p class="paraFont">
                            After the approval of your credit card application, it will be dispatched to your doorstep. At
                            the time of delivery, you will be asked to sign for it. To activate a credit card, you will need
                            to follow the instructions provided by the card issuer. The card will arrive with a letter that
                            includes instructions on how to activate it. Visit the card issuer's website and enter the
                            required information. Alternatively, you can activate your card by calling the customer service
                            number provided on the back of the card.

                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Benefits Of A Credit Card </h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Some benefits of using a credit card are:
                </p> 

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Convenience:
                        </li>
                        <p class="paraFont">
                            Credit cards are the best option whether you are shopping online or offline, you can use your
                            credit card to make purchases. They are convenient to carry with you as they eliminate the need
                            to carry large amounts of cash.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Credit building:
                        </li>
                        <p class="paraFont">
                            Responsible use of a credit card can help you build a positive credit history. Timely payments
                            and low credit utilization can contribute to a higher credit score, which is crucial for
                            obtaining favorable interest rates on loans, mortgages, and other financial products.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Emergency fund:
                        </li>
                        <p class="paraFont">
                            In an emergency when your savings can't provide backup, you can use your credit card for the
                            fund. It can be used to cover unexpected expenses, car repairs, medical bills, etc.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Rewards and cashback:
                        </li>
                        <p class="paraFont">
                            Many credit cards offer rewards programs, including cash back, travel miles, or points that can
                            be redeemed for various items. If you pay off your balance in full each month, these rewards can
                            be a valuable perk.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Travel benefits:
                        </li>
                        <p class="paraFont">
                            Some credit cards come with travel-related perks, such as travel insurance, rental car
                            insurance, and access to airport lounges. Premium cards may also offer concierge services and
                            exclusive travel offers.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>

@endsection
