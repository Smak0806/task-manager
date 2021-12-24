<?php

    include 'mysqlconn.php';

    function updateList(){

        $sqlconnection=mysqlconn();

        $sqlQuery = "SELECT * FROM tasks";
        $result = $sqlconnection->query($sqlQuery);

        $table = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($table,$row);
            }

        } 
        
        $sqlconnection->close();

        return $table;
    }



?>