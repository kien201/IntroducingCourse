<?php
    require_once("./Model/DBConfig.php");
    class Course{
        public static function getTopCourse(){
            $db = new Database;
            $query = "select course.*, fullName from course inner join users on course.user_id=users.id order by course.id desc limit 4";
            $listCourse = $db->executeSelect($query);
            return $listCourse;
        }
        public static function getListCourse(){
            $db = new Database;
            $query = "select course.*, category.name as categoryName, fullName from course left join users on course.user_id=users.id left join category on course.category_id=category.id";
            $listCourse = $db->executeSelect($query);
            return $listCourse;
        }
        public static function getListCourseByUserId($id){
            $db = new Database;
            $query = "select course.*, category.name as categoryName, fullName from course inner join users on course.user_id=users.id left join category on course.category_id=category.id where user_id = $id";
            $listCourse = $db->executeSelect($query);
            return $listCourse;
        }
        public static function addCourse($name, $fileName, $description, $cost, $userId, $categoryId){
            $db = new Database;
            $query = "insert into course(name, image, description, cost, user_id, category_id) values ('$name', '$fileName', '$description', $cost, $userId, $categoryId)";
            return $db->executeUpdate($query);
        }
        public static function getCourseById($id){
            $db = new Database;
            $query = "select * from course where id = $id";
            $list = $db->executeSelect($query);
            if($list!=NULL) return $list[0];
            return NULL;
        }
        public static function editCourse($id, $name, $fileName, $description, $cost, $userId, $categoryId){
            $db = new Database;
            $query = "update course set name = '$name', image = '$fileName', description = '$description', cost = $cost, user_id = $userId, category_id = $categoryId where id = $id";
            return $db->executeUpdate($query);
        }
        public static function deleteCourse($id){
            $db = new Database;
            $query = "delete from course where id = $id";
            return $db->executeUpdate($query);
        }
    }