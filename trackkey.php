<?php
include("auth/base_tnx.php");
define('DB','upfrontx_crow'); 
if(!isset($_SESSION['traq'])){
 header ('location:trackorder.html');

}  
$instance = new SQL_ops(DB);
?>

<!DOCTYPE html>
<!-- saved from url=(0036)trackorder.html -->
<html class=" js rgba boxshadow csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UpFront Xpress | Global Logistic Company</title>
      <meta name="keywords" content="Upfrontxpress, Upfront Xpress, Cargo Express, Upfront Express, Cargo, Shipment, Cargo Security Solutions, Shipment, Transportation, Warehousing, Ground Transport, Trucking, Logistics, Courier Services, Cargo Air, Ocean Cargo">

      <!-- Vendor CSS Files -->
 <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
 <link href="assets/vendor/aos/aos.css" rel="stylesheet">
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
 <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

      <!-- Template Main CSS File -->
 <link href="assets/css/style.css" rel="stylesheet">
 <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon" />
 <link rel="stylesheet" href="tracking.css">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/bootstrap.css" type="text/css"><!-- Bootstrap -->
    <link rel="stylesheet" href="assets/owl.carousel.css" type="text/css"><!-- Owl Carousal -->	
    <link rel="stylesheet" href="assets/icons.css" type="text/css"><!-- Font Awesome -->
    <link rel="stylesheet" href="assets/select2.min.css" type="text/css"><!-- Select2 -->
    <link rel="stylesheet" href="assets/perfect-scrollbar.css"><!-- Scroll Bar -->
    <link rel="stylesheet" href="assets/style.css" type="text/css"><!-- Style -->	
    <link rel="stylesheet" href="assets/responsive.css" type="text/css"><!-- Res
    ponsive -->		
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/color.css" type="text/css"><!-- Color -->
     <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<script type="text/javascript" charset="UTF-8" src="assets/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="assets/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="assets/AuthenticationService.Authenticate"></script>
<style>
  .text-center>button {
   background-color: rgba(38, 160, 38, 0.938);
   color: white;
   border: none;
   padding: 10px;
  }

  .text-center>button:hover {
   background-color: rgba(73, 207, 73, 0.986);
  }
 </style>
