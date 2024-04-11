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
         <h1 class="text-white text-center" style="z-index: 1;">Why choose us </h1>
         <h5 class="text-white text-center"  style="z-index: 1;">We focus on your journey in our relationship</h5>
      </div>
      
      
    </div>
  </div>
</section>

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Why choose us</h5>
          <div class="bar"></div>
        </div>
      </div>
        <div class="col-md-12">
          <p>Now that we have understood the meaning and scope of MyZeon let's delve deeper into why you should choose us as your aggregator and how it will benefit you in the long run. MyZeon is among those industries that will reshape our lives in the coming decades regarding financial decisions. As the fintech industry relies heavily on the use of data and data science, we use the same method to get you the best services.</p>
        </div>
      </div>

  </div>
</section>

<?php $pages=pages('pages','23');echo $pages->content; ?>

 @endsection