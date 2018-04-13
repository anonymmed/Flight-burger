<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Basic Tables</title>
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
		<h1 class="page-title">Tables</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="basic-tables.html">Tables</a></li> 
			<li class="active"><strong>Basic Table</strong></li> 
		</ol>
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Simple Table</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead> 
									<tr> 
										<th>#</th> 
										<th>First Name</th> 
										<th>Last Name</th> 
										<th>Username</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">1</th> 
										<td>Mark</td> 
										<td>Otto</td> 
										<td>@mdo</td> 
									</tr> 
									<tr> 
										<th scope="row">2</th> 
										<td>Jacob</td> 
										<td>Thornton</td> 
										<td>@fat</td> 
									</tr> 
									<tr> 
										<th scope="row">3</th> 
										<td>Larry</td> 
										<td>the Bird</td> 
										<td>@twitter</td>
									 </tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Striped Rows</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead> 
									<tr> 
										<th>#</th> 
										<th>First Name</th> 
										<th>Last Name</th> 
										<th>Username</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">1</th> 
										<td>Mark</td> 
										<td>Otto</td> 
										<td>@mdo</td> 
									</tr> 
									<tr> 
										<th scope="row">2</th> 
										<td>Jacob</td> 
										<td>Thornton</td> 
										<td>@fat</td> 
									</tr> 
									<tr> 
										<th scope="row">3</th> 
										<td>Larry</td> 
										<td>the Bird</td> 
										<td>@twitter</td>
									 </tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Bordered table</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead> 
									<tr> 
										<th>#</th> 
										<th>First Name</th> 
										<th>Last Name</th> 
										<th>Username</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">1</th> 
										<td>Mark</td> 
										<td>Otto</td> 
										<td>@mdo</td> 
									</tr> 
									<tr> 
										<th scope="row">2</th> 
										<td>Jacob</td> 
										<td>Thornton</td> 
										<td>@fat</td> 
									</tr> 
									<tr> 
										<th scope="row">3</th> 
										<td>Larry</td> 
										<td>the Bird</td> 
										<td>@twitter</td>
									 </tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Hover rows</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead> 
									<tr> 
										<th>#</th> 
										<th>First Name</th> 
										<th>Last Name</th> 
										<th>Username</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">1</th> 
										<td>Mark</td> 
										<td>Otto</td> 
										<td>@mdo</td> 
									</tr> 
									<tr> 
										<th scope="row">2</th> 
										<td>Jacob</td> 
										<td>Thornton</td> 
										<td>@fat</td> 
									</tr> 
									<tr> 
										<th scope="row">3</th> 
										<td>Larry</td> 
										<td>the Bird</td> 
										<td>@twitter</td>
									 </tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Condensed table</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-condensed">
								<thead> 
									<tr> 
										<th>#</th> 
										<th>First Name</th> 
										<th>Last Name</th> 
										<th>Username</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">1</th> 
										<td>Mark</td> 
										<td>Otto</td> 
										<td>@mdo</td> 
									</tr> 
									<tr> 
										<th scope="row">2</th> 
										<td>Jacob</td> 
										<td>Thornton</td> 
										<td>@fat</td> 
									</tr> 
									<tr> 
										<th scope="row">3</th> 
										<td>Larry</td> 
										<td>the Bird</td> 
										<td>@twitter</td>
									 </tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h3 class="title">Custom Table</h3>
				<div class="table-responsive">
					<table class="table table-users table-bordered table-hover">
						<tbody>
							<tr>
								<td class="size-60 text-center"><div class="form-checkbox"><input type="checkbox" value="value1" name="name1"> <span class="check"><i class="fa fa-check"></i></span></div></td>
								<td class="size-80"><img title="" alt="" src="images/john-smith.png" class="avatar img-circle"></td>
								<td><strong>John Smith</strong></td>
								<td>Member since 2008</td>
								<td>Last login yesterday.</td>
								<td class="text-center"><span class="badge badge-bordered">Admin</span></td>
								<td class="text-center"><i class="icon-check icon-larger green-color"></i></td>
								<td class="size-80 text-center">
									<div class="dropdown">
										<a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="">Change Date Range</a></li>
											<li><a href="">Change Graph Type</a></li>
											<li><a href="">Other Settings</a> </li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td class="size-60 text-center"><div class="form-checkbox"><input type="checkbox" value="value2" name="name2"> <span class="check"><i class="fa fa-check"></i></span></div></td>
								<td><img title="" alt="" src="images/stella-johnson.png" class="avatar img-circle"></td>
								<td><strong>Stella Johnson</strong></td>
								<td>Recently joined in 2016</td>
								<td>Last login 5 days ago.</td>
								<td class="text-center"><span class="badge badge-bordered">operator</span></td>
								<td class="text-center"><i class="icon-cancel icon-larger red-color"></i></td>
								<td class="text-center">
									<div class="dropdown">
										<a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="">Change Date Range</a></li>
											<li><a href="">Change Graph Type</a></li>
											<li><a href="">Other Settings</a> </li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td class="size-60 text-center"><div class="form-checkbox"><input type="checkbox" value="value3" name="name3"> <span class="check"><i class="fa fa-check"></i></span></div></td>
								<td><img title="" alt="" src="images/domnic-brown.png" class="avatar img-circle"></td>
								<td><strong>John K Cooper</strong></td>
								<td>Member since 2011</td>
								<td>Last login 2 mins ago.</td>
								<td class="text-center"><span class="badge badge-bordered">operator</span></td>
								<td class="text-center"><i class="icon-check icon-larger green-color"></i></td>
								<td class="text-center">
									<div class="dropdown">
										<a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="">Change Date Range</a></li>
											<li><a href="">Change Graph Type</a></li>
											<li><a href="">Other Settings</a> </li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td class="size-60 text-center"><div class="form-checkbox"><input type="checkbox" value="value4" name="name4"> <span class="check"><i class="fa fa-check"></i></span></div></td>
								<td><img title="" alt="" src="images/alex-dolgove.png" class="avatar img-circle"></td>
								<td><strong>Alex Dolgove</strong></td>
								<td>Member since 2009</td>
								<td>Last login 1 year ago.</td>
								<td class="text-center"><span class="badge badge-bordered">operator</span></td>
								<td class="text-center"><i class="icon-check icon-larger green-color"></i></td>
								<td class="text-center">
									<div class="dropdown">
										<a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="">Change Date Range</a></li>
											<li><a href="">Change Graph Type</a></li>
											<li><a href="">Other Settings</a> </li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td class="size-60 text-center"><div class="form-checkbox"><input type="checkbox" value="value5" name="name5"> <span class="check"><i class="fa fa-check"></i></span></div></td>
								<td><img title="" alt="" src="images/man-3.jpg" class="avatar img-circle"></td>
								<td><strong>John Smith</strong></td>
								<td>Member since 2012</td>
								<td>Last login yesterday.</td>
								<td class="text-center"><span class="badge badge-bordered">customer</span></td>
								<td class="text-center"><i class="icon-check icon-larger green-color"></i></td>
								<td class="text-center">
									<div class="dropdown">
										<a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="">Change Date Range</a></li>
											<li><a href="">Change Graph Type</a></li>
											<li><a href="">Other Settings</a> </li>
										</ul>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
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
<!--Loader Js-->
<script src="js/loader.js"></script>

</body>
</html>
