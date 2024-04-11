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

@import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap');

:root {
    --background-color: white;
    --vigo-color: #5367FF;
    --slider-color: #00D09C;
    --input-number-color: #EBEBEB;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-left: 0.2em;
    margin-right: 0.2em;
    margin-bottom: 0.9em;
}

body {
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
    background-color: var(--background-color);
    color: #222;
}

#amountLabel {
    width: 210px;
    ;
}

.sip-calculator {
    border: 5px solid white;
    -moz-box-shadow: 0px 0px 5px hsl(15, 2%, 55%);
    -webkit-box-shadow: 0px 0px 5px hsl(15, 2%, 55%);
    box-shadow: 0px 0px 10px hsl(0, 0%, 73.9%);
    padding: 3em;
   /* margin: 1em;*/
    width: 100%;
    background-color: white;
}

.sip-calculator-amount,
.sip-calculator-year,
.sip-calculator-roi {
    margin-bottom: 2.2em;
    width: 100%;
}

.amount-slider,
.year-slider,
.roi-slider {
    width: 100%;
    height: 7px;
    border-radius: 10px;
    background: var(--slider-color);
    outline: none;

}

input[type=range] {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    cursor: pointer;
}

input[type=range]:focus {
    outline: none;
}

input[type=range]::-ms-track {
    width: 100%;
    cursor: pointer;
}

input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: 2.5px solid var(--vigo-color);
    height: 20px;
    width: 20px;
    border-radius: 40px;
    background: white;
    cursor: pointer;
    margin-top: 0px;

}

input[type=range]::-moz-range-thumb {
    border: 2.5px solid var(--vigo-color);
    height: 20px;
    width: 20px;
    border-radius: 40px;
    background: white;
    cursor: pointer;
}

input[type=range]::-ms-thumb {
    border: 2.5px solid var(--vigo-color);
    height: 20px;
    width: 20px;
    border-radius: 40px;
    background: white;
    cursor: pointer;
}

input[type=number] {
    -moz-appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
    background: var(--input-number-color);
    border-style: none;
    height: 30px;
    margin-left: 20px;
    margin-right: 10px;
    text-align: right;
    padding-right: 5px;
    font-family: 'Roboto', sans-serif;
    font-size: 1.5em;
    border-radius: 4px;
    /* float: right; */
}

input[type=number]:focus {
    outline: none;
    border: 1px solid #3197EE;

}

/* For radio */
.radio {
    margin: 0.5rem;
    text-align: center;
}

.radio input[type="radio"] {
    position: absolute;
    opacity: 0;
}

.radio input[type="radio"]+.radio-label:before {
    content: '';
    background: #f4f4f4;
    border-radius: 100%;
    border: 1px solid #b4b4b4;
    display: inline-block;
    width: 1.4em;
    height: 1.4em;
    position: relative;
    top: -0.2em;
    margin-right: 1em;
    vertical-align: top;
    cursor: pointer;
    text-align: center;
    transition: all 250ms ease;
}

.radio input[type="radio"]:checked+.radio-label:before {
    background-color: #5367FF;
    box-shadow: inset 0 0 0 4px #f4f4f4;
}

.radio input[type="radio"]:focus+.radio-label:before {
    outline: none;
    border-color: #3197EE;
}

.radio input[type="radio"]:disabled+.radio-label:before {
    box-shadow: inset 0 0 0 4px #f4f4f4;
    border-color: #b4b4b4;
    background: #b4b4b4;
}

.radio input[type="radio"]+.radio-label:empty:before {
    margin-right: 0;
}

/* Radio End */

@media only screen and (max-width: 325px) {
    .sip-calculator {
        height: 560px;
    }

    h1 {
        font-size: 1.5em;
    }
}

@media (max-width: 576px) {
    body {
        font-size: smaller;
    }

    .sip-calculator {
        width: 100%;
        padding: 2em;
        margin: .1em;
    }
}

