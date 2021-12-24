<?php

    $databaseHost = "localhost"; // facebook.com instagram.com microsoft.com

    $databaseUser = "root";

    $databasePass = "";

    $databaseName = "avinash";

    $mysqli = mysqli_connect($databaseHost, $databaseUser,$databasePass, $databaseName);

    print_r($mysqli);

?>