</head>
<body>
     <!-- ======= Header ======= -->
 <header id="header" class="fixed-top" style="background-color: whitesmoke;">
  <div class="container d-flex align-items-center">

   <h1 class="logo me-auto"><a href="index.html"><span>UPFRONT</span> XPRESS</a></h1>
   <!-- Uncomment below if you prefer to use an image logo -->
   <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

   <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
     <li><a href="index.html" class="active">Home</a></li>

     <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
       <li><a href="about.html">About Us</a></li>
       <li><a href="team.html">Team</a></li>
       <li><a href="testimonials.html">Testimonials</a></li>
       <li class="dropdown"><a href="#"><span>Professional Services</span> <i class="bi bi-chevron-right"></i></a>
        <ul>
         <li><a href="services.html">Home Delivery</a></li>
         <li><a href="services.html">Customs Clearance</a></li>
         <li><a href="services.html">Marine Insuarance</a></li>

        </ul>
       </li>
      </ul>
     </li>

     <li><a href="services.html">Services</a></li>
     <li><a href="trackorder.html">Track and Monitor</a></li>
     <li><a href="blog.html">Blog</a></li>
     <li><a href="contact.html">Contact</a></li>

    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
   </nav><!-- .navbar -->

   <div class="header-social-links d-flex">
    <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
    <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
    <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
   </div>

  </div>
 </header><!-- End Header -->
  <main id="main">
   

  <!--      <div class="page-top blackish overlape">
            <div class="parallax" data-velocity="-.1" style="background: url(&quot;images/parallax4.jpg&quot;) 50% 0px repeat scroll;"></div>
            <div class="container">
                <div class="page-title">
                    <h3 style="color:tomato">SHIPMENT DETAILS</h3>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top --> 

        <!--<section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <div class="map">
                            <div id="map-canvas"></div>
                        </div>--<<!-- Google Map -->
                    <!--</div>
                </div>
            </div>
        </section>--><!-- Google Map Section -->
            <?php 
              if(isset($_SESSION['traq'])){
                  $trans = $_SESSION['traq'];
              $table ="crow";
              $col ="*";
              $where ="WHERE TrackcrtFo='$trans'";
              $pull = $instance->select_fetch( $table,$col,$where); ?>

       <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="region-contact-info team-detail-info">
                                        <div class="heading2"> 
                                            <span>Fast And Safe</span>
                                            <h3><strong style="color:tomato">Shipment Cargo Number:</strong> <?php echo $pull[0] ['TrackcrtFo']; ?> </h3>
                                        </div> <br>
                                        <div class="contact-detail">
                                            <span class="contact">
                                                <strong>Cargo Description:</strong> <br>
                                                <span><?php echo $pull[0] ['shipmentDesc']; ?></span>
                                            </span> <br> <br>
                                            <span class="contact">
                                                <strong>Shipped From:</strong> <br>
                                                <span><?php echo $pull[0] ['shipFrmWh']; ?></span>
                                            </span> <br> <br>
                                            <span class="contact">
                                                <strong>Date Left Port:</strong><br>
                                                <span><?php echo $pull[0] ['dateLeftPort']; ?></span>
                                            </span> <br> <br>
                                            <span class="contact">
                                                <strong>Latest Location:</strong> <br>
                                                <span><?php echo $pull[0] ['latLocal']; ?></span>
                                               
                                            </span> <br> <br>
                                            <span class="contact">
                                                <strong>Delivery Date:</strong> <br>
                                                 <span><?php echo $pull[0] ['latestEvntdate']; ?></span>
                                            </span> <br> <br>
                                            <span class="contact">
                                                <strong>Shipment Latest Events:</strong> <br>
                                                <span><?php echo $pull[0] ['currEvet']; ?></span>
                                            </span> <br> <br>
                                            <span class="contact">
                                                <strong>Shipment Destination:</strong> <br>
                                                <span><?php echo $pull[0] ['SHiptow']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>Shipment Delivery Status:</strong> <br>
                                                <span><?php echo $pull[0] ['HvUCollet']; ?></span>
                                            </span> <br> <br>
                                                <h4 style="color:tomato"><strong>Sender's Information</strong></h4> <br>
                                            <span class="contact"> 
                                                <strong>Sender Full name:</strong> <br>
                                                <span><?php echo $pull[0] ['SndName']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>Residential Address:</strong> <br>
                                                <span><?php echo $pull[0] ['SndAdd']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>Contact Email:</strong> <br>
                                                <span><?php echo $pull[0] ['SndEmail']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>Phone Number:</strong> <br>
                                                <span><?php echo $pull[0] ['SndNum']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>State / Country :</strong> <br>
                                                <span><?php echo $pull[0] ['SndState']; ?></span>
                                            </span>  <br> <br>
                                             <h4 style="color:tomato"><strong>Receiver's Information</strong></h4> <br>
                                            <span class="contact"> 
                                                <strong>Receiver Full name:</strong> <br>
                                                <span><?php echo $pull[0] ['RecName']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>Residential Address:</strong> <br>
                                                <span><?php echo $pull[0] ['RecAdd']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>Contact Email:</strong> <br>
                                                <span><?php echo $pull[0] ['RecEmail']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>Phone Number:</strong> <br>
                                                <span><?php echo $pull[0] ['RecNum']; ?></span>
                                            </span>  <br> <br>
                                            <span class="contact">
                                                <strong>State / Country :</strong> <br>
                                                <span><?php echo $pull[0] ['RecState']; ?></span>
                                            </span>  
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	

            <?php  } ?>
           <!-- ======= Footer ======= -->
 <footer id="footer">
 
  <div class="footer-top">
   <div class="container">
    <div class="row">
 
     <div class="col-lg-3 col-md-6 footer-contact">
      <h3>UpFront Xpress </h3>
      <p>
       Dnata City Unit 1 <br>
       Stanwell, Staines TW19 7LN, <br> United Kingdom
       <br><br>
       <strong>Phone:</strong> +44 7451 2810 02<br>
       <strong>Email:</strong> admin@upfrontxpress.com<br>
       <strong>Email:</strong> support@upfrontxpress.com<br>
      </p>
     </div>
 
     <div class="col-lg-2 col-md-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
       <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact us</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="trackorder.html">Shipment tracking</a></li>
      </ul>
     </div>
 
     <div class="col-lg-3 col-md-6 footer-links">
      <h4>Our Services</h4>
      <ul>
       <li><i class="bx bx-chevron-right"></i> <a href="services.html">Inland transport</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="services.html">Ocean freight</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="services.html">Air freight</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="services.html">Customs clearance</a></li>
       <li><i class="bx bx-chevron-right"></i> <a href="services.html">Logistic services</a></li>
      </ul>
     </div>
 
     <div class="col-lg-4 col-md-6 footer-newsletter">
      <h4>Join Our Newsletter</h4>
      <p>Subscribe to our newsletter to receive all our latest updates and promotions.</p>
      <form action="newsletter.php" method="POST">
       <input type="email" name="email" required>
       <input type="submit" name="submit" value="Subscribe">
      </form>
     </div>
 
    </div>
   </div>
  </div>
 
  <div class="container d-md-flex py-4">
 
   <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
     &copy; Copyright <strong><span>UpFront Xpress Logistic</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     <!-- All the links in the footer should remain intact. -->
     <!-- You can delete the links only if you purchased the pro version. -->
     <!-- Licensing information: https://bootstrapmade.com/license/ -->
     <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
     Designed by <a href="index.html">UpFrontXpressICT</a>
    </div>
   </div>
   <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
   </div>
  </div>
 </footer><!-- End Footer -->
 
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
   class="bi bi-arrow-up-short"></i></a>
 
 <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
 
 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
  


    <!-- Script -->
    <script type="text/javascript" src="assets/modernizr-2.0.6.js.download"></script><!-- Modernizr -->
    <script type="text/javascript" src="assets/jquery-2.2.2.js.download"></script><!-- jQuery -->
    <script type="text/javascript" src="assets/bootstrap.min.js.download"></script><!-- Bootstrap -->
    <script type="text/javascript" src="assets/scrolltopcontrol.js.download"></script><!-- Scroll To Top -->
    <script type="text/javascript" src="assets/jquery.scrolly.js.download"></script><!-- Scrolly -->
    <script type="text/javascript" src="assets/owl.carousel.min.js.download"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="assets/icheck.js.download"></script><!-- iCheck -->
    <!--<script type="text/javascript" src="js/jquery.jigowatt.js"></script>--><!-- Contact Us -->
    <script type="text/javascript" src="assets/select2.full.js.download"></script><!-- Select2 -->
    <script src="assets/js"></script><!-- Google Map -->
    <script type="text/javascript" src="assets/perfect-scrollbar.js.download"></script><!-- Scroll Bar -->
    <script type="text/javascript" src="assets/perfect-scrollbar.jquery.js.download"></script><!-- Scroll Bar -->
    <script src="assets/api.js.download"></script>
    <script src="assets/script.js.download"></script>
    <script>
    $(document).ready(function () {
        "use strict";

            //** Map **//
            function initialize() {
                var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
                var mapOptions = {
                    zoom: 14,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    center: myLatlng
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var image = 'images/icon.html';
                var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image
                });

            }
            google.maps.event.addDomListener(window, 'load', initialize);

        });

    </script>




<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"><img src="assets/up.png" style="width:48px; height:48px"></div></body></html>