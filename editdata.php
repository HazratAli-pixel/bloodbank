<?php
error_reporting(1);
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Blood Bank & Donor Management System | updateinfo</title>
    <style>
    .btnstyle {
		  border: 5px outset red;
		  background-color: lightblue;    
		  text-align: center;
		  font-size: 18px;
		}
		.textsize{
			text-align : Center;
		font-size: 18px;
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
<h1>Enter information for update</h1>
</br>
	
<form name="becomedonar" method="POST" action = "editidatecore.php" >

		

			<div>Old Phone Number<span style="color:red">*</span></div>
			<input type="text" name="oldphone"   class="textsize" required >
			</br>
			</br>
			<div>New Phone Number</div>
			<input type="text" name="newphone" class = "textsize">
			</br>
			</br>
			<div>Email</div>
			<input type="text" name="newemail" class = "textsize">
			</br></br>
			<div>

			<a >Blood Group<span style="color:red">*</span></a>

				<select name="newgrp" class = "textsize"required>
					<option value="">Select</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select>

			</div>	
			</br>

		<div>Age</div>
		<div><input type="text" name="newage" class = "textsize"></div>
	
	</br></br>
	<div>Current City<span style="color:red">*</span></div>
	<input type="text" name="newccity" class = "textsize" required>
	
</br>
</br>


<style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 158px;
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

</style>

<input type="submit"class="btn click" name="update" value="Update">
</br>

</form>   

</br></br></br>

</div>

  <?php include('footer.php');?>
 

</body>

</html>
