<!DOCTYPE html>
<?php $user = $this->session->userdata('username');	?>
	<title>Pet Lovers Community</title>
	</head>
	<style>
		#logged, #unlogged,#form_sale, #unlogged2{
			display: none;
		}
	</style>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a href="<?php echo base_url('home'); ?>"><img id="nav-pic" class="navbar-brand" src="<?php echo base_url();?>assets/img/cologo.png" /></a>
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('home'); ?>">Pet Lovers Community</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="featured">Featured</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="recent">Recent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="itemsales">Item Sales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="adoptions">Adopt</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="allservices">Services</a>
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
    <section class="salehead" style="background-color: whitesmoke;">
            <div class="sale-body">
	        <div class="container">
	            <div class="row">
                        <div class="col-lg-3"></div>
	                <div class="col-lg-6">
	                    <div class ="block" id="form_sale">
	                         <?php echo form_open_multipart('itempost/create_post');?>
                                    <div class="intro-text">
                                        <div class="container">
                                                    <p class="brand-text">POST AN ITEM FOR:</p>
                                                   <label class="col-lg-4" for="inlineFormCustomSelect"></label>
                                                   <select class="custom-select col-lg-4" id="inlineFormCustomSelect" name="category">
                                                         <option selected>Dog</option>
                                                         <option>Cat</option>
                                                       </select>
                                                   </div>
                                                 <div class="group row">
                                                     <div class="col-lg-12">
                                                 <label for="exampleInput">Description*</label>
                                                 <input type="text" class="form-control col-lg-12" name="description" id="exampleInput" aria-describedby="emailHelp" placeholder="Enter description" >
                                                 <label for="exampleInput">Price*</label>
                                                 <input type="number" class="form-control col-lg-12" name="price" id="exampleInput" placeholder="Price" >
                                                  <label for="exampleInput">Contact Number*</label>
                                                  <input type="text" class="form-control col-lg-12" name="contact" id="exampleInput" aria-describedby="emailHelp" placeholder="Contact Number" >
                                                 <label for="exampleInput">Location*</label>
                                                 <input type="text" class="form-control col-lg-12" name="location" id="exampleInput" placeholder="Location" >
                                                  <label for="exampleInput">Image*</label>
                                                 <input required type="file" class="form-control col-lg-12" name="image" id="exampleInput">
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
                                 <div class="col-lg-3"></div>
                                <div class="col-md-6"  id="itpost">
                                    <label><?php echo $post->petype?></label><br/>
                                    <label><?php echo $post->itemdesc?></label><br/>
                                    <label><?php echo $post->itemprc?></label><br/>
                                    <label><?php echo $post->cont?></label><br/>
                                    <label><?php echo $post->loc?></label>
                                    <img src="data:image;base64,<?php echo $post->image?>">
                                     <div class="text-right">
                                         <form action="<?php echo base_url('itempost/deletepost')?>" method="post">
                                             <input type="hidden" value="<?php echo $post->itempostid?>" name="itempostid"/>
                                              <input type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" value="Delete" />
                                             <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-body">
                                                      <h5>Are you sure you want to delete post?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <input type="submit" class="btn btn-primary" value="Yes"/>
                                                      <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                                    </div>
                                                  </div>
                                         </form>
                                     </div>
                                </div>
                            </div>
                                </div>
                                  <div class="col-lg-3"></div>
                            </div>
                        </div>

                        <?php endforeach;?>
              </a><!-- .row close -->
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
			document.getElementById('form_sale').style.display = 'none';
 	 		</script>";
 	 	}
 	 	else if($user == 'Mismatch!'){
 	 		echo "<script>
 	 		document.getElementById('logged').style.display = 'block';
 	 		document.getElementById('unlogged2').style.display = 'block';
 	 		document.getElementById('unlogged').style.display = 'none';
			document.getElementById('form_sale').style.display = 'none';
 	 		</script>";
 	 	}
 	 	else{
 	 		echo "<script>
 	 		document.getElementById('logged').style.display = 'block';
			document.getElementById('form_sale').style.display = 'block';
 	 		document.getElementById('unlogged2').style.display = 'none';
 	 		document.getElementById('unlogged').style.display = 'none';
 	 		</script>";
 	 	}

 	  ?>
