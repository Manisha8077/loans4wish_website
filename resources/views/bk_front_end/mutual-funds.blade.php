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
         <h1 class="text-white text-center" style="z-index: 1;">Mutual Funds- Types, Working, Risks, and Investment</h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Mutual funds aggregate investor funds to buy stocks, bonds, and other assets. Investing in mutual funds can aid in the development of a well-diversified investment portfolio.</h5>
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
                     <option value="">Select your Profession</option>
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
                <label>Full Name as per Pan Card <span class="text-danger">*</span></label>
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
            <input type="checkbox" name="checkbox" class="mr-3"> <label>I authorize myzeon.com & its partnering banks to contact me to explain the product & I Agree to the Privacy policy and Terms and Conditions.</label>
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
<h5 class="mb-2 font-weight-bold text-dark f-17">Introduction</h5>

<p class="mb-2">Many investors view mutual fund investments as an easy, comfortable way to invest in stocks. Managers are professionals like fund managers manage mutual funds. They do extensive research on companies and their fundamentals like movement trends in the stock price and future prospects before investing in stocks.</p>
</div>
</div>
</div>
</section>

<section class="pt-5 pb-5 wrp-faq">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title">
<h5 class="mb-2 font-weight-bold text-dark f-17">What are the Mutual Funds?</h5>

<p>Mutual funds are a group of investors who pool their money to invest in common goals. You can invest in equity, bonds and money market instruments to achieve the stated goal. The investment is professionally managed by an Asset Management Company (AMC). Each investor takes part proportionally to the number of units he or she holds.</p>
</div>
</div>

<div class="col-md-12">
<div class="accordion" id="accordionExample">
<div class="card">
<div class="card-header" id="headingOne"><button aria-expanded="false" class="collapsed" data-target="#collapseOne" data-toggle="collapse" type="button">Different Types of Mutual Funds for Investors</button></div>

<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne" style="">
<div class="card-body">
<h4><strong>Mutual funds can be classified in many ways. These include their structure, securities held, investment strategies, and more. We have attempted to capture some of the SEBI&#39;s classifications of mutual funds. They are classified based on their investment places.</strong></h4>

<h3>(1) Structure Basis Classification</h3>

<h3>(i) Open-Ended Mutual Fund Mutual funds that are open-ended, which allows you to redeem and invest at any time. They are permanent in nature. They are liquid and do not require a fixed investment period.</h3>

<h3>(ii) Closed-Ended Mutual Fund Closed-ended schemes have a fixed maturity. Only one fund offer is available at a time. Redeemable units can only be purchased after maturity. You can&#39;t purchase units from a closed-ended mutual fund at any time.</h3>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingTwo"><button data-target="#collapseTwo" data-toggle="collapse" type="button">Asset Classes Basis Classification</button></div>

<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample" id="collapseTwo">
<div class="card-body table-responsive">
<h4><strong>Equity Mutual Funds </strong></h4>

<ul>
  <li>&nbsp;Large Cap Mutual Funds These funds invest at least 80% in stocks of large-cap businesses i.e. The companies that rank in the top 100 on the AMFI stock list based on market capitalisation are the ones.</li>
  <li>&nbsp;Mid-Cap Mutual funds Mid-cap funds invest at least 65 percent of their portfolio in stocks from mid-cap companies, i.e. The companies ranked between 101st to 250th according to their market capitalisation.</li>
  <li>&nbsp;Small Cap Mutual Funds Small Cap Funds invest at minimum 65% of their portfolios in stocks of small-cap businesses i.e. The companies ranked 251st or higher based on market capitalisation</li>
  <li>&nbsp;ELSS Mutual Funds ELSS (Equity Linked Savings Scheme ) is a tax-saving equity mutual funds. It invests at most 80% of its portfolio into stocks. Investments made under ELSS are eligible for tax deduction under section 80C of the Income Tax Act 1961, up to Rs 1.5 Lakh annually. ELSS comes with a 3-year lock-in from the date of initial investment.</li>
  <li>Multicap Mutual Funds These funds invest in stocks from any company with a market capitalisation of at least $1 billion. SEBI does not set a market capitalisation limit for investment.</li>
  <li>International Mutual Funds International funds invest in equity of companies outside India. These funds are designed to offer investors a geographical diversification and to counter volatility in Indian markets. Foreign markets don&#39;t always move in the same way as Indian markets.</li>
  <li>Index Mutual Funds Index funds simply impersonates an Index. Index funds are managed by fund managers who place your money in the exact same companies as the index they track.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingThree"><button data-target="#collapseThree" data-toggle="collapse" type="button">Debt Mutual Funds</button></div>

