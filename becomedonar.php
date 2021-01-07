<?php
error_reporting(1);
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Blood Bank & Donor Management System | Become A Donar</title>
    <style>
    .btnstyle {
		  border: 5px outset red;
		  background-color: lightblue;    
		  text-align: center;
		  font-size: 15px;
		}
	.textsize
	{
		text-align : center;
		font-size: 15px;
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
<h1>Enter your information for become a donor</h1>
</br>
	
<form enctype = "multipart/form-data" name="becomedonar" method="POST" action = "donarpage.php" >

			<a>Name<span style="color:red">*</span></a>
			<input type="text" name="fname" placeholder ="First Name"   class="textsize" required >
			<input type="text" name="lname"  placeholder ="Last Name"  class="textsize" required >
			</br></br>
			<div>Phone Number<span style="color:red">*</span></div>
			<input type="text" name="phone"   class="textsize" required >
			</br>
			</br>
			<div>Email<span style="color:red">*</span></div>
			<input type="text" name="email"   class="textsize" required >
			</br></br>
			<div>
			
			<a>Gender<span style="color:red">*</span></a>

				<select name="gender" class="textsize" required>
					<option value="">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			
			<a >Blood Group<span style="color:red">*</span></a>

				<select name="grp" class="textsize" required>
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

		<div>Age<span style="color:red">*</span></div>
		<div><input type="text" name="age" class="textsize" required></div>
		<br/>
		<div><input type="file" name="avatar"></div>
		</br></br>
	<div>Address</div>
	<div><textarea class="textsize" name="address" rows="4" cols="50"></textarea></div>
		</br></br>
	<div>Message<span style="color:red">*</span></div>
	<textarea class="textsize" name="msg" required rows="4" cols="50" > </textarea>
	
	</br></br>
	<div>Current City<span style="color:red">*</span></div>
	<input type="text" name="ccity"   class="textsize" required >
	
</br>
</br>


<style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 148px;
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

<input type="submit"class="btn click" name="submit" value="submit">
</br>

</form>   

</br></br></br>

</div>

  <?php include('footer.php');?>
 

</body>

</html>
