<?php

    session_start();

    if(isset($_SESSION["useremail"]))
    {
        echo "Session value is set";
    }
    else
    {
        echo "Session value is missing";
    }

?>