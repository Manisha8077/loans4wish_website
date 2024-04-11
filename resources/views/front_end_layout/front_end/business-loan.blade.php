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
      <div class="col-md-4 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/business-loan.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="text-white text-center" style="z-index: 1;">Compare and Apply for Business Loan at Lowest Interest Rate</h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Check the Interest Rate, Tenure, and Maximum Loan amount of a Business Loan. Boost your business and expand activities using Business Loans.</h5>
      </div>
      <div class="col-md-8 p-5">
       
          <div class="row gy-5 gx-5 mb-5">
            

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
        
        <form method="post" enctype="multipart/form-data" action="{{ route('create-business-loan') }}" id="business-loan">
            @csrf
          <div class="row">
          	<div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control alphaOnly" placeholder="Please Mention First Name" required name="first_name">
                <p class="text-danger" id="error-first_name " style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control alphaOnly" placeholder="Please Mention Last Name" required name="last_name">
                 <p class="text-danger" id="error-last_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email ID</label>
                <input type="email" class="form-control" placeholder="Please Mention Email ID" required name="email">
                <p class="text-danger" id="error-email" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Please Mention Mobile Number" required name="mobile_number">
                 <p class="text-danger" id="error-mobile_number" style="display: none"></p>
              </div>
            </div>
<div class="col-md-6">
              <div class="form-group">
                <label>Do you have business registration proof</label>
                <select class="form-control"name="business_registration_proof" >
                    <option value="">--select-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                 <p class="text-danger" id="error-business_registration_proof" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>How old is your business</label>
               
                <select  name="how_old_business" title="How old is your business" class="form-control">
                    <option value="">How old is your business</option>
                    <option value="0 to 3 Months">0 to 3 Months</option>
                    <option value="6 Months to 1 Year">6 Months to 1 Year</option>
                    <option value="1 to 5 Years">1 to 5 Years</option>
                    <option value="More than 5 Years">More than 5 Years</option>
                    
                </select>
             <p class="text-danger" id="error-how_old_business" style="display: none"></p>    
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Monthly Revenue</label>
                <select class="form-control" name="monthly_revenue">
                    <option value="">Please select monthly revenue</option>
                    <optgroup label="Top Cities">
                      <option value="0 - 25K">0 - 25K</option>
                      <option value="25K - 1 Lac">25K - 1 Lac</option>
                      <option value="1 - 2.5 Lacs">1 - 2.5 Lacs</option>
                      <option value="2.5 - 5 Lacs">2.5 - 5 Lacs</option>
                      <option value="5 - 8.5 Lacs">5 - 8.5 Lacs</option>
                      <option value="8.5 - 85 Lacs">8.5 - 85 Lacs</option>
                      <option value="More than 85 Lacs">More than 85 Lacs</option>
                    </optgroup>
                  </select>
                <p class="text-danger" id="error-monthly_revenue" style="display: none"></p>  
              </div>
            </div>
               
            
            <div class="col-md-12">
            <div class="form-group d-flex align-items-baseline">
            <input type="checkbox" name="checkbox" class="mr-3"> <label>I authorize myzeon.com & its partnering banks to contact me to explain the product & I Agree to Privacy policy and Terms and Conditions.</label>
             <br/><p class="text-danger" id="error-checkbox" style="display: none"></p>
            </div>
            </div>  
            <div class="col-md-12 text-right">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
               <!--<a href="creditcards-continue.php" class="btn btn-primary">Get Quotes</a>-->
                <button type="button" id="business-loan-button"  class="btn btn-primary">
                                        Get Quotes</button>
              <!-- <a href="thank-you.php" class="btn btn-primary">Submit</a> -->
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
          <h5 class="mb-2 font-weight-bold text-dark f-17">Business Loan </h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>A Business Loan can assist businesses in real time and help them overcome minor and major obstacles. Business and economics are constantly changing, and while the competition is becoming more and more intense, opportunities are forever expanding. Innovative thinking and new ideas have immense potential for both established and new businesses if acted upon and realised. But, only some end up capitalising on their business ideas as they get caught up in managing their finances. During such times, a timely capital infusion into your company allows you to open the doors of possibility and enable you to deal with any hurdles on the way to success. Today, the ease with which business funding is available with Banks and NBFCs. <br>
