<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<html>

	<head>
	<title>New User Registration</title>
	<style>
	body{
		background-color: #CCFFCC;
		
	}
	.form{
		background-color: #b0c4de;
		left-margin: 50px;
		margin: 50px;
		padding: 50px;
		border: solid black 2px;
		text-align:center;
	}
	.heading{
		background-color: #b0c4de;
		text-align: center;
		padding: 15px;
	}
	</style>

	</head>

	<body>
	<div class="heading">
		<h2> Enter Your Details Below</h2>

	</div>
	<div class="form" >
		<?php echo validation_errors(); ?>
		<?php echo form_open('verifynewreg');?>
		<table align="center" cellspacing="1px" cellpadding="15px" >
		
		<tr>
			<td>User Name </td>
			<td>:</td> 
			<td><?php echo form_input('username',set_value('username'))?></td>
		</tr>
		<tr>
			<td>Password </td>
			<td>:</td>
			<td><input type="password" name="password1" required="required"></td>
		</tr>
		
		<tr>
			<td>Re-enter Password  </td>
			<td>:</td>
			<td><input type="password" name="password2" required="required"></td>
		</tr>

		<tr>
			<td>Name  </td>
			<td>:</td>
			<td><input type="text" name="name" required="required"></td>
		</tr>

		<tr>
			<td>Register Number </td>
			<td>:</td>
			<td><input type="text" name="regno" required="required"></td>
		</tr>
		
		
		<tr>
			<td>Date of Birth</td>
			<td>:</td>
			<td><input type="date" name="dob" required="required"></td>
		</tr>
		<tr>
			<td>Mobile Number </td>
			<td>:</td>
			<td><input type="number" name="mobile" required="required"></td>
		</tr>

		<tr>
			<td>Select Question</td>
			<td>:</td>
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
			<td>:</td>
			<td><input type="text" name="sec_ans" required="required"></td>
		</tr>



		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit"></td>
			
			
		</tr>
			
		</table>
		<?php echo form_close();?>
		
	</div>
			
	</body>



</html>