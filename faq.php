<?php
include "inc/config.php";
$tl="MaxClean | FAQ";
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
                <div class="title"><h2>faq</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!--faq-section -->
    <section class="faq-section">
        <div class="container">
            <div class="accordion-box">
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn active">
                        <div class="title"><h3>What is the difference between dry cleaning and regular washing?</h3></div>
                    </div>
                    <div class="acc-content collapsed">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>Which items should be dry cleaned and which should be laundered?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>What if I can’t be home for my scheduled pick-up or drop off?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>What if I am missing an item of clothing from my returned bag?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>Can I get my leather or suede cleaned at clean clothes dry cleaners?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>What do I do if i get a stain on my clothes?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>When a garment’s label says washable, can it be dry-cleaned?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>What if my clothes are damaged?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>Can you remove all stains?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>How long do you store finished garments?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>How fast can I have my garments back?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
                <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                    <div class="acc-btn">
                        <div class="title"><h3>Do you take personalized instructions for garments?</h3></div>
                    </div>
                    <div class="acc-content">
                        <div class="text">Dry cleaning is any cleaning process for clothing and textiles using an organic solvent other than water. Special solvents and soaps are used so as not to harm fabrics and dyes that will not withstand the effects of ordinary soap and water. This process is gentler than regular washing because it reduces the possibility of shrinkage and/or color loss.</div>
                    </div>
                </div>
            </div>
         
        </div>
    </section>
    <!-- faq-section end -->

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