<div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample" id="collapseThree">
<div class="card-body">
<h4>Debt mutual funds invest primarily in fixed income instruments such as corporate bonds, Government securities, and other debt instruments. They can provide more stable returns than equity mutual funds because they are not subject to stock market volatility. Different types of debt mutual funds can be distinguished based on the maturity of the securities they own.</h4>

<ul>
  <li>Liquid Funds These kinds of funds invest in higher-rated securities and debt securities with a maturity of less than 91 days. Because they have a shorter maturity, they are less volatile than other types. Liquid funds can be used as an alternative to bank savings accounts for emergency funds.</li>
  <li>Overnight Funds Overnight funds invest only in securities that have a one-day maturity. Because these funds have shorter maturity periods, they are safer and offer lower interest rate risk. Corporates use these funds to store their money.</li>
  <li>Money Market Funds These funds invest in mainly government securities (also known as Treasury bills) and other instruments that are short-term with maturities less than one year. This fund is suitable for investors who are looking for stable funds that don&#39;t have high interest risks.</li>
  <li>Banking &amp; PSU Funds Banking &amp; PSU Funds must invest at least 80% in debt securities of banks and public sector undertakings. These funds are better suited to investors who seek short-term or medium-term investment tenure.</li>
  <li>Glit Mutual Funds Glit funds invest at least 80% in Government securities over a range of maturity periods. This type of investment is more suitable for long-term investments as Government securities are volatile in the short term.</li>
  <li>Short Duration Funds Short Duration funds invests in debt and other money-market securities so that the portfolio&#39;s average maturity is between 1-3 Years. These funds are best suited to investors who have a moderate risk appetite and a timeframe of 1-3 years.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingFour"><button data-target="#collapseFour" data-toggle="collapse" type="button">Hybrid Mutual Funds</button></div>

<div aria-labelledby="headingFour" class="collapse" data-parent="#accordionExample" id="collapseFour">
<div class="card-body">
<h4><strong>Hybrid Mutual Funds can invest in equity or debt in different proportions, depending on the fund&#39;s investment objective. These funds allow you to have diversified exposure across different asset classes. Hybrid funds can be classified based on their allocation to equity or debt.</strong></h4>

<ul>
  <li>Balanced Hybrid Funds Balanced hybrid funds can invest between 40%-60% equity and 40-60% debt instruments. They combine the benefits of equity growth with the protection afforded by debt.</li>
  <li>Aggressive Hybrid Funds These funds can invest 65-80% in equity and 20-35% debt instruments. They are more risky than the balanced hybrid because they have a higher allocation to equity.</li>
  <li>Conservative Hybrid Funds Conservative Hybrid Funds allocate at least 75-90% to debt securities, and 10-25% to equity securities. They may be less risky than an aggressive hybrid fund because of their allocation.</li>
  <li>Balanced Advantage Funds Balanced advantage Funds also known as dynamic asset allocation funds, keep their investments in equity or debt dynamic. Their allocations to each asset class change according to market movements so that they maximize gains and minimize risks.</li>
</ul>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingFive"><button data-target="#collapseFive" data-toggle="collapse" type="button">What Does Mutual Fund Work Securely?</button></div>

