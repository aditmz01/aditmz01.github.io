<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content=" initial-scale=1">
    <title>Cart | Kuliner Kang Aye</title>
    <link href="<?php base_url() ?>assets/img/icon.png" rel="shorcut icon">
    <link href="<?php base_url() ?>assets/css/index.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <div class="container">
            <div>
                <a class="navbar-brand" href="<?php site_url() ?>home"><i class="fa-solid fa-house-chimney"></i> Kuliner Kang Aye</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php site_url() ?>menu">Order</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php site_url() ?>promotion">Promotion</a>
                    </li>
                </ul>
                <a class="btn btn-primary mr-3" id="btn-login" href="<?php site_url() ?>login">Login</a>
                <a style="color: white; font-size:24px;" href="<?php site_url() ?>cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class='badge badge-warning' id='lblCartCount'>0</span>
                </a>
            </div>
        </div>
    </nav>
    <section class="shopping-cart text-left">
        <div class="container">
            <div class="block-heading">
                <h3 class="text-center"> <i class="fa-solid fa-cart-shopping"></i> Shopping Cart</h3>
                <hr>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="items">
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="img-fluid mx-auto d-block image" src="<?php site_url() ?>assets/img/produk1.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5 product-name">
                                                    <div class="product-name">
                                                        <a href="#">Mie Pedas Merapi</a>
                                                        <div class="product-info">
                                                            <div>Extra Topping : <span class="value">Ya</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 quantity">
                                                    <label for="quantity">Quantity:</label>
                                                    <input id="quantity" type="number" value="1" class="form-control quantity-input">
                                                </div>
                                                <div class="col-md-3 price">
                                                    <span>Rp. 10.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="img-fluid mx-auto d-block image" src="<?php site_url() ?>assets/img/produk2.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5 product-name">
                                                    <div class="product-name">
                                                        <a href="#">Dimsum Ayam</a>
                                                        <div class="product-info">
                                                            <div>Extra Topping: <span class="value">Tidak</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 quantity">
                                                    <label for="quantity">Quantity:</label>
                                                    <input id="quantity" type="number" value="1" class="form-control quantity-input">
                                                </div>
                                                <div class="col-md-3 price">
                                                    <span>Rp. 14.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="img-fluid mx-auto d-block image" src="<?php site_url() ?>assets/img/produk5.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5 product-name">
                                                    <div class="product-name">
                                                        <a href="#">Bubble Drink Tea</a>
                                                        <div class="product-info">
                                                            <div>Extra Topping: <span class="value">Ya</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 quantity">
                                                    <label for="quantity">Quantity:</label>
                                                    <input id="quantity" type="number" value="1" class="form-control quantity-input">
                                                </div>
                                                <div class="col-md-3 price">
                                                    <span>Rp. 15.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4" id="summary">
                        <div class="summary text-center">
                            <h3>Summary</h3>
                            <div class="summary-item"><span class="text">Subtotal</span><span class="price">Rp.39.000</span></div>
                            <div class="summary-item"><span class="text">Discount</span><span class="price">Rp.0</span></div>
                            <div class="summary-item"><span class="text">Shipping</span><span class="price">Rp.0</span></div>
                            <div class="summary-item"><span class="text">Total</span><span class="price">Rp.39.000</span></div>
                            <a href="<?php site_url() ?>menu" class="btn btn-primary btn-lg btn-block">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        <div class="footer-wrapper container">
            <div class="information">
                <div class="footer-left">
                    <div class="title">Kuliner Kang Aye</div>
                    <div class="phone">
                        <a href="#">
                            <img src="<?php site_url() ?>assets/img/phone.png" />
                            0812 xxxx xxxx
                        </a>

                        <a href="#" class="email-footer">
                            <img src="<?php site_url() ?>assets/img/email.png" />
                            pesan@kulinerkangaye.com
                        </a>

                        <span class="social-media">
                            <a href="#">
                                <img src="<?php site_url() ?>assets/img/fb.png" />
                            </a>
                            <a href="#">
                                <img src="<?php site_url() ?>assets/img/ig.png" />
                            </a>
                            <a href="#">
                                <img src="<?php site_url() ?>assets/img/twitter.png" />
                            </a>
                            <a href="#">
                                <img src="<?php site_url() ?>assets/img/youtube.png" />
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="terms-conditions">
                <span class="right-line"><a href="#">About Us</a></span>
                <span class="right-line"><a href="#">Kebijakan Privasi</a></span>
                <span class="right-line"><a href="#">Syarat dan Ketentuan</a></span>
                <span class="copyright"> &copy; 2023 Kuliner Kang Aye. Used Under License. All rights reserved.</span>
            </div>
        </div>
    </div>
</body>

</html>