Both aspiring, as well as well-established entrepreneurs, require financial support. A Business Loan provides this financial support; with this loan, you can upscale your business activities.
Before going forward, every business owner should know the types of business loans, interest rates, and tenure. There are primarily two types, secured business loans and unsecured business loans. One of the primary factors determining whether a business loan is secured or unsecured is the requirement of collateral. However, there are other important things about business loans that you should know about. Let us have a detailed understanding of business loans here.
</p>
        </div>
      </div>

  </div>
</section>
<section class="bg-light pt-5 pb-5" id="Compare">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Compare Banks by their Interest Rates</h5>
          <div class="bar"></div>
        </div>
        <p class="mb-2">Banks differ in terms of the offered Interest Rates. Now Rate your bank based on the Rate it offers.</p>
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
                  <input type="hidden"  name="loan_type" value="business-loan">    
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
      </div>
        
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
      <div class="col-md-12">
        <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Top Bank and NBFC Business Loan Offer</h5>
          <div class="bar"></div>
        </div>
        <p class="mb-2">The following is the list of top banks and NBFCs offering business loans -</p>
      </div>

      <div class="table-responsive">
      
        <table class="table table-bordered">
            <tbody>
            <tr>
            <td><b>Banks/NBFC</b></td>
            <td><b>Loan Amount</b></td>
            <td><b>Interest Rate (per annum)</b></td>
            <td><b>Tenure&nbsp;</b></td>
            </tr>
            <tr>
            <td>SBI</td>
            <td>10-25 Lakh</td>
            <td>Linked to EBLR (8.05%)</td>
            <td>12-60 months</td>
            </tr>
            <tr>
            <td>HDFC Bank</td>
            <td>Up to INR 75 Lakh collateral-free&nbsp;</td>
            <td>10.00%-22.50%</td>
            <td>12-48 months</td>
            </tr>
            <tr>
            <td>ICICI Bank</td>
            <td>Up to INR 2 Crore</td>
            <td>Minimum 17%&nbsp;</td>
            <td>12-84 months</td>
            </tr>
            <tr>
            <td>Citibank&nbsp;</td>
            <td>Up to INR 30 Lakh</td>
            <td>12%-18.00%</td>
            <td>12-60 months</td>
            </tr>
            <tr>
            <td>IDFC Bank</td>
            <td>Up to INR 1 Crore</td>
            <td>14%-25.00%</td>
            <td>12-60 months</td>
            </tr>
            <tr>
            <td>Kotak Mahindra Bank</td>
            <td>Up to INR 3 Crore</td>
            <td>Competitive interest rate</td>
            <td>12-48 months</td>
            </tr>
            <tr>
            <td>Bajaj Finserv</td>
            <td>Up to INR 50 Lakh</td>
            <td>9.75%-25.00%</td>
            <td>12-96 months</td>
            </tr>
            <tr>
            <td>IndusInd Bank</td>
            <td>Up to INR 50 Lakh</td>
            <td>13.00%-22.00%</td>
            <td>12-48 month</td>
            </tr>
            <tr>
            <td>Tata Capital</td>
            <td>INR 40,000 to INR 75 Lakh</td>
            <td>Minimum 12.00%</td>
            <td>12-60 months</td>
            </tr>
            <tr>
            <td>Standard Chartered&nbsp;</td>
            <td>Up to INR 1 Crore</td>
            <td>Minimum 17.25%</td>
            <td>12-48 months</td>
            </tr>
            </tbody>
            </table>
          </div>
      </div>
  </div>
