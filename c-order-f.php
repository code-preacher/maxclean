<?php
include "inc/config.php";
$tl="MaxClean | All Order";
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

<link href=" css/style.css" rel="stylesheet">
<link href=" css/responsive.css" rel="stylesheet">
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
<style>
.sb{
    width:30%;height:50px;text-align:center;font-weight:bolder;color:#000;
}
.sb:hover{
    width:30%;height:50px;text-align:center;font-weight:bolder;color:#fff;background:#82a5fd;
}
</style>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

<?php
include "inc/header3.php"; 
?>


    <!-- page title -->
    <section class="page-title centred" style="background-image: url( images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>All Order</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->



    <!-- contact-section -->
    <section class="contact-section sp-one">
        <div class="container">
            
           
          <!-- /# column -->
          <div class="col-lg-12">
                        <div class="card">
                                <?php if (!empty($_SESSION['zmsg'])) {
                                    echo $_SESSION['zmsg'];
                                } 
                                $_SESSION['zmsg']=" ";
                                 ?>
                         
                            <div class="card-body">
  
                            <?php
$qd=mysqli_query($con,"select booking_details.*,booking.payment_ref,booking.charge from booking_details,booking where booking_details.payment_ref='".$_GET['id']."' and booking.payment_ref='".$_GET['id']."'  order by id desc");
$f=mysqli_fetch_array($qd);
    ?>
          <h4>Receipt Id: <?php echo $f['payment_ref'];?></h4>
                                <div class="table-responsive">                         
                                        <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
         

                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Item</th>
                                                <th>Cost</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          if ($f['bs'] > 0) {
                                   echo "<tr><td>#</td> <td>Bedsheet</td><td>₦".$f['bs']."</td></tr>";
                                          }
                                          if ($f['ct'] > 0) {
                                   echo "<tr><td>#</td> <td>Curtain</td><td>₦".$f['ct']."</td></tr>";
                                          }
                                          if ($f['tw'] > 0) {
                                   echo "<tr><td>#</td> <td>Towel</td><td>₦".$f['tw']."</td></tr>";
                                          }
                                          if ($f['cp'] > 0) {
                                   echo "<tr><td>#</td> <td>Carpet</td><td>₦".$f['cp']."</td></tr>";
                                          } 
                                          if ($f['rg'] > 0) {
                                   echo "<tr><td>#</td> <td>Rug</td><td>₦".$f['rg']."</td></tr>";
                                                   }
                                           if ($f['sk'] > 0) {
                                   echo "<tr><td>#</td> <td>Skirt</td><td>₦".$f['sk']."</td></tr>";
                                                   }   
                                          if ($f['lg'] > 0) {
                                   echo "<tr><td>#</td> <td>Leggings</td><td>₦".$f['lg']."</td></tr>";
                                                   }    
                                                   if ($f['mw'] > 0) {
                                   echo "<tr><td>#</td> <td>Maternity Wear</td><td>₦".$f['mw']."</td></tr>";
                                                                    }   
                                                   if ($f['wd'] > 0) {
                                   echo "<tr><td>#</td> <td>Wedding Dress</td><td>₦".$f['wd']."</td></tr>";
                                                                    }
                                                  if ($f['tn'] > 0) {
                                   echo "<tr><td>#</td> <td>Tunic</td><td>₦".$f['tn']."</td></tr>";
                                                                    }
                                                  if ($f['ng'] > 0) {
                                   echo "<tr><td>#</td> <td>Night Gown</td><td>₦".$f['ng']."</td></tr>";
                                                   }    
                                                   if ($f['ts'] > 0) {
                                   echo "<tr><td>#</td> <td>T-Shirt</td><td>₦".$f['ts']."</td></tr>";
                                                                    } 
                                                   if ($f['jy'] > 0) {
                                   echo "<tr><td>#</td> <td>Jersey</td><td>₦".$f['jy']."</td></tr>";
                                                   }    
                                                   if ($f['po'] > 0) {
                                   echo "<tr><td>#</td> <td>Pullover</td><td>₦".$f['po']."</td></tr>";
                                                                    }  
                                                   if ($f['cd'] > 0) {
                                   echo "<tr><td>#</td> <td>Cardigan</td><td>₦".$f['cd']."</td></tr>";
                                                   }    
                                                   if ($f['st'] > 0) {
                                   echo "<tr><td>#</td> <td>Shirt</td><td>₦".$f['st']."</td></tr>";
                                                                    }
                                                  if ($f['br'] > 0) {
                                   echo "<tr><td>#</td> <td>Bathrobe</td><td>₦".$f['br']."</td></tr>";
                                                   }    
                                                   if ($f['bl'] > 0) {
                                   echo "<tr><td>#</td> <td>Blazer</td><td>₦".$f['bl']."</td></tr>";
                                                                    }    
                                                   if ($f['tr'] > 0) {
                                   echo "<tr><td>#</td> <td>Trouzer</td><td>₦".$f['tr']."</td></tr>";
                                                   }    
                                                   if ($f['sh'] > 0) {
                                   echo "<tr><td>#</td> <td>Short</td><td>₦".$f['sh']."</td></tr>";
                                                                    }     
                                          ?>
                                           
                                            <tr>
                                                 <td colspan="2" style="text-align:right;"><b><?php echo "Total Charge";?></b></td>
                                                <td><b>₦<?php echo $f['charge'];?></b></td>
                                            </tr>
                                          <?php ?>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="price-btn"><h3><a href="javascript:print()"><input type="submit" name="submit" value="Print" class="sb"></a></h3></div>
    
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


              
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
<script type="text/javascript" src=" js/jquery-2.1.4.js"></script>
<script src=" js/bootstrap.min.js"></script>
<script src=" js/owl.carousel.min.js"></script>
<script src=" js/wow.js"></script>
<script src=" js/validation.js"></script>
<script src=" js/jquery.fancybox.pack.js"></script>
<script type=" text/javascript" src="js/SmoothScroll.js"></script>
<script type=" text/javascript" src="js/jQuery.style.switcher.min.js"></script>
<script src=" js/html5lightbox/html5lightbox.js"></script> 
<script src=" https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0"></script>
<script src=" js/gmaps.js"></script>
<script src=" js/map-helper.js"></script>
<script src=" js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
