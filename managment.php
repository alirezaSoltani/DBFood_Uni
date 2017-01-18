
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

     include 'connection.php';
     session_start();
        if(isset($_POST['register-submit'])){
            echo "0";
        }


echo'<table width="50%" border="1" cellspacing="0" cellpadding="1" align="center">';
    echo'<tr><th scope="col" align="center">مدیریت</th></tr>';

    echo'<tr><td align="center"><a href="peopleinformationdelete.php">حذف اطلاعات اعضا</a></td></tr>';

    echo'<tr><td align="center"><a href="foodinformation.php">تغییرات اطلاعات غذا</a></td></tr>';

    echo'<tr><td align="center"><a href="category.php">تغییر،حذف و افزودن نوع</a></td></tr>';

    echo'<tr><td align="center"><a href="">صفحه ی مدیریت سفارشات</a></td></tr>';
echo'</table>';
?>
</body>
</html>
