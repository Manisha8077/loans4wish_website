@extends('front_end_layout.home')
@push('startyourjourneystyle')
    <!-- <link rel="stylesheet" href="../dist/jquery-steps.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/style.css') }}">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <style>
        #agreeCheckbox-error {
            font-size: 13px;
            font-weight: bold;
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

        .mobile-text {
            color: #cd5c5c;
            font-size: 15px;
        }

        .cursor {
            cursor: pointer;
        }

        .cursor1 {
            color: #145a32;
            cursor: pointer;
        }

        /* above the code of otppopup */
        .slide {
            animation: slideIn 7s ease-in-out;
            padding-top: 1.25rem;
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
        .container-banner {
            position: relative;
            text-align: center;
            color: white;
            height: 50%;
        }

        /* Bottom left text */
        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }

        /* Top left text */
        .top-left {
            position: absolute;
            top: 8px;
            left: 16px;
        }

        /* Top right text */
        .top-right {
            position: absolute;
            top: 8px;
            right: 16px;
            height: 100px;
        }

        /* Bottom right text */
        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

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

        .accordion {}

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
    </style>
@endpush

@push('personalLoanScript')
    <!-- newjs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->

    <script>
        $(document).ready(function() {
            var timerOn = true;
            var initialTime = 15; // Set the initial time to 15 seconds

            function startTimer() {
                timerOn = true;
                timer(initialTime);
            }

            function timer(remaining) {
                var s = remaining;
                s = s < 10 ? "0" + s : s;

                $("#countdown").html(`Time left: 00 : ${s}`);

                remaining -= 1;

                if (remaining >= 0 && timerOn) {
                    setTimeout(function() {
                        timer(remaining);
                    }, 1000);
                    $("#resend").html("");
                    return;
                }

                if (!timerOn) {
                    return;
                }

                $("#resend").html(`Don't receive the code? 
                <span class="font-weight-bold text-color cursor1" onclick="startTimer()">Resend</span>`);
            }

            // startTimer(); // Call this function on page load

            // Event listener for the "Resend" link using jQuery
            $("#resend").on("click", function() {
                startTimer(); // Call the function when the link is clicked
            });
        });
    </script>
    <!-- start journey -->
    <script>
        //step 0
        $(document).ready(function() {
            $.validator.addMethod("customIndianMobileNumber", function(value, element) {
                return /^[6-9]/.test(value);
            }, "Mobile number should start with a digit between 6 to 9");

            console.log("Document is ready.");

            // Check if jQuery is loaded
            if (typeof jQuery == 'undefined') {
                console.error('jQuery is not loaded.');
            } else {
                console.log('jQuery is loaded.');
            }

            // Check if jQuery Validation is loaded
            if (typeof $.fn.validate == 'undefined') {
                console.error('jQuery Validation is not loaded.');
            } else {
                console.log('jQuery Validation is loaded.');
            }

            // Validation for Step 1
            $("#frmContact1").validate({
                rules: {
                    mobileNumber1: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        digits: true,
                        customIndianMobileNumber: true,
                    },
                    agreeCheckbox: {
                        required: true
                    }
                },
                messages: {
                    mobileNumber1: {
                        required: "Please enter your mobile number",
                        minlength: "Mobile number must be exactly 10 digits",
                        maxlength: "Mobile number must be exactly 10 digits",
                        digits: "Please enter only digits",
                    },
                    agreeCheckbox: {
                        required: 'Please check this box if you want to proceed.'
                    }

                },
                errorPlacement: function(error, element) {
                    if (element.attr('type') === 'checkbox') {
                        error.insertAfter(element.parent()); // Place error message after the checkbox
                    } else {
                        error.insertAfter(element); // Use default placement for other fields
                    }
                }
                // Add other customization options if needed
            });


            console.log("Validation script executed.");
        });
    </script>
    <script>
        $(document).ready(function() {
            $.validator.addMethod("customIndianMobileNumber", function(value, element) {
                return /^[6-9]/.test(value);
            }, "Mobile number should start with a digit between 6 to 9");

            // Validation for Step 1
            $("#frmContact").validate({
                rules: {
                    name: {
                        required: true,
                        letterswithspace: true, // Custom rule to allow only letters and spaces
                    },
                    mobileNumber: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        digits: true,
                    },
                    panCardNumber: {
                        required: true,
                        panCard: true, // Custom rule for PAN card validation
                    },
                    dob: "required",
                    email: {
                        required: true,
                        email: true,
                    },
                    pincode: "required",
                    //   city: "required",
                    //   state: "required",
                    gender: "required",
                },
                messages: {
                    name: {
                        required: "Please enter your full name",
                        letterswithspace: "Please enter a valid name (only letters)",
                    },
                    //   name: "Please enter your full name",
                    mobileNumber: {
                        required: "Please enter your mobile number",
                        minlength: "Mobile number must be exactly 10 digits",
                        maxlength: "Mobile number must be exactly 10 digits",
                        digits: "Please enter only digits",
                    },
                    panCardNumber: "Please enter a valid PAN card number",
                    dob: "Please enter your date of birth",
                    email: {
                        required: "Please enter your email",
                        //     email: "Please enter a valid email address",
                    },
                    pincode: "Please enter your pincode",
                    //   city: "Please enter your city",
                    //   state: "Please enter your state",
                    gender: "Please select your gender",
                },
                panCardNumber: {
                    required: "Please enter a valid PAN card number",
                    panCard: "Please enter a valid PAN card number",
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "gender") {
                        error.appendTo(element.closest(".form-group"));
                    } else {
                        error.insertAfter(element);
                    }
                }
                // Add other customization options if needed
            });
            jQuery.validator.addMethod("letterswithspace", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
            }, "Please enter only letters and spaces.");
            jQuery.validator.addMethod("panCard", function(value, element) {
                // Use a regular expression to validate PAN card format
                return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value);
            }, "Please enter a valid PAN card number.");
        });
    </script>

    <script>
        //step2
        $(document).ready(function() {
            $("#frmIncome").validate({
                rules: {
                    homeOwnership: "required",
                    currentLoan: "required",
                    propertyFinalized: "required",
                    currentBank: "required",
                    loanType: "required",
                    primaryBank: "required"
                },
                messages: {
                    homeOwnership: "Please select whether you own or rent your home",
                    currentLoan: "Please select whether you have any current loan",
                    propertyFinalized: "Please select whether you have finalized the Car",
                    currentBank: "Please select your current bank name",
                    loanType: "Please select the loan type",
                    primaryBank: "Please enter your primary bank account"
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") === "propertyFinalized") {
                        error.appendTo(element.closest(".form-group"));
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            @php
                $valuecookie = Cookie::get('applyclick');
                if ($valuecookie) {
                    $valuecookie = Cookie::get('applyclick');
                } else {
                    $valuecookie = 'defualut';
                }

                if (session()->has('formnew')) {
                    $value = session('formnew');
                    // or
                    $value = Session::get('formnew');
                } else {
                    $value = 'default';
                    // Key not found in the session
                }
            @endphp

            var cookiesValue = '<?php echo $valuecookie; ?>';
            if (cookiesValue) {
                var cookiesValue = '<?php echo $valuecookie; ?>';

            } else {
                var cookiesValue = 'defaut';

            }
            var sessionValue = '<?php echo $value; ?>';

            if (cookiesValue === 'applyClick') {
                $('html, body').animate({
                    scrollTop: $("#secStart").offset().top
                }, 2000);


            } else {

            }

            //      if(sessionValue==='applynownew'){
            //         $('html, body').animate({
            //     scrollTop: $("#secStart").offset().top
            // }, 2000);


            //         }

            console.log("enter" + '<?php echo $valuecookie; ?>');

            console.log('hello 1')
            //     $.scrollTo($('#demo'), 1000);
            // console.log('scroll')



            // Call the function on page load
            // setInitialSteps();

            // Button click event
            $('#applyAgain').on('click', function() {
                @php
                    Cookie::queue('applyclick', 'applyClick', '7');

                    session(['formnew' => 'applynownew']);
                @endphp
                $('#banner').hide();
                $('#divBanner').show();

                setInitialSteps();
            });

            // Validation logic for step2
            $('#nextButtonForStep2').on('click', function() {
                // Check if all fields in step2 are filled
                if (validateStep2()) {
                    // Set step2 as done and move to the next step
                    $('.step-steps li:contains("step2")').addClass('active done');
                    // Add logic to move to the next step here
                } else {
                    // Handle the case where step2 fields are not filled
                    alert('Please fill in all fields in Step 2.');
                }
            });

            // Validation function for step2
            function validateStep2() {
                // Add your logic to validate step2 fields here
                // Return true if all fields are filled; otherwise, return false
                // For example, you can use $('#field1InStep2').val() !== '' for each field
                return true; // Replace with your validation logic
            }
        });
    </script>


    <script>
        //step1

        var timerOn = true;
        var initialTime = 15; // Set the initial time to 15 seconds

        function startTimer() {
            timerOn = true;
            timer(initialTime);
        }

        function timer(remaining) {
            var s = remaining;
            s = s < 10 ? "0" + s : s;

            $("#countdown").html(`Time left: 00 : ${s}`);

            remaining -= 1;

            if (remaining >= 0 && timerOn) {
                setTimeout(function() {
                    timer(remaining);
                }, 1000);
                $("#resend").html("");
                return;
            }

            if (!timerOn) {
                return;
            }

            $("#resend").html(`Don't receive the code? 
                <span class="font-weight-bold text-color cursor1" onclick="startTimer()">Resend</span>`);
        }



        $(document).ready(function() {
            //    setCookie('otpCheck',false);
            window.setCookeschecked = false;
            window.setCookesOtpCheckStatus = false;
        });
        //108

        function checkAndSendOtp(phonnumber, checkstatus) {
            $.ajax({
                url: 'http://192.168.120.228/myzeon_web/index.php/api/otpsend/' + phonnumber,
                type: 'GET', // Adjust based on API requirement
                success: function(response) {
                    const parsedResponse = JSON.parse(response);
                    console.log('Sent' + parsedResponse['return'])

                    if (parsedResponse['return']) {
                        $('#otpModal').modal('show');
                        startTimer();

                    } else {
                        alert('Something wrong');
                    }


                    // if (response.status === 'success') { // API-specific check
                    //     $('#otp_display').text(response.otp);
                    // } else {
                    //     alert(response.message); // Replace with proper error handling
                    // }
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
                url: 'http://192.168.120.228/myzeon_web/index.php/api/otpsend/verify',
                type: 'POST', // Adjust based on API requirement
                dataType: 'json', // Adjust based on API response format
                data: {
                    phone_number: phone_number, // Adjust formatting based on API expectation
                    otp: otp
                },
                // Include authentication headers if required
                success: function(response) {
                    $('#otpModal').modal('hide');


                    window.setCookeschecked = true;
                    window.setCookesOtpCheckStatus = true;
                    console.log("verify number");

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle API errors or network issues
                    alert('An error occurred. Please try again later.');
                }
            });
        }

        $("#frmIncome").submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            // Make an AJAX request
            $.ajax({
                type: "POST", // Use "POST" or "GET" depending on your server-side processing
                url: "your_server_url.php", // Replace with your server-side processing URL
                data: formData,
                success: function(response) {
                    // Handle the successful response from the server
                    console.log(response);

                    // If you want to show a banner or perform other actions after successful submission
                    $("#banner").show();
                },
                error: function(error) {
                    // Handle the error response from the server
                    console.error(error);
                }
            });
        });
        // step0
        var frmContact1 = $('#frmContact1');
        // var frmContact1Validator = frmContact1.validate();

        // step1
        var frmContact = $('#frmContact');
        // var frmContactValidator = frmContact.validate();

        //step2
        var frmIncome = $('#frmIncome');
        // var frmIncomeValidator = frmIncome.validate();

        //step3
        var frmIncome1 = $('#frmIncome1');
        // var frmIncome1Validator = frmIncome1.validate();

        $('#demo').steps({
            onChange: function(currentIndex, newIndex, stepDirection) {
                console.log("currentIndex: " + currentIndex + " newIndex: " + newIndex + " stepDirection: " +
                    stepDirection);
                // step0

                if (currentIndex === 1 && newIndex === 2 && stepDirection === 'forward') {
                   
                    if(!window.setCookesOtpCheckStatus){
                        alert("Please Confirm Your Otp First");
                        return false;
                    }


                }

                if (currentIndex === 0 && newIndex === 1 && stepDirection === 'forward') {
                    var phoneNumber = $('#mobileNumber1').val();
                    window.setUserMobileNumber = phoneNumber;
                    var agree = $('#agreeCheckbox').prop('checked');

                    

                    if (!window.setCookeschecked) {
                        checkAndSendOtp(phoneNumber, agree);
                    }

                }

                if (currentIndex === 0) {
                    if (stepDirection === 'forward') {
                        return frmContact1.valid();
                    }
                    console.log('step0')
                    if (stepDirection === 'backward') {
                        frmContact1Validator.resetForm();
                    }

                }

                //step1
                if (currentIndex === 1) {
                    var phoneNumber = $('#mobileNumber1').val();
                    var agree = $('#agreeCheckbox').prop('checked');

                    if (stepDirection === 'forward') {
                        return frmContact.valid();
                    }
                    if (stepDirection === 'backward') {
                        frmContactValidator.resetForm();
                    }
                }

                // step2
                if (currentIndex === 2) {
                    if (stepDirection === 'forward') {
                        return frmIncome.valid();
                    }
                    console.log('step2')

                    if (stepDirection === 'backward') {
                        frmIncomeValidator.resetForm();
                    }
                }
                // step2 108
                if (currentIndex === 3) {
                    // new code for ajax
                    var formDataArrayContact = $("#frmContact").serializeArray();
                    var formDataObjectContact = {};
                    $.each(formDataArrayContact, function(i, field) {
                        formDataObjectContact[field.name] = field.value;
                    });

                    // Get form data from frmIncome
                    var formDataArrayIncome = $("#frmIncome").serializeArray();
                    var employmentType = $('#employmentType').val();
                    console.log(employmentType + " type is here");

                    var salary = $('#companyRegistered').val();
                    console.log(salary + " copyregister is here");

                    var year = $('#yearlyIncome').val();
                    console.log(year + " salary is here");


                    var formDataObjectIncome = {};
                    $.each(formDataArrayIncome, function(i, field) {
                        formDataObjectIncome[field.name] = field.value;
                    });

                    // Combine form data from both forms
                    var formDataObject = {
                        ...formDataObjectContact,
                        ...formDataObjectIncome
                    };

                    console.log("Combined Form Data:");
                    console.log(formDataObject);

                    // Perform AJAX request
                    $.ajax({
                        type: "POST",
                        url: "http://192.168.120.228/myzeon_web/index.php/api/car-loan-apply",
                        data: formDataObject,
                        success: function(response) {
                            console.log(response);
                            // Handle the response from the server
                        },
                        error: function(error) {
                            console.error("AJAX request failed:", error);
                        }
                    });
                    // end new code for ajax
                    $("li[data-step-target='step1']").first().hide();

                    $("li[data-step-target='step2']").first().hide();
                    $("li[data-step-target='step3']").first().hide();
                    // $("li[data-step-target='step4']").first().hide();

                    $("#txtjourney").text("End Your Journey");
                    if (stepDirection === 'forward') {
                        return frmIncome1.valid();
                    }
                    console.log('step3')

                    if (stepDirection === 'backward') {
                        frmIncome1Validator.resetForm();
                    }
                }
                return true;
            },
            onFinish: function() {
                // Show the modal when the finish button is clicked
                // $('#myModal').modal('show');
            }
        });
    </script>

    <!-- city state from pincode by mannu -->
    <script>
        $('#pincode').on('input', function() {
            var pincode = $(this).val(); // Get the value of the input field
            // console.log("input"+inputValue);
            // $('#output').text('Input value: ' + inputValue); // Update the output element with the value

            if (pincode) {
                $.ajax({
                    url: 'https://api.postalpincode.in/pincode/' + pincode,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response[0].Status === 'Success') {
                            var data = response[0].PostOffice[0];

                            // Set District and State values
                            $('#city').val(data.District);
                            $('#stateName').val(data.State);

                            console.log("enterrrrrrrrrrrrrrrrrr");
                            console.log(data.District);

                            try {
                                var city = data.District;
                                var citySelect = $('#city');
                                citySelect.empty();
                                citySelect.append($('<option value="">Select a State</option>'));
                                citySelect.append($('<option value="' + city + '">' + city +
                                    '</option>'));

                            } catch (error) {

                            }

                            try {
                                var state = data.State;
                                var stateSelect = $('#stateName');
                                stateSelect.empty();
                                stateSelect.append($('<option value="">Select a State</option>'));
                                stateSelect.append($('<option value="' + state + '">' + state +
                                    '</option>'));
                            } catch (error) {
                                console.log("error to get state");

                            }

                            // $('#stateName').val(data.State);
                        } else {
                            $('#city').val('Not found');
                            $('#stateName').val('Not found');
                        }
                    },
                    error: function() {
                        $('#city').val('Error');
                        $('#stateName').val('Error');
                    }
                });
            }


        });
    </script>




    <!-- carloan form -->
    <script>
        $(document).ready(function() {
            $("#ShowErrorField").hide();

            $("#btnSubmit").on('click', function() {

                var allFieldsFilled = true;


                $("#my-form input, select ,textarea").each(function() {
                    if ($(this).val() === "") {
                        allFieldsFilled = false;
                        $(this).addClass("error");
                        $("#ShowErrorField").show();
                    } else {
                        $(this).removeClass('error');
                        $("#ShowErrorField").hide();
                    }
                });

                if (allFieldsFilled) {

                    $("#my-form input[name=full_name]").on("change", function() {
                        var name = $(this).val();

                        // Create a regular expression to match alphabets and not special characters
                        var regex = /^[a-zA-Z]+$/;

                        // Check if the name matches the regular expression
                        if (!regex.test(name)) {
                            // The name does not match the regular expression, so it is invalid
                            $(this).addClass("error");
                            $("#error_name").html("*The name field can only contain alphabets.");
                            $("#error_name").addClass('error_name');
                            return false;
                        } else {
                            // The name matches the regular expression, so it is valid
                            $(this).removeClass("error");
                            $("#error_name").html("");
                            $("#error_name").hide();
                            return true;
                        }
                    });

                    $("#my-form input[name=number]").on("change", function() {
                        var number = $(this).val();

                        // Create a regular expression to match a valid Indian mobile number
                        var regex = /^([6-9]\d{9})$/;

                        // Check if the phone number matches the regular expression
                        if (!regex.test(number)) {
                            // The phone number does not match the regular expression, so it is invalid
                            $(this).addClass("error");
                            $("#error_no").html(
                                "The phone number field must be a valid Indian mobile number.");
                            $("#error_name").addClass('error_name');
                        } else {
                            // The phone number matches the regular expression, so it is valid
                            $(this).removeClass("error");
                            $("#error_no").html("");
                        }
                    });

                    console.log("enter here");



                    // ***************form submit******************


                    var name = $('#name').val();
                    var number = $('#number').val();
                    var occupation = $('#occupation').val();
                    var loanType = $('#loan_type').val();
                    var pincode = $('#pincode').val();
                    var city = $('#city').val();
                    var state = $('#stateName').val();
                    var message = $('#message').val();


                    $('#loader').show();

                    $.ajax({
                        url: "<?php echo website_base_url(); ?>/api/cutomer-data-wp-post",
                        type: 'POST', // Change to 'GET' or 'POST' depending on your needs
                        data: {
                            'name': name,
                            'phone_no': number,
                            'occupation': occupation,
                            'pincode': pincode,
                            'city': city,
                            'state': state,
                            'message': message
                        },
                        success: function(response) {
                            $('#loader').hide();
                            $('#myModal').modal('show');

                        },
                        error: function() {
                            // Handle error here
                            $('#loader').hide();
                            alert('Error submitting the form.');
                        }
                    });

                }

            });



        });
    </script>
    <script>
        $("#btnModalClose").on('click', function() {
            // $("#modal").hide();
            $('#myModal').modal('hide');
            window.location.href = "http://192.168.120.228/myzeon_web/index.php/car-loan";
            // window.location.href = "{{ route('home') }}"
        })
    </script>

    <!-- autofill number -->
    <script>
        function copyMobileNumber() {
            const mobileNumberStep1 = $("#mobileNumber1").val();
            $("#mobileNumber").val(mobileNumberStep1);
            // $('#otpModal').modal('show');
        }

        function verifyOTP() {

            var phoneNumber = $('#mobileNumber1').val();
            otp = $("#otpInput").val();

            VerifyResponseOtp(phoneNumber, otp);



            // Assume OTP verification logic here

            // If OTP is verified, close the modal and move to step 2
            // $('#otpModal').modal('hide');
            // $('#divstep1').removeClass('active');
            // $('#divstep2').addClass('active');
            // $('#divstep1').hide();
            // $('#divstep2').show();
        }
    </script>
    <script>
        function closeOtpModal() {
            $('#otpModal').modal('hide');
        }
    </script>

    <!-- <script>
        function copyMobileNumber() {

            // Copy the mobile number from Step 1 to Step 2
            const mobileNumberStep1 = $("#mobileNumber1").val();
            $("#mobileNumber").val(mobileNumberStep1);



        }
    </script> -->
    <!-- 100 -->
    <!-- <script>
        function validateAndProceed() {
            var mobileNumber = document.getElementById('mobileNumber1').value;
            var agreeCheckbox = document.getElementById('agreeCheckbox').checked;
            var errorContainer = document.getElementById('errorContainer');

            // Clear any existing error message
            errorContainer.innerHTML = '';

            if (mobileNumber.trim() === '') {
                // Show an error message if mobile number is empty
                errorContainer.innerHTML = '<p style="color: red;">Please enter your mobile number.</p>';
                return;
            }

            if (!agreeCheckbox) {
                // Show an error message if the checkbox is unchecked
                errorContainer.innerHTML =
                    '<p style="color: red;">Please agree to proceed with the provided mobile number.</p>';
                return;
            }

            // Proceed to the next step or perform other actions
            // For example: window.location.href = 'next_page.html';
            alert('Moving to the next step...');
        }
    </script> -->