<div aria-labelledby="headingFive" class="collapse" data-parent="#accordionExample" id="collapseFive">
<div class="card-body">
<p>Mutual funds are usually managed actively by a fund manager, who decides when to buy or sell securities to maximize returns and minimize loss. You are buying a part of a mutual fund&#39;s assets and a portion of its ownership. This is different from buying individual stocks, which allows you to buy partial ownership in a company and then manage any future moves. The net asset value (NAV) is the measure of the price of mutual funds. This includes all securities in the portfolio. The NAV of a mutual fund portfolio is calculated at the close of each market day. This is because many securities in the portfolio can change prices throughout the day. Mutual funds are only allowed to trade once per day after the markets close.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingSix"><button data-target="#collapseSix" data-toggle="collapse" type="button">Methods to Calculate Fees of Mutual Funds</button></div>

<div aria-labelledby="headingSix" class="collapse" data-parent="#accordionExample" id="collapseSix">
<div class="card-body">
<h4><strong>Mutual funds can charge structured fees for active management. This will impact your overall profits. Two main types of fees will be identified by mutual funds:</strong></h4>

<ol>
  <li>&nbsp;Annual Fund Operating Expenses The total annual expenses of a fund include transaction fees and management. These expenses are combined to form the fund&rsquo;s expense ratio. Even though they are relatively insignificant, fund expense ratios can have a significant impact on a fund&#39;s returns, particularly over time.</li>
  <li>Shareholder fees Funds can also include shareholder fees. These fees cover commissions for buying and selling the fund. A lot of mutual funds will charge a &quot;load&quot; sales fee. This can be either a flat fee, or a commission. It occurs when you buy or sell shares back to the fund. It is important to take into account the fees associated with mutual funds if you are looking for one. All associated fees are detailed in the fund prospectus.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingSeven"><button data-target="#collapseSeven" data-toggle="collapse" type="button">How mutual fund profits work?</button></div>

<div aria-labelledby="headingSeven" class="collapse" data-parent="#accordionExample" id="collapseSeven">
<div class="card-body">
<h4><strong>Your investment in a mutual fund can grow in value in the following ways:</strong></h4>

<ol>
  <li>Dividend Payments A fund distributes a portion of the income it receives from its portfolio by paying dividends or interest. You have the option of receiving your dividends directly or having them reinvested into the mutual fund.</li>
  <li>Capital Gains Capital gains are when a fund sells securities that have gone up in value. Funds distribute net capital gains annually to investors. Investors may be subject to a high tax bill in a year that has high capital gains payouts. This is especially true for high-net-worth individuals, who will have to pay higher capital gain tax rates.</li>
  <li>Net Asset Value After the market closes, mutual fund shares can be purchased. This is when the entire financial worth of the underlying assets are valued. The mutual fund share price is also known as the net asset value (or NAV). The price at which you can purchase shares in the mutual fund will increase as the fund&#39;s value increases. This is similar to when a stock price rises. At the same time, you do not get the instant distributions, the value of your investment increases and you can make money if you sell at the right time.</li>
</ol>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingEight"><button data-target="#collapseEight" data-toggle="collapse" type="button">How to Invest in Mutual Funds Securely?</button></div>

<div aria-labelledby="headingEight" class="collapse" data-parent="#accordionExample" id="collapseEight">
<div class="card-body">
<h4><strong>Here&#39;s our step-by-step guide to buying mutual funds if you are ready to make an investment. </strong></h4>

<h2>1.Decide whether you want to be active or passive</h2>

<p>Professionals who study the market and manage active funds buy with an eye to beating it. Although some fund managers may be able to achieve this short-term, it is difficult to beat the market long-term and on a consistent basis. Passive investing, which is more hands-off, is growing in popularity due to its ease and potential for great results. Passive investing is often less expensive than active investing.</p>

<h2><strong>2.Calculate your budget </strong></h2>

<p>How to proceed can be determined by how you think about your budget.</p>

<p><strong>How much do mutual funds cost? </strong></p>

<p>You can choose how much you want to invest once you have met the minimum investment amount. Although mutual funds minimums can range from $500 to $3,000 for most, some have minimums in the $100 and a few have minimums of $0.</p>

