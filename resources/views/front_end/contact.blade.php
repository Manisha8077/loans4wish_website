@extends('front_end_layout.home')
@push('indexPageStyle')
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
<style>
	small{
		font-weight: bold;
	}

	.form-group label {
  font-weight: 600;
  font-size: 16px;
  color: #393939f7;
}	

		@keyframes text { 
			0% { 
				color: black; 
				margin-bottom: -40px; 
			} 

			30% { 
				letter-spacing: 25px; 
				margin-bottom: -40px; 
			} 

			85% { 
				letter-spacing: 8px; 
				margin-bottom: -40px; 
			} 
		}
		.text1 { 
			/* color: white;  */
			/* font-size: 20px;  */
			font-weight: 700; 
			letter-spacing: 2px; 
			margin-bottom: 20px; 
			/* background: yellowgreen;  */
			position: relative; 
			animation: text 5s 1; 
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
        /* animation: slideIn 7s ease-in-out; */
        /* Adjust the animation duration and timing function */
    }
</style>

<style>
	/* Add your existing styles here */
	.contact-info {
		/* text-align: center; */
		transition: transform 0.4s ease-in-out;
	}

	.contact-info:hover {
		transform: scale(1.2);
		background-color: #e2e6f5;

	}
	.contact-info i{
		background-color: #1338be;
	}


</style>
<style>
	.paraFont {

color: #4b5563;
text-align: justify;
/* line-height: 2.1rem; */
/* font-size: 17px; */
color: #4b5563;
text-align: justify;
font-size: 17px;

}
</style>

<style>
	body {
	  /* font-family: Arial, Helvetica, sans-serif; */
	}
	
	* {
	  box-sizing: border-box;
	}
	
	/* Style inputs */
	input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  resize: vertical;
	}
	
	input[type=submit] {
	  background-color: #04AA6D;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  cursor: pointer;
	}
	
	input[type=submit]:hover {
	  background-color: #45a049;
	}
	
	/* Style the container/contact section */
	/* .container {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 10px;
	} */
	
	/* Create two columns that float next to eachother */
	.column {
	  float: left;
	  width: 50%;
	  margin-top: 6px;
	  padding: 20px;
	}
	
	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}
	
	.image{
		
	}
	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
	  .column, input[type=submit] {
		width: 100%;
		margin-top: 0;
	  }
	}
	</style>
