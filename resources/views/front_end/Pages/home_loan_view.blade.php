@extends('front_end_layout.home')
@push('startyourjourneystyle')
    <link rel="stylesheet"
        href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<style>
    .step-app > .step-content {
  color: black;
}
</style>
    <style>
        /* otp popup */
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
       background: conic-gradient(#0000 10%,#474bff) content-box;
       -webkit-mask: repeating-conic-gradient(#0000 0deg,#000 1deg 20deg,#0000 21deg 36deg),
            radial-gradient(farthest-side,#0000 calc(100% - 9px),#000 calc(100% - 9px));
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
    .listSpan {
        color: #1338be;
        font-weight: 600;
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

    .loan-types {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .loan-type {
        text-align: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .loan-type:hover {
        transform: scale(1.2);
    }

    .loan-type:hover i {
        color: #2c50bc;
    }


    .loan-type i {
        font-size: 2em;
        color: #f9bc05;
        margin-bottom: 10px;
    }

    .loan-type p {
        margin: 0;
        font-size: 1.2em;
        color: #333;
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

@push('homeLoanScripts')
<!-- newjs -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>



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
                    maxlength:10,
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
      
          },
          pincode: "Please enter your pincode",
       
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
    // step2
    $(document).ready(function () {
        $("#frmIncome").validate({
            rules: {
                desiredLoanAmount: "required",
                monthlyIncome: "required",
                propertyFinalized: "required",
                tenure: "required",
                employmentStatus: "required"
            },
            messages: {
                desiredLoanAmount: "Please select the desired loan amount",
                monthlyIncome: "Please select the monthly income",
                propertyFinalized: "Please select whether you have finalized the property",
                tenure: "Please select the tenure",
                employmentStatus: "Please select the employment status"
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "propertyFinalized") {
                    error.appendTo(element.closest(".form-group"));
                } else {
                    error.insertAfter(element);
                }
            }
        });
    });
</script>
<!-- start journey -->

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
                    // const parsedResponse = JSON.parse(response);
                    // console.log('Sent' + parsedResponse['return'])

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
                url: "{{ website_api_base_url() }}" +'/otpsend/verify',
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
                    window.setCookesOtpCheckStatus =true;
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

                   

                   if (!window.setCookeschecked)
                //     {
                //        checkAndSendOtp(phoneNumber, agree);
                //    }
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
    url: "{{ website_api_base_url() }}/home-loan-apply",
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
        onFinish: function () {
            
        }
    });
</script>

<!-- end journey -->



<!--  -->
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
    $("#btnModalClose").on('click', function () {
        // $("#modal").hide();
        $('#myModal').modal('hide');
        window.location.href = "{{website_base_url()}}/home-loan";
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
        otp             = $("#otpInput").val();

        VerifyResponseOtp(phoneNumber,otp);

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

    <img class="card-img" src="{{ website_asset_base_url() }}/images/web_img/home_loan_banner.png"
        alt="Card image" width="auto" />
</div>


<section class="">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body-right">
                    <h4 class="card-title eligible slide">Home Loan</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">It uses utility classes for typography and spacing to space content out within
                        the
                        larger container.
                        This is a simple hero unit, a simple jumbotron-style component for calling extra
                        attention to
                        featured content or information.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>


<section class="">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body-right">
                    <h4 class="card-title eligible slide">How do Home Loan Functions:
                    </h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        Are you thinking of investing in your dream home but falling short on funds? A home loan is a
                        loan that
                        allows individuals to borrow money to purchase a home. It is a secured loan that is backed by
                        collateral
                        and the home itself is the collateral in this type of loan. In case an individual fails to repay
                        the
                        loan, lenders are eligible to take possession of the property that was given as collateral
                        through a
                        legal process known as foreclosure. Borrowers need to make a down payment, which is a percentage
                        of the
                        home’s purchase price. The down payment amount can vary from lender to lender. But, what’s the
                        process
                        of applying for a home loan and it can benefit you in the long run? Are you eligible for a home
                        loan or
                        what are the required documents for a home loan?
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- start your journey -->



<!-- <span id="secStart"></span> -->
<section class="container-fluid">
    <h4 class="eligible text-center slide" id="txtjourney">Start Your Journey
    </h4>
    <div class="bar m-auto">&nbsp;</div>
    <br><br>
<!-- 108 -->

<!-- start otp -->
<div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="otpModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="otpModalLabel" style="color: #1338be; text-align: center;" ><b>Enter OTP Code</b></h5>
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
                        <input type="text" class="form-control otp-input" id="otpInput" required placeholder="Enter OTP">
                    </div>
                    <button type="button" class="btn btn-primary btn-block" onclick="verifyOTP()">Verify OTP</button>
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
                    <!-- <h4 class="mb-3 text-center"><b>Number</b></h4> -->
                    <hr class="mb-4">
                    <form name="frmContact1" id="frmContact1" class="form-group label">
                        <!-- <form id="loanForm"> -->
                        <div class="row">
                           
                          
                           
                                <div class="form-group">
                                    <label for="mobileNumber1">Mobile Number <span style="color: red;">*</span></label>
                                    <input type="tel" class="form-control" id="mobileNumber1"
                                        placeholder="Enter your Mobile number" name="mobileNumber1" >
                                </div>
                           
                        </div>
                        <div class="form-group" >
                            <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox">
                            <label for="agreeCheckbox" style="font-size: 14px; font-weight: normal;" >By submitting this form, you have read and agree to the Credit Report Terms of Use, Terms of Use & Privacy Policy</label>
                        </div>
                        
                        <div class="step-footer mt-5" >           
                            <button data-step-action="next" class="step-btn btn btn-success" onclick="copyMobileNumber()">Next</button>
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
                                    <label for="pincode">Pincode <span style="color: red;">*</span></label><span id="error_pincode"></span>
                                    <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode"  required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label><span id="error_city"></span>
                                    <input type="text" readonly style="background-color: white;" class="form-control"
                                        name="city" id="city" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">State</label><span id="error_state"></span>
                                    <input type="text" readonly style="background-color: white;" class="form-control"
                                        name="state" id="stateName" >
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
                    <h4 class="mb-3 text-center">(Employment Detail)</h4>
                    <hr class="mb-4">
                    <form name="frmIncome" id="frmIncome" class="form-group label">
                       
                        <div class="row">
                            <div class="col-md-6">
                                <label for="desiredLoanAmount">Desired Loan Amount <span style="color: red;">*</span></label>
                                <select id="desiredLoanAmount" name="desiredLoanAmount" required class="form-control">
                                    <option value="" disabled selected>Select Desired Loan Amount</option>
                                    <option value="0-3L">0 - 3L</option>
                                    <option value="3L-5L">3L - 5L</option>
                                    <option value="5-10L">5 - 10L</option>
                                    <option value="MoreThan10L">More than 10L</option>
                                </select>
                                <br>
                                <label for="monthlyIncome">Monthly Income <span style="color: red;">*</span></label>
                                <select id="monthlyIncome" name="monthlyIncome" required class="form-control">
                                    <option value="" disabled selected>Select Monthly Income</option>
                                    <option value="0-20K">0 - ₹20,000</option>
                                    <option value="20K-1L">₹20,000 - 1L</option>
                                    <option value="1L-5L">1L - 5L</option>
                                    <option value="5L-10L">5L - 10L</option>
                                    <option value="10L-15L">10L - 15L</option>
                                    <option value="MoreThan15L">More than 15L</option>
                                </select>
                                <br> <!-- Add this field in the form for step 7 (Loan Information) -->
                                <div class="form-group">
                                    <label>Have you finalized the property?</label>
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
                                <label for="tenure">Tenure (in months) <span style="color: red;">*</span></label>
                                <select id="tenure" name="tenure" required class="form-control">
                                    <option value="" disabled selected>Select Tenure</option>
                                    <option value="1Year">1 Year</option>
                                    <option value="2Years">2 Years</option>
                                    <option value="3Years">3 Years</option>
                                    <option value="4Years">4 Years</option>
                                    <option value="5Years">5 Years</option>
                                </select>
                                <br>
                                <label for="employmentStatus">Employment Status <span style="color: red;">*</span></label>
                                <select id="employmentStatus" name="employmentStatus" required class="form-control">
                                    <option value="" disabled selected>Select Employment Status</option>
                                    <option value="Employed">Employed</option>
                                    <option value="SelfEmployed">Self-Employed</option>
                                    <option value="Unemployed">Unemployed</option>
                                </select>
                            </div>
                        </div>
    
    
    
                        <!-- <button type="submit">Submit</button> -->
                        <div class="step-footer mt-5" id="divbtn">
                            <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                            <button data-step-action="next" class="step-btn btn btn-success">Next</button>
                            <!-- <button data-step-action="finish" class="step-btn btn btn-success" type="submit">Finish</button> -->
                        </div>
                    </form>
                </div>

                <div class="spinner" style="display: none;"></div>
                <div class="step-tab-panel" data-step="step4" id="divstep3">
                    <!-- <h4 class="mb-3 text-center">(Employment Detail)</h4> -->
                    <!-- <hr class="mb-4"> -->
                    <form name="frmIncome1" id="frmIncome1" class="form-group label">
                        <!-- <div id="banner" style="display: none; "> -->
                            <div id="banner" >
                            <img style="margin: auto;" src="{{ website_asset_base_url() }}/images/web_img/thankyou.png"
                                alt="Banner Image">
                            <button class="btn btn-primary" id="applyAgain" style="display: block; margin: auto;">Apply Again</button>
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
        <div>
        
        </div>
    </div>

</section>




<section class="">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <h4 class="eligible slide">When To Take a Home Loan:</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Living in your dream home can be tempting but there are various factors that decide when you should
                    take a home loan. Before you take a home credit loan apply, assess your overall financial situation.
                    <span><a href="#">Apply for Home loan</a></span> is a long-term commitment, therefore being
                    financially stable plays a vital
                    role.

                </p><br>
                <p class="paraFont">
                    Do you have a stable income, a good credit score, and a reasonable level of debt? Keep all these
                    questions in your mind whenever taking a home loan. You should have savings for a down payment.
                    Borrowers are required to pay a down payment of around 20% of the home’s purchase price. Lenders are
                    attracted to borrowers with a steady income and if you have been in your current job for a while and
                    expect job stability then it's the right time for you to explore home loans. The most crucial factor
                    is the market conditions. Keep an eye on interest rates and market conditions as low interest rates
                    can make borrowing more affordable for you.

                </p>



            </div>


        </div>
    </div>
</section>


<section class="container-fluid">
    <div class="container-fluid mt-4">


        <div class="mt-4">
            <h4 class="eligible slide">What Are The Types of Home Loans?</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>

            <p class="paraFont">
                Homebuyers have various types of home loans to choose from, each with its own features and benefits.
                Here are the types of home loans you can consider according to your needs before home credit loan apply.
            </p>
            
            <div class="loan-types">
                <div class="loan-type">
                    <i class="fas fa-home"></i>
                    <p>Home Purchase Loan</p>
                </div>
                <div class="loan-type">
                    <i class="fas fa-landmark"></i>
                    <p>Land Purchase Loan/Plot Loan</p>
                </div>
                <div class="loan-type">
                    <i class="fas fa-hammer"></i>
                    <p>Home Construction Loan</p>
                </div>
                <div class="loan-type">
                    <i class="fas fa-wrench"></i>
                    <p>Home Improvement Loan</p>
                </div>
                <div class="loan-type">
                    <i class="fas fa-home"></i>
                    <p>Home Conversion Loan</p>
                </div>
                <div class="loan-type">
                    <i class="fas fa-arrows-alt"></i>
                    <p>Home Extension Loan</p>
                </div>
            </div>
        </div>



    </div>
</section>



<section class="container-fluid">
    <div class="container-fluid mt-4">

        <div class="mt-4">
            <h4 class="eligible slide">Benefits of a Home Loan:</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <p class="paraFont">
                Taking a home credit loan apply can be beneficial to the individual in many ways. Myzeon People looking
                to purchase a home can easily take a home loan and avail of benefits like:
            </p> <br>

            <div>

                <ul>
                    <li class="eligible">
                        <span class="listSpan">Homeownership:
                    </li>
                    <p class="paraFont">
                        A home loan allows individuals to purchase their dream home without having to pay the entire
                        amount upfront. This way, they can become homeowners and start building equity in the property.

                    </p>

                    <li class="eligible">
                        <span class="listSpan">Building Equity:
                    </li>
                    <p class="paraFont">
                        As the borrower continues to pay off the home loan, their ownership of the property increases,
                        and they build equity in the property. This equity can be used in the future for various
                        purposes like taking a loan against it or selling the property for a profit.

                    </p>
                    <li class="eligible">
                        <span class="listSpan">Tax Deductions:
                    </li>
                    <p class="paraFont">
                        Home loan borrowers can claim tax deductions on the principal amount, interest paid on the loan,
                        and other charges associated with the loan. These tax benefits can help reduce the overall tax
                        liability of the borrower.
                    </p>

                    <li class="eligible">
                        <span class="listSpan">Stable Monthly Payments with Low-interest Rates:
                    </li>
                    <p class="paraFont">
                        Home loans come with fixed interest rates, which means that the borrower's monthly payments
                        remain stable throughout the loan tenure. Home loan interest rates are generally lower than
                        other types of loans, making it a cost-effective way of borrowing money for home purchases. This
                        makes it easier for borrowers to plan and budget their finances.
                    </p>

                    <li class="eligible">
                        <span class="listSpan">Appreciation Potential:
                    </li>
                    <p class="paraFont">
                        Homes generally appreciate in value over the long term. Therefore, by taking a home loan,
                        borrowers can benefit from the potential appreciation in the property's value over time.
                    </p>


                    <li class="eligible">
                        <span class="listSpan">Flexibility in Loan Types:
                    </li>
                    <p class="paraFont">
                        Home loan borrowers can choose from various types of loans, including home purchase loans, land
                        purchase loans, home construction loans, home improvement loans, home conversion loans, and home
                        extension loans, according to their needs and requirements.

                    </p>

                    <li class="eligible">
                        <span class="listSpan">Borrowing for Home Improvements:
                    </li>
                    <p class="paraFont">
                        Home loan borrowers can also use the loan amount to make home improvements, which can increase
                        the property's value and improve the borrower's quality of life. Therefore, you can choose a
                        home credit loan when you want to purchase a home.

                    </p>

                </ul>

            </div>


        </div>
    </div>
</section>

<!-- end start your journey -->


<!-- end start your journey -->

<section class="">
    <div class="container-fluid mt-4">


        <div>
            <h4 class="eligible slide">What is the Home Loan Eligibility?</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>

            <p class="paraFont">
                In order to take a home loan, you have to qualify for home loan eligibility criteria.
            </p>
            <ul>
                <li class="paraFont">
                    <span class="listSpan">&bull;</span> The age of the borrower should range
                    between 21 to 60 years.
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> The minimum income for taking a home
                    loan is RS. 1,80,000 p.a.
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> The borrower should have 2-3 years
                    experience in the current job.
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> The borrower should have a high
                    credit score ranging from 750 or above.
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Home conversion loan
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Home extension loan
                </li>

            </ul>
        </div>



    </div>
</section>


<section class="">
    <div class="container-fluid mt-4">


        <div>
            <h4 class="eligible slide">Required Documents For a Home Loan</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>

            <p class="paraFont">
                The required documents for choosing a home credit loan apply are necessary to satisfy the KYC norms.
                Here are the documents that you have to assemble before taking a home loan:
            </p>
            <ul>
                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Identity proof such as PAN card,
                    Aadhar card, Voter ID, Passport
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Address proof includes Registered
                    rent agreement, Aadhar card, driver's license, Latest utility bills

                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Income proof includes salary slips
                    for the last 3 to 6 months
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span>Property documents such as copy of the
                    property documents, such as Sale deed, Khata Certificate, and Encumbrance Certificate

                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Photographs
                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Proof of the down payment made for
                    the property purchase

                </li>

            </ul>
        </div>



    </div>
</section>

<section class="">
    <div class="container-fluid">


        <div>
            <h4 class="eligible slide">How Can You Apply For Home Loan Online?</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>

            <p class="paraFont">
                If you want to apply for a home credit loan, but don’t know how to apply for a home loan online, then
                you are at the right place. The steps include:

            </p>
            <ul>
                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Visit the official website of the
                    lender you chose after researching and comparing interest rates and loan tenure offered by different
                    lenders.

                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Navigate the home loan section and
                    you will see a new window open. Enter the loan amount that you want to borrow for a home loan.

                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Fill in your personal details in the
                    given blanks.

                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span>Accept the terms and conditions asked
                    at the time of submitting the home loan application.


                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Submit the application.

                </li>

            </ul>
        </div>



    </div>
</section>

<!-- start your journy form -->



<!-- end journey form -->

<section class="">
    <div class="container-fluid">


        <div>
            <h4 class="eligible slide">Tips To Use Home Loan Effectively</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>

            <p class="paraFont">
                Some tips for home credit loan apply to avail the benefits of home loan effectively are:


            </p>
            <ul>
                <li class="paraFont">
                    <span class="listSpan">&bull;</span>
                    Before you choose a home credit loan, it's essential to plan your finances. Evaluate your income,
                    expenses, debts, and other financial obligations to determine how much you can afford to borrow and
                    repay also to <span><a href="#">apply online for car loan</a></span>.


                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span>
                    Shop around and compare different lenders and their loan features, interest rates, fees, and other
                    terms and conditions.


                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Making a larger down payment can help
                    you reduce your loan amount and monthly payments. It can also help you get a better interest rate
                    and save money on interest charges over the loan tenure.


                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span>Choosing a shorter loan tenure can
                    help you save money on interest charges and repay your loan faster. However, it may also increase
                    your monthly payments, so make sure you can afford it.


                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> If you have additional income or
                    savings, consider making prepayments towards your home loan. This can help you reduce your loan
                    amount and interest charges and repay your loan faster.

                </li>

                <li class="paraFont">
                    <span class="listSpan">&bull;</span> Your credit score plays a crucial
                    role in determining your home loan eligibility and interest rate. Maintain a good credit score by
                    paying your bills on time, reducing your debts, and avoiding new credit applications.
                </li>

            </ul>
        </div>



    </div>
</section>


<section class="">
    <div class="container-fluid">
        <div class="row">
            <h4 class="eligible slide">Interest Rate</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
        </div>
        <br>
            <!-- <div id="bankSelection">
                <div class="col-md-12">
                    <h5></h5>
                    <div class="dropdown" id="bankSelection">

                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Compare Interest Rates
                        </button>
                        <div class="dropdown-menu">
                            <input type="checkbox" name="selectedBanks" value="Axis Bank Personal Loan"
                                onchange="compareInterestRate()"> Axis Bank<br>
                            <input type="checkbox" name="selectedBanks" value="Ashv Finance Personal Loan"
                                onchange="compareInterestRate()"> Ashv Finance<br>
                            <input type="checkbox" name="selectedBanks" value="Aditya Birla Finance Personal Loan"
                                onchange="compareInterestRate()"> Aditya Birla<br>
                            <input type="checkbox" name="selectedBanks" value="Bank of Baroda Personal Loan"
                                onchange="compareInterestRate()"> Bank of Baroda<br>
                            <input type="checkbox" name="selectedBanks" value="" onchange="compareInterestRate()">
                            Bank of Maharastra<br>
                            <input type="checkbox" name="selectedBanks" value="Bank of India Personal Loan"
                                onchange="compareInterestRate()"> Bank of India<br>

                            <input type="checkbox" name="selectedBanks" value="Bajaj Finserv Personal Loan"
                                onchange="compareInterestRate()"> Bajaj Finserv<br>
                            <input type="checkbox" name="selectedBanks" value="Citibank Personal Loan"
                                onchange="compareInterestRate()"> Citibank<br>
                            <input type="checkbox" name="selectedBanks" value="" onchange="compareInterestRate()">
                            Canara Bank<br>
                            <input type="checkbox" name="selectedBanks" value="" onchange="compareInterestRate()"> DBS
                            Home<br>
                            <input type="checkbox" name="selectedBanks" value="Fullerton Personal Loan"
                                onchange="compareInterestRate()"> Fullerton India<br>
                            <input type="checkbox" name="selectedBanks" value="" onchange="compareInterestRate()">
                            Federal Bank<br>
                            <input type="checkbox" name="selectedBanks" value="Paysense Personal Loan"
                                onchange="compareInterestRate()"> Finnable<br>
                            <input type="checkbox" name="selectedBanks" value="Finnable Personal Loan"
                                onchange="compareInterestRate()"> Finzy<br>
                            <input type="checkbox" name="selectedBanks" value="HDFC Bank Personal Loan"
                                onchange="compareInterestRate()"> HDFC Bank<br>
                            <input type="checkbox" name="selectedBanks" value="Home Credit Personal Loan"
                                onchange="compareInterestRate()"> Home Credit<br>
                            <input type="checkbox" name="selectedBanks" value="ICICI Bank Personal Loan"
                                onchange="compareInterestRate()"> ICICI Bank<br>
                            <input type="checkbox" name="selectedBanks" value="IDBI Personal Loan"
                                onchange="compareInterestRate()"> IDBI<br>
                            <input type="checkbox" name="selectedBanks" value="IndusInd Bank Personal Loan"
                                onchange="compareInterestRate()"> IndusInd Bank<br>
                            <input type="checkbox" name="selectedBanks" value="IDFC First Bank Personal Loan"
                                onchange="compareInterestRate()"> IDFC First Bank<br>
                            <input type="checkbox" name="selectedBanks" value="" onchange="compareInterestRate()">
                            Indiabulls<br>
                            <input type="checkbox" name="selectedBanks" value="IIFL Personal Loan"
                                onchange="compareInterestRate()"> IIFL<br>

                            <input type="checkbox" name="selectedBanks" value="Kotak Mahindra Bank Personal Loan"
                                onchange="compareInterestRate()"> Kotak Mahindra Bank<br>
                            <input type="checkbox" name="selectedBanks" value="" onchange="compareInterestRate()">
                            Karnataka Bank<br>
                            <input type="checkbox" name="selectedBanks" value="" onchange="compareInterestRate()">
                            LIC Housing Finance Ltd.<br>
                            <input type="checkbox" name="selectedBanks" value="Punjab National Bank Personal Loan"
                                onchange="compareInterestRate()"> Punjab National Bank<br>
                            <input type="checkbox" name="selectedBanks" value="Incred Personal Loan"
                                onchange="compareInterestRate()"> Paysense<br>
                            <input type="checkbox" name="selectedBanks" value="RBL Bank Personal Loan"
                                onchange="compareInterestRate()"> RBL<br>
                            <input type="checkbox" name="selectedBanks" value="AU Small Finance Bank Personal Loan"
                                onchange="compareInterestRate()"> Sundaram Home Finance Limited<br>
                            <input type="checkbox" name="selectedBanks" value="Standard Chartered Bank Personal Loan"
                                onchange="compareInterestRate()"> Standard Chartered Bank<br>
                            <input type="checkbox" name="selectedBanks" value="Tata Capital Personal Loan"
                                onchange="compareInterestRate()"> Tata Capital<br>
                            <input type="checkbox" name="selectedBanks" value="Union Bank of India Personal Loan"
                                onchange="compareInterestRate()"> United Bank of India<br>
                            <input type="checkbox" name="selectedBanks" value="Ujjivan Small Finance Bank Personal Loan"
                                onchange="compareInterestRate()">
                            Ujjivan<br>
                            <input type="checkbox" name="selectedBanks" value="Upward Personal Loan"
                                onchange="compareInterestRate()"> Upward<br>
                            <input type="checkbox" name="selectedBanks" value="Yes Bank Personal Loan"
                                onchange="compareInterestRate()"> Yes Bank<br>

                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="col-sm-8">
                            <label for="interestRateSlider">Filter by Interest Rate:</label>
                            <div class="range-slider-container">
                                <input type="range" class="form-range" id="interestRateSlider" min="0" max="20"
                                    step="0.25" value="0" oninput="filterByInterestRate()">
                                <div id="loanInterestSlider">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min">
                                    </div>
                                   
                                </div>
                                <div id="interestRangeLabels">
                                    <div class="range-label" style="left: 0%;">0</div>
                                    <div class="range-label" style="left: 20%;">5</div>
                                    <div class="range-label" style="left: 40%;">10</div>
                                    <div class="range-label" style="left: 60%;">15</div>
                                    <div class="range-label" style="left: 80%;">20</div>
                                    <div id="selectedInterestRateMarker"></div>
                                </div>
                                <div id="interestRateValue"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br>

            </div> -->


            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered border-primary">
                        <tbody id="tab">
                            <tr class="bank">
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
</section>


@endsection