<!DOCTYPE html>


<html lang="en">

<head>

<!-- Required meta tags -->

<meta charset="utf-8" />

<meta

name="viewport"

content="width=device-width, initial-scale=1, shrink-to-fit=no"

/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />


<link

rel="icon"

href="{{ asset('assets/front_end/asset/img/favicon.png') }}"

type="image/gif"

/>

<meta name="description" content="myzeon, Credit myzeon." />

<meta name="keywords" content="Home Loan, Loan Product, Personal Loan" />

<link href=

"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"

rel="stylesheet">

<title><?php echo !empty($pageTitle) ? $pageTitle : 'Myzeon'; ?></title>

<!-- Bootstrap CSS -->

<!-- <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"> -->

<link

rel="stylesheet"

href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"

/>

<!-- <link rel="stylesheet" href="{{asset('assets/assets/assets/front_end/asset/css/mainab59.css')}}" type="text/css" media="all"> -->

<link rel="stylesheet" href="{{ asset("assets/front_end/asset/css/commoncalculatorab59.css") }}" type=text/css media="all">

<link

rel="stylesheet"

href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}"

type="text/css"

media="all"

/>

<link

rel="stylesheet"

type="text/css"

href="{{ asset('assets/front_end/asset/css/reset.css') }}"

/>

<link

rel="stylesheet"

type="text/css"

href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}"

/>

<link

rel="stylesheet"

type="text/css"

href="{{ asset('assets/front_end/asset/css/style.css') }}"

/>

<link

rel="stylesheet"

type="text/css"

href="{{ asset('assets/front_end/asset/css/responsive.css') }}"

/>

<link

rel="stylesheet"

href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css"

/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link

rel="stylesheet"

href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"

/>

<link

rel="stylesheet"

href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"

/>


<link

href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"

rel="stylesheet"

integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"

crossorigin="anonymous"

/>

<style>
    

    /* .footer-social-icons {
  display: flex;
} */

.social-icon {
  font-size: 24px;
  margin: 0 10px;
  transition: color 0.3s, transform 0.3s;
}

.social-icon:hover {
  color: #007bff; /* Change color on hover */
  transform: scale(1.1); /* Add scaling effect on hover */
}

/* Define custom colors for each icon */
.whatsapp i {
  color: #25d366; /* WhatsApp green */
}

.twitter i {
  color: #1da1f2; /* Twitter blue */
}

.facebook i {
  color: #1877f2; /* Facebook blue */
}

.linkedin i {
  color: #0077b5; /* LinkedIn blue */
}

/* Add this CSS to your stylesheet */

.animated-button {

background-color: #ff9800;

color: white;

border: none;

padding: 10px 20px;

text-align: center;

text-decoration: none;

display: inline-block;

font-size: 16px;

margin: 10px;

cursor: pointer;

transition: background-color 0.3s ease; /* Add a smooth transition effect */

}


.animated-button:hover {

background-color: #f57c00; /* Change the background color on hover */

}


/* Button styles */

.y-button {

background-color:#FFD756;

color: #1338BE;

font-weight: 800;

border: none;

padding: 10px 20px; /* Adjust the height and width as needed */

border-radius: 5px;

transition: background-color 0.3s, transform 0.3s;

}


/* Button hover animation */

.y-button:hover {

background-color: rgba(28, 27, 26, 0.663);

transform: scale(1.1);

color: white;

}


/* Additional animation styles */

.animated-button {

transition: background-color 0.3s, transform 0.3s;

}


.showCaluculatorItem {

list-style: none;


}


#cssmenu ul li a {

color: #f7f5f5 !important;

font-size: 15px;

}

#showpanel{

background-color: #ffd756;

}

.flex-container {

display: flex;

justify-content: space-between; /* Equal space between items */

margin-top: 80px;

}



.flex-item {

flex: 1; /* Flex items take equal space */

padding: 10px; /* Add padding or adjust as needed */

/* border: 1px solid #ccc; Add borders or styling as needed */

}