<p><strong>What mutual funds are best to invest in?</strong></p>

<p>You can decide to invest in mutual funds after proper research. What mix of funds would be best for you? The thumb rule is that the closer you get to retirement, the more conservative investments you should have. New investors have more time to protect themselves from the inevitable market downturns and riskier assets.</p>

<h2><strong>3.Choose where to purchase mutual funds</strong></h2>

<p>While you need a brokerage account to invest in stocks, there are many options for mutual funds. There&#39;s a good possibility that mutual funds are already in your employer-sponsored retirement account (e.g. 401(k). However, you can also buy directly from the company creating the fund (e.g. Vanguard or BlackRock), but this may limit your options for funds. Many online brokerages offer an extensive selection of mutual funds from a variety of fund companies. This is the preferred way for investors to purchase mutual funds.</p>

<h3><strong>You should consider the following: </strong></h3>

<ul>
  <li>
  <h3>&nbsp;<strong>Affordability </strong>Two types of fees can be charged to mutual fund investors: transaction fees from their brokerage account and the actual funds.</h3>
  </li>
  <li>
  <h3><strong>Multiple Fund Options</strong> Some workplace retirement plans only have a handful of mutual funds. There may be more options. There are hundreds of no-transaction fees funds available to brokers, some even thousands.</h3>
  </li>
  <li>
  <h3><strong>Educational and Research Tools</strong> More options mean more research and thinking. Before you invest your money, it is important to find a broker who can help you understand the fund.</h3>
  </li>
  <li>
  <h3><strong>Easy to use</strong> If you don&#39;t understand the website or app of a brokerage, it won&#39;t be very helpful. It is important to feel at ease and understand the process.</h3>
  </li>
</ul>

<h3><strong>4. Learn more about mutual fund fees </strong></h3>

<h3>A company may charge an annual fee to manage the fund. This is expressed in a percentage of your cash invested and known as the expenses ratio. A fund with a expense ratio of 1% will cost you $10 per $1,000. There are many structures for mutual funds that can have an impact on costs.</h3>

<h3>● <strong>Open-end mutual funds</strong></h3>

<h3>Open ended mutual funds are the most popular funds in investors. There are no restrictions on how many investors can invest or how many shares they can hold. The fund&#39;s value affects the NAV per share.</h3>

<h3><strong>● Closed-end funds</strong> These are limited shares that can be offered in an initial public offering. This is similar to a company. There are far fewer close-end funds than open-end fund . The trading price of a closed-end fund is listed on a stock exchange throughout the day. This price can be either higher or lower than its actual value.</h3>

<h2><strong>5. Manage your portfolio</strong></h2>

<p>After you have decided on the mutual funds that you wish to purchase, it&#39;s time to start thinking about how you will manage your investment. A good idea is to rebalance your portfolio at least once per year with the aim of maintaining your diversification plan. If one of your investments has made great gains, and it now makes up a larger percentage of your portfolio, you might think about selling some of those gains to invest in another slice. You can avoid chasing performance by sticking to your plan. Fund investors are at risk if they want to invest in a fund after seeing how it performed last year.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingNine"><button data-target="#collapseNine" data-toggle="collapse" type="button">Genuine 2 Methods of Mutual Fund Investment</button></div>

<div aria-labelledby="headingNine" class="collapse" data-parent="#accordionExample" id="collapseNine">
<div class="card-body">
<h4><strong>These are the ways an investor can invest in mutual fund:</strong></h4>

<p><strong>1. Lump Sum Plan Lump</strong></p>

<p>Sum is when you are looking to invest a large amount in one mutual fund. If you have Rs 1 lakh to invest, you can opt for lumpsum investment and put the entire amount in one fund. You will be allocated units based on the NAV of the fund that day. You will receive 100 units if the NAV of the mutual fund is Rs 1000.</p>

<p><strong>2. SIP Mode </strong></p>

