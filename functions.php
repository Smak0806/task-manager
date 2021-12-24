<?php

    include "updateList.php";



function buildTable(){

    $deleteTask="";
    $table = updateList();

    echo "<table>";
    echo "<tr>";
    echo "<th>Tarea</th>";
    echo "<th>Categorías</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";

    foreach ($table as $task) {
        
        $deleteTask = "delete_task_" . $task["id"];
        
        echo "<tr>                
                <td>" . $task["task"] . "</td>
                <td>" . $task["category"] . "</td>
                <td><button onclick=\"taskHandler('delete', '".$task["id"]."');\" class='delete-task' id='".$deleteTask."'>Eliminar Tarea</button></td>
            </tr>";
    }

}

function content($args=""){

    $json_content = file_get_contents("content.json");
    
    $array= json_decode($json_content, true);
    
    echo $array[$args];


}


?>