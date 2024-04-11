<!-- @extends('front_end_layout.home') -->
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

.p-3{
	height: 350px !important;
	padding: 20px !important;


}
/*ul.loanproduct-nav li.active a {
  background: #007bff !important;
}*/
.btn-secondary.active, .btn-secondary:active, .show > .btn-secondary.dropdown-toggle {
  background-color: #007bff;
  background-image: none;
  border-color: #6c757d;
}
.emicalculatorcontainer {border: 3px dashed #1f05d2;}
</style>

<div class="container-fluid">


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









</div>
      
      @endsection