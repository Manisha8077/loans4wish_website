@extends('front_end_layout.home')
@section('content') 
<style>
  section.banner-img:before {
    display: none;
}
.first-form form{margin: 0px;}
/* .banner-img {
    
    min-height: auto;} */


    .banner-img {
    
    display: block;
    width: 100%;
    height: 100%;
  }
    .calculatorcontainer {
  background: #007bff;
    background-color: rgb(0, 123, 255);
}

.top-heading{
  font-family: 'Roboto', sans-serif; 
  font-weight:bold;
  text-align: center;
  color:#ffffff;

}

.top-sub-heading{
  font-weight: bold;
  font-style: italic;
  text-align: center;

}
</style>


<section class="banner-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/slider-2.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="top-heading" style="z-index: 1;">Car Loan EMI Calculator</h1>
         <h5 class="top-sub-heading"  style="z-index: 1;">Calculate the Car Loan EMI Before Purchasing</h5>
      </div>
            
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Car Loan EMI Calculator</h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>The Car Loan EMI Calculator helps you to calculate the EMIs on your car loans so that you can plan to buy a car and your EMI doesn’t affect your budget.<br>

The car Loan calculator is an online tool that helps you determine your EMI burden for a particular loan amount you borrowed for the car purchase. The tool computes the EMI amount using the loan duration and interest rate. It instantly provides the EMI amount and total interest you must pay to the lender. Car Loan calculators help you make the right loan decision for your new car purchase.<br>
Owning a car means a unique social status. Besides the prestige factor, a car is a convenient means of transport for you and your family. And as it is a valuable asset and investment for you, it is important to decide smartly on borrowing a loan for the car purchase.
</p>
        </div>
      </div>

  </div>
</section>
<section class="loan-calculator-page section-padding pt-5 pb-5" id="calculator-emi">
  <div class="container">

    <div class="row">
    <div class="col-md-12">
        <div class="section-title text-center">
          <h2>Car Loan EMI Calculator</h2>
        </div>
      </div>
          <article class="post-7 page type-page status-publish hentry w-100">
            
           
            <div class=calculatorcontainer>
              <div class=emicalculatorcontainer>
                <div id=loanformcontainer class=row>
                  <div id=emicalculatordashboard class=col-sm-8>
                    <ul class=loanproduct-nav>
                      <li id=personal-loan class=active>
                        <a href=#>Car Loan EMI Calculator</a>
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


<section class="pt-5 pb-5">
<div class="container">
<div class="row">
<div class="col-md-12">
<p><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><b><span lang="EN" style="color:#0e101a">Get a Car Loan</span></b></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">You don&#39;t need to be wealthy and save money to buy a car. A car loan is available online and offline, which allows you to repay the car purchase in monthly installments.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">A reduction in goods and services tax (GST) from 28% to 18% in early 2020 made buying a car even more attractive in India.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Most banks and NBFCs tie-ups with car dealers to provide loans for customers. So approach the dealers and buy cars with a loan.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">The process is simple here, choose a car model, and the bank/NBFC representative will set up a Car Loan for you.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">But financing a car with a loan doesn&#39;t mean you don&#39;t have to pay upfront. A down payment against the cost of the vehicle is necessary, and the bank lends the remaining amount. The interest rate doesn&#39;t change for this loan; you must decide on the loan term.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><b><span lang="EN" style="color:#0e101a">What is a Car Loan EMI Calculator?</span></b></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">When considering a car on loan, you must ensure you get affordable EMIs. It is necessary to have a foolproof repayment plan for the car loan. When taking the loan, you agree to pay off the loan over months or years. </span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">A Car Loan calculator is the most popular tool to know how much EMI you need to pay each month for the borrowed amount. And the calculation only takes information like- the loan amount, the rate of interest, and the loan duration. </span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">When you enter these details, the calculator uses this information to internally calculate the EMI in a fraction of a second.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Apart from the EMI amount, a Car Loan calculator also gives you a breakdown of the principal and interest amount payable for the borrowed loan. And this provides you with the total borrowing cost of the car financing. </span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Most EMI calculators also provide a graphical representation of the EMI calculation. A Car Loan eligibility calculator helps you know the loan eligibility amount or the car purchase.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Using a Car Loan EMI calculator is wise to determine your likely loan interest cost and EMI amount.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><b><span lang="EN" style="color:#0e101a">What is a Car Loan EMI?</span></b></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">EMI stands for equated monthly installment. It is the total amount you must repay against your Car Loan or any other loan monthly. It comprises your principal portion of the loan (which you&#39;ve borrowed) and the interest the bank charges.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Manually, a Car Loan EMI is calculated using the formula - </span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><b><span lang="EN" style="color:#0e101a">p x r x (1+r) ^n / [(1+r) ^n-1]</span></b></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Here,</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">P is the principal loan amount you borrow for the car purchase</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">R is the interest rate</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">and n is the monthly installments</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">However, calculating it through an online Car Loan calculator is advisable to find your Car Loan EMI and compare different EMI options.</span></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><b><span lang="EN" style="color:#0e101a">How to Use the Car Loan Calculator?</span></b></span></span></span></p>

