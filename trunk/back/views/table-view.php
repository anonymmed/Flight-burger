<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Table View</title>
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

<link href="plugins/select2/css/select2.css" rel="stylesheet">

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
		  <div class="site-logo"><a href="index.php"><img src="images/logo.png" alt="Integral" title="Integral"></a></div>
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
	
	<!-- Secondary header -->
	<div class="header-secondary row">
		<div class="col-lg-12">
			<div class="page-heading clearfix">
				<h1 class="page-title pull-left">Users</h1><button class="btn btn-primary btn-sm btn-add">Add New</button>
			</div>
			<!-- Breadcrumb -->
			<ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="simple-view.php">List Views</a></li>
				<li class="active"><strong>Users</strong></li> 
			</ol>
			<div class="tab-wrapper clearfix">
				<ul class="nav nav-pills nav-pulls-default pull-left">
				  <li role="presentation"><a href="simple-view.php">STYLE 1</a></li>
				  <li role="presentation"><a href="cards-view.php">STYLE 2</a></li>
				  <li class="active" role="presentation"><a href="table-view.php">STYLE 3</a></li>
				</ul>
				<ul class="nav nav-pills nav-icons pull-right">
				  <li role="presentation"><a href="#"><i class="icon-layout"></i></a></li>
				  <li class="active" role="presentation"><a href="#"><i class="icon-list"></i></a></li>
				  <li role="presentation"><a href="#" class="toggle-filter" data-block-id="filter-box"><i class="fa fa-filter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /secondary header -->
	
	<!-- Filter wrapper -->
	<div class="row filter-wrapper visible-box" id="filter-box">
		<div class="col-lg-12">
			<div class="filter-header">
				<button aria-label="Close" class="close toggle-filter" type="button" data-block-id="filter-box"><i class="icon-cancel"></i></button>
				<h3 class="title">Filter Members</h3>
			</div>
			<form class="form-inline">
				<div class="form-group">
					<label class="form-label">Keywords</label>
					<input type="text" placeholder="Separate by commas..." class="form-control">
				</div>
				<div class="form-group">
					<label class="form-label">Member Since</label>
					<select class="select2 form-control">
						<option>2008</option>
						<option>2009</option>
						<option>2015</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-label">User Roles</label>
					<div class="checkbox-group">
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="admin">
							<label for="admin">Admin</label>
						</div>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="operator">
							<label for="operator">Operator</label>
						</div>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="customer">
							<label for="customer">Customer</label>
						</div>
					</div>
				</div>
				<div class="form-group filter-btn">
					<button class="btn btn-default">Filter</button>
				</div>
			</form>
		</div>
	</div>
	<!-- /filter wrapper -->
	
	<!-- Main content -->
	<div class="main-content">
		<div class="row datatable-wrapper form-inline">
			<div class="col-lg-12">
				<div class="data-col-first clearfix">
					<div class="col-checkbox col-space">
						<div class="form-checkbox">
							<input type="checkbox" value="checked" name="checked"> <span class="check"><i class="fa fa-check"></i></span>
						</div>
					</div>
					<div class="col-selectbox">
						<select class="form-control input-sm">
							<option>Bulk Action</option>
							<option>Bulk Action</option>
							<option>Bulk Action</option>
						</select>&nbsp;
						<button class="btn btn-primary btn-sm">Go</button>
					</div>
				</div>
				<div class="data-col-last clearfix">
					<div class="col-selectbox">
						<select class="form-control input-sm">
							<option>Sort By</option>
							<option>Sort By</option>
							<option>Sort By</option>
						</select>
					</div>
					<div class="col-selectbox">
						<select class="form-control input-sm">
							<option>25 Records</option>
							<option>10 Records</option>
							<option>50 Records</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-users table-hover">
				<thead>
					<tr>
						<th class="size-60"></th>
						<th class="size-80"></th>
						<th>Name</th>
						<th>Member since</th>
						<th>last login</th>
						<th class="text-center">role</th>
						<th class="text-center">active</th>
						<th class="size-80 text-center">actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="size-60"><div class="form-checkbox"><input type="checkbox" name="name1" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
						<td class="size-80"><img class="avatar img-circle" src="images/john-smith.png" alt="" title=""></td>
						<td><strong>John Smith</strong></td>
						<td>Member since 2008</td>
						<td>Last login yesterday.</td>
						<td class="text-center"><span class="badge badge-bordered">Admin</span></td>
						<td><i class="icon-check icon-larger green-color"></i></td>
						<td class="size-80">
							<div class="dropdown">
								<a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Date Range</a></li>
									<li><a href="">Change Graph Type</a></li>
									<li><a href="">Other Settings</a> </li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><div class="form-checkbox"><input type="checkbox" name="name2" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
						<td><img class="avatar img-circle" src="images/stella-johnson.png" alt="" title=""></td>
						<td><strong>Stella Johnson</strong></td>
						<td>Recently joined in 2016</td>
						<td>Last login 5 days ago.</td>
						<td class="text-center"><span class="badge badge-bordered">operator</span></td>
						<td><i class="icon-cancel icon-larger red-color"></i></td>
						<td>
							<div class="dropdown">
								<a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Date Range</a></li>
									<li><a href="">Change Graph Type</a></li>
									<li><a href="">Other Settings</a> </li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><div class="form-checkbox"><input type="checkbox" name="name3" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
						<td><img class="avatar img-circle" src="images/domnic-brown.png" alt="" title=""></td>
						<td><strong>John K Cooper</strong></td>
						<td>Member since 2011</td>
						<td>Last login 2 mins ago.</td>
						<td class="text-center"><span class="badge badge-bordered">operator</span></td>
						<td><i class="icon-check icon-larger green-color"></i></td>
						<td>
							<div class="dropdown">
								<a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Date Range</a></li>
									<li><a href="">Change Graph Type</a></li>
									<li><a href="">Other Settings</a> </li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><div class="form-checkbox"><input type="checkbox" name="name4" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
						<td><img class="avatar img-circle" src="images/alex-dolgove.png" alt="" title=""></td>
						<td><strong>Alex Dolgove</strong></td>
						<td>Member since 2009</td>
						<td>Last login 1 year ago.</td>
						<td class="text-center"><span class="badge badge-bordered">operator</span></td>
						<td><i class="icon-check icon-larger green-color"></i></td>
						<td>
							<div class="dropdown">
								<a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="">Change Date Range</a></li>
									<li><a href="">Change Graph Type</a></li>
									<li><a href="">Other Settings</a> </li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td><div class="form-checkbox"><input type="checkbox" name="name5" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
						<td><img class="avatar img-circle" src="images/man-3.jpg" alt="" title=""></td>
						<td><strong>John Smith</strong></td>
						<td>Member since 2012</td>
						<td>Last login yesterday.</td>
						<td class="text-center"><span class="badge badge-bordered">customer</span></td>
						<td><i class="icon-check icon-larger green-color"></i></td>
						<td>
							<div class="dropdown">
								<a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
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
<!-- Select2-->
<script src="plugins/select2/js/select2.full.min.js"></script>
<script src="plugins/select2/js/select2-script.js"></script>
<script src="js/functions.js"></script>
<script src="js/loader.js"></script>
</body>
</html>
