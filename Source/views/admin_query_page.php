<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin query page</title>
		
		<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/menu.css"/>
	</head>

	<body>
	<div id='cssmenu'>
		<ul>
		   <li><span>HCC Online Appointment System</span></li>
		</ul>
		</div>
		<p align='center'>Enter the details of doctor to get appointment details</p>
		<br>
		<?php echo form_open('doctor_query/query_results');?>
		<table cellspacing='0'>
		<tr>
			<th>Attribute</th>
			<th>Enter Data</th>
		</tr>
		<tr>
			<td>Doctor Id:</td>
			<td><input type="text" name="doc_id" required="required"></input></td>
		</tr>
		<tr>
			<td>Date:</td>
			<td><input type="date" name="date" required="required"></input></td>
		</tr>
		<tr>

			<td><input type="submit" value="Get results"></input></td>

		<?php echo form_close();?>

		<?php echo form_open('doctor_query/goback');?>

			<td><input type="submit" value="Go Back"></input></td>
		<?php echo form_close();?>

		</table>

		<br>
		<br>
		<p align="center">List of Available doctors</p>
		<br>
		<table cellspacing='0'>
		<tr>
			<th>Doctor ID</th>
			<th>Doctor Name</th>
			<th>Specialization</th>
		</tr>
		
		<?php
			foreach($row as $row1)
			{
		?>
			<tr>
				<td><?php  echo $row1->doctor_id;?></td>
				<td><?php  echo $row1->doctor_name;?></td>
				<td><?php  echo $row1->specialization;?></td>
			</tr>
		<?php
			}
		?>

		</table>
		<br>
		<br>

		
	</body>
</html>
