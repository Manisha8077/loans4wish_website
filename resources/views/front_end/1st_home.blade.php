
<!DOCTYPE html>

<html lang="en">

<head>

<!-- Required meta tags -->

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

@stack('personalLoanStyle')
<!-- Add this in the <head> section -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>




<!-- Add these at the end of the <body> section -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />


<link

rel="icon"

href="{{ asset('assets/front_end/asset/img/favicon.png') }}"

type="image/gif"

/>

<meta name="description" content="myzeon, Credit myzeon." />
<meta name="viewport" content="width=device-width, initial-scale=1">


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
  .error {
      border-color: red !important;
  }

  .error_name {
      color: red;
      margin-left: 10px;
  }


  .spinner-overlay {
      display: flex;
      align-items: center;
  }

  .loader-container {
      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      /* Add a semi-transparent overlay */
      z-index: 9999;
      /* Ensure the loader appears above other content */
  }

  .spinner {
      display: inline-block;
      text-align: center;
  }

  .spinner-border {
      width: 3rem;
      height: 3rem;
      border: 0.25rem solid currentColor;
      border-right-color: transparent;
      border-radius: 50%;
      animation: spinner-border 0.75s linear infinite;
  }

  @keyframes spinner-border {
      to {
          transform: rotate(360deg);
      }
  }

  .loader-text {
      margin-top: 0.5rem;
      color: #333;
      font-size: 1rem;
  }
</style>


<style>
  .color{
    color: white;
  }
  .img-fluid1{
    margin-top: 88px;
  }
  .font-medium{
    font-weight:bold ;

  }

    /* CSS for the hover effect */
    ul.nav-links li a {
        text-decoration: none;
        color: white;
        transition: color 0.3s;
    }

    ul.nav-links li a:hover {
        color: #ebc42a;
        
    }
  #slider {
  position: relative;
  z-index: 1; 
}


#showpanel {
  position: absolute;
  top: 22px; 
  left: 23%;
  z-index: 2; 
  position: fixed;
  z-index: 2;
  /* width: 97vw; */
  width: 60%;
  /* height: 65%; */
  height: 45%; 
  box-shadow: 0px 10px 36px 17px #1338BE;
}

.second-header {
            background-color: #1338BE;
            height: 80px;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        /* Animation for the header */
        .second-header.animated {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Responsive styles using media queries */
        @media (max-width: 768px) {
            .second-header {
                padding: 0 10px;
            }
        }

        @media (max-width: 576px) {
            .second-header {
                padding: 0 5px;
            }
        }
  /* Add hover animation for links in the header */
  .second-header a {
            transition: transform 0.3s ease-in-out;
        }

        .second-header a:hover {
            transform: scale(1.1);
        }
  /* footer */
  .copy-right-section.second-copyright {
background-color: #1338BE;
  }
  /* footer */
  .footer-area {
    padding: 20px; /* Add padding to the footer area */
  }

  .footer-widget, .footer-element {
    margin: 10px; /* Add margin between widget/element */
    padding: 10px; /* Add padding within widget/element */
     /* Background color for clarity */
  }

  .footer-social-icons {
    display: flex;
    justify-content: center; /* Center the social icons horizontally */
    margin-top: 20px; /* Add margin at the top of the social icons */
 
    text-align: center; /* Center-align the social icons */
  }

  .social-icon {
    margin: 10px; /* Add margin between social icons */
  }
</style>


<style>
      .footer-social-icons {
    display: flex;
  }

  .social-icon {
    margin: 10px;
    transition: transform 0.3s;
  }

  .social-icon:hover {
    transform: scale(1.2); /* Increase size on hover */
    color: #ebc42a;
    color: #1338BE;
     /* Add an underline on hover */
    
  }
  

    /* .footer-social-icons {
  display: flex;
} */
.social-icon:hover i {
  transform: scale(1.2); /* Increase the size on hover */
}
/* Add hover animation to the icons */
.social-icon i {
  transition: transform 0.2s;
  display: inline-block;
}

.social-icon {
  font-size: 34px;
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
white-space: nowrap;

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


<header class="second-header animated sticky">
  <div class="container">
      <div class="row" style="margin-top: 19px;">
          <div class="col-md-4 col-lg-4 col-xl-3">
              <div class="second-logo">
                  <a href="http://192.168.120.228/myzeon_web/index.php">
                      <img src="http://192.168.120.228/myzeon_web/assets/front_end/asset/img/logo.png" alt="">
                  </a>
              </div>
          </div>
          <div class="col-md-8 col-lg-8 col-xl-6">
              <div>
                  <ul class="nav-links d-flex justify-content-center justify-content-md-start list-unstyled fs-5">
                      <li style="margin: 15px;"><a href="#showpanel" id="showAllloans"><b>ALL SERVICES</b></a></li>
                      <li style="margin: 15px;"><a href="http://192.168.120.228/myzeon_web/index.php/contact"><b>CONTACT US</b></a></li>
                      <li style="margin: 15px;"><a href="http://192.168.120.228/myzeon_web/index.php/about"><b>ABOUT US</b></a></li>
                  </ul>
              </div>
          </div>
          <div style="margin-left: 100%; margin-top: -76px;"><div class="col-md-12 col-lg-12 col-xl-3 text-center text-md-right">
              <div id="cssmenu" style="position: absolute; top: 0; right: 0;">
                  <div id="menu-button"> </div>
                  <ul class="d-flex justify-content-between justify-content-md-end align-items-center">
                      <li>
                          <button class="y-button animated-button" onclick="location.href='http://192.168.120.228/myzeon_web/index.php/check-cibil-score'">CIBIL SCORE</button>
                      </li>
                      <li>
                        
                          <button  type="button" class="y-button animated-button" data-toggle="modal" data-target="#exampleModal" >APPLY NOW</button>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>
  </div>
 <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal start -->
<div>
<div class="modal fade" id="exampleModal" tabindex="-1"  style="margin: auto; height: 105%; padding-right: 15px;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel" style="text-align: center;">LOAN APPLY NOW</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="my-form">
          <div class="form-group">
              <label for="full_name">Enter Full Name</label><span id="er