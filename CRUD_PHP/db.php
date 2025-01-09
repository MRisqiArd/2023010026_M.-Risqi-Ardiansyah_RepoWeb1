<?php
//server with default setting (user 'root' with no password)
$host = 'localhost'; // server
$user = 'root';
$pass = "";
$database = 'crud_php'; //Database Name
// establishing connection
$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    