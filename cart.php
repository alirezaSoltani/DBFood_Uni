<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    echo '<form style="direction:rtl;float:inherit;background:#22313F;height:10%;">
                    <form>
                        <img  width="30" height="30" src="themes/images/user.png"><p style="color:#FFF;">$name</p>
                        <a  href="signOut.php">خروج</a>
                    </form>

              </form>';
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>سبد غذا</title>
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
    <script src="themes/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <li><a href="account.php">حساب کاربری</a></li>
                    <li><a href="cart.php">سبد غذا</a></li>
                    <!--<li><a href="checkout.html">Checkout</a></li>					-->
                    <li><a href="register.php">ورود</a></li>
                    <li><a href="index.php">خانه</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">

    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.jpg" alt="New products">
        <h4><span>سبد غذا</span></h4>
    </section>
    <section dir="rtl" class="main-content">
        <div dir="rtl" class="row">
            <div dir="rtl" class="span9">
                <h4 class="title"><span class="text"><strong>سبد</strong> غذا</span></h4>
                <table dir="rtl" class="table table-striped">
                    <thead dir="rtl">
                    <tr dir="rtl">
                        <th>حذف</th>
                        <th>عکس</th>
                        <th>نام غذا</th>
                        <th>تعداد</th>
                        <th>قیمت واحد</th>
                        <th>جمع</th>
                    </tr>
                    </thead>
                    <tbody dir="ltr">
                    <tr dir="ltr">
                        <td><input type="checkbox" value="option1"></td>
                        <td><a href="product_detail.php"><img alt="" src="themes/images/ladies/9.jpg"></a></td>
                        <td>Fusce id molestie massa</td>
                        <td><input type="text" placeholder="1" class="input-mini"></td>
                        <td>$2,350.00</td>
                        <td>$2,350.00</td>
                    </tr>
                    <tr dir="ltr">
                        <td><input type="checkbox" value="option1"></td>
                        <td><a href="product_detail.php"><img alt="" src="themes/images/ladies/1.jpg"></a></td>
                        <td>Luctus quam ultrices rutrum</td>
                        <td><input type="text" placeholder="2" class="input-mini"></td>
                        <td>$1,150.00</td>
                        <td>$2,450.00</td>
                    </tr>
                    <tr dir="ltr">
                        <td><input type="checkbox" value="option1"></td>
                        <td><a href="product_detail.php"><img alt="" src="themes/images/ladies/3.jpg"></a></td>
                        <td>Wuam ultrices rutrum</td>
                        <td><input type="text" placeholder="1" class="input-mini"></td>
                        <td>$1,210.00</td>
                        <td>$1,123.00</td>
                    </tr>
                    <tr dir="ltr">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><strong>$3,600.00</strong></td>
                    </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <label for="address"><span>آدرس:</span></label>

                    <div class="input">
                        <textarea tabindex="3" class="input-xlarge" id="address" name="body" rows="7"
                                  placeholder="آدرس"></textarea>
                    </div>
                </div>
                <hr dir="ltr">
                <p dir="ltr" class="cart-total right">
                    <strong>جمع خرید ها</strong>: 102$ <br>
                    <strong>مالیات بر ارزش افزوده (9%)</strong>: $17.50<br>
                    <strong>جمع</strong>: $119.50<br>
                </p>
                <hr/>
                <p class="buttons center">
                    <button class="btn" type="button">به روز رسانی</button>
                    <button class="btn" style="background: #87D37C;" type="button">ثبت</button>
                </p>
            </div>
            <div class="span3 col">
                <div class="block">
                    <ul class="nav nav-list">
                        <li class="nav-header">SUB CATEGORIES</li>
                        <li><a href="products.php">Nullam semper elementum</a></li>
                        <li class="active"><a href="products.php">Phasellus ultricies</a></li>
                        <li><a href="products.php">Donec laoreet dui</a></li>
                        <li><a href="products.php">Nullam semper elementum</a></li>
                        <li><a href="products.php">Phasellus ultricies</a></li>
                        <li><a href="products.php">Donec laoreet dui</a></li>
                    </ul>
                    <br/>
                    <ul class="nav nav-list below">
                        <li class="nav-header">MANUFACTURES</li>
                        <li><a href="products.php">Adidas</a></li>
                        <li><a href="products.php">Nike</a></li>
                        <li><a href="products.php">Dunlop</a></li>
                        <li><a href="products.php">Yamaha</a></li>
                    </ul>
                </div>
                <div class="block">
                    <h4 class="title">
                        <span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a
                                        class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                    </h4>

                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <a href="product_detail.php"><img alt=""
                                                                              src="themes/images/ladies/2.jpg"></a><br/>
                                            <a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
                                            <a href="#" class="category">Suspendisse aliquet</a>

                                            <p class="price">$261</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="thumbnails listing-products">
                                    <li class="span3">
                                        <div class="product-box">
                                            <a href="product_detail.php"><img alt=""
                                                                              src="themes/images/ladies/4.jpg"></a><br/>
                                            <a href="product_detail.php" class="title">Tempor sem sodales</a><br/>
                                            <a href="#" class="category">Urna nec lectus mollis</a>

                                            <p class="price">$134</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer-bar">
        <div dir="rtl" class="row">

            <h4>دسترسی سریع</h4>
            <ul class="nav">
                <li><a href="index.php">خانه</a></li>
                <!--<li><a href="./about.html">درباره ما</a></li>-->
                <li><a href="contact.php">ارتباط با ما</a></li>
                <li><a href="account.php">حساب کاربری</a></li>
                <li><a href="register.php">ورود</a></li>
            </ul>
        </div>


    </section>
    <section id="copyright">
        <span>Copyright 2017 SyediNezhad , Soltani , Moini  All right reserved.</span>
    </section>
</div>
<script src="themes/js/common.js"></script>
<script>
    $(document).ready(function () {
        $('#checkout').click(function (e) {
            document.location.href = "checkout.html";
        })
    });
</script>
</body>
</html>