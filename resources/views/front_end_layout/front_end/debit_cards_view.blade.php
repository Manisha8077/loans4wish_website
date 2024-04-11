@extends('front_end_layout.personal_loan_header')

@push('debitCardStyle')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: none;
        }


        .creditCardBannerImage {
            width: 100%;
            height: 80vh;
            background-repeat: no-repeat;
            object-fit: fill;

        }
    </style>
@endpush


@section('content')
    <div class="clearfix">.</div>


    <section id="CreditCardMainBannr">
        <div class="jumbotron creditCardBannerImage img-center mx-auto img-fluid"
            style="background-image: url('{{ asset('assets/front_end/asset/img/bankLogo/credit_card_image.png') }}')">

            <p class="lead">Apply for the Best Credit Card
                and Check all the Offers</p>
            <hr class="my-4">

            {{-- <img src="{{ asset('assets/front_end/asset/img/bankLogo/credit_card_image.png') }}" alt="Apply Now" class="w-64 h-64 mb-4"> --}}

        </div>

    </section>


    <section>


        <div class="jumbotron">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <h1>Debit Cards</h1>
                        <p>
                            A debit card is plastic cash that banks issue, and one can use it to purchase things. You can
                            use a debit card at merchant outlets and can use it at ATMs to access cash. The debit card helps
                            you withdraw money from your bank account. For many people, a debit card is a convenient option
                            to carry out day-to-day expenditures. Know about the different types of debit cards in India,
                            how to apply for a debit card online, and how to get a debit card. You can check how a debit
                            card is different from a Credit Card and understand the features of both of them.


                        </p>

                    </div>
                    <div class="col-md-6">

                        <h2>Professional Detail</h2>

                        <form>

                            <div class="form-group">
                                <label for="InputAnnualIncome">Annual Income</label>
                                <input type="type" class="form-control" id="creditAnnualIncome"
                                    aria-describedby="emailHelp">

                            </div>

                            <div class="form-group">
                                <label for="creditSelectOccupation">Occupation</label>
                                <select class="form-control" id="creditSelectOccupation">
                                    <option>Salaried</option>
                                    <option>Self Employed Business</option>
                                    <option>Self Employed Professional</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="creditInputCompanyName">Company Name</label>
                                <input type="text" class="form-control" id="creditInputCompanyName"
                                    aria-describedby="emailHelp">

                            </div>

                            <div class="form-group">
                                <label for="creditInputCity">Company Name</label>
                                <input type="text" class="form-control" id="creditInputCity"
                                    aria-describedby="emailHelp">

                            </div>

                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                            <button type="button" class="btn btn-primary" onclick="SubmitformDebitCard()">Submit</button>

                        </form>


                    </div>
                </div>

            </div>

        </div>

    </section>


    <section>


        <div class="jumbotron">
            <h3>Types of Debit Cards</h3>

            <p>
                You’ve different types of debit card options and you can easily apply for them. Check them out below :
            </p>



            <div class="accordion" id="accordionExample">
                <div class="card">

                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How Can Debit Cards & Credit Cards Differ from Each Other?
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">

                            With a debit card, you can spend money from your own bank account; but, with a credit card, your
                            bank provides you credit, which you must pay back with interest at a later time.
                        </div>
                    </div>
                </div>

                <div class="card">



                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How Do I Get a Debit Card?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">

                            It commonly comes with the bank’s account opening kit. You can phone the bank’s customer service
                            line or go to a branch to get a debit card if you didn’t get one when you opened a bank account
                            or if you have an older account that was opened before debit cards were available.


                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is a Personal Identification Number (PIN)?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            It is a four-digit personal identification number that gives you access to your money and allows
                            you to use your ATM for any transaction (drawing, balance inquiry, mini-statement, etc.). It’s
                            necessary that you maintain your PIN private and secure and avoid sharing it to others. The PIN
                            should never be written on the back of a debit card.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#faqFour" aria-expanded="false" aria-controls="collapseThree">
                                What Should You Do If You Forget Your Pin or Not Working?

                            </button>
                        </h2>
                    </div>
                    <div id="faqFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            A new debit card PIN can be created online through net banking or by visiting to an ATM of a
                            bank. A new PIN number will be issued to your registered mobile phone when you enter your debit
                            card number and the CVV number printed on the back of your card.
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#faqFive" aria-expanded="false"
                                aria-controls="collapseThree">
                                What Should You Do If Your Debit Card Is Lost?
                            </button>
                        </h2>
                    </div>
                    <div id="faqFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                If your card is lost, call the bank’s customer service line right away to report the loss.
                                Following your responses to some inquiries from customer service, the card will be blocked.
                                You must also notify the closest police station of the loss. Send the bank a copy of the
                                information that the police have duly verified.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#faqSix" aria-expanded="false"
                                aria-controls="collapseThree">
                                Are There Any Fees Related with Using a Debit Card for a Purchase at an Atm Owned by a
                                Different Bank?
                            </button>
                        </h2>
                    </div>
                    <div id="faqSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                The transaction fees associated with using an ATM belonging to a different bank differ each
                                card. The first five debit card transactions at an ATM of another bank per month are often
                                free. However, every transaction made at an ATM owned by another bank after this cap is
                                charged a cost of Rs 20.
                            </p>

                        </div>
                    </div>
                </div>



            </div>

        </div>

    </section>
