<html>
<head>
	<title>ForgotPassword</title>
	<meta charset="utf-8"> <!-- Character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Sign-in/forgot/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/Home/stylesheets/mobileView.css" />
	<script src="<?php echo base_url();?>application/views/Home/js/modernizr.custom.js"></script>
</head>
<body>

<!-- Validations Codeigniter  -->
<?php echo form_open(); ?>
<!-- Valdiations Over -->

	<div class="container forgot">
		<header class="header">
			<h1 class="heading1">Forgot Password</h1>
		</header>
        <div class="s_data shrink">
            <div class="content id_first-slide-text">
				<form class="forgotpassword" method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/forgotPassword">
					<div class="area">	
						<input type="email" name="Email" class="Email" id ="email" placeholder="E-mail" title="Email Address" required />
					</div>
					<div class="area">	
						<p style="text-align: center;"><input type='submit' class="submit" value='Submit'/></p>
					</div>	
				</form>
			</div>			
		</div>
	</div>		
</body>
<!-- Script files for mobile view  -->
<script src="<?php echo base_url();?>application/views/Home/js/classie.js"></script>
<script src="<?php echo base_url();?>application/views/Home/js/borderMenu.js"></script>
</html>
