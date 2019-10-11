<?php

$servername = "localhost";
$username = "root";
$password = "password123456";
$dbname = "coffedb";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);




?>