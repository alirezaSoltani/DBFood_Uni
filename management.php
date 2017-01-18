<?php
?>
<!DOCTYPE html>
<?php
include 'connection.php';
header("refresh:10;");
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
//     for($i = 0;$i<2;$i++){
//         $result = $conn->query("insert into order_table values ('',0,0,0 )");
//     }
     $result = $conn->query("select * from order_table where order_status=0");
    $table = "";
    $table .= '<table border ="4" dir="rtl" style="border-radius:102;border-color: #c43c35">
                <tr>
                    <th style="font-size: 100%">شماره غذا</th>
                    <th style="font-size: 100%">نام کاربری سفارش دهنده</th>
                    <th style="font-size: 100%">وضعیت</th>
                    <th style="font-size: 100%">شرح سفارش</th>
                </tr>';
                while($row = $result->fetch_assoc())
                {
                    $user = $row["order_username"];
                    $result2 = $conn->query("select * from customer_table where person_username = '$user' ");
                    while($row2 = $result2->fetch_assoc()){
                    $info = "".$row2['person_address']."-".$row2['person_mobile'];
                    }
                    $table.= '<tr border="1">';
                    $table.= '<td style="font-size: 90%"><center>'.$row["order_number"].'</center></td>';
                    $table.= '<td style="font-size: 90%"><center><div class="popup" onclick="myFunction()">'.$row["order_username"].'<span class="popuptext" id="myPopup">'.$info.'</span>
</div></center></td>';
                    $table.= '<td style="font-size: 90%"><center><a href="showInformation.php?ordernum='.$row["order_number"].'">در حال انتظار</a></center></td>';
                    $table.= '<td style="font-size: 90%"><center>'.$row["order_desc"].'</center></td>';
//                    $totalOfOne = $row["cart_price"] * $row["cart_number"];
//                    $total += $totalOfOne;
//                    $table.= '<td style="font-size: 90%"><center>'.$totalOfOne.'</center></td>';
//                    echo '<td><center><a href=deleteItemFromCart.php?removeId='.$row["cart_ordername"].'>حذف</a></td>';
                    echo '</tr>';
                }
                $table.= '</tr>';
//                echo '<td style="font-size: 90%"><center>جمع کل</center></td>';
//                echo '<td colspan="4" style="font-size: 90%"><center>'.$total.'</center></td>';
//                echo '</tr>';
                $table.='</table>';
?>
<html lang="fa">
<script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById('myPopup');
        popup.classList.toggle('show');
    }
</script>
<style>
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    /* The actual popup (appears on top) */
    .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class when clicking on the popup container (hide and show the popup) */
    .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;}
    }
</style>
<head>
    <meta charset="utf-8">
    <title>مدیریت</title>
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
            <form    class="search_form">
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
    <img class="pageBanner" src="themes/images/pageBanner.jpg" alt="New products">
    <h4><span>مدیریت</span></h4>
</section>
<section class="main-content">

    <div class="row">
            <div class="span9">
                <?php echo $table;?>

            </div>
        <div class="span3 col">
            <div class="block">
                <ul class="nav nav-list">
                    <li class="nav-header">منو مدیریت</li>
                    <a href="peopleinformationdelete.php">حذف اطلاعات اعضا</a><br>
                    <a href="foodinformation.php">تغییرات اطلاعات غذا</a><br>
                    <a href="category.php">تغییر،حذف و افزودن نوع</a><br>
                    <a href="addFood.php">اضافه کردن غذا</a>
                </ul>
                <li/></li>
            </div>
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
    <section id=
             <span>Co
    </section>
</div>
<script src="themes/js/common.js"></script>
</body>

</html>