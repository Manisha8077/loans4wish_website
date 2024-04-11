@extends('front_end_layout.home')
@section('content') 
<style>
  section.banner-img:before {
    display: none;
}
.first-form form{margin: 0px;}
.banner-img {
    min-height: auto;}

    .heading-card{
  color:black;
  text-transform: uppercase;
  font-size: 16px;
  font-weight:bold;
 }  
</style>
<section class="banner-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/car-loan.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="text-white text-center" style="z-index: 1;">Apply for a Car Loan and Get your Favorite Car</h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Check the Interest Rate, Tenure, and Maximum Loan amount of Car Loans and buy your favorite car whether a new one or a used car.</h5>
      </div>
      <div class="col-md-8 p-5">


      <div class="row gy-5 gx-5 mb-5">
    
    <div class="col-md-3" >
              <div class="card h-100" style="width: 18rem;">
                  <div class="card-body">
                  <h5 class="card-title heading-card">Business Loan</h5>
                  <p class="card-text">{{ Str::limit("A Business Loan can assist businesses in real time and help them overcome minor and major obstacles. Business and economics are constantly changing, and while the competition is becoming more and more intense, opportunities are forever expanding. Innovative thinking and new ideas have immense potential for both established and new businesses if acted upon and realised. But, only some end up capitalising on their business ideas as they get caught up in managing their finances. During such times, a timely capital infusion into your company allows you to open the doors of possibility and enable you to deal with any hurdles on the way to success. 
                  Today, the ease with which business funding is available with Banks and NBFCs.",200) }}</p>
                  <a href="https://www.myzeon.com/business-loan" class="btn btn-primary">Know More</a>
                  </div>
              </div>
          </div>

  <div class="col-md-3" >
      <div class="card h-100" style="width: 18rem;">
          <div class="card-body">
          <h5 class="card-title heading-card">Personal Loan</h5>
          <p class="card-text">{{ Str::limit("Personal Loans are the lenders of the last resort when you fall into any type of financial emergency whether you are going for a house renovation or dealing with some medical issues. Ultimately, all matters are the funds you have to deal with the financial issues. A personal loan at a low interest rate can be the cherry on the cake to deal with such problems. Therefore, MyZeon offers personal loans at a starting interest rate of 10.25% per annum and for a tenure of up to 7 years. It is better to compare all the details of a loan in one place rather than wandering around from bank to bank. Here you can have a look at the personal loan details offered by different banks and NBFCs.",210) }}</p>
          <a href="https://www.myzeon.com/personal-loan" class="btn btn-primary">Know More</a>
          </div>
      </div>
  </div>



  <div class="col-md-3">
                <div class="card h-100" style="width: 18rem;">
                    
                    <div class="card-body">
                    <h5 class="card-title heading-card">Home Loan </h5>
                    <p class="card-text">
                  {{ Str::limit("A house is a big financial decision, and a home loan plays an important role. A Home Loan loan is useful in getting a lump sum amount for the house purchase. Based on your repayment capacity, property value and many other factors, the bank provides you with a home loan amount. And you don't need to hurry to pay off the borrowed amount, as there is a long tenure from 10-30 years. 
                      This article will help you understand the Home Loan and how it can help you buy a house.",200) }}</p>
                    <a href="https://www.myzeon.com/home-loan" class="btn btn-primary">Know More</a>
                    </div>
                </div>
            </div>

            

  <div class="col-md-3">
  <div class="card h-100" style="width: 18rem;">
  
  <div class="card-body">
  <h5 class="card-title heading-card">Loan Against Property</h5>
  <p class="card-text">
  {{  Str::limit("A loan against property (LAP) is a secured loan designed to cater to your urgent financial need. In this, your property is pledged as security with the bank. You can apply for a loan against property to meet personal or business requirements.
  There is no restriction on how the borrower uses the funds. Hence, you are free to use a LAP for various purposes.",210)}}  </p>
   <a href="https://www.myzeon.com/loan-against-property" class="btn btn-primary">Know More</a>
  </div>
  </div>
  </div>


</div>

        <form method="post" enctype="multipart/form-data" action="{{ route('create-car-loan') }}" id="car-loan">
             @csrf
          <div class="row">
             
            <div class="col-md-6">
              <div class="form-group">
                <label>Desired Loan Amount <span class="text-danger">*</span></label>
               <input type="text" name="desired_loan_amount" class="form-control numberonly" placeholder="" required>
                <p class="text-danger" id="error-desired_loan_amount" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tenure <span class="text-danger">*</span></label>
                <select class="form-control" required name="tenure">
                  <option value="">Please Select</option>
                  <option value="1 Year">1 Year</option>
                  <option value="2 Year">2 Year</option>
                  <option value="3 Year">3 Year</option>
                  <option value="4 Year">4 Year</option>
                  <option value="5 Year">5 Year</option>
                </select>
                 <p class="text-danger" id="error-tenure" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Employment Status <span class="text-danger">*</span></label>
                 <select class="form-control" required name="employment_status">
                  <option value="">Please Select</option>
                  <option value="Salaried">Salaried</option>
                  <option value="Self Employed Business">Self Employed Business</option>
                  <option value="Self Employed Professional">Self Employed Professional</option>
                </select>
                 <p class="text-danger" id="error-employment_status" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Monthly Income <span class="text-danger">*</span></label>
                <input type="text" class="form-control numberonly" placeholder="₹" required name="monthly_income">
                 <p class="text-danger" id="error-monthly_income" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>City <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Mention City Name" name="city" id="city" required>
                 <p class="text-danger" id="error-city" style="display: none"></p>
              </div>
            </div>
          <div class="row hidediv pl-3 pr-3" id="showdiv" style="">
            <div class="col-md-12">
              <p class="mb-2">
                <b>Just fill a few more details to get quote...</b>
              </p>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name <span class="text-danger">*</span></label>
                 <input type="text" class="form-control" placeholder="Please Mention First Name" required name="first_name">
                 <p class="text-danger" id="error-first_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
               <input type="text" class="form-control" placeholder="Please Mention Last Name" name="last_name">
                 <p class="text-danger" id="error-last_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile Number <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Please Mention Mobile Number" required name="mobile_number">
                <p class="text-danger" id="error-mobile_number" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>E-Mail ID <span class="text-danger">*</span></label>
                <input type="email" class="form-control" placeholder="Please Mention E-Mail ID" required name="email">
                <p class="text-danger" id="error-email" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>DOB <span class="text-danger">*</span></label>
                
               <input type="date" name="dob" placeholder="dd-mm-yyyy"  class="form-control" placeholder="Please Mention Date of Birth">
                <p class="text-danger" id="error-dob" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Company Name</label>
               <input type="text" class="form-control" placeholder="Please Mention Company Name" required name="company_name">
                 <p class="text-danger" id="error-company_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Car Type </label>
                <select class="form-control" name="car_type">
                 <option value="">--select--</option>   
                <option value="Interested In">Interested In</option>
<option value="New">New</option>
<option value="Used">Used</option>
                </select>
                <p class="text-danger" id="error-car_type" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Car Booked </label>
                <br>
                <input type="radio" name="car_booked" id="yes" value="Yes">
                <label for="yes">Yes</label> &nbsp; <input type="radio" name="car_booked" value="No" id="no">
                <label for="no">NO</label>
                 <p class="text-danger" id="error-car_booked" style="display: none"></p>
              </div>
            </div>
             <div class="col-md-4">
              <div class="form-group">
                <label>Delivery Date </label>
                <input type="date" class="form-control" name="delivery_date">
              
              </div>
            </div>
            

            
            <div class="col-md-12">
            <div class="form-group d-flex align-items-baseline">
            <input type="checkbox" name="checkbox" class="mr-3"> <label>I authorize myzeon.com & its partnering banks to contact me to explain the product & I Agree to Privacy policy and Terms and Conditions.</label>
             <br/><p class="text-danger" id="error-checkbox" style="display: none"></p>
            </div>
            </div>  
          </div>
            <div class="col-md-12 text-right">
              
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
               <!--<a href="car-loan-continue.php" class="btn btn-primary">Get Quotes</a>-->
              <!-- <a href="thank-you.php" class="btn btn-primary">Submit</a> -->
              <button type="button" id="car-loan-button"  class="btn btn-primary">
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
          <h5 class="mb-2 font-weight-bold text-dark f-17">Car Loan </h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>Getting a car is still a dream for many, and a car loan will help you fulfil your dream. The prices of new cars might keep your dreams in the back seat. But not anymore; with the growing market of cars, many banks and NBFCs provide car loans to prospective buyers. This way, it is more affordable for new car owners to get the desired car they want under their budget.</p>
        </div>
      </div>

  </div>
</section>
<section class="bg-light pt-5 pb-5" id="Compare">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Top Car Loans in India</h5>
          <div class="bar"></div>
        </div>
        <p class="mb-2">The following banks provide new car loans in India. So compare the loan offers from the below-mentioned banks and see which meets your requirements per your desired car model.</p>
      </div>
      <div class="col-md-12">
         <form method="post" enctype="multipart/form-data" action="" id="compare-loan">
             @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Select Bank</label>
                <select class="form-control select_multi" required="" name="bank_name[]" multiple>
                	<!-- <option value="">--Select--</option> -->
 <?php foreach (getBank() as $key => $value) {?>                    
<option value="<?php echo $value->bank_name?>"><?php echo $value->bank_name?></option>
 <?php }?></select>
                  <input type="hidden"  name="loan_type" value="car-loan">    
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Loan Amount</label>
                <input type="text" class="form-control numberonly" name="loan_amount" required=""> 
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Monthly Income</label>
                <input type="text" class="form-control numberonly">
              </div>
            </div>
           
          </div>
          <div class="row">
          <div class="col-md-12 text-center mb-5">
              <button type="button" id="compare_button" class="btn btn-primary">Compare Interest Rates</button>
            </div>
          </div>     
        </form>
          <div class="col-md-12">
             <div class="table-responsive">
        <table class="table table-bordered">
            <tbody id="tab" style="display:none">
        <tr>
        <td><b>Name of the Bank/NBFC</b></td>
        <td><b>Interest Rate</b></td>
        <td><b>Loan Amount</b></td>
        <td><b>Tenure</b></td>
        <td><b>Processing Fee</b></td>
        </tr>
        
        </tbody>
        </table>
      </div>
      </div>
      </div>
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Bank</th>
                <th>Floating Interest Rate</th>
                <th>Per Lac EMI</th>
                <th>Processing Fees</th>
              </tr>
            </thead>
            <tbody>
              		<tr>
              			<td style="border-bottom:1px solid black; width:147px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank of Baroda</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:92px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.50% to 15%.00</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12 to 84 months</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Up to 90% of the car price</span></span></span></p>
              			</td>
              		</tr>
              		<tr>
              			<td style="border-bottom:1px solid black; width:147px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Canara Bank </span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:92px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.95% onwards</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12 to 84 months</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Up to 90% of the car price for a loan up to INR 25 Lakh</span></span></span></p>

              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Up to 80% for loan above INR 25 Lakh</span></span></span></p>
              			</td>
              		</tr>
              		<tr>
              			<td style="border-bottom:1px solid black; width:147px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Axis Bank </span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:92px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.45% to 13.05%</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12 to 84 months</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Minimum INR 1 Lakh and a maximum of 100% of the on-road price.</span></span></span></p>
              			</td>
              		</tr>
              		<tr>
              			<td style="border-bottom:1px solid black; width:147px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Federal Bank</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:92px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">10.40% onwards</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12 to 84 months</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Up to 100% of the on-road price</span></span></span></p>
              			</td>
              		</tr>
              		<tr>
              			<td style="border-bottom:1px solid black; width:147px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">SBI</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:92px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.40% to 9.20%</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12 to 84 months</span></span></span></p>
              			</td>
              			<td style="border-bottom:1px solid black; width:193px; padding:5px 11px 5px 11px; height:29px; background-color:white; border-top:none; border-right:1px solid black; border-left:none" valign="top">
              			<p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Up to 90% of the on-road price</span></span></span></p>
              			</td>
              		</tr>
  	             </tbody>         
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<section class=" pt-5 pb-5 wrp-faq">

	<?php $pages=pages('pages','4');
       echo $pages->content; ?>
</section>
   <script>
$("#car-loan-button").click(function() {
    
        var formData = new FormData($("#car-loan")[0]);
        $.ajax({
            method: 'post',
            dataType: 'json',
            url: "{{ route('create-car-loan') }}",
            processData: false,
            contentType: false,
            data: formData,
            success: function(data) {
                if (data.success == true) {
                    $(".text-danger").html('').hide();
                    $("#success").html('');
                    $("#success").html('<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2"><div class="d-flex align-items-center"><div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div><div class="ms-3"><h6 class="mb-0 text-success">' + data.msg + '</h6></div></div><button type="button" class="btn-close" id="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    $('#car-loan')[0].reset();

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
    
    /*car loan hide show div code here */
  $( document ).ready(function() {
    $(".hidediv").hide();
    $( "#city" ).keypress(function() {
      //alert();
    $("#showdiv").show();
    $("#hidediv").removeClass();
});
});

    $("#compare_button").click(function() {
    var bank_name= $("[name='bank_name[]']").val();
    if(bank_name!=''){
        var formData = new FormData($("#compare-loan")[0]);
        $.ajax({
            method: 'post',
            url: "{{ route('compare-interest-rate') }}",
            processData: false,
            contentType: false,
            data: formData,
            success: function(data) {
               $("#tab").show().html(data);
            }
        });
    }
    else
    {
    alert("Please Select Bank");    
    }
    });
    </script>
  @endsection