@extends('front_end_layout.home')
@push('applyNowStyle')
<!-- form style -->
<style>
    #title {
  font-size: 23px !important;
  text-transform: uppercase;
  color: #1338be;
  margin-bottom: 20px !important;
  letter-spacing: 2px;
  font-weight: bold !important;
  font-family: 'Poppins', sans-serif;
}
    .errors {
        color: red;
        margin-bottom: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .form-group span {
        color: red;
        margin-left: 5px;
    }
</style>
<!-- end form style -->
<style>
    /* background:linear-gradient(57deg, #ffd756, #1338be); */
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
<body class="js" style=" height: 100vh; */font-family: 'Montserrat', sans-serif;">
    
  
    
<div class="container">
    
<div class="container mb-4 formcontainer" style="margin-top: 2rem !important; width: 50%; border-radius: 15px; box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);">
    
    <form action="#" method="post" class="form-container" id="my-form">
        <fieldset>
            <h2 id="title" style="color: #1338be;text-transform: uppercase;
            color: #1338be;
            margin-bottom: 20px !important;
            letter-spacing: 2px;
            font-weight: bold !important;
            font-family: 'Poppins', sans-serif; text-align: center;">GENERAL INFORMATION</h2>
            <div id="errors" class="errors" style="display: none;">
                <div class="alert"></div>
            </div>
    
            <div class="form-group">
                <label for="full_name">Enter Full Name</label><span id="error_name"></span>
                <input type="text" class="form-control" name="full_name" id="name">
            </div>
    
            <div class="form-group">
                <label for="number">Enter Number</label><span id="error_no"></span>
                <input type="text" class="form-control" name="number" id="number">
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
                <input type="text" class="form-control" name="pincode" id="pincode">
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
                    <option value="noida">Noida</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="message">Message</label><span id="error_message"></span>
                <textarea class="form-control" name="message" id="message"></textarea>
            </div>
    
            <button type="button" id="btnSubmit mb-4 mt-4" class="btn btn-primary" style="margin-top: 20px;
            margin-bottom: 31px; border-radius: 20px;"> Submit</button>
        </fieldset>
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
</div>

</fieldset>



@push('applyNowScript')



<script>
    $(document).ready(function () {
        $("#btnSubmit").on('click', function () {
            // Reset previous error messages
            $(".form-group span").text('');

            // Validate the form
            var isValid = true;

            // Validate phone number using regex
            var phoneNumber = $("#number").val();
            var phoneRegex = /^[789][0-9]{9}$/;
            if (!phoneRegex.test(phoneNumber)) {
                isValid = false;
                $("#error_no").text('Please enter a valid 10-digit phone number.');
            }

            // Add more validations for other fields here...

            // If all validations pass, submit the form
            if (isValid) {
                submitForm();
            } else {
                // Display error message
                $("#errors .alert").text('Please fix the errors in the form.');
                $("#errors").show();
            }
        });

        function submitForm() {
            // Log form data to the console
            console.log($("#my-form").serialize());
            // You can perform additional actions or submit the form here
        }
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