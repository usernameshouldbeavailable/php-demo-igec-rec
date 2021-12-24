<?php

    include_once('db.php');

    $taskId = $_GET['id']; // getting this from the url

    $selectQuery = "SELECT * FROM mytodo WHERE id = {$taskId}";

    $todoResult = mysqli_query($mysqli, $selectQuery);

    // fetching just one single row
    $todoArray = mysqli_fetch_array($todoResult);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the Task</title>
</head>
<body>
    <form action="update_item.php" method="post">
        <p><label for="">Task Name</label></p>
        <p><input type="text" name="task_name" value="<?php echo $todoArray['task_name'];?>"/></p>
        <p><label for="">Change status</label></p>
        <p>
            <select name="status">
                <option value="2" <?php echo $todoArray['status'] == 2 ? 'selected' : '';?>>Pending</option>
                <option value="1" <?php echo $todoArray['status'] == 1 ? 'selected' : '';?>>Complete</option>
            </select>
        </p>
        <p><input type="hidden" name="task_id" value="<?php echo $todoArray['id'];?>"></p>
        <p><input type="submit" value="Update Item" /></p>
    </form>
</body>
</html>