<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="icon" href="<?php echo base_url('assets/img/cologo.png'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>" />+
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css//bootstrap-theme.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); ?>" >
	<link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'); ?>" rel="stylesheet" id="bootstrap-css" />
	<link rel="stylesheet" href="<?php echo base_url('netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'); ?>" rel="stylesheet" />
	<title>Pet Lovers Community | Register</title>
    </head>
	<style type="text/css">
		.error { color: red; font: 10px Tahoma; }
	</style>

	<!--Body-->
	<body>
	<nav class="navbar navbar-custom" style="background-color: 353535;">

    <div class="container" id="homelogo">
	<div class="logo_container">
		<span class="logo_helper"></span>
			<a href="<?php echo base_url('home'); ?>">
				<img src="<?php echo base_url('assets/img/logo.jpg'); ?>"   alt="Pet Lovers Community" id="logo" width="500" /></a>
	</div>
	</div>
	</nav>
	<div class="container body">
        <div class="row">
		<?php echo form_open('register/index');?>
            <div class="col-md-8 col-md-offset-2">
				<form>
				<legend>Account Details</legend>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="first_name" placeholder="Enter First Name Here.." class="form-control">
                <?=isset($errors)?form_error('first_name','<div class="error">','</div>'):''?>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="last_name" placeholder="Enter Last Name Here.." class="form-control">
                <?=isset($errors)?form_error('last_name','<div class="error">','</div>'):''?>
							</div>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
              <?=isset($errors)?form_error('address','<div class="error">','</div>'):''?>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>City</label>
								<input name="city" type="text" placeholder="Enter City Name Here.." class="form-control">
                <?=isset($errors)?form_error('city','<div class="error">','</div>'):''?>
							</div>
							<div class="col-sm-6 form-group">
								<label>State</label>
								<input name="state" type="text" placeholder="Enter State Name Here.." class="form-control">
                <?=isset($errors)?form_error('state','<div class="error">','</div>'):''?>
							</div>
						</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input name="number" type="text" placeholder="Enter Phone Number Here.." class="form-control">
            <?=isset($errors)?form_error('number','<div class="error">','</div>'):''?>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input name="username" type="text" placeholder="Enter Username Here.." class="form-control">
            <?=isset($errors)?form_error('username','<div class="error">','</div>'):''?>
					</div>
          <div class="form-group">
						<label>Password</label>
						<input name="password" type="password" placeholder="Enter Password Here.." class="form-control">
            <?=isset($errors)?form_error('password','<div class="error">','</div>'):''?>
					</div>
					<button class="btn-submit" type="submit">Submit</button>
					</div>
				</form>
            </div>
        </div>
 	</div>
<!--Javascript-->
<!--Local Javascript-->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/npm.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!--From net Javascript-->
	<script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'); ?> " /></script>
	<script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'); ?>" /></script>
	<script src="<?php echo base_url ('https://code.jquery.com/jquery-3.2.1.slim.min.js'); ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" /></script>
    <script src="<?php echo base_url ('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'); ?>" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" /></script>
	<script src="<?php echo base_url ('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'); ?>"/></script>


  </body>
</html>
