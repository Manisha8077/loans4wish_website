@extends('front_end_layout.home')
@section('content')
<style>
  section.banner-img:before {
    display: none;
  }

  .first-form form {
    margin: 0px;
  }

  .banner-img {
    /* min-height: auto; */
  }
</style>
<style>
  .paraFont {

      color: #4b5563;
      text-align: justify;
      /* line-height: 2.1rem; */
      font-size: 17px;
  }

  .eligible {
      color: #1338be;
      font-weight: 600;
      list-style: disc;

  }

  .eligible1 {
      color: #1338be;
      font-weight: 600;
      list-style: disc;
      font-size: 17px;
  }

  .accordion {}

  .active,
  .accordion:hover {
      /* background-color: #ccc; */
  }

  .panel {
      padding: 0 18px;
      background-color: white;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
  }
</style>
<style>

  @keyframes slideIn {
      0% {
          opacity: 0;
          transform: translateX(20%);
      }

      100% {
          opacity: 1;
          transform: translateX(10);
      }
  }

  .slide {
      animation: slideIn 7s ease-in-out;
      padding-top: 1.25rem; /* Adjust as needed */
margin-bottom: 0.5rem; /* Adjust as needed */
font-family: 'Josefin Sans', sans-serif;
text-align: center;
font-size: 2.1rem; /* Adjust as needed */
font-weight: bold;
/* color: #dfaf37; */ 
  }
</style>
<style>
  .jumbotron {
      background-color: white;
  }

  .sectiontable {
      margin-top: 0px;
  }

  .personaloan-header {
      height: 250px;
  }

  .paddingtop {
      padding-top: 7px;
      color: #fef08a;
  }
</style>
<!-- <section class="banner-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/slider-2.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
     <h1 class="text-white text-center"  style="z-index: 1; ">Privacy Policy</h1>
      </div>


    </div>
  </div>
</section> -->

<div class="">

        <img class="card-img" src="{{website_asset_image_base_url()}}/img/privacy_policy.png"
            alt="Card image" width="auto" />
    </div>

