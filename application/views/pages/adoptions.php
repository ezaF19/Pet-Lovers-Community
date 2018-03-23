<!DOCTYPE html>
<?php $user = $this->session->userdata('username');	?>
	<title>Pet Lovers Community</title>
	</head>
	<style>
		#logged, #unlogged, #form_adopt, #unlogged2, #delete{
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
    <!-- About Section -->
    <section class="salehead" style="background-color:Whitesmoke; ">
            <div class="sale-body">
	        <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
	                    <div class ="block" id="form_adopt">
	                         <?php echo form_open('plcpost/save_adopt');?>
                                    <div class="intro-text">
                                        <div class="container">
                                                    <p class="brand-text">"POST A PET FOR ADOPTION"</p>
                                                   </div>
                                                 <div class="group row">
                                                     <div class="col-lg-6">
                                                 <label for="exampleInput">Caption*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="caption" id="exampleInput" placeholder="" >
                                                 <label for="exampleInput">Breed*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="petbreed" id="exampleInput" placeholder="" >
                                                 <label for="exampleInput">Type*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="petype" id="exampleInput" placeholder="" >
                                                 <label for="exampleInput">Name*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="petname" id="exampleInput" placeholder="" >
                                                 <label for="exampleInput">Age*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="petage" id="exampleInput" placeholder="" >
                                                 </div>
                                                     <div class="col-lg-6">
                                                 <label for="exampleInput">Record*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="petrecord" id="exampleInput" placeholder="" >
                                                 <label for="exampleInput">Size*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="petsize" id="exampleInput" placeholder="" >
                                                 <label for="exampleInput">Gender*</label>
                                                 <input required type="text" class="form-control col-lg-12" name="petgender" id="exampleInput" placeholder="" >
                                                 <div class="thumbnail">
                                                 <label for="exampleInput">Image</label>
                                                 <input required type="file" class="form-control col-lg-12" name="image" id="exampleInput">
                                                 </div>
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
                        <?php foreach($item as $post):?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"  id="itpost">
																		<label><?php echo $post['AccountName']; ?> posted: </label><br/>
                                    <label><b>Breed: </b><?php echo $post['PetBreed'];?></label><br/>
                                    <label><b>Type: </b><?php echo $post['PetType'];?></label><br/>
                                    <label><b>Name: </b><?php echo $post['PetName'];?></label><br/>
                                    <label><b>Age: </b><?php echo $post['PetAge'];?></label><br/>
                                     <label><b>Record: </b><?php echo $post['PetRecord'];?></label><br/>
                                     <label><b>Size: </b><?php echo $post['PetSize'];?></label><br/>
                                     <label><b>Gender: </b><?php echo $post['PetGender'];?></label><br/>
                                    <img src="data:image;base64,<?php echo $post['PetPic'];?>">
                                     <div class="text-right">
                                         <form  action="<?php echo base_url('adoptpost/deletepost')?>" method="post" id="delete">
                                             <input type="hidden" value="<?php echo $post['PetID'];?>" name="PetID"/>
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

                                                </div>
                                              </div>
                                         </form>
                                     </div>
                                </div>
                        <div class="col-md-3"></div>
                            </div>
                        </div>

                        <?php endforeach;?>
          <!-- .row close -->
	        </div>
                </div><!-- .container close -->
	    </section>

		<?php
 	 	if($user == ''){
 	 		echo "<script>
 	 		document.getElementById('unlogged').style.display = 'block';
 	 		document.getElementById('unlogged2').style.display = 'block';
 	 		document.getElementById('delete').style.display = 'none';
 	 		document.getElementById('logged').style.display = 'none';
			document.getElementById('form_adopt').style.display = 'none';
 	 		</script>";
 	 	}
 	 	else if($user == 'Mismatch!'){
 	 		echo "<script>
 	 		document.getElementById('logged').style.display = 'block';
 	 		document.getElementById('unlogged2').style.display = 'block';
 	 		document.getElementById('unlogged').style.display = 'none';
 	 		document.getElementById('delete').style.display = 'none';
			document.getElementById('form_adopt').style.display = 'none';
 	 		</script>";
 	 	}
 	 	else{
 	 		echo "<script>
			document.getElementById('form_adopt').style.display = 'block';
 	 		document.getElementById('logged').style.display = 'block';
 	 		document.getElementById('unlogged2').style.display = 'none';
 	 		document.getElementById('delete').style.display = 'none';
 	 		document.getElementById('unlogged').style.display = 'none';
 	 		</script>";
 	 	}

 	  ?>
