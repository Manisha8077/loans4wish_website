@extends('front_end_layout.home')
@section('content') 
<!-- start banner area -->
#head{
	height: 170px !important;
  padding: 20px !important;
}
<style type="text/css">
	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
  background: #007bff !important;
  border: 1px solid #007bff !important;
}
.ui-widget-header {
  background: #007bff !important;
}
.calculatorcontainer {
  background: #007bff;
    background-color: rgb(0, 123, 255);
}
ul.loanproduct-nav li.active a {
  background: #007bff !important;
}
.btn-secondary.active, .btn-secondary:active, .show > .btn-secondary.dropdown-toggle {
  background-color: #007bff;
  background-image: none;
  border-color: #6c757d;
}
.emicalculatorcontainer {border: 3px dashed #1f05d2;}
</style>
<section class="main-slider-area mt-5">
	<div class="active-main-slider owl-carousel">
		<div class="main-slider-item" style="background-image: url({{asset('assets/front_end/asset/img/sliders/clara.jpg')}});">
			<div class="slider-one-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-left">
							<div class="main-slider-welcome-text slidertwo sliderthree">
								<div class="slider-cell">
									<h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRIght">Leading bank loan provider in the market</h2>
									<h2 class="main-title" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">Are you looking for business
										<br>Business Loan?
									</h2>
									<div class="welcome-button" data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">
										<a href="#" class="btn btn-default button-primary">Apply Now</a>
										<a href="#" class="button-secondary btn btn-default">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="main-slider-item" style="background-image: url({{asset('assets/front_end/asset/img/sliders/personal.jpg')}});">
			<div class="slider-one-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-left">
							<div class="main-slider-welcome-text slidertwo sliderthree">
								<div class="slider-cell">
									<h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRIght">98% Customer Satisfied with us.</h2>
									<h2 class="main-title" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">Are you looking for
										<br>Personal loan?
									</h2>
									<div class="welcome-button" data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">
										<a href="#" class="btn btn-default button-primary">Apply Now</a>

										<a href="#" class="button-secondary btn btn-default">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="main-slider-item" style="background-image: url({{asset('assets/front_end/asset/img/sliders/homeloan-banner.jpg')}});">
			<div class="slider-one-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="main-slider-welcome-text slidertwo sliderthree">
								<div class="slider-cell">
									<h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">Leading bank loan provider in the market</h2>
									<h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">Lowest Interest Rate <br> on Home Loan</h2>
									<div class="welcome-button" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">
										<a href="#" class="btn btn-default button-primary">Apply Now</a>
										<a href="#" class="button-secondary btn btn-default">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-slider-item" style="background-image: url({{asset('assets/front_end/asset/img/sliders/carloan_banner.jpg')}});">
			<div class="slider-one-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="main-slider-welcome-text slidertwo sliderthree">
								<div class="slider-cell">
									<h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">Leading bank loan provider in the market</h2>
									<h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">Lowest Interest Rate <br> on Car Loan</h2>
									<div class="welcome-button" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">
										<a href="#" class="btn btn-default button-primary">Apply Now</a>
										<a href="#" class="button-secondary btn btn-default">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of banner area -->
<section class="block-features">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-xl-2 col-sm-6 nopadding">
				<div class="single-block">
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/icon-1.png')}}" alt="">
					</div>
					<div class="content">
						<h4>Personal Loan</h4>
						<h5>@ 6.68%</h5>
					</div>
					<div class="overlaye-bg">
						<a href="{{ route('personal-loan')}}"  class="apply-btn">Apply Now</a>
						<a href="{{ route('personal-loan')}}#Compare" class="">Quick Compare</a>
						<a href="#calculator-emi" class="text-white">Calculate EMI</a>
					</div>
				
				</div>
			</div>
			<div class="col-md-4 col-xl-2 col-sm-6 nopadding">
				<div class="single-block">
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/money.png')}}" alt="">
					</div>
					<div class="content">
						<h4>Business Loan</h4>
						<h5>@ 7.56%</h5>
					</div>
					<div class="overlaye-bg">
						<a href="business-loan.php"  class="apply-btn">Apply Now</a>
						<a href="business-loan.php#Compare" class="">Quick Compare</a>
						<a href="#calculator-emi" class="text-white">Calculate EMI</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xl-2 col-sm-6 nopadding">
				<div class="single-block">
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/home.png')}}" alt="">
					</div>
					<div class="content">
						<h4>Home Loan</h4>
						<h5>@ 5.68%</h5>
					</div>
					<div class="overlaye-bg">
						<a href="home-loan.php"  class="apply-btn">Apply Now</a>
						<a href="home-loan.php#Compare" class="">Quick Compare</a>
						<a href="#calculator-emi" class="text-white">Calculate EMI</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-xl-2 col-sm-6 nopadding">
				<div class="single-block">
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/car.png')}}" alt="">
					</div>
					<div class="content">
						<h4>Car Loan</h4>
						<h5>@ 8.56%</h5>
					</div>
					<div class="overlaye-bg">
						<a href="car-loan.php" class="apply-btn">Apply Now</a>
						<a href="car-loan.php#Compare" class="">Quick Compare</a>
						<a href="#calculator-emi" class="text-white">Calculate EMI</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xl-2 col-sm-6 nopadding">
				<div class="single-block">
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/home.png')}}" alt="">
					</div>
					<div class="content">
						<h4>Loan Against Property</h4>
						<h5>@ 9.5%</h5>
					</div>
					<div class="overlaye-bg">
						<a href="loan-against-property.php" class="apply-btn">Apply Now</a>
						<a href="loan-against-property.php#Compare" class="">Quick Compare</a>
						<a href="#calculator-emi" class="text-white">Calculate EMI</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xl-2 col-sm-6 nopadding">
				<div class="single-block">
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/card.png')}}" alt="">
					</div>
					<div class="content">
						<h4>Credit Card</h4>
						<h5>@ 10.50%</h5>
					</div>
					<div class="overlaye-bg">
						<a href="credit-cards.php"  class="apply-btn">Apply Now</a>
						<a href="#" class="">Quick Compare</a>
						<a href="#calculator-emi" class="text-white">Calculate EMI</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pt-5 pb-5 bg-light">
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="mb-2">Top  Trending Loan Type</h2>
						<p>Our picks for the hottest offers and coolest deals all in one place</p>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="loan-shadow h-100">
						<img src="{{asset('assets/front_end/asset/img/credit-card-v1.png')}}" class="img-fluid">
						<div class="dis-box">
							<h5 class="mb-2 text-dark">Credit Cards</h5>
							<p class="mb-0">The best of lifetime-free, cashback cards & more with contactless KYC process.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="loan-shadow h-100">
						<img src="{{asset('assets/front_end/asset/img/personal-loan-v1.png')}}" class="img-fluid">
						<div class="dis-box">
							<h5 class="mb-2 text-dark">Quick Personal Loans</h5>
							<p class="mb-0">Instant approval and paperless process.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="loan-shadow h-100">
						<img src="{{asset('assets/front_end/asset/img/credit-score-v4.png')}}" class="img-fluid">
						<div class="dis-box">
							<h5 class="mb-2 text-dark">Free Credit Score</h5>
							<p class="mb-0">Get your free score in less than 3 minutes</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 mb-md-0">
					<div class="loan-shadow h-100">
						<img src="{{asset('assets/front_end/asset/img/finance-tools-v1.png')}}" class="img-fluid">
						<div class="dis-box">
							<h5 class="mb-2 text-dark">Finance Calculators</h5>
							<p class="mb-0">Smart resources to help you reach your financial goals.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4 mb-md-0">
					<div class="loan-shadow h-100">
						<img src="{{asset('assets/front_end/asset/img/gatewaypersonal-finance-v1.png')}}" class="img-fluid">
						<div class="dis-box">
							<h5 class="mb-2 text-dark">Personal Finance</h5>
							<p class="mb-0">Your pocket-sized personal money manager.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="loan-shadow h-100">
						<img src="{{asset('assets/front_end/asset/img/gatewayhomeloan.png')}}" class="img-fluid">
						<div class="dis-box">
							<h5 class="mb-2 text-dark">Home Loans</h5>
							<p class="mb-0">Low-interest Home Loans from popular banks.</p>
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
                            <label class="col-lg-6 control-label" for=loanamount>Home Loan Amount</label>
                            <div class=col-lg-6>
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
                            <label class="col-lg-4 control-label" for=loaninterest>Interest Rate</label>
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
                              <label class="col-lg-4 control-label" for=emischeme>EMI Scheme</label>
                              <div class=col-lg-8>
                                <div class="input-group emischemes">
                                  <div class="btn-group btn-group-toggle add-check" data-toggle=buttons>
                                    <label class="btn btn-secondary">
                                      <input type=radio name=emischeme id=emiadvance value=emiadvance tabindex=4 autocomplete=off>EMI in Advance </label>
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
					  <div id=emipiechart class="no-gutter-left no-gutter-right highcharts-container d-none"></div>
                   
                    
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
<section class="pt-5 pb-5 bg-primary">
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="mb-2 text-white">Why Choses us</h2>
						<p class="text-white">There's more than one reason to sign up with confidence</p>
					</div>
				</div>
				<div class="col-md-12">
					<img src="{{asset('assets/front_end/asset/img/bg-why.png')}}" class="img-fluid">
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
		<div class="row justify-content-between">
			<div class="col-md-6">
				<div class="second-about-content">
					<h2>Your Credit Score & Report </h2>
					<p>Are you looking for a loan, mortgage, or lіnе оf credit? You are in the right place.</p>
					<p>At Loanplus, wе’rе hеrе to рrоvіdе уоu wіth fіnаn�?іаl ѕоlutіоnѕ fоr аll уоur lеndіng needs. Whether you are lооkіng fоr a loan, mortgage, or lіnе оf credit, our knоwlеdgеаblе and experienced lending tеаm wіll explain оur lеndіng орtіоnѕ to уоu іn a ѕtrаіghtfоrwаrd mаnnеr. </p>
					<a href="#" class="btn btn-primary">Get Free Credit Report</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="about-thumb">
					<img src="{{asset('assets/front_end/asset/img/feature5.png')}}" alt="">
				</div>
			</div>
		</div>
		<div class="second-brand-slider brand-slider-two owl-carousel">
			<div class="single-brand">
				<img src="{{asset('assets/front_end/asset/img/brand-6.png')}}" alt="">
			</div>
			<div class="single-brand">
				<img src="{{asset('assets/front_end/asset/img/brand-7.png')}}" alt="">
			</div>
			<div class="single-brand">
				<img src="{{asset('assets/front_end/asset/img/brand-8.png')}}" alt="">
			</div>
			<div class="single-brand">
				<img src="{{asset('assets/front_end/asset/img/brand-9.png')}}" alt="">
			</div>
			<div class="single-brand">
				<img src="{{asset('assets/front_end/asset/img/brand-10.png')}}" alt="">
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
						<img src="{{asset('assets/front_end/asset/img/pade.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="col-md-3 second-process">
				<div class="second-single-loan-process">
					<h4>Provide Document</h4>
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/dollar.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="col-md-3 second-process">
				<div class="second-single-loan-process">
					<h4>Approved Loan</h4>
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/handshake.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="col-md-3 second-process">
				<div class="second-single-loan-process">
					<h4>Get your Money</h4>
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/get-money.png')}}" alt="">
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
						<img src="{{asset('assets/front_end/asset/img/icon-1.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/car.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/money.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/home.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/card.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/home.png')}}" alt="" />
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
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center">
				<div class="get-consultation-content">
					<h4>Get free consultations</h4>
					<h2>Checking your loan options does not affect <br>
						your credit score</h2>
					<a href="#" class="button btn btn-primary">Apply Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of get consultation section -->
<!-- start testimonial section -->
<section class="testimonial-section section-padding pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title">
					<h2>Testimonials</h2>
				</div>
			</div>
			<div class="testimonial-slider owl-carousel">
				<div class="single-testimonial">
					<div class="testimonial-img">
						<img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="" />
					</div>
					<div class="testimonial-content">
						<h4>Radhey Morya</h4>
						<h5>Self Employee</h5>
						<p>“Loanplus provide me a best rate compare to rest of bank i visted on all localbank.�?</p>
					</div>
				</div>
				<div class="single-testimonial">
					<div class="testimonial-img">
						<img src="{{asset('assets/front_end/asset/img/testimonial-1.jpg')}}" alt="" />
					</div>
					<div class="testimonial-content">
						<h4>Radhey Morya </h4>
						<h5>IT Manager</h5>
						<p>“ Loanplus dеlіvеrеd еxа�?tlу whаt thеу offered. Nоt only dіd thеу оffеr uѕ a better rate.�?</p>
					</div>
				</div>
				<div class="single-testimonial">
					<div class="testimonial-img">
						<img src="{{asset('assets/front_end/asset/img/testimonial-2.jpg')}}" alt="" />
					</div>
					<div class="testimonial-content">
						<h4>Radhey Morya</h4>
						<h5>Sales Consultant</h5>
						<p>“ I was іmрrеѕѕеd with the �?оnvеnіеn�?е and very hеlрful �?uѕtоmеr service.�?</p>
					</div>
				</div>
				<div class="single-testimonial">
					<div class="testimonial-img">
						<img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="" />
					</div>
					<div class="testimonial-content">
						<h4>Radhey Morya</h4>
						<h5>Finance Consultant</h5>
						<p>“ Dе�?lіnеd bу my local bаnk for a personal lоаn, I аm vеrу grаtеful tо Loanplus!.�?</p>
					</div>
				</div>
				<div class="single-testimonial">
					<div class="testimonial-img">
						<img src="{{asset('assets/front_end/asset/img/testimonial-1.jpg')}}" alt="" />
					</div>
					<div class="testimonial-content">
						<h4>Radhey Morya</h4>
						<h5>IT Manager</h5>
						<p>“ Loanplus dеlіvеrеd еxа�?tlу whаt thеу offered. Nоt only dіd thеу оffеr uѕ a better rate.�?</p>
					</div>
				</div>
				<div class="single-testimonial">
					<div class="testimonial-img">
						<img src="{{asset('assets/front_end/asset/img/testimonial-2.jpg')}}" alt="" />
					</div>
					<div class="testimonial-content">
						<h4>Reyansh</h4>
						<h5>Lawyer</h5>
						<p>“ I was іmрrеѕѕеd with the �?оnvеnіеn�?е and very hеlрful �?uѕtоmеr service.�?</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of testimonial section -->
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
    
				<div class="item"><img src="{{asset('assets/front_end/asset/img/bank.png')}}"></div>
				<div class="item"><img src="{{asset('assets/front_end/asset/img/bank1.png')}}"></div>
				<div class="item"><img src="{{asset('assets/front_end/asset/img/bank2.png')}}"></div>
				<div class="item"><img src="{{asset('assets/front_end/asset/img/bank3.png')}}"></div>
				<div class="item"><img src="{{asset('assets/front_end/asset/img/bank4.png')}}"></div>
				
</div>
				</div>
			</div>
	</div>
</section>


 <!-- <div class="wrap container" role=document>
      <div class="content row w-100">
        <main class=main> -->
        
       <!--  </main>
      </div>
    </div> -->




<div class="header-bottom-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="single-header-bottom">
					<div class="icon">
						<img src="{{asset('assets/front_end/asset/img/clock.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/user.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/camera.png')}}" alt="" />
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
						<img src="{{asset('assets/front_end/asset/img/map-pin-2.png')}}" alt="" />
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
      
      @endsection