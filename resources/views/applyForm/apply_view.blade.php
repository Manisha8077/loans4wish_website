@extends('front_end_layout.home')
 @push('applyViewStyle') 

<!-- {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqkl0qKfL1OfgI12IuL6T6l95lQueU8b9V7AWX9Ivdl9spC97l3NsC" crossorigin="anonymous"> --}} -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<link rel="stylesheet"
href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
<link rel="stylesheet"
href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/style.css') }}">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->

<style>
    .error {
        border-color: red !important;
    }

    .error_name {
        color: red;
        margin-left: 10px;
    }


    .spinner-overlay {
        display: flex;
        align-items: center;
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
    .form-group{
        color: #1338be !important;
    }
</style>

<style>
    /* .bkimage{
        background-image: url('file:///home/manisha/Downloads/Untitled%20design(4).png');
        
    } */
    .form-group label {
  font-weight: 600;
  font-size: 15px;
  color: #1338be !;
}
</style>
<style>
    #thankYouPopup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    #thankYouPopup img {
        max-width: 100%;
        height: auto;
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
    .paraFont23{
        color: #4b5563;
    }
     .paraFont {

color: #4b5563;
text-align: justify;
/* line-height: 2.1rem; */
font-size: 17px;
}
.eligible {
        color: #1338be;
        font-weight: initial;
        list-style: disc;

    }

    .eligible1 {
        color: #1338be;
        font-weight: 600;
        list-style: disc;
        font-size: 17px;
    }
</style>
<style>
    .mobile-text {
        color: #cd5c5c !important;
        font-size: 15px !important;
    }

    .cursor {
        cursor: pointer !important;
    }

    .cursor1 {
        color: #145a32 !important;
        cursor: pointer !important;
    }
</style>


@endpush

@push('applyViewScript')


<script>
    $(document).ready(function() {
        $("#verifyOTPButton").click(function() {
            // Check if the OTP input is filled
            var otpInput = $("#otpInput").val().trim();
            if (otpInput !== "") {
                // OTP is filled, show otpCheckIcon
                $("#otpCheckIcon").show();
                $("#otpErrorIcon").hide();
                 // Disable the button
            $("#sendOtp").prop("disabled", true);
            
                // Trigger the SendOtpToCheckMobileNumber function
                // SendOtpToCheckMobileNumber();
            } else {
                // OTP is blank, show otpErrorIcon
                $("#otpCheckIcon").hide();
                $("#otpErrorIcon").show();
            }

            // You can add additional OTP verification logic or actions here
        });
    });

    function verifyOTP() {
        // Trigger the click event for the Verify OTP button
        $("#verifyOTPButton").click();
    }

    function SendOtpToCheckMobileNumber() {
        // Your logic for sending OTP and checking mobile number
        console.log("Sending OTP and checking mobile number...");
    }
</script>
<!-- ---new 21feb -->

<script>
    function closeOtpModal() {
        $('#otpModal').modal('hide');
    }
</script>


<script>
    $(document).ready(function () {
        window.setCookesOtpCheckStatus = false;
        window.setCookeschecked = false;
    });
</script>

<script>

    // function SendOtpToCheckMobileNumber() {
    //     console.log("send otp button clicked");
    //     var phoneNumber = $('#number').val();
    //     console.log(phoneNumber);
    //     checkAndSendOtp(phoneNumber, true);

    // }

    // function verifyOTP() {
    //     var phoneNumber = $('#number').val();
    //     otp = $("#otpInput").val();
    //     VerifyResponseOtp(phoneNumber, otp);
    // }
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
            url: '{{website_base_url()}}/api/otpsend/' + phonnumber,
            type: 'GET', // Adjust based on API requirement
            success: function (response) {
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
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle API errors or network issues
                alert('An error occurred. Please try again later.');
            }
        });


    }

    function VerifyResponseOtp(phone_number, otp) {
        console.log('Verifying response' + "phone_number=" + phone_number + "otp=" + otp);
        $.ajax({
            url: '{{website_base_url()}}/api/otpsend/verify',
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
</script>
<script>
    function SendOtpToCheckMobileNumber() {
        console.log("send otp button clicked");
        var phoneNumber = $('#number').val();
        console.log(phoneNumber);
        checkAndSendOtp(phoneNumber, true);

    }

    function verifyOTP() {
        var phoneNumber = $('#number').val();
        otp = $("#otpInput").val();
        VerifyResponseOtp(phoneNumber, otp);
    }
</script>

<script>
    $("#btnModalClose").on('click', function () {
        // $("#modal").hide();
        $('#myModal').modal('hide');
        // window.location.href = "http://192.168.120.228/myzeon_web/index.php/";
        window.location.href = "{{ route('home') }}"
    })
</script>




<script>
    $(document).ready(function() {

    // Handle form submission
    // $("#btnSubmit").click(function() {
    //     // Assuming the form validation is successful
    //     // You can add your validation logic here

    //     // Check if all fields in the form are not blank
    //     var allFieldsFilled = true;
    //     $("#my-form :input").each(function() {
    //         if ($.trim($(this).val()) === "") {
    //             allFieldsFilled = false;
    //             return false; // exit the loop early if any field is blank
    //         }
    //     });

    //     // If all fields are filled, show the thank you popup
    //     if (allFieldsFilled) {
    //         // For demo purposes, show the thank you popup and hide the form
    //         $("#thankYouPopup").show();

    //         // You can add additional logic or animations here

    //         // Close the popup after a certain time (e.g., 3 seconds)
    //         setTimeout(function() {
    //             $("#thankYouPopup").hide();
    //         }, 5000);

    //         // Alternatively, you can refresh the form
    //         // form[0].reset();
    //     } else {
    //         // Handle the case where any field is blank
    //         alert("Please fill in all fields before submitting.");
    //     }
    // });

});

</script>

<script>
    $("#my-form input[name=pincode]").on("change", function () {
        console.log("change pin");
        var pincode = $(this).val();
        console.log(pincode);
        var apiUrl = "https://api.postalpincode.in/pincode/" + pincode;
        console.log(apiUrl);

        $.ajax({
            url: apiUrl,
            method: "GET",
            success: function (response) {
                if (response[0].Status === 'Success') {
                    var data = response[0].PostOffice[0];

                    $('#city').val(data.District);

                    try {
                        var city = data.District;
                        var citySelect = $('#city');
                        citySelect.empty();
                        citySelect.append($('<option value="">Select a State</option>'));
                        citySelect.append($('<option value="' + city + '">' + city +
                            '</option>'));
                    } catch (error) {
                        console.log("error to get city");

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

                } else {
                    alert(
                        "Error fetching city and state for the given pincode.");
                }
            }
        });
    });
</script>
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
                    } else {
                        // The name matches the regular expression, so it is valid
                        $(this).removeClass("error");
                        $("#error_name").html("");
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
                




                if(setCookesOtpCheckStatus){
                $('#loader').show();

                $.ajax({
                    url:"{{website_base_url()}}/api/cutomer-data-wp-post",
                    // url: 'https://crm.myzeon.com/api/cutomer-data-wp-post', 
                    // Replace with your server endpoint
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
                        $('#thankYouPopup').show();
                        

                    },
                    error: function() {
                        // Handle error here
                        $('#loader').hide();
                        alert('Error submitting the form.');
                    }
                });

            }else{
                alert("verify your otp first");
            }



            }

        });



    });
