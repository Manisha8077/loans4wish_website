@extends('front_end_layout.home')
@push('personalLoanStyle')
{{--
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
{{--
<script src="//unpkg.com/alpinejs" defer></script> --}}
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{--
<script src="https://cdn.tailwindcss.com"></script> --}}

<!-- extra add for start your journey -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery-steps.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.js"></script>
<link rel="stylesheet" href="css/jquery-steps.css">

<!-- form step 7 -->

<style>
    .form-control {
        height: calc(2.3em + 0.75rem + 0px);
    }

    /* for input show */
    .error-message {
        color: #F8981C;
        display: none;
    }

    .container {
        max-width: 1000px;
        margin-top: 50px;
        color: #333;
        font-family: Arial, sans-serif;
    }

    /* Hide the success message by default */
    #success-message {
        display: none;
        color: #F8981C;
    }

    .form-control {
        height: calc(2.3em + 0.75rem + 0px);
    }

    .error-message {
        color: #F8981C;
        display: none;
    }



    .container {
        max-width: 1000px;
        /* Adjust container width as needed */
        margin-top: 50px;
        color: #fff;
        font-family: montserrat, Sans-Serif;
        font-weight: 800px;
        line-height: 30px;
    }

    .form-control {
        color: #333;
        /* Set input text color to white */
        height: calc(2.3em + 0.75rem + 0px);
    }

    .invalid-feedback {
        color: #fff;
        /* Set error message color to red */
    }

    /* Hide date of birth placeholder text */
    input[type="date"]::before {
        color: transparent !important;
        content: attr(placeholder);
    }

    input[type="date"]:focus::before {
        content: "" !important;
    }

    .loader-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        /* Add a semi-transparent overlay */
        z-index: 9999;
        /* Ensure the loader appears above other content */
    }

    .spinner-overlay {
        display: flex;
        align-items: center;
    }

    .spinner {
        display: inline-block;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .error-message {
        color: red;
        display: none;
    }
</style>
<!--  -->
<style>
    /* .step-app>.step-steps {
        margin: 0;
        padding: 0;
        display: flex;
        border-radius: 3px 3px 0 0;
        overflow: hidden;
    } */

    .step-app>.step-steps>li {
        list-style: none;
        flex: 1;
        cursor: pointer;
        display: block;
        padding: 10px;
        color: #333;
        background-color: #e5e5e5;
        text-decoration: none;
        border-right: 1px solid #fff;
    }

    .step-app>.step-steps>li:hover {
        background-color: #ddd;
    }

    .step-app>.step-steps>li:last-child a {
        border: none;
    }

    .step-app>.step-steps>li.active {
        background-color: #32c5d2;
        color: #fff;
    }

    .step-app>.step-steps>li.error {
        background-color: #e7505a;
        color: #000;
    }

    .step-app>.step-steps>li.done {
        background-color: #3cb371;
        color: black;
    }

    .step-app>.step-steps>li>.number {
        background: #fff;
        padding: 0 8px;
        display: inline-block;
        text-align: center;
        margin-right: 15px;
        border-radius: 3px;
        color: #333;
    }

    .step-app>.step-content {
        /* border: 1px solid #000000; */
        padding: 10px;
        border-top: 0;
        color: black;
    }

    .step-app>.step-content>.step-tab-panel {
        display: none;
    }

    .step-app>.step-content>.step-tab-panel.active {
        display: block;
    }

    .step-app>.step-footer {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .step-app>.step-footer>.step-btn {
        padding: 4px 16px;
        color: #333;
        text-decoration: none;
        background: #e5e5e5;
        border-radius: 3px;
        border: none;
        outline: none;
        cursor: pointer;
    }

    /*# sourceMappingURL=jquery-steps.css.map */
</style>

<!-- <style>

ul.progress li::before {
  content: '';
  position: relative;
  width: 0;
  height: 0;
  right: 0px;
  border-style: solid;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #fff;
}
    ul.progress li::before {
  content: '';
  position: relative;
  width: 0;
  height: 0;
  right: 0px;
  border-style: solid;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #fff;
}
ul.progress li {
  line-height: 30px;
}
</style> -->

<style>
     .containerPersonal {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            /* display: block;
            margin-bottom: 8px; */
        }

        .selected {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .subPersonal {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
</style>
<!--  -->

<style>
    /* #demo .contactInput{
        padding: 8px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
  width: 10%;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  color: #000;
  font-size: 14px;
  font-weight: 500;
  background: white;
    } */
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
        /* background-color: #60a5fa;
        color: #FFD756;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    } */

        .active,
        .accordion:hover {
            /* background-color: #1338be; */
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
        font-size: 18px;
    }

    .text-4xl {
        font-size: 1.8rem;
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

@push('personalLoanScripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush

@section('content')
<style>
    section.banner-img:before {
        display: none;
    }

    .first-form form {
        margin: 0px;
    }

    .banner-img {
        min-height: auto;
    }

    .heading-card {
        color: black;
        text-transform: uppercase;
        font-size: 17px;
        font-weight: bold;
    }

    .card_fix {

        width: 33%;

    }



    .headingMain {
        color: #1338be;
    }

    .headingdescription {

        padding-bottom: 25px;

    }


    .personalBanner {
        width: 100%;
        height: 40%;
    }

    /* .bannerButton{
            margin-top: -200px
            
        } */
</style>


<div class="">
    
        
            <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/business_loanBanner.jpeg"
               width="auto" alt="Card image" />
        </div>
        <div class="conainer-fluid col-md-12 mt-3">
                <h4 class="card-title eligible ">Business Loan</h4>
                <div class="bar">&nbsp;</div>
                <p class="paraFont">Are you facing any financial challenges in your business? Are you struggling to
                    qualify for a
                    business
                    loan? A business loan is the most convenient loan for business to boost their growth. You can find
                    many
                    lenders online who can provide you with a business loan but which business loan is perfect for you?
                    Are
                    you aware of loan eligibility criteria and documentation process?
                </p>
           
        </div>

   




<!--  -->
<div class="container-fluid mt-4 mb-4">
    <div class="row">
        <div class="">
            <div class="card-body-right">
                <h4 class="card-title eligible ">How Do Business Loans Function?</h4>
                <div class="bar">&nbsp;</div>
                <p class="paraFont">A business loan is the funds required by businesses to establish themselves and
                    provide the opportunity to expand in the future. Establishing a business invites various
                    expenses to
                    be met and if any of the expenses are not met by the owner, it can create a challenges in the
                    growth
                    of the business. These expenses may include office rent, salary of employees, cost of raw
                    materials,
                    purchasing machinery, and other long-term assets for the business. Business loans can be used to
                    access the necessary funds to operate at their optimum potential and grow without any financial
                    hurdles. Many lenders provide online loan for business facilities to business owners instantly
                    with
                    lower interest rates.

                    The terms of the loan, such as the amount, interest rate, and repayment period, are typically
                    agreed
                    upon by the lender and borrower before the loan is approved. Business loans can be secured,
                    meaning
                    the borrower puts up collateral such as property or equipment, or unsecured, meaning no security
                    is
                    required. The purpose of the loan can vary, from financing a new project or expansion to
                    covering
                    day-to-day expenses.
                </p>
            </div>
        </div>
        
    </div>

</div>
<!--  -->


    <div class="container-fluid mt-4">
        <div>
            <h4 class="eligible">Types Of Business Loans </h4>
            <div class="bar">&nbsp;</div>
            <p class="paraFont">There are different types of business loans that you can take for the growth of your
                business. Here are
                the types of business loans:
            </p>
            <ul>
                <li style="list-style: disc;" class="paraFont eligible">Working Capital Loan</li>
                <p class="paraFont">A working capital loan is a type of financing that enables a business to cover its
                    daily operational
                    expenses. Business owners cannot use this loan to invest in long-term assets but to provide the
                    working capital to cover the short-term operational needs of the business. For example, the cost of
                    payroll, rent, debt payments, etc.</p>
                <li style="list-style: disc;" class="paraFont eligible">Term Loans</li>
                <p class="paraFont">A term loan is a loan that needs to be repaid in EMIs over a set period of time.
                    There are three
                    types of term loans, short-term, intermediate-term, and long-term loans. Short-term loans have a
                    duration of 12 months, whereas repayment tenure for intermediate-term and long-term loans ranges
                    between 1 to 5 years.</p>
                <li style="list-style: disc;" class="paraFont eligible">Equipment Financing</li>
                <p class="paraFont">Equipment finance is also known as machinery loan. It is a funding option offered to
                    the borrowers to buy new pieces of equipment or machinery for their business. Mainly large
                    businesses engaged in the manufacturing sector opt for this loan. Business owners can also enjoy tax
                    benefits that come with this loan. </p>
                <li style="list-style: disc;" class="paraFont eligible">Overdraft Facility</li>
                <p class="paraFont">An overdraft facility is a type of loan that allows a business to withdraw more
                    money than is available in their account. This type of loan is used to cover short-term cash flow
                    needs, such as paying for unexpected expenses or funding an expansion project. The overdraft
                    facility is usually offered to businesses that have a good credit history and a steady revenue
                    stream. The interest rate on overdraft facilities is typically higher than other types of loans, and
                    businesses are usually required to pay interest only on the amount they have borrowed.
                    <li style="list-style: disc;" class="paraFont eligible">Letter Of Credit</li>
                <p class="paraFont">A letter of credit is a financial document that guarantees the payment of a
                    transaction between two parties. It is issued by a bank or lender on behalf of a buyer, promising
                    the seller that payment will be made once the conditions of the transaction have been met. The
                    letter of credit provides security to both the buyer and seller, as the seller can be sure they will
                    receive payment as long as they meet the agreed-upon conditions, and the buyer knows that their
                    payment will only be made once the goods or services have been delivered as per the agreement.
                </p>
            </ul>
        </div>
    </div>



    <div class="container-fluid mt-4 mb-4">
        <div>
            <h4 class="eligible">What Is The Business Loan Eligibility Criteria?</h4>
            <div class="bar">&nbsp;</div>
            <p class="paraFont">Here are the eligibility criteria for taking a business loan:</p>
            <ul>
                <li style="list-style: disc;" class="paraFont">To take a business loan from Myzeon you should have a
                    specific type of business like a self-proprietorship business, partnership business, public or
                    private limited companies, and businesses that provide services.
                </li>

                <li style="list-style: disc;" class="paraFont ">Lenders require your business to have a vintage of 6
                    months to up to 3 years. </li>

                <li style="list-style: disc;" class="paraFont ">The minimum turnover requirement of the business depends
                    on the lenders. If the minimum specified limit of the lender is met by the borrower, then you will
                    be eligible for the loan.</li>

                <li style="list-style: disc;" class="paraFont ">Your minimum annual profit should meet the minimum limit
                    set by the lenders.</li>
                <li style="list-style: disc;" class="paraFont ">The minimum age of the applicant should be above 21
                    years</li>
                <li style="list-style: disc;" class="paraFont ">The credit score plays a vital role when you are
                    sanctioning a loan. The businesses should have a minimum credit score of 650 and above to qualify
                    for a business loan.
                </li>


            </ul>
        </div>
    </div>



    <div class="container-fluid">
        <div>
            <h4 class="eligible">What Documents Are Required For A Business Loan?</h4>
            <div class="bar">&nbsp;</div>
            <p class="paraFont">Businesses need to submit some documents in order to take a business loan. Just like the
                eligibility criteria, the documentation process can also vary from lender to lender. Some of the
                <span><a
                        href="https://www.myzeon.com/blog/apply-for-business-loan-documents-you-need-for-business-loan">Documents
                        Are Required For A Business Loan?</a></span></p>
            <ul>
                <li style="list-style: disc;" class="paraFont">Passport/ Aadhaar card/ Driving license/ PAN card/
                    Voter’s ID card as proof of your identity.
                </li><br>

                <li style="list-style: disc;" class="paraFont ">Bank statements for the last 3 to 6 months, income tax
                    returns for the last 2 to 3 years, balance sheet, and profit and loss account of the company.
                </li><br>

                <li style="list-style: disc;" class="paraFont ">Trade license, GST registration certificate, and
                    establishment certificate for showing business proof.
                </li><br>

                <li style="list-style: disc;" class="paraFont ">Depending on the type of business, declaration of the
                    sole business ownership and certified true copy of partnership contract.
                </li><br>
                <li style="list-style: disc;" class="paraFont ">UDYAM registration certificate of the business.</li><br>

            </ul>
        </div>
    </div>
</section>


    <div class="container-fluid mt-4">
        <div>
            <h4 class="eligible">How Can You Apply for a Business Loan Online?
            </h4><br>
            <p class="paraFont">Applying for a business loan online is more easy to use than physically going to the
                bank or financial institution and applying for a loan. Here are some simple steps that can help you
                apply for a business loan online:
            </p>
            <ul>
                <li style="list-style: disc;" class="paraFont">Analyze the need for which you are taking a business
                    loan. It can be to cover the costs for machinery, payroll, rent payments, etc.

                </li><br>

                <li style="list-style: disc;" class="paraFont ">Research and compare different lenders of financial
                    institutions that are offering business loans at lower interest rates. Choose a best lender that
                    fulfil your needs without causing financial loss.

                </li><br>

                <li style="list-style: disc;" class="paraFont ">Business loans include many charges such as processing
                    fees, documentation charges, cheque dishonor charges, cancellation charges, etc. Make sure to read
                    the terms and conditions carefully and attentively before applying for a business loan.
                </li><br>

                <li style="list-style: disc;" class="paraFont ">Fill out the application form online from the official
                    website of the chosen lender. Before you submit the online application, double-check your personal
                    details.

                </li><br>

            </ul>
        </div>
    </div>


<!-- <section>
    <div class="container-fluid">
        <div class="container-fluid">

            <p style="color: #1338be" class="mb-3 text-4xl font-bold text-center">Compare and Apply
                Instantly
                for Business Loan at Lowest Interest Rate</p>
            <div class="container" style="
                      width: 1220px;
                      padding: 0 40px 0 40px;
                      overflow: hidden;
                      ">

                <div class="owl-carousel carousel1">
                    <div class="item"><img
                            src="{{ asset('assets/front_end/asset/img/bankLogo/Yes_Bank_SVG_Logo.png') }}"
                            alt="Image 1"></div>
                    <div class="item"><img
                            src="{{ asset('assets/front_end/asset/img/bankLogo/Kotak_Mutual_Fund_logo.png') }}"
                            alt="Image 2"></div>
                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Indiabulls_logo.png') }}"
                            alt="Image 3"></div>
                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/IDFC First Bank.png') }}"
                            alt="Image 4"></div>
                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/HDFC_Bank_Logo.png') }}"
                            alt="Image 5"></div>
                    <div class="item"><img
                            src="{{ asset('assets/front_end/asset/img/bankLogo/Bajaj_Finserv_Logo_edit.png') }}"
                            alt="Image 6">
                    </div>

                    <div class="item"><img
                            src="{{ asset('assets/front_end/asset/img/bankLogo/Yes_Bank_SVG_Logo.png') }}"
                            alt="Image 1"></div>
                    <div class="item"><img
                            src="{{ asset('assets/front_end/asset/img/bankLogo/Kotak_Mutual_Fund_logo.png') }}"
                            alt="Image 2"></div>
                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Indiabulls_logo.png') }}"
                            alt="Image 3"></div>
                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/IDFC First Bank.png') }}"
                            alt="Image 4"></div>
                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/HDFC_Bank_Logo.png') }}"
                            alt="Image 5"></div>
                    <div class="item"><img
                            src="{{ asset('assets/front_end/asset/img/bankLogo/Bajaj_Finserv_Logo_edit.png') }}"
                            alt="Image 6"></div>
                   Add more slides as needed 
                </div>

            </div>

        </div>
    </div>
</section> -->




<section class="banner-img sectiontable1" style="background-color: white;margin-top:0px">
    <div class="container-fluid">

        <h1 class="text-center " style="color:#1338be;font-weight: 600;">Know About More Loans</h1>
        <div class="bar m-auto my-4"></div>
        <p class="paraFont mt-4">
            Business Loans are the lenders of the last resort when you fall into any type of financial emergency whether
            you are going for a house renovation or dealing with some medical issues. Ultimately, all matters are the
            funds you have to deal with the financial issues. A personal loan at a low interest rate can be the cherry
            on the cake to deal with such problems. Therefore, MyZeon offers personal loans at a starting interest rate
            of 10.25% per annum and for a tenure of up to 7 years. It is better to compare all the details of a loan in
            one place rather than wandering around from bank to bank.
            Here you can have a look at the personal loan details offered by different banks and NBFCs.
        </p>
</section>

<!--  -->
<div class="clearfix"></div>
<!--  -->
<section class="jumbotron">
    <div class="container-fluid mt-5 mb-3">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class=" ">
                            <h5 class="card-title  eligible1 text-center">Business Loan</h5>

                            <p class="paraFont"> {{ Str::limit(
                                "A Business Loan can assist businesses in real time and help them overcome minor and
                                major obstacles. Business and economics are constantly changing, 
                                competition is becoming more and more intense, opportunities are forever expanding.
                                Innovative thinking and new ideas have immense potential for both established and
                                new businesses if acted upon and realised. But, only some end up capitalising on
                                their business ideas as they get caught up in managing their finances. During such
                                times, a timely capital infusion into your company allows you to open the doors of
                                possibility and enable you to deal with any hurdles on the way to success.
                                Today, the ease with which business funding is available with Banks and NBFCs.
                                ipsam atque! Cupiditate vel, laudantium,
                                eveniet delectus enim voluptate incidunt voluptas, ex iste debitis omnis neque. Sed nemo
                                dicta quo, laudantium, quod temporibus eaque placeat unde asperiores quasi ab ipsum
                                molestiae quibusdam vero vel excepturi",
                                200,
                                ) }}</p>
                            <div class="d-grid  mx-auto">
                                <a href="https://www.myzeon.com/business-loan" class="btn btn-primary">Know More</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class=" ">
                            <h5 class="card-title  eligible1 text-center">Home Loan</h5>

                            <p class="paraFont"> {{ Str::limit(
                                "A house is a big financial decision, and a home loan plays an important role. A
                                Home Loan loan is useful in getting a lump sum amount for the house purchase.
                                 Asperiores deleniti et corporis quis iure
                                accusantium qui odio. Ullam, nemo ex quia voluptatibus id laboriosam voluptatem
                                similique sapiente facere aliquam! Ducimus, reiciendis. Unde aliquam debitis sequi
                                labore. Neque, cupiditate consectetur? Quis minus earum expedita reprehenderit incidunt,
                                eius velit veritatis asperiores nesciunt similique fugiat accusantium voluptate
                                excepturi mollitia, tenetur architecto illo accusamus rerum recusandae unde! Voluptates
                                nulla eius rerum. Ut, unde provident culpa enim eligendi est porro autem voluptatem
                                optio illo eaque, aut obcaecati atque reprehenderit voluptas doloribus dolores facilis
                                hic saepe quis quasi quas? Totam architecto omnis possimus obcaecati praesentium
                                incidunt voluptatem sapiente dicta minus maxime, asperiores adipisci, iusto debitis quam
                                culpa deserunt amet quae beatae libero sunt provident quod! Neque placeat nesciunt
                                magnam provident, vitae, cupiditate facere omnis quidem sunt quas hic odit illo
                                exercitationem! Suscipit magnam accusamus rerum quae maxime neque expedita debitis qui
                                perspiciatis laboriosam ullam aut praesentium, non distinctio earum quo porro deleniti.
                                Ut minus dolorum nemo id harum non animi qui neque beatae libero aliquid, inventore odio
                                vel asperiores maxime numquam ipsam quam, modi sint itaque exercitationem vero quos nam
                                dolor. Quasi nihil temporibus est unde id voluptates fugiat! Praesentium aperiam omnis
                                officiis doloribus molestias deserunt, quia voluptate sit? ",
                                200,
                                ) }}</p>
                            <div class="d-grid  mx-auto">
                                <a href="https://www.myzeon.com/business-loan" class="btn btn-primary">Know More</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class=" ">
                            <h5 class="card-title  eligible1 text-center">Car Loan</h5>

                            <p class="paraFont"> {{ Str::limit(
                                "Getting a car is still a dream for many, and a car loan will help you fulfil your
                                dream. The prices of new cars might keep your dreams in the back seat. But not
                                anymore; with the growing market of cars, many banks and NBFCs provide car loans to
                                prospective buyers.
                                This way, it is more affordable for new car owners to get the desired car they want
                                under their budget.,
                                eveniet delectus enim voluptate incidunt voluptas, ex iste debitis omnis neque. Sed nemo
                                dicta quo, laudantium, quod temporibus eaque placeat unde asperiores quasi ab ipsum
                                molestiae quibusdam vero vel excepturi. Asperiores deleniti et corporis quis iure
                                accusantium qui odio. Ullam, nemo ex quia voluptatibus id laboriosam voluptatem
                                similique sapiente facere aliquam! Ducimus, reiciendis. Unde aliquam debitis sequi
                                labore. Neque, cupiditate consectetur? Quis minus earum expedita reprehenderit incidunt,
                                eius velit veritatis asperiores nesciunt similique fugiat accusantium voluptate
                                excepturi mollitia, tenetur architecto illo accusamus rerum recusandae unde! Voluptates
                                nulla eius rerum. Ut, unde provident culpa enim eligendi est porro autem voluptatem
                                optio illo eaque, aut obcaecati atque reprehenderit voluptas doloribus dolores facilis
                                hic saepe quis quasi quas? Totam architecto omnis possimus obcaecati praesentium
                                incidunt voluptatem sapiente dicta minus maxime, asperiores adipisci, iusto debitis quam
                                culpa deserunt amet quae beatae libero sunt provident quod! Neque placeat nesciunt
                                magnam provident, vitae, cupiditate facere omnis quidem sunt quas hic odit illo
                                exercitationem! Suscipit magnam accusamus rerum quae maxime neque expedita debitis qui
                                perspiciatis laboriosam ullam aut praesentium, non distinctio earum quo porro deleniti.
                                Ut minus dolorum nemo id harum non animi qui neque beatae libero aliquid, inventore odio
                                vel asperiores maxime numquam ipsam quam, modi sint itaque exercitationem vero quos nam
                                dolor. Quasi nihil temporibus est unde id voluptates fugiat! Praesentium aperiam omnis
                                officiis doloribus molestias deserunt, quia voluptate sit? ",
                                200,
                                ) }}</p>
                            <div class="d-grid  mx-auto">
                                <a href="https://www.myzeon.com/business-loan" class="btn btn-primary">Know More</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        
            <div class="col-md-3">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class=" ">
                            <h5 class="card-title  eligible1 text-center">Loan Against Property</h5>

                            <p class="paraFont"> {{ Str::limit(
                                "A loan against property (LAP) is a secured loan designed to cater to your urgent
                                financial need. In this, your property is pledged as security with the bank. You can
                                apply for a loan against property to meet personal or business requirements.
                                There is no restriction on how the borrower uses the funds. Hence, you are free to
                                use a LAP for various purposes.,
                                eveniet delectus enim voluptate incidunt voluptas, ex iste debitis omnis neque. Sed nemo
                                dicta quo, laudantium, quod temporibus eaque placeat unde asperiores quasi ab ipsum
                                molestiae quibusdam vero vel excepturi. Asperiores deleniti et corporis quis iure
                                accusantium qui odio. Ullam, nemo ex quia voluptatibus id laboriosam voluptatem
                                similique sapiente facere aliquam! Ducimus, reiciendis. Unde aliquam debitis sequi
                                labore. Neque, cupiditate consectetur? Quis minus earum expedita reprehenderit incidunt,
                                eius velit veritatis asperiores nesciunt similique fugiat accusantium voluptate
                                excepturi mollitia, tenetur architecto illo accusamus rerum recusandae unde! Voluptates
                                nulla eius rerum. Ut, unde provident culpa enim eligendi est porro autem voluptatem
                                optio illo eaque, aut obcaecati atque reprehenderit voluptas doloribus dolores facilis
                                hic saepe quis quasi quas? Totam architecto omnis possimus obcaecati praesentium
                                incidunt voluptatem sapiente dicta minus maxime, asperiores adipisci, iusto debitis quam
                                culpa deserunt amet quae beatae libero sunt provident quod! Neque placeat nesciunt
                                magnam provident, vitae, cupiditate facere omnis quidem sunt quas hic odit illo
                                exercitationem! Suscipit magnam accusamus rerum quae maxime neque expedita debitis qui
                                perspiciatis laboriosam ullam aut praesentium, non distinctio earum quo porro deleniti.
                                Ut minus dolorum nemo id harum non animi qui neque beatae libero aliquid, inventore odio
                                vel asperiores maxime numquam ipsam quam, modi sint itaque exercitationem vero quos nam
                                dolor. Quasi nihil temporibus est unde id voluptates fugiat! Praesentium aperiam omnis
                                officiis doloribus molestias deserunt, quia voluptate sit? ",
                                200,
                                ) }}</p>

                            <div class="d-grid  mx-auto">
                                <a href="https://www.myzeon.com/business-loan" class="btn btn-primary text-center">Know
                                    More</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->

<div class="clearfix"></div>

<!-- try start progress  -->
<section class="jumbotron">
    <h4 class="eligible text-center">Start Yor Journey
    </h4>
    <div class="bar m-auto">&nbsp;</div>
    <br>
    <div class="step-app" id="demo">
        <ul class="step-steps">
            <li data-step-target="step1">Step 1</li>
            <li data-step-target="step2">Step 2</li>
            <li data-step-target="step3">Step 3</li>
            <li data-step-target="step4">Step 4</li>
            <li data-step-target="step5">Step 5</li>
           
           
    
        </ul>
        <div class="step-content">
            <!-- <div class="step-tab-panel" data-step="step1">
            <h3>Tab1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus facere porro iste quas numquam officia totam facilis suscipit, expedita rem quod, fugiat quo, veniam voluptate ut autem quia qui amet necessitatibus perferendis dignissimos ipsa doloremque. Necessitatibus delectus voluptatem unde. Architecto animi unde nostrum tenetur, doloremque distinctio, porro officiis dicta similique omnis quos odit ducimus minima ea quas facilis quod. Natus adipisci consequuntur sapiente alias culpa fugit tenetur, doloribus? Magni ipsum dolor debitis beatae quo, dicta voluptas veritatis, quos. Iusto quisquam doloribus laboriosam esse, dicta, odio facilis eligendi explicabo sequi accusamus a iste minus alias. Nisi sed laborum, aut maiores beatae aliquam voluptatum est enim impedit delectus blanditiis, neque sint nemo deleniti a quaerat voluptatem harum! Laboriosam assumenda, ullam iure. Corrupti maxime perferendis facilis ipsum, eius excepturi commodi consectetur, velit nobis reiciendis, ipsam! Maiores possimus tempore vel doloremque in facilis qui quos molestias. Culpa eius magnam repellat, ad eaque. Possimus, voluptatem.</p>
          </div> -->
            <div class="step-tab-panel" data-step="step1">
                <!-- <h3>Step 1: Contact Number</h3> -->
                <form name="frmContact" id="frmContact" class="form-group label">
                    <label class="fieldlabels"> Contact Number: </label><br>
                   
                    <input type="tel" name="txtContactNum" id="txtContactNum" 
                        placeholder="Enter your contact number" class="form-control">
                    <!-- <small>Enter a valid 10-digit contact number.</small> -->
                </form>
            </div>
    
            <div class="step-tab-panel" data-step="step2">
                <!-- <h3>Step 2: Select Your Yearly Income</h3> -->
                <form name="frmIncome" id="frmIncome" class="form-group label">
                    <label class="fieldlabels"> Do you have Business Proof :</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                         No
                        </label>
                      </div>

                </form>
            </div>
    
            <div class="step-tab-panel" data-step="step3">
                <!-- <h3>Step 3: Select Your Bank Account</h3> -->
                <form name="frmBank" id="frmBank" class="form-group label">
                    <label for="fieldlabels">How old is your business :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            0 to 3 Months
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            6 Months to 1 Year
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            1 to 5 Years
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            More than 5 Years
                        </label>
                      </div>
                </form>
            </div>
            <div class="step-tab-panel" data-step="step4">
                <!-- <h3>Step 4: Provide Your Employment Details</h3> -->
                <form name="frmEmployment" id="frmEmployment" class="form-group label">
                    <label for="fieldlabels">Monthly Revenue  :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            0 - 25K
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        25K - 1 L
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        1 - 2.5 L
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                        5 - 8.5 L(More than)
                        </label>
                      </div>
                </form>
            </div>
    
            <div class="step-tab-panel" data-step="step5">
                <!-- <h3>Step 5: Select Your Residence Type</h3> -->
                <form name="loanApplicationForm" id="loanApplicationForm" class="form-group label">
                    <div class="form-row">
                        <div class="col-md-4 form-group">
                            <label for="full_name">Enter Full Name</label>
                            <input type="text" name="first_name" id="name" class="form-control" placeholder="Enter Name"
                                required tabindex="1">
                            <div class="error-message" id="name-error"></div>
                        </div>
                        <div class="col-md-4 form-group">
        
                            <label>Phone Number</label>
                            <input type="tel" placeholder="Enter Number" class="form-control mobile required "
                                data-validation="required length custom" data-validation-length="10"
                                data-validation-regexp="^\d{10}$"
                                data-validation-error-msg="Please enter a valid 10-digit number" maxlength="10" name="phone_no"
                                id="phone_no" tabindex="3" autocomplete="Off" oninput="formatPhoneNumber(this)" required
                               tabindex="2">
        
                            <span class="phone_number_error_indicator help-block form-error"></span>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Your desired loan amount</label>
                            <span class="badge badge-warning">(₹) ?</span>
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" placeholder="XXXXXXXXX" class="form-control amount required"
                                    name="desired_amount" data-validation="required number"
                                    data-validation-error-msg="Please enter a valid loan amount" id="loan_amount" tabindex="3"
                                    value="">
                            </div>
                        </div>
                    </div>
        
                        <div class="form-row">
                            <div class="col-md-4 form-group">
                                <label for="pincode">Enter Pincode</label>
                                <input type="tel" name="pincode" id="pincode" class="form-control" placeholder="Pincode"
                                    onchange="getCityStateFromPincode(this.value)" required maxlength="6">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="city">Enter City</label>
                                <input type="text" name="city" id="city" class="form-control" placeholder="City"
                                    required>
                            </div>
                           
                            <div class="col-md-4 form-group">
                                <label for="message">State</label>
                                <select id="stateName" class="form-control">
                                    <option value="">Select state</option>
                                </select>
                            </div>
                        </div>
                            
                            <div class="form-row">
        
                            <!-- Employment type field -->
                            <div class="form-group col-sm-4">
                                <label>How are you currently employed?</label>
                                <select title="Select your employment" class="form-control" id="employee_type"
                                    name="employee_type" data-validation="required" data-validation-error-msg="" tabindex="4"
                                    autocomplete="Off" onchange="toggleEmploymentFields()">
                                    <option>Please Select--</option>
                                    <option value="Business">Self Employed Business</option>
                                    <option value="Professional">Self Employed Professional</option>
                                </select>
        
                            </div>
        
                            <!-- Fields for Self Employed Business -->
                            <div class="form-group col-sm-4" id="selfEmployedBusinessFields" style="display: ;">
                                <label>Business Name</label>
                                <input type="text" class="form-control" name="business_name" tabindex="5"
                                    autocomplete="Off" placeholder="Business Name">
                            </div>
        
                            <!-- Fields for Self Employed Professional -->
                            <div class="form-group col-sm-4" id="selfEmployedProfessionalFields" style="display: ;">
                                <label>Profession</label>
                                <input type="text" class="form-control" name="profession" tabindex="6"
                                    autocomplete="Off" placeholder="Enter Profession">
                            </div>
        
        
                            <!-- Annual turnover field -->
        
                            <div class="form-group col-sm-4 has-error" id="annual-turnover" style="display: block;">
                                <label>
        
                                    <span class="turnover_title">Your gross annual sales / turnover?</span>
                                    <a href="javascript:void(0)" data-toggle="tooltip" name="yearly_income"
                                        data-placement="top" title=""
                                        data-original-title="Your last financial year turnover, as filed with ITR"
                                        class="">
                                      
                                    </a>
        
                                </label>
        
                                <div class="input-group">
        
                                    <span class="input-group-addon"></span>
                                    <select title="Select Turnover" class="form-control" name="yearly_income" id="yearly_income"
                                        data-validation="required"
                                        data-validation-error-msg="Please enter the annual turnover" tabindex="7"
                                        autocomplete="Off" aria-hidden="true" onchange="toggleBasicInformationFields()">
                                        <option value="">Please select--</option>
                                        <option value="500000">Upto 5 Lacs</option>
                                        <option value="1000000">5 Lacs - 10 Lacs</option>
                                        <option value="2500000">10 Lacs - 25 Lacs</option>
                                        <option value="5000000">25 Lacs - 50 Lacs</option>
                                        <option value="7500000">50 Lacs - 75 Lacs</option>
                                        <option value="10000000">75 Lacs - 1 Cr</option>
                                        <option value="30000000">1 Cr - 3 Cr</option>
                                        <option value="50000000">3 Cr - 5 Cr</option>
                                        <option value="100000000">5 Cr+</option>
                                    </select>
                                </div>
                                <span class="annual_turnover_error_indicator help-block form-error"></span>
                            </div>
        
                            <!-- Years In Current Business field -->
                            <div class="form-group col-sm-4" id="year-in-business" style="display: ;">
                                <label>Years In Current Business/Profession</label>
                                <input type="number" class="form-control" name="years_in_business" tabindex="9"
                                    autocomplete="Off" placeholder="Years In Current Business/Profession">
                            </div>
        
                            <!-- Residence Type field -->
                            <div class="form-group col-sm-4" id="registance_type" name="registance_type" style="display: ;">
                                <label>Residence Type</label>
                                <select class="form-control"  name="registance_type" required>
                                    <option value="">Select Residence Type</option>
                                    <option value="Owned by Self_Spouse">Owned by Self / Spouse</option>
                                    <option value="Owned by Parents_Siblings">Owned by Parents / Siblings</option>
                                    <option value="Rented with Family ">Rented with Family</option>
                                    <option value="Rented with Friends ">Rented with Friends</option>
                                    <option value="Other ">Other</option>
                                </select>
                            </div>
        
        
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                </form>
            </div>
    
            
    
            <div class="step-tab-panel" data-step="step7">
                <form id="loan-form" onsubmit="return validateForm()">
                    <div class="form-row" id="scrolldiv">
                        <div class="col-md-4 form-group">
                            <label for="name">Enter Full Name</label><span style="color: red;">*</span>
                            <input type="text" name="first_name" id="name" class="form-control"
                                placeholder="Enter your name">
                            <div class="error-message" id="name-error">Enter your Full Name.</div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="phone">Enter Phone Number</label><span style="color: red;">*</span>
                            <input type="tel" name="mobile_no" id="phone_no" class="form-control"
                                placeholder="Enter phone number">
                            <div class="error-message" id="phone-error">Enter valid 10-digit number</div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Your desired loan amount</label><span style="color: red;">*</span> <span
                                class="badge badge-warning">(₹) ?</span>
        
        
                            <span class="input-group-addon"></span>
                            <input type="text" name="desired_amount" placeholder="XXXXXXXXX"
                                class="form-control amount required" name="desired_amount" data-validation="required number"
                                data-validation-error-msg="Please enter a valid loan amount" id="loan_amount" tabindex="1"
                                value="" onkeyup="formatLoanAmount(this)">
                            <div class="error-message" id="desired-error">Enter Loan Amount</div>
        
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label for="email">Enter Email</label><span style="color: red;">*</span>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter your email">
                            <div class="error-message" id="email-error">Enter a valid email address.</div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pan">Enter PAN Card</label><span style="color: red;">*</span>
                            <input type="text" name="pancard" id="pan" class="form-control"
                                placeholder="Enter your PAN card number" maxlength="10" oninput="convertToUppercase()">
                            <div class="error-message" id="pan-error">Enter a valid PAN card number (e.g. ABCDE1234F).</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label for="dob">Date of Birth</label><span style="color: red;">*</span>
                            <div class="input-group">
                                <input type="text" name="dob" id="dob" class="form-control dob-input"
                                    placeholder="DD/MM/YYYY">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="error-message" id="dob-error">Enter date of birth.</div>
                        </div>
        
        
                        <div class="col-md-6 form-group">
                            <label for="pincode">Enter Pincode</label><span style="color: red;">*</span>
                            <input type="tel" name="pincode" id="pincode" class="form-control"
                                placeholder="Enter your city pincode" onchange="getCityStateFromPincode(this.value)"
                                maxlength="6">
                            <div class="error-message" id="pincode-error">Enter a valid pincode.</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group"> 
                            <label for="city">City</label><span style="color: red;">*</span>
                            <input type="text" name="city" id="city" class="form-control"
                                placeholder="Enter your city">
                            <div class="error-message" id="city-error">Enter your city.</div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="address">Address</label><span style="color: red;">*</span>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter your address">
                            <div class="error-message" id="address-error">Enter your address.</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label for="occupation">Employment Type</label><span style="color: red;">*</span>
                            <select name="occupation" name="employment_type" id="occupation" class="form-control"
                                onchange="handleOccupationChange()">
                                <option value="disabled selected">Select employment type</option>
                                <option value="Salaried">Salaried</option>
                                <option value="Business Owner">Business Owner</option>
                                <option value="Self-employed Professional">Self-employed Professional</option>
                            </select>
                            <div class="error-message" id="occupation-error">Please select an employment type.</div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="loan_type">Loan Type</label><span style="color: red;">*</span>
                            <select name="loan_type" id="loan_type" class="form-control">
                                <option value="">Select loan type</option>
                            </select>
                            <div class="error-message" id="loan-error">Please select a loan type.</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label for="loan_type">Choose Bank</label><span style="color: red;">*</span>
                            <input type="text" name="bank" id="bank" class="form-control" placeholder="">
        
        
        
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                </form>
            </div>
    
    
        </div>
    
    
    
    </div>
    
    <div class="step-footer mt-5">
        <button data-step-action="prev" class="step-btn btn btn-success">Previous</button>
        <button data-step-action="next" class="step-btn btn btn-success">Next</button>
        <button data-step-action="finish" class="step-btn btn btn-success">Finish</button>
    </div>
    <div class="loader-container" id="loader" style="display: none;">
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="loader-text">Submitting...</div>
        </div>
    </div>
    </section>
<!-- try progress -->



<!-- start your journey -->

<!-- end your journey -->

{{-- end section --}}




{{-- sectionn for apply now card --}}


<!-- <section>


    <div class="row">
        <div class="container-fluid px-4 relative">
            <div class="flex flex-col items-center justify-center">
                <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/personalLoan/pesonal_loan_apply_banner_800scale.png"
                    class="w-full max-h-600" style="height: ;" alt="apply image">

                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bannerButton">
                    <button
                        class="bg-blue-500 text-2xl font-bold hover:bg-blue-800 text-white h-12 md:h-16 w-48 md:w-64 max-w-full text-base md:text-lg lg:text-xl rounded-full"
                        style="background-color: #1338be;">
                        <a href="http://192.168.120.228/myzeon_web/index.php/apply-new" style="color: white;">Apply
                            Now</a>
                    </button>
                </div>
            </div>

        </div>
    </div>


  
</section> -->
<section>



    {{-- end of section apply now card --}}



    <!--accordian  -->

    <section class="container-fluid">

        <div class="accordion mt-4" id="accordionExample">
            <div class="heading-title mt-3 ml-3">
                <h3 class="mb-2 font-weight-bold " style="color: #1338be;">Types of Business Loan
                </h3>

                <div class="bar">&nbsp;</div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Secured Business Loan
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="font-family-josefin-sans ">Secured business loans are the safest and most popular
                                forms of credit for
                                established businesses. The assets a business needs to pledge as collateral for a
                                secured
                                business loan are</p>
                            <ul style="list-style: disc;">
                                <li>Inventory&nbsp;</li>
                                <li>Equipment</li>
                                <li>Land&nbsp;</li>
                                <li>Building&nbsp;</li>
                                <li>Unpaid invoices</li>
                            </ul>
                            <p>A business owner can get a secured business loan against mortgaged property. They can
                                also
                                provide fixed deposits, government securities, savings accounts, gold, and other
                                precious metals
                                as collateral for the loan.</p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Unsecured Business Loans
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mt-3">A business owner can get a secured business loan against mortgaged
                                property.
                                They
                                can also provide fixed deposits, government securities, savings accounts, gold, and
                                other
                                precious metals as collateral for the loan.</p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Differences Between Secured and Unsecured
                            Business Loans
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="text-align: justify;">
                            <div id="elementor-tab-content"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3"
                                role="region" aria-labelledby="elementor-tab-title"
                                style="display: block; padding: 15px; border: 1px solid rgb(57, 55, 55);">
                                <div class="table-responsive">
                                    <table class="table" width="824">
                                        <thead>
                                            <tr>
                                                <td valign="top">
                                                    <p class="normal"><span style="color: #000000;"><b><span
                                                                    lang="EN">Particulars</span></b></span></p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span style="color: #000000;"><b><span
                                                                    lang="EN">Unsecured Business
                                                                    Loan</span></b></span>
                                                    </p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span style="color: #000000;"><b><span
                                                                    lang="EN">Secured Business
                                                                    Loan</span></b></span>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <p class="normal"><span style="color: #000000;"><b><span
                                                                    lang="EN">Collateral</span></b></span></p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">No collateral needed</span>
                                                    </p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">Business owners may provide an
                                                            asset, such as land, equipment, inventory, property,
                                                            etc.,
                                                            as collateral against the loan.</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <p class="normal"><span style="color: #000000;"><b><span
                                                                    lang="EN">Credit Score</span></b></span></p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">Based on the credit score,
                                                            banks
                                                            and NBFCs decide on the loan amount and interest
                                                            rate.</span></p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">A secured business loan
                                                            requires a
                                                            lower credit score than an unsecured business
                                                            loan.</span>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <p class="normal"><span style="color: #000000;"><b><span
                                                                    lang="EN">Interest rate</span></b></span></p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">A higher interest rate than
                                                            secured business loans as they do not have a guarantee
                                                            of an
                                                            asset to back the loan amount.</span></p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">A lower interest rate is
                                                            charged
                                                            as risk is lower</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <p class="normal"><span style="color: #000000;"><b><span
                                                                    lang="EN">Guarantor</span></b></span></p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">No guarantor is
                                                            required</span>
                                                    </p>
                                                </td>
                                                <td valign="top">
                                                    <p class="normal"><span lang="EN">A business owner or partner
                                                            can
                                                            pledge their land, property, or gold as collateral
                                                            against
                                                            the loan.</span></p>
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <p class="mt-3">Choose between an unsecured and secured business loan depending on
                                factors like
                                credit score, repayment capacity, the time required to repay the loan, etc.</p>

                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Business Loans for Women
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Business Loans for women help women entrepreneurs scale businesses. A small Business
                                Loan
                                for women helps scale business to further heights, such as upgrading machinery,
                                hiring
                                new workers and building infrastructure. Check out the benefits of Business Loans
                                for
                                women below –</p>
                            <ul style="list-style: disc;" class="pl-3">
                                <li>&nbsp;Helps meet day-to-day business needs: Day-to-day business needs sometimes
                                    get
                                    overwhelming and pressure business owners. A Business Loan for women is a way to
                                    take care of these short-term financial needs.</li>
                                <li>&nbsp;No collateral obligations: Small Business Loans for women are
                                    collateral-free.
                                    The borrower doesn’t have to put any security in exchange for the loan amount.
                                </li>
                                <li>&nbsp;Low-interest rates: Women business owners can get a Business Loan at lower
                                    interest rates. Joint business owners can take advantage of this on their
                                    interest
                                    rate by getting these loans in the name of the woman partner.</li>
                                <li>&nbsp;Minimal documentation: Another benefit of Business Loans for women is that
                                    you
                                    can get them at minimal documentation and processing fee.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            MSME/SME Loan
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Banks provide MSME/SME (Micro, Small, Medium, and Enterprise) loans. It is a type of
                                financial assistance provided to small businesses for long-term, working capital,
                                growth, or expansion purposes. These business loans are highly beneficial for MSMEs
                                in
                                maximising their full potential through adequate funding.</p>
                            <p><strong>Key highlights of MSME Loans</strong>&nbsp;</p>
                            <ul class="pl-3" style="list-style: disc;">
                                <li>Loan eligibility requirements are moderate.</li>
                                <li>Tax exemptions on certain items</li>
                                <li>There are government-backed MSME Loans available.</li>
                                <li>Equal opportunity for all types of businesses</li>
                                <li>Funding to meet all business requirements</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Eligibility and Criteria for Business Loans
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Business Loans come with the following eligibility criteria.</p>
                            <ul class="pl-3" style="list-style: disc;">
                                <li>Age: 21 years to 65 years</li>
                                <li>Business profitability: The business must have a steady profit from the past
                                    year
                                </li>
                                <li>Business turnover: In the past year, the business turnover should be INR 40 Lakh
                                    or
                                    above</li>
                                <li>CIBIL score: CIBIL score should be 750 or above (for unsecured business loans).
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Document Required for Business Loans
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Any bank and NBFC will have doubts and inquiries regarding your business’ growth
                                plans.
                                This is why verification of Business Loan documents is necessary for approval.</p>
                            <ul class="pl-3" style="list-style: disc;">
                                <li>&nbsp;Application form: Duly filled and signed application form</li>
                                <li>&nbsp;KYC documents: Aadhaar card, PAN card, Voter’s ID, etc.</li>
                                <li>Income documents: GST documents, Balance Sheets, and tax audit documents</li>
                                <li>Photographs: 4-5 passport-size photographs</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </section>

    <!--  -->
    <!-- <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title">
                        <h3 class="mb-2 font-weight-bold " style="color: #1338be;">Eligibility Criteria for Business Loan</h3>

                        <div class="bar">&nbsp;</div>

                        <p class="font-family-josefin-sans text-1xl font-bold text-stone-900" >Before you apply for a personal loan, make sure that your qualify the
                            eligibility criteria for the loan. You will have to fulfil the following eligibility criteria if
                            you are applying for a business loan.</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card" data-target="#collapseOne" data-toggle="collapse">
                            <div class="card-header font-family-josefin-sans  font-bold text-yellow-500" id="headingOne">
                                <button aria-expanded="false" class="collapsed"
                                     type="button"><span class="font-family-josefin-sans text-1xl font-bold text-yellow-500">For Salaried</span>
                                    </button></div>

                            <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample"
                                id="collapseOne" style="">
                                <div class="card-body">
                                    <ul class="pl-3">
                                        <li>The minimum age of the salaried individual must be 21 years.</li>
                                        <li>The maximum age of the salaried individual should not exceed 60 years.</li>
                                        <li>You will need a minimum monthly income of INR 15,000.</li>
                                        <li>2 years of experience with a minimum experience of 1 year in the same job.</li>
                                        <li>A minimum Cibil Score of 750 is needed to get the personal loan.</li>
                                        <li>You must be an Indian Citizen to Apply for the Loan.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo"><button data-target="#collapseTwo"
                                    data-toggle="collapse" type="button">For Self Employed</button></div>

                            <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample"
                                id="collapseTwo">
                                <div class="card-body table-responsive">
                                    <ul class="pl-3">
                                        <li>A minimum age of 22 years is needed for self-employed.</li>
                                        <li>The maximum age of the Self-employed should not exceed 55 years.</li>
                                        <li>2 years of business continuity proof is needed.</li>
                                        <li>You will need a minimum monthly income of INR 25,000.</li>
                                        <li>A minimum Cibil Score of 750 is needed to get the personal loan.</li>
                                        <li>You must be an Indian Citizen to Apply for the Loan.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree"><button data-target="#collapseThree"
                                    data-toggle="collapse" type="button">Personal Loan Documents</button></div>

                            <div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample"
                                id="collapseThree">
                                <div class="card-body">
                                    <p>You will need the following documents to support your eligibility for the personal
                                        loan. A soft copy of the following documents has to be submitted to prove your
                                        eligibility.</p>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><b>Proofs</b></td>
                                                <td><b>Documents</b></td>
                                            </tr>
                                            <tr>
                                                <td>Identity Proof</td>
                                                <td>Passport, PAN Card, Voter&rsquo;s ID, Aadhaar Card, or Driving License
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Address Proof</td>
                                                <td>Passport, Aadhaar Card, Lease, Property Purchase Agreement, Utility
                                                    Bills (not more than 3 months old), Passport, or Driving License</td>
                                            </tr>
                                            <tr>
                                                <td>Income Proof for Salaried</td>
                                                <td>Salary Slips, Bank Account Statement, or Form 16&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Income Proof for Self-Employed</td>
                                                <td>Previous Years&rsquo; ITR, P&amp;L Statement and Balance Sheet, or Bank
                                                    Account Statement</td>
                                            </tr>
                                            <tr>
                                                <td>Business Proof for Self-Employed</td>
                                                <td>Business Incorporation Certificate, Professional Degree, Certificate of
                                                    Practice, Partnership Deed, GST Registration and Filing Documents, MOA
                                                    &amp; AOA, or Shop Act License</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour"><button data-target="#collapseFour"
                                    data-toggle="collapse" type="button">How to Apply for a Personal Loan</button></div>

                            <div aria-labelledby="headingFour" class="collapse" data-parent="#accordionExample"
                                id="collapseFour">
                                <div class="card-body">There are two ways to apply for a personal loan. Either you can
                                    apply for the loan offline by visiting the nearest branch or online through the official
                                    website.</div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive"><button data-target="#collapseFive"
                                    data-toggle="collapse" type="button">Apply for Instant Personal Loan Online</button>
                            </div>

                            <div aria-labelledby="headingFive" class="collapse" data-parent="#accordionExample"
                                id="collapseFive">
                                <div class="card-body">
                                    <p>You can visit the official website of any bank or NBFC from where you are willing to
                                        borrow the loan. You will have to enter some of your basic details in the Personal
                                        Loan Application form and apply for the loan instantly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSix"><button data-target="#collapseSix"
                                    data-toggle="collapse" type="button">Apply for Instant Loan Offline</button></div>

                            <div aria-labelledby="headingSix" class="collapse" data-parent="#accordionExample"
                                id="collapseSix">
                                <div class="card-body">
                                    <p>You can even visit the nearest branch and meet the bank&rsquo;s representative to
                                        apply for a personal loan. Here you will have to fill out the loan application form
                                        physically and submit it to the respective executive of the bank.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeven"><button data-target="#collapseSeven"
                                    data-toggle="collapse" type="button">Why Choose MyZeon to Apply for a Personal
                                    Loan</button></div>

                            <div aria-labelledby="headingSeven" class="collapse" data-parent="#accordionExample"
                                id="collapseSeven">
                                <div class="card-body">
                                    <p>There are multiple reasons to apply for a personal loan from MyZeon and you can
                                        explore all of them below:-</p>

                                    <p><strong>Multiple Options</strong></p>

                                    <p>MyZeon has a tie-up with more than 20 banks and NBFCs that offers the best rate of
                                        interest and maximum loan amount to the applicants. You can compare the Personal
                                        Loans of 20+ banks and NBFCs in one place and apply for the loan.</p>

                                    <p><strong>High Chances of Approval</strong></p>

                                    <p>As we have more than 20 lending institutions, the chances of personal loan approval
                                        are high. If your preferred bank is rejecting your loan application then we are here
                                        to give you the best offer on loans.</p>

                                    <p><strong>Loan Offers</strong></p>

                                    <p>There are also some pre-approved loan offers in which you will not need to go through
                                        a lengthy loan disbursal process. The loans are disbursed instantly to customers who
                                        have a pre-approved loan limit.</p>

                                    <p><strong>Expert Advice</strong></p>

                                    <p>Our experts will fit the best with your loan requirement and give you the optimum
                                        option to get a personal loan. You can clear all your queries with our experts about
                                        the personal loan.</p>

                                    <p><strong>Minimal Documentations</strong></p>

                                    <p>You will only have to submit an address proof, an identity proof, and an income proof
                                        to get the personal loan from us.</p>

                                    <p><strong>Digital Process</strong></p>

                                    <p>The whole loan disbursal process will be digital and you will have to submit soft
                                        copies of all your documents when you apply for the personal loan.</p>

                                    <p><strong>Low Interest Rate</strong></p>

                                    <p>You can apply for a personal loan at an interest rate of 10.25% per annum from
                                        MyZeon. But the interest rate might vary depending upon your income, credit score,
                                        and relationship with the NBFC or bank.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEight"><button data-target="#collapseEight"
                                    data-toggle="collapse" type="button">Types of Personal Loans</button></div>

                            <div aria-labelledby="headingEight" class="collapse" data-parent="#accordionExample"
                                id="collapseEight">
                                <div class="card-body">
                                    <p>There are many types of personal loans you can apply for and fulfil your financial
                                        needs. You can explore all types of personal loans below:-</p>

                                    <p><strong>Short-Term Personal Loan</strong></p>

                                    <p>These loans are offered for less than a year. The loan tenure for these types of
                                        personal loans is usually less than 12 months.</p>

                                    <p><strong>Instant Personal Loan</strong></p>

                                    <p>The loans borrowed from personal loan apps and disbursed within 24 hours are known as
                                        Instant Personal Loans.</p>

                                    <p><strong>Consumer Durable Personal Loan</strong></p>

                                    <p>Some banks give loans for consumer durable goods like electronics, smartphones,
                                        furniture, etc. are known as consumer durable personal loans. The loan amount is low
                                        in these types of loans.</p>

                                    <p><strong>Personal Loan for Festivals</strong></p>

                                    <p>Some individual borrow a loan to meet their festival expenses and these types of
                                        loans comes under this category.</p>

                                    <p><strong>Top-Up Personal Loan</strong></p>

                                    <p>When the existing loan amount is not enough to deal with the expenses, then a person
                                        borrows a Top-up loan over the existing loan.</p>

                                    <p><strong>Personal Loan Balance Transfer</strong></p>

                                    <p>Many individuals go for a Personal Loan Balance Transfer when they find that another
                                        lending institution is offering a loan at a lower interest rate than the interest
                                        rate on the existing loan.</p>

                                    <p><strong>Personal Loan for Weddings</strong></p>

                                    <p>Wedding Functions needs a lot of funds whether you are booking a venue or buying
                                        dresses and jewellery. So, in order to meet the marriage expenses, Wedding loans can
                                        be the best option for you</p>

                                    <p><strong>Personal Loan for Home Renovation</strong></p>

                                    <p>When you renovate your home then your financial status might get affected. Therefore,
                                        borrowing a home renovation loan can help you renovate your dream home.</p>

                                    <p><strong>Personal Loan for Vacations</strong></p>

                                    <p>Many individuals drop their travelling plans due to a lack of funds. So, a travel
                                        loan can help you to reach your favourite destination whether in India or abroad.
                                    </p>

                                    <p><strong>Education Personal Loan</strong></p>

                                    <p>Education are too expensive these days and it is difficult for an individual to
                                        afford it if he is willing to study abroad. Therefore, a personal loan for education
                                        can help you pursue your favourite course and study at your favourite college.</p>

                                    <p><strong>Medical Emergency Personal Loan</strong></p>

                                    <p>A medical emergency can knock on your door anytime and if you aren&rsquo;t prepared
                                        then you will have to face the consequences. That is why a personal loan for a
                                        medical emergency can help you to deal with hospitalization bills and surgical
                                        expenses.</p>

                                    <p><strong>Personal Loan for Women</strong></p>

                                    <p>If a working woman has to fulfil her financial needs then a loan for Women can be the
                                        best option for her.</p>

                                    <p><strong>Pensioners Personal Loans</strong></p>

                                    <p>The loans that lend to Pensioners on the basis of their pensions are known as
                                        pensioner personal loans. The interest rate on the pensioner personal loan is
                                        usually low as compared to the interest charge on the loan for salaried and
                                        self-employed Individuals.</p>

                                    <p><strong>Salaried Personal Loan</strong></p>

                                    <p>The loans given to salaried individuals whether working in a government or private
                                        organization are known as Salaried Personal loans.</p>

                                    <p><strong>Self-Employed Personal Loan</strong></p>

                                    <p>Loans given to business owners and working professionals like Chartered Accountants,
                                        Doctors, Company Secretaries and others are known as personal loans for
                                        self-employed.</p>

                                    <p><strong>Personal Loan for Consolidating Debt</strong></p>

                                    <p>Many individuals thinks that it is better to manage one EMI rather than manage
                                        multiple EMIs on various debts. Therefore, the personal loan for consolidating debts
                                        is borrowed and all the other debts are settled with that loan. Now the individual
                                        has tp pay only one EMI on one loan.</p>

                                    <p><strong>Personal Loan Fee and Charges</strong></p>

                                    <p>There are certain fees and charges that might be applicable at the time of borrowing
                                        the loan from any NBFC or bank. You can negotiate the fees and charges with the
                                        lending institutions.</p>

                                    <ul class="pl-5">
                                        <li>Loan Processing Fees</li>
                                        <li>Pre-Payment Charges</li>
                                        <li>Part-payment Charges</li>
                                        <li>Foreclosure Charges</li>
                                        <li>Verification Charges</li>
                                        <li>Loan Cancellation Charges</li>
                                        <li>Re-booking Charges</li>
                                        <li>Documentation Fees &amp; Stamp Duty</li>
                                        <li>Legal and Penal Charges</li>
                                        <li>Duplicate Statement Charges</li>
                                        <li>NOC Certificate</li>
                                        <li>EMI/Cheque Bounce Charges</li>
                                        <li>Swap and Late Fees</li>
                                    </ul>

                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingNine"><button data-target="#collapseNine"
                                    data-toggle="collapse" type="button">Calculate EMI on Personal Loans</button></div>

                            <div aria-labelledby="headingNine" class="collapse" data-parent="#accordionExample"
                                id="collapseNine">
                                <div class="card-body">
                                    <p>You can make use of the EMI Calculator to calculate the EMI on the personal loan. All
                                        you need is to enter the Principal Amount, Interest Rate, and Loan Tenure to
                                        calculate the EMI on the Loan. In the table given below, you can go through
                                        different EMIs at an Interest Rate of 10.25% per annum and a tenure of 4 Years for
                                        different loan amounts.</p>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><b>Loan Amount</b></td>
                                                <td><b>Tenure</b></td>
                                                <td><b>Interest Rate</b></td>
                                                <td><b>EMI</b></td>
                                            </tr>
                                            <tr>
                                                <td>INR 1 Lakh</td>
                                                <td>4 Years</td>
                                                <td>10.25% per annum</td>
                                                <td>INR 2548</td>
                                            </tr>
                                            <tr>
                                                <td>INR 3 Lakhs</td>
                                                <td>4 Years</td>
                                                <td>10.25% per annum</td>
                                                <td>INR 7645</td>
                                            </tr>
                                            <tr>
                                                <td>INR 8 Lakhs</td>
                                                <td>4 Years</td>
                                                <td>10.25% per annum</td>
                                                <td>INR 20386</td>
                                            </tr>
                                            <tr>
                                                <td>INR 12 Lakhs</td>
                                                <td>4 Years</td>
                                                <td>10.25% per annum</td>
                                                <td>INR 30579</td>
                                            </tr>
                                            <tr>
                                                <td>INR 15 Lakhs</td>
                                                <td>4 Years</td>
                                                <td>10.25% per annum</td>
                                                <td>INR 38224</td>
                                            </tr>
                                            <tr>
                                                <td>INR 20 Lakhs</td>
                                                <td>4 Years</td>
                                                <td>10.25% per annum</td>
                                                <td>INR 50966</td>
                                            </tr>
                                            <tr>
                                                <td>INR 25 Lakhs</td>
                                                <td>4 Years</td>
                                                <td>10.25% per annum</td>
                                                <td>INR 63707</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTen"><button data-target="#collapseTen"
                                    data-toggle="collapse" type="button">Why choose Myzeon to get a Personal
                                    Loan</button></div>

                            <div aria-labelledby="headingTen" class="collapse" data-parent="#accordionExample"
                                id="collapseTen">
                                <div class="card-body">
                                    <ul>
                                        <li><strong>Wide Choice: </strong>Choose from 30+ personal loan offers from leading
                                            banks/NBFCs including HDFC Bank, SBI, Axis Bank, ICICI Bank, Bank of Baroda and
                                            more.</li>
                                        <li><strong>Chances of Approval:</strong> Myzeon has a unique feature &lsquo;chances
                                            of approval&rsquo;, which will match your credit profile with the various
                                            lending criteria of banks and NBFCs, to provide customers with the chances of
                                            getting their loan application approved &ndash; Excellent, Good, Fair, Poor
                                            &ndash; against each lender.</li>
                                        <li><strong>Pre-approved Personal Loan Offers: </strong>On the basis of credit
                                            profile, our customers get pre-approved personal loan offers from our partners.
                                            Our <a href="#" rel="noopener" target="_blank">pre-approved personal
                                                loan</a> offers have excellent approval rate, require minimal documentation
                                            and offer instant disbursal.</li>
                                        <li><strong>Expert Assistance:</strong>&nbsp; Myzeon team of experts helps customers
                                            choose the most suited personal loan offer for their needs. Our team assists
                                            customers at each step of the loan process till disbursal.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingelv"><button data-target="#collapseelv"
                                    data-toggle="collapse" type="button">Personal Loan Cibil Score</button></div>

                            <div aria-labelledby="headingelv" class="collapse" data-parent="#accordionExample"
                                id="collapseelv">
                                <div class="card-body">
                                    <p>If you want an easy approval and a quick disbursal for a Personal Loan then you
                                        should a have a minimum Cibil Score of 750 and above. You can get a loan if your
                                        score is slightly below 750 but the interest rate on the loan will be high and you
                                        will not get a high loan amount. So, make sure you have a minimum Cibil Score of 750
                                        and above to apply for the Personal Loan from MyZeon.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">Personal Loan Repayment</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <p>There are multiple ways through which you can repay your Personal Loan. You can
                                        explore the loan repayment methods below:-</p>

                                    <ul class="pl-5">
                                        <li>ECS (Electronic Clearance System)</li>
                                        <li>PDCs (Post Dated Cheques)</li>
                                        <li>Standing Instructions</li>
                                        <li>Auto Debit from your Savings Account</li>
                                        <li>NACH (National Automated Clearing House)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- FAQs -->
    <section class="container-fluid">


        <div class="accordion mt-4 mb-4" id="accordionExample">
            <div class="heading-title mt-3 ml-3">
                <h3 class="mb-2 font-weight-bold " style="color: #1338be;">FAQs</h3>

                <div class="bar">&nbsp;</div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button  collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            1. Why Should I Get a Business Loan?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1761"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1"
                                role="region" aria-labelledby="elementor-tab-title-1761" style="display: block;">
                                <p>You should consider getting a business loan for several reasons:</p>
                                <p><strong>Capital Investment:</strong> It provides the necessary funds to start or
                                    expand your business, allowing you to purchase equipment, inventory, or hire
                                    additional staff.</p>
                                <p><strong>Cash Flow Management:</strong> A loan can help smooth out cash flow
                                    fluctuations, ensuring you have enough working capital to cover operational
                                    expenses, especially during slow periods.</p>
                                <p><strong>Expansion and Growth:</strong> If you’re looking to grow your business, a
                                    loan can be used to open new locations, enter new markets, or launch new products or
                                    services.</p>
                                <p><strong>Equipment and Technology Upgrades:</strong> Loans can be used to invest in
                                    updated technology and equipment, helping you stay competitive and efficient.</p>
                                <p><strong>Marketing and Advertising:</strong> Securing a loan can provide the necessary
                                    funds to implement effective marketing campaigns, helping you reach a wider audience
                                    and generate more revenue.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            2. Is Possible to Raise the Credit Limit for a Business Loan? </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1762"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="2"
                                role="region" aria-labelledby="elementor-tab-title-1762" style="display: block;">
                                <p>Yes, it is possible to raise the credit limit for a business loan. This can be
                                    achieved through several methods:</p>
                                <p><strong>Positive Payment History:</strong> Consistently making on-time payments for
                                    existing loans and credit lines can build trust with lenders, increasing the
                                    likelihood of a credit limit increase.</p>
                                <p><strong>Demonstrated Business Growth:</strong> Showing evidence of steady revenue and
                                    business growth can instill confidence in lenders and lead to a credit limit
                                    increase.</p>
                                <p><strong>Requesting a Review:</strong> Contacting your lender and formally requesting
                                    a credit limit increase is a common way to explore this possibility. Be prepared to
                                    provide updated financial information and a compelling case for the increase.</p>
                                <p><strong>Improved Credit Score:</strong> If your business’s credit score has improved
                                    since the initial loan was approved, it may be a strong indicator that you can
                                    handle a higher credit limit.</p>
                                <p><strong>Utilization Ratio:</strong> Maintaining a low utilization ratio (the amount
                                    of credit used compared to the total available) can signal responsible financial
                                    management and make a strong case for a credit limit increase.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            3. What Fees Would I Pay When the Loan Is Being Processed?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1763"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3"
                                role="region" aria-labelledby="elementor-tab-title-1763" style="display: block;">
                                <p>2.5% business loan fees refer to the cost associated with borrowing money for
                                    business purposes.It represents a percentage of the total loan amount that a lender
                                    charges as a fee for providing the funds.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingelv">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseelv" aria-expanded="false" aria-controls="collapseelv">
                           4. What Fees Would I Pay When the Loan Is Being Processed?
                        </button>
                    </h2>
                    <div id="collapseelv" class="accordion-collapse collapse" aria-labelledby="headingelv"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1764"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="4"
                                role="region" aria-labelledby="elementor-tab-title-1764" style="display: block;">
                                <p><strong>Business Plan:</strong> This outlines your business goals, financial
                                    projections, and strategies for growth.</p>
                                <p><strong>Personal Identification:</strong> Such as driver’s license or passport, to
                                    verify your identity.</p>
                                <p><strong>Business Registration Documents:</strong> These include your business
                                    license, articles of incorporation, or other legal paperwork.</p>
                                <p><strong>Financial Statements:</strong> Including balance sheets, income statements,
                                    and cash flow statements to demonstrate your business’s financial health.</p>
                                <p><strong>Tax Returns:</strong> Both personal and business tax returns for the past few
                                    years.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingtwe">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetwe" aria-expanded="false" aria-controls="collapsetwe">
                            5. What Paperwork Is Required When Applying for a Business Loan?
                        </button>
                    </h2>
                    <div id="collapsetwe" class="accordion-collapse collapse" aria-labelledby="headingtwe"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1765"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="5"
                                role="region" aria-labelledby="elementor-tab-title-1765" style="display: block;">
                                <p>Yes, offering security, such as collateral or a personal guarantee, can significantly
                                    increase your chances of being approved for a business loan. It provides the lender
                                    with a level of assurance that if you’re unable to repay the loan, they can recoup
                                    their losses by claiming the pledged asset. However, not all business loans require
                                    security. Some lenders offer unsecured loans, but they typically have stricter
                                    eligibility criteria and may come with higher interest rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingthir">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsethir" aria-expanded="false" aria-controls="collapsethir">
                            6. Do I Need to Offer Security to Be Approved for a Business Loan?
                        </button>
                    </h2>
                    <div id="collapsethir" class="accordion-collapse collapse" aria-labelledby="headingthir"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1765"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="5"
                                role="region" aria-labelledby="elementor-tab-title-1765" style="display: block;">
                                <p>Yes, offering security, such as collateral or a personal guarantee, can significantly
                                    increase your chances of being approved for a business loan. It provides the lender
                                    with a level of assurance that if you’re unable to repay the loan, they can recoup
                                    their losses by claiming the pledged asset. However, not all business loans require
                                    security. Some lenders offer unsecured loans, but they typically have stricter
                                    eligibility criteria and may come with higher interest rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfourt">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefourt" aria-expanded="false" aria-controls="collapsefourt">
                            7. Which Methods Are Available for Loan Repayment?
                        </button>
                    </h2>
                    <div id="collapsefourt" class="accordion-collapse collapse" aria-labelledby="headingfourt"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1766"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="6"
                                role="region" aria-labelledby="elementor-tab-title-1766" style="display: block;">
                                <p>There are several methods available for loan repayment, depending on the type of loan
                                    and the terms agreed upon with the lender. Here are some common methods:</p>
                                <p><strong>Standard Repayment Plan:</strong> This is the most straightforward method
                                    where you make fixed monthly payments over the life of the loan. The amount is
                                    calculated to ensure the loan is paid off within the agreed-upon term.</p>
                                <p><strong>Graduated Repayment Plan:</strong> Payments start lower and increase
                                    gradually, typically every two years. This is beneficial for individuals who expect
                                    their income to increase over time.</p>
                                <p><strong>Income-Driven Repayment Plans:</strong> These plans adjust your monthly
                                    payments based on your income and family size. Examples include:</p>
                                <ul style="list-style: disc;">
                                    <li>Income-Based Repayment (IBR)</li>
                                    <li>Pay As You Earn (PAYE)</li>
                                    <li>Revised Pay As You Earn (REPAYE)</li>
                                    <li>Income-Contingent Repayment (ICR)</li>
                                </ul>
                                <p><strong>Extended Repayment Plan:</strong> This plan allows you to extend the
                                    repayment period beyond the standard term, which can lower your monthly payments.
                                </p>
                                <p><strong>Income-Sensitive Repayment Plan:</strong> This is specific to Federal Family
                                    Education Loan (FFEL) Program loans. It adjusts your monthly payment based on your
                                    annual income.</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </section>

<!-- Add this modal at the end of your HTML body -->
<div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="thankYouModalLabel">Thank You!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your thank-you image or content here -->
          <img src="path/to/thank-you-image.jpg" alt="Thank You">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

    <!--  -->
    <!-- <section class="pb-5 jumbotron mb-0 mt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title">
                        <h3 class="mb-2 font-weight-bold " style="color: #1338be;">FAQs</h3>

                        <div class="bar">&nbsp;</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne"><button aria-expanded="false" class="collapsed"
                                    data-target="#collapseOne" data-toggle="collapse" type="button">Q1. How to Apply for
                                    a Personal Loan?</button></div>

                            <div aria-labelledby="headingOne" class="collapse" data-parent="#accordionExample"
                                id="collapseOne" style="">
                                <div class="card-body">
                                    <p>You can apply for the personal by filling out the form given above, You will just
                                        have to enter some of your basic contact details and our representative will get in
                                        touch with you on a call. You can even visit the bank&rsquo;s website or nearest
                                        branch and apply for a personal loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo"><button data-target="#collapseTwo"
                                    data-toggle="collapse" type="button">Q2. What is the minimum interest rate I can get
                                    on a Personal Loan?</button></div>

                            <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample"
                                id="collapseTwo">
                                <div class="card-body table-responsive">
                                    <p>The minimum interest rate offered by MyZeon is 10.25% per annum but make sure you
                                        fulfil all the eligibility criteria asked by MyZeon.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree"><button data-target="#collapseThree"
                                    data-toggle="collapse" type="button">Q3. What is the Maximum Personal Loan I can
                                    borrow?</button></div>

                            <div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample"
                                id="collapseThree">
                                <div class="card-body">
                                    <p>The maximum loan amount you can borrow is up to INR 1 Crore but you must have a high
                                        income and a Cibil Score to get this much amount of loan from us</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour"><button data-target="#collapseFour"
                                    data-toggle="collapse" type="button">Q4. I want a long loan tenure. What is the
                                    maximum loan tenure I can get?</button></div>

                            <div aria-labelledby="headingFour" class="collapse" data-parent="#accordionExample"
                                id="collapseFour">
                                <div class="card-body">
                                    <p>The maximum tenure offered on a personal loan is for 7 years which is 84 months. If
                                        you borrow a loan for a long tenure then it will reduce your EMI but you will have
                                        to pay a high amount of interest on the overall loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive"><button data-target="#collapseFive"
                                    data-toggle="collapse" type="button">Q5. What is a Personal Loan?</button></div>

                            <div aria-labelledby="headingFive" class="collapse" data-parent="#accordionExample"
                                id="collapseFive">
                                <div class="card-body">
                                    <p>A personal loan is an unsecured debt given to an individual having a high Cibil Score
                                        and a high income.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSix"><button data-target="#collapseSix"
                                    data-toggle="collapse" type="button">Q6. Can I apply for a Personal Loan without
                                    ITR?</button></div>

                            <div aria-labelledby="headingSix" class="collapse" data-parent="#accordionExample"
                                id="collapseSix">
                                <div class="card-body">
                                    <p>Yes, you can apply for a personal loan without ITR but you will need to submit other
                                        income documents like Salary Slip or bank statement to get the personal loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeven"><button data-target="#collapseSeven"
                                    data-toggle="collapse" type="button">Q7. Can I apply for two personal loans?</button>
                            </div>

                            <div aria-labelledby="headingSeven" class="collapse" data-parent="#accordionExample"
                                id="collapseSeven">
                                <div class="card-body">
                                    <p>Yes, you can apply for two personal loans at a time but make sure that you have a
                                        limit to apply for another loan over your existing loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEight"><button data-target="#collapseEight"
                                    data-toggle="collapse" type="button">Q8. What is the minimum income needed to apply
                                    for a personal loan?</button></div>

                            <div aria-labelledby="headingEight" class="collapse" data-parent="#accordionExample"
                                id="collapseEight">
                                <div class="card-body">
                                    <p>If you are living in a non-metro city then you will need a minimum salary of INR
                                        15000 per month and you will need a minimum salary of INR 20000 per month if you are
                                        living in a metro city.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingNine"><button data-target="#collapseNine"
                                    data-toggle="collapse" type="button">Q9. Do I have to mortgage anything for the
                                    Personal Loan?</button></div>

                            <div aria-labelledby="headingNine" class="collapse" data-parent="#accordionExample"
                                id="collapseNine">
                                <div class="card-body">
                                    <p>No, you don&rsquo;t have to mortgage anything to apply for a personal loan because
                                        personal loans are unsecured loans and they are offered on the basis of your income
                                        and credit score.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTen"><button data-target="#collapseTen"
                                    data-toggle="collapse" type="button">Q10. Can I Apply for a Personal Loan without
                                    salary slips?</button></div>

                            <div aria-labelledby="headingTen" class="collapse" data-parent="#accordionExample"
                                id="collapseTen">
                                <div class="card-body">
                                    <p>Yes, you can apply for a personal loan without salary slips but you will have to
                                        submit other supporting documents like your bank statement or ITR of the current
                                        year.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingelv"><button data-target="#collapseelv"
                                    data-toggle="collapse" type="button">Q11. What is the minimum Cibil Score Required
                                    for a Personal Loan?</button></div>

                            <div aria-labelledby="headingelv" class="collapse" data-parent="#accordionExample"
                                id="collapseelv">
                                <div class="card-body">
                                    <p>You will need a minimum Cibil Score of 750 and above to get easy approval and quick
                                        disbursal of the personal loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">Q12. How much loan can I get in a 20K
                                    salary?</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <p>The amount of loan that will be disbursed depends on the lending institution and it
                                        is not fixed. The bank will check your income and credit score before deciding on
                                        the final disbursal amount.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">Q13. What would be the EMI on INR 4 Lakhs loan
                                    for 3 years?</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <p>If we calculate the EMI at an interest rate of 10.25% on INR 4 Lakhs for 3 years then
                                        it will be INR 12,954 per month.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">Q14. Why my Personal Loan Application has been
                                    rejected?</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <p>The main reason for the personal loan application rejection is that you are not
                                        qualifying the eligibility criteria for the personal loan. Either your income is
                                        low, your age is below 21, or you have a Cibil Score of below 750 and that is why
                                        your personal loan application has been rejected.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">15. The bank considers the following things
                                    before disbursing a personal loan:-</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <ul>
                                        <li>Age of the Applicant</li>
                                        <li>Documents</li>
                                        <li>Monthly Income</li>
                                        <li>Credit Score</li>
                                        <li>Credit History</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <script>
  $('#demo').steps({
    onFinish: function () { alert('Thank you for filling out your information!'); }
    
  });
</script>

<!-- steps -->
<script>
    //step1
    var frmContact = $('#frmContact');
    var frmContactValidator = frmContact.validate();

    //step2
    var frmIncome = $('#frmIncome');
    var frmIncomeValidator = frmIncome.validate();

    //step3
    var frmBank = $('#frmBank');
    var frmBankValidator = frmBank.validate();

    //step4
    var frmEmployment = $('#frmEmployment');
    var frmEmploymentValidator = frmEmployment.validate();

    //step5
    var loanApplicationForm = $('#loanApplicationForm');
    var loanApplicationFormValidator = loanApplicationForm.validate();

    //step6 desiredAmount
    var desiredAmount = $('#desiredAmount');
    var desiredAmountValidator = desiredAmount.validate();

    //step7 frmPersonalLoan
    var loanForm = $('#loanForm');
    var loanFormValidator = loanForm.validate();

    $('#demo').steps({
        onChange: function (currentIndex, newIndex, stepDirection) {

            
            // step1
            if (currentIndex === 0) {
                   
            
                if (stepDirection === 'forward') {
                    return frmContact.valid();
                }
                if (stepDirection === 'backward') {
                    frmContactValidator.resetForm();
                }

                
            }
            // step2
            if (currentIndex === 1) {
                if (stepDirection === 'forward') {
                    return frmIncome.valid();
                }
                if (stepDirection === 'backward') {
                    frmIncomeValidator.resetForm();
                }
            }

            // step3
            if (currentIndex === 2) {
                if (stepDirection === 'forward') {
                    return frmBank.valid();
                }
                if (stepDirection === 'backward') {
                    frmBankValidator.resetForm();
                }
            }
            // step4
            if (currentIndex === 3) {
                if (stepDirection === 'forward') {
                    return frmEmployment.valid();
                }
                if (stepDirection === 'backward') {
                    frmEmploymentValidator.resetForm();
                }
            }
            // step5
            if (currentIndex === 4) {
                if (stepDirection === 'forward') {
                    return loanApplicationForm.valid();
                }
                if (stepDirection === 'backward') {
                    loanApplicationFormValidator.resetForm();
                }
            }

//step6 desiredAmount
if (currentIndex === 5) {
                if (stepDirection === 'forward') {
                    return desiredAmount.valid();
                }
                if (stepDirection === 'backward') {
                    desiredAmountValidator.resetForm();
                }
            }

            //step7 frmPersonalLoan
if (currentIndex === 6) {
                if (stepDirection === 'forward') {
                    return loanForm.valid();
                }
                if (stepDirection === 'backward') {
                    loanFormValidator.resetForm();
                }
            }


            return true;
        },
        onFinish: function () {
            alert('Thankyou! Your submission has been sent');
        }
    });
</script>
<!--  -->

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        $("#personal-loan-button").click(function () {

            var formData = new FormData($("#personal-loan")[0]);
            formData.forEach(element => {
                console.log(formData);

            });

            $.ajax({
                method: 'post',
                dataType: 'json',
                url: "{{ route('create-personal-loan') }}",
                processData: false,
                contentType: false,
                data: formData,
                success: function (data) {
                    if (data.success == true) {
                        $(".text-danger").html('').hide();
                        $("#success").html('');
                        $("#success").html(
                            '<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2"><div class="d-flex align-items-center"><div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div><div class="ms-3"><h6 class="mb-0 text-success">' +
                            data.msg +
                            '</h6></div></div><button type="button" class="btn-close" id="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                        );
                        $('#personal-loan')[0].reset();

                    }

                    if (data.success == false) {
                        $(".text-danger").html('').hide();
                        for (control in data.errors) {
                            $('#error-' + control.split('.').join("")).show().html(data.errors[
                                control]);
                        }
                    }
                }
            });
        });


        $("#compare_button").click(function () {
            var bank_name = $("[name='bank_name[]']").val();
            if (bank_name != '') {
                var formData = new FormData($("#compare-loan")[0]);
                $.ajax({
                    method: 'post',
                    url: "{{ route('compare-interest-rate') }}",
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function (data) {
                        $("#tab").show().html(data);
                    }
                });
            } else {
                alert("Please Select Bank");
            }
        });

        /*business loan hide show div code here */
        $(document).ready(function () {
            $(".hidediv").hide();
            $("#city").keypress(function () {
                //alert();
                $("#showdiv").show();
                $("#hidediv").removeClass();
            });
        });
    </script>
    <!-- <script>

        $("#employmentType").on('change',function(){

            var emptype=  $("#employmentType").val();
            console.log("channgeggggggggggggg"+emptype);
            if (this.employmentType === 'salaried') {
                this.loanTypes = ['Professional Loan', 'Business Loan'];
            } else if (this.employmentType === 'businessOwner') {
                this.loanTypes = ['Business Loan'];
            } else if (this.employmentType === 'selfEmployedProfessional') {
                this.loanTypes = ['Professional Loan', 'Business Loan'];
            }
            this.loanType = this.loanTypes[0];
        
        });

        function updateLoanTypes() {
            if (this.employmentType === 'salaried') {
                this.loanTypes = ['Professional Loan', 'Business Loan'];
            } else if (this.employmentType === 'businessOwner') {
                this.loanTypes = ['Business Loan'];
            } else if (this.employmentType === 'selfEmployedProfessional') {
                this.loanTypes = ['Professional Loan', 'Business Loan'];
            }
            this.loanType = this.loanTypes[0];
        }
    </script> -->

    <script>
        $(document).ready(function () {
            $('.carousel1').owlCarousel({
                loop: true,

                margin: 50,

                nav: false,

                dots: false,

                autoplay: true,

                autoplayTimeout: 1000,

                smartSpeed: 4000,

                responsive: {

                    0: {

                        items: 1,

                    },

                    600: {

                        items: 3,

                    },

                    1000: {

                        items: 4,

                    },

                },
            });
        });
    </script>


    <script>
        function buttonSumbitMobileNoClick(mobileno, checkbok) {
            console.log("button click" + mobileno + checkbok);

            if (mobileno !== '' && mobileno !== undefined && mobileno !== null) {
                console.log("call if");

            } else {
                console.log("call else");

            }

            // if (!mobileno == "") {
            //     const isValidMobileNumber = validateMobileNumber(mobileno);

            //     // $("#errorMessage").text("Enter Valid Mobile Number");
            //     if (isValidMobileNumber) {
            //         console.log("valid mobiel nooooooooooooooooooooooooooooooo1");
            //         $("#errorMessage").hide();

            //     } else {

            //         console.log(" not els valid valid mobiel nooooooooooooooooooooooooooooooo");
            //         $("#errorMessage").show();
            //         $("#errorMessage").text("Enter Valid Mobile Number");

            //     }



            // } else {
            //     console.log(" not else empty blank valid mobiel nooooooooooooooooooooooooooooooo");
            //     $("#errorMessage").show();
            //     $("#errorMessage").text("Enter Valid Mobile Number");

            // }

        }

        //    $("#buttonSumbitMobileNo").on('click',function(){

        //     console.log("button click");
        //    });
    </script>
    <script>
        // isFormSubmitted = this.isFormSubmitted
        let isFormSubmitted = false;

        function validateMobileNumber(mobileNoGet) {
            console.log("mobile no:" + mobileNoGet);
            const indianMobileNumberRegex = /^\d{10}$/;
            return indianMobileNumberRegex.test(mobileNoGet);
            //   return indianMobileNumberRegex.test(this.mobileNo);
        }

        function submitForm(event) {
            console.log("submit" + isFormSubmitted);

            if (isFormSubmitted) {
                return; // Prevent form submission if already submitted
            }

            isFormSubmitted = true; // Set submitted flag

            // Validate mobile number
            //   const isValidMobileNumber = this.validateMobileNumber();


            console.log("mobile number sumbit form" + this.mobileNo);

            const isValidMobileNumber = validateMobileNumber(this.mobileNo);

            const isMobileNumberEmpty = this.mobileNo === '';


            if (!isValidMobileNumber || isMobileNumberEmpty) {
                // Prevent form submission if mobile number is invalid or empty
                console.log("not corect");

                this.errorMessage = "Please Enter Valid Phone Number";
                isFormSubmitted = false;
                return;
            }

            // Submit the form data to the server
            console.log("Form submitted with valid Indian mobile number:", this.mobileNo);

            // Increment count and show next template

            this.errorMessage = "Please Enter Valid Phone Number";
            event.preventDefault();
            this.count++;

            isFormSubmitted = false;


            console.log("submit" + this.isFormSubmitted);
        }
    </script>

    <script>
        function submitFormPoneNo() {

            var termandconditon = this.termandconditon;
            var phoneNO = this.phoneNumber;
            var isValidMobile = this.isValidMobile;



            if (!this.termandconditon) {
                alert('You must agree to the terms and conditions to submit the form.');
                return;
            }

            const regex = /^[6789]\d{9}$/;
            if (regex.test(phoneNO)) {
                this.isValidMobile = true;
            } else {
                this.isValidMobile = false;

            }

            if (termandconditon === true && this.isValidMobile === true) {
                // this.count==1;

                // alert("can move next page");
                this.count == 1;


                // const makeAjaxRequest = async (url, data) => {
                //     try {
                //         const response = await fetch(url, {
                //         method: 'POST',
                //         headers: {
                //             'Content-Type': 'application/json',
                //         },
                //         body: JSON.stringify(data),
                //     });

                //     if (response.ok) {
                //     const

                //     responseBody = await response.json();
                //     console.log('AJAX response:', responseBody);
                //     } else {
                //     console.error('AJAX error:', response.statusText);
                //     }
                //     } catch (error) {
                //     console.error('AJAX error:', error);
                //     }
                // };



            }


        }

        // function validateMobileNumber() {
        // const indianMobileNumberRegex = /^\d{10}$/;
        // return indianMobileNumberRegex.test(this.mobileNo);
        // }
    </script>
    <script>
        //    function  submitForm() {

        //         console.log("enter here");
        //         if (!this.isValidMobile) {
        //         return; // Prevent form submission if mobile number is invalid
        //         }

        //         console.log("Form submitted with mobile number:", this.mobileNo);
        //     }

        const printMobileNo = () => {
            console.log(this.$data.mobileNo);
        };

        // function validateMobileNumber(mobileNo) {
        //     // Validate the mobile number against an Indian mobile number pattern
        //     const regex = /^[6789]\d{9}$/;
        //     if (regex.test(mobileNo)) {
        //         this.isValidMobile = true;
        //     } else {
        //         this.isValidMobile = false;
        //         errorMessage = 'Not Valid Number Please enter valid number'
        //     }
        //     updateButtonState();
        // }

        function updateButtonState() {
            this.isButtonDisabled = mobileNo.trim() === '' || !isValidMobile;
        }
    </script>

    <script>
        function ValidateMobileNo() {

            console.log("enter here");


            const form = document.getElementById('myForm');
            // form.submit();


            form.addEventListener('submit', (event) => {

                event.preventDefault(); // Prevent default form submission

                // Perform additional validation or processing here

                // Manually submit the form
                console.log("form sumbit successssaafully");
                // form.submit();

            });

        }

        function checkMobileNoValidation(mobileNoGet) {
            // console.log("go for checking");
            console.log("mobile no" + mobileNoGet.mobileNo);

            var mobileNo = mobileNoGet.mobileNo;

            const regex = /^[6789]\d{9}$/;
            if (regex.test(mobileNo)) {
                this.isValidMobile = true;
            } else {
                this.isValidMobile = false;

            }

            if (isValidMobile === true) {
                console.log('validate number');
            } else {
                console.log("not valid number");

            }

        }


        // window.livewire.on('formSubmitted', () => {
        //     this.submitted = true;
        // });

        // function submitForm() {
        //     // Here, you can send the form data to the server using an API request or perform any other action
        //     // For demonstration, we'll just show the submitted data
        //     // console.log(this.formData);
        //     console.log("ente hre ");
        //     // this.submitted = true;
        // }

        function submitFormPhoneNomber(mobileNo) {

            console.log("phone number submiteed" + mobileNo);

            const regex = /^[6789]\d{9}$/;
            if (regex.test(mobileNo)) {
                this.isValidMobile = true;
            } else {
                this.isValidMobile = false;
                errorMessage = 'Please enter valid number';

            }

            if (isValidMobile === true) {
                console.log('validate number');
            } else {
                console.log("not valid number");

            }


            //   console.log($refs.mobileNo.text?"yes":"no");




            // const form = this.$refs.submitButton.form;
            // const mobileNumber = form.elements.mobileNo.value;
            // console.log("mobileNo:"+mobileNumber);


        }
    </script>

    <script>

        function submitFormTest() {

            console.log("enter file here");
        }
    </script>
    @endsection