<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Buttons</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="css/integral-core.css" rel="stylesheet">
<!-- /integral core stylesheet -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Loader Backdrop -->
	<div class="loader-backdrop">           
	  <!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
	  <!-- /loader -->
	</div>
<!-- loader backgrop -->

<!-- Page container -->
<div class="page-container">

  <!-- Page Sidebar -->
  <div class="page-sidebar">
  
  		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.html"><img src="images/logo.png" alt="Integral" title="Integral"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
      <?php include ('main-navigation.php'); ?>
		<!-- /main navigation -->
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
	<!-- Main header -->
      <?php
      include ('header.php');
      ?>	<!-- /main header -->
	
	<!-- Main content -->
	<div class="main-content">
		<h1 class="page-title">Buttons</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="panels.html">UI Elements</a></li> 
			<li class="active"><strong>Buttons</strong></li> 
		</ol>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix"> 
						<h4 class="panel-title">Buttons Variations</h4> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="bs-example"> 
							<button class="btn btn-default" type="button">Default</button> 
							<button class="btn btn-primary" type="button">Primary</button> 
							<button class="btn btn-blue" type="button">Blue</button> 
							<button class="btn btn-secondary" type="button">Pink</button> 
							<button class="btn btn-black" type="button">Black</button> 
							<button class="btn btn-success" type="button">Success</button> 
							<button class="btn btn-info" type="button">Info</button> 
							<button class="btn btn-warning" type="button">Warning</button> 
							<button class="btn btn-danger" type="button">Danger</button> 
							<button class="btn btn-link" type="button">Link</button> 
						</div>
					</div> 
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix"> 
						<h4 class="panel-title">Outline Buttons</h4> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="bs-example"> 
							<button class="btn btn-default btn-outline" type="button">Default</button> 
							<button class="btn btn-primary btn-outline" type="button">Primary</button> 
							<button class="btn btn-blue btn-outline" type="button">Blue</button> 
							<button class="btn btn-secondary btn-outline" type="button">Pink</button> 
							<button class="btn btn-black btn-outline" type="button">Black</button> 
							<button class="btn btn-success btn-outline" type="button">Success</button> 
							<button class="btn btn-info btn-outline" type="button">Info</button> 
							<button class="btn btn-warning btn-outline" type="button">Warning</button> 
							<button class="btn btn-danger btn-outline" type="button">Danger</button> 
							<button class="btn btn-link btn-outline" type="button">Link</button> 
						</div>
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix"> 
						<h4 class="panel-title">Diferent size</h4> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="bs-example"> 
							<button class="btn btn-primary btn-lg" type="button">Large button</button> 
							<button class="btn btn-blue" type="button">Normal</button> 
							<button class="btn btn-secondary btn-sm" type="button">Small</button> 
							<button class="btn btn-black btn-xs" type="button">Extra Small</button> 
						</div>
					</div> 
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix"> 
						<h4 class="panel-title">Disabled State</h4> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="bs-example"> 
							<button class="btn btn-primary disabled" type="button">Primary</button> 
							<button class="btn btn-blue disabled" type="button">Blue</button> 
							<button class="btn btn-secondary disabled" type="button">Pink</button> 
							<button class="btn btn-success disabled" type="button">Success</button> 
							<button class="btn btn-warning disabled" type="button">Warning</button> 
						</div>
						<div class="height-13"></div>
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading clearfix"> 
						<h4 class="panel-title">Fit to Window Buttons</h4> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="bs-example-block"> 
							<button class="btn btn-primary btn-block" type="button">Fit Primary</button> 
							<button class="btn btn-success btn-block" type="button">Fit Success</button> 
							<button class="btn btn-secondary btn-block" type="button">Fit Pink</button> 
						</div>
					</div> 
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading clearfix"> 
						<h4 class="panel-title">Rounded Buttons</h4> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="bs-example"> 
							<button class="btn btn-default btn-rounded" type="button">Default</button> 
							<button class="btn btn-primary btn-rounded" type="button">Primary</button> 
							<button class="btn btn-blue btn-rounded" type="button">Blue</button> 
							<button class="btn btn-secondary btn-rounded" type="button">Pink</button> 
							<button class="btn btn-black btn-rounded" type="button">Black</button> 
							<button class="btn btn-success btn-rounded" type="button">Success</button> 
							<button class="btn btn-info btn-rounded" type="button">Info</button> 
						</div>
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix"> 
						<h4 class="panel-title">Buttons Groups &amp; Icons</h4> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body">
						<p><strong>Single Button Dropdown</strong></p>
						<div class="bs-example-group"> 
							<div class="btn-group">
								  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Default <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								  </ul>
							</div>
							<div class="btn-group">
								  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Primary <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								  </ul>
							</div>
							<div class="btn-group">
								  <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Blue <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								  </ul>
							</div>
							<div class="btn-group">
								  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Success <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								  </ul>
							</div>
							<div class="btn-group">
								  <button type="button" class="btn btn-black dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Black <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								  </ul>
							</div>
						</div>
					</div>
					<!-- panel body --> 
					<div class="panel-body"> 
						<p><strong>Icon Only</strong></p>
						<div class="bs-example"> 
							<button class="btn btn-default" type="button"> <i class="icon-trash"></i> </button> 
							<button class="btn btn-danger" type="button"> <i class="icon-cancel"></i> </button> 
							<button class="btn btn-success" type="button"> <i class="icon-check"></i> </button> 
							<button class="btn btn-info" type="button"> <i class="icon-info"></i> </button> 
							<button class="btn btn-warning" type="button"> <i class="icon-note"></i> </button> 
							<button class="btn btn-black" type="button"> <i class="icon-down"></i> </button> 
						</div>
					</div> 
					<!-- panel body --> 
					<div class="panel-body">
						<p><strong>Common Icon Buttons</strong></p>
						<div class="bs-example">
							<button type="button" class="btn btn-black"><i class="fa fa-upload"></i>&nbsp;&nbsp;<span class="bold">Upload</span></button>
							<button type="button" class="btn btn-info"><i class="fa fa-paste"></i> Edit</button>
							<button type="button" class="btn btn-warning"><i class="fa fa-warning"></i> <span class="bold">Warning</span></button>
							<button type="button" class="btn btn-blue"><i class="fa fa-facebook"></i>&nbsp; Sign in with Facebook</button>
							<button type="button" class="btn btn-blue btn-outline"><i class="fa fa-facebook"></i>&nbsp; Sign in with Facebook</button>
							<button type="button" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer class="footer-main"> 
			&copy; 2016 <strong>Integral</strong> Admin Template by <a target="_blank" href="#/">G-axon</a>
		</footer>	
		<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/metismenu/js/jquery.metisMenu.js"></script>
<script src="js/functions.js"></script>
<!--Loader Js-->
<script src="js/loader.js"></script>

</body>
</html>
