<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        span{
            font-weight: 500;
        }
        .header{
            position: relative;
            z-index: 1;
            box-shadow: 0 0 30px #ccc;
            background-color: #fff;
        }
        .header .logo{
            padding: 0 1%;
        }
        .header .logo h3{
            font-style: italic;
            line-height: 52px;
            margin: 0;
        }
        .header .home-link{
            display: flex;
            align-items: center;
            padding: 0 25px;
        }
        .header .home-link img{
            margin-right: 5px;
        }
        .header .dropdown .account:active img{
            transform: scale(0.95);
        }
        .header .dropdown .dropdown-menu a:hover{
            background-color: rgb(228, 228, 228);
        }
        .content .side-nav{
            position: fixed;
            top: 52;
            left: 0;
            padding: 10px 20px;
            z-index: 1;
        }
        .content .side-nav h6{
            color: #1865f2;
            margin: 10px 0;
        }
        .content .side-nav a{
            display: block;
            padding: 10px 15px;
            color: black;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }
        .content .side-nav a img{
            margin-right: 10px;
        }
        .content .side-nav a:hover{
            background-color: lightblue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="sticky-top">
            <div class="row header">
                <div class="col-md-3 logo">
                    <img class="float-left" src="./View/images/Logo.png" alt="Logo">
                    <h3>K.edu</h3>
                </div>
                <div class="col home-link">
                    <a style="color: rgb(130, 130, 130);" href="./index.php">
                        <img class="float-left" src="./View/images/Homepage.png" alt="Home"> Trang chủ
                    </a>
                </div>
                <div class="col">
                    <div class="nav dropdown justify-content-end">
                        <div>
                            <span><?php echo $cur_user['userName'] ?></span>
                            <br>
                            <?php
                                if($cur_user['role']==1){
                                    echo "Quản trị viên";
                                }
                                else echo "Cộng tác viên";
                            ?>
                        </div>
                        <div class="dropdown-toggle account" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="./View/images/User.png" alt="User">
                        </div>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img src="./View/images/ListItem.png" alt="item"> Thông tin tài khoản</a>
                            <a class="dropdown-item" href="index.php?controller=admin&action=logout"><img src="./View/images/Logout.png" alt="logout"> Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-3 side-nav">
                <h6>Trang chủ</h6>
                <a href="index.php?controller=admin"><img src="./View/images/ListItem.png" alt="item">Trang chủ</a>
                <h6>Tính năng quản trị</h6>
                <a href="index.php?controller=admin&action=category"><img src="./View/images/ListItem.png" alt="item">Danh mục</a>
                <a href="index.php?controller=admin&action=course"><img src="./View/images/ListItem.png" alt="item">Khóa học</a>
                <a href="index.php?controller=admin&action=message"><img src="./View/images/ListItem.png" alt="item">Quản lý tin nhắn</a>
                <?php if($cur_user['role']==1){ ?>
                    <a href="index.php?controller=admin&action=user"><img src="./View/images/ListItem.png" alt="item">Quản lý tài khoản</a>
                <?php } ?>
            </div>
            <div class="col-md-3"></div>