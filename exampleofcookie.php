<?php

    $welcomeMessage = array(
        "hi" => "हाय, तुम कैसे कर रहे हो?",
        "en" => "Hi, how are you doing?",
    );

    // setting cookie value
    if(isset($_GET["lang"]))
    {
        setcookie("lang", $_GET["lang"]);
    }

    // getting user preference
    $userLanguage = $_COOKIE["lang"];

?>

<p><?php echo $welcomeMessage[$userLanguage];?></p>
<p><a href="exampleofcookie.php?lang=en">English</a> / 
<a href="exampleofcookie.php?lang=hi">हिन्दी</a></p>