<p>This allows you to invest small amounts regularly. If you have Rs 1 Lakh but are unable to commit to an investment of Rs 10,000 each month for 10 years, this will allow you to align your investments with your cash flow. This type of investing is called Systematic Investment Plan (SIP). SIP is a method of investing that encourages regular investments of fixed amounts bimonthly, monthly and quarterly, depending on your needs and the options offered by the mutual fund. This way of investing encourages discipline and eliminates the need to search for the best time to invest. Many investors attempt to time the market, which can take a lot of time and expertise. Mutual funds define the minimum amount required to invest in a lump sum or SIP investment. They can vary, but it can start as low as Rs 500.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingTen"><button data-target="#collapseTen" data-toggle="collapse" type="button">Main 3 Factors to Consider Before Investing in Mutual Funds?</button></div>

<div aria-labelledby="headingTen" class="collapse" data-parent="#accordionExample" id="collapseTen">
<div class="card-body">
<h4>When reviewing mutual fund options, make sure you evaluate:</h4>

<p><strong>1. Goals </strong></p>

<p>What are you looking for in a mutual fund investment? Do you want to save for retirement, pay for college for your children or invest in the future?</p>

<p><strong>2. Time Horizon </strong></p>

<p>Long-term investors are better served by mutual funds. A mutual fund might not be the best choice if you don&#39;t think you will need your money for the next three to five year.</p>

<p><strong>3. Risk Tolerance </strong></p>

<p>Invest according to your risk tolerance. Knowing your risk tolerance will help you choose funds that are best suited for your investment style.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingdte"><button data-target="#collapsedwe" data-toggle="collapse" type="button">Some Risks Associated with Mutual Fund Investments</button></div>

<div aria-labelledby="headingdwe" class="collapse" data-parent="#accordionExample" id="collapsedwe">
<div class="card-body">
<h4><strong>Mutual funds can be subject to a few potential risks: </strong></h4>

<p><strong>1. Potential loss of principal </strong></p>

<p>Portfolio managers cannot guarantee the fund&#39;s performance, which can lead to potential loss of principal.</p>

<p><strong>2. Diversification can dilute the effect </strong></p>

<p>Sometimes, diversification in a fund can lead to a reduction in positive returns. If a stock in a fund doubles in price, it may not reflect in the overall return.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingewe"><button data-target="#collapseewe" data-toggle="collapse" type="button">Most Popular Myths about Mutual Fund Investment</button></div>

<div aria-labelledby="headingewe" class="collapse" data-parent="#accordionExample" id="collapseewe">
<div class="card-body">
<h4><strong>Two common misconceptions surround mutual funds:</strong></h4>

<p><strong>1. Fund&#39;s underlying investments are owned by investors </strong></p>

<p>Investors own shares in mutual fund investments. This is the biggest misconception about mutual fund investing. This is not true. Investors own shares of the fund, and not its underlying investments.</p>

<p><strong>2. Mutual funds can only be made up of stocks </strong></p>

<p>Another myth is that mutual funds only consist of stocks. Mutual funds can actually invest in many asset classes other than stocks, such as fixed income, cash, and non-traditional income vehicles.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingfwe"><button data-target="#collapsefwe" data-toggle="collapse" type="button">How are Returns Calculated for Mutual Funds?</button></div>

<div aria-labelledby="headingfwe" class="collapse" data-parent="#accordionExample" id="collapsefwe">
<div class="card-body">
<p>An investor buying Apple stock is buying a portion of the company&#39;s ownership. A mutual fund investor also buys a partial ownership stake in the mutual fund as well as its assets. A mutual fund&#39;s return typically pays investors in one of three ways. It is usually quarterly or annually.</p>

<ul>
  <li>Dividends on stocks, interest on bonds in the portfolio of the fund are the sources of income. The fund pays almost all the income received over the year to its owners as distribution. Investors have the option to either receive a check for distributions, or to reinvest the earnings in order to purchase more shares.</li>
  <li>A capital gain is achieved when a fund sells securities with an increase in price. Most funds pass this on to investors as a distribution.</li>
  <li>You can sell mutual fund shares for profit if the price of the fund shares rises.</li>
