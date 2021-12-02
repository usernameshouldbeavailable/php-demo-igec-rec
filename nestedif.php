<?php

    $age = 17;

    $indian = true;

    if ( $age >= 18 )
    {
        if ( $indian == true )
        {
            echo "You can vote!";
        }
        else
        {
            echo "You cannot vote, as you are not an indian!";
        }
    }
    else
    {

        echo "You cannot vote!";

    }

?>