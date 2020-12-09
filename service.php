<?php
include "inc/config.php";
$tl="MaxClean | Services";
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
                <div class="title"><h2>services</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- working-section -->
    <section class="working-section sp-one centred">
        <div class="container">
            <div class="sec-title"><h2>How <span>MaxClean</span> Works</h2></div>
            <div class="title-text">Keep up a vital separation from the hussle of Washing Cloths. Book your Laundry in your general region with<br /> Laundry day. Book Now and Avail Great Discounts on Your Next Order.</div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-shipped"></i></div>
                        </div>
                        <h3>Free pick up</h3>
                        <div class="count-text">1</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-shirt"></i></div>
                        </div>
                        <h3>Wash and dry</h3>
                        <div class="count-text">2</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-iron"></i></div>
                        </div>
                        <h3>Fold and iron</h3>
                        <div class="count-text">3</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-transport"></i></div>
                        </div>
                        <h3>Free delivery</h3>
                        <div class="count-text">4</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- working-section end -->


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


    <!-- service-section -->
    <section class="service-section centred">
        <div class="container">
            <div class="sec-title"><h2>Our <span>Services</span></h2></div>
            <div class="title-text">Just drop-off your clothes at any of our stores or request for a pick up online. We will do the rest! We<br /> wash, dry and iron your clothes, you just have to ask.</div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/1.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Drapery</a></h3>
                                <div class="text lh-24">Dupioni silk is centuries old and has always remained a favorite as it offers the intricately woven silk yarns of varying thickness.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/2.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Wedding Suits</a></h3>
                                <div class="text lh-24">We know it isn't just your most costly suit yet additionally the most appreciated suit of all events. Call us and we will pick.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/3.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Curtains</a></h3>
                                <div class="text lh-24">The curtains lend a special effect to your tastefully decorated furnishings and wall paint.  Often the first thing everyone.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/4.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Silk and Suede</a></h3>
                                <div class="text lh-24">Every now and again support, refreshment stains and others like pen ink engravings could damage your mollified cowhide</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/5.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Dry Cleaning</a></h3>
                                <div class="text lh-24">Dry Clean for You in Laundry day is your licensed and certified dry cleaner, offering dry cleaning pick up and delivery.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/6.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Leather Cleaning</a></h3>
                                <div class="text lh-24">Leather garments are a chic addition to any wardrobe. While they can be pricey, with the right care they can become</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


 
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