@endpush

@section('content')
    <div class="">

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/car_loan.jpeg" alt="Card image"
            width="auto" style="margin-top: 100px;" />
    </div>

    {{-- <div class="container-banner mt-0">
        <img src="http://192.168.120.228/myzeon_web/assets/images/web_img/car_loan_image_edit.png" alt="Snow"
            style="height: 50%;">
        <div class="bottom-left">Bottom Left</div>
        <div class="top-left">Top Left</div>
        <div class="top-right">

            
            <a href="#jmpTypesofloan"    class=" text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">Types of Loan</a>
            <a href="#jmpBenifitsofloan"  class=" text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">Benifits</a>

            <a href="#jmpEligibilityloan" class=" text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">Eligibility</a>

            <a href="#jmpEligibilityloan" class=" text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">Documents</a>

            <a href="#jmpEligibilityloan" class=" text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">Before Apply</button>
            


        </div>
        <div class="bottom-right">Bottom Right</div>
        <div class="centered">

            <h2 class="text-3xl font-bold text-center">APPLY ONLINE FOR</h2>
            <h2 class="text-5xl font-extrabold text-center mb-4">Car Loan</h2>
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md">Apply Now</button>

        </div>
    </div> --}}

    <section class="">

        <div class="container-fluid mt-4 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">Car Loan</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            Are you planning to get the car of your dreams? Are you struggling to purchase your dream car
                            with
                            your savings? Do you want to apply <span>online for car loan </span> but don’t know how to get
                            it?
                            Are you aware
                            of the required documents and application process for a car loan? A car loan is a financial
                            product
                            that offers funds to an individual for the motive of purchasing a vehicle. The borrower agrees
                            to
                            repay the loan amount over a set period of time, with interest and other charges involved. Car
                            loans
                            fulfill the dream of people who wish for a car without having to pay the entire cost upfront.

                        </p>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">What Are The Types of Car Loans? </h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The types of Car loans available in India are:

                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">New Car Loan
                        </li>
                        <p class="paraFont">
                            A new car loan can be used for the purchase of new vehicles. The terms and interest rates may
                            vary based on the age and type of the vehicle. These loans may have lower interest rates
                            compared to used car loans.


                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Used Car Loan
                        </li>
                        <p class="paraFont">
                            A used car loan allows a borrower to finance the purchase of a second-hand vehicle, which is
                            often more affordable than buying a new one. Interest rates of a used car loan may be slightly
                            higher compared to new car loans.


                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Against Car
                        </li>
                        <p class="paraFont">
                            A loan against a car is a type of secured loan that offers funds to the borrower against their
                            vehicle’s ownership as collateral. These loans are best for vehicle owners who are in need of
                            some funds. You can qualify for a loan against a car if you own a vehicle.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid">

            <div class="mt-4">
                <h4 class="eligible slide">What are Factors to Consider Before Applying for Car Loan?
                </h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Some of the common factors that you should keep in mind before applying for a car loan are as follows:

                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Tenure:
                        </li>
                        <p class="paraFont">
                            Choose a shorter loan tenure for your car loan as the repayment of the loan will be much faster
                            with lower interest costs. <span><a href="#">Myzeon</a></span> - Before you apply for a
                            car loan, choose a shorter loan tenure according to your financial situation and needs.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Repayment Capacity:
                        </li>
                        <p class="paraFont">
                            You can easily calculate your car loan EMI with a car loan EMI calculator. Before applying, you
                            should calculate the monthly payments that you need to pay to the lender every month. This can
                            help you in budgeting and you can easily track your monthly expenses in advance

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Additional Charges and Services:
                        </li>
                        <p class="paraFont">
                            Be aware of any additional fees associated with the loan, such as origination fees, prepayment
                            penalties, or late payment fees. Additional fees can impact the total cost of the loan.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Good Credit Score:
                        </li>
                        <p class="paraFont">
                            One should have a good credit score in order to qualify for a car loan with lower interest
                            rates. A higher credit score may grant you lower interest rates whereas a poor credit score can
                            disqualify your car loan application.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Secured vs. Unsecured Loan:
                        </li>
                        <p class="paraFont">
                            Consider whether you want a secured or unsecured loan. A secured loan is backed by collateral
                            (e.g., the car), which may result in lower interest rates. Unsecured loans, on the other hand,
                            do not require any kind of collateral but have higher interest rates
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Benefits of Getting a Car Loan:</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Getting a car loan can offer you several benefits, depending on your financial status and needs. Some of
                    the potential benefits of a car loan are:

                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Low-interest Rates:
                        </li>
                        <p class="paraFont">
                            Car loans usually come with lower interest rates when compared to other types of loans to other
                            loans such as personal loans, business loans, or home loans. as they are secured loans. get loan
                            against property means that you'll end up paying less interest over the course of your loan,
                            which can save you a significant amount of money
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Fast Approval:
                        </li>
                        <p class="paraFont">
                            Car loans are usually approved quickly, especially if you have a good credit score. You can get
                            the funds you need to buy a car in a short amount of time. It usually has lenient eligibility
                            criteria and requires fewer documents, enabling lenders to process the loan quickly.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Flexibility:
                        </li>
                        <p class="paraFont">
                            Car loan offers tenure of up to 7 years. You can choose the tenure according to your financial
                            situation and needs. It also provides flexibility to choose the payment mode of the loan such as
                            a post-dated cheque, or auto-debit facility from where your EMIs will automatically get
                            deducted. Ensure that you have a sufficient balance in your bank account that will be used to
                            pay EMIs after the purchase
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">No Additional Collateral:
                        </li>
                        <p class="paraFont">
                            When you take a car loan, your car acts as collateral. You do not have to put in extra
                            collateral at the time of loan purchase. In case of failing to pay the lender back, your
                            collateral will be seized by the bank in order to cover the cost of your loan
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Different Options for Repayment:
                        </li>
                        <p class="paraFont">

                        </p>Car loans provide different options to repay your loan. Some of the repayment options are
                        regular EMis, step-up EMI, step-down EMI, special tie-up EMI, and Balloon EMI.


                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Build Credit:
                        </li>
                        <p class="paraFont">
                            If you make your car loan payments on time, it can help you build a positive credit history.
                            This can make it easier for you to get approved for other loans and credit cards in the future.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Allows Affordability:
                        </li>
                        <p class="paraFont">
                            A car loan allows you to buy a car that you might not be able to afford upfront. This can help
                            you get the car you need to get to work or take care of your family.
                        </p>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Car Loan Eligibility and Required Documents</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p>
                    The eligibility criteria to qualify for a car loan include:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The minimum age of the individual
                        applying for a car loan should be 18 years old and the maximum age should be 75 years old.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>The annual income of the car loan
                        applicant should be 3,00,000 per year.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>The car loan applicant either needs to
                        be salaried or self-employed with at least 2 years of experience.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>The applicant should be a resident of
                        India.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>The credit score of the car loan
                        applicant should be 750 or above.
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Required Documents For a Car Loan</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p>
                    The required documents for a car loan application are:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Identity proof such as PAN card,
                        Aadhar card, Voter ID, Passport
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Age proof

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Income proof
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>Signature verification


                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Photographs
                    </li>

                </ul>
            </div>



        </div>
    </section>

    <!-- <span id="secStart"></span> -->
    <section class="jumbotron">
        <h4 class="eligible text-center slide" id="txtjourney">Start Your Journey
        </h4>
        <div class="bar m-auto">&nbsp;</div>
        <br><br>
        <!-- 108 -->
        <!-- start otp -->
        <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel"
            aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="otpModalLabel" style="color: #1338be; text-align: center;"><b>Enter
                                OTP Code</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="closeOtpModal()">
                            <span aria-hidden="true">×</span>
                        </button>

                    </div>
                    <div class="modal-body text-center">
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

                        <!-- <p class="mt-3"><small>Didn't receive the OTP? <a href="#" class="resend-link">Resend OTP</a></small></p> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end otp -->

        <div id="divBanner">
            <div class="step-app" id="demo">
                <ul class="step-steps">
                    <li data-step-target="step1">step1</li>
                    <li data-step-target="step2">step2</li>
                    <li data-step-target="step3">step3</li>
                    <li data-step-target="step4" style="display: none;">step4</li>


                </ul>
                <div class="step-content">
                    <div class="step-tab-panel" data-step="step1" id="divstep12">
                        <!-- <h4 class="mb-3 text-center"><b>Number</b></h4> -->
                        <hr class="mb-4">
                        <form name="frmContact1" id="frmContact1" class="form-group label">
                            <div class="row">
                                <div class="form-group">
                                    <label for="mobileNumber1">Mobile Number <span style="color: red;">*</span></label>
                                    <input type="tel" class="form-control" id="mobileNumber1"
                                        placeholder="Enter your Mobile number" name="mobileNumber1">
                                </div>

                            </div>

                            <!-- <div class="form-group">
                <input type="checkbox" id="agreeCheckbox">
                <label for="agreeCheckbox" style="font-size: 12px;">I agree to proceed with the provided mobile number</label>
            </div> -->
                            <div class="form-group">
                                <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox">
                                <label for="agreeCheckbox" style="font-size: 14px; font-weight: normal;">By submitting
                                    this form, you have read and agree to the Credit Report Terms of Use, Terms of Use &
                                    Privacy Policy</label>
                            </div>
                            <!-- <button onclick="validateCheckbox()">Next</button> -->
                            <!-- <div id="errorContainer"  style="color: red;"></div> -->

                            <div class="step-footer mt-5">

                                <button data-step-action="next" class="step-btn btn btn-success"
                                    onclick="copyMobileNumber()">Next</button>
                            </div>

                        </form>
                    </div>

                    <div class="step-tab-panel" data-step="step2" id="divstep1">
                        <h4 class="mb-3 text-center"><b>Business Loan Information</b></h4>
                        <hr class="mb-4">
                        <form name="frmContact" id="frmContact" class="form-group label">
                            <!-- <form id="loanForm"> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name (As per Pan Card) <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobileNumber">Mobile Number <span style="color: red;">*</span></label>
                                        <input type="tel" class="form-control" id="mobileNumber"
                                            placeholder="Enter your Mobile number" name="mobileNumber" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="panCardNumber">PAN card <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="panCardNumber"
                                            name="panCardNumber"
                                            placeholder="Enter a valid PAN card Number (e.g. ABCDE1234F)." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth <span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email ID <span style="color: red;">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter your email" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pincode">Pincode <span style="color: red;">*</span></label><span
                                            id="error_pincode"></span>
                                        <input type="number" class="form-control" name="pincode" id="pincode"
                                            placeholder="Enter Pincode" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City <span style="color: red;">*</span></label><span
                                            id="error_city"></span>
                                        <input type="text" readonly style="background-color: white;"
                                            class="form-control" name="city" id="city">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">State <span style="color: red;">*</span></label><span
                                            id="error_state"></span>
                                        <input type="text" readonly style="background-color: white;"
                                            class="form-control" name="state" id="stateName">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender <span style="color: red;">*</span></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="male" name="gender"
                                                value="Male">
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="female" name="gender"
                                                value="Female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="other" name="gender"
                                                value="other">
                                            <label class="form-check-label" for="female">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-footer mt-5" id="divbtn">
                                <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                                <button data-step-action="next" class="step-btn btn btn-success">Next</button>
                                <!-- <button data-step-action="finish" class="step-btn btn btn-success" type="submit">Finish</button> -->
                            </div>

                        </form>
                    </div>




                    <div class="step-tab-panel" data-step="step3">
                        <h4 class="mb-3 text-center"><b>Employment Detail</b></h4>
                        <hr class="mb-4">
                        <form name="frmIncome" id="frmIncome" class="form-group label">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="homeOwnership">Do you own or rent your home?</label>
                                        <select id="homeOwnership" name="homeOwnership" required class="form-control">
                                            <option value="">Select One</option>
                                            <option value="Owned">Owned</option>
                                            <option value="Rented">Rented</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="currentLoan">Do you have any current loan?</label>
                                        <select id="currentLoan" name="currentLoan" required class="form-control">
                                            <option value="">Select One</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Have you finalized the Car?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="propertyFinalizedYes"
                                                name="propertyFinalized" value="Yes">
                                            <label class="form-check-label" for="propertyFinalizedYes">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="propertyFinalizedNo"
                                                name="propertyFinalized" value="No">
                                            <label class="form-check-label" for="propertyFinalizedNo">No</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currentBank">Current Bank Name <span
                                                style="color: red;">*</span></label>
                                        <select name="currentBank" id="currentBank" required class="form-control">
                                            <option value=" " disabled selected>Select Bank </option>
                                            <option value="Axis Bank">Axis Bank</option>
                                            <option value="Bandhan Bank">Bandhan Bank</option>
                                            <option value="Bank of Baroda">Bank of Baroda</option>
                                            <option value="Bank of India">Bank of India</option>
                                            <option value="Bank of Maharashtra">Bank of Maharashtra</option>
                                            <option value="Canara Bank">Canara Bank</option>
                                            <option value="Central Bank of India">Central Bank of India</option>
                                            <option value="CSB Bank">CSB Bank</option>
                                            <option value="City Union Bank">City Union Bank</option>
                                            <option value="DCB Bank">DCB Bank</option>
                                            <option value="Dhanlaxmi Bank">Dhanlaxmi Bank</option>
                                            <option value="Federal Bank">Federal Bank</option>
                                            <option value="HDFC Bank">HDFC Bank</option>
                                            <option value="Indian Bank">Indian Bank</option>
                                            <option value="Indian Overseas Bank">Indian Overseas Bank</option>
                                            <option value="ICICI Bank">ICICI Bank</option>
                                            <option value="IndusInd Bank">IndusInd Bank</option>
                                            <option value="IDBI Bank">IDBI Bank</option>
                                            <option value="IDFC FIRST Bank">IDFC FIRST Bank</option>
                                            <option value="Jammu &amp; Kashmir Bank">Jammu &amp; Kashmir Bank</option>
                                            <option value="Karnataka Bank">Karnataka Bank</option>
                                            <option value="Karur Vysya Bank">Karur Vysya Bank</option>
                                            <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                            <option value="Nainital bank">Nainital bank</option>
                                            <option value="Punjab and Sind Bank">Punjab and Sind Bank</option>
                                            <option value="Punjab National Bank">Punjab National Bank</option>
                                            <option value="State Bank of India">State Bank of India</option>
                                            <option value="UCO Bank">UCO Bank</option>
                                            <option value="Union Bank of India">Union Bank of India</option>
                                            <option value="RBL Bank">RBL Bank</option>
                                            <option value="South Indian Bank">South Indian Bank</option>
                                            <option value="Tamilnad Mercantile Bank">Tamilnad Mercantile Bank</option>
                                            <option value="YES Bank">YES Bank</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="loanType">Loan Type <span style="color: red;">*</span></label>
                                        <select id="loanType" name="loanType" class="form-control" required>
                                            <option value="" disabled selected>Select One</option>
                                            <option value="UsedCar">Used Car</option>
                                            <option value="NewCar">New Car</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="primaryBank">Primary Bank Account <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="primaryBank" name="primaryBank" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="step-footer mt-5" id="divbtn">
                                <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                                <button data-step-action="next" class="step-btn btn btn-success">Next</button>
                                <!-- <button data-step-action="finish" class="step-btn btn btn-success" type="submit">Finish</button> -->
                            </div>
                            <!-- <button type="submit">Submit</button> -->

                        </form>
                    </div>

                    <div class="step-tab-panel" data-step="step4" id="divstep3">
                        <!-- <h4 class="mb-3 text-center">(Employment Detail)</h4> -->
                        <!-- <hr class="mb-4"> -->
                        <form name="frmIncome1" id="frmIncome1" class="form-group label">
                            <!-- <div id="banner" style="display: none; "> -->
                            <div id="banner">
                                <img style="margin: auto;"
                                    src="https://assets-global.website-files.com/5ef0df6b9272f7410180a013/60c0e28575cd7c21701806fd_q1cunpuhbdreMPFRSFLyfUXNzpqv_I5fz_plwv6gV3sMNXwUSPrq88pC2iJijEV7wERnKXtdTA0eE4HvdnntGo9AHAWn-IcMPKV-rZw1v75vlTEoLF4OdNqsRb7C6r7Mvzrm7fe4.png"
                                    alt="Banner Image">
                                <button class="btn btn-primary" id="applyAgain"
                                    style="display: block; margin: auto;">Apply Again</button>
                            </div>
                            <!-- <div class="step-footer mt-5">
                            <button data-step-action="prev" class="step-btn btn btn-success">Previous</button>
                            <button class="btn btn-success" type="submit" id="btnFinsh">Finish</button>

                            
                        </div> -->
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
                                        class="form-control amount required" name="desired_amount"
                                        data-validation="required number"
                                        data-validation-error-msg="Please enter a valid loan amount" id="loan_amount"
                                        tabindex="1" value="" onkeyup="formatLoanAmount(this)">
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
                                        placeholder="Enter your PAN card number" maxlength="10"
                                        oninput="convertToUppercase()">
                                    <div class="error-message" id="pan-error">Enter a valid PAN card number (e.g.
                                        ABCDE1234F).
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="dob">Date of Birth</label><span style="color: red;">*</span>
                                    <div class="input-group">
                                        <input type="text" name="dob" id="dob"
                                            class="form-control dob-input" placeholder="DD/MM/YYYY">
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
                                        placeholder="Enter your city pincode"
                                        onchange="getCityStateFromPincode(this.value)" maxlength="6">
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
                                    <select name="occupation" name="employment_type" id="occupation"
                                        class="form-control" onchange="handleOccupationChange()">
                                        <option value="disabled selected">Select employment type</option>
                                        <option value="Salaried">Salaried</option>
                                        <option value="Business Owner">Business Owner</option>
                                        <option value="Self-employed Professional">Self-employed Professional</option>
                                    </select>
                                    <div class="error-message" id="occupation-error">Please select an employment type.
                                    </div>
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
                                    <input type="text" name="bank" id="bank" class="form-control"
                                        placeholder="">



                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                        </form>
                    </div>


                </div>



            </div>

            <!-- <div class="step-footer mt-5">
            <button data-step-action="prev" class="step-btn btn btn-success">Previous</button>
            <button data-step-action="next" class="step-btn btn btn-success">Next</button>
            <button data-step-action="finish" class="step-btn btn btn-success">Finish</button>
        </div> -->
            <div class="loader-container" id="loader" style="display: none;">
                <div class="loader">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="loader-text">Submitting...</div>
                </div>
            </div>
            <div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" id="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin-top: 40%;">
                        <div class="modal-header">
                            <h5 class="modal-title">Connect You Soon</h5>
                            <!-- <button type="button" class="close" onclick="ClosedModal()" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/front_end/asset/img/infoImage/thank_you_image_edit.jpg') }}"
                                alt="Apply Now" class="thankyouimage">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info" data-dismiss="modal"
                                id="btnModalClose">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end journey add by mannu -->


    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">How to Apply for a Car Loan Online?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p>
                    Here are some steps to guide you through the application process for a car loan:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>Choose a reputed lender after
                        comparing different lenders. Visit the official website of the bank or financial institution.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Check your loan eligibility, if you
                        are eligible for a car loan or not. Navigate the car loan section on the website and fill out the
                        application form. Must check your personal details before submitting the application.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Upload all the required documents
                        asked by the lender.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span>Submit your application. The lender
                        will verify the details and decide to take the application further, if it qualifies for a car loan.
                    </li>
                </ul>
            </div>



        </div>
    </section>
@endsection
