<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Basic Forms</title>
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
		<h1 class="page-title">Basic Form Elements</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="form-basic.html">Forms</a></li> 
			<li class="active"><strong>Basic Form</strong></li> 
		</ol>
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Basic Form</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form>
							  <div class="form-group">
								<label for="emailaddress">Email address</label>
								<input type="email" class="form-control" id="emailaddress" placeholder="Email">
							  </div>
							  <div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password">
							  </div>
							  <div class="checkbox">
								<label><input type="checkbox">Check me out</label>
							  </div>
							  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Horizontal form</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal"> 
						 	<div class="form-group"> 
								<label class="col-sm-2 control-label" for="inputEmail3">Email</label> 
								<div class="col-sm-10"> 
									<input type="email" placeholder="Email" id="inputEmail3" class="form-control">
									<p class="help-block">Example block-level help text here.</p>
								 </div> 
							</div> 
							<div class="form-group"> 
								 <label class="col-sm-2 control-label" for="inputPassword3">Password</label> 
								 <div class="col-sm-10"> 
								   <input type="password" placeholder="Password" id="inputPassword3" class="form-control"> 
								 </div> 
							</div> 
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<div class="checkbox">
										 <label> <input type="checkbox"> Remember me </label> 
									</div> 
								</div> 
							</div> 
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<button class="btn btn-primary" type="submit">Sign in</button> 
								</div> 
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
						<h4 class="panel-title">Inline form</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-inline">
							  <div class="form-group">
								<input type="email" class="form-control" id="exampleInputName2" placeholder="Email">
							  </div>
							  <div class="form-group">
								<input  type="password" placeholder="Password" id="inputPassword2" class="form-control">
							  </div>
							  <button type="submit" class="btn btn-primary">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">Default form Elements</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal">
						 	<div class="form-group"> 
								<label class="col-sm-2 control-label">Normal</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control"> 
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Help text</label>
                                <div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Placeholder"> 
									<span class="help-block m-b-none">Example block-level help text here.</span>
                                </div>
                             </div>
							 <div class="line-dashed"></div>
							 <div class="form-group">
								<label class="col-sm-2 control-label">Disabled</label>
                                <div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Placeholder" disabled> 
                                </div>
                             </div>
							 <div class="line-dashed"></div>
							 <div class="form-group">
								<label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
									<input type="password" class="form-control" placeholder="Password"> 
                                </div>
                             </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
							 	<label class="col-sm-2 control-label">Textarea</label> 
								<div class="col-sm-10"> 
									<textarea placeholder="Textarea" class="form-control"></textarea> 
								</div> 
							</div>
							 <div class="line-dashed"></div>
							 <div class="form-group has-error"> 
							 	<label class="col-sm-2 control-label">Error field</label> 
								<div class="col-sm-10"> 
									<input type="text" class="form-control" placeholder="Placeholder"> 
								</div> 
							</div>
							 <div class="line-dashed"></div>
							 <div class="form-group has-warning"> 
							 	<label class="col-sm-2 control-label">Warning field</label> 
								<div class="col-sm-10"> 
									<input type="text" class="form-control" placeholder="Placeholder"> 
								</div> 
							</div>
							 <div class="line-dashed"></div>
							 <div class="form-group has-success"> 
							 	<label class="col-sm-2 control-label">Success field</label> 
								<div class="col-sm-10"> 
									<input type="text" class="form-control" placeholder="Placeholder"> 
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
							 	<label class="col-sm-2 control-label">Select List</label> 
								<div class="col-sm-10"> 
									<select class="form-control"> 
										<option>Option 1</option> 
										<option>Option 2</option>
										<option>Option 3</option> 
										<option>Option 4</option> 
										<option>Option 5</option> 
									</select>
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
							 	<label class="col-sm-2 control-label">File Field</label> 
								<div class="col-sm-10"> 
									<input type="file"  id="field-file" class="form-control">
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Inline checkboxes</label>
								<div class="col-sm-10">
									<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> A </label> 
									<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> B </label> 
									<label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> C </label>
								</div>
                            </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<div class="checkbox"> <label> <input type="checkbox">Checkbox 1</label> </div> 
								 	<div class="checkbox"> <label> <input type="checkbox">Checkbox 2</label> </div>
								 </div>
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<div class="radio"> <label> <input type="radio" value="option1" id="optionsradios1" name="optionsradios">Radio Input 1</label> </div> 
								 	<div class="radio"> <label> <input type="radio" value="option2" id="optionsradios2" name="optionsradios">Radio Input 2</label> </div>
								 </div>
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<div class="col-sm-offset-2 col-sm-10"> 
									<button class="btn btn-default" type="submit">Button</button> 
								</div> 
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
						<h4 class="panel-title">Control sizing</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">	
						 <form class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Large</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control input-lg"> 
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Normal</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control"> 
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Small</label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Placeholder" class="form-control input-sm"> 
								</div> 
							</div>
							<div class="line-dashed"></div>
							<div class="form-group"><label class="col-sm-2 control-label">Column sizing</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="col-md-2"><input type="text" class="form-control" placeholder=".col-md-2"></div>
										<div class="col-md-3"><input type="text" class="form-control" placeholder=".col-md-3"></div>
										<div class="col-md-4"><input type="text" class="form-control" placeholder=".col-md-4"></div>
									</div>
								</div>
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
						<h4 class="panel-title">Input Groups &amp; Addons </h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">	
						 <form class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Left addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon">@</span> 
										<input type="text" placeholder="Username" class="form-control"> 
									</div>
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Right addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<input type="text" class="form-control"> 
										<span class="input-group-addon">.00</span>
									</div>
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Both addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon">$</span>
										<input type="text"  class="form-control"> 
										<span class="input-group-addon">.00</span>
									</div>
								</div> 
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Icon addon</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon"><i class="icon-mail"></i></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label">Input addons</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-addon"><input type="checkbox"></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<span class="input-group-addon"><input type="radio"></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label">Buttons addons</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<input type="text"  class="form-control"> 
										<span class="input-group-btn"><button class="btn btn-success" type="button">Go!</button></span>
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label">With dropdowns</label> 
								<div class="col-sm-10"> 
									<div class="input-group"> 
										<div class="input-group-btn">
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<input type="text"  class="form-control"> 
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<input type="text"  class="form-control"> 
										<div class="input-group-btn">
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group"> 
								<label class="col-sm-2 control-label">Segmented</label> 
								<div class="col-sm-10">
									<div class="input-group"> 
										<div class="input-group-btn">
											<button type="button" class="btn btn-white" tabindex="-1">Action</button>
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<input type="text"  class="form-control">
									</div>
								</div> 
							 </div>
							 <div class="form-group"> 
								<div class="col-sm-10 col-sm-offset-2"> 
									<div class="input-group"> 
										<input type="text"  class="form-control">
										<div class="input-group-btn">
											<button type="button" class="btn btn-white" tabindex="-1">Action</button>
											<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
											<ul class="dropdown-menu pull-right">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div> 
							 </div>
							 <div class="line-dashed"></div>
							 <div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<button type="submit" class="btn btn-white">Cancel</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
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
<script src="js/functions.js"></script>
<!--Loader Js-->
<script src="js/loader.js"></script>
</body>
</html>
