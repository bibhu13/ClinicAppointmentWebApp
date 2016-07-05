<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Modify Doctor Details</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/menu.css"/>
	</head>

	<body>
	<div id='cssmenu'>
		<ul>
		   <li><span>HCC Online Appointment System</span></li>
		</ul>
		</div>
	<?php echo validation_errors(); ?>
	
		<br>
		<br>
		<table cellspacing='0' >
		<?php echo form_open('doctor_query/from_admin_modify_page_buttons');?>
		<tr>
		<td>Click here to add Doctor to Hospital:</td>
		<td><input type="submit" name="formsubmit" value="ADD DOCTOR"></input><br></td>
		</tr>
		<?php echo form_close();?>
		</table>

		<?php echo form_open('doctor_query/from_admin_modify_page_buttons');?>
		<br>
		<br>
		<p align="center">Enter the Doctor Id</p>
		<table cellspacing='0' >
		<tr>
			<td>Doctor Id:</td>
			<td><input type="text" name="doc_id" required="required"></input><br></td>
		</tr>
		<tr>
			<td>Click here to Delete Doctor From System</td>
			<td><input type="submit" name="formsubmit" value="DELETE DOCTOR"></input><br></td>
		</tr>
		<tr>
			<td>Click here to ADD Availability of Doctor</td>
			<td><input type="submit" name="formsubmit" value="ADD"></input></td>
		</tr>
		<tr>
			<td>Click here to Delete Availability of Doctor</td>
			<td><input type="submit" name="formsubmit" value="DELETE"></input></td>
		</tr>
		<tr>
			<td>Click here to Modify the Availabilty of Doctor</td>
			<td><input type="submit" name="formsubmit" value="Modify"></input></td>
		
		</tr>
		
		<?php echo form_close();?>


		<?php echo form_open('doctor_query/goback');?>

			<tr>
			<td>To Go Back</td>
			<td><input type="submit" value="Go Back"></input></td>
			</tr>
		<?php echo form_close();?>

		</table>

		<?php
	if( !empty($row) ) 
	{
			?>
		<p align="center">List of Available Doctors</p>
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
		<?php
	}
	else
	{
		echo "No Doctors Registered in Hospital";
	}
	?>	
	</body>
</html>
