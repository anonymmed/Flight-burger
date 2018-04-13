<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Typography</title>
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
        <?php include ('main-navigation.php'); echo $main_navigation; ?>
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
			<h1 class="page-title">Typography</h1>
			<!-- Breadcrumb -->
			<ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
				<li><a href="panels.html">UI Elements</a></li> 
				<li class="active"><strong>Typography</strong></li> 
			</ol>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Headings</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<h1>Heading 1 <small>Secondary text</small></h1>
							<h2>Heading 2 <small>Secondary text</small></h2>
							<h3>Heading 3 <small>Secondary text</small></h3>
							<h4>Heading 4 <small>Secondary text</small></h4>
							<h5>Heading 5 <small>Secondary text</small></h5>
							<h6>Heading 6 <small>Secondary text</small></h6>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Paragraphs</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<p><strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the <em>industry's standard</em> dummy text ever since the 1500s, <code>code</code> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including.</p>
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Text classes</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p> 
							<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p> 
							<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p> 
							<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p> 
							<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p> 
							<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
							<div class="height-15"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Grouped List</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<ul class="list-group"> 
								<li class="list-group-item"><span class="badge badge-primary">8</span> Tellus ac cursus commodo</li> 							
								<li class="list-group-item"><span class="badge badge-danger">4</span> Duis mollis, est non nisi</li> 
								<li class="list-group-item"><span class="badge badge-success">6</span> Sed diam eget risus varius</li> 
								<li class="list-group-item"><span class="badge badge-info">7</span> Dapibus ac facilisis in</li>
								<li class="list-group-item"><span class="badge badge-warning">9</span> Malesuada magna mollis</li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Unordered List</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<ul> 
								<li>Lorem ipsum dolor sit amet</li> 
								<li>Consectetur adipiscing elit</li> 
								<li>Integer molestie lorem at massa</li> 
								<li>Facilisis in pretium nisl aliquet</li> 
								<li>Nulla volutpat aliquam velit 
									<ul> 
										<li>Phasellus iaculis neque</li> 
										<li>Purus sodales ultricies</li> 
										<li>Vestibulum laoreet porttitor</li> 
										<li>Ac tristique libero volutpat at</li> 
									</ul> 
								</li> 
								<li>Faucibus porta lacus fringilla vel</li> 
								<li>Aenean sit amet erat nunc</li> 
								<li>Eget porttitor lorem</li> 
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Unstyled List</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled"> 
								<li>Lorem ipsum dolor sit amet</li> 
								<li>Consectetur adipiscing elit</li> 
								<li>Integer molestie lorem at massa</li> 
								<li>Facilisis in pretium nisl aliquet</li> 
								<li>Nulla volutpat aliquam velit 
									<ul> 
										<li>Phasellus iaculis neque</li> 
										<li>Purus sodales ultricies</li> 
										<li>Vestibulum laoreet porttitor sem</li> 
										<li>Ac tristique libero volutpat at</li> 
									</ul> 
								</li> 
								<li>Faucibus porta lacus fringilla vel</li> 
								<li>Aenean sit amet erat nunc</li> 
								<li>Eget porttitor lorem</li> 
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Ordered List</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<ol> 
								<li>Lorem ipsum dolor sit amet</li> 
								<li>Consectetur adipiscing elit</li> 
								<li>Integer molestie lorem at massa</li> 
								<li>Facilisis in pretium nisl aliquet</li> 
								<li>Nulla volutpat aliquam velit</li> 
								<li>Faucibus porta lacus fringilla vel</li> 
								<li>Aenean sit amet erat nunc</li> 
								<li>Maecenas sed diam eget risus varius</li> 
								<li>Donec ullamcorper nulla non metus</li> 
								<li>Nullam id dolor id nibh ultricies</li> 
								<li>Fusce dapibus, tellus ac cursus</li> 
								<li>Ullamcorper molestie lorem massa</li> 
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Blockquotes</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<p><strong>Basic Blockquote</strong></p>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
							<hr>
							<p><strong>Pulled Right</strong></p>
							<blockquote class="blockquote-reverse">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Wells</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<div class="well">
								<h3 class="title">The quick, brown fox jumps over a lazy dog.</h3>
								I feel the presence of the Almighty, who formed us in his own image, and the breath
							</div>
							<div class="well well-lg">
								<h3 class="title">The quick, brown fox jumps over a lazy dog.</h3>
								I feel the presence of the Almighty, who formed us in his own image, and the breath
							</div>
							<div class="well well-sm">
								<h3 class="title">The quick, brown fox jumps over a lazy dog.</h3>
								I feel the presence of the Almighty, who formed us in his own image, and the breath
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Address</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<address>
								<strong>Twitter, Inc.</strong><br>
								1355 Market Street, Suite 900<br>
								Other info, some here<br>
								San Francisco, CA 94103<br>
								<abbr title="Phone">P:</abbr> (123) 456-7890
							</address>
							<address>
								<strong>Full Name</strong><br>
								<a href="mailto:#">first.last@example.com</a>
							</address>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Alignment</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<p class="text-left">Left aligned text.</p>
							<p class="text-center">Center aligned text.</p>
							<p class="text-right">Right aligned text.</p>
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
