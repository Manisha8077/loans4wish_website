@extends('front_end_layout.home')
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
    </style>
    <section class="banner-img">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 banner-img"
                    style="background-image: url({{ asset('assets/front_end/asset/img/credit-card.jpg') }});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
                    <h1 class="text-white text-center" style="z-index: 1;">Apply for the Best Credit Card and Check all the
                        Offers</h1>
                    <h5 class="text-white text-center" style="z-index: 1;">Check the striking features of various credit cards
                        offered by different banks. See the prevailing offers on these cards and see how you can save some
                        extra bucks.</h5>
                </div>
                <div class="col-md-8 p-5">
                    <form method="post" enctype="multipart/form-data" action="{{ route('create-credit-loan') }}"
                        id="credit-loan">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="mb-2 font-weight-bold text-dark f-17">Professional Details</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Annual Income <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="₹" name="annual_income">
                                    <p class="text-danger" id="error-annual_income" style="display: none"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Occupation <span class="text-danger">*</span></label>
                                    <select class="form-control" name="employment_status">
                                        <option value="">Please Select</option>
                                        <option value="Salaried">Salaried</option>
                                        <option value="Self Employed Business">Self Employed Business</option>
                                        <option value="Self Employed Professional">Self Employed Professional</option>
                                    </select>
                                    </select>
                                    <p class="text-danger" id="error-employment_status" style="display: none"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group company">
                                    <label>Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Please Mention Company Name"
                                        required name="company_name">
                                    <p class="text-danger" id="error-company_name" style="display: none"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Please Mention City Name"
                                        name="city" id="city">
                                    <p class="text-danger" id="error-city" style="display: none"></p>
                                </div>
                            </div>
                            <div class="row hidediv pl-3 pr-3" id="showdiv" style="">
                                <div class="col-md-12">
                                    <p class="mb-3">
                                        <b>Just fill a few more details to get quote...</b>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <h5 class="mb-3 font-weight-bold text-dark f-17">Personal Details</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Please Mention First Name"
                                            required name="first_name">
                                        <p class="text-danger" id="error-first_name" style="display: none"></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name </label>
                                        <input type="text" class="form-control" placeholder="Please Mention Last Name"
                                            name="last_name">
                                        <p class="text-danger" id="error-last_name" style="display: none"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="Please Mention Mobile Number" required name="mobile_number">
                                        <p class="text-danger" id="error-mobile_number" style="display: none"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>E-Mail ID <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Please Mention E-Mail ID"
                                            required name="email">
                                        <p class="text-danger" id="error-email" style="display: none"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control"
                                            placeholder="Please Mention Date of Birth" name="dob">
                                        <p class="text-danger" id="error-dob" style="display: none"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Credit Card Holder <span class="text-danger">*</span></label>
                                        <br>
                                        <input type="radio" name="credit_card" id="yes" value="Yes">
                                        <label for="yes">Yes</label> &nbsp; <input type="radio" name="credit_card"
                                            id="no" value="No">
                                        <label for="no">NO</label>
                                        <p class="text-danger" id="error-credit_card" style="display: none"></p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Credit Card provided by <span class="text-danger">*</span></label>
                                        <select class="form-control" name="card_provided_by">
                                            <option value="">Please Select Bank</option>
                                            <option value="Axis Bank">Axis Bank</option>
                                            <option value="Citibank">Citibank</option>
                                            <option value="HDFC Bank">HDFC Bank</option>
                                            <option value="ICICI Bank">ICICI Bank</option>
                                            <option value="IDFC Bank">IDFC Bank</option>
                                            <option value="RBL">RBL</option>
                                            <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                            <option value="SBI Card">SBI Card</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <p class="text-danger" id="error-card_provided_by" style="display: none"></p>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group d-flex align-items-baseline">
                                        <input type="checkbox" name="checkbox" class="mr-3"> <label>I authorize
                                            myzeon.com & its partnering banks to contact me to explain the product & I Agree
                                            to Privacy policy and Terms and Conditions.</label>
                                        <p class="text-danger" id="error-checkbox" style="display: none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                <!--<a href="creditcards-continue.php" class="btn btn-primary">Get Quotes</a>-->
                                <!-- <a href="thank-you.php" class="btn btn-primary">Submit</a> -->

                                <button type="button" id="credit-loan-button" class="btn btn-primary">
                                    Submit</button>
                                <div id="success">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title">
                        <h5 class="mb-2 font-weight-bold text-dark f-17">Credit Cards </h5>
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>Check the striking features of various credit cards offered by different banks. See the prevailing
                        offers on these cards and see how you can save some extra bucks.<br>The excitement of landing a new
                        job is exceptional, and you don’t want to spend your first salary. It is a significant milestone in
                        your life that shows the beginning of financial independence and the starting point of a new life.
                        Amongst other things, building a corpus and managing daily expenses begins at this stage. In this
                        article, you'll learn about the credit card benefits you can avail of.
                        Having a credit card has various benefits that help manage expenses and it also lays a foundation
                        for a credit score.</p>
                </div>
            </div>

        </div>
    </section>

    <section class=" pt-5 pb-5 wrp-faq">

        <?php $pages = pages('pages', '5');
        echo $pages->content; ?>

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myselection').on('change', function() {
                var demovalue = $(this).val();
                $("div.myDiv").hide();
                $("#show" + demovalue).show();
            });
        });
    </script>
    <script>
        $("#credit-loan-button").click(function() {

            var formData = new FormData($("#credit-loan")[0]);
            $.ajax({
                method: 'post',
                dataType: 'json',
                url: "{{ route('create-credit-loan') }}",
                processData: false,
                contentType: false,
                data: formData,
                success: function(data) {
                    if (data.success == true) {
                        $(".text-danger").html('').hide();
                        $("#success").html('');
                        $("#success").html(
                            '<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2"><div class="d-flex align-items-center"><div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div><div class="ms-3"><h6 class="mb-0 text-success">' +
                            data.msg +
                            '</h6></div></div><button type="button" class="btn-close" id="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                            );
                        $('#credit-loan')[0].reset();

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

        /*Credit Card loan hide show div code here */
        $(document).ready(function() {
            $(".hidediv").hide();
            $("#city").keypress(function() {
                //alert();
                $("#showdiv").show();
                $("#hidediv").removeClass();
            });
        });
    </script>
@endsection
