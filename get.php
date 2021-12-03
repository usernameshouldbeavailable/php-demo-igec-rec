<?php

    $message = "";

    if(isset($_GET["userAge"]))
    {

        $age = $_GET["userAge"];

        if ( $age >= 18 )
        {

            $message = "You can vote, as your age is {$age}";

        }
        else
        {

            $message = "You cannot vote, because your age is {$age}";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check if you can vote or not?</title>
</head>
<body>
    <form action="get.php" method="get">
        <label for="">Enter Your Age</label>
        <input type="number" name="userAge" />
        <input type="submit" value="Check Now!" />
        <p><?php echo $message ;?></p>
    </form>
</body>
</html>