<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
	<style type="text/css">
			body
			{
				background-color: #CCFFCC;
				font-family: "Comic Sans MS", cursive, sans-serif;
			}
			.color
			{
				color:  #990099;
				align:  center;
			}

	</style>
</head>
<body>
	<h1 align = 'center' color = 'blue'>Appointment Successful</h1><br>
	
	<?php
	echo "<h2 align = 'center'>";
	echo "Your Token No :".$no['token_no'];
	echo "<br><br>";
	echo "We expect to see you at :".$no['booked_time'];
    #echo $no['token_no'];
	echo "</h2>";
	?>
	<?php echo form_open('appointmentcontroller/go_back');?>
				<input type="submit" value="Go Back" align = "center"></input>
				<input type="hidden" name="page_no" id="page_no"  value = "5" >
	<?php echo form_close();?>
</body>
</html>