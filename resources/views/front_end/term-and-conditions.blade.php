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
    padding-top: 1.25rem;
    /* Adjust as needed */
    margin-bottom: 0.5rem;
    /* Adjust as needed */
    font-family: 'Josefin Sans', sans-serif;
    text-align: center;
    font-size: 2.1rem;
    /* Adjust as needed */
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
      <div class="col-md-12 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/terms_and_conditiopn.png')}});background-attachment: fixed;
     flex-direction: column;
    justify-content: center; no-repeat;
    z-index: 1;
    color: #fff;">
       
      </div>


    </div>
  </div>
</section> -->
<div class="">

        <img class="card-img" src="{{website_asset_image_base_url()}}/img/terms_and_conditiopn.png"
            alt="Card image" width="auto" />
    </div>
<section class="mb-4">

  <div class="container-fluid mt-4 ">
    <div class="row">
      <div class="col-md-12">
        <div class="card-body-right">
          <h4 class="card-title eligible slide">Terms and Conditions</h4>
          <div class="bar m-auto">&nbsp;</div><br><br>
          <p class="paraFont"> MyZeon services are subject to the following conditions. Before proceeding further, read
            and accept the terms and conditions. Our Terms and Conditions (TaC)are linked with the Privacy Policy. We
            recommend you read this. These conditions are effective upon acceptance. Usage of any functionality of our
            site means you accept our conditions. If this TaC conflicts with any other documents, the TaC will control
            it for usage. You may not proceed further if you do not agree to be bound by our TaC and the Privacy Policy.
          </p><br>
          <p class="paraFont">Be sure to return to this page and review the updated version of the TaC. We reserve the
            right to change or modify the conditions at any time, at our sole discretion. </p>

          <h5 class="eligible"><strong><span lang="EN">1. Description of Services</span></strong></h5>
          <p class="paraFont">MyZeon provides access to information on Financial and Utility Services, such as – Loans,
            Credit Cards, investments, and Communication Services. So it means you are responsible for obtaining access
            to our site, and when you agree to the conditions, you allow third-party fees (such as Internet service
            provider or airtime charges). In addition, you provide and are responsible for all equipment necessary to
            access our site. By using the MyZeon site and furnishing your personal and contact details, you agree that
            you are interested in availing and purchasing the services. So MyZeon may contact you electronically or by
            phone to understand your interest in the selected products and services. MyZeon reserves the right to make
            your details available to partners and contact its partners for information and sales through email,
            telephone, and SMS. Upon agreeing to TaC, you’ll receive promotional materials and special offers.</p>

          <h5 class="eligible"><strong><span lang="EN">2. License and Site Access</span></strong></h5>
          <p class="paraFont">MyZeon grants you a limited license to their site to help you make personal use of the
            site and the service they provide. Our license does not include downloading or copying information for the
            benefit of another individual.</p>
          <p class="paraFont"><span lang="EN">Any unauthorized use by you terminates the permission or license granted
              to you. By using our site, you agree not to:</span></p>
          <p class="paraFont">(i) use our site or its contents for commercial purpose</p>
          <p class="paraFont"><span lang="EN">(ii) engage in fraudulent, speculative, or false transactions or
              transactions in anticipation of demand</span></p>
          <p class="paraFont"><span lang="EN">(iii) monitor, copy, or use any content or information of this site
              without our express written consent using robots, spiders, scrapers, or any other automated methods or
              processes</span></p>
          <p class="paraFont"><span lang="EN">(iv) bypass or circumvent other measures to prevent or limit access to
              this site, such as robot exclusion headers, or circumvent other controls on our site.</span></p>
          <p class="paraFont"><span lang="EN">(v) take any action that imposes, or may impose, in our discretion.</span>
          </p>
          <h5 class="eligible"><strong><span lang="EN">3. Eligibility</span></strong></h5>
          <p class="paraFont"><span lang="EN">The service we provide is not available to minors, so people under 18 are
              suspended or removed from the system by MyZeon.</span></p>
          <h5 class="eligible"><strong><span lang="EN">4. Your Account</span></strong></h5>
          <p class="paraFont"><span lang="EN">Considering your use of our site, you represent that you are of legal age
              and can form a binding contract with us. Person’s that barred from receiving services under the laws of
              India won’t get the facility from our site. You also agree to provide true, accurate and complete
              information about yourself as shown on our site. If any information is found untrue, inaccurate, not
              updated, or incomplete, MyZeon has the right to refuse any current or future use.</span></p>

          <h5 class="eligible"><strong><span lang="EN">5. Submitted Content</span></strong></h5>
          <p class="paraFont"><span lang="EN">MyZeon does not claim ownership of any materials you make available
              through the site. At MyZeon’s sole discretion, such materials may be included in the service in whole,
              part, or modified form. Concerning such materials you submit or make available for inclusion on the site,
              you grant MyZeon the right to use, copy, distribute, publicly display, modify, create derivative works,
              and sublicense such materials. You now represent warrant and covenant that any materials you provide do
              not include anything on which you do not have the full right. We have no responsibility and assume no
              liability for any submitted content submitted by you and are under no obligation to post your comments.
              You are prohibited from posting or transmitting content to or from this site:</span></p>
          <ul>
            <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> Unlawful, threatening,
              defamatory, obscene, or other material or content
              which violates the rights of publicity and/or privacy or any law.</li>
            <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> Any commercial material
              (including, but not limited to, solicitation of
              funds, advertising, or marketing).</li>
            <li class="paraFont"><span style="color: #1338be; font-weight: 600;">&bull;</span> Any material or content
              that infringes the copyright, trademark, patent
              right, or other proprietary right of a third-party.</li>
          </ul>
          <p class="paraFont">You shall be solely liable for any damages resulting from any violation of the preceding
            restrictions or any other harm resulting from your posting of content to this site.</p>


        </div>
      </div>
    </div>
  </div>
</section>





@endsection