@extends('front_end_layout.home')

@push('personalLoanScripts')



<!-- newjs -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>
<script src="{{ asset('assets/js/pagejs/plcommon.js') }}"></script>


<!-- start journey -->
<script>
    //step 0
    $(document).ready(function () {
        $.validator.addMethod("customIndianMobileNumber", function (value, element) {
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
            errorPlacement: function (error, element) {
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
    $(document).ready(function () {
        $.validator.addMethod("customIndianMobileNumber", function (value, element) {
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
                    //  customIndianMobileNumber: "Mobile number should not start with 0 to 5"   
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
            errorPlacement: function (error, element) {
                if (element.attr("name") == "gender") {
                    error.appendTo(element.closest(".form-group"));
                } else {
                    error.insertAfter(element);
                }
            }
            // Add other customization options if needed
        });
        jQuery.validator.addMethod("letterswithspace", function (value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
        }, "Please enter only letters and spaces.");
        jQuery.validator.addMethod("panCard", function (value, element) {
            // Use a regular expression to validate PAN card format
            return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value);
        }, "Please enter a valid PAN card number.");
    });
</script>
<script>
    $(document).ready(function () {
        $("#frmIncome").validate({
            rules: {
                employmentType: "required",
                companyRegistered: "required",
                companyname: "required",
                companyname12: "required",
                companyType1: "required",
                businessName: "required",
                businessType: "required",
                annualTurnover: "required",
                professionType: "required",
                residenceType: "required",
                gstType: "required",
                companyName1: "required",
                companyType: "required",
                yearsInBusiness: "required",
                annual_income: "required"
            },
            messages: {
                employmentType: "Please select your employment type",
                companyRegistered: "Please select whether your company is GST registered",
                companyname: "Please select a company name",
                companyname12: "Please select a company name",
                companyType1: "Please select a company type",
                businessName: "Please enter your business name",
                businessType: "Please enter the years in current business",
                annualTurnover: "Please select the annual turnover",
                professionType: "Please select your profession type",
                residenceType: "Please select your residence type",
                gstType: "Please enter the years in current profession",
                companyName1: "Please enter a company name",
                companyType: "Please select a company type",
                yearsInBusiness: "Please enter the years in current business",
                annual_income: "Please enter the gross annual income"
            },
            errorPlacement: function (error, element) {
                error.appendTo(element.closest(".form-group"));
            }
        });
    });
</script>

<!-- form required error show   -->

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
            setTimeout(function () {
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

    $(document).ready(function () {
        //    setCookie('otpCheck',false);
        window.setCookeschecked = false;
        window.setCookesOtpCheckStatus = false;
    });

    function checkAndSendOtp(phonnumber, checkstatus) {
        $.ajax({
            url: '{{website_api_base_url()}}' + '/otpsend/' + phonnumber,
            type: 'GET', // Adjust based on API requirement
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (response) {
                // const parsedResponse = JSON.parse(response);
                // console.log('Sent' + parsedResponse['return'])

                if (response['return']) {
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
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle API errors or network issues
                alert('An error occurred. Please try again later.');
            }
        });


    }

    function VerifyResponseOtp(phone_number, otp) {
        console.log('Verifying response' + "phone_number=" + phone_number + "otp=" + otp);
        $.ajax({
            url: '{{website_api_base_url()}}' + '/otpsend/verify',
            type: 'POST', // Adjust based on API requirement
            dataType: 'json', // Adjust based on API response format
            data: {
                phone_number: phone_number, // Adjust formatting based on API expectation
                otp: otp
            },
            // Include authentication headers if required
            success: function (response) {
                $('#otpModal').modal('hide');


                window.setCookeschecked = true;
                window.setCookesOtpCheckStatus = true;
                console.log("verify number");

            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle API errors or network issues
                alert('An error occurred. Please try again later.');
            }
        });
    }

    $("#frmIncome").submit(function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        // Make an AJAX request
        $.ajax({
            type: "POST", // Use "POST" or "GET" depending on your server-side processing
            url: "your_server_url.php", // Replace with your server-side processing URL
            data: formData,
            success: function (response) {
                // Handle the successful response from the server
                console.log(response);

                // If you want to show a banner or perform other actions after successful submission
                $("#banner").show();
            },
            error: function (error) {
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
        onChange: function (currentIndex, newIndex, stepDirection) {
            console.log("currentIndex: " + currentIndex + " newIndex: " + newIndex + " stepDirection: " +
                stepDirection);
            // step0

            if (currentIndex === 0 && newIndex === 1 && stepDirection === 'forward') {
                var phoneNumber = $('#mobileNumber1').val();
                var agree = $('#agreeCheckbox').prop('checked');

                if (!window.setCookeschecked)
                // {
                //     checkAndSendOtp(phoneNumber, agree);
                // }
                {
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
                    // $(".spinner").show();

                }
            }
            // step2 108
            if (currentIndex === 3) {

                // new code for ajax
                var formDataArrayContact = $("#frmContact").serializeArray();
                var formDataObjectContact = {};
                $.each(formDataArrayContact, function (i, field) {
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
                $.each(formDataArrayIncome, function (i, field) {
                    formDataObjectIncome[field.name] = field.value;
                });

                // Combine form data from both forms
                var formDataObject = { ...formDataObjectContact, ...formDataObjectIncome };

                console.log("Combined Form Data:");
                console.log(formDataObject);

                // Perform AJAX request
                $(".spinner").show();

                $.ajax({

                    type: "POST",
                    url: "{{website_api_base_url()}}/bussiness-loan-apply",
                    data: formDataObject,

                    success: function (response) {
                        $(".spinner").hide();
                        console.log(response);
                        // Handle the response from the server
                    },
                    error: function (error) {
                        console.error("AJAX request failed:", error);
                    }
                });
                // end new code for ajax



                $("li[data-step-target='step1']").first().hide();

                $("li[data-step-target='step2']").first().hide();
                $("li[data-step-target='step3']").first().hide();

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
        onFinish: function () {
            // Show the modal when the finish button is clicked
            // $('#myModal').modal('show');
        }
    });
</script>

<!-- end for form -->

<script>
    jQuery(document).ready(function ($) {
        // Initialize the datepicker
        $("#dob").datepicker({
            dateFormat: "dd/mm/yy",
            maxDate: "+0d",
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0"
        });

        // Validate Date of Birth input
        $('#dob').on('change', function () {
            var dobInput = $(this).val();
            if (dobInput.value.trim() === '') {
                $('#dob-error').show();
            } else {
                $('#dob-error').hide();
            }
        });
    });
</script>

<script>
    function ClosedModal() {
        $('#myModal').modal('hide');
    }


</script>
<script>
    $("#btnModalClose").on('click', function () {
        // $("#modal").hide();
        $('#myModal').modal('hide');
        window.location.href = "{{website_base_url()}}/business-loan";
        // window.location.href = "{{ route('home') }}"
    })
</script>

<!-- city state from pincode by mannu -->
<script>
    $('#pincode').on('input', function () {
        var pincode = $(this).val(); // Get the value of the input field


        if (pincode) {
            $.ajax({
                url: 'https://api.postalpincode.in/pincode/' + pincode,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
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
                error: function () {
                    $('#city').val('Error');
                    $('#stateName').val('Error');
                }
            });
        }


    });
</script>

<script>
    jQuery(document).ready(function ($) {
        // Initialize the datepicker
        // $("#dob").datepicker({
        //     dateFormat: "dd/mm/yy",
        //     maxDate: "+0d",
        //     changeMonth: true,
        //     changeYear: true,
        //     yearRange: "-100:+0"
        // });

        // Validate Date of Birth input
        $('#dob').on('change', function () {
            var dobInput = $(this).val();
            if (dobInput.value.trim() === '') {
                $('#dob-error').show();
            } else {
                $('#dob-error').hide();
            }
        });
    });
</script>
<!-- autofill number -->
<script>
    function copyMobileNumber() {
        const mobileNumberStep1 = $("#mobileNumber1").val();
        $("#mobileNumber").val(mobileNumberStep1);
        $("")
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
    // companyRegistered
    $("#companyRegistered").on('change', function () {
        var cmpnyreg = $("#companyRegistered").val();
        if (cmpnyreg === "Yes") {
            $('#divgst').show();
            $('#divcompanyname').hide();
            $('#divcompanyType1').show();
            $('#divcompanyname12').show();
            $('#divannualTurnover').hide();
            $('#divYearsInBussiness').hide();



        }
        else if (cmpnyreg === "No") {
            // $('#divcompanyType1').show();
            $('#divgst').hide();
            $('#divcompanyname').hide();
            $('#divcompanyname12').show();

            $('#divcompanyType1').hide();
        }




        console.log("enteeeeeeeeeee");
    });


</script>

<script>

    $("#employmentType").on('change', function () {

        var emplytype = $("#employmentType").val();

        if (emplytype === "Professional") {
            // alert("select business");
            // annual_income
            $('#divYearsInBussiness').show();
            $('#divannual_income').show();
            $('#divbusinessType').hide();
            $('#divannualTurnover').hide();

        } else if (emplytype === "Business") {
            //divannualTurnover
            $('#divannualTurnover').show();
            $('#divbusinessType').show();
            $('#divYearsInBussiness').hide();
            $('#divannual_income').hide();

        }

        else {
            // $('#divYearsInBussiness').hide();
            // $('#divannual_income').hide();
            // $('#divannualTurnover').hide();
        }


        // if(employmentType!== ""){
        //     $('#year-in-business').show();
        // }else{
        //     $('#year-in-business').hide();
        // }

        console.log("enteeeeeeeeeee");
    });

    function toggleEmploymentFields() {
        var selEmpType = $("#employee_type").val();


        //     if (annualTurnover !== "") {
        //     // Show the basic information fields
        //     $('#year-in-business').show();
        //     $('#registance_type').show();
        // } else {
        //     // Hide the basic information fields
        //     $('#year-in-business').hide();
        //     $('#registance_type').hide();
        // }

        if (employmentType === 'Business') {
            alert("you select business");
        } else {
            alert("you select new");
        }

    }

    function submitFormTest() {

        console.log("enter file here");
    }
</script>
@endpush

@push('personalLoanStyle')
<link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/front_end/asset/css/style.css') }}">

<style>
    .listSpan {
        color: #1338be;
        font-weight: 600;
    }
</style>
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
    label.error {
        color: red !important;
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .custom-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<style>
    /* .fas {
        font-size: 25px;
        padding: 10px;

    } */

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
<!--form css -->
<style>
    .form-control {
        height: calc(2.3em + 0.75rem + 0px);
    }


    .container {
        /* max-width: 1200px; */
        /* Adjust container width as needed */
        /* margin-top: 50px;
        color: #fff;
       font-family: montserrat, Sans-Serif; 
        font-weight: bolder;
        
        line-height: 30px;
        font-size: 17px; */

    }





    .form-error {
        color: red;
    }

    /* Custom styling for mobile responsiveness */
    @media (max-width: 576px) {

        /* Small devices (phones) */
        .form-group.col-md-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        /* Adjust margins and paddings for better mobile layout */
        .form-row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .form-group {
            padding-left: 5px;
            padding-right: 5px;
        }
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

    .spinner-border {
        width: 3rem;
        height: 3rem;
        border: 0.25rem solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        animation: spinner-border 0.75s linear infinite;
    }

    @keyframes spinner-border {
        to {
            transform: rotate(360deg);
        }
    }

    .loader-text {
        margin-top: 0.5rem;
        color: #333;
        font-size: 1rem;
    }

    select.form-control:not([size]):not([multiple]) {
        height: calc(2.25rem + 14px);
    }
</style>
<!--  -->

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

    .container {
        /* max-width: 1000px;
        margin-top: 50px;
        color: #333;
        font-family: Arial, sans-serif; */
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

<!-- Demo stylesheet -->


@section('content')

<div class="image-container">
    <img class="card-img" src="{{ website_asset_base_url() }}/images/web_img/business_loanBanner.jpeg" width="auto"
        alt="Card image" />

    <!-- <button class="custom-button">Click Me</button> -->
</div>

<section class="container-fluid">
    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-md-12">
                <div class="card-body-right">

                    <h4 class="card-title eligible slide">Business Loan</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">Are you facing any financial challenges in your business? Are you struggling to
                        qualify for a
                        business
                        loan? A business loan is the most convenient loan for business to boost their growth. You can
                        find
                        many
                        lenders online who can provide you with a business loan but which business loan is perfect for
                        you?
                        Are
                        you aware of loan eligibility criteria and documentation process?
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>




<!--  -->
<section class="container-fluid">
    <div class="container-fluid mt-4">
                <div>
                    <h4 class="card-title eligible slide">How Do Business Loans Function?</h4>
                <div class="bar m-auto">&nbsp;</div>
                </div>
                <br><br>
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
</section>

    


<!--  -->

<section class="container-fluid">
<div class="container-fluid mt-4">
    <div>
        <h4 class="eligible slide">Types Of Business Loans </h4>
        <div class="bar m-auto">&nbsp;</div><br><br>
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
</section>

<section class="container-fluid">
<div class="container-fluid mt-4 mb-4">
    <div>
        <h4 class="eligible slide">What Is The Business Loan Eligibility Criteria?</h4>
        <div class="bar m-auto">&nbsp;</div><br><br>
        <p class="paraFont">Here are the eligibility criteria for taking a business loan:</p>
        <ul>
            <li  class="paraFont "><span class="listSpan">&bull;</span> To take a business loan from Myzeon you should have a
                specific type of business like a self-proprietorship business, partnership business, public or
                private limited companies, and businesses that provide services.
            </li>

            <li  class="paraFont "><span class="listSpan">&bull;</span> Lenders require your business to have a vintage of 6
                months to up to 3 years. </li>

            <li class="paraFont "><span class="listSpan">&bull;</span> The minimum turnover requirement of the business depends
                on the lenders. If the minimum specified limit of the lender is met by the borrower, then you will
                be eligible for the loan.</li>

            <li  class="paraFont "><span class="listSpan">&bull;</span> Your minimum annual profit should meet the minimum limit
                set by the lenders.</li>
            <li  class="paraFont "><span class="listSpan">&bull;</span> The minimum age of the applicant should be above 21
                years</li>
            <li  class="paraFont "><span class="listSpan">&bull;</span> The credit score plays a vital role when you are
                sanctioning a loan. The businesses should have a minimum credit score of 650 and above to qualify
                for a business loan.
            </li>


        </ul>
    </div>
</div>
</section>

<section class="container-fluid">
<div class="container-fluid mt-4">
    <div>
        <h4 class="eligible slide">What Documents Are Required For A Business Loan?</h4>
        <div class="bar m-auto">&nbsp;</div><br><br>
        <p class="paraFont">Businesses need to submit some documents in order to take a business loan. Just like the
            eligibility criteria, the documentation process can also vary from lender to lender. Some of the
            <span><a href="https://www.myzeon.com/blog/apply-for-business-loan-documents-you-need-for-business-loan">Documents
                    Are Required For A Business Loan?</a></span>
        </p>
        <ul>
            <p class="paraFont">What DocumentHow Can You Apply for a Business Loans Are Required For A Business Loan?</p>
            <li  class="paraFont"> <span class="listSpan">&bull;</span> Passport/ Aadhaar card/ Driving license/ PAN card/
                Voter’s ID card as proof of your identity.
            </li><br>

            <li  class="paraFont "><span class="listSpan">&bull;</span> Bank statements for the last 3 to 6 months, income tax
                returns for the last 2 to 3 years, balance sheet, and profit and loss account of the company.
            </li><br>

            <li  class="paraFont "><span class="listSpan">&bull;</span> Trade license, GST registration certificate, and
                establishment certificate for showing business proof.
            </li><br>

            <li  class="paraFont "><span class="listSpan">&bull;</span>Depending on the type of business, declaration of the
                sole business ownership and certified true copy of partnership contract.
            </li><br>
            <li  class="paraFont "><span class="listSpan">&bull;</span>UDYAM registration certificate of the business.</li><br>

        </ul>
    </div>
</div>
</section>

<section class="container-fluid">
<div class="container-fluid mt-4">
    <div>
        <h4 class="eligible slide">How Can You Apply for a Business Loan Online?
        </h4>
        <div class="bar m-auto"></div><br><br>
        <p class="paraFont">Applying for a business loan online is more easy to use than physically going to the
            bank or financial institution and applying for a loan. Here are some simple steps that can help you
            apply for a business loan online:
        </p>
        <ul>
            <li class="paraFont"><span class="listSpan">&bull;</span> Analyze the need for which you are taking a business
                loan. It can be to cover the costs for machinery, payroll, rent payments, etc.

            </li><br>

            <li class="paraFont "><span class="listSpan">&bull;</span> Research and compare different lenders of financial
                institutions that are offering business loans at lower interest rates. Choose a best lender that
                fulfil your needs without causing financial loss.

            </li><br>

            <li class="paraFont "><span class="listSpan">&bull;</span> Business loans include many charges such as processing
                fees, documentation charges, cheque dishonor charges, cancellation charges, etc. Make sure to read
                the terms and conditions carefully and attentively before applying for a business loan.
            </li><br>

            <li class="paraFont "><span class="listSpan">&bull;</span> Fill out the application form online from the official
                website of the chosen lender. Before you submit the online application, double-check your personal
                details.

            </li><br>

        </ul>
    </div>
</div>
</section>


<div class="container-fluid mt-4">

    <h1 class="text-center m-auto slide" style="color:#1338be;font-weight: 600;">Know About More Loans</h1>
    <div class="bar m-auto"></div><br><br>
    <p class="paraFont">
        Business Loans are the lenders of the last resort when you fall into any type of financial emergency whether
        you are going for a house renovation or dealing with some medical issues. Ultimately, all matters are the
        funds you have to deal with the financial issues. A personal loan at a low interest rate can be the cherry
        on the cake to deal with such problems. Therefore, MyZeon offers personal loans at a starting interest rate
        of 10.25% per annum and for a tenure of up to 7 years. It is better to compare all the details of a loan in
        one place rather than wandering around from bank to bank.
        Here you can have a look at the personal loan details offered by different banks and NBFCs.
    </p>
</div>
<!--  -->
<div class="clearfix"></div>
<!--  -->



<!-- <span id="secStart"></span> -->
<section class="container-fluid">
    <h4 class="eligible text-center slide" id="txtjourney">Start Your Journey
    </h4>
    <div class="bar m-auto">&nbsp;</div>
    <br><br>
    <!-- 108 -->

    <div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true"
        data-backdrop="static" data-keyboard="false">
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
                                <label for="mobileNumber1">Mobile Number <span style="color: red;">*</span></label>
                                <input type="tel" class="form-control" id="mobileNumber1"
                                    placeholder="Enter your Mobile number" name="mobileNumber1" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox">
                            <label for="agreeCheckbox" style="font-size: 14px; font-weight: normal;">By submitting this
                                form, you have read and agree to the Credit Report Terms of Use, Terms of Use & Privacy
                                Policy</label>
                        </div>

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
                                    <input type="text" class="form-control" id="panCardNumber" name="panCardNumber"
                                        placeholder="Enter a valid PAN card Number (e.g. ABCDE1234F)." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth <span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
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
                                    <label for="city">City</label><span id="error_city"></span>
                                    <input type="text" readonly style="background-color: white;" class="form-control"
                                        name="city" id="city">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">State</label><span id="error_state"></span>
                                    <input type="text" readonly style="background-color: white;" class="form-control"
                                        name="state" id="stateName">
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
                            <button data-step-action="next" class="step-btn btn btn-success">Next</button>
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
                                    <label for="employmentType">How are you currently employed?<span
                                            style="color: red;">*</span></label>
                                    <select class="form-control" id="employmentType" name="employmentType" required>
                                        <option value="" disabled selected>Please Select</option>
                                        <option value="Business">Self Employed Business</option>
                                        <option value="Professional">Self Employed Professional</option>
                                    </select>
                                </div>

                                <div class="form-group" id="divcompanyRegistered">
                                    <label for="companyRegistered">Is your company GST Registered?<span
                                            style="color: red;">*</span></label>
                                    <select class="form-control" id="companyRegistered" name="companyRegistered"
                                        required>
                                        <option value="" disabled selected>Please Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="form-group" style="display: none;" id="divgst">
                                    <label for="gst">GST <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="gst" name="gst" required>
                                </div>
                                <div class="form-group" style="display: none;" id="divcompanyname">
                                    <label for="companyname">Company Name <span style="color: red;">*</span></label>
                                    <select class="form-control" id="companyname" name="companyname" required>
                                        <option value="" disabled selected>Please Select</option>
                                        <option value="Yes">xyz</option>
                                        <option value="no">123</option>
                                    </select>
                                </div>
                                <div class="form-group" style="display: none;" id="divcompanyname12">
                                    <label for="companyname12">Company Name <span style="color: red;">*</span></label>
                                    <select class="form-control" id="companyname12" name="companyname12" required>
                                        <option value="" disabled selected>Please Select</option>
                                        <option value="Yes">xyz</option>
                                        <option value="no">123</option>
                                    </select>
                                </div>
                                <div class="form-group" style="display: none;" id="divcompanyType1">
                                    <label for="companyType1">Company Type <span style="color: red;">*</span></label>
                                    <select class="form-control" id="companyType1" name="companyType1" required>
                                        <option value="" disabled selected>Select Company Type</option>
                                        <option value="1">Proprietorship</option>
                                        <option value="2">Private Limited Company</option>
                                        <option value="3 ">Public Limited Company</option>
                                        <option value="4">Partnership Firm</option>
                                        <option value=" ">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="businessName">Business Name <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="businessName" name="businessName"
                                        required>
                                </div>

                                <div class="form-group" style="display: none;" id="divbusinessType">
                                    <label for="businessType">Years In Current Business <span
                                            style="color: red;">*</span></label>
                                    <input type="number" class="form-control" required id="businessType"
                                        name="businessType">
                                </div>

                                <div class="form-group" style="display: none;" id="divannualTurnover">
                                    <label for="annualTurnover">Gross annual sales / turnover?</label>
                                    <select class="form-control" id="annualTurnover" name="annualTurnover" required>
                                        <option value="" disabled selected>Please Select Turnover</option>
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
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="professionType">Select Profession Type <span
                                            style="color: red;">*</span></label>
                                    <select class="form-control" id="professionType" name="professionType" required>
                                        <option value="" disabled selected>Select Profession Type</option>
                                        <option value=" Doctor ">Doctor</option>
                                        <option value=" Chartered Accountant (CA) ">Chartered Accountant (CA)</option>
                                        <option value="Architect">Architect</option>
                                        <option value=" Cost Accountant ( ICWA )">Cost Accountant ( ICWA )</option>
                                        <option value=" Company Secretary (CS) ">Company Secretary (CS)</option>
                                        <option value=" Engineer ">Engineer</option>
                                        <option value=" Consultant ">Consultant</option>
                                        <option value=" ">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="residenceType">Residence Type <span style="color: red;">*</span></label>
                                    <select class="form-control" id="residenceType" name="residenceType" required>
                                        <option value="" disabled selected>Select Residence Type</option>
                                        <option value="Owned by Self_Spouse">Owned by Self / Spouse</option>
                                        <option value="Owned by Parents_Siblings">Owned by Parents / Siblings</option>
                                        <option value="Rented with Family ">Rented with Family</option>
                                        <option value="Rented with Friends ">Rented with Friends</option>
                                        <option value="Other ">Other</option>
                                    </select>
                                </div>
                                <div class="form-group" style="display: none;" id="divgstType">
                                    <label for="gstType">Years In Current Profession <span
                                            style="color: red;">*</span></label>
                                    <input type="number" class="form-control" required name="gstType">
                                </div>
                                <div class="form-group" style="display: none;" id="divcompanyName1">
                                    <label for="gstType">Company Name <span style="color: red;">*</span></label>
                                    <input type="number" class="form-control" required id="companyName1"
                                        name="companyName1">
                                </div>
                                <div class="form-group">
                                    <label for="companyType">Company Type <span style="color: red;">*</span></label>
                                    <select class="form-control" id="companyType" name="companyType" required>
                                        <option value="" disabled selected>Select Company Type</option>
                                        <option value="1">Proprietorship</option>
                                        <option value="2">Private Limited Company</option>
                                        <option value="3 ">Public Limited Company</option>
                                        <option value="4">Partnership Firm</option>
                                        <option value=" ">Other</option>
                                    </select>
                                </div>
                                <div class="form-group" style="display: none;" id="divYearsInBussiness">
                                    <label for="yearsInBusiness">Years In Current Profession <span
                                            style="color: red;">*</span></label>
                                    <input type="number" class="form-control" required id="yearsInBusiness"
                                        name="yearsInBusiness">
                                </div>
                                <div class="form-group" style="display: none;" id="divannual_income">
                                    <label for="annual_income">Gross annual income ?</label>
                                    <input type="number" class="form-control" required id="annual_income"
                                        name="annual_income">
                                </div>
                            </div>
                        </div>
                        <div class="step-footer mt-5">
                            <button data-step-action="next" class="step-btn btn btn-success">Next</button>
                        </div>
                    </form>
                </div>
                <div class="spinner" style="display: none;"></div>
                <div class="step-tab-panel" data-step="step4" id="divstep3">
                    <form name="frmIncome1" id="frmIncome1" class="form-group label">
                        <div id="banner">
                            <img style="margin: auto;" src="{{ website_asset_base_url() }}/images/web_img/thankyou.png"
                                alt="Banner Image">
                            <button class="btn btn-primary" id="applyAgain" style="display: block; margin: auto;">Apply
                                Again</button>
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
                                <label> Desired loan amount</label><span style="color: red;">*</span> <span
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

    </div>


</section>








<!--accordian  -->

<section class="container-fluid">

    <div class="accordion mt-4" id="accordionExample">
        <div class="heading-title mt-3 ml-3">
            <h3 class="mb-2 font-weight-bold slide" style="color: #1338be;">Types of Business Loan
            </h3>
            <div class="bar m-auto">&nbsp;</div><br><br>
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
                        <p class=" paraFont">Secured business loans are the safest and most popular
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
                        <p class="paraFont">A business owner can get a secured business loan against mortgaged
                            property. They can
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
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3" role="region"
                            aria-labelledby="elementor-tab-title"
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

<!-- FAQs -->
<section class="container-fluid">

    <div class="accordion mt-4 mb-4" id="accordionExample">
        <div class="heading-title mt-3 ml-3">
            <h3 class="mb-2 font-weight-bold slide" style="color: #1338be;">FAQs</h3>

            <div class="bar m-auto">&nbsp;</div><br><br>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button  collapsed paraFont" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                        1. Why Should I Get a Business Loan?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div id="elementor-tab-content-1761"
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="region"
                            aria-labelledby="elementor-tab-title-1761" style="display: block;">
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
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="2" role="region"
                            aria-labelledby="elementor-tab-title-1762" style="display: block;">
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
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3" role="region"
                            aria-labelledby="elementor-tab-title-1763" style="display: block;">
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
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="4" role="region"
                            aria-labelledby="elementor-tab-title-1764" style="display: block;">
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
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="5" role="region"
                            aria-labelledby="elementor-tab-title-1765" style="display: block;">
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
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="6" role="region"
                            aria-labelledby="elementor-tab-title-1765" style="display: block;">
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
                            class="elementor-tab-content elementor-clearfix elementor-active" data-tab="7" role="region"
                            aria-labelledby="elementor-tab-title-1766" style="display: block;">
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




@endsection