<!-- Sign.php
	This is main home page. Sass is used for css and it is in 
	application/views/Home/stylesheets/screen.sass and changes
	are made in screen.css
-->
<html>
<head>
	<title>Sign-In</title>
	<meta charset="utf-8"> <!-- Character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Sign-in/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/Home/stylesheets/mobileView.css" />
	<script src="<?php echo base_url();?>application/views/Home/js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container signin">
		<header class="header">
			<h1 class="heading1">Sign-In</h1>
		</header>
		<div class="s_data shrink">
            <div class="content_signIn id_first-slide-text">
				<?php echo validation_errors('<div class="error">', '</div>'); ?> 
				<form class="signin" method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/signIn/verify">
					<input type="email" class="E_Mail" name="email" id ="email" placeholder="E-mail" title="Email Address" required />
					<input type="password" class="pass" name="password" id="password" placeholder="Password" title="Password" required><br><br>
					<p style="text-align: center;"><input type='submit' class="submit" value='Sign-In'/></p>
					<p class="forget"><a href="<?php echo base_url();?>index.php/forgotPassword"><span class="span">Forgot Password?</span></a></p>
					<p class="p1">New Here?&nbsp;<a href="<?php echo base_url();?>index.php/registration"><span class="span">Sign Up</span></a></p>
					
				</form>
			</div>
<!-- 			<div class="keepCalm iris">
				<img src="<?php echo base_url();?>application/views/Register/stylesheets/tasveer/crown1.png">
				<p class="p">Keep<br>Calm<br>And<br>Register</p>
			</div> -->
	        <div style="clear:both;">
	       	</div>			
		</div>
	</div>	
</body>
<!-- Script files for mobile view  -->
<script src="<?php echo base_url();?>application/views/Home/js/classie.js"></script>
<script src="<?php echo base_url();?>application/views/Home/js/borderMenu.js"></script>
</html>