</section>
<section class=" pt-5 pb-5 wrp-faq">
     <?php $pages=pages('pages','2');
       echo $pages->content;
 ?>
 <!-- <div class="container">
    <div class="row">
    <div class="col-md-2">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17"> Overview</h5>
          <div class="bar"></div>
        </div>
      </div>
      <div class="col-md-12">
      <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <button type="button" class="collapsed" data-toggle="collapse" data-target="#collapseOne"> Features & Benefits <i class="fa fa-angle-up"></i>
              </button>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ul class="pl-3">
                  <li>Collateral-free loan</li>
                  <li>No end-use restriction</li>
                  <li>Interest rate starting from 10.25% p.a. (through myzeon.com)</li>
                  <li>Loan amount of up to Rs. 40 lakh, which can exceed depending on lenders' discretion</li>
                  <li>Repayment tenure up to 60 months, which may exceed on case to case basis</li>
                  <li>Minimal documentation</li>
                  <li>Quick disbursals</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <button type="button" data-toggle="collapse" data-target="#collapseTwo"> Business Loan - Rate of Interest <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>List of Banks/Lenders</th>
                      <th>Business Loan Interest Rates</th>
                      <th>Loan Amount (in INR)</th>
                      <th>EMI Per Lakh (in INR)</th>
                      <th>Processing Fees</th>
                      <th>Prepayment Charges</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>YES Bank</td>
                      <td>10.75% - 18.00%</td>
                      <td>Up to INR 40 lakhs</td>
                      <td>2,162-2,539</td>
                      <td>1% of the loan amount plus GST</td>
                      <td>Nil- Up to 2% of the principal outstanding + GST</td>
                    </tr>
                    <tr>
                      <td>HDFC Bank</td>
                      <td>10.99% - 15.00%</td>
                      <td>For Salaried-Up to INR 50 lakhs. For Self-employed- Up to INR 15 lakhs</td>
                      <td>2,173-2,379</td>
                      <td>2% of the loan amount or INR 3,500(&gt;=10 Lac)</td>
                      <td>Nil - Up to 4% of the principal outstanding + GST</td>
                    </tr>
                    <tr>
                      <td>Standard Chartered Bank</td>
                      <td>10.75% - 13.00%</td>
                      <td>Up to INR 50 Lakhs</td>
                      <td>2,162-2,275</td>
                      <td>
                        <p class="mb-2">1% of the loan amount + GST</p>
                        <p class="mb-2">&nbsp;</p>
                      </td>
                      <td>1%-5% of the principal outstanding + GST</td>
                    </tr>
                    <tr>
                      <td>ICICI Bank</td>
                      <td>10.50% - 18.00%</td>
                      <td>Up to INR 50 lakhs</td>
                      <td>2,149-2,539</td>
                      <td>2% of loan amount + GST or INR 3500(&gt;=10 Lac)</td>
                      <td>5% of the principal outstanding + GST</td>
                    </tr>
                    <tr>
                      <td>State Bank of India (SBI)</td>
                      <td>9.60% - 13.60%</td>
                      <td>Up to INR 15 lakhs</td>
                      <td>2,105-2,306</td>
                      <td>Nil - 1% of the loan amount + GST</td>
                      <td>Nil - 3% of the principal outstanding + GST</td>
                    </tr>
                    <tr>
                      <td>Kotak Mahindra Bank</td>
                      <td>10.99% - 20.99%</td>
                      <td>Above INR 20 lakhs</td>
                      <td>2,174-2,705</td>
                      <td>0.99% to 2.50% of the loan amount+ GST</td>
                      <td>5% of the principal outstanding + GST</td>
                    </tr>
                    <tr>
                      <td>IDFC First Bank</td>
                      <td>10.50%-25.00%</td>
                      <td>Upto INR 1 Crore</td>
                      <td>2,149-2,935</td>
                      <td>
                        <p class="mb-2">1% of the loan amount plus GST</p>
                      </td>
                      <td>5% of the Principal Outstanding Plus GST</td>
                    </tr>
                    <tr>
                      <td>Axis Bank</td>
                      <td>10.50% - 25.00%</td>
                      <td>Up to INR 40 lakhs</td>
                      <td>2,149-2,935</td>
                      <td>1% of the loan amount + GST</td>
                      <td>NIL</td>
                    </tr>
                    <tr>
                      <td>Fullerton India</td>
                      <td>12.00% - 24.00%</td>
                      <td>Up to INR 25 lakhs</td>
                      <td>2,224-2,876</td>
                      <td>2.00% - 6.00% of loan amount + GST</td>
                      <td>0-4% of the principal outstanding</td>
                    </tr>
                    <tr>
                      <td>RBL Bank</td>
                      <td>17.50% - 26.00%</td>
                      <td>Up to INR 20 lakhs</td>
                      <td>2,512-2,994</td>
                      <td>2.00%-2.5% of the loan amount + GST</td>
                      <td>3%-5% of the principal outstanding</td>
                    </tr>
                    <tr>
                      <td>IndusInd Bank</td>
                      <td>10.49% - 31.50%</td>
                      <td>Up to INR 25 lakhs</td>
                      <td>2,149 Onwards</td>
                      <td>upto 3% of the loan amount + GST</td>
                      <td>As applicable by the bank</td>
                    </tr>
                    <tr>
                      <td>Tata Capital</td>
                      <td>10.75% - 18.00%</td>
                      <td>Up to INR 25 lakhs</td>
                      <td>2,162-2,539</td>
                      <td>1% of the loan amount + GST</td>
                      <td>4% of the principal outstanding</td>
                    </tr>
                    <tr>
                      <td>DCB Bank</td>
                      <td>13.00% - 25.00%</td>
                      <td>Up to INR 5 lakhs</td>
                      <td>2,275-2,935</td>
                      <td>2% - 3% of loan amount + GST</td>
                      <td>As Applicable by the Bank</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <button type="button" data-toggle="collapse" data-target="#collapseThree"> Types of Business Loan <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                  <li>
                    <strong>Instant Business Loans </strong>are approved instantly within a few minutes with none to minimal document requirements.
                  </li>
                  <li>
                    <a href="#" target="_blank" rel="noopener">
                      <strong>Short-term Business Loans</strong>
                    </a> have short repayment period ranging from a few days to 12 months.
                  </li>
                  <li>
                    <strong>Pre-approved Loans </strong>are usually offered by banks and NBFCs to their existing customers on the basis of their credit history, income, employer's profile, etc.
                  </li>
                  <li>
                    <strong>Consumer Durable Loans </strong>can be used to purchase any consumer durable items like smartphone, furniture, microwave, etc. The purchase amount gets divided into EMIs and can be repaid within the tenure decide. Some products may require a down payment or a processing fee while others may not.
                  </li>
                  <li>
                    <a href="#" target="_blank" rel="noopener">
                      <strong>Business Loan Balance Transfer </strong>
                    </a>facility allows borrowers to transfer their outstanding Business Loan to a new lender for lower interest rates or better loan terms. However, transfer your outstanding Business Loan only when the savings made through the transfer outweighs the cost of loan transfer.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <button type="button" data-toggle="collapse" data-target="#collapseFour"> Business Loan Eligibility <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                  <li>
                    <strong>Age:</strong> 18 - 60 years
                  </li>
                  <li>
                    <strong>Salary:</strong> At least Rs. 15,000 per month for salaried customers
                  </li>
                  <li>
                    <strong>Income:</strong>&nbsp;At least <a href="#" target="_blank" rel="noopener">Rs. 5 lakh</a>&nbsp;p.a. for self-employed customers
                  </li>
                  <li>
                    <strong>Credit Score:</strong>&nbsp;Preferably 750 and above as having higher credit scores improve chances of loan approval
                  </li>
                  <li>
                    <strong>Employment Stability:</strong>&nbsp;At least&nbsp;2 years with minimum 1 year of work experience in the same job for salaried
                  </li>
                  <li>
                    <strong>Business Continuity:</strong> At least 2 years of business continuity for self-employed professionals
                  </li>
                  <li>
                    <strong>Employment Type:</strong>&nbsp;Salaried employees working with reputed organizations, MNCs, Private and Public Limited Companies, Govt. organizations, PSUs and large enterprises
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <button type="button" data-toggle="collapse" data-target="#collapseFive"> Importance of Credit score in availing Business Loan <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                <p>Your credit score shows how responsible you are at handling credit. Business Loan applicants with high credit scores, usually 750 and above, exhibit credit discipline and thus have higher chances of getting loan approval from banks and NBFCs.&nbsp;Such applicants also have higher chances of availing Business Loans at lower interest rates. However, some banks and NBFCs offer <a href="#" target="_blank" rel="noopener">Business Loan to applicants having low credit score</a> at higher interest rates. Therefore, one must check their credit scores at regular intervals. Individuals having no or low credit scores can build or rebuild their credit scores with the help of secured credit cards like <a href="#" target="_blank" rel="noopener">Myzeon Step UP Credit Card</a>. </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSix">
              <button type="button" data-toggle="collapse" data-target="#collapseSix"> Documents Required for Business Loan <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                  <li>
                    <strong>Identity Proof:</strong>&nbsp;Passport/PAN Card/ Voter’s ID/ Aadhaar Card/ Driving License
                  </li>
                  <li>
                    <strong>Address Proof:</strong>&nbsp;Passport/ Aadhaar Card/ Lease/ Property purchase Agreement/ Utility Bills (not more than 3 months old)/ Passport/ Driving License
                  </li>
                  <li>
                    <strong>Income Proof For Salaried Individuals:</strong>&nbsp;Salary Slips/ Bank Account Statement/ Form 16&nbsp;
                  </li>
                  <li>
                    <strong>Income Proof For Self-employed Professionals:&nbsp;</strong>Previous Years’ ITR/ P&amp;L Statement and Balance Sheet/ Bank Account Statement
                  </li>
                  <li>
                    <strong>Business Proof For Self-employed Individuals:</strong>&nbsp;Business Incorporation Certificate/ Professional Degree/ Certificate of Practice/ Partnership Deed/ GST Registration and Filing Documents/ MOA &amp; AOA/ Shop Act License
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSeven">
              <button type="button" data-toggle="collapse" data-target="#collapseSeven"> Factors Affecting Business Loan Interest Rates <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body"><p>By following the below-mentioned points, you can avail Business Loan at comparatively lower interest rates:</p>
                    <p><strong>Your Credit Score</strong></p>
                    <p>Every lender checks your credit score and credit history before offering Business Loan interest rates. This evaluation is performed to minimize the risk of any defaults from the borrowers. Applicants with a higher credit score are offered Business Loans at comparatively lower interest rates. So, maintaining a credit score of 750 or above is always beneficial. High credit score depicts that the borrower has managed to repay the loan or credit card payments on time.</p>
                    <p><strong>Your Monthly Income</strong></p>
                    <p>Higher monthly income is preferred by lenders, as borrowers with high income are more likely to repay the loan in a timely manner. The affordability for the loan increases for borrowers with high monthly income. The minimum income criteria and eligibility shall vary from bank to bank.</p>
                    <p><strong>Reputation of your Organization</strong></p>
                    <p>The reputation of your organization and the type of employment also are vital factors in deciding the Business Loan interest rates. Applicants with high job security and those working with reputed organizations shall get loans at comparatively lower interest rates. Salaried employees may be offered different interest rates, as compared to self-employed professionals. <a href="#" target="_blank" rel="noopener">Government</a> and PSU employees are usually offered Business Loans at lower interest rates because of their secured job and regular income certainty.&nbsp;People working with MNCs and reputed private sector organizations are usually offered lower interest rates than other private sector organizations.&nbsp;</p>
                    <p><strong>Your Relationship with the Bank or NBFC</strong></p>
                    <p>If you are already maintaining a good relationship with your existing bank or lender by repaying all the loans on time. Then the possibility of loan approval increases, along with the benefit of low-interest rates. Bank's existing customers shall be selected for pre-approved offers, special deals, concessional rates and much more.</p></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingEight">
              <button type="button" data-toggle="collapse" data-target="#collapseEight"> How to Avoid Business Loan Rejection? <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                    <li>Maintain your CIBIL score above 750</li>
                    <li aria-level="1">Check for inaccuracies in your credit report, as they might adversely impact your credit score and thereby, reduce the chances of loan approval (<a href="#" target="_blank" rel="noopener">Check Your Credit Score for FREE</a>)</li>
                    <li aria-level="1">Compare the Business Loan offers available from banks and NBFCs before finalizing any loan deal</li>
                    <li aria-level="1">Apply for the loan from a bank/NBFC where you have the highest chances of approval</li>
                    <li aria-level="1">Keep your credit utilization ratio minimal (Below 30%)&nbsp;</li>
                    <li aria-level="1">Avoid making multiple loan applications within a short span of time</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingNine">
              <button type="button" data-toggle="collapse" data-target="#collapseNine"> Business Loan Fees & Charges <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body"><p>The fees and charges of Business Loans usually vary from lender to lender and case to case. Some of the common <a href="#" target="_blank" rel="noopener">fees and charges related to Business Loans</a> are as follows:</p>
                    <ul>
                        <li>Loan Processing Fees</li>
                        <li>Pre-payment/Part-payment or Foreclosure Charges</li>
                        <li>Verification Charges</li>
                        <li>Loan Cancellation or Re-booking Charges</li>
                        <li>Documentation Fees &amp; Stamp Duty</li>
                        <li>Legal and Penal Charges</li>
                        <li>Duplicate Statement, NOC Certificate, EMI/Cheque Bounce, Swap and Late Fees, etc.</li>
                    </ul>
                </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTen">
              <button type="button" data-toggle="collapse" data-target="#collapseTen"> Why choose Myzeon to get a Business Loan <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                    <li><strong>Wide Choice: </strong>Choose from 30+ Business Loan offers from leading banks/NBFCs including HDFC Bank, SBI, Axis Bank, ICICI Bank, Bank of Baroda and more.</li>
                    <li><strong>Chances of Approval:</strong> Myzeon has a unique feature ‘chances of approval’, which will match your credit profile with the various lending criteria of banks and NBFCs, to provide customers with the chances of getting their loan application approved – Excellent, Good, Fair, Poor – against each lender.</li>
                    <li><strong>Pre-approved Business Loan Offers: </strong>On the basis of credit profile, our customers get pre-approved Business Loan offers from our partners. Our <a href="#" target="_blank" rel="noopener">pre-approved Business Loan</a> offers have excellent approval rate, require minimal documentation and offer instant disbursal.</li>
                    <li><strong>Expert Assistance:</strong>&nbsp; Myzeon team of experts helps customers choose the most suited Business Loan offer for their needs. Our team assists customers at each step of the loan process till disbursal.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
</section>
<script>
$("#business-loan-button").click(function() {
    
        var formData = new FormData($("#business-loan")[0]);
        $.ajax({
            method: 'post',
            dataType: 'json',
            url: "{{ route('create-business-loan') }}",
            processData: false,
            contentType: false,
            data: formData,
            success: function(data) {
                if (data.success == true) {
                    $(".text-danger").html('').hide();
                    $("#success").html('');
                    $("#success").html('<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2"><div class="d-flex align-items-center"><div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div><div class="ms-3"><h6 class="mb-0 text-success">' + data.msg + '</h6></div></div><button type="button" class="btn-close" id="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    $('#business-loan')[0].reset();

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
    </script>
 @endsection