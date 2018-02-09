<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/user.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Pet Lovers Community</title>
	<link rel="icon" href="img/PLC.jpg"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!--NavBar-->

<nav class="navbar navbar-custom" style="background-color: #A9A9A9;">
  <div class="container">

	<p class="navbar-text" style="color: #ECECEC;">EVERY PET DESERVES A HOME, BUT NOT EVERY HOME DESERVES A PET</p>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="DashUserDropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $username; ?> <span class="caret"></span></a>
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
            <li><a href="#"> Log Out</span></a></li>
          </ul>
        </li>
      </ul>
	<ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="#">HOME</a></li>
		<li><a href="#">DONATIONS</a></li>
	</ul>
    </div>
  </div>
 </nav>


    <div class="container" style="background-color: white;">
	<div class="logo_container col-sm-7">
		<span class="logo_helper"></span>
			<a href="#">
				<img src="https://paawarren.org/media/paaw-logo-header.png"  alt="Pet Adoption Alternative of Warren (PAAW) - Pet Rescue Organization - Michigan" id="logo" data-height-percentage="40"  /></a>
	</div>
	    <div class="col-sm-2">
            <h4 class="title">Call Us</h4>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>09123456789</a>
			<h4 class="title">Email Us</h4>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>plc@gmail.com</a>
        </div>
		<div class="col-sm-3">
            <h4 class="title">Follow Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            <ul class="social-icon">
                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
            </ul>
        </div>
	</div>
 <nav class="navbar navbar-custom" style="background-color: #F87C09;">
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
				<li><a href="#">VETERINARY</a></li>
				<li><a href="#">TRAINING</a></li>
				<li><a href="#">GROOMING</a></li>
				<li><a href="#">PET SITTING</a></li>
			</ul>
		</li>
		<li><a href="#">MEET N' BREED</a></li>
		<li><a href="#">COMMUNITY</a></li>
		</ul>
		<form class="navbar-form navbar-right" action="/action_page.php">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-user"></span></button>
		</form>
	</div>
	</div>
</nav>
	<!--End of NavBar-->

	<!--Start-->

	<!--End of Profile-->
	<footer class="footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <h4 class="title">Follow Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            <ul class="social-icon">
                <a href="#" class="social"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-sm-3">
            <h4 class="title">About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Category</h4>
            <div class="category">
                <a href="#">Cat</a>
                <a href="#">Dog</a>
                <a href="#">Bird</a>
                <a href="#">Lion</a>
                <a href="#">Tigers</a>
                <a href="#">Bear</a>
                <a href="#">Panda</a>
                <a href="#">Shark</a>
                <a href="#">Spider</a>
            </div>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Contact Us</h4>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>09123456789</a>
			<a href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>plc@gmail.com</a>
        </div>
        </div>

    </div>
	</footer>

	<!--Sub-floor-->
      <div id="sub-floor">
        <div class="container">
             Copyright ©2018 petloverscommunity.com All rights reserved
         </div>
      </div>

  </body>
</html>
