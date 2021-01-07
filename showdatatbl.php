<?php
include ('header.php');
include ('config.php');
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
<h1>Your Search information is here</h1>
<table border = "1px">
	<tr>
		<td><b>Serial</b></td>
		<td><b>Name</b></td>
		<td><b>Email</b></td>
		<td><b>B Group</b></td>
		<td><b>Age</b></td>
		<td><b>Gender</b></td>
		<td><b>Phone</b></td>
		<td><b>Current City</b></td>
		<td><b>message</b></td>
		<td><b>Address</b></td>
		<td><b>Profile Pic</b></td>
		<td><b>Action</b></td>
	</tr>
	<?php
	$bloodgrp = $_REQUEST["bloodgrp"];

	$no = 1;
	
$selectdata = "(SELECT *FROM info WHERE bgroup = '$bloodgrp')";
$runinfo = mysqli_query($connect,$selectdata);
while ($getdata=mysqli_fetch_array($runinfo))
{?>
	
	<tr>
		<td><?php echo $no ;?></td>
		<td><?php echo $getdata["fname"]." ".$getdata["lname"];?></td>
		<td><?php echo $getdata["email"];?></td>
		<td><?php echo $getdata["bgroup"];?></td>
		<td><?php echo $getdata["age"];?></td>
		<td><?php echo $getdata["gen"];?></td>
		<td><?php echo $getdata["phone"];?></td>
		<td><?php echo $getdata["ccity"];?></td>
		<td><?php echo $getdata["msg"];?></td>
		<td><?php echo $getdata["address"];?></td>
		<td><center><img width = "60px" src = "pic/<?php echo $getdata["propic"];?>"/></center></td>
		<td><a href = "">Edit</a> | <a onclick = "return confirm('Are you sure?')" href = "delete.php?phone=<?php echo $getdata["phone"];?>".>Delete</a></td>
		
		
		
		<?php
		$no++;
		?>
	</tr>
	
	<?php
}

	?>
</br></br>
	
	
</table>
</br></br>
</div>
<?php

include ('footer.php');

?>