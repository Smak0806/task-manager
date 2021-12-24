<?php

include 'task.php';
include 'mysqlconn.php';

$sqlconnection=mysqlconn();

$task = new Task();
$task->set_name($_POST["task"]);
$task->set_category($_POST["category"]);
$taskName=$task->get_name();
$taskCategory=$task->get_category();

$sqlQuery = "INSERT INTO tasks (task, category)
VALUES ('$taskName', '$taskCategory')";
  
if ($sqlconnection->query($sqlQuery) === TRUE) {
    echo "<script>console.log('New record created successfully');</script>";
} else {
    echo "<script>console.log('Error: " . $sqlQuery . " - " . $sqlconnection->error . "');</script>";
}

$sqlconnection->close();

?>


