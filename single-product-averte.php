<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>MediaCenter - Responsive eCommerce Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/teddy.css">
    <link rel="stylesheet" href="assets/css/blue.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">



    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="process()">

<div class="wrapper">
    <!-- ============================================================= TOP NAVIGATION ============================================================= -->
    <?php
    require 'pages\parts\navigations\top-navigation.php';
    ?>
    <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->
    <!-- ============================================================= HEADER ============================================================= -->
    <?php
    require 'pages/section/header.php';
    ?>
    <!-- ============================================================= HEADER : END ============================================================= -->

    <section class="sidebar-page">
        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->

            <div class="col-xs-12 col-sm-9 no-margin wide sidebar page-main-content">
                <div id="single-product" class="row">

                    <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">

                            <div id="owl-single-product">
                                <div class="single-product-gallery-item" id="slide1">
                                    <a data-rel="prettyphoto" href="assets\images\products\Averte\Av1.jpg">
                                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets\images\products\Averte\Av1.jpg" />
                                    </a>
                                </div><!-- /.single-product-gallery-item -->

                                <div class="single-product-gallery-item" id="slide2">
                                    <a data-rel="prettyphoto" href="assets\images\products\Averte\Av2.jpg">
                                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets\images\products\Averte\Av2.jpg" />
                                    </a>
                                </div><!-- /.single-product-gallery-item -->

                                <div class="single-product-gallery-item" id="slide3">
                                    <a data-rel="prettyphoto" href="assets\images\products\Averte\Av3.jpg">
                                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets\images\products\Averte\Av3.jpg" />
                                    </a>
                                </div><!-- /.single-product-gallery-item -->
                            </div><!-- /.single-product-slider -->


                            <div class="single-product-gallery-thumbs gallery-thumbs">

                                <div id="owl-single-product-thumbnails">
                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                        <img width="67" alt="" src="assets\images\products\Averte\Av1.jpg" data-echo="assets\images\products\Averte\Av1.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                                        <img width="67" alt="" src="assets\images\products\Averte\Av2.jpg" data-echo="assets\images\products\Averte\Av2.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                                    </a>
                                </div><!-- /#owl-single-product-thumbnails -->

                                <div class="nav-holder left hidden-xs">
                                    <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
                                </div><!-- /.nav-holder -->

                                <div class="nav-holder right hidden-xs">
                                    <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
                                </div><!-- /.nav-holder -->

                            </div><!-- /.gallery-thumbs -->

                        </div><!-- /.single-product-gallery -->
                    </div><!-- /.gallery-holder -->
                    <div class="no-margin col-xs-12 col-sm-7 body-holder">
                        <div class="body">
                            <div class="star-holder inline"><div class="star" data-score="4"></div></div>
                            <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>

                            <div class="title"><a href="#">Averté Natural Fold™</a></div>
                            <div class="brand">Horizons Window Fashions</div>

                            <div class="social-row">
                                <span class="st_facebook_hcount"></span>
                                <span class="st_twitter_hcount"></span>
                                <span class="st_pinterest_hcount"></span>
                            </div>

                            <div class="buttons-holder">
                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                <a class="btn-add-to-compare" href="#">add to compare list</a>
                            </div>

                            <div class="excerpt">
                                <p>Now Horizons Window Fashions brings the high fashion weaves of Horizons Natural Shades to your big windows and sliding glass doors! Combining Averté Natural Fold and Horizons Roman Shades in the same room gives perfect coordination!</p>
                            </div>




                            <input type="hidden" id = "dbase" value = "economy">
                            <div class="prices">
                                <div id="price-current"></div>
                                <div id="price-prev"></div>
                            </div>

                            <div class="qnt-holder">
                                <div class="le-quantity">
                                    <form>
                                        <a class="minus" href="#reduce"></a>
                                        <input name="quantity" id = "quantity" readonly="readonly" type="text" value="1" />
                                        <a class="plus" href="#add"></a>
                                    </form>
                                </div>
                                <a id="addto-cart" href="cart.php" class="le-button huge">add to cart</a>
                            </div><!-- /.qnt-holder -->
                        </div><!-- /.body -->

                    </div><!-- /.body-holder -->
                </div><!-- /.row #single-product -->

                <div id="navigation"> Choose pattern </div>
                <!-- End Naviagtion -->
                <!-- Begin Content -->
                <div class = "pattern">
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Abilene.jpg"                     id="Abilene"  >
                    </div>
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Aislado.jpg"                     id="Aislado" >
                    </div>
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Capri_Pecan.jpg"                 id="Capri Pecan" >
                    </div>
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Ceylon_Light_Walnut.jpg"         id="Ceylon Light Walnut" >
                    </div>
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Ceylon_Snowfall_White.jpg"       id="Ceylon Snowfall White" >
                    </div>
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Holland_Mesh_Light_Walnut.jpg"   id="Holland Mesh Light Walnut" >
                    </div>
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Holland_Mesh_Natural.jpg"        id="Holland Mesh Natural" >
                    </div>
                </div>
                <div id="navigation"> Choose valance </div>
                <!-- End Naviagtion -->
                <!-- Begin Content -->
                <div class = "valance">
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Abilene.jpg" id="standart" >
                    </div>
                    <div id = "patternimg">
                        <img src="assets\images\products\WovenPatterns\Aislado.jpg" id="designer" >
                    </div>
                </div>
                <!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
                <section id="single-product-tab">
                    <div class="no-container">
                        <div class="tab-holder">

                            <ul class="nav nav-tabs simple" >
                                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                                <li><a href="#additional-info" data-toggle="tab">Additional Information</a></li>
                                <li><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
                            </ul><!-- /.nav-tabs -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet porttitor eros. Praesent quis diam placerat, accumsan velit interdum, accumsan orci. Nunc libero sem, elementum in semper in, sollicitudin vitae dolor. Etiam sed tempus nisl. Integer vel diam nulla. Suspendisse et aliquam est. Nulla molestie ante et tortor sollicitudin, at elementum odio lobortis. Pellentesque neque enim, feugiat in elit sed, pharetra tempus metus. Pellentesque non lorem nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                                    <p>Sed consequat orci vel rutrum blandit. Nam non leo vel risus cursus porta quis non nulla. Vestibulum vitae pellentesque nunc. In hac habitasse platea dictumst. Cras egestas, turpis a malesuada mollis, magna tortor scelerisque urna, in pellentesque diam tellus sit amet velit. Donec vel rhoncus nisi, eget placerat elit. Phasellus dignissim nisl vel lectus vehicula, eget vehicula nisl egestas. Duis pretium sed risus dapibus egestas. Nam lectus felis, sodales sit amet turpis se.</p>

                                    <div class="meta-row">
                                        <div class="inline">
                                            <label>SKU:</label>
                                            <span>54687621</span>
                                        </div><!-- /.inline -->

                                        <span class="seperator">/</span>

                                        <div class="inline">
                                            <label>categories:</label>
                                            <span><a href="#">-50% sale</a>,</span>
                                            <span><a href="#">gaming</a>,</span>
                                            <span><a href="#">desktop PC</a></span>
                                        </div><!-- /.inline -->

                                        <span class="seperator">/</span>

                                        <div class="inline">
                                            <label>tag:</label>
                                            <span><a href="#">fast</a>,</span>
                                            <span><a href="#">gaming</a>,</span>
                                            <span><a href="#">strong</a></span>
                                        </div><!-- /.inline -->
                                    </div><!-- /.meta-row -->
                                </div><!-- /.tab-pane #description -->

                                <div class="tab-pane" id="additional-info">
                                    <ul class="tabled-data">
                                        <li>
                                            <label>weight</label>
                                            <div class="value">7.25 kg</div>
                                        </li>
                                        <li>
                                            <label>dimensions</label>
                                            <div class="value">90x60x90 cm</div>
                                        </li>
                                        <li>
                                            <label>size</label>
                                            <div class="value">one size fits all</div>
                                        </li>
                                        <li>
                                            <label>color</label>
                                            <div class="value">white</div>
                                        </li>
                                        <li>
                                            <label>guarantee</label>
                                            <div class="value">5 years</div>
                                        </li>
                                    </ul><!-- /.tabled-data -->

                                    <div class="meta-row">
                                        <div class="inline">
                                            <label>SKU:</label>
                                            <span>54687621</span>
                                        </div><!-- /.inline -->

                                        <span class="seperator">/</span>

                                        <div class="inline">
                                            <label>categories:</label>
                                            <span><a href="#">-50% sale</a>,</span>
                                            <span><a href="#">gaming</a>,</span>
                                            <span><a href="#">desktop PC</a></span>
                                        </div><!-- /.inline -->

                                        <span class="seperator">/</span>

                                        <div class="inline">
                                            <label>tag:</label>
                                            <span><a href="#">fast</a>,</span>
                                            <span><a href="#">gaming</a>,</span>
                                            <span><a href="#">strong</a></span>
                                        </div><!-- /.inline -->
                                    </div><!-- /.meta-row -->
                                </div><!-- /.tab-pane #additional-info -->


                                <div class="tab-pane" id="reviews">
                                    <div class="comments">
                                        <div class="comment-item">
                                            <div class="row no-margin">
                                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                                    <div class="avatar">
                                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                                    </div><!-- /.avatar -->
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-lg-11 col-sm-10 ">
                                                    <div class="comment-body">
                                                        <div class="meta-info">
                                                            <div class="author inline">
                                                                <a href="#" class="bold">John Smith</a>
                                                            </div>
                                                            <div class="star-holder inline">
                                                                <div class="star" data-score="4"></div>
                                                            </div>
                                                            <div class="date inline pull-right">
                                                                12.07.2013
                                                            </div>
                                                        </div><!-- /.meta-info -->
                                                        <p class="comment-text">
                                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                                        </p><!-- /.comment-text -->
                                                    </div><!-- /.comment-body -->

                                                </div><!-- /.col -->

                                            </div><!-- /.row -->
                                        </div><!-- /.comment-item -->

                                        <div class="comment-item">
                                            <div class="row no-margin">
                                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                                    <div class="avatar">
                                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                                    </div><!-- /.avatar -->
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-lg-11 col-sm-10 ">
                                                    <div class="comment-body">
                                                        <div class="meta-info">
                                                            <div class="author inline">
                                                                <a href="#" class="bold">Jane Smith</a>
                                                            </div>
                                                            <div class="star-holder inline">
                                                                <div class="star" data-score="5"></div>
                                                            </div>
                                                            <div class="date inline pull-right">
                                                                12.07.2013
                                                            </div>
                                                        </div><!-- /.meta-info -->
                                                        <p class="comment-text">
                                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                                        </p><!-- /.comment-text -->
                                                    </div><!-- /.comment-body -->

                                                </div><!-- /.col -->

                                            </div><!-- /.row -->
                                        </div><!-- /.comment-item -->

                                        <div class="comment-item">
                                            <div class="row no-margin">
                                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                                    <div class="avatar">
                                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                                    </div><!-- /.avatar -->
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-lg-11 col-sm-10 ">
                                                    <div class="comment-body">
                                                        <div class="meta-info">
                                                            <div class="author inline">
                                                                <a href="#" class="bold">John Doe</a>
                                                            </div>
                                                            <div class="star-holder inline">
                                                                <div class="star" data-score="3"></div>
                                                            </div>
                                                            <div class="date inline pull-right">
                                                                12.07.2013
                                                            </div>
                                                        </div><!-- /.meta-info -->
                                                        <p class="comment-text">
                                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                                        </p><!-- /.comment-text -->
                                                    </div><!-- /.comment-body -->

                                                </div><!-- /.col -->

                                            </div><!-- /.row -->
                                        </div><!-- /.comment-item -->
                                    </div><!-- /.comments -->

                                    <div class="add-review row">
                                        <div class="col-sm-8 col-xs-12">
                                            <div class="new-review-form">
                                                <h2>Add review</h2>
                                                <form id="contact-form" class="contact-form" method="post" >
                                                    <div class="row field-row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <label>name*</label>
                                                            <input class="le-input" >
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6">
                                                            <label>email*</label>
                                                            <input class="le-input" >
                                                        </div>
                                                    </div><!-- /.field-row -->

                                                    <div class="field-row star-row">
                                                        <label>your rating</label>
                                                        <div class="star-holder">
                                                            <div class="star big" data-score="0"></div>
                                                        </div>
                                                    </div><!-- /.field-row -->

                                                    <div class="field-row">
                                                        <label>your review</label>
                                                        <textarea rows="8" class="le-input"></textarea>
                                                    </div><!-- /.field-row -->

                                                    <div class="buttons-holder">
                                                        <button type="submit" class="le-button huge">submit</button>
                                                    </div><!-- /.buttons-holder -->
                                                </form><!-- /.contact-form -->
                                            </div><!-- /.new-review-form -->
                                        </div><!-- /.col -->
                                    </div><!-- /.add-review -->

                                </div><!-- /.tab-pane #reviews -->
                            </div><!-- /.tab-content -->

                        </div><!-- /.tab-holder -->
                    </div><!-- /.container -->
                </section><!-- /#single-product-tab -->
                <!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->
                <?php
                require 'pages\section\recently-viewed.php';
                ?>
                <!-- ========================================= RECENTLY VIEWED : END ========================================= -->
            </div><!-- /.page-main-content -->
            <!-- ========================================= CONTENT : END ========================================= -->
            <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">

                <!-- ========================================= PRODUCT FILTER ========================================= -->
                <div class="widget">
                    <h3>Customize</h3>
                    <div class="body bordered">
                        <br>Curent Width:
                                    <div id="current-width"></div>
                        <br>Curent Length:
                                    <div id="current-length"></div>
