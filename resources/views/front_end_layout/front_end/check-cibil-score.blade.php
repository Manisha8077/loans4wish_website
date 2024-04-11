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
      <div class="col-md-12 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/slider-2.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="text-white text-center" style="z-index: 1;">CIBIL Score </h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Credit Score Free Online and Download Credit Report</h5>
      </div>
      
      
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Check the Cibil</h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>CIBIL Score: How to Determine Your CIBIL Score. How to Raise Your CIBIL Score. What is the most appropriate CIBIL score range? Understand the distinction between a CIBI score and a report.

CIBIL score is a three-digit numerical expression of your repayment and credit profile. The score ranges from 300 and 900. And the closer you're to 900, the better your CIBIL score will be. An ideal CIBIL score is 750 for getting a loan on favorable terms. If you have a CIBIL score less than the ideal score, you need to take measures to improve it.
</p>
        </div>
      </div>

  </div>
</section>

<?php $pages=pages('pages','22');echo $pages->content; ?>

 @endsection