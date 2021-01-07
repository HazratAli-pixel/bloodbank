<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bloodbank";

$connect = mysqli_connect ($dbhost, $dbuser,$dbpass,$dbname);

if($connect == false)
{
	echo "<h1>sorry, DB Connection fail</h1>";
}

?>