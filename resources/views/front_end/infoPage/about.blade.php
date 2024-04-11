@extends('front_end_layout.home')
@push('aboutPageStyle')




<!-- -->
<style>
    .single-testimonial .testimonial-img{
        margin-right: 35px !important;
    }
.happy-box{
    box-shadow: 7px 8px 0px 0px #1338beb5;
}
.testimonial-slider{
  /* box-shadow: 7px 7px 3px 5px #1338beb5; */

}
.owl-carousel .owl-item img {
  border-radius: 21px;

  width: 100%;
}

    .happy-box {
        transition: background-color 0.3s ease-in-out;
    }
.jumbotron{
    background-color: white;
}
    .happy-box:hover {
        background-color: #f3d77c;;
        /* Change this to the desired background color */
    }

    .happy-box:hover i {
        color: #ffd756;
        animation: rotateIcon 0.8s ease-in-out infinite;
        /* Adjust the animation duration and timing function */
    }


    @keyframes rotateIcon {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(180deg);
        }

        100% {
            transform: rotate(360deg);
        }
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
  
  text-align: center;
  /* font-size: 2.1rem; Adjust as needed */
  font-weight: bold;
  color: #dfaf37;
  font-size: 2.1rem;
      
        /* Adjust the animation duration and timing function */
    }
</style>

<style>
    .flippable-image {
        transition: transform 0.5s;
        /* Add a smooth transition effect */
    }

    .flippable-image:hover {
        transform: scaleX(-1);
        /* Flip horizontally on hover */
    }

    li.paraFont::marker {
        color: #1338be;
    }

    .paraFont {

        color: #4b5563;
        text-align: justify;
        /* line-height: 2.1rem; */
      
        color: #4b5563;
        text-align: justify;
        font-size: 17px;

    }

    .paraFont1 {

        color: #4b5563;
        text-align: justify;
        /* line-height: 2.1rem; */
        
        color: #4b5563;
        /* text-align: justify; */
        font-size: 17px;

    }

    .eligible {
        color: #1338be;
        font-weight: 600;
        list-style: disc;

    }
</style>
<style>
    /*** Counter Start ***/
