<?php

    include_once('db.php');

    $taskId = $_GET['id']; // getting this from the url

    $selectQuery = "DELETE FROM mytodo WHERE id = {$taskId}";

    $todoResult = mysqli_query($mysqli, $selectQuery);

    echo 'Item removed from your todo!';

?>