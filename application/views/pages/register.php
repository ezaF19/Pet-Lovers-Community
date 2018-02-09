<div id="wrapper">
<h2><?= $title; ?></h2><br />

<!-- <img src="<?php echo base_url('assets/img/paw2.png')?>" alt="Sample Image" /> -->

<?php echo validation_errors(); ?>

<?php echo form_open('register/index'); ?>
<form>
	<div class="the-form">
		<div>
			<label for="">First Name</label>
			<input type="text" name="first_name" class="" placeholder="Enter First Name"/>
		</div>
		<div>
			<label for="">Last Name</label>
			<input type="text" name="last_name" class="" placeholder="Enter Last Name"/>
		</div>
		<div>
			<label for="">Email</label>
			<input type="text" name="email" class="" placeholder="Enter Email"/>
		</div>
		<div>
			<label for="">Password</label>
			<input type="text" name="password" class="" placeholder="Enter Password"/>
		</div>
			<button type="submit">Submit</button>
	</div>
</form>
<!-- <?php echo form_close(); ?> -->
</div>
