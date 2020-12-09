

<?php
session_start();
$_SESSION['login']=="";
session_unset();

$_SESSION['msg']= "<script>
	swal({
				title: 'Logout Info!',
				text: 'You have successfully logged out, do visit us again....!!!',
				type: 'success',
				showCancelButton: false,
				confirmButtonClass: 'btn-success',
				confirmButtonText: 'OK'
			});
	</script>";
header("Location: $site"."login"); // Redirecting To Home Page

?>



