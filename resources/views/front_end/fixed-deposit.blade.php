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
      <div class="col-md-4 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/slider-2.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="text-white text-center" style="z-index: 1;">Fixed Deposits - Open FD Online and Get Best Interest Rate and Returns</h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Start investing now on Fixed Deposits and get higher returns and flexible payouts. Check the rate of return on different FDs offered by different banks in India.</h5>
      </div>
      <div class="col-md-8 p-5">
        <form method="post" enctype="multipart/form-data" action="{{ route('create-fixed-loan') }}" id="fixed-loan">
            @csrf
          <div class="row">
          	<div class="col-md-6">
              <div class="form-group">
                <label>Occupation <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="employment_status" id="Salaried" value="Salaried">
                <label for="Salaried">Salaried</label> &nbsp; <input type="radio" name="employment_status" value="Self Employed" id="Self Employed" required="">
                <label for="Self Employed">Self Employed</label>
                 <p class="text-danger" id="error-employment_status" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Sub Occupation <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="sub_occupation" id="Professional" value="Professional">
                <label for="Professional">Professional</label> &nbsp; <input type="radio" name="sub_occupation" id="Self Employed" value="Businessman" required="">
                <label for="Businessman">Businessman</label>
                <p class="text-danger" id="error-sub_occupation" style="display: none"></p>
              </div>
            </div>
          	
            <div class="col-md-6">
              <div class="form-group">
                <label>Select your Profession</label>
                <select class="form-control" name="profession">
                     <option value=""></option>
                    <option value="Doctor">Doctor</option>
                    <option value="ICWA">ICWA</option>
                    <option value="Consultant">Consultant</option>
                    <option value="Architect">Architect</option>
                </select>
                <p class="text-danger" id="error-profession" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Full Name as per Pen Card <span class="text-danger">*</span></label>
                <input type="Text" class="form-control" placeholder="Please Mention Full Name" value="" name="full_name" required>
                <p class="text-danger" id="error-full_name" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile Number <span class="text-danger">*</span></label>
                <input type="tel" class="form-control" placeholder="Please Mention Mobile Number" required name="mobile_number">
                  <p class="text-danger" id="error-mobile_number" style="display: none"></p>
              </div>
            </div>
			<div class="col-md-6">
              <div class="form-group">
                <label>Place Of current Residence Or Pincode <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention current Residence Or Pincode" required name="pincode">
                <p class="text-danger" id="error-pincode" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Amount you Wish to deposit <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention you Wish to deposit" name="deposit_amount" required>
                 <p class="text-danger" id="error-deposit_amount" style="display: none"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Gender</label>
                <br>
                <input type="radio" name="gender" id="Male" value="Male">
                <label for="yes1">Male</label> &nbsp; <input type="radio" name="gender" value="Female" id="Female">
                <label for="no1">Female</label>
                <p class="text-danger" id="error-gender" style="display: none"></p>
              </div>
            </div>
          
               
            
            <div class="col-md-12">
            <div class="form-group d-flex align-items-baseline">
            <input type="checkbox" name="checkbox" class="mr-3"> <label>I authorize myzeon.com & its partnering banks to contact me to explain the product & I Agree to Privacy policy and Terms and Conditions.</label>
            <p class="text-danger" id="error-checkbox" style="display: none"></p>
            </div>
            </div>  
            <div class="col-md-12 text-right">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              <!-- <a href="creditcards-continue.php" class="btn btn-primary">Get Quotes</a>-->
              <!-- <a href="thank-you.php" class="btn btn-primary">Submit</a> -->
              
              <button type="button" id="fixed-loan-button"  class="btn btn-primary">
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
      	<h5 class="mb-2 font-weight-bold text-dark f-17">Fixed Deposit</h5>
        <p class="mb-2">If you are looking for a safe and secure type of investment then you can choose fixed deposit investment. It is the most preferred type of investment because it's more secure than equity investment. Even, you can see the potential returns before investing the funds. If any customer is looking for getting the highest interest rate then Fixed deposits (FD) are the most secure investment to earn more interest than the savings account that they usually have. It also helps you meet your long-term financial goals, which include buying a house or a child's schooling, as well as retirement planning.</p>
      </div>     

      

      </div>
    </div>
  </div>
</section>



<section class="pt-5 pb-5 wrp-faq">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title">
<h5 class="mb-2 font-weight-bold text-dark f-17">What is a Fixed Deposit?</h5>

<div class="bar">Fixed deposit, also referred to as an FD, is an investment instrument provided by banks and non-banking financial corporations (NBFC) for their customers to aid them in saving money. Customers get a higher rate of interest than a regular savings account, until the given maturity date. Through an FD account, you can put up a substantial amount of money at the rate you choose for a specific time. Banks provide different interest rates for your fixed deposit account. After completing your tenure, you get the entire amount along with an interest, which is a smart savings strategy.</div>
</div>
</div>

