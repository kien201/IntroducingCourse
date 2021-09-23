<?php
    require_once("./Model/DBConfig.php");
    class Message{
        public static function addMessage($name, $email, $phoneNumber, $address, $content, $state){
            $db = new Database;
            $query = "insert into message(fullName, email, phoneNumber, address, content, state) values ('$name', '$email', '$phoneNumber', '$address', '$content', $state)";
            return $db->executeUpdate($query);
        }
        public static function getAllMessage(){
            $db = new Database;
            $query = "select * from message order by sendDate desc";
            $list = $db->executeSelect($query);
            return $list;
        }
    }