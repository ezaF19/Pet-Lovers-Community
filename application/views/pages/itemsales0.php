<!DOCTYPE html>
<?php $user = $this->session->userdata('username');
		if($user == ''){
			redirect('itemsales');
		}
		else if($user == 'Mismatch!'){
			redirect('itemsales');
		}
	?>
	<title>Pet Lovers Community</title>
	</head>	
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a href="<?php echo base_url('home'); ?>"><img id="nav-pic" class="navbar-brand" src="<?php echo base_url();?>assets/img/cologo.png" /></a>
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home0'); ?>?=<?php echo $user;?>">Pet Lovers Community</a>
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
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('recent0');?>?=<?php echo $user;?>">Recent Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('adoptions0');?>?=<?php echo $user;?>">Adoptions</a>
            </li>          
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('donations0');?>?=<?php echo $user;?>">Donations</a>
            </li>            
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="user"><?php echo $user;?></a>
			<ul class="dropdown-menu">			
						<li><a class="dropdown-item"  style="color:black;" href="<?php echo base_url('user');?>">My Profile</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="">Donations</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Notifications</a></li>
                        <li><a class="dropdown-item"  style="color:black;" href="">Activity Log</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="">Settings</a></li>
						<li><a class="dropdown-item"  style="color:black;" href="<?php echo base_url('');?>logout">Sign Out</a></li>
						</ul>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <section class="salehead">
            <div class="sale-body">
	        <div class="container">
	            <div class="row">
                        <div class="col-lg-3"></div>
	                <div class="col-lg-6">
	                    <div class ="block">
	                         <?php echo form_open('itempost/create_post');?>
                                    <div class="intro-text">
                                        <div class="container">
                                           
                                                    <p class="brand-text">POST AN ITEM</p>
                                                   <label class="mr-sm" for="inlineFormCustomSelect">Pet</label>
                                                   <select class="custom-select col-lg-4" id="inlineFormCustomSelect" name="category">
                                                         <option selected>Choose...</option>
                                                         <option>Dog</option>
                                                         <option>Cat</option>
                                                         <option>Both</option>
                                                       </select>
                                                   </div>
                                                 <div class="group row">
                                                     <div class="col-lg-12">
                                                 <label for="exampleInput">Description</label>
                                                 <input type="text" class="form-control col-lg-12" name="description" id="exampleInput" aria-describedby="emailHelp" placeholder="Enter description" >
                                                 <label for="exampleInput">Price</label>
                                                 <input type="number" class="form-control col-lg-12" name="price" id="exampleInput" placeholder="Price" >
                                                  <label for="exampleInput">Contact Number</label>
                                                  <input type="text" class="form-control col-lg-12" name="contact" id="exampleInput" aria-describedby="emailHelp" placeholder="Contact Number" >
                                                 <label for="exampleInput">Location</label>
                                                 <input type="text" class="form-control col-lg-12" name="location" id="exampleInput" placeholder="Location" >
                                               </div>
                                               </div>
                                                   <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">POST</button>
                                                    </div>
                                               </div>
                                </form>
	                    </div>
	                </div>
                         <div class="col-lg-3"></div>
	            </div>
                        <?php foreach($item as $post):?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"  id="itpost">
                                    <label><?php echo $post->petype?></label><br/>
                                    <label><?php echo $post->itemdesc?></label><br/>
                                    <label><?php echo $post->itemprc?></label><br/>
                                    <label><?php echo $post->cont?></label><br/>
                                    <label><?php echo $post->loc?></label>
                                </div>
                                
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                        
                        <?php endforeach;?>
              </a><!-- .row close -->
	        </div>
                </div><!-- .container close -->
	    </section>
    <!-- About Section -->
   