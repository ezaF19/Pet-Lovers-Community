

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pet Lovers Community | Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/user.css">

    </head>

    <body>
    <nav class="navbar navbar-custom navbar-expand-lg sticky-top" id="mainNav" style="background-color: black">
       <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#community">Community</a>
            </li>          
			<li class="nav-item">
              <a class="nav-link" href="#adopt">Adopt</a>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="user">Name</a>
			  <ul class="dropdown-menu">
						<li><a class="dropdown-item"  style="color:black;" href="">Donations</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Notifications</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Activity Log</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="">Settings</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="<?php echo base_url('home');?>">Sign Out</a></li>
						</ul>
            </li>
          </ul>
        </div>
      </div>
        
	</nav>
        <!-- Top content -->
		
        <div class="container">
		<div class="plc-profile">
			<img align="left" class="plc-image-lg img-responsive img-thumbnail" src="<?php echo base_url('assets/img/dog.jpg'); ?>"   alt="Pet Lovers Community" id="logo"/>
			<img align="left" class="plc-image-profile img-thumbnail" src="<?php echo base_url('assets/img/rengar.jpg'); ?>" alt="Profile image example"/>
			<div class="plc-profile-text">
				<h1 style="text-align:left;">Rengar</h1><button type="button" class="btn btn-warning btn-sm pull-right">Edit Profile</button>
				<p style="text-align:left;">WSWSWSWSWSWSWSWSWSWSW</p>		
			</div>
		</div>
		</div>
	<br><div class="container">
    <div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12 center">
            <div class="card with-nav-tabs panel-warning">
                <div class="card-heading">
                        <ul class="nav nav-tabs bg-dark">
                            <li class="nav-item"><a class="nav-link active" href="#tab1warning" data-toggle="tab">Posts</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab2warning" data-toggle="tab">Photos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab3warning" data-toggle="tab">User Bio</a></li>
                        </ul>
                </div>
                <div class="card-block bg-secondary">
                    <div class="tab-content">
                        <div class="tab-pane fade-in active" id="tab1warning">
							<div class="container" >
								<div class="row justify-content-center">
									<div class="col-md-8" >
										<br><div class="card card-primary text-right">
										<div class="card-body text-center">
										<input type="post" class="form-control" placeholder="What are you up to?">
										</div>
										<div class="card-footer">
   										<button type="button" class="btn btn-warning btn-md">Post</button>
										</div>
										</div><br>
									</div>
								</div>
							</div>
						</div>
                        <div class="tab-pane fade" id="tab2warning">
						<div class="container">
						<br><div class="row">
							<div class="gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6 filter hdpe">
							<img src="<?php echo base_url('assets/img/rengar.jpg'); ?>" class="img-responsive">
							</div>
							<div class="gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6 filter hdpe">
							<img src="<?php echo base_url('assets/img/rengar.jpg'); ?>" class="img-responsive">
							</div>
							<div class="gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6 filter hdpe">
							<img src="<?php echo base_url('assets/img/rengar.jpg'); ?>" class="img-responsive">
							</div>
							<div class="gallery_product col-lg-3 col-md-4 col-sm-4 col-xs-6 filter hdpe">
							<img src="<?php echo base_url('assets/img/rengar.jpg'); ?>" class="img-responsive">
							</div>
														
						</div><br>
						</div>
						</div>
                        <div class="tab-pane fade" id="tab3warning">About/ Bio</div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>



        <!-- Footer -->


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>