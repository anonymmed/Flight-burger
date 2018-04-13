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
                            <h3 class="mail-title">View Message</h3>
                            <div class="pull-right tooltip-demo">
                                <a title="Reply" data-placement="top" data-toggle="tooltip" class="btn  btn-sm" href="mail-compose.php"><i class="fa fa-reply"></i> Reply</a>
                                <a title="Print email" data-placement="top" data-toggle="tooltip" class="btn btn-sm" href="#/"><i class="fa fa-print"></i> </a>
                                <a title="Move to trash" data-placement="top" data-toggle="tooltip" class="btn btn-sm" href="#/"><i class="fa fa-trash-o"></i> </a>						</div>
                            <div class="mail-tools clearfix">
                                <h5>Subject: Hello, hope you having a great day ahead.</h5>
                                <p><span class="pull-right">06:15AM 28 FEB 2016</span><span>From: jaden.smith@g-axon.com </span></p>
                            </div>
                        </div>
                        <div class="mail-body">
                            <p><strong>Hello John Smith!</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                            <hr>
                            <h4><i class="fa fa-paperclip"></i> &nbsp; <strong>Attachments <span>(3)</span></strong></h4>
                            <ul class="list-unstyled list-inline mail-attachment">
                                <li><a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="images/imac-40.jpg"></a></li>
                                <li><a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="images/office-40.jpg"></a></li>
                                <li><a href="#"><img class="img-thumbnail img-responsive" alt="attachment" src="images/macbook-40.jpg"></a></li>
                            </ul>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <textarea class="wysihtml5 form-control" placeholder="Reply or Forward this message" style="height: 200px"></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <a href="#/" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Send" data-original-title="Send"><i class="fa fa-reply"></i> Send</a>
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
