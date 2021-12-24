<?php

    include_once('db.php');

    $selectQuery = "SELECT * FROM `mytodo` ORDER BY id DESC";

    $todoResult = mysqli_query($mysqli, $selectQuery);

    // $todoArray = mysqli_fetch_array($todoResult);

    // print_r($todoArray);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pending Todo</title>
    <style>
        td {
            padding: 10px;
        }
        .pending {
            color: red;
        }
        .done {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Your Pending Todo</h1>
    <table border="2px">
        <tr>
            <td>Id</td>
            <td>Task Name</td>
            <td>Status</td>
            <td>Edit</td>
        </tr>
        <?php
        
            while($todoArray = mysqli_fetch_array($todoResult))
            {
                echo '<tr>';
                echo '<td>' . $todoArray['id'] . '</td>';
                echo '<td>' . $todoArray['task_name'] . '</td>';
                if($todoArray['status'] == 2)
                {
                    echo '<td class="pending">Pending</td>';
                }
                else
                {
                    echo '<td class="done">Completed</td>';
                }
                echo '<td><a href="">Edit</a></td>';
                echo '</tr>';
            }
        
        ?>
    </table>
</body>
</html>