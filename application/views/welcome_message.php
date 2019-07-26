<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>student portal</title>

    
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>

 
    <div id="myNavbar" class="navbar navbar-default navbar-fixed-top " role="navigation">
	<div class="container">
	<h1>DANBO SIXTHFORM</h1>
	</div>
	</div>
	<!---End navigation-->
	<!--Header-->
	<div id="header" class="header">
	<div class="container">
	<div class="row">
	<div class="col-lg-6 col-md-6" >
	<h1>Student Portal</h1>
	</div>
	<!--RIGHT SIDE-->
	<div class="col-lg-6 col-md-6">
	<div class="panel panel-primary">
  <div class="panel-heading">Login</div>
  <div class="panel-body">
  <div class="col-sm-1">
  </div>
  <div class="col-sm-10">

  	<form method="post" action="<?php echo base_url();?>index.php/Welcome/login">
  	<div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
    <span class="text-danger"><?php echo form_error('username'); ?></span>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pin</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="PIN">
    <span class="text-danger"><?php echo form_error('password'); ?></span>
    
  </div>
<p></p>
  <input type="submit" name="submit" value="Login" class="btn btn-danger"/>
  <span class="text-danger"><?php if(isset($error_message)) {echo $error_message;} ?></span>
</form>

 
</div>
 <div class="col-sm-1">
  </div>
  </div>
</div>
	</div>
	</div>
	</div>
	</div>
	<!----------- end header---------->
 
	
	
	
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