<div class="col-md-12">
<div class="accordion" id="accordionExample">
<div class="card">
<div class="card-header" id="headingOne"><button aria-expanded="false" class="collapsed" data-target="#collapseOne" data-toggle="collapse" type="button">Most Highlighted 5 Features of a Fixed Deposit</button></div>

<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne" style="">
<div class="card-body">
<h4><strong>To precisely understand the fixed deposit aspects in detail, you should know its main features. Here are the main ones:</strong></h4>

<ol class="pl-3">
  <li>Guaranteed/Assured Returns The return on fixed deposits is guaranteed and no other thought on it. You&#39;ll receive the same returns you agreed to when opening an FD. This is different for market-led investments that offer yields based on the fluctuation of interest rates on the market. You&#39;ll get the same amount of interest as agreed upon, regardless of whether interest rates decrease. It makes this fixed investment more secure than any other investment.</li>
  <li>Rate of Interest The interest rate for fixed deposits varies based on the time period you select. However, the interest rate is fixed. If you&#39;d like to know the current FD interest rates, then you need to follow this article, we have mentioned the interest rate in upcoming segments.</li>
  <li>Offers Flexible Tenures Generally, you can choose a time period for a fixed deposit from 7 days to 10 years when you open an FD account. It can vary from bank to bank that you select.</li>
  <li>Return on Investment The interest you earn from the fixed deposit will depend on the FD&#39;s maturity time or duration. If the tenure is longer, you will make more amount of interest. Furthermore, the return you earn from your investment will depend on whether you pay the interest regularly or reinvest the interest, known as a cumulative FD. The benefit is compounding your investment with this FD. You can calculate the fixed deposit&#39;s interest using the method that we mentioned in this article FDs Calculation segment.</li>
  <li>Loan Against FD You can get the loan on your fixed deposit if you require a sudden amount of money. This will prevent you from closing your FD early.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingTwo"><button data-target="#collapseTwo" data-toggle="collapse" type="button">Different Types of Fixed Deposits for the General Public</button></div>

<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample" id="collapseTwo">
<div class="card-body table-responsive">
<h4><strong>Before deciding to invest in a fixed deposit, you need to know about the different FDs available in the market.</strong></h4>

<ol>
  <li>Standard Terms Deposits Standard fixed deposits are investment options requiring you to invest an amount for a fixed period with a fixed interest rate. The time period for investment or tenure could vary from 7 days to 10 years. The amount of interest paid is contingent upon the time period of investment and also the financial institution providing this product.</li>
  <li>Flexi-Fixed Deposit Flexible fixed deposits are tied to your saving account. This instrument can ask your bank to automatically transfer any amount that is greater than a specified balance to a fixed deposit by using an auto sweep-in feature. For instance, if you want to keep an amount of Rs 20,000 per month, the excess amount can be transferred to an FD. In contrast, if your balance is less than 20,000. In that case, the bank will liquidate an amount of your FD to keep maintain your balance. It offers the advantages of liquidity and investment. The rate of interest on Flexi-deposits is higher than the savings rate. However, it is lower than the standard fixed deposit rates.</li>
  <li>Tax-Saving Fixed Deposit There are some tax-saving FD options available in the market that are eligible to be tax-deductible. A tax-saving FD maturity period is five years. Also, the principal amount is up to Rs1,50,000 per year and is tax-deductible as per Section 80C under the Indian Income Tax Act.</li>
  <li>Senior Citizen Fixed Deposits For those over 60 years old, Banks and NBFCs provide an interest rate higher on FDs than other types of investors. They are offering around 25-50 basis points (0.25-0.50 percent) more. Also, they offer additional tax advantages for senior citizens. Moreover, senior citizen FDs&#39; interest doesn&#39;t carry tax deductions at the source if it exceeds the threshold of Rs50,000 per annum. Other investment options don&#39;t provide this benefit to senior citizens.</li>
  <li>Recurring Deposit A Recurring deposit is a fixed deposit that allows you to invest a fixed amount each month or every quarter for a specific time. Its interest rates are predetermined. When your maturity period is completed, you will be able to get the principal amount along with interest calculated proportionally. For instance, you could make a monthly deposit of Rs1,000 over five years. The interest on the initial deposits will be paid over five years, and the final deposit will be paid in a month.</li>
  <li>&nbsp;Corporate Fixed Deposits Some corporate or business entities offer fixed deposits. While they provide more attractive interest rates over banks and NBFCs, the risk involved with corporate FDs is greater than other FDs. Although banks and NBFC deposits are backed by insurance protection from the DICGC, Corporate fixed deposits don&#39;t have the same insurance. If a company or business goes bankrupt, it is not guaranteed that your corporate deposits will be recovered.</li>
  <li>Fixed Deposit for NRIs/Non-Resident Indians Non-resident Indian citizens can invest in non-resident external (NRE) or ordinary (NRO) fixed deposits. NRE FDs are suitable for people who earn in foreign currencies. While there may be fluctuations in currency, the most notable benefit for NRE FDs is that the total amount of interest and principal are tax-free. NRO FDs can be invested with Indian or foreign currency and are tax-deductible by 30% per year.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingThree"><button data-target="#collapseThree" data-toggle="collapse" type="button">Different Types of FDs for NRIs</button></div>

