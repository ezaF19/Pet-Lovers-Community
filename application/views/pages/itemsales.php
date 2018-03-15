<!DOCTYPE html>

	<title>Pet Lovers Community</title>
	</head>	
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
              <a class="nav-link js-scroll-trigger" href="recent">Recent Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="adoptions">Adoptions</a>
            </li>          
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="donations">Donations</a>
            </li>            
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
	                        <form>
                                    <div class="intro-text">
                                        <div class="container">
                                            <?php echo form_open('');?>
                                         <p class="brand-text">POST AN ITEM</p>
                                        <label class="mr-sm" for="inlineFormCustomSelect">Pet</label>
                                            <select class="custom-select col-lg-4" id="inlineFormCustomSelect">
                                              <option selected>Choose...</option>
                                              <option value="1">Dog</option>
                                              <option value="2">Cat</option>
                                              <option value="3">Both</option>
                                            </select>
                                        </div>
                                      <div class="group row">
                                          <div class="col-lg-12">
                                      <label for="exampleInput">Description</label>
                                      <input type="text" class="form-control col-lg-12" id="exampleInput" aria-describedby="emailHelp" placeholder="Enter description" name="desc">
                                      <label for="exampleInput">Price</label>
                                      <input type="number" class="form-control col-lg-12" id="exampleInput" placeholder="Price" name="prc">
                                       <label for="exampleInput">Contact Number</label>
                                      <input type="text" class="form-control col-lg-12" id="exampleInput" aria-describedby="emailHelp" placeholder="Contact Number" name="cont">
                                      <label for="exampleInput">Location</label>
                                      <input type="text" class="form-control col-lg-12" id="exampleInput" placeholder="Location" name="loc">
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
	        </div>
                </div><!-- .container close -->
	    </section>
    <!-- About Section -->
   