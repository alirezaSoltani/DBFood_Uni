<?php
    $order = $_GET['ordernum'];

    include 'connection.php';
    $result = $conn->query("UPDATE order_table  set order_status=1 where order_number='$order'");
//    echo "UPDATE order_table  set order_status='1' where order_number='$order'";
//    echo $result;
    header("Location:  management.php");

?>