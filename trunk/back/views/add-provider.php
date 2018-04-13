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
    <link rel='shortcut icon' type='image/x-icon' href='views/images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Entypo font stylesheet -->
    <link href="views/css/entypo.css" rel="stylesheet">
    <!-- /entypo font stylesheet -->

    <!-- Font awesome stylesheet -->
    <link href="views/css/font-awesome.min.css" rel="stylesheet">
    <!-- /font awesome stylesheet -->

    <!-- Bootstrap stylesheet min version -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <!-- /bootstrap stylesheet min version -->

    <!-- Integral core stylesheet -->
    <link href="views/css/integral-core.css" rel="stylesheet">
    <!-- /integral core stylesheet -->

    <link href="views/plugins/select2/css/select2.css" rel="stylesheet">

    <link href="views/css/integral-forms.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="views/js/html5shiv.min.js"></script>
    <script src="views/js/respond.min.js"></script>
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
            <div class="site-logo"><a href="index.php"><img src="views/images/logo.png" alt="Integral" title="Integral"></a></div>
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
        <div class="header-secondary row">
            <div class="col-lg-12">

                <!-- Breadcrumb -->
                <ol class="breadcrumb breadcrumb-2">
                    <li><a href="?controller=Home&action=Index&page=index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="?controller=Home&action=Index&page=manage-providers.php">Providers</a></li>
                    <li class="active"><strong>Add New Providers</strong></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Providers Information</h4>
                        <ul class="panel-tool-options">
                            <li><a data-rel="collapse" href="views/#"><i class="icon-down-open"></i></a></li>
                            <li><a data-rel="close" href="views/#"><i class="icon-cancel"></i></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input name="pfname" type="text" placeholder="Provider's First Name" class="form-control">
                                </div>
                            </div>


                            <div class="line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input name="plname" type="text" placeholder="Provider's Last Name" class="form-control">
                                </div>
                            </div>
                            <div class="line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="pdesc" placeholder="Description About The New Provider" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="line-dashed"></div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input name="submit" class="btn btn-default" type="submit" value="save"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php ProviderController::TestSubmit("submit","pfname","plname","pdesc"); ?>

        <!-- Main header -->
        <!-- /main header -->

        <!-- Secondary header -->

        <!-- /secondary header -->


        <!-- Main content -->
        <div class="main-content">



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
<script src="views/js/jquery.min.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<script src="views/plugins/metismenu/js/jquery.metisMenu.js"></script>
<!-- Select2-->
<script src="views/plugins/select2/js/select2.full.min.js"></script>
<script src="views/plugins/select2/js/select2-script.js"></script>
<script src="views/js/functions.js"></script>
<script src="views/js/loader.js"></script>
</body>
</html>
