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
         <h1 class="text-white text-center" style="z-index: 1;">GST Calculator</h1>
         <h5 class="text-white text-center"  style="z-index: 1;"> Calculate the Exact GST on Goods and Services</h5>
      </div>
            
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">GST Calculator</h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>make use of the GST Calculator and calculate the GST you will have to pay on your Goods and services you are selling through your business.<br>Goods and Services Tax is also known as GST. And you may have seen this during the tax filing. GST is a form of tax that the Government of India imposes at the national level on all the services and goods provided to the citizens.
Several GST Calculators are available online, which you can use to determine the GST cost.
The Government of India levies the GST on consumer goods and services at a national level.
GST is derived from Value Added Tax (VAT). VAT is a kind of tax levied on the sale of goods and services. It is applied when a commodity is ultimately sold to the consumer. <br>
VAT plays an integral part in the country's GDP. While VAT is levied on the sale of goods and services, the actual tax, which is GST, is levied on customers or end-users who purchase goods and services. 
So VAT is an indirect tax which is paid to the government by customers but via producers of goods and services.
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
          <h2>GST Calculator</h2>
        </div>
      </div>
          <article class="post-7 page type-page status-publish hentry w-100">
            <div class=calculatorcontainer>
              <div class=emicalculatorcontainer>
                <div id=loanformcontainer class=row>
                  <div id=emicalculatordashboard class=col-sm-8>
                    <ul class=loanproduct-nav>
                      <li id=car-loan class=active>
                        <a href=#>GST Calculator</a>
                      </li>
                    </ul>
                    <div class=cleardiv></div>
                    <div id=emicalculatorinnerformwrapper class="dkgstform">
                      <div>
                         <label for="price">Amount: </label>
                         <input id="price" type="number" placeholder="Please enter your amount" value="100" />
                       </div>
                       <div>
                         <label for="gst">GST rate (%): </label>
                         <select id="gst">
                           <option value="5">5</option>
                           <option value="12">12</option>
                           <option value="18">18</option>
                           <option value="28">28</option>
                         </select>
                       </div>
                       <div>
                         <button onclick="inpChange()" class="btn btn-default button-primary">Calculate</button>
                       </div>
                       <div>
                         <!-- <label for="priceGst">Pre-GST Amount : </label>
                         <input id="priceGst" type="number" readonly /> -->
                       </div>
                    </div>
                  </div>
          <div class="sidebar col-sm-4">
          <div id=emipaymentsummary class="no-gutter-left no-gutter-right">
            <div id=emiamount>
              <h4>Pre-GST Amount</h4>
              <p>₹ <span id="priceGst"></span>
              </p>
            </div>
            <div id=emitotalinterest>
              <h4>Total GST</h4>
              <p>₹ <span id="total_gst"></span>
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

       <?php $pages=pages('pages','15');
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


  /* GST Calculator code here */
      priceEle = document.getElementById("price");
      gstEle = document.getElementById("gst");
      priceGstEle = document.getElementById("priceGst");
      total_gst = document.getElementById("total_gst");
      function calculateGst(price, tax) {
      return (price * tax/100) + price;
      } 
      function inpChange() {
      if(!isNaN(priceEle.value) && !isNaN(gstEle.value)) {
      price = Number(priceEle.value);
      gst = Number(gstEle.value);
      priceGstEle.value = calculateGst(price, gst).toFixed(2);
      $("#priceGst").text(calculateGst(price, gst).toFixed(2));
      $("#total_gst").text((price * gst / 100));
      }
      }
      inpChange();
    </script>
 @endsection




 