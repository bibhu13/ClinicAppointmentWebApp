<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Upcoming Appointment</title>
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


<?php
    echo "<h1 align = 'center' color = 'blue'>Appointment History</h1>";
	echo "<table cellspacing='0'> ";
	echo "<tr>";
	echo "<th>Appointment No</th>";
	echo "<th>Date of Appointment</th>";
	echo "<th>Token Number</th>";
	echo "<th>Booked Time</th>";
	echo "<th>Doctor_id</th>";
	echo "</tr>";
    foreach($no as $store)
    {
        echo "<tr>";
		echo "<td>". $store->Appt_no ."</td>";
		echo "<td>". $store->booked_date ."</td>";
		echo "<td>". $store->token_no ."</td>";
		echo "<td>". $store->booked_time ."</td>";
		echo "<td>". $store->doctor_id ."</td>";
		echo "</tr>";
			
	}
	echo "</table>";

?>
<?php echo form_open('appointmentcontroller/go_back');?>
				<input type="submit" value="Go Back" align = "center"></input>
				<input type="hidden" name="page_no" id="page_no"  value = "4" >
<?php echo form_close();?>