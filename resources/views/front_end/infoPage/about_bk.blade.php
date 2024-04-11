@extends('front_end_layout.home')
@push('aboutPageStyle')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">


    {{-- owl caruslel cdn link owl.carousel.min.css and default theme min js owl.theme.default.min.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> --}}


    <!-- from contact us page link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}" type="text/css"
    media="all" />


<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/reset.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/style.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/responsive.css') }}" />




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--  -->

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
    </style>

    {{-- end owl craousal file ***********************************   --}}
@endpush

@push('aboutPageScript')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    {{-- -------------------------file for add owl carousal-------------------------------------- --}}
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- end owl carousel file --}}
@endpush

@section('content')
    <!-- <section class="pt-5 pb-5 mt-5 bg-blue-600">

        <div class="container ">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="pt-md-5 mb-2 font-family-josefin-sans text-5xl font-bold text-blue-700">About Us</h3>
                    <div class="bar m-auto my-4"></div>
                </div>
            </div>
        </div>


    </section> -->



    <div>
	<img src="https://t3.ftcdn.net/jpg/05/06/32/62/240_F_506326245_2GtSGEjKLDtpHS0FSkEBs4gV34DmTtS5.jpg" style="width: 100%;height: 515px;" alt=" image" srcset="">

</div>

<!-- -------- -->
    <!-- <section class="pt-5 pb-5 mt-5 bg-blue-600"> -->

        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 text-center">

                    <div class="mb-3"><h3 class="pt-md-5 mb-2 font-family-josefin-sans text-4xl font-bold text-yellow-600">Who We Are?</h3>
                        <div class="bar m-auto"></div></div>

                    <p class="paraFont" style="color: #4b5563;  font-size: 20px;
    text-align: justify;">That's impressive! It's great to hear about Myzeon.com's success as India's No. 1 Marketplace for Loans and Credit Cards. Your focus on making personal finance decisions easy, convenient, and transparent for customers is commendable.

Your achievement in becoming the largest online platform for lending products in less than three years is remarkable. It's a testament to the trust and satisfaction of your customers. Additionally, being the only independent online player in the country to disburse loans over Rs 10,000 crore on an annualized basis showcases your strength in the lending industry.

Your dedication to providing transparent and efficient financial solutions sets you apart from the competition. By simplifying the decision-making process and offering a wide range of loan and credit card options, Myzeon.com is empowering customers to make informed financial choices.

Congratulations on your success, and keep up the good work in making personal finance more accessible and transparent for customers in India.</p>
                </div>
            </div>
        </div>
    </section> 
  
    <!-- https://www.myzeon.com/wp-content/uploads/2023/09/loan2.webp -->
    <section class="pt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="mb-3"><h3 class="pt-md-5 mb-2 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">Growth</h3>
                    <div class="bar m-auto"></div>
                </div>
                <div class="col-md-8">
                   
                    <!-- <h2>VISION</h2> -->
                    <p class="paraFont" style="color: #4b5563; text-align: justify; font-size: 20px; margin-top: 80px; ">To adopt channels and methodologies for increasing Accessibility and offer products and services keeping in mind the Affordability of the clients. MyZeon is India’s premier fintech company. We are a pioneer financial marketplace in India. Our customer-friendly services leverage proprietary tech to ensure customers discover and provide the right banking solution to their needs. MyZeon provides its users with an actionable plan to make the right financial decision without thinking twice. We offer a broad range of products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and Savings Accounts. MyZeon is one of the country’s largest credit cards, personal loans, and mortgage marketplaces. We work with India’s top banks and NBFCs to deliver the best to our customers.</p>
    
                </div>
                <div class="col-md-4">
                    <img  src="https://www.myzeon.com/wp-content/uploads/2023/09/loan2.webp" class="img-fluid">
                </div>
                </div>
        </div>
    </section>
    <!--  -->



  
    
    
    <section class="testimonial-section section-padding pt-5 pb-5 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <div class="mb-3"><h3 class="pt-md-5 mb-2 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">Testimonials</h3>
                            <div class="bar m-auto"></div>
                        </div>
                        <p style="color: #4b5563; font-size: 20px; text-align: justify;">MyZeon is India's premier fintech company. We are a pioneer financial marketplace in India. Our customer-friendly services leverage proprietary tech to ensure customers discover and provide the right banking solution to their needs.</p>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel">
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="" />
                        </div>
                        <div class="testimonial-content">
                            <h4>Anik Kumar Morya</h4>
                            <h5>CEO</h5>
                            <p style="color: #4b5563; font-size: 20px; text-align: justify;">MyZeon provides its users with an actionable plan to make the right financial decision without thinking twice.</p>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/front_end/asset/img/testimonial-1.jpg')}}" alt="" />
                        </div>
                        <div class="testimonial-content">
                            <h4>Radhey Morya </h4>
                            <h5>IT Manager</h5>
                            <p style="color: #4b5563; font-size: 20px; text-align: justify;">We offer a broad range of products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and Savings Accounts.</p>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/front_end/asset/img/testimonial-2.jpg')}}" alt="" />
                        </div>
                        <div class="testimonial-content">
                            <h4>Amit Kumar</h4>
                            <h5>Sales Consultant</h5>
                            <p style="color: #4b5563; font-size: 20px; text-align: justify;">MyZeon is one of the country's largest credit cards, personal loans, and mortgage marketplaces.</p>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="" />
                        </div>
                        <div class="testimonial-content">
                            <h4>A K Singh</h4>
                            <h5>Finance Consultant</h5>
                            <p style="color: #4b5563; font-size: 20px; text-align: justify;">We work with India's top banks and NBFCs to deliver the best to our customers.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

<!-- ---------- -->

    <section>
        <div class="jumbotron bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="border text-center pt-4 pb-4 happy-box">
                            <i class="fa fa-home fa-2x"></i>
                            <h4 class="m-0 font-weight-bolder">950</h4>
                            Completed Project
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border text-center pt-4 pb-4 happy-box">
                            <i class="fa fa-smile-o fa-2x" aria-hidden="true"></i>
                            <h4 class="m-0 font-weight-bolder">850</h4>
                            Happy Clients
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border text-center pt-4 pb-4 happy-box">
                            <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                            <h4 class="m-0 font-weight-bolder">550</h4>
                            Multi Service
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border text-center pt-4 pb-4 happy-box">
                            <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>
                            <h4 class="m-0 font-weight-bolder">750</h4>
                            Winning Awards
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="pb-5 bg-white our-partner ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="font-family-josefin-sans text-yellow-500 text-5xl leading-tight text-center font-bold">
                            Our Partners</h2>
                        <p class="font-family-josefin-sans text-blue-600 text-1xl  leading-tight text-center font-bold">There's more than one reason to sign up with confidence</p>
                    </div>
                </div>
                <div class="col-md-12 my-5 bg-white">
                    <div class="owl-carousel owl-theme">

                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank1.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank2.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank3.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank4.png') }}"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    
@endsection


{{-- animate with number  --}}
