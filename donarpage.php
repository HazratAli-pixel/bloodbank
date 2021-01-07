<?php

require_once("config.php");
include ('header.php');

$fname =$_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$grp = $_REQUEST["grp"];
$gender = $_REQUEST["gender"];
$age = $_REQUEST["age"];
$address = $_REQUEST["address"];
$ccity = $_REQUEST["ccity"];
$msg = $_REQUEST["msg"];
//$avatar_name = $_FILES["avatar"]["name"];
$Upavatarfilelocation = $_FILES["avatar"]["tmp_name"];
$location = "pic/";
$nameforDB = uniqid();

move_uploaded_file($Upavatarfilelocation, $location."$nameforDB.jpg");

$datainsert = "INSERT INTO info(fname, lname, email, bgroup, gen, address, age,phone, ccity, msg,propic) 
VALUES ('$fname','$lname','$email','$grp','$gender','$address','$age','$phone','$ccity','$msg','$nameforDB.jpg')";

$runquery = mysqli_query($connect,$datainsert);
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
<h1>Add Successfull</h1>
</br>
</br>
</br>
</div>

<?php
include('footer.php');


?>