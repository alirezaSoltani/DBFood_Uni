<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    echo '<form style="direction:rtl;float:inherit;background:#22313F;height:10%;">
                    <form>
                        <img  width="30" height="30" src="themes/images/user.png"><p style="color:#FFF;">'.$name.'</p>
                        <a  href="signOut.php">خروج</a>
                    </form>

              </form>';
}
?>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>رزرو آنلاین غذا</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]>
    <meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link href="themes/css/bootstrappage.css" rel="stylesheet"/>

    <!-- global styles -->
    <link href="themes/css/flexslider.css" rel="stylesheet"/>
    <link href="themes/css/main.css" rel="stylesheet"/>

    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <!--<form method="POST" class="search_form">-->
            <!--<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">-->
            <!--</form>-->
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <li><a href="account.php">حساب کاربری</a></li>
                    <li><a href="register.php">ورود</a></li>
                    <li><a href="index.php">خانه</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
<!--<section class="navbar main-menu">-->
<!--<div class="navbar-inner main-menu">-->

<!--&lt;!&ndash;<nav id="menu" class="pull-right">&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<a href="index.php" class="logo pull-left"><img     width="100%"      src="themes/images/logo.png" class="site_logo" alt=""></a>   &ndash;&gt;&ndash;&gt;
-->
<!--&lt;!&ndash;&lt;!&ndash;<ul>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">سنتی</a>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<ul>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Lacinia nibh</a></li>									&ndash;&gt;&ndash;&gt;
-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Eget molestie</a></li>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Varius purus</a></li>									&ndash;&gt;&ndash;&gt;
-->
<!--&lt;!&ndash;&lt;!&ndash;</ul>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;</li>															&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Man</a></li>			&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Sport</a>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<ul>									&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Gifts and Tech</a></li>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Ties and Hats</a></li>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Cold Weather</a></li>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;</ul>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;</li>							&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Hangbag</a></li>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Best Seller</a></li>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;<li><a href="./products.html">Top Seller</a></li>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;</ul>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;</nav>&ndash;&gt;-->
<!--</div>-->
<!--</section>-->
<section class="homepage-slider" id="home-slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="themes/images/carousel/banner-1.jpg" alt=""/>
            </li>
            <li>
                <img src="themes/images/carousel/banner-2.jpg" alt=""/>


            </li>
        </ul>
    </div>
</section>
<section class="header_text">
    <!--We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates.-->
    <!--<br/>Don't miss to use our cheap abd best bootstrap templates.-->
    با ما خوشمزه ترین لحظه ها را تجربه کنید
