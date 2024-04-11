@extends('front_end_layout.home')
@push('indexPageStyle')
    {{-- owl carousel --}}
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/reset.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/responsive.css') }}" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


    <style>
        .single-block .content h4{
            font-size: 13px !important;
        }
        .text1 {
            color: #1338BE !important;
        }

        .btn:hover {
            color: #ffd756 !important;
        }

        /* Add your custom styles here */
        a.list-group {
            background-color: red;
            color: white;
        }
    </style>


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
            /* padding-top: 1.25rem; */
            /* Adjust as needed */
            margin-bottom: 0.5rem;
            /* Adjust as needed */
            font-family: 'Josefin Sans', sans-serif;
            text-align: center;
            font-size: 2.1rem;
            /* Adjust as needed */
            font-weight: bold;
            /* color: #dfaf37; */
        }
    </style>

    <style>
        .icon {
            font-size: 2.5rem;
            /* Use a relative unit for font size, like rem */
            color: #ffd756;
        }

        /* Responsive styles for small screens */
        @media (max-width: 576px) {
            .icon {
                font-size: 2rem;
                /* Adjust font size for smaller screens */
            }
        }

        /* Responsive styles for medium screens */
        @media (min-width: 577px) and (max-width: 992px) {
            .icon {
                font-size: 2.25rem;
                /* Adjust font size for medium screens */
            }
        }

        /* Responsive styles for large screens */
        @media (min-width: 993px) {
            .icon {
                font-size: 2.5rem;
                /* Keep the original font size for larger screens */
            }
        }


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

        .card-block {
            text-align: center;
            font-weight: bold;
        }

        .modal-content {
            border-radius: 20px;
            /* background: linear-gradient(1deg, #ffd756, #1338be); */
        }


        .thank-you-message {
            /* Style for the thank you message */
            color: #28a745;
            /* color: white; */
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .blogBtn {
            text-align: center;
            margin-bottom: 22px;
        }

        .card-title .heading-card {
            text-align: justify;
        }

        .jumbotron {
            background-color: white;
        }
    </style>
    <style>
        .sub-title {
            top: 50%;
            transform: translateY(-50%);
        }

        .blogButton1 {
            margin-bottom: -30px;
        }

        .blogButton {
            margin-bottom: -76px;
        }

        #apply-now {
            color: #ffd756;
            background-color: #1338be;
        }

        #contact-us {
            color: #ffd756;
            background-color: #1338be;
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .welcome-button.applyBtnDiv {
                /* margin-left: -64px; */
            }

            .emiCalculatorDiv {
                margin-top: 518px;
            }

            .emiCalculatorSidebar {
                margin-top: 210px;
            }
        }


        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .welcome-button.applyBtnDiv {
                margin-left: -64px;
            }

            .emiCalculatorDiv {
                margin-top: 518px;
            }

            .emiCalculatorSidebar {
                margin-top: 210px;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {

            .emiCalculatorDiv {
                margin-top: 40px;
            }

            .emiCalculatorSidebar {
                margin-top: 78px;
            }

        }

        .card-img-top {
            height: 40%;
            width: 100%;
        }

        .card-text {
            text-align: center;
        }

        .rupee-icon {
            font-size: 30px;
            /* Adjust the size as needed */
            color: black;
            /* Change the color if desired */
            margin-bottom: 2px;
        }

        .custom-section-title {

            font-weight: bold;
            font-size: 30px;
            text-align: center;
        }

        .custom-divider {
            border-top: 2px solid #ffd756;
            width: 275px;
            margin: 20px auto;
        }


        /* add by mannu */

        .background-image-section {
            background-image: url('{{ website_asset_image_webimage_base_url() }}/credit1.png');
            background-size: cover;
            background-position: center center;
            height: 525px;
            width: 100%;
            color: #fff;
            /* Set the text color for better visibility */
        }

        @media only screen and (max-width: 768px) {
            body {
                background-size: contain;
                /* Change the background-size for smaller screens */
            }
        }

        .btn_apply {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-size: 20px;
            border: none;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn_apply.btn-blue {
            font-size: 15px;
            font-weight: 600;
            text-align: center;
        }

        .btn-blue {
            background-color: #1338be;
        }



        .btn_apply:hover {
            background-color: #ffd756;
            /* Change the color for the hover effect */
        }

        .active-main-slider .owl-nav button:hover {
            background: #fff;
            color: #1338be !important;

        }

        .active-main-slider .owl-nav .owl-next {
            border: 1px solid #1338be !important;
            background-color: #1338be !important;
            font-size: 25px;
        }

        .active-main-slider .owl-nav .owl-prev {
            border: 1px solid #1338be !important;
            background-color: #1338be !important;
            font-size: 25px;
        }

        .sec-section .owl-carousel {
            height: 150px !important;
        }

        #head {
            height: 170px !important;
            padding: 20px !important;
        }

        .h-50 {
            height: 93% !important;
        }

        .mb-0 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 0px;
            text-transform: uppercase;
        }

        .calculatorcontainer {
            height: auto;
            width: auto;
            ;
        }

        .p-3 {
            height: 350px !important;
            padding: 20px !important;

        }

        .btn-secondary.active,
        .btn-secondary:active,
        .show>.btn-secondary.dropdown-toggle {
            background-color: #1338be;
            background-image: none;
            border-color: #6c757d;
        }
    </style>
    <!-- change by mannu -->
