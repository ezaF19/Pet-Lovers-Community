<<<<<<< HEAD
<<<<<<< HEAD
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
				<li><a href="<?php echo base_url('register'); ?>" data-target="#theModal" data-toggle="modal">Login</a></li>
				<div class="modal fade" id="theModal">
					<div class="modal-dialog">
						<div class="modal-content">
						</div>
					</div>
				</div>
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
			<button type="button" class="btn btn-warning btn-lg btn pull-right">Post</button>			
			</div>
		</div>
	</div>
	<div id="userbody">
	<div class="col-lg-4 col-sm-8">           
		<div class="user-bio">
		<h2 class="user-bio-text">User Bio</h2>
			<p class="bio-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper non nunc sit amet feugiat. Nam mollis laoreet velit a vulputate. Cras dignissim imperdiet justo ac tincidunt. Nam sagittis suscipit tellus, sit amet convallis neque fringilla vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio tortor, gravida ac viverra vitae, suscipit ac libero. Proin ullamcorper risus a turpis porta lobortis nec sed lorem. </p>                      
		</div>
	</div>
	<div class="col-lg-7 col-sm-6">           
        <div class="user-bio">
            <h2 class="user-bio-text">Post</h2>
			<p class="bio-text">No Recent Post </p>                      
		</div>
	</div>
	</div>

<div class="container">
    <div class="row">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="btn btn-default btn-arrow-left">‹</a>
                  <a data-slide="next" href="#Carousel" class="btn btn-default btn-arrow-right">›</a>
                </div><!--.Carousel-->
                 
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
=======
=======
>>>>>>> parent of 82e6095... Add files via upload
<!doctype html>
<html lang="en">
  <head>
	<?php $user = $this->session->userdata('username'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../../assets/css/homepage.css">
	<link rel="stylesheet" href="../../assets/css/user.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
    <title>Pet Lovers Community</title>
	<link rel="icon" href="../../assets/img/logo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style type="text/css">
   body { background: #EEEBE9; font-family: segoe ui; } 
</style>
<body>
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<!--NavBar-->

<div class="container-fluid">
<nav class="navbar navbar-custom" style="background-color: #FF8C00;">
  <div class="container">
	<p class="navbar-text header" style="color: black;">EVERY PET DESERVES A HOME, BUT NOT EVERY HOME DESERVES A PET</p>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php echo $user; ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Name</strong></p>
                                        <p class="text-left small">yourname@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Settings</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block"><a href='<?php echo base_url(); ?>logout'> Log Out</span></a></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
			
	<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="https://petloverscommunity/HOME/">HOME</a></li>
			<li><a href="https://petloverscommunity/DONATIONS/">DONATIONS</a></li>
	</ul>  
    </div>
  </div>
</nav> 
</div>
<!-- End of first navbar-->
<div class="container-fluid">	
    <div class="container navcont">
	<div class="logo_container col-sm-6">
		<span class="logo_helper"></span>
			<a href="https:/petloverscommunity.com">
				<img src="../../assets/img/logo.png"   alt="Pet Lovers Community" id="logo" width="500" /></a>
	</div>
	    <div class="col-sm-3">
            <h4 class="title">Call Us</h4>
			<span class="acount-icon"> 
			<a href="#"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>09123456789</a>
			<h4 class="title">Email Us</h4>
			<span class="acount-icon"> 
			<a href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>plc@gmail.com</a>
        </div>
		<div class="col-sm-3">
            <h4 class="title">&emsp; Follow Us</h4>
            <ul class="social-icon" style="font-size: 36px;">
                <a href="https://www.facebook.com/petloverscommunity" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com/petloverscommunity" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/petloverscommunity" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/plc" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
            </ul>
        </div>
	</div>	
 <nav class="navbar navbar-custom" style="background-color: #FB7E09;">
	<div class="container">
		<ul class="nav navbar-nav">
			<li class="dropdown1">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">ADOPT A PET
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Name</a></li>
			</ul>
			</li>
		<li class="dropdown2">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES
        <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="https://petloverscommunity/SERVICES/VETERINARY">VETERINARY</a></li>
				<li><a href="https://petloverscommunity/SERVICES/TRAINING">TRAINING</a></li>
				<li><a href="https://petloverscommunity/SERVICES/GROOMING">GROOMING</a></li>
				<li><a href="https://petloverscommunity/SERVICES/PET SITTING">PET SITTING</a></li>
			</ul>
		</li>
		<li><a href="https://petloverscommunity/MEET N' BREED">MEET N' BREED</a></li>
		<li><a href="https://petloverscommunity/COMMUNITY">COMMUNITY</a></li>
		</ul>
		<form class="navbar-form navbar-right" action="/action_page.php">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		</form>
	</div>
</nav>
</div>

<div class="container">
    <div class="plc-profile">
        <img align="left" class="plc-image-lg img-responsive" src="../../assets/img/dog.jpg"   alt="Pet Lovers Community" id="logo"/>
        <img align="left" class="plc-image-profile thumbnail img-circle" src="../../assets/img/rengar.jpg" alt="Profile image example"/>
        <div class="plc-profile-text">
            <h1>Rengar</h1>
            <p>WSWSWSWSWSWSWSWSWSWSW</p>
			<button type="button" class="btn btn-warning btn-xs">Edit Profile</button>
			<button type="button" class="btn btn-warning btn-lg btn pull-right">Post</button>			
        </div>
    </div>
</div>
<div id="contbody1">
 <div class="col-lg-4 col-sm-4">           
               <div class="user-bio">
                 <h2 class="user-bio-text">User Bio</h2>
                   <!-- <div class="content-widget-sidebar"> -->
                    <ul>
                     <p class="bio-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper non nunc sit amet feugiat. Nam mollis laoreet velit a vulputate. Cras dignissim imperdiet justo ac tincidunt. Nam sagittis suscipit tellus, sit amet convallis neque fringilla vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio tortor, gravida ac viverra vitae, suscipit ac libero. Proin ullamcorper risus a turpis porta lobortis nec sed lorem. </p>                      
                         
                        
					<!-- </div> -->
				</div>
</div>

 <div class="col-lg-8 col-sm-8">           
               <div class="user-bio">
                 <h2 class="user-bio-text">Post</h2>
                   <!-- <div class="content-widget-sidebar"> -->
                    <ul>
                     <p class="bio-text">No Recent Post </p>                      
                         
                        
					<!-- </div> -->
				</div>
</div>

</div>

    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li class="col-sm-3">
    						<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide2 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3">	
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="http://placehold.it/360x240" alt=""></a>
								</div>
								<div class="caption">
									<h4>Pet Name</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-mini" href="#">» Read More</a>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide3 --> 
        </div>
        
       
	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
			</ul>
		</nav>
	   <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
		
<!--Footer-->

<div class="container-fluid">
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
</div>	  


	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
  </body>

<<<<<<< HEAD
>>>>>>> parent of 82e6095... Add files via upload
=======
>>>>>>> parent of 82e6095... Add files via upload
</html>