@extends('front_end.HeaderFile.home')

@push('indexPageStyle')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}" type="text/css" media="all" />


<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/reset.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/style.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/responsive.css') }}" />




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



@endpush

@push('indexPageScript')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="{{ asset('assets/front_end/asset/js/calculator.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/js/mainab59.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/js/core.minab59.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/js/mouse.minab59.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/js/slider.minab59.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/js/commoncalculatorab59.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/js/emicalculatorab59.js') }}"></script>
<script src="{{ asset('assets/front_end/asset/js/active.js') }}"></script>


<script src="{{
        asset('assets/front_end/asset/js/jquery.easing.min.js')
      }}"></script>

<script src="{{
        asset('assets/front_end/asset/js/jquery-ui.js')
      }}"></script>

<script src="{{
        asset('assets/front_end/asset/js/jquery.ui.touch-punch.min.js')
      }}"></script>


<script src="{{
        asset('assets/front_end/asset/js/jquery.nice-select.js')
      }}"></script>

<script src="{{
        asset('assets/front_end/asset/js/menumaker.js')
      }}"></script>

@endpush
@section('content')
<!-- start banner area -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Include Font Awesome CSS (for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style type="text/css">
    .sub-title {
        top: 50%;
        transform: translateY(-50%);
    }

    @media (max-width: 768px) {
        /* .mainBannerHeading,
  .sub-title {
    position: static;
    text-align: center;
  } */
    }

    .blogButton1 {
        margin-bottom: -30px;
    }

    .blogButton {
        margin-bottom: -76px;
    }

    #apply-now {
        color: #ffd756;
        background-color: #1338be;
    }

    #contact-us {
        color: #ffd756;
        background-color: #1338be;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .welcome-button.applyBtnDiv {
            /* margin-left: -64px; */
        }

        .emiCalculatorDiv {
            margin-top: 518px;
        }

        .emiCalculatorSidebar {
            margin-top: 210px;
        }
    }


    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .welcome-button.applyBtnDiv {
            margin-left: -64px;
        }

        .outerBannerDiv {
            margin-top: 40px;
        }

        .innerBannerDiv {
            margin-top: 40px;

        }

        .emiCalculatorDiv {
            margin-top: 518px;
        }

        .emiCalculatorSidebar {
            margin-top: 210px;
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {

        .emiCalculatorDiv {
            margin-top: 40px;
        }

        .emiCalculatorSidebar {
            margin-top: 78px;
        }

    }


    /* .mainslider.mt-5{
      margin-top: 5rem !important;
    } */
    .card-img-top {
        height: 40%;
        width: 100%;
    }

    .card-text {
        text-align: justify;
    }

    .rupee-icon {
        font-size: 30px;
        /* Adjust the size as needed */
        color: black;
        /* Change the color if desired */
        margin-bottom: 2px;
    }

    .custom-section-title {

        font-weight: bold;
        font-size: 30px;
        text-align: center;
    }

    .custom-divider {
        border-top: 2px solid #ffd756;
        width: 275px;
        margin: 20px auto;
    }


    /* add by mannu */

    .background-image-section {
        background-image: url('http://192.168.120.228/myzeon_web/assets/images/web_img/credit1.png');
        background-size: cover;
        background-position: center center;
        height: 456px;
        width: 100%;
        color: #fff;
        /* Set the text color for better visibility */
    }

    .btn_apply {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        font-size: 20px;
        border: none;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn_apply.btn-blue {
        font-size: 15px;
        font-weight: 600;
        text-align: center;
    }

    .btn-blue {
        background-color: #1338be;
    }



    .btn_apply:hover {
        background-color: #ffd756;
        /* Change the color for the hover effect */
    }

    .active-main-slider .owl-nav button:hover {
        background: #fff;
        color: #1338be !important;

    }

    .active-main-slider .owl-nav .owl-next {
        border: 1px solid #1338be !important;
        background-color: #1338be !important;
        font-size: 25px;
    }

    .active-main-slider .owl-nav .owl-prev {
        border: 1px solid #1338be !important;
        background-color: #1338be !important;
        font-size: 25px;
    }

    .sec-section .owl-carousel {
        height: 150px !important;
    }

    #head {
        height: 170px !important;
        padding: 20px !important;
    }

    .h-50 {
        height: 93% !important;
    }

    .mb-0 {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 0px;
        text-transform: uppercase;
    }

    .calculatorcontainer {
        height: auto;
        width: auto;
        ;
    }

    .p-3 {
        height: 350px !important;
        padding: 20px !important;

    }

    /*ul.loanproduct-nav li.active a {
    background: #007bff !important;
    }*/
    .btn-secondary.active,
    .btn-secondary:active,
    .show>.btn-secondary.dropdown-toggle {
        background-color: #1338be;
        background-image: none;
        border-color: #6c757d;
    }

    /* .emicalculatorcontainer {border: 3px dashed #1338be;} */
</style>
<!-- change by mannu -->
<!--  -->

<section class="mainslider">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner outerBannerDiv">
            @foreach (getSlider() as $key => $value2)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }} innerBannerDiv">
                <img src="{{ asset('assets/images/web_img/' . $value2->image) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-start mb-4">
                    <div>
                        <h2 class="main-title mainBannerHeading" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">{!! $value2->title2 !!}</h2>
                        <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRIght">{!! $value2->title1 !!}</h2>
                    </div>
                    <div class="welcome-button applyBtnDiv" data-animation-in="animate-in" data-animation-out="animate-out">
                        <a href="{{ $value2->url_1 }}" class="btn btn-primary btn-apply animated" id="apply-now">Apply Now</a>
                        <a href="{{ $value2->url_2 }}" class="btn btn-primary btn-apply animated" id="contact-us">Contact Us</a>
                    </div>


                </div>


            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" style="left: 0;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next" style="right: 0;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>





