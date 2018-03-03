<!DOCTYPE html>
	<title>Pet Lovers Community</title>
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
                        <li><a href="<?php echo base_url('pnames');?>"/ >Adopt a Dog</a></li>
                        <li><a href="<?php echo base_url('ptype');?>"/ >Adopt a Cat</a></li>
                        <li><a href="<?php echo base_url('recentpost');?>"/ >Others</a></li>
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
				<li><a href="<?php echo base_url('donations'); ?>">Donations</a></li>
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
	
    <div class="container navcont">
	<div class="logo_container">
		<span class="logo_helper"></span>
			<a href="<?php echo base_url('home'); ?>">
				<img src="<?php echo base_url('assets/img/logo.jpg'); ?>"   alt="Pet Lovers Community" id="logo" width="500" /></a>
	</div>
	</div>
	<!--Body-->

	<div id="contbody1">
	<div class="container">
		<div class="container textbody" style="background-color: rgba(255,145,0,0.4);"> 
			<h1 class="title"> Make a Difference - Adopt</h1>
			<p class="lead"> Open your heart and your home to pet that needs your help. They will show their appreciation for the rest of their lives and you will gain a friend that you'll never forget!</p>
			<a href="#" class="btn btn-learn" role="button">LEARN MORE</a>
		</div>
	</div>
	</div>
	<div id="contbody2">
		<div class="container-fluid">
          <h3><strong> FEATURED PET</strong></h3>
		</div>		
	</div>	
	
<!--FeaturedPet-->
	<div class="featured">
		<div class="profile"><img src="<?php echo base_url('assets/img/Rengar.jpg'); ?>" alt="cat"/></div>
		<div class="info">
		<div class="bio btn">
		<div class="head">
			<a href="types.html">Type of Pet</a>
		</div>
		</div>
		<h1><em>Rengar</em></h1>
		<p class="bio-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper non nunc sit amet feugiat. Nam mollis laoreet velit a vulputate. Cras dignissim imperdiet justo ac tincidunt. Nam sagittis suscipit tellus, sit amet convallis neque fringilla vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio tortor, gravida ac viverra vitae, suscipit ac libero. Proin ullamcorper risus a turpis porta lobortis nec sed lorem. </p>
		<button class="btn-bio">Full Bio</button>
		</div>
	</div>		
<!--End of FeaturedPet-->	
	<div class="container" id="contbody4">
		<div class="col-xs-5 col-md-7">
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper non nunc sit amet feugiat. Nam mollis laoreet velit a vulputate. Cras dignissim imperdiet justo ac tincidunt. Nam sagittis suscipit tellus, sit amet convallis neque fringilla vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio tortor, gravida ac viverra vitae, suscipit ac libero. Proin ullamcorper risus a turpis porta lobortis nec sed lorem. Sed nec pulvinar lacus. Morbi euismod scelerisque accumsan. Vestibulum pretium ut tellus at feugiat. Pellentesque venenatis sem quis tellus rhoncus lacinia. Etiam ultrices turpis et eros eleifend, vel molestie tortor ornare.</p>
		</div>
		<div class="col-xs-11 col-md-1">
			<img src="<?php echo base_url('assets/img/paws.png'); ?>" alt="Paws" id="logo" width="320" height="320"/></a>
		</div>
	</div>	
	<!--End of Body-->		 
  </body>
</html>