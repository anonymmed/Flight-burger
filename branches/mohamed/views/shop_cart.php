<!-- Page Header -->
<section class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Cart</h2>
                <p>Checkout or add some items to your cart</p>
            </div>
        </div>
    </div>
</section>

<!-- Cart Table -->
<section class="shop-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="cart-table table table-bordered">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#" class="remove"><i class="fa fa-times"></i></a>
                            </td>
                            <td>
                                <a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=shop_single_full.php"><img src="views/img/shop/1.png" alt="" height="90" width="90"></a>
                            </td>
                            <td>
                                <a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=shop_single_full.php">Delicious Food Name</a>
                            </td>
                            <td>
                                <span class="amount">£69.99</span>
                            </td>
                            <td>
                                <div class="quantity">1</div>
                            </td>
                            <td>
                                <span class="amount">£69.99</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="remove"><i class="fa fa-times"></i></a>
                            </td>
                            <td>
                                <a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=shop_single_full.php"><img src="views/img/shop/2.png" alt="" height="90" width="90"></a>
                            </td>
                            <td>
                                <a href="?controller=Home&action=Index&page=?controller=Home&action=Index&page=shop_single_full.php">Dry fruit Food Name</a>
                            </td>
                            <td>
                                <span class="amount">£119.99</span>
                            </td>
                            <td>
                                <div class="quantity">1</div>
                            </td>
                            <td>
                                <span class="amount">£119.99</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="col-md-6">
                                    <div class="coupon form-group">
                                        <label>Coupon:</label>
                                        <br>
                                        <input placeholder="Coupon code" class="form-control" type="text">
                                        <button type="submit">Apply</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cart-btn">
                                        <button class="btn btn-default" type="submit">Update Cart</button>
                                        <button class="btn btn-success" type="submit" onclick="window.open('./shop_checkout.php', '_self')">Checkout</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="cart_totals">
                    <div class="col-md-6 push-md-6 no-padding">
                        <h4 class="text-left">Cart Totals</h4>
                        <br>
                        <table class="table table-bordered col-md-6">
                            <tbody>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">£190.00</span></td>
                                </tr>
                                <tr>
                                    <th>Shipping and Handling</th>
                                    <td>
                                        Free Shipping
                                    </td>
                                </tr>
                                <tr>
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">£190.00</span></strong> </td>
                                </tr>
                            </tbody>
                        </table>
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


