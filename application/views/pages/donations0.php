<!DOCTYPE html>
<?php $user = $this->session->userdata('username');
		if($user == ''){
			redirect('donations');
		}
		else if($user == 'Mismatch!'){
			redirect('donations');
		}
		else{
			redirect('donations0?='.$user);
		}
	?>
	<title>Pet Lovers Community</title>
	</head>	
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <img id="nav-pic" class="navbar-brand" href="#page-top" src="assets/img/cologo.png" />
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home0');?>?=<?php echo $user;?>">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('featured0');?>?=<?php echo $user;?>">Featured Pets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('recent0');?>?=<?php echo $user;?>">Recent Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('itemsales0');?>?=<?php echo $user;?>">Item Sales</a>
            </li>          
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('adoptions0');?>?=<?php echo $user;?>">Adoptions</a>
            </li>
			
			<li class="nav-item">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="user"><?php echo $user;?></a>
			  <ul class="dropdown-menu">
			  <li><a class="dropdown-item"  style="color:black;" href="<?php echo base_url('user');?>">My Profile</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="">Donations</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Notifications</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Activity Log</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="">Settings</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="<?php echo base_url('');?>logout">Sign Out</a></li>
						</ul>
						
            </li>                 
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <section class="donatehead">
            <div class="donate-body">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class ="block">
	                        <h1 class="brand-heading" ><b>PET LOVERS COMMUNITY</b></h1>
	                        <p class="intro-text">"Open your heart and your home to pets that need your help. 
			  They will show their appreciation for the rest of their lives and you will gain a friend that you'll never forget!"</p>
	                    </div>
	                </div>
	            </div>
	        </div>
                </div><!-- .container close -->
	    </section>
    <!-- About Section -->
   