</section>


<!-- end of banner area -->
<section class="block-features mt-4">
    <div class="container-fluid">
        <div class="row gy-5 gx-5">
            <div class="owl-carousel owl-theme sec-section">
                <?php foreach (getService() as $key => $value) { ?>
                    <div class="item">
                        <div class="single-block d-flex flex-column justify-content-center p-3" id="head">
                            <div class="icon d-flex align-items-center">
                                <?php if ($value->loans_type == 'credit-cards') { ?>
                                    <h4 class="mb-0 ml-3" style="visibility: hidden;">5%</h4>
                                <?php } else { ?>
                                    <h4 class="mb-0 ml-3">
                                        <?php $Rate = getRate($value->loans_type);
                                        echo !empty($Rate->rate) ? $Rate->rate . '%' : '';
                                        ?>
                                    </h4>
                                <?php } ?>
                                <img src="{{ asset('assets/images/web_img/' . $value->image) }}" alt="">
                            </div>
                            <div class="content text-left">
                                <h4 style="text-transform: uppercase;"><?php echo $value->title; ?></h4>
                                <p class="mb-0" style="display: none;"><?php echo $value->content; ?></p>
                            </div>
                            <div class="overlaye-bg" style="background-color: #1338be;">
                                <a href="<?php echo $value->apply_url; ?>" class="apply-btn" style="color: #ffd756;">Apply Now</a>
                                <a href="<?php echo $value->compare_url; ?>" class="apply" style="color: #ffd756;">Quick Compare</a>
                                <a href="<?php echo $value->emi_url; ?>" style="color: #ffd756;">Calculate EMI</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>




<section class="loan-calculator-page section-padding pt-5 pb-5" id="calculator-emi">
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Loan Calculator</h2>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <article class="post-7 page type-page status-publish hentry w-100">


                        <div class=calculatorcontainer>
                            <div class=emicalculatorcontainer>
                                <div id=loanformcontainer class=row>

                                    <div id=emicalculatordashboard class=col-md-8>

                                        <ul class=loanproduct-nav>
                                            <li id=home-loan class=active>
                                                <a href=#>Home Loan</a>
                                            </li>
                                            <li id=personal-loan>
                                                <a href=# style="white-space:no-wrap;">Personal Loan</a>
                                            </li>
                                            <li id=car-loan>
                                                <a href=#>Car Loan</a>
                                            </li>
                                        </ul>
                                        <div class=cleardiv></div>
                                        <div id=emicalculatorinnerformwrapper>

                                            <form id=emicalculatorform>
                                                <div class=form-horizontal id=emicalculatorinnerform>
                                                    <div class="row form-group lamount">
                                                        <label class="col-md-12 control-label" for=loanamount>Home Loan
                                                            Amount</label>
                                                        <div class=col-md-12>
                                                            <div class=input-group>
                                                                <input class=form-control id=loanamount name=loanamount value=25,00,000 type=text>
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
                                                        <span class="tick d-none d-sm-block" style="left: 12.5%;">| <br>
                                                            <span class=marker>25L</span>
                                                        </span>
                                                        <span class=tick style="left: 25%;">| <br>
                                                            <span class=marker>50L</span>
                                                        </span>
                                                        <span class="tick d-none d-sm-block" style="left: 37.5%;">| <br>
                                                            <span class=marker>75L</span>
                                                        </span>
                                                        <span class=tick style="left: 50%;">| <br>
                                                            <span class=marker>100L</span>
                                                        </span>
                                                        <span class="tick d-none d-sm-block" style="left: 62.5%;">| <br>
                                                            <span class=marker>125L</span>
                                                        </span>
                                                        <span class=tick style="left: 75%;">| <br>
                                                            <span class=marker>150L</span>
                                                        </span>
                                                        <span class="tick d-none d-sm-block" style="left: 87.5%;">| <br>
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
                                                                <input class=form-control id=loaninterest name=loaninterest value=10.5 type=text>
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
                                                        <label class="col-lg-4 control-label" for=loanterm>Loan Tenure</label>
                                                        <div class=col-lg-6>
                                                            <div class=loantermwrapper>
                                                                <div class=input-group>
                                                                    <input class=form-control id=loanterm name=loanterm value=20 type=text>
                                                                    <div class="input-group-append tenure-choice" data-toggle=buttons>
                                                                        <div class="btn-group btn-group-toggle" data-toggle=buttons>
                                                                            <label class="btn btn-secondary active">
                                                                                <input type=radio name=loantenure id=loanyears value=loanyears tabindex=4 autocomplete=off checked=checked>Yr </label>
                                                                            <label class="btn btn-secondary">
                                                                                <input type=radio name=loantenure id=loanmonths value=loanmonths tabindex=5 autocomplete=off>Mo </label>
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
                                                    <div id=leschemewrapper class="sep toggle-visible">
                                                        <div class="sep row form-group escheme">
                                                            <label class="col-lg-4 control-label" for=emischeme>EMI
                                                                Scheme</label>
                                                            <div class=col-lg-8>
                                                                <div class="input-group emischemes">
                                                                    <div class="btn-group btn-group-toggle add-check" data-toggle=buttons>
                                                                        <label class="btn btn-secondary">
                                                                            <input type=radio name=emischeme id=emiadvance value=emiadvance tabindex=4 autocomplete=off>EMI
                                                                            in Advance </label>
                                                                        <label class="btn btn-secondary active">
                                                                            <input type=radio name=emischeme id=emiarrears value=emiarrears tabindex=5 autocomplete=off checked=checked>EMI in Arrears </label>
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

                                        <div id=emipiechart class="no-gutter-left no-gutter-right highcharts-container d-none">
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
            </div>


        </div>
    </div>
</section>

<!-- why choose us by mannu -->


<!-- end why choose us by mannu -->
<!-- <div style="overflow-y: hidden;"> -->
<!-- section start -->
<section class="container-fluid my-4 py-4" style="color: #1338be;">
    <div class="row justify-content-center" style="overflow-y: hidden;">
        <div class="col-12 text-center" style="overflow-y: hidden;">
            <h2 class="custom-section-title">WHY CHOOSE US</h2>
            <hr class="custom-divider">
        </div>
    </div>
</section>
<!-- <section class="container-fluid">
    <section class="container-fluid mmt-4 mb-4" style="color: #ffd756;">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card text-center custom-card">
            <i class="fa-solid fa-sack-dollar card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
            <div class="card-body custom-card-body">
              <h3 class="card-title custom-card-title" style="color: #1338BE;">Quick Loan Disbursal</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card text-center custom-card">
            <i class="fas fa-university card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
            <div class="card-body custom-card-body">
              <h3 class="card-title custom-card-title" style="color: #1338BE;">Tie-up with 25+ banks and NBFCS</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card text-center custom-card">
            <i aria-hidden="true" class="fab fa-digital-ocean card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
            <div class="card-body custom-card-body">
              <h3 class="card-title custom-card-title" style="color: #1338BE;">Digital Loan Disbursal 100%</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 20px;">
        <div class="col-md-6 col-lg-4">
          <div class="card text-center custom-card">
            <i class="bi bi-credit-card card-icon custom-icon" style="font-size: 48px;"></i>
            <div class="card-body custom-card-body">
              <h3 class="card-title custom-card-title" style="color: #1338BE;" >Check Your Credit Score</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card text-center custom-card">
            <i class="bi bi-person card-icon custom-icon" style="font-size: 48px;"></i>
            <div class="card-body custom-card-body">
              <h3 class="card-title custom-card-title" style="color: #1338BE;">Friendly Customer Service</h3>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card text-center custom-card">
            <i class="bi bi-file-earmark-arrow-up card-icon custom-icon" style="font-size: 48px;"></i>
            <div class="card-body custom-card-body">
              <h3 class="card-title custom-card-title" style="color: #1338BE;">Contactless Document Submission</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    </section> -->

<div class="container-fluid">
    <div class="row">
        <!-- Left Elements -->
        <div class="col-md-4">

            <div class="card text-center custom-card">
                <i class="fa-solid fa-sack-dollar card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
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
                <i aria-hidden="true" class="fab fa-digital-ocean card-icon custom-icon" style="font-size: 48px; margin-top: 20px;"></i>
                <div class="card-body custom-card-body">
                    <h3 class="card-title custom-card-title" style="color: #1338BE;">Digital Loan Disbursal 100%</h3>
                </div>
            </div>
            <br>
        </div>


        <div class="col-md-4">
            <img src="https://www.myzeon.com/wp-content/uploads/2023/06/new.svg" alt="Your Image" class="img-fluid">
            <br>
            <!-- <div style="text-align: center;">
      <button type="button" class="btn btn-warning"><b>Get Started</b></button>
    </div> -->

        </div>
        <div class="col-md-4">

            <div class="p">
                <div class="card text-center custom-card">
                    <i class="bi bi-credit-card card-icon custom-icon" style="font-size: 48px;"></i>
                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Check Your Credit Score</h3>
                    </div>
                </div>
            </div>
            <br>

            <div class="p">
                <div class="card text-center custom-card">
                    <i class="bi bi-person card-icon custom-icon" style="font-size: 48px;"></i>
                    <div class="card-body custom-card-body">
                        <h3 class="card-title custom-card-title" style="color: #1338BE;">Friendly Customer Service
                        </h3>
                    </div>
                </div>
            </div>
            <br>

            <div class="p">
                <div class="card text-center custom-card">
                    <i class="bi bi-file-earmark-arrow-up card-icon custom-icon" style="font-size: 48px;"></i>
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


    <!-- <section class="second-about-area section-padding pt-5 pb-5">
    <div class="container">
    <div class="row justify-content-between align-items-center">
    <div class="col-md-6">
    <div class="second-about-content">
    <h2>Your Credit Score & Report </h2>
    <p>Are you looking for a loan, mortgage, or lіnе оf credit? You are in the right place.</p>
    <p>At Loanplus, wе’rе hеrе to рrоvіdе уоu wіth fіnаncіаl ѕоlutіоnѕ fоr аll уоur lеndіng needs. Whether you are lооkіng fоr a loan, mortgage, or lіnе оf credit, our knоwlеdgеаblе and experienced lending tеаm wіll explain оur lеndіng орtіоnѕ to уоu іn a ѕtrаіghtfоrwаrd mаnnеr. </p>
    <a href="#" class="btn theme-btn-blu-fill btn-primary">Get Free Credit Report</a>
    </div>
    </div>
    <div class="col-md-6 col-lg-6">
    <div class="about-thumb">
    <img src="{{ asset('assets/front_end/asset/img/feature5.png') }}" alt="">
    </div>
    </div>
    </div>
    <div class="second-brand-slider brand-slider-two owl-carousel">
    <div class="single-brand">
    <img src="{{ asset('assets/front_end/asset/img/brand-6.png') }}" alt="">
    </div>
    <div class="single-brand">
    <img src="{{ asset('assets/front_end/asset/img/brand-7.png') }}" alt="">
    </div>
    <div class="single-brand">
    <img src="{{ asset('assets/front_end/asset/img/brand-8.png') }}" alt="">
    </div>
    <div class="single-brand">
    <img src="{{ asset('assets/front_end/asset/img/brand-9.png') }}" alt="">
    </div>
    <div class="single-brand">
    <img src="{{ asset('assets/front_end/asset/img/brand-10.png') }}" alt="">
    </div>
    </div>
    </div>
    </section> -->

    <!-- .start loan process second -->
    <section class="second-loan-process section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>SIMPLE LOAN PROCESS</h2>
                    </div>
                </div>
            </div>
            <div class="row process-list">
                <div class="col-md-3 second-process">
                    <div class="second-single-loan-process">
                        <h4>Choose Amount</h4>
                        <div class="icon" style="font-size: 30px;color: #ffd756">
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
    <!-- end of loan process two -->
    <!-- start featured section -->
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
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
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
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
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
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
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
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
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
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
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
                                <a class="" href="#">READ MORE <i class="fa fa-angle-double-right"></i></a>
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
        <!-- <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8 text-center">
    <div class="get-consultation-content">
    <h4>Get free consultations</h4>
    <h2>Checking your loan options does not affect <br>
    your credit score</h2>
    <a href="https://www.myzeon.com/contact" class="button btn theme-btn-white-border btn-primary">Apply Now</a>
    </div>
    </div>
    </div>
    </div>
    </section> -->

        <div class="header-bottom-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
        <!-- add slider by mannu -->


        <!-- <div class="container-fluid">
      
    </div> -->
        <!-- style="display: flex; justify-content: center; -->
        <!-- trial blog -->
        <div class="container-fluid">

            <h2 class="mt-5" style="text-align: center; color: #1338BE;"><b>LATEST BLOG</b></h2>
            <hr class="custom-divider">

            <div class="row">
                <div class="col-md-12 p-5">

                    <div class="row  gx-5 mb-5">

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 21rem;">
                                <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/blog_img/blog1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title heading-card"><a href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates">How To Calculate Your Business Loan EMI At Lower Rates?</a></h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                              'Planning to start a business but worried about funds? Are you looking for a business loan?',
                              150,
                          ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/blog/how-to-calculate-your-business-loan-emi-at-lower-rates" class="btn btn-primary blogButton1">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 21rem;">
                                <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/blog_img/blog2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title heading-card"><a href="https://www.myzeon.com/blog/how-to-apply-for-personal-loan-online-in-5-easy-steps">How To Apply For Personal Loan Online In 5 Easy Steps?</a></h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                              "Are you looking to apply for a personal loan online? Why make multiple trips to the bank ?
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      This article will help you understand the Home Loan and how it can help you buy a house.",
                              150,
                          ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/blog/how-to-apply-for-personal-loan-online-in-5-easy-steps" class="btn btn-primary blogButton">Read More</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 21rem;">
                                <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/blog_img/blog3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title heading-card"><a href="https://www.myzeon.com/blog/apply-for-business-loan-documents-you-need-for-business-loan">Apply for Business Loan: Documents You Need for Business Loan</a></h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                              'Are you looking for a business loan at lower interest rates? Do you want that financial boost?',
                              150,
                          ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/blog/apply-for-business-loan-documents-you-need-for-business-loan" class="btn btn-primary">Read More</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="card h-100" style="width: 21rem;">
                                <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/blog_img/blog4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title heading-card"><a href="https://www.myzeon.com/blog/how-to-calculate-cibil-score-for-free">How to Calculate CIBIL Score for Free?</a></h5>
                                    <p class="card-text">
                                        {{ Str::limit(
                              'Are you aware of what a CIBIL score is? What is the role of the CIBIL score when you are applying for a loan?',
                              150,
                          ) }}
                                    </p>
                                    <a href="https://www.myzeon.com/blog/how-to-calculate-cibil-score-for-free" class="btn btn-primary blogButton">Read More</a>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <!--end trial blog -->





        <!-- Add slider by mannu -->

        <!-- <div class="slide-container">
    <div class="slide-content">
      <div class="card-wrapper">
        <div class="card">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="" alt="" class="card-image">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div> -->

        <!-- Add slider by mannu -->
        <section class="pt-5 mb-4 bg-light our-partner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="mb-2">OUR PARTNERS</h2>
                            <p class=""><b>There's more than one reason to sign up with confidence</b></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- <div class="container" style="
                width: 1220px;
                padding: 0 40px 0 40px;
                overflow-y: hidden ;
                "> -->
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

</div>
</div>
<!-- change by mannu -->
<section class="section-stretched background-image-section" id="bb1000b">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-top:12%">
                <div>
                    <div class="elementor-element">
                        <h2 class="text-center" style="color:#1338BE;">Free CIBIL <span style="color:#1338BE;">Score
                                Check,</span><br> Credit Card Rewards &amp; Loans</h2>
                    </div>
                    <div class="elementor-element d-flex justify-content-center align-items-center">
                        <a class="btn btn-primary" href="/myzeon_web/index.php/check-cibil-score">Get Free Credit
                            Report</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection