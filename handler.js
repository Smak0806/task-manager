function categoryHandler(){        
    let categories=[];

    if($("#PHP").prop("checked")){
        categories.push("PHP");
    }
    
    if($("#javascript").prop("checked")){
        categories.push("JS");
    }
    
    if($("#css").prop("checked")){
        categories.push("CSS");
    }
    
    return categories.toString();

}

function updateTable(){
    
    $.ajax({
        url: "selectTasks.php",
        success: function(result){
            console.log(result);
            $("#taskTable").html(result);
        }
    });

}

function taskHandler(args="", task_id=""){
/* CRUD = Create Read Update Delete */
    let function_url;
    let category_value = categoryHandler();
    let user_message;
    let result_status;
    console.log(category_value);

    switch (args) {

        case 'create':
            function_url="createTask.php";
            category_value = category_value;
            console.log("category_value: ", category_value); 
            taskData = {
                task:$('#task').val(),
                category: category_value               
            }
            
        break;

        case 'delete':
            function_url="deleteTask.php";
            taskData = {
                taskId:task_id            
            }
        break;    

    }

    if(function_url=="deleteTask.php"){
        user_message="Se ha eliminado la tarea exitosamente";
    }else if(function_url=="createTask.php"){
        user_message="Se ha creado la tarea exitosamente";
    }

    $.ajax({
        type: 'post',
        dataType: 'json', 
        url: function_url,
        data: taskData, 
        success: function(result){
            console.log(result);                        
        }
    });
    console.log(result_status);
    updateTable();

    if(function_url="createTask.php"){
        $("#user-message").html(user_message);
        $("#message-banner").fadeIn();
        $("#PHP").prop('checked', false);
        $("#javascript").prop('checked', false);
        $("#css").prop('checked', false);
        $('#task').val("");
        result_status="";
    }

    setTimeout(function(){
        $("#message-banner").fadeOut();
        $("#user-message").html("");
    }, 10000);
}

$("#create_task").on("click", function(){
    taskHandler("create");
    
    $.ajax({
        url: "selectTasks.php",
        success: function(result){
            $("#taskTable").html(result);
        }
    });

});

$(document).ready(function() {
    console.log("Web cargada.");
    updateTable()
});


