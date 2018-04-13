﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Glyph Icons</title>
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
      echo $main_header;
      ?>	<!-- /main header -->
	
	<!-- Main content -->
	<div class="main-content">
		<h1 class="page-title">Glyphicons</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="icons-entypo.html">Icons</a></li> 
			<li class="active"><strong>Glyphicons</strong></li> 
		</ol>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Glyphicons icon set</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="row icons-showcase">
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-asterisk"></i> glyphicon-asterisk</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-plus"></i> glyphicon-plus</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-euro"></i> glyphicon-euro</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-eur"></i> glyphicon-eur</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-minus"></i> glyphicon-minus</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cloud"></i> glyphicon-cloud</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-envelope"></i> glyphicon-envelope</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-pencil"></i> glyphicon-pencil</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-glass"></i> glyphicon-glass</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-music"></i> glyphicon-music</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-search"></i> glyphicon-search</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-heart"></i> glyphicon-heart</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-star"></i> glyphicon-star</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-star-empty"></i> glyphicon-star-empty</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-user"></i> glyphicon-user</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-film"></i> glyphicon-film</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-th-large"></i> glyphicon-th-large</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-th"></i> glyphicon-th</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-th-list"></i> glyphicon-th-list</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ok"></i> glyphicon-ok</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-remove"></i> glyphicon-remove</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-zoom-in"></i> glyphicon-zoom-in</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-zoom-out"></i> glyphicon-zoom-out</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-off"></i> glyphicon-off</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-signal"></i> glyphicon-signal</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cog"></i> glyphicon-cog</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-trash"></i> glyphicon-trash</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-home"></i> glyphicon-home</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-file"></i> glyphicon-file</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-time"></i> glyphicon-time</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-road"></i> glyphicon-road</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-download-alt"></i> glyphicon-download-alt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-download"></i> glyphicon-download</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-upload"></i> glyphicon-upload</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-inbox"></i> glyphicon-inbox</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-play-circle"></i> glyphicon-play-circle</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-repeat"></i> glyphicon-repeat</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-refresh"></i> glyphicon-refresh</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-list-alt"></i> glyphicon-list-alt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-lock"></i> glyphicon-lock</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-flag"></i> glyphicon-flag</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-headphones"></i> glyphicon-headphones</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-volume-off"></i> glyphicon-volume-off</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-volume-down"></i> glyphicon-volume-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-volume-up"></i> glyphicon-volume-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-qrcode"></i> glyphicon-qrcode</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-barcode"></i> glyphicon-barcode</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tag"></i> glyphicon-tag</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tags"></i> glyphicon-tags</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-book"></i> glyphicon-book</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bookmark"></i> glyphicon-bookmark</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-print"></i> glyphicon-print</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-camera"></i> glyphicon-camera</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-font"></i> glyphicon-font</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bold"></i> glyphicon-bold</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-italic"></i> glyphicon-italic</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-text-height"></i> glyphicon-text-height</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-text-width"></i> glyphicon-text-width</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-left"></i> glyphicon-align-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-center"></i> glyphicon-align-center</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-right"></i> glyphicon-align-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-align-justify"></i> glyphicon-align-justify</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-list"></i> glyphicon-list</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-indent-left"></i> glyphicon-indent-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-indent-right"></i> glyphicon-indent-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-facetime-video"></i> glyphicon-facetime-video</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-picture"></i> glyphicon-picture</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-map-marker"></i> glyphicon-map-marker</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-adjust"></i> glyphicon-adjust</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tint"></i> glyphicon-tint</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-edit"></i> glyphicon-edit</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-share"></i> glyphicon-share</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-check"></i> glyphicon-check</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-move"></i> glyphicon-move</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-step-backward"></i> glyphicon-step-backward</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fast-backward"></i> glyphicon-fast-backward</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-backward"></i> glyphicon-backward</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-play"></i> glyphicon-play</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-pause"></i> glyphicon-pause</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-stop"></i> glyphicon-stop</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-forward"></i> glyphicon-forward</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fast-forward"></i> glyphicon-fast-forward</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-step-forward"></i> glyphicon-step-forward</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-eject"></i> glyphicon-eject</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-left"></i> glyphicon-chevron-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-right"></i> glyphicon-chevron-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-plus-sign"></i> glyphicon-plus-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-minus-sign"></i> glyphicon-minus-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-remove-sign"></i> glyphicon-remove-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ok-sign"></i> glyphicon-ok-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-question-sign"></i> glyphicon-question-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-info-sign"></i> glyphicon-info-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-screenshot"></i> glyphicon-screenshot</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-remove-circle"></i> glyphicon-remove-circle</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ok-circle"></i> glyphicon-ok-circle</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ban-circle"></i> glyphicon-ban-circle</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-left"></i> glyphicon-arrow-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-right"></i> glyphicon-arrow-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-up"></i> glyphicon-arrow-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-arrow-down"></i> glyphicon-arrow-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-share-alt"></i> glyphicon-share-alt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-full"></i> glyphicon-resize-full</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-small"></i> glyphicon-resize-small</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-exclamation-sign"></i> glyphicon-exclamation-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-gift"></i> glyphicon-gift</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-leaf"></i> glyphicon-leaf</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fire"></i> glyphicon-fire</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-eye-open"></i> glyphicon-eye-open</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-eye-close"></i> glyphicon-eye-close</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-warning-sign"></i> glyphicon-warning-sign</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-plane"></i> glyphicon-plane</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-calendar"></i> glyphicon-calendar</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-random"></i> glyphicon-random</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-comment"></i> glyphicon-comment</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-magnet"></i> glyphicon-magnet</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-up"></i> glyphicon-chevron-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-chevron-down"></i> glyphicon-chevron-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-retweet"></i> glyphicon-retweet</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-shopping-cart"></i> glyphicon-shopping-cart</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-folder-close"></i> glyphicon-folder-close</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-folder-open"></i> glyphicon-folder-open</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-vertical"></i> glyphicon-resize-vertical</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-resize-horizontal"></i> glyphicon-resize-horizontal</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hdd"></i> glyphicon-hdd</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bullhorn"></i> glyphicon-bullhorn</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bell"></i> glyphicon-bell</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-certificate"></i> glyphicon-certificate</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-thumbs-up"></i> glyphicon-thumbs-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-thumbs-down"></i> glyphicon-thumbs-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-right"></i> glyphicon-hand-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-left"></i> glyphicon-hand-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-up"></i> glyphicon-hand-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hand-down"></i> glyphicon-hand-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-right"></i> glyphicon-circle-arrow-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-left"></i> glyphicon-circle-arrow-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-up"></i> glyphicon-circle-arrow-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-circle-arrow-down"></i> glyphicon-circle-arrow-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-globe"></i> glyphicon-globe</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-wrench"></i> glyphicon-wrench</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tasks"></i> glyphicon-tasks</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-filter"></i> glyphicon-filter</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-briefcase"></i> glyphicon-briefcase</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-fullscreen"></i> glyphicon-fullscreen</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-dashboard"></i> glyphicon-dashboard</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-paperclip"></i> glyphicon-paperclip</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-heart-empty"></i> glyphicon-heart-empty</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-link"></i> glyphicon-link</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-phone"></i> glyphicon-phone</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-pushpin"></i> glyphicon-pushpin</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-usd"></i> glyphicon-usd</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-gbp"></i> glyphicon-gbp</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort"></i> glyphicon-sort</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-alphabet"></i> glyphicon-sort-by-alphabet</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-alphabet-alt"></i> glyphicon-sort-by-alphabet-alt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-order"></i> glyphicon-sort-by-order</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-order-alt"></i> glyphicon-sort-by-order-alt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-attributes"></i> glyphicon-sort-by-attributes</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sort-by-attributes-alt"></i> glyphicon-sort-by-attributes-alt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-unchecked"></i> glyphicon-unchecked</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-expand"></i> glyphicon-expand</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-collapse-down"></i> glyphicon-collapse-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-collapse-up"></i> glyphicon-collapse-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-log-in"></i> glyphicon-log-in</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-flash"></i> glyphicon-flash</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-log-out"></i> glyphicon-log-out</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-new-window"></i> glyphicon-new-window</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-record"></i> glyphicon-record</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-save"></i> glyphicon-save</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-open"></i> glyphicon-open</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-saved"></i> glyphicon-saved</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-import"></i> glyphicon-import</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-export"></i> glyphicon-export</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-send"></i> glyphicon-send</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-disk"></i> glyphicon-floppy-disk</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-saved"></i> glyphicon-floppy-saved</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-remove"></i> glyphicon-floppy-remove</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-save"></i> glyphicon-floppy-save</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-floppy-open"></i> glyphicon-floppy-open</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-credit-card"></i> glyphicon-credit-card</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-transfer"></i> glyphicon-transfer</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cutlery"></i> glyphicon-cutlery</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-header"></i> glyphicon-header</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-compressed"></i> glyphicon-compressed</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-earphone"></i> glyphicon-earphone</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-phone-alt"></i> glyphicon-phone-alt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tower"></i> glyphicon-tower</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-stats"></i> glyphicon-stats</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sd-video"></i> glyphicon-sd-video</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hd-video"></i> glyphicon-hd-video</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-subtitles"></i> glyphicon-subtitles</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-stereo"></i> glyphicon-sound-stereo</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-dolby"></i> glyphicon-sound-dolby</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-5-1"></i> glyphicon-sound-5-1</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-6-1"></i> glyphicon-sound-6-1</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sound-7-1"></i> glyphicon-sound-7-1</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-copyright-mark"></i> glyphicon-copyright-mark</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-registration-mark"></i> glyphicon-registration-mark</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cloud-download"></i> glyphicon-cloud-download</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cloud-upload"></i> glyphicon-cloud-upload</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tree-conifer"></i> glyphicon-tree-conifer</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tree-deciduous"></i> glyphicon-tree-deciduous</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-cd"></i> glyphicon-cd</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-save-file"></i> glyphicon-save-file</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-open-file"></i> glyphicon-open-file</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-level-up"></i> glyphicon-level-up</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-copy"></i> glyphicon-copy</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-paste"></i> glyphicon-paste</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-alert"></i> glyphicon-alert</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-equalizer"></i> glyphicon-equalizer</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-king"></i> glyphicon-king</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-queen"></i> glyphicon-queen</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-pawn"></i> glyphicon-pawn</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bishop"></i> glyphicon-bishop</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-knight"></i> glyphicon-knight</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-baby-formula"></i> glyphicon-baby-formula</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-tent"></i> glyphicon-tent</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-blackboard"></i> glyphicon-blackboard</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bed"></i> glyphicon-bed</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-apple"></i> glyphicon-apple</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-erase"></i> glyphicon-erase</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-hourglass"></i> glyphicon-hourglass</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-lamp"></i> glyphicon-lamp</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-duplicate"></i> glyphicon-duplicate</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-piggy-bank"></i> glyphicon-piggy-bank</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-scissors"></i> glyphicon-scissors</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-bitcoin"></i> glyphicon-bitcoin</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-btc"></i> glyphicon-btc</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-xbt"></i> glyphicon-xbt</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-yen"></i> glyphicon-yen</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-jpy"></i> glyphicon-jpy</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ruble"></i> glyphicon-ruble</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-rub"></i> glyphicon-rub</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-scale"></i> glyphicon-scale</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ice-lolly"></i> glyphicon-ice-lolly</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-ice-lolly-tasted"></i> glyphicon-ice-lolly-tasted</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-education"></i> glyphicon-education</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-option-horizontal"></i> glyphicon-option-horizontal</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-option-vertical"></i> glyphicon-option-vertical</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-menu-hamburger"></i> glyphicon-menu-hamburger</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-modal-window"></i> glyphicon-modal-window</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-oil"></i> glyphicon-oil</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-grain"></i> glyphicon-grain</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-sunglasses"></i> glyphicon-sunglasses</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-text-size"></i> glyphicon-text-size</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-text-color"></i> glyphicon-text-color</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-text-background"></i> glyphicon-text-background</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-object-align-top"></i> glyphicon-object-align-top</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-object-align-bottom"></i> glyphicon-object-align-bottom</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-object-align-horizontal"></i> glyphicon-object-align-horizontal</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-object-align-left"></i> glyphicon-object-align-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-object-align-vertical"></i> glyphicon-object-align-vertical</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-object-align-right"></i> glyphicon-object-align-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-triangle-right"></i> glyphicon-triangle-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-triangle-left"></i> glyphicon-triangle-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-triangle-bottom"></i> glyphicon-triangle-bottom</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-triangle-top"></i> glyphicon-triangle-top</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-console"></i> glyphicon-console</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-superscript"></i> glyphicon-superscript</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-subscript"></i> glyphicon-subscript</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-menu-left"></i> glyphicon-menu-left</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-menu-right"></i> glyphicon-menu-right</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-menu-down"></i> glyphicon-menu-down</div>
						  <div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-menu-up"></i> glyphicon-menu-up</div>
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
<!--Loader Js-->
<script src="js/loader.js"></script>

</body>
</html>
