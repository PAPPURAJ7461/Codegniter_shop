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
<?php  $session = \Config\Services::session();?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">

	<div class="span12">
    
	<h3 > <center>Admin Login</center></h3>	
	<hr class="soft"/>
	
	<div class="row ">
		
		<div class="span4"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<?php if ($session->get('msg')) : ?>
			  <div class="alert alert-danger">
			<?php echo $_SESSION['msg']; ?>
			
			</div>
			<?php endif; ?>
			<form method="post" action="auth">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" name="email" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="Password">Password</label>
				<div class="controls">
				  <input type="password" class="span3" name="password" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="#">Forget password?</a>
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