<div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample" id="collapseThree">
<div class="card-body">
<h4><strong>There are two kinds of fixed deposit accounts available for non-resident Indians that exist in Indian Banks, viz. Non-resident External (NRE) and Non-resident Ordinary (NRO) accounts.</strong></h4>

<ol>
  <li>NRE Fixed Deposits NRE FDs are ideal for those who earn foreign currency and want to convert their earnings into Indian currency. The best part about the NRE FD account is that the interest earned from the account is tax-free. Additionally, you can receive both the principal and interest since they can be completely transferable. The only disadvantage is that changes in the currency rate can affect the fund&#39;s deposit.</li>
  <li>NRO Fixed Deposits The interest earned from NRO fixed deposits is tax deductible at 30 percent. This is based on the Income Tax Act 1961. The interest earned is not fully returned but the principal amount that falls within the bounds of a specific bracket or limit. But the benefit of NRO deposit accounts is that are fixed deposits, as opposed to NRE Fixed Deposits (FDs), there is no risk of fluctuations in exchange rates. Also, you can deposit foreign or Indian currency into an NRO account. Therefore, if you live overseas locations and your entire income includes earnings from India, NRO FDs are the most suitable option to manage your funds in India.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingFour"><button data-target="#collapseFour" data-toggle="collapse" type="button">Most Useful Benefits of FDs or Fixed Deposit</button></div>

<div aria-labelledby="headingFour" class="collapse" data-parent="#accordionExample" id="collapseFour">
<div class="card-body">
<h4><strong>There are huge advantages the fixed deposits investment that we mentioned below:</strong></h4>

<ol>
  <li>&nbsp;Guaranteed Return In contrast to market-linked securities, which may cause losses due to market fluctuations, fixed deposit accounts offer an unbeatable rate of return on investment. Your money is secure in FDs, and you can earn more than a savings account.</li>
  <li>Easy Process The FDs are among the simplest instruments where you can invest your money in offline and online modes using the internet and mobile banking.</li>
  <li>Liquidity Premature removal of FDs is permissible, but you&#39;ll lose some of the interest for the time you miss. This provides you with liquidity since you can take out the FD during times of emergency.</li>
  <li>Low Minimum Investment If you&#39;re looking to develop an investment mindset but need more funds, FDs are an excellent alternative because investment amounts can begin with as low as Rs. 500.</li>
  <li>The benefits of compounding Through FD investments, you&#39;ll make interest from interest. Therefore, you will get better returns and faster growth of your money.</li>
  <li>Higher Interest Rates for Senior Citizens can benefit from their savings and move towards a no-compromise retirement.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingFive"><button data-target="#collapseFive" data-toggle="collapse" type="button">Checklist for Senior Citizen Fixed Deposits</button></div>

<div aria-labelledby="headingFive" class="collapse" data-parent="#accordionExample" id="collapseFive">
<div class="card-body">
<h4><strong>Fixed deposits for seniors have specific characteristics that distinguish them from fixed deposit accounts for people of all normal ages, for example:</strong></h4>

<ul>
  <li>The depositor must be aged over 60 at the date of opening the fixed deposit account.</li>
  <li>The time period/tenure is between 7 days and 10 years.</li>
  <li>In the bank that you choose to invest, interest rates are higher than 0.25 percent to 0.50 percent.</li>
  <li>There is a loan against FD available.</li>
  <li>The penalties for premature withdrawals will be the same as those for the general public.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingSix"><button data-target="#collapseSix" data-toggle="collapse" type="button">Generally, How Does Fixed Deposit Work?</button></div>

<div aria-labelledby="headingSix" class="collapse" data-parent="#accordionExample" id="collapseSix">
<div class="card-body">
<h4><strong>To help you understand the fixed deposit process, you need to follow the below steps that make this concept easier for you:</strong></h4>

