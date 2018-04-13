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

        <!-- Main header -->
        <!-- /main header -->

        <!-- Secondary header -->
        <div class="header-secondary row">
            <div class="col-lg-12">
                <div class="page-heading clearfix">
                    <h1 class="page-title pull-left">Providers</h1>
                    <a href="?controller=Home&action=Index&page=add-provider.php"><button class="btn btn-primary btn-sm btn-add">Add New</button></a>
                </div>
                <!-- Breadcrumb -->
                <ol class="breadcrumb breadcrumb-2">
                    <li><a href="?controller=Home&action=Index&page=index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="?controller=Home&action=Index&page=manage-providers.php">Providers</a></li>
                    <li class="active"><strong>Manage Providers</strong></li>
                </ol>
            </div>
        </div>
        <!-- /secondary header -->


        <!-- Main content -->
        <form action="" method="POST">
            <div class="main-content">

                <div class="table-responsive">
                    <table class="table table-users table-hover">
                        <thead>
                        <tr>
                            <th class="size-60"></th>
                            <th class="size-80"></th>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th class="size-80 text-center">actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        ProviderController::DeleteProvider($_GET['id']);
                        $provider=Provider::viewall();
                        foreach ($provider as $providers) {?>
                            <tr>
                                <td class="size-60"><div class="form-checkbox"><input type="checkbox" name="name1" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
                                <td class="size-80"><img class="avatar img-circle" src=<?php echo "views/images/".$providers->fname.".jpg";?> alt="" title=""></td>
                                <td name="pid"><strong><?php echo $providers->id ; ?><br /></strong></td>
                                <td name="pfname"><?php echo $providers->fname ;?></td>
                                <td name="plname"><?php echo $providers->lname ;?></td>
                                <td class="size-80">
                                    <div class="dropdown">
                                        <a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href=<?php echo "?controller=Home&action=Index&page=delete-providers.php&id=".$providers->id; ?> name="pdel">Delete Provider</a> </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        <?php }?>

                        </tbody>
                    </table>
                </div>
        </form>

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