</ul>

<p>An investor can see the &quot;total return&quot;, or the change in investment value over a period of time. This includes all interest, dividends or capital gains that the fund generated, as well as any change in the market value over time. Most cases, total returns are calculated over one, five, or 10 years.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headinggwe"><button data-target="#collapsegwe" data-toggle="collapse" type="button">Important Documents Required to Invest in Mutual Funds</button></div>

<div aria-labelledby="headinggwe" class="collapse" data-parent="#accordionExample" id="collapsegwe">
<div class="card-body">
<p>KYC documents include proof of identity and proof of address. Below is a list with all the officially valid documents (OVD).</p>

<h3><strong>Proof of Identity </strong></h3>

<ul>
  <li>
  <p>&nbsp;PAN Card (Mandatory).</p>
  </li>
  <li>Voter ID card ● Driving license</li>
  <li>Passport</li>
  <li>Aadhaar Card</li>
  <li>Any other valid ID card issued by the Central or State Government</li>
</ul>

<h3><strong>Proof of Address</strong></h3>

<ul>
  <li>
  <h3>Voter ID card</h3>
  </li>
  <li>
  <h3>Driving license</h3>
  </li>
  <li>
  <h3>Passport</h3>
  </li>
  <li>
  <h3>Ration Card</h3>
  </li>
  <li>
  <h3>Aadhaar Card</h3>
  </li>
  <li>
  <h3>Statement of bank account or bank passbook</h3>
  </li>
  <li>
  <h3>Any bills, like electricity and gas bills</h3>
  </li>
</ul>

<h3>These are just a few of the most important documents. However, it can be tedious to submit all of them and cause delays in your investment plan.</h3>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headinghwe"><button data-target="#collapsehwe" data-toggle="collapse" type="button">Most Popular Benefits of Investing in Mutual Funds</button></div>

<div aria-labelledby="headinghwe" class="collapse" data-parent="#accordionExample" id="collapsehwe">
<div class="card-body">
<h4>Let&#39;s now look at the benefits of investing in mutual funds.</h4>

<h3>● <strong>Diversification</strong></h3>

<p>Mutual funds are great for diversifying their investments across multiple asset types and securities.</p>

<h3><strong>● Professional management</strong></h3>

<h3>Full-time professional managers manage mutual funds. They have the experience, expertise, and resources to actively manage, buy, and sell investments.</h3>

<h3><strong>● Transparency </strong></h3>

<h3>Each mutual fund has a Scheme Information document that is readily accessible on the fund house&#39;s site. This document can provide all details about the fund, its manager, and other pertinent information.</h3>

<h3>● <strong>Liquidity</strong></h3>

<h3>Your investments can be redeemed at any time, regardless of when they were made. This is the NAV on the day you redeem them. You will receive your funds in your bank account within 1-3 days depending on which mutual fund you invested in.</h3>

<h3><strong>● Tax Savings </strong></h3>

<h3>Up to Rs. 150,000 in ELS mutual funds is eligible for tax benefits under section 80C, Income Tax Act 1961. If mutual fund investments are held for a longer time, they are tax-efficient.</h3>

<h3><strong>● Multiple Choices </strong></h3>

<h3>You have many choices to choose from mutual funds that meet your needs. Liquid funds are for investors who want to enjoy low interest rates and safety from debt. They also offer flexi-cap, liquid funds.</h3>

<h3><strong>● It is cost-effective </strong></h3>

<h3>Mutual funds are a low-cost investment option. A mutual fund can pool the investments of several investors to allow it to invest in stocks and bonds that are otherwise out of reach or more expensive than the average investor.</h3>

<h3><strong>● Returns</strong></h3>

<h3>Mutual funds are not guaranteed and mutual fund returns can be subject to market risk. However, equity mutual funds can provide double-digit annual returns over the long-term. Also, debt funds offer better returns than bank deposits.</h3>