<section class="" style="line-height: 2;">

  <div class="container-fluid mt-4 ">
      <div class="row">
          <div class="col-md-12">
              <div class="card-body-right">
                  <h4 class="card-title eligible slide">Privacy Policy</h4>
                  <div class="bar m-auto">&nbsp;</div><br><br>
                  <ul>
                    <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> MyZeon acknowledges the concern of customers regarding their privacy, confidentiality, and
                      security.&nbsp;</li>
                    <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> We keep our customers’ Personal Information of our customers secure and prevent any misuse thereof,
                      which is, therefore, a top priority of MyZeon.</li>
                    <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> MyZeon is strongly committed to protecting its customers’ privacy and taking all the necessary and
                      reasonable measures.</li>
                    <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> Our Privacy &amp; Security Policy explains how our customer’s personal Information is important to
                      us.&nbsp;</li>
                    <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> &nbsp;We use the customers’ Information in conjunction with our General Terms of Use.</li>
                  </ul>
                  <p class="paraFont">This Policy is published and shall be deemed to follow the provisions of the Information Technology
                    Rules, 2011, under the Information Technology Act, 2000.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="mb-4">
  <div class="container-fluid mt-4">
      <div style="line-height: 2;">
        <h5 class="eligible">Personal Information:</h5>
        <p class="paraFont">Personal Information (“PI”) means – documents and details related to a person. This PI, directly or
          indirectly, combined with other information available with MyZeon, can identify such a person.</p>
          
          <h4 class="card-title eligible slide">Applicability</h4>
                  <div class="bar m-auto">&nbsp;</div><br><br>
          
            <p class="paraFont">(i) This Policy applies to the PI, such as details about your&nbsp;</p>
            <ul>
              <li class="paraFont">
                <span style="color: #1338be; font-weight: 600;">&bull;</span> Name
              </li>
              <li class="paraFont">
                <span style="color: #1338be; font-weight: 600;">&bull;</span> Parentage
              </li>
              <li class="paraFont">
                <span style="color: #1338be; font-weight: 600;">&bull;</span> Marital status
              </li>
              <li class="paraFont">
                <span style="color: #1338be; font-weight: 600;">&bull;</span> Nationality
              </li>
              <li class="paraFont">
                <span style="color: #1338be; font-weight: 600;">&bull;</span> State/city of residence
              </li>
              <li class="paraFont">
                <span style="color: #1338be; font-weight: 600;">&bull;</span> Residential address
              </li>
            </ul>
            <p class="paraFont">(ii) By visiting and using our website, you agree to this Policy. </p>
            <p class="paraFont">(iii) MyZeon reserves the right at any time, at its sole discretion, to change or otherwise modify the
              Policy without prior notice.</p>
            <h5 class="eligible">What Personal Information About You We Gather:</h5>
            <p class="paraFont">The Information we get from our
              customers helps us personalize and improve user experience on the website.</p>
            <h5 class="eligible">Here are the types of Information we gather:</h5>
            <ul>
              <li class="paraFont"> <span class="paraFont">1. </span>The information you enter on our website.</li>
              <li class="paraFont"> <span class="paraFont">2. </span>Users can choose not to provide certain information.</li>
              <li class="paraFont"> <span class="paraFont">3. </span>We store certain types of information whenever you interact with us. For example, “cookies.” &nbsp;
              </li>
            </ul>
            <h4 class="card-title eligible slide">How do We Use The Information</h4>
            <div class="bar m-auto">&nbsp;</div><br><br>
            
            <p class="paraFont">MyZeon collects your Information when you register for an account and use our products or services. When
              you register with the website and sign in, you are not anonymous to us. To register, provide your contact
              number and other details. Upon successful registration, you’ll receive an SMS and email.</p>
            <h5 class="eligible">Confirm your consent by:</h5>
              <p class="paraFont">(i) By using the website and furnishing – personal and
              contact details, you agree that you are interested in knowing more or availing and purchasing our products
              and services. You, at this moment, agree that MyZeon may contact you, either electronically or by phone,
              to understand your interest in the selected products and services. Further, you also agree and authorize
              MyZeon and its partners, service providers, vendors, and other third parties to contact you. You agree and
              authorize MyZeon to share your Information with its group companies, vendors, service providers, business
              partners, agents, and other third parties to provide various value-added services. You agree to receive
              communications through emails, telephone, Whatsapp, SMS, or any other messaging/communication service from
              MyZeon or third parties. You also agree that MyZeon reserves the right to make your details available to
              its partner banks/financial institutions or any other third party and that they may contact the partners
              and the third party for Information through email, telephone, Whatsapp, and SMS.</p>
            <p class="paraFont">(ii) The website’s usage may also require you to consent to use your details or authorize MyZeon to
              derive your data/information from any other source or public registry, if necessary, to complete your
              profile or your application. Your PI may also be used or shared with third parties, including but not
              limited to our vendors, service providers, credit information agencies, analytics and research partners.
              MyZeon shall adhere to best industry practices while processing such applications, including information
              security, data protection, and privacy law. However, MyZeon shall not be liable to you against any
              liability or claims arising from such transactions as any such PI is being collected, used, processed and
              shared with your explicit consent.</p>
            <p class="paraFont">(iii) You now authorize and expressly consent MyZeon to share your PI with third parties including –
              Credit Information Companies (“CIC”) to check of your credit profile for MyZeon to send you targeted
              communications and offers.</p>
            <p class="paraFont">(iv) If you are no longer interested in sharing your PI, please email your request at:
              privacy@MyZeon.com. Please note that processing your request may take about 72 business hours. In addition
              to your usage of the website, you expressly waive:&nbsp;</p>
            <ul>
              <li class="paraFont"> <span style="color: #1338be; font-weight: 600;">&bull;</span>  Do Not Call (DNC) / Do Not Disturb (DND) registrations</li>
            </ul>
            <p class="paraFont">So no DNC / DND check is required for the number you have left on our website. Such modes of contacting
              include sending SMSs and/ or telephonic calls.</p>
              <p class="paraFont">(v) MyZeon reserves the right (and you expressly authorize MyZeon) to share or disclose your PI. So
                MyZeon determines, in its sole discretion, that the disclosure of such information is necessary as per the
                applicable laws.</p>
                <h5 class="eligible">Credit Information Report:</h5>
                <p class="paraFont">(i) Your Credit Information is a ‘soft search’ for your
                  credit records with Credit Information Companies “CICs” and MyZeon do not control the content or accuracy
                  of information of your credit information by CICs. MyZeon gets this Information from CIC for and on your
                  behalf only when you agree to appoint MyZeon as an authorized agent/ representative for collecting your
                  credit information from CICs. By giving your consent to use and avail your credit information report
                  through MyZeon, you agree that MyZeon and CICs shall be entitled to rely on your authorization and consent
                  to MyZeon.</p>
                <p class="paraFont">(ii) Availing your credit information through MyZeon means you’re passing of appropriate identity
                  authentication for security and privacy purposes. MyZeon shall not notify you of the reasons if you cannot
                  pass such identity authentications and cannot view and/or use your credit information.</p>
                <p class="paraFont">(iii) MyZeon may analyze and profile your credit information to assist you in being better informed
                  about, understanding, and managing – credit score/rating, identify and inform of credit products that are
                  likely to be suited to your circumstances, identify whether you may benefit from additional guidance
                  concerning your credit score and steps to take to for improving credit score. Please access MyZeon’s Terms
                  of Service for Credit Information Report for more details.</p>
      </div>
  </div>
</section>

@endsection