<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Form Wizard</title>
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
        ?>		<!-- /main header -->

		<!-- Main content -->
		<div class="main-content">
			<h1 class="page-title">Form Wizard</h1>
			<!-- Breadcrumb -->
			<ol class="breadcrumb breadcrumb-2">
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="form-basic.html">Forms</a></li>
				<li class="active"><strong>Form Wizard</strong></li>
			</ol>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Simple Form Wizard</h4>
							<ul class="panel-tool-options">
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form id="rootwizard" class="form-horizontal form-wizard">
								<div class="wizard-navbar">
									<ul>
										<li class="completed"><a href="#tab1" data-toggle="tab"><span>1</span> First</a></li>
										<li class="active"><a href="#tab2" data-toggle="tab"><span>2</span> Second</a></li>
										<li><a href="#tab3" data-toggle="tab"><span>3</span> Third</a></li>
										<li><a href="#tab4" data-toggle="tab"><span>4</span> Forth</a></li>
										<li><a href="#tab5" data-toggle="tab"><span>5</span> Fifth</a></li>
										<li><a href="#tab6" data-toggle="tab"><span>6</span> Sixth</a></li>
										<li><a href="#tab7" data-toggle="tab"><span>7</span> Seventh</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane" id="tab1">Step: 1</div>
									<div class="tab-pane active" id="tab2">Step: 2</div>
									<div class="tab-pane" id="tab3">Step: 3</div>
									<div class="tab-pane" id="tab4">Step: 4</div>
									<div class="tab-pane" id="tab5">Step: 5</div>
									<div class="tab-pane" id="tab6">Step: 6</div>
									<div class="tab-pane" id="tab7">Step: 7</div>
									<ul class="pager wizard">
										<li class="previous first"><a href="javascript:void(0)">First</a></li>
										<li class="previous"><a href="javascript:void(0)"><i class="icon-left-open"></i>Previous</a></li>
										<li class="next last"><a href="javascript:void(0)">Last</a> </li>
										<li class="next"><a href="javascript:void(0)">Next <i class="icon-right-open"></i></a> </li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Form Wizard with Validation</h4>
							<ul class="panel-tool-options">
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form id="rootwizard-2" class="form-wizard validate-form-wizard validate">
								<div class="wizard-navbar">
									<ul>
										<li class="active"><a href="#tab2-1" data-toggle="tab"><span>1</span> Account Information</a></li>
										<li><a href="#tab2-2" data-toggle="tab"><span>2</span> Personal Information</a></li>
										<li><a href="#tab2-3" data-toggle="tab"><span>3</span> Payment Information</a></li>
										<li><a href="#tab2-4" data-toggle="tab"><span>4</span> Confirm and Finish</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane  active" id="tab2-1">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="username" class="control-label">Username</label>
													<input placeholder="Username" type="text" class="form-control required" name="username" id="username">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="password" class="control-label">Password</label>
													<input placeholder="Password" type="password" class="form-control required" name="password" id="password">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="confirmpassword" class="control-label">Confirm password</label>
													<input placeholder="Confirm Password" type="password" class="form-control required" name="confirmpassword" id="confirmpassword">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="email" class="control-label">Email</label>
													<input placeholder="Please enter your email" type="text" class="form-control required email" name="email" id="email">
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2-2">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="name" class="control-label">Full Name</label>
													<input placeholder="Name" type="text" class="form-control required" name="name" id="name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="emailfield" class="control-label">Email</label>
													<input placeholder="Please enter your email" type="text" class="form-control required email" name="emailfield" id="emailfield">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="about" class="control-label">Write Something About You</label>
													<textarea id="about" class="form-control" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2-3">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cardholdername" class="control-label">Card Holder Name</label>
													<input placeholder="Card Holder Name" type="text" class="form-control required" name="cardholdername" id="cardholdername">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cardnumber" class="control-label">Card Number</label>
													<input placeholder="Card Number" type="text" class="form-control required" name="cardnumber" id="cardnumber">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cvc" class="control-label">CVC</label>
													<input placeholder="CVC" type="text" class="form-control required" name="cvc" id="cvc">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="cardtype" class="control-label">Card Type</label>
													<input placeholder="Card Type" type="text" class="form-control required" name="cardtype" id="cardtype">
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2-4">
										<h3 class="title text-info">Terms and Conditions</h3>
										<p><strong>Lorem</strong> Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										<div class="checkbox">
											<label><input type="checkbox">I agree with the Terms and Conditions.</label>
										</div>
									</div>
									<ul class="pager wizard">
										<li class="previous"><a href="javascript:void(0)"><i class="icon-left-open"></i>Previous</a></li>
										<li class="next"><a href="javascript:void(0)">Next<i class="icon-right-open"></i></a> </li>
									</ul>
								</div>
							</form>
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
<!--Ajax Validattion-->
<script src="js/jquery.validate.min.js"></script>
<!--Bootstrap Wizard-->
<script src="plugins/wizard/js/jquery.bootstrap.wizard.min.js"></script>
<script src="plugins/wizard/js/wizard-script.js"></script>

<script src="js/functions.js"></script>
<!--Loader Js-->
<script src="js/loader.js"></script>
</body>
</html>
