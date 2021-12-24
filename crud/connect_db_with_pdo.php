<?php
    $databaseHost = "localhost";
    $databaseUser = "root";
    $databasePass = "";
    $databaseName = "avinash";
    try {
        $conn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUser, $databasePass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        // use this method in development phase
        echo "Connection failed: " . $e->getMessage();

        // use this method in production phase
        // echo "Something went wrong!";
    }
?>