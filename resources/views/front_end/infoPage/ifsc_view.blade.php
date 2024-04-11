@extends('front_end_layout.home')
@push('personalLoanStyle')


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
        animation: slideIn 7s ease-in-out;
        padding-top: 1.25rem; /* Adjust as needed */
  margin-bottom: 0.5rem; /* Adjust as needed */
  font-family: 'Josefin Sans', sans-serif;
  text-align: center;
  font-size: 2.1rem; /* Adjust as needed */
  font-weight: bold;
  /* color: #dfaf37; */ 
    }
</style>

    <style>
        .result-container {
            padding: 20px;
            border: 1px solid #ccc;
            margin-top: 20px;
        }
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
            /* background-color: #eee;
                                  color: #444;
                                  cursor: pointer;
                                  padding: 18px;
                                  width: 100%;
                                  border: none;
                                  text-align: left;
                                  outline: none;
                                  font-size: 15px;
                                  transition: 0.4s; */
        }

        .active,
        .accordion:hover {
            /* background-color: #ccc; */
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
        }

        .text-4xl {
            font-size: 2.0rem;
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


    <script>
        function checkIfscCodeValidation(ifscCode) {

            var ifscCodeRegex = /^[A-Z]{4}0[A-Z0-9]{6}$/;

            if (!ifscCodeRegex.test(ifscCode)) {
                return false;
            } else {
                return true;
            }

        }


        $(document).ready(function() {
            $('#searchButton').click(function() {
                var ifscCode = $('#ifscCodeInput').val();

                if (!ifscCode || ifscCode.trim() === '') {
                    alert('Please enter an IFSC code');
                    return false;
                } else {

                    var ifscValid = checkIfscCodeValidation(ifscCode);

                    if (!ifscValid) {
                        alert("Enter Valid Ifsc Code");

                    } else {

                        $("#spinnerLoader").show();

                        $.ajax({
                            url: 'https://ifsc.razorpay.com/' + ifscCode,
                            method: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                console.log('data' + data);
                                var bankName = data.BANK;
                                var branchName = data.BRANCH;
                                var address = data.ADDRESS;
                                var contact = data.CONTACT;

                                var resultHTML = '<div class="result-container">';
                                // resultHTML += '<h2>Bank Details</h2>';
                                resultHTML += '<p>Bank Name: ' + bankName + '</p>';
                                resultHTML += '<p>Branch Name: ' + branchName + '</p>';
                                resultHTML += '<p>Address: ' + address + '</p>';
                                resultHTML += '<p>Contact: ' + contact + '</p>';
                                resultHTML += '</div>';

                                $('#searchResults').html(resultHTML);
                                $("#spinnerLoader").hide();
                            },
                            error: function() {
                                alert('Error fetching IFSC code details');
                            }
                        });

                    }



                }

            });
        });
    </script>
@endpush

