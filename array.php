<?php

    // int myNum[3] = {10, 20, 30};

    // int myNum[3] = {"Avinash", 20.0, 30};

    $myNum = array("Avinash", 20.0, 30, null, array(21.0, "Rahul"));

    // differet type of data types
    // array inside an array

    foreach($myNum as $num) 
    {

        echo "Value is {$num} <br />";

    }

?>