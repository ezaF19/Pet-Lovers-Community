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
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="featured">Featured Pets</a>
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
		<?php if($pst != ''){

		}
		else{
			redirect('plcrecent/posts');
		}
		?>
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
					<?php foreach($pst as $cntnt):?>
					<div class="container">
							<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6"  id="itpost">
											<label><?php echo $cntnt->PostComment?></label><br/>
											<label><?php echo $cntnt->PostDate?></label>
									</div>

									<div class="col-md-3"></div>
							</div>
					</div>
					<?php endforeach;?>
                </div><!-- .container close -->
	    </section>
    <!-- About Section -->
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
