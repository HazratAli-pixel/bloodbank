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
.textsize
	{
		text-align : Center;
		font-size: 20px;
	}
</style>

<div class = "btnstyle">
<form method = "POST", name = "showdata", action = "showdatatbl.php"></br>
</br>
</br>
	<div>
	<a >Select Blood Group<span style="color:red">*</span></a>	</div>
</br>
				<div><select name="bloodgrp" class="textsize" required>
					<option value="">Select</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select>>
	
	
	
	</br>
</br>
</div>
	<input name = "submit" type = "submit" class = "btn click" value = "Search">
</form>
</br>
</br>
</br>

</div>

<?php

include ('footer.php');

?>