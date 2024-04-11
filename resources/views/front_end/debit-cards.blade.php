@extends('front_end_layout.home')
@section('content')  
<style>
  section.banner-img:before {
    display: none;
}
.first-form form{margin: 0px;}
.banner-img {
    min-height: auto;}
</style>
<section class="banner-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/debit-card.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="text-white text-center" style="z-index: 1;">Understand the Meaning, Types, Uses of Debit Cards and Apply for Them </h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Learn everything about ATM/Debit cards in India, including how they work, how to apply, top banks, features and benefits, and credit card vs. debit card.</h5>
      </div>
      <div class="col-md-8 p-5">
       <form method="post" enctype="multipart/form-data" action="{{ route('create-credit-loan') }}" id="credit-loan">
           @csrf
          <div class="row">
             <div class="col-md-12">
            <h5 class="mb-2 font-weight-bold text-dark f-17">Professional Details</h5>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Annual Income <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="₹" name="annual_income">
                <p class="text-danger" id="error-annual_income" style="display: none"></p>
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label>Occupation <span class="text-danger">*</span></label>
                <select class="form-control" name="employment_status">
                   <option value="">Please Select</option>
                  <option value="Salaried">Salaried</option>
                  <option value="Self Employed Business">Self Employed Business</option>
                  <option value="Self Employed Professional">Self Employed Professional</option>
                </select>
                </select>
                <p class="text-danger" id="error-employment_status" style="display: none"></p>
              </div>
            </div>
           
            <div class="col-md-6">
              <div class="form-group company">
                <label>Company Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention Company Name" required name="company_name">
                 <p class="text-danger" id="error-company_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention City Name" name="city" id="city">
                 <p class="text-danger" id="error-city" style="display: none"></p>
              </div>
            </div>
          <div class="row hidediv pl-3 pr-3" id="showdiv" style=""> 
            <div class="col-md-12">
              <p class="mb-3">
                <b>Just fill a few more details to get quote...</b>
              </p>
            </div>
            <div class="col-md-12">
            <h5 class="mb-3 font-weight-bold text-dark f-17">Personal Details</h5>
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
                <label>Last Name </label>
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
            <div class="col-md-4">
              <div class="form-group">
              <label>Date of Birth <span class="text-danger">*</span></label>
              <input type="date" class="form-control" placeholder="Please Mention Date of Birth" name="dob">
                 <p class="text-danger" id="error-dob" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Debit Card Holder <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="credit_card" id="yes" value="Yes">
                <label for="yes">Yes</label> &nbsp; <input type="radio" name="credit_card" id="no" value="No">
                <label for="no">NO</label>
                 <p class="text-danger" id="error-credit_card" style="display: none"></p>
              </div>
            </div>
           
            <div class="col-md-4">
              <div class="form-group">
                <label>Debit Card provided by <span class="text-danger">*</span></label>
                <select class="form-control" name="card_provided_by">
                <option value="">Please Select Bank</option>
          <option value="Axis Bank">Axis Bank</option>
          <option value="Citibank">Citibank</option>
          <option value="HDFC Bank">HDFC Bank</option>
          <option value="ICICI Bank">ICICI Bank</option>
          <option value="IDFC Bank">IDFC Bank</option>
          <option value="RBL">RBL</option>
          <option value="Standard Chartered Bank">Standard Chartered Bank</option>
          <option value="SBI Card">SBI Card</option>
          <option value="Others">Others</option>
                </select>
                <p class="text-danger" id="error-card_provided_by" style="display: none"></p>
              </div>
            </div>


            
            <div class="col-md-12">
            <div class="form-group d-flex align-items-baseline">
            <input type="checkbox" name="checkbox" class="mr-3"> <label>I authorize myzeon.com & its partnering banks to contact me to explain the product & I Agree to Privacy policy and Terms and Conditions.</label>
             <p class="text-danger" id="error-checkbox" style="display: none"></p>
            </div>
            </div> 
            </div> 
            <div class="col-md-12 text-right">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
               <!--<a href="creditcards-continue.php" class="btn btn-primary">Get Quotes</a>-->
              <!-- <a href="thank-you.php" class="btn btn-primary">Submit</a> -->
              
               <button type="button" id="credit-loan-button"  class="btn btn-primary">
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
          <h5 class="mb-2 font-weight-bold text-dark f-17">Debit Cards </h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>A debit card is plastic cash that banks issue, and one can use it to purchase things. You can use a debit card at merchant outlets and can use it at ATMs to access cash. The debit card helps you withdraw money from your bank account. For many people, a debit card is a convenient option to carry out day-to-day expenditures. Know about the different types of debit cards in India, how to apply for a debit card online, and how to get a debit card. You can check how a debit card is different from a Credit Card and understand the features of both of them.</p>
        </div>
      </div>

  </div>
