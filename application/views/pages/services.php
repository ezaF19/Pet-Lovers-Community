<!DOCTYPE html>
	<title>Pet Lovers Community | Services</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/community.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
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
              <li><a href="<?php echo base_url('foradopt');?>">For Adoption</a></li>
              <li class="active"><a href="<?php echo base_url('services');?>">Services</a></li>              
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
					<a href="#" class="btn btn-primary btn-sm icon-heart" role="button">Share on Facebook</a>
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

  
  </body>
</html>