</script>

<script>
    $("#my-form input[name=pincode]").on("change", function() {
        console.log("change pin");
        var pincode = $(this).val();
        console.log(pincode);
        var apiUrl = "https://api.postalpincode.in/pincode/" + pincode;
        console.log(apiUrl);

        $.ajax({
            url: apiUrl,
            method: "GET",
            success: function(response) {
                if (response[0].Status === 'Success') {
                    var data = response[0].PostOffice[0];

                    $('#city').val(data.District);

                    try {
                        var city = data.District;
                        var citySelect = $('#city');
                        citySelect.empty();
                        citySelect.append($('<option value="">Select a State</option>'));
                        citySelect.append($('<option value="' + city + '">' + city +
                            '</option>'));
                    } catch (error) {
                        console.log("error to get city");

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

                } else {
                    alert(
                        "Error fetching city and state for the given pincode.");
                }
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script> -->

<script src="{{ asset('assets/front_end/asset/designfile/dist/js/bootstrap.min.js') }}"></script>


<script>
    // Assuming you have jQuery loaded

    $(document).ready(function() {
        // Add a click event listener to the "Apply Again" button
        $("#applyAgain").on('click', function() {
            // Reload the page
            window.location.reload();
            window.location.href = "{{website_base_url()}}";
        });
    });
</script>
@endpush


@section('content')
<!-- start otp -->
<div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="otpModalLabel" style="color: #1338be; text-align: center;"><b>Enter OTP
                        Code</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeOtpModal()">
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
                    <button type="button" class="btn btn-primary btn-block" id="verifyOTPButton" onclick="verifyOTP()">Verify OTP</button>
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



<div class="container-fluid applyFormBorder bkimage" style=" background-image: url('{{website_asset_image_base_url()}}/img/Apply_now.png'); background-size: cover; background-position: ;">  
      <div class="row">
        <div class="col-lg-6" style="margin-top: 80px;" >
            <!-- <div>
                <div class="mb-4">
                    <h4 class="card-title eligible slide">Apply Now for a Fast and Easy
                        Process</h3>
                    <p class="paraFont mt-4" style="text-align: -moz-center;">Ready to Turn Your Dreams into Reality?
                        Life's opportunities don't wait whether you're dreaming of a new home, planning a business
                        expansion, or need financial support for unexpected expenses, we've got you covered. We provide
                        personal loans, business loans, home loans, and loan against property in simple steps with
                        minimum documentation. Apply Now for a Fast and Easy Loan Process.
                    </p>
                </div>
            </div>

            <div class="mb-4 example">
                <h4 class="card-title eligible slide"> What you will need:
                </h4>
                <div style="text-align: center;" class="mt-4">
                    <h4 class="paraFont23">Personal Information
                    </h5>
                    <h4 class="paraFont23">Employment Details
                    </h5>
                    <h4 class="paraFont23">Financial Information</h5>
                </div>
            </div>
            <div class="mb-4">
                <h4 class="card-title eligible slide">Why should you apply for a loan?</h4>
                <div class="mt-4">
                    <p class="paraFont"style="text-align: center;" ><b>Quick Approval:</b> Get a response to your application within minutes.</p>
                    <p class="paraFont"style="text-align: center;" > <b>Competitive Rates:</b> Enjoy affordable interest rates for your needs.</p>
                    <p class="paraFont"style="text-align: center;" > <b>Flexible Terms:</b> Customize your repayment plan to fit your budget.</p>
                    <p class="paraFont"style="text-align: center;" ><b>Trusted Lender:</b> We prioritize your financial well-being with transparent
                        terms.</p>
                </div>

            </div> -->


        </div>

        <div class="col-lg-6">
            <div class="container mb-4 formcontainer"
                style="margin-top: 2rem !important; width: 70%; background-color: #ffffff59; border-radius: 15px; box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);">

                <form id="my-form" class="applyFormBorder">
                    <fieldset style="width: 80%;
                    margin: 0 10%;
                    position: relative;">
                        <div class="form-group mt-4">
                            <label for="number">Enter Number</label><span id="error_no"></span>
                            <div class="row">
                                <input type="number" class="form-control" name="number" id="number">
                                    <button type="button" class="btn btn-primary" id="sendOtp" onclick="SendOtpToCheckMobileNumber()">
                                        <i class="fas fa-check" id="otpCheckIcon" style="display: none;"></i>
                                        <i class="fas fa-times" id="otpErrorIcon" style="display: none;"></i>
                                        Send Otp
                                    </button>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="full_name">Full Name</label><span id="error_name"></span>
                            <input type="text" class="form-control" name="full_name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="occupation">Occupation</label><span id="error_occupation"></span>
                            <select class="form-control" name="occupation" id="occupation">
                                <option value="">Select Occupation</option>
                                <option value="engineer">Engineer</option>
                                <option value="doctor">Doctor</option>
                                <option value="lawyer">Lawyer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="loan_type">Loan Type</label><span id="error_loan_type"></span>
                            <select class="form-control" name="loan_type" id="loan_type">
                                <option value="">Select Loan Type</option>
                                <option value="personal_loan">Personal Loan</option>
                                <option value="home_loan">Home Loan</option>
                                <option value="car_loan">Car Loan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pincode">Pincode</label><span id="error_pincode"></span>
                            <input type="number" class="form-control" name="pincode" id="pincode">
                        </div>

                        <div class="form-group">
                            <label for="city">City</label><span id="error_city"></span>
                            <select class="form-control" name="city" id="city">
                                <option value="">Select City</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="state">State</label><span id="error_state"></span>
                            <select class="form-control" name="state" id="stateName">
                                <option value="">Select State</option>
                                <!-- <option value="noida">noida</option> -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label><span id="error_message"></span>
                            <textarea class="form-control" name="message" id="message"></textarea>
                        </div>
                        <button type="button" id="btnSubmit" class="btn btn-primary mb-3" style="border-radius: 20px;">Submit</button>
                    </fieldset>
                </form>

                <!-- Thank You Popup -->
    <div id="thankYouPopup">
        <img src="{{ website_asset_base_url() }}/images/web_img/thankyou.png" alt="Thank You">
        <button class="btn btn-primary" id="applyAgain"
                                    style="display: block; margin: auto;">Go to home page</button>
    </div>

    
            </div>

        </div>
    </div>
</div>
@endsection