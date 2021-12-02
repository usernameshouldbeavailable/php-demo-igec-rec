<?php

    // $ages = array(18, 15, 16, 19, 40, 11, 17, 23);
    
    // $ages = array(11, 17, 23);

    // for ( $i = 0; $i < 6; $i++ )
    // {

    //     echo "Your Age is {$ages[$i]} <br />";

    // }

    $following = array(
        "@microsoft",
        "@facebook",
        "@instagram",
        "@edunetfoundation",
        "@sap",
        "@twitter"
    );

    for ( $i = 0; $i < sizeof($following); $i++)
    {

        echo "You are following <strong>{$following[$i]}</strong> <br />";

    }

?>