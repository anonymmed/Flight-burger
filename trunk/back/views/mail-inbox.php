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
                        <li class="active">
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
                            <h3 class="mail-title">Inbox <span class="count">(6)</span></h3>
                            <form class="mail-search" role="form" method="get">
                                <div class="input-group">
                                    <input type="text" placeholder="Search for mail..." name="s" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">Search</button> </span>							</div>
                            </form>
                            <div class="mail-tools clearfix">
                                <div class="btn-group pull-right">
                                    <button class="btn btn-sm"><i class="fa fa-arrow-left"></i></button>
                                    <button class="btn btn-sm"><i class="fa fa-arrow-right"></i></button>
                                </div>
                                <button title="Refresh inbox" data-placement="left" data-toggle="tooltip" class="btn  btn-sm"><i class="fa fa-refresh"></i> Refresh</button>
                                <button title="Mark as read" data-placement="top" data-toggle="tooltip" class="btn btn-sm"><i class="fa fa-eye"></i> </button>
                                <button title="Mark as important" data-placement="top" data-toggle="tooltip" class="btn btn-sm"><i class="fa fa-exclamation"></i> </button>
                                <button title="Move to trash" data-placement="top" data-toggle="tooltip" class="btn btn-sm"><i class="fa fa-trash-o"></i> </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-mails">
                                <tbody>
                                <tr class="unread">
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox1" checked="checked"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-warning"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-purple m-r-15"></i> Google Inc</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        07:23 AM
                                    </td>
                                </tr>
                                <tr class="unread">
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox2" checked="checked"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-warning m-r-15"></i> John Smith</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Hello, hope you having a great day ahead.</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        06:18 AM
                                    </td>
                                </tr>
                                <tr class="unread">
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox3"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-warning"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-danger m-r-15"></i> Manager</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        04:23 PM
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox4"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-royalblue m-r-15"></i> Facebook</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        16 Aug
                                    </td>
                                </tr>
                                <tr class="unread">
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox5" checked="checked"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-purple m-r-15"></i> LinkedIn</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        26 Jul
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox6"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-warning"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-info m-r-15"></i> Google Inc</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        12 Jul
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox7"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-warning m-r-15"></i> John Smith</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Hello, hope you having a great day ahead.</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        24 Jun
                                    </td>
                                </tr>
                                <tr class="unread">
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox8" checked="checked"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-danger m-r-15"></i> Manager</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        15 May
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox9"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-royalblue m-r-15"></i> Facebook</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        12 May
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox10"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-warning"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-purple m-r-15"></i> LinkedIn</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        28 Apr
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox11"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-info m-r-15"></i> Google Inc</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        16 Apr
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox12"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-warning m-r-15"></i> John Smith</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Hello, hope you having a great day ahead.</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        12 Apr
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox14" checked="checked"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-warning"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-danger m-r-15"></i> Manager</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        12 Mar
                                    </td>
                                </tr>
                                <tr class="unread">
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox15"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-warning"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-royalblue m-r-15"></i> Facebook</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        16 Feb
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mail-select">
                                        <div class="form-checkbox">
                                            <input type="checkbox" id="checkbox16"> <span class="check"><i class="fa fa-check"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fa fa-star text-muted"></i>
                                    </td>
                                    <td>
                                        <a href="mail-read.php"><i class="fa fa-circle text-purple m-r-15"></i> LinkedIn</a>
                                    </td>
                                    <td>
                                        <a href="mail-read.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                    </td>
                                    <td>
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="text-right">
                                        26 Jan
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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

<!-- Load custom Integral JS functions -->
<script src="js/functions.js"></script>
<script src="js/loader.js"></script>

</body>
</html>
