@extends('front_end_layout.home')
@push('aboutPageStyle')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <script src="https://cdn.tailwindcss.com"></script> -->

<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


{{-- owl caruslel cdn link owl.carousel.min.css and default theme min js owl.theme.default.min.css --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

{{--
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> --}}
{{--
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> --}}

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

<!-- -->
<style>
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
  font-family: 'Josefin Sans', sans-serif;
  text-align: center;
  font-size: 2.1rem; /* Adjust as needed */
  font-weight: bold;
  color: #dfaf37;

      
        /* Adjust the animation duration and timing function */
    }
</style>
<!-- for heading -->
<!-- <style>
    h3 {
  transition: transform 0.4s ease-in-out; /* Add a smooth transition for the transform property */
}

h3:hover {
  transform: translateX(20px); /* Move the element to the right on hover */
  animation: shake 1s ease-in-out; /* Add a shake animation on hover */
}

@keyframes shake {
  0%, 100% {
    transform: translateX(0); /* Initial and final state: no translation */
  }
  25%, 75% {
    transform: translateX(-5px); /* Move the element to the left during the animation */
  }
  50% {
    transform: translateX(5px); /* Move the element to the right during the animation */
  }
}

</style> -->
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
        /* font-size: 17px; */
        color: #4b5563;
        text-align: justify;
        font-size: 19px;

    }

    .paraFont1 {

        color: #4b5563;
        text-align: justify;
        /* line-height: 2.1rem; */
        /* font-size: 17px; */
        color: #4b5563;
        /* text-align: justify; */
        font-size: 20px;

    }

    .eligible {
        color: #1338be;
        font-weight: 600;
        list-style: disc;

    }
</style>

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

<script>
    $(document).ready(function () {
        // Delay the start of counters by 5 seconds
        setTimeout(function () {
            startCounters();
        }, 1500);
    });

    function startCounters() {
        incrementCounter("count1", "icon1", 950, 1000);
        incrementCounter("count2", "icon2", 850, 1000);
        incrementCounter("count3", "icon3", 550, 1000);
        incrementCounter("count4", "icon4", 750, 1000);
    }

    function incrementCounter(counterId, iconId, finalValue, duration) {
        let counterElement = $("#" + counterId);
        let iconElement = $("#" + iconId);
        let start = 0;
        let increment = finalValue / (duration / 10);

        function updateCounter() {
            start += increment;
            counterElement.text(Math.round(start));

            if (start >= finalValue) {
                counterElement.text(finalValue);
                clearInterval(interval);
            }
        }

        let interval = setInterval(updateCounter, 10);
    }
</script>

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
    <img src="http://192.168.120.228/myzeon_web/assets/images/web_img/about_usBanner1.png"  alt=" image"
    style="margin-top: 100px;" srcset="">

</div>

<!-- -------- -->
<!-- <section class="pt-5 pb-5 mt-5 bg-blue-600"> -->

<!-- <div class="container-fluid ">
    <div class="row">
        <div class="col-md-12 text-center">

            <div class="mb-3">
                <h3 class="pt-md-5 mb-2 font-family-josefin-sans text-4xl font-bold text-yellow-600">Who We Are?</h3>
                <div class="bar m-auto"></div>
            </div>

            <p class="paraFont" style="color: #4b5563; font-size: 20px;
text-align: justify;">That's impressive! It's great to hear about Myzeon.com's success as India's No. 1 Marketplace for
                Loans and Credit Cards. Your focus on making personal finance decisions easy, convenient, and
                transparent for customers is commendable.

                Your achievement in becoming the largest online platform for lending products in less than three years
                is remarkable. It's a testament to the trust and satisfaction of your customers. Additionally, being the
                only independent online player in the country to disburse loans over Rs 10,000 crore on an annualized
                basis showcases your strength in the lending industry.

                Your dedication to providing transparent and efficient financial solutions sets you apart from the
                competition. By simplifying the decision-making process and offering a wide range of loan and credit
                card options, Myzeon.com is empowering customers to make informed financial choices.

                Congratulations on your success, and keep up the good work in making personal finance more accessible
                and transparent for customers in India.</p>
        </div>
    </div>
</div> -->

<section class="jumbotron " style="margin-bottom: -85px;">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-4">
                <h3 class="slide  mb-2">
                    About Us
                </h3>
                <div class="bar m-auto"></div>
            </div>
            <div class="col-md-12">
                <!-- <h2>VISION</h2> -->
                <p class="paraFont" style="color: #4b5563; text-align: justify; font-size: 20px;  ">At
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



<section class=" jumbotron " style="margin-bottom: -85px;">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="mb-4"> -->
            <div class="">
                <h3 class="slide pt-md-5 mb-2 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">
                    Who Are We?
                </h3>
                <div class="bar m-auto"></div>
            </div>
            <div class="col-md-4">
                <img src="http://192.168.120.228/myzeon_web/assets/images/web_img/aboutsideimg1.png"
                    class="img-fluid flippable-image" style="max-width: 90%; margin-top: -112px;">
            </div>


            <div class="col-md-8">
                <!-- <h2>VISION</h2> -->
                <p class="paraFont" style="color: #4b5563; text-align: justify; font-size: 20px; margin-top: 80px; ">At
                    Our team consists of financial experts who offer tailored financial solutions to meet your needs.
                    MYZEON is India's leading financial services provider, promoting digital innovation in finance with
                    over 5 million satisfied customers. We are confident in providing facilities for personal loans,
                    business loans, car loans, and home loans. Our goal is to create personalized financial products to
                    make them affordable to everyone. We are established with a commitment to redefine the standards of
                    financial services, we take pride in being a reliable partner on your journey to financial success.
                    We have been consistently serving individuals and businesses with innovative solutions customized to
                    meet their unique financial needs.

                </p>
            </div>

        </div>
    </div>
