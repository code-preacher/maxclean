<?php
session_start();
error_reporting(0);
include "inc/config.php";
$tl="MaxClean Laundry | Register/Login";
?>

<?php

if(isset($_POST['submit1'])){
    extract($_POST);
    $datec=date("d-m-y @ g:i A");
$da=mysqli_query($con,"insert into user(name,email,password,phone,address,date_created) values('$name','$email','$password','$phone','$address','$datec')");
if ($da) {
    $_SESSION['msg']= "<script>
    swal({
          title: 'Account Success!',
          text: 'Account was successfully created...Please login!!!',
          type: 'success',
          showCancelButton: false,
          confirmButtonClass: 'btn-success',
          confirmButtonText: 'OK'
        });
    </script>"; 

} else {
    $_SESSION['msg']=  "<script>
    swal({
          title: 'Account Error!',
          text: 'Error creating account!!!',
          type: 'error',
          showCancelButton: false,
          confirmButtonClass: 'btn-danger',
          confirmButtonText: 'OK'
        });
    </script>"; 
}

}


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

<script src="dist/sweetalert.js"></script>
<link rel="stylesheet" href="dist/sweetalert.css">


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

disableRightClickn();


</script>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

<?php
include "inc/header.php";
if (!empty($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    $_SESSION['msg']= ""; 
}

?>



    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>Register / Login</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    


    <!-- contact-section -->
    <section class="contact-section sp-one">
        <div class="container">
             <div class="row">
                <div class="col-md-6 col-sm-7 col-xs-12 contact-column">
                    <div class="contact-form-area">
                        <h3>Login</h3>
                        <div class="text">Please enter your valid login details...</div>
                        <form method="post" action="<?=$site?>check" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <input type="email" name="email2" placeholder="Email Address  eg  john@gmail.com *" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="password" name="password2" placeholder="xxxxxxxxxxxxx" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 col-sm-7 col-xs-12 contact-column">
                    <div class="contact-form-area">
                        <h3>Register</h3>
                        <div class="text">Please provide valid information to ensure accurate service delivery...</div>
                        <form method="post" action="<?php $_PHP_SELF ?>" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <input type="text" name="name" placeholder="Your Fullname *" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" placeholder="Phone Number *" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <input type="email" name="email" placeholder="Email Address *" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="password" name="password" placeholder="xxxxxxxxxxxxx" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Your Residence Address *" name="address"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="submit1">Sign Up</button>
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
