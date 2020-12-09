<?php
include "inc/config.php";
$tl="MaxClean Laundry | Offers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$tl?></title>
    <link href="images/logo/logo.png" rel="icon" type="image/png">
   <link href="images/logo/logo.png" rel="apple-touch-icon" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$mc?>" />
    <meta name="keywords" content="<?=$mc?>" />
    <meta name="author" content="MaxClean Laundry" />
<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>

<script>
function disableRightClick(e)

{

  var message = "Right click disabled";

  

  if(!document.rightClickDisabled) // initialize

  {

    if(document.layers) 

    {

      document.captureEvents(Event.MOUSEDOWN);

      document.onmousedown = disableRightClick;

    }

    else document.oncontextmenu = disableRightClick;

    return document.rightClickDisabled = true;

  }

  if(document.layers || (document.getElementById && !document.all))

  {

    if (e.which==2||e.which==3)

    {

      alert(message);

      return false;

    }

  }

  else

  {

    alert(message);

    return false;

  }

}

disableRightClick();


</script>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

    


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->
    

    <!-- color switcher style -->
    <div class="switcher">
        <div class="switch_btn">
            <button><i class="fa fa-cog fa-spin"></i></button>
        </div>
        <div class="switch_menu">
            <h4 class="title">Style Switcher</h4>
                <div class="switcher_container">
                    <h5>Choose Your Color</h5>
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-1" class="color2"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-3" class="color3"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-4" class="color4"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-5" class="color5"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-6" class="color6"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-7" class="color7"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-8" class="color8"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-9" class="color9"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-10" class="color10"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-11" class="color11"></a>
                        </li>
                    </ul>
                    <div class="text">You can easily change and switch the colors.</div>
                </div>
        </div>
    </div>
    <!-- color stitcher style end -->


    <!-- menu-area -->
    <header class="main-header">


        <!-- header middle -->
        <div class="header-top">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"></a>
                </div>
                <div class="header-info">
                    <div class="single-info">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="text">maxclean@gmail.com</div>
                    </div>
                    <div class="single-info">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="text">Wants a launder? <br />+234 902 981 0729</div>
                    </div>
                    <div class="top-btn"><a href="#">Shedule Pick-Up</a></div>
                </div>
            </div>
        </div><!-- header middle end -->


        <!-- main-menu-area -->
        <div class="theme_menu stricky">
            <div class="container">
                <div class="menu-area">
                    <nav class="main-menu">
                        <div class="navbar-header">     
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="current dropdown"><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="offers.html">Offers</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul class="submenu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="price.html">Pricing</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-left.html">Blog Left Column</a></li>
                                        <li><a href="blog-right.html">Blog Right Column</a></li>
                                        <li><a href="blog-details.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>


                            <!-- mobile menu -->
                            <ul class="mobile-menu clearfix">
                                <li class="current"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="offers.html">Offers</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="price.html">Pricing</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-left.html">Blog Left Column</a></li>
                                        <li><a href="blog-right.html">Blog Right Column</a></li>
                                        <li><a href="blog-details.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="search-box-area">
                        <div class="search-toggle"><i class="fa fa-search"></i></div>
                        <div class="search-box">
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div><!-- end main-menu -->
    </header>
    <!-- end menu-area -->


    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>offer</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- offer-section -->
    <section class="offer-section centred">
        <div class="container">
            <div class="three-column-carousel owl-nav-none">
                <div class="offer-content offer-content-one">
                    <h4>Download our mobile app and register to get</h4>
                    <div class="text">20% OFF</div>
                    <div class="offer-btn"><a href="#">Code : f4fr4r</a></div>
                    <ul class="icon-list in-block">
                        <li><a href="#"><img src="images/home/apps3.png" alt=""></a></li>
                        <li><a href="#"><img src="images/home/apps4.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="offer-content offer-content-two">
                    <h4>Avail prepaid dry cleaning order only package worth</h4>
                    <div class="text">$200 By paying</div>
                    <div class="text">$100 Only</div>
                    <div class="offer-btn"><a href="#">Code : ft34g</a></div>
                </div>
                <div class="offer-content offer-content-three">
                    <h4>Household items order of $400 and avobe can avail a discount of 30%</h4>
                    <div class="offer-btn"><a href="#">Code : ft34g</a></div>
                    <div class="icon-box">
                        <i class="flaticon-basket"></i>
                    </div>
                </div>
                <div class="offer-content offer-content-one">
                    <h4>Download our mobile app and register to get</h4>
                    <div class="text">20% OFF</div>
                    <div class="offer-btn"><a href="#">Code : f4fr4r</a></div>
                    <ul class="icon-list in-block">
                        <li><a href="#"><img src="images/home/apps3.png" alt=""></a></li>
                        <li><a href="#"><img src="images/home/apps4.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="offer-content offer-content-two">
                    <h4>Avail prepaid dry cleaning order only package worth</h4>
                    <div class="text">$200 By paying</div>
                    <div class="text">$100 Only</div>
                    <div class="offer-btn"><a href="#">Code : ft34g</a></div>
                </div>
                <div class="offer-content offer-content-three">
                    <h4>Household items order of $400 and avobe can avail a discount of 30%</h4>
                    <div class="offer-btn"><a href="#">Code : ft34g</a></div>
                    <div class="icon-box">
                        <i class="flaticon-basket"></i>
                    </div>
                </div>
                <div class="offer-content offer-content-one">
                    <h4>Download our mobile app and register to get</h4>
                    <div class="text">20% OFF</div>
                    <div class="offer-btn"><a href="#">Code : f4fr4r</a></div>
                    <ul class="icon-list in-block">
                        <li><a href="#"><img src="images/home/apps3.png" alt=""></a></li>
                        <li><a href="#"><img src="images/home/apps4.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="offer-content offer-content-two">
                    <h4>Avail prepaid dry cleaning order only package worth</h4>
                    <div class="text">$200 By paying</div>
                    <div class="text">$100 Only</div>
                    <div class="offer-btn"><a href="#">Code : ft34g</a></div>
                </div>
                <div class="offer-content offer-content-three">
                    <h4>Household items order of $400 and avobe can avail a discount of 30%</h4>
                    <div class="offer-btn"><a href="#">Code : ft34g</a></div>
                    <div class="icon-box">
                        <i class="flaticon-basket"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer-section end -->


    <!-- loundry-apps -->
    <section class="loundry-apps overlay-bg sp-one" style="background-image: url(images/home/apps-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 apps-column">
                    <div class="apps-content">
                        <div class="top-text">Tap, Clean, Deliver Even faster</div>
                        <div class="title"><h2>Order <span>Laundry</span> and <span>Dry Cleaning</span> on Your Phone</h2></div>
                        <div class="text">
                            <p>There are lots of apps out there, but not many that will do your laundry for you. That’s where MaxClean app comes in. Now this is what we call the age of convenience. With our award-winning app, your laundry and dry cleaning needs are just a tap away. We put a Quality Guarantee on all your items.</p>
                        </div>
                        <div class="apps-box">
                            <a href="#" class="single-apps-box">
                                <div class="icon-box"><img src="images/home/apps1.png" alt=""></div>
                                <div class="text white">Download it on</div>
                                <h4>App Store</h4>
                            </a>
                            <a href="#" class="single-apps-box">
                                <div class="icon-box"><img src="images/home/apps2.png" alt=""></div>
                                <div class="text white">Get it on</div>
                                <h4>Google Play</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 video-column">
                    <div class="video-gallery">
                        <img src="images/home/video-gallery.png" alt="Awesome Video Gallery">
                        <div class="overlay-gallery">
                            <div class="icon-holder">
                                <div class="icon">
                                    <a class="html5lightbox" title="Wash Video" href="https://youtu.be/yVb0mfmMV9w"><i class="fa fa-play"></i></a> 
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- loundry-apps end -->


    <!-- pricing-section -->
    <section class="pricing-section sp-one centred">
        <div class="container">
            <div class="sec-title"><h2>Pricing Plan</h2></div>
            <div class="title-text">We treat pieces of clothing by their authenticity and quality. Whatever the kind of articles of clothing, for instance, fabric, white's,<br /> upholstery, mats, and floor covers we treat them freely. Endeavor our organizations once and we know you will stay with us!</div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 pricing-column">
                    <div class="single-pricing-content">
                        <div class="icon-box"><i class="flaticon-basket"></i></div>
                        <div class="top-text">One Month Wash</div>
                        <div class="title"><h3>$</h3> <h2>199</h2> <span>/ use</span></div>
                        <ul class="list text-left">
                            <li>Detergent Include</li>
                            <li>Dryer Sheets Include</li>
                            <li>Fabric Softener Included</li>
                            <li>Unlimited Use</li>
                        </ul>
                        <div class="pricing-btn"><a href="#">Get Plan</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pricing-column">
                    <div class="single-pricing-content active">
                        <div class="icon-box"><i class="flaticon-basket"></i></div>
                        <div class="top-text">One Year Wash</div>
                        <div class="title"><h3>$</h3> <h2>499</h2> <span>/ use</span></div>
                        <ul class="list text-left">
                            <li>Detergent Include</li>
                            <li>Dryer Sheets Include</li>
                            <li>Fabric Softener Included</li>
                            <li>Unlimited Use</li>
                        </ul>
                        <div class="pricing-btn"><a href="#">Get Plan</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pricing-column">
                    <div class="single-pricing-content">
                        <div class="icon-box"><i class="flaticon-basket"></i></div>
                        <div class="top-text">Six Month Wash</div>
                        <div class="title"><h3>$</h3> <h2>299</h2> <span>/ use</span></div>
                        <ul class="list text-left">
                            <li>Detergent Include</li>
                            <li>Dryer Sheets Include</li>
                            <li>Fabric Softener Included</li>
                            <li>Unlimited Use</li>
                        </ul>
                        <div class="pricing-btn"><a href="#">Get Plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section -->


    <!-- main-footer -->
    <footer class="main-footer overlay-bg" style="background-image: url(images/footer/bg.jpg);">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <div class="footer-logo"><a href="index.html"><img src="images/footer/logo.png" alt=""></a></div>
                            <div class="text white">Nam libero tempore, cum soluta  est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere to possimus, omnis voluptas repellendus. </div>
                            <div class="location-box">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text white">Universal 234, Triumph Street, <br />Los Angeles California, USA</div>
                            </div>
                            <ul class="footer-social in-block">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title"><h4>Services</h4></div>
                            <ul class="list">
                                <li><a href="#">- &nbsp;Free pick-up and delivery</a></li>
                                <li><a href="#">- &nbsp;High quality</a></li>
                                <li><a href="#">- &nbsp;Drapery cleaning</a></li>
                                <li><a href="#">- &nbsp;Dry cleaning</a></li>
                                <li><a href="#">- &nbsp;Faq</a></li>
                                <li><a href="#">- &nbsp;Silk and suede</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="blog-widget footer-widget">
                            <div class="footer-title"><h4>our blog</h4></div>
                            <div class="text"><a href="blog-details.html">Dry cleaning tips for Suits</a></div>
                            <div class="text"><a href="blog-details.html">Tips for maintaining your wardrobe</a></div>
                            <div class="text"><a href="blog-details.html">How to care for your silk clothes</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="instagram-widget footer-widget">
                            <div class="footer-title"><h4>Instagram</h4></div>
                            <ul class="list in-block clearfix">
                                <li><a href="#"><img src="images/footer/1.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/2.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/3.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/4.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/5.png" alt=""></a></li>
                                <li><a href="#"><img src="images/footer/6.png" alt=""></a></li>
                            </ul>
                            <div class="subscribe-widget">
                                <div class="footer-title"><h4>Subscribe</h4></div>
                                <div class="input-box">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required="">
                                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="container">
                <div class="container">
                    <div class="copyright">© 2020 <a href="#">MaxClean</a>. All Rights Reserved.</div>
                </div>
            </div>
        </div>
        <div class="bubbleContainer">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
            <div class="bubble-3"></div>
            <div class="bubble-4"></div>
            <div class="bubble-5"></div>
            <div class="bubble-6"></div>
            <div class="bubble-7"></div>
            <div class="bubble-8"></div>
            <div class="bubble-9"></div>
            <div class="bubble-10"></div>
            <div class="bubble-11"></div>
            <div class="bubble-12"></div>
            <div class="bubble-13"></div>
            <div class="bubble-14"></div>
            <div class="bubble-15"></div>
        </div>
    </footer>
    <!-- main-footer end -->




<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>
<script src="js/html5lightbox/html5lightbox.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
