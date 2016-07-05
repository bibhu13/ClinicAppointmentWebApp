<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css"/>
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

		<section class="container">
	    <div class="login">
	      <h1>Select Option</h1>
	      		<?php echo form_open('doctor_query/query');?>
				<p><pre>                   <input type="submit"  value="Appointment details"></input></pre></p>
				<?php echo form_close(); ?>
				<br>
				<?php echo form_open('doctor_query/modify');?>
				<p ><pre>                  <input type="submit"  value="Modify Doctor Details"></input></pre></p>
				<?php echo form_close(); ?>
		</div>
		</section>



		
		
	</body>
</html>