<form action="cart.php" method="post">
    <?php include "includes/insertsizeform.php";?>
                                    <div id="mount">
                                        Mount:
                                        <select id ="mount" name="mount">
                                            <option value="default">Select</option>
                                            <option value="Inside">Inside</option>
                                            <option value="Outside">Outside</option>
                                        </select>
                                    </div>

                                    <div id="Patern">
                                        Pattern:
                                        <select id ="pattern_value" name="pattern_value">
                                            <option value="">                           Choose material...       </option>
                                            <option value="Abilene">                    Abilene                  </option>
                                            <option value="Aislado">                    Aislado                  </option>
                                            <option value="Capri Pecan">                Capri Pecan              </option>
                                            <option value="Ceylon Light Walnut">        Ceylon Light Walnut      </option>
                                            <option value="Ceylon Snowfall White">      Ceylon Snowfall White    </option>
                                            <option value="Holland Mesh Light Walnut">  Holland Mesh Light Walnut</option>
                                            <option value="Holland Mesh Natural">       Holland Mesh Natural     </option>
                                        </select>
                                    </div>
                        <br>Valance:
                                    <div id="Valance">
                                        <select id ="valance_value" name="valance">
                                            <option value="default">Choose valance...       </option>
                                            <option value="standart">Standart</option>
                                            <option value="designer">Designer</option>
                                        </select>
                                    </div>
    <input type="submit" value="submit"/>
