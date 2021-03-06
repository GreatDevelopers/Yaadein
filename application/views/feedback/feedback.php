<!-- Register.php
	This is main home page. Sass is used for css and it is in 
	application/views/Home/stylesheets/screen.sass and changes
	are made in screen.css
-->
<html>
<head>
	<title>Register</title>	
	<meta charset="utf-8"> <!-- Character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>application/views/Register/stylesheets/screen.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/Home/stylesheets/mobileView.css" />
	<script src="<?php echo base_url();?>application/views/Home/js/modernizr.custom.js"></script></head>
<body>
<!-- Validations Codeigniter  -->	
<?php echo form_open(); ?>
<!-- Valdiations Over -->
	<div class="container register">
		<header class="header">
			<h1 class="heading1">Your Feedback</h1>
		</header>
        <div class="s_data shrink">
            <div class="content id_first-slide-text">
            	<form class="register" method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/feedback">
					<?php echo validation_errors('<div class="error">', '</div>'); ?>
					<input type="text" class="name" name="Name"  pattern="[a-zA-Z\s]+" title="Optional" placeholder="Name" /><br>
					<input type="email" class="eMail" name="Email" placeholder="E-mail" title="Optional"  /><br>
					<input type="text" class="name" name="Comment"  placeholder="Comment" title="Max 300 words" required /><br><br><br><br>

					<p style="text-align: center;"><input type='submit' class="submit" value='Submit'/></p>
				</form>	
            </div>
            <!-- Uncomment below line for keep calm effect -->
            <!-- <div class="keepCalm iris">
            	<img src="<?php echo base_url();?>application/views/Register/stylesheets/tasveer/crown1.png">
            	<p class="p">Keep<br>Calm<br>Give<br>Feedback</p>
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