.flex-item li a{

text-decoration: none;


}


.wrp-faq button {

border: none;

background: transparent;

width: 100%;

outline: none;

text-align: left;

font-weight: 600;

font-size: 13px;

position: relative;

padding: 17px 20px 15px 20px;

}


.wrp-faq .card-header {

padding: 0;

}


.wrp-faq .card i.fa {

float: right;

transition: all 0.5s;

position: absolute;

right: 20px;

font-size: 15px;

}


select.form-control.select_multi ~ .btn-group {

display: block;

}


select.form-control.select_multi ~ .btn-group > button.multiselect {

display: flex;

width: 100%;

height: calc(1.5em + 0.75rem + 2px);

padding: 0.375rem 0.75rem;

font-size: 1rem;

text-align: left;

font-weight: 400;

line-height: 1.5;

color: #495057;

background-color: #fff;

background-clip: padding-box;

border: 1px solid #ced4da;

border-radius: 0.25rem;

transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

align-items: center;

justify-content: space-between;

}


select.form-control.select_multi

~ .btn-group

> button.multiselect

> span.multiselect-selected-text {

font-size: 13px;

}


ul.multiselect-container.dropdown-menu.show {

right: 0px;

}

</style>


<style>
  body {
  font-family: "Montserrat", sans-serif; /* Sets the font family for the entire body text */
  color: #ffffff;
/* 
font-size: 18px;

font-weight: 400;
font-family: "Montserrat",Sans-serif; */

}

  .footer-element ul li a:hover{

  }

.footer-element ul li a {

color: #ffffff;

font-size: 19px;

font-weight: 300;
font-family: "Montserrat",Sans-serif;


/* text-decoration: none; */

}


/* .contact-us-footer {

display: inline;

float: left;

}


.footer-element-down {

float: left;

} */


.float-left {

float: left;

margin-right: 10px;

}


.footer-anchor-tag {

/* margin-left: 10px; */

}


.footer-main-heading {

/* margin-left: 13px; */

}





.yellow-button {

display: inline-block;

background-color: #ebc42a;

color: black; /* You can change the text color to your preference */

text-decoration: none; /* Remove the default underline on links */

border: none;

transition: background-color 300ms linear;

border-radius: 10px;

cursor: pointer;

text-align: center;

font-family: "Montserrat", Sans-serif;

/* font-size: 16px;

font-weight: 800;

letter-spacing: 0.5px; */

}



</style>

</head>


<body class="js">

<div id="preloader"></div>


<!-- start logo menu area -->

<header class="second-header" style="background-color: #1338BE; height: 80px; position: relative;">

<div class="container-fluid">

<div class="row">

<div class="col-md-4 col-lg-4 col-xl-3">

<div class="second-logo">

<a href="{{ route('home') }}">

<img src="{{ asset('assets/front_end/asset/img/logo.png') }}" alt="">

</a>

</div>

</div>

<div class="col-md-8 col-lg-8 col-xl-6">
  

<div >

<ul style="display: flex; justify-content: center; list-style: none; ">

<li style="margin: 15px;"><a href="#" id="showAllloans" style="color: white;"><b>ALL SERVICES</b></a></li>

<li style="margin: 15px;"><a href="https://www.myzeon.com/contact" id="showAllloans" style="color: white;"><b>CONTACT US</b></a></li>

<li style="margin: 15px;"><a href="#" id="showAllloans" style="color: white;"><b>ABOUT US</b></a></li>

</ul>

</div>

</div>

<div class="col-md-4 col-lg-4 col-xl-3">

<div id="cssmenu" style="position: absolute; top: 0; right: 0;">

<ul class="flex justify-end">

<li class="relative">

<button class="y-button animated-button" onclick="location.href='{{ route('check-cibil-score') }}'">CIBIL SCORE</button>

</li>

