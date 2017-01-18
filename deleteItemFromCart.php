<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/23/16
 * Time: 3:19 PM
 */
include 'connection.php';
session_start();

$deleteid = $_GET['removeId'];
$foodId = $_SESSION['foodId'];




$selectQuery2 = "SELECT * FROM cart_table WHERE cart_ordername='$deleteid'";
$result2 = $conn->query($selectQuery2);
$row2 = $result2->fetch_assoc();

$returnedNumber = $row2["cart_number"];
echo $returnedNumber;
echo '<br>';

$selectQuery4 = "SELECT * FROM food_table WHERE food_number='$foodId'";
$result4 = $conn->query($selectQuery4);
$row4 = $result4->fetch_assoc();

echo $row4["food_ava"];
echo '<br>';
$returnedNumber += $row4["food_ava"];
echo $returnedNumber;

echo '<br>';
$updateQuery = "UPDATE food_table SET food_ava='$returnedNumber' WHERE food_number = '$foodId'";
$result3 = $conn->query($updateQuery);

$result = $conn->query("DELETE FROM cart_table WHERE cart_ordername='$deleteid'");
header("location:product_detail.php");
$conn->close();
?>