
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<DOCTYPE html>

<html>
	<head>
		<title> Login Page </title>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css"/>

		<style>
			
		</style>
	</head>

	<body>
		
		
		<section class="container">
	    <div class="login">
	      <h1>Login to HCC</h1>
	      <p><?php echo validation_errors(); ?></p>
	      <?php echo form_open('verifylogin');?>
	        <p><input type="text" name="username" value="" placeholder="Username"></p>
	        <p><input type="password" name="password" value="" placeholder="Password"></p>
	        <p class="submit"><input type="submit" name="commit" value="Login"></p>
	      </form>
	    </div>

	    <div class="login-help">
	      <p>Forgot your password? <a href='index.php/Welcome/forgot'>Click here to reset it</a>.</p>
	    </div>
	    <div class="login-help">
	      <p>New user? <a href='index.php/Welcome/newreg'>Click here to make a account</a>.</p>
	    </div>
	  </section>
	 </body>
</html>

