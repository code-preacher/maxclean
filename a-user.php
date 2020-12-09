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
include "inc/header2.php";
?>

<?php 
if (!empty($_SESSION['umsg'])) {
     echo $_SESSION['umsg'];
        $_SESSION['umsg']=" ";
                                } 
   ?>
    <!-- page title -->
    <section class="page-title centred" style="background-image: url(images/about/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>All User</h2></div>
            </div>
        </div>
    </section>
    <!--End Page Title-->



    <!-- contact-section -->
    <section class="contact-section sp-one">
        <div class="container">
           
            <div class="col-md-12 ">
            <div class="card-body">
  
  <div class="table-responsive">

     
          <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">


          <thead>
              <tr>
                  <th>S/N</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Address</th>
                  <th>Date Created</th>
                  <th>Action</th>
                
              </tr>
          </thead>
          <tbody>
              <?php
$fd=mysqli_query($con,"SELECT id FROM user ");
$pv=mysqli_fetch_array($fd);
$uid=$pv['id'];

$qd=mysqli_query($con,"select * from user order by id desc");
$c=0;
while ($f=mysqli_fetch_array($qd)) {

$c++;
?>
              <tr>
                   <td><?php echo $c;?></td>
                  <td><?php echo $f['name'];?></td>
                  <td><?php echo $f['phone'];?></td>
                  <td><?php echo $f['email'];?></td>
                  <td><?php echo $f['password'];?></td>
                  <td><?php echo $f['address'];?></td>
                  <td><?php echo $f['date_created'];?></td>
                   <td style="text-align:center;"> <a href="<?=$site?>a-del?id=<?=$f['id']?>" onClick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash"></i></a></td>
                  
              </tr>
            <?php  }?>
          </tbody>
      </table>

  </div>
</div>
</div>
<!-- /# card -->


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
