

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pet Lovers Community | Login</title>

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
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to login:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
                <div class="social-login">
	            <h3>...or login with:</h3>
	                <div class="social-login-buttons">
                            <center>
		                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                       <i class="fa fa-facebook"></i> Facebook
		                    </a>
		                    <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                        <i class="fa fa-twitter"></i> Twitter
		                    </a>
                            </center>
	                </div>
	        </div>
							<center>
								<b>Not registered ?</b><br/>
								<a href="<?php echo base_url('register'); ?>">Register here</a>
							</center>							
			                    </div>
		                    </div>

	                        
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
