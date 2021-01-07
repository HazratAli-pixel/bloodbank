<?php
error_reporting(0);
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Blood Bank & Donor Management System | Update info</title>
    <style>
    .btnstyle {
		  border: 5px outset red;
		  background-color: lightblue;    
		  text-align: center;
		}

	</style>

</head>

<body>
<?php
include('header.php');
?>	
<div class="btnstyle">
</br>
</br>
<h1>Enter your phone number for Delete</h1>
</br>
	



<style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 100px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 12px;
}


.click {
  border-color: #4CAF50;
  color: green;
}

.click:hover {
  background-color: #4CAF50;
  color: white;
}
font{
	font-size: 40px;
}
.textsize
	{
		text-align : Center;
		font-size: 20px;
	}
</style>
<form name="becomedonar" method="POST" action = "updateinfocore.php" >

			<div>Phone Number<span style="color:red">*</span></div>
			<textarea class="textsize" name="phone" rows="1" cols="30"></textarea>
			</br>
			</br>
<input type="submit"class="btn click" name="delete" value="Delete">
</br>

</form>

<form name="update" method="POST" action = "editdata.php" >

<p>-------------------------------------------------------</p>
<input type="submit"class="btn click" name="update" value="Update">

</form>

</br></br></br>

</div>

  <?php include('footer.php');?>
 

</body>

</html>
