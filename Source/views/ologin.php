<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<DOCTYPE html>

<html>
<head>
	<title> Index Page </title>
	
	<style>
		body{
			background-color: #CCFFCC;
		}
		.tableheader {
			background-color: #95BEE6;
			color:white;
			font-weight:bold;
			}
			.tablerow {
			background-color: #A7D6F1;
			color:white;
			}
			.tableheader{
				color:white ;
			}
		.fixed-nav-bar {
		  position: fixed;
		  top: 0;
		  left: 0;
		  z-index: 9999;
		  width: 100%;
		  height: 100px;
		  background-color: #00a087;
		}
	</style>
</head>
<body>

<?php echo validation_errors(); ?>
<?php echo form_open('verifylogin');?>
	<table border="0" cellpadding="15" cellspacing="1" width="500" align="center">
	<tr class="tableheader">
		<td align="center" colspan="2">Enter Login Details</td>
	</tr>
	<tr class="tablerow">
		<td align="center" colspan="2"><?php echo '<label for="username">Username:</label>'.form_input('username',set_value('username')).'<br>';?></td>
	</tr>
	<tr class="tablerow">
		<td align="center" colspan="2"><?php echo '<label for="pasword">Password:</label>'.form_password('password','').'<br>';?></td>
	</tr>
	<tr class="tableheader">
	
		<td align="center" colspan="2"><?php echo form_submit('mysubmit','Login');?></td>
		
	</tr>

	
	 	
	 	
	 	<?php 
	 	echo form_hidden('url','from login');
	 	echo form_close();
	 	?>
	<tr class="tableheader">
		<td align="center" colspan="2">

		<?php echo anchor('Welcome/newreg', 'New user', 'title="New User"');?>

		<br></td>
		
	</tr>

	<tr class="tableheader">
		<td align="center" colspan="2">

		<?php echo anchor('Welcome/forgot', 'Forgot Password', 'title="Forgot Password"');?>

		<br></td>
		
	</tr>
	
	</table>
</form>


</body>
</html>


