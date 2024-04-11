@extends('front_end_layout.home')
@push('startyourjourneystyle')
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/style.css') }}">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
    </style>
    <!--add by mannu start loader -->
    <style>
        .spinner {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            padding: 1.1px;
            background: conic-gradient(#0000 10%, #1338be) content-box;
            -webkit-mask: repeating-conic-gradient(#0000 0deg, #000 1deg 20deg, #0000 21deg 36deg),
                radial-gradient(farthest-side, #0000 calc(100% - 9px), #000 calc(100% - 9px));
            -webkit-mask-composite: destination-in;
            mask-composite: intersect;
            animation: spinner-d55elj 1s infinite steps(10);
        }

        @keyframes spinner-d55elj {
            to {
                transform: rotate(1turn);
            }
        }
    </style>
    <!-- end loader -->
    <style>
        #agreeCheckbox-error {
            font-size: 13px;
            font-weight: bold;
        }
    </style>
    <!-- <style>
                #myModal {
                    display: flex;
                    align-items: center;
                    
                }
            </style> -->
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
        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            /* padding: 8px; */
            text-align: center;

        }

        td img {
            display: block;
            margin: 0 auto;
            /* Center the image horizontally */
        }

        th {
            /* background-color: #f2f2f2; */
            font-size: 20px;
        }
    </style>

    <style>
        .bank-logo {
            max-width: 140px;
            margin-right: 5px;
            height: 35px;
            margin: 20px;
        }

        .flex-container1 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-control {
            height: calc(2.3em + 0.75rem + 0px);
        }

        /* for input show */
        .error-message {
            color: #F8981C;
            display: none;
        }

        /* .container {
                    max-width: 1000px;
                    margin-top: 50px;
                    color: #333;
                    font-family: Arial, sans-serif;
                } */

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


        /*
                .container {
                    max-width: 1000px;
                    margin-top: 50px;
                    color: #fff;
                    font-family: montserrat, Sans-Serif;
                    font-weight: 800px;
                    line-height: 30px;
                } */

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
        /* .bank-details .bankName {
                font-weight: 500;
                font-size: 16px;
                line-height: 26px;
                letter-spacing: -.008em;
                color: #14142b;
              } */

        .bank-details {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            min-width: 200px;
        }

        .bankLogo {
            max-width: 100px;
            width: 90px;
        }

        .bank-logo {
            max-width: 140px;
            margin-right: 5px;
            height: 35px;
            margin: 20px;
        }

        .flex-container1 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-control {
            height: calc(2.3em + 0.75rem + 0px);
        }

        /* for input show */
        .error-message {
            color: #F8981C;
            display: none;
        }

        /* .container {
                    max-width: 1000px;
                    margin-top: 50px;
                    color: #333;
                    font-family: Arial, sans-serif;
                } */

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



        /* .container {
                    max-width: 1000px;
                    margin-top: 50px;
                    color: #fff;
                    font-family: montserrat, Sans-Serif;
                    font-weight: 800px;
                    line-height: 30px;
                } */

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

    </style>
    <!--  -->
    <style>
        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        /* jquery validation */
        label.error {
            color: #e7505a;
            margin-left: 10px;
            padding: 7px;
        }
    </style>

    <!-- form step 7 -->
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
            width: auto;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #000;
            border-radius: 4px;
        }

        .selected1 {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #000;
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
        #demo .contactInput {
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
            /* background-color: #60a5fa;
                    color: #FFD756;
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
            font-size: 17px;
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

@push('startyourjourneyscript')
    <!-- newjs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>
    <script src="{{ asset('assets/js/pagejs/plcommon.js') }}"></script>




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
        }
    </script>
    <script>
        function closeOtpModal() {
            $('#otpModal').modal('hide');
        }
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
        // Validation for Step 1

        $(document).ready(function() {
            $.validator.addMethod("customIndianMobileNumber", function(value, element) {
                return /^[6-9]/.test(value);
            }, "Mobile number should start with a digit between 6 to 9");

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
                        // Add a custom rule for Indian mobile number validation
                        customIndianMobileNumber: true
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
                    //   panCardNumber: "Please enter a valid PAN card number",
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
        // Validation for Step 2 (Employment Detail)

        $(document).ready(function() {
            $("#frmIncome").validate({
                rules: {
                    employmentType: "required",
                    monthlySalary: "required",
                    loanAmount: "required",
                    yearlyIncome: "required",
                    companyName: "required"
                },
                messages: {
                    employmentType: "Please select Employment Type",
                    monthlySalary: "Please select Monthly Net Take-Home Salary",
                    loanAmount: "Please select Desired Loan Amount",
                    yearlyIncome: "Please select Yearly Income",
                    companyName: "Please select Company Name"
                },
                // Add other customization options if needed
            });
        });
    </script>



    <script>
        //step1
        var initialTime = 300; // 5 minutes * 60 seconds

        function startTimer() {
            timerOn = true;
            timer(initialTime);
        }

        function timer(remaining) {
            var s = remaining % 60;
            var m = Math.floor(remaining / 60);

            var formattedTime = `${m < 10 ? '0' + m : m} : ${s < 10 ? '0' + s : s}`;
            $("#countdown").html(`Time left: ${formattedTime}`);

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
                url: "{{ website_api_base_url() }}" + '/otpsend/' + phonnumber,
                type: 'GET', // Adjust based on API requirement
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    // alert("responseget");
                    // const parsedResponse = JSON.parse(response);
                    // const parsedResponse = response['retrun'];
                    // console.log(parsedResponse);


                    // console.log('Sent' + parsedResponse['return']);

                    if (response['return']) {
                        $('#otpModal').modal('show');
                        startTimer();
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
                url: "{{ website_api_base_url() }}" + '/otpsend/verify',
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

                    if (!window.setCookesOtpCheckStatus) {
                        alert("Please Confirm Your Otp First");
                        return false;
                    }


                }

                if (currentIndex === 0 && newIndex === 1 && stepDirection === 'forward') {
                    var phoneNumber = $('#mobileNumber1').val();
                    window.setUserMobileNumber = phoneNumber;
                    var agree = $('#agreeCheckbox').prop('checked');



                    if (!window.setCookeschecked) {
                        // Check if the checkbox is checked before sending OTP
                        if (agree) {
                            checkAndSendOtp(phoneNumber, agree);
                        } else {
                            // If checkbox is not checked, you can choose to handle it here
                            console.log('Checkbox is not checked. Do something if needed.');
                        }
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

                    var salary = $('#monthlySalary').val();
                    console.log(salary + " salary is here");

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
                    $(".spinner").show();
                    $.ajax({
                        type: "POST",
                        url: "{{ website_api_base_url() }}/personal-loan-apply",
                        data: formDataObject,
                        success: function(response) {
                            $(".spinner").hide();
                            console.log(response);
                            // Handle the response from the server
                        },
                        error: function(error) {
                            console.error("AJAX request failed:", error);
                        }
                    });
                    // end new code



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

    <!-- end journey -->

    <!-- end for form -->


   

    <script>
        $(document).ready(function() {
            $("#loan-form").submit(function(event) {
                event.preventDefault();

                if (validateForm()) {
                    $("#loader").show(); // Show loader


                    setTimeout(function() {
                            $("#loader").hide(); // Hide loader
                            displaySuccessMessage();

                        },
                        2000); // Simulate a 2-second delay, replace with actual API response handling logic
                }
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            // Validate Date of Birth input
            $('#dob').on('change', function() {
                var dobInput = $(this).val();
                if (dobInput.value.trim() === '') {
                    $('#dob-error').show();
                } else {
                    $('#dob-error').hide();
                }
            });
        });
    </script>


    <!-- city state from pincode -->
    <script>
        $('#pincode').on('input', function() {
            var pincode = $(this).val(); // Get the value of the input field
            // console.log("input"+inputValue);  https://api.postalpincode.in/pincode/
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
@endpush
@push('personalLoanStyle')





    <!-- extra add for start your journey -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/jquery-steps.js"></script>
  
    <style>
        .div123 {
            position: relative;
            text-align: center;
            color: white;
        }

        .bottom-left {
            position: absolute;
            bottom: 50%;
            left: 15%;
            /* color: green; */

        }

        .top-left {
            position: absolute;
            top: 8px;
            color: green;

            left: 16px;
        }

        .top-right {
            position: absolute;
            top: 8px;
            right: 16px;
            color: green;

        }

        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
            color: green;

        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            color: green;

            transform: translate(-50%, -50%);
        }
    </style>

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


        .headingMain {
            color: #1338be;
        }
    </style>
