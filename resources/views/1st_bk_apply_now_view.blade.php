@extends('front_end_layout.home')
@push('applyNowStyle')

<style>
    background:linear-gradient(57deg, #ffd756, #1338be);
</style>
 
<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
    }

    
    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: 600;
        color: #333;
    }

    input,
    select,
    textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-top: 5px;
        font-size: 16px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
    }

    button:disabled {
        background-color: #ddd;
        cursor: not-allowed;
    }

    .errors {
        color: red;
        font-size: 14px;
    }

    /* Add your custom styles for eligibility messages */
    .eligible {
        color: #1338be;
        font-weight: 600;
        list-style: disc;
        font-size: 17px;
    }

    .error {
        border: 1px solid red;
    }
</style>
<style>
    .form-container {
            max-width: 600px;
            margin: 0 auto;
            opacity: 0; /* Hidden by default */
            transform: translateY(-20px);
            transition: opacity 0.8s, transform 0.8s;
        }

        .form-container.visible {
            opacity: 1;
            transform: translateY(0);
        }

        
</style>
<!-- <style>
   .container{
  background: #000070;
}
    #my-form{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: rgba(0,0,0,.1);
  padding: 100px;
}

label{
 font-family: sans-serif;
  letter-spacing: 6px;
  text-transform: uppercase;
  font-size: .8em;
  color: #FFF;
}

input{
  display: inline-block;
  border: none;
  text-align: left;
  box-shadow: 3px 2px rgba(121, 83, 210,.3 );
  padding: 10px;
  width: 350px;
  margin: 10px 0;
  background: transparent;
  color: #FFF;
}

input:focus{
  background: none;
  border: none;
  color: #FFF;
}

button{
  background: transparent;
  color: #FFF;
  font-family: sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  margin: 20px 0;
  padding: 10px 30px;
  border: 2px solid #FFF;
}

button:hover{
  background: transparent;
  border: 2px solid rgba(69, 39, 160, .4);
}
</style> -->
<style>
    
</style>

@endpush
{{-- @stack('applyNowStyle') --}}  


{{-- @stack('applyNowScript') --}}



@section('content')
<body class="js" style="background: linear-gradient(57deg, #ffd756, #1338be);/*! height: 100vh; */font-family: 'Montserrat', sans-serif;">
    
<div class="container">
<div class="container mb-4" style="margin-top: 2rem !important; width: 60%;">
   
    <form action="#" method="post" class="form-container" id="my-form">
        <fieldset>
            <div id="errors" class="errors" style="display: none;">
                <div class="alert" ></div>
            </div>
            <!-- <h3 class="fs-title eligible" style="text-align: center; color: #1338be;">GENERAL INFORMATION</h3> -->
   
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
                <option value= "noida">noida</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message</label><span id="error_message"></span>
            <textarea class="form-control" name="message" id="message"></textarea>
        </div>
        <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
</fieldset>
    </form>

    <!-- <form action="#" method="post" class="form-container">
        <fieldset>
            <div id="errors" class="errors" style="display: none;">
                <div class="alert" style="color:red"></div>
            </div>
            <h2 class="fs-title">GENERAL INFORMATION</h2>

            <div class="form-group">
                <input type="text" name="first_name" id="first_name" placeholder="First Name*" required="">
                <div class="invalid-feedback">Please Enter Your First Name</div>
            </div>

            <div class="form-group">
                <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name">
            </div>

            <div class="form-group">
                <input type="text" name="last_name" id="last_name" placeholder="Last Name*" required="">
                <div class="invalid-feedback">Please Enter Your Last Name</div>
            </div>

            <div class="form-group">
                <select name="gender" id="gender">
                    <option selected="" disabled="" value="">Select Your Gender*</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
                <div class="invalid-feedback">Please Select Your Gender</div>
            </div>

         

            <div class="form-group">
                <input type="submit" name="submit" class="submit action-button submitstep1" value="PROCEED">
            </div>
        </fieldset>
    </form> -->

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
</div>





@push('applyNowScript')



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
                

                $('#loader').show();

                $.ajax({
                    url: 'https://crm.myzeon.com/api/cutomer-data-wp-post', // Replace with your server endpoint
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

    
@endpush

@endsection