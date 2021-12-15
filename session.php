<?php

    // to use session, use this function
    session_start();

    // to set session value
    $_SESSION["useremail"] = "avinash@edunetfoundation.org";

    // to get session value
    echo $_SESSION["useremail"];

?>