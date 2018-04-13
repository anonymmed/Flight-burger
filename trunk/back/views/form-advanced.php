<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Advanced Plugins</title>
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

<link href="plugins/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
<link href="plugins/colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet">
<link href="plugins/nouislider/css/nouislider.css" rel="stylesheet">
<link href="plugins/select2/css/select2.css" rel="stylesheet">
<link href="css/integral-forms.css" rel="stylesheet" >

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
			<h1 class="page-title">Advanced Form Elements</h1>
			<!-- Breadcrumb -->
			<ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
				<li><a href="form-basic.html">Forms</a></li> 
				<li class="active"><strong>Advanced Form Elements</strong></li> 
			</ol>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Date Picker</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Date Picker (inline)</label> 
									<div class="col-sm-5"> 
										<div id="datepicker"></div>
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Date Picker (popup)</label> 
									<div class="col-sm-3"> 
										<div id="date-popup" class="input-group date"> 
											<input type="text" data-format="D, dd MM yyyy" class="form-control"> 
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
										</div>
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">One Year view</label> 
									<div class="col-sm-3"> 
										<div id="year-view" class="input-group date"> 
											<input type="text" value="03/07/2016" class="form-control"> 
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
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
							<h4 class="panel-title">Input Mask</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Numeric Mask</label> 
									<div class="col-sm-5"> 
										<input type="text" data-mask="999-99-999-9999-9" class="form-control"><br>
										<input type="text" data-mask="999 99 999 9999 9" class="form-control"><br>
										<input type="text" data-mask="999/99/999/9999/9" class="form-control">
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Date</label> 
									<div class="col-sm-5"> 
										<input type="text" data-mask="99/99/9999" class="form-control"><br>
										<input type="text" data-mask="9999/99/99" class="form-control">
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Currency</label> 
									<div class="col-sm-5"> 
										<input type="text" data-mask="$ 999,999,999.99" class="form-control">
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Tax ID</label> 
									<div class="col-sm-5"> 
										<input type="text" data-mask="99-9999999" class="form-control">
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Phone</label> 
									<div class="col-sm-5"> 
										<input type="text" data-mask="(999) 999-9999" class="form-control">
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
							<h4 class="panel-title">Selectbox Replacement</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Select2</label> 
									<div class="col-sm-5"> 
										<select class="select2 form-control">
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
											<option value="4">Option 4</option>
											<option value="5">Option 5</option>
										</select>
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Select2 Multiple</label> 
									<div class="col-sm-5"> 
										<select name="selectMultiple" class="select2 form-control" data-placeholder="Select states" multiple> 
											<option value="">Select states</option>
											<option value="1" >Alabama</option> 
											<option value="3" >Ohaio</option> 
											<option value="2" >Boston</option> 
											<option value="5" >Washington</option> 
											<option value="4" >New York</option> 
											<option value="11" >Bostons</option> 
											<option value="10" >Alabama</option>
											<option value="12" >Ohaio</option>
											<option value="13" >New York</option> 
											<option value="14" >Washington II</option> 
										</select>
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Select2 Placeholer</label> 
									<div class="col-sm-5"> 
										<select class="select2-placeholer form-control" data-placeholder="Select a state">
											<option value="">Select a state</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
										</select>
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
							<h4 class="panel-title">Color Picker</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Color Picker (Simple)</label> 
									<div class="col-sm-5"> 
										<input type="text" class="form-control colorpicker colorpicker-element">
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Color Picker (RGBA)</label> 
									<div class="col-sm-5"> 
										<input type="text"  class="form-control colorpicker colorpicker-element">
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Color Picker (Horizontal)</label> 
									<div class="col-sm-5"> 
										<input type="text" data-horizontal="true" class="form-control colorpicker colorpicker-element">
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Color Picker Droplet</label>
									<div class="col-sm-5"> 
										<div class="input-group color-picker"> 
											<span class="input-group-addon"><i class="icon-droplet"></i></span>
											<input type="text" data-format="hex" class="form-control colorpicker colorpicker-element"> 
										</div> 
									</div> 
								</div>
								<div class="line-dashed"></div>
								<div class="form-group"> 
									<label class="col-sm-3 control-label">Color Picker Color Preview</label> 
									<div class="col-sm-5"> 
										<div class="input-group color-picker"> 
											<input type="text" value="#ffc502" data-format="hex" class="form-control colorpicker colorpicker-element"> 
											<span class="input-group-addon"><i class="icon-color-preview"></i></span> 
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
							<h4 class="panel-title">Range Slider</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<p><strong>Simple and clean range select slider.</strong></p>
									<div id="drag-fixed"></div>
								</div>
							</div>
							<p></p>
							<div class="row">
								<div class="col-lg-6">
									<p><strong>Basic example</strong></p>
									<div id="basic-slider"></div>
								</div>
								<div class="col-lg-6">
									<p><strong>Range select example</strong></p>
									<div id="range-slider"></div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Replaced Checkboxes &amp; Radio</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group">
									<div class="col-md-6">
										<label>Checkboxes</label>
										<div class="checkbox checkbox-replace">
											<input type="checkbox" id="checkbox1">
											<label for="checkbox1">Checkbox 1</label>
										</div>
										<div class="checkbox checkbox-replace">
											<input type="checkbox" id="checkbox2">
											<label for="checkbox2">Checkbox 2</label>
										</div>
										<div class="checkbox checkbox-replace">
											<input type="checkbox" id="checkbox3">
											<label for="checkbox3">Checkbox 3</label>
										</div>
										<div class="checkbox checkbox-replace">
											<input type="checkbox" id="disabled" disabled>
											<label for="disabled">Disabled</label>
										</div>
										<div class="checkbox checkbox-replace">
											<input type="checkbox" id="disabled-checked" disabled="disabled" checked="checked">
											<label for="disabled-checked">Checked &amp; Disabled</label>
										</div>
									</div>
									<div class="line-dashed hidden-md hidden-lg"></div>
									<div class="col-md-6">
										<label>Checkboxes Colors</label>
										<div class="checkbox checkbox-replace checkbox-primary">
											<input type="checkbox" id="checkbox6" checked="checked">
											<label for="checkbox6">Primary</label>
										</div>
										<div class="checkbox checkbox-replace checkbox-success">
											<input type="checkbox" id="checkbox7" checked="checked">
											<label for="checkbox7">Success</label>
										</div>
										<div class="checkbox checkbox-replace checkbox-info">
											<input type="checkbox" id="checkbox8">
											<label for="checkbox8">Info</label>
										</div>
										<div class="checkbox checkbox-replace checkbox-warning">
											<input type="checkbox" id="checkbox9">
											<label for="checkbox9">Warning</label>
										</div>
										<div class="checkbox checkbox-replace checkbox-danger">
											<input type="checkbox" id="checkbox10" checked="checked">
											<label for="checkbox10">Check me out </label>
										</div>
									</div>
								</div>
								<div class="line-dashed"></div>
								<div class="form-group">
									<div class="col-lg-12">
										<label>Inline checkboxes</label>
										<div class="clearfix">
											<div class="checkbox checkbox-inline checkbox-replace"><input type="checkbox" value="option1" id="inlineCheckbox1"><label for="inlineCheckbox1">Checkbox A</label></div> 
											<div class="checkbox checkbox-inline checkbox-replace"><input type="checkbox" value="option2" id="inlineCheckbox2"><label for="inlineCheckbox2">Checkbox B</label></div> 
											<div class="checkbox checkbox-inline checkbox-replace"><input type="checkbox" value="option3" id="inlineCheckbox3"><label for="inlineCheckbox3">Checkbox C</label></div>
										</div>
									</div>
								</div>
								<div class="line-dashed"></div>
								<div class="form-group">
									<div class="col-md-6">
										<label>Radio Inputs</label>
										<div class="radio radio-replace">
											<input type="radio" name="optionsradios" id="radio1" value="option1">
											<label for="radio1">Radio 1</label>
										</div>
										<div class="radio radio-replace">
											<input type="radio" name="optionsradios" id="radio2" value="option2">
											<label for="radio2">Radio 2</label>
										</div>
										<div class="radio radio-replace">
											<input type="radio" name="optionsradios" id="radio3" value="option3">
											<label for="radio3">Radio 3</label>
										</div>
										<div class="radio radio-replace">
											<input type="radio" name="radiodisabled" id="radio4" value="radiodisabled" disabled>
											<label for="radio4">Disabled</label>
										</div>
										<div class="radio radio-replace">
											<input type="radio" name="radiochecked" id="radio5" value="radiochecked" checked="checked" disabled>
											<label for="radio5">Checked &amp; Disabled</label>
										</div>
									</div>
									<div class="line-dashed hidden-md hidden-lg"></div>
									<div class="col-md-6">
										<label>Radio Input Colors</label>
										<div class="radio radio-replace radio-primary">
											<input type="radio" name="radios2" id="radio6" value="color" checked="checked">
											<label for="radio6">Primary</label>
										</div>
										<div class="radio radio-replace radio-success">
											<input type="radio" name="radios2" id="radio7" value="color">
											<label for="radio7">Success</label>
										</div>
										<div class="radio radio-replace radio-info">
											<input type="radio" name="radios2" id="radio8" value="color">
											<label for="radio8">Info</label>
										</div>
										<div class="radio radio-replace radio-warning">
											<input type="radio" name="radios2" id="radio9" value="color">
											<label for="radio9">Warning</label>
										</div>
										<div class="radio radio-replace radio-danger">
											<input type="radio" name="radios2" id="radio10" value="color">
											<label for="radio10">Check me out </label>
										</div>
									</div>
								</div>
								<div class="line-dashed"></div>
								<div class="form-group">
									<div class="col-lg-12">
										<label>Inline Radio Input</label>
										<div class="clearfix">
											<div class="radio radio-inline radio-replace"><input type="radio" name="radioA" id="radioInput1" value="radioA"><label for="radioInput1">Radio A</label></div> 
											<div class="radio radio-inline radio-replace"><input type="radio" name="radioA" id="radioInput2" value="radioB"><label for="radioInput2">Radio B</label></div> 
											<div class="radio radio-inline radio-replace"><input type="radio" name="radioA" id="radioInput3" value="radioC"><label for="radioInput3">Radio C</label></div>
										</div>
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
<!--nouiSlider-->
<script src="plugins/nouislider/js/nouislider.min.js"></script>
<!-- Input Mask-->
<script src="plugins/jasny/js/jasny-bootstrap.min.js"></script>
<!-- Select2-->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!--Bootstrap ColorPicker-->
<script src="plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!--Bootstrap DatePicker-->
<script src="plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="js/form-advanced-script.js"></script>

<script src="js/functions.js"></script>
<!--Loader Js-->
<script src="js/loader.js"></script>

</body>
</html>
