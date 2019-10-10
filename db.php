<?php

$servername = "localhost";
$username = "root";
$password = "password123456";
$dbname = "coffedb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // use exec() because no results are returned
    $result=$conn->exec($sql);
//    $user = $result->fetchAll();
    {

//echo $result;
 session_start();
        header('Location:dashbord.php');

//        if($result===1)
//        {echo " No Valid";}
//else {
//
//    {session_start();
//        header('Location:dashbord.php');}
//}

    }


} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>