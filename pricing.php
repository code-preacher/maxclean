<?php
include "inc/config.php";
$tl="MaxClean | Pricing";
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
                <div class="title"><h2>pricing</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    

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
                        <div class="title"><h3>₦</h3> <h2>10,000</h2> <span>/ use</span></div>
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
                        <div class="top-text">Six Month Wash</div>
                        <div class="title"><h3>₦</h3> <h2>50,000</h2> <span>/ use</span></div>
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
                        <div class="top-text">One Year Wash</div>
                        <div class="title"><h3>₦</h3> <h2>70,000</h2> <span>/ use</span></div>
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



    <!-- price-list -->
    <section class="price-list-section centred">
        <div class="container">
            <div class="sec-title"><h2>Our <span>Price</span> Lists</h2></div>
            <div class="title-text">In this price lists you can found all prices in details</div>
            <div class="price-content">
                <div class="price-list price-list-one">
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-jacket"></i></div>
                            <div class="name"><h4>Coat</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Coat</h4></div>
                            <div class="icon-box"><i class="flaticon-jacket"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-shirt"></i></div>
                            <div class="name"><h4>Jackets</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Jackets</h4></div>
                            <div class="icon-box"><i class="flaticon-shirt"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-jacket"></i></div>
                            <div class="name"><h4>Jackets</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Jackets</h4></div>
                            <div class="icon-box"><i class="flaticon-jacket-1"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-jacket-1"></i></div>
                            <div class="name"><h4>Kids Wear</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Kids Wear</h4></div>
                            <div class="icon-box"><i class="flaticon-baby-dress"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-shorts"></i></div>
                            <div class="name"><h4>Shorts</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Shorts</h4></div>
                            <div class="icon-box"><i class="flaticon-shorts"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                </div>
                <div class="price-list price-list-two">
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-fashion-1"></i></div>
                            <div class="name"><h4>Tie</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Tie</h4></div>
                            <div class="icon-box"><i class="flaticon-fashion-1"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-theatre-curtains"></i></div>
                            <div class="name"><h4>Curtains</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Curtains</h4></div>
                            <div class="icon-box"><i class="flaticon-theatre-curtains"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-bed"></i></div>
                            <div class="name"><h4>Bed Cover</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Bed Cover</h4></div>
                            <div class="icon-box"><i class="flaticon-bed"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-sleeping-bag"></i></div>
                            <div class="name"><h4>Sleeping Bed</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Sleeping Bed</h4></div>
                            <div class="icon-box"><i class="flaticon-sleeping-bag"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-blanket"></i></div>
                            <div class="name"><h4>Blanket</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Blanket</h4></div>
                            <div class="icon-box"><i class="flaticon-blanket"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                </div>
                <div class="price-list price-list-three">
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-dress"></i></div>
                            <div class="name"><h4>Wedding Dress</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Wedding Dress</h4></div>
                            <div class="icon-box"><i class="flaticon-dress"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-fashion"></i></div>
                            <div class="name"><h4>Hat</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Hat</h4></div>
                            <div class="icon-box"><i class="flaticon-fashion"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-skirt"></i></div>
                            <div class="name"><h4>Skirts</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Skirts</h4></div>
                            <div class="icon-box"><i class="flaticon-skirt"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-jeans"></i></div>
                            <div class="name"><h4>Pants</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Pants</h4></div>
                            <div class="icon-box"><i class="flaticon-jeans"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-life-vest"></i></div>
                            <div class="name"><h4>Vest</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Vest</h4></div>
                            <div class="icon-box"><i class="flaticon-life-vest"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦350.00</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-btn"><h3><a href="<?=$site?>login">See All</a></h3></div>
        </div>
    </section>
    <!-- price-list end -->


    <!-- self-service -->
    <section class="self-service overlay-bg" style="background-image: url(images/home/self.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="left-content text-right">
                        <h3>Self Service</h3>
                        <h4>At our Self Service Laundromat we offer a clean and comfortable air-conditioned environment for you to carry out your washing, drying and folding of household clothing and textiles</h4>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="right-content">
                        <h3>Opening Hours</h3>
                        <div class="text">
                            Monday to Friday<br />8:00am - 6:00pm<br />Saturday<br/> 9:00am - 6:00pm<br />Sunday<br />11:00am - 4:00pm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- self-service -->


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
