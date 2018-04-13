<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FLIGHT BURGER</title>
    <meta name="author" content="Surjith S M">
     <!-- SEO -->
    <meta name="description" content="flight burger is a Responsive HTML5 Template for Restaurants and food related services.">
    <meta name="keywords" content="flight burger, responsive, html5, restaurant, template, food, reservation">

    <!-- Favicons -->
    <link rel="shortcut icon" href="views/img/icon.ico">
    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->

    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="views/css/plugin.css">
    <link rel="stylesheet" href="views/css/main.css">
	<link rel="stylesheet" type="text/css" href="views/css/compte.css">

    <!--[if lt IE 9]>
            <script src="views/js/vendor/HTML5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="?controller=Home&action=Index&page=http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->



    <div class="body">

        <div class="main-wrapper">
            <!-- Navigation-->
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="?controller=Home&action=Index&page=index.php">
                            <img src="views/img/nav-logo.png" alt="nav-logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li >
                                <a href="?controller=Home&action=Index&page=index.php" role="button">Home</a>
                            </li>
                            <li >
                                <a href="?controller=Home&action=Index&page=menu.php" role="button" >Menu</a>
                            </li>
                            <li class="dropdown">
                                <a href="?controller=Home&action=Index&page=about.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="?controller=Home&action=Index&page=about.php">About</a></li>
                                    <li><a href="?controller=Home&action=Index&page=gallery.php">Gallery</a></li>
                                </ul>
                            </li>
                            <li >
                                <a href="?controller=Home&action=Index&page=offres.php" role="button" >Offres</a>
                            </li>
                            <li class="dropdown">
                                <a href="?controller=Home&action=Index&page=shop.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="?controller=Home&action=Index&page=shop_cart.php">Cart</a></li>
                                    <li><a href="?controller=Home&action=Index&page=shop_checkout.php">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="?controller=Home&action=Index&page=client_space.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Client Space<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="?controller=Home&action=Index&page=account.php">Login/Signup</a></li>
                                    <li><a href="?controller=Home&action=Index&page=account.php">Account</a></li>
                                    <li><a href="?controller=Home&action=Index&page=account_detail.php">Account Detail</a></li>
                                </ul>
                            </li>

                            <li><a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=contact.php">Contact</a></li>
                            <li class="dropdown">
                                <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart fsc pull-left"></i><span class="cart-number">3</span><span class="caret"></span></a>
                                <div class="cart-content dropdown-menu">
                                    <div class="cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="cart-items">
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-image">
                                                <a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=shop_single_full.php"><img src="views/img/cart-img1.jpg" alt="Breakfast with coffee"></a>
                                            </div>
                                            <div class="cart-item-desc">
                                                <a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=shop_single_full.php">Breakfast with coffee</a>
                                                <span class="cart-item-price">$19.99</span>
                                                <span class="cart-item-quantity">x 2</span>
                                                <i class="fa fa-times ci-close"></i>
                                            </div>
                                        </div>
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-image">
                                                <a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=shop_single_full.php"><img src="views/img/cart-img2.jpg" alt="Chicken stew"></a>
                                            </div>
                                            <div class="cart-item-desc">
                                                <a href="?controller=Home&action=Index&page=shop_single_full.php">Chicken stew</a>
                                                <span class="cart-item-price">$24.99</span>
                                                <span class="cart-item-quantity">x 3</span>
                                                <i class="fa fa-times ci-close"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-action clearfix">
                                        <span class="pull-left checkout-price">$ 114.95</span>
                                        <a class="btn btn-default pull-right" href="?controller=Home&action=Index&page=shop_cart.php">View Cart</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </nav>