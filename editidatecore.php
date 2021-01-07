<?php

require_once("config.php");
include ('header.php');

$newemail = $_REQUEST["newemail"];
$oldphone = $_REQUEST["oldphone"];
$newphone = $_REQUEST["newphone"];
$newgrp = $_REQUEST["newgrp"];
$newage = $_REQUEST["newage"];
$newccity = $_REQUEST["newccity"];

$updatedata = "UPDATE info SET phone = '$newphone', email = '$newemail',bgroup = '$newgrp',age = $newage,
ccity = '$newccity' WHERE phone = ('$oldphone')";

mysqli_query($connect,$updatedata);
?>

<style>
h1 {
	text-align: center;
	color : Green;
	}
	.btnstyle {
		  border: 5px outset red;
		  background-color: lightblue;    
		  text-align: center;
		}
</style>
<div class ="btnstyle">
</br>
</br>
</br>
<h1>Update Successfull</h1>
</br>
</br>
</br>
</div>

<?php
include('footer.php');


?>