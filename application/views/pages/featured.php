<!DOCTYPE html>
<?php $user = $this->session->userdata('username');
		if($user != ''){
			redirect('featured0?='.$user);
		}
	?>
	<title>Pet Lovers Community</title>
	</head>	
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <img id="nav-pic" class="navbar-brand" href="#page-top" src="assets/img/cologo.png" />
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="recent">Recent Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="itemsales">Item Sales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="adoptions">Adoptions</a>
            </li>          
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="donations">Donations</a>
            </li>          
			
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('sign'); ?>">Login</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('rgstr'); ?>">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <section class="feathead">
            <div class="feat-body">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class ="block">
	                        <h1 class="brand-heading" ><b>FEATURED PETS</b></h1>
	                        <p class="intro-text">"TOP 10 PETS THAT GOT THE MOST PAWS"</p>
	                    </div>
	                </div>
	            </div>
	        </div>
                </div><!-- .container close -->
	    </section>
    <!-- About Section -->
   