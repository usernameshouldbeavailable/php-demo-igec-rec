<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Todo</title>
</head>
<body>
    <form action="save_task_to_db.php" method="post">
        <p><label for="">Task Name</label></p>
        <p><input type="text" name="task_name" /></p>
        <p><input type="submit" value="Add Item" /></p>
    </form>
</body>
</html>