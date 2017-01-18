<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
$eror = "";
if (isset($_POST['save-submit'])) {
    if (isset($_POST['food-name'])) {
        if (isset($_POST['food-kind'])) {
            if (isset($_POST['food-ave'])) {
                if (isset($_POST['food-sundry'])) {
                    if(isset($_POST['food-price'])){
                        $save_submit = $_POST['save-submit'];
                        $food_name = $_POST['food-name'];
                        $food_kind = $_POST['food-kind'];
                        $food_ave = $_POST['food-ave'];
                        $food_sundry = $_POST['food-sundry'];
                        $food_price = $_POST['food-price'];
                        $result = $conn->query("insert into food_table  VALUES ('','$food_name','$food_kind','$food_ave','$food_sundry',$food_price)");
                        echo "insert into food_table  VALUES ('','$food_name','$food_kind','$food_ave',$food_sundry,$food_price)";
                        if ($result == "1") {
                            echo "yes";
                           header("Location:addFoodImage.php?food-name=".$food_name);
                        }
                        $conn->close();
                    }
                }
            }
        }
    }
}

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
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ورود</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta content='IE=8' http-equiv='X-UA-Compatible'/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
    <link href="themes/css/flexslider.css" rel="stylesheet"/>
    <link href="themes/css/main.css" rel="stylesheet"/>
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <!--                <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">-->
            </form>
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
    <section class="header_text sub">
        <img class="pageBanner" width="100%" src="themes/images/pageBanner.jpg" alt="New products">
        <h4><span>ورود به حساب کاربری</span></h4>
    </section>
    <section class="main-content">
        <div dir="rtl" class="row">
            <div class="span7">
                <h4 class="title"><span class="text"><strong>اطلاعات غذا</strong>؟</span></h4>

                <form action="" method="post" class="form-stacked">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">نام غذا</label>

                            <div class="controls">
                                <input type="text" name="food-name"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">ننوع غذا</label>

                            <div class="controls">
                                <input type="text" name="food-kind"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">پتعداد وجود</label>

                            <div class="controls">
                                <input type="number" name="food-ave"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">مواد تشکیل دهنده</label>

                            <div class="controls">
                                <input type="text" name="food-sundry"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">قیمت</label>

                            <div class="controls">
                                <input type="number" name="food-price"
                                       class="input-xlarge">
                            </div>
                        </div>

                        <hr>
                        <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit"
                                                    name="save-submit" value="ثبت غذا"></div>
                    </fieldset>
                </form>
            </div>


        </div>
    </section>
    <section id="footer-bar">
        <div dir="rtl" class="row">
            <h4>دسترسی سریع</h4>
            <ul class="nav">
                <li><a href="index.php">خانه</a></li>
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
</body>
</html>