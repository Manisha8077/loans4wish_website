<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
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
            color: #;
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
        background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent overlay */
        z-index: 9999; /* Ensure the loader appears above other content */
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
</head>

<body>
    <div class="container">

        <form id="loanApplicationForm" class="row mt-3">

            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label for="full_name">Enter Full Name</label>
                    <input type="text" name="first_name" id="name" class="form-control" placeholder="Enter Name"
                        required tabindex="1">
                    <div class="error-message" id="name-error"></div>
                </div>
                <div class="col-md-4 form-group">

                    <label>Phone Number</label>
                    <input type="tel" placeholder="Enter Number" class="form-control mobile required error"
                        data-validation="required length custom" data-validation-length="10"
                        data-validation-regexp="^\d{10}$"
                        data-validation-error-msg="Please enter a valid 10-digit number" maxlength="10" name="phone_no"
                        id="phone_no" tabindex="3" autocomplete="Off" oninput="formatPhoneNumber(this)" required
                       tabindex="2" readonly >

                    <span class="phone_number_error_indicator help-block form-error"></span>
                </div>
                <div class="col-md-4 form-group">
                    <label>Your desired loan amount</label>
                    <span class="badge badge-warning">(₹) ?</span>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="text" placeholder="XXXXXXXXX" class="form-control amount required"
                            name="desired_amount" data-validation="required number"
                            data-validation-error-msg="Please enter a valid loan amount" id="loan_amount" tabindex="3"
                            value="">
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <label for="pincode">Enter Pincode</label>
                        <input type="tel" name="pincode" id="pincode" class="form-control" placeholder="Pincode"
                            onchange="getCityStateFromPincode(this.value)" required maxlength="6">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="city">Enter City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="City"
                            required>
                    </div>
                   
                    <div class="col-md-4 form-group">
                        <label for="message">State</label>
                        <select id="stateName" class="form-control">
                            <option value="">Select state</option>
                        </select>
                    </div>
                    
                    
                    <div class="form-row">

                    <!-- Employment type field -->
                    <div class="form-group col-sm-4">
                        <label>How are you currently employed?</label>
                        <select title="Select your employment" class="" id="employee_type"
                            name="employee_type" data-validation="required" data-validation-error-msg="" tabindex="4"
                            autocomplete="Off" onchange="toggleEmploymentFields()">
                            <option>Please Select--</option>
                            <option value="Business">Self Employed Business</option>
                            <option value="Professional">Self Employed Professional</option>
                        </select>

                    </div>

                    <!-- Fields for Self Employed Business -->
                    <div class="form-group col-sm-4" id="selfEmployedBusinessFields" style="display: ;">
                        <label>Business Name</label>
                        <input type="text" class="form-control" name="business_name" tabindex="5"
                            autocomplete="Off" placeholder="Business Name">
                    </div>

                    <!-- Fields for Self Employed Professional -->
                    <div class="form-group col-sm-4" id="selfEmployedProfessionalFields" style="display: ;">
                        <label>Profession</label>
                        <input type="text" class="form-control" name="profession" tabindex="6"
                            autocomplete="Off" placeholder="Enter Profession">
                    </div>


                    <!-- Annual turnover field -->

                    <div class="form-group col-sm-4 has-error" id="annual-turnover" style="display: block;">
                        <label>

                            <span class="turnover_title">Your gross annual sales / turnover?</span>
                            <a href="javascript:void(0)" data-toggle="tooltip" name="yearly_income"
                                data-placement="top" title=""
                                data-original-title="Your last financial year turnover, as filed with ITR"
                                class="">
                              
                            </a>

                        </label>

                        <div class="input-group">

                            <span class="input-group-addon"></span>
                            <select title="Select Turnover" class="" name="yearly_income" id="yearly_income"
                                data-validation="required"
                                data-validation-error-msg="Please enter the annual turnover" tabindex="7"
                                autocomplete="Off" aria-hidden="true" onchange="toggleBasicInformationFields()">
                                <option value="">Please select--</option>
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
                        <span class="annual_turnover_error_indicator help-block form-error"></span>
                    </div>

                    <!-- Years In Current Business field -->
                    <div class="form-group col-sm-4" id="year-in-business" style="display: ;">
                        <label>Years In Current Business/Profession</label>
                        <input type="number" class="form-control" name="years_in_business" tabindex="9"
                            autocomplete="Off" placeholder="Years In Current Business/Profession">
                    </div>

                    <!-- Residence Type field -->
                    <div class="form-group col-sm-4" id="registance_type" name="registance_type" style="display: ;">
                        <label>Residence Type</label>
                        <select class="form-control"  name="registance_type" required>
                            <option value="">Select Residence Type</option>
                            <option value="Owned by Self_Spouse">Owned by Self / Spouse</option>
                            <option value="Owned by Parents_Siblings">Owned by Parents / Siblings</option>
                            <option value="Rented with Family ">Rented with Family</option>
                            <option value="Rented with Friends ">Rented with Friends</option>
                            <option value="Other ">Other</option>
                        </select>
                    </div>


                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

