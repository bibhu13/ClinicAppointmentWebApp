<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Doctor</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/menu.css"/>
	</head>

	<body>
		<div id='cssmenu'>
		<ul>
		   <li><span>HCC Online Appointment System</span></li>
		</ul>
		</div>
		<br>
		<br>
		<?php echo validation_errors(); ?>
		<p align="center">Enter the Doctor Details</p>
		<table cellspacing='0' >
	
	<?php echo form_open('doctor_query/add_doc_to_table');?>
	<tr>
		<td>Doctor ID:</td>
		<td><input type="text" name="doc_id" required="required"></input><br></td>
	</tr>
	<tr>
		<td>Doctor Name:</td>
		<td><input type="text" name="doc_name" required="required"></input><br></td>
	</tr>
	<tr>
		<td>Specialization:</td>
		<td><input type="text" name="spec" required="required"></input><br></td>
	</tr>
	<tr>
		<td><input type="submit"></input></td>
	<?php echo form_close();?>

	<?php echo form_open('doctor_query/modify');?>

		<td><input type="submit" value="Go Back"></input></td>
	<?php echo form_close();?>
	</tr>
	</table>
	</body>
</html>