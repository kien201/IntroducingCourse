<?php require_once("./View/templates/adminHeader.php");?>

<title>K.edu - Trang quản trị</title>
<style>
    .content .side-nav a:nth-child(2){
        background-color: lightblue;
        font-weight: 500;
    }
    .content .right-content .title{
        background-color: rgb(245, 245, 245);
        padding: 25px;
    }
    .content .right-content .title img{
        box-shadow: 0 0 20px rgb(218, 218, 218);
        margin-right: 20px;
    }
    .content .right-content .gray{
        background-color: rgb(230, 230, 230);
        padding: 25px;
    }
    .content .right-content .white{
        background-color: #fff;
        box-shadow: 0 0 10px #ccc;
    }
</style>
            <div class="col-md-9 right-content">
                <div class="row">
                    <div class="col title">
                        <img class="float-left rounded" src="./View/images/ContentTitle.png" alt="title">
                        <div>
                            <span style="font-size: 1.25rem;">Trang chủ</span>
                            <br>Trang chủ quản trị
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <p style="font-size: 1.5rem;text-align: center;padding: 150px 0;">Xin chào <span><?php echo $cur_user['fullName'] ?></span> đến với trang quản trị của <span>K.edu.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>