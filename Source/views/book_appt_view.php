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
		<?php
			echo form_open('checkcontroller');

			$count = 0;
			foreach($record as $row)
			{
				$count = $count + 1;
				
			}
		

			$c = 0;
		?>
		<p align="center"> Select the date and make appointment</p>
		<table cellspacing='0'>
			<tr>
				<th>Available Days</th>
				<th>Available Time</th>
				<th>Select a Date (Corresponding Available Day In the row)</th>
				<th>Book Appointment</th>
			</tr>
			<?php
				foreach($record as $store)
				{
					$c = $c + 1 ; 
				 echo "<tr>";
					switch($store->day_of_week)
					{
						case "1" : $day = "Sun";
									break;
						case "2" : $day = "Mon";
									break;
						case "3" : $day = "Tue";
									break;
						case "4" : $day = "Wed";
									break;
						case "5" : $day = "Thu";
									break;
						case "6" : $day = "Fri";
									break;
						case "7" : $day = "Sat";
					}
					echo "<td>". $day ."</td>";
					echo "<td>". $store->from_time ."-".$store->to_time ."</td>";
					if ($c>1)
						continue ;
					echo "<td rowspan = '".$count."'><input type='date' name= 'appt_date' required='required'></td>";
					echo "<td rowspan = '".$count."'>";
			         
			?>
						<input type="hidden" name="doctor_id" value= <?php echo $store->doctor_id; ?> >
						<input type="hidden" name="day_of_week" value= <?php echo $store->day_of_week; ?> >
						<input type = "submit" align = "center" value = "Make Appointment" />
		    
		    <?php 	echo form_close();
					echo "</td>";
				echo "</tr>";
				}
		echo "</table>";

			?>

		<?php echo form_open('appointmentcontroller/go_back');?>
				<input type="submit" value="Go Back" align = "center"></input>
				<input type="hidden" name="page_no" id="page_no"  value = "3" >
		<?php echo form_close();?>
</body>
</html>
