{{-- @extends('front_end_layout.home') --}}
@extends('front_end_layout.personal_loan_header')
@push('personalLoanStyle')
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
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

    <style>
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #2F8D46
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #step1:before {
            content: "1"
        }

        #progressbar #step2:before {
            content: "2"
        }

        #progressbar #step3:before {
            content: "3"
        }

        #progressbar #step4:before {
            content: "4"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #2F8D46
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #2F8D46
        }
    </style>
@endpush

@push('personalLoanScripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
            color: red;
        }

        .headingdescription {
            color: red;
            padding-bottom: 5px;

        }


        .personalBanner {
            width: 100%;
            height: 40%;
        }

        .bannerButton {
            margin-top: -200px
        }

        .headingMain {
            color: #1338be;
        }
    </style>

    <section id="sectionForMessage" class="jumbotron my-8" style="background-color: white;">
        <div class="row personaloan-header" style="height:350px;">
            <!-- <div>
                                <a class="btn btn-primary btn-outline btn-lg text-center" href="#Compare" role="button">Compare your
                                    Loan</a>
                                <a href="#startYourJourney" class="btn btn-outline btn-primary text-center">Start Your Jounery</a>
                            </div> -->

            <div class="col-md-4">
                <img class="personalLoanImage" src="{{ asset('assets/images/web_img/personal_loan.png') }}"
                    style="height: 100%;margin-right:10px">
            </div>

            <div class="col-md-8 ">
                {{-- <h1 class="headingMain text-3xl font-bold mt-5">Personal Loan</h1> --}}
                <h1 class="font-family-josefin-sans text-3xl font-bold headingMain">Personal Loan</h1>

                <div class="bar">&nbsp;</div>

                {{-- <p class="font-family-merriweather text-base leading-6">
                    This is a paragraph in Merriweather font
                </p> --}}

                <h6 class="text-1xl font-bold text-blue-600 " style="text-align: justify; line-height:2.5rem ; ">

                    A personal loan can be a great way to consolidate debt, pay for
                    home renovations, or finance a large purchase. But with so many different lenders and loan options
                    available, it
                    can be tough to know where to start.
                    This guide will walk you through everything you need to know about personal loans, including how to
                    apply, what
                    to look for in a lender,
                    and how to get the best interest rate.
                    A personal loan can be a great way to consolidate debt, pay for
                    home renovations, or finance a large purchase. But with so many different lenders and loan options
                    available, it
                    can be tough to know where to start.
                    This guide will walk you through everything you need to know about personal loans, including how to
                    apply, what
                    to look for in a lender,
                    and how to get the best interest rate.
                </h6>

                {{-- <h2 class="font-family-playfair-display text-4xl font-bold">This is a heading in Playfair Display font</h2> --}}

                <!-- <div class="flex flex-row justify-content-center align-items-center ">
                                    <div class="bg-blue-500 w-1/2 h-10 text-center paddingtop font-family-merriweather text-base leading-6">
                                        Get a personal loan in quick time</div>
                                    <div class="bg-blue-500 w-1/2 h-10 text-center paddingtop font-family-merriweather text-base leading-6">
                                        Apply online for a Personal Loan</div>
                                    <div class="bg-blue-500 w-1/2 h-10 text-center paddingtop font-family-merriweather text-base leading-6">
                                        Personal Loan for your every need</div>
                                </div> -->

            </div>

        </div>
    </section>

    <div class="jumbotron jumbotron-fluid" style="margin-top: 90px;">
        <div class="container">

            <p style="color: #1338be" class="font-family-playfair-display text-4xl font-bold text-center">Compare and Apply
                Instantly
                for Personal Loan at Lowest Interest Rate</p>
            <div class="container"
                style="
                    width: 1220px;
                    padding: 0 40px 0 40px;
                    overflow: hidden;
                    ">

                <div class="owl-carousel carousel1">
                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Yes_Bank_SVG_Logo.png') }}"
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

                    <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Yes_Bank_SVG_Logo.png') }}"
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
                    <!-- Add more slides as needed -->
                </div>

            </div>

        </div>
    </div>




    <section class="banner-img1 sectiontable" style="background-color: white;margin-top:0px">
        <div class="container-fluid">

            <h1 class="text-center mb-4" style="color:#1338be;font-weight: 600;">Know About More Loans</h1>
            <p class="text-1xl ml-3 font-bold text-blue-600" style="text-align: justify; line-height: 2.5rem;">
                Personal Loans are the lenders of the last resort when you fall into any type of financial emergency whether
                you are going for a house renovation or dealing with some medical issues. Ultimately, all matters are the
                funds you have to deal with the financial issues. A personal loan at a low interest rate can be the cherry
                on the cake to deal with such problems. Therefore, MyZeon offers personal loans at a starting interest rate
                of 10.25% per annum and for a tenure of up to 7 years. It is better to compare all the details of a loan in
                one place rather than wandering around from bank to bank.
                Here you can have a look at the personal loan details offered by different banks and NBFCs.
            </p>

            <div class="row">

                <div class="col-md-12 p-5">

                    <div class="row  gx-5 mb-5">

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 18rem;">
                                <div class="card-body">

                                    <h5 class="card-title heading-card">Business Loan</h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                                            "A Business Loan can assist businesses in real time and help them overcome minor and major obstacles. Business and economics are constantly changing, and while the competition is becoming more and more intense, opportunities are forever expanding. Innovative thinking and new ideas have immense potential for both established and new businesses if acted upon and realised. But, only some end up capitalising on their business ideas as they get caught up in managing their finances. During such times, a timely capital infusion into your company allows you to open the doors of possibility and enable you to deal with any hurdles on the way to success. 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Today, the ease with which business funding is available with Banks and NBFCs.",
                                            200,
                                        ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/business-loan" class="btn btn-primary">Know More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 18rem;">

                                <div class="card-body">
                                    <h5 class="card-title heading-card">Home Loan </h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                                            "A house is a big financial decision, and a home loan plays an important role. A Home Loan loan is useful in getting a lump sum amount for the house purchase. Based on your repayment capacity, property value and many other factors, the bank provides you with a home loan amount. And you don't need to hurry to pay off the borrowed amount, as there is a long tenure from 10-30 years. 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              This article will help you understand the Home Loan and how it can help you buy a house.",
                                            200,
                                        ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/home-loan" class="btn btn-primary">Know More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 18rem;">

                                <div class="card-body">
                                    <h5 class="card-title heading-card">Car Loan</h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                                            "Getting a car is still a dream for many, and a car loan will help you fulfil your dream. The prices of new cars might keep your dreams in the back seat. But not anymore; with the growing market of cars, many banks and NBFCs provide car loans to prospective buyers. 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    This way, it is more affordable for new car owners to get the desired car they want under their budget.",
                                            210,
                                        ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/car-loan" class="btn btn-primary">Know More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 18rem;">

                                <div class="card-body">
                                    <h5 class="card-title heading-card">Loan Against Property</h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                                            "A loan against property (LAP) is a secured loan designed to cater to your urgent financial need. In this, your property is pledged as security with the bank. You can apply for a loan against property to meet personal or business requirements.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    There is no restriction on how the borrower uses the funds. Hence, you are free to use a LAP for various purposes.",
                                            220,
                                        ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/loan-against-property" class="btn btn-primary">Know
                                        More</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>




                <div class="row mb-4">
                    <!-- change by mannu bg color  style="background-color: #DDFFFC;"-->
                    <div class="card" style="margin-left: 10px;">
                        <div class="card-body">


                            <section id="startYourJourney">

                                <h1 class="text-3xl font-bold text-primary-600 mt-4 text-center font-family-merriweather">
                                    Start Your Journey</h1>

                                <div x-show="submitted">
                                    <!-- <p>Form submitted with the following data:</p> -->
                                    {{-- <ul>
                                            <li><strong>Name:</strong> <span x-text="formData.name"></span></li>
                                            <li><strong>Email:</strong> <span x-text="formData.email"></span></li>
                                        </ul> --}}
                                </div>

                                <div x-data="{
                                    count: 0,
                                    yearlyIncome: '',
                                    selectedOption: '',
                                    options: [
                                        { label: 'Option 1', value: 1 },
                                        { label: 'Option 2', value: 2 },
                                        { label: 'Option 3', value: 3 },
                                    ],
                                    selectedOptions: [],
                                    mobileNo: '',
                                    salaryAccount: '',
                                    btnMessageNext: 'Next',
                                    btnMessagePrevious: 'Previous',
                                    btnMessageEmpty: '',
                                    isButtonDisabled: true,
                                
                                    errorMessage: '',
                                    {{-- init() { this.submitFormPhoneNomber(mobileNo); --}}
                                    termandconditon: 'false',
                                    phoneNumber: '',
                                
                                    isValidMobile: false,
                                
                                
                                }">


                                    <p x-text = "errorMessage ">this is test file</p>

                                    <h2 id="errorMessage"></h2>


                                    <ul id="progressbar">
                                        <li class="active" id="step1">
                                            <strong>Step 1</strong>
                                        </li>
                                        <li id="step2"><strong>Step 2</strong></li>
                                        <li id="step3"><strong>Step 3</strong></li>
                                        <li id="step4"><strong>Step 4</strong></li>
                                    </ul>

                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div> <br>


                                    <form x-on:submit.prevent="submitForm" style="text-align: center;">
                                        @csrf
                                        <template x-if="count === 0" class="mt-4">
                                            <div>
                                                <div class="form-group">
                                                    <label for="lableMobileNumber"
                                                        class="text-gray-700 font-medium block mb-2">Enter Mobile
                                                        Number</label>

                                                    <!-- <input type="number" class="form-control" id="idPhoneNumber"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="Please Enter Mobile Number" x-model="mobileNo"
                                                                        style="width: 50%" /> -->
                                                    <div class="row justify-content-center align-items-center">

                                                        <input type="number" class="form-control mx-auto my-4"
                                                            id="idPhoneNumber" aria-describedby="emailHelp"
                                                            placeholder="Please Enter Mobile Number" x-model="mobileNo"
                                                            style="width: 50%; text-align: center;">

                                                    </div>
                                                    <p x-show="!isValidMobile" class="text-red-500">Please enter a valid
                                                        mobile number.</p>
                                                    <input type="checkbox" style="margin-right: 5px;margin-top:10px"
                                                        x-model="termandconditon"><span class="mt-4">By submitting this
                                                        form, you have read and agree to the Credit Report Terms of Use,
                                                        Terms of Use & Privacy Policy</span>
                                                    <small id="emailHelp" class="form-text text-muted ">We'll never share
                                                        your email with anyone else.</small>
                                                </div>
                                            </div>
                                        </template>
                                        {{--                                   
                                    <button type="submit">Submit form</button> --}}
                                        <!-- comment by mannu -->
                                        <!-- <button type="button" id="buttonSumbitMobileNo"
                                                            x-on:click="buttonSumbitMobileNoClick(mobileNo, termandconditon)">Submit Mobile
                                                            Number</button> -->
                                    </form>




                                    {{-- <template x-if="count === 0" class="mt-4">
                                            <div>
                                                <div class="form-group">
                                                    <label for="lableMobileNumber"
                                                        class="text-gray-700 font-medium block mb-2">Enter
                                                        Mobile Number</label>
                                                    <p x-show="!isValidMobile" class="text-red-500">Please enter a valid
                                                        mobile number.</p>
                                                    <input type="number" class="form-control" id="idPhoneNumber"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Please Enter Mobile Number" x-model="mobileNo"
                                                        style="width: 50%"
                                                         >

                                                    <input type="checkbox" style="margin-right: 5px;margin-top:10px"><span
                                                        class="mt-4">By submitting this form, you have read
                                                        and agree to the
                                                        Credit Report Terms of Use, Terms of Use & Privacy Policy</span>
                                                    <small id="emailHelp" class="form-text text-muted ">We'll never share
                                                        your
                                                        email
                                                        with
                                                        anyone else.</small>

                                                </div>

                                            </div>

                                        </template> --}}

                                    <template x-if="count === 1">
                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Do you have Business Proof </label>



                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome1"
                                                        name="yearlyIncome" value="25001-50000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome1" class="form-check-label">Yes
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome2"
                                                        name="yearlyIncome" value="50001-100000"
                                                        x-model="yearlyIncome" />
                                                    <label for="yearlyIncome2" class="form-check-label">No
                                                    </label>
                                                </div>




                                            </div>
                                        </div>
                                    </template>

                                    <!-- 2 -->

                                    <template x-if="count === 2">
                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">How old is your business </label>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome0"
                                                        name="yearlyIncome" value="0-25000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome0" class="form-check-label"> 0 to 3
                                                        Months</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome1"
                                                        name="yearlyIncome" value="25001-50000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome1" class="form-check-label"> 6 Months to 1
                                                        Year </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome2"
                                                        name="yearlyIncome" value="50001-100000"
                                                        x-model="yearlyIncome" />
                                                    <label for="yearlyIncome2" class="form-check-label"> 1 to 5
                                                        Years</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label">More than 5
                                                        Years</label>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    <!-- end 2 -->


                                    <template x-if="count === 3">
                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Monthly Revenue </label>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome0"
                                                        name="yearlyIncome" value="0-25000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome0" class="form-check-label">0 - 25K</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome1"
                                                        name="yearlyIncome" value="25001-50000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome1" class="form-check-label">25K - 1 L</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome2"
                                                        name="yearlyIncome" value="50001-100000"
                                                        x-model="yearlyIncome" />
                                                    <label for="yearlyIncome2" class="form-check-label">1 - 2.5 L</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label">2.5 - 5 L</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label">5 - 8.5 L(More
                                                        than)</label>
                                                </div>


                                            </div>
                                        </div>
                                    </template>



                                    <template x-if="count === 4">
                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select Your Salary Bank Account </label>
                                                <select class="form-control form-control-lg" x-model= "salaryAccount">
                                                    <option value="HDFC Bank ">HDFC Bank </option>
                                                    <option value="Andhra Bank ">Andhra Bank </option>
                                                    <option value="Axis Bank ">Axis Bank </option>
                                                    <option value="Bank of Baroda ">Bank of Baroda </option>
                                                    <option value="Bank of India ">Bank of India </option>
                                                    <option value="Bank of Maharasthra ">Bank of Maharasthra </option>
                                                    <option value="Bank of Rajasthan ">Bank of Rajasthan </option>
                                                    <option value="Canara Bank ">Canara Bank </option>
                                                    <option value="Catholic Syrian Bank ">Catholic Syrian Bank </option>
                                                    <option value="Central Bank of India ">Central Bank of India </option>
                                                    <option value="Citibank ">Citibank </option>
                                                    <option value="Corporation bank ">Corporation bank </option>
                                                    <option value="DBS ">DBS </option>
                                                    <option value="Dena Bank ">Dena Bank </option>
                                                    <option value="Deutsche Bank ">Deutsche Bank </option>
                                                    <option value="Dhanalakshmi Bank Ltd ">Dhanalakshmi Bank Ltd </option>
                                                    <option value="Federal Bank ">Federal Bank </option>
                                                    <option value="HSBC Bank ">HSBC Bank </option>
                                                    <option value="ICICI Bank ">ICICI Bank </option>
                                                    <option value="IDBI Bank ">IDBI Bank </option>
                                                    <option value="IDFC Bank ">IDFC Bank </option>
                                                    <option value="ING Vysya Bank ">ING Vysya Bank </option>
                                                    <option value="Indian Bank ">Indian Bank </option>
                                                    <option value="Indian Overseas Bank ">Indian Overseas Bank </option>
                                                    <option value="IndusInd Bank ">IndusInd Bank </option>
                                                    <option value="J&amp;K Bank ">J&amp;K Bank </option>
                                                    <option value="Karnataka Bank ">Karnataka Bank </option>
                                                    <option value="Karur Vysya Bank ">Karur Vysya Bank </option>
                                                    <option value="Kotak Bank ">Kotak Bank </option>
                                                    <option value="Lakshmi Vilas bank ">Lakshmi Vilas bank </option>
                                                    <option value="Oriental Bank of Commerce ">Oriental Bank of Commerce
                                                    </option>
                                                    <option value="Punjab &amp; Sind bank ">Punjab &amp; Sind bank
                                                    </option>
                                                    <option value="Punjab National Bank ">Punjab National Bank </option>
                                                    <option value="RBL Bank Ltd ">RBL Bank Ltd </option>
                                                    <option value="SBM bank ">SBM bank </option>
                                                    <option value="Saraswat Bank ">Saraswat Bank </option>
                                                    <option value="South Indian Bank ">South Indian Bank </option>
                                                    <option value="Standard Chartered Bank ">Standard Chartered Bank
                                                    </option>
                                                    <option value="State Bank of Bikaner &amp; Jaipur ">State Bank of
                                                        Bikaner &amp;
                                                        Jaipur </option>
                                                    <option value="State Bank of Hyderabad ">State Bank of Hyderabad
                                                    </option>
                                                    <option value="SBI(State Bank of India )">SBI(State Bank of India )
                                                    </option>
                                                    <option value="State Bank of Indore ">State Bank of Indore </option>
                                                    <option value="State Bank of Mysore ">State Bank of Mysore </option>
                                                    <option value="State Bank of Patiala ">State Bank of Patiala </option>
                                                    <option value="State Bank of Travancore ">State Bank of Travancore
                                                    </option>
                                                    <option value="Syndicate Bank ">Syndicate Bank </option>
                                                    <option value="Tamil Nadu Mercantile Bank ">Tamil Nadu Mercantile Bank
                                                    </option>
                                                    <option value="UCO Bank ">UCO Bank </option>
                                                    <option value="Union Bank of India ">Union Bank of India </option>
                                                    <option value="United Bank of India ">United Bank of India </option>
                                                    <option value="Vijaya Bank ">Vijaya Bank </option>
                                                    <option value="Yes Bank ">Yes Bank </option>
                                                </select>

                                                <small id="emailHelp" class="form-text text-muted">We'll never share your
                                                    email
                                                    with anyone else.</small>
                                            </div>
                                        </div>

                                    </template>


                                    <template x-if="count === 5">
                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Please Provide Your Employment Detail
                                                </label>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome0"
                                                        name="yearlyIncome" value="0-25000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome0" class="form-check-label">Owned by Self /
                                                        Spouse</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome1"
                                                        name="yearlyIncome" value="25001-50000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome1" class="form-check-label">Owned by Parents /
                                                        Siblings</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome2"
                                                        name="yearlyIncome" value="50001-100000"
                                                        x-model="yearlyIncome" />
                                                    <label for="yearlyIncome2" class="form-check-label">Rented with
                                                        Family</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label">Rented with
                                                        Friends</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label">Paying Guest /
                                                        Hostel
                                                        Company provided</label>
                                                </div>


                                            </div>
                                        </div>

                                    </template>



                                    <template x-if="count === 6">

                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">
                                                    Desired Loan Amount
                                                </label>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome0"
                                                        name="yearlyIncome" value="0-25000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome0" class="form-check-label">Upto ₹1
                                                        Lac</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome1"
                                                        name="yearlyIncome" value="25001-50000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome1" class="form-check-label">₹1 - ₹3
                                                        Lacs</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome2"
                                                        name="yearlyIncome" value="50001-100000"
                                                        x-model="yearlyIncome" />
                                                    <label for="yearlyIncome2" class="form-check-label">₹3 - ₹5
                                                        Lacs</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label"> ₹5 - ₹7 Lacs
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label"> ₹7 - ₹10
                                                        Lacs</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label"> ₹10 -
                                                        ₹20Lacs</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label"> ₹20 -
                                                        ₹50Lacs</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label"> ₹50Lacs +</label>
                                                </div>

                                            </div>
                                        </div>form-control form-control-lg
                                    </template>

                                    <!-- <template x-if="count === 7">
                                                        <div>
                                                            <div class="form-group">

                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        Your Response is Successfully Submitted..
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Empower yourself by choosing the bank that
                                                                            aligns
                                                                            perfectly with your financial goals.
                                                                            Our platform allows you to handpick the ideal bank for securing
                                                                            your
                                                                            loan, ensuring your aspirations are met with tailored solutions.
                                                                        </h5>
                                                                        <p class="card-text">
                                                                        <h3>Select Bank of Your Choice for Your Loan</h3>
                                                                        </p>
                                                                        <select class="form-control form-control-lg"
                                                                            x-model="selectedOptions" multiple>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>

                                                                        </select>
                                                                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </template> -->


                                    <!-- <template x-if="count === 8">
                                                        <div>
                                                            <div class="form-group">

                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        Detail Form For Personal Loan
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Please Fill All Detail For Personal loan
                                                                        </h5>
                                                                        <p class="card-text">
                                                                        <h3>Select Bank of Your Choice for Your Loan</h3>
                                                                        </p>

                                                                        {{-- <form> --}}

                                                                        <div x-data="{
                                                                            fullName: '',
                                                                            phoneNumber: '',
                                                                            loanAmount: '',
                                                                            email: '',
                                                                            panCard: '',
                                                                            dob: '',
                                                                            pincode: '',
                                                                            city: '',
                                                                            address: '',
                                                                            employmentType: 'salaried',
                                                                            loanTypes: ['Professional Loan', 'Business Loan'],
                                                                            loanType: 'Professional Loan',
                                                                            bank: '',
                                                                        
                                                                        
                                                                        }">

                                                                            <div class="container mt-5">
                                                                                {{-- <form id="loanApplicationForm"
                                                                     > --}}
                                                                                <div class="mb-3">
                                                                                    <label for="fullName" class="form-label">Full
                                                                                        Name</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="fullName" v-model="fullName" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="phoneNumber" class="form-label">Phone
                                                                                        Number</label>
                                                                                    <input type="tel" class="form-control"
                                                                                        id="phoneNumber" v-model="phoneNumber" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="loanAmount" class="form-label">Desired
                                                                                        Loan Amount</label>
                                                                                    <input type="number" class="form-control"
                                                                                        id="loanAmount" v-model="loanAmount" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="email" class="form-label">Email</label>
                                                                                    <input type="email" class="form-control"
                                                                                        id="email" v-model="email" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="panCard" class="form-label">PAN
                                                                                        Card</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="panCard" v-model="panCard" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="dob" class="form-label">Date
                                                                                        of
                                                                                        Birth</label>
                                                                                    <input type="date" class="form-control"
                                                                                        id="dob" x-model="dob" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="pincode"
                                                                                        class="form-label">Pincode</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="pincode" v-model="pincode" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="city" class="form-label">City</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="city" v-model="city" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="address"
                                                                                        class="form-label">Address</label>
                                                                                    <textarea class="form-control" id="address" rows="3" v-model="address" required></textarea>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="employmentType"
                                                                                        class="form-label">Employment Type</label>
                                                                                    <select class="form-select" id="employmentType"
                                                                                        v-model="employmentType">
                                                                                        <option value="salaried">Salaried</option>
                                                                                        <option value="businessOwner">Business
                                                                                            Owner
                                                                                        </option>
                                                                                        <option value="selfEmployedProfessional">
                                                                                            Self-Employed Professional</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="loanType" class="form-label">Loan
                                                                                        Type</label>
                                                                                    <select class="form-select" id="loanType"
                                                                                        v-model="loanType" required>
                                                                                        {{-- <option v-for="type in loanTypes" :value="type">{{ type }}</option> --}}
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="bank" class="form-label">Choose
                                                                                        Bank</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="bank" v-model="bank" required>
                                                                                </div>
                                                                                {{-- <button type="submit"
                                                                            class="btn btn-primary">Submit</button> --}}
                                                                                {{-- </form> --}}
                                                                            </div>

                                                                        </div>

                                                                        {{-- </form> --}}
                                                                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </template> -->


                                    <div class="row">

                                        <div class="col-md-6">
                                            <button class="btn btn-primary" x-on:click="count--"
                                                x-show="count > 0">Previous</button>
                                        </div>
                                        <div class="col-md-6">

                                            <button class="btn btn-primary" x-on:click="count++"
                                                {{-- x-bind:disabled="true" --}}>Next</button>
                                        </div>

                                    </div>


                                    {{-- <button type="button" x-on:click = "ValidateMobileNo()">Click For Submitt</button> --}}

                                </div>

                            </section>

                        </div>
                    </div>



                </div>




            </div>
        </div>
    </section>

    {{-- end section --}}
    <!-- for space around content -->

    <!-- <div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div> -->

    {{-- sectionn for apply now card --}}


    <section>
        {{-- <div class="container-fluid personalBanner"  style="background-image: url({{ asset('assets/front_end/asset/img/personalLoan/pesonal_loan_apply_banner.png')  }})" > --}}

        <div class="row">
            <div class="container mx-auto px-4 relative">
                <div class="flex flex-col items-center justify-center">
                    <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/personalLoan/pesonal_loan_apply_banner_800scale.png"
                        alt="Apply Now" class="w-full h-full mb-4 object-cover" style="height: 600px;">

                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bannerButton">
                        <button
                            class="bg-blue-500 hover:bg-blue-800 text-white font-bold h-12 md:h-16 w-48 md:w-64 max-w-full text-base md:text-lg lg:text-xl rounded-full"
                            style="background-color: #1338be; margin-top: 396px;">
                            <a href="http://192.168.120.228/myzeon_web/index.php/apply-new"
                                style="color: white; color 0.3s;">Apply Now</a>
                        </button>




                    </div>
                </div>
            </div>
        </div>

        {{-- </div> --}}
        <section>



            {{-- end of section apply  now card --}}

            <section>
                <div class="container-fluid">

                    <h3 class="mb-2 font-weight-bold " style="color: #1338be;">Eligibility Criteria for Business Loan</h3>
                    <div class="bar">&nbsp;</div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Secured Business Loan</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3">Secured business loans are the safest and most popular forms of credit for
                            established businesses. The assets a business needs to pledge as collateral for a secured
                            business loan are</p>
                        <ul style="list-style: disc;">
                            <li>Inventory&nbsp;</li>
                            <li>Equipment</li>
                            <li>Land&nbsp;</li>
                            <li>Building&nbsp;</li>
                            <li>Unpaid invoices</li>
                        </ul>
                        <p>A business owner can get a secured business loan against mortgaged property. They can also
                            provide fixed deposits, government securities, savings accounts, gold, and other precious metals
                            as collateral for the loan.</p>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Unsecured Business Loans</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3">A business owner can get a secured business loan against mortgaged property. They
                            can also provide fixed deposits, government securities, savings accounts, gold, and other
                            precious metals as collateral for the loan.</p>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Differences Between Secured and Unsecured
                        Business Loans</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700 mt-3">

                        <div class="table-responsive ">
                            <table class="table" width="824">
                                <thead>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Particulars</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #1338be;"><b><span
                                                            lang="EN">Unsecured Business Loan</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #1338be;"><b><span
                                                            lang="EN">Secured Business Loan</span></b></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Collateral</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">No collateral needed</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">Business owners may provide an asset,
                                                    such as land, equipment, inventory, property, etc., as collateral
                                                    against the loan.</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Credit Score</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">Based on the credit score, banks and
                                                    NBFCs decide on the loan amount and interest rate.</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A secured business loan requires a
                                                    lower credit score than an unsecured business loan.</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Interest rate</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A higher interest rate than secured
                                                    business loans as they do not have a guarantee of an asset to back the
                                                    loan amount.</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A lower interest rate is charged as
                                                    risk is lower</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Guarantor</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">No guarantor is required</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A business owner or partner can pledge
                                                    their land, property, or gold as collateral against the loan.</span></p>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <p class="mt-3">Choose between an unsecured and secured business loan depending on factors like
                            credit score, repayment capacity, the time required to repay the loan, etc.</p>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Business Loans for Women</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3">Business Loans for women help women entrepreneurs scale businesses. A small
                            Business Loan fo r women helps scale business to further heights, such as upgrading machinery,
                            hiring new workers and building infrastructure. Check out the benefits of Business Loans for
                            women below –</p>
                        <ul class="pl-3" style="list-style: disc;">
                            <li>&nbsp;Helps meet day-to-day business needs: Day-to-day business needs sometimes get
                                overwhelming and pressure business owners. A Business Loan for women is a way to take care
                                of these short-term financial needs.</li>
                            <li>&nbsp;No collateral obligations: Small Business Loans for women are collateral-free. The
                                borrower doesn’t have to put any security in exchange for the loan amount.</li>
                            <li>&nbsp;Low-interest rates: Women business owners can get a Business Loan at lower interest
                                rates. Joint business owners can take advantage of this on their interest rate by getting
                                these loans in the name of the woman partner.</li>
                            <li>&nbsp;Minimal documentation: Another benefit of Business Loans for women is that you can get
                                them at minimal documentation and processing fee.</li>
                        </ul>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">MSME/SME Loan</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <pclass="mt-3">Banks provide MSME/SME (Micro, Small, Medium, and Enterprise) loans. It is a type of
                        financial assistance provided to small businesses for long-term, working capital, growth, or
                        expansion purposes. These business loans are highly beneficial for MSMEs in maximising their full
                        potential through adequate funding.</p>
                        <p><strong>Key highlights of MSME Loans</strong></p>
                        <ul class="pl-3" style="list-style: disc;">
                            <li>Loan eligibility requirements are moderate.</li>
                            <li>Tax exemptions on certain items</li>
                            <li>There are government-backed MSME Loans available.</li>
                            <li>Equal opportunity for all types of businesses</li>
                            <li>Funding to meet all business requirements</li>
                        </ul>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Eligibility and Criteria for Business
                        Loans</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3">Business Loans come with the following eligibility criteria.</p>
                        <ul class="pl-3">
                            <li>Age: 21 years to 65 years</li>
                            <li>Business profitability: The business must have a steady profit from the past year</li>
                            <li>Business turnover: In the past year, the business turnover should be INR 40 Lakh or above
                            </li>
                            <li>CIBIL score: CIBIL score should be 750 or above (for unsecured business loans).</li>
                        </ul>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Document Required for Business Loans
                    </button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3">Any bank and NBFC will have doubts and inquiries regarding your business’ growth
                            plans. This is why verification of Business Loan documents is necessary for approval.</p>
                        <ul class="pl-3" style="list-style: disc;">
                            <li>&nbsp;Application form: Duly filled and signed application form</li>
                            <li>&nbsp;KYC documents: Aadhaar card, PAN card, Voter’s ID, etc.</li>
                            <li>Income documents: GST documents, Balance Sheets, and tax audit documents</li>
                            <li>Photographs: 4-5 passport-size photographs</li>
                        </ul>
                    </div>
                </div>
                </div>
            </section>

            <!-- <section class="pb-5 jumbotron" id="Compare">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-center text-bg-primary">Compare Personal Loans</h4>
                                    <p class="mb-2">The three major factors that you consider before borrowing a personal loan are the
                                        Interest Rate, Loan Tenure, and Loan amount. Therefore, you can compare different banks and NBFCs
                                        that offers personal loan to Indian customers.</p>
                                </div>
                                <div class="col-md-12">
                                    <form method="post" enctype="multipart/form-data" action="" id="compare-loan">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Select Bank</label>
                                                    <select class="form-control select_multi" required="" name="bank_name[]" multiple>
                                                        <?php foreach (getBank() as $key => $value) {?>
                                                        <option value="<?php echo $value->bank_name; ?>" style="width: 100%"><?php echo $value->bank_name; ?>
                                                        </option>
                                                        <?php }?>

                                                    </select>
                                                    <input type="hidden" name="loan_type" value="personal-loan">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Loan Amount</label>
                                                    <input type="text" class="form-control" name="loan_amount" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Monthly Income</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center mb-5">
                                                <button type="button" id="compare_button" class="btn btn-primary">Compare Interest
                                                    Rates</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped  table-hover table-bordered border-primary">
                                            <tbody id="tab">
                                                <tr>
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
                    </section> -->


            <section>
                <div class="container-fluid">

                    <h3 class="mb-2 font-weight-bold " style="color: #1338be;">FAQs</h3>
                    <div class="bar">&nbsp;</div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Why Should I Get a Business Loan?</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">

                        <p class="mt-3">You should consider getting a business loan for several reasons:</p>
                        <p><strong>Capital Investment:</strong> It provides the necessary funds to start or expand your
                            business, allowing you to purchase equipment, inventory, or hire additional staff.</p>
                        <p><strong>Cash Flow Management:</strong> A loan can help smooth out cash flow fluctuations,
                            ensuring you have enough working capital to cover operational expenses, especially during slow
                            periods.</p>
                        <p><strong>Expansion and Growth:</strong> If you’re looking to grow your business, a loan can be
                            used to open new locations, enter new markets, or launch new products or services.</p>
                        <p><strong>Equipment and Technology Upgrades:</strong> Loans can be used to invest in updated
                            technology and equipment, helping you stay competitive and efficient.</p>
                        <p><strong>Marketing and Advertising:</strong> Securing a loan can provide the necessary funds to
                            implement effective marketing campaigns, helping you reach a wider audience and generate more
                            revenue.</p>

                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Is Possible to Raise the Credit Limit for
                        a Business Loan?</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3">Yes, it is possible to raise the credit limit for a business loan. This can be
                            achieved through several methods:</p>
                        <p><strong>Positive Payment History:</strong> Consistently making on-time payments for existing
                            loans and credit lines can build trust with lenders, increasing the likelihood of a credit limit
                            increase.</p>
                        <p><strong>Demonstrated Business Growth:</strong> Showing evidence of steady revenue and business
                            growth can instill confidence in lenders and lead to a credit limit increase.</p>
                        <p><strong>Requesting a Review:</strong> Contacting your lender and formally requesting a credit
                            limit increase is a common way to explore this possibility. Be prepared to provide updated
                            financial information and a compelling case for the increase.</p>
                        <p><strong>Improved Credit Score:</strong> If your business’s credit score has improved since the
                            initial loan was approved, it may be a strong indicator that you can handle a higher credit
                            limit.</p>
                        <p><strong>Utilization Ratio:</strong> Maintaining a low utilization ratio (the amount of credit
                            used compared to the total available) can signal responsible financial management and make a
                            strong case for a credit limit increase.</p>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">What Fees Would I Pay When the Loan Is
                        Being Processed?</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">

                        <div class="table-responsive">
                            <table class="table" width="824">
                                <thead>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Particulars</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #1338be;"><b><span
                                                            lang="EN">Unsecured Business Loan</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #1338be;"><b><span
                                                            lang="EN">Secured Business Loan</span></b></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Collateral</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">No collateral needed</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">Business owners may provide an asset,
                                                    such as land, equipment, inventory, property, etc., as collateral
                                                    against the loan.</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Credit Score</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">Based on the credit score, banks and
                                                    NBFCs decide on the loan amount and interest rate.</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A secured business loan requires a
                                                    lower credit score than an unsecured business loan.</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Interest rate</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A higher interest rate than secured
                                                    business loans as they do not have a guarantee of an asset to back the
                                                    loan amount.</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A lower interest rate is charged as
                                                    risk is lower</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p class="normal"><span style="color: #FFD756;"><b><span
                                                            lang="EN">Guarantor</span></b></span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">No guarantor is required</span></p>
                                        </td>
                                        <td valign="top">
                                            <p class="normal"><span lang="EN">A business owner or partner can pledge
                                                    their land, property, or gold as collateral against the loan.</span></p>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <p class="mt-3">Choose between an unsecured and secured business loan depending on factors like
                            credit score, repayment capacity, the time required to repay the loan, etc.</p>
                    </div>

                    <button class="accordion text-2xl font-bold ">What Paperwork Is Required When Applying for a Business
                        Loan?</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3"><strong style="color: black;">Business Plan:</strong> This outlines your
                            business goals, financial projections, and strategies for growth.</p>
                        <p><strong>Personal Identification:</strong> Such as driver’s license or passport, to verify your
                            identity.</p>
                        <p><strong>Business Registration Documents:</strong> These include your business license, articles
                            of incorporation, or other legal paperwork.</p>
                        <p><strong>Financial Statements:</strong> Including balance sheets, income statements, and cash flow
                            statements to demonstrate your business’s financial health.</p>
                        <p><strong>Tax Returns:</strong> Both personal and business tax returns for the past few years.</p>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Do I Need to Offer Security to Be Approved
                        for a Business Loan?</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3"> Yes, offering security, such as collateral or a personal guarantee, can
                            significantly increase your chances of being approved for a business loan. It provides the
                            lender with a level of assurance that if you’re unable to repay the loan, they can recoup their
                            losses by claiming the pledged asset. However, not all business loans require security. Some
                            lenders offer unsecured loans, but they typically have stricter eligibility criteria and may
                            come with higher interest rates.</p>
                    </div>

                    <button class="accordion text-2xl font-bold text-yellow-300">Which Methods Are Available for Loan
                        Repayment?</button>
                    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
                        <p class="mt-3">There are several methods available for loan repayment, depending on the type of
                            loan and the terms agreed upon with the lender. Here are some common methods:</p>
                        <p><strong>Standard Repayment Plan:</strong> This is the most straightforward method where you make
                            fixed monthly payments over the life of the loan. The amount is calculated to ensure the loan is
                            paid off within the agreed-upon term.</p>
                        <p><strong>Graduated Repayment Plan:</strong> Payments start lower and increase gradually, typically
                            every two years. This is beneficial for individuals who expect their income to increase over
                            time.</p>
                        <p><strong>Income-Driven Repayment Plans:</strong> These plans adjust your monthly payments based on
                            your income and family size. Examples include:</p>
                        <ul style="list-style: disc;">
                            <li>Income-Based Repayment (IBR)</li>
                            <li>Pay As You Earn (PAYE)</li>
                            <li>Revised Pay As You Earn (REPAYE)</li>
                            <li>Income-Contingent Repayment (ICR)</li>
                        </ul>
                        <p><strong>Extended Repayment Plan:</strong> This plan allows you to extend the repayment period
                            beyond the standard term, which can lower your monthly payments.</p>
                        <p><strong>Income-Sensitive Repayment Plan:</strong> This is specific to Federal Family Education
                            Loan (FFEL) Program loans. It adjusts your monthly payment based on your annual income.</p>
                        <p>&nbsp;</p>
                    </div>

                </div>
                </div>
            </section>

            <!-- <section class="pb-5 jumbotron mb-0 mt-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="heading-title">
                                        <h5 class="mb-2 font-weight-bold text-dark f-17">FAQs</h5>

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
                $("#personal-loan-button").click(function() {

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
                        success: function(data) {
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


                $("#compare_button").click(function() {
                    var bank_name = $("[name='bank_name[]']").val();
                    if (bank_name != '') {
                        var formData = new FormData($("#compare-loan")[0]);
                        $.ajax({
                            method: 'post',
                            url: "{{ route('compare-interest-rate') }}",
                            processData: false,
                            contentType: false,
                            data: formData,
                            success: function(data) {
                                $("#tab").show().html(data);
                            }
                        });
                    } else {
                        alert("Please Select Bank");
                    }
                });

                /*business loan hide show div code here */
                $(document).ready(function() {
                    $(".hidediv").hide();
                    $("#city").keypress(function() {
                        //alert();
                        $("#showdiv").show();
                        $("#hidediv").removeClass();
                    });
                });
            </script>
            <script>
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
            </script>

            <script>
                $(document).ready(function() {
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
