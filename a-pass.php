<?php
ob_start();
session_start();
include 'inc/checklogin.php';
checkLogin();
 include('inc/config.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];


$ql=mysqli_query($con,"update admin set name='$name',email='$email',password='$password' where email='".$_SESSION['email']."'");

if($ql){
  $_SESSION['pmsg']= "<script>
	swal({
				title: 'Update Success!',
				text: 'Account was successfully updated......!!!',
				type: 'success',
				showCancelButton: false,
				confirmButtonClass: 'btn-success',
				confirmButtonText: 'OK'
			});
	</script>";
	header("location:$site"."a-profile");
$_SESSION['email']=$email;
}
else{"<script>
	swal({
				title: 'Update Error!',
				text: 'Account was not successfully updated..........!!!',
				type: 'error',
				showCancelButton: false,
				confirmButtonClass: 'btn-danger',
				confirmButtonText: 'OK'
			});
	</script>";
	header("location:$site"."a-profile");
$_SESSION['email']=$email;

}
}

header("location:$site"."a-profile");
?>