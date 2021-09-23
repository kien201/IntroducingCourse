<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = "";
    }

    switch($action){
        case 'course':{
            require_once("./View/customer/course.php");
            break;
        }
        default:{
            require_once("./Model/course.php");
            $listCourse = Course::getTopCourse();
            if(isset($_POST['btnSendMessage'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $content = $_POST['content'];
                $state = $_POST['state'];
                require_once("./Model/message.php");
                if(Message::addMessage($name, $email, $phone, $address, $content, $state)){
                    //echo "gui thanh cong";
                }else{
                    //echo "k gui dc tin nhan";
                }
            }
            require_once("./View/customer/index.php");
            break;
        }
    }