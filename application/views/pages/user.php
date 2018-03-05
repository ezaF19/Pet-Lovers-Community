<!DOCTYPE html>
<html lang="en">
    <head>

	<title>Pet Lovers Community</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" />	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/user.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); ?>" >
	<link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css'); ?> "/>
	<link rel="stylesheet" href="<?php echo base_url('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'); ?>">
	<script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'); ?> " /></script>
	<script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'); ?>" /></script>
	<script src="<?php echo base_url ('https://code.jquery.com/jquery-3.2.1.slim.min.js'); ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" /></script>
    <script src="<?php echo base_url ('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'); ?>" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" /></script>
	<script src="<?php echo base_url ('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'); ?>"/></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<link rel="icon" href="<?php echo base_url('assets/img/cologo.png'); ?>" />
	
    </head>
	<style type="text/css">
		<!--body { ; font-family: segoe ui; } -->
	</style>
<body>

	<!--NavBar-->

	<nav class="navbar navbar-custom" style="background-color: #353535;">
        <div class="container">
        <div class="collapse navbar-collapse" id="MainMenu"> 
            <ul class="nav navbar-nav menu-list">
                <li class="dropdown list-adoptapet">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>  
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li><a href="names.html">Name</a></li>
                        <li><a href="types.html">Pet type</a></li>
                        <li><a href="recent.html">Recently Post</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="adoptall.html">View all</a></li>
                    </ul>
                </li>
                <li class="dropdown list-services">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Services <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>  
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li><a href="veterinary.html">Veterinary</a></li>
                        <li><a href="training.html">Training</a></li>
                        <li><a href="grooming.html">Grooming</a></li>
                        <li><a href="petsitting.html">Pet Sitting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="serviceall.html">View all</a></li>
                    </ul>
                </li>
                <li><a href="meetbreed.html">Meet N' Breed</a></li>
                <li><a href="community.html">Community</a></li>
            </ul>	
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="<?php echo base_url('home'); ?>">Home</a></li>
				<li><a href="<?php echo base_url('donations'); ?>">Donations</a></li>
				 <li class="dropdown list-profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Name <div class="img-rounded profile-img"></div></i>
                    </a>  
                    <ul class="dropdown-menu mega-dropdown-menu">
                      <li><a href="<?php echo base_url('user');?>">My Profile</a></li>
						<li role="separator" class="divider"></li>
                        <li><a href="">My Posts</a></li>
                        <li><a href="">Donations</a></li>
                        <li><a href="">Notifications</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">Activity Log</a></li>
						<li><a href="">Settings</a></li>
						<li><a href="<?php echo base_url('home');?>">Sign Out</a></li>
					</ul>
                </li>
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


	<div class="container">
		<div class="plc-profile">
			<img align="left" class="plc-image-lg img-responsive" src="<?php echo base_url('assets/img/dog.jpg'); ?>"   alt="Pet Lovers Community" id="logo"/>
			<img align="left" class="plc-image-profile thumbnail img-circle" src="<?php echo base_url('assets/img/rengar.jpg'); ?>" alt="Profile image example"/>
			<div class="plc-profile-text">
				<h1>Rengar</h1>
				<p>WSWSWSWSWSWSWSWSWSWSW</p>
			<button type="button" class="btn btn-warning btn-xs">Edit Profile</button>						
			</div>
		</div>
	</div><br>
	<div class="container">
    <div class="row">
    	<div class="col-md-12 center">
            <div class="panel with-nav-tabs panel-warning">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1warning" data-toggle="tab">Posts</a></li>
                            <li><a href="#tab2warning" data-toggle="tab">Photos</a></li>
                            <li><a href="#tab3warning" data-toggle="tab">User Bio</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1warning">
							<div class="container">
								<div class="row">
									<div class="col-md-8" >
										<div class="panel panel-default text-right">
										<div class="panel-body text-center">
										<input type="post" class="form-control" placeholder="What are you up to?">
										</div>
										<div class="panel-footer">
   										<button type="button" class="btn btn-warning btn-md">Post</button>
										</div>
										</div>
										</div>
								</div>
							</div>
						</div>
                        <div class="tab-pane fade" id="tab2warning">
						<div class="container">
						<div class="row">
							<div class="gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6 filter hdpe">
							<img src="<?php echo base_url('assets/img/rengar.jpg'); ?>" class="img-responsive">
							</div>
							<div class="gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6 filter hdpe">
							<img src="<?php echo base_url('assets/img/rengar.jpg'); ?>" class="img-responsive">
							</div>
							<div class="gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6 filter hdpe">
							<img src="<?php echo base_url('assets/img/rengar.jpg'); ?>" class="img-responsive">
							</div>
														
						</div>
						</div>
						</div>
                        <div class="tab-pane fade" id="tab3warning">About/ Bio</div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<!--.container-->

<!--Footer-->
	<div class="container-fluid" id="footinfo">
    <footer class="container ">
	<div class="row foot">
		<div id="foot1" class="col-md-3 col-sm-3">
			<h3>Useful Links</h3>
		<h5 id="firstchild"><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"> <b>Contact Us</b></a></h5>
		<h5><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"> <b>About Us</b></a></h5>
		<h5><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"> <b>Terms & Conditions</b></a></h5>
		<h5><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"> <b>Private Policy</b></a></h5>
		</div>
		<div id="foot2" class="col-md-3 col-sm-3">
			<h3>Customer Services</h3>
		<h5 id="firstchild"><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"> <b>Customer Support</b></a></h5>
		<h5><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"> <b>Adoption</b></a></h5>
		<h5><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"><b> Register</b></a></h5>
		<h5 style="border-bottom:0px;"><span class="glyphicon glyphicon-chevron-right"></span><a href="#" class="text-muted"><b> Donate</b></a></h5>
		</div>
		<div id="foot3" class="col-md-3 col-sm-3">
			<h3>Address</h3>
		<h4 class="text-muted">
		Phone Number: 0912 345 6789<br>
		E-mail: plc@yahoo.com</h4>
		</div>
		<div id="foot3" class="col-md-3 col-sm-3">
			<h3>Follow Us</h3>
		<h5 id="firstchild"><a href="#" class="text-muted"> <b>Facebook</b></a></h5>
		<h5><a href="#" class="text-muted"> <b>Twitter</b></a></h5>
		<h5><a href="#" class="text-muted"> <b>Instagram</b></a></h5>
		<h5><a href="#" class="text-muted"> <b>Google</b></a></h5>
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
</div>	  


	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
  </body>
</html>