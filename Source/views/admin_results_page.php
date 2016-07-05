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
		<br>
		<br>

		<?php
		if( !empty($row) ) 
		{
			?>
		<table cellspacing='0'>
		<tr>
			<th>Appointment date</th>
			<th>Doctor ID</th>
			<th>Patient Id</th>
		</tr>
		
		<?php
				foreach($row as $row1)
				{
			?>
				<tr>
					<td><?php  echo $row1->appt_date;?></td>
					<td><?php  echo $row1->doc_id;?></td>
					<td><?php  echo $row1->patient_id;?></td>
				</tr>
			<?php
				}
			}
			else
			{
				echo "No Appointments for Today";
			}
		?>

		
		
		</table>
		<?php echo form_open('doctor_query/query');?>
		<input type="submit" value="Go Back"></input>
		<?php echo form_close();?>
	</body>
</html>