<ul>
	<li class="normal" style="margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">This online EMI calculator is relatively easy if you pay attention to the seeded information.</span></span></span></span></li>
	<li class="normal" style="margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Remember that the amounts can be considerable, typically in Lakhs, so enter the information carefully.</span></span></span></span></li>
	<li class="normal" style="margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">The two single most important numbers that make your EMI affordable are - loan term and loan amount.</span></span></span></span></li>
	<li class="normal" style="margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">A higher loan amount increases the EMI. And a shorter term means higher EMI and vice-versa. You can change these numbers to reach a convenient figure for your EMI payments.</span></span></span></span></li>
	<li class="normal" style="margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">The interest rates may vary based on your chosen lender. Your results may vary slightly from one EMI calculator to the other for the same variables.</span></span></span></span></li>
</ul>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><b><span lang="EN" style="color:#0e101a">How Can the Car Loan EMI Calculator Help You?</span></b></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">As you have seen, the Car Loan EMI calculator uses a complex mathematical formula. It means doing this calculation manually can be a hassle. And an online Car Loan calculator is your answer to this problem. Other than hassle-free calculation, the calculator gives you the following benefit -</span></span></span></span></p>

<ul>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">A Car Loan calculator shows the EMI amount in minutes.</span></span></span></span></li>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">EMI calculators calculate the amounts digitally and are an accurate and reliable source for the computation.</span></span></span></span></li>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Car loan calculators are easy to reset so that you can enter multiple loan options.</span></span></span></span></li>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Online loan calculators help us decide our affordability and monthly budget.</span></span></span></span></li>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">Most calculators display a graphical representation of the total principal and interest amount.</span></span></span></span></li>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">You can find out the total interest you need to pay for the chosen tenure.</span></span></span></span></li>
</ul>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><b><span lang="EN" style="color:#0e101a">Importance of a Car Loan Calculator</span></b></span></span></span></p>

<p class="normal" style="margin-bottom:13px"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">You might be wondering why you need an online EMI calculator if the lender is going to do all the calculations. </span></span></span></span></p>

<ul>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">First off, there is tons of competition among Car Loan providers. And to get the best deal, using calculators is the best way. This way, you can avoid borrowing expensive loans.</span></span></span></span></li>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">The most crucial benefit you get from a Car Loan EMI calculator is setting expectations for your car finance. And this gives you a kick start before you even start the loan process.</span></span></span></span></li>
	<li class="normal" style="margin-bottom: 13px; margin-left: 8px;"><span style="font-size:11pt"><span style="line-height:115%"><span style="font-family:Arial,&quot;sans-serif&quot;"><span lang="EN" style="color:#0e101a">There is a chance of disparity between interest rates. One can&#39;t change the interest rate of a particular provider, but there&#39;s a chance to adjust them in your budget or seek a lower rate.</span></span></span></span></li>
</ul>

<p>&nbsp;</p>
</div>
</div>
</div>
</section>

<section class="pt-5 pb-5 wrp-faq">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title">
<h1 class="mb-2 font-weight-bold text-dark f-17"><strong>Frequently Asked Questions</strong></h1>

<div class="bar">&nbsp;</div>
</div>
</div>

<div class="col-md-12">
<div class="accordion" id="accordionExample">
<div class="card">
<div class="card-header" id="headingOne"><button aria-expanded="false" class="collapsed" data-target="#collapseOne" data-toggle="collapse" type="button">Are there any tax benefits like a home loan?</button></div>

<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne" style="">
<div class="card-body">
<p>No, in Car Loans, borrowers do not have any tax benefits. It just helps in financing a new car.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingTwo"><button data-target="#collapseTwo" data-toggle="collapse" type="button">Is collateral required while applying for a Car Loan?</button></div>

<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample" id="collapseTwo">
<div class="card-body table-responsive">
<p>You don&#39;t need any collateral, but you must submit the car&#39;s registration certificate (RC). The RC, endorsed by the bank, will be canceled once the loan repayment completes.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingThree"><button data-target="#collapseThree" data-toggle="collapse" type="button">How can I know the interest amount?</button></div>

<div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample" id="collapseThree">
<div class="card-body">
<p>Using a Car Loan calculator, you can know your EMI in a few seconds.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingFour"><button data-target="#collapseFour" data-toggle="collapse" type="button">What is the maximum tenure of a Car Loan?</button></div>

