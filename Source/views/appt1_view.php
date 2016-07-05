<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Book Your Appointment</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/table.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/menu.css"/>
	<style type="text/css">

	</style>
	
	
		

</head>
<body>
<div id='cssmenu'>
		<ul>
		   <li><span>HCC Online Appointment System</span></li>
		</ul>
		</div>
		<br>
		<br>
		<fieldset>
		<legend><h1>Book Appointment</h1></legend>
		<p align="center">Select Doctor for making Appointment</p>
		<table cellspacing='0'>
			<tr>
				<th>Department</th>
				<th>Doctor ID</th>
				<th>Doctor</th>
				<th>Book Date</th>
			</tr>
			<?php  	
				foreach($record as $store)
				{
				echo "<tr>";
					echo "<td>".$store->specialization."</td>";
					echo "<td>".$store->doctor_id."</td>";
					echo "<td>".$store->doctor_name."</td>";
					echo "<td>";
					echo form_open('appointmentcontroller'); 
		?>
					<input type="hidden" name="doctor_id" id="doctor_id"  value= <?php echo $store->doctor_id; ?> >
					<input type = "submit" align = "center" value = "Book" />
		 <?php 	    echo form_close();
					echo "</td>";
				echo "</tr>";
				}
		echo "</table>";
		
		 ?>
		</fieldset>
		<fieldset>
		<legend><h1>Check Upcoming Booking Events</h1></legend>
		<?php  
		echo form_open('upcomappt'); 
		?>
		<input type = "submit" align = "center" value = "Click Here" /></input>
		<?php
		echo form_close();
		?>
		</fieldset>
		<?php echo form_open('Welcome');?>
				<input type="submit" value="Go Back" align = "center"></input>
				
		<?php echo form_close();?>
		<?php echo form_open('verifylogin/logout');?>
				
				<input type="submit" value="Logout" align = "center"></input>
		<?php echo form_close();?>

</body>
</html>