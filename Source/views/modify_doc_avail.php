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
				<?php echo form_open('doctor_query/modify_doc_avail');?>
				<td><input type="Text"  name='doc_id' value= '<?php  echo $row1->doctor_id;?> '></input></td>
				<td><input type="Text"  name='day_of_week' value= '<?php  echo $row1->day_of_week;?> '></input></td>
				<td><input type="text"  name='from_time' value= '<?php  echo $row1->from_time;?> '></input></td>
				<td><input type="text"  name='to_time' value= '<?php  echo $row1->to_time;?> '></input></td>
				<td><input type="Text"  name='tot_no' value= '<?php  echo $row1->total_no;?> '></input></td>
				<td><input type="submit" value="Modify"></input></td>
				<?php 
					echo form_hidden('p_doc_id', $row1->doctor_id);
					echo form_hidden('p_day_of_week', $row1->day_of_week);
					echo form_hidden('p_from_time', $row1->from_time);
					echo form_hidden('p_to_time', $row1->to_time);
					echo form_hidden('p_tot_no', $row1->total_no);
				echo form_close();
	 			?>
			</tr>
		<?php
			}
		}
		?>
		</table>
		
		<?php echo form_open('doctor_query/modify');?>

			<input type="submit" value="Go Back"></input>
		<?php echo form_close();?>
	</body>

</html>