<li>

<button class="y-button animated-button" onclick="location.href='{{ route('business-loan') }}'">APPLY NOW</button>

</li>

</ul>

</div>

</div>

</div>

</div>

</header>


<div id="showpanel" class="hidden bg-gradient-to-r from-blue-500 to-yellow-500 p-6 fade-in text-center">

<div class="flex-container justify-between space-x-4">

<!-- LOANS -->

<div class="flex-item">

<p class="text-xl font-semibold text-white mb-4">LOANS</p>

<ul class="text-white">

<li>

<a href="{{ route('personal-loan') }}" class="hover:underline font-medium">PERSONAL LOAN</a>

</li>

<li>

<a href="{{ route('business-loan') }}" class="hover:underline font-medium">BUSINESS LOAN</a>

</li>

<li>

<a href="{{ route('home-loan') }}" class="hover:underline font-medium">HOME LOAN</a>

</li>

<li>

<a href="{{ route('car-loan') }}" class="hover:underline font-medium">CAR LOAN</a>

</li>

<li>

<a href="{{ route('loan-against-property') }}" class="hover:underline font-medium">LOAN AGAINST PROPERTY</a>

</li>

</ul>

</div>


<!-- CARDS -->

<div class="flex-item">

<p class="text-xl font-semibold text-white mb-4">CARDS</p>

<ul class="text-white">

<li><a href="{{ route('credit-cards') }}" class="hover:underline font-medium">CREDIT CARD</a></li>

<li><a href="{{ route('debit-cards') }}" class="hover:underline font-medium">DEBIT CARD</a></li>

</ul>

</div>


<!-- INVESTMENTS -->

<div class="flex-item">

<p class="text-xl font-semibold text-white mb-4">INVESTMENTS</p>

<ul class="text-white">

<li><a href="{{ route('mutual-funds') }}" class="hover:underline font-medium">MUTUAL FUNDS</a></li>

<li><a href="{{ route('fixed-deposit') }}" class="hover:underline font-medium">FIXED DEPOSIT</a></li>

</ul>

</div>


<!-- FINANCIAL TOOLS -->

<div class="flex-item relative group">

<p class="text-xl font-semibold text-white mb-4">FINANCIAL TOOLS</p>

<ul class="submenu" id="showcalu">

<li class="financelist">

<span class="submenu-button group-hover:rotate-180"></span>

<a href="#" id="showCaluculatorItem" class="group-hover:underline font-medium">CALCULATOR</a>

<ul>

<li class="showCaluculatorItem">

<a href="{{ route('cal-personal-loan') }}" class="hover:underline font-medium">Personal Loan</a>

</li>

<li class="showCaluculatorItem">

<a href="{{ route('cal-business-loan') }}" class="hover:underline font-medium">Business Loan</a>

</li>

<li class="showCaluculatorItem">

<a href="{{ route('cal-home-loan') }}" class="hover:underline font-medium">Home Loan</a>

</li>

<li class="showCaluculatorItem">

<a href="{{ route('cal-car-loan') }}" class="hover:underline font-medium">Car Loan</a>

</li>

<li class="showCaluculatorItem">

<a href="{{ route('gst-calculator') }}" class="hover:underline font-medium">GST Calculator</a>

</li>

<li class="showCaluculatorItem">

<a href="{{ route('fd-calculator') }}" class="hover:underline font-medium">FD Calculator</a>

</li>

<li class="showCaluculatorItem">

<a href="{{ route('ppf-deposit') }}" class="hover:underline font-medium">PPF Calculator</a>

</li>

<li><a href="#" class="hover:underline font-medium">IFSC CODE</a></li>

</ul>

</li>

</ul>

</div>

</div>

</div>




<!------------------------------------------------------------------------------------->

@yield('content')

<!------------------------------------------------------------------------------------->


<!-- ----------------------------------------------------------------Footer Start---------------------------------------------------------------------------------------- -->

