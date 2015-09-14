<?php
session_start();
$servername = "localhost";
$username = "mybookab_admin";
$password = '3;Q1h]9$G[G(';
$port= "3306";
$database="mybookab_able";

// Create connection
$conn = new mysqli("localhost", $username,$password, $database);

// Check connection
 if (!$conn) {
 $_SESSION['errormessage'] = mysqli_connect_error();
 $_SESSION['iserror'] = !$conn;
} 
?>