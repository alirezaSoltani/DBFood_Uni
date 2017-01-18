<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
$eror = "";
if (isset($_POST['eidt-submit'])) {
    $edit_user_name = $_SESSION["user-name"];
    $edit_name = $_POST['eidt-name'];
    $edit_last_name = $_POST['eidt-last-name'];
    $edit_email = $_POST['eidt-email'];
    $edit_tel = $_POST['eidt-tel'];
    $edit_mobile = $_POST['eidt-mobile'];
    $edit_password = $_POST['eidt-password'];
    $edit_address = $_POST['eidt-address'];
    $result = $conn->query("update customer_table set person_firstName = '$edit_name' , person_lastName = '$edit_last_name' ,  person_email = '$edit_email' , person_tel =  $edit_tel  ,  person_mobile = $edit_mobile , person_password = '$edit_password' , person_address = '$edit_address' ");
    echo "update customer_table set person_firstName = '$edit_name' , person_lastName = '$edit_last_name' ,  person_email = '$edit_email' , person_tel =  $edit_tel  ,  person_mobile = $edit_mobile , person_password = '$edit_password' , person_address = '$edit_address' ";
        if ($result == "1") {
        $_SESSION["name"] = $edit_name;
    }
    $eror = "تغییرات با موفقیت اعمال شدند";
}
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    $edit_user_name = $_SESSION["user-name"];
    $result = $conn->query("select * from customer_table where person_username = '$edit_user_name'");
    $row = $result->fetch_assoc();
    $edit_name = $row['person_firstName'];
    $edit_last_name = $row['person_lastName'];
    $edit_email = $row['person_email'];
    $edit_tel = $row['person_tel'];
    $edit_mobile = $row['person_mobile'];
    $edit_password = $row['person_password'];
    $edit_address = $row['person_address'];

    echo '<form style="direction:rtl;float:inherit;background:#22313F;height:10%;">
                    <form>
                        <img  width="30" height="30" src="themes/images/user.png"><p style="color:#FFF;">' . $name . '</p>
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
                    <li><a href="register.php">ورود</a></li>
                    <li><a href="index.php">خانه</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div dir="rtl"  id="wrapper" class="container">
    <section class="header_text sub">
        <img class="pageBanner" width="100%" src="themes/images/pageBanner.jpg" alt="New products">
        <h4><span>تغییرات حساب</span></h4>
    </section>
    <section dir="rtl" class="main-content">
        <div dir="rtl" class="row">
            <div class="span7">
                <h4 class="title"><span class="text"><strong>آیا میخواهید اطلاعات حساب خود را تغییر دهید</strong>?</span></h4>

                <form action="" dir="rtl" method="post" class="form-stacked">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">نام</label>

                            <div class="controls">
                                <input type="text" name="eidt-name" value="' . $name . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">نام خانوادگی</label>

                            <div class="controls">
                                <input type="text" name="eidt-last-name" value="' . $edit_last_name . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">پست الکترونیک</label>

                            <div class="controls">
                                <input type="email" name="eidt-email" value="' . $edit_email . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">تلفن</label>

                            <div class="controls">
                                <input type="number" name="eidt-tel" value="' . $edit_tel . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">موبایل</label>

                            <div class="controls">
                                <input type="number" name="eidt-mobile" value="' . $edit_mobile . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">نام کاربری</label>

                            <div class="controls">
                                <input type="text" name="eidt-user-name" value="' . $edit_user_name . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">مز عبور</label>

                            <div class="controls">
                                <input type="password" name="eidt-password" value="' . $edit_password . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">آدرس</label>

                            <div class="controls">
                                <input type="text" name="eidt-address" value="' . $edit_address . '"
                                       class="input-xlarge">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">' . $eror . '</label>
                        </div>
                        <hr>
                        <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit"
                                                    name="eidt-submit" value="ثبت تغییرات"></div>
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
                <!--<li><a href="./about.html">?????? ??</a></li>-->
                <li><a href="contact.php">تماس با ما</a></li>
                <li><a href="account.php">حساب کاربری</a></li>
                <li><a href="register.php">ورود</a></li>
            </ul>

        </div>
    </section>
    <section id="copyright">
        <span>Copyright 2017 SyediNezhad , Soltani , Moini  All right reserved.</span>
    </section>
</div>
              </form>';
}else{
    echo '

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
<div dir="rtl"  id="wrapper" class="container">
    <section class="header_text sub">
        <img class="pageBanner" width="100%" src="themes/images/pageBanner.jpg" alt="New products">
        <h4><span>تغییرات حساب</span></h4>
    </section>
    <section dir="rtl" class="main-content">
        <a href="register.php">شما هنوز وارد حساب کاربری نشده اید<br>برای ایجاد و یا ورود اینجا را فشار دهید</a>
    </section>
    <section id="footer-bar">
        <div dir="rtl" class="row">
            <h4>دسترسی سریع</h4>
            <ul class="nav">
                <li><a href="index.php">خانه</a></li>
                <li><a href="contact.php">تماس با ما</a></li>
                <li><a href="account.php">حساب کاربری</a></li>
                <li><a href="register.php">ورود</a></li>
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
    <title>حساب کاربری</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
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

<script src="themes/js/common.js"></script>
</body>
</html>