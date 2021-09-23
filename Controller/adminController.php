<?php
    session_start();
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = "";
    }

    switch($action){
        case 'login':{
            if(isset($_POST['btnLogin'])){
                $userName = $_POST['userName'];
                $pass = $_POST['pass'];
                require_once("./Model/user.php");
                $user = User::Login($userName, $pass);
                if($user!=NULL){
                    $_SESSION['cur_user'] = $user;
                    header("location: index.php?controller=admin");
                    die();
                }
                else{
                    //echo "tk mk ko chinh xac";
                }
            }
            require_once("./View/admin/login.php");
            break;
        }
        case 'logout':{
            //Xóa tất cả các biến session
            session_unset();
            //Hủy session
            session_destroy();
            //Về trang login
            header("location: index.php?controller=admin&action=login");
            break;
        }
        case 'category':{
            //kiểm tra đăng nhập
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            //lấy list danh mục
            require_once("./Model/category.php");
            $listCategory = Category::getListCategory();
            require_once("./View/admin/category/category.php");
            break;
        }
        case 'addCategory':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            //thêm danh mục
            if(isset($_POST['btnAddCategory'])){
                $name = $_POST['categoryName'];
                require_once("./Model/category.php");
                if(Category::addCategory($name)){
                    header("location: ./index.php?controller=admin&action=category");
                    die();
                }
                else{
                    //echo "insert failed";
                }
            }
            require_once("./View/admin/category/addCategory.php");
            break;
        }
        case 'editCategory':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            //lấy danh mục hiện tại
            require_once("./Model/category.php");
            $id = $_GET['id'];
            $cur_category = Category::getCategoryByID($id);
            //sửa danh mục
            if(isset($_POST['btnEditCategory'])){
                $name = $_POST['categoryName'];
                if(Category::editCategory($id, $name)){
                    header("location: ./index.php?controller=admin&action=category");
                    die();
                }
                else{
                    //echo "edit failed";
                }
            }
            require_once("./View/admin/category/editCategory.php");
            break;
        }
        case 'deleteCategory':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            $id = $_GET['id'];
            require_once("./Model/category.php");
            if(Category::deleteCategory($id)){
                header("location: ./index.php?controller=admin&action=category");
                die();
            }
            else{
                //echo "delete failed";
            }
            break;
        }
        case 'course':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            require_once("./Model/course.php");
            if($cur_user['role']==1) $listCourse = Course::getListCourse();
            else $listCourse = Course::getListCourseByUserID($cur_user['id']);
            require_once("./View/admin/course/course.php");
            break;
        }
        case 'addCourse':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            //lấy danh sách danh mục
            require_once("./Model/category.php");
            $listCategory = Category::getListCategory();
            //thêm khóa học
            if(isset($_POST['btnAddCourse'])){
                $courseName = $_POST['courseName'];
                if(isset($_FILES['image'])){
                    $file = $_FILES['image'];
                    $fileName = $file['name'];
                    move_uploaded_file($file['tmp_name'], "./View/images/".$fileName);
                }
                $description = $_POST['description'];
                $cost = $_POST['cost'];
                $userId = $cur_user['id'];
                $categoryId = $_POST['categoryId'];
                require_once("./Model/course.php");
                if(Course::addCourse($courseName, $fileName, $description, $cost, $userId, $categoryId)){
                    header("location: ./index.php?controller=admin&action=course");
                    die();
                }
                else{
                    //echo 'insert failed';
                }
            }
            require_once("./View/admin/course/addCourse.php");
            break;
        }
        case 'editCourse':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            //lấy khóa học cần sửa
            $idCourse = $_GET['id'];
            require_once("./Model/course.php");
            $course = Course::getCourseById($idCourse);
            //kiểm tra nếu chức vụ là admin hoặc là chủ sở hữu của khóa học mới cho sửa
            if($cur_user['role']==1 || $cur_user['id']==$course['user_id']){
                //lấy danh sách danh mục
                require_once("./Model/category.php");
                $listCategory = Category::getListCategory();
                if($cur_user['role']==1){
                    //lấy danh sách user
                    require_once("./Model/user.php");
                    $listUser = User::getAllUser();
                }
                if(isset($_POST['btnEditCourse'])){
                    if(isset($_POST['userId'])){
                        $userId = $_POST['userId'];
                    }else{
                        $userId = $course['user_id'];
                    }
                    $categoryId = $_POST['categoryId'];
                    $courseId = $course['id'];
                    $courseName = $_POST['courseName'];
                    if(isset($_FILES['image'])){
                        $file = $_FILES['image'];
                        $fileName = $file['name'];
                        move_uploaded_file($file['tmp_name'], "./View/images/".$fileName);
                    }else{
                        $fileName = $course['image'];
                    }
                    $description = $_POST['description'];
                    $cost = $_POST['cost'];
                    if(Course::editCourse($courseId, $courseName, $fileName, $description, $cost, $userId, $categoryId)){
                        header("location: ./index.php?controller=admin&action=course");
                        die();
                    }else{
                        echo 'edit failed';
                    }
                }
                require_once("./View/admin/course/editCourse.php");
            }
            else{
                //echo "Not admin or creator";
            }
            break;
        }
        case 'deleteCourse':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            $idCourse = $_GET['id'];
            require_once("./Model/course.php");
            $course = Course::getCourseById($idCourse);
            if($cur_user['role']==1 || $cur_user['id']==$course['user_id']){
                if(Course::deleteCourse($idCourse)){
                    header("location: ./index.php?controller=admin&action=course");
                    die();
                }else{
                    echo 'delete failed';
                }
            }else{
                echo 'not admin or creator';
            }
            break;
        }
        case 'message':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            require_once("./Model/message.php");
            $listMessage = Message::getAllMessage();
            require_once("./View/admin/message/message.php");
            break;
        }
        case 'user':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            if($cur_user['role']==1){
                require_once("./Model/user.php");
                $listUser = User::getListUserExceptCur_user($cur_user['id']);
                require_once("./View/admin/user/user.php");
            }
            else{
                echo 'not admin';
            }
            break;
        }
        case 'addUser':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            if($cur_user['role']==1){
                //thêm tài khoản
                if(isset($_POST['btnAddUser'])){
                    $userName = $_POST['userName'];
                    $pass = $_POST['pass'];
                    $role = $_POST['role'];
                    require_once("./Model/user.php");
                    if(User::addUser($userName, $pass, $role)){
                        header("location: ./index.php?controller=admin&action=user");
                        die();
                    }
                    else{
                        //echo "insert failed";
                    }
                }
                require_once("./View/admin/user/addUser.php");
            }
            else{
                echo 'not admin';
            }
            break;
        }
        case 'editUser':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            if($cur_user['role']==1){
                //lấy tài khoản hiện tại
                require_once("./Model/user.php");
                $id = $_GET['id'];
                $cur_acc = User::getUserByID($id);
                //sửa tài khoản
                if(isset($_POST['btnEditUser'])){
                    $fullName = $_POST['fullName'];
                    $email = $_POST['email'];
                    $phoneNumber = $_POST['phoneNumber'];
                    $address = $_POST['address'];
                    $role = $_POST['role'];
                    if(User::editUser($id, $fullName, $email, $phoneNumber, $address, $role)){
                        header("location: ./index.php?controller=admin&action=user");
                        die();
                    }
                    else{
                        //echo "update failed";
                    }
                }
                require_once("./View/admin/user/editUser.php");
            }
            else{
                echo 'not admin';
            }
            break;
        }
        case 'deleteUser':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            if($cur_user['role']==1){
                $id = $_GET['id'];
                require_once("./Model/user.php");
                if(User::deleteUser($id)){
                    header("location: ./index.php?controller=admin&action=user");
                    die();
                }
                else{
                    echo "delete failed";
                }
            }
            else{
                echo 'not admin';
            }
            break;
        }
        case 'resetPass':{
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];
            if($cur_user['role']==1){
                $id = $_GET['id'];
                require_once("./Model/user.php");
                if(User::resetPass($id)){
                    header("location: ./index.php?controller=admin&action=user");
                    die();
                }
                else{
                    echo "delete failed";
                }
            }
            else{
                echo 'not admin';
            }
            break;
        }
        default:{
            //Nếu chưa đăng nhập -> điều hướng sang trang login
            if(!isset($_SESSION['cur_user'])){
                header("location: index.php?controller=admin&action=login");
                die();
            }
            else $cur_user = $_SESSION['cur_user'];

            require_once("./View/admin/index.php");
            break;
        }
    }