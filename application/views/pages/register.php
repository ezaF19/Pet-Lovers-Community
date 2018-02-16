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
	<div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="#">

                    <legend class="text-center">Register</legend>

                    <fieldset>
                        <legend>Account Details</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control" name="" id="first_name" placeholder="First Name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="" placeholder="Last Name">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="" id="" placeholder="Email">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="" id="password" placeholder="Password">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" name="" id="confirm_password" placeholder="Confirm Password">
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="">
                                    I accept the <a href="#">terms and conditions</a>.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 	</div>
	</body>
</html>