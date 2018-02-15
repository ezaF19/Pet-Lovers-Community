<!doctype html>
<html lang="en">
  <head>
  	<style type="text/css">
  	.error { color: red; font: 5px Tahoma; }
  	</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/register.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Pet Lovers Community</title>
	<link rel="icon" href="assets/img/cologo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style type="text/css">
   body { background: url('assets/img/backpets.jpg') center; font-family: segoe ui; }
</style>
<body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!--NavBar-->
		<nav class="navbar navbar-custom mega-nav" style="background-color: #FB7E09;">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" style="background-color: white;" data-toggle="collapse" data-target="#MainMenu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span> Menu
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="MainMenu">
			<ul class="nav navbar-nav navbar-left">
				<a href="<?php echo base_url();?>">
					<img src="assets/img/cologo.png"   alt="Pet Lovers Community" id="logo" width="50" height="50" />
				</a>
			</ul>
            <ul class="nav navbar-nav menu-list">

                <li class="dropdown list-adoptapet">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li><a href="#">Name</a></li>
                        <li><a href="#">Pet type</a></li>
                        <li><a href="#">Recently Post</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">View all</a></li>
                    </ul>
                </li>
                <li class="dropdown list-services">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Services <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li><a href="#">Veterinary</a></li>
                        <li><a href="#">Training</a></li>
                        <li><a href="#">Grooming</a></li>
                        <li><a href="#">Pet Sitting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">View all</a></li>
                    </ul>
                </li>
                <li><a href="#">Meet N' Breed</a></li>
                <li><a href="#">Community</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b></a>
				<ul id="login-dp" class="dropdown-menu">
					<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Username</label>
											 <input type="username" name="username" class="form-control" id="exampleInputEmail2" placeholder="Username" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="#">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
					 </div>
					</li>
				</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
				<li><a href="#">Donations</a></li>
			</ul>
            <form id="mega-search" class="navbar-form navbar-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        </div>
    </nav>


<!-- End of first navbar-->





	<!--Body-->

<div class="container body">
    <h2 class="well" id="register">Register</h2>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="register">
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


	<!--End of Body-->

	<!--Footer-->

	<footer class="footer panel-footer" style="border-top: 2px solid #666">
    <div class="container">
        <div class="row">
		 <div class="col-sm-3 category">
            <br/><h4><a href="#">About Us</a></h4>
            <h4><a href="#">Donate</a></h4>
        </div>
		 <div class="col-sm-3">
            <h4 class="title">Category</h4>
            <div class="category">
				<a href="#" class="btn btn-change" role="button">Cat</a>
				<a href="#" class="btn btn-change" role="button">Dog</a>
				<a href="#" class="btn btn-change" role="button">Other pets</a>
            </div>
        </div>
		<div class="col-sm-3">
            <h4 class="title">Contact Us</h4>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>09123456789</a>
			<a href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>plc@gmail.com</a>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Follow Us</h4>
            <ul class="social-icon">
                <a href="https://www.facebook.com/petloverscommunity" class="social"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com/petloverscommunity" class="social"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/petloverscommunity" class="social"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/plc" class="social"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>
            </ul>
        </div>

        </div>

    </div>
	</footer>
	<!--End of Footer-->

	<!--Sub-floor-->
      <div class="footer-copyright copyright">
        <div class="container-fluid copyright">
             Copyright ©2018 petloverscommunity.com All rights reserved
         </div>
      </div>



	<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
  </body>
</html>
