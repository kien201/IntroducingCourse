<?php
    require_once("./Model/DBConfig.php");
    class Category{
        public static function getListCategory(){
            $db = new Database;
            $query = "select * from category";
            $list = $db->executeSelect($query);
            return $list;
        }
        public static function addCategory($name){
            $db = new Database;
            $query = "insert into category(name) values ('$name')";
            return $db->executeUpdate($query);
        }
        public static function getCategoryByID($id){
            $db = new Database;
            $query = "select * from category where id = $id";
            $list = $db->executeSelect($query);
            if($list!=NULL) return $list[0];
            return NULL;
        }
        public static function editCategory($id, $name){
            $db = new Database;
            $query = "update category set name = '$name' where id = $id";
            return $db->executeUpdate($query);
        }
        public static function deleteCategory($id){
            $db = new Database;
            $query = "delete from category where id = $id";
            return $db->executeUpdate($query);
        }
    }