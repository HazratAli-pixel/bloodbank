<?php

require_once("config.php");
$getphone = $_REQUEST["phone"];
$datadlt = "DELETE FROM info WHERE phone =$getphone";
$rundltquery = mysqli_query($connect,$datadlt);
	

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Delete page conformation</title>
    <style>
    .btnstyle {
		  border: 5px outset red;
		  background-color: lightblue;    
		  text-align: center;
		}
	</style>

</head>
<?php
include ('header.php');
?>
<body>
<div class="btnstyle">
	<?php
	 if($rundltquery == true)
	{?>
	</br></br><h1>Delete Successfull</h1></br></br>
	<?php
	}else
	{
		?>
		</br></br><h1>Delete Failed</h1></br></br>
	<?php
	}
	?>

</div>
<?php
include ('footer.php');
?>

</body>
</html>