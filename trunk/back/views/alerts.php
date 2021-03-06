﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Alerts</title>
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

  	<!-- Page sidebar -->
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
		<h1 class="page-title">Alerts</h1>
		
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="panels.html">UI Elements</a></li> 
			<li class="active"><strong>Alerts</strong></li> 
		</ol>
		<!-- /breadcrumb -->
		
		<div class="row">
			<div class="col-lg-6">
			
				<!-- Panel alert types -->
				<div class="panel panel-default">
				
					<!-- Panel header -->
					<div class="panel-heading clearfix">						
						<h4 class="panel-title">Alerts Types</h4>
						
						<!-- Panel tool options -->
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
						<!-- /panel tool options -->
						
					</div>
					
					<!-- Panel body -->
					<div class="panel-body">
						<div class="alert alert-success" role="alert"><strong>Well done!</strong> You successfully read this important alert message. </div>
						<div class="alert alert-info" role="alert"><strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
						<div class="alert alert-warning" role="alert"><strong>Warning!</strong> Better check yourself, you're not looking too good. </div>
						<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
					</div>
					<!-- /panel body -->
					
				</div>
				<!-- /panel alert types -->
				
			</div>
			<div class="col-lg-6">
				<!-- Panel dismissible alerts -->
				<div class="panel panel-default">
				
					<!-- Panel header -->
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Dismissible alerts</h4>
						
						<!-- Panel tool options -->
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
						<!-- /panel tool options -->
						
					</div>
					<!-- /panel header -->
					
					<!-- Panel body -->
					<div class="panel-body">
						<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Well done!</strong> You successfully read this important alert message. </div>
						<div class="alert alert-info alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
						<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Warning!</strong> Better check yourself, you're not looking too good. </div>
						<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
					</div>
					<!-- panel body -->
					
				</div>
				<!-- /panel dismissible alerts -->
				
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

<!-- Load bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<!-- Load metismenu JS -->
<script src="plugins/metismenu/js/jquery.metisMenu.js"></script>

<!-- Load block UI JS -->
<script src="plugins/blockui-master/js/jquery-ui.js"></script>
<script src="plugins/blockui-master/js/jquery.blockUI.js"></script>

<!-- Load custom Integral JS functions -->
<script src="js/functions.js"></script>
<!--Loader Js-->
<script src="js/loader.js"></script>

</body>
</html>
