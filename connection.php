<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6153901";
$password = "R4kN1S4jJH";
$dbname = "sql6153901";
$conn = new mysqli($servername, $username, $password, $dbname);
//show eror
if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
}
?>