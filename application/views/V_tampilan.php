<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products1 :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="<?= base_url('assets/tampilan/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= base_url('assets/tampilan/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= base_url('assets/tampilan/'); ?>css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
    <link href="<?= base_url('assets/tampilan/'); ?>css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= base_url('assets/tampilan/'); ?>css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="<?= base_url('assets/tampilan/'); ?>css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="<?= base_url('assets/tampilan/'); ?>js/jquery-2.2.3.min.js"></script>
    <script src="<?= base_url('assets/tampilan/'); ?>js/owl.carousel.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <!-- scroll to fixed-->
    <script src="<?= base_url('assets/tampilan/'); ?>js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

            $('.header-two').scrollToFixed();
            // previous summary up the page.

            var summaries = $('.summary');
            summaries.each(function(i) {
                var summary = $(summaries[i]);
                var next = summaries[i + 1];

                summary.scrollToFixed({
                    marginTop: $('.header-two').outerHeight(true) + 10,
                    zIndex: 999
                });
            });
        });
    </script>
    <!-- //scroll to fixed-->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="<?= base_url('assets/tampilan/'); ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/tampilan/'); ?>js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- the jScrollPane script -->
    <script type="text/javascript" src="<?= base_url('assets/tampilan/'); ?>js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function() {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!-- //the jScrollPane script -->
    <script type="text/javascript" src="<?= base_url('assets/tampilan/'); ?>js/jquery.mousewheel.js"></script>
    <!-- the mousewheel plugin -->
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="w3ls-header">
            <!--header-one-->

            <div class="w3ls-header-right">
                <ul>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.html">Login </a></li>
                            <li><a href="signup.html">Sign Up</a></li>
                            <li><a href="login.html">My Orders</a></li>
                            <li><a href="login.html">Wallet</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="offers.html">Cash Back Offers</a></li>
                            <li><a href="offers.html">Product Discounts</a></li>
                            <li><a href="offers.html">Special Offers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="card.html" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header-two">
            <!-- header-two -->
            <div class="container">
                <div class="header-logo">
                    <h1><a href="index.html"><span>L</span>aper <i>pool</i></a></h1>
                    <h6>japanesse foods and drinks</h6>
                </div>
                <div class="header-search">
                    <form action="#" method="post">
                        <input type="search" name="Search" placeholder="Search for a Product..." required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <i class="fa fa-search" aria-hidden="true"> </i>
                        </button>
                    </form>
                </div>
                <div class="header-cart">
                    <div class="my-account">
                        <a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>
                    </div>
                    <div class="cart">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="display" value="1" />
                            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div><!-- //header-two -->
        <div class="header-three">
            <!-- header-three -->
            <div class="container">
                <div class="menu">
                    <div class="cd-dropdown-wrapper">
                        <a class="cd-dropdown-trigger" href="">Store Categories</a>
                        <nav class="cd-dropdown">

                            <ul class="cd-dropdown-content">
                                <li><a href="offers.html">Today's Offers</a></li>

                                <li class="has-children">
                                    <a href="#">Foods</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>

                                        <li class="has-children">
                                            <a href="#">Car Care</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Auto Tips & Advice </a></li>
                                                <li><a href="products8.html">Car Washes & Cleaners </a></li>
                                                <li><a href="products8.html">Car Wax & Polish</a></li>
                                                <li><a href="products8.html">Cleaning Tools</a></li>
                                                <li><a href="products8.html">Detailing Kits </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Drinks</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>

                                        <li class="has-children">
                                            <a href="#">Car Care</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Auto Tips & Advice </a></li>
                                                <li><a href="products8.html">Car Washes & Cleaners </a></li>
                                                <li><a href="products8.html">Car Wax & Polish</a></li>
                                                <li><a href="products8.html">Cleaning Tools</a></li>
                                                <li><a href="products8.html">Detailing Kits </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="sitemap.html">Full Site Directory </a></li>
                            </ul> <!-- .cd-dropdown-content -->
                        </nav> <!-- .cd-dropdown -->
                    </div> <!-- .cd-dropdown-wrapper -->
                </div>
                <div class="move-text">
                    <div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
                    <script type="text/javascript" src="<?= base_url('assets/tampilan/'); ?>js/jquery.marquee.min.js"></script>
                    <script>
                        $('.marquee').marquee({
                            pauseOnHover: true
                        });
                        //@ sourceURL=pen.js
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- products -->
    <div class="products">
        <div class="container">
            <div class="col-md-9 product-w3ls-right">
                <!-- breadcrumbs -->
                <ol class="breadcrumb breadcrumb1">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Products</li>
                </ol>
                <div class="clearfix"> </div>
                <!-- //breadcrumbs -->
                <div class="product-top">
                    <h4>Fashion Store</h4>
                    <ul>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Low price</a></li>
                                <li><a href="#">High price</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Popular</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="products-row">
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>18%<br>Off</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f7.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Leather Jacket</a></h5>
                                <h6><del>$25</del> $20</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Leather Jacket" />
                                    <input type="hidden" name="amount" value="20.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f2.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Women Sandal</a></h5>
                                <h6><del>$22</del> $20</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                    <input type="hidden" name="amount" value="20.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>30% <br> Off</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f3.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Jewellery</a></h5>
                                <h6><del>$100</del> $70</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                    <input type="hidden" name="amount" value="70.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f5.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Jackets</a></h5>
                                <h6><del>$32</del> $30</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Jackets" />
                                    <input type="hidden" name="amount" value="30.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>25%<br>Off</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f4.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Party dress</a></h5>
                                <h6><del>$20</del> $15</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                    <input type="hidden" name="amount" value="15.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f1.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">T Shirt</a></h5>
                                <h6><del>$20</del> $10</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                    <input type="hidden" name="amount" value="10.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f8.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Boys short</a></h5>
                                <h6><del>$14</del> $12</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Boys short" />
                                    <input type="hidden" name="amount" value="12.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f2.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Women Sandal</a></h5>
                                <h6><del>$22</del> $20</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                    <input type="hidden" name="amount" value="20.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>30% <br> Off</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f3.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Jewellery</a></h5>
                                <h6><del>$100</del> $70</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                    <input type="hidden" name="amount" value="70.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f2.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Women Sandal</a></h5>
                                <h6><del>$22</del> $20</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                    <input type="hidden" name="amount" value="20.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f5.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Jackets</a></h5>
                                <h6><del>$32</del> $30</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Jackets" />
                                    <input type="hidden" name="amount" value="30.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>18%<br>Off</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f7.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Leather Jacket</a></h5>
                                <h6><del>$25</del> $20</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Leather Jacket" />
                                    <input type="hidden" name="amount" value="20.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f8.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Boys short</a></h5>
                                <h6><del>$14</del> $12</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Boys short" />
                                    <input type="hidden" name="amount" value="12.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>25%<br>Off</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f4.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Party dress</a></h5>
                                <h6><del>$20</del> $15</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                    <input type="hidden" name="amount" value="15.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f1.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">T Shirt</a></h5>
                                <h6><del>$20</del> $10</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                    <input type="hidden" name="amount" value="10.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <div class="new-tag">
                                <h6>30% <br> Off</h6>
                            </div>
                            <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f3.png" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="single.html">Jewellery</a></h5>
                                <h6><del>$100</del> $70</h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                    <input type="hidden" name="amount" value="70.00" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- add-products -->
                <div class="w3ls-add-grids w3agile-add-products">
                    <a href="#">
                        <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <!-- //add-products -->
            </div>
            <div class="col-md-3 rsidebar">
                <div class="rsidebar-top">
                    <div class="slider-left">
                        <h4>Filter By Price</h4>
                        <div class="row row1 scroll-pane">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - $100 </label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250 </label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$250 - $300 </label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$350 - $400 </label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$450 - $500 </label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label>
                        </div>
                    </div>
                    <div class="sidebar-row">
                        <h4>Fashion Store</h4>
                        <ul class="faq">
                            <li class="item1"><a href="#">Clothing<span class="glyphicon glyphicon-menu-down"></span></a>
                                <ul>
                                    <li class="subitem1"><a href="#">Ethnic wear</a></li>
                                    <li class="subitem1"><a href="#">Maternity wear</a></li>
                                    <li class="subitem1"><a href="#">Sports wear</a></li>
                                    <li class="subitem1"><a href="#">Inner & nightwear</a></li>
                                </ul>
                            </li>
                            <li class="item2"><a href="#">Accessories<span class="glyphicon glyphicon-menu-down"></span></a>
                                <ul>
                                    <li class="subitem1"><a href="#">Watches</a></li>
                                    <li class="subitem1"><a href="#">Eyewear</a></li>
                                    <li class="subitem1"><a href="#">Jewellery</a></li>
                                    <li class="subitem1"><a href="#">Footwear</a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#">Beauty<span class="glyphicon glyphicon-menu-down"></span></a>
                                <ul>
                                    <li class="subitem1"><a href="#">Face Care</a></li>
                                    <li class="subitem1"><a href="#">Perfumes & Deos</a></li>
                                    <li class="subitem1"><a href="#">Personal Grooming</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- script for tabs -->
                        <script type="text/javascript">
                            $(function() {

                                var menu_ul = $('.faq > li > ul'),
                                    menu_a = $('.faq > li > a');

                                menu_ul.hide();

                                menu_a.click(function(e) {
                                    e.preventDefault();
                                    if (!$(this).hasClass('active')) {
                                        menu_a.removeClass('active');
                                        menu_ul.filter(':visible').slideUp('normal');
                                        $(this).addClass('active').next().stop(true, true).slideDown('normal');
                                    } else {
                                        $(this).removeClass('active');
                                        $(this).next().stop(true, true).slideUp('normal');
                                    }
                                });

                            });
                        </script>
                        <!-- script for tabs -->
                    </div>
                    <div class="sidebar-row">
                        <h4>DISCOUNTS</h4>
                        <div class="row row1 scroll-pane">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
                        </div>
                    </div>
                    <div class="sidebar-row">
                        <h4>Color</h4>
                        <div class="row row1 scroll-pane">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Blue</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i> Brown</label>
                        </div>
                    </div>
                </div>
                <div class="related-row">
                    <h4>Related Searches</h4>
                    <ul>
                        <li><a href="products.html">Travel Bags</a></li>
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Beauty Gift Hampers</a></li>
                        <li><a href="products.html">T-Shirts</a></li>
                        <li><a href="products.html">Blazers</a></li>
                        <li><a href="products.html">Parkas</a></li>
                        <li><a href="products.html">Shoes</a></li>
                        <li><a href="products.html">Hair Care</a></li>
                        <li><a href="products.html">Bath & Spa</a></li>
                        <li><a href="products.html">Handbags</a></li>
                    </ul>
                </div>
                <div class="related-row">
                    <h4>YOU MAY ALSO LIKE</h4>
                    <div class="galry-like">
                        <a href="single.html"><img src="<?= base_url('assets/tampilan/'); ?>images/e1.png" class="img-responsive" alt="img"></a>
                        <h4><a href="products.html">Audio speaker</a></h4>
                        <h5>$100</h5>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <!-- recommendations -->
            <div class="recommend">
                <h3 class="w3ls-title">Our Recommendations </h3>
                <script>
                    $(document).ready(function() {
                        $("#owl-demo5").owlCarousel({

                            autoPlay: 3000, //Set AutoPlay to 3 seconds

                            items: 4,
                            itemsDesktop: [640, 5],
                            itemsDesktopSmall: [414, 4],
                            navigation: true

                        });

                    });
                </script>
                <div id="owl-demo5" class="owl-carousel">
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <div class="new-tag">
                                <h6>20% <br> Off</h6>
                            </div>
                            <a href="products1.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f2.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products1.html">Women Sandal</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$20</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                    <input type="hidden" name="amount" value="20.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <a href="products.html"><img src="<?= base_url('assets/tampilan/'); ?>images/e4.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products.html">Digital Camera</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$80</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Digital Camera" />
                                    <input type="hidden" name="amount" value="100.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="products4.html"><img src="<?= base_url('assets/tampilan/'); ?>images/s1.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products4.html">Roller Skates</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$180</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Roller Skates" />
                                    <input type="hidden" name="amount" value="180.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <a href="products1.html"><img src="<?= base_url('assets/tampilan/'); ?>images/f1.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products1.html">T Shirt</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$10</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                    <input type="hidden" name="amount" value="10.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <div class="new-tag">
                                <h6>New</h6>
                            </div>
                            <a href="products6.html"><img src="<?= base_url('assets/tampilan/'); ?>images/p1.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products6.html">Coffee Mug</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$14</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                    <input type="hidden" name="amount" value="14.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <div class="new-tag">
                                <h6>20% <br> Off</h6>
                            </div>
                            <a href="products6.html"><img src="<?= base_url('assets/tampilan/'); ?>images/p2.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products6.html">Teddy bear</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$20</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                    <input type="hidden" name="amount" value="20.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <a href="products4.html"><img src="<?= base_url('assets/tampilan/'); ?>images/s2.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products4.html">Football</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$70</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Football" />
                                    <input type="hidden" name="amount" value="70.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="glry-w3agile-grids agileits">
                            <div class="new-tag">
                                <h6>Sale</h6>
                            </div>
                            <a href="products3.html"><img src="<?= base_url('assets/tampilan/'); ?>images/h1.png" alt="img"></a>
                            <div class="view-caption agileits-w3layouts">
                                <h4><a href="products3.html">Wall Clock</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                <h5>$80</h5>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                    <input type="hidden" name="amount" value="80.00" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //recommendations -->
        </div>
    </div>
    <!--//products-->
    <!-- footer-top -->
    <div class="w3agile-ftr-top">
        <div class="container">
            <div class="ftr-toprow">
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>FREE DELIVERY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>CUSTOMER CARE</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>GOOD QUALITY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!-- //subscribe -->
    <!-- footer -->

    <!-- //footer -->
    <div class="copy-right">
        <div class="container">
            <p>© 2016 Smart bazaar . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
        </div>
    </div>
    <!-- cart-js -->
    <script src="<?= base_url('assets/tampilan/'); ?>js/minicart.js"></script>
    <script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {
                    items[i].set('shipping', 0);
                    items[i].set('shipping2', 0);
                }
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- menu js aim -->
    <script src="<?= base_url('assets/tampilan/'); ?>js/jquery.menu-aim.js"> </script>
    <script src="<?= base_url('assets/tampilan/'); ?>js/main.js"></script> <!-- Resource jQuery -->
    <!-- //menu js aim -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/tampilan/'); ?>js/bootstrap.js"></script>
</body>

</html>