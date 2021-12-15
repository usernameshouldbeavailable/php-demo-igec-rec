<?php

    // to use session, use this function
    session_start();

    // to set session value
    $_SESSION["useremail"] = "avinash@edunetfoundation.org";

    // to get session value
    if(isset($_SESSION["useremail"])) {
        echo "Session value is set";
    } else {
        echo "Session value is missing";
    }

?>