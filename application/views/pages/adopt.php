<!doctype html>
<html lang="en">
   <head>
    <?php $user = $this->session->userdata('username'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/homepage.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Pet Lovers Community</title>
	<link rel="icon" href="assets/img/cologo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
   body { background: #EEEBE9; font-family: segoe ui; }
</style>
  </head>
 
<body>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!--NavBar-->
<nav class="navbar navbar-custom" style="background-color:#D2691E ;">
 <div class="container" id="MainMenu">
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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right    ">
        <li class="DashUserDropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #101010"><?php echo $user; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> Profile </span></a></li>
            <li class="divider"></li>
            <li><a href="#"> My Posts </span></a></li>
			<li><a href="#"> My Donations </span></a></li>
            <li class="divider"></li>
            <li><a href="#"> Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#"> Favorite Posts </span></a></li>
			<li><a href="#"> Recent Activities </span></a></li>
            <li class="divider"></li>
			<li><a href="#"> Help</span></a></li>
			<li><a href="#"> Settings</span></a></li>
            <li><a href='<?php echo base_url(); ?>logout'> Log Out</span></a></li>
          </ul>
        </li>
      </ul>
	<ul class="nav navbar-nav navbar-right">
            
		<li><a href="home" style="color:#101010;">HOME</a></li>
                <li><a href="donation" style="color:#101010;">DONATIONS</a></li>
	</ul>
         <form id="mega-search" class="navbar-form navbar-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..."/>
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
    <div class="container container-fluid">
	<div class="logo_container col-sm-6">
		<span class="logo_helper"></span>
			<a href="<?php echo base_url();?>">
				<img src="assets/img/logo.png"   alt="Pet Lovers Community" id="logo" width="500" /></a>
	</div>
	    <div class="col-sm-3">
            <h4 class="title">Call Us</h4>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>09123456789</a></span>
            <h4 class="title">Email Us</h4>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>plc@gmail.com</a></span>
        </div>
		<div class="col-sm-3">
            <h4 class="title">Follow Us</h4>
            <ul class="social-icon" style="font-size: 36px;">
                <a href="https://www.facebook.com/petloverscommunity" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com/petloverscommunity" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/petloverscommunity" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/plc" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
            </ul>
        </div>
	</div>
	<nav class="container-fluid" style="background-color:#D2691E; padding: 20px;">
            <div class="col-md-3"></div>
            <div class="container-fluid col-md-6">
                <h4 class="text-danger" style="color:#101010; font-family: cursive">"If there's a cause WORTH FIGHTING for, it's this PETS belong in FAMILIES"</h4>
            </div>
            <div class="col-md-3"></div>
        </nav>

	<!--Body-->
        <div class="container container-liquid" style="background-color:#F4A460; padding:100px;">
            <div class="col-sm-1"></div>
            <div class="row">
            <div style=" border-radius: 15px 50px; background: #73AD21; padding: 20px; width: 200px; height: 150px;  ;" class="col-sm-3">
            </div>
            </div>
        </div>
        
        
	

	<!--End of Body-->

	<!--Footer-->

	<footer class="footer">
    <div class="container container-liquid">
        <div class="row">
        <div class="col-sm-3">
            <h2 class="title">Follow Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            <ul class="social-icon">
                <a href="#" class="social"><i class="fa fa-facebook fa-fw" aria-hidden="true" style="color: #3b5998;"></i></a>
                <a href="#" class="social"><i class="fa fa-twitter fa-fw" aria-hidden="true" style="color: #00aced;"></i></a>
                <a href="#" class="social"><i class="fa fa-instagram fa-fw" aria-hidden="true" style="color: #fb3958;"></i></a>
                <a href="#" class="social"><i class="fa fa-google fa-fw" aria-hidden="true" style="color: #c71610;"></i></a>
            </ul>
        </div>
        <div class="col-sm-3">
            <h2 class="title">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
        </div>
        <div class="col-sm-3">
            <h2 class="title">Category</h2>
            <div class="category">
                <a href="#" class="btn btn-change" role="button" style="color: #FB7E09;">Cat</a>
                <a href="#" class="btn btn-change" role="button" style="color: #FB7E09;">Dog</a>
            </div>
        </div>
        <div class="col-sm-3">
            <h2 class="title">Contact Us</h2>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-address-book fa-fw" aria-hidden="true" style="color:#32CD32;"></i>09123456789</a>
			<a href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true" style="color:#c71610;"></i>plc@gmail.com</a>
        </div>
        </div>

    </div>
	</footer>

	<!--Sub-floor-->
      <div id="sub-floor">
        <div class="container-liquid" style="background-color: black; color:#FB7E09;">
             Copyright ©2018 petloverscommunity.com All rights reserved
         </div>
      </div>

	<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
  </body>
</html>
