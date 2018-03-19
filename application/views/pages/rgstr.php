

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pet Lovers Community | Register</title>

        <!-- CSS -->

        <link rel="stylesheet" href="assets/css/Roboto.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>"></a>
          <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>">Pet Lovers Community</a>
          <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>"></a>
        </div>
	</nav>
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6" id="logintro">
	                        <h1 class="brand-heading" ><b>PET LOVERS COMMUNITY</b></h1>
	                        <p class="intro-text">"Open your heart and your home to pets that need your help.
			  They will show their appreciation for the rest of their lives and you will gain a friend that you'll never forget!"</p>
						</div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
          <img src="assets/img/cologo.png" width="50%" height="50%"/>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                <?php echo form_open('register/index');?>
				                    <form role="form" action="" method="" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name*" class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name*" class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username*" class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email-address">Email Address</label>
				                        	<input type="text" name="form-email-address" placeholder="Email Address*" class="form-email-address form-control" id="form-email-address">
				                        </div>

				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password*" class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </form>
									<center>
										<b>Already have account? ?</b><br/>
										<a href="<?php echo base_url('sign'); ?>" style="color: blue">Login here</a>
									</center>
			                    </div>
                        	</div>

                        </div>
						</div>

                </div>
				</div>
            </div>
