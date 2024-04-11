@extends('front_end_layout.home')
@push('startyourjourneystyle')
<!-- <link rel="stylesheet" href="../dist/jquery-steps.css"> -->
<link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/front_end/asset/css/style.css') }}">


<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Demo stylesheet -->
<link rel="stylesheet" href="css/style.css">
@endpush
@push('startyourjourneyscript')
<!-- newjs -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/newjs/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>
<script>
    // Function to rotate the meter arrow based on data-deg attribute
    function rotateMeterArrow() {
        const meterArrow = document.querySelector('.meterArrow');
        const deg = meterArrow.getAttribute('data-deg');
        meterArrow.style.transform = `translateX(-50%) translateY(50%) rotate(${deg}deg)`;
    }

    // Function to update the score value and rotate the meter arrow
    function updateScore(score) {
        const scoreElement = document.getElementById('scorevalue');
        scoreElement.textContent = score;
        const meterArrow = document.querySelector('.meterArrow');

        if (score < 300) {
            meterArrow.setAttribute('data-deg', '-135');
        } else if (score > 750) {
            meterArrow.setAttribute('data-deg', '60');
        }
        else if (score > 850) {
            meterArrow.setAttribute('data-deg', '120');
        } else {
            const normalizedDeg = (score - 300) / (850 - 300) * 270 - 135;
            meterArrow.setAttribute('data-deg', normalizedDeg);
        }

        rotateMeterArrow();
    }

    $(document).ready(function () {
        // var mobile = getCookie("mobile_number");
        // var mobile = '9958217430';
        // $.ajax({
        //     url: "https://crm.myzeon.com/api/check-cibil-score/" + mobile,
        //     type: "GET",
        //     success: function(response) {
        //         updateScore(response);
        //     }
        // });
        updateScore(700);

    });

    // Function to get cookie value by name
    function getCookie(name) {
        const cookies = document.cookie.split(';');
        for (const cookie of cookies) {
            const [cookieName, cookieValue] = cookie.trim().split('=');
            if (cookieName === name) {
                return decodeURIComponent(cookieValue);
            }
        }
        return null;
    }
</script>


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
        // Custom method to check if the name contains only characters
        $.validator.addMethod("onlyCharacters", function (value, element) {
            return /^[a-zA-Z]+$/.test(value);
        }, "Please enter only characters.");

        // Custom method to check if mobile number does not start with 0 to 5
        $.validator.addMethod("notStartWithZeroToFive", function (value, element) {
            return /^[6-9]/.test(value); // Returns true if the number starts with 6 to 9
        }, "Mobile number should not start with 0 to 5");
        jQuery.validator.addMethod("panCard", function (value, element) {
            // Use a regular expression to validate PAN card format
            return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value);
        }, "Please enter a valid PAN card number.");

        // Validation for the form
        $("#frmContact").validate({
            rules: {
                firstName: {
                    required: true,
                    onlyCharacters: true // Using the custom method
                },
                middleName: {
                    // required: true,
                    // onlyCharacters: true // Using the custom method
                },
                lastName: {
                    required: true,
                    onlyCharacters: true // Using the custom method
                },
                panCardNumber: {
                    required: true,
                    // Add a custom rule for PAN card validation
                    panCard: true
                },
                dob: "required",
                email: {
                    required: true,
                    email: true
                },
                mobileNumber: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true,
                    notStartWithZeroToFive: true // Using the custom method
                }
            },
            messages: {
                firstName: {
                    required: "Please enter your first name",
                    onlyCharacters: "Please enter only characters"
                },
                middleName: {
                    // required: "Please enter your middle name",
                    onlyCharacters: "Please enter only characters"
                },
                lastName: {
                    required: "Please enter your last name",
                    onlyCharacters: "Please enter only characters"
                },
                panCardNumber: {
                    required: "Please enter a valid PAN card number",
                    panCard: "Please enter a valid PAN card number"
                },
                dob: "Please enter your date of birth",
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                mobileNumber: {
                    required: "Please enter your mobile number",
                    minlength: "Mobile number must be at least 10 digits",
                    digits: "Please enter only digits",
                    notStartWithZeroToFive: "Mobile number should not start with 0 to 5"
                }
            },
            panCardNumber: {
                required: "Please enter a valid PAN card number",
                panCard: "Please enter a valid PAN card number",
            },
            errorPlacement: function (error, element) {
                error.appendTo(element.closest(".form-group"));
            }
        });

        // Custom validation method for PAN card format
        jQuery.validator.addMethod("panCard", function (value, element) {
            return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value);
        }, "Please enter a valid PAN card number.");
    });
</script>

<script>
    // step2
    $(document).ready(function () {
        $("#frmIncome").validate({
            rules: {
                mobileNumber: {
                    required: true,
                    // Add a custom rule for Indian mobile number validation
                    minlength: 10,
                    maxlength: 10,
                    digits: true,
                },
                otp: "required"
            },
            messages: {
                mobileNumber: {
                    required: "Please enter your mobile number",
                },
                otp: "Please enter the OTP"
            },
            errorPlacement: function (error, element) {
                error.appendTo(element.closest(".form-group"));
            }
        });
    });
</script>
<!-- <script>
    $(document).ready(function () {
        $.validator.addMethod(
            "panCard",
            function (value, element) {
                // Implement your PAN card validation logic here
                // Example: /^([A-Z]){5}([0-9]){4}([A-Z]){1}$/i.test(value)
                return true; // Return true if the PAN card is valid, false otherwise
            },
            "Please enter a valid PAN card number."
        );

        // Other code for form validation as mentioned above
    });
</script> -->

<!-- form required error show   -->



