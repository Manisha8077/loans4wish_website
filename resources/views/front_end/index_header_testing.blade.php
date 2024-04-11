@extends('front_end_layout.suryatestingheader')
@section('content')
    <!-- start banner area -->
    <style type="text/css">
        /*.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
      background: #254099 !important;
      border: 1px solid #254099 !important;
    }*/
        /*.ui-widget-header {
      background: #007bff !important;
    }*/



        .calculatorcontainer {
            background: #007bff;
            background-color: rgb(0, 123, 255);
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
            background-color: #007bff;
            background-image: none;
            border-color: #6c757d;
        }

        .emicalculatorcontainer {
            border: 3px dashed #1f05d2;
        }
    </style>

    <div class="container-fluid">
        <section class="main-slider-area mt-5">
            <div class="active-main-slider owl-carousel">
                <?php foreach (getSlider() as $key => $value) {?>


                <div class="main-slider-item img-fluid "
                    style="background-image: url({{ asset('assets/images/web_img/' . $value->image) }});">
                    <div class="slider-one-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <div class="main-slider-welcome-text slidertwo sliderthree">
                                        <div class="slider-cell">
                                            <h2 class="main-title" data-animation-in="fadeInLeft"
                                                data-animation-out="animate-out fadeOutLeft"><?php echo $value->title2; ?></h2>
                                            <h2 class="sub-title" data-animation-in="fadeInRight"
                                                data-animation-out="animate-out fadeOutRIght"><?php echo $value->title1; ?></h2>

                                            <div class="welcome-button" data-animation-in="fadeInDown"
                                                data-animation-out="animate-out fadeOutDown">
                                                <a href="<?php echo $value->url_1; ?>" class="btn btn-default button-primary">Apply
                                                    Now</a>
                                                <a href="<?php echo $value->url_2; ?>"
                                                    class="button-secondary btn btn-default">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

            </div>
        </section>
        <!-- end of banner area -->
        <section class="block-features">
            <div class="container-fluid">
                <div class="row gy-5 gx-5 mb-5">
                    <div class="owl-carousel owl-theme sec-section" style="height: 120px;">
                        <?php foreach (getService() as $key => $value) {?>
                        <div class="item">
                            <div class="single-block  d-flex flex-column justify-content-center">
                                <div class="icon d-flex align-items-center">

                                    @if ($value->loans_type == 'credit-cards')
                                        <h4 class="mb-0 ml-3 " style = "visibility:hidden;">
                                            5%
                                        </h4>
                                    @else
                                        <h4 class="mb-0 ml-3">

                                            <?php $Rate = getRate($value->loans_type);
                                            echo !empty($Rate->rate) ? $Rate->rate . '%' : '';
                                            ?>

                                        </h4>
                                    @endif
                                    <img src="{{ asset('assets/images/web_img/' . $value->image) }}" alt="">
                                </div>
                                <div class="content text-left">
                                    <h4><?php echo $value->title; ?></h4>
                                    <p class="mb-0"><?php echo $value->content; ?></p>

                                </div>
                                <div class="overlaye-bg">
                                    <a href="<?php echo $value->apply_url; ?>" class="apply-btn">Apply Now</a>
                                    <a href="<?php echo $value->compare_url; ?>" class="">Quick Compare</a>
                                    <a href="<?php echo $value->emi_url; ?>" class="text-white">Calculate EMI</a>

                                </div>

                            </div>
                        </div>
                        <?php }?>

                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="mb-2">MyZeon Services manisha</h2>
                            <p>See how you can make the Best Use of MyZeon</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="loan-shadow h-100">
                            <a href="#"><img src="{{ asset('assets/front_end/asset/img/credit-card-online.jpg') }}"
                                    class="img-fluid"></a>
                            <div class="dis-box">
                                <h5 class="mb-2 text-dark">Apply for Credit Cards</h5>
                                <p class="mb-0">You can check the hundreds of credit cards offered by different banks on
                                    our website and apply for any card depending upon your choice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="loan-shadow h-100">
                            <a href="https://www.myzeon.com/personal-loan"><img
                                    src="{{ asset('assets/front_end/asset/img/instant-personal-loans.jpg') }}"
                                    class="img-fluid"></a>
                            <div class="dis-box">
                                <h5 class="mb-2 text-dark">Instant Personal Loans</h5>
                                <p class="mb-0">Get a Personal Loan within 48 hours after the documents verification
                                    process. We have bought 30 Banks and NBFCs in one place for your convenience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="loan-shadow h-100">
                            <a href="https://www.myzeon.com/check-cibil-score"><img
                                    src="{{ asset('assets/front_end/asset/img/check-free-credit-score.jpg') }}"
                                    class="img-fluid"></a>
                            <div class="dis-box">
                                <h5 class="mb-2 text-dark">Check Free Credit Score</h5>
                                <p class="mb-0">You can always monitor your score to avoid loan rejections. Check your
                                    Credit Score for free within 120 Seconds and download the Credit Report.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="loan-shadow h-100">
                            <a href="https://www.myzeon.com/cal-personal-loan"><img
                                    src="{{ asset('assets/front_end/asset/img/Use-Our-Optimum-Calculators.jpg') }}"
                                    class="img-fluid"></a>
                            <div class="dis-box">
                                <h5 class="mb-2 text-dark">Use Our Optimum Calculators</h5>
                                <p class="mb-0">Whether you want to calculate loan EMIs or Taxes on your Income, we have
                                    100% accurate calculators for our precious customers. All the calculators are free to
                                    use and you will get the best results to achieve your Financial Goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="loan-shadow h-100">
                            <a href="https://www.myzeon.com/home-loan"><img
                                    src="{{ asset('assets/front_end/asset/img/Get-a-Home-Loan.jpg') }}"
                                    class="img-fluid"></a>
                            <div class="dis-box">
                                <h5 class="mb-2 text-dark">Get a Home Loan</h5>
                                <p class="mb-0">Comparing the Home Loans from 30 different banks and NBFCs in one place
                                    will get you the best deal and a Low-Interest Rate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="loan-shadow h-100">
                            <a href="https://www.myzeon.com/business-loan"><img
                                    src="{{ asset('assets/front_end/asset/img/Compare-Business-Loans.jpg') }}"
                                    class="img-fluid"></a>
                            <div class="dis-box">
                                <h5 class="mb-2 text-dark">Compare Business Loans</h5>
                                <p class="mb-0">If you want to expand your business then here you can compare Business
                                    Loan Interest rates and get the lowest rate of interest on your Loan.</p>
                            </div>
                        </div>
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
                    <article class="post-7 page type-page status-publish hentry w-100">


                        <div class=calculatorcontainer>
                            <div class=emicalculatorcontainer>
                                <div id=loanformcontainer class=row>
                                    <div id=emicalculatordashboard class=col-sm-8>
                                        <ul class=loanproduct-nav>
                                            <li id=home-loan class=active>
                                                <a href=#>Home Loan</a>
                                            </li>
                                            <li id=personal-loan>
                                                <a href=#>Personal Loan</a>
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
                                                        <label class="col-lg-6 control-label" for=loanamount>Home Loan
                                                            Amount</label>
                                                        <div class=col-lg-6>
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
                                                                <input class=form-control id=loaninterest name=loaninterest
                                                                    value=10.5 type=text>
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
                                                                                    id=loanyears value=loanyears tabindex=4
                                                                                    autocomplete=off checked=checked>Yr
                                                                            </label>
                                                                            <label class="btn btn-secondary">
                                                                                <input type=radio name=loantenure
                                                                                    id=loanmonths value=loanmonths
                                                                                    tabindex=5 autocomplete=off>Mo </label>
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
                                                                    <div class="btn-group btn-group-toggle add-check"
                                                                        data-toggle=buttons>
                                                                        <label class="btn btn-secondary">
                                                                            <input type=radio name=emischeme id=emiadvance
                                                                                value=emiadvance tabindex=4
                                                                                autocomplete=off>EMI in Advance </label>
                                                                        <label class="btn btn-secondary active">
                                                                            <input type=radio name=emischeme id=emiarrears
                                                                                value=emiarrears tabindex=5 autocomplete=off
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
                                    <div class="sidebar col-sm-4">
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
                                            class="no-gutter-left no-gutter-right highcharts-container d-none"></div>


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
        </section>
        <section class="pt-5 pb-5 bg-theme-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="mb-2 text-white">Why Choose Us</h2>
                            <p class="text-white">There's more than one reason to sign up with confidence</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="https://www.myzeon.com/contact"><img
                                src="{{ asset('assets/front_end/asset/img/bg-why-myzeon.png') }}" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </section>
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
        <section class="second-about-area section-padding  pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="second-about-content">
                            <h2>Your Credit Score & Report </h2>
                            <p>Are you looking for a loan, mortgage, or lіnе оf credit? You are in the right place.</p>
                            <p>At Loanplus, wе’rе hеrе to рrоvіdе уоu wіth fіnаncіаl ѕоlutіоnѕ fоr аll уоur lеndіng needs.
                                Whether you are lооkіng fоr a loan, mortgage, or lіnе оf credit, our knоwlеdgеаblе and
                                experienced lending tеаm wіll explain оur lеndіng орtіоnѕ to уоu іn a ѕtrаіghtfоrwаrd
                                mаnnеr. </p>
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
        </section>


        <!-- .start loan process second -->
        <section class="second-loan-process section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Simple Loan Process</h2>
                        </div>
                    </div>
                </div>
                <div class="row process-list">
                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Choose Amount</h4>
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/pade.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Provide Document</h4>
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/dollar.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Approved Loan</h4>
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/handshake.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 second-process">
                        <div class="second-single-loan-process">
                            <h4>Get your Money</h4>
                            <div class="icon">
                                <img src="{{ asset('assets/front_end/asset/img/get-money.png') }}" alt="">
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="get-consultation-content">
                            <h4>Get free consultations</h4>
                            <h2>Checking your loan options does not affect <br>
                                your credit score</h2>
                            <a href="https://www.myzeon.com/contact"
                                class="button btn theme-btn-white-border btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="header-bottom-section">
            <div class="container">
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

        <section class="pt-5 pb-5 bg-light our-partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="mb-2">Our partners</h2>
                            <p class="">There's more than one reason to sign up with confidence</p>
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
            </div>
        </section>

    </div>
@endsection
