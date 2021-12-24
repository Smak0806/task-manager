<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <?php include 'functions.php'; ?>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">

        <header class="header">
            <h1><?php content("page-title"); ?></h1>
        </header>
        <hr class="flat-line">
    
        <div class="task-form">    
            
            
            <input type="text" name="task" id="task" placeholder='<?php content("form-text-input"); ?>'>
            
            <section class="checkbox-banner">
                <div>
                    <input type="checkbox" id="PHP" name="lang" value="PHP">
                    <label for="html"><?php content("form-element-1"); ?></label>
                </div>
                <div>
                    <input type="checkbox" id="javascript" name="lang" value="JavaScript">
                    <label for="javascript"><?php content("form-element-2"); ?></label>
                </div>
                <div>
                    <input type="checkbox" id="css" name="lang" value="CSS">
                    <label for="css"><?php content("form-element-3"); ?></label>
                </div>
            </section>

            <button class="input-btn" id="create_task">Añadir</button>

        </div>

        <div class="message-banner" id="message-banner">
            <span class="user-message" id="user-message"></span>
        </div>
    
        <div class="main-content-banner" id="taskTable">                
            <?php buildTable(); ?>            
        </div>

    </div>

    <script src="handler.js"></script>

</body>
</html>



    

