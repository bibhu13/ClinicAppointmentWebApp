<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>New User Registration</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/menu.css"/>
		<style>

		</style>
	</head>

	<body>
	<div id='cssmenu'>
		<ul>
		   <li><span>New Registration</span></li>
		    <li><span></span></li>
		</ul>
		</div>
	<br>
	<br>
	<?php echo validation_errors(); ?>
	<?php echo form_open('verifynewreg');?>

	<table cellspacing='0'>
		
	<tr>
			<td>User Name </td> 
			<td><?php echo form_input('username',set_value('username'))?></td>
		</tr>
		<tr class='even'>
			<td>Password </td>
			
			<td><input type="password" name="password1" required="required"></td>
		</tr>
		
		<tr>
			<td>Re-enter Password  </td>
			
			<td><input type="password" name="password2" required="required"></td>
		</tr>

		<tr class='even'>
			<td>Name  </td>
			
			<td><input type="text" name="name" required="required"></td>
		</tr>

		<tr>
			<td>Register Number </td>
			
			<td><input type="text" name="regno" required="required"></td>
		</tr>
		
		
		<tr class='even'>
			<td>Date of Birth</td>
			
			<td><input type="date" name="dob" required="required"></td>
		</tr>

		<tr>
			<td>Mobile Number</td>
			
			<td><input type="number" name="mobile" required="required"></td>
		</tr>

		<tr class='even'>
			<td>Select Question</td>
			
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
			<td>Enter Answer </td>
			
			<td><input type="text" name="sec_ans" required="required"></td>
		</tr>

		<tr class='even'>
			<td></td>
			<td><input type="submit" name="submit"></td>
			
			
		</tr>
			
		</table>
		<?php echo form_close();?>

	</body>
</html>