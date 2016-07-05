<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
	<head>
		<title>Forgot Password</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/menu.css"/>
	</head>


	<body>

	<div id='cssmenu'>
		<ul>
		   <li><span>Forgot Password</span></li>
		    <li><span></span></li>
		</ul>
	</div>

	<br>
	<br>
	<?php echo validation_errors(); ?>
	<?php echo form_open('verifyforgot');?>

	<table cellspacing='0'>
	<tr >
		<td >Username</td>
		<td><input type="text"  name="username" checked="checked" required="required"></td>
	</tr>

	<tr>
	

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

	<tr>
		<td align="center">Secret Answer</td>
		<td><input type="text" name="sec_ans" required="required"></td>
	</tr>

	<tr >
		<td></td>
		<td align="center" colspan="2"><?php echo form_submit('mysubmit','Login');?></td>
		
	</tr>
	<?php echo form_close();?>
	</table>
	</body>
</html>