</form>

                        <br>Adjusted Price:
                            <div id="price-current1"></div>

                    </div><!-- /.body -->
                </div><!-- /.widget -->
                <!-- ========================================= PRODUCT FILTER : END ========================================= -->

                <!-- ========================================= LINKS ========================================= -->
                <div class="widget">
                    <h1 class="border">information</h1>
                    <div class="body">
                        <ul class="le-links">
                            <li><a href="#">delivery</a></li>
                            <li><a href="#">secure payment</a></li>
                            <li><a href="#">our stores</a></li>
                            <li><a href="#">contact</a></li>
                        </ul><!-- /.le-links -->
                    </div><!-- /.body -->
                </div><!-- /.widget -->
                <!-- ========================================= LINKS : END ========================================= -->
                <div class="widget">
                    <div class="simple-banner">
                        <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-simple.jpg" /></a>
                    </div>
                </div>
                <!-- ========================================= FEATURED PRODUCTS ========================================= -->

                <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
            </div>
            <!-- ========================================= SIDEBAR : END ========================================= -->
        </div><!-- /.container -->
    </section><!-- /.sidebar-page -->

    <!-- ============================================================= FOOTER ============================================================= -->
    <?php
    require 'pages\section\footer.php';
    ?>
    <!-- ============================================================= FOOTER : END ============================================================= -->   </div><!-- /.wrapper -->



<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="assets/js/gmap3.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/css_browser_selector.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.raty.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.min.js"></script>
<script src="assets/js/jquery.customSelect.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/calc.js"></script>
<script src="assets/js/selection.js"></script>

<script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>