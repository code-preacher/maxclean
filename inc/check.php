<?php
session_start();
error_reporting(0);

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'maxclean');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL Server: " . mysqli_connect_error();
}
//$site="goodnewz.000webhostapp.com/maxclean/";
//$site="http://localhost/maxclean/";
$mc="Laundry,wash, dry and iron your clothes,maxclean laundry,maxclean";

?>


<?php
if(isset($_POST['submit']))
{
$email=Cleanse(mysqli_real_escape_string($con,$_POST['email2']));
$pass=Cleanse(mysqli_real_escape_string($con,$_POST['password2']));
	
#user
$ret2=mysqli_query($con,"SELECT * FROM user WHERE email='$email' and password='$pass'");
$num2=mysqli_fetch_array($ret2);


if($num2>0)
{
$extra="$site"."../c-dashboard";//
$_SESSION['email']=$_POST['email2'];
$_SESSION['login']=1;
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else{
	$_SESSION['msg']= "<script>
	swal({
				title: 'Login Error!',
				text: 'Invalid email or password!!!',
				type: 'error',
				showCancelButton: false,
				confirmButtonClass: 'btn-danger',
				confirmButtonText: 'OK'
			});
	</script>";
	header("location:$site"."login");
}


#admin
$ret3=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' and password='$pass'");
$num3=mysqli_fetch_array($ret3);


if($num3>0)
{
	$extra="$site"."../a-dashboard";//
$_SESSION['email']=$_POST['email'];
$_SESSION['login']=1;
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else{
$_SESSION['msg']= "<script>
swal({
			title: 'Login Error!',
			text: 'Invalid email or password!!!',
			type: 'error',
			showCancelButton: false,
			confirmButtonClass: 'btn-danger',
			confirmButtonText: 'OK'
		});
</script>";
header("location:$site"."login");
}
}


function Cleanse($Data)
{
#$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
$Data = htmlentities($Data, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
$Data = stripslashes($Data); /** Add Strip Slashes Protection */
return $Data;
}
?>

