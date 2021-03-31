<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo base_url('public/assets/'); ?>/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?php echo base_url('public/assets/'); ?>/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url('public/assets/'); ?>/themes/images/ico/favicon.ico">
   
   
   
  </head>
<body>

<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">

	<div class="span12">
    
	<h3 > <center>Admin Sign up</center></h3>	
	<hr class="soft"/>
	
	<div class="row ">
		
		<div class="span4"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			
			<form method="post" action="signup">
				<div class="control-group">
				<label class="control-label" for="firstname">First name<span style="color:red">*<span></label>
				<div class="controls">
				  <input class="span3"  type="text" name="firstname" placeholder="first name">
				<?php if($validation->getError('firstname')) {?>
				   <p  style="color:red">
				    <?= $error = $validation->getError('firstname'); ?>
				   </p>
				<?php }?>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="lastname">Last Name<span style="color:red">*<span></label>
				<div class="controls">
				  <input class="span3"  type="text" name="lastname" placeholder="last name">
				  <?php if($validation->getError('lastname')) {?>
				   <p  style="color:red">
				    <?= $error = $validation->getError('lastname'); ?>
				   </p>
				<?php }?>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="Email1">Email<span style="color:red">*<span></label>
				<div class="controls">
				  <input class="span3"  type="text" name="email" placeholder="Email">
				   <?php if($validation->getError('email')) {?>
				   <p  style="color:red">
				    <?= $error = $validation->getError('email'); ?>
				   </p>
				<?php }?>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="Password">Password<span style="color:red">*<span></label>
				<div class="controls">
				  <input type="password" class="span3"  name="password" placeholder="Password">
				   <?php if($validation->getError('password')) {?>
				   <p  style="color:red">
				    <?= $error = $validation->getError('password'); ?>
				   </p>
				<?php }?>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign up</button> 
				  <a class="btn" href="index">Sign in</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- Footer ================================================================== -->
	
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('public/assets/'); ?>/themes/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url('public/assets/'); ?>/themes/js/bootstrap.min.js" type="text/javascript"></script>
	
</body>
</html>