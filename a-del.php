<?php
  session_start();
  $id=$_GET['id'];
  include('inc/config.php');
 mysqli_query($con,"delete from user where id='$id'");
 mysqli_query($con,"delete from booking where uid='$id'");
 $_SESSION['umsg']= "<script>
	swal({
				title: 'Delete Success!',
				text: 'You have deleted user successfully...!!!',
				type: 'success',
				showCancelButton: false,
				confirmButtonClass: 'btn-success',
				confirmButtonText: 'OK'
			});
	</script>";
	
?>
<?php 
header("location:$site"."a-user");
?>