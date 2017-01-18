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
$name = $_GET['food-name'];
if(isset($_POST['submit'])){
//    $username = "1";
//    $filename=$_FILES["fileToUpload"]["name"];
//    $extension=end(explode(".", $filename));
    $target_dir = "themes/images/menu/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// آیا فایل ارسال شده یک عکس واقعی است یا خیر؟
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// آیا فایلی با همین نام در حال حاضر وجود دارد یا خیر؟
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// چک کردن اندازه فایل
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// اجازه آپلود فقط انواع خاصی از فایل
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// بالاخره اگر همه چیز بدون مشکل است فایل را ذخیره کن
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        $extension=end(explode(".", $target_file));
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "themes/images/menu/".$name.".".$extension)) {
//        if(move_uploaded_file($_FILES["fileToUpload"]["name"], "upload/".$username.".".$extension)){
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            header("Location:management.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
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
<!--        <h4><span>ورود به حساب کاربری</span></h4>-->
    </section>
    <section class="main-content">
        <div dir="rtl" class="row">
            <div class="span7">
                <form action="" enctype="multipart/form-data" method="post">
                    <input id="fileToUpload" name="fileToUpload" type="file" />
                    <input id="Submit" name="submit" type="submit" value="Submit" />
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