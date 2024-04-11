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
        /* Set the width and height of the carousel container */
        .card-text{
          text-align: justify;
        }
        .text-4xl{
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
            font-size: 16px;
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


        .personalBanner{
            width: 100%;
            height: 40%;
        }

        /* .bannerButton{
            margin-top: -200px
            
        } */
    </style>

    <section id="sectionForMessage" class="jumbotron my-8" style="background-color: white;">
        <div class="row personaloan-header" style="height:420px;">
            <div>
                <!-- <a class="btn btn-primary btn-outline btn-lg text-center" href="#Compare" role="button">Compare your
                    Loan</a> -->
                <a href="#startYourJourney" class="btn btn-outline btn-primary text-center">Start Your Jounery</a>
            </div>
            <div class="col-md-4">
                <img class="personalLoanImage"
                    src="{{ asset('assets/images/web_img/young-happy.png') }}"
                    style="height: 100%;margin-right:10px">
            </div>

            <div class="col-md-8 ">
                {{-- <h1 class="headingMain text-3xl font-bold mt-5">Personal Loan</h1> --}}
                <h1 class="font-family-josefin-sans text-3xl font-bold headingMain">Business Loan</h1>

                <div class="bar">&nbsp;</div>

                {{-- <p class="font-family-merriweather text-base leading-6">
                    This is a paragraph in Merriweather font
                </p> --}}

                <h6 class="font-family-merriweather text-base leading-6 headingdescription" style="color: black; line-height:2.5rem ; "   >
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

                <div class="flex flex-row justify-content-center align-items-center ">
                    <div class="bg-blue-500 w-1/2 h-10 text-center paddingtop font-family-merriweather text-base leading-6">
                        Get a personal loan in quick time</div>
                    <div class="bg-blue-500 w-1/2 h-10 text-center paddingtop font-family-merriweather text-base leading-6">
                        Apply online for a Personal Loan</div>
                    <div class="bg-blue-500 w-1/2 h-10 text-center paddingtop font-family-merriweather text-base leading-6">
                        Personal Loan for your every need</div>
                </div>

            </div>



        </div>
      </section>
        <hr class="my-4" style="color: grey">

        <div class="jumbotron jumbotron-fluid">
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
                  <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Kotak_Mutual_Fund_logo.png') }}"
                          alt="Image 2"></div>
                  <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Indiabulls_logo.png') }}"
                          alt="Image 3"></div>
                  <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/IDFC First Bank.png') }}"
                          alt="Image 4"></div>
                  <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/HDFC_Bank_Logo.png') }}"
                          alt="Image 5"></div>
                  <div class="item"><img
                          src="{{ asset('assets/front_end/asset/img/bankLogo/Bajaj_Finserv_Logo_edit.png') }}" alt="Image 6">
                  </div>
  
                  <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Yes_Bank_SVG_Logo.png') }}"
                          alt="Image 1"></div>
                  <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Kotak_Mutual_Fund_logo.png') }}"
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

        

      


   

    <section class="banner-img jumbotron sectiontable" style="background-color: white;margin-top:0px">
        <div class="container-fluid">

            <h1 class="text-center" style="color:#1338be;font-weight: 600;">Know About More Loans</h1>
            <p style="color:black">
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
                                            210,
                                        ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/loan-against-property" class="btn btn-primary">Know
                                        More</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>




                <div class="row">
<!-- change by mannu bg color  style="background-color: #DDFFFC;"-->
                    <div class="card">
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
                                                            
                                                                <input type="number" class="form-control mx-auto my-4" id="idPhoneNumber" aria-describedby="emailHelp" placeholder="Please Enter Mobile Number" x-model="mobileNo" style="width: 50%; text-align: center;">
                                                            
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
                                                <label for="exampleInputEmail1">How old is your business  </label>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome0"
                                                        name="yearlyIncome" value="0-25000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome0" class="form-check-label"> 0 to 3 Months</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome1"
                                                        name="yearlyIncome" value="25001-50000" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome1" class="form-check-label"> 6 Months to 1 Year </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome2"
                                                        name="yearlyIncome" value="50001-100000"
                                                        x-model="yearlyIncome" />
                                                    <label for="yearlyIncome2" class="form-check-label"> 1 to 5 Years</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="yearlyIncome3"
                                                        name="yearlyIncome" value="100001+" x-model="yearlyIncome" />
                                                    <label for="yearlyIncome3" class="form-check-label">More than 5 Years</label>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                        <!-- end 2 -->

                                        
                                    <template x-if="count === 3">
                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Monthly Revenue  </label>

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
                                                    <label for="yearlyIncome3" class="form-check-label">5 - 8.5 L(More than)</label>
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




       {{-- sectionn for apply now card --}}


       <section >
        {{-- <div class="container-fluid personalBanner"  style="background-image: url({{ asset('assets/front_end/asset/img/personalLoan/pesonal_loan_apply_banner.png')  }})" > --}}

            <!-- <div class="row">
              
                <div class="container mx-auto px-4">
                    <div class="flex flex-col items-center justify-center">
                       
                      {{-- <img src="{{ asset('images/apply-now.png') }}" alt="Apply Now" class="w-64 h-64 mb-4"> --}}
                      <img src="{{ asset('assets/front_end/asset/img/personalLoan/pesonal_loan_apply_banner_800scale.png') }}" alt="Apply Now" class="w-full h-full mb-4"  object-fit="cover">

                      
                    </div>
                  </div> 

                  <div class="bannerButton">

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Apply Now</button>
                  </div>

             </div> -->
             <div class="row">
                <div class="container mx-auto px-4 relative">
                    <div class="flex flex-col items-center justify-center">
                        <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/personalLoan/pesonal_loan_apply_banner_800scale.png" alt="Apply Now" class="w-full h-full mb-4 object-cover">
                        
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bannerButton">
                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold h-12 md:h-16 w-48 md:w-64 max-w-full text-base md:text-lg lg:text-xl rounded-full" style="background-color: #1338be;">
    <a href="http://192.168.120.228/myzeon_web/index.php/apply-new" style="color: white; color 0.3s;">Apply Now</a>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title">
                        <h5 class="mb-2 font-weight-bold text-dark f-17">Eligibility Criteria for Business Loan</h5>

                        <div class="bar">&nbsp;</div>

                        <p style="color: black">Before you apply for a personal loan, make sure that your qualify the
                            eligibility criteria for the loan. You will have to fulfil the following eligibility criteria if
                            you are applying for a personal loan.</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne"><button aria-expanded="false" class="collapsed"
                                    data-target="#collapseOne" data-toggle="collapse" type="button">For
                                    Salaried</button></div>

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
    </section>

    <section class="pb-5 jumbotron mb-0 mt-0">
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
    </section>

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

            if( mobileno!== '' && mobileno!==undefined && mobileno!==null ){
                console.log("call if");

            }else{
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

        function submitFormTest(){

            console.log("enter file here");
        }
    </script>
@endsection
