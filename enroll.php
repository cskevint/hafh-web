<?php 
session_start();
$_SESSION['notice'] = "Checkout page for the online course is coming soon!";
header("Location: /course");
?>