<ul>
  <li>A fixed deposit is a type of financial service that banks and NBFCs allow you to deposit money in one lump sum and earn a higher percentage of interest compared to the savings accounts that you have already.</li>
  <li>The time for an FD varies from 7 days to 10 years. After you have deposited a bank, the deposit will start earning interest based on the time period that you choose at the time of deposit. The principal rule for Fixed Deposits is that they can be taken out before maturity. If you decide to withdraw the money before the expiration date, you&#39;ll be forced to be responsible for the penalties.</li>
  <li>A fixed deposit gives you flexibility when choosing the duration. Also, you can open a fixed deposit at any time you have extra funds.</li>
  <li>Certain banks provide a quick withdrawal option. However, this can result in a lower interest rate.</li>
  <li>&nbsp;When the maturity date arrives, the bank credits the principal amount and interest in the bank account.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingSeven"><button data-target="#collapseSeven" data-toggle="collapse" type="button">Most Crucial Factors to Consider Before Opening FD</button></div>

<div aria-labelledby="headingSeven" class="collapse" data-parent="#accordionExample" id="collapseSeven">
<div class="card-body">
<ul>
  <li>&nbsp;Examine the different FD rates from different banks to gain more interest rates.</li>
  <li>&nbsp;Check how reliable the investing institution is for the safety of the fixed deposit.</li>
  <li>&nbsp;Select a bank with excellent customer service and a simple procedure for opening an FD.</li>
  <li>&nbsp;Make sure regarding basic information like Tenure, Interest Rate, Senior Citizen Offer, Interest Payout Frequency, and Tax Deducted at Source (TDS)</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingEight"><button data-target="#collapseEight" data-toggle="collapse" type="button">Major Factors that Affect FD Interest Rates</button></div>

<div aria-labelledby="headingEight" class="collapse" data-parent="#accordionExample" id="collapseEight">
<div class="card-body">
<h4><strong>There are multiple factors that influence FD interest rates, some crucial points are as follows:</strong></h4>

<ol>
  <li>&nbsp;Deposit Tenure If you choose lower tenure, the interest rate will definitely be lower. On the other hand, the greater or mid-range of the tenure the interest rate is more significant.</li>
  <li>Deposit amount Higher deposits will attract more interest rates, particularly larger deposits of more than Rs.1 crore.</li>
  <li>Type of depositor Senior citizens usually receives 0.25 percent to 0.50 percent additional interest on fixed deposit.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingNine"><button data-target="#collapseNine" data-toggle="collapse" type="button">What are the current FD Rates?</button></div>

<div aria-labelledby="headingNine" class="collapse" data-parent="#accordionExample" id="collapseNine">
<div class="card-body">
<p>There isn&#39;t a fixed rate for FD investments. The return rate for investors is based upon the bank or NBFC offering the investment choice. Each bank offers different rates of interest on deposits. In addition, the return also varies based in part on investor age. Senior citizens can earn greater returns than those who cross the 60 years age criteria. Although the rates of interest differ based on various factors such as the tenure of the FD and the financial institution that provides it. Also, with the type of FD plan or account plan, investors can always anticipate higher rates from their savings accounts.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingTen"><button data-target="#collapseTen" data-toggle="collapse" type="button">Fixed Deposit Rates of Public Sector Banks Dec 2022</button></div>

<div aria-labelledby="headingTen" class="collapse" data-parent="#accordionExample" id="collapseTen">
<div class="card-body">
<h4>Here we will mention fixed deposit interest rates of public sector banks that provide the highest slab to their customers. Also, this list is prepared in order from highest to lowest interest rate.</h4>

<table class="Table" style="border-collapse:collapse; border:none" width="936">
  <thead>
    <tr>
      <td rowspan="2" style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; height:32px; border-top:1px solid #666666; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank Name</span></span></span></p>
      </td>
      <td colspan="4" style="border-bottom:1px solid #666666; width:749px; padding:11px 11px 11px 11px; height:32px; border-top:1px solid #666666; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Interest Rates (% p.a.)</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; height:32px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Highest slab</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:32px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">1-year tenure </span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:32px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3-year tenure</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:32px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5-year tenure</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Union Bank of India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.70</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank of India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Punjab National Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Canara Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank of Baroda</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Indian Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.40</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.40</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Central Bank of India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.15</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Indian Overseas Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.40</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.40</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.40</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank of Maharashtra</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">State Bank of India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Punjab &amp; Sind Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">UCO Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.60</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.50</span></span></span></p>
      </td>
    </tr>
  </thead>
</table>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingelv"><button data-target="#collapseelv" data-toggle="collapse" type="button">Fixed Deposit Interest Rates of Private Sector Banks Dec 2022</button></div>

<div aria-labelledby="headingelv" class="collapse" data-parent="#accordionExample" id="collapseelv">
<div class="card-body">
<p>Here we will mention fixed deposit&nbsp;interest rates of private sector banks that provide the highest slab to their customers. Also, this list is prepared in order from highest to lowest interest rate. Moreover, these fixed deposit interest rates are as of 2 December 2022.</p>

