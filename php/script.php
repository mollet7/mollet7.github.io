<?php

    
        $name = $_REQUEST['name'];
        if(empty($_POST['name'])){
            echo "Hujaingiza kitu !<br>"; 
        }
        if ($name == 'Maulid'){
            echo "Name start with Maulid";
        }else {
            echo $name;
        }

?>