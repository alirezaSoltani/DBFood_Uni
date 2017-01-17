<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
$eror = "";
if (isset($_POST['register-submit'])) {
    if (isset($_POST['register-name'])) {
        if (isset($_POST['register-last-name'])) {
            if (isset($_POST['register-email'])) {
                if (isset($_POST['register-tel'])) {
                    if (isset($_POST['register-mobile'])) {
                        if (isset($_POST['register-user-name'])) {
                            if (isset($_POST['register-password'])) {
                                if (isset($_POST['register-address'])) {
                                    $register_submit = $_POST['register-submit'];
                                    $register_name = $_POST['register-name'];
                                    $register_last_name = $_POST['register-last-name'];
                                    $register_email = $_POST['register-email'];
                                    $register_tel = $_POST['register-tel'];
                                    $register_mobile = $_POST['register-mobile'];
                                    $register_user_name = $_POST['register-user-name'];
                                    $register_password = $_POST['register-password'];
                                    $register_address = $_POST['register-address'];
                                    $result = $conn->query("insert into customer_table VALUES ('$register_user_name','$register_name','$register_last_name','$register_address',$register_tel,$register_mobile,'$register_password' )");
                                    if ($result == "1") {
                                        $_SESSION["user-name"] = $register_user_name;
                                        $_SESSION["name"] = $register_name;
                                    }
                                    $conn->close();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
if (isset($_POST['login-submit'])) {
    if (isset($_POST['login-user-name'])) {
        if (isset($_POST['login-password'])) {
            $login_user_name = $_POST['login-user-name'];
            $login_password = $_POST['login-password'];
            $result = $conn->query("select * from customer_table where person_username='$login_user_name' AND person_password  = '$login_password'");
//                echo "select * from customer_table where person_username='$login_user_name' AND person_password  = '$login_password'";
            if ($result->num_rows == 0) {
                $eror = "نام کاربری و یا رمز عبور نا معتبر میباشد";
            } else {
                $_SESSION["user-name"] = $login_user_name;
                $row = $result->fetch_assoc();
                $_SESSION["name"] = $row["person_fristName"];
            }
        }
    }
}
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
    <title>ورود</title>
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
    <!--<section class="navbar main-menu">-->
    <!--<div class="navbar-inner main-menu">				-->
    <!--&lt;!&ndash;<a href="index.html" class="logo pull-left"><img src="themes/images//logo.jpg" class="site_logo" alt=""></a>&ndash;&gt;
    -->
    <!--&lt;!&ndash;<nav id="menu" class="pull-right">&ndash;&gt;-->
    <!--&lt;!&ndash;<ul>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Woman</a>					&ndash;&gt;-->
    <!--&lt;!&ndash;<ul>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Lacinia nibh</a></li>									&ndash;&gt;
    -->
    <!--&lt;!&ndash;<li><a href="./products.html">Eget molestie</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Varius purus</a></li>									&ndash;&gt;
    -->
    <!--&lt;!&ndash;</ul>&ndash;&gt;-->
    <!--&lt;!&ndash;</li>															&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Man</a></li>			&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Sport</a>&ndash;&gt;-->
    <!--&lt;!&ndash;<ul>									&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Gifts and Tech</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Ties and Hats</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Cold Weather</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;</ul>&ndash;&gt;-->
    <!--&lt;!&ndash;</li>							&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Hangbag</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Best Seller</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;<li><a href="./products.html">Top Seller</a></li>&ndash;&gt;-->
    <!--&lt;!&ndash;</ul>&ndash;&gt;-->
    <!--&lt;!&ndash;</nav>&ndash;&gt;-->
    <!--</div>-->
    <!--</section>			-->
    <section class="header_text sub">
        <img class="pageBanner" width="100%" src="themes/images/pageBanner.jpg" alt="New products">
        <h4><span>ورود به حساب کاربری</span></h4>
    </section>
    <section class="main-content">
        <div dir="rtl" class="row">
            <div class="span7">
                <h4 class="title"><span class="text"><strong>آیا حساب کاربری ندارید</strong>؟</span></h4>

                <form action="" method="post" class="form-stacked">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">نام</label>

                            <div class="controls">
                                <input type="text" name="register-name" placeholder="نام خود را وارد کنید"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">نام خانوادگی</label>

                            <div class="controls">
                                <input type="text" name="register-last-name" placeholder="نام خانوادگی خود را وارد کنید"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">پست الکترونیک</label>

                            <div class="controls">
                                <input type="email" name="register-email" placeholder="آدرس ایمیل را وارد نمایید"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">تلفن</label>

                            <div class="controls">
                                <input type="number" name="register-tel" placeholder="شماره تلفن خود را وارد کنید"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">موبایل</label>

                            <div class="controls">
                                <input type="number" name="register-mobile" placeholder="شماره موبایل خود را وارد کنید"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">نام کاربری</label>

                            <div class="controls">
                                <input type="text" name="register-user-name" placeholder="نام کاربری خود را وارد کنبد"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">رمز عبور</label>

                            <div class="controls">
                                <input type="password" name="register-password" placeholder="رمز عبور را وارد نمایید"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">آدرس کامل</label>

                            <div class="controls">
                                <input type="text" name="register-address" placeholder="نام کاربری را وارد نمایید"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <hr>
                        <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit"
                                                    name="register-submit" value="ایجاد حساب"></div>
                    </fieldset>
                </form>
            </div>
            <div class="span5">
                <h4 class="title"><span class="text"><strong>اطلاعات حساب</strong>؟</span></h4>

                <form action="" method="post" class="form-stacked">
                    <!--                    <input type="hidden" name="next" value="/">-->
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">نام کاربری</label>

                            <div class="controls">
                                <input type="text" name="login-user-name" placeholder="نام کاربری را وارد کنید"
                                       id="username"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">رمز عبور</label>

                            <div class="controls">
                                <input type="password" placeholder="رمز عبور را وارد کنید" name="login-password"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label style="color:red; " class="control-label"><?php echo $eror; ?></label>


                        </div>
                        <div class="actions">
                            <input tabindex="3" class="btn btn-inverse large" type="submit" name="login-submit"
                                   value="ورود ">
                            <!--                            <hr>-->
                            <!--<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>-->
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </section>
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
            <!--<div class="span4">-->
            <!--<h4>حساب کاربری</h4>-->
            <!--<ul class="nav">-->
            <!--<li><a href="#">حساب کاربری</a></li>-->
            <!--<li><a href="#">Order History</a></li>-->
            <!--<li><a href="#">Wish List</a></li>-->
            <!--<li><a href="#">Newsletter</a></li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<div class="span5">-->
            <!--<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>-->
            <!--&lt;!&ndash;<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>&ndash;&gt;
            -->
            <!--<br/>-->
            <!--&lt;!&ndash;<span class="social_icons">&ndash;&gt;-->
            <!--&lt;!&ndash;<a class="facebook" href="#">Facebook</a>&ndash;&gt;-->
            <!--&lt;!&ndash;<a class="twitter" href="#">Twitter</a>&ndash;&gt;-->
            <!--&lt;!&ndash;<a class="skype" href="#">Skype</a>&ndash;&gt;-->
            <!--&lt;!&ndash;<a class="vimeo" href="#">Vimeo</a>&ndash;&gt;-->
            <!--&lt;!&ndash;</span>&ndash;&gt;-->
            <!--</div>					-->
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