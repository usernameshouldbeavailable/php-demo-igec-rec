<?php

    // $ages = array(1,2,3);
    
    $ages = [1,2,3];

    // we can only define the values inside an array

    echo "<pre>" , print_r($ages) , "</pre>";

    // we can also define the key and value inside an array

    $cricketer = array(
        "dhoni" => array(
            "age" => 40,
        ),
        "kholi" => array(
            "age" => 35,
        )
    );

    echo "<pre>" , print_r($cricketer) , "</pre>";

    echo "Find age of kholi ";

    echo $cricketer["kholi"]["age"];

?>