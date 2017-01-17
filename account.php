<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    echo '<form style="direction:rtl;float:inherit;background:#22313F;height:10%;">
                    <form>
                        <img  width="30" height="30" src="themes/images/user.png"><p style="color:#FFF;">$name</p>
                        <a  href="signOut.php">خروج</a>
                    </form>
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
                    <li><a href="cart.php">یبد غذا</a></li>
                    <li><a href="register.php">ورود</a></li>
                    <li><a href="index.php">خانه</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="header_text sub">
        <img class="pageBanner" width="100%" src="themes/images/pageBanner.jpg" alt="New products">
        <h4><span>???? ?? ???? ??????</span></h4>
    </section>
    <section class="main-content">
        <div dir="rtl" class="row">
            <div class="span7">
                <h4 class="title"><span class="text"><strong>??? ???? ?????? ??????</strong>?</span></h4>

                <form action="" method="post" class="form-stacked">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">???</label>

                            <div class="controls">
                                <input type="text" name="eidt-name" placeholder="??? ??? ?? ???? ????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">??? ????????</label>

                            <div class="controls">
                                <input type="text" name="eidt-register-last-name" placeholder="??? ???????? ??? ?? ???? ????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">??? ?????????</label>

                            <div class="controls">
                                <input type="email" name="eidt-email" placeholder="???? ????? ?? ???? ??????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">????</label>

                            <div class="controls">
                                <input type="number" name="eidt-tel" placeholder="????? ???? ??? ?? ???? ????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">??????</label>

                            <div class="controls">
                                <input type="number" name="eidt-mobile" placeholder="????? ?????? ??? ?? ???? ????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">??? ??????</label>

                            <div class="controls">
                                <input type="text" name="eidt-user-name" placeholder="??? ?????? ??? ?? ???? ????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">??? ????</label>

                            <div class="controls">
                                <input type="password" name="eidt-password" placeholder="??? ???? ?? ???? ??????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">???? ????</label>

                            <div class="controls">
                                <input type="text" name="eidt-address" placeholder="??? ?????? ?? ???? ??????"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <hr>
                        <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit"
                                                    name="eidt-submit" value="????? ????"></div>
                    </fieldset>
                </form>
            </div>

        </div>
    </section>
    <section id="footer-bar">
        <div dir="rtl" class="row">
            <!--<div class="span3">-->
            <h4>?????? ????</h4>
            <ul class="nav">
                <li><a href="index.php">????</a></li>
                <!--<li><a href="./about.html">?????? ??</a></li>-->
                <li><a href="contact.php">?????? ?? ??</a></li>
                <li><a href="account.php">???? ??????</a></li>
                <li><a href="register.php">????</a></li>
            </ul>

        </div>
    </section>
    <section id="copyright">
        <span>Copyright 2017 SyediNezhad , Soltani , Moini  All right reserved.</span>
    </section>
</div>
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