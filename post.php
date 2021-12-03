<?php
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username === "avinash" && $password === "123456")
        {

            echo "Logged in!";

        }
        else
        {

            echo "Invalid username and password combination!";

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Post Method</title>
</head>
<body>
    <form action="post.php" method="post">
        <p><label for="">Username</label></p>
        <p><input type="text" name="username" /></p>
        <p><label for="">Password</label></p>
        <p><input type="password" name="password" /></p>
        <p><input type="submit" value="Login"></p>
    </form>
</body>
</html>