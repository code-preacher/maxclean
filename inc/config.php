<?php

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
$site="http://localhost/maxclean/";
$mc="Laundry,wash, dry and iron your clothes,maxclean laundry,maxclean";

?>