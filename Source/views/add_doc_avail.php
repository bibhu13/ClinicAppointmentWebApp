<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add Doctor Availability</title>
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
		<p align="center">Details of Existing Doctor</p>
		<table cellspacing='0'>
		<tr>
			<th>Doctor ID</th>
			<th>Day of Week</th>
			<th>From Time</th>
			<th>To Time</th>
			<th>Total Number</th>
		</tr>
		
		<?php
			if (!empty($row)) 
			{
				foreach($row as $row1)
				{
			?>
				<tr>
					<td><?php  echo $row1->doctor_id;?></td>
					<td><?php  echo $row1->day_of_week;?></td>
					<td><?php  echo $row1->from_time;?></td>
					<td><?php  echo $row1->to_time;?></td>
					<td><?php  echo $row1->total_no;?></td>
				</tr>
			<?php
				}
			}
		?>
		</table>
		<br>
		<br>
		<p align="center">Enter Details</p>
		<table cellspacing='0'>
		<?php echo form_open('doctor_query/add_doc_avail');?>
			<tr>
				<th>Attribute</th>
				<th>Enter Details</th>
			</tr>

			<tr>
				<td>Doctor Id</td>
				<td><input type="text" name='doc_id' value='<?php echo $doc_id ;?>' required='required'></input></td>
			</tr>

			<tr>
				<td>Day of Week</td>
				<td><input type="number"  name='day_of_week' min="1" max="7" required='required'></input></td>
			</tr>

			<tr>
				<td>From Time</td>
				<td><input type="time"  name='from_time' required='required'></input></td>
			</tr>

			<tr>
				<td>To Time</td>
				<td><input type="time"  name='to_time' required='required'></input></td>
			</tr>

			<tr>
				<td>Total Number</td>
				<td><input type="text"  name='tot_no' required='required'></input></td>
			</tr>
			<tr>
				<td><input type='submit'></input></td>
		<?php echo form_close();?>
		
		
		<?php echo form_open('doctor_query/modify');?>

			
				
				<td><input type="submit" value="Go Back"></input></td>
			</tr>
		<?php echo form_close();?>
		</table>
	</body>

</html>