<table class="Table" style="border-collapse:collapse; border:none" width="936">
  <thead>
    <tr>
      <td rowspan="2" style="border-bottom:1px solid black; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p align="center" class="normal" style="text-align:center">&nbsp;</p>

      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank Name</span></span></span></p>
      </td>
      <td colspan="4" style="border-bottom:1px solid #666666; width:749px; padding:11px 11px 11px 11px; height:28px; border-top:1px solid #666666; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Interest Rates (% p.a.)</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Highest slab</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">1-year tenure</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3-year tenure </span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5-year tenure</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">SBM Bank India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">RBL Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.55</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.55</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.55</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bandhan Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.60</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">CSB Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">DCB Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">DBS Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Yes Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Karur Vysya Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">IndusInd Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">IDFC First Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Federal Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Karnataka Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.20</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.80</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">City Union Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.90</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">South Indian Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.90</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">IDBI Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Nainital Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.80</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.60</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">ICICI Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.60</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.60</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Tamilnad Mercantile Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">HDFC Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Kotak Mahindra Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.20</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Axis Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Jammu &amp; Kashmir Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.35</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.35</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Dhanlaxmi Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.60</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10</span></span></span></p>
      </td>
    </tr>
  </thead>
</table>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingtwe"><button data-target="#collapsetwe" data-toggle="collapse" type="button">Fixed Deposit Interest Rates of Small Finance Banks Dec 2022</button></div>

<div aria-labelledby="headingtwe" class="collapse" data-parent="#accordionExample" id="collapsetwe">
<div class="card-body">
<p>Here we will mention fixed deposit&nbsp;interest rates of small finance banks that provide the highest slab to their customers. Also, this list is prepared in order from highest to lowest interest rate.</p>

<table class="Table" style="border-collapse:collapse; border:none" width="936">
  <thead>
    <tr>
      <td rowspan="2" style="border-bottom:1px solid black; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank Name</span></span></span></p>

      <p align="center" class="normal" style="text-align:center">&nbsp;</p>

      <p align="center" class="normal" style="text-align:center">&nbsp;</p>
      </td>
      <td colspan="4" style="border-bottom:1px solid #666666; width:749px; padding:11px 11px 11px 11px; height:28px; border-top:1px solid #666666; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Interest Rates (% p.a.)</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Highest slab</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">1-year tenure</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3-year tenure</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5-year tenure</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Unity Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.35</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.65</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.65</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Suryoday Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.01</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Ujjivan Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.20</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.20</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Utkarsh Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Fincare Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">ESAF Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.25</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">North East Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Jana Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.55</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.55</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">AU Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.85</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.95</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Equitas Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.40</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Shivalik Small Finance Bank Limited</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Capital Small Finance Bank Limited</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.65</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.65</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
  </thead>
</table>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingawe"><button data-target="#collapseawe" data-toggle="collapse" type="button">Tax Saving Fixed Deposit Rates Dec 2022</button></div>

<div aria-labelledby="headingawe" class="collapse" data-parent="#accordionExample" id="collapseawe">
<div class="card-body">
<p>Here we will mention fixed deposit interest rates&nbsp;for tax saving that provides the highest slab to their customers. Also, this list is prepared in order from highest to lowest interest rate.</p>

<table class="Table" style="border-collapse:collapse; border:none" width="936">
  <thead>
    <tr>
      <td rowspan="2" style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; height:27px; border-top:1px solid #666666; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Banks</span></span></span></p>
      </td>
      <td colspan="2" style="border-bottom:1px solid #666666; width:624px; padding:11px 11px 11px 11px; height:27px; border-top:1px solid #666666; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Interest Rates (p.a.)</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; height:27px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">General Citizens</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:7px 7px 7px 7px; height:27px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Senior Citizens</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Utkarsh Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Jana Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.20%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">DCB Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.75%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Ujjivan Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.20%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.95%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Fincare Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Shivalik Small Finance Bank Limited</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">City Union Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">&ndash;</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">AU Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.95%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.45%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Yes Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">&ndash;</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Suryoday Small Finance Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">IndusInd Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Union Bank of India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.70%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.20%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">ICICI Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.60%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.10%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">RBL Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.55%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.05%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Axis Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">IDFC First Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Capital Small Finance Bank Limited</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">HDFC Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Indian Overseas Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.40%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.90%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Federal Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.95%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Indian Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30% &ndash; 6.40%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.90% &ndash; 7.05%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Kotak Mahindra Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.20%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.70%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Punjab National Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.60%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Punjab &amp; Sind Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.60%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Dhanlaxmi Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">&ndash;</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank of Baroda</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75% &ndash; 6.90%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">IDBI Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.85%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">State Bank of India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.10%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.90%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Jammu &amp; Kashmir Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">South Indian Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Karur Vysya Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.90%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.90%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Tamilnad Mercantile Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Karnataka Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.15%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank of India</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank of Maharashtra</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bandhan Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.60%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.35%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">UCO Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:312px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00%</span></span></span></p>
      </td>
    </tr>
  </thead>
