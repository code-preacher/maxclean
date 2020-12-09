<?php
function checkLogin()
{
	if($_SESSION['login']=="")
	{	
		$_SESSION['msg']= "<script>
	swal({
				title: 'Denied Access!',
				text: 'You must login to access requested page...!!!',
				type: 'error',
				showCancelButton: false,
				confirmButtonClass: 'btn-danger',
				confirmButtonText: 'OK'
			});
	</script>";
	header("location:$site"."login");

}
}
?>