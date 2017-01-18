<!DOCTYPE html>
<?php


include 'connection.php';
session_start();
$usercard = $_SESSION['user-name'];
if(isset($_POST['submit'])){
    $selectQuery = "SELECT * FROM cart_table WHERE cart_username='$usercard'";
    echo $selectQuery;
    $result = $conn->query($selectQuery);
//    echo $result;
    $desc = "";
    while($row = $result->fetch_assoc()){
        $desc.=$row['cart_ordername']." : ".$row['cart_number']." - ";
    }
    echo $desc;
    $result = $conn->query("insert into order_table values ('','$usercard',0,'$desc')");
    if($result=="1"){
        $result = $conn->query("DELETE FROM cart_table WHERE cart_username='$usercard'");
        echo "<script type='text/javascript'>alert('سبد خرید شما به رستوران تحویل داده شد .');</script>";
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

if(isset($_GET["foodId"]))
{
    $foodId = $_GET["foodId"];
    $_SESSION['foodId'] = $foodId;
}
else
{
    $foodId =  $_SESSION['foodId'];
}

?>


<html lang="en">
<head>
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
    <link href="themes/css/main.css" rel="stylesheet"/>
    <link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>

    <!-- scripts -->
    <script src="themes/js/jquery-1.7.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/superfish.js"></script>
    <script src="themes/js/jquery.scrolltotop.js"></script>
    <script src="themes/js/jquery.fancybox.js"></script>
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
                    <li><a href="#">حساب کاربری</a></li>
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
        <h4><span>جزئیات محصول</span></h4>
    </section>

    <?php


    $selectQuery2 = "SELECT * FROM food_table WHERE food_number = $foodId";
    $result2 = $conn->query($selectQuery2);
    $row2 = $result2->fetch_assoc();
    echo '<section class="main-content">
<div class="row">
<div class="span9">
    <div class="row">
        <div class="span4">
             <a href="themes/images/menu/3.jpg" class="thumbnail" data-fancybox-group="group1"
                 title="Description 1"><img alt="" src="themes/images/menu/'.$row2["food_name"].'.jpg"></a>
        </div>
        <div class="span5">
             <address>'; ?>

    <!--**************************************************************************!-->
    <!--                      SHOW FOOD INFO                                      !-->
    <!--**************************************************************************!-->

    <?php

    $selectQuery1 = "SELECT * FROM food_table WHERE food_number = $foodId";
    $result1 = $conn->query($selectQuery1);
    while($row1 = $result1->fetch_assoc())
    {
        echo '<table border ="5" dir="rtl" style="border-color: #c43c35; width: 100%">';

        echo '<tr border="5">';
        echo '<th colspan="2" style="font-size: 130%"><center>نام</center></th>';
        echo '<th colspan="2" style="font-size: 130%"><center>'.$row1["food_name"].'<center></th>';
        echo '</tr>';

        echo '<tr border="5">';
        echo '<th colspan="2" style="font-size: 130%"><center>نوع</center></th>';
        echo '<th colspan="2" style="font-size: 130%"><center>'.$row1["food_cat"].'<center></th>';
        echo '</tr>';

        echo '<tr border="5">';
        echo '<th colspan="2" style="font-size: 130%"><center>مواد تشکیل دهنده</center></th>';
        echo '<th colspan="2" style="font-size: 130%"><center>'.$row1["food_sundry"].'<center></th>';
        echo '</tr>';

        echo '<tr border="5">';
        echo '<th colspan="2" style="font-size: 130%"><center>قیمت</center></th>';
        echo '<th colspan="2" style="font-size: 130%"><center>'.$row1["food_price"].'<center></th>';
        echo '</tr>';

        echo '<tr border="5">';
        echo '<th colspan="2" style="font-size: 130%"><center>تعداد موجود</center></th>';
        echo '<th colspan="2" style="font-size: 130%"><center>'.$row1["food_ava"].'<center></th>';
        echo '</tr>';
    }
    echo '</table>';

    $selectQuery3 = "SELECT * FROM food_table WHERE food_number = $foodId";
    $result3 = $conn->query($selectQuery3);
    $row3 = $result3->fetch_assoc();


    /*echo '<div class="span5">
      <form class="form-inline" action="addItemToCart.php" method="post">
          <p>&nbsp;</p>
         <a href=addItemToCart.php?foodId='.$foodId.'افزودن به سبد خرید</a>
         <button style="margin-left: 25%" class="btn btn-inverse"  type="submit">افزودن به سبد خرید</button>
         <input style="margin-left: 5%" type="number" max="'.$row3["food_ava"].'" min ="1" name="numberOfOrder" class="span1" placeholder="1">
         <label>:تعداد</label>
     </form>
    </div>';*/
    echo '<br><br>';

    echo '<form action="addItemToCart.php" method="post" name="addToCartForm">
                     <table  border="5" style="border-color: #c43c35; width: 100%">
                <tr>
                    <td>
                        <input style="margin-left: 5%" type="number" max="'.$row3["food_ava"].'" min ="1" name="numberOfOrder" class="span1" placeholder="1">
                    </td>
                    <th  style="text-align: center">
                        <label style="margin-left= 25%">تعداد</label>
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="addToCart" value="افزودن به سبد خرید" style="margin-left:5"></input>
                    </td>
                </tr>
                </table>
                </form>';
    ?>


    <!--**************************************************************************!-->
    <!--                    END OF  SHOW FOOD INFO                                !-->
    <!--**************************************************************************!-->
    </address>
</div>
<table><tr><td colspan="3"></td></tr></table>
</div>
</div>

<!--**************************************************************************!-->
<!--                      SHOW CURRENT CART                                   !-->
<!--**************************************************************************!-->
<div class="span3 col">
    <div class="block">
        <ul class="nav nav-list">
            <li class="nav-header" style="color: #ff682b; padding-left: 70%"><h3>سبد خرید</h3></li>
            <?php

            $selectQuery = "SELECT * FROM cart_table WHERE cart_username='hosein'";
            $result = $conn->query($selectQuery);
            $total = 0;
            echo '<table border ="5" dir="rtl" style="border-color: #c43c35">
                            <tr>
                                <th style="font-size: 100%">نام</th>
                                <th style="font-size: 100%">تعداد</th>
                                <th style="font-size: 100%">قیمت واحد</th>
                                <th style="font-size: 100%">قیمت کل</th>
                                <th style="font-size: 100%">حذف</th>
                            </tr>';

            while($row = $result->fetch_assoc())
            {
                echo '<tr border="1">';
                echo '<td style="font-size: 90%"><center>'.$row["cart_ordername"].'</center></td>';
                echo '<td style="font-size: 90%"><center>'.$row["cart_number"].'</center></td>';
                echo '<td style="font-size: 90%"><center>'.$row["cart_price"].'</center></td>';
                $totalOfOne = $row["cart_price"] * $row["cart_number"];
                $total += $totalOfOne;
                echo '<td style="font-size: 90%"><center>'.$totalOfOne.'</center></td>';
                echo '<td><center><a href=deleteItemFromCart.php?removeId='.$row["cart_ordername"].'>حذف</a></td>';
                echo '</tr>';
            }
            echo '<tr>';
            echo '<td style="font-size: 90%"><center>جمع کل</center></td>';
            echo '<td colspan="4" style="font-size: 90%"><center>'.$total.'</center></td>';
            echo '</tr>';
            echo '</table>';

            echo '<br><br><form method="POST"><input type="submit" name="submit" value= "اعمال خرید"style="margin-left:5"></form>';

            ?>
        </ul>
    </div>
</div>

<!--**************************************************************************!-->
<!--                      END OF SHOW CURRENT CART                            !-->
<!--**************************************************************************!-->

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
    </div>
</section>


<section id="copyright">
    <span>Copyright 2017 SeyediNezhad , Soltani , Moini  All rights reserved.</span>
</section>
</div>


<script src="themes/js/common.js"></script>
<script>
    $(function () {
        $('#myTab a:first').tab('show');
        $('#myTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    })
    $(document).ready(function () {
        $('.thumbnail').fancybox({
            openEffect: 'none',
            closeEffect: 'none'
        });

        $('#myCarousel-2').carousel({
            interval: 2500
        });
    });
</script>


</body>
</html>