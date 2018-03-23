<!DOCTYPE html>
<?php $user = $this->session->userdata('username');	?>
	<title>Pet Lovers Community</title>
	</head>
	<style>
		#logged, #unlogged, #unlogged2{
			display: none;
		}
	</style>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <img id="nav-pic" class="navbar-brand" href="#page-top" src="assets/img/cologo.png" />
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#community">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#adopt">Adopt</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="donations">Donate</a>
            </li>
						<li class="nav-item dropdown" id="logged">
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
			<li class="nav-item" id="unlogged">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('sign'); ?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <section class="masthead">
            <div class="intro-body">
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
                    <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a><!-- .row close -->
	        </div>
                </div><!-- .container close -->
	    </section>
    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About Us</h2>
			<p> Pet Lovers Community is an independent, non-profit , pet adoption website that caters a gateway for people to find adoptable pets and various services for other people's pets. These animals can’t make it without our help and we can’t do it without yours. </p>
            <p>We aim to be the alternative in pet placement! We seek not only to help animals who have been lost or turned into our local shelters, but to also assist families in search of new homes for their pets due to lifestyle, living arrangement or other similar changes.</p>

          </div>
        </div>
      </div>
    </section>

	<!-- Community Section -->
    <section id="community" class="content-section content-section text-center" style="background-color: blanchedalmond;">
      <div class="container">
		<div class="title">
		<h1>Community</h1><br/>
		<p>Get Involved! Check our community page for the featured and freshest posts from our users.</p>
		</div>
	<div class="sidebar-section">
	<div class="container-fluid">
	<div class="container">
	<div class="row">
	<div class="accordian">
    <ul>
		<li>
			<div class="image_title">
				<a href="<?php echo base_url('featured');?>">Featured Pets</a>
			</div>
			<a href="<?php echo base_url('featured');?>">
				<img src="<?php echo base_url('assets/img/community1.jpg');?>">
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="<?php echo base_url('recent');?>">Recent Posts</a>
			</div>
			<a href="<?php echo base_url('recent');?>">
				<img src="<?php echo base_url('assets/img/community2.jpg');?>">
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="<?php echo base_url('itemsales');?>">Item Sales</a>
			</div>
			<a href="<?php echo base_url('itemsales');?>">
				<img src="<?php echo base_url('assets/img/community3.jpg');?>">
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="<?php echo base_url('adoptions');?>">Adoptions</a>
			</div>
			<a href="<?php echo base_url('adoptions');?>">
				<img src="<?php echo base_url('assets/img/community4.jpg');?>">
			</a>
		</li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>

    </section>

	    <!-- Services Section -->
    <section id="services" class="content-section content-section text-center">
      <div class="container">

		<div class="title">
			<h2>Services</h2>
			<p>Don't miss out on the many offers!</p>
		</div>
		<div class="pbox">
		<div class="photo"><a href="<?php echo base_url('allservices');?>">
		<img src="assets/img/grooming.jpg" href="#" width="100%" class="photox"></a>
		
		<div class="middle">
			<div class="text">View</div>
		</div>	
	
		<h3>Grooming</h3>
		<p>Make your furrbaby shine!</p>
		</div>

		<div class="photo"><a href="<?php echo base_url('allservices');?>">
		<img src="assets/img/Training.jpg" href="#" width="100%" class="photox"></a>
		
		<div class="middle">
			<div class="text">View</div>
		</div>	
		<h3>Training</h3>
		<p>Have fun and get your pet a new skill!</p>
		</div>
		<div class="photo"><a href="<?php echo base_url('allservices');?>">
		<img src="assets/img/sitting.jpg" href="#" width="100%" class="photox"></a>
		
		<div class="middle">
			<div class="text">View</div>
		</div>	
		<h3>Pet Sitting</h3>
		<p>Busy day? Check us out!</p>
		</div>

		<div class="photo"><a href="<?php echo base_url('allservices');?>">
		<img src="assets/img/veterinary.jpg" href="#" width="100%" class="photox"></a>
		
		<div class="middle">
			<div class="text">View</div>
		</div>	
		<h3>Veterinary</h3>
		<p>Get that monthly check-up here!</p>
		</div>
		</div>
      </div>

    </section>


    <!-- Adopt Section -->
    <section id="adopt" class="content-section content-section text-center" style="background-color: blanchedalmond;">
      <div class="container">

		<div class="title">
			<h2>Adopt a Pet</h2>
			<p>Help us provide assistance to families who must give up their beloved pets so those pets will not end up being brought to a shelter but instead will be placed directly with another family who will give them the love and affection that they deserve.</p>
		</div>
		<a href="<?php echo base_url('adoptions');?>">
		<div class="boxphoto">
		<img src="assets/img/dogs.jpg">

		<h3>Dogs</h3></a>
		</div>
		<a href="<?php echo base_url('adoptions');?>">
		<div class="boxphoto">
		<img src="assets/img/cats.jpg">


		<h3>Cats</h3></a>
		</div>
		<a href="<?php echo base_url('adoptions');?>">
		<div class="boxphoto">
		<img src="assets/img/others.jpeg">


		<h3>Others</h3></a>
		</div>


      </div>

    </section>
<?php
	if($user == ''){
		echo "<script>
		document.getElementById('unlogged').style.display = 'block';
		document.getElementById('unlogged2').style.display = 'block';
		document.getElementById('logged').style.display = 'none';
		</script>";
	}
	else if($user == 'Mismatch!'){
		echo "<script>
		document.getElementById('logged').style.display = 'block';
		document.getElementById('unlogged2').style.display = 'block';
		document.getElementById('unlogged').style.display = 'none';
		</script>";
	}
	else{
		echo "<script>
		document.getElementById('logged').style.display = 'block';
		document.getElementById('unlogged2').style.display = 'none';
		document.getElementById('unlogged').style.display = 'none';
		</script>";
	}

 ?>
