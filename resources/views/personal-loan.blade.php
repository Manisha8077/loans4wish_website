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
      <div class="col-md-4 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/persional-loan-banner-img.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="text-white text-center" style="z-index: 1;">Compare and Apply Instantly for Personal Loan at Lowest Interest Rate</h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Check and apply for an Instant Personal Loan at the lowest rate of interest. Check the tenure, loan amount, and interest rate different banks offer on personal loans.</h5>
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
            <h5 class="card-title heading-card">Car Loan</h5>
            <p class="card-text">
            {{ Str::limit("Getting a car is still a dream for many, and a car loan will help you fulfil your dream. The prices of new cars might keep your dreams in the back seat. But not anymore; with the growing market of cars, many banks and NBFCs provide car loans to prospective buyers. 
            This way, it is more affordable for new car owners to get the desired car they want under their budget.",210) }}
            </p>
            <a href="https://www.myzeon.com/car-loan" class="btn btn-primary">Know More</a>
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

          <form method="post" enctype="multipart/form-data" action="{{ route('create-personal-loan') }}" id="personal-loan">
             @csrf
          <div class="row">
             <div class="col-md-12">
            <h5 class="mb-3 font-weight-bold text-dark f-17">Start Your Journey</h5>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Desired Loan Amount <span class="text-danger">*</span></label>
                <input type="text" name="desired_loan_amount" class="form-control" placeholder="" required >
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
                <input type="text" class="form-control alphaOnly" placeholder="Please Mention First Name" required name="first_name">
                 <p class="text-danger" id="error-first_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control alphaOnly" placeholder="Please Mention Last Name" name="last_name">
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
                <label>Residential Status <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="residential_status" id="residential1" value="Owned">
               
                <label for="residential1">Owned</label> &nbsp; <input type="radio" value="Rented" name="residential_status" id="residential2" required>
                <label for="residential2">Rented</label>
                 <p class="text-danger" id="error-residential" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Company Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention Company Name" required name="company_name">
                 <p class="text-danger" id="error-company_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Annual Tenure <span class="text-danger">*</span></label>
                <select class="form-control" required name="annual_tenure">
                <option value="">--select--</option>    
                <option value="Annual Turnover">Annual Turnover</option>
                <option value="0 - 40 Lacs">0 - 40 Lacs</option>
                <option value="40 Lacs - 1 Cr">40 Lacs - 1 Cr</option>
                <option value="1Cr - 3Crs">1Cr - 3Crs</option>
                <option value="3Crs above">3Crs &amp; above</option>
                </select>
                <p class="text-danger" id="error-annual_tenure" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Have your Financial Statements been audited? <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="audited" id="yes" value="Yes">
                <label for="yes">Yes</label> &nbsp; <input type="radio" value="No" name="audited" id="no" required>
                <label for="no">NO</label>
                <p class="text-danger" id="error-audited" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Office status <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="office_status" id="owned" value="Owned">
                <label for="owned">Owned</label> &nbsp; <input type="radio" value="Rented" name="office_status" id="rented" required>
                <label for="rented">Rented</label>
                <p class="text-danger" id="error-office_status" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Current Business Stability <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Current Business Stability" name="current_business_stability" required>
                 <p class="text-danger" id="error-current_business_stability" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Any Loan Running <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="any_loan_running" id="yes1" value="Yes">
                <label for="yes1">Yes</label> &nbsp; <input type="radio" value="No" name="any_loan_running" id="no1" required>
                <label for="no1">No</label>
                <p class="text-danger" id="error-any_loan_running" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Primary Bank Account <span class="text-danger">*</span></label>
                <input type="text" class="form-control" required name="primary_bank_account">
                <p class="text-danger" id="error-primary_bank_account" style="display: none"></p>
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
             
              <button type="button" id="personal-loan-button"  class="btn btn-primary">
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
      <div class="col-md-2">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Personal Loan </h5>
          <div class="bar1"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>Personal Loans are the lenders of the last resort when you fall into any type of financial emergency whether you are going for a house renovation or dealing with some medical issues. Ultimately, all matters are the funds you have to deal with the financial issues. A personal loan at a low interest rate can be the cherry on the cake to deal with such problems. Therefore, MyZeon offers personal loans at a starting interest rate of <?php $Rate=getRate('personal-loan');  echo  !empty($Rate->rate) ? $Rate->rate.'%':'';?> per annum and for a tenure of up to 7 years. It is better to compare all the details of a loan in one place rather than wandering around from bank to bank. Here you can have a look at the personal loan details offered by different banks and NBFCs.</p>
        </div>
      </div>

  </div>
</section>
<section class="bg-light pt-5 pb-5" id="Compare">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Compare Personal Loans</h4>
        <p class="mb-2">The three major factors that you consider before borrowing a personal loan are the Interest Rate, Loan Tenure, and Loan amount. Therefore, you can compare different banks and NBFCs that offers personal loan to Indian customers.</p>
      </div>
      <div class="col-md-12">
       <form method="post" enctype="multipart/form-data" action="" id="compare-loan">
             @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Select Bank</label>
                <select class="form-control select_multi" required="" name="bank_name[]" multiple>

                <?php foreach (getBank() as $key => $value) {?>                    
<option value="<?php echo $value->bank_name?>"><?php echo $value->bank_name?></option>
 <?php }?></select>
                  <input type="hidden"  name="loan_type" value="personal-loan">    
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Loan Amount</label>
                <input type="text" class="form-control" name="loan_amount" required="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Monthly Income</label>
                <input type="text" class="form-control">
              </div>
            </div>
           
          </div>
          <div class="row">
          <div class="col-md-12 text-center mb-5">
              <button type="button" id="compare_button" class="btn btn-primary">Compare Interest Rates</button>
            </div>
          </div>     
        </form>
      </div>
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped  table-hover table-bordered border-primary">
              <tbody id="tab">
              <tr>
              <td><b>Name of the Bank/NBFC</b></td>
              <td><b>Interest Rate</b></td>
              <td><b>Loan Amount</b></td>
              <td><b>Tenure</b></td>
              <td><b>Processing Fee</b></td>
              </tr>
              <tr>
              <td>ICICI Bank Personal Loan</td>
              <td>10.75% p.a. onwards</td>
              <td>Up to INR 50 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 6 Years</td>
              <td>Up to 2.5% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Kotak Mahindra Bank Personal Loan</td>
              <td>10.99% p.a. onwards</td>
              <td>Up to INR 25 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>Up to 3% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Axis Bank Personal Loan</td>
              <td>10.25% p.a. onwards</td>
              <td>Up to INR 40 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>Up to 2% of the Loan Amount</td>
              </tr>
              <tr>
              <td>IDFC First Bank Personal Loan</td>
              <td>10.49% p.a. onwards</td>
              <td>Up to INR 1 Crore</td>
              <td>Up to 5 Years</td>
              <td>Up to 3.5% of the Loan Amount</td>
              </tr>
              <tr>
              <td>HDFC Bank Personal Loan</td>
              <td>11% p.a. onwards</td>
              <td>Up to INR 40 Lakhs</td>
              <td>Up to 6 Years</td>
              <td>Up to INR 4999</td>
              </tr>
              <tr>
              <td>Yes Bank Personal Loan</td>
              <td>10.99% p.a. onwards</td>
              <td>Up to INR 40 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>As per the Bank’s Norms</td>
              </tr>
              <tr>
              <td>Bajaj Finserv Personal Loan</td>
              <td>13% p.a. Onwards (Salaried)

              17% p.a. Onwards (Non-Salaried)</td>
              <td>Up to INR 25 Lakhs (Salaried)

              Up to INR 45 Lakhs (Non-Salaried)</td>
              <td>Up to 5 Years (Salaried)

              Up to 7 Years (Non-Salaried)</td>
              <td>Up to 4% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Tata Capital Personal Loan</td>
              <td>10.99% p.a. onwards</td>
              <td>Up to INR 35 Lakhs</td>
              <td>Up to 6 Years&nbsp;</td>
              <td>Up to 2.75% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Aditya Birla Finance Personal Loan</td>
              <td>13% p.a. onwards</td>
              <td>Up to INR 50 Lakhs</td>
              <td>Up to 7 Years</td>
              <td>Up to 3% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Incred Personal Loan</td>
              <td>11.49% p.a. onwards</td>
              <td>Up to INR 15 Lakhs</td>
              <td>Up to 7 Years</td>
              <td>As per the Bank’s Norms</td>
              </tr>
              <tr>
              <td>Paysense Personal Loan</td>
              <td>2.3% onwards per month</td>
              <td>Up to INR 4 Lakhs</td>
              <td>Up to 540 Days</td>
              <td>Up to 3% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Finnable Personal Loan</td>
              <td>16% p.a. onwards</td>
              <td>Up to INR 10 Lakhs</td>
              <td>Min:- 6 Months

              Max:- 5 Years</td>
              <td>Up to 4% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Upward Personal Loan</td>
              <td>18% p.a. onwards</td>
              <td>Up to INR 7 Lakhs</td>
              <td>Up to 5 Years</td>
              <td>As per the Company’s Norms</td>
              </tr>
              <tr>
              <td>Finzy Personal Loan</td>
              <td>18% p.a. onwards</td>
              <td>Up to INR 5 Lakhs</td>
              <td>Up to 3 Years</td>
              <td>Up to 5% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Ashv Finance Personal Loan</td>
              <td>18% p.a. onwards</td>
              <td>Up to INR 7 Lakhs</td>
              <td>Min:- 2 Year

              Max:- 5 Years</td>
              <td>As per the Company’s Norms</td>
              </tr>
              <tr>
              <td>AU Small Finance Bank Personal Loan</td>
              <td>Up to 30% per annum</td>
              <td>Up to INR 7.5 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>Up to 5% of the Loan Amount</td>
              </tr>
              <tr>
              <td>IndusInd Bank Personal Loan</td>
              <td>10.49% p.a. onwards</td>
              <td>Up to INR 25 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>Up to 3% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Fullerton Personal Loan</td>
              <td>11.99% p.a. onwards</td>
              <td>Up to INR 30 Lakhs</td>
              <td>Up to 5 Years</td>
              <td>Up to 6% of the Loan Amount</td>
              </tr>
              <tr>
              <td>RBL Bank Personal Loan</td>
              <td>17.50% p.a. onwards</td>
              <td>Up to INR 20 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>Up to 2% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Home Credit Personal Loan</td>
              <td>2% onwards per month</td>
              <td>Up to INR 5 Lakhs</td>
              <td>Min:- 6 Months

              Max:- 4 Years</td>
              <td>Up to 5% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Citibank Personal Loan</td>
              <td>10.75% p.a. onwards</td>
              <td>Up to INR 30 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>Up to 2% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Ujjivan Small Finance Bank Personal Loan</td>
              <td>11.49% p.a. onwards</td>
              <td>Up to INR 10 Lakhs</td>
              <td>Up to 5 Years</td>
              <td>Up to 2% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Standard Chartered Bank Personal Loan</td>
              <td>11.49% p.a. onwards</td>
              <td>Up to INR 50 Lakhs</td>
              <td>Up to 5 Years</td>
              <td>Up to 2.25% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Punjab National Bank Personal Loan</td>
              <td>Up to 15.85% per annum</td>
              <td>Up to INR 20 Lakhs</td>
              <td>Up to 5 Years</td>
              <td>Up to 1% of the Loan Amount</td>
              </tr>
              <tr>
              <td>SBI Personal Loan</td>
              <td>10.30% p.a. onwards</td>
              <td>Up to INR 20 Lakhs</td>
              <td>Up to 6 Years</td>
              <td>Up to 1.5% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Bank of Baroda Personal Loan</td>
              <td>Up to 17.05% per annum</td>
              <td>Up to INR 20 Lakhs</td>
              <td>Up to 6 Years</td>
              <td>Up to 2% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Bank of India Personal Loan</td>
              <td>12.75% p.a. onwards</td>
              <td>Up to INR 20 Lakhs</td>
              <td>Up to 3 Years</td>
              <td>Up to 2% of the Loan Amount</td>
              </tr>
              <tr>
              <td>IDBI Personal Loan</td>
              <td>Up to 14% per annum</td>
              <td>Up to INR 5 Lakhs</td>
              <td>Min:- 1 Year

              Max:- 5 Years</td>
              <td>Up to 1% of the Loan Amount</td>
              </tr>
              <tr>
              <td>Union Bank of India Personal Loan</td>
              <td>10.30% p.a. onwards</td>
              <td>Up to INR 15 Lakhs</td>
              <td>Up to 5 Years</td>
              <td>Up to 1% of the Loan Amount</td>
              </tr>
              <tr>
              <td>IIFL Personal Loan</td>
              <td>14.25% p.a. onwards</td>
              <td>Up to INR 5 Lakhs</td>
              <td>Up to 3 Years</td>
              <td>As per the Company’s Norms</td>
              </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<section class=" pt-5 pb-5 wrp-faq">
   <?php $pages=pages('pages','1');
       echo $pages->content;
 ?> 
</section>
<script>
$("#personal-loan-button").click(function() {
    
        var formData = new FormData($("#personal-loan")[0]);
        $.ajax({
            method: 'post',
            dataType: 'json',
            url: "{{ route('create-personal-loan') }}",
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

/*business loan hide show div code here */
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