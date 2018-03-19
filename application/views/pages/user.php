      <?php $user = $this->session->userdata('username');
            if($user == ''){
              echo "<script>
                alert('Login first!');
                window.location.href='home';
                </script>";
            }
            else if($user == 'Mismatch!'){
              echo "<script>
                alert('Login first!');
                window.location.href='home';
                </script>";
            }
      ?>
	<title>Pet Lovers Community</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/user.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/usertab.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
	</head>

     <body style="background-color: #E0E0E0">

    <nav class="navbar navbar-expand-lg sticky-top" id="mainNav" style="background-color: black">
       <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('home');?>">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('featured');?>">Community</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('adoptions');?>">Adopt</a>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="user"><?php echo $user;?></a>
			  <ul class="dropdown-menu">
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
        <!-- Top content -->
		<br>
       <div class="container" >
    <div class="row profile" >
		<div class="col-md-3 " style="background-color:white">
			<div class="profile-sidebar " >
				<!-- SIDEBAR USERPIC -->

				<div>
					<br><center><img style="border-radius:50%; width:100px;" src="assets/img/img_avatar.png"  alt=""></center>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle" >
					<center><div class="profile-usertitle-name">
						<?php echo $user;?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
				<center>	<button type="button" class="btn btn-success btn-sm">Edit Profile</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="biotext text-left">
					<br>
					<p>Describe Yourself Now! Click the Edit Profile Button.</p>
					<footer class="blockquote-footer"><?php echo $user;?></footer>

				</div>
				<!-- END MENU -->
			</div>
		</div>
			<div class="col-md-9 tab-content "style="background-color: white" >
			  <ul class="navigation nav">
						<li class="nav-item active">
							<a class="nav-link" style="color:grey" data-toggle="tab" href="#information">
								<span class="fa fa-user"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="color:grey" data-toggle="tab" href="#settings">
								<span class="fa fa-photo"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="color:grey" data-toggle="tab" href="#email">
								<span class="fa fa-envelope"></span>
							</a>
						</li>
					</ul>
					<div class="user-body">
						<div class="tab-content">
							<div id="information" class="tab-pane active">
								<h4>Posts</h4>
								<div class="row justify-content-center">
									<div class="col-md-12" >
										<br><div class="card card-primary text-right">
                      <?php echo form_open('plcpost/posting');?>
                      <form>
										<div class="card-body text-center">
										<input type="post" class="form-control" name="usrpst" placeholder="What are you up to?">
										</div>
										<div class="card-footer">
										<button type="submit" class="btn btn-dark btn-md">Post</button>
										</div>
                  </form>
										</div><br>
									</div>
								</div>
							</div>
              <div id="posting">
              <?php foreach($post as $cntnt):?>
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
            </div>
							<div id="settings" class="tab-pane">
								<h4>Photos</h4>
							</div>
							<div id="email" class="tab-pane">
								<h4>Messages</h4>
							</div>
						</div>
					</div>
			</div>
			</div>
	</div>

<br>
<br>
