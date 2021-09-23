<?php
    require_once("./Model/DBConfig.php");
    class User{
        public static function getAllUser(){
            $db = new Database;
            $query = "select * from users";
            $listUser = $db->executeSelect($query);
            return $listUser;
        }
        public static function Login($userName, $pass){
            $db = new Database;
            $query = "select * from users where userName='$userName' and pass='$pass'";
            $listUser = $db->executeSelect($query);
            if($listUser!=NULL) return $listUser[0];
            return NULL;
        }
        public static function getListUserExceptCur_user($id){
            $db = new Database;
            $query = "select * from users where id != $id";
            $list = $db->executeSelect($query);
            return $list;
        }
        public static function addUser($userName, $pass, $role){
            $db = new Database;
            $query = "insert into users(userName, pass, role) values ('$userName', '".md5($pass)."', $role)";
            return $db->executeUpdate($query);
        }
        public static function getUserByID($id){
            $db = new Database;
            $query = "select * from users where id = $id";
            $list = $db->executeSelect($query);
            if($list!=NULL) return $list[0];
            return NULL;
        }
        public static function editUser($id, $fullName, $email, $phoneNumber, $address, $role){
            $db = new Database;
            $query = "update users set fullName = '$fullName', email='$email', phoneNumber='$phoneNumber', address='$address', role=$role where id = $id";
            return $db->executeUpdate($query);
        }
        public static function deleteUser($id){
            $db = new Database;
            $query = "delete from users where id = $id";
            return $db->executeUpdate($query);
        }
        public static function resetPass($id){
            $db = new Database;
            $query = "update users set pass = '".md5("1")."' where id = $id";
            return $db->executeUpdate($query);
        }
    }