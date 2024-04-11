@extends('front_end_layout.personal_loan_header')
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
    <section class="pt-5 pb-5 mt-5 bg-blue-600">

        <div class="container ">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="pt-md-5 mb-2 font-family-josefin-sans text-5xl font-bold text-yellow-500">About Us</h3>
                    <div class="bar m-auto my-4"></div>
                </div>
            </div>
        </div>


    </section>


    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://renex-react.envytheme.com/images/about/about-2.jpg" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto">
                    <h2 class="text-yellow-500 text-5xl  leading-tight text-center font-bold">MISSION</h2>
                    <div class="bar m-auto my-4"></div>

                    {{-- <p>To Nurture and Transform the missing-middle businesses by sustainably providing suitable financial solutions through the efficient use of capital, technology, and human resources.</p> --}}
                    <p class="text-center text-3xl font-bold font-serif text-blue-600">To Nurture and Transform the
                        missing-middle businesses by sustainably providing suitable financial solutions through the
                        efficient use of capital, technology, and human resources.</p>


                </div>

            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 my-auto">

                    <h2 class="text-yellow-500 text-5xl  leading-tight text-center font-bold">VISION</h2>
                    <div class="bar m-auto my-4"></div>

                    <p class="text-center text-2xl font-bold font-serif text-blue-600 justify-left">

                        To adopt channels and methodologies for increasing Accessibility and offer products and services
                        keeping in mind the Affordability of the clients. Myzeon is India’s premier fintech company. We are
                        a pioneer financial marketplace in India. Our customer-friendly services leverage proprietary tech
                        to ensure customers discover and provide the right banking solution to their needs. Myzeon provides
                        its users with an actionable plan to make the right financial decision without thinking twice. We
                        offer a broad range of products, such as Personal Loans, Home Loans, Credit Cards, Debit Cards, and
                        Savings Accounts. MyZeon is one of the country’s largest credit cards, personal loans, and mortgage
                        marketplaces. We work with India’s top banks and NBFCs to deliver the best to our customers.
                    </p>

                </div>
                <div class="col-md-6">
                    <img src="https://renex-react.envytheme.com/images/about/about-2.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>



    <section>

        <div class="text-center">
            <h5 class="text-blue-500 font-bold text-2xl">TEAM MEMBER</h5>
            <h3 class="text-yellow-500 font-bold text-5xl">Our Expert Team</h3>
        </div>

        <div class="bar mx-auto"></div>




        <div class="owl-carousel">

            <div>
                <div class="card" style="width: 27rem;">

                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://renex-react.envytheme.com/images/team/team-6.jpg" class=" mb-4"
                            alt="Card image cap">
                        <h5 class="text-xl font-bold mb-2">Mother Mohan 1</h5>
                        <p class="text-gray-700 text-base" style="overflow-wrap: break-word;">Some quick example text to
                            build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded ">Contact With Me</a>
                    </div>

                </div>

            </div>
            <div>
                <div class="card" style="width: 27rem ;">

                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://renex-react.envytheme.com/images/team/team-2.jpg" class="rounded-lg mb-4"
                            alt="Card image cap">
                        <h5 class="text-xl font-bold mb-2">Mother Mohan 2</h5>
                        <p class="text-gray-700 text-base">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Contact With Me</a>
                    </div>

                </div>
            </div>

            <div>

                <div class="card" style="width: 27rem ;">

                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://renex-react.envytheme.com/images/team/team-3.jpg" class="rounded-lg mb-4"
                            alt="Card image cap">
                        <h5 class="text-xl font-bold mb-2">Mother Mohan 3</h5>
                        <p class="text-gray-700 text-base">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Contact With Me</a>
                    </div>

                </div>

            </div>
            <div>


                <div class="card" style="width: 27rem ;">

                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://renex-react.envytheme.com/images/team/team-2.jpg" class="rounded-lg mb-4"
                            alt="Card image cap">
                        <h5 class="text-xl font-bold mb-2">Mother Mohan 4</h5>
                        <p class="text-gray-700 text-base">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Contact With Me</a>
                    </div>
                </div>

            </div>
            <div>
                <div class="card" style="width: 27rem ;">

                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://renex-react.envytheme.com/images/team/team-3.jpg" class="rounded-lg mb-4"
                            alt="Card image cap">
                        <h5 class="text-xl font-bold mb-2">Mother Mohan 5</h5>
                        <p class="text-gray-700 text-base">Some quick example text to build on the card title and make up
                            the
                            bulk of the card's content.</p>
                        <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Contact With Me</a>
                    </div>

                </div>
            </div>
            <div class="card" style="width: 27rem ;">
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <img src="https://renex-react.envytheme.com/images/team/team-2.jpg" class="rounded-lg mb-4"
                        alt="Card image cap">
                    <h5 class="text-xl font-bold mb-2">Mother Mohan 6</h5>
                    <p class="text-gray-700 text-base">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                    <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Contact With Me</a>
                </div>

            </div>
        </div>

    </section>



    <section class="bg-white">


        <div class="text-blue-600  px-4">
            <h2 class="text-center leading-tight font-family-josefin-sans text-5xl font-bold text-yellow-500">Testimonials
            </h2>
            <div class="bar mx-auto"></div>
            <p class="text-center text-xl font-medium text-gray-700 ">Myzeon is India's premier fintech company. We are a
                pioneer financial marketplace in India. Our customer-friendly services leverage proprietary tech to ensure
                customers discover and provide the right banking solution to their needs.</p>
        </div>


        <div class="owl-carousel">

            <div>
                <div>
                    <img src="https://renex-react.envytheme.com/images/team/team-9.jpg" alt="" />
                </div>
                <div cl class="text-center"ass="text-center">
                    <h4>Anik Kumar Morya</h4>
                    <h5>CEO</h5>
                    <p>Myzeon provides its users with an actionable plan to make the right financial decision
                        without thinking twice.</p>
                </div>
            </div>
            <div>

                <div>
                    <img src="https://renex-react.envytheme.com/images/team/team-9.jpg" alt="" />
                </div>
                <div class="text-center">
                    <h4>Anik Kumar Morya</h4>
                    <h5>CEO</h5>
                    <p>Myzeon provides its users with an actionable plan to make the right financial decision
                        without thinking twice.</p>
                </div>


            </div>
            <div>
                <div>
                    <img src="https://renex-react.envytheme.com/images/team/team-9.jpg" alt="" />
                </div>
                <div class="text-center">
                    <h4>Anik Kumar Morya</h4>
                    <h5>CEO</h5>
                    <p>Myzeon provides its users with an actionable plan to make the right financial decision
                        without thinking twice.</p>
                </div>

            </div>
            <div>

                <div>
                    <img src="https://renex-react.envytheme.com/images/team/team-9.jpg" alt="" />
                </div>
                <div class="text-center">
                    <h4>Anik Kumar Morya</h4>
                    <h5>CEO</h5>
                    <p>Myzeon provides its users with an actionable plan to make the right financial decision
                        without thinking twice.</p>
                </div>

            </div>
            <div>
                <div>
                    <img src="https://renex-react.envytheme.com/images/team/team-9.jpg" alt="" />
                </div>
                <div class="text-center">
                    <h4>Anik Kumar Morya</h4>
                    <h5>CEO</h5>
                    <p>Myzeon provides its users with an actionable plan to make the right financial decision
                        without thinking twice.</p>
                </div>

            </div>
            <div>

                <div>
                    <img src="https://renex-react.envytheme.com/images/team/team-9.jpg" alt="" />
                </div>
                <div class="text-center">
                    <h4>Anik Kumar Morya</h4>
                    <h5>CEO</h5>
                    <p>Myzeon provides its users with an actionable plan to make the right financial decision
                        without thinking twice.</p>
                </div>


            </div>
            <div>
                <div>
                    <img src="https://renex-react.envytheme.com/images/team/team-9.jpg" alt="" />
                </div>
                <div class="text-center">
                    <h4>Anik Kumar Morya</h4>
                    <h5>CEO</h5>
                    <p>Myzeon provides its users with an actionable plan to make the right financial decision
                        without thinking twice.</p>
                </div>


            </div>
        </div>

    </section>


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
