<?php

    // RTO giving driver license

    // 18 or above give regular license
    // 16 or above and below 17 give learner license
    // 16 or below, no license

    // 18 = regular
    // 15 = no licnese
    // 17 = lernaer licnese

    $age = 15;

    // range above 18
    if ($age >= 18) 
    {

        echo "You can have regular license";

    }
    // range 16, 17, 17.9
    else if ( $age >= 16 && $age < 17 ) 
    {

        echo "You can have learn liences";

    }
    else
    {

        echo "You cannot have any license";

    }

?>