</table>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingbwe"><button data-target="#collapsebwe" data-toggle="collapse" type="button">Fixed Deposit Interest Rates of Leading Foreign Banks Dec 2022</button></div>

<div aria-labelledby="headingbwe" class="collapse" data-parent="#accordionExample" id="collapsebwe">
<div class="card-body">
<p>Here we will mention fixed deposit&nbsp;interest rates of leading foreign banks that provide the highest slab to their customers. Also, this list is prepared in order from highest to lowest interest rate.</p>

<table class="Table" style="border-collapse:collapse; border:none" width="936">
  <thead>
    <tr>
      <td rowspan="2" style="border-bottom:1px solid black; width:187px; padding:7px 7px 7px 7px; height:27px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p align="center" class="normal" style="text-align:center">&nbsp;</p>

      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bank Name</span></span></span></p>
      </td>
      <td colspan="4" style="border-bottom:1px solid black; width:749px; padding:7px 7px 7px 7px; height:27px; border-top:1px solid black; border-right:1px solid black; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Interest Rates (p.a.)</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; height:27px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Highest slab (%)</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:27px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">1-year tenure (%)</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:27px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3-year tenure (%)</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:7px 7px 7px 7px; height:27px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5-year tenure (%)</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Deutsche Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Citibank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3.50</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">HSBC Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3.10</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.00</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Standard Chartered Bank</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.60</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.35</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:187px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.50</span></span></span></p>
      </td>
    </tr>
  </thead>
</table>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingcwe"><button data-target="#collapsecwe" data-toggle="collapse" type="button">Company/Corporate FD Rates Dec 2022</button></div>

<div aria-labelledby="headingcwe" class="collapse" data-parent="#accordionExample" id="collapsecwe">
<div class="card-body">
<p>Here we will mention fixed deposit&nbsp;interest rates for companies / corporate that provide the highest slab to their customers. Also, this list is prepared in order from highest to lowest interest rate.</p>

<table class="Table" style="border-collapse:collapse; border:none" width="936">
  <thead>
    <tr>
      <td rowspan="3" style="border-bottom:1px solid black; width:156px; padding:7px 7px 7px 7px; height:28px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p align="center" class="normal" style="text-align:center">&nbsp;</p>

      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Company Name</span></span></span></p>
      </td>
      <td colspan="3" style="border-bottom:1px solid #666666; width:468px; padding:11px 11px 11px 11px; height:28px; border-top:1px solid #666666; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Interest Rates (p.a.)</span></span></span></p>
      </td>
      <td rowspan="3" style="border-bottom:1px solid black; width:156px; padding:7px 7px 7px 7px; height:28px; border-top:1px solid black; border-right:1px solid black; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center">&nbsp;</p>

      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Tenure range</span></span></span></p>

      <p align="center" class="normal" style="text-align:center">&nbsp;</p>
      </td>
      <td rowspan="3" style="border-bottom:1px solid black; width:156px; padding:7px 7px 7px 7px; height:28px; border-top:1px solid black; border-right:1px solid black; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center">&nbsp;</p>

      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">The additional interest rate for senior citizens (p.a.)</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">1-year</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">3-year</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">5-year</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">tenure</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">tenure</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:7px 7px 7px 7px; height:28px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">tenure</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Manipal Housing Finance Syndicate Ltd.</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-60 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">&ndash;</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Shriram City Union Finance Co. Ltd.*</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.71%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">9.81%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-60 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">PNB Housing Finance Ltd.</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.55%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.40%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-120 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Bajaj Finance Limited</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.80%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.50%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-60 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Shriram Transport Finance Co. Ltd.*</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.78%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.76%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">8.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-60 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Sundaram Home Finance</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.65%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.30%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.65%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-60 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.50%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Sundaram Finance</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.65%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.30%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">&ndash;</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12 to 36 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.35%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">HDFC Ltd.** (Regular Deposit up to Rs 2 cr)</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.35%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.85%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.90%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-120 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">LIC Housing Finance Ltd.</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.30%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.95%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.95%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-60 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">Muthoot Capital Services Limited</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.25%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.75%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.25%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-60 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.25%</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:1px solid #666666" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">ICICI Home Finance</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.15%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">6.90%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">7.00%</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">12-120 months</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid #666666; width:156px; padding:11px 11px 11px 11px; border-top:none; border-right:1px solid #666666; border-left:none" valign="top">
      <p align="center" class="normal" style="text-align:center"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">0.25%</span></span></span></p>
      </td>
    </tr>
  </thead>
</table>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingdte"><button data-target="#collapsedwe" data-toggle="collapse" type="button">Eligibility Criteria for Fixed Deposit Investment in India</button></div>

