<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "ghost";
    $dbName = "luming";

    try {
        $connection = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8mb4",$userName,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    }

    catch(PDOException $e){
        echo "Failed: " . $e->getMessage(); 
    
    }
?>