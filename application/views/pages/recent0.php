<!DOCTYPE html>
<?php $user = $this->session->userdata('username');
		if($user == ''){
			redirect('recent');
		}
		if($user == 'Mismatch!'){
			redirect('recent');
		}
	?>
	<title>Pet Lovers Community</title>
	</head>	
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <img id="nav-pic" class="navbar-brand" href="#page-top" src="assets/img/cologo.png" />
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home0'); ?>?=<?php echo $user; ?>">Pet Lovers Community</a>
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
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('itemsales0');?>?=<?php echo $user;?>">Item Sales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('adoptions0');?>?=<?php echo $user;?>">Adoptions</a>
            </li>          
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('donations0');?>?=<?php echo $user;?>">Donations</a>
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
            </li>            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <section class="rechead">
            <div class="rec-body">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class ="block">
	                        <h1 class="brand-heading" ><b>PET LOVERS COMMUNITY</b></h1>
	                        <p class="intro-text">"RECENT POSTS"</p>
	                    </div>
	                </div>
	            </div>
	        </div>
                </div><!-- .container close -->
	    </section>
    <!-- About Section -->
   