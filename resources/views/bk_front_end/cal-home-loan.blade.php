@extends('front_end_layout.home')
@section('content') 
<style>
  section.banner-img:before {
    display: none;
}
.first-form form{margin: 0px;}
.banner-img {
    min-height: auto;}
    .calculatorcontainer {
  background: #007bff;
    background-color: rgb(0, 123, 255);
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
         <h1 class="text-white text-center" style="z-index: 1;">Home Loan EMI Calculator</h1>
         <h5 class="text-white text-center"  style="z-index: 1;"> Speculate EMI on Home Loans Before Applying</h5>
      </div>
            
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Home Loan EMI Calculator</h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>Use the Home Loan EMI Calculator and know your exact EMI on a home loan. See whether the EMI on the Loan fits into your monthly budget or not.<br>
When planning to buy your dream home, you may have discovered that purchasing a house is more complex than it seems. And it is a more lengthy process with a Home Loan. Crunching the budget numbers is necessary when applying for a home loan. This way, you don't default on the repayment. <br>
But as an ordinary citizen has little interest in computing EMIs manually, it is an uphill battle for them. And there's only one tool that can help you. So, here you can see how the calculator for calculating home loan EMIs can be a useful tool for you.
A Home Loan calculator is an online tool which calculates EMIs. Banks and NBFCs Home Loan calculator gives you the EMI amount. And along with that, you get the payment breakup component. The results you get from the Home Loan EMI tool are the total payable principal and interest amount.<br>
Fortunately, you can use online EMI calculators on your Smartphone, laptop, tablet or computer if you have an internet connection. This great tool helps you decide the amount and term of your loan. However, before jumping in, let's figure out what a Home Loan EMI calculator is.
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
          <h2>Home Loan Calculator</h2>
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

<section class=" pt-5 pb-5 wrp-faq">

       <?php $pages=pages('pages','12');
       echo $pages->content; ?>
  
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




 