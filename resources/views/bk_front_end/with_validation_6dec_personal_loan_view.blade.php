@extends('front_end_layout.home')
@push('startyourjourneystyle')
<!-- <link rel="stylesheet" href="../dist/jquery-steps.css"> -->
<link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front_end/asset/startjourney/css/style.css') }}">
<link rel="stylesheet" href="{{asset('assets/front_end/asset/css/style.css') }}">

<!-- Demo stylesheet -->
<link rel="stylesheet" href="css/style.css">
@endpush
@push('startyourjourneyscript')
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<!-- <script src="../dist/jquery-steps.js"> -->
<script src="{{ asset('assets/front_end/asset/startjourney/dist/jquery-steps.js') }}"></script>

<!-- <script>
    $('#demo_2').steps({
        onFinish: function () { alert('Thank you for filling out your information!'); }

    });
</script> -->
<script>
    //step1
    var frmContact = $('#frmContact');
    var frmContactValidator = frmContact.validate();

    //step2
    var frmIncome = $('#frmIncome');
    var frmIncomeValidator = frmIncome.validate();

    //step3
    var frmBank = $('#frmBank');
    var frmBankValidator = frmBank.validate();

    //step4
    var frmEmployment = $('#frmEmployment');
    var frmEmploymentValidator = frmEmployment.validate();

    //step5
    var frmResidence = $('#frmResidence');
    var frmResidenceValidator = frmResidence.validate();

    //step6 desiredAmount
    var desiredAmount = $('#desiredAmount');
    var desiredAmountValidator = desiredAmount.validate();

    //step7 frmPersonalLoan
    var loanForm = $('#loanForm');
    var loanFormValidator = loanForm.validate();

    $('#demo').steps({
        onChange: function (currentIndex, newIndex, stepDirection) {

            if(currentIndex===0){
                console.log("step1");
                
                

                var mob = $("#txtContactNum").val();

                if(mob==='' ){
                    $('#error_phone').hide();
                    return false;
                }
                console.log('mobile no'+mob);
                var regex = /^[789]\d{9}$/;
                if (regex.test(mob)) {
                    console.log('mobile no'+mob+'if');
                    $('#error_phone').hide();

                return true;
            } else {
                console.log('mobile no'+mob+'else');
                $('#error_phone').show();
                $('#error_phone').text('Invalid Indian Mobile Number');
                $('#error_phone').css("color","red");
                return false;
            }

            }
            // step1
            if (currentIndex === 0) {


                if (stepDirection === 'forward') {
                    return frmContact.valid();
                }
                if (stepDirection === 'backward') {
                    frmContactValidator.resetForm();
                }


            }
            // step2
            if (currentIndex === 1) {
                if (stepDirection === 'forward') {
                    return frmIncome.valid();
                }
                if (stepDirection === 'backward') {
                    frmIncomeValidator.resetForm();
                }
            }

            // step3
            if (currentIndex === 2) {
                if (stepDirection === 'forward') {
                    return frmBank.valid();
                }
                if (stepDirection === 'backward') {
                    frmBankValidator.resetForm();
                }
            }
            // step4
            if (currentIndex === 3) {
                if (stepDirection === 'forward') {
                    return frmEmployment.valid();
                }
                if (stepDirection === 'backward') {
                    frmEmploymentValidator.resetForm();
                }
            }
            // step5
            if (currentIndex === 4) {
                if (stepDirection === 'forward') {
                    return frmResidence.valid();
                }
                if (stepDirection === 'backward') {
                    frmResidenceValidator.resetForm();
                }
            }

            //step6 desiredAmount
            if (currentIndex === 5) {
                if (stepDirection === 'forward') {
                    return desiredAmount.valid();
                }
                if (stepDirection === 'backward') {
                    desiredAmountValidator.resetForm();
                }
            }

            //step7 frmPersonalLoan
            if (currentIndex === 6) {
                if (stepDirection === 'forward') {
                    return loanForm.valid();
                }
                if (stepDirection === 'backward') {
                    loanFormValidator.resetForm();
                }
            }


            return true;
        },
        onFinish: function () {
            alert('Thankyou! Your submission has been sent');
        }
    });
</script>
<script>
    var bank = getCookie("bank");
    $("#bank").val(bank);

    var phone_no = getCookie("phone_no");
    $("#phone_no").val(phone_no);

    console.log(bank);

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


    document.getElementById("loan-form").addEventListener("submit", function (event) {
        event.preventDefault();
        if (validateForm()) {
            // Get the form data
            const formData = new FormData(this);

            // Replace 'https://crm.myzeon.com/loancrm/api/wp-bl-post' with your actual API endpoint URL
            //dec 1 2023 comment
            // const apiEndpoint = 'https://crm.myzeon.com/api/wp-pl-post?';

            const apiEndpoint = 'http://127.0.0.1:8002/api/wp-pl-post?';

            // Create a query string with the form data
            const queryString = new URLSearchParams(formData).toString();

            // Make a POST request to the API using AJAX
            $.ajax({
                type: "POST",
                url: apiEndpoint,
                data: queryString,
                success: function (data) {
                    console.log("submit request");
                    displaySuccessMessage();
                    // Redirect to the desired URL after a short delay (in milliseconds)
                    setTimeout(function () {
                        ;
                    }, 2000); // Change the delay (2 seconds) as needed
                },
                error: function (xhr, status, error) {
                    console.error("API error:", error);
                    // Optionally, display an error message if there's an issue with the API request
                }
            });
        }
    });

    function displaySuccessMessage() {
        $("#success-message").show();
    }

    // function displaySuccessMessage() {
    //     var successMessage = document.getElementById('success-message');
    //     successMessage.innerText = "Form successfully submitted!";
    //     successMessage.style.display = 'block';
    // }
    function formatLoanAmount(input) {
        if (!input) return ""; // If input is empty, return empty string
        let number = parseFloat(input.replace(/,/g, ""));
        if (isNaN(number)) return input; // If input is not a valid number, return the input as is
        return number.toLocaleString("en-IN");
    }

    // Listen for changes in the input field and format the value accordingly
    document.getElementById("loan_amount").addEventListener("input", function () {
        let formattedValue = formatLoanAmount(this.value);
        this.value = formattedValue;
    });


    function validateForm() {
        var isValid = true;

        var namePattern = /^[A-Za-z\s]+$/;
        // var phonePattern = /^[6-9]\d{9}$/;
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var panPattern = /^([A-Za-z]){5}([0-9]){4}([A-Za-z]){1}?$/;
        var dobPattern = /^\d{4}-\d{2}-\d{2}$/;

        var nameInput = document.getElementById("name");
        // var phoneInput = document.getElementById("phone");
        var emailInput = document.getElementById("email");
        var panInput = document.getElementById("pan");
        var dobInput = document.getElementById("dob");
        var pincodeInput = document.getElementById("pincode");
        var cityInput = document.getElementById("city");
        var addressInput = document.getElementById("address");
        var occupationSelect = document.getElementById("occupation");
        var loanTypeSelect = document.getElementById("loan_type");

        // Reset error messages
        var errorMessages = document.querySelectorAll(".error-message");
        errorMessages.forEach(function (errorMessage) {
            errorMessage.style.display = "none";
        });

        if (!namePattern.test(nameInput.value.trim())) {
            document.getElementById("name-error").style.display = "block";
            document.getElementById("scrolldiv").scrollIntoView();
            isValid = false;
        }


        //   if (!phonePattern.test(phoneInput.value.trim())) {
        //     document.getElementById("desired-error").style.display = "block";
        //     document.getElementById("scrolldiv").scrollIntoView();
        //     isValid = false;
        // }
        if ($("#loan_amount").val() === "") {
            $("#desired-error").show();
            return; // Prevent form submission
        }

        if (!emailPattern.test(emailInput.value.trim())) {
            document.getElementById("email-error").style.display = "block";
            isValid = false;
        }

        if (!panPattern.test(panInput.value.trim())) {
            document.getElementById("pan-error").style.display = "block";

            isValid = false;

        }


        if (pincodeInput.value.trim() === "") {
            document.getElementById("pincode-error").style.display = "block";
            isValid = false;
        }

        if (cityInput.value.trim() === "") {
            document.getElementById("city-error").style.display = "block";
            isValid = false;
        }

        if (addressInput.value.trim() === "") {
            document.getElementById("address-error").style.display = "block";
            isValid = false;
        }

        if (occupationSelect.value.trim() === "") {
            document.getElementById("occupation-error").style.display = "block";
            isValid = false;
        }

        if (loanTypeSelect.value.trim() === "") {
            document.getElementById("loan-error").style.display = "block";
            isValid = false;
        }

        return isValid;

    }

    function convertToUppercase() {
        var inputElement = document.getElementById("pan");
        inputElement.value = inputElement.value.toUpperCase();
    }

    function handleOccupationChange() {
        var occupationSelect = document.getElementById("occupation");
        var loanTypeSelect = document.getElementById("loan_type");
        var selectedOccupation = occupationSelect.value;

        // Reset loan type options
        loanTypeSelect.innerHTML = '<option value="">Select loan type</option>';

        if (selectedOccupation === "Salaried") {
            loanTypeSelect.innerHTML += '<option value="Personal Loan" selected>Personal Loan</option>'

                ;
        } else if (selectedOccupation === "Business Owner") {
            loanTypeSelect.innerHTML += '<option value="Business Loan">Business Loan</option>';
        } else if (selectedOccupation === "Self-employed Professional") {
            loanTypeSelect.innerHTML += '<option value="Profession Loan">Profession Loan</option>' +
                '<option value="Loan for Other Professions">Loan for Other Professions</option>';
        }
    }



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
    $(document).ready(function () {
        $("#loan-form").submit(function (event) {
            event.preventDefault();

            if (validateForm()) {
                $("#loader").show(); // Show loader


                setTimeout(function () {
                    $("#loader").hide(); // Hide loader
                    displaySuccessMessage();
                    // Redirect to the desired URL after a short delay (in milliseconds)
                    // setTimeout(function() {
                    //     window.location.href = "https://www.myzeon.com/successpopup";
                    // }, 2000); // Change the delay (2 seconds) as needed

                }, 2000); // Simulate a 2-second delay, replace with actual API response handling logic
            }
        });
    });