<!-- start footer area -->

<section class="footer-area footer-two footer-three section-padding animate__animated animate__fadeInUp">
  <div class="container">
    <div class="row">


      <div class="col-md-3  animate__animated animate__fadeInUp">
        <div class="footer-widget">
          <div class="footer-title">
            <div class="elementor-element elementor-element-19acb440 elementor-widget elementor-widget-image two_elementor_element animated slideInUp" data-id="19acb440" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}" data-widget_type="image.default">
              <div class="elementor-widget-container two_elementor_element">
                <a href="https://www.myzeon.com/" class="two_elementor_element">
                  <noscript class="two_elementor_element">
                    <img decoding="async" width="300" height="120" src="https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-300x78.png" class="attachment-medium size-medium wp-image-552" alt="Myzeon" srcset="https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-300x78.png 300w, https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-768x200.png 768w, https://www.myzeon.com/wp-content/uploads/2023/05/logo-1.png 799w" sizes="(max-width: 300px) 100vw, 300px" />
                  </noscript>
                  <img decoding="async" width="300" height="100" src="https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-300x78.png" data-src="https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-300x78.png" class="lazy attachment-medium size-medium wp-image-552 two_elementor_element entered loaded" alt="Myzeon" data-srcset="https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-300x78.png 300w, https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-768x200.png 768w, https://www.myzeon.com/wp-content/uploads/2023/05/logo-1.png 799w" data-sizes="(max-width: 300px) 100vw, 300px" data-ll-status="loaded" sizes="(max-width: 300px) 100vw, 300px" srcset="https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-300x78.png 300w, https://www.myzeon.com/wp-content/uploads/2023/05/logo-1-768x200.png 768w, https://www.myzeon.com/wp-content/uploads/2023/05/logo-1.png 799w">
                </a>
              </div>
            </div>
            <div class="elementor-element elementor-element-6adad94f elementor-widget elementor-widget-text-editor two_elementor_element animated slideInUp" data-id="6adad94f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}" data-widget_type="text-editor.default">
              <div class="elementor-widget-container two_elementor_element">
                <p class="elementor-widget-container" style="color:white;font-weight: 300; font-size: 19px; font-family: Montserrat", sans-serif;>To adopt channels and methodologies for increasing Accessibility and offer products and services keeping in mind the Affordability of the clients. MyZeon is India’s premier fintech company.&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
          <!-- End of the new code -->
          
          <div class="col-md-2 animate__animated animate__fadeInUp">
              <div class="footer-element">
                  <div class="footer-title">
                    <h4 class="footer-main-heading">Quick Link</h4>
                  </div>
                    <div class="elementor-element elementor-element-19acb440 elementor-widget elementor-widget-image two_elementor_element animated slideInUp" data-id="19acb440" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}">
                      
                  <ul>
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li><a href="{{ route('about') }}">About Us </a></li>
                      <li><a href="{{ route('why-choose-us') }}">Why Choose Us </a></li>
                      <li><a href="{{ route('contact') }}">Contact us </a></li>
                      <li><a href="#">Blog</a></li>
                  </ul>
              </div>
                  </div>
                  
          
          </div>
          <div class="col-md-2 animate__animated animate__fadeInUp">
              <div class="footer-element">
                  <div class="footer-title">
                      <h4 class="footer-main-heading">Services</h4>
                  </div>
                  <div class="elementor-element elementor-element-19acb440 elementor-widget elementor-widget-image two_elementor_element animated slideInUp" data-id="19acb440" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}">
                  <ul>
                      <li><a href="{{ route('personal-loan') }}">Personal Loan</a></li>
                      <li><a href="{{ route('business-loan') }}">Business Loan</a></li>
                      <li><a href="{{ route('home-loan') }}">Home Loan </a></li>
                      <li><a href="{{ route('car-loan') }}">Car Loan</a></li>
                      <li><a href="{{ route('loan-against-property') }}">Loan Against Property</a></li>
                  </ul>
              </div>
          </div>
          </div>
          <div class="col-md-2 animate__animated animate__fadeInUp">
            <div class="footer-element">
                <div class="footer-title">
                    <h4 class="footer-main-heading">Important Links</h4>
                </div>
                <div class="elementor-element elementor-element-19acb440 elementor-widget elementor-widget-image two_elementor_element animated slideInUp" data-id="19acb440" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}">
                <ul>
                    <li><a href="{{ route('personal-loan') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('business-loan') }}">Admin Login </a></li>
                    <li><a href="{{ route('loan-against-property') }}">Careers</a></li>
                </ul>
            </div>
            </div>
        </div>
          <div class="col-md-3 animate__animated animate__fadeInUp">
              <div class="footer-element">
                  <div class="footer-title">
                      <h4 class=" footer-main-heading">Contact us</h4>
                  </div>
                  <div class="elementor-element elementor-element-19acb440 elementor-widget elementor-widget-image two_elementor_element animated slideInUp" data-id="19acb440" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}">
                  <div class="contact-us-footer">
                      <ul>
                          <li>
                              <div class="footer-element-down">
                                  <i class="bi bi-geo-alt-fill float-left"></i>
                                  <a href="https://goo.gl/maps/sR25qkXZMv1ErHNMA" class="footer-anchor-tag">
                                      A-47, Sector-2 Noida, <br />Uttar Pradesh - 201301
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="footer-element-down">
                                  <i class="bi bi-envelope float-left"></i>
                                  <a href="mailto:info@myzeon.com" class="footer-anchor-tag">
                                      info@myzeon.com <span>reply within 2 Hours</span>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="footer-element-down">
                                  <i class="bi bi-telephone float-left"></i>
                                  <a href="tel:0120-4198166" class="footer-anchor-tag">
                                      0120-4198166 <span>Call Anytime</span>
                                  </a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          </div>
          
      </div>
     </div>
  </div>
  <center>
 <div class="row" >
    <div class="footer-social-icons">
        <a href="https://web.whatsapp.com/" target="_blank" class="social-icon whatsapp">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://twitter.com/Myzeonloans" target="_blank" class="social-icon twitter">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/people/Myzeon-Loans/61551106282364/" target="_blank" class="social-icon facebook">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.linkedin.com/in/myzeon-loans-2ab7b928b/" target="_blank" class="social-icon linkedin">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
      
 </div>      
