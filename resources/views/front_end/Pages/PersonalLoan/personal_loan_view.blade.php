<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIBIL Score Checker</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            margin-right: 20px;
            text-align: center;
        }

        .cibil-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto; /* Center the container */
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #45a049;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }

        /* Style error messages in red */
        .error {
            color: red;
        }

        /* Style success messages in green */
        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container cibil-form">
        <form id="cibilForm">
            <div class="form-group">
                <label for="userInput1"> Phone Number </label>
                <input type="text" class="form-control" id="userInput1" name="phoneNumber" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="userInput2"> Email:</label>
                <input type="text" class="form-control" id="userInput2" name="email" placeholder="Enter your email">
            </div>
            <button type="button" class="btn btn-success" id="checkCIBIL">Check CIBIL Score</button>
            <div id="result"></div>
        </form>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    
</script>
<script>
    $(document).ready(function () {
        // Add a custom validation method for phone number
        $.validator.addMethod("validPhoneNumber", function (value, element) {
            // Check if the phone number has more than 10 digits and follows the Indian format
            return value.replace(/[^0-9]/g, '').length === 10 && /^(\+91-|\+91|0)?[6-9]\d{9}$/.test(value);
        }, "Please enter a valid Indian phone number.");

        // Initialize the form validation
        $("#cibilForm").validate({
            rules: {
                phoneNumber: {
                    required: true,
                    validPhoneNumber: true, // Use the custom validation method
                },
                email: {
                    required: true,
                    email: true,
                },
            },
            messages: {
                phoneNumber: {
                    required: "Please enter a valid Indian phone number.",
                },
                email: {
                    required: "Please enter a valid email address.",
                    email: "Please enter a valid email address.",
                },
            },
            submitHandler: function (form) {
                // Form is valid, proceed with the CIBIL score check
                var phoneNumber = $("#userInput1").val();
                var email = $("#userInput2").val();

                // Make an API call to get the CIBIL score
                $.ajax({
                    url: "https://api.example.com/cibil-check",  // Replace with your actual API endpoint
                    method: "POST",
                    data: { phoneNumber: phoneNumber, email: email },
                    success: function (response) {
                        // Display the result to the user
                        $("#result").removeClass("error").addClass("success").text(response.message);
                    },
                    error: function () {
                        $("#result").removeClass("success").addClass("error").text("Failed to check CIBIL score. Please try again later.");
                    }
                });
            }
        });

        // Handle click event for the checkCIBIL button
        $("#checkCIBIL").on("click", function () {
            // Trigger form submission when the button is clicked
            $("#cibilForm").submit();
        });
    });
</script>

</body>
</html>
