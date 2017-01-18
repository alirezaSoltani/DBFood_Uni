<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/23/16
 * Time: 3:19 PM
 */
include 'connection.php';
session_start();

$numberOfOrder = $_POST["numberOfOrder"];
$foodId = $_SESSION['foodId'];
$currentAvailable;


$selectQuery = "SELECT * FROM food_table WHERE food_number = $foodId";
$result = $conn->query($selectQuery);
$row = $result->fetch_assoc();

$currentAvailable = $row["food_ava"];
$currentAvailable -= $numberOfOrder;

$updateQuery = "UPDATE food_table SET food_ava='$currentAvailable' WHERE food_number = '$foodId'";
$result2 = $conn->query($updateQuery);
//$row2 = $result2->fetch_assoc();

$user = "hosein";
$foodname = $row["food_name"];
$orderNumber = $row["food_price"];

$insertQuery = "INSERT INTO cart_table (`cart_username`, `cart_ordername`, `cart_number`, `cart_price`) VALUES ('$user','$foodname','$numberOfOrder','$orderNumber')";
$result3 = $conn->query($insertQuery);



 header("location:product_detail.php");

?>