<?php
require_once("config.php");
$getphone = $_REQUEST["phone"];

$delete = "DELETE FROM info Where phone = $getphone";
$rundlquery = mysqli_query($connect,$delete);
if($rundlquery==true){
	header ("Location: showdatatbl.php");	
}
?>