</script>
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
<!--step7 -->

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
    /* #demo .contactInput {
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        width: 10%;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: #000;
        font-size: 14px;
        font-weight: 500;
        background: white;
    } */
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
@endpush

@push('personalLoanScripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="../dist/jquery-steps.js"></script>

@endpush

@section('content')
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


<div class="">

    <img class="card-img" src="http://192.168.120.228/myzeon_web/assets/images/web_img/personalloanbanner1.png"
        alt="Card image" width="auto" />
</div>

<div class="conainer-fluid col-md-12 mt-3">
    <h4 class="card-title eligible ">Personal Loan</h4>
    <div class="bar">&nbsp;</div>
    <p class="paraFont">A personal loan is an unsecured loan provided by financial institutions to
        individuals for personal
        expenses such as the cost of debt consolidation, home improvement, medical expenses, education,
        vacation, or any other personal need. Everybody wants to be financially stable at some point in
        their
        lives. A personal loan is a financial tool that can be your savior in unexpected situations with
        Myzeon
        that you can face in your life. These loans come with fixed interest rates which means your monthly
        payments remain the same over the predetermined time of the loan. Apply personal loan online to get
        the
        best deal on a personal loan with lower interest rates. The repayment period of a personal loan
        ranges
        from one to seven years. Your eligibility and interest rate are assessed based on your credit
        history.
    </p>
</div>





<div class="container-fluid mt-4 mb-4">
    <div class="row">
        <div class="">
            <div class="card-body-right">
                <h4 class="card-title eligible ">When to Consider a Personal Loan?
                </h4>
                <div class="bar">&nbsp;</div>
                <p class="paraFont">Personal loans can come to the rescue in various financial scenarios. If you are
                    struggling to pay the monthly payment of your high-interest credit card debt then a personal loan
                    can be used to quickly and easily access funds with lower interest rates. The benefits of a personal
                    loan can be availed in unexpected medical bills, home repairs, or car troubles for a quick source of
                    funds to cover these costs. You can also celebrate your life’s milestones without draining your
                    savings for a wedding, or a dream vacation. You can get the lowest personal loan interest rate if
                    you have a good credit score. Keep in mind that a poor credit score may not qualify you for getting
                    a personal loan.
                </p>
            </div>
        </div>

    </div>

</div>


<div class="container-fluid">
    <div>
        <h4 class="eligible">What Are Eligibility Criteria For Personal Loan?
        </h4>
        <div class="bar">&nbsp;</div>
        <p class="paraFont">Personal loan eligibility plays a crucial role in getting you a personal loan with lower
            interest rates. Some of the key factors that lenders consider are:

        </p>
        <ul>
            <li style="list-style: disc;" class="paraFont eligible">Credit Score: </li>
            <p class="paraFont">AYour credit history decides whether you are eligible for a loan or not. It
                demonstrates your ability to manage loans responsibly. A good credit score is usually above 700
                which can qualify you for a lower personal loan interest rate. </p>
            <li style="list-style: disc;" class="paraFont eligible">Term Loans</li>
            <p class="paraFont">A term loan is a loan that needs to be repaid in EMIs over a set period of time.
                There are three
                types of term loans, short-term, intermediate-term, and long-term loans. Short-term loans have a
                duration of 12 months, whereas repayment tenure for intermediate-term and long-term loans ranges
                between 1 to 5 years.</p>
            <li style="list-style: disc;" class="paraFont eligible">Income</li>
            <p class="paraFont">To be able to repay the loan, you need to have a reliable source of income. Lenders
                require a minimum income level of an individual before securing them a personal loan. A higher
                income grants a larger loan amount.
            </p>
            <li style="list-style: disc;" class="paraFont eligible">Employment Status:</li>
            <p class="paraFont">Except for a stable income, you must have stable employment. Lenders may look at
                your job history to assess your ability to repay the loan. Being self-employed can also work in your
                favor.
            </p>

            <li style="list-style: disc;" class="paraFont eligible">Debt-to-income Ratio:</li>
            <p class="paraFont">The debt-to-income ratio is the percentage of your monthly income that is spent on
                paying existing debts. The higher the DTI ratio, the lower the chances of qualifying for a loan. A
                lower DTI ratio makes you highly eligible for a personal loan.

            </p>
            <li style="list-style: disc;" class="paraFont eligible">Age:</li>
            <p class="paraFont">The minimum age to qualify for a loan is 18 years but it can vary for different
                lenders. Some lenders require 21 years of age but some can avail you of a personal loan at 18 years
                of age.


            </p>
        </ul>
    </div>
</div>



<div class="container-fluid mt-4">
    <div>
        <h4 class="eligible">Documents For Personal Loans That Required:
        </h4>
        <div class="bar">&nbsp;</div>
        <p class="paraFont">The necessary documentation for easy steps for online personal loan is very important
            for Lenders who require these documents to assess your eligibility and Value of Credit. Get ready with
            these documents to streamline the application process for a personal loan:


        </p>
        <ul>
            <li class="paraFont">
                <span style="color: #1338be; font-weight: 600;">&bull;</span> Identity proof (Adhar card, PAN card,
                Passport, etc)
            </li><br>

            <li class="paraFont "><span style="color: #1338be; font-weight: 600;">&bull;</span> Proof of Age (Birth
                Certificate, Passport, Adhar Card, etc)
            </li><br>

            <li class="paraFont "><span style="color: #1338be; font-weight: 600;">&bull;</span> Proof of Address
                (Electricity bill, Rent agreement, bank statement with your address, etc)</li><br>

            <li class="paraFont "><span style="color: #1338be; font-weight: 600;">&bull;</span> Proof of Income(for
                salaried employees- payslip, a letter from your employer stating your income. For self-employed
                individuals- profit and loss statement, bank statements.)
            </li><br>

            <li class="paraFont "><span style="color: #1338be; font-weight: 600;">&bull;</span> Bank statements of
                2-3 months to assess your financial stability and transaction history.
            </li><br>


        </ul>
    </div>
</div>
<section class="jumbotron">
    <h4 class="eligible text-center">Start Your Journey
    </h4>
    <div class="bar m-auto">&nbsp;</div>
    <br>
    <div class="step-app" id="demo">
        <ul class="step-steps">
            <li data-step-target="step1">Step 1</li>
            <li data-step-target="step2">Step 2</li>
            <li data-step-target="step3">Step 3</li>
            <li data-step-target="step4">Step 4</li>
            <li data-step-target="step5">Step 5</li>
            <li data-step-target="step6">Step 6</li>
            <li data-step-target="step7">Step 7</li>


        </ul>
        <div class="step-content">
            <!-- <div class="step-tab-panel" data-step="step1">
        <h3>Tab1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus facere porro iste quas numquam officia totam facilis suscipit, expedita rem quod, fugiat quo, veniam voluptate ut autem quia qui amet necessitatibus perferendis dignissimos ipsa doloremque. Necessitatibus delectus voluptatem unde. Architecto animi unde nostrum tenetur, doloremque distinctio, porro officiis dicta similique omnis quos odit ducimus minima ea quas facilis quod. Natus adipisci consequuntur sapiente alias culpa fugit tenetur, doloribus? Magni ipsum dolor debitis beatae quo, dicta voluptas veritatis, quos. Iusto quisquam doloribus laboriosam esse, dicta, odio facilis eligendi explicabo sequi accusamus a iste minus alias. Nisi sed laborum, aut maiores beatae aliquam voluptatum est enim impedit delectus blanditiis, neque sint nemo deleniti a quaerat voluptatem harum! Laboriosam assumenda, ullam iure. Corrupti maxime perferendis facilis ipsum, eius excepturi commodi consectetur, velit nobis reiciendis, ipsam! Maiores possimus tempore vel doloremque in facilis qui quos molestias. Culpa eius magnam repellat, ad eaque. Possimus, voluptatem.</p>
      </div> -->
            <div class="step-tab-panel" data-step="step1">
                <!-- <h3>Step 1: Contact Number</h3> -->
                <form name="frmContact" id="frmContact" class="form-group label">
                    <label class="fieldlabels"> Contact Number: </label><br>
                    <input type="tel" name="txtContactNum" id="txtContactNum" placeholder="Enter your contact number"
                        class="form-control" required>
                        <span id = "error_phone"></span>

                    <!-- <small>Enter a valid 10-digit contact number.</small> -->
                </form>
            </div>

            <div class="step-tab-panel" data-step="step2">
                <!-- <h3>Step 2: Select Your Yearly Income</h3> -->
                <form name="frmIncome" id="frmIncome" class="form-group label">
                    <label class="fieldlabels"> Yearly Income: </label><br>

                    <select class="custom-select" id="income" required>
                        <option value="" disabled selected>Select your yearly income range</option>
                        <option value="below20k">Upto ₹3
                            Lac</option>
                        <option value="20k-50k">₹3 - ₹4
                            Lacs</option>
                        <option value="50k-100k">₹4 - ₹5
                            Lacs</option>
                        <option value="above100k">₹5 - ₹10 Lacs</option>
                        <option value="above100k"> ₹20Lacs +</option>
                    </select>
                </form>
            </div>

            <div class="step-tab-panel" data-step="step3">
                <!-- <h3>Step 3: Select Your Bank Account</h3> -->
                <form name="frmBank" id="frmBank" class="form-group label">
                    <label class="fieldlabels"> Bank Name: </label><br>
                    <select class="custom-select" id="income" required>
                        <option value="" disabled selected>Select your Bank Account</option>
                        <option value="HDFC Bank ">HDFC Bank </option>
                        <option value="Andhra Bank ">Andhra Bank </option>
                        <option value="Axis Bank ">Axis Bank </option>
                        <option value="Bank of Baroda ">Bank of Baroda </option>
                        <option value="Bank of India ">Bank of India </option>
                        <option value="Bank of Maharasthra ">Bank of Maharasthra </option>
                        <option value="Bank of Rajasthan ">Bank of Rajasthan </option>
                        <option value="Canara Bank ">Canara Bank </option>
                        <option value="Catholic Syrian Bank ">Catholic Syrian Bank </option>
                        <option value="Central Bank of India ">Central Bank of India </option>
                        <option value="Citibank ">Citibank </option>
                        <option value="Corporation bank ">Corporation bank </option>
                        <option value="DBS ">DBS </option>
                        <option value="Dena Bank ">Dena Bank </option>
                        <option value="Deutsche Bank ">Deutsche Bank </option>
                        <option value="Dhanalakshmi Bank Ltd ">Dhanalakshmi Bank Ltd </option>
                        <option value="Federal Bank ">Federal Bank </option>
                        <option value="HSBC Bank ">HSBC Bank </option>
                        <option value="ICICI Bank ">ICICI Bank </option>
                        <option value="IDBI Bank ">IDBI Bank </option>
                        <option value="IDFC Bank ">IDFC Bank </option>
                        <option value="ING Vysya Bank ">ING Vysya Bank </option>
                        <option value="Indian Bank ">Indian Bank </option>
                        <option value="Indian Overseas Bank ">Indian Overseas Bank </option>
                        <option value="IndusInd Bank ">IndusInd Bank </option>
                        <option value="J&amp;K Bank ">J&amp;K Bank </option>
                        <option value="Karnataka Bank ">Karnataka Bank </option>
                        <option value="Karur Vysya Bank ">Karur Vysya Bank </option>
                        <option value="Kotak Bank ">Kotak Bank </option>
                        <option value="Lakshmi Vilas bank ">Lakshmi Vilas bank </option>
                        <option value="Oriental Bank of Commerce ">Oriental Bank of Commerce
                        </option>
                        <option value="Punjab &amp; Sind bank ">Punjab &amp; Sind bank
                        </option>
                        <option value="Punjab National Bank ">Punjab National Bank </option>
                        <option value="RBL Bank Ltd ">RBL Bank Ltd </option>
                        <option value="SBM bank ">SBM bank </option>
                        <option value="Saraswat Bank ">Saraswat Bank </option>
                        <option value="South Indian Bank ">South Indian Bank </option>
                        <option value="Standard Chartered Bank ">Standard Chartered Bank
                        </option>
                        <option value="State Bank of Bikaner &amp; Jaipur ">State Bank of
                            Bikaner &amp;
                            Jaipur </option>
                        <option value="State Bank of Hyderabad ">State Bank of Hyderabad
                        </option>
                        <option value="SBI(State Bank of India )">SBI(State Bank of India )
                        </option>
                        <option value="State Bank of Indore ">State Bank of Indore </option>
                        <option value="State Bank of Mysore ">State Bank of Mysore </option>
                        <option value="State Bank of Patiala ">State Bank of Patiala </option>
                        <option value="State Bank of Travancore ">State Bank of Travancore
                        </option>
                        <option value="Syndicate Bank ">Syndicate Bank </option>
                        <option value="Tamil Nadu Mercantile Bank ">Tamil Nadu Mercantile Bank
                        </option>
                        <option value="UCO Bank ">UCO Bank </option>
                        <option value="Union Bank of India ">Union Bank of India </option>
                        <option value="United Bank of India ">United Bank of India </option>
                        <option value="Vijaya Bank ">Vijaya Bank </option>
                        <option value="Yes Bank ">Yes Bank </option>
                    </select>
                </form>
            </div>
            <div class="step-tab-panel" data-step="step4">
                <!-- <h3>Step 4: Provide Your Employment Details</h3> -->
                <form name="frmEmployment" id="frmEmployment" class="form-group label">
                    <label for="companyName">Company Name:</label><br>
                    <input type="text" class="form-control" type="text" id="companyName" name="companyName" required
                        placeholder="Enter your company name">
                </form>
            </div>

            <div class="step-tab-panel" data-step="step5">
                <!-- <h3>Step 5: Select Your Residence Type</h3> -->
                <form name="frmResidence" id="frmResidence" class="form-group label">
                    <label for="residenceType">Residence Type:</label><br>
                    <select class="custom-select" id="residenceType" name="residenceType" required>
                        <option value="" disabled selected>Select your residence type</option>
                        <option value="1">Owned By Self / Spouse</option>
                        <option value="2">Owned By Parents / Siblings</option>
                        <option value="3">Rented with Family</option>
                        <option value="4">Rented with Friends</option>
                        <option value="5">Paying Guest / Hostel Company provided</option>
                    </select>
                </form>
            </div>

            <div class="step-tab-panel" data-step="step6">
                <!-- <h3>Step 6: Desired Loan Amount</h3> -->
                <form name="desiredAmount" id="desiredAmount" class="form-group label">
                    <label for="desiredAmount">Desired Loan Amount:</label><br>
                    <!--<input type="number" id="desiredAmount" name="desiredAmount" required
                    placeholder="Enter your desired loan amount" min="1">
                <small>Enter a valid loan amount.</small> -->
                    <select class="custom-select" name="income" id="income" required>

                        <option value="" disabled selected>Select desired loan amount</option>
                        <option value="below20k">Upto ₹1
                            Lac</option>
                        <option value="20k-50k">₹1 - ₹3
                            Lacs</option>
                        <option value="50k-100k">₹3 - ₹5
                            Lacs</option>
                        <option value="above100k">₹5 - ₹7 Lacs</option>
                        <option value="above100k">₹10 - ₹20 Lacs</option>
                        <option value="above100k">₹20 - ₹50 Lacs</option>
                        <option value="above100k"> ₹50Lacs +</option>



                    </select>
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
                            <label>Your desired loan amount</label><span style="color: red;">*</span> <span
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
                                placeholder="Enter your PAN card number" maxlength="10" oninput="convertToUppercase()">
                            <div class="error-message" id="pan-error">Enter a valid PAN card number (e.g. ABCDE1234F).
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
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter your city">
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

    <div class="step-footer mt-5">
        <button data-step-action="prev" class="step-btn btn btn-success">Previous</button>
        <button data-step-action="next" class="step-btn btn btn-success">Next</button>
        <button data-step-action="finish" class="step-btn btn btn-success">Finish</button>
    </div>
    <div class="loader-container" id="loader" style="display: none;">
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="loader-text">Submitting...</div>
        </div>
    </div>
</section>



<section class="jumbotron">
    <div class="container-fluid">
        <div>
            <h4 class="eligible">How Can You Apply Personal Loan Online?
            </h4>
            <div class="bar">&nbsp;</div>
            <p class="paraFont">Here are some steps that you should take before applying for a personal loan: </p>


            </p>
            <ul>
                <li style="list-style: disc;" class="paraFont eligible">Check if You Are Eligible
                </li>
                <p class="paraFont">The qualification of a personal loan largely depends on the individual’s personal
                    loan eligibility. Check the official website of the lender and look out for the eligibility criteria
                    set by them. The common eligibility criteria to qualify for a personal loan are age, income, credit
                    score, employment status, and more.
                </p>

                <li style="list-style: disc;" class="paraFont eligible">Compare and Analyze Interest Rates
                </li>
                <p class="paraFont">Research about different lenders that are offering personal loan. Also, remember to
                    compare each offer on the basis of their interest rates and loan term. Choose the most suitable
                    option for yourself that suits your needs and financial health. Make sure the best offer is the one
                    in which the personal loan interest rate is lower than your income to prevent the lack of financial
                    resources.</p>

                <li style="list-style: disc;" class="paraFont eligible">Compile Necessary Documents

                </li>
                <p class="paraFont">Personal loan documents play a vital role in qualifying for a personal loan and
                    getting approval instantly. Documents are collected for the verification of your identity. Before
                    applying for a loan, you can gather all the documents such as proof of identity, proof of address,
                    income proof, passport-sized photograph, and other documents required by the lender.
                </p>

                <li style="list-style: disc;" class="paraFont eligible">Fill Out Online Application Form
                </li>
                <p class="paraFont">Fill out the online application form from the official website of the lender after
                    all the research and comparison with other lenders. Fill up your personal details in the form
                    carefully and accurately. This process may include contact details, bank details, employment
                    details, or financial information.
                </p>

                <li style="list-style: disc;" class="paraFont eligible">Upload Personal Loan Documents

                </li>
                <p class="paraFont">Scan all the documents asked by the lender and upload them on the lender’s website.
                    Check that every document is clear and visible in pictures. After this step, you have to wait for
                    the processing of your application.</p>

            </ul>
        </div>
    </div>
</section>

<!-- <section class="mb-4">
    <div class="container-fluid px-4 relative">
        <div class="flex flex-col items-center justify-center">
            <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/personalLoan/pesonal_loan_apply_banner_800scale.png"
                class="w-full max-h-600 md:max-h-500 lg:max-h-400 xl:max-h-300" style="height: auto; max-width: 100%;"
                alt="apply image">

            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bannerButton">
                <button
                    class="bg-blue-500 text-2xl font-bold hover:bg-blue-800 text-white md:text-lg lg:text-xl xl:text-2xl h-12 md:h-16 w-48 md:w-64 lg:w-80 xl:w-96 max-w-full rounded-full"
                    style="background-color: #1338be;">
                    <a href="http://192.168.120.228/myzeon_web/index.php/apply-new" style="color: white;">Apply
                        Now</a>
                </button>
            </div>
        </div>
    </div>
</section> -->

<section class="jumbotron">
    <div class="container-fluid">
        <div>
            <h4 class="eligible">What Are Benefits Of A Personal Loan?</h4>
            <div class="bar">&nbsp;</div>
            <p class="paraFont">You can manage your finances, navigate expenses, and meet your goals with the funds
                provided by a personal loan. It has numerous benefits such as:
            </p>


            </p>
            <ul>
                <li style="list-style: disc;" class="paraFont eligible">Quick Approval:
                </li>
                <p class="paraFont">Apply personal loan online and get a quick approval for your loan. It is easier and
                    faster to secure than other types of loans. Individuals seeking to obtain a personal loan may
                    benefit from the expediency and simplicity of the online application process, which allows for rapid
                    approval.

                </p>

                <li style="list-style: disc;" class="paraFont eligible">Fixed Terms:
                </li>
                <p class="paraFont">he fixed interest rates of a personal loan mean your monthly payments remain the
                    same throughout the loan term. This can help you budget your expenses resulting in easy management
                    of your finances.
                </p>

                <li style="list-style: disc;" class="paraFont eligible">No Security:

                </li>
                <p class="paraFont">These loans are unsecured loans which means that you do not need to provide
                    collateral in order to secure a loan. This reduces the risk of losing your assets in case of fail to
                    repay the loan. Personal loan interest rates are higher than business loan interest rates as it
                    provide funds without any collateral.

                </p>

                <li style="list-style: disc;" class="paraFont eligible">Multiple Uses:
                </li>
                <p class="paraFont"> Whether you want to cover the expense of a wedding, a dream vacation, education,
                    medical bills, home renovation, or any unexpected financially draining situation, you can always
                    depend on a personal loan. These funds can be availed quickly and easily in times of emergency.
                </p>

                <li style="list-style: disc;" class="paraFont eligible">Credit Building:

                </li>
                <p class="paraFont">Timely repayments of the personal loan can reflect positively on your credit score.
                    It demonstrates your responsible use of funds, which results in an improved credit history and a
                    higher credit score.</p>

            </ul>
        </div>
    </div>
</section>


<!-- <div class="conainer-fluid mt-3 mb-4">
    <div class="container-fluid">

        <p style="color: #1338be" class="font-family-playfair-display text-4xl font-bold text-center">Compare and Apply
            Instantly
            for Personal Loan at Lowest Interest Rate</p>
        <div class="container" style="
                    width: 1220px;
                    padding: 0 40px 0 40px;
                    overflow: hidden;
                    ">

            <div class="owl-carousel carousel1">
                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Yes_Bank_SVG_Logo.png') }}"
                        alt="Image 1"></div>
                <div class="item"><img
                        src="{{ asset('assets/front_end/asset/img/bankLogo/Kotak_Mutual_Fund_logo.png') }}"
                        alt="Image 2"></div>
                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Indiabulls_logo.png') }}"
                        alt="Image 3"></div>
                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/IDFC First Bank.png') }}"
                        alt="Image 4"></div>
                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/HDFC_Bank_Logo.png') }}"
                        alt="Image 5"></div>
                <div class="item"><img
                        src="{{ asset('assets/front_end/asset/img/bankLogo/Bajaj_Finserv_Logo_edit.png') }}"
                        alt="Image 6">
                </div>

                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Yes_Bank_SVG_Logo.png') }}"
                        alt="Image 1"></div>
                <div class="item"><img
                        src="{{ asset('assets/front_end/asset/img/bankLogo/Kotak_Mutual_Fund_logo.png') }}"
                        alt="Image 2"></div>
                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/Indiabulls_logo.png') }}"
                        alt="Image 3"></div>
                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/IDFC First Bank.png') }}"
                        alt="Image 4"></div>
                <div class="item"><img src="{{ asset('assets/front_end/asset/img/bankLogo/HDFC_Bank_Logo.png') }}"
                        alt="Image 5"></div>
                <div class="item"><img
                        src="{{ asset('assets/front_end/asset/img/bankLogo/Bajaj_Finserv_Logo_edit.png') }}"
                        alt="Image 6"></div>
              Add more slides as needed 
            </div>

        </div>

    </div>
</div> -->


<!--  -->
<div class="container-fluid mt-3 mb-4">
    <div class="row"> <!--row-start-->
        <h4 class="eligible">Top Banks Providing Personal Loans
        </h4> <span>
            <div class="bar">&nbsp;</div>
        </span>

        <div class="col-sm-12 pt-2" style="text-align: center;">
            <table class="table table-bordered border" style="border-collapse: collapse; width: 99.2586%; height: 156px;" border="1">
                <tbody>
                    <tr style="height: 26px;text-align: center;">
                        <td style="width: 50%; height: 26px;"><strong style="text-align: justify;"><span
                                    style="font-size: 14pt; font-family: Poppins, sans-serif; color: #000000; background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Bank
                                </span></strong></td>
                        <td style="width: 25%; height: 26px;"><strong style="text-align: justify;"><span
                                    style="font-size: 14pt; font-family: Poppins, sans-serif; color: #000000; background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Rate of Interest </span></strong></td>
                    </tr>
<!--  -->
<tr style="height: 26px;">
<td style="width: 50%; height: 26px;">
    <span  style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;" class="flex-container1">
         <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/bankLogo/HDFC_Bank_Logo.png" alt="HDFC Bank Logo" class="bank-logo">HDFC Bank
    </span>
</td>
<td style="width: 25%; height: 26px;">
    <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;">10.25%</span>
</td>
</tr>
<!--  -->

<!--  -->
<tr style="height: 26px;">
    <td style="width: 50%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;" class="flex-container1">
           
            <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/bankLogo/Indiabulls_logo.png" alt="HDFC Bank Logo" class="bank-logo">IndusInd Bank 
        </span>
    </td>
    <td style="width: 25%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;">10.75%</span>
    </td>
    </tr>
<!--  -->

<!--  -->
<tr style="height: 26px;">
    <td style="width: 50%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;" class="flex-container1">
          
            <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/bankLogo/standardharactered.png" alt="Standard Chartered" class="bank-logo">Standard Chartered
        </span>
    </td>
    <td style="width: 25%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;">10.25%</span>
    </td>
    </tr>
<!--  -->  

<!--  -->
<tr style="height: 26px;">
    <td style="width: 50%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;" class="flex-container1">
            
            <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/bankLogo/axis_bank.png" alt="Axis Bank" class="bank-logo">Axis Bank 
        </span>
    </td>
    <td style="width: 25%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;">10.99%</span>
    </td>
    </tr>
<!--  -->  


<tr style="height: 26px;">
    <td style="width: 50%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;" class="flex-container1">
            
            <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/bankLogo/Kotak_Mutual_Fund_logo.png" alt="Axis Bank" class="bank-logo"> Kotak Mahindra
        </span>
    </td>
    <td style="width: 25%; height: 26px;">
        <span style="color: #000000; font-family: Poppins, sans-serif; font-size: 17.3333px; text-align: justify; white-space-collapse: preserve;">10.75%</span>
    </td>
    </tr>
<!--  --> 

                </tbody>
            </table>
            <p>&nbsp;</p>
        </div> <!--col-sm-en-->
    </div><!--rowend-->
</div>
<!--  -->
<div class="clearfix"></div>
<!--  -->

<div class="clearfix"></div>


{{-- end section --}}
<!-- for space around content -->

<!-- <div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div> -->

{{-- sectionn for apply now card --}}







{{-- end of section apply now card --}}











<!-- <section class="pb-5 jumbotron" id="Compare">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-bg-primary">Compare Personal Loans</h4>
                    <p class="mb-2">The three major factors that you consider before borrowing a personal loan are the
                        Interest Rate, Loan Tenure, and Loan amount. Therefore, you can compare different banks and NBFCs
                        that offers personal loan to Indian customers.</p>
                </div>
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="" id="compare-loan">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Bank</label>
                                    <select class="form-control select_multi" required="" name="bank_name[]" multiple>
                                        <?//php foreach (getBank() as $key => $value) {?>
                                        <option value="<?//php echo $value->bank_name; ?>" style="width: 100%"><?//php echo $value->bank_name; ?>
                                        </option>
                                        <?//php }?>

                                    </select>
                                    <input type="hidden" name="loan_type" value="personal-loan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Loan Amount</label>
                                    <input type="text" class="form-control" name="loan_amount" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Monthly Income</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center mb-5">
                                <button type="button" id="compare_button" class="btn btn-primary">Compare Interest
                                    Rates</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped  table-hover table-bordered border-primary">
                            <tbody id="tab">
                                <tr>
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
    </section> -->


<!-- <section>
        <div class="container-fluid">
            
            <h3 class="mb-2 font-weight-bold " style="color: #1338be;">FAQs</h3>
            <div class="bar">&nbsp;</div>
    
                        <button class="accordion text-2xl font-bold text-yellow-300">Why Should I Get a Business Loan?</button>
    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
       
    <p class="mt-3">You should consider getting a business loan for several reasons:</p><p><strong>Capital Investment:</strong> It provides the necessary funds to start or expand your business, allowing you to purchase equipment, inventory, or hire additional staff.</p><p><strong>Cash Flow Management:</strong> A loan can help smooth out cash flow fluctuations, ensuring you have enough working capital to cover operational expenses, especially during slow periods.</p><p><strong>Expansion and Growth:</strong> If you’re looking to grow your business, a loan can be used to open new locations, enter new markets, or launch new products or services.</p><p><strong>Equipment and Technology Upgrades:</strong> Loans can be used to invest in updated technology and equipment, helping you stay competitive and efficient.</p><p><strong>Marketing and Advertising:</strong> Securing a loan can provide the necessary funds to implement effective marketing campaigns, helping you reach a wider audience and generate more revenue.</p>
    
    </div>
    
    <button class="accordion text-2xl font-bold text-yellow-300">Is Possible to Raise the Credit Limit for a Business Loan?</button>
    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
    <p class="mt-3">Yes, it is possible to raise the credit limit for a business loan. This can be achieved through several methods:</p><p><strong>Positive Payment History:</strong> Consistently making on-time payments for existing loans and credit lines can build trust with lenders, increasing the likelihood of a credit limit increase.</p><p><strong>Demonstrated Business Growth:</strong> Showing evidence of steady revenue and business growth can instill confidence in lenders and lead to a credit limit increase.</p><p><strong>Requesting a Review:</strong> Contacting your lender and formally requesting a credit limit increase is a common way to explore this possibility. Be prepared to provide updated financial information and a compelling case for the increase.</p><p><strong>Improved Credit Score:</strong> If your business’s credit score has improved since the initial loan was approved, it may be a strong indicator that you can handle a higher credit limit.</p><p><strong>Utilization Ratio:</strong> Maintaining a low utilization ratio (the amount of credit used compared to the total available) can signal responsible financial management and make a strong case for a credit limit increase.</p>
    </div>
    
    <button class="accordion text-2xl font-bold text-yellow-300">What Fees Would I Pay When the Loan Is Being Processed?</button>
    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
    
    <div class="table-responsive"><table class="table" width="824"><thead><tr><td valign="top"><p class="normal"><span style="color: #FFD756;"><b><span lang="EN">Particulars</span></b></span></p></td><td valign="top"><p class="normal"><span style="color: #1338be;"><b><span lang="EN">Unsecured Business Loan</span></b></span></p></td><td valign="top"><p class="normal"><span style="color: #1338be;"><b><span lang="EN">Secured Business Loan</span></b></span></p></td></tr><tr><td valign="top"><p class="normal"><span style="color: #FFD756;"><b><span lang="EN">Collateral</span></b></span></p></td><td valign="top"><p class="normal"><span lang="EN">No collateral needed</span></p></td><td valign="top"><p class="normal"><span lang="EN">Business owners may provide an asset, such as land, equipment, inventory, property, etc., as collateral against the loan.</span></p></td></tr><tr><td valign="top"><p class="normal"><span style="color: #FFD756;"><b><span lang="EN">Credit Score</span></b></span></p></td><td valign="top"><p class="normal"><span lang="EN">Based on the credit score, banks and NBFCs decide on the loan amount and interest rate.</span></p></td><td valign="top"><p class="normal"><span lang="EN">A secured business loan requires a lower credit score than an unsecured business loan.</span></p></td></tr><tr><td valign="top"><p class="normal"><span style="color: #FFD756;"><b><span lang="EN">Interest rate</span></b></span></p></td><td valign="top"><p class="normal"><span lang="EN">A higher interest rate than secured business loans as they do not have a guarantee of an asset to back the loan amount.</span></p></td><td valign="top"><p class="normal"><span lang="EN">A lower interest rate is charged as risk is lower</span></p></td></tr><tr><td valign="top"><p class="normal"><span style="color: #FFD756;"><b><span lang="EN">Guarantor</span></b></span></p></td><td valign="top"><p class="normal"><span lang="EN">No guarantor is required</span></p></td><td valign="top"><p class="normal"><span lang="EN">A business owner or partner can pledge their land, property, or gold as collateral against the loan.</span></p></td></tr></thead></table></div>
    
    <p class="mt-3">Choose between an unsecured and secured business loan depending on factors like credit score, repayment capacity, the time required to repay the loan, etc.</p>
    </div>
    
    <button class="accordion text-2xl font-bold ">What Paperwork Is Required When Applying for a Business Loan?</button>
    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
        <p class="mt-3" ><strong style="color: black;">Business Plan:</strong> This outlines your business goals, financial projections, and strategies for growth.</p><p><strong>Personal Identification:</strong> Such as driver’s license or passport, to verify your identity.</p><p><strong>Business Registration Documents:</strong> These include your business license, articles of incorporation, or other legal paperwork.</p><p><strong>Financial Statements:</strong> Including balance sheets, income statements, and cash flow statements to demonstrate your business’s financial health.</p><p><strong>Tax Returns:</strong> Both personal and business tax returns for the past few years.</p>
    </div>
    
    <button class="accordion text-2xl font-bold text-yellow-300">Do I Need to Offer Security to Be Approved for a Business Loan?</button>
    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
        <p class="mt-3"> Yes, offering security, such as collateral or a personal guarantee, can significantly increase your chances of being approved for a business loan. It provides the lender with a level of assurance that if you’re unable to repay the loan, they can recoup their losses by claiming the pledged asset. However, not all business loans require security. Some lenders offer unsecured loans, but they typically have stricter eligibility criteria and may come with higher interest rates.</p>
    </div>
    
    <button class="accordion text-2xl font-bold text-yellow-300">Which Methods Are Available for Loan Repayment?</button>
    <div class="panel font-family-josefin-sans text-1xl font-bold text-blue-700">
    <p class="mt-3">There are several methods available for loan repayment, depending on the type of loan and the terms agreed upon with the lender. Here are some common methods:</p><p><strong>Standard Repayment Plan:</strong> This is the most straightforward method where you make fixed monthly payments over the life of the loan. The amount is calculated to ensure the loan is paid off within the agreed-upon term.</p><p><strong>Graduated Repayment Plan:</strong> Payments start lower and increase gradually, typically every two years. This is beneficial for individuals who expect their income to increase over time.</p><p><strong>Income-Driven Repayment Plans:</strong> These plans adjust your monthly payments based on your income and family size. Examples include:</p><ul style="list-style: disc;"><li>Income-Based Repayment (IBR)</li><li>Pay As You Earn (PAYE)</li><li>Revised Pay As You Earn (REPAYE)</li><li>Income-Contingent Repayment (ICR)</li></ul><p><strong>Extended Repayment Plan:</strong> This plan allows you to extend the repayment period beyond the standard term, which can lower your monthly payments.</p><p><strong>Income-Sensitive Repayment Plan:</strong> This is specific to Federal Family Education Loan (FFEL) Program loans. It adjusts your monthly payment based on your annual income.</p><p>&nbsp;</p>
    </div>
    
    </div>
    </div>
    </section>   -->

<!-- <section class="pb-5 jumbotron mb-0 mt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title">
                        <h5 class="mb-2 font-weight-bold text-dark f-17">FAQs</h5>

                        <div class="bar">&nbsp;</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne"><button aria-expanded="false" class="collapsed"
                                    data-target="#collapseOne" data-toggle="collapse" type="button">Q1. How to Apply for
                                    a Personal Loan?</button></div>

                            <div aria-labelledby="headingOne" class="collapse" data-parent="#accordionExample"
                                id="collapseOne" style="">
                                <div class="card-body">
                                    <p>You can apply for the personal by filling out the form given above, You will just
                                        have to enter some of your basic contact details and our representative will get in
                                        touch with you on a call. You can even visit the bank&rsquo;s website or nearest
                                        branch and apply for a personal loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo"><button data-target="#collapseTwo"
                                    data-toggle="collapse" type="button">Q2. What is the minimum interest rate I can get
                                    on a Personal Loan?</button></div>

                            <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample"
                                id="collapseTwo">
                                <div class="card-body table-responsive">
                                    <p>The minimum interest rate offered by MyZeon is 10.25% per annum but make sure you
                                        fulfil all the eligibility criteria asked by MyZeon.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree"><button data-target="#collapseThree"
                                    data-toggle="collapse" type="button">Q3. What is the Maximum Personal Loan I can
                                    borrow?</button></div>

                            <div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample"
                                id="collapseThree">
                                <div class="card-body">
                                    <p>The maximum loan amount you can borrow is up to INR 1 Crore but you must have a high
                                        income and a Cibil Score to get this much amount of loan from us</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour"><button data-target="#collapseFour"
                                    data-toggle="collapse" type="button">Q4. I want a long loan tenure. What is the
                                    maximum loan tenure I can get?</button></div>

                            <div aria-labelledby="headingFour" class="collapse" data-parent="#accordionExample"
                                id="collapseFour">
                                <div class="card-body">
                                    <p>The maximum tenure offered on a personal loan is for 7 years which is 84 months. If
                                        you borrow a loan for a long tenure then it will reduce your EMI but you will have
                                        to pay a high amount of interest on the overall loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive"><button data-target="#collapseFive"
                                    data-toggle="collapse" type="button">Q5. What is a Personal Loan?</button></div>

                            <div aria-labelledby="headingFive" class="collapse" data-parent="#accordionExample"
                                id="collapseFive">
                                <div class="card-body">
                                    <p>A personal loan is an unsecured debt given to an individual having a high Cibil Score
                                        and a high income.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSix"><button data-target="#collapseSix"
                                    data-toggle="collapse" type="button">Q6. Can I apply for a Personal Loan without
                                    ITR?</button></div>

                            <div aria-labelledby="headingSix" class="collapse" data-parent="#accordionExample"
                                id="collapseSix">
                                <div class="card-body">
                                    <p>Yes, you can apply for a personal loan without ITR but you will need to submit other
                                        income documents like Salary Slip or bank statement to get the personal loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeven"><button data-target="#collapseSeven"
                                    data-toggle="collapse" type="button">Q7. Can I apply for two personal loans?</button>
                            </div>

                            <div aria-labelledby="headingSeven" class="collapse" data-parent="#accordionExample"
                                id="collapseSeven">
                                <div class="card-body">
                                    <p>Yes, you can apply for two personal loans at a time but make sure that you have a
                                        limit to apply for another loan over your existing loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEight"><button data-target="#collapseEight"
                                    data-toggle="collapse" type="button">Q8. What is the minimum income needed to apply
                                    for a personal loan?</button></div>

                            <div aria-labelledby="headingEight" class="collapse" data-parent="#accordionExample"
                                id="collapseEight">
                                <div class="card-body">
                                    <p>If you are living in a non-metro city then you will need a minimum salary of INR
                                        15000 per month and you will need a minimum salary of INR 20000 per month if you are
                                        living in a metro city.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingNine"><button data-target="#collapseNine"
                                    data-toggle="collapse" type="button">Q9. Do I have to mortgage anything for the
                                    Personal Loan?</button></div>

                            <div aria-labelledby="headingNine" class="collapse" data-parent="#accordionExample"
                                id="collapseNine">
                                <div class="card-body">
                                    <p>No, you don&rsquo;t have to mortgage anything to apply for a personal loan because
                                        personal loans are unsecured loans and they are offered on the basis of your income
                                        and credit score.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTen"><button data-target="#collapseTen"
                                    data-toggle="collapse" type="button">Q10. Can I Apply for a Personal Loan without
                                    salary slips?</button></div>

                            <div aria-labelledby="headingTen" class="collapse" data-parent="#accordionExample"
                                id="collapseTen">
                                <div class="card-body">
                                    <p>Yes, you can apply for a personal loan without salary slips but you will have to
                                        submit other supporting documents like your bank statement or ITR of the current
                                        year.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingelv"><button data-target="#collapseelv"
                                    data-toggle="collapse" type="button">Q11. What is the minimum Cibil Score Required
                                    for a Personal Loan?</button></div>

                            <div aria-labelledby="headingelv" class="collapse" data-parent="#accordionExample"
                                id="collapseelv">
                                <div class="card-body">
                                    <p>You will need a minimum Cibil Score of 750 and above to get easy approval and quick
                                        disbursal of the personal loan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">Q12. How much loan can I get in a 20K
                                    salary?</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <p>The amount of loan that will be disbursed depends on the lending institution and it
                                        is not fixed. The bank will check your income and credit score before deciding on
                                        the final disbursal amount.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">Q13. What would be the EMI on INR 4 Lakhs loan
                                    for 3 years?</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <p>If we calculate the EMI at an interest rate of 10.25% on INR 4 Lakhs for 3 years then
                                        it will be INR 12,954 per month.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">Q14. Why my Personal Loan Application has been
                                    rejected?</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <p>The main reason for the personal loan application rejection is that you are not
                                        qualifying the eligibility criteria for the personal loan. Either your income is
                                        low, your age is below 21, or you have a Cibil Score of below 750 and that is why
                                        your personal loan application has been rejected.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingtwe"><button data-target="#collapsetwe"
                                    data-toggle="collapse" type="button">15. The bank considers the following things
                                    before disbursing a personal loan:-</button></div>

                            <div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample"
                                id="collapsetwe">
                                <div class="card-body">
                                    <ul>
                                        <li>Age of the Applicant</li>
                                        <li>Documents</li>
                                        <li>Monthly Income</li>
                                        <li>Credit Score</li>
                                        <li>Credit History</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- script section -->


<!-- end -->
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="../dist/jquery-steps.js"></script>

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

<!-- alert -->
<!-- <script>
    $(document).ready(function () {
        // Initialize the step wizard (you may have additional logic)
        $("#demo").stepwizard();

        // Add click event handler for the "Finish" button
        $("#finishBtn").on("click", function () {
            // Show an alert message
            alert("Form submitted successfully!");
        });
    });
</script> -->
<!--  -->
<script>

    function updateLoanTypes() {
        if (this.employmentType === 'salaried') {
            this.loanTypes = ['Professional Loan', 'Business Loan'];
        } else if (this.employmentType === 'businessOwner') {
            this.loanTypes = ['Business Loan'];
        } else if (this.employmentType === 'selfEmployedProfessional') {
            this.loanTypes = ['Professional Loan', 'Business Loan'];
        }
        this.loanType = this.loanTypes[0];
    }
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
    // isFormSubmitted = this.isFormSubmitted
    let isFormSubmitted = false;

    function validateMobileNumber(mobileNoGet) {
        console.log("mobile no:" + mobileNoGet);
        const indianMobileNumberRegex = /^\d{10}$/;
        return indianMobileNumberRegex.test(mobileNoGet);
        //   return indianMobileNumberRegex.test(this.mobileNo);
    }

    function submitForm(event) {
        console.log("submit" + isFormSubmitted);

        if (isFormSubmitted) {
            return; // Prevent form submission if already submitted
        }

        isFormSubmitted = true; // Set submitted flag

        // Validate mobile number
        //   const isValidMobileNumber = this.validateMobileNumber();


        console.log("mobile number sumbit form" + this.mobileNo);

        const isValidMobileNumber = validateMobileNumber(this.mobileNo);

        const isMobileNumberEmpty = this.mobileNo === '';


        if (!isValidMobileNumber || isMobileNumberEmpty) {
            // Prevent form submission if mobile number is invalid or empty
            console.log("not corect");

            this.errorMessage = "Please Enter Valid Phone Number";
            isFormSubmitted = false;
            return;
        }

        // Submit the form data to the server
        console.log("Form submitted with valid Indian mobile number:", this.mobileNo);

        // Increment count and show next template

        this.errorMessage = "Please Enter Valid Phone Number";
        event.preventDefault();
        this.count++;

        isFormSubmitted = false;


        console.log("submit" + this.isFormSubmitted);
    }
</script>

<script>
    function submitFormPoneNo() {

        var termandconditon = this.termandconditon;
        var phoneNO = this.phoneNumber;
        var isValidMobile = this.isValidMobile;



        if (!this.termandconditon) {
            alert('You must agree to the terms and conditions to submit the form.');
            return;
        }

        const regex = /^[6789]\d{9}$/;
        if (regex.test(phoneNO)) {
            this.isValidMobile = true;
        } else {
            this.isValidMobile = false;

        }

        if (termandconditon === true && this.isValidMobile === true) {
            // this.count==1;

            // alert("can move next page");
            this.count == 1;


            // const makeAjaxRequest = async (url, data) => {
            //     try {
            //         const response = await fetch(url, {
            //         method: 'POST',
            //         headers: {
            //             'Content-Type': 'application/json',
            //         },
            //         body: JSON.stringify(data),
            //     });

            //     if (response.ok) {
            //     const

            //     responseBody = await response.json();
            //     console.log('AJAX response:', responseBody);
            //     } else {
            //     console.error('AJAX error:', response.statusText);
            //     }
            //     } catch (error) {
            //     console.error('AJAX error:', error);
            //     }
            // };



        }


    }

    // function validateMobileNumber() {
    // const indianMobileNumberRegex = /^\d{10}$/;
    // return indianMobileNumberRegex.test(this.mobileNo);
    // }
</script>
<script>
    //    function  submitForm() {

    //         console.log("enter here");
    //         if (!this.isValidMobile) {
    //         return; // Prevent form submission if mobile number is invalid
    //         }

    //         console.log("Form submitted with mobile number:", this.mobileNo);
    //     }

    const printMobileNo = () => {
        console.log(this.$data.mobileNo);
    };

    // function validateMobileNumber(mobileNo) {
    //     // Validate the mobile number against an Indian mobile number pattern
    //     const regex = /^[6789]\d{9}$/;
    //     if (regex.test(mobileNo)) {
    //         this.isValidMobile = true;
    //     } else {
    //         this.isValidMobile = false;
    //         errorMessage = 'Not Valid Number Please enter valid number'
    //     }
    //     updateButtonState();
    // }

    function updateButtonState() {
        this.isButtonDisabled = mobileNo.trim() === '' || !isValidMobile;
    }
</script>

<script>
    function ValidateMobileNo() {

        console.log("enter here");


        const form = document.getElementById('myForm');
        // form.submit();


        form.addEventListener('submit', (event) => {

            event.preventDefault(); // Prevent default form submission

            // Perform additional validation or processing here

            // Manually submit the form
            console.log("form sumbit successssaafully");
            // form.submit();

        });

    }

    function checkMobileNoValidation(mobileNoGet) {
        // console.log("go for checking");
        console.log("mobile no" + mobileNoGet.mobileNo);

        var mobileNo = mobileNoGet.mobileNo;

        const regex = /^[6789]\d{9}$/;
        if (regex.test(mobileNo)) {
            this.isValidMobile = true;
        } else {
            this.isValidMobile = false;

        }

        if (isValidMobile === true) {
            console.log('validate number');
        } else {
            console.log("not valid number");

        }

    }


    // window.livewire.on('formSubmitted', () => {
    //     this.submitted = true;
    // });

    // function submitForm() {
    //     // Here, you can send the form data to the server using an API request or perform any other action
    //     // For demonstration, we'll just show the submitted data
    //     // console.log(this.formData);
    //     console.log("ente hre ");
    //     // this.submitted = true;
    // }

    function submitFormPhoneNomber(mobileNo) {

        console.log("phone number submiteed" + mobileNo);

        const regex = /^[6789]\d{9}$/;
        if (regex.test(mobileNo)) {
            this.isValidMobile = true;
        } else {
            this.isValidMobile = false;
            errorMessage = 'Please enter valid number';

        }

        if (isValidMobile === true) {
            console.log('validate number');
        } else {
            console.log("not valid number");

        }


        //   console.log($refs.mobileNo.text?"yes":"no");




        // const form = this.$refs.submitButton.form;
        // const mobileNumber = form.elements.mobileNo.value;
        // console.log("mobileNo:"+mobileNumber);


    }
</script>

<script>

    function submitFormTest() {

        console.log("enter file here");
    }
</script>
@endsection