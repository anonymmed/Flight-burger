

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
    <meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
    <title>Admin | Dashboard</title>
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

    <!--Jvector Map-->
    <link href="plugins/jvectormap/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">

    <link href="css/integral-forms.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="plugins/flot/js/excanvas.min.js"></script>
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
        ?>        <!-- /main header -->

        <!-- Main content -->
        <div class="main-content">

            <h1 class="page-title">Manage Users</h1>
            <br>

            <!-- Row-->


        <div class="row">

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
                    <?php
                    include ('db.php');

                    $query="select username,password from users";
                    if ($result=$mysqli->query($query))
                    {
                    while($row = $result->fetch_assoc())
                    {
                        echo ' <tr>
                        <td><div class="form-checkbox"><input type="checkbox" name="name5" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
                        <td><img class="avatar img-circle" src="images/man-3.jpg" alt="" title=""></td>
                        <td><strong>'?>
                    <?php echo $row["username"]; echo'</strong></td>
                        <td>Member since 2012</td>
                        <td>Last login yesterday.</td>
                        <td class="text-center"><span class="badge badge-bordered">customer</span></td>
                        <td><i class="icon-check icon-larger green-color"></i></td>
                        <td>
                            <div class="dropdown">
                                <a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="delete-user.php">Delete User</a></li>
                                    <li><a href="ban-user.php">Ban User</a></li>
                                    <li><a href="change-role.php">Change Role</a> </li>
                                </ul>
                            </div>
                        </td>
                    </tr>';

                    }
                    }
                    mysqli_close($mysqli);
                    ?>

                    </tbody>
                </table>
            </div>


        </div>





        </div>
        <!-- /row-->

        <!-- Row -->
        <div class="row">



            <!-- Col-lg-5 -->
            <div class="col-lg-5">





            </div>
            <!-- /col-lg-5 -->
        </div>
        <!-- /row-->

        <!-- Row-->

        <!-- /row-->

        <!-- Row-->
        <!-- /row-->

        <!-- Row-->
        <!-- /row -->

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

<!--Knob Charts-->
<script src="plugins/knob/js/jquery.knob.min.js"></script>

<!--Jvector Map-->
<script src="plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>

<!--ChartJs-->
<script src="plugins/chartjs/js/Chart.min.js"></script>

<!--Morris Charts-->
<script src="plugins/morris/js/raphael-min.js"></script>
<script src="plugins/morris/js/morris.min.js"></script>

<!--Float Charts-->
<script src="plugins/flot/js/jquery.flot.min.js"></script>
<script src="plugins/flot/js/jquery.flot.tooltip.min.js"></script>
<script src="plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="plugins/flot/js/jquery.flot.time.min.js"></script>

<!--Functions Js-->
<script src="js/functions.js"></script>

<!--Dashboard Js-->
<script src="js/dashboard.js"></script>

<!--Loader Js-->
<script src="js/loader.js"></script>

</body>
</html>
<?php


?>