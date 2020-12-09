<?php
include "inc/config.php";
$tl="MaxClean  | Order";
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
<link href="css/style2.css" rel="stylesheet">
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

disableRightClick();


</script>
<style>
.sb{
    width:50%;height:70px;text-align:center;font-weight:bolder;color:#000;
}
.sb:hover{
    width:50%;height:70px;text-align:center;font-weight:bolder;color:#fff;background:#82a5fd;
}
</style>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

<?php
include "inc/header3.php";

$fd=mysqli_query($con,"SELECT id FROM user WHERE email='".$_SESSION['email']."'");
$pv=mysqli_fetch_array($fd);
$uid=$pv['id'];

if(isset($_POST['submit'])){
    
    extract($_POST);
    $date=date("d-m-y");
    $datec=date("d-m-y @ g:i A");
    $ref = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $bs = ($bs==0) ? 0 : $bs * 10;$ct = ($ct==0) ? 0 : $ct * 20;
    $tw = ($tw==0) ? 0 : $tw * 30;$cp = ($cp==0) ? 0 : $cp * 40;
    $rg = ($rg==0) ? 0 : $rg* 50;$sk = ($sk==0) ? 0 : $sk * 60;
    $lg= ($lg==0) ? 0 : $lg * 70;$mw = ($mw==0) ? 0 : $mw * 80;
    $wd = ($wd==0) ? 0 : $wd * 90;$tn = ($tn==0) ? 0 : $tn * 100;
    $ng = ($ng==0) ? 0 : $ng * 110;$ts = ($ts==0) ? 0 : $ts * 120;
    $jy = ($jy==0) ? 0 : $jy * 130;$po = ($po==0) ? 0 : $po * 140;
    $cd = ($cd==0) ? 0 : $cd * 150;$st = ($st==0) ? 0 : $st * 160;
    $br = ($br==0) ? 0 : $br * 170;$bl = ($bl==0) ? 0 : $bl * 180;
    $tr = ($tr==0) ? 0 : $tr * 190;$sh = ($sh==0) ? 0 : $sh * 200;
    $charge=$bs+$ct+$tw+$cp+$rg+$sk+$lg+$mw+$wd+$tn+$ng+$ts+$jy+$po+$cd+$st+$br+$bl+$tr+$sh;
$da=mysqli_query($con,"insert into booking_details(payment_ref,bs,ct,tw,cp,rg,sk,lg,mw,wd,tn,ng,ts,jy,po,cd,st,br,bl,tr,sh,date_created) values('$ref','$bs','$ct','$tw','$cp','$rg','$sk','$lg','$mw','$wd','$tn','$ng','$ts','$jy','$po','$cd','$st','$br','$bl','$tr','$sh','$datec')");
if ($da) {
    mysqli_query($con,"insert into booking(uid,charge,payment_ref,payment_status,delivery_status,date,date_created) values('$uid','$charge','$ref','0','0','$date','$datec')");
    print "<script>
    swal({
          title: 'Order Success!',
          text: 'Order was successfully taken, we will respond to you in a short while!!!',
          type: 'success',
          showCancelButton: false,
          confirmButtonClass: 'btn-success',
          confirmButtonText: 'OK'
        });
    </script>";	 

} else {
	print "<script>
    swal({
          title: 'User Error!',
          text: 'Error placing order!!!',
          type: 'error',
          showCancelButton: false,
          confirmButtonClass: 'btn-danger',
          confirmButtonText: 'OK'
        });
    </script>";	
}

}
header("location:$site"."c-order-v");
echo"<script>window.location='$site'c-order-v;</script>";
?>


    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>Order</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- price-list -->
    <section class="price-list-section centred">
        <div class="container">
            <h4>Please hover on item and insert the quantity</h4>
            <div class="price-content">
                <div class="price-list price-list-one">
                <div class="single-price">
                <form action="#" method="post">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-single-bed"></i></div>
                            <div class="name"><h4>Bedsheet</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Bedsheet</h4></div>
                            <div class="icon-box"><i class="flaticon-single-bed"></i></div>
                            <div class="price">Wash-₦100.00<br />Wash & Iron-₦150.00<br/><input type="number" name="bs" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-curtain"></i></div>
                            <div class="name"><h4>Curtain</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Curtain</h4></div>
                            <div class="icon-box"><i class="flaticon-curtain"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦250.00<br/><input type="number" name="ct" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-towels"></i></div>
                            <div class="name"><h4>Towel</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Towel</h4></div>
                            <div class="icon-box"><i class="flaticon-towels"></i></div>
                            <div class="price">Wash-₦300.00<br />Wash & Iron-₦350.00<br/><input type="number" name="tw" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-carpet-1"></i></div>
                            <div class="name"><h4>Carpet</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Carpet</h4></div>
                            <div class="icon-box"><i class="flaticon-carpet-1"></i></div>
                            <div class="price">Wash-₦250.00<br />Wash & Iron-₦350.00<br/><input type="number" name="cp" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-carpet"></i></div>
                            <div class="name"><h4>Rug</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Rug</h4></div>
                            <div class="icon-box"><i class="flaticon-carpet"></i></div>
                            <div class="price">Wash-₦400.00<br />Wash & Iron-₦450.00<br/><input type="number" name="rg" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-skirt"></i></div>
                            <div class="name"><h4>Skirt</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Skirt</h4></div>
                            <div class="icon-box"><i class="flaticon-skirt"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦250.00<br/><input type="number" name="sk" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-leggings"></i></div>
                            <div class="name"><h4>Leggings</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Leggings</h4></div>
                            <div class="icon-box"><i class="flaticon-leggings"></i></div>
                            <div class="price">Wash-₦150.00<br />Wash & Iron-₦250.00<br/><input type="number" name="lg" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-gown-1"></i></div>
                            <div class="name"><h4>Maternity Wear</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Maternity Wear</h4></div>
                            <div class="icon-box"><i class="flaticon-gown-1"></i></div>
                            <div class="price">Wash-₦400.00<br />Wash & Iron-₦450.00<br/><input type="number" name="mw" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-bride-dress"></i></div>
                            <div class="name"><h4>Wedding Dress</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Wedding Dress</h4></div>
                            <div class="icon-box"><i class="flaticon-bride-dress"></i></div>
                            <div class="price">Wash-₦1000.00<br />Wash & Iron-₦1500.00<br/><input type="number" name="wd" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-tunic"></i></div>
                            <div class="name"><h4>Tunic</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Tunic</h4></div>
                            <div class="icon-box"><i class="flaticon-tunic"></i></div>
                            <div class="price">Wash-₦220.00<br />Wash & Iron-₦380.00<br/><input type="number" name="tn" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-nightgown"></i></div>
                            <div class="name"><h4>Night Gown</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Night Gown</h4></div>
                            <div class="icon-box"><i class="flaticon-nightgown"></i></div>
                            <div class="price">Wash-₦170.00<br />Wash & Iron-₦210.00<br/><input type="number" name="ng" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-tshirt"></i></div>
                            <div class="name"><h4>T-Shirt</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>T-Shirt</h4></div>
                            <div class="icon-box"><i class="flaticon-tshirt"></i></div>
                            <div class="price">Wash-₦130.00<br />Wash & Iron-₦250.00<br/><input type="number" name="ts" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-soccer-jersey"></i></div>
                            <div class="name"><h4>Jersey</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Jersey</h4></div>
                            <div class="icon-box"><i class="flaticon-soccer-jersey"></i></div>
                            <div class="price">Wash-₦100.00<br />Wash & Iron-₦200.00<br/><input type="number" name="jy" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-sweater"></i></div>
                            <div class="name"><h4>Pullover</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Pullover</h4></div>
                            <div class="icon-box"><i class="flaticon-sweater"></i></div>
                            <div class="price">Wash-₦210.00<br />Wash & Iron-₦330.00<br/><input type="number" name="po" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-cardigan"></i></div>
                            <div class="name"><h4>Cardigan</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Cardigan</h4></div>
                            <div class="icon-box"><i class="flaticon-cardigan"></i></div>
                            <div class="price">Wash-₦270.00<br />Wash & Iron-₦390.00<br/><input type="number" name="cd" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-shirt"></i></div>
                            <div class="name"><h4>Shirt</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Shirt</h4></div>
                            <div class="icon-box"><i class="flaticon-jacket"></i></div>
                            <div class="price">Wash-₦260.00<br />Wash & Iron-₦425.00<br/><input type="number" name="st" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-bathrobe"></i></div>
                            <div class="name"><h4>Bathrobe</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Bathrobe</h4></div>
                            <div class="icon-box"><i class="flaticon-bathrobe"></i></div>
                            <div class="price">Wash-₦400.00<br />Wash & Iron-₦500.00<br/><input type="number" name="br" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-jersey-blazer"></i></div>
                            <div class="name"><h4>Blazer</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Blazer</h4></div>
                            <div class="icon-box"><i class="flaticon-jersey-blazer"></i></div>
                            <div class="price">Wash-₦600.00<br />Wash & Iron-₦900.00<br/><input type="number" name="bl" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-trousers"></i></div>
                            <div class="name"><h4>Trouser</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Trouser</h4></div>
                            <div class="icon-box"><i class="flaticon-trousers"></i></div>
                            <div class="price">Wash-₦300.00<br />Wash & Iron-₦390.00<br/><input type="number" name="tr" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="view-content">
                            <div class="icon-box"><i class="flaticon-shorts"></i></div>
                            <div class="name"><h4>Short</h4></div>
                        </div>
                        <div class="hidden-content">
                            <div class="name"><h4>Short</h4></div>
                            <div class="icon-box"><i class="flaticon-shorts"></i></div>
                            <div class="price">Wash-₦200.00<br />Wash & Iron-₦270.00<br/><input type="number" name="sh" value="0" style="width:50%;text-align:center;font-weight:bolder;color:#000;"></div>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
            <div class="price-btn"><h3><a href="#"><input type="submit" name="submit" value="Submit" class="sb"></a></h3></div>
        </div>
        </form>
    </section>
    <!-- price-list end -->


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
