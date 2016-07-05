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
				<?php $url='doctor_query/del_doc_avail/'.$row1->doctor_id.'/'.$row1->day_of_week.'/'.$row1->from_time.'/'.$row1->to_time.'/'.$row1->total_no.'/'.$row1->per_pat_time;
				 ?>
				<td><?php echo anchor($url, 'del', 'title="del"');?></td>
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