@endpush

@push('indexPageScript')
    {{-- owl carousel --}}

    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {

            console.log("loading....");

        });
    </script>

    <!-- newjs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
    <!-- 29th jan-->
    <!-- add by mannu -->
    <!-- autofill number -->
    <script>
        function SaveDetailIntoDatabase(mobileNumber, name) {
            $.ajax({
                url: "{{ website_api_base_url() }}/pop-up-post",
                type: "POST", // HTTP method for creating new data
                dataType: "json", // Expected data format from the API
                data: {
                    name: name, // Replace with the actual name
                    phone_no: mobileNumber // Replace with the actual phone number
                },
                success: function(response) {
                    // Handle successful response from the API
                    // console.log("Success:", response);
                    // Example: Display a success message to the user
                    // alert("Data submitted successfully!");
                    console.log("data submitted successfully!");
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle errors during the request
                    console.error("Error:", textStatus, errorThrown);
                    // Example: Display an error message to the user
                    alert("An error occurred: " + errorThrown);
                }
            });


        }

        function copyMobileNumber() {
            const mobileNumberStep1 = $("#mobileNumber1").val();
            $("#mobileNumber").val(mobileNumberStep1);
            // $('#otpModal').modal('show');
        }

        function verifyOTP() {

            var phoneNumber = $('#mobileNumber').val();
            otp = $("#otpInput").val();

            VerifyResponseOtp(phoneNumber, otp);

        }
    </script>
    <script>
        function closeOtpModal() {
            $('#otpModal').modal('hide');
        }
    </script>

    <script>
        function validateAndSubmit() {
            // Reset previous error messages
            $("#nameError").text("");
            $("#mobileError").text("");

            var name = $("#name").val();
            var mobileNumber = $("#mobileNumber").val();

            // Additional name validation (allow only letters and spaces)
            var namePattern = /^[A-Za-z\s]+$/;
            if (!namePattern.test(name)) {
                $("#nameError").text("Please enter a valid name");
                return;
            }

            // Validate mobile number (using a simple pattern for demonstration)
            var mobilePattern = /^[6-9]\d{9}$/;
            if (!mobilePattern.test(mobileNumber)) {
                $("#mobileError").text("Please enter a valid 10-digit mobile number");
                return;
            }

            // If validation passes, make the first API call
            checkAndSendOtp(mobileNumber, false);
            SaveDetailIntoDatabase(mobileNumber, name);
        }

        function checkAndSendOtp(phoneNumber, checkStatus) {

            $.ajax({
                url: '{{ website_api_base_url() }}/otpsend/' + phoneNumber,
                type: 'GET',
                success: function(response) {
                    const parsedResponse = JSON.parse(response);
                    console.log('Sent' + parsedResponse['return']);

                    if (parsedResponse['return']) {
                        $('#otpModal').modal('show');
                        // startTimer();
                    } else {
                        alert('Something wrong');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle API errors or network issues
                    alert('An error occurred. Please try again later.');
                }
            });
        }

        function VerifyResponseOtp(phone_number, otp) {
            console.log('Verifying response' + "phone_number=" + phone_number + "otp=" + otp);
            $.ajax({
                url: '{{ website_api_base_url() }}/otpsend/verify',
                type: 'POST',
                dataType: 'json',
                data: {
                    phone_number: phone_number,
                    otp: otp
                    // Add more parameters if needed
                },
                success: function(response) {
                    console.log(response.message);
                    $('#thankYouModal').modal('show');
                    $('#otpModal').modal('hide');
                    $('#myModal').modal('hide');
                    window.setCookeschecked = true;
                    console.log("verify number");


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle API errors or network issues
                    alert('verify agian');
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {

            $('ul.navbar-nav > li')
                .click(function(e) {
                    $('ul.navbar-nav > li')
                        .removeClass('active');
                    $(this).addClass('active');
                });
        });
    </script>
    <script>
        // JavaScript code to handle click event
        document.getElementById('home-loan').addEventListener('click', function() {
            // Remove 'active-list-item' class from all list items
            var listItems = document.querySelectorAll('.loanproduct-nav li');
            listItems.forEach(function(item) {
                item.classList.remove('active-list-item');
            });

            // Add 'active-list-item' class to the clicked list item
            this.classList.add('active-list-item');
        });
    </script>
    <!-- script for calculator -->
    <script>
        [...document.querySelectorAll('.list-group')].forEach(function(item) {
            // iterate and add event lstener to each of them
            item.addEventListener('click', function(elem) {
                // check if any element have a class active
                // if so then remove the class from it
                let getElemWithClass = document.querySelector('.active');
                if (getElemWithClass !== null) {
                    getElemWithClass.classList.remove('active');
                }
                //add the active class to the element from which click event triggered
                item.classList.add('active')

            })
        })
    </script>

    <!--  -->
    <script>
        $(document).ready(function() {
            // Show the modal after 8 seconds
            setTimeout(function() {
                $('#myModal').modal('show');
            }, 8000);
        });

        function saveChanges() {
            // Handle form submission logic here
            var name = $('#name').val();
            var phoneRegex = /^[789]\d{9}$/;
            var phone = $('#phone').val();
            console.log('Name: ' + name + ', Phone Number: ' + phone);

            $('#name').val(null);
            $('#phone').val(null);

            // Optionally, close the modal after saving changes
            $('#myModal').modal('hide');

            $('#thankYouModal').modal('show');
        }

        function ClosedModal() {
            $('#myModal').modal('hide');
        }
    </script>
    <script>
        function saveRemove() {
            $('#thankYouModal').modal('hide');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
   <script src="{{ asset('assets/front_end/asset/js/calculator.js') }}"></script> 
   <script src="{{ asset('assets/front_end/asset/js/mainab59.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/core.minab59.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/mouse.minab59.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/slider.minab59.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/commoncalculatorab59.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/emicalculatorab59.js') }}"></script> 
   <script src="{{ asset('assets/front_end/asset/js/active.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/jquery.easing.min.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/jquery-ui.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/jquery.ui.touch-punch.min.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/jquery.nice-select.js') }}"></script>
   <script src="{{ asset('assets/front_end/asset/js/menumaker.js') }}"></script>

   
@endpush

@section('content')
    <!-- <section class="mainslider">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner outerBannerDiv">
                @foreach (getSlider() as $key => $value2)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }} innerBannerDiv">
                        <img src="{{ asset('assets/images/web_img/' . $value2->image) }}" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption text-start mb-4">
                            <div>
                                <h2 class="main-title mainBannerHeading" data-animation-in="fadeInLeft"
                                    data-animation-out="animate-out fadeOutLeft">{!! $value2->title2 !!}</h2>
                                <h2 class="sub-title" data-animation-in="fadeInRight"
                                    data-animation-out="animate-out fadeOutRIght">{!! $value2->title1 !!}</h2>
                            </div>

                            <div class="" data-animation-in="" data-animation-out="">
                                <a href="{{ website_base_url() }}/contact-us" class="btn btn-primary " id="apply-now">Apply
                                    Now</a>
                                <a href="{{ website_base_url() }}/contact" class="btn btn-primary " id="contact-us">Contact
                                    Us</a>
                            </div>


                        </div>


                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev" style="left: 0;">
                <span class="carousel-control-prev-icon" aria-hidden="true"
                    style="background-color: #0531cf;
            color: #ffd765;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next" style="right: 0;">
                <span class="carousel-control-next-icon" aria-hidden="true"
                    style="background-color: #0531cf;
            color: #ffd765;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




    </section> -->
    <section class="mainslider">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner outerBannerDiv">
            @foreach (getSlider() as $key => $value2)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }} innerBannerDiv">
                <img src="{{ asset('assets/images/web_img/' . $value2->image) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-start mb-4">
                    <div>
                        <h2 class="main-title mainBannerHeading" data-animation-in="fadeInLeft"
                            data-animation-out="animate-out fadeOutLeft">{!! $value2->title2 !!}</h2>
                        <h2 class="sub-title" data-animation-in="fadeInRight"
                            data-animation-out="animate-out fadeOutRIght">{!! $value2->title1 !!}</h2>
                    </div>
                 
                    <div class="" data-animation-in="" data-animation-out="">
                        <a href="{{website_base_url() }}/contact-us" class="btn btn-primary " id="apply-now">Apply
                            Now</a>
                        <a href="{{website_base_url() }}/contact" class="btn btn-primary " id="contact-us">Contact
                            Us</a>
                    </div>


                </div>


            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev" style="left: 0;">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #0531cf;
            color: #ffd765;"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next" style="right: 0;">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #0531cf;
            color: #ffd765;"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




</section>

    <div class="clearfix">
    </div>

    <section>
        <div class="owl-carousel">
            <?php foreach (getService() as $key => $value) { ?>
            <div class="item">
                <div class="single-block d-flex flex-column justify-content-center p-3" id="head">
                    <div class="icon d-flex align-items-center">
                        <?php if ($value->loans_type == 'credit-cards') { ?>
                        <h4 class="mb-0 ml-3" style="visibility: hidden;">5%</h4>
                        <?php } else { ?>
                        <h4 class="mb-0 ml-3">
                            <?php $Rate = getRate($value->loans_type);
                            echo !empty($Rate->rate) ? $Rate->rate . '%' : '';
                            ?>
                        </h4>
                        <?php } ?>
                        <img src="{{ asset('assets/images/web_img/' . $value->image) }}" alt="">
                    </div>
                    <div class="content text-left">
                        <h4 style="text-transform: uppercase;">
                            <?php echo $value->title; ?>
                        </h4>
                        <p class="mb-0" style="display: none;">
                            <?php echo $value->content; ?>
                        </p>
                    </div>
                   
                </div>
            </div>
            <?php } ?>
        </div>

    </section>

    <!-- end of banner area -->


    <section class="loan-calculator-page section-padding pt-5 " id="calculator-emi">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4 class="slide eligible">LOAN CALCULATOR</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <article class="post-7 page type-page status-publish hentry w-100">


                            <div class=calculatorcontainer>
                                <div class=emicalculatorcontainer>
                                    <div id=loanformcontainer class=row>

                                        <div id=emicalculatordashboard class=col-md-8>

                                            <ul class="loanproduct-nav ">
                                                <li id="home-loan" class="nav-item active">
                                                    <a href="#" class="nav-link">Home Loan</a>
                                                </li>
                                                <li id="personal-loan" class="nav-item active">
                                                    <a href="#" class="nav-link"
                                                        style="white-space:no-wrap;">Personal
                                                        Loan</a>
                                                </li>
                                                <li id="car-loan" class="nav-item active">
                                                    <a href="#" class="nav-link">Car Loan</a>
                                                </li>
                                            </ul>

                                            <div class=cleardiv></div>
                                            <div id=emicalculatorinnerformwrapper>

                                                <form id=emicalculatorform>
                                                    <div class=form-horizontal id=emicalculatorinnerform
                                                        style="color: #1338BE;">
                                                        <div class="row form-group lamount">
                                                            <label class="col-md-12 control-label" for=loanamount>Home Loan
                                                                Amount</label>
                                                            <div class=col-md-12>
                                                                <div class=input-group>
                                                                    <input class=form-control id=loanamount name=loanamount
                                                                        value=25,00,000 type=text>
                                                                    <div class=input-group-append>
                                                                        <span class=input-group-text>₹</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=loanamountslider></div>
                                                        <div id=loanamountsteps class=steps>
                                                            <span class=tick style="left: 0%;">| <br>
                                                                <span class=marker>0</span>
                                                            </span>
                                                            <span class="tick d-none d-sm-block" style="left: 12.5%;">|
                                                                <br>
                                                                <span class=marker>25L</span>
                                                            </span>
                                                            <span class=tick style="left: 25%;">| <br>
                                                                <span class=marker>50L</span>
                                                            </span>
                                                            <span class="tick d-none d-sm-block" style="left: 37.5%;">|
                                                                <br>
                                                                <span class=marker>75L</span>
                                                            </span>
                                                            <span class=tick style="left: 50%;">| <br>
                                                                <span class=marker>100L</span>
                                                            </span>
                                                            <span class="tick d-none d-sm-block" style="left: 62.5%;">|
                                                                <br>
                                                                <span class=marker>125L</span>
                                                            </span>
                                                            <span class=tick style="left: 75%;">| <br>
                                                                <span class=marker>150L</span>
                                                            </span>
                                                            <span class="tick d-none d-sm-block" style="left: 87.5%;">|
                                                                <br>
                                                                <span class=marker>175L</span>
                                                            </span>
                                                            <span class=tick style="left: 100%;">| <br>
                                                                <span class=marker>200L</span>
                                                            </span>
                                                        </div>
                                                        <div class="sep row form-group lint">
                                                            <label class="col-lg-4 control-label" for=loaninterest>Interest
                                                                Rate</label>
                                                            <div class=col-lg-6>
                                                                <div class=input-group>
                                                                    <input class=form-control id=loaninterest
                                                                        name=loaninterest value=10.5 type=text>
                                                                    <div class=input-group-append>
                                                                        <span class=input-group-text>%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=loaninterestslider></div>
                                                        <div id=loanintereststeps class=steps>
                                                            <span class=tick style="left: 0%;">| <br>
                                                                <span class=marker>5</span>
                                                            </span>
                                                            <span class=tick style="left: 16.67%;">| <br>
                                                                <span class=marker>7.5</span>
                                                            </span>
                                                            <span class=tick style="left: 33.34%;">| <br>
                                                                <span class=marker>10</span>
                                                            </span>
                                                            <span class=tick style="left: 50%;">| <br>
                                                                <span class=marker>12.5</span>
                                                            </span>
                                                            <span class=tick style="left: 66.67%;">| <br>
                                                                <span class=marker>15</span>
                                                            </span>
                                                            <span class=tick style="left: 83.34%;">| <br>
                                                                <span class=marker>17.5</span>
                                                            </span>
                                                            <span class=tick style="left: 100%;">| <br>
                                                                <span class=marker>20</span>
                                                            </span>
                                                        </div>
                                                        <div class="sep row form-group lterm">
                                                            <label class="col-lg-4 control-label" for=loanterm>Loan
                                                                Tenure</label>
                                                            <div class=col-lg-6>
                                                                <div class=loantermwrapper>
                                                                    <div class=input-group>
                                                                        <input class=form-control id=loanterm name=loanterm
                                                                            value=20 type=text>
                                                                        <div class="input-group-append tenure-choice"
                                                                            data-toggle=buttons>
                                                                            <div class="btn-group btn-group-toggle"
                                                                                data-toggle=buttons>
                                                                                <label class="btn btn-secondary active">
                                                                                    <input type=radio name=loantenure
                                                                                        id=loanyears value=loanyears
                                                                                        tabindex=4 autocomplete=off
                                                                                        checked=checked>Yr </label>
                                                                                <label class="btn btn-secondary">
                                                                                    <input type=radio name=loantenure
                                                                                        id=loanmonths value=loanmonths
                                                                                        tabindex=5 autocomplete=off>Mo
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=loantermslider></div>
                                                        <div id=loantermsteps class=steps>
                                                            <span class=tick style="left: 0%;">| <br>
                                                                <span class=marker>0</span>
                                                            </span>
                                                            <span class=tick style="left: 16.67%;">| <br>
                                                                <span class=marker>5</span>
                                                            </span>
                                                            <span class=tick style="left: 33.33%;">| <br>
                                                                <span class=marker>10</span>
                                                            </span>
                                                            <span class=tick style="left: 50%;">| <br>
                                                                <span class=marker>15</span>
                                                            </span>
                                                            <span class=tick style="left: 66.67%;">| <br>
                                                                <span class=marker>20</span>
                                                            </span>
                                                            <span class=tick style="left: 83.33%;">| <br>
                                                                <span class=marker>25</span>
                                                            </span>
                                                            <span class=tick style="left: 100%;">| <br>
                                                                <span class=marker>30</span>
                                                            </span>
                                                        </div>
                                                        <div id=leschemewrapper class="sep toggle-visible"
                                                            style="display: none;">
                                                            <div class="sep row form-group escheme">
                                                                <label class="col-lg-4 control-label" for=emischeme>EMI
                                                                    Scheme</label>
                                                                <div class=col-lg-8>
                                                                    <div class="input-group emischemes">
                                                                        <div class="btn-group btn-group-toggle add-check"
                                                                            data-toggle=buttons>
                                                                            <label class="btn btn-secondary">
                                                                                <input type=radio name=emischeme
                                                                                    id=emiadvance value=emiadvance
                                                                                    tabindex=4 autocomplete=off>EMI
                                                                                in Advance </label>
                                                                            <label class="btn btn-secondary active">
                                                                                <input type=radio name=emischeme
                                                                                    id=emiarrears value=emiarrears
                                                                                    tabindex=5 autocomplete=off
                                                                                    checked=checked>EMI in Arrears </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input id=loanproduct name=loanproduct value type=hidden>
                                                    <input id=loanstartdate name=loanstartdate value type=hidden>
                                                    <input id=loanyearformat name=loanyearformat value type=hidden>
                                                    <input id=loandata name=loandata value type=hidden>
                                                    <input id=calcversion name=calcversion value=4.0 type=hidden>
                                                </form>


                                            </div>
                                        </div>
                                        <div class="sidebar col-md-4">

                                            <div id=emipaymentsummary class="no-gutter-left no-gutter-right">
                                                <div id=emiamount>
                                                    <h4>Loan EMI</h4>
                                                    <p>₹ <span>24,959</span>
                                                    </p>
                                                </div>
                                                <div id=emitotalinterest>
                                                    <h4>Total Interest Payable</h4>
                                                    <p>₹ <span>34,90,279</span>
                                                    </p>
                                                </div>
                                                <div id=emitotalamount class=column-last>
                                                    <h4>Total Payment <br>(Principal + Interest) </h4>
                                                    <p>₹ <span>59,90,279</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <div id=emipiechart
                                                class="no-gutter-left no-gutter-right highcharts-container d-none">
                                            </div>


                                        </div>

                                    </div>

                                    <div id="emipaymentdetails" class="d-none">
                                        <form class="gutter-left gutter-right form-horizontal">

                                        </form>
                                        <div id="emibarchart" class="hidden-ts highcharts-container"></div>

                                    </div>
                                </div>
                            </div>

                        </article>

                    </div>
                    <div class="section-title text-center col-md-6">
                        <h4 style="color: #1338BE;  text-align: justify; text-align: center; " class="eligible slide">EMI
                            CALCULATOR</h4>
                        <hr class="custom-divider">
                        <p style="color: black; text-align: justify;font-weight: 600; ">EMI calculator is a financial tool
                            to help you calculate your loan EMIs in advance. Fill out the desired loan term, tenure, and
                            interest rate to calculate your EMI in just a click.
                        </p>

                        <!-- <h2 style="color: black; text-align: center;margin-top: 94px;"><b>EMI Calculator</b></h2> -->
                        <div class="section-title text-center">
                            <h3
                                style="color: #ffd756; text-align: justify; padding: 2px; text-align: center; font-size: 25px;">
                                <b>Personal
                                    Loan EMI
                                    Calculator</b>
                            </h3>
                            <p style="color: black; text-align: justify;font-weight: 600; ">Have you ever found yourself in
                                a tough spot due to an unexpected financial crisis? Use a personal loan calculator to get
                                the exact monthly payments of a personal loan.
                            </p>
                        </div>
                        <div class="section-title text-center">
                            <h4
                                style="color: #ffd756; text-align: justify;padding: 2px; text-align: center; font-size: 25px;">
                                <b>Car Loan
                                    EMI Calculator</b>
                            </h4>
                            <p style="color: black; text-align: justify;font-weight: 600;">Want your dream car but don't
                                know how to do financial planning for it? Use the car loan EMI calculator to get accurate
                                monthly payments for a car loan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="container-fluid " style="color: #1338be;">
        <div class="row justify-content-center" style="overflow-y: hidden;">
            <div class="col-12 text-center" style="overflow-y: hidden;">
                <h4 class="custom-section-title slide eligible">WHY CHOOSE US</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
            </div>
        </div>
    </section>
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Left Elements -->
            <div class="col-md-4">

                <div class="card text-center custom-card">
                    <i class="fa-solid fa-indian-rupee-sign" style="font-size: 48px; margin-top: 20px;"></i>

                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Quick Loan Disbursal</h3>
                    </div>
                </div>
                <br>
                <div class="card text-center custom-card">
                    <i class="fas fa-university card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Tie-up with 25+ banks and NBFCS
                        </h3>
                    </div>
                </div>
                <br>
                <div class="card text-center custom-card">
                    <i aria-hidden="true" class="fab fa-digital-ocean card-icon custom-icon"
                        style="font-size: 48px; margin-top: 20px;"></i>
                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Digital Loan Disbursal 100%</h3>
                    </div>
                </div>
                <br>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <!-- why1.png -->
                <img src="{{ website_asset_image_webimage_base_url() }}/new.svg" alt="Your Image" class="img-fluid">
                <br>


            </div>
            <div class="col-md-4 mt-4">

                <div class="p">
                    <div class="card text-center custom-card">
                        <i class="bi bi-credit-card card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                        <div class="card-body custom-card-body">
                            <h3 class="card-title custom-card-title" style="color: #1338BE;">Check Your Credit Score</h3>
                        </div>
                    </div>
                </div>
                <br>

                <div class="p">
                    <div class="card text-center custom-card">
                        <i class="bi bi-person card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                        <div class="card-body custom-card-body">
                            <h3 class="card-title custom-card-title" style="color: #1338BE;">Friendly Customer Service
                            </h3>
                        </div>
                    </div>
                </div>
                <br>

                <div class="p">
                    <div class="card text-center custom-card">
                        <i class="bi bi-file-earmark-arrow-up card-icon custom-icon"
                            style="font-size: 48px; margin-top: 20px;"></i>
                        <div class="card-body custom-card-body">
                            <h3 class="card-title custom-card-title" style="color: #1338BE;">Contactless Document
                                Submission</h3>
                        </div>
                    </div>
                </div>
                <br>

            </div>

        </div>
    </div>
    <!--why choose end-->

    <section class="loan-calculator-page section-padding d-none">
        <div class="container">

            <div class="row">
                <div class="col-md-8 loan-slider-box">
                    <div class="single-loan-slider">
                        <h4>Home Loan Amount</h4>
                        <div id="pricipal-slide"></div>
                        <div>
                            <span>$</span>
                            <h6 id="pricipal"></h6>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Loan Months</h4>
                        <div id="totalyear-slide"></div>
                        <div>
                            <h6 id="totalyear"></h6>
                            <span>Months</span>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Interest Rate</h4>
                        <div id="intrest-slide"></div>
                        <div>
                            <h6 id="intrest"></h6>
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center loan-emi">
                    <div class="total-calculation">
                        <div class="single-total">
                            <h5>Loan EMI</h5>
                            <h2 class="emi-price" id="emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Total Interest Payable</h5>
                            <h2 id="tbl_emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Total Payment
                                <br>(Principal + Interest)
                            </h5>
                            <h2 id="tbl_la">0</h2>
                        </div>
                        <button class="btn applybtn btn-default btn-sm">APPLY NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- .start loan process second -->
    <section class="second-loan-process section-padding mt-4 jumbotron" style="background-color: white;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="eligible slide">SIMPLE LOAN PROCESS</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>

                    </div>
                </div>
            </div>
            <div class="row process-list">
                <div class="col-md-3 second-process">
                    <div class="second-single-loan-process">
                        <h4>Choose Amount</h4>
                        <div class="icon">
                            <!-- Indian Rupee symbol -->
                            ₹
                        </div>
                    </div>
                </div>

                <div class="col-md-3 second-process">
                    <div class="second-single-loan-process">
                        <h4>Provide Document</h4>
                        <div class="icon">
                            <!-- Change the document icon -->
                            <i class="far fa-file-alt" style="font-size: 30px;color: #ffd756"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 second-process">
                    <div class="second-single-loan-process">
                        <h4>Approved Loan</h4>
                        <div class="icon">
                            <!-- Change the handshake icon -->
                            <i class="fas fa-thumbs-up" style="font-size: 30px; color: #ffd756;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 second-process">
                    <div class="second-single-loan-process">
                        <h4>Get your Money</h4>
                        <div class="icon">
                            <!-- Change the money icon -->
                            <i class="fas fa-money-bill-wave" style="font-size: 30px;color: #ffd756;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-section section-padding d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2> Cards & Loans</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/asset/img/icon-1.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <h4>Personal Loan</h4>
                            <p>Pеrѕоnаl loan is unѕе�?urеd wіth fіxеd рауmеntѕ.</p>
                            <div class="ap-btn">
                                <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/asset/img/car.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <h4>Car Loan</h4>
                            <p>Cаr loan is most popular kіnd оf installment lоаn.</p>
                            <div class="ap-btn">
                                <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/asset/img/money.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <h4>Business Loan</h4>
                            <p>You nееd a loan tо new business expand еxіѕtіng.</p>
                            <div class="ap-btn">
                                <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/asset/img/home.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <h4>Home Loan</h4>
                            <p>Buуіng a hоmе is оnе of the bіggеѕt dе�?іѕіоn еvеr make.</p>
                            <div class="ap-btn">
                                <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/asset/img/card.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <h4>Credit Card Loan</h4>
                            <p>Student get more benifit compare to businesss loan.</p>
                            <div class="ap-btn">
                                <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured">
                        <div class="icon">
                            <img src="{{ asset('assets/front_end/asset/img/home.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <h4>Loan Against Property</h4>
                            <p>Customer need only pay per day interest on loan.</p>
                            <div class="ap-btn">
                                <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="height: 130px;">
                    <div class="card-body">
                        <!-- <i class="fas fa-laptop-code fa-3x"></i> -->
                        <span class="d-flex justify-content-center align-items-center mb-3">
                            <img src="http://192.168.120.233/assets/front_end/asset/img/clock.png" alt="">
                        </span>


                        <h3 class="card-text text1">Quick & Easy Loan
                            <br> Approvals
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="height: 130px;">
                    <div class="card-body">
                        <!-- <i class="fas fa-mobile-alt fa-3x"></i> -->
                        <span class="d-flex justify-content-center align-items-center mb-3">
                            <img src="{{ asset('assets/front_end/asset/img/user.png') }}" alt="" /></span>



                        <h3 class="card-text text1">5,000K Customers
                            <br> Satisfied
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="height: 130px;">
                    <div class="card-body">
                        <!-- <i class="fas fa-laptop-code fa-3x"></i> -->
                        <span class="d-flex justify-content-center align-items-center mb-3">
                            <img src="{{ asset('assets/front_end/asset/img/camera.png') }}" alt="" /></span>


                        <h3 class="card-text text1">No Prepayment or
                            <br> Hidden Fees
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="height: 130px;">
                    <div class="card-body">
                        <!-- <i class="fas fa-laptop-code fa-3x"></i> -->
                        <span class="d-flex justify-content-center align-items-center mb-3">
                            <img src="{{ asset('assets/front_end/asset/img/map-pin-2.png') }}" alt="" />
                        </span>
                        <h3 class="card-text text1">200 branches all <br>
                            over world</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


    <section class="clearfix mt-4">
        <div>
            <h4 class="eligible slide"><b>LATEST BLOG</b></h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
        </div>
        <div class="container-fluid">

            <div class="row">

                {{-- first card --}}
                <div class="col-md-3">

                    <div class="card card-block">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                            src="{{ website_asset_image_webimage_base_url() }}/Loan_emi.png" data-holder-rendered="true"
                            style="height: 180px; width: 100%; display: block;">
                        <div class="card-block">
                            <h5 class="card-title heading-card mt-2"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates">How
                                    To Calculate Your Business Loan EMI At Lower Rates?</a></h5>
                            <p class="card-text paraFont"> Are you looking for a business loan? </p>
                            <div class="blogBtn"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates"
                                    class="btn btn-primary">Read More</a></div>
                        </div>
                    </div>

                </div>

                {{-- second card --}}
                <div class="col-md-3">

                    <div class="card card-block">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                            src="{{ website_asset_image_webimage_base_url() }}/Loan_emi.png" data-holder-rendered="true"
                            style="height: 180px; width: 100%; display: block;">
                        <div class="card-block">
                            <h5 class="card-title heading-card mt-2"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates">How
                                    To Calculate Your Business Loan EMI At Lower Rates?</a></h5>
                            <p class="card-text paraFont"> Are you looking for a business loan? </p>
                            <div class="blogBtn"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates"
                                    class="btn btn-primary">Read More</a></div>
                        </div>
                    </div>

                </div>

                {{-- third card --}}
                <div class="col-md-3">
                    <div class="card card-block">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                            src="{{ website_asset_image_webimage_base_url() }}/Loan_emi.png" data-holder-rendered="true"
                            style="height: 180px; width: 100%; display: block;">
                        <div class="card-block">
                            <h5 class="card-title heading-card mt-2"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates">How
                                    To Calculate Your Business Loan EMI At Lower Rates?</a></h5>
                            <p class="card-text paraFont"> Are you looking for a business loan? </p>
                            <div class="blogBtn"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates"
                                    class="btn btn-primary">Read More</a></div>
                        </div>
                    </div>
                </div>

                {{-- forth card --}}
                <div class="col-md-3">
                    <div class="card card-block">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                            src="{{ website_asset_image_webimage_base_url() }}/Loan_emi.png" data-holder-rendered="true"
                            style="height: 180px; width: 100%; display: block;">
                        <div class="card-block">
                            <h5 class="card-title heading-card mt-2"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates">How
                                    To Calculate Your Business Loan EMI At Lower Rates?</a></h5>
                            <p class="card-text paraFont"> Are you looking for a business loan? </p>
                            <div class="blogBtn"><a
                                    href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates"
                                    class="btn btn-primary">Read More</a></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>




    </section>


<br>
    <!-- Add slider by mannu -->
    <section class=" mt-4  ">
        <h4 class=" eligible slide mt-4">OUR PARTNERS</h4>
        <div class="bar m-auto">&nbsp;</div><br><br>

        <div class="container-fluid">
            <div class="row our-partner">
                <div class="col-md-12 ">
                    <div class="section-title text-center">
                       
                        <!-- <p class=""><b>There's more than one reason to sign up with confidence</b></p> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank1.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank2.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank3.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank4.png') }}"></div>
                    </div>
                </div>
            </div>
    </section>

    <section class="section-stretched background-image-section" id="bb1000b">
        <div class="container">
            <div class="row" style="font-size: 24px;">
                <div class="col-12" style="margin-top:20%">
                    <div>
                        <div class="elementor-element">
                            <h2 class="text-center" style="color:#1338BE;">Free CIBIL <span style="color:#1338BE;">Score
                                    Check,</span><br> Credit Card Rewards &amp; Loans</h2>
                        </div>
                        <div class="elementor-element d-flex justify-content-center align-items-center">
                            <a class="btn btn-primary" href="{{ website_base_url() }}/check-cibil">Get
                                Free Credit
                                Report</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(1deg, #56b8ff, #1813be);">
                    <span><img src="https://cdn-icons-png.flaticon.com/128/3218/3218689.png" alt="Agent Calling Icon"
                            style="height: 50px; width: 50px; margin-left: 2px;"></span>
                    <h6 style="color: white; text-align: center; margin-top: 13px; margin-left: 19px; font-weight: bold;">
                        Get Advice From Our Financial Experts.</h6>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="ClosedModal()">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form fields for name and phone number -->
                    <form id="namePhoneForm">
                        <div class="form-group">
                            <label for="name" style="font-size: 17px; color: black;"> Name </label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter your full name" required>
                            <div id="nameError" style="color: red;"></div>
                        </div>
                        <div class="form-group">
                            <label for="mobileNumber" style="font-size: 17px; color: black;">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobileNumber"
                                placeholder="Enter your Mobile number" name="mobileNumber" required>
                            <div id="mobileError" style="color: red;"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="ClosedModal()"
                                style="border-radius: 15px;">Close</button>
                            <button type="button" class="btn btn-primary" onclick="validateAndSubmit()"
                                style="border-radius: 15px;">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Second Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="thankYouModal" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="saveRemove()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="thank-you-message">Thank You For Submitting, We Will Contact You Soon!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel" style="color: #1338be; text-align: center;"><b>Enter OTP
                            Code</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeOtpModal()">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
                <div class="modal-body text-center">
                    <!-- <img src="lock-icon.png" alt="Lock Icon" class="mb-4" width="50"> -->
                    <!-- <p class="lead">A One-Time Password (OTP) has been sent to your mobile number.</p> -->
                    <form id="otpForm">
                        <div class="form-group">
                            <label for="otpInput" class="sr-only">Enter OTP:</label>
                            <input type="text" class="form-control otp-input" id="otpInput" required
                                placeholder="Enter OTP">
                        </div>
                        <button type="button" class="btn btn-primary btn-block" onclick="verifyOTP()">Verify
                            OTP</button>
                        <div class="text-center mt-4">
                            <span class="d-block mobile-text" id="countdown"></span>
                            <span class="d-block mobile-text" id="resend" class="cursor">Don't receive the code?
                                Resend</span>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
