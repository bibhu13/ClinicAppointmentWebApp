<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
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
	</style>
	</head>

	<body>
	<table border="0" cellpadding="15" cellspacing="1" width="500" align="center">
	<tr class="tableheader">
		<td align="center" colspan="2">Enter Login Details</td>
	</tr>
	<?php echo validation_errors(); ?>
	<?php echo form_open('verifyforgot');?>


	<tr class="tablerow">
		<td align="center">Username</td>
		<td><input type="text"  name="username" checked="checked" required="required"></td>
	</tr>

	<tr class="tablerow">
	

		<td>Secret Question for Recovery </td>
		
		<td>
				<select name="sec_que">
				  <option value="1">What is your birthplace?</option>
				  <option value="2">Who is your favorite sports person?</option>
				  <option value="3">What is your favorite teachers name?</option>
				  <option value="4">What is your favorite sports team?</option>
				</select>
		</td>
	</tr>

	<tr class="tablerow">
		<td align="center">Secret Answer</td>
		<td><input type="text" name="sec_ans" required="required"></td>
	</tr>

	<tr class="tableheader">
	
		<td align="center" colspan="2"><?php echo form_submit('mysubmit','Login');?></td>
		
	</tr>
	<?php echo form_close();?>
	</table>
	</body>
</html>
