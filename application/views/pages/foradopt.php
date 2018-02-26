<!DOCTYPE html>
<html lang="en">
    <head>


	<title>Pet Lovers Community</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/community.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css//bootstrap-theme.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); ?>" >
	<link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); ?>" />
	<script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'); ?> " /></script>
	<script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'); ?>" /></script>
	<script src="<?php echo base_url ('https://code.jquery.com/jquery-3.2.1.slim.min.js'); ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" /></script>
    <script src="<?php echo base_url ('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'); ?>" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" /></script>
	<script src="<?php echo base_url ('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'); ?>"/></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

	<link rel="icon" href="<?php echo base_url('assets/img/cologo.png'); ?>" />
	
	  
	<!--JavaScript-->
	

    </head>
	<style type="text/css">
		<!--body { ; font-family: segoe ui; } -->
	</style>
	
<body>

	<!--Navbar and Header-->
	<nav class="navbar navbar-custom" style="background-color: #353535;">
        <div class="container">		
		    <div class="navbar-header ">		.
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MainMenu">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span><a>MENU</a>
		      </button>		
			</div>
        <div class="collapse navbar-collapse" id="MainMenu"> 
            <ul class="nav navbar-nav menu-list">
                <li class="dropdown list-adoptapet">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>  
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li><a href="<?php echo base_url('pnames');?>"/ >Name</a></li>
                        <li><a href="<?php echo base_url('ptype');?>"/ >Pet type</a></li>
                        <li><a href="<?php echo base_url('recent');?>"/ >Recently Post</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url('adoptall');?>"/ >View all</a></li>
                    </ul>
                </li>
                <li class="dropdown list-services">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Services <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>  
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li><a href="<?php echo base_url('veterinary');?>" />Veterinary</a></li>
                        <li><a href="<?php echo base_url('training');?>" />Training</a></li>
                        <li><a href="<?php echo base_url('grooming');?>" />Grooming</a></li>
                        <li><a href="<?php echo base_url('petsitting');?>" />Pet Sitting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url('viewall');?>" />View all</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('meetbreed');?>" />Meet N' Breed</a></li>
                <li><a href="<?php echo base_url('community');?>" />Community</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b></a>
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
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required />
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required />
                                             <div class="help-block text-right"><a href="forget.html"><b>Forget the password ?</b></a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="<?php echo base_url('register'); ?>" ><b>Join Us</b></a>
							</div>
					 </div>
					</li>
				</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('home'); ?>">Home</a></li>
				<li><a href="<?php echo base_url('donations'); ?>" >Donations</a></li>
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
	
	<!-- End of Navbar and Header-->
	

	<!--Body-->
	<div class="sidebar-section">
	<div class="container-fluid">
	<div class="container">
	<div class="row">
	    <div class="sidenav col-md-2  sidebar-box">
	        <ul class="list-links">
              <li><a href="<?php echo base_url('community');?>">Featured</a></li>
              <li><a href="<?php echo base_url('recent');?>">Fresh</a></li>
              <li><a href="<?php echo base_url('itemsales');?>">Item Sales</a></li>
              <li class="active"><a href="<?php echo base_url('foradopt');?>">For Adoption</a></li>
              <li><a href="<?php echo base_url('services');?>">Services</a></li>              
			</ul>
	    </div>
	<div class="container col-lg-10">
	<div class="row">	

		<div class="col-sm-10">			
			<div class="panel panel-default panel-front">					
				<div class="panel-heading">				
					<h4 class="panel-title"><a HREF="#"><img src="https://i.imgur.com/UuosGKL.jpg"></a></h4>					
				</div>				
				<div class="panel-body">				
					<h4>Pulp Fiction</h4>				
					Yeah, I like animals better than people sometimes... Especially dogs. Dogs are the best. Every time you come home, they act like they haven't seen you in a year.				  
				<div class="text-right">
					<a href="#" class="btn btn-primary btn-sm" role="button">Share on Facebook</a>
					<a href="#" class="btn btn-info btn-sm" role="button">Share on Twitter</a>
				</div>					
				</div>
			</div>				
		</div>		
		<div class="col-sm-10">     
		</div>		
	</div>	
	<div class="row">	

		<div class="col-sm-10">			
			<div class="panel panel-default panel-front">					
				<div class="panel-heading">				
					<h4 class="panel-title"><a HREF="#"><img src="https://i.imgur.com/UuosGKL.jpg"></a></h4>					
				</div>				
				<div class="panel-body">				
					<h4>Pulp Fiction</h4>				
					Yeah, I like animals better than people sometimes... Especially dogs. Dogs are the best. Every time you come home, they act like they haven't seen you in a year.				  
				<div class="text-right">
					<a href="#" class="btn btn-primary btn-sm" role="button">Share on Facebook</a>
					<a href="#" class="btn btn-info btn-sm" role="button">Share on Twitter</a>
				</div>					
				</div>
			</div>				
		</div>		
		<div class="col-sm-10">     
		</div>		
	</div>	
	<div class="row">	

		<div class="col-sm-10">			
			<div class="panel panel-default panel-front">					
				<div class="panel-heading">				
					<h4 class="panel-title"><a HREF="#"><img src="https://i.imgur.com/UuosGKL.jpg"></a></h4>					
				</div>				
				<div class="panel-body">				
					<h4>Pulp Fiction</h4>				
					Yeah, I like animals better than people sometimes... Especially dogs. Dogs are the best. Every time you come home, they act like they haven't seen you in a year.				  
				<div class="text-right">
					<a href="#" class="btn btn-primary btn-sm" role="button">Share on Facebook</a>
					<a href="#" class="btn btn-info btn-sm" role="button">Share on Twitter</a>
				</div>					
				</div>
			</div>				
		</div>		
		<div class="col-sm-10">     
		</div>		
	</div>		

	</div>	
	</div>
	</div>
	</div>
	</div>

	<!--End of Body-->		
	
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
        <div class="container copyright">
             Copyright ©2018 petloverscommunity.com All rights reserved
         </div>
      </div> 
  
  </body>
</html>