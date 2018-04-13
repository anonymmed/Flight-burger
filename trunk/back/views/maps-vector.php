<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Vector Map</title>
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

<!--Jvector Map-->
<link href="plugins/jvectormap/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">

<link href="css/integral-forms.css" rel="stylesheet">

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
		<h1 class="page-title">Vector Map</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li class="active"><strong>Vector Map</strong></li> 
		</ol>
		
		<div class="row">
			
			<div class="col-md-12"> 
				<div class="panel panel-default">
					<div class="panel-heading no-border clearfix"> 
						<h4 class="panel-title text-uppercase">World Map</h4>
						<ul class="panel-tool-options"> 
							<li class="dropdown">
								<a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-2x"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
									<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
									<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
								</ul>
							 </li>
						</ul> 
					</div>
					 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="jvectormap-section" id="world-map-markers" style="height: 400px"></div>
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

<!-- Load bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<!-- Load metismenu JS -->
<script src="plugins/metismenu/js/jquery.metisMenu.js"></script>

<script src="plugins/blockui-master/js/jquery-ui.js"></script>
<script src="plugins/blockui-master/js/jquery.blockUI.js"></script>

<!--Jvector Map-->
<script src="plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/jvectormap/js/jvectormap-script.js"></script>

<!-- Load custom Integral JS functions -->
<script src="js/functions.js"></script>
<script src="js/loader.js"></script>

</body>
</html>
