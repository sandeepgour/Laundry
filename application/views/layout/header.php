<?php
    
    if($_SESSION['user']==null)
    {
         redirect('Login');
    }
  
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lumino - Dashboard</title>

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/bootstrap-table.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet"/>

		<!--Theme Switcher-->
		<style id="hide-theme">
			body{
				display:none;
			}
		</style>
		<script type="text/javascript">
			function setTheme(name){
				var theme = document.getElementById('theme-css');
				var style = '<?php echo base_url();?>assets/css/theme-' + name + '.css';
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


		<!--Custom Font-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="#"><span>Welcome&nbsp;</span>Admin</a>
					<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-info">15</span>
						</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
										<img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/images/profile-pic-2.jpg" width="40">
										</a>
										<div class="message-body"><small class="pull-right">3 mins ago</small>
											<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
										<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
										<img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/images/profile-pic-1.jpg" width="40">
										</a>
										<div class="message-body"><small class="pull-right">1 hour ago</small>
											<a href="#">New message from <strong>Jane Doe</strong>.</a>
										<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="all-button"><a href="#">
										<em class="fa fa-inbox"></em> <strong>All Messages</strong>
									</a></div>
								</li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-bell"></em><span class="label label-primary">5</span>
						</a>
							<ul class="dropdown-menu dropdown-alerts">
								<li><a href="#">
									<div><em class="fa fa-envelope"></em> 1 New Message
										<span class="pull-right text-muted small">3 mins ago</span></div>
								</a></li>
								<li class="divider"></li>
								<li><a href="#">
									<div><em class="fa fa-heart"></em> 12 New Likes
										<span class="pull-right text-muted small">4 mins ago</span></div>
								</a></li>
								<li class="divider"></li>
								<li><a href="#">
									<div><em class="fa fa-user"></em> 5 New Followers
										<span class="pull-right text-muted small">4 mins ago</span></div>
								</a></li>
							</ul>
						</li>
					</ul>
					<ul class="navbar-right theme-switcher">
						<li><span>Choose Theme:</span></li>
						<li><a href="#" title="Default" data-theme="default" class="theme-btn theme-btn-default">Default</a></li>
						<li><a href="#" title="Iris" data-theme="iris" class="theme-btn theme-btn-iris">Iris</a></li>
						<li><a href="#" title="Midnight" data-theme="midnight" class="theme-btn theme-btn-midnight">Midnight</a></li>
						<li><a href="#" title="Lime" data-theme="lime"  class="theme-btn theme-btn-lime">Lime</a></li>
						<li><a href="#" title="Rose" data-theme="rose" class="theme-btn theme-btn-rose">Rose</a></li>
					</ul>
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="<?php echo base_url(); ?>assets/images/profile-pic-1.jpg" width="50" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<span style="font-size:13px; "><?php echo $_SESSION['user']; ?>	</span>
				     </div>
					<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="divider"></div>
			<!-- <form role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form> -->
			<ul class="nav menu">
				<li class="active"><a href="<?php echo base_url();?>Home"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
				<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
				<li><a href="buttons.html"><em class="fa fa-hand-pointer-o">&nbsp;</em> Buttons</a></li>
				<li><a href="forms.html"><em class="fa fa-pencil-square-o">&nbsp;</em> Forms</a></li>
				<li><a href="tables.html"><em class="fa fa-table">&nbsp;</em> Tables</a></li>
				<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
				<li><a href="icons.html"><em class="fa fa-star-o">&nbsp;</em> Icons</a></li> -->
				<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-pencil-square-o">&nbsp;</em> Hotel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
					<ul class="children collapse" id="sub-item-1">
						<li>
						
							<a class="" href="<?php echo base_url(); ?>Home/AddHotel"><em class="fa fa-file-o">&nbsp;</em>&nbsp;Add Hotel</a>
					    </li>
						<li>
				
							<a class="" href="<?php echo base_url(); ?>Home/ViewHotel"><em class="fa fa-file-o">&nbsp;</em>&nbsp;View Hotel</a>
					    </li>
					</ul>
				</li>
				<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
					<em class="fa fa-pencil-square-o">&nbsp;</em> Laundry <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
					<ul class="children collapse" id="sub-item-2">
						<li>
							
							<a class="" href="<?php echo base_url(); ?>Home/AddLaundry"><em class="fa fa-file-o">&nbsp;</em>&nbsp;Add Laundry</a>
					    </li>
						<li>
							
							<a class="" href="<?php echo base_url(); ?>Home/ViewLaundry"><em class="fa fa-file-o">&nbsp;</em>&nbsp;View Laundry</a>
					    </li>
					</ul>
				</li>
				<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
					<em class="fa fa-pencil-square-o">&nbsp;</em> History <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
					<ul class="children collapse" id="sub-item-3">
						<li>
						 <a class="" href="<?php echo base_url(); ?>Home/OrderHistory"><em class="fa fa-file-o">&nbsp;</em>&nbsp;Order History</a>
					    </li>
						<li>
							<a class="" href="<?php echo base_url(); ?>Home/PaymentHistory"><em class="fa fa-file-o">&nbsp;</em>&nbsp;Payment History</a>
					    </li>
						
					</ul>
				</li>
				<li><a href="<?php echo base_url(); ?>Home/Logout"><em class="fa fa-pencil-square-o">&nbsp;</em> Logout</a></li>
			

			</ul>
		</div><!--/.sidebar-->