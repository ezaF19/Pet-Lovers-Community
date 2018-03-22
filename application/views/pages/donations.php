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
              <a class="nav-link" href="<?php echo base_url('featured');?>">Community</a>
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
	                <div class="col-lg-6">
	                    <div class ="block">
	                         <?php echo form_open('donatepost/create_post');?>
                                    <div class="intro-text" style="background-color: #DCDCDC;">
                                        <div class="container">
                                                    <p class="brand-text">DONATION FORM</p>
                                                   <label class="mr-sm" for="inlineFormCustomSelect">I would like to donate in the amount of*: </label>
                                                   <select class="custom-select col-lg-4" id="inlineFormCustomSelect" name="category">
                                                         <option selected>P20.00</option>
                                                         <option>P50.00</option>
                                                         <option>P100.00</option>
                                                         <option>P500.00</option>
                                                         <option>P1000.00</option>
                                                       </select>										   
                                        </div>
                                                 <div class="group row">
                                                     <div class="col-lg-12">	 
                                                 <input type="text" class="form-control col-lg-12" name="firstname" id="exampleInput" aria-describedby="emailHelp" placeholder="First Name*" >
                                                 
                                                 <input type="text" class="form-control col-lg-12" name="lastname" id="exampleInput" placeholder="Last Name*" >
                                                 
                                                 <input type="text" class="form-control col-lg-12" name="email" id="exampleInput" aria-describedby="emailHelp" placeholder="Email*" >
                                                 
                                                 <input type="number" class="form-control col-lg-12" name="contactnumber" id="exampleInput" placeholder="Contact Number*" >  
												 
                                                 <input type="text" class="form-control col-lg-12" name="comment" id="exampleInput" placeholder="Comment or Message" >
                                               
                                               </div>
                                               </div>
                                                   <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">POST</button>
                                                    </div>
                                    </div>
                                </form>
	                    </div>
	                </div>
	            </div>
	        </div>
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
