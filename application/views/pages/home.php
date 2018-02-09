<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Pet Lovers Community</title>
	<link rel="icon" href="assets/img/logo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style type="text/css">
   body { background: #EEEBE9; }
</style>
<body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!--NavBar-->

<nav class="navbar navbar-custom" style="background-color: #FF8C00;">
  <div class="container">
	<p class="navbar-text" style="color: black;"><em>EVERY PET DESERVES A HOME, BUT NOT EVERY HOME DESERVES A PET</em></p>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown"><b>LOGIN</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" name="em_add" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" name="pass" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
                      <?php echo form_open('login/index'); ?>
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> Keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="<?php echo base_url(); ?>register"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
	<ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="<?php echo base_url(); ?>">HOME</a></li>
		<li><a href=" ">DONATIONS</a></li>
	</ul>
    </div>
  </div>
 </nav>


    <div class="container navcont">
	<div class="logo_container col-sm-6">
		<span class="logo_helper"></span>
			<a href="<?php echo base_url(); ?>">
				<img src="assets/img/logo.png"   alt="Pet Lovers Community" id="logo" width="500" /></a>
	</div>
	    <div class="col-sm-3">
            <h4 class="title">Call Us</h4>
			<span class="acount-icon">
			<a href=" "><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>09123456789</a>
			<h4 class="title">Email Us</h4>
			<span class="acount-icon">
			<a href=" "><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>plc@gmail.com</a>
        </div>
		<div class="col-sm-3">
            <h4 class="title">&emsp; Follow Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            <ul class="social-icon">
                <a href=" " class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href=" " class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=" " class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href=" " class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
            </ul>
        </div>
	</div>
 <nav class="navbar navbar-custom" style="background-color: #FB7E09;">
	<div class="container">
		<ul class="nav navbar-nav">
			<li class="dropdown1">
			<a class="dropdown-toggle" data-toggle="dropdown" href="">ADOPT A PET
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="">Name</a></li>
			</ul>
			</li>
		<li class="dropdown2">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">SERVICES
        <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href=" ">VETERINARY</a></li>
				<li><a href=" ">TRAINING</a></li>
				<li><a href=" ">GROOMING</a></li>
				<li><a href=" ">PET SITTING</a></li>
			</ul>
		</li>
		<li><a href=" ">MEET N' BREED</a></li>
		<li><a href=" ">COMMUNITY</a></li>
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

	<!--Body-->

	<div id="contbody1">
	<div class="container contbody1">
		<div class="col-sm-5">
			<div class="container cont1"><span class="border">
				<img src="assets/img/dogcat.jpg" class="img-thumbnail" alt="DogCat" width="330" height="330">
			</div>
		</div>
		<div class="col-sm-7">
			<div class="container textbody" style="background-color: #FF8C00;">
				<h1 class="title"> Make a Difference - Adopt</h1>
				<p class="lead"> Open your heart and your home to pet that needs your help. They will show their appreciation for the rest of their lives and you will gain a friend that you'll never forget!</p>
			</div>
		</div>
	</div>
	</div>

	<div id="contbody2">
		<div class="container feat">
          <p class="lead"> FEATURED PET</p>
		</div>
	</div>


<div class="contbody3">
  <div class="box">
    <div class="profile"><img src="assets/img/Rengar.jpg" alt="cat"/></div>
    <div class="info">
      <div class="bio btn">
        <div class="head"><a href=" ">Type of Pet</a></div>
      </div>
      <h1><em>Rengar</em></h1>
      <p class="bio-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper non nunc sit amet feugiat. Nam mollis laoreet velit a vulputate. Cras dignissim imperdiet justo ac tincidunt. Nam sagittis suscipit tellus, sit amet convallis neque fringilla vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio tortor, gravida ac viverra vitae, suscipit ac libero. Proin ullamcorper risus a turpis porta lobortis nec sed lorem. </p><button class="btn-bio">Full Bio</button>
    </div>
  </div>
</div>


	<div id="contbody4">
	<div class="container">
		<div class="textbody3 col-sm-8">
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper non nunc sit amet feugiat. Nam mollis laoreet velit a vulputate. Cras dignissim imperdiet justo ac tincidunt. Nam sagittis suscipit tellus, sit amet convallis neque fringilla vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio tortor, gravida ac viverra vitae, suscipit ac libero. Proin ullamcorper risus a turpis porta lobortis nec sed lorem. Sed nec pulvinar lacus. Morbi euismod scelerisque accumsan. Vestibulum pretium ut tellus at feugiat. Pellentesque venenatis sem quis tellus rhoncus lacinia. Etiam ultrices turpis et eros eleifend, vel molestie tortor ornare.</p>
		</div>
		<div class="col-sm-4">
			<div class="container cont">
				<img src="assets/img/paws.png" alt="Paws" id="logo" width="330" height="330"/></a>
			</div>
		</div>
	</div>
	</div>
	<!--End of Body-->




	<!--Footer-->
	<footer class="footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <h4 class="title">Follow Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            <ul class="social-icon">
                <a href=" " class="social"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
                <a href=" " class="social"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
                <a href=" " class="social"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a>
                <a href=" " class="social"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-sm-3">
            <h4 class="title">About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Category</h4>
            <div class="category">
                <a href=" ">Cat</a>
                <a href=" ">Dog</a>
                <a href=" ">Bird</a>
                <a href=" ">Lion</a>
                <a href=" ">Tigers</a>
                <a href=" ">Bear</a>
                <a href=" ">Panda</a>
                <a href=" ">Shark</a>
                <a href=" ">Spider</a>
            </div>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Contact Us</h4>
			<span class="acount-icon">
			<a href=" "><i class="fa fa-address-book fa-fw" aria-hidden="true"></i>09123456789</a>
			<a href=" "><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>plc@gmail.com</a>
        </div>
        </div>

    </div>
	</footer>
	<!--End of Footer-->

	<!--Sub-floor-->
      <div id="sub-floor">
        <div class="container">
             Copyright ©2018 petloverscommunity.com All rights reserved
         </div>
      </div>
  </body>
</html>
