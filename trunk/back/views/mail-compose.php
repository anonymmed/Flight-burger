<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Mailbox</title>
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

<!--Bootstrap-wysihtml5-->
<link href="plugins/bootstrap-wysihtml5/css/bootstrap-wysihtml5.css" rel="stylesheet">

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
	
	<!-- Main content -->
	<div class="main-content">
		
		<div class="row">
			<div class="col-lg-3">
				<p><a class="btn btn-block btn-secondary" href="mail-compose.php">Compose</a></p>
				<ul class="list-unstyled mail-list">
					<li>
						<a href="mail-inbox.php"><i class="fa fa-inbox"></i> Inbox <b>(6)</b></a>
					</li>
					<li>
						<a href="#/"><i class="fa fa-send-o"></i> Sent</a>					
					</li>
					<li>
						<a href="#/"><i class="fa fa-edit"></i> Drafts <b>(15)</b></a>					
					</li>
					<li>
						<a href="#/"><i class="fa fa-star-o"></i> Important</a>					
					</li>
					<li>
						<a href="#/"><i class="fa fa-trash-o"></i> Trash <b>(205)</b></a>					
					</li>
				</ul>
				
				<h4 class="text-uppercase m-l-20">Labels</h4>
				<ul class="list-unstyled category-list">
					<li><a href="#"> <i class="fa fa-circle text-purple"></i> Work </a></li>
					<li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
					<li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
					<li><a href="#"> <i class="fa fa-circle text-royalblue"></i> Social</a></li>
					<li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
				</ul>
			</div>
			<div class="col-lg-9">
			
				<div class="mail-box">
					<div class="mail-box-header clearfix">
						<h3 class="mail-title">Compose mail</h3>
						<div class="pull-right tooltip-demo">
							<a title="Move to Draft" data-placement="top" data-toggle="tooltip" class="btn btn-sm" href="#/"><i class="fa fa-pencil"></i> Draft</a>
							<a title="Discard email" data-placement="top" data-toggle="tooltip" class="btn btn-secondary btn-sm" href="#/"><i class="fa fa-times"></i> Discard</a>						</div>
					</div>
					<div class="mail-body">
						 <form>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="To">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input type="email" class="form-control" placeholder="Cc">
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control" placeholder="Bcc">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<textarea class="wysihtml5 form-control" placeholder="Message body" style="height: 200px"></textarea>
							</div>
							<hr>
							<div class="form-group text-right">
								<a title="Send" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-sm" href="#/"><i class="fa fa-reply"></i> Send</a>
								<a title="Discard Email" data-placement="top" data-toggle="tooltip" class="btn btn-sm" href="#/"><i class="fa fa-times"></i> Discard</a>
								<a title="Move to Draft" data-placement="top" data-toggle="tooltip" class="btn btn-sm" href="#/"><i class="fa fa-pencil"></i> Draft</a>							</div>
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

<!-- Load bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<!-- Load metismenu JS -->
<script src="plugins/metismenu/js/jquery.metisMenu.js"></script>

<!--Bootstrap-wysihtml5 Editor-->
<script src="plugins/bootstrap-wysihtml5/js/wysihtml5-0.3.0.min.js"></script>
<script src="plugins/bootstrap-wysihtml5/js/bootstrap-wysihtml5.js"></script>
<script src="plugins/bootstrap-wysihtml5/js/wysihtml5-script.js"></script>

<!-- Load custom Integral JS functions -->
<script src="js/functions.js"></script>
<script src="js/loader.js"></script>

</body>
</html>