<div aria-labelledby="headingFour" class="collapse" data-parent="#accordionExample" id="collapseFour">
<div class="card-body">
<p>The maximum repayment period of a Car Loan is seven years, which may vary based on your lender.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingFive"><button data-target="#collapseFive" data-toggle="collapse" type="button">What are documents required?</button></div>

<div aria-labelledby="headingFive" class="collapse" data-parent="#accordionExample" id="collapseFive">
<div class="card-body">
<p>The borrower needs to submit the following documents -</p>

<ul>
	<li>&nbsp;KYC documents such as Aadhaar Card, PAN, Passport</li>
	<li>&nbsp;Income proof - salary slips, bank statements, ITR with the audit report</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingSix"><button data-target="#collapseSix" data-toggle="collapse" type="button">What are different Car Loan EMI interest rates?</button></div>

<div aria-labelledby="headingSix" class="collapse" data-parent="#accordionExample" id="collapseSix">
<div class="card-body">
<p>Car Loan EMI interest rates are of two types;</p>

<p>you can check them out below -</p>

<ul>
	<li>&nbsp;Fixed - Fixed rate remains fixed during the loan tenure. Although the fixed interest rate is likely to be higher than the floating rate, the borrower will always know exactly how much he will have to repay.</li>
	<li>Floating - A floating rate may change depending on changes in the financial market. It can be profitable if the financial market is favorable. It will go up later if the MCLR increases. You should know that the interest rate will vary from lender to lender. And using a Car Loan calculator gives the exact EMI liability; you need to pay for the applicable rate of interest. Use the Car Loan EMI calculator and know how much EMI you need to pay for the offered interest rate.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingSeven"><button data-target="#collapseSeven" data-toggle="collapse" type="button">What is the amortization schedule for Car Loan EMI?</button></div>

<div aria-labelledby="headingSeven" class="collapse" data-parent="#accordionExample" id="collapseSeven">
<div class="card-body">
<p>The Car Loan EMI you pay has two components, principal and interest. The amortization schedule outlines how much EMI amount you have to pay to reduce your principal amount and charged interest. Use the Car Loan calculator for the total breakup of principal and interest amount.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingEight"><button data-target="#collapseEight" data-toggle="collapse" type="button">What is car loan prepayment?</button></div>

<div aria-labelledby="headingEight" class="collapse" data-parent="#accordionExample" id="collapseEight">
<div class="card-body">
<p>It is called prepayment when you wish to pay off the remainder of the loan in one go. You can do this with the help of an EMI calculator. With the help of the tool, know when it will be beneficial to pay off the loan balance to save more on interest.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingnine"><button data-target="#collapsenine" data-toggle="collapse" type="button">What are the benefits of a car loan EMI calculator?</button></div>

<div aria-labelledby="headingnine" class="collapse" data-parent="#accordionExample" id="collapsenine">
<div class="card-body">
<p>Upon using the EMI calculator for a Car Loan, you will get the following benefits -</p>

<ul>
	<li>&nbsp;Get to know your EMI amount before the loan application</li>
	<li>&nbsp;Have the opportunity to compare the EMIs of different car loans</li>
	<li>&nbsp;Have the upper hand in the loan application process</li>
	<li>&nbsp;Get the lowest interest by adjusting the tenure and loan amount</li>
	<li>&nbsp;If you wish to buy a car on loan today, try online EMI calculators from different loan providers. Keep these calculators accessible, and you will be surprised at how helpful they can give you the information you need for your purchase.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<script>
$("#home-loan-button").click(function() {
    
        var formData = new FormData($("#home-loan")[0]);
        $.ajax({
            method: 'post',
            dataType: 'json',
            url: "{{ route('create-home-loan') }}",
            processData: false,
            contentType: false,
            data: formData,
            success: function(data) {
                if (data.success == true) {
                    $(".text-danger").html('').hide();
                    $("#success").html('');
                    $("#success").html('<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2"><div class="d-flex align-items-center"><div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div><div class="ms-3"><h6 class="mb-0 text-success">' + data.msg + '</h6></div></div><button type="button" class="btn-close" id="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    $('#personal-loan')[0].reset();

                }

                if (data.success == false) {
                    $(".text-danger").html('').hide();
                    for (control in data.errors) {
                        $('#error-' + control.split('.').join("")).show().html(data.errors[control]);
                    }
                }
            }
        });
    });

/*persional loan hide show div code here */
  $( document ).ready(function() {
    $(".hidediv").hide();
    $( "#city" ).keypress(function() {
      //alert();
    $("#showdiv").show();
    $("#hidediv").removeClass();
});
});
    </script>
 @endsection




 