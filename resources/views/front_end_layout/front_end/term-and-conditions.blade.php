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
         <h1 class="text-white text-center" style="z-index: 1;">Terms and Conditions</h1>
         <!-- <h5 class="text-white text-center"  style="z-index: 1;">Go through the Interest Rate, Tenure, and Maximum Loan amount of Home Loans. Buy your dream house and get an instant home loan.</h5> -->
      </div>
      
      
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Terms and Conditions</h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <?php $pages=pages('pages','20');
       echo $pages->content; ?>
        </div>
      </div>

  </div>
</section>

 @endsection
