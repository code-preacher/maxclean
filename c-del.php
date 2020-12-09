<?php
  session_start();
  $id=$_GET['id'];
  include('inc/config.php');
 mysqli_query($con,"delete from booking where payment_ref='$id'");
 mysqli_query($con,"delete from booking_details where payment_ref='$id'");
 $_SESSION['zmsg']= "<script>
	swal({
				title: 'Delete Success!',
				text: 'You have deleted order successfully...!!!',
				type: 'success',
				showCancelButton: false,
				confirmButtonClass: 'btn-success',
				confirmButtonText: 'OK'
			});
	</script>";
	
?>
<?php 
header("location:$site"."c-order-v");
?>