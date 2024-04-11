<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="{{ asset('assets/front_end/asset/img/favicon.png') }}" type="image/gif" />
  <meta name="description" content="myzeon, Credit myzeon." />
  <meta name="keywords" content="Home Loan, Loan Product, Personal Loan" />
  <title>
    <?php echo !empty($pageTitle) ? $pageTitle : 'Myzeon'; ?>
  </title>
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="{{asset('assets/assets/assets/front_end/asset/css/mainab59.css')}}" type="text/css" media="all"> -->
  <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/commoncalculatorab59.css') }}" type=text/css
    media="all">


  <link rel="stylesheet" href="{{ asset('assets/front_end/asset/css/emicalculatorab59.css') }}" type="text/css"
    media="all" />


  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/reset.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/jquery-ui.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/style.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front_end/asset/css/responsive.css') }}" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <style>
    #showpanel {
      /* background-color: #ffd756; */
    }

    .flex-container {
      display: flex;
      justify-content: space-between;
      /* Equal space between items */
      margin-top: 80px;
    }


    .flex-item {
      flex: 1;
      /* Flex items take equal space */
      padding: 10px;
      /* Add padding or adjust as needed */
      /* border: 1px solid #ccc; Add borders or styling as needed */
    }

    .flex-item li a {
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

    select.form-control.select_multi~.btn-group {
      display: block;
    }

    select.form-control.select_multi~.btn-group>button.multiselect {
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

    select.form-control.select_multi~.btn-group>button.multiselect>span.multiselect-selected-text {
      font-size: 13px;
    }

    ul.multiselect-container.dropdown-menu.show {
      right: 0px;
    }
  </style>

  <style>
    .footer-element ul li a {
      color: #ffffff;
      font-size: 15px;
      font-weight: bold;
      text-decoration: none;
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
      margin-left: 10px;
    }

    .footer-main-heading {
      margin-left: 13px;
    }

    .footer-about-us {
      color: #ffffff;
      font-weight: bold;
    }

    .yellow-button {
      display: inline-block;
      background-color: #ebc42a;
      color: black;
      /* You can change the text color to your preference */
      text-decoration: none;
      /* Remove the default underline on links */
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

    .yellow-button:hover {
      background-color: #373d42;
      /* Change the color when hovering */
    }
  </style>
</head>

<body class="js">
  <div id="preloader"></div>

  <!-- start logo menu area -->
  <header class="second-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xl-3">
          <div class="second-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/front_end/asset/img/logo.png') }}" alt="" /></a>
          </div>
        </div>
        <div class="col-md-8 col-lg-8 text-right col-xl-7">
          <div id="cssmenu">
            <ul>
              <li>
                <a href="#" id="showAllloans">All Loans</a>
                <ul>
                  <li>
                    <a href="{{ route('personal-loan') }}">Personal Loan</a>
                  </li>
                  <li>
                    <a href="{{ route('business-loan') }}">Business Loan</a>
                  </li>
                  <li><a href="{{ route('home-loan') }}">Home Loan</a></li>
                  <li><a href="{{ route('car-loan') }}">Car Loan</a></li>
                  <li>
                    <a href="{{ route('loan-against-property') }}">Loan Against Property</a>
                  </li>

                  <!-- <li> <a href="#">Loan Against Property</a></li> -->
                </ul>
              </li>
              <li>
                <a href="#">Cards</a>
                <ul>
                  <li>
                    <a href="{{ route('credit-cards') }}">Credit Card</a>
                  </li>
                  <li><a href="{{ route('debit-cards') }}">Debit Card</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Investments</a>
                <ul>
                  <li>
                    <a href="{{ route('mutual-funds') }}">Mutual Funds</a>
                  </li>
                  <li>
                    <a href="{{ route('fixed-deposit') }}">fixed deposit</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Financial Tools</a>
                <ul>
                  <li>
                    <a href="#"> Calculator</a>
                    <ul>
                      <li>
                        <a href="{{ route('cal-personal-loan') }}">Personal Loan</a>
                      </li>
                      <li>
                        <a href="{{ route('cal-business-loan') }}">Business Loan</a>
                      </li>
                      <li>
                        <a href="{{ route('cal-home-loan') }}">Home Loan</a>
                      </li>
                      <li>
                        <a href="{{ route('cal-car-loan') }}">Car Loan</a>
                      </li>
                      <!--  <li> <a href="{{ route('sip-calculator')}}">SIP Calculator</a></li> -->
                      <li>
                        <a href="{{ route('gst-calculator') }}">GST Calculator</a>
                      </li>
                      <li>
                        <a href="{{ route('fd-calculator') }}">FD Calculator</a>
                      </li>
                      <li>
                        <a href="{{ route('ppf-deposit') }}">PPF Calculator</a>
                      </li>
                      <!-- <li> <a href="{{ route('mutual-fund-calculator')}}">Mutual Fund Calculator</a></li> -->
                    </ul>
                  </li>
                  <li><a href="#"> IFSC Code</a></li>
                </ul>
              </li>
              <li></li>
              <li>
                <a class="yellow-button" href="{{ route('check-cibil-score') }}">CIBIL Score</a>
              </li>
              <li></li>
              <li>
                <a class="yellow-button" href="{{ route('check-cibil-score') }}">APPLY NOW</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-lg-12 col-xl-2">
                    <div class="menu-info thir-btn">
                        <a href="https://www.myzeon.com/contact" class="btn btn-primary btn-sm">Contact Now</a>
                    </div>
                    
                </div> -->
      </div>
    </div>
  </header>
  <div id="showpanel">
    <ul>
      <li>
        <div class="flex-container">
          <div class="flex-item">
            <ul>
              <li>Personal Loan</li>
              <li>Business Loan</li>
              <li>Home Loan</li>
              <li>Car Loan</li>
              <li>Loan Against Property</li>
            </ul>
          </div>

          <div class="flex-item">
            <p>CARDS</p>
            <ul>
              <li><a href="#">CREDIT CARD</a></li>
              <li><a href="#">DEBIT CARD</a></li>
            </ul>
          </div>

          <div class="flex-item">
            <p>INVESTMENTS</p>
            <ul>
              <li><a href="#">MUTUAL FUNDS</a></li>
              <li><a href="#">FIXED DEPOSIT</a></li>
            </ul>
          </div>

          <div class="flex-item">
            <p class="Finance"><a href="#">FINANCIAL TOOLS</a></p>
            <ul>
              <li class="financelist">
                <span class="submenu-button"></span> <a href="#">Calculator</a>
                <ul>
                  <li><a href="http://192.168.120.228/myzeon_web/index.php/cal-personal-loan">Personal Loan</a></li>
                  <li><a href="http://192.168.120.228/myzeon_web/index.php/cal-business-loan">Business Loan</a></li>
                  <li><a href="http://192.168.120.228/myzeon_web/index.php/cal-home-loan">Home Loan</a></li>
                  <li><a href="http://192.168.120.228/myzeon_web/index.php/cal-car-loan">Car Loan</a></li>
                  <li><a href="http://192.168.120.228/myzeon_web/index.php/gst-calculator">GST Calculator</a></li>
                  <li><a href="http://192.168.120.228/myzeon_web/index.php/fd-calculator">FD Calculator</a></li>
                  <li><a href="http://192.168.120.228/myzeon_web/index.php/ppf-deposit">PPF Calculator</a></li>
                </ul>
              </li>
              <li><a href="#">IFSC Code</a></li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>


  <!------------------------------------------------------------------------------------->
  @yield('content')
  <!------------------------------------------------------------------------------------->

  <!-- ----------------------------------------------------------------Footer Start---------------------------------------------------------------------------------------- -->
  <!-- start footer area -->
  <section class="footer-area footer-two footer-three section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4">
          <div class="footer-widget">
            <div class="footer-title">
              <h4 class="footer-main-heading">About Us</h4>
            </div>
            <p style="color: #ffffff">
              Over 24 years experience and knowledge
              <strong>MYZEON</strong> wе’rе hеrе to рrоvіdе уоu wіth fіnаncіаl
              ѕоlutіоnѕ fоr аll уоur lеndіng needs. Whether you are lооkіng
              fоr any kind of loan, оur lending tеаm wіll explain lеndіng
              орtіоnѕ.
            </p>
            <!-- <div class="footer-two-social">
                           <a href="#" class="fa fa-facebook-f"></a>
                           <a href="#" class="fa fa-twitter"></a>
                           <a href="#" class="fa fa-linkedin"></a>
                           <a href="#" class="fa fa-google-plus"></a>
                           <a href="#" class="fa fa-pinterest"></a>
                           <a href="#" class="fa fa-instagram"></a>
                       </div> -->
          </div>
        </div>
        <div class="col-md-3 col-lg-2">
          <div class="footer-element">
            <div class="footer-title">
              <h4 class="footer-main-heading">Quick Link</h4>
            </div>
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About Us </a></li>
              <li>
                <a href="{{ route('why-choose-us') }}">Why Choose Us </a>
              </li>
              <li><a href="{{ route('contact') }}">Contact us </a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-lg-3">
          <div class="footer-element">
            <div class="footer-title">
              <h4 class="footer-main-heading">Services</h4>
            </div>
            <ul>
              <li>
                <a href="{{ route('personal-loan') }}">Personal Loan</a>
              </li>
              <li>
                <a href="{{ route('business-loan') }}">Business Loan</a>
              </li>
              <li><a href="{{ route('home-loan') }}">Home Loan </a></li>
              <li><a href="{{ route('car-loan') }}">Car Loan</a></li>
              <li>
                <a href="{{ route('loan-against-property') }}">Loan Against Property
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-element">
            <div class="footer-title">
              <h4 class="footer-main-heading">Contact us</h4>
            </div>
            <div class="contact-us-footer">
              <ul>
                <li>
                  <div class="footer-element-down">
                    <i class="bi bi-geo-alt-fill float-left"></i>
                    <a href="https://goo.gl/maps/sR25qkXZMv1ErHNMA" class="footer-anchor-tag">A-47, Sector-2 Noida, Uttar Pradesh-201301</a>
                  </div>
                </li>
                <li>
                  <div class="footer-element-down">
                    <i class="bi bi-envelope float-left"></i>
                    <a href="mailto:info@myzeon.com" class="footer-anchor-tag">info@myzeon.com <span>reply within 2
                        Hours</span></a>
                  </div>
                </li>
                <li>
                  <div class="footer-element-down">
                    <i class="bi bi-telephone float-left"></i>
                    <a href="tel:0120-4198166" class="footer-anchor-tag">0120-4198166
                      <span>Call Anytime</span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
              <a href="{{ route('term-and-conditions') }}">Term & Conditions</a>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

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
      $("#showAllloans").on("click", function () {
        $("#showpanel").toggle();

      });

    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>