</section>
<section class="main-content">
<div class="row">
<div class="span12">
<div class="row">
    <div class="span12">
        <h4 class="title">
            <span class="pull-right"><span class="text"><span
                        class="line"><strong>منوی غذاها</strong></span></span>
            </span>
									<!-- <span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a>
                                        <a class="right button" href="#myCarousel" data-slide="next"></a>
			                        </span> !-->
        </h4>


        <!--**************************************************************************!-->
        <!--                             LOADING MENU                                 !-->
        <!--**************************************************************************!-->

        <div id="myCarousel" class="myCarousel carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <ul class="thumbnails">
                        <?php
                            $selectQuery = "SELECT * FROM food_table WHERE food_ava>0";
                            $result = $conn->query($selectQuery);
                            while($row = $result->fetch_assoc())
                            {
                                echo '<li class="span3">
                                      <div class="product-box">
                                        <span class="sale_tag" dir="rtl"></span>
                                        <p><a href=product_detail.php?foodId='.$row["food_number"].'><img src="themes/images/menu/'.$row["food_name"].'.jpg" alt=""/></a></p>
                                        <a href=product_detail.php?foodId='.$row["food_number"].'class="title">'.$row["food_name"].'</a><br/>
                                        <a href=product_detail.php?foodId='.$row["food_number"].' class="category">'.$row["food_sundry"].'</a>
                                        <p class="price">'.$row["food_price"].'</p>
                                    </div>
                                    </li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>


        <!--**************************************************************************!-->
        <!--                      END OF LOADING MENU                                 !-->
        <!--**************************************************************************!-->


    </div>
</div>
<br/>

<!-- <div class="row">
    <div class="span12">
        <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a
                                            class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
        </h4>

        <div id="myCarousel-2" class="myCarousel carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="product-box">
                                <span class="sale_tag"></span>

                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware2.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">Ut wisi enim ad</a><br/>
                                <a href="products.php" class="category">Commodo consequat</a>

                                <p class="price">$25.50</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="product-box">
                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware1.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">Quis nostrud exerci tation</a><br/>
                                <a href="products.php" class="category">Quis nostrud</a>

                                <p class="price">$17.55</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="product-box">
                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware6.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">Know exactly turned</a><br/>
                                <a href="products.php" class="category">Quis nostrud</a>

                                <p class="price">$25.30</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="product-box">
                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware5.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">You think fast</a><br/>
                                <a href="products.php" class="category">World once</a>

                                <p class="price">$25.60</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="product-box">
                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware4.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">Know exactly</a><br/>
                                <a href="products.php" class="category">Quis nostrud</a>

                                <p class="price">$45.50</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="product-box">
                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware3.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">Ut wisi enim ad</a><br/>
                                <a href="products.php" class="category">Commodo consequat</a>

                                <p class="price">$33.50</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="product-box">
                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware2.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">You think water</a><br/>
                                <a href="products.php" class="category">World once</a>

                                <p class="price">$45.30</p>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="product-box">
                                <p><a href="product_detail.php"><img src="themes/images/cloth/bootstrap-women-ware1.jpg"
                                                                     alt=""/></a></p>
                                <a href="product_detail.php" class="title">Quis nostrud exerci</a><br/>
                                <a href="products.php" class="category">Quis nostrud</a>

                                <p class="price">$25.20</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> !-->
<!--  <div class="row feature_box">
    <div class="span4">
        <div class="service">
            <div class="responsive">
                <img src="themes/images/feature_img_2.png" alt=""/>
                <h4>MODERN <strong>DESIGN</strong></h4>

                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="service">
            <div class="customize">
                <img src="themes/images/feature_img_1.png" alt=""/>
                <h4>FREE <strong>SHIPPING</strong></h4>

                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="service">
            <div class="support">
                <img src="themes/images/feature_img_3.png" alt=""/>
                <h4>24/7 LIVE <strong>SUPPORT</strong></h4>

                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div> !-->

</section>

<!-- <section class="our_client">
    <h4 class="title"><span class="text">Manufactures</span></h4>

    <div class="row">
        <div class="span2">
            <a href="#"><img alt="" src="themes/images/clients/14.png"></a>
        </div>
        <div class="span2">
            <a href="#"><img alt="" src="themes/images/clients/35.png"></a>
        </div>
        <div class="span2">
            <a href="#"><img alt="" src="themes/images/clients/1.png"></a>
        </div>
        <div class="span2">
            <a href="#"><img alt="" src="themes/images/clients/2.png"></a>
        </div>
        <div class="span2">
            <a href="#"><img alt="" src="themes/images/clients/3.png"></a>
        </div>
        <div class="span2">
            <a href="#"><img alt="" src="themes/images/clients/4.png"></a>
        </div>
    </div>
</section> !-->

<section id="footer-bar">
    <div dir="rtl" class="row">
        <!--<div class="span3">-->
        <h4>دسترسی سریع</h4>
        <ul class="nav">
            <li><a href="index.php">خانه</a></li>
            <!--<li><a href="./about.html">درباره ما</a></li>-->
            <li><a href="contact.php">ارتباط با ما</a></li>
            <li><a href="account.php">حساب کاربری</a></li>
            <li><a href="register.php">ورود</a></li>
        </ul>

        <!--</div>-->

        <!--<div class="span5">-->
        <!--<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>-->
        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>-->
        <!--<br/>-->
        <!--<span class="social_icons">-->
        <!--<a class="facebook" href="#">Facebook</a>-->
        <!--<a class="twitter" href="#">Twitter</a>-->
        <!--<a class="skype" href="#">Skype</a>-->
        <!--<a class="vimeo" href="#">Vimeo</a>-->
        <!--</span>-->
        <!--</div>-->
    </div>
</section>
<section id="copyright">
    <span>Copyright 2017 SeyediNezhad , Soltani , Moini  All rights reserved.</span>
</section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(function () {
        $(document).ready(function () {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });
</script>
</body>
</html>