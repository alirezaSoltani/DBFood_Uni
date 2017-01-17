<?php
session_start();
unset($_SESSION['user-name']);
unset($_SESSION['name']);
header('Location: index.php');
?>