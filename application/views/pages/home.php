<!DOCTYPE html>

	<title>Pet Lovers Community</title>
	</head>
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
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#community">Community</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#adopt">Adopt</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('sign'); ?>">Login</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('register'); ?>">Register</a>
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
    <section id="about" class="content-section text-center" style="background-color: #FF8C00;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About Pet Lovers Community</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel eleifend enim, eget luctus dolor. Ut sit amet condimentum nisl. Quisque pretium cursus orci nec fermentum.
			Duis molestie molestie dolor, ut porttitor leo sagittis ut. Maecenas vulputate suscipit justo, et imperdiet sem venenatis eget.
			Morbi sit amet magna nulla.</p>
            <p>Sed in mattis mi, et tristique magna. Curabitur rhoncus, velit ut interdum aliquam, lectus eros luctus felis, eget blandit nibh elit eget est.
			Nunc dignissim ex id purus cursus, et sodales justo placerat. Duis sit amet felis pellentesque turpis condimentum fermentum sed ut ex. Mauris in mi justo.
			Ut sollicitudin mi turpis, ac laoreet quam pharetra sit amet. </p>

          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="content-section content-section text-center">
      <div class="container">

		<div class="title">
			<h2>Services</h2>
			<p>Semper suscipit posuere apede</p>
		</div>
		<div class="pbox">
		<div class="photo">
		<img src="assets/img/grooming.jpg" width="100%">

		<h3>Grooming</h3>
		<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
		<a class="More" href="#" >More</a>
		</div>

		<div class="photo">
		<img src="assets/img/Training.jpg" width="100%">

		<h3>Training</h3>
		<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
		<a class="More" href="#" >More</a>
		</div>
		<div class="photo">
		<img src="assets/img/sitting.jpg" width="100%">

		<h3>Pet Sitting</h3>
		<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
		<a class="More" href="#" >More</a>
		</div>

		<div class="photo">
		<img src="assets/img/veterinary.jpg" width="100%">

		<h3>Veterinary</h3>
		<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
		<a class="More" href="#" >More</a>
		</div>
		</div>
      </div>

    </section>

	<!-- Community Section -->
    <section id="community" class="content-section content-section text-center">
      <div class="container">
		<div class="title">
		<h1>Community</h1>
		<p>Aliquam erat volutpat nam dui </p>
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
		<li>
			<div class="image_title">
				<a href="<?php echo base_url('donations');?>">Donations</a>
			</div>
			<a href="<?php echo base_url('donations');?>">
				<img src="<?php echo base_url('assets/img/community5.jpg');?>">
			</a>
		</li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>

    </section>

    <!-- Adopt Section -->
    <section id="adopt" class="content-section content-section text-center" >
      <div class="container">

		<div class="title">
			<h2>Adopt a Pet</h2>
			<p>Semper suscipit posuere apede</p>
		</div>
		<div class="boxphoto">
		<img src="assets/img/dogs.jpg">

		<h3>Dogs</h3>
		<p>Cipdum dolor</p>
		</div>
		<div class="boxphoto">
		<img src="assets/img/cats.jpg">


		<h3>Cats</h3>
		<p>Vestibulum comm</p>
		</div>
		<div class="boxphoto">
		<img src="assets/img/others.jpeg">


		<h3>Others</h3>
		<p>Fusce pellentes</p>
		</div>


      </div>

    </section>
