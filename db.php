<?php

$servername = "localhost";
$username = "u2707378_registe";
$password = "681372mih";
$dbname = "u2707378_registeruser322";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    "успех";
} 
?>