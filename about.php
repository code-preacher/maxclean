<?php
include "inc/config.php";
$tl="MaxClean  | About";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$tl?></title>
<link href="images/logo/favicon.png" rel="icon" type="image/png">
   <link href="images/logo/favicon.png" rel="apple-touch-icon" type="image/png">
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

<?php
include "inc/header.php";
?>


    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>About Us</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- about-section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-8 col-xs-12">
                    <div class="img-box-one img-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><figure><img src="images/about/1.jpg" alt=""></figure></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="img-box-two img-box wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><figure><img src="images/about/2.jpg" alt=""></figure></div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <div class="top-text">66 years of experience</div>
                        <h3>About MaxClean</h3>
                        <div class="text">
                            <p><i>MaxClean</i> is a world-class Laundry and Dry Cleaning Services in your general vicinity who offers unrivaled administrations at affordable rates. We are on-request benefit where you can put in the request on the site. Utilize your work area or PC or download our application, it is ensured that we will approach you inside no time.Being the main Laundry and Dry Cleaning Services, we are focused on offering best in the class washing, pressing, and dry-cleaning administrations. With a significant learning of washing and cleaning administrations, we make the things inconceivably straightforward for you. Give us a buzz, or simply get to our site or App and experience the class of administration that makes us recognized clothing administrations. We utilize best in class arranging and administration programming for planning clothing assignments. We are the one of a kind clothing administration that utilizations present day devices.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="img-box-three img-box wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><figure><img src="images/about/3.jpg" alt=""></figure></div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- choose-section -->
    <section class="choose-section sp-one centred" style="background-image: url(images/home/choose.jpg);">
        <div class="container">
            <div class="sec-title white"><h2>Why Choose <span>MaxClean</span></h2></div>
            <div class="title-text white">Just drop-off your clothes at any of our stores or request for a pick up online. We will do the rest!<br /> We wash, dry and iron your clothes, you just have to ask.</div>
            <div class="three-column-carousel owl-nav-none">
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-clean"></i></div>
                    <h3>Hygienic</h3>
                    <div class="text"><p>No blending of garments. Ultra-clean laundromats with extraordinary bundling to keep up freshness.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-shipped"></i></div>
                    <h3>Convenience</h3>
                    <div class="text"><p>Save you time and energy.Just book your laundry online or drop it yourself at our nearest store.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-quality"></i></div>
                    <h3>High Quality</h3>
                    <div class="text"><p>We provide high quality laundry service for Spotless Business Reputation.We serves diverse sectors with quality.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-clean"></i></div>
                    <h3>Hygienic</h3>
                    <div class="text"><p>No blending of garments. Ultra-clean laundromats with extraordinary bundling to keep up freshness.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-shipped"></i></div>
                    <h3>Convenience</h3>
                    <div class="text"><p>Save you time and energy.Just book your laundry online or drop it yourself at our nearest store.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-quality"></i></div>
                    <h3>High Quality</h3>
                    <div class="text"><p>We provide high quality laundry service for Spotless Business Reputation.We serves diverse sectors with quality.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-clean"></i></div>
                    <h3>Hygienic</h3>
                    <div class="text"><p>No blending of garments. Ultra-clean laundromats with extraordinary bundling to keep up freshness.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-shipped"></i></div>
                    <h3>Convenience</h3>
                    <div class="text"><p>Save you time and energy.Just book your laundry online or drop it yourself at our nearest store.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-quality"></i></div>
                    <h3>High Quality</h3>
                    <div class="text"><p>We provide high quality laundry service for Spotless Business Reputation.We serves diverse sectors with quality.</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-section end -->

<br/><br/>

    <!-- our-history -->
    <section class="our-history">
        <div class="container">
            <div class="top-content centred">
                <div class="sec-title"><h2>Our <span>History</span></h2></div>
                <div class="title-text lh-22">The transition from an employee mindset to entrepreneurial mindset will emerge and confusions will also<br /> come out if you are not prepared. Starting a laundry service business is tough. You have to be physically,<br /> mentally, emotionally and financially prepared.</div>
            </div>
        </div>
        <div class="history-content">
            <div class="img-column" style="background-image: url(images/home/history.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12 col-md-offset-5 history-column">
                        <div class="history-slider owl-dots-none">
                            <div class="slider-content">
                                <div class="year"><h2>1952</h2></div>
                                <h4>Laundry & Dry Cleaning Foundation</h4>
                                <div class="text">
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus</p>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="year"><h2>1952</h2></div>
                                <h4>Laundry & Dry Cleaning Foundation</h4>
                                <div class="text">
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus</p>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="year"><h2>1952</h2></div>
                                <h4>Laundry & Dry Cleaning Foundation</h4>
                                <div class="text">
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-history end -->


    <!-- partner-section -->
    <section class="partner-section centred">
        <div class="container">
            <div class="sec-title"><h2>Our <span>partner</span></h2></div>
            <div class="title-text">Our struggle and dedication make us successful but our partner <br />make it more easy as we thought.</div>
            <ul class="partner-slider owl-dots-none owl-nav-none">
                <li><a href="#"><img src="images/home/brand.png" alt=""></a></li>
                <li><a href="#"><img src="images/home/brand.png" alt=""></a></li>
                <li><a href="#"><img src="images/home/brand.png" alt=""></a></li>
                <li><a href="#"><img src="images/home/brand.png" alt=""></a></li>
                <li><a href="#"><img src="images/home/brand.png" alt=""></a></li>
            </ul>
        </div>
    </section>
    <!-- partner-section end -->


    <?php
include "inc/footer.php";
    ?>

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
