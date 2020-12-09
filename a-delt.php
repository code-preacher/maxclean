<?php
  session_start();
  $id=$_GET['id'];
  include('inc/config.php');

$ret=mysqli_query($con,"SELECT * FROM booking where payment_ref='$id'");
$row=mysqli_fetch_array($ret);
$idp=$row['id'];
$apm=$row['delivery_status'];


 if($apm=='0'){
mysqli_query($con,"UPDATE booking SET delivery_status='1' WHERE id='$idp'");
$_SESSION['zmsg']= "<script>
	swal({
				title: 'Update Success!',
				text: 'You have updated record successfully...!!!',
				type: 'success',
				showCancelButton: false,
				confirmButtonClass: 'btn-success',
				confirmButtonText: 'OK'
			});
	</script>";
 }            
 elseif($apm=='1'){
mysqli_query($con,"UPDATE booking SET delivery_status='0' WHERE id='$idp'");
$_SESSION['zmsg']= "<script>
	swal({
				title: 'Update Success!',
				text: 'You have updated record successfully...!!!',
				type: 'success',
				showCancelButton: false,
				confirmButtonClass: 'btn-success',
				confirmButtonText: 'OK'
			});
	</script>";
 }
 elseif($apm==''){
mysqli_query($con,"UPDATE booking SET delivery_status='0' WHERE id='$idp'");
$_SESSION['zmsg']= "<script>
	swal({
				title: 'Update Error!',
				text: 'Error Updating record...!!!',
				type: 'error',
				showCancelButton: false,
				confirmButtonClass: 'btn-danger',
				confirmButtonText: 'OK'
			});
	</script>";
 }
  
 
	
?>
<?php 
header("location:$site"."a-order-v");
?>