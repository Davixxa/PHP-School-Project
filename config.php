<?php 

    $serverip = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbDatabase = "temaspa";

    $conn = new mysqli($serverip,$dbUsername,"",$dbDatabase);

    if($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);

    }



?>