/*Groww Logo on mobile*/
@media (max-width: 768px) {
    .groww-logo {
        width: 100px;
        height: 25px;
    }
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
         <h1 class="text-white text-center" style="z-index: 1;">PPF Calculator</h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Calculate the Amount of Accumulated Provident Fund using PPF Calculator</h5>
      </div>
            
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">PPF Calculator</h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>Use the Public Provident Fund Calculator and speculate the final amount you will receive at the time of your maturity including the interest amount.<br>Public Provident Fund (PPF) was introduced in India in 1968, and it mobilizes small savings in the form of investment. It remains a favorite savings avenue for many investors as the returns are tax-free. <br>This investment is also called a savings-cum-tax savings investment, as it enables one to build a retirement corpus. And you don't even have to worry about taxes while saving on PPF. So anyone looking for a safe investment option should consider opening a PPF account.
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
          <h2>PPF Calculator</h2>
        </div>
      </div>
          <article class="post-7 page type-page status-publish hentry w-100">
            <div class=calculatorcontainer>
              <div class=emicalculatorcontainer>
                <div id=loanformcontainer class=row>
                  <div id=emicalculatordashboard class=col-sm-12>
                    <ul class=loanproduct-nav>
                      <li id=car-loan class=active>
                        <a href=#>PPF Calculator</a>
                      </li>
                    </ul>
                    <div class=cleardiv></div>
                    <div id=emicalculatorinnerformwrapper>
                          <form name="sipForm">
                            <div class="sip-calculator">
                                <div class="section-title text-center">
                                  <h2>PPF Calculator</h2>
                                  </div>
                                <div class="sip-calculator-amount">
                                    <p style="margin-top: 1.8em;">
                                        <label id="amountLabel"> Monthly Investment</label>
                                        <input name="Amount" id="inputAmount" type="number" step="500" value="10000" min="500" max="150000"
                                            oninput="showValAmount(this.value)" />
                                        <span id="amount"></span> Rs.
                                    </p>
                                    <input class="amount-slider" name="realAmount" id="myAmount" type="range" step="500" min="500" max="150000"
                                        value="10000" />
                                </div>
                                <div class="sip-calculator-year">
                                    <p style="margin-top: 1.8em;">
                                        Time period (in years)
                                        <input name="Years" id="inputYears" type="number" value="15" min="15" max="50"
                                            oninput="showValYears(this.value)" />
                                        <span id="years"></span> Yr
                                    </p>
                                    <input class="year-slider" name="realYears" id="myYears" type="range" min="15" max="50" value="15">
                                </div>
                                <div class="sip-calculator-roi">
                                    <p style="margin-top: 1.8em;">
                                        Rate of interest
                                        <input name="Retunrs" id="inputRoi" type="number" value="7.1" min="7.1" max="7.1"
                                            oninput="showValRoi(this.value)" />
                                        <span id="roi"></span> %
                                    </p>
                                    <input class="roi-slider" name="realRoi" id="myRoi" type="range" min="7.1" max="7.1" value="7.1">
                                </div>
                                <p style="margin-top: 1em;font-size: 1.2em; background: #f1f2f3; border-radius: 7px; padding: 20px;">
                                    <strong>Invested amount:</strong>
                                    <span id="investedamount" style="font-size: 1.2em;margin-left: 8px;"></span>
                                    <strong>Total interest:</strong>
                                    <span id="totalinterest" style="font-size: 1.2em;margin-left: 8px;"></span>
                                    <strong>Maturity value:</strong>
                                    <span id="yourWealth" style="font-size: 1.2em;margin-left: 8px;"></span>
                                </p>
                                <!-- <div style="margin-top: 15px;"><img class="groww-logo" src="groww-logo-ed.png" target="_parent" align="right"/></div> -->
                            </div>
                        </form>
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
</section>

<section class=" pt-5 pb-5 wrp-faq">

       <?php $pages=pages('pages','17');
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


  /* ppf calculator*/
          'use strict';
        var amountSlider = document.getElementById("myAmount");
        var amountOutput = document.getElementById("inputAmount");
        var roiSlider = document.getElementById("myRoi");
        var roiOutput = document.getElementById("inputRoi");
        var yearSlider = document.getElementById("myYears");
        var yearOutput = document.getElementById("inputYears");

        amountOutput.innerHTML = amountSlider.value;
        roiOutput.innerHTML = roiSlider.value;
        yearOutput.innerHTML = yearSlider.value;

        amountSlider.oninput = function () {
            amountOutput.innerHTML = this.value;
        }
        roiSlider.oninput = function () {
            roiOutput.innerHTML = this.value;
        }
        yearSlider.oninput = function () {
            yearOutput.innerHTML = this.value;
        }

        function showValAmount(newVal) {
            amountSlider.value = newVal;
            calculateIt();
        };
        function showValRoi(newVal) {
            roiSlider.value = newVal;
            calculateIt();
        };
        function showValYears(newVal) {
            yearSlider.value = newVal;
            calculateIt();
        };

        amountSlider.addEventListener("input", updateValueAmount);
        roiSlider.addEventListener("input", updateValueRoi);
        yearSlider.addEventListener("input", updateValueYears);

        function updateValueAmount(e) {
            amountOutput.value = e.srcElement.value;
            calculateIt();
        }
        function updateValueRoi(e) {
            roiOutput.value = e.srcElement.value;
            calculateIt();
        }
        function updateValueYears(e) {
            yearOutput.value = e.srcElement.value;
            calculateIt();
        }

        var calculatorMode = 'sip';
        var heading = document.getElementById("heading");
        var amountLabel = document.getElementById("amountLabel");

        function changeMode(mode){
            calculatorMode = mode;
            heading.innerHTML = mode === 'sip' ? 'SIP Calculator' : 'Lumpsum Calculator';
            amountLabel.innerHTML = mode === 'sip' ? 'Monthly Investment :' : 'Total Investment :';
            calculateIt();
        }

        function calculateIt() {
            var wealthOutput = document.getElementById("yourWealth");
            var investedamount = document.getElementById("investedamount");
            var totalinterest = document.getElementById("totalinterest");
            var A = document.sipForm.realAmount.value;
            var R = document.sipForm.realRoi.value;
            var N = document.sipForm.realYears.value;
            var sip = Math.round((Math.pow((1 + (Math.pow((1 + R / 100), (1 / 12)) - 1)), (N * 12)) - 1) / (Math.pow((1 + R / 100), (1 / 12)) - 1) * A);
            var lumpsum = Math.round(Math.pow((1 + R / 100), N) * A);
            var finalOutput = calculatorMode === 'sip' ? sip : lumpsum;
            var totalint=finalOutput - (A * N * 12)
            investedamount.innerHTML = "Rs. " + A * N * 12; // Print BMI
            totalinterest.innerHTML = "Rs. " + totalint; // Print BMI
            wealthOutput.innerHTML = "Rs. " + finalOutput; // Print BMI
        }
        calculateIt();
    </script>
 @endsection




 