@extends('front_end_layout.home')
@section('content')

<!-- <section class="mainslider" >
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner outerBannerDiv" >
           
                
                        

                        <div class="" data-animation-in="" data-animation-out="">
                            <a href="{{website_base_url() }}/contact-us" class="btn btn-primary " id="apply-now">Apply
                                Now</a>
                            <a href="{{website_base_url() }}/contact" class="btn btn-primary " id="contact-us">Contact Us</a>
                        </div>


                    


                </div>
           
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev" style="left: 0;">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #0531cf;
            color: #ffd765;"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next" style="right: 0;">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #0531cf;
            color: #ffd765;"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




</section> -->

<section class="loan-calculator-page section-padding pt-5 " id="calculator-emi">
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="section-title text-center">
                    <h4 class="slide eligible">LOAN CALCULATOR</h4>
                    <div class="bar m-auto">&nbsp;</div><br><br>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <article class="post-7 page type-page status-publish hentry w-100">


                        <div class=calculatorcontainer>
                            <div class=emicalculatorcontainer>
                                <div id=loanformcontainer class=row>

                                    <div id=emicalculatordashboard class=col-md-8>

                                        <ul class="loanproduct-nav ">
                                            <li id="home-loan" class="nav-item active">
                                                <a href="#" class="nav-link">Home Loan</a>
                                            </li>
                                            <li id="personal-loan" class="nav-item active">
                                                <a href="#" class="nav-link"
                                                    style="white-space:no-wrap;">Personal Loan</a>
                                            </li>
                                            <li id="car-loan" class="nav-item active">
                                                <a href="#" class="nav-link">Car Loan</a>
                                            </li>
                                        </ul>

                                        <!-- <ul class="navbar-nav">
                                                <li id=home-loan class="nav-item active" >
                                                    <a href="#" class="nav-link">Home Loan</a>
                                                </li>
                                                <li id=personal-loan class="nav-item active" >
                                                    <a href="#" class="nav-link" style="white-space:no-wrap;">Personal Loan</a>
                                                </li>
                                                <li id=car-loan class="nav-item active" >
                                                    <a href="#"  class="nav-link">Car Loan</a>
                                                </li>
                                            </ul> -->
                                        <div class=cleardiv></div>
                                        <div id=emicalculatorinnerformwrapper>

                                            <form id=emicalculatorform>
                                                <div class=form-horizontal id=emicalculatorinnerform style="color: #1338BE;">
                                                    <div class="row form-group lamount">
                                                        <label class="col-md-12 control-label" for=loanamount>Home Loan
                                                            Amount</label>
                                                        <div class=col-md-12>
                                                            <div class=input-group>
                                                                <input class=form-control id=loanamount name=loanamount
                                                                    value=25,00,000 type=text>
                                                                <div class=input-group-append>
                                                                    <span class=input-group-text>₹</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id=loanamountslider></div>
                                                    <div id=loanamountsteps class=steps>
                                                        <span class=tick style="left: 0%;">| <br>
                                                            <span class=marker>0</span>
                                                        </span>
                                                        <span class="tick d-none d-sm-block" style="left: 12.5%;">|
                                                            <br>
                                                            <span class=marker>25L</span>
                                                        </span>
                                                        <span class=tick style="left: 25%;">| <br>
                                                            <span class=marker>50L</span>
                                                        </span>
                                                        <span class="tick d-none d-sm-block" style="left: 37.5%;">|
                                                            <br>
                                                            <span class=marker>75L</span>
                                                        </span>
                                                        <span class=tick style="left: 50%;">| <br>
                                                            <span class=marker>100L</span>
                                                        </span>
                                                        <span class="tick d-none d-sm-block" style="left: 62.5%;">|
                                                            <br>
                                                            <span class=marker>125L</span>
                                                        </span>
                                                        <span class=tick style="left: 75%;">| <br>
                                                            <span class=marker>150L</span>
                                                        </span>
                                                        <span class="tick d-none d-sm-block" style="left: 87.5%;">|
                                                            <br>
                                                            <span class=marker>175L</span>
                                                        </span>
                                                        <span class=tick style="left: 100%;">| <br>
                                                            <span class=marker>200L</span>
                                                        </span>
                                                    </div>
                                                    <div class="sep row form-group lint">
                                                        <label class="col-lg-4 control-label" for=loaninterest>Interest
                                                            Rate</label>
                                                        <div class=col-lg-6>
                                                            <div class=input-group>
                                                                <input class=form-control id=loaninterest
                                                                    name=loaninterest value=10.5 type=text>
                                                                <div class=input-group-append>
                                                                    <span class=input-group-text>%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id=loaninterestslider></div>
                                                    <div id=loanintereststeps class=steps>
                                                        <span class=tick style="left: 0%;">| <br>
                                                            <span class=marker>5</span>
                                                        </span>
                                                        <span class=tick style="left: 16.67%;">| <br>
                                                            <span class=marker>7.5</span>
                                                        </span>
                                                        <span class=tick style="left: 33.34%;">| <br>
                                                            <span class=marker>10</span>
                                                        </span>
                                                        <span class=tick style="left: 50%;">| <br>
                                                            <span class=marker>12.5</span>
                                                        </span>
                                                        <span class=tick style="left: 66.67%;">| <br>
                                                            <span class=marker>15</span>
                                                        </span>
                                                        <span class=tick style="left: 83.34%;">| <br>
                                                            <span class=marker>17.5</span>
                                                        </span>
                                                        <span class=tick style="left: 100%;">| <br>
                                                            <span class=marker>20</span>
                                                        </span>
                                                    </div>
                                                    <div class="sep row form-group lterm">
                                                        <label class="col-lg-4 control-label" for=loanterm>Loan
                                                            Tenure</label>
                                                        <div class=col-lg-6>
                                                            <div class=loantermwrapper>
                                                                <div class=input-group>
                                                                    <input class=form-control id=loanterm name=loanterm
                                                                        value=20 type=text>
                                                                    <div class="input-group-append tenure-choice"
                                                                        data-toggle=buttons>
                                                                        <div class="btn-group btn-group-toggle"
                                                                            data-toggle=buttons>
                                                                            <label class="btn btn-secondary active">
                                                                                <input type=radio name=loantenure
                                                                                    id=loanyears value=loanyears
                                                                                    tabindex=4 autocomplete=off
                                                                                    checked=checked>Yr </label>
                                                                            <label class="btn btn-secondary">
                                                                                <input type=radio name=loantenure
                                                                                    id=loanmonths value=loanmonths
                                                                                    tabindex=5 autocomplete=off>Mo
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id=loantermslider></div>
                                                    <div id=loantermsteps class=steps>
                                                        <span class=tick style="left: 0%;">| <br>
                                                            <span class=marker>0</span>
                                                        </span>
                                                        <span class=tick style="left: 16.67%;">| <br>
                                                            <span class=marker>5</span>
                                                        </span>
                                                        <span class=tick style="left: 33.33%;">| <br>
                                                            <span class=marker>10</span>
                                                        </span>
                                                        <span class=tick style="left: 50%;">| <br>
                                                            <span class=marker>15</span>
                                                        </span>
                                                        <span class=tick style="left: 66.67%;">| <br>
                                                            <span class=marker>20</span>
                                                        </span>
                                                        <span class=tick style="left: 83.33%;">| <br>
                                                            <span class=marker>25</span>
                                                        </span>
                                                        <span class=tick style="left: 100%;">| <br>
                                                            <span class=marker>30</span>
                                                        </span>
                                                    </div>
                                                    <div id=leschemewrapper class="sep toggle-visible" style="display: none;">
                                                        <div class="sep row form-group escheme">
                                                            <label class="col-lg-4 control-label" for=emischeme>EMI
                                                                Scheme</label>
                                                            <div class=col-lg-8>
                                                                <div class="input-group emischemes">
                                                                    <div class="btn-group btn-group-toggle add-check"
                                                                        data-toggle=buttons>
                                                                        <label class="btn btn-secondary">
                                                                            <input type=radio name=emischeme
                                                                                id=emiadvance value=emiadvance
                                                                                tabindex=4 autocomplete=off>EMI
                                                                            in Advance </label>
                                                                        <label class="btn btn-secondary active">
                                                                            <input type=radio name=emischeme
                                                                                id=emiarrears value=emiarrears
                                                                                tabindex=5 autocomplete=off
                                                                                checked=checked>EMI in Arrears </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input id=loanproduct name=loanproduct value type=hidden>
                                                <input id=loanstartdate name=loanstartdate value type=hidden>
                                                <input id=loanyearformat name=loanyearformat value type=hidden>
                                                <input id=loandata name=loandata value type=hidden>
                                                <input id=calcversion name=calcversion value=4.0 type=hidden>
                                            </form>


                                        </div>
                                    </div>
                                    <div class="sidebar col-md-4">

                                        <div id=emipaymentsummary class="no-gutter-left no-gutter-right">
                                            <div id=emiamount>
                                                <h4>Loan EMI</h4>
                                                <p>₹ <span>24,959</span>
                                                </p>
                                            </div>
                                            <div id=emitotalinterest>
                                                <h4>Total Interest Payable</h4>
                                                <p>₹ <span>34,90,279</span>
                                                </p>
                                            </div>
                                            <div id=emitotalamount class=column-last>
                                                <h4>Total Payment <br>(Principal + Interest) </h4>
                                                <p>₹ <span>59,90,279</span>
                                                </p>
                                            </div>
                                        </div>

                                        <div id=emipiechart
                                            class="no-gutter-left no-gutter-right highcharts-container d-none">
                                        </div>


                                    </div>

                                </div>

                                <div id="emipaymentdetails" class="d-none">
                                    <form class="gutter-left gutter-right form-horizontal">

                                    </form>
                                    <div id="emibarchart" class="hidden-ts highcharts-container"></div>

                                </div>
                            </div>
                        </div>

                    </article>

                </div>
                <div class="section-title text-center col-md-6" >
                    <h4 style="color: #1338BE;  text-align: justify; text-align: center; " class="eligible slide">EMI
                        CALCULATOR</h4>
                    <hr class="custom-divider">
                    <p style="color: black; text-align: justify;font-weight: 600; ">EMI calculator is a financial tool
                        to help you calculate your loan EMIs in advance. Fill out the desired loan term, tenure, and
                        interest rate to calculate your EMI in just a click.
                    </p>

                    <!-- <h2 style="color: black; text-align: center;margin-top: 94px;"><b>EMI Calculator</b></h2> -->
                    <div class="section-title text-center">
                        <h3 style="color: #ffd756; text-align: justify; padding: 2px; text-align: center; font-size: 25px;"><b>Personal
                                Loan EMI
                                Calculator</b></h3>
                        <p style="color: black; text-align: justify;font-weight: 600; ">Have you ever found yourself in
                            a tough spot due to an unexpected financial crisis? Use a personal loan calculator to get
                            the exact monthly payments of a personal loan.
                        </p>
                    </div>
                    <div class="section-title text-center">
                        <h4 style="color: #ffd756; text-align: justify;padding: 2px; text-align: center; font-size: 25px;"><b>Car Loan
                                EMI Calculator</b>
                        </h4>
                        <p style="color: black; text-align: justify;font-weight: 600;">Want your dream car but don't
                            know how to do financial planning for it? Use the car loan EMI calculator to get accurate
                            monthly payments for a car loan.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<!-- why choose us by mannu -->
    <section class="container-fluid " style="color: #1338be;">
        <div class="row justify-content-center" style="overflow-y: hidden;">
            <div class="col-12 text-center" style="overflow-y: hidden;">
                <h4 class="custom-section-title slide eligible">WHY CHOOSE US</h4>
                <div class="bar m-auto">&nbsp;</div><br><br>
            </div>
        </div>
    </section>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Left Elements -->
            <div class="col-md-4">

                <div class="card text-center custom-card">
                    <i class="fa-solid fa-indian-rupee-sign" style="font-size: 48px; margin-top: 20px;"></i>
                    
                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Quick Loan Disbursal</h3>
                    </div>
                </div>
                <br>
                <div class="card text-center custom-card">
                    <i class="fas fa-university card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Tie-up with 25+ banks and NBFCS
                        </h3>
                    </div>
                </div>
                <br>
                <div class="card text-center custom-card">
                    <i aria-hidden="true" class="fab fa-digital-ocean card-icon custom-icon"
                        style="font-size: 48px; margin-top: 20px;"></i>
                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Digital Loan Disbursal 100%</h3>
                    </div>
                </div>
                <br>
            </div>


            <div class="col-md-4 d-flex justify-content-center">
                <!-- why1.png -->
                <img src="http://192.168.120.228/myzeon_web/assets/images/web_img/new.svg" alt="Your Image"
                    class="img-fluid">
                <br>
                <!-- <div style="text-align: center;">
              <button type="button" class="btn btn-warning"><b>Get Started</b></button>
            </div> -->

            </div>
            <div class="col-md-4">

                <div class="p">
                    <div class="card text-center custom-card">
                        <i class="bi bi-credit-card card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                        <div class="card-body custom-card-body">
                            <h3 class="card-title custom-card-title" style="color: #1338BE;">Check Your Credit Score</h3>
                        </div>
                    </div>
                </div>
                <br>

                <div class="p">
                    <div class="card text-center custom-card">
                        <i class="bi bi-person card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                        <div class="card-body custom-card-body">
                            <h3 class="card-title custom-card-title" style="color: #1338BE;">Friendly Customer Service
                            </h3>
                        </div>
                    </div>
                </div>
                <br>

                <div class="p">
                    <div class="card text-center custom-card">
                        <i class="bi bi-file-earmark-arrow-up card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                        <div class="card-body custom-card-body">
                            <h3 class="card-title custom-card-title" style="color: #1338BE;">Contactless Document
                                Submission</h3>
                        </div>
                    </div>
                </div>
                <br>

            </div>

        </div>





        <!--why choose end-->

        <section class="loan-calculator-page section-padding d-none">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 loan-slider-box">
                        <div class="single-loan-slider">
                            <h4>Home Loan Amount</h4>
                            <div id="pricipal-slide"></div>
                            <div>
                                <span>$</span>
                                <h6 id="pricipal"></h6>
                            </div>
                        </div>
                        <div class="single-loan-slider">
                            <h4>Loan Months</h4>
                            <div id="totalyear-slide"></div>
                            <div>
                                <h6 id="totalyear"></h6>
                                <span>Months</span>
                            </div>
                        </div>
                        <div class="single-loan-slider">
                            <h4>Interest Rate</h4>
                            <div id="intrest-slide"></div>
                            <div>
                                <h6 id="intrest"></h6>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center loan-emi">
                        <div class="total-calculation">
                            <div class="single-total">
                                <h5>Loan EMI</h5>
                                <h2 class="emi-price" id="emi">0</h2>
                            </div>
                            <div class="single-total">
                                <h5>Total Interest Payable</h5>
                                <h2 id="tbl_emi">0</h2>
                            </div>
                            <div class="single-total">
                                <h5>Total Payment
                                    <br>(Principal + Interest)
                                </h5>
                                <h2 id="tbl_la">0</h2>
                            </div>
                            <button class="btn applybtn btn-default btn-sm">APPLY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <!-- .start loan process second -->
        <section class="second-loan-process section-padding mt-4 jumbotron" style="background-color: white;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h4 class="eligible slide">SIMPLE LOAN PROCESS</h4>
                            <div class="bar m-auto">&nbsp;</div><br><br>

                        </div>
                    </div>
                </div>
                <div class="row process-list">
                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Choose Amount</h4>
                            <div class="icon">
                                <!-- Indian Rupee symbol -->
                                ₹
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Provide Document</h4>
                            <div class="icon">
                                <!-- Change the document icon -->
                                <i class="far fa-file-alt" style="font-size: 30px;color: #ffd756"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Approved Loan</h4>
                            <div class="icon">
                                <!-- Change the handshake icon -->
                                <i class="fas fa-thumbs-up" style="font-size: 30px; color: #ffd756;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Get your Money</h4>
                            <div class="icon">
                                <!-- Change the money icon -->
                                <i class="fas fa-money-bill-wave" style="font-size: 30px;color: #ffd756;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-section section-padding d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2> Cards & Loans</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-featured">
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/icon-1.png') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Personal Loan</h4>
                                <p>Pеrѕоnаl loan is unѕе�?urеd wіth fіxеd рауmеntѕ.</p>
                                <div class="ap-btn">
                                    <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                    <a class="" href="#">READ MORE <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-featured">
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/car.png') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Car Loan</h4>
                                <p>Cаr loan is most popular kіnd оf installment lоаn.</p>
                                <div class="ap-btn">
                                    <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                    <a class="" href="#">READ MORE <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-featured">
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/money.png') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Business Loan</h4>
                                <p>You nееd a loan tо new business expand еxіѕtіng.</p>
                                <div class="ap-btn">
                                    <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                    <a class="" href="#">READ MORE <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-featured">
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/home.png') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Home Loan</h4>
                                <p>Buуіng a hоmе is оnе of the bіggеѕt dе�?іѕіоn еvеr make.</p>
                                <div class="ap-btn">
                                    <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                    <a class="" href="#">READ MORE <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-featured">
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/card.png') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Credit Card Loan</h4>
                                <p>Student get more benifit compare to businesss loan.</p>
                                <div class="ap-btn">
                                    <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                    <a class="" href="#">READ MORE <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-featured">
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/home.png') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Loan Against Property</h4>
                                <p>Customer need only pay per day interest on loan.</p>
                                <div class="ap-btn">
                                    <a href="#">Apply <i class="fa fa-angle-double-right"></i></a>
                                    <a class="" href="#">READ MORE <i
                                            class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->
        <!-- start get consultation section -->
        <section class="get-consultation-section section-padding">

            <div class="header-bottom-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-3">
                            <div class="single-header-bottom">
                                <div class="icon">
                                    <img src="{{ asset('assets/front_end/asset/img/clock.png') }}" alt="" />
                                </div>
                                <div class="content">
                                    <p>Quick & Easy Loan
                                        <br> Approvals
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-3">
                            <div class="single-header-bottom">
                                <div class="icon">
                                    <img src="{{ asset('assets/front_end/asset/img/user.png') }}" alt="" />
                                </div>
                                <div class="content">
                                    <p>5,000K Customers
                                        <br> Satisfied
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-header-bottom">
                                <div class="icon">
                                    <img src="{{ asset('assets/front_end/asset/img/camera.png') }}" alt="" />
                                </div>
                                <div class="content">
                                    <p>No Prepayment or
                                        <br> Hidden Fees
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-header-bottom">
                                <div class="icon">
                                    <img src="{{ asset('assets/front_end/asset/img/map-pin-2.png') }}" alt="" />
                                </div>
                                <div class="content">
                                    <p>200 branches all <br>
                                        over world</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- add slider by mannu -->
        <!--  -->

        <div class="row mb-3">
            <div>
                <h4 class="eligible slide"><b>LATEST BLOG</b></h4>
                <hr class="custom-divider">
            </div>

            <div class="col-sm-3">
                <div class="card card-block">
                    <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                        src="http://192.168.120.228/myzeon_web/assets/images/web_img/Loan_emi.png"
                        data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    <div class="card-block">
                        <h5 class="card-title heading-card mt-2"><a
                                href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates">How
                                To Calculate Your Business Loan EMI At Lower Rates?</a></h5>
                        <p class="card-text paraFont"> Are you looking for a business loan? </p>
                        <div class="blogBtn"><a
                                href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates"
                                class="btn btn-primary">Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-block">
                    <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                        src="http://192.168.120.228/myzeon_web/assets/images/web_img/apply_for.png"
                        data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    <div class="card-block">
                        <h5 class="card-title heading-card mt-2"><a
                                href="https://www.myzeon.com/blog/how-to-apply-for-personal-loan-online-in-5-easy-steps">How
                                To Apply For Personal Loan Online In 5 Easy Steps?</a></h5>
                        <p class="card-text paraFont">Are you looking to apply for a personal loan? </p>
                        <div class="blogBtn"><a
                                href="https://www.myzeon.com/blog/how-to-apply-for-personal-loan-online-in-5-easy-steps"
                                class="btn btn-primary">Read More</a></div>
                    </div>


                </div>


            </div>

            <div class="col-sm-3">
                <div class="card card-block">
                    <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                        src="http://192.168.120.228/myzeon_web/assets/images/web_img/documents_require.png"
                        data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    <div class="card-block">
                        <h5 class="card-title heading-card mt-2"><a
                                href="https://www.myzeon.com/blog/apply-for-business-loan-documents-you-need-for-business-loan">Apply
                                for Business Loan: Documents You Need for Business Loan</a></h5>
                        <p class="card-text paraFont">Are you looking for a business loan? </p>
                        <div class="blogBtn"><a
                                href="https://www.myzeon.com/blog/apply-for-business-loan-documents-you-need-for-business-loan"
                                class="btn btn-primary">Read More</a></div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="card card-block">
                    <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                        src="http://192.168.120.228/myzeon_web/assets/images/web_img/calculate_cibil.png"
                        data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    <div class="card-block">
                        <h5 class="card-title heading-card mt-2"><a
                                href="https://www.myzeon.com/blog/how-to-calculate-cibil-score-for-free">How
                                to Calculate CIBIL Score for Free?</a></h5><br>
                        <p class="card-text paraFont">Are you aware of what a CIBIL score is? </p>
                        <div class="blogBtn"><a href="https://www.myzeon.com/blog/how-to-calculate-cibil-score-for-free"
                                class="btn btn-primary">Read More</a></div>
                    </div>
                </div>
            </div>





        </div>

       




        <!-- Add slider by mannu -->

        
        <!-- Add slider by mannu -->
        <section class="pt-5 mt-4 mb-4 bg-light our-partner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4 class="mb-2 eligible slide">OUR PARTNERS</h4>
                            <p class=""><b>There's more than one reason to sign up with confidence</b></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank.png') }}"></div>
                            <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank1.png') }}"></div>
                            <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank2.png') }}"></div>
                            <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank3.png') }}"></div>
                            <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank4.png') }}"></div>
                        </div>
                    </div>
                </div>
        </section>

   
    
    <!-- change by mannu -->
   
    <!-- popup -->


    <!-- First Modal -->
    <!-- First Modal -->
   

   
  


@endsection