@extends('front_end_layout.home')
@push('indexPageStyle')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}" type="text/css"
    media="all" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/reset.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/style.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/responsive.css') }}" />


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">



<style>

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
font-size: 20px;

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
<!-- <script>
    function validateForm() {
        // Reset error messages
        $(".text-danger").text("");

        // Check each field
        var name = $("#name").val();
        var number = $("#number").val();
        var email = $("#email").val();
        var country = $("#country").val();
        var subject = $("#subject").val();

        if (name === "") {
            $("#nameError").text("Enter your name");
        }

        if (number === "") {
            $("#numberError").text("Enter a 10-digit valid number");
        }

        if (email === "") {
            $("#emailError").text("Enter your email");
        }

        if (country === "") {
            $("#countryError").text("Enter your country");
        }

        if (subject === "") {
            $("#subjectError").text("Enter subject");
        }
    }
</script> -->

<!-- <script>
    function validateForm() {
        $(".text-danger").text("");

        
        var isValid = true;

        $("#myForm :input[required]").each(function() {
            if (!$(this).val()) {
                var fieldName = $(this).attr("id");
                $("#" + fieldName + "Error").text(fieldName.charAt(0).toUpperCase() + fieldName.slice(1) + " is required");
                isValid = false;
            }
        });

        if (isValid) {
            alert("Form submitted successfully");
        }
    }
</script> -->

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

		
		


        // Validate Number
        // var number = $("#number").val();
        // var phoneRegex = /^[0-9]{10}$/;
        // if (!number) {
        //     $("#numberError").text("Number is required");
        //     isValid = false;
        // } else if (!phoneRegex.test(number)) {
        //     $("#numberError").text("Please enter a valid 10-digit phone number");
        //     isValid = false;
        // }

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

        if (isValid) {
            // Form is valid, you can proceed with further actions
            alert("Form submitted successfully");
        }
    }
</script>

@endpush

@section('content') 


<!--  -->
<div>
	<!-- <img src="https://www.familylovehomecare.com/uploads/1/2/1/8/121819191/contact-uscreakidz3_orig.jpg" style="width: 100%;height: 527px;" alt=" image" srcset=""> -->
	<img src="http://192.168.120.228/myzeon_web/assets/images/web_img/contact_banner.png"  alt=" image" srcset="" style="margin-top: 100px;">

	<!-- <img src="https://spacexglobalcorp.com/wp-content/uploads/2023/07/contact-banner-2.jpeg" style="width: 100%;height: 527px;" alt=" image" srcset=""> -->
</div>
<!--  -->

<!-- <section class=" mt-2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="pt-md-5 mb-2 eligible">Contact Us</h3>
				<div class="bar m-auto"></div>
			</div>
		</div>
	</div>
</section> -->
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
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Enter your name" required>
							<small class="text-danger" id="nameError"></small>
						</div>
					
						<div class="form-group">
							<label for="number">Number:</label>
							<input type="tel" class="form-control" id="number" placeholder="Enter your phone number" required>
							<small class="text-danger" id="numberError"></small>
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
					
						<button type="button" class="btn btn-primary" onclick="validateForm()" style="border-radius: 20px; font-size: 18px">Submit</button>
					</form>
				  </div>		
			</div>
		</div>
		
</section>
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
@endsection