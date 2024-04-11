<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/designfile/dist/css/bootstrap.min.css') }}">

    <!-- {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqkl0qKfL1OfgI12IuL6T6l95lQueU8b9V7AWX9Ivdl9spC97l3NsC" crossorigin="anonymous"> --}} -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>


    <style>
        .thankyouimage {

            width: 100%;
            height: 100%;
            margin: 0 auto;
            transform: 'translate(-50%, -50%)';

        }
    </style>

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
    </style>

</head>

<body>
    <div class="container">
        <h1>Form</h1>

        <h3 id="ShowErrorField">All Field Must be Fill</h3>

        <div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Connect You Soon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <img src="{{ asset('assets/front_end/asset/img/infoImage/thank_you_image_edit.jpg') }}" alt="Apply Now" class="thankyouimage">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <form id="my-form">
            <div class="form-group">
                <label for="full_name">Enter Full Name</label><span id="error_name"></span>
                <input type="text" class="form-control" name="full_name" id="name">
            </div>
            <div class="form-group">
                <label for="number">Enter Number</label><span id="error_no"></span>
                <input type="number" class="form-control" name="number" id="number">
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
                    <option value="noida">noida</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Message</label><span id="error_message"></span>
                <textarea class="form-control" name="message" id="message"></textarea>
            </div>
            <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
        </form>



        <div class="loader-container" id="loader" style="display: none;">
            <div class="spinner-overlay">
                <div class="spinner">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="success-message" style="display: none;">Form submitted successfully! Redirecting...</div>


    </div>


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

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSBYTGTv2t6dPrgr9rDoGIt4v+m4=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">  </script> -->

    <script src="{{ asset('assets/front_end/asset/designfile/dist/js/bootstrap.min.js') }}"></script>

</body>