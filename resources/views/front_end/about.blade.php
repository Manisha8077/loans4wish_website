@extends('front_end_layout.home')
@section('content') 
<section class="inner-banner pt-5 pb-5 mt-5 new">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="pt-md-5 mb-2"> Us</h3>
                <div class="bar m-auto"></div>
            </div>
        </div>
    </div>
</section>


<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
                <img  src="https://renex-react.envytheme.com/images/about/about-2.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>MISSION</h2>
                <p>To Nurture and Transform the missing-middle businesses by sustainably providing suitable financial solutions through the efficient use of capital, technology, and human resources.</p>
                
            </div>
          
            </div>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h2>VISION</h2>
                <p>To adopt channels and methodologies for increasing Accessibility and offer products and services keeping in mind the Affordability of the clients.</p>

            </div>
            <div class="col-md-6">
                <img  src="https://renex-react.envytheme.com/images/about/about-2.jpg" class="img-fluid">
            </div>
            </div>
    </div>
</section>


<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                                <p>MyZeon is India's premier fintech company. We are a pioneer financial marketplace in India. Our customer-friendly services leverage proprietary tech to ensure customers discover and provide the right banking solution to their needs.
MyZeon provides its users with an actionable plan to make the right financial decision without thinking twice.
We offer a broad range of products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and Savings Accounts.
MyZeon is one of the country's largest credit cards, personal loans, and mortgage marketplaces.
We work with India's top banks and NBFCs to deliver the best to our customers.
</p>            
            </div>

        </div>
    </div>
</section>


<section class="testimonial-section section-padding pt-5 pb-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>MyZeon is India's premier fintech company. We are a pioneer financial marketplace in India. Our customer-friendly services leverage proprietary tech to ensure customers discover and provide the right banking solution to their needs.</p>
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
                        <p>MyZeon provides its users with an actionable plan to make the right financial decision without thinking twice.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial-1.jpg')}}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>Radhey Morya </h4>
                        <h5>IT Manager</h5>
                        <p>We offer a broad range of products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and Savings Accounts.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial-2.jpg')}}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>Amit Kumar</h4>
                        <h5>Sales Consultant</h5>
                        <p>MyZeon is one of the country's largest credit cards, personal loans, and mortgage marketplaces.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{asset('assets/front_end/asset/img/testimonial.jpg')}}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>A K Singh</h4>
                        <h5>Finance Consultant</h5>
                        <p>We work with India's top banks and NBFCs to deliver the best to our customers.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="border text-center pt-4 pb-4 happy-box">
                    <i id="icon1" class="fa fa-home fa-2x"></i>
                    <h4 id="count1" class="m-0 font-weight-bolder">0</h4>
                    Completed Project
                </div>
            </div>
            <div class="col-md-3">
                <div class="border text-center pt-4 pb-4 happy-box">
                    <i id="icon2" class="fa fa-smile-o fa-2x" aria-hidden="true"></i>
                    <h4 id="count2" class="m-0 font-weight-bolder">0</h4>
                    Happy Clients
                </div>
            </div>
            <div class="col-md-3">
                <div class="border text-center pt-4 pb-4 happy-box">
                    <i id="icon3" class="fa fa-cog fa-2x" aria-hidden="true"></i>
                    <h4 id="count3" class="m-0 font-weight-bolder">0</h4>
                    Multi Service
                </div>
            </div>
            <div class="col-md-3">
                <div class="border text-center pt-4 pb-4 happy-box">
                    <i id="icon4" class="fa fa-trophy fa-2x" aria-hidden="true"></i>
                    <h4 id="count4" class="m-0 font-weight-bolder">0</h4>
                    Winning Awards
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5 bg-light our-partner">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="mb-2">Our partners</h2>
                        <p class="">There's more than one reason to sign up with confidence</p>
                    </div>
                </div>
                <div class="col-md-12">
                <div class="owl-carousel owl-theme">
    
                <div class="item"><img src="{{asset('assets/front_end/asset/img/bank.png')}}"></div>
                <div class="item"><img src="{{asset('assets/front_end/asset/img/bank1.png')}}"></div>
                <div class="item"><img src="{{asset('assets/front_end/asset/img/bank2.png')}}"></div>
                <div class="item"><img src="{{asset('assets/front_end/asset/img/bank3.png')}}"></div>
                <div class="item"><img src="{{asset('assets/front_end/asset/img/bank4.png')}}"></div>
                
</div>
                </div>
            </div>
    </div>
</section>
@endsection
