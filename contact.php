<?php
include "inc/config.php";
$tl="MaxClean | Contact";
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
                <div class="title"><h2>contact us</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="google-map-area">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="40.086097" 
                data-map-lng="-105.939460" 
                data-icon-path="images/resources/map-marker.png" 
                data-map-title="Brooklyn, New York, United Kingdom" 
                data-map-zoom="12" 
                data-markers='{
                    "marker-1": [40.086097, -105.939460, "<h4>Branch Office</h4><p>77/99 London UK</p>","images/resources/map-marker.png"]
                }'>

            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- contact-section -->
    <section class="contact-section sp-one">
        <div class="container">
            <div class="sec-title centred"><h2>Contact us</h2></div>
            <div class="title-text centred">MaxClean comes to your household providing the best of the comforts in Laundry Service with latest technology in your community.<br /> All our employees are well trained with training programs conducted at regular intervals. We provide high quality dry cleaning,<br /> washing, and ironing services from top-notch facilities, High-end equipment.</div>
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12 contact-column">
                    <div class="contact-info">
                        <div class="single-item">
                        <h3>Address</h3>
                            <div class="info-box">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text">PO Box 16122 Collins Street West Lekki,Lagos 8007 Nigeria</div>
                            </div>
                        </div>
                        <div class="single-item">
                            <h3>Phone</h3>
                            <div class="info-box">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text">+234 902 981 0729</div>
                                <div class="text">+234 902 981 0729</div>
                            </div>
                        </div>
                        <div class="single-item">
                            <h3>Mail</h3>
                            <div class="info-box">
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <div class="text">maxclean@yahoo.com</div>
                                <div class="text">maxclean@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="social-info">
                        <h4>Get Social With Us</h4>
                        <ul class="social in-block">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-12 contact-column">
                    <div class="contact-form-area">
                        <h3>Get In Touch</h3>
                        <div class="text">We are always trilled and waiting to hear from you....</div>
                        <form method="post" action="#" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" placeholder="Your Name *" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" placeholder="Email Address *" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Your Message" name="message"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="submit-form">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