.counter-section .counter-item .counter-content {
    position: relative;
    margin-bottom: 60px;
    background-image: linear-gradient(#ffd75673, rgba(255, 255, 255, 0.3), #ffd75673);
    border-radius: 10px;
    z-index: 9;
    border-radius: 97px;
    border: 4px solid white;
}

.counter-section .counter-item {
    text-align: center;
    background: rgba(125, 153, 220, 0.15) !important;
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
    object-fit: cover;
    border-radius: 0 25% 0 25%;
}

.counter-section .counter-item .counter-content .svg-img {
    position: absolute;
    bottom: 0; 
    left: 50%; 
    transform: translateX(-50%); 
    margin-bottom: -50px; 
    margin-left: -45px; 
    transform: rotate(180deg);
}

.counter-section .counter-item .counter-quantity {
    width: 110px;
    height: 110px;
    border-radius: 55px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #1338be;
    border: solid white;
}
/*** Counter End ***/

</style>
@endpush

@push('aboutPageScript')



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

{{-- -------------------------file for add owl carousal-------------------------------------- --}}


<script>
    $(document).ready(function () {
        // Delay the start of counters by 5 seconds
        setTimeout(function () {
            startCounters();
        }, 900);
    });

    function startCounters() {
        incrementCounter("count1", "icon1", 250, 1000);
        incrementCounter("count2", "icon2", 500, 1000);
        incrementCounter("count3", "icon3", 450, 1000);
        incrementCounter("count4", "icon4", 220, 1000);
    }

    function incrementCounter(counterId, iconId, finalValue, duration) {
        let counterElement = $("#" + counterId);
        let iconElement = $("#" + iconId);
        let start = 0;
        let increment = finalValue / (duration / 3);

        function updateCounter() {
            start += increment;
            counterElement.text(Math.round(start));

            if (start >= finalValue) {
                counterElement.text(finalValue);
                clearInterval(interval);
            }
        }

        let interval = setInterval(updateCounter, 100);
    }
</script>




{{-- end owl carousel file --}}
@endpush

@section('content')

<div>
    <img src="{{website_asset_image_webimage_base_url()}}/about_usBanner1.png"  alt=" image"
     srcset="">

</div>


<section class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-4">
                <h3 class="slide eligible  mb-2 ">
                    About Us
                </h3>
                <div class="bar m-auto"></div>
            </div>
            <div class="col-md-12">
                <!-- <h2>VISION</h2> -->
                <p class="paraFont mt-3" style="line-height: 2.2;">At
                    Our team consists of financial experts who offer tailored financial solutions to meet your needs.
                    MYZEON is India's leading financial services provider, promoting digital innovation in finance with
                    over 5 million satisfied customers. We are confident in providing facilities for personal loans,
                    business loans, car loans, and home loans. Our goal is to create personalized financial products to
                    make them affordable to everyone.
                </p>
            </div>

        </div>
    </div>
</section>



<section class="container-fluid ">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="mb-4"> -->
            <div class="mb-4">
                <h3 class="slide pt-md-4 eligible mb-2">
                    Who Are We?
                </h3>
                <div class="bar m-auto"></div>
            </div>
            <div class="col-md-4" style="margin-top: -24px;">
                <img src="{{website_asset_image_webimage_base_url()}}/side_img.png"
                    class="img-fluid flippable-image" style="max-width: 90%; ">
                    <!-- <img src="{{website_asset_image_webimage_base_url()}}/aboutsideimg1.png" class="rounded float-left" alt="image"> -->
                    <!-- <img src="{{website_asset_image_webimage_base_url()}}/aboutsideimg1.png" alt="image" class="img-thumbnail"> -->
            </div>


            <div class="col-md-8 mt-4">
                <!-- <h2>VISION</h2> -->
                <p class="paraFont" style="line-height: 3;">At
                    Our team consists of financial experts who offer tailored financial solutions to meet your needs.
                    MYZEON is India's leading financial services provider, promoting digital innovation in finance with
                    over 5 million satisfied customers. We are confident in providing facilities for personal loans,
                    business loans, car loans, and home loans. Our goal is to create personalized financial products to
                    make them affordable to everyone. We are established with a commitment to redefine the standards of
                    financial services, we take pride in being a reliable partner on your journey to financial success.
                    We have been consistently serving individuals and businesses with innovative solutions customized to
                    meet their unique financial needs.Providing the best financial services customized only for you. 
                    Discover the solution to all your financial issues at one stop. 
                    

                </p>
            </div>

        </div>
    </div>
</section>

<section class="container-fluid" >
    <div class="container-fluid">

        <div class="mb-4">
            <h3 class="  mb-2 eligible slide">Features  of the Company

            </h3>
            <div class="bar m-auto"></div>
        </div>
        <ul class="pt-md-5">
            <li style="list-style: disc;" class="paraFont">Customized Financial Solutions- Our expert advisors provide
                personalized financial solutions. We understand your specific needs and customize solutions for you to
                align with your financial goals.

            </li><br>

            <li style="list-style: disc;" class="paraFont ">Competitive Interest Rate- At MYZEON, we offer competitive
                interest rates on all our financial products. Our satisfaction is when you get the best value for your
                investment.


            </li><br>

            <li style="list-style: disc;" class="paraFont ">Easy Application Process- Our quick and easy application
                process provides you with the funds you need with minimal paperwork and quick approvals.


            </li><br>

            <li style="list-style: disc;" class="paraFont ">Customer Support- Our excellent customer support team is
                available 24/7 to assist you, whether you have questions about our products or need assistance with the
                application process.

            </li><br>
            <li style="list-style: disc;" class="paraFont ">Range of Financial Products- We provide a range of financial
                products from personal loans, business loans, car loans, and home loans. We have a product to suit your
                every need.
            </li><br>






        </ul>

    </div>
</section>


<section class=" container-fluid">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="mb-4"> -->
            <div class="" >
                <h3 class="slide pt-md-5 mb-2  eligible ">
                    Mission
                </h3>
                <div class="bar m-auto"></div>
            </div>
            
            <div class="col-md-7">
                <!-- <h2>VISION</h2> -->
                <ul style="margin-top: 90px">
                    <li style="list-style: disc;" class="paraFont">Provide financial services that meet the needs of individuals
                        and businesses.
        
                    </li><br>
        
                    <li style="list-style: disc;" class="paraFont ">Offer personal loans, business loans, and home loans at
                        lower interest rates.
        
                    </li><br>
        
                    <li style="list-style: disc;" class="paraFont ">Ensure transparency and fairness in all our financial
                        transactions.
        
                    </li><br>
        
                    <li style="list-style: disc;" class="paraFont ">Provide exceptional customer service and support to our
                        valued customers.
        
                    </li><br>
                    <li style="list-style: disc;" class="paraFont ">Continuously innovate and adapt to changing market
                        conditions to better serve our clients</li><br>
        
                    <li style="list-style: disc;" class="paraFont ">Foster a culture of integrity, professionalism, and teamwork
                        among our employees
        
                    </li><br>
        
                    <li style="list-style: disc;" class="paraFont ">Maximize shareholder value through sustainable and
                        profitable growth
        
        
                    </li><br>
        
                    <li style="list-style: disc;" class="paraFont ">Educate customers to make informed decisions with our
                        financial expert’s help.
        
        
                    </li><br>
        
                </ul>
            </div>
            <div class="col-md-4">
                <img src="{{website_asset_image_webimage_base_url()}}/mission2.png"
                    class="img-fluid flippable-image" style="max-width: 90%;">
            </div>
        </div>
    </div>
</section>


<section class="testimonial-section section-padding container-fluid  ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <div class="">
                    <div style="margin-bottom: 60px;">
                        <h3
                            class="slide pt-md-5 mb-2 eligible">
                            Testimonials</h3>
                        <div class="bar m-auto"></div>
                    </div>
                    <p class="paraFont mb-3">MyZeon is
                        India's premier fintech
                        company. We are a pioneer financial marketplace in India. Our customer-friendly services
                        leverage proprietary tech to ensure customers discover and provide the right banking solution to
                        their needs.</p>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>Anil Kumar Morya</h4>
                        <h5>CEO</h5>
                        <p class="paraFont">MyZeon provides its users with
                            an actionable plan to make the right financial decision without thinking twice.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial-1.jpg')}}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>Radhey Morya </h4>
                        <h5>IT Manager</h5>
                        <p class="paraFont">We offer a broad range of
                            products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and Savings
                            Accounts.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial-2.jpg')}}" alt="testimonial-img" />
                    </div>
                    <div class="testimonial-content">
                        <h4>Amit Kumar</h4>
                        <h5>Sales Consultant</h5>
                        <p class="paraFont">MyZeon is one of the country's
                            largest credit cards, personal loans, and mortgage marketplaces.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="testimonial-img" />
                    </div>
                    <div class="testimonial-content">
                        <h4>A K Singh</h4>
                        <h5>Finance Consultant</h5>
                        <p class="paraFont">We work with India's top banks
                            and NBFCs to deliver the best to our customers. MyZeon is
                            India's premier fintech
                            company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ---------- -->

<!-- <section>
    <div class="container-fluid  bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="border text-center pt-4 pb-4 happy-box">
                        <i id="icon1" class="fa fa-home fa-2x" aria-hidden="true"
                            style="background-color: #1338be;"></i>
                        <h4 id="count1" class="m-0 font-weight-bolder">0</h4>
                        Completed Project
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border text-center pt-4 pb-4 happy-box">
                        <i id="icon2" class="fa fa-smile-o fa-2x" aria-hidden="true"
                            style="background-color: #1338be;"></i>
                        <h4 id="count2" class="m-0 font-weight-bolder">0</h4>
                        Happy Clients
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border text-center pt-4 pb-4 happy-box">
                        <i id="icon3" class="fa fa-cog fa-2x" aria-hidden="true" style="background-color: #1338be;"></i>
                        <h4 id="count3" class="m-0 font-weight-bolder">0</h4>
                        Multi Service
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border text-center pt-4 pb-4 happy-box">
                        <i id="icon4" class="fa fa-trophy fa-2x" aria-hidden="true"
                            style="background-color: #1338be;"></i>
                        <h4 id="count4" class="m-0 font-weight-bolder">0</h4>
                        Winning Awards
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->



 <section>
   <div class="container-fluid counter-section">
    <div class="container-fluid py-5">
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-5 justify-content-center">
            <div class=" col-lg-3"> 
                <div class="counter-item p-4">
                    <div class="counter-content bg-white p-4">
                        <i class="fa-solid fa-users-gear fa-5x text-primary mb-3" icon1></i>
                        <h5 class="text-primary" >Multi User</h5>
                        <div class="svg-img">
                            <svg width="100" height="50">
                                <polygon points="55, 10 85, 55 25, 55 25," style="fill: #ffd75673; stroke: white;
                                stroke-width: 4px;"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="counter-quantity">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up" id="count1"></span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
<div class=" col-lg-3">
                <div class="counter-item p-4">
                    <div class="counter-content bg-white p-4">
                        <i class="fa-solid fa-house-user fa-5x text-primary mb-3" icon2></i>
                        <h5 class="text-primary" i>Satisfied Customers</h5>
                        <div class="svg-img">
                            <svg width="100" height="50">
                                <polygon points="55, 10 85, 55 25, 55 25," style="fill: #ffd75673;stroke: white;
                                stroke-width: 4px;"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="counter-quantity">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up" id="count2"></span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
<div class=" col-lg-3">
                <div class="counter-item p-4">
                    <div class="counter-content bg-white p-4">
                        <i class="fas fa-users fa-5x text-primary mb-3" icon3></i>
                        <h5 class="text-primary" >Happy Clients</h5>
                        <div class="svg-img">
                            <svg width="100" height="50">
                                <polygon points="55, 10 85, 55 25, 55 25," style="fill: #ffd75673;stroke: white;
                                stroke-width: 4px;"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="counter-quantity">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up" id="count3"></span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>

<div class=" col-lg-3">
                <div class="counter-item p-4">
                    <div class="counter-content bg-white p-4">
                       
                        <i class="fa-solid fa-trophy fa-5x text-primary mb-3" icon4></i>
                        <h5 class="text-primary">Winning Awards</h5>
                        <div class="svg-img">
                            <svg width="100" height="50">
                                <polygon points="55, 10 85, 55 25, 55 25," style="fill: #ffd75673; stroke: white;
                                stroke-width: 4px;"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="counter-quantity">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up"  id="count4" ></span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</section> 



<section class=" mb-4 mt-4">
    <h4 class=" mt-2 eligible slide">OUR PARTNERS</h4>
                        <div class="bar m-auto">&nbsp;</div><br><br>
    <div class="section-title text-center mt-4">
                                                
                    </div>
        <div class="container-fluid">
            <div class="row  our-partner">
                <div class="col-md-12">
                   
                </div>
                <div class="col-md-12 mb-4 mt-4">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank1.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank2.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank3.png') }}"></div>
                        <div class="item"><img src="{{ asset('assets/front_end/asset/img/bank4.png') }}"></div>
                    </div>
                </div>
            </div>
    </section>


@endsection
