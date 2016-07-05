
<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Unsuccessful</title>
	<style type="text/css">
			body
			{
				background-color: #CCFFCC;
				font-family: "Comic Sans MS", cursive, sans-serif;
			}
			.color
			{
				color:  #990099;
			}

	</style>
</head>
<body>
	<h1 align = 'center' color = 'blue'>Sorry We are Unable to make your appointment</h1><br>
	<h1 align = 'center' color = 'blue'><?php echo $err_msg ?></h1><br>
	<?php echo form_open('appointmentcontroller/go_back');?>
				<input type="submit" value="Go Back" align = "center"></input>
				<input type="hidden" name="page_no" id="page_no"  value = "6" >
	<?php echo form_close();?>
</body>
</html>