<script>
    //step1
    // start add api by mannu 12th-feb
    
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
            
            console.log('hello checkbox')
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
    // end add api by mannu 12th-feb

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
    var frmIncome2 = $('#frmIncome2');
    //step4
    var frmIncome1 = $('#frmIncome1');
    // var frmIncome1Validator = frmIncome1.validate();
    $('#demo').steps({
    onChange: function (currentIndex, newIndex, stepDirection) {
        console.log("currentIndex: " + currentIndex + " newIndex: " + newIndex + " stepDirection: " +
            stepDirection);

        if (currentIndex === 0) {
            if (stepDirection === 'forward') {
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

                return frmContact1.valid();
            }

            if (stepDirection === 'backward') {
                frmContact1Validator.resetForm();
            }
        }
       
        if (currentIndex === 1 && newIndex === 2 && stepDirection === 'forward') {
            console.log('Hello OTP');
            if (!window.setCookesOtpCheckStatus) {
                alert("Please Confirm Your OTP First");
                return false;
            }
        }

        // if ($("#otp").val().trim() === '') {
        //                 alert('Please enter the OTP.');
        //                 return false;
        //             }
        if (currentIndex === 2) { // Check if on step 3
            if ($("#otp").val().trim() === '') {
                        alert('Please enter the OTP.');
                        return false;
                    }
            if (stepDirection === 'forward') {
                submitOtpVerification(); // Call the function to submit OTP verification
                return frmIncome.valid();
            }
            if (stepDirection === 'backward') {
                // Handle backward navigation if needed
                frmIncomeValidator.resetForm();
            }
        }
        function submitOtpVerification() {
    console.log('otp2');
    var otp = $('#otp').val();
    var mobileNumber = $('#mobileNumber2').val();
    console.log('Mobile Number:', mobileNumber);

    $.ajax({
        url: `https://crm.myzeon.com/loancrm/api/cibil-submit-otp/${mobileNumber}/${otp}`,
        type: 'GET',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        success: function (response) {
            console.log('OTP verification API call successful:', response);

            // If successful, you can proceed to the next step or update UI
            // Example: $('#demo').steps('next');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('OTP verification API call failed:', textStatus, errorThrown);
        }
    });
}

        
                // Check if the user has reached step 4
                if (currentIndex === 3 && newIndex === 3 && stepDirection === 'none') {
                    // Fetch and update profile data
                    console.log("this is data");
                    // fetchAndUpdateProfileData();
                }
                   
                var number = $("#mobileNumber1").val();

                $.ajax({
                url: `https://crm.myzeon.com/api/cibil-profile/${number}`,
                type: 'GET',
                dataType: 'json',
                success: function (profileResponse) {
                    console.log('Profile API call on page load successful:', profileResponse[0].email);

                    // Update the profile data on the page
                    // You can add code here to update the UI with the received profile data

                    // Example: Update profileName, profileEmail, prfilePhone, etc.
                    $('#profileName').text(profileResponse[0].first_name);
                    $('#profileName2').text(profileResponse[0].last_name);
                    $('#profileEmail').text(profileResponse[0].email);
                    $('#prfilePhone').text(profileResponse[0].mobile_number);
                    // Update other profile data as needed

                    // Auto-fill the form on step 4 with the received profile data
                    $('#inpName').val(profileResponse[0].first_name);
                    $('#inpMiddleName').val(profileResponse[0].middle_name);
                    $('#inpLastName').val(profileResponse[0].last_name);
                    $('#inpPancard').val(profileResponse[0].pancard);
                    $('#inpmobilenumber').val(profileResponse[0].mobile_number);
                    $('#inpDob').val(profileResponse[0].date_of_birth);
                    $('#Inpemail').val(profileResponse[0].email);
                },
                error: function (profileXhr, profileStatus, profileError) {
                    console.error('Profile API call on page load failed:', profileXhr, profileStatus, profileError);
                }
            });
            $('#frmIncome2').submit(function (event) {
            event.preventDefault();

            // Collect the form data
            var formData = {
                name: $('#inpName').val(),
                middleName: $('#inpMiddleName').val(),
                lastName: $('#inpLastName').val(),
                pancard: $('#inpPancard').val(),
                mobileNumber: $('#inpmobilenumber').val(),
                dob: $('#inpDob').val(),
                email: $('#Inpemail').val()
                // Add other form fields as needed
            };

         
        });
            // step0

            // if (currentIndex === 1 && newIndex === 2 && stepDirection === 'forward') {
                   
            //        if(!window.setCookesOtpCheckStatus){
            //            alert("Please Confirm Your Otp First");
            //            return false;
            //        }


            //    }

            //    if (currentIndex === 0 && newIndex === 1 && stepDirection === 'forward') {
            //         var phoneNumber = $('').val();
            //         window.setUserMobileNumber = phoneNumber;
            //         var agree = $('#agreeCheckbox').prop('checked');

                    

            //         if (!window.setCookeschecked) {
            //             checkAndSendOtp(phoneNumber, agree);
            //         }

            //     }

            // if (currentIndex === 0) {
            //     if (stepDirection === 'forward') {
            //         return frmContact1.valid();
            //     }
            //     console.log('step0')
            //     if (stepDirection === 'backward') {
            //         frmContact1Validator.resetForm();
            //     }

            // }

            //step1
            if (currentIndex === 1) {
                var phoneNumber = $('#mobileNumber1').val();
                var agree = $('#agreeCheckbox').prop('checked');

                // checkAndSendOtp(phoneNumber, agree);
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
            if (currentIndex === 3) {
                if (stepDirection === 'forward') {
                    return frmIncome1.valid();
                }
                console.log('step3')

                if (stepDirection === 'backward') {
                    frmIncome1Validator.resetForm();
                }
            }
            // step2 108
            if (currentIndex === 4) {

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

                var salary = $('#monthlySalary').val();
                console.log(salary + " salary is here");

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
                $.ajax({
                    type: "GET",
                    url: "http://192.168.120.228/myzeon_web/index.php/api/cibil-insert-reg",
                    data: formDataObject,
                    success: function (response) {
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
                $("li[data-step-target='step4']").first().hide();

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
<!-- 19th_feb by mannu -->
<!-- <script>
    $(document).ready(function () {
        // Function to copy mobile number and show OTP modal
        window.copyMobileNumber = function () {
            var mobileNumber = $('#mobileNumber1').val();

            // Perform mobile number validation as needed

            // Copy mobile number to OTP modal
            $('#otpModalLabel').text('Enter OTP sent to ' + mobileNumber);
            $('#otpInput').val(''); // Clear previous OTP input
            $('#otpModal').modal('show'); // Show OTP modal
        };

        // Function to verify OTP
        window.verifyOTP = function () {
            var enteredOTP = $('#otpInput').val();

            // Perform OTP verification logic as needed

            // Close the OTP modal
            $('#otpModal').modal('hide');

            // Continue with the form submission or any other actions
            // For example, you can submit the form here or move to the next step
            // $('#frmContact1').submit();
            // OR
            // $('#demo').steps('next');
        };
    });
</script> -->
<!--  -->

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

<!-- Form Script -->





<!--  -->
<script>
    function ClosedModal() {
        $('#myModal').modal('hide');
    }


</script>
<script>
    $("#btnModalClose").on('click', function () {
        // $("#modal").hide();
        $('#myModal').modal('hide');
        window.location.href = "http://192.168.120.228/myzeon_web/index.php/business-loan";
        // window.location.href = "{{ route('home') }}"
    })
</script>
<!-- add by mannu 12th-feb -->
<!-- autofill number -->
<script>
    function copyMobileNumber() {
        const mobileNumberStep1 = $("#mobileNumber1").val();
        $("#mobileNumber").val(mobileNumberStep1);
        $("#mobileNumber2").val(mobileNumberStep1);
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
<!-- add by mannu 12th-feb -->
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
<!-- / -->



<!-- city state from pincode by mannu -->
<script>
    $('#pincode').on('input', function () {
        var pincode = $(this).val(); // Get the value of the input field
        // console.log("input"+inputValue);
        // $('#output').text('Input value: ' + inputValue); // Update the output element with the value

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

@endpush
@push('personalLoanStyle')


<!-- all add link and script from business loan page -->
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script> -->

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

<style>
    .scoreMeterContainer {
        width: 400px;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px auto;
        position: relative;
    }

    .scoreMeter {
        width: 680px;
        height: 220px;
        position: relative;
    }

    .meterArrow {
        width: 4px;
        height: 121px;
        background-color: #a6bb97;
        position: absolute;
        left: 47%;
        bottom: 59%;
        transform: translateX(-50%) translateY(50%) rotate(0deg);
        transform-origin: bottom center;
        transition: transform 0.5s ease;
    }

    .meterScore {
        position: absolute;
        top: 23px;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        font-weight: bold;
        font-size: 21px;
    }

    #score {
        font-size: 32px;
        font-weight: 500px;
        line-height: 72px;
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
    .fas {
        font-size: 25px;
        /* color: #6f60f1; */
        padding: 10px;

    }

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
<!--form css -->
<style>
    .form-control {
        height: calc(2.3em + 0.75rem + 0px);
    }


    .container {
        max-width: 1200px;
        /* Adjust container width as needed */
        margin-top: 50px;
        color: #fff;
        font-family: montserrat, Sans-Serif;
        font-weight: bolder;
        ;
        line-height: 30px;
        font-size: 17px;

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

    input.error {
        border: 2px solid #000;
        color: #000;
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="../dist/jquery-steps.js"></script>

@endpush

@section('content')
<div class="">

    <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/cibil_image.png" alt="Card image"
        width="auto" style="margin-top: 100px;" />
</div>



<section class="">

    <div class="container-fluid mt-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body-right">
                    <h4 class="card-title eligible slide">What Is A CIBIL Score?</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        A CIBIL score that is also known as a credit score, represents the creditworthiness of an
                        individual. It is a three-digit number that is used by lenders to assess the risk associated
                        with lending money or extending credit to a particular individual. The term "CIBIL score" is
                        often used in India, where CIBIL (Credit Information Bureau India Limited) is one of the
                        prominent credit bureaus.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>

<!-- start your journey -->
<!-- <span id="secStart"></span> -->
<section class="jumbotron">
    <h4 class="eligible text-center slide" id="txtjourney">Start Your Journey
    </h4>
    <div class="bar m-auto">&nbsp;</div>
    <br><br>
    <!-- 108 -->
    <!-- start otp by mannu 12th-feb -->
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

    <!-- end otp by mannu 12th-feb -->
    <div id="divBanner">
        <div class="step-app" id="demo">
            <ul class="step-steps">
                <li data-step-target="step1">step1</li>
                <li data-step-target="step2">step2</li>
                <li data-step-target="step3">step3</li>
                <li data-step-target="step4">step4</li>
                <li data-step-target="step5" style="display: none;">step5</li>



            </ul>
            <div class="step-content">
                <div class="step-tab-panel" data-step="step1" id="divstep12">
                    <!-- <h4 class="mb-3 text-center"><b>Number</b></h4> -->
                    <!-- <hr class="mb-4"> -->
                    <form name="frmContact1" id="frmContact1" class="form-group label">
                        <!-- <form id="loanForm"> -->
                        <div class="row">

                            <div class="form-group">
                                <label for="mobileNumber1">Mobile Number <span style="color: red;">*</span></label>
                                <input type="tel" class="form-control" id="mobileNumber1"
                                    placeholder="Enter your Mobile number" name="mobileNumber1" required>
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
                <div class="step-tab-panel" data-step="step2">
                    <h4 class="mb-3 text-center"><b>Registration For Apply</b></h4>
                    <hr class="mb-4">
                    <form name="frmContact" id="frmContact" class="form-group label">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="firstName">First Name <span style="color: red;">*</span></label>
                                    <input type="text" id="firstName" name="firstName" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="middleName">Middle Name <span style="color: red;">*</span></label>
                                    <input type="text" id="middleName" name="middleName" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lastName">Last Name <span style="color: red;">*</span></label>
                                    <input type="text" id="lastName" name="lastName" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="panCardNumber">PAN card <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="panCardNumber" name="panCardNumber"
                                        placeholder="Enter a valid PAN card Number (e.g. ABCDE1234F).">
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
                                    <label for="mobileNumber">Mobile Number <span style="color: red;">*</span></label>
                                    <input type="tel" class="form-control" id="mobileNumber"
                                        placeholder="Enter your Mobile number" name="mobileNumber" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="step-footer mt-5" id="divbtn">
                            <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                            <button data-step-action="next" class="step-btn btn btn-success" onclick="copyMobileNumber()" id="btnNext">Next</button>                            <!-- <button data-step-action="finish" class="step-btn btn btn-success" type="submit">Finish</button> -->
                        </div>
                     
                    </form>
                </div>

                <div class="step-tab-panel" data-step="step3">
                    <h4 class="mb-3 text-center"><b>Mobile OTP Form</b></h4>
                    <hr class="mb-4">
                    <form name="frmIncome" id="frmIncome" class="form-group label">
                        <div class="row">
                            <div class="col-md-4 mx-auto">
                                <div class="form-group">
                                    <label for="mobileNumber">Mobile Number <span style="color: red;">*</span></label>
                                    <input type="tel" class="form-control" id="mobileNumber2"
                                        placeholder="Enter your Mobile number" name="mobileNumber" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mx-auto">
                                <div class="form-group">
                                    <label for="otp">OTP </label>
                                    <input type="otp" class="form-control" id="otp" name="otp" placeholder="Enter OTP"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="step-footer mt-5">
                            <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                            <!-- <button class="btn btn-success" type="submit" id="btnFinsh">Finish</button> -->
                            <button data-step-action="next" class="step-btn btn btn-success" onclick="submitOtpVerification()">Next</button>

                            <!-- <button data-step-action="next" class="step-btn btn btn-success">Next</button> -->
                            <!-- <button data-step-action="finish" class="step-btn btn btn-success" type="submit">Finish</button> -->
                        </div>
                    </form>
                </div>

                <div class="step-tab-panel" data-step="step4">
                    <h4 class="mb-3 text-center"><b>Profile</b></h4>
                    <!-- <hr class="mb-4"> -->
                    <form name="frmIncome2" id="frmIncome2" class="form-group label">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <h2 class="mt-5 text-center" style="font-size:28px; color: #000;"> Credit Score Meter</h2>

                                    <div class="row justify-content-center">
                                        <!-- <h2 class="mt-5 text-center" style="font-size:28px; color: #000;"> Credit Score Meter</h2> -->
                                        <div class="scoreMeterContainer">
                                            <div class="scoreMeter">
                                                <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/meter-CIBIL.png"
                                                    alt="Score Meter" width="500" height="200">
                                                <div class="meterArrow" data-deg="0"></div>
                                                <div class="meterScore">
                                                    <div class="score" id="scorevalue" style="color: #444840;">&nbsp;No
                                                        score.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="top: 70px;">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                <b>Profile</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="container-fluid mt-3">
                                                <div class="row">
                                                    <div class="col-md-4"><img decoding="async"
                                                            class="img-fluid rounded-circle profile-image"
                                                            style="width: 80px; height: 80px;"
                                                            src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&amp;t=st=1691648540~exp=1691649140~hmac=688ef76584e433445a83f537cd6a20cc2e095bc3f9e7ad7a988954963dfcee72"
                                                            alt="Profile Image"></div>
                                                    <div class="col-md-8">
                                                        <h3 id="profileName"></h3><h3 id="profileName2"></h3>
                                                        
                                                        &nbsp;

                                                        Email&nbsp;&nbsp;: <span
                                                            id="profileEmail"></span>

                                                        Phone: <span id="prfilePhone"></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <form class="form mb-3">
                                                <div class="container mb-4">
                                                    <div class="row">
                                                        <div class="col-md-4"><label class="form-label" for="name">First
                                                                Name</label><span id="error_name"></span>
                                                            <input id="inpName" class="form-control" type="text"
                                                                placeholder="Enter First Name">
                                                        </div>
                                                        <div class="col-md-4"><label class="form-label"
                                                                for="name">Middle Name</label><span
                                                                id="error_middle"></span>
                                                            <input id="inpMiddleName" class="form-control" type="text"
                                                                placeholder="Enter Middle Name ">
                                                        </div>
                                                        <div class="col-md-4"><label class="form-label" for="name">Last
                                                                Name</label><span id="error_last_name"></span>
                                                            <input id="inpLastName" class="form-control" type="text"
                                                                placeholder="Enter Last Name">
                                                        </div>
                                                    </div>
                                                    <!-- row closed -->
                                                    <div class="row">
                                                        <div class="col-md-4"><label for="pancard">Pancard</label><span
                                                                id="error_pancard"></span>
                                                            <input id="inpPancard" class="form-control" type="text"
                                                                placeholder="Enter Pancard Number">
                                                        </div>
                                                        <div class="col-md-4"><label for="mobile">Mobile
                                                                Number</label><span id="error_mobile_no"></span>
                                                            <input id="inpmobilenumber" class="form-control" type="tel"
                                                                placeholder=" Enter Mobile Number">
                                                        </div>
                                                        <div class="col-md-4"><label for="dob">Date of
                                                                Birth</label><span id="error_dob"></span>
                                                            <input id="inpDob" class="form-control" type="date"
                                                                placeholder="Enter your dob">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6"><label for="email">Email</label><span
                                                                id="error_email"></span>
                                                            <input id="Inpemail" class="form-control" type="email"
                                                                placeholder="Enter your email">
                                                        </div>
                                                        <!-- <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="Edit" class="btn btn-primary">Edit</button> -->

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <b>Tips for cibil score improvment</b>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="flex flex-grow flex-col gap-3">
                                                <div
                                                    class="min-h-[10px] flex flex-col items-start gap-1 overflow-x-auto ">
                                                    <h3 class="mt-3">
                                                        Here are some tips to help you improve your credit score:</h3>
                                                    <ol>
                                                        <li>
                                                            <p>1. <strong>Check Your Credit Report Regularly:</strong>
                                                                Obtain a copy of your credit report from credit bureaus
                                                                like CIBIL and review it for errors or discrepancies.
                                                                Dispute any inaccuracies and have them corrected.</p>
                                                        </li>
                                                        <li>
                                                            <p>2. <strong>Pay Bills on Time:</strong> Timely payment of
                                                                your credit card bills, loan installments, and other
                                                                debts is crucial. Late payments negatively impact your
                                                                credit score.</p>
                                                        </li>
                                                        <li>
                                                            <p>3. <strong>Reduce Credit Card Balances:</strong> Aim to
                                                                keep
                                                                your credit card balances low relative to your credit
                                                                limits. High credit utilization can hurt your score.</p>
                                                        </li>
                                                        <li>
                                                            <p>4. <strong>Use Different Types of Credit:</strong> A mix
                                                                of
                                                                credit types (such as credit cards, loans, and
                                                                mortgages) can be beneficial. It shows you can manage
                                                                different kinds of credit responsibly.</p>
                                                        </li>
                                                        <li>
                                                            <p>5. <strong>Avoid Opening Multiple New Accounts:</strong>
                                                                Opening multiple new credit accounts within a short
                                                                period can lower your average account age and
                                                                potentially raise red flags for lenders.</p>
                                                        </li>
                                                        <li>
                                                            <p>6. <strong>Don’t Close Old Accounts:</strong> Closing
                                                                old,
                                                                unused accounts can reduce your credit history length. A
                                                                longer credit history is generally better for your
                                                                score.</p>
                                                        </li>
                                                        <li>
                                                            <p>7. <strong>Limit Credit Applications:</strong> Applying
                                                                for
                                                                credit frequently (especially within a short span) can
                                                                negatively affect your score. Multiple hard inquiries
                                                                can indicate financial instability.</p>
                                                        </li>
                                                        <li>
                                                            <p>8. <strong>Pay Off Debt Strategically:</strong>
                                                                Prioritize
                                                                paying off high-interest debt first. Paying down
                                                                balances can have a positive impact on your score over
                                                                time.</p>
                                                        </li>
                                                        <li>
                                                            <p>9. <strong>Use Credit Responsibly:</strong> Use credit
                                                                for
                                                                necessary expenses and manage it responsibly. Avoid
                                                                overspending and accumulating excessive debt.</p>
                                                        </li>
                                                        <li>
                                                            <p>10. <strong>Consider Secured Credit Cards:</strong> If
                                                                you’re
                                                                rebuilding credit, secured credit cards can help you
                                                                establish a positive payment history. These cards are
                                                                backed by a security deposit.</p>
                                                        </li>
                                                        <li>
                                                            <p>11. <strong>Be Patient and Persistent:</strong> Improving
                                                                your credit score takes time. Be patient and
                                                                consistently practice responsible credit behavior.</p>
                                                        </li>
                                                        <li>
                                                            <p>12. <strong>Seek Professional Help if Needed:</strong> If
                                                                you’re struggling with debt, consider seeking financial
                                                                counseling or debt management assistance to develop a
                                                                plan for improving your credit.</p>
                                                        </li>
                                                    </ol>
                                                    <p>Remember that improving your credit score is a gradual process.
                                                        It requires consistent effort and responsible financial behavior
                                                        over time. Keep track of your progress, and as your credit score
                                                        improves, you’ll be better positioned for financial
                                                        opportunities.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                <strong>Faqs</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree"
                                            data-bs-parent="#accordionFlushExample">
                                            <div id="elementor-tab-content-1883"
                                                class="elementor-tab-content elementor-clearfix elementor-active"
                                                data-tab="3" role="region" aria-labelledby="elementor-tab-title-1883"
                                                style="display: block;">
                                                <h4 class="mt-3">Here are some frequently asked questions (FAQs)
                                                    regarding CIBIL
                                                    scores:</h4>
                                                <p>&nbsp;</p>
                                                <h5><strong>1. What is a CIBIL score?</strong></h5>
                                                <p>A CIBIL score is a three-digit numerical representation of your
                                                    creditworthiness. It’s calculated based on your credit history,
                                                    payment behavior, and credit utilization, among other factors.</p>
                                                <h5><strong>2. How is the CIBIL score calculated?</strong> </h5>
                                                <p>CIBIL scores are calculated based on various factors, including your
                                                    payment history, credit utilization, length of credit history, types
                                                    of credit accounts, and recent credit inquiries.</p>
                                                <h5><strong>3. Why is a good CIBIL score important?</strong></h5>
                                                <p>A good CIBIL score is crucial for obtaining loans and credit at
                                                    favorable terms. Lenders use it to assess your creditworthiness and
                                                    determine whether to approve your applications and what interest
                                                    rates to offer.</p>
                                                <h5><strong>4. What is considered a good CIBIL score?</strong></h5>
                                                <p>CIBIL scores range from 300 to 900. Generally, a score above 750 is
                                                    considered good and increases your chances of loan approval with
                                                    better terms.</p>
                                                <h5><strong>5. How can I check my CIBIL score?</strong></h5>
                                                <p>You can check your CIBIL score by visiting the CIBIL website or using
                                                    authorized credit bureaus’ websites. You are entitled to one free
                                                    credit report per year from each bureau.</p>
                                                <h5><strong>6. How often should I check my CIBIL score?</strong></h5>
                                                <p>It’s a good practice to check your CIBIL score at least once a year
                                                    or before applying for a significant credit facility, such as a home
                                                    loan or car loan.</p>
                                                <h5><strong>7. Can checking my CIBIL score lower it?</strong></h5>
                                                <p>No, checking your own CIBIL score is considered a “soft inquiry” and
                                                    does not impact your score. However, multiple “hard inquiries” by
                                                    lenders within a short time can have a small negative impact.</p>
                                                <h5><strong>8. How long does negative information stay on my credit
                                                        report?</strong></h5>
                                                <p>Most negative information, such as late payments or defaults, stays
                                                    on your credit report for up to seven years. Bankruptcies may remain
                                                    for up to ten years.</p>
                                                <h5><strong>9. How can I improve my CIBIL score?</strong></h5>
                                                <p>To improve your CIBIL score, focus on paying bills on time, reducing
                                                    credit card balances, maintaining a mix of credit types, and
                                                    avoiding frequent credit applications.</p>
                                                <h5><strong>10. Can I remove negative information from my credit
                                                        report?</strong></h5>
                                                <p>You cannot remove accurate negative information from your credit
                                                    report. However, you can work to improve your credit behavior over
                                                    time, which can have a positive impact on your score.</p>
                                                <h5><strong>11. How long does it take to improve a CIBIL score?</strong>
                                                </h5>
                                                <p>Improving a CIBIL score takes time and depends on your credit
                                                    behavior. Positive changes may start reflecting within a few months,
                                                    while substantial improvements may take a year or more.</p>
                                                <h5><strong>12. Can I get a loan with a low CIBIL score?</strong></h5>
                                                <p>While it’s more challenging to get a loan with a low CIBIL score,
                                                    some lenders offer loans for individuals with lower scores. However,
                                                    the terms may not be as favorable.</p>
                                                <p>Remember that understanding your CIBIL score, managing your credit
                                                    responsibly, and taking steps to improve it can have a significant
                                                    impact on your financial health and opportunities.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-footer mt-5">
                            <!-- <button data-step-action="prev" class="step-btn btn btn-success">Previous</button> -->
                            <!-- <button class="btn btn-success" type="submit" id="btnFinsh">Finish</button> -->
                            <button data-step-action="next" class="step-btn btn btn-success">Next</button>

                            <!-- <button data-step-action="next" class="step-btn btn btn-success">Next</button> -->
                            <!-- <button data-step-action="finish" class="step-btn btn btn-success" type="submit">Finish</button> -->
                        </div>
                    </form>
                    <!-- <hr class="mb-4"> -->
                </div>

                <div class="step-tab-panel" data-step="step5" id="divstep3">
                    <!-- <h4 class="mb-3 text-center">(Employment Detail)</h4> -->
                    <!-- <hr class="mb-4"> -->
                    <form name="frmIncome1" id="frmIncome1" class="form-group label">
                        <!-- <div id="banner" style="display: none; "> -->
                        <div id="banner">
                            <img style="margin: auto;"
                                src="https://assets-global.website-files.com/5ef0df6b9272f7410180a013/60c0e28575cd7c21701806fd_q1cunpuhbdreMPFRSFLyfUXNzpqv_I5fz_plwv6gV3sMNXwUSPrq88pC2iJijEV7wERnKXtdTA0eE4HvdnntGo9AHAWn-IcMPKV-rZw1v75vlTEoLF4OdNqsRb7C6r7Mvzrm7fe4.png"
                                alt="Banner Image">
                            <button class="btn btn-primary" id="applyAgain" style="display: block; margin: auto;">Apply
                                Again</button>
                        </div>
                        <!-- <div class="step-footer mt-5">
                            <button data-step-action="prev" class="step-btn btn btn-success">Previous</button>
                            <button class="btn btn-success" type="submit" id="btnFinsh">Finish</button>

                            
                        </div> -->
                    </form>
                </div>


                <div class="step-tab-panel" data-step="step7">

                </div>
            </div>
        </div>
        <div>
        </div>
    </div>

</section>
<!-- end journey -->


<section class="">
    <div class="container-fluid mt-4">


        <div>
            <h4 class="eligible slide">Why Is It Important To Have A Good Credit Score?</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <p>
                A person is only eligible to take a loan if he or she has a good credit score. A good score is above
                750. This score makes you highly eligible and most lenders look for a person with a higher credit score
                to avoid any risk. Your credit score plays a vital role in deciding your personal loan eligibility. The
                credit health and your capacity for repayment are based on your CIBIL score calculation. A good credit
                score permits you fast approval at lower interest rates. Some benefits of having a good CIBIL score:
            </p>
            <ul>
                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    It increases your chances of being approved for loans or credit cards at more favorable interest
                    rates and terms.

                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    A good credit score reflects a history of responsible credit management showing you as a lower-risk
                    borrower.

                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    You can get quick loan approvals.
                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    You become eligible for credit card benefits such as attractive rewards, cashback offers, and other
                    benefits with a good credit score.

                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    It also increases your loan eligibility and qualifies you for loans at lower interest rates.
                </li>
            </ul>
        </div>



    </div>
</section>


<section class="">

    <div class="container-fluid mt-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body-right">
                    <h4 class="card-title eligible slide">What’s The Difference Between Credit Score And CIBIL Score?
                    </h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        CIBIL (Credit Information Bureau India Limited) is one of the credit bureaus in India, and a
                        CIBIL score is essentially a credit score provided by the bureau. Both the terms “credit score”
                        and “CIBIL score” are often used interchangeably. A credit score is a three-digit number showing
                        a numerical representation of one’s creditworthiness. It represents the credit history and
                        credit management habits of the individual. This score is usually used by lenders to assess the
                        risk of lending money or extending credit to an individual.
                    </p><br>
                    <p class="paraFont">
                        On the other hand, CIBIL is a credit bureau in India that provides the CIBIL score which is a
                        specific credit score. CIBIL score is considered to be the gold standard of credit scores and is
                        assessed by most lenders. This score ranges from 300 to 900 and a credit score above 750 is
                        considered to be a good score whereas a score less than 750 does not qualify you for taking any
                        loans or credit cards.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>



<section class="">
    <div class="container-fluid mt-4">

        <div class="mt-4">
            <h4 class="eligible slide">How To Check Your CIBIL Score Online By Pan Card?</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <p class="paraFont">
                Your credit health is determined by the calculate CIBIL score. But, where can you check your CIBIL score
                for free with just a PAN card? There are many services that offer free access to your credit score but
                ensure that you are using a legitimate and authorized service in order to avoid potential scams. Here
                are steps to check your CIBIL score online for free with MYZEON credit score calculator:

            </p> <br>

            <div>

                <ul>
                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Step 1:
                    </li>
                    <p class="paraFont">
                        Visit the official website of MYZEON. Look for the CIBIL Score button on the top right side of
                        the website and click on that button.


                    </p>

                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Step 2:
                    </li>
                    <p class="paraFont">
                        A new window will open. Give your mobile number and click on submit. You will need to validate
                        your mobile number by entering an OTP. Now, click on proceed.
                    </p>
                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Step 3:
                    </li>
                    <p class="paraFont">
                        Your profile will automatically appear on your screen. Then, click on proceed.
                    </p>

                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Step 4:
                    </li>
                    <p class="paraFont">
                        A registration form will pop up asking for your personal details like PAN card number, DOB,
                        name, etc
                    </p>

                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Step 5:
                    </li>
                    <p class="paraFont">
                        You will again get OTP to validate your personal details
                    </p>

                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Step 6:
                    </li>
                    <p class="paraFont">
                        Now, after submitting the OTP you will see a CIBIL score meter showing your score and if you are
                        eligible to take a loan or not.
                    </p>

                </ul>

            </div>


        </div>
    </div>
</section>


<section class="">
    <div class="container-fluid">

        <div class="mt-4">
            <h4 class="eligible slide">Factors That Affect Your CIBIL Score
            </h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <p class="paraFont">
                Some factors that affect your CIBIL score are:

            </p> <br>

            <div>

                <ul>
                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Credit history:
                    </li>
                    <p class="paraFont">
                        30% of the CIBIL score is dependent on your repayment history. If you don't have any credit
                        history then your credit score will be zero and if you make late payments on your loan, it can
                        impact your score negatively. It is essential to consistently pay your credit card bills and
                        loan installments on time.

                    </p>

                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Late payments of loan:
                    </li>
                    <p class="paraFont">
                        Missing the due date of loan repayment influences your credit score in a bad way. Frequently
                        missing payments and delaying them can lower your CIBIL score. Timely payment of your bills can
                        improve your score and reap you great benefits.

                    </p>
                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Multiple credit applications:
                    </li>
                    <p class="paraFont">
                        If you are one who frequently applies for loans and credit cards, this act may be affecting your
                        credit score. This indicates to lenders that you are credit hungry and lending you funds is a
                        high-risk proposition. Do not apply for credit cards again and again in order to pay off your
                        past debts or fulfill your personal needs.
                    </p>

                    <li class="eligible">
                        <span style="color: #1338be; font-weight: 600;">Credit utilization:
                    </li>
                    <p class="paraFont">
                        The ratio of your credit card balances to your credit limits is known as credit utilization. A
                        low credit utilization ratio is always advisable. High credit card balances in relation to your
                        credit limits can negatively impact your score.
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


        <div>
            <h4 class="eligible slide">Tips To Maintain A Good CIBIL Score</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <p>
                A CIBIL score ranges between 300 to 900, a score above 750 is considered to be a good score whereas a
                score less than 750 is a bad score and doesn't qualify you for taking any loans or credit cards. It
                mainly depends on your credit history which includes your repayment history, personal details,
                employment details, etc. Below are some tips that you can use to maintain a good CIBIL score.
            </p>
            <ul>
                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    Avoid late payments of your credit card bills, loan EMIs, and other dues. Paying your bills on time
                    indicates that you are a responsible person and largely impacts your credit score. You can set up
                    automatic payments or reminders to remind you so that you can never miss a due date of the loan.

                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    Aim to keep your credit card balances below the credit limit. High credit utilization can negatively
                    influence your credit score. Therefore, use only a small percentage of your available credit.

                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    The length of your credit history is a factor in your credit score. When you close old credit
                    accounts, it can shorten your credit history and influence your score in a bad way. Even if you
                    don't use it, keep your old accounts open.
                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    Keep checking your credit report regularly. Check for inaccuracies, incorrect information, or
                    unauthorized accounts. You can dispute any discrepancies you find with the credit bureau to make
                    sure your report is accurate.
                </li>

                <li class="paraFont">
                    <span style="color: #1338be; font-weight: 600;">&bull;</span>
                    Use your credit responsibly. Responsibly using your credit is vital for maintaining a good credit
                    score. Only borrow what you need and can afford to repay, and also avoid taking on excessive debt.
                </li>
            </ul>
        </div>

    </div>
</section>

<section class="">

    <div class="container-fluid mt-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body-right">
                    <h4 class="card-title eligible slide">Why You Shouldn’t Check Your CIBIL Score Frequently?</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                    <p class="paraFont">
                        Differentiating between checking your own credit score and having lenders do it for you are
                        totally two different things. When you check your credit score personally, it is referred to as
                        “soft inquiry” and you can do this by yourself any number of times. But, when lenders or
                        creditors perform this step for you, it is referred to as “hard inquiry” or “hard pull” on your
                        credit report. Frequent hard inquiries initiated by lenders can have a temporary impact on your
                        credit score. It is advised to check your credit score annually for accuracy.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>



<script>
    function submitForm(){
        console.log("enter formmmmmmmmmmmmm");

        var formData = {
        mobileNumber: $('#mobileNumber2').val(),
        otp: $('#otp').val()
        // Add other fields as needed
    };

    console.log("enter formmmmmmmmmm2");

    var mobileNumber = $('#mobileNumber2').val();
    var otp          = $('#otp').val();

    // $.ajax({
    //     url: `https://crm.myzeon.com/api/cibil-submit-otp/${mobileNumber}/${otp}`,
    //     type: 'GET', // Adjust based on API requirement
    //     dataType: 'json', // Adjust based on API response format
    //     success: function (response) {
    //         console.log('API call successful:', response);
    //         // You can perform additional actions or navigation here if needed
    //     },
    //     error: function (xhr, status, error) {
    //         console.error('API call failed:', xhr, status, error);
    //     }
    // });

    }
</script>

<!-- https://crm.myzeon.com/api/cibil-profile/8800618269 -->

<!-- <script>
    $(document).ready(function () {
        // Function to fetch and update profile data
        function fetchAndUpdateProfileData() {
            var mobileNumber = '8077183041'; // Replace this with the actual mobile number
            $.ajax({
                url: `https://crm.myzeon.com/api/cibil-profile/${mobileNumber}`,
                type: 'GET',
                dataType: 'json',
                success: function (profileResponse) {
                    console.log('Profile API call on page load successful:', profileResponse);

                    // Update the profile data on the page
                    // You can add code here to update the UI with the received profile data

                    // Example: Update profileName, profileEmail, prfilePhone, etc.
                    $('#profileName').text(profileResponse.name);
                    $('#profileEmail').text(profileResponse.email);
                    $('#prfilePhone').text(profileResponse.phone);
                    // Update other profile data as needed

                    // Auto-fill the form on step 4 with the received profile data
                    $('#inpName').val(profileResponse.name);
                    $('#inpMiddleName').val(profileResponse.middleName);
                    $('#inpLastName').val(profileResponse.lastName);
                    $('#inpPancard').val(profileResponse.pancard);
                    $('#inpmobilenumber').val(profileResponse.mobileNumber);
                    $('#inpDob').val(profileResponse.dob);
                    $('#Inpemail').val(profileResponse.email);
                },
                error: function (profileXhr, profileStatus, profileError) {
                    console.error('Profile API call on page load failed:', profileXhr, profileStatus, profileError);
                }
            });
        }

        // Auto-save the data on form submission
        $('#frmIncome2').submit(function (event) {
            event.preventDefault();

            // Collect the form data
            var formData = {
                name: $('#inpName').val(),
                middleName: $('#inpMiddleName').val(),
                lastName: $('#inpLastName').val(),
                pancard: $('#inpPancard').val(),
                mobileNumber: $('#inpmobilenumber').val(),
                dob: $('#inpDob').val(),
                email: $('#Inpemail').val()
                // Add other form fields as needed
            };

            // Make an API call to save/update the form data
            // $.ajax({
            //     url: 'https://crm.myzeon.com/api/save-profile', // Replace with the actual API endpoint
            //     type: 'POST', // Adjust based on API requirement
            //     data: formData,
            //     dataType: 'json',
            //     success: function (saveResponse) {
            //         console.log('Save Profile API call successful:', saveResponse);
            //         // You can perform additional actions or navigation here if needed
            //     },
            //     error: function (saveXhr, saveStatus, saveError) {
            //         console.error('Save Profile API call failed:', saveXhr, saveStatus, saveError);
            //     }
            // });
        });

        // Fetch and update profile data on reaching step 4
        
    });
</script> -->











<!-- end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="../dist/jquery-steps.js"></script>


<!-- Your jQuery script for form submission and API call -->
<script>
    $(document).ready(function () {
        // Attach a click event to the "Next" button
        $('#btnNext').click(function () {
            // Validate your form fields (add your validation logic)
            var isValid = validateForm(); // Replace with your validation logic
            if (!isValid) {
                // If the form is not valid, you can prevent the API call or handle accordingly
                return;
            }

            // Collect form data
            var formData = {
                client_order_id: '123456',
                first_name: $('#firstName').val(),
                middle_name: $('#middleName').val(),
                last_name: $('#lastName').val(),
                date_of_birth: $('#dob').val(),
                email: $('#email').val(),
                mobile_number: $('#mobileNumber').val(),
                pancard: $('#panCardNumber').val()
            };
console.log('Form Data:', formData);

            // Make an API call
            $.ajax({
                url: 'https://crm.myzeon.com/api/cibil-insert-reg',
                type: 'GET', // or 'POST' based on the API documentation
                data: formData,
                success: function (response) {
                    // Handle the API response here
                    console.log(response);

                    // Optionally, you can perform actions based on the response
                    // For example, show a success message or redirect to another page

                    // Move to the next step if needed
                    // Example: $('[data-step-action="next"]').trigger('click');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle API errors or network issues
                    console.error('An error occurred:', textStatus, errorThrown);
                }
            });
        });

        // Your validation function (replace this with your actual validation logic)
        function validateForm() {
            // Example: Check if required fields are filled
            var isValid = true;

            // Your validation logic here...

            return isValid;
        }
    });
</script>




<script>
     function submitForm2() {
    var formData = {
        mobileNumber: $('#mobileNumber2').val(),
        otp: $('#otp').val()
        // Add other fields as needed
    };

    var mobileNumber = $('#mobileNumber2').val(),
    var  otp= $('#otp').val()


//
    // $.ajax({
    //     url: `https://crm.myzeon.com/api/cibil-submit-otp/${mobileNumber}/${otp}`,
    //     type: 'GET', // Adjust based on API requirement
    //     dataType: 'json', // Adjust based on API response format
    //     success: function (response) {
    //         console.log('API call successful:', response);
    //         // You can perform additional actions or navigation here if needed
    //     },
    //     error: function (xhr, status, error) {
    //         console.error('API call failed:', xhr, status, error);
    //     }
    // });
}

</script>
<!-- 15th feb -->

<script>
    $(document).ready(function () {
        @php
        $valuecookie = Cookie:: get('applyclick');
        if ($valuecookie) {

            $valuecookie = Cookie:: get('applyclick');
        } else {
            $valuecookie = 'defualut';
        }

        if (session() -> has('formnew')) {
            $value = session('formnew');
            // or
            $value = Session:: get('formnew');

        } else {
            $value = "default";
            // Key not found in the session
        }
        @endphp

        var cookiesValue = '<?php echo $valuecookie ?>';
        if (cookiesValue) {
            var cookiesValue = '<?php echo $valuecookie ?>';

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

        console.log("enter" + '<?php echo $valuecookie?>');

        console.log('hello 1')
        //     $.scrollTo($('#demo'), 1000);
        // console.log('scroll')



        // Call the function on page load
        // setInitialSteps();

        // Button click event
        $('#applyAgain').on('click', function () {
            @php
            Cookie:: queue('applyclick', 'applyClick', '7');

            session(['formnew' => 'applynownew']);
            @endphp
            $('#banner').hide();
            $('#divBanner').show();

            setInitialSteps();
        });

        // Validation logic for step2
        $('#nextButtonForStep2').on('click', function () {
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
@endsection