<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css"/>
	<style>
	body{
		
	}
	</style>
</head>
<body>


<section class="container">
	    <div class="login">
	      <h1>Login to HCC</h1>
	       <p>Your password is:<?php echo $password;?></p>
	      </div>
	     
	      <div class="login-help">
	      <p>Do you want to login <a href='<?php echo base_url();?>'>Click here to Login</a>.</p>
	    </div>
	   </section>
</body>
</html>