</section>




<!-- <section class="pt-5 ">
    <div class="container-fluid">
        <div class="row">
            <div class="">
                <h3 class="slide mb-2 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">Growth
                </h3>
                <div class="bar m-auto"></div>
            </div>
            <div class="col-md-8">
                <p class="paraFont" style="color: #4b5563; text-align: justify; font-size: 20px; margin-top: 80px; ">To
                    adopt channels and methodologies for increasing Accessibility and offer products and services
                    keeping in mind the Affordability of the clients. MyZeon is India’s premier fintech company. We are
                    a pioneer financial marketplace in India. Our customer-friendly services leverage proprietary tech
                    to ensure customers discover and provide the right banking solution to their needs. MyZeon provides
                    its users with an actionable plan to make the right financial decision without thinking twice. We
                    offer a broad range of products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and
                    Savings Accounts. MyZeon is one of the country’s largest credit cards, personal loans, and mortgage
                    marketplaces. We work with India’s top banks and NBFCs to deliver the best to our customers.</p>
            </div>
            <div class="col-md-4">
                <img src="https://www.myzeon.com/wp-content/uploads/2023/09/loan2.webp" class="img-fluid flippable-image" style="max-width: 90%;margin-left: 35px;
                margin-top: -28px;">
            </div>
        </div>
    </div>

    Provide financial services that meet the needs of individuals and businesses.
Offer personal loans, business loans, and home loans at lower interest rates.
Ensure transparency and fairness in all our financial transactions.
Provide exceptional customer service and support to our valued customers.
Continuously innovate and adapt to changing market conditions to better serve our clients
Foster a culture of integrity, professionalism, and teamwork among our employees
Maximize shareholder value through sustainable and profitable growth
Educate customers to make informed decisions with our financial expert’s help.

</section> -->
<section class="jumbotron" style="margin-bottom: -120px;">
    <div class="">

        <div class="">
            <h3 class="slide mb-4 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">Features  of the Company

            </h3>
            <div class="bar m-auto"></div>
        </div>
        <ul style="margin-top: 55px; margin-bottom: 45px;">
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


<section class=" jumbotron " style="margin-bottom: -85px;">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="mb-4"> -->
            <div class="" style="margin-bottom: 48px;">
                <h3 class="slide pt-md-5 mb-2 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">
                    Mission
                </h3>
                <div class="bar m-auto"></div>
            </div>
            
            <div class="col-md-8">
                <!-- <h2>VISION</h2> -->
                <ul style="margin-top: 55px;">
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
                <img src="http://192.168.120.228/myzeon_web/assets/images/web_img/mission2.png"
                    class="img-fluid flippable-image" style="max-width: 104%; margin-top: -109px; margin-left: -108px;">
            </div>
        </div>
    </div>
</section>





<!-- <section class="jumbotron" style="margin-bottom: -85px;">
    <div class="">

        <div class="mb-4">
            <h3 class="slide mb-4 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">Mission
            </h3>
            <div class="bar m-auto"></div>
        </div>
        <ul style="margin-top: 55px;">
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
</section> -->

<section class="testimonial-section section-padding jumbotron ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <div style="margin-bottom: 60px;">
                        <h3
                            class="slide pt-md-5 mb-2 ">
                            Testimonials</h3>
                        <div class="bar m-auto"></div>
                    </div>
                    <p style="color: #4b5563; font-size: 20px; text-align: justify; margin-bottom: 20px;">MyZeon is
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
                        <h4>Anik Kumar Morya</h4>
                        <h5>CEO</h5>
                        <p style="color: #4b5563; font-size: 20px; text-align: justify;">MyZeon provides its users with
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
                        <p style="color: #4b5563; font-size: 20px; text-align: justify;">We offer a broad range of
                            products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and Savings
                            Accounts.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial-2.jpg')}}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>Amit Kumar</h4>
                        <h5>Sales Consultant</h5>
                        <p style="color: #4b5563; font-size: 20px; text-align: justify;">MyZeon is one of the country's
                            largest credit cards, personal loans, and mortgage marketplaces.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>A K Singh</h4>
                        <h5>Finance Consultant</h5>
                        <p style="color: #4b5563; font-size: 20px; text-align: justify;">We work with India's top banks
                            and NBFCs to deliver the best to our customers.</p>
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
</section>

<section class="pb-5 bg-white our-partner ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4">
                    <h3 class="slide mb-4 font-family-josefin-sans text-center text-4xl font-bold text-yellow-600">
                        Our Partners
                    </h3>
                    <div class="bar m-auto"></div>
                </div>
                <p class="pt-2 font-family-josefin-sans text-blue-600 text-1xl leading-tight text-center font-bold">
                    There's more than one reason to sign up with confidence</p>
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

{{-- animate with number --}}