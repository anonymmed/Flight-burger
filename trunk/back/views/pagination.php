﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Pagination</title>
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
		<h1 class="page-title">Pagination</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="panels.html">UI Elements</a></li> 
			<li class="active"><strong>Pagination</strong></li> 
		</ol>
		<!-- Pagination and Pager -->	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Pagination &amp; Pager</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body collapse in" id="collapsepanel">
						<div class="row"> 
							<div class="col-md-6"> 
								<p><strong>Normal Pagination</strong></p> 
								<ul class="pagination"> 
									<li><a href="#"><i class="icon-left-open-mini"></i></a></li>
									<li><a href="#">1</a></li> 
									<li class="active"><a href="#">2</a></li> 
									<li><a href="#">3</a></li> 
									<li class="disabled"><a href="#">4</a></li> 
									<li><a href="#">5</a></li> 
									<li><a href="#">6</a></li> 
									<li><a href="#"><i class="icon-right-open-mini"></i></a></li> 
								</ul> 
								<p><strong>Small Size</strong></p> 
								<ul class="pagination pagination-sm"> 
									<li><a href="#"><i class="icon-left-open-mini"></i></a></li> 
									<li><a href="#">1</a></li> 
									<li class="active"><a href="#">2</a></li> 
									<li><a href="#">3</a></li> 
									<li class="disabled"><a href="#">4</a></li> 
									<li><a href="#">5</a></li> 
									<li><a href="#">6</a></li> 
									<li><a href="#">7</a></li>
									<li><a href="#"><i class="icon-right-open-mini"></i></a></li> 
								</ul> 
								<p><strong>Large Size</strong></p>  
								<ul class="pagination pagination-lg"> 
									<li><a href="#"><i class="icon-left-open-mini"></i></a></li> 
									<li><a href="#">1</a></li> <li class="active"><a href="#">2</a></li> 
									<li><a href="#">3</a></li> <li><a href="#">4</a></li> 
									<li><a href="#"><i class="icon-right-open-mini"></i></a></li> 
								</ul> 
							</div> 
							<div class="col-md-6"> 
								<p><strong>Normal Pager</strong></p> 
								<ul class="pager"> 
									<li><a href="#"><i class="icon-left-thin"></i> Previous</a></li> 
									<li><a href="#">Next <i class="icon-right-thin"></i></a></li> 
								</ul> 
								<p><strong>Floated Pager</strong></p> 
								<ul class="pager"> 
									<li class="previous"><a href="#"><i class="icon-left-thin"></i> Previous</a></li> 
									<li class="next"><a href="#">Next <i class="icon-right-thin"></i></a></li> 
								</ul> 
								<p><strong>Disabled Pager</strong></p> 
								<ul class="pager"> 
									<li class="previous disabled"><a href="#"><i class="icon-left-thin"></i> Previous</a></li> 
									<li class="next"><a href="#">Next <i class="icon-right-thin"></i></a></li> 
								</ul> 
							</div> 
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
<script src="plugins/blockui-master/js/jquery-ui.js"></script>
<script src="plugins/blockui-master/js/jquery.blockUI.js"></script>
<script src="js/functions.js"></script>
<script src="js/loader.js"></script>
</body>
</html>
