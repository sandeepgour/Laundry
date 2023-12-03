<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
		
		<!--Theme Switcher-->
		<style id="hide-theme">
			body
			{
				display:none;
			}
		</style>
		<script type="text/javascript">
			function setTheme(name){
				var theme = document.getElementById('theme-css');
				var style = 'css/theme-' + name + '.css';
				if(theme){
					theme.setAttribute('href', style);
				} else {
					var head = document.getElementsByTagName('head')[0];
					theme = document.createElement("link");
					theme.setAttribute('rel', 'stylesheet');
					theme.setAttribute('href', style);
					theme.setAttribute('id', 'theme-css');
					head.appendChild(theme);
				}
				window.localStorage.setItem('lumino-theme', name);
			}
			var selectedTheme = window.localStorage.getItem('lumino-theme');
			if(selectedTheme) {
				setTheme(selectedTheme);
			}
			window.setTimeout(function(){
					var el = document.getElementById('hide-theme');
					el.parentNode.removeChild(el);
				}, 5);
		</script>
		<!-- End Theme Switcher -->

		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
					   <?php

                     if($this->session->flashdata('msg')) {

                       $message = $this->session->flashdata('msg');

                       ?>

                     <div class="<?php echo $message['class']; ?>"> <?php echo $message['message']; ?></div>

                     <?php 

                     }

                 ?>
					<div class="panel-body">
						<form  action="<?php echo base_url()?>Login/LoginUser" role="form" method="post">
							<fieldset>
								<div class="form-group">
									<select name="user_type" class="form-control" style="height:45px;">
										   <option>---select user_type---</option>
										   <option selected="">admin</option>
										   <option>laundry</option>
										   <option>hotel</option>
									</select>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="username" type="text" autofocus="" required="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me" required="">Remember Me
									</label>
								</div>
								<div class="text-center">
								<!-- 	<a href="index.html" class="btn btn-lg btn-primary">Login</a> -->
								<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">
								</div>
								</fieldset>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->	
	
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>