<div aria-labelledby="headingdwe" class="collapse" data-parent="#accordionExample" id="collapsedwe">
<div class="card-body">
<p><strong>List of individuals who is capable of opening a fixed deposit account in India - </strong></p>

<ul>
  <li>Indian resident</li>
  <li>&nbsp;NRI</li>
  <li>Minors</li>
  <li>Senior citizens</li>
  <li>Joint investors or individuals (2 or more people)</li>
  <li>Sole proprietorship</li>
  <li>Partnership-based firms</li>
  <li>Clubs or societies</li>
  <li>Companies</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingewe"><button data-target="#collapseewe" data-toggle="collapse" type="button">Ways to Open a Fixed Deposit Account in a Securely</button></div>

<div aria-labelledby="headingewe" class="collapse" data-parent="#accordionExample" id="collapseewe">
<div class="card-body">
<h4><strong>It is possible to open an FD through two methods, both offline and online.</strong></h4>

<ol>
  <li>Online For opening your FD account, it is easiest to contact the bank where you have an account already. All you need to do is sign up for the online banking service, fill out the online form to open an FD and submit it. You have the option to transfer funds to your account via the internet banking facility. In these instances, KYC will not be required because your bank already has all your information.</li>
  <li>&nbsp;Offline Go to the nearest branch of your bank and fill out the form to apply for opening the FD account. Send it to the responsible official along with the necessary documents. Also, you need to pay the amount required, and you will get the receipt from the FD.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingfwe"><button data-target="#collapsefwe" data-toggle="collapse" type="button">Checklist of Mandatory Documents for Fixed Deposit Investment</button></div>

<div aria-labelledby="headingfwe" class="collapse" data-parent="#accordionExample" id="collapsefwe">
<div class="card-body">
<p>If any investor wants to enter into a fixed deposit successfully. In that case, Investors must have required certain documents regarding their identity and address to participate in FD schemes. If any investor wants to enter into a fixed deposit successfully. In that case, Investors must have required certain documents regarding their identity and address to participate in FD schemes. Identity Evidence (Any One)</p>

<ul>
  <li>&nbsp;Aadhaar card</li>
  <li>Passport</li>
  <li>Voter ID card</li>
  <li>Driving license</li>
  <li>PAN card Address Documentation (Any One)</li>
  <li>Telephone bill</li>
  <li>Electricity bill</li>
  <li>Post Office-issued ID Minor investors and seniors must also submit proof of age documents, including matriculation certificates or birth certificates.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headinggwe"><button data-target="#collapsegwe" data-toggle="collapse" type="button">Lock-in-Path for Fixed Deposits</button></div>

<div aria-labelledby="headinggwe" class="collapse" data-parent="#accordionExample" id="collapsegwe">
<div class="card-body">
<p>The lock-in period of fixed deposits is called the maturity time. At this point, investors cannot withdraw their funds without any financial consequences. In the case of tax-saving, FDs that allow withdrawal before the end of the lock-in time is not permissible. In the case of other types of FDs, early withdrawal is possible, but it can lead to penalties. The penalties can also differ from one investment strategy to the next. However, it is always advisable to hold deposits in place until maturity. At the time the term ends, investors will receive substantial profits. Early withdrawals can result in the loss of interest earnings on the FD.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headinghwe"><button data-target="#collapsehwe" data-toggle="collapse" type="button">Secure and Universal Formula for FDs Interest Rate Calculation</button></div>

<div aria-labelledby="headinghwe" class="collapse" data-parent="#accordionExample" id="collapsehwe">
<div class="card-body">
<p>Calculating the interest rate for a fixed deposit depends on the amount you invest, the interest rate being paid, and the length of time invested. The formula used to calculate the interest rate on your FD:</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingiwe"><button data-target="#collapseiwe" data-toggle="collapse" type="button">Interest on FD = Amount Invested x Interest Rate x (Duration/ 12 months)</button></div>

<div aria-labelledby="headingiwe" class="collapse" data-parent="#accordionExample" id="collapseiwe">
<div class="card-body">
<p>It also depends on the cumulative FD or normal FD. In that case, your interest will be different. For instance, if you invest Rs 25,000 for three years, at an annual rate of 7.1 percent per annum, A cumulative FD would have a maturity value of Rs 30.712.</p>

<table class="Table" style="border-collapse:collapse; border:none" width="936">
  <thead>
    <tr>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;"><b>Year&nbsp;&nbsp;&nbsp; </b></span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:1px solid black; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;"><b>Principal Amount</b></span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:1px solid black; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;"><b>Interest Earned at 7.1% p.a.</b></span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:1px solid black; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;"><b>Amount at the End of the Year</b></span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">1</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹25,000</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹1,775</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹26,775</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">2</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹26,775</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹1,901</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹28,676</span></span></span></p>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:1px solid black" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">2</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹28,676</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹2,036</span></span></span></p>
      </td>
      <td style="border-bottom:1px solid black; width:234px; padding:7px 7px 7px 7px; border-top:none; border-right:1px solid black; border-left:none" valign="top">
      <p class="normal"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,&quot;sans-serif&quot;">₹30,712</span></span></span></p>
      </td>
    </tr>
  </thead>