@section('content')

    <div class="">

        <img class="card-img" src="{{website_asset_image_webimage_base_url()}}/ifsc_banner.png" alt="Card image"
            width="auto"  />
    </div>


    <section class="">
        <div class="container-fluid mt-4 clearfix">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body-right">
                        <h4 class="card-title eligible slide">What is the IFSC Code?</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
                        <p class="paraFont">
                            IFSC Code is the most crucial component of the Indian Banking System. This code is an integral
                            part of our financial landscape in today’s fast-paced world. You can transfer your money from
                            one corner of the world to another in just a matter of seconds with the IFSC code. But, what
                            does it mean? The full form of the IFSC code is Indian Financial System Code. It is an
                            alphanumeric code that has 11 characters. Reserve Bank of India has the responsibility to assign
                            the IFSC code to uniquely identify every bank branch initiating the National Electronic Funds
                            Transfer (NEFT) and Real Time Gross Settlement (RTGS) systems.

                        </p>
                        
                    </div>
                </div>

            </div>

        </div>

    </section>



    <section class="container-fluid">

        <div class="container-fluid mt-4">
            <h4 class=" eligible slide">Bank IFSC Code Checker </h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <div class="row">
                <div class="col-md-12">

                    <div class="card bg-white">
                        <div class="card-header">

                          
                            <div class="spinner-border" role="status" style="background-color: blue ;display: none;" id="spinnerLoader">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <form class="py-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-1xl">Enter IFSC Code :</label>
                                    <input type="email" class="form-control" id="ifscCodeInput" aria-describedby="ifsc"
                                        placeholder="eg. SBIN0000123">
                                </div>

                                {{-- <button type="button" class="btn btn-primary" id="searchButton">Search</button> --}}
                                <button type="button" class="btn btn-primary hover:bg-blue-500 hover:text-blue"
                                    id="searchButton">Search</button>

                            </form>

                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bank Details</h5>
                            <div id="searchResults" style="color: blue"></div>
                        </div>
                    </div>



                </div>
            </div>

        </div>

    </section>


    <section class="container-fluid">
        <div class="container-fluid mt-4">


            <div>
                <h4 class="eligible slide">IFSC Code : Key Features</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <ul>
                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Helps uniquely identify a specific
                        bank branch
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Helps eliminate errors in the fund
                        transfer process
                    </li>

                    <li class="paraFont">
                        <span style="color: #1338be; font-weight: 600;">&bull;</span> Used for all electronic payment
                        options such as NEFT, RTGS and IMPS
                    </li>

                </ul>
            </div>



        </div>



        <div class="container-fluid mt-4">
            <h4 class="eligible slide">Bank IFSC Code Format:</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <table class="w-full table mt-4 table-dark">

                <tr>

                    <td colspan="4" class="text-center">Code For Bank Name</td>
                    <td>Zero</td>
                    <td colspan="6" class="text-center">Code For Branch Name</td>

                </tr>

                <tr>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>0</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>

                </tr>
                
            </table>
        </div>



    </section>
    <section class="container-fluid">
        <div class="container-fluid mt-4">
            <h4 class="eligible slide">Locate IFSC and MICR Code on a Bank Cheque :</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            <div class="row">
                <div class="col-sm-8">
                   
                    <p class="paraFont">
                        A lot of the above discussions have centered on the common bank cheque. This mainstay of the banking
                        world
                        is an amalgamation of a number of components that help to authenticate whether it is genuine and
                        allow us to
                        attach our complete faith in its applicability.
                    </p><br>
                    <p class="paraFont">The primary components of a typical bank cheque are illustrated as follows:</p>
                    <br>
                    <p class="paraFont"><b>Find IFSC Code in a Bank Cheque:</b></p>

                    <p class="paraFont">On a typical bank cheque, it is mandatory for the IFSC code to be listed. The IFSC
                        code will vary from bank-to-bank. In our example image: we are displaying the location of the IFSC
                        code on a HDFC Cheque.</p>
                </div>
                <div class="col-sm-4">
                    <img src="http://192.168.120.228/myzeon_web/assets/images/web_img/ifsc_cheque_banner.png" alt=""
                        srcset="">
                </div>

            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid mt-4">
            <div>
                <h4 class="eligible slide">Locating Cheque Number:</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    Displayed in a typewritten font at the bottom of the cheque in special font style. This is primarily
                    used for tracking the cheque and for other administrative purposes.
                </p>
            </div>
            <div class="mt-4">
                <h4 class="eligible slide">Find MICR Code in a Bank Cheque:</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    This is displayed next to the cheque number. Both Cheque number and MICR Code are displayed in a unique
                    font and ink, and the latter can only be picked up by a Magnetic Character Ink Reader </p>
            </div>
            <div class="mt-4">
                <h4 class="eligible slide">Necessity of Indian Financial System Code</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    We need an IFSC code because it helps the RBI monitor all banking transactions without any blunders. A
                    simple IFSC code can aid the RBI track, oversee, and seamlessly maintain all financial transactions that
                    are carried out via NEFT, RTGS and IMPS
            </div>

            
        </div>
    </section>
    <section class="container-fluid">
    <div class="mt-4">
        <div class="col-md-12">
                <h4 class="eligible slide">Online money transfer using IFSC Code:</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
                <p class="paraFont">
                    The IFSC code can be used to transfer funds using three electronic fund transfer modes such as NEFT,
                    RTGS and IMPS. These types of electronic fund transfers enable customers to easily transfer funds from
                    one account to another. </p> <br>
                <p class="paraFont">
                    Choosing electronic transferring systems brings down the chances of error in a transaction because fund
                    transfers are only authorised if accurate details such as the payee’s bank specific IFSC code and bank
                    account number are provided. </p>
                <div>

                    <ul>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">NEFT:
                        </li>
                        <p class="paraFont">The full form of NEFT is National Electronic Fund Transfer. As the name
                            specifies, it concerns with the transfer of funds from one bank account onto another. This is a
                            popular money transfer system in India. Herein, IFSC codes must be suitably provided to ensure
                            that money is safely transferred from one bank account to another. Apart from the IFSC code, the
                            beneficiary name, account number and account type are also needed to be provided. All NEFT
                            transactions are settled in a batch-wise format.</p>

                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">RTGS:
                        </li>
                        <p class="paraFont">RTGS is the acronym for Real Time Gross Settlement. As the name suggests, it is
                            a popular option for the quick transfer of funds (also securities) from one bank to another,
                            without subjecting the same to any waiting period. The operative words here are ‘Real Time’
                            (transactions happen instantaneously) and ‘Gross’ (refers to the fact that no extra charges will
                            be levied). IFSC codes act in a similar way as in the case of NEFT- helping to correctly
                            identify the participating bank branches. RTGS fund transfers are usually used for high-value
                            transactions and are cleared immediately. The details required for RTGS fund are the name of the
                            payee, the IFSC code, the account number, and the transaction amount.</p>
                        <li class="eligible">
                            <span style="color: #1338be; font-weight: 600;">IMPS:
                        </li>
                        <p class="paraFont">IMPS, short for Immediate Payment Service, is the most popular. It is a
                            relatively new option in India (founded in November 2010). Through this service, money can be
                            transferred instantly and across all popular Indian banks via the service available on the
                            subscriber’s mobile phone, ATM or through the internet. This system is reputed for being very
                            safe, fast, economical and not restricted in terms of the maximum amount that can be
                            transferred. One cannot initiate an IMPS fund transfer without providing an IFSC code.</p>

                    </ul>

                </div>

            </div>
            </div>
    </section>
    <section class="">


        <div class="accordion mb-4" id="accordionExample">
            <div class="heading-title mt-3 ml-3">
                <h4 class="mb-2 font-weight-bold slide eligible" style="color: #1338be;">FAQs</h4>

                <div class="bar m-auto">&nbsp;</div><br><br>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button  collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            1. How Many Digits Are in the IFSC Code?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1761"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1"
                                role="region" aria-labelledby="elementor-tab-title-1761" style="display: block;">
                                <p>The IFSC code consists of 11 characters in total. These characters are a combination of
                                    both alphabetic letters and numeric digits. The first four characters of the IFSC code
                                    represent the bank, while the fifth character is ‘0’ (zero), reserved for future use.
                                    The final six characters uniquely identify the specific branch of the bank.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            2. How to Find an IFSC Code Using an Account Number?</button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1762"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="2"
                                role="region" aria-labelledby="elementor-tab-title-1762" style="display: block;">
                                <p>Finding an IFSC (Indian Financial System Code) using an account number is not directly
                                    possible. The IFSC code is a unique 11-digit alphanumeric code that helps identify a
                                    specific bank branch in India. It is primarily used for electronic funds transfer like
                                    NEFT, RTGS, and IMPS.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            3. What Happens If I Enter the Incorrect IFSC Code?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1763"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3"
                                role="region" aria-labelledby="elementor-tab-title-1763" style="display: block;">
                                <p>If you enter an incorrect IFSC (Indian Financial System Code) while making a transaction,
                                    several outcomes may occur:</p>
                                <ul>
                                    <li class="eligible">
                                        <span style="color: #1338be; font-weight: 600;">Transaction Rejection:
                                    </li>
                                    <p class="paraFont">The transaction may be rejected. The IFSC code is crucial for
                                        routing funds to the correct bank branch. If the code is incorrect, the transaction
                                        cannot be processed, and the money may not reach the intended recipient.</p>

                                    <li class="eligible">
                                        <span style="color: #1338be; font-weight: 600;">Delay in Processing:
                                    </li>
                                    <p class="paraFont">If the IFSC code is incorrect, it might lead to a delay in
                                        processing your transaction. The bank will have to manually investigate and rectify
                                        the error, which could take some time.</p>
                                    <li class="eligible">
                                        <span style="color: #1338be; font-weight: 600;">Return of Funds:
                                    </li>
                                    <p class="paraFont">In some cases, if the IFSC code corresponds to a valid but
                                        incorrect
                                        branch, the funds may be credited to that branch. However, the branch will then
                                        attempt to reconcile the transaction with the account holder. If they cannot, the
                                        funds will be returned to your account.</p>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingtwe">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetwe" aria-expanded="false" aria-controls="collapsetwe">
                            4. Can two branches use the same IFSC code?
                        </button>
                    </h2>
                    <div id="collapsetwe" class="accordion-collapse collapse" aria-labelledby="headingtwe"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1765"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="5"
                                role="region" aria-labelledby="elementor-tab-title-1765" style="display: block;">
                                <p>No, two branches of different banks cannot use the same IFSC (Indian Financial System
                                    Code) code. Each branch of a bank is assigned a unique IFSC code that helps in the
                                    identification and routing of transactions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingthir">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsethir" aria-expanded="false" aria-controls="collapsethir">
                            5. Can Money Be Returned If Paid into the Wrong Account?
                        </button>
                    </h2>
                    <div id="collapsethir" class="accordion-collapse collapse" aria-labelledby="headingthir"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1765"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="5"
                                role="region" aria-labelledby="elementor-tab-title-1765" style="display: block;">
                                <p>Yes, it is possible to recover money if it has been paid into the wrong account. However,
                                    the process may vary depending on the circumstances and the policies of the involved
                                    financial institutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfourt">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefourt" aria-expanded="false" aria-controls="collapsefourt">
                            6. How Can I Check My Bank Balance Using My Account Number and IFSC Code?

                        </button>
                    </h2>
                    <div id="collapsefourt" class="accordion-collapse collapse" aria-labelledby="headingfourt"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1766"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="6"
                                role="region" aria-labelledby="elementor-tab-title-1766" style="display: block;">
                                <p>Checking your bank balance using your account number and IFSC (Indian Financial System
                                    Code) code can be convenient, especially when you don’t have access to your physical
                                    bank statement or don’t want to visit the bank in person. Here’s a step-by-step guide on
                                    how to do it:</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfift">
                        <button class="accordion-button collapsed paraFont" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefift" aria-expanded="false" aria-controls="collapsefourt">
                            7. Why Do Secure Online Payments Require an Indian Financial System Code?

                        </button>
                    </h2>
                    <div id="collapsefift" class="accordion-collapse collapse" aria-labelledby="headingfift"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="elementor-tab-content-1766"
                                class="elementor-tab-content elementor-clearfix elementor-active" data-tab="7"
                                role="region" aria-labelledby="elementor-tab-title-1766" style="display: block;">
                                <p>Secure online payments in India require an Indian Financial System Code (IFSC) for
                                    several important reasons:</p>
                                <ul>
                                    <li class="eligible">
                                        <span style="color: #1338be; font-weight: 600;">Identification of Bank and Branch:
                                    </li>
                                    <p class="paraFont">The IFSC is a unique alphanumeric code that helps identify a
                                        specific bank and its branch in India. Given the vast number of banks and branches
                                        across the country, the IFSC system ensures accuracy in routing payments to the
                                        correct destination. This is crucial to prevent payment errors and ensure funds
                                        reach the intended recipient.</p>

                                    <li class="eligible">
                                        <span style="color: #1338be; font-weight: 600;">NEFT and RTGS Transactions:
                                    </li>
                                    <p class="paraFont">The Reserve Bank of India (RBI) mandates the use of IFSC codes for
                                        electronic funds transfer systems like National Electronic Funds Transfer (NEFT) and
                                        Real-Time Gross Settlement (RTGS). These systems enable secure, quick, and efficient
                                        transfer of funds between different banks and their branches. The IFSC ensures that
                                        transactions are processed accurately and promptly.</p>
                                    <li class="eligible">
                                        <span style="color: #1338be; font-weight: 600;">UPI and Mobile Banking:
                                    </li>
                                    <p class="paraFont">In the era of digital payments, the Unified Payments Interface
                                        (UPI)
                                        has gained widespread popularity in India. IFSC codes play a vital role here as
                                        well. While transferring funds through UPI or mobile banking apps, users often link
                                        their bank accounts by entering the bank’s name and IFSC code. This ensures that
                                        money is routed to the correct account.</p>
                                    <li class="eligible">
                                        E-commerce and Bill Payments:
                                    </li>
                                    <p class="paraFont">When making online purchases or paying bills through websites and
                                        apps, consumers may be required to enter their bank account details, including the
                                        IFSC code, to complete the transaction securely. This information ensures that
                                        payments are accurately credited to the seller or service provider.</p>

                                    <li class="eligible">
                                        Preventing Fraud and Errors:
                                    </li>
                                    <p class="paraFont">The use of IFSC codes helps prevent fraudulent transactions and
                                        errors in fund transfers. Verifying the IFSC code ensures that the recipient’s bank
                                        account is legitimate, reducing the risk of sending money to the wrong account.</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