@endsection


@push('debitCardScript')

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>



    <script>
        
        function SubmitformDebitCard() {


            // Validate annual income
            var annualIncome = $("#creditAnnualIncome").val();
            if (!validateAnnualIncome(annualIncome)) {
                return false;
            }

            // Validate occupation
            var occupation = $("#creditSelectOccupation").val();
            if (!validateOccupation(occupation)) {
                return false;
            }

            // Validate company name
            var companyName = $("#creditInputCompanyName").val();
            if (!validateCompanyName(companyName)) {
                return false;
            }

            // Validate city
            var city = $("#creditInputCity").val();
            if (!validateCity(city)) {
                return false;
            }

            // If all validations pass, prepare AJAX request data
            var formData = {
                annual_income: annualIncome,
                occupation: occupation,
                company_name: companyName,
                city: city,
            };


            // Submit data using AJAX
            $.ajax({

                url: "{{ route('submitDebitCardData') }}", // Replace with your actual route
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Handle successful response
                    console.log("Data submitted successfully:", response);
                    // Clear form fields
                    $("#creditAnnualIncome").val('');
                    $("#creditSelectOccupation").val('');
                    $("#creditInputCompanyName").val('');
                    $("#creditInputCity").val('');

                    // Show success message
                    $("#formSubmit").append(
                        '<div class="alert alert-success">Data submitted successfully!</div>');
                },
                error: function(error) {
                    // Handle error response
                    console.error("Error submitting data:", error);
                    // Show error message
                    $("#formSubmit").append(
                        '<div class="alert alert-danger">Error submitting data!</div>');
                }

            });


        }


        $(document).ready(function(event) {
            event.preventDefault();

            console.log("enter here");
        });
    </script>


    <script>
        function validateAnnualIncome(annualIncome) {
            if (!annualIncome) {
                // Show error message for annual income
                return false;
            }

            // Validate annual income format and value
            if (!/^[0-9]+$/.test(annualIncome) || annualIncome < 0) {
                // Show error message for invalid annual income
                return false;
            }

            return true;
        }

        function validateOccupation(occupation) {
            if (!occupation) {
                // Show error message for occupation
                return false;
            }

            // Validate occupation selection
            if (!["Salaried", "Self Employed Business", "Self Employed Professional"].includes(occupation)) {
                // Show error message for invalid occupation
                return false;
            }

            return true;
        }

        function validateCompanyName(companyName) {
            if (!companyName) {
                // Show error message for company name
                return false;
            }

            // Validate company name format
            if (!/[a-zA-Z0-9 ]+/.test(companyName)) {
                // Show error message for invalid company name
                return false;
            }

            return true;
        }

        function validateCity(city) {
            if (!city) {
                // Show error message for city
                return false;
            }

            // Validate city name format
            if (!/[a-zA-Z ]+/.test(city)) {
                // Show error message for invalid city
                return false;
            }

            return true;
        }
    </script>
@endpush
