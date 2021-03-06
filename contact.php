<!DOCTYPE html>
<?php
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ارتباط با ما</title>
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
<div id="top-bar" class="container">
    <div class="row">
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

    <section class="google_map">
        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=74%2F6+Nguy%E1%BB%85n+V%C4%83n+Tho%E1%BA%A1i,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=74%2F6+Nguyen+Van+Thoai+Da+Nang,+Viet+Nam&amp;sll=37.0625,-95.677068&amp;sspn=41.546728,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=74+Nguy%E1%BB%85n+V%C4%83n+Tho%E1%BA%A1i,+Ng%C5%A9+H%C3%A0nh+S%C6%A1n,+Da+Nang,+Vietnam&amp;t=m&amp;ll=16.064537,108.24151&amp;spn=0.032992,0.039396&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
    </section>
    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.jpg" alt="New products">
        <h4><span>ارتباط با ما</span></h4>
    </section>
    <section class="main-content">
        <div dir="rtl" class="row">
            <div class="span5">
                <div>
                    <h5>اطلاعات تماس</h5>

                    <p><strong>تلفن:</strong>&nbsp;(613) 335-4576<br>
                        <strong>فکس:</strong>&nbsp;+04 (613) 335-4575<br>
                        <strong>پست الکترونیک:</strong>&nbsp;<a href="#">AzPaygah@mail.com</a>
                    </p>
                    <br/>

                </div>
            </div>
            <div class="span7">
                <p>کارشناسان ما همیشه منتظر نطرات سازنده شما هستند.</p>

                <form method="post" action="#">
                    <fieldset>
                        <div class="clearfix">
                            <label for="name"><span>نام :</span></label>

                            <div class="input">
                                <input tabindex="1" size="18" id="name" name="name" type="text" value=""
                                       class="input-xlarge" placeholder="نام ">
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="email"><span>پست الکترونیک:</span></label>

                            <div class="input">
                                <input tabindex="2" size="25" id="email" name="email" type="text" value=""
                                       class="input-xlarge" placeholder="پست الکترونیک">
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="message"><span>پیام:</span></label>

                            <div class="input">
                                <textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"
                                          placeholder="پیام"></textarea>
                            </div>
                        </div>

                        <div class="actions">
                            <button tabindex="3" type="submit" class="btn btn-inverse">ارسال پیام</button>
                        </div>
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