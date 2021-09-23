<?php
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }else{
        $controller = "";
    }

    switch($controller){
        case 'admin':{
            require_once("./Controller/adminController.php");
            break;
        }
        default:{
            require_once("./Controller/customerController.php");
            break;
        }
    }