<h3><strong>● Mutual Fund Industry is Well Regulated in India </strong></h3>

<h3>India&#39;s capital market regulator Securities and Exchange Board of India(SEBI) regulates the industry. Mutual funds must adhere to strict regulations in order to ensure investor protection, liquidity and fair valuation.</h3>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingiwe"><button data-target="#collapseiwe" data-toggle="collapse" type="button">Crucial Drawbacks of Mutual Funds</button></div>

<div aria-labelledby="headingiwe" class="collapse" data-parent="#accordionExample" id="collapseiwe">
<div class="card-body">
<h4><strong>Let&#39;s now take a look at some of the cons to investing in mutual funds:</strong></h4>

<h3><strong>● Exit Load </strong></h3>

<h3>Mutual fund investors are generally charged an exit fee to redeem investments within a certain time frame, such as one year from the date they were invested. This is to prevent investors from leaving the scheme early. It also impacts the fund&#39;s performance as well as the investor&#39;s ability to achieve their goals.</h3>

<h3><strong>● High costs </strong></h3>

<h3>In some mutual funds charged high cost. SEBI has set a maximum expense ratio that mutual funds may charge. They are dependent on the size of the mutual fund. The expense ratios tend to decrease as the mutual fund grows in size.</h3>

<h3><strong>● Overdiversification</strong></h3>

<h3>In the plan to diversify your investments, you have a good option to invest in mutual funds, where you get wide number of stocks, leading to over-diversification. Some stocks in a portfolio may not deliver high returns every time.</h3>

<h3><strong>● Market risk</strong></h3>

<h3>Mutual funds investments are subject to risk. Diversification cannot reduce the risk of financial market losses. Many macroeconomic and microeconomic factors can increase market risks.</h3>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingjwe"><button data-target="#collapsejwe" data-toggle="collapse" type="button">Which Mutual Funds should I invest in?</button></div>

<div aria-labelledby="headingjwe" class="collapse" data-parent="#accordionExample" id="collapsejwe">
<div class="card-body">
<p>There are many types of mutual funds, but it is important to invest equally in four types of growth stock mutual funds. These funds include growth and income, aggressive growth, growth, growth and international.</p>

<h2><strong>1. Growth and Income </strong></h2>

<p>Large-cap funds are made up of stocks that are owned by large companies, including some you may recognize like Microsoft or Apple. They are typically valued at over $10 billion. These funds are the most predictable and calmest. They are stable and low-risk funds that can provide a solid foundation for your portfolio.</p>

<h2><strong>2. Growth </strong></h2>

<h3>Growth funds are exactly what they sound like. They invest in medium-sized to large companies with room for growth. These funds are sometimes called mid-cap funds. These funds can fluctuate with the economy but are generally more stable than income and growth funds.</h3>

<h2><strong>3. Aggressive Growth </strong></h2>

<p>Small-cap funds are sometimes called aggressive growth funds. They are the &quot;wild child of mutual funds.&quot; They are up when they are up. But they can also be down. They are those stocks that come from companies with high growth potential. This is your chance to take a bigger risk and potentially reap a greater financial reward. These mutual funds include stocks from companies other than the United States, such as BMW, Mercedes, and LG. This allows investors to diversify their portfolios by investing in international companies of different sizes. You can reap the benefits of international companies&#39; success by including international mutual funds in your portfolio.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingkwe"><button data-target="#collapsekwe" data-toggle="collapse" type="button">How to Select the Right Mix of Mutual Funds</button></div>

<div aria-labelledby="headingkwe" class="collapse" data-parent="#accordionExample" id="collapsekwe">
<div class="card-body">
<p>These are the main considerations when you are going to selecting a mutual fund.</p>

<h2><strong>1. Take a look at the fund&#39;s history over time </strong></h2>

<p>It is important to examine the history of a mutual fund and the performance over the past 10 to 20 years, not just the last year. It&#39;s easy to become too focused on the funds with high returns in recent years and get lost in detail.</p>