@endpush

@push('personalLoanScripts')
    <!-- newjs -->
    <script src="{{ asset('assets/front_end/asset/css/newjs/jquery-steps.min.js') }}"></script>



    <!-- newjs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>





    <script>
        $(document).ready(function() {
            $("#loan-form").submit(function(event) {
                event.preventDefault();

                if (validateForm()) {
                    $("#loader").show(); // Show loader


                    setTimeout(function() {
                            $("#loader").hide(); // Hide loader
                            displaySuccessMessage();
                        },
                        2000); // Simulate a 2-second delay, replace with actual API response handling logic
                }
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($) {

            // Validate Date of Birth input
            $('#dob').on('change', function() {
                var dobInput = $(this).val();
                if (dobInput.value.trim() === '') {
                    $('#dob-error').show();
                } else {
                    $('#dob-error').hide();
                }
            });
        });
    </script>
@endpush

@section('content')
    <div class="">

        <img class="card-img" src="{{ website_asset_base_url() }}/images/web_img/personalloanbanner1.png" alt="Card image"
            width="auto" />
    </div>


    <section class="">
        <div class="container-fluid mt-4">
            <div class="row">

                <div class="col-md-12">
                        <h4 class="card-title eligible slide">Personal Loan</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">A personal loan is an unsecured loan provided by financial institutions to
                            individuals for personal
                            expenses such as the cost of debt consolidation, home improvement, medical expenses, education,
                            vacation, or any other personal need. Everybody wants to be financially stable at some point in
                            their
                            lives. A personal loan is a financial tool that can be your savior in unexpected situations with
                            <a href="{{ website_base_url() }}" style="text-decoration: n;"><b>Myzeon</b></a>
                            that you can face in your life. These loans come with fixed interest rates which means your
                            monthly
                            payments remain the same over the predetermined time of the loan. Apply personal loan online to
                            get
                            the
                            best deal on a personal loan with lower interest rates. The repayment period of a personal loan
                            ranges
                            from one to seven years. Your eligibility and interest rate are assessed based on your credit
                            history.
                        </p>
                   
                </div>
            </div>
        </div>
    </section>




    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="card-title eligible slide ">When to Consider a Personal Loan?
                </h4>
                <div class="bar m-auto">&nbsp;</div>
            </div><br><br>


            <p class="paraFont">Personal loans can come to the rescue in various financial scenarios. If you are
                struggling to pay the monthly payment of your high-interest credit card debt then a personal loan
                can be used to quickly and easily access funds with lower interest rates. The benefits of a personal
                loan can be availed in unexpected medical bills, home repairs, or car troubles for a quick source of
                funds to cover these costs. You can also celebrate your life’s milestones without draining your
                savings for a wedding, or a dream vacation. You can get the lowest personal loan interest rate if
                you have a good credit score. Keep in mind that a poor credit score may not qualify you for getting
                a personal loan.
            </p>
        </div>
    </section>

     


            <section class="container-fluid">
                <div class="container-fluid mt-4">


                    <div class="mt-4">

                        <h4 class="eligible slide">What Are Eligibility Criteria For Personal Loan?
                        </h4>
                        <div class="bar m-auto">&nbsp;</div>
                        <br><br>

                        <p class="paraFont">Personal loan eligibility plays a crucial role in getting you a personal loan
                            with lower
                            interest rates. Some of the key factors that lenders consider are:
                        </p>
                        <br>
                        <div class="conatiner-fluid">
                            <ul>
                                <li style="list-style: disc;" class="paraFont eligible">Credit Score: </li>
                                <p class="paraFont">AYour credit history decides whether you are eligible for a loan or not.
                                    It
                                    demonstrates your ability to manage loans responsibly. A good credit score is usually
                                    above 700
                                    which can qualify you for a lower personal loan interest rate. </p>
                                <li style="list-style: disc;" class="paraFont eligible">Term Loans</li>
                                <p class="paraFont">A term loan is a loan that needs to be repaid in EMIs over a set period
                                    of time.
                                    There are three
                                    types of term loans, short-term, intermediate-term, and long-term loans. Short-term
                                    loans have a
                                    duration of 12 months, whereas repayment tenure for intermediate-term and long-term
                                    loans ranges
                                    between 1 to 5 years.</p>
                                <li style="list-style: disc;" class="paraFont eligible">Income</li>
                                <p class="paraFont">To be able to repay the loan, you need to have a reliable source of
                                    income. Lenders
                                    require a minimum income level of an individual before securing them a personal loan. A
                                    higher
                                    income grants a larger loan amount.
                                </p>
                                <li style="list-style: disc;" class="paraFont eligible">Employment Status:</li>
                                <p class="paraFont">Except for a stable income, you must have stable employment. Lenders may
                                    look at
                                    your job history to assess your ability to repay the loan. Being self-employed can also
                                    work in your
                                    favor.
                                </p>

                                <li style="list-style: disc;" class="paraFont eligible">Debt-to-income Ratio:</li>
                                <p class="paraFont">The debt-to-income ratio is the percentage of your monthly income that
                                    is spent on
                                    paying existing debts. The higher the DTI ratio, the lower the chances of qualifying for
                                    a loan. A
                                    lower DTI ratio makes you highly eligible for a personal loan.

                                </p>
                                <li style="list-style: disc;" class="paraFont eligible">Age:</li>
                                <p class="paraFont">The minimum age to qualify for a loan is 18 years but it can vary for
                                    different
                                    lenders. Some lenders require 21 years of age but some can avail you of a personal loan
                                    at 18 years
                                    of age.


                                </p>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>


            <div class="container-fluid mt-4">
                <div>
                    <div>
                        <h4 class="eligible slide">
                            Documents For Personal Loans That Required:
                        </h4>
                        <div class="bar m-auto">&nbsp;</div>
                    </div><br><br>
                    <p class="paraFont">The necessary documentation for <a
                            href="https://www.myzeon.com/blog/how-to-apply-for-personal-loan-online-in-5-easy-steps">easy
                            steps for
                            an online personal loan</a> is very important
                        for lenders who require these documents to assess your eligibility and the value of credit. Get
                        ready with
                        these documents to streamline the application process for a personal loan:
                    </p>
                    <ul>
                        <li class="paraFont">
                            <i class="fas fa-id-card-alt" style="color: #1338be;"></i>
                            Identity proof (Aadhar card, PAN card, Passport, etc)
                        </li><br>

                        <li class="paraFont ">
                            <i class="fas fa-birthday-cake" style="color: #1338be;"></i>
                            Proof of Age (Birth Certificate, Passport, Aadhar Card, etc)
                        </li><br>

                        <li class="paraFont ">
                            <i class="fas fa-address-card" style="color: #1338be;"></i>
                            Proof of Address (Electricity bill, Rent agreement, bank statement with your address, etc)
                        </li><br>

                        <li class="paraFont ">
                            <i class="fas fa-file-invoice-dollar" style="color: #1338be;"></i>
                            Proof of Income (for salaried employees - payslip, a letter from your employer stating your
                            income. For
                            self-employed individuals - profit and loss statement, bank statements.)
                        </li><br>

                        <li class="paraFont ">
                            <i class="fas fa-file-alt" style="color: #1338be;"></i>
                            Bank statements of 2-3 months to assess your financial stability and transaction history.
                        </li><br>
                    </ul>
                </div>

                <span id="secStart"></span>
            </div>

            <!-- <span id="secStart"></span> -->
            <section class="container-fluid">
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
                                <h5 class="modal-title" id="otpModalLabel" style="color: #1338be; text-align: center;">
                                    <b>Enter
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
                                        <span class="d-block mobile-text" id="resend" class="cursor">Don't receive the
                                            code?
                                            Resend</span>

                                    </div>
                                </form>

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
                                <hr class="mb-4">
                                <form name="frmContact1" id="frmContact1" class="form-group label">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="mobileNumber1">Mobile Number <span
                                                    style="color: red;">*</span></label>
                                            <input type="tel" class="form-control" id="mobileNumber1"
                                                placeholder="Enter your Mobile number" name="mobileNumber1" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox">
                                        <label for="agreeCheckbox" style="font-size: 14px; font-weight: normal;">By
                                            submitting
                                            this form, you have read and agree to the Credit Report Terms of Use, Terms of
                                            Use &
                                            Privacy Policy</label>
                                    </div>

                                    <div class="step-footer mt-5">
                                        <button data-step-action="next" class="step-btn btn btn-success"
                                            onclick="copyMobileNumber()">Next</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Your Step 2 Form -->
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
                                                <label for="mobileNumber">Mobile Number <span
                                                        style="color: red;">*</span></label>
                                                <input type="tel" class="form-control" id="mobileNumber"
                                                    placeholder="Enter your Mobile number" name="mobileNumber" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="panCardNumber">PAN card <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="panCardNumber"
                                                    name="panCardNumber"
                                                    placeholder="Enter a valid PAN card Number (e.g. ABCDE1234F)."
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth <span
                                                        style="color: red;">*</span></label>
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
                                                <label for="pincode">Pincode <span
                                                        style="color: red;">*</span></label><span
                                                    id="error_pincode"></span>
                                                <input type="number" class="form-control" name="pincode" id="pincode"
                                                    placeholder="Enter Pincode" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City</label><span id="error_city"></span>
                                                <input type="text" readonly style="background-color: white;"
                                                    class="form-control" name="city" id="city">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state">State</label><span id="error_state"></span>
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
                                                    <input class="form-check-input" type="radio" id="male"
                                                        name="gender" value="Male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="female"
                                                        name="gender" value="Female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="other"
                                                        name="gender" value="other">
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

                            <div class="step-tab-panel" data-step="step3" id="divstep2">
                                <h4 class="mb-3 text-center"><b>Employment Detail</b></h4>
                                <hr class="mb-4">
                                <form name="frmIncome" id="frmIncome" class="form-group label">
                                    <div class="row">
                                        <div class="col-md-6">


                                            <div class="form-group">
                                                <label for="employmentType">Employment Type <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" id="employmentType" name="employmentType"
                                                    required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="salaried">Salaried</option>
                                                    <option value="selfEmployed">Self-employed</option>
                                                    <!-- <option value="selfEmployedCA">Self-Employed (Dr./CA)</option> -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="monthlySalary">Monthly Net Take-Home Salary <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" id="monthlySalary" name="monthlySalary"
                                                    required>
                                                    <option value=""disabled selected>Select Monthly Salary</option>
                                                    <option value="0-20K">0 - ₹20,000</option>
                                                    <option value="20K-1L">₹20,000 - 1L</option>
                                                    <option value="1L-5L">1L - 5L</option>
                                                    <option value="5L-10L">5L - 10L</option>
                                                    <option value="10L-15L">10L - 15L</option>
                                                    <option value="MoreThan15L">More than 15L</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="loanAmount">Desired Loan Amount <span
                                                        style="color: red;">*</span></label>
                                                <!-- <input type="text" class="form-control" id="loanAmount" name="loanAmount" placeholder="Enter desired amount" required> -->
                                                <select class="form-control" id="loanAmount" name="loanAmount" required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="upto1L">Up to ₹1 Lacs</option>
                                                    <option value="2to4L">₹2 - ₹4 Lacs</option>
                                                    <option value="5to7L">₹5 - ₹7 Lacs</option>
                                                    <option value="8to10L">₹8 - ₹10 Lacs</option>
                                                    <option value="10">₹10 - ₹12 Lacs</option>
                                                    <option value="20">₹12 - ₹14 Lacs</option>
                                                    <option value="30">₹15 - ₹20 Lacs</option>
                                                    <option value="40">₹20 - ₹30 Lacs</option>
                                                    <option value="50">₹30 - ₹50 Lacs</option>
                                                    <option value="60">₹50 - ₹75 Lacs</option>
                                                    <option value="70">₹75 - ₹1 Cr</option>
                                                    <option value="80">₹1 Cr+</option>
                                                </select>
                                                </select>
                                            </div>



                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="yearlyIncome">Select Yearly Income <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-control" id="yearlyIncome" name="yearlyIncome"
                                                    required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="upto3L">Up to ₹3 Lacs</option>
                                                    <option value="3to5L">₹3 - ₹5 Lacs</option>
                                                    <option value="6to10L">₹6 - ₹10 Lacs</option>
                                                    <option value="10to15L">₹10 - ₹15 Lacs</option>
                                                    <option value="16to25L">₹16 - ₹25 Lacs</option>
                                                    <option value="26Lplus">₹26 Lacs+</option>
                                                </select>
                                            </div>
                                            <!-- <div class="form-group">
                                        <label for="mobileNumber1">Mobile Number <span style="color: red;">*</span></label>
                                        <input type="tel" class="form-control" id="mobileNumber1"
                                            placeholder="Enter your Mobile number" name="mobileNumber1" required>
                                    </div> -->


                                            <!-- Add this field in the form for step 7 (Loan Information) -->
                                            <div class="form-group">
                                                <label for="companyName">Company Name <span
                                                        style="color: red;">*</span></label>
                                                <input type="companyName" class="form-control" id="companyName"
                                                    placeholder="Enter company name" name="companyName" required>

                                                <!-- <select class="form-control" id="companyName" name="companyName" required>
                                                <option value="" disabled selected>Select Company Name</option>
                                                <option value="ABC Loans">ABC Loans</option>
                                                <option value="XYZ Finance">XYZ Finance</option>
                                                <option value="123 Lenders">123 Lenders</option>
                                            </select> -->
                                            </div>

                                        </div>

                                    </div>
                                </form>
                                <div class="step-footer mt-5">
                                    <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                                    <button data-step-action="next" class="step-btn btn btn-success">Next</button>


                                </div>
                            </div>
                            <div class="spinner" style="display: none;"></div>
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

                                </form>
                            </div>



                            <div class="step-tab-panel" data-step="step7">

                                <form id="loan-form" onsubmit="return validateForm()">
                                    <div class="form-row" id="scrolldiv">
                                        <div class="col-md-4 form-group">
                                            <label for="name">Enter Full Name</label><span
                                                style="color: red;">*</span>
                                            <input type="text" name="first_name" id="name" class="form-control"
                                                placeholder="Enter your name">
                                            <div class="error-message" id="name-error">Enter your Full Name.</div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="phone">Enter Phone Number</label><span
                                                style="color: red;">*</span>
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
                                                data-validation-error-msg="Please enter a valid loan amount"
                                                id="loan_amount" tabindex="1" value=""
                                                onkeyup="formatLoanAmount(this)">
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
                                                placeholder="Enter your city" readonly>
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
                                            <label for="occupation">Employment Type</label><span
                                                style="color: red;">*</span>
                                            <select name="occupation" name="employment_type" id="occupation"
                                                class="form-control" onchange="handleOccupationChange()">
                                                <option value="">Select employment type</option>
                                                <option value="Salaried">Salaried</option>
                                                <option value="Business Owner">Business Owner</option>
                                                <option value="Self-employed Professional">Self-employed Professional
                                                </option>
                                            </select>
                                            <div class="error-message" id="occupation-error">Please select an employment
                                                type.
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
                                <div class="loader-container" id="loader" style="display: none;">
                                    <div class="loader">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="loader-text">Submitting...</div>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>



            </section>



            <section class="container-fluid">
                <div class="container-fluid mt-4">
                    <div>
                        <h4 class="eligible slide">How Can You Apply Personal Loan Online?
                        </h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">Here are some steps that you should take before applying for a personal loan:
                        </p>


                        </p>
                        <ul>
                            <li style="list-style: disc;" class="paraFont eligible">Check if You Are Eligible
                            </li>
                            <p class="paraFont">The qualification of a personal loan largely depends on the individual’s
                                personal
                                loan eligibility. Check the official website of the lender and look out for the eligibility
                                criteria
                                set by them. The common eligibility criteria to qualify for a personal loan are age, income,
                                credit
                                score, employment status, and more.
                            </p>

                            <li style="list-style: disc;" class="paraFont eligible">Compare and Analyze Interest Rates
                            </li>
                            <p class="paraFont">Research about different lenders that are offering personal loan. Also,
                                remember to
                                compare each offer on the basis of their interest rates and loan term. Choose the most
                                suitable
                                option for yourself that suits your needs and financial health. Make sure the best offer is
                                the one
                                in which the personal loan interest rate is lower than your income to prevent the lack of
                                financial
                                resources.</p>

                            <li style="list-style: disc;" class="paraFont eligible">Compile Necessary Documents

                            </li>
                            <p class="paraFont">Personal loan documents play a vital role in qualifying for a personal loan
                                and
                                getting approval instantly. Documents are collected for the verification of your identity.
                                Before
                                applying for a loan, you can gather all the documents such as proof of identity, proof of
                                address,
                                income proof, passport-sized photograph, and other documents required by the lender.
                            </p>

                            <li style="list-style: disc;" class="paraFont eligible">Fill Out Online Application Form
                            </li>
                            <p class="paraFont">Fill out the online application form from the official website of the
                                lender after
                                all the research and comparison with other lenders. Fill up your personal details in the
                                form
                                carefully and accurately. This process may include contact details, bank details, employment
                                details, or financial information.
                            </p>

                            <li style="list-style: disc;" class="paraFont eligible">Upload Personal Loan Documents

                            </li>
                            <p class="paraFont">Scan all the documents asked by the lender and upload them on the lender’s
                                website.
                                Check that every document is clear and visible in pictures. After this step, you have to
                                wait for
                                the processing of your application.</p>

                        </ul>
                    </div>
                </div>
            </section>

            <section class="container-fluid">
                <div class="container-fluid">
                    <div>
                        <h4 class="eligible slide">What Are Benefits Of A Personal Loan?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">You can manage your finances, navigate expenses, and meet your goals with the
                            funds
                            provided by a personal loan. It has numerous benefits such as:
                        </p>


                        </p>
                        <ul>
                            <li style="list-style: disc;" class="paraFont eligible">Quick Approval:
                            </li>
                            <p class="paraFont">Apply personal loan online and get a quick approval for your loan. It is
                                easier and
                                faster to secure than other types of loans. Individuals seeking to obtain a personal loan
                                may
                                benefit from the expediency and simplicity of the online application process, which allows
                                for rapid
                                approval.

                            </p>

                            <li style="list-style: disc;" class="paraFont eligible">Fixed Terms:
                            </li>
                            <p class="paraFont">he fixed interest rates of a personal loan mean your monthly payments
                                remain the
                                same throughout the loan term. This can help you budget your expenses resulting in easy
                                management
                                of your finances.
                            </p>

                            <li style="list-style: disc;" class="paraFont eligible">No Security:

                            </li>
                            <p class="paraFont">These loans are unsecured loans which means that you do not need to provide
                                collateral in order to secure a loan. This reduces the risk of losing your assets in case of
                                fail to
                                repay the loan. Personal loan interest rates are higher than business loan interest rates as
                                it
                                provide funds without any collateral.

                            </p>

                            <li style="list-style: disc;" class="paraFont eligible">Multiple Uses:
                            </li>
                            <p class="paraFont"> Whether you want to cover the expense of a wedding, a dream vacation,
                                education,
                                medical bills, home renovation, or any unexpected financially draining situation, you can
                                always
                                depend on a personal loan. These funds can be availed quickly and easily in times of
                                emergency.
                            </p>

                            <li style="list-style: disc;" class="paraFont eligible">Credit Building:

                            </li>
                            <p class="paraFont">Timely repayments of the personal loan can reflect positively on your
                                credit score.
                                It demonstrates your responsible use of funds, which results in an improved credit history
                                and a
                                higher credit score.</p>

                        </ul>
                    </div>
                </div>
            </section>


            <section class="container-fluid">
                <div class="container-fluid mt-3 mb-4">
                    <div>
                        <h4 class="eligible slide">Top Banks Providing Personal Loans
                        </h4>
                        <div class="bar m-auto">&nbsp;</div>
                    </div><br><br>
                    <div class="row">




                        <table class="table table-bordered ">

                            <tr>
                                <th colspan="2">Bank </th>

                                <th><span style="color: red; font-size: 15px;">*</span> Rate of Interest</th>
                            </tr>

                            <tbody>
                                <tr>
                                    <td style="height: 60px;"><img
                                            src="{{ website_asset_image_base_url() }}/img/bankLogo/HDFC1.jpg"
                                            alt="Bank 1"></td>
                                    <td>HDFC Bank</td>
                                    <td>10.25%</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/Indusland2.jpg"
                                            alt="Bank 2"></td>
                                    <td>Indusland Bank</td>
                                    <td>10.75%</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/standard_bank.jpg"
                                            alt="Bank 3"></td>
                                    <td>Standard Bank</td>
                                    <td>11.00%</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/Axis4.jpg"
                                            alt="Bank 4"></td>
                                    <td>Axis Bank </td>
                                    <td>10.50%</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/kotak_bank.jpg"
                                            alt="Bank 5" style="height: 44px;
                    width: 80px;"></td>
                                    <td> Kotak Mahindra Bank </td>
                                    <td>11.25%</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/icici_bank.jpg"
                                            alt="Bank 6"></td>
                                    <td> ICICI Bank </td>
                                    <td>12.25%</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/idfc_bank.jpg"
                                            alt="Bank 7"></td>
                                    <td> IDFC Bank </td>
                                    <td>13.25%</td>
                                </tr>
                                <tr style="height: 60;">
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/Bajaj3.jpg"
                                            alt="Bank 8"></td>
                                    <td> Bajaj Finserv Bank </td>
                                    <td>14.25%</td>
                                </tr>
                                <tr>
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/Yesbank5.jpg"
                                            alt="Bank 9"></td>
                                    <td> Yes Bank </td>
                                    <td>15.25%</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td><img src="{{ website_asset_image_base_url() }}/img/bankLogo/paysense_bank.jpeg"
                                            alt="Bank 10" style="
                    height: 40px; ">
                                    </td>
                                    <td> Paysense Bank </td>
                                    <td>16.25%</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3"><span style="color: red; font-size: 15px;">*</span> The rate of
                                        interest
                                        mentioned here may vary from time to time. To get the accurate and precise
                                        information on
                                        interest rate, contact our financial experts at our contact number provided.</td>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>


            <script>
                // Attach a click event to the "Finish" button
                $('#NextBtn').on('click', function() {
                    // Check if all required fields are filled
                    if (validateForm()) {
                        // Show an alert message when the button is clicked
                        alert('Thank you for submitting your form');
                    } else {
                        // Optional: You can add additional logic here, e.g., display an error message
                        console.log('Please fill in all required fields before submitting.');
                    }
                });

                // Validation function to check if all required fields are filled
                function validateForm() {
                    // Modify this function based on your form structure and requirements
                    var isValid = true;

                    // Check each required field
                    $('input, select').each(function() {
                        if ($(this).prop('required') && $(this).val().trim() === '') {
                            isValid = false;
                            return false; // Exit the loop early if an empty required field is found
                        }
                    });

                    return isValid;
                }
            </script>




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
                function buttonSumbitMobileNoClick(mobileno, checkbok) {
                    console.log("button click" + mobileno + checkbok);

                    if (mobileno !== '' && mobileno !== undefined && mobileno !== null) {
                        console.log("call if");

                    } else {
                        console.log("call else");

                    }



                }
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

                        this.count == 1;

                    }


                }
            </script>
            <script>
                const printMobileNo = () => {
                    console.log(this.$data.mobileNo);
                };

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
                }
            </script>

            <script>
                function submitFormTest() {

                    console.log("submitFormTest function");
                }
            </script>
        @endsection
