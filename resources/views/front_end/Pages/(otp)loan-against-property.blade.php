@extends('front_end_layout.home')
@push('startyourjourneystyle')
    <!-- <link rel="stylesheet" href="../dist/jquery-steps.css"> -->

    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/style.css') }}">

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

@push('personalLoanScript')
    <!-- newjs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>


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
        $(document).ready(function() {
            // Validation for Step 3 (Employment Detail)
            $("#frmIncome").validate({
                rules: {
                    desiredLoanAmount: "required",
                    monthlyIncome: "required",
                    tenure: "required",
                    employmentStatus: "required",
                    homeOwnership: "required",
                    currentLoan: "required",
                    loanType: "required",
                    currentBank: "required",

                    primaryBank: {
                        required: true,
                        //   lettersonly: true
                    },

                    property: {
                        required: true,
                        digits: true,
                    },
                },
                messages: {
                    desiredLoanAmount: "Please select the desired loan amount",
                    monthlyIncome: "Please select the monthly income",
                    tenure: "Please select the tenure",
                    employmentStatus: "Please select the employment status",
                    homeOwnership: "Please select how you heard about us",
                    currentLoan: "Please select the relation to the property",
                    loanType: "Please select if any loan is running",
                    currentBank: "Please select the current bank",
                    primaryBank: "Please enter the primary bank account",
                    property: "Please enter the property market value",
                },
                // Add other customization options if needed
            });
        });
    </script>
    <!-- <script>
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
    </script> -->

    <script>
        //step1

        function checkAndSendOtp(phonnumber, checkstatus) {
            $.ajax({
                url: 'http://192.168.120.228/myzeon_web/index.php/api/otpsend/' + phonnumber,
                type: 'GET', // Adjust based on API requirement
                success: function(response) {
                    const parsedResponse = JSON.parse(response);
                    console.log('Sent' + parsedResponse['return'])

                    if (parsedResponse['return']) {
                        $('#otpModal').modal('show');

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

        function VerifyResponseOtp(phone_number,otp) {
            console.log('Verifying response'+"phone_number="+phone_number+"otp="+otp);
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

                    checkAndSendOtp(phoneNumber, agree);
                    // Ajax request

                    // $.ajax({
                    //     url: 'http://192.168.120.228/myzeon_web/index.php/api/apply-for-detail/' +
                    //         phoneNumber, // Replace with your server endpoint
                    //     type: 'GET', // Change to 'GET' or 'POST' depending on your needs
                    //     success: function(response) {
                    //         console.log(response);
                    //         var data = JSON.parse(response.responce);
                    //         console.log(data);
                    //     },

                    // });

                    if (stepDirection === 'forward') {
                        return frmContact.valid();
                    }

                    console.log('step1');

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
                    $(".spinner").show();
                    $.ajax({
                        type: "POST",
                        url: "http://192.168.120.228/myzeon_web/index.php/api/property-loan-apply",
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

    <!-- end journey -->


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



    <script>
        $("#btnModalClose").on('click', function() {
            // $("#modal").hide();
            $('#myModal').modal('hide');
            window.location.href = "http://192.168.120.228/myzeon_web/index.php//loan-against-property";
            // window.location.href = "{{ route('home') }}"
        })
    </script>
    <!-- <script>
        function copyMobileNumber() {
            // Copy the mobile number from Step 1 to Step 2
            const mobileNumberStep1 = $("#mobileNumber1").val();
            $("#mobileNumber").val(mobileNumberStep1);
        }
    </script> -->
    <!-- autofill number -->
    <script>
        function copyMobileNumber() {
            const mobileNumberStep1 = $("#mobileNumber1").val();
            $("#mobileNumber").val(mobileNumberStep1);
            // $('#otpModal').modal('show');
        }

        function verifyOTP() {
            
            var phoneNumber = $('#mobileNumber1').val();
            otp             = $("#otpInput").val();

            VerifyResponseOtp(phoneNumber,otp);



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
@endpush


@section('content')
    <div class="">

        <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/loan_against_pro.jpeg"
            alt="Card image" width="auto" style="margin-top: 100px;" />
    </div>

    <section class="">
        <div class="container-fluid mt-4">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">What Is A Loan Against Property?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            A loan against property also considered as a mortgage loan is a secured loan where the borrower
                            needs to pledge their property as collateral to secure the loan. The property could be
                            residential,
                            commercial, or industrial which serves as a security for the lender in case the borrower fails
                            to
                            repay the loan. The interest rates of a loan against property are generally lower as it is a
                            secured
                            loan. The amount of the loan is calculated on the basis of the market value of the property
                            being
                            mortgaged. The borrower is free to use the funds obtained through a loan against a property for
                            various purposes whether it is business expansion, education, medical expenses, and other
                            personal
                            needs.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Eligibility Criteria For Loan Against Property</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p>
                    Most lenders evaluate borrowers’ eligibility by factors like income, age, credit history, and the
                    property’s value. The eligibility criteria for a loan against property could differ from lender to
                    lender. Here are some common eligibility criteria based on which lender decides to give a loan:
                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The borrower should be an Indian
                        citizen and reside in India with property.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The borrower must be 25 years old to
                        85 years old in order to qualify for a loan against property.
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The CIBIL score must be 750 or higher
                        to get approval for the loan. It is the most vital eligibility criterion if you are thinking of
                        applying for a loan against property, you must check your credit score.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The borrower should be a permanent
                        employee of an organization with 2-3 years of experience.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> The minimum income of the borrower
                        should be 2-3 lakhs per annum.

                    </li>

                </ul>
            </div>



        </div>
    </section>
    <!-- form -->

    <!--  -->




    <!-- journey new -->
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
                        </form>
                        <p class="mt-3"><small>Didn't receive the OTP? <a href="#" class="resend-link">Resend
                                    OTP</a></small></p>
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

                            <!-- <form id="loanForm"> -->
                            <div class="row">



                                <div class="form-group">
                                    <label for="mobileNumber1">Mobile Number <span style="color: red;">*</span></label>
                                    <input type="tel" class="form-control" id="mobileNumber1"
                                        placeholder="Enter your Mobile number" name="mobileNumber1">
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox">
                                <label for="agreeCheckbox" style="font-size: 14px; font-weight: normal;">By submitting
                                    this form, you have read and agree to the Credit Report Terms of Use, Terms of Use &
                                    Privacy Policy</label>
                            </div>

                            <div class="step-footer mt-5">
                                <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                                <!-- <button data-step-action="next" class="step-btn btn btn-success">Next</button> -->
                                <button data-step-action="next" class="step-btn btn btn-success"
                                    onclick="copyMobileNumber()">Next</button>
                                <!-- <button data-step-action="finish" class="step-btn btn btn-success" type="submit">Finish</button> -->
                            </div>

                        </form>
                    </div>
                    <div class="step-tab-panel" data-step="step2" id="divstep1">
                        <h4 class="mb-3 text-center"><b>Loan-Against-Property Information</b></h4>
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
                                            required>
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
                            <!-- <form id="loanApplicationForm"> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="desiredLoanAmount">Desired Loan Amount <span
                                                style="color: red;">*</span></label>
                                        <select id="desiredLoanAmount" name="desiredLoanAmount" required
                                            class="form-control">
                                            <option value="" disabled selected>Select Desired Loan Amount</option>
                                            <option value="0-3L">0 - 3L</option>
                                            <option value="3L-5L">3L - 5L</option>
                                            <option value="5-10L">5 - 10L</option>
                                            <option value="MoreThan10L">More than 10L</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="monthlyIncome">Monthly Income <span
                                                style="color: red;">*</span></label>
                                        <select id="monthlyIncome" name="monthlyIncome" required class="form-control">
                                            <option value="" disabled selected>Select Monthly Income</option>
                                            <option value="0-20K">0 - ₹20,000</option>
                                            <option value="20K-1L">₹20,000 - 1L</option>
                                            <option value="1L-5L">1L - 5L</option>
                                            <option value="5L-10L">5L - 10L</option>
                                            <option value="10L-15L">10L - 15L</option>
                                            <option value="MoreThan15L">More than 15L</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tenure">Tenure (in months) <span
                                                style="color: red;">*</span></label>
                                        <select id="tenure" name="tenure" required class="form-control">
                                            <option value="" disabled selected>Select Tenure</option>
                                            <option value="1Year">1 Year</option>
                                            <option value="2Years">2 Years</option>
                                            <option value="3Years">3 Years</option>
                                            <option value="4Years">4 Years</option>
                                            <option value="5Years">5 Years</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="employmentStatus">Employment Status <span
                                                style="color: red;">*</span></label>
                                        <select id="employmentStatus" name="employmentStatus" required
                                            class="form-control">
                                            <option value="" disabled selected>Select Employment Status</option>
                                            <option value="Employed">Employed</option>
                                            <option value="SelfEmployed">Self-Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="homeOwnership">How did you hear about us?</label>
                                        <select id="homeOwnership" name="homeOwnership" required class="form-control">
                                            <option value="" disabled selected>Please Select</option>
                                            <option value="Referral">Referral</option>
                                            <option value="Internet Search">Internet Search</option>
                                            <option value="Internet Advertisement">Internet Advertisement</option>
                                            <option value="Internet Blog">Internet Blog</option>
                                            <option value="Printed Publication">Printed Publication</option>
                                            <option value="Other">Other</option>
                                        </select>

                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currentLoan">Relation to the Property <span
                                                style="color: red;">*</span></label>
                                        <select id="currentLoan" name="currentLoan" required class="form-control">
                                            <option value="" disabled selected>Select One</option>
                                            <option value="Owner">Owner</option>
                                            <option value="Board Member">Board Member</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="loanType">Any Loan Running <span style="color: red;">*</span></label>
                                        <select id="loanType" name="loanType" class="form-control" required>
                                            <option value="" disabled selected>Select One</option>
                                            <option value="UsedCar">Yes</option>
                                            <option value="NewCar">No</option>
                                        </select>
                                    </div>
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
                                        <label for="primaryBank">Primary Bank Account <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="primaryBank" name="primaryBank" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="property">Property Market value <span
                                                style="color: red;">*</span></label>
                                        <input type="text" id="property" name="property" class="form-control"
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
                                    <label for="occupation">Employment Type</label><span style="color: red;">*</span>
                                    <select name="occupation" name="employment_type" id="occupation"
                                        class="form-control" onchange="handleOccupationChange()">
                                        <option value="">Select employment type</option>
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

            <!-- <div class="step-footer mt-5">
                    <button data-step-action="prev" class="step-btn btn btn-success">Previous</button>
                    <button data-step-action="next" class="step-btn btn btn-success">Next</button>
                    <button data-step-action="finish" class="step-btn btn btn-success" id="NextBtn">Finish</button>
                </div> -->


    </section>
    <!-- journey end -->




    <section class="">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">Required Documents For Loan Against Property</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p>
                    To get a loan against property, the borrower needs to submit various documents related to the property
                    or verify their personal details. Some important documents required for a loan against property are:

                </p>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Identity proof

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Address proof
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Income proof for salaried individuals
                        (salary slips for the past 3 months, Income Tax Returns)

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Documents related to property (title
                        deeds of the property, sale deed, property tax receipts, encumbrance certificate)


                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Business proof, if you have your own
                        business (business registration certificate, GST registration certificate)

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Bank statements for the past six
                        months.

                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Passport-size photographs

                    </li>

                </ul>
            </div>



        </div>
    </section>



    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">Factors Affecting Interest Rates of Loan Against Property</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The Loan against property’s interest rate is influenced by many factors and understanding these factors
                    can help the borrowers to anticipate the interest rates and make decisions accordingly. Factors
                    affecting Loan against property interest rate are:

                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Credit Score:
                        </li>
                        <p class="paraFont">
                            A higher credit score qualifies you for a loan with lower interest rates. Individuals with good
                            credit scores seem less risky to the lenders and more likely to repay the loan on time.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Amount:
                        </li>
                        <p class="paraFont">
                            A higher loan amount will automatically result in slightly higher interest rates. The allotted
                            loan amount is a percentage of the market value of the property.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">PropertyType:
                        </li>
                        <p class="paraFont">
                            The interest rate of the loan against property being mortgaged is impacted by the type and usage
                            of the property. Residential properties may have different rates as compared to commercial or
                            industrial properties.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan-to-Value (LTV) Ratio:
                        </li>
                        <p class="paraFont">
                            The LTV ratio refers to the percentage of the property value that the lender is willing to
                            finance. A lower LTV ratio might result in lower interest rates, as it represents a lower risk
                            for the lender.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Market Conditions:
                        </li>
                        <p class="paraFont">
                            The market conditions at the time of getting the loan are the huge factor that can affect the
                            interest rates of loan against property. Economic conditions, inflation rates, and overall
                            market conditions can impact interest rates
                        </p>


                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Tenure:
                        </li>
                        <p class="paraFont">
                            The loan tenure can also influence the interest rate of the loan against property as longer
                            tenures can have higher interest rates whereas shorter loan tenures may have lower interest
                            rates.

                        </p>
                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="">
        <div class="container-fluid mt-4">

            <div class="mt-4">
                <h4 class="eligible slide">How To Apply For A Loan Against Property?</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    A loan against property is a secured loan, which means that if you default on the loan, the lender can
                    seize your property. Therefore, ensure that you are capable of repaying the loan amount before applying
                    for it. Apply for a loan against property with following steps:
                </p> <br>

                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Research :
                        </li>
                        <p class="paraFont">
                            Do some research on different lenders and their loan against property offerings to find the one
                            that suits your requirements.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Check Eligibility:
                        </li>
                        <p class="paraFont">
                            Check the eligibility criteria of the lender to ensure that you meet all the requirements.

                        </p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Gather Documents:
                        </li>
                        <p class="paraFont">
                            Collect all the required documents such as identity proof, address proof, income proof, and
                            property documents.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Apply Online:
                        </li>
                        <p class="paraFont">
                            You can easily apply for a loan against property online through the lender's official website.
                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Submit Documents:
                        </li>
                        <p class="paraFont">
                            Submit all the necessary documents along with the loan application form.
                        </p>


                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Property Evaluation:
                        </li>
                        <p class="paraFont">
                            The lender will evaluate your property to determine its market value and the loan amount you are
                            eligible for.

                        </p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">Loan Approval:
                        </li>
                        <p class="paraFont">
                            Once your application is approved, the loan amount will be disbursed to your account.

                        </p>
                    </ul>

                </div>


            </div>
        </div>
    </section>
@endsection
