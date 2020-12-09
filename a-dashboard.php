<?php
include "inc/config.php";
$tl="MaxClean | Dashboard";
session_start();
error_reporting(0);
include 'inc/checklogin.php';
checkLogin();
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
function disableRightClickn(e)

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
include "inc/header2.php";
?>


    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>Admin Dashboard</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->



  
    <!-- working-section -->
    <section class="working-section sp-one centred">
        <div class="container">
             <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <a href="<?=$site?>a-user">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="fa fa-users"></i></div>
                        </div>
                        <h3>Users</h3>
                        <div class="count-text">
                        <?php 
                        $cn=mysqli_query($con,"select * from user");
                        $nc=mysqli_num_rows($cn);
                        echo $nc;
                        ?>
                        </i></div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                <a href="<?=$site?>a-order-v">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="fa fa-briefcase"></i></div>
                        </div>
                        <h3>Booked Order</h3>
                        <div class="count-text">
                        <?php 
                            $cn2=mysqli_query($con,"select * from booking");
                            $nc2=mysqli_num_rows($cn2);
                            echo $nc2;
                            ?>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                <a href="<?=$site?>a-profile">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="fa fa-user"></i></div>
                        </div>
                        <h3>Profile</h3>
                        <div class="count-text"><i class="fa fa-smile-o"></i></div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                <a href="<?=$site?>a-logout">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="fa fa-sign-out"></i></div>
                        </div>
                        <h3>Logout</h3>
                        <div class="count-text"><i class="fa fa-arrow-up"></i></div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- working-section end -->


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