</center>
</section>

<!-- end footer area -->

<div class="copy-right-section second-copyright">

<div class="container">

<div class="row">

<div class="col-md-6 text-left">

<div class="copyright-text">

<!-- <p><i class="fa fa-copyright"></i> <? //php echo date('Y');

?> Myzeon. All Rights Reserved | Developed by <a href="https://webthinksolution.com/">Web Think Solution</a></p> -->

<p>

<i class="fa fa-copyright"></i>

<?php echo date('Y'); ?>

Myzeon. All Rights Reserved

</p>

</div>

</div>

<div class="col-md-6 text-right">

<ul class="footer-nav">

<li>

<a href="{{ route('privacy-policy') }}">Privacy Policy</a>

</li>

<li>

<a href="{{ route('term-and-conditions') }}"

>Term & Conditions</a

>

</li>

<li>

<a href="https://www.myzeon.com/admin-login">Admin Login</a>

</li>

</ul>

</div>

</div>

</div>

</div>


<!-- The Modal -->

<div class="modal" id="myModal">

<div class="modal-dialog">

<div class="modal-content">

<!-- Modal Header -->

<div class="modal-header">

<h4 class="modal-title">Modal Heading</h4>

<button type="button" class="close" data-dismiss="modal">

&times;

</button>

</div>


<!-- Modal body -->

<div class="modal-body">Modal body..</div>


<!-- Modal footer -->

<div class="modal-footer">