<!-- Move the loader container outside the form -->
</form>

<div class="loader-container" id="loader" style="display: none;">
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="loader-text">Submitting...</div>
    </div>
</div>

<div id="success-message" style="display: none;color:#fff;">Form submitted successfully! Redirecting...</div>
</div>


    <script>
        $(document).ready(function() {

            toggleEmploymentFields();
            toggleBasicInformationFields();

            $('#loan_amount').attr('data-validation', 'required ');
            $('#loan_amount').attr('data-validation-error-msg', 'Please enter a valid loan amount');

            const phoneInput = document.getElementById('phone_no');
            const phoneValue = phoneInput.value;
            const phoneNumberParam = getParameterByName('phone_no');
            if (phoneNumberParam) {
                const decodedPhoneNumber = decodeURIComponent(phoneNumberParam).replace(/\D/g, '');
                phoneInput.value = decodedPhoneNumber;
            }
            setCookie('phone_no', phoneValue, 7);
            console.log("phone_no value" + phoneValue)





        });

        $('#loanApplicationForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            handle_loan_application_form_submission(); // Call the form submission handling function
        });


        // Initialize jQuery Form Validator

        function getCityStateFromPincode(pincode) {
            const url = `https://api.postalpincode.in/pincode/${pincode}`;

            // Make an HTTP GET request to the API
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Check if the API response is successful
                    if (data && data[0].Status === "Success") {
                        const city = data[0].PostOffice[0].District;
                        const state = data[0].PostOffice[0].State;
                        document.getElementById("city").value = city;
                        document.getElementById("stateName").innerHTML = `<option value="${state}">${state}</option>`;
                        console.log(`City: ${city}`);
                        console.log(`State: ${state}`);
                    } else {
                        console.log("Invalid pincode");
                    }
                })
                .catch(error => {
                    console.log("An error occurred:", error);
                });
        }

    
        // Function to format the loan amount with commas
        function formatAmount(input) {
            const amountInput = input;
            let amountValue = amountInput.value.replace(/,/g, '');

            // Remove any non-digit characters
            amountValue = amountValue.replace(/\D/g, '');

            // Convert to a number and format with commas for thousands and lakhs
            amountValue = Number(amountValue).toLocaleString('en-IN');

            // Update the input value with the formatted loan amount
            amountInput.value = amountValue;
        }

        // Function to handle input for the phone number field
        function formatPhoneNumber(input) {
            const phoneNumberInput = input;
            let phoneNumberValue = phoneNumberInput.value.replace(/\D/g, ''); // Remove any non-digit characters
            phoneNumberValue = phoneNumberValue.slice(0, 10); // Limit to 10 digits

            // Update the input value with the formatted phone number
            phoneNumberInput.value = phoneNumberValue;
        }

        function formatNumberWithCommas(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // Function to sanitize input and enforce numbers only
        function sanitizeInput(input) {
            return input.replace(/[^0-9]/g, "");
        }

        // Listen for changes in the input field and format the value accordingly
        document.querySelector('input[name="years_in_business"]').addEventListener("input", function() {
            let sanitizedValue = sanitizeInput(this.value);
            let formattedValue = formatNumberWithCommas(sanitizedValue);
            this.value = formattedValue;
        });


        // Function to toggle visibility of fields based on employment type
        function toggleEmploymentFields() {
            const employmentType = $('#employee_type').val();
            if (employmentType === "Business") {
                // Show fields for Self Employed Business
                $('#selfEmployedBusinessFields').show();
                $('#selfEmployedProfessionalFields').hide();
            } else if (employmentType === "Professional") {
                // Show fields for Self Employed Professional
                $('#selfEmployedProfessionalFields').show();
                $('#selfEmployedBusinessFields').hide();
            } else {
                // Hide both fields when no employment type is selected
                $('#selfEmployedBusinessFields').hide();
                $('#selfEmployedProfessionalFields').hide();
            }
        }

        // Function to toggle Years In Current Business and Residence Type fields based on annual turnover
        function toggleBasicInformationFields() {
            const annualTurnover = $('#yearly_income').val();

            if (annualTurnover !== "") {
                // Show the basic information fields
                $('#year-in-business').show();
                $('#registance_type').show();
            } else {
                // Hide the basic information fields
                $('#year-in-business').hide();
                $('#registance_type').hide();
            }
        }


        // Shortcode callback function to display the loan application form
        function display_loan_application_form() {
            ob_start(); // Start output buffering


        }

        function formatLoanAmount(input) {
            if (!input) return ""; // If input is empty, return empty string
            let number = parseFloat(input.replace(/,/g, ""));
            if (isNaN(number)) return input; // If input is not a valid number, return the input as is
            return number.toLocaleString("en-IN");
        }

        // Listen for changes in the input field and format the value accordingly
        document.getElementById("loan_amount").addEventListener("input", function() {
            let formattedValue = formatLoanAmount(this.value);
            this.value = formattedValue;
        });




        function handle_loan_application_form_submission() {
            // Trim and handle white space for input values
            const first_name = $('#name').val().trim();
            const phone_no = $('#phone_no').val().trim();
            const employee_type = $('#employee_type').val().trim();
            const yearly_income = $('#yearly_income').val().trim();
            const pincode = $('#pincode').val().trim();
            const city = $('#city').val().trim();
            const state = $('#stateName').val().trim();
            const desired_amount = $('#loan_amount').val().trim();

            // Make sure that the trimmed values are not empty
            if (phone_no === '' || employee_type === '' || yearly_income === '' ||
                pincode === '' || city === '' || state === '' || loan_amount === '') {
                // Handle empty fields here if needed
            } else {
                $('#loader').show();
                // Now you can proceed to make the AJAX request using the cleaned data
                $.ajax({
                    url: 'https://crm.myzeon.com/api/wp-bl-post',
                    method: 'POST',
                    data: {
                        first_name:first_name,
                        phone_no: phone_no,
                        employee_type: employee_type,
                        yearly_income: '123',
                        pincode: pincode,
                        city: city,
                        state: state,
                        desired_amount: desired_amount
                    },
                    success: function(response) {
                        // Handle the success response here
                        
                        setTimeout(function () {
                            $('#loader').hide();
                        window.location.href = "https://www.myzeon.com/successpopup";
                    }, 2000);
                    },
                    error: function(error) {
                        // Handle the error response here
                        $('#loader').hide();
                        
                    }
                });
            }

        }
    </script>

    <script>
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
            var results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        function setCookie(name, value, days) {
            const expires = new Date();
            expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = name + '=' + value + ';expires=' + expires.toUTCString() + ';path=/';
        }
    </script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>


</body>

</html>