<style>
    .paraFont {

        /* color: #4b5563;
        text-align: justify;
        font-size: 17px; */
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

   
</style>

@endpush
@push('contactPageScript')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

<script>
    function validateForm() {
        // Reset error messages
        $(".text-danger").text("");

        // Check each field
        var isValid = true;

        // Validate Name
        var name = $("#name").val();
        if (!name) {
            $("#nameError").text("Name is required");
            isValid = false;
        } else if (!/^[a-zA-Z\s]+$/.test(name)) {
            $("#nameError").text("Name should contain only alphabets");
            isValid = false;
        }

		var number = $("#number").val();
        var indianMobileRegex = /^[6-9]\d{9}$/; // Indian mobile numbers start with 6, 7, 8, or 9 and have 10 digits
        if (!number) {
            $("#numberError").text("Mobile Number is required");
        } else if (!/^[0-9]{10}$/.test(number) || !indianMobileRegex.test(number)) {
            $("#numberError").text("Please enter a valid Indian mobile number");
    
		}
	


        // Validate Email
        var email = $("#email").val();
        if (!email) {
            $("#emailError").text("Email is required");
            isValid = false;
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            $("#emailError").text("Please enter a valid email address");
            isValid = false;
        }

        // Validate Country
        var country = $("#country").val();
        if (!country) {
            $("#countryError").text("State is required");
            isValid = false;
        }

        // Validate Subject
        var subject = $("#subject").val();
        if (!subject) {
            $("#subjectError").text("Subject is required");
            isValid = false;
        }

        // if (isValid) {
        //     // Form is valid, you can proceed with further actions
        //     alert("Form submitted successfully");
        // }
		if(setCookesOtpCheckStatus){
                $('#loader').show();

                $.ajax({
                    url:"{{website_base_url()}}/api/customer-query",
                    // url: 'https://crm.myzeon.com/api/cutomer-data-wp-post', 
                    // Replace with your server endpoint
                    type: 'GET', // Change to 'GET' or 'POST' depending on your needs
                    data: {
                        'name': name,
                        'number': number,
                        'email': email,
                        'country': country,
                        'subject': subject
                       
                    },
                    
                    success: function(response) {
                        // $('#loader').hide();
						$("#myModal").modal('show');

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
</script>
<!-- <script>
    function validateForm() {
        // Your form validation logic here
        var name = $("#name").val();
        var number = $("#number").val();
        var email = $("#email").val();
        var country = $("#country").val();
        var subject = $("#subject").val();

        // Check if all fields are filled
        if (name && number && email && country && subject) {
            // Show the success modal if all fields are filled
            $("#successModal").modal('show');
        } else {
            // Display an error or handle validation as needed
            // For simplicity, you can add error messages next to each input field
            $("#nameError").text(name ? '' : 'Name is required');
            $("#numberError").text(number ? '' : 'Number is required');
            $("#emailError").text(email ? '' : 'Email is required');
            $("#countryError").text(country ? '' : 'Country is required');
            $("#subjectError").text(subject ? '' : 'Subject is required');
        }
    }
</script> -->
<script>
    $(document).ready(function () {
        // When the button with id "closeModalBtn" is clicked
        $(".close").on("click", function () {
            // Close the modal with id "myModal"
            $("#successModal").modal("hide");
        });
    });
</script>
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
<script>
    function closeOtpModal() {
        $('#otpModal').modal('hide');
    }
</script>
<!-- otp add by mannu -->
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
@endpush

@section('content') 


<!--  -->
<div>
	<!-- <img src="https://www.familylovehomecare.com/uploads/1/2/1/8/121819191/contact-uscreakidz3_orig.jpg" style="width: 100%;height: 527px;" alt=" image" srcset=""> -->
	<img src="{{website_asset_image_webimage_base_url()}}/contact_banner.png"  alt=" image" srcset="" >

	<!-- <img src="https://spacexglobalcorp.com/wp-content/uploads/2023/07/contact-banner-2.jpeg" style="width: 100%;height: 527px;" alt=" image" srcset=""> -->
</div>
<!--  -->

<section class="mt-4 mb-4">
	<div class="conainer-fluid">
	
			<div class="col-md-12">
				<div class="container mt-5">
					<div class=" text-center">
						<div class="" style="margin-bottom: 48px;">
							<h3 class="slide text1 pt-md-5 mb-2 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">
								Need Any Help?
							</h3>
							<div class="bar m-auto"></div>
						</div>
						<p class="mt-3 mb-3 paraFont">For all your queries, you can reach out to our customer care services. We are available 24 hours a day 7 days a week and 365 days.</p>
					</div>
					
				 
					<form id="myForm">
						<div class="form-group">
							<label for="number">Number:</label>
							<input type="tel" class="form-control" id="number" placeholder="Enter your phone number" required>
							<small class="text-danger" id="numberError"></small>
						
						</div>
						<button type="button" class="btn btn-primary" id="sendOtp" onclick="SendOtpToCheckMobileNumber()">
                                        <i class="fas fa-check" id="otpCheckIcon" style="display: none;"></i>
                                        <i class="fas fa-times" id="otpErrorIcon" style="display: none;"></i>
                                        Send Otp
                                    </button>
						<div class="form-group mt-3">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Enter your name" required>
							<small class="text-danger" id="nameError"></small>
						</div>
					
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Enter your email" required>
							<small class="text-danger" id="emailError"></small>
						</div>
					
						<div class="form-group">
							<label for="country">State:</label>
							<select class="form-control" id="country" required>
								<option value="">Select a state</option>
								<option value="us">Uttar Pradesh</option>
								<option value="ca">Andhra Pradesh</option>
								<option value="us">Arunachal Pradesh</option>
								<option value="ca">Uttarakhand</option>
								<option value="us">Himachal Pradesh</option>
								<option value="ca">Haryana</option>
								
							</select>
							<small class="text-danger" id="countryError"></small>
						</div>
						
					
						<div class="form-group">
							<label for="subject">Subject:</label>
							<textarea class="form-control" id="subject" rows="4" placeholder="Enter your message" required></textarea>
							<small class="text-danger" id="subjectError"></small>
						</div>
					
						<button type="button" class="btn btn-primary" onclick="validateForm()" style="border-radius: 20px; font-size: 14px">Submit</button>
					</form>
				  </div>		
			</div>
		</div>
		
</section>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- <p>Form submitted successfully!</p> -->
				<img src="{{ website_asset_base_url() }}/images/web_img/thankyou.png" alt="Thank You">
        <button class="btn btn-primary" id="applyAgain"
                                    style="display: block; margin: auto;">Go to home page</button>            </div>

            <!-- Modal Footer -->
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->

        </div>
    </div>
</div>


<!-- Add this modal at the end of your HTML body -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="successModalLabel">Success!</h5> -->
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
				
            </div>
            <div class="modal-body">
                <!-- Add your success message or image here -->
                <img src="{{ website_asset_base_url() }}/images/web_img/thankyou.png" alt="Success Image">
				<button class="btn btn-primary" id="applyAgain"
                                    style="display: block; margin: auto;">Go to home page</button>
            </div>
        </div>
    </div>
</div>

<section class="pt-5 pb-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4 mb-md-0 mb-3">
				<div class="contact-info">
					<a class="" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					<h5 class="mt-2- eligible" style="color: ;">Email </h5>
					<a class="" href="mailto:info@myzeon.com"> info@myzeon.com</a>
				</div>
			</div>
			<div class="col-md-4 mb-md-0 mb-3">
				<div class="contact-info">
					<a class="" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
					<h5 class="mt-2 eligible">Location </h5>
					<a class="" href="#">
                A-47, 1st Floor, Sector-2 Noida, Uttar Pradesh 201301</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-info">
					<a class="" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
					<h5 class="mt-2 eligible">Call </h5>
					<a class="" href="tel:0120-4198166"> 0120-4198166</a>
				</div>
			</div>
		</div>

	</div>
</section>

<section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.505357314702!2d77.31356967549905!3d28.584612575691015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce458d0000001%3A0xb10dc87d302bf999!2sMYZEON%20VENTURES%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1702457602958!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

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
@endsection