</section>
<!-- <section class="bg-light pt-5 pb-5" id="Compare">
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
        <form>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Select Bank</label>
                <select class="form-control ">
                  <option value="m025">Aditya Birla</option>
<option value="010">Allahabad Bank</option>
<option value="011">Andhra Bank</option>
<option value="m005">Axis Bank</option>
<option value="m015">Bajaj Finserv</option>
<option value="m023">Bandhan Bank</option>
<option value="012">Bank of Baroda</option>
<option value="013">Bank of India</option>
<option value="014">Bank of Maharastra</option>
<option value="015">Canara Bank</option>
<option value="016">Central Bank of India</option>
<option value="037">Citibank</option>
<option value="017">Corporation Bank</option>
<option value="018">Dena Bank</option>
<option value="m013">DCB Bank</option>
<option value="049">Federal Bank</option>
<option value="m017">Fullerton India</option>
<option value="240">HDFC Bank</option>
<option value="039">HSBC Bank</option>
<option value="229">ICICI Bank</option>
<option value="259">IDBI</option>
<option value="234">IndusInd Bank</option>
<option value="m024">IDFC Bank</option>
<option value="051">Jammu and Kashmir Bank</option>
<option value="052">Karnataka Bank</option>
<option value="053">Karur Vysya Bank</option>
<option value="m011">Kotak Bank</option>
<option value="056">Lakshmi Vilas Bank</option>
<option value="184">Nainital Bank</option>
<option value="022">Oriental Bank of Commerce</option>
<option value="023">Punjab and Sind Bank</option>
<option value="024">Punjab National Bank</option>
<option value="176">RBL</option>
<option value="036">Standard Chartered Bank</option>
<option value="002">State Bank of India/SBI</option>
<option value="025">Syndicate Bank</option>
<option value="m016">Tata Capital</option>
<option value="028">UCO Bank</option>
<option value="027">United Bank of India</option>
<option value="029">Vijaya Bank</option>
<option value="m022">Yes Bank</option></select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Loan Amount</label>
                <input type="text" class="form-control">
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
              <button type="submit" class="btn btn-primary">Compare Interest Rates</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-12">
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
              <td>10.75% - 18.00%</td>
              <td>Up to INR 40 lakhs</td>
              <td>2,162-2,539</td>
              <td>1% of the loan amount plus GST</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<section class=" pt-5 pb-5 wrp-faq"> -->

  <?php $pages=pages('pages','6');
       echo $pages->content; ?>
  <!-- <div class="container">
    <div class="row">
    <div class="col-md-12">
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
              <button type="button" data-toggle="collapse" data-target="#collapseTwo"> Debit Cards - Rate of Interest <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>List of Banks/Lenders</th>
                      <th>Debit Cards Interest Rates</th>
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
              <button type="button" data-toggle="collapse" data-target="#collapseThree"> Types of Debit Cards <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                  <li>
                    <strong>Instant Debit Cardss </strong>are approved instantly within a few minutes with none to minimal document requirements.
                  </li>
                  <li>
                    <a href="#" target="_blank" rel="noopener">
                      <strong>Short-term Debit Cardss</strong>
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
                      <strong>Debit Cards Balance Transfer </strong>
                    </a>facility allows borrowers to transfer their outstanding Debit Cards to a new lender for lower interest rates or better loan terms. However, transfer your outstanding Debit Cards only when the savings made through the transfer outweighs the cost of loan transfer.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <button type="button" data-toggle="collapse" data-target="#collapseFour"> Debit Cards Eligibility <i class="fa fa-angle-down"></i>
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
              <button type="button" data-toggle="collapse" data-target="#collapseFive"> Importance of Credit score in availing Debit Cards <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                <p>Your credit score shows how responsible you are at handling credit. Debit Cards applicants with high credit scores, usually 750 and above, exhibit credit discipline and thus have higher chances of getting loan approval from banks and NBFCs.&nbsp;Such applicants also have higher chances of availing Debit Cardss at lower interest rates. However, some banks and NBFCs offer <a href="#" target="_blank" rel="noopener">Debit Cards to applicants having low credit score</a> at higher interest rates. Therefore, one must check their credit scores at regular intervals. Individuals having no or low credit scores can build or rebuild their credit scores with the help of secured Debit Cards like <a href="#" target="_blank" rel="noopener">Myzeon Step UP Debit Card</a>. </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSix">
              <button type="button" data-toggle="collapse" data-target="#collapseSix"> Documents Required for Debit Cards <i class="fa fa-angle-down"></i>
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
              <button type="button" data-toggle="collapse" data-target="#collapseSeven"> Factors Affecting Debit Cards Interest Rates <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body"><p>By following the below-mentioned points, you can avail Debit Cards at comparatively lower interest rates:</p>
                    <p><strong>Your Credit Score</strong></p>
                    <p>Every lender checks your credit score and credit history before offering Debit Cards interest rates. This evaluation is performed to minimize the risk of any defaults from the borrowers. Applicants with a higher credit score are offered Debit Cardss at comparatively lower interest rates. So, maintaining a credit score of 750 or above is always beneficial. High credit score depicts that the borrower has managed to repay the loan or Debit Card payments on time.</p>
                    <p><strong>Your Monthly Income</strong></p>
                    <p>Higher monthly income is preferred by lenders, as borrowers with high income are more likely to repay the loan in a timely manner. The affordability for the loan increases for borrowers with high monthly income. The minimum income criteria and eligibility shall vary from bank to bank.</p>
                    <p><strong>Reputation of your Organization</strong></p>
                    <p>The reputation of your organization and the type of employment also are vital factors in deciding the Debit Cards interest rates. Applicants with high job security and those working with reputed organizations shall get loans at comparatively lower interest rates. Salaried employees may be offered different interest rates, as compared to self-employed professionals. <a href="#" target="_blank" rel="noopener">Government</a> and PSU employees are usually offered Debit Cardss at lower interest rates because of their secured job and regular income certainty.&nbsp;People working with MNCs and reputed private sector organizations are usually offered lower interest rates than other private sector organizations.&nbsp;</p>
                    <p><strong>Your Relationship with the Bank or NBFC</strong></p>
                    <p>If you are already maintaining a good relationship with your existing bank or lender by repaying all the loans on time. Then the possibility of loan approval increases, along with the benefit of low-interest rates. Bank's existing customers shall be selected for pre-approved offers, special deals, concessional rates and much more.</p></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingEight">
              <button type="button" data-toggle="collapse" data-target="#collapseEight"> How to Avoid Debit Cards Rejection? <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                    <li>Maintain your CIBIL score above 750</li>
                    <li aria-level="1">Check for inaccuracies in your credit report, as they might adversely impact your credit score and thereby, reduce the chances of loan approval (<a href="#" target="_blank" rel="noopener">Check Your Credit Score for FREE</a>)</li>
                    <li aria-level="1">Compare the Debit Cards offers available from banks and NBFCs before finalizing any loan deal</li>
                    <li aria-level="1">Apply for the loan from a bank/NBFC where you have the highest chances of approval</li>
                    <li aria-level="1">Keep your credit utilization ratio minimal (Below 30%)&nbsp;</li>
                    <li aria-level="1">Avoid making multiple loan applications within a short span of time</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingNine">
              <button type="button" data-toggle="collapse" data-target="#collapseNine"> Debit Cards Fees & Charges <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body"><p>The fees and charges of Debit Cardss usually vary from lender to lender and case to case. Some of the common <a href="#" target="_blank" rel="noopener">fees and charges related to Debit Cardss</a> are as follows:</p>
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
              <button type="button" data-toggle="collapse" data-target="#collapseTen"> Why choose Myzeon to get a Debit Cards <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
              <div class="card-body">
                <ul>
                    <li><strong>Wide Choice: </strong>Choose from 30+ Debit Cards offers from leading banks/NBFCs including HDFC Bank, SBI, Axis Bank, ICICI Bank, Bank of Baroda and more.</li>
                    <li><strong>Chances of Approval:</strong> Myzeon has a unique feature ‘chances of approval’, which will match your credit profile with the various lending criteria of banks and NBFCs, to provide customers with the chances of getting their loan application approved – Excellent, Good, Fair, Poor – against each lender.</li>
                    <li><strong>Pre-approved Debit Cards Offers: </strong>On the basis of credit profile, our customers get pre-approved Debit Cards offers from our partners. Our <a href="#" target="_blank" rel="noopener">pre-approved Debit Cards</a> offers have excellent approval rate, require minimal documentation and offer instant disbursal.</li>
                    <li><strong>Expert Assistance:</strong>&nbsp; Myzeon team of experts helps customers choose the most suited Debit Cards offer for their needs. Our team assists customers at each step of the loan process till disbursal.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      

<script>
$(document).ready(function(){
    $('#myselection').on('change', function(){
      var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script> 
<script>
$("#credit-loan-button").click(function() {
    
        var formData = new FormData($("#credit-loan")[0]);
        $.ajax({
            method: 'post',
            dataType: 'json',
            url: "{{ route('create-credit-loan') }}",
            processData: false,
            contentType: false,
            data: formData,
            success: function(data) {
                if (data.success == true) {
                    $(".text-danger").html('').hide();
                    $("#success").html('');
                    $("#success").html('<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2"><div class="d-flex align-items-center"><div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div><div class="ms-3"><h6 class="mb-0 text-success">' + data.msg + '</h6></div></div><button type="button" class="btn-close" id="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    $('#credit-loan')[0].reset();

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

/*DEbit Card loan hide show div code here */
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