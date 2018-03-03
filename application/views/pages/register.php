<!DOCTYPE html>
<html lang="en">
    <head>


	<title>Pet Lovers Community</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css//bootstrap-theme.css'); ?>" />
	<link rel="icon" href="<?php echo base_url('assets/img/cologo.png'); ?>" />


    </head>
	<style type="text/css">
		.error { color: red; font: 10px Tahoma; }
		<!--body { ; font-family: segoe ui; } -->
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
						<input name="password" type="text" placeholder="Enter Password Here.." class="form-control">
            <?=isset($errors)?form_error('password','<div class="error">','</div>'):''?>
					</div>
					<button class="btn-submit" type="submit">Submit</button>
					</div>
				</form>
            </div>
        </div>
 	</div>
	</body>
</html>