<button type="button" class="btn btn-danger" data-dismiss="modal">

Close

</button>

</div>

</div>

</div>

</div>

<!-- end of footer area -->

<!-- <script src="asset/js/jquery-3.3.1.min.js"></script> -->


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{

asset('assets/front_end/asset/js/jquery.easing.min.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/jquery-ui.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/jquery.ui.touch-punch.min.js')

}}"></script>

<!-- <script src="asset/js/popper.min.js"></script> -->

<!-- <script src="asset/js/bootstrap.min.js"></script> -->

<script src="{{

asset('assets/front_end/asset/js/jquery.nice-select.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/menumaker.js')

}}"></script>

<script

src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"

integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="

crossorigin="anonymous"

referrerpolicy="no-referrer"

></script>

<!-- <script src="asset/js/owl.carousel.min.js"></script> -->

<script src="{{ asset('assets/front_end/asset/js/slider.js') }}"></script>

<script src="{{

asset('assets/front_end/asset/js/calculator.js')

}}"></script>

<script src="{{ asset('assets/front_end/asset/js/active.js') }}"></script>

<script src="{{ asset('assets/front_end/asset/js/mainab59.js') }}"></script>

<script src="{{

asset('assets/front_end/asset/js/core.minab59.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/mouse.minab59.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/slider.minab59.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/commoncalculatorab59.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/emicalculatorab59.js')

}}"></script>

@if(Route::currentRouteName()=='')

<script src="{{

asset('assets/front_end/asset/js/commoncalculatorab59.js')

}}"></script>

<script src="{{

asset('assets/front_end/asset/js/emicalculatorab59.js')

}}"></script>

@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>


<script>

$(window).scroll(function () {

if ($(this).scrollTop() > 50) {

$(".second-header").addClass("sticky");

} else {

$(".second-header").removeClass("sticky");

}

});

$(".owl-carousel").owlCarousel({

loop: true,

margin: 50,

nav: false,

dots: false,

autoplay: true,

autoplayTimeout: 4000,

smartSpeed: 4000,

responsive: {

0: {

items: 1,

},

600: {

items: 3,

},

1000: {

items: 8,

},

},

});

$(".select").select2({

// placeholder: "Select a programming language",

allowClear: true,

});

$(document).ready(function () {

// Add minus icon for collapse element which is open by default

$(".collapse.show").each(function () {

$(this)

.prev(".card-header")

.find(".fa")

.addClass("fa-angle-up")

.removeClass("fa-angle-down");

});

// Toggle plus minus icon on show hide of collapse element

$(".collapse")

.on("show.bs.collapse", function () {

$(this)

.prev(".card-header")

.find(".fa")

.removeClass("fa-angle-down")

.addClass("fa-angle-up");

})

.on("hide.bs.collapse", function () {

$(this)

.prev(".card-header")

.find(".fa")

.removeClass("fa-angle-up")

.addClass("fa-angle-down");

});

// multiselect js

$(".select_multi").multiselect({

nonSelectedText: "Select Bank",

});

});

</script>

<script>

$(document).ready(function () {

//called when key is pressed in textbox

$(".numberonly").keypress(function (e) {

//if the letter is not digit then display error and don't type anything

if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

//display error message

return false;

}

});


$(".alphaOnly").keypress(function (event) {

var value = String.fromCharCode(event.which);

var pattern = new RegExp(/[a-zåäö ]/i);

return pattern.test(value);

});

});

</script>

 

<script>

$(document).ready(function () {
    $('.showCaluculatorItem').hide();

    $("#showAllloans").on("mouseenter", function () {
        $("#showpanel").show();
    });

    $("#showpanel").on("mouseleave", function () {
        $(this).hide();
    });



$('#showCaluculatorItem').on('click',function(){

$('.showCaluculatorItem').toggle();

});

});


</script>


<script

src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"

integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"

crossorigin="anonymous"

></script>

</body>

</html>

