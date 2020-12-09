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

disableRightClick();


</script>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

<?php
include "inc/header3.php";
?>

  
<?php 
if (!empty($_SESSION['zmsg'])) {
     echo $_SESSION['zmsg'];
        $_SESSION['zmsg']=" ";
                                } 
   ?>
    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
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
                              <p>
                             
                            </p>
                            <div class="card-title">
                              
                            </div>
                            <div class="card-body">
  
                                <div class="table-responsive">

                                   
                                        <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
         

                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Charge</th>
                                                <th>Payment Reference</th>
                                                <th>Payment Status</th>
                                                <th>Delivery Status</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
 $fd=mysqli_query($con,"SELECT id FROM user WHERE email='".$_SESSION['email']."'");
 $pv=mysqli_fetch_array($fd);
 $uid=$pv['id'];

$qd=mysqli_query($con,"select * from booking where uid='$uid' order by id desc");
$c=0;
while ($f=mysqli_fetch_array($qd)) {
   
    $c++;
    ?>
                                            <tr>
                                                 <td><?php echo $c;?></td>
                                                <td><?php
                                                 $fd2=mysqli_query($con,"SELECT id,name FROM user WHERE id='".$f['uid']."'");
                                                 $pv2=mysqli_fetch_array($fd2);
                                                 echo $pv2['name'];
                                                 ?></td>
                                                <td>₦<?php echo $f['charge'];?></td>
                                                <td><?php echo $f['payment_ref'];?></td>
                                                <td><?php 
                                                if ($f['payment_status']=='1') {
                                                   echo "paid";
                                                } else {
                                                  echo "pending";
                                                }?></td>
                                                <td><?php 
                                                if ($f['delivery_status']=='1') {
                                                  echo "delivered";
                                               } else {
                                                 echo "pending";
                                               }?></td>
                                                <td><?php echo $f['date_created'];?></td>
                                                <td><a href="<?=$site?>c-order-f?id=<?=$f['payment_ref']?>"><i class="fa fa-eye"></i></a> | <a href="<?=$site?>c-del?id=<?=$f['payment_ref']?>" onClick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash"></i></a></td>
                                                
                                            </tr>
                                          <?php  }?>
                                        </tbody>
                                    </table>

                                </div>
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
