<!doctype html>
<html lang="en">
  <head>
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
	<link rel="icon" href="../../assets/img/cologo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style type="text/css">
   body { background: #EEEBE9; font-family: segoe ui;} 
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
				<a href="#">
					<img src="../../assets/img/cologo.png"   alt="Pet Lovers Community" id="logo" width="50" height="50" />
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
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
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
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					 </div>
					</li>
				</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#">Home</a></li>
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
	
	<!--End of NavBar-->
	
	<!--Start-->
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
               <div class="post">
                 <h2 class="post-text-title">Post</h2>
                   <!-- <div class="content-widget-sidebar"> -->
                    <ul>
                     <p class="post-text">No Recent Post </p>                      
                         
                        
					<!-- </div> -->
				</div>
</div>

</div>				
		
 <!-- /container -->  

	<!--End of Profile-->
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
	<!--End of Footer

	<!--Sub-floor-->
      <div class="footer-copyright copyright">
        <div class="container-fluid copyright">
             Copyright ©2018 petloverscommunity.com All rights reserved
         </div>
      </div>  
	
	<script type="text/javascript" src="../../assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../../assets/js/script.js"></script>
  </body>
</html>