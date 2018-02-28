<!doctype html>
<html lang="en">
 <head>
    <?php $user = $this->session->userdata('username'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/homepage.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Pet Lovers Community</title>
	<link rel="icon" href="assets/img/cologo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
   body { background: #EEEBE9; font-family: segoe ui; }
</style>
  </head>
  <body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!--NavBar-->

<nav class="navbar navbar-custom" style="background-color:#D2691E ;">
  <div class="container">
	<p class="navbar-text" style="color:#101010; font-family: cursive">EVERY PET DESERVES A HOME, BUT NOT EVERY HOME DESERVES A PET</p>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right    ">
        <li class="DashUserDropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #101010"><?php echo $user; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> Profile </span></a></li>
            <li class="divider"></li>
            <li><a href="#"> My Posts </span></a></li>
			<li><a href="#"> My Donations </span></a></li>
            <li class="divider"></li>
            <li><a href="#"> Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#"> Favorite Posts </span></a></li>
			<li><a href="#"> Recent Activities </span></a></li>
            <li class="divider"></li>
			<li><a href="#"> Help</span></a></li>
			<li><a href="#"> Settings</span></a></li>
            <li><a href='<?php echo base_url(); ?>logout'> Log Out</span></a></li>
          </ul>
        </li>
      </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="home" style="color:#101010;">HOME</a></li>
                <li><a href="donation" style="color:#101010;">DONATIONS</a></li>
	</ul>
    </div>
  </div>
 </nav>


    <div class="container row">
       <div class="col-sm-6"></div>
	<div class="logo_container col-sm-3">
		<span class="logo_helper"></span>
			<a href="<?php echo base_url();?>">
				<img style="margin-bottom: 13px;"  src="assets/img/lugu.png"  alt="Pet Lovers Community" id="logo" width="300" /></a>
                                
	</div>
<div class="col-sm-6"></div>
	</div>
 
	<!--Start-->
        <div class="container-liquid" style="background-color:#D2691E; padding:40px; ">
        <div class="container">
        <div class="row">
            <div style="width:200px; height:200px; border-radius: 100%;" class="col-sm-3">
                
                <img  src="assets/img/Bengoy.jpg"   alt="ADMIN PHOTO" id="logo" width="200" style="border-radius: 100%"  />
            </div>
            <div class="col-sm-9" style="color: #101010; font-size:30px; margin-left: 50px; margin-top: 0px;" ><b>WELCOME Admin</b><br/>
                <div style="color:#101010; font-size: 20px; margin-top: 5px; ">What would you like to do?</div>
                <div class="category" style="margin-left:-20px; margin-top: 30px;">
                <a href="#" class="btn btn-change" role="button" style="background-color:black; color:#FB7E09; padding: 20px;"><b>CREATE</b></a>
                <a href="#" class="btn btn-change" role="button" style="background-color:black; color:#FB7E09; padding: 20px;"><b>READ</b></a>
                <a href="#" class="btn btn-change" role="button" style="background-color:black; color:#FB7E09; padding: 20px;"><b>UPDATE</b></a>
                <a href="#" class="btn btn-change" role="button" style="background-color:black; color:#FB7E09; padding: 20px;"><b>DELETE</b></a>
                <a href="#" class="btn btn-change" role="button" style="background-color:black; color:#FB7E09; padding: 20px;"><b>BUTTON</b></a>
        </div>
        </div> 
        </div>
        </div>
        </div>
        <div class="container container-fluid" style="background-color: #F4A460; margin-top: 20px; margin-bottom: 20px; ">
                <?php $tableplc=array(
                    array('name'=>'Cottie','breed'=>'ChowChow','type'=>'Dog','size'=>'69'),
                    array('name'=>'Bruno','breed'=>'Siberian Husky','type'=>'Dog','size'=>'69'),
                    array('name'=>'Noggy','breed'=>'Persian','type'=>'Cat','size'=>'69'),
                    array('name'=>'Sam','breed'=>'German Shepherd','type'=>'Dog','size'=>'69'),
                    array('name'=>'Tonny','breed'=>'Scottish Fold','type'=>'Cat','size'=>'69'),
                    array('name'=>'Cottie','breed'=>'ChowChow','type'=>'Dog','size'=>'69'),
                    array('name'=>'Bruno','breed'=>'Siberian Husky','type'=>'Dog','size'=>'69'),
                    array('name'=>'Noggy','breed'=>'Persian','type'=>'Cat','size'=>'69'),
                    array('name'=>'Sam','breed'=>'German Shepherd','type'=>'Dog','size'=>'69'),
                    array('name'=>'Tonny','breed'=>'Scottish Fold','type'=>'Cat','size'=>'69')
                );?>
                <table class="table table-striped table-responsive table-condensed">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">
                            <input type="checkbox" value="">#
                      </th>
                      <th scope="col" style="color:black;"><b>Name</b></th>
                      <th scope="col" style="color:black;"><b>Breed</b></th>
                      <th scope="col" style="color:black;"><b>Type</b></th>
                      <th scope="col" style="color:black;"><b>Size</b></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                      
                      foreach($tableplc as $no=>$tbls){
                          echo "
                    <tr>
                      <th scope='row'>
                            <input type='checkbox' value=''>"
                          .($no+1).
                      "</th>
                      <td>".$tbls['name']."</td>
                      <td>".$tbls['breed']."</td>
                      <td>".$tbls['type']."</td>
                      <td>".$tbls['size']."</td>
                    </tr>
                    ";

                          
                      }?>
                </table>
            
        </div>
	<!--End of Profile-->
	<footer class="footer">
    <div class="container container-fluid">
        <div class="row">
        <div class="col-sm-3">
            <h2 class="title">Follow Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            <ul class="social-icon">
                <a href="#" class="social"><i class="fa fa-facebook fa-fw" aria-hidden="true" style="color: #3b5998;"></i></a>
                <a href="#" class="social"><i class="fa fa-twitter fa-fw" aria-hidden="true" style="color: #00aced;"></i></a>
                <a href="#" class="social"><i class="fa fa-instagram fa-fw" aria-hidden="true" style="color: #fb3958;"></i></a>
                <a href="#" class="social"><i class="fa fa-google fa-fw" aria-hidden="true" style="color: #c71610;"></i></a>
            </ul>
        </div>
        <div class="col-sm-3">
            <h2 class="title">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
        </div>
        <div class="col-sm-3">
            <h2 class="title">Category</h2>
            <div class="category">
                <a href="#" class="btn btn-change" role="button" style="color: #FB7E09;">Cat</a>
                <a href="#" class="btn btn-change" role="button" style="color: #FB7E09;">Dog</a>
            </div>
        </div>
        <div class="col-sm-3">
            <h2 class="title">Contact Us</h2>
			<span class="acount-icon">
			<a href="#"><i class="fa fa-address-book fa-fw" aria-hidden="true" style="color:#32CD32;"></i>09123456789</a>
			<a href="#"><i class="fa fa-envelope fa-fw" aria-hidden="true" style="color:#c71610;"></i>plc@gmail.com</a>
        </div>
        </div>

    </div>
	</footer>

	<!--Sub-floor-->
      <div id="sub-floor">
        <div class="container-liquid" style="background-color: black; color:#FB7E09;">
             Copyright ©2018 petloverscommunity.com All rights reserved
         </div>
      </div>

	<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
  </body>
</html>
