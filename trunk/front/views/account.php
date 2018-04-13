<!-- Page Header -->
<section class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Account</h2>
                <p>Please login or signup to continue with your purchase</p>
            </div>
        </div>
    </div>
</section>

<!-- Account Content -->
<section class="shop-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row shop-login">
                    <div class="col-md-6">
                        <div class="box-content">
                            <h3 class="text-center">Existing Customer</h3>
                            <br>
                            <form class="logregform">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Username or E-mail Address</label>
                                            <input type="text" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <a class="pull-right" href="?controller=Home&action=Index&page=index.php">(Lost Password?)</a>
                                            <label>Password</label>
                                            <input type="password" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="remember-box checkbox">
                                <label for="rememberme">
                                <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                </label>
                                </span>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" onclick="verif1()" class="btn btn-default pull-right">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box-content">
                            <h3 class="text-center">Register An Account</h3>
                            <br>
                            <form action="ajouterDocument.php" method="post" name = "form" class="logregform">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>BURGER ID(*) </label>
                                            
                                            <input type="text" value="" name="id"class="form-control">
                                            <label>E-mail Address(*)</label>
                                            <input type="email" value="" name="email" class="form-control">
                                            <label>name</label>
                                            <input type="text" value="" name="name" class="form-control">
                                            <label>last name</label>
                                            <input type="text" value="" name="lastname" class="form-control">
                                            <label>your phone(*)</label>
                                            <input type="text" value="(+216)" name="phone" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix space20"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Password(*)</label>
                                            <input type="password" name="pass" value="" class="form-control">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="space20"></div>
                                        <button type="submit" name="ajout" value="ajouter" class="btn btn-default pull-right"onclick="verif()">Register</button>
                                <p class="A1" type ="texte" name="err" id="err"/>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- subscribe -->
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Subscribe</h1>
                <p>Get updates about new dishes and upcoming events</p>
                <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
                    <div class="form-group">
                        <input class="e-mail form-control" name="email" id="address" type="email" placeholder="Your Email Address" required>
                    </div>
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-angle-right"></i>
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>