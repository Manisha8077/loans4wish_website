@extends('front_end_layout.personal_loan_header')

@push('creditCardStyle')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: none;
        }


        .creditCardBannerImage {
            width: 100%;
            height: 80vh;
            background-repeat: no-repeat;
            object-fit: fill;

        }
    </style>
@endpush


@section('content')
    <div class="clearfix">.</div>


    <section id="CreditCardMainBannr">
        <div class="jumbotron creditCardBannerImage img-center mx-auto img-fluid"
            style="background-image: url('{{ asset('assets/front_end/asset/img/bankLogo/credit_card_image.png') }}')">

            <p class="lead">Apply for the Best Credit Card
                and Check all the Offers</p>
            <hr class="my-4">

            {{-- <img src="{{ asset('assets/front_end/asset/img/bankLogo/credit_card_image.png') }}" alt="Apply Now" class="w-64 h-64 mb-4"> --}}

        </div>

    </section>


    <section>


        <div class="jumbotron">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <h1>Credit Cards</h1>
                        <p>
                            Check the striking features of various credit cards offered by different banks. See the
                            prevailing offers on these cards and see how you can save some extra bucks.
                            The excitement of landing a new job is exceptional, and you don’t want to spend your first
                            salary. It is a significant milestone in your life that shows the beginning of financial
                            independence and the starting point of a new life. Amongst other things, building a corpus and
                            managing daily expenses begins at this stage. In this article, you’ll learn about the credit
                            card benefits you can avail of. Having a credit card has various benefits that help manage
                            expenses and it also lays a foundation for a credit score.

                        </p>

                    </div>
                    <div class="col-md-6">

                        <h2>Professional Detail</h2>

                        <form>

                            <div class="form-group">
                                <label for="InputAnnualIncome">Annual Income</label>
                                <input type="type" class="form-control" id="creditAnnualIncome"
                                    aria-describedby="emailHelp">

                            </div>

                            <div class="form-group">
                                <label for="creditSelectOccupation">Occupation</label>
                                <select class="form-control" id="creditSelectOccupation">
                                    <option>Salaried</option>
                                    <option>Self Employed Business</option>
                                    <option>Self Employed Professional</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="creditInputCompanyName">Company Name</label>
                                <input type="text" class="form-control" id="creditInputCompanyName"
                                    aria-describedby="emailHelp">

                            </div>

                            <div class="form-group">
                                <label for="creditInputCity">Company Name</label>
                                <input type="text" class="form-control" id="creditInputCity"
                                    aria-describedby="emailHelp">

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>


                    </div>
                </div>

            </div>

        </div>

    </section>


    <section>


        <div class="jumbotron">
            <h3>Top Credit Cards Issuer</h3>

            <p>
                It is wise to take a step back when considering applying for a new credit card with a new job but
                trying to figure out the meaning of the credit card. Banks provide credit cards to help individuals
                get a line of credit for a specific period.
            </p>



            <div class="accordion" id="accordionExample">
                <div class="card">

                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Ability to spend now and pay later
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">

                            Landing a new job is exciting in many ways, and there is no reason to curb this excitement once
                            you receive your first salary. A credit card helps you spend now and you can pay later. Credit
                            card holders can analyze their future cash inflows and spend before receiving cash. Credit card
                            holders can receive a credit line with zero interest for a brief period. However, credit card
                            holders must be well versed in the penalties associated with late repayments and their impacts
                            to improve their creditworthiness.

                        </div>
                    </div>
                </div>

                <div class="card">



                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Manage different expenses
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">

                            While a new job comes with financial independence, it also means additional responsibilities and
                            bills. Managing various bills, such as utilities, food, gas, groceries, and transportation, can
                            sometimes be overwhelming. Individuals can use a credit card to streamline and monitor these
                            expenses simultaneously. Credit cards are a widely accepted mode of payment and can also save
                            you the time involved in making cash transactions or other forms of bank remittances.


                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Offers and discounts
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            As a credit card holder, one can benefit from the various offers and discounts the banks
                            provide. These offers are designed exclusively for credit card holders and can help save costs.
                            The cumulative effect of these offers and discounts can significantly impact individuals’
                            monthly savings. Someone who has just obtained financial independence can benefit from
                            additional savings from the onset of their career just by utilizing a credit card. Credit cards
                            usually offer discounts on travel, food, online shopping, utility bills and movie tickets.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#faqFour" aria-expanded="false" aria-controls="collapseThree">
                                Offers and discounts
                            </button>
                        </h2>
                    </div>
                    <div id="faqFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            As a credit card holder, one can benefit from the various offers and discounts the banks
                            provide. These offers are designed exclusively for credit card holders and can help save costs.
                            The cumulative effect of these offers and discounts can significantly impact individuals’
                            monthly savings. Someone who has just obtained financial independence can benefit from
                            additional savings from the onset of their career just by utilizing a credit card. Credit cards
                            usually offer discounts on travel, food, online shopping, utility bills and movie tickets.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#faqFive" aria-expanded="false"
                                aria-controls="collapseThree">
                                Easy to Assess
                            </button>
                        </h2>
                    </div>
                    <div id="faqFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                Applying for a credit card with a new job is beneficial in many ways. However, one may need
                                clarification on what is the best credit card for a first job. There are a large number of
                                banks that offer credit cards to their customers. However, individuals should understand
                                their requirements, spending structure and frequent spending areas before deciding on the
                                best credit card for their first job. Additionally, one can look into the following aspects
                                that define a credit card best.
                            </p>

                            <ul>
                                <li>It is widely accepted.</li>
                                <li>Cardholders are entitled to various discounts, rewards, offers and cash-backs on
                                    spending.</li>
                                <li>
                                    Credit cards offer additional discounts or redeemable points on the customer’s frequent
                                    spending.
                                </li>
                                <li>
                                    Cardholders have the flexibility to withdraw cash during emergencies.
                                </li>
                                <li>
                                    Credit cards provide a hassle-free shopping experience for in-store and online
                                    purchases.
                                </li>
                                <li>
                                    A credit card comes with a 24/7 helpline service and a minimal joining/membership fee
                                </li>
                            </ul>

                            <p>
                                Holding a credit card from the onset of your financial independence can be ideal for
                                managing finances and building your credit score. Good credit cards also facilitate cost
                                savings through the various schemes designed specifically for their customers. Additionally,
                                it is a strong financial tool to cater to emergencies requiring immediate funding. Applying
                                for a credit card along with your new job is always a good idea. However, credit card
                                holders must be thorough with the terms and conditions mandated by the banks and comply with
                                them throughout their association. Utilizing credit cards by meeting the norms and ensuring
                                timely repayments can offer individuals a wide range of benefits. On the other hand,
                                misusing a credit card and not maintaining a timely repayment schedule can negatively impact
                                an individual’s creditworthiness.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#faqSix" aria-expanded="false"
                                aria-controls="collapseThree">
                                Credit Card Eligibility
                            </button>
                        </h2>
                    </div>
                    <div id="faqSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>To apply for a credit card, check the eligibility criteria before –
                            </p>
                            <ul>
                                <li>Primary cardholder age – 18 years</li>
                                <li>Minimum income salary – Rs.1 lakh and Rs.3 lakh.)</li>
                                <li>Employment status – salaried or self-employed</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#faqSeven" aria-expanded="false"
                                aria-controls="collapseThree">
                                Documents Required for a Credit Card Application
                            </button>
                        </h2>
                    </div>
                    <div id="faqSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>The following are the documents that need to be submitted to apply for a credit card –</p>
                            <br>

                            <ul>
                                <li>Duly filled application form</li>
                                <li>Passport-size photographs</li>
                                <li>PAN, Aadhaar, passport, for ID proof</li>
                                <li>Driving Licence, PAN, Aadhaar, for address proof</li>
                                <li>Latest salary slips</li>
                                <li>Form 16</li>
                                <li>Bank statements</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#faqEight" aria-expanded="false"
                                aria-controls="collapseThree">
                                Important Terms of Credit Cards
                            </button>
                        </h2>
                    </div>
                    <div id="faqEight" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">

                            <p>The following are some of the important credit card terms you should know about –
                            </p><br>

                            <h3>Credit Cards Statements</h3>

                            <p>
                                Every credit card holder is issued a bank statement each month by their respective bank
                                showing a list of all the charges made to show the monetary amount that needs to be paid by
                                the due date. The credit card due balance is shown on your credit card statement.
                            </p>

                            <h3>Current Balance</h3>
                            <p>
                                The current balance is the total amount unpaid by you; this includes all the charges of
                                finances and retail transactions made by you.These transactions are sometimes also shown
                                under unbilled or pending transactions when you have made a transaction in the last 24-48
                                hours but have yet to pay the bill. It is unpaid and therefore shown under that section if
                                it is still in process.
                            </p>

                            <h3>Credit Cycle</h3>

                            <p>
                                Every month the bank will send you credit card statements with all the details on the
                                transactions, charges, and costs on your credit card. This statement is generated at the end
                                of your billing cycle. Any charges or transactions you make using the card after the
                                statement is generated will be shown under the ‘Current Balance’ section. So, the balance
                                generated in your credit card statements is the statement balance. The outstanding amount
                                falls under the current balance section.
                                Depending on your transactions, this current balance can be higher or lower than your
                                statement balance. For example: If you have made any payments on your Kotak Bank Credit
                                Cards after the bank generated the credit card statements, your statement balance is more
                                than your current balance. But if you have made any transactions after the statement, your
                                current balance can be higher than your statement balance.
                            </p>

                            <h3>Interest on Credit Card</h3>

                            <p>
                                It is ideal to start a new billing cycle without any pending interests from your previous
                                cycle. If your pending balance is zero, you can enjoy the premium benefits of the
                                interest-free credit period. But if this is different from the case and you are carrying
                                forward the amount from your previous billing cycle, then the interest rate would already
                                have been applied. Setting up an automatic debit system with your credit card provider is
                                ideal. This way, you will not miss the deadlines and ensure that you have enough money in
                                the savings account you register for auto debit.
                                Not paying your credit card amount will lead to a negative credit score. Try to make timely
                                payments and start the new billing cycle without any previous histories. Clear all the
                                payments on your credit cards statements to balance within your billing cycle for a good
                                credit score and manage between various statements.
                            </p>

                            <h3>Cash Withdrawals</h3>

                            <p>
                                Credit card withdrawals from ATMs are referred to as cash advances. As you know, the main
                                use of credit cards is to purchase items now and pay for them later. Banks also provide cash
                                advance features in credit cards, using which users can withdraw cash from their credit
                                limit. For this, they usually levy certain credit card withdrawal charges.
                                The availability of withdrawal features differs from bank to bank, and the withdrawal limit
                                and charges vary from card to card. It is crucial to know credit card cash withdrawals are
                                different from the ones done through a debit card.
                            </p>

                            <h3>Extra Charges</h3>
                            <p>

                                <b> Cash Advance Fees: </b> When you use a credit card for a cash advance, it attracts cash
                                advance
                                fees. This fee is a certain percentage of your withdrawal amount and applies every time you
                                make a cash withdrawal. You can see the cash advance fee in your next month’s billing
                                statement.<br>

                                <b>Interest Charges: </b> All Credit card transactions have associated interest charges.
                                Therefore,
                                certain interest charges are also levied on credit card cash withdrawals. The charges are
                                levied from the date of withdrawal until you’ve fully paid the credit card bill.

                            </p>

                            <h3>Credit Score</h3>
                            <p>
                                Although obtaining a cash advance may not lower your credit score, the high fees connected
                                with cash withdrawals increase monthly expenses. Your credit score could be negatively
                                impacted if you only pay the minimum due.

                            </p>

                            <h3>Reward Points</h3>
                            <p>
                                Most banks provide reward credit cards to help users save and take advantage of other
                                special offers. This encourages cardholders to use credit cards for dining out, traveling,
                                and shopping. And these reward points can be exchanged for gift cards, cash, air miles, and
                                other items. However, it is advisable to use a cash advance when you need money since when
                                you use your credit card to withdraw cash, you might not get any reward points.
                            </p>

                            <h3>ATM-Related Fees</h3>

                            <p>
                                Credit Card users can do up to five free ATM transactions each month. And if this ATM
                                transaction limit is crossed, you must pay ATM maintenance or interchange fee. You’ll be
                                charged for the cost, which will appear on your credit card statement.
                            </p>


                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="faq">
        <div class="jumbotron">

            <h3>FAQs</h3>
            <p>
                It is wise to take a step back when considering applying for a new credit card with a new job but trying to
                figure out the meaning of the credit card. Banks provide credit cards to help individuals get a line of
                credit for a specific period.
            </p>


            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#creditCardFaqOne" aria-expanded="true" aria-controls="collapseOne">
                                What Is a Secured Credit Card?
                            </button>
                        </h2>
                    </div>

                    <div id="creditCardFaqOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Regular credit cards and secured credit cards both have the same features. The main distinction
                            between a regular credit card and a secured credit card is that the latter is issued in exchange
                            for security, such fixed deposits, to lower the risk for card issuers. For people with no credit
                            history or a bad credit history, secured credit cards are advantageous. As a result, it is among
                            the simplest ways to raise your credit score while still reaping the rewards of a credit card.
                            Secured credit cards reduce the risk for credit card businesses by being offered in exchange for
                            a fixed deposit. Your deposit may be taken by the credit card company if you don’t make your
                            payment on time.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#creditCardFaqtwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                What Are the Different Types of Credit Cards?
                            </button>
                        </h2>
                    </div>
                    <div id="creditCardFaqtwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">

                            Common credit cards: Basic credit cards with no annual fees and simple features

                            <b>Cards with specialized features:</b> Credit cards are made especially to fulfill the
                            cardholder’s
                            special needs. These cards offer a variety of benefits for travel, dining, and other activities.

                            <b>Basic Cards: </b> Credit cards contain minimal annual fees and provide basic features. These
                            cards
                            are excellent for regular use.

                            <b>Cards with Reward Points: </b> Every purchase made using a credit card earns the cardholder
                            reward
                            points. A cardholder earns more reward points the more they spend. Gift cards, coupons, and
                            other items can be obtained by exchanging these reward points.

                            <b>Credit cards with cash back: </b> Cash-back credit cards provide cash compared to reward
                            credit
                            cards, which provide reward points. When a cardholder uses a cash-back credit card, a certain
                            proportion of their purchases are refunded back to their account. On occasion, the card account
                            is changed to show the total cash back earned.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#creditCardFaqthree" aria-expanded="false"
                                aria-controls="collapseThree">
                                How Long Does It Take After I Apply to Get a Credit Card?
                            </button>
                        </h2>
                    </div>
                    <div id="creditCardFaqthree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            You can apply for a credit card online at Myzeon.com is short term procedure.The card issuer
                            will get in contact with you after you finish and submit the online application to ask for the
                            supporting documents. After receipt of your properly filled application form by the bank, your
                            application will be processed within two weeks. If all of your paperwork is in order, you should
                            receive your new credit card within 7 working days of the bank accepting your application and
                            finishing its due diligence. By SMS or email, the bank will promptly update you on the status of
                            your credit card application.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#creditCardFaqthree" aria-expanded="false"
                                aria-controls="collapseThree">
                                How Can I Check Out When I'm Eligible for a Credit Card?

                            </button>
                        </h2>
                    </div>
                    <div id="creditCardFaqthree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            By checking out the credit card’s eligibility criteria on the bank’s website, you may find out
                            if you qualify. To find out if you qualify, you can also get in touch with the credit card
                            companies’ customer service branch.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#creditCardFaqFive" aria-expanded="false"
                                aria-controls="collapseThree">
                                Which Steps Should I Follow to Increase My Card's Credit Limit?

                            </button>
                        </h2>
                    </div>
                    <div id="creditCardFaqthree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#creditCardFaqFive">
                        <div class="card-body">
                            The maximum credit limit given to you on your credit card is known as a credit limit. The
                            repayment capacity, CIBIL credit report, applicant’s profile, and other elements all play a role
                            in determining the credit limit. Nevertheless, you might ask your supplier for an increase in
                            your credit limit. After you submit the request, your provider may require additional proof of
                            identity or carefully examine it in light of your financial situation, credit score, and other
                            factors. Your credit limit will be raised if you are determined to be eligible. Additionally,
                            your provider could increase your annual credit limit if you have paid your credit card bill in
                            entire on time.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#creditCardFaqSix" aria-expanded="false"
                                aria-controls="collapseThree">
                                What Happen When I Don't Make Payments on Time of My Credit Card Bill?


                            </button>
                        </h2>
                    </div>
                    <div id="creditCardFaqthree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#creditCardFaqSix">
                        <div class="card-body">
                            You can expect payment charges on the unpaid balance if you don’t pay your entire credit card
                            bill by the due date. Every year, interest rates for non-bill payments typically range from 30
                            to 49%. Additionally, the interest-free period on new credit card transactions may be suspended
                            if the full amount due is not paid. interest will be charged on any future credit card purchases
                            until the balance is paid in full.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#creditCardFaqSeven" aria-expanded="false"
                                aria-controls="collapseThree">
                                Can I Use My Credit Card to Get an ATM Cash Withdrawal? Does It Come with Extra Fees?

                            </button>
                        </h2>
                    </div>
                    <div id="creditCardFaqthree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#creditCardFaqSeven">
                        <div class="card-body">
                            Yes, you are able to make cash withdrawals from an ATM using your credit card. However, you may
                            be charged an extra fee of between 2.5 and 3.5% if you withdraw money using a credit card.
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </section>
@endsection


@push('creditCardScript')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
@endpush
