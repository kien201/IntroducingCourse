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
        .header{
            border-bottom: 1px solid #D6D8DA !important;
            padding: 0 10%;
            background-color: #fff;
        }
        .header .logo img{
            float: left;
        }
        .header .logo h3{
            font-style: italic;
            line-height: 52px;
            margin: 0;
        }
        .top-nav ul{
            padding: 0px;
        }
        .top-nav ul li{
            list-style-type: none;
            float: right;
        }
        .top-nav ul li a{
            display: block;
            padding: 14px 16px;
            font-weight: 600;
            color: rgb(10, 42, 102);
        }
        .top-nav ul li a:hover{
            color: #1865f2;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row header sticky-top">
            <div class="col-md-5 logo">
                <img src="./View/images/Logo.png" alt="Logo">
                <h3>K.edu</h3>
            </div>
            <div class="col-md-7 top-nav">
                <ul>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Khóa học</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#" id="current">Trang chủ</a></li>
                </ul>
            </div>
        </div>