</table>

<p>However, in the case of non-cumulative FDs, they are paid out regularly and will lose the compounding interest. In addition, the interest rate offered for non-cumulative FDs is significantly lower than the cumulative FDs.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingjwe"><button data-target="#collapsejwe" data-toggle="collapse" type="button">Some Extraordinary Tips to Choose Right Fixed Deposit</button></div>

<div aria-labelledby="headingjwe" class="collapse" data-parent="#accordionExample" id="collapsejwe">
<div class="card-body">
<p><strong>Here are the main factors to consider when selecting an investment that is fixed: </strong></p>

<ul>
  <li>&nbsp;Check your FD interest rates of various banks.</li>
  <li>Check how credible the lending institution is by reviewing the security rating of the fixed deposit according to ICRA and CRISIL.</li>
  <li>Select whether you would like a non-cumulative or cumulative fixed deposit.</li>
  <li>&nbsp;Choose a bank that provides excellent customer service and a smooth procedure for opening an FD.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingkwe"><button data-target="#collapsekwe" data-toggle="collapse" type="button">How Can Fixed Deposits Improve Your Financial Portfolio?</button></div>

<div aria-labelledby="headingkwe" class="collapse" data-parent="#accordionExample" id="collapsekwe">
<div class="card-body">
<p>If you followed the entire write-up then you have definitely got every answer and aspect of fixed deposits. The fixed deposits savings strategy is an actual help in enhancing your financial portfolio. Here are some suggestions about how a fixed deposit can assist you in this:</p>

<ol>
  <li>Connect your savings account with Bank FD If you link your savings account with a bank FD then you can transfer the money from your Savings bank account to a fixed deposit when the balance in the bank account exceeds the threshold of a specific amount. However, you may also make a regular withdrawal through your Savings Account. This will help you develop financial discipline and ensure you are saving regularly. Check that your &quot;FD&#39;s timeframe is in line with the goals you have set for yourself. Additionally, you can choose between the cumulative plan and the quarterly or monthly interest payout plans that consider the cash flow and liquidity needs.</li>
  <li>Flexible to your Financial Goals For instance, if you want to choose a short-term goal that is targeted only for a few months, you should select a short-term fixed deposit. In contrast, should you prefer to go for a long-term objective, you should choose a long-term Fixed Deposit. In both instances, you must select the reinvestment of interest plan to generate more significant wealth for you.</li>
  <li>Payout flexibility If you want to create a regular income option from your fixed deposit, opt for quarterly or monthly interest-paying directly to your bank account which can help you meet your cash flow requirements.</li>
  <li><strong>Other/Additional Tips </strong></li>
</ol>

<ul>
  <li>Beware of banks that advertise extremely high-interest rates, as they could put at risk your capital.</li>
  <li>Beware of the practice of prematurely withdrawing your fund. Premature withdrawal affects the process of creating wealth and disturbs compounding. When you require funds before the Fixed Deposit expires, you can opt to borrow against the FD.</li>
  <li>Make it a priority to renew your FD if your FD is getting old and you do not need the money as urgently.</li>
  <li>If you renew your savings by reviving them, you can build wealth for your family and yourself. A fixed deposit can boost your confidence and increases your financial security. The most significant benefit of the FD is that it&#39;s quick and easy to open. Once you know the concept behind a fixed deposit and how it functions, you can decide to make an FD deposit either online or offline, based on your preference.</li>
</ul>
</div>
</div>
</div>

<?php $pages=pages('pages','8');echo $pages->content; ?>

</div>
</div>
</div>
</div>
</section>





</section>

<script>
$("#fixed-loan-button").click(function() {
    
        var formData = new FormData($("#fixed-loan")[0]);
        $.ajax({
            method: 'post',
            dataType: 'json',
            url: "{{ route('create-fixed-loan') }}",
            processData: false,
            contentType: false,
            data: formData,
            success: function(data) {
                if (data.success == true) {
                    $(".text-danger").html('').hide();
                    $("#success").html('');
                    $("#success").html('<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2"><div class="d-flex align-items-center"><div class="font-35 text-success"><i class="bx bxs-check-circle"></i></div><div class="ms-3"><h6 class="mb-0 text-success">' + data.msg + '</h6></div></div><button type="button" class="btn-close" id="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    $('#fixed-loan')[0].reset();

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
    </script>

@endsection