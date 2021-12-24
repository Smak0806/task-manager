<?php

include 'mysqlconn.php';

$sqlconnection=mysqlconn();

$taskId=$_POST["taskId"];

// sql to delete a record
$sqlQuery = "DELETE FROM tasks WHERE id=$taskId";
  
if ($sqlconnection->query($sqlQuery) === TRUE) {
    echo "New record deleted successfully";
} else {
    echo "Error: " . $sqlQuery . "<br>" . $sqlconnection->error;
}

$sqlconnection->close();