<h2><strong>2. Compare mutual funds </strong></h2>

<p>It&#39;s also important to compare the performance of the mutual fund to similar funds over long periods. Are they able to keep up with a benchmark such as the S&amp;P 500? Or are they performing so poorly that it makes even the worst funds seem good? You want to reduce your risk by choosing a fund with a track record of high returns and a long history.</p>

<h2><strong>3. Learn more about the fees and expenses of the fund</strong></h2>

<p>You can use the expense ratio to determine how much a fund is worth. This is the amount you will pay each year for the fund. Also, you should consider transaction fees, sales charges and brokerage charges. These costs can vary depending on which fund type you choose.</p>

<h2><strong>4. Diversification and diversify</strong></h2>

<p>Diversification is a way to spread your money. Mutual funds that are filled with stocks from different companies already have some level of diversification. You can lower your risk by diversifying your investments among the four mutual fund types that we have already mentioned.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headinglwe"><button data-target="#collapselwe" data-toggle="collapse" type="button">How to choose the best Mutual Funds to invest in your Portfolio?</button></div>

<div aria-labelledby="headinglwe" class="collapse" data-parent="#accordionExample" id="collapselwe">
<div class="card-body">
<p>The best mutual fund choice depends on your needs, including your tolerance for risk and time horizon. It also depends on the other mutual funds you have.</p>

<p><strong>What time do you expect to be able to access the money?</strong></p>

<p>Stock funds may be a better investment than bonds or money market funds, as they are more flexible in terms of risk. Bond or money market funds may be a better option if you have immediate cash needs.</p>

<p><strong>Are you able to withstand temporary losses while holding on? </strong></p>

<p>Stock funds are a good investment if you&#39;re able to stick to your investment plan over the long-term.</p>

<p><strong>Are you looking for a particular gap in your portfolio?</strong></p>

<p>Your portfolio may require more balance. Do you have a lot of bond funds but need stocks to balance your returns? Are you only investing in U.S.-based stocks and not foreign stocks? Knowing your financial situation and portfolio is crucial in order to determine which mutual fund would be the best for you.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingmwe"><button data-target="#collapsemwe" data-toggle="collapse" type="button">Active vs. passive mutual funds</button></div>

<div aria-labelledby="headingmwe" class="collapse" data-parent="#accordionExample" id="collapsemwe">
<div class="card-body">
<p>Experts may have spoken of active and passive mutual funds. Active funds aim to outperform benchmarks like the S&amp;P 500 by analysing stocks and choosing the stocks that will yield the greatest returns for the fund. These funds are more expensive than passively managed funds because they have teams of analysts and portfolio managers who analyze investment opportunities. Passive funds do not aim to outperform benchmarks, but instead strive to match benchmark performance. These funds are sometimes called index fund. Because no time is spent searching for the best stocks to invest in. The cost of these funds tends be significantly lower than active funds. Many active funds fail to beat their benchmarks and sometimes produce lower performance than the benchmark. Activists in active funds often disappoint investors once costs are added.</p>
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="headingnwe"><button data-target="#collapsenwe" data-toggle="collapse" type="button">7 Best Mutual Funds of Dec 2022</button></div>

<div aria-labelledby="headingnwe" class="collapse" data-parent="#accordionExample" id="collapsenwe">
<div class="card-body">
<ul>
  <li>American Funds Washington Mutual F1(WSHFX).</li>
  <li>Thrivent Mid Cap Stock Fund (TMSIX)</li>
  <li>INVESCO Small Cap Value Fund VSCAX</li>
  <li>MFS Blended Research International Equity Fund - (BRXAX).</li>
  <li>TIAA-CREF Social Choice International Equity Fund - TSORX</li>
  <li>JP Morgan Income Fund JGIAX</li>
  <li>INVESCO Equity and Income Fund ACEIX</li>
</ul>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</section>

<?php $pages=pages('pages','7');
       echo $pages->content; ?>



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

