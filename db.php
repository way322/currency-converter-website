<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeruser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die('Connection Fialed'. mysqli_connect_errno());
} else {
    "успех";
} ?>