<?php require_once("./View/templates/adminHeader.php");?>

<title>Thêm tài khoản</title>
<style>
    .content .side-nav a:nth-child(7){
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
    .right-content .white h4{
        text-align: center;
        margin:0;
        padding: 0 0 20px;
    }
    .right-content .white{
        padding: 30px;
    }
</style>
            <div class="col-md-9 right-content">
                <div class="row">
                    <div class="col title">
                        <img class="float-left rounded" src="./View/images/ContentTitle.png" alt="title">
                        <div>
                            <span style="font-size: 1.25rem;">Quản lý tài khoản</span>
                            <br>Thêm tài khoản
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <h4>Thêm tài khoản</h4>
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="userName" class="col-md-2 col-form-label">Tên tài khoản</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="userName" name="userName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass" class="col-md-2 col-form-label">Mật khẩu</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="pass" name="pass">
                                </div>
                            </div>
                            <fieldset class="form-group row">
                                <label class="col-md-2 col-form-label pt-0">Chức vụ</label>
                                <div class="col-md-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role" id="role1" value="1">
                                        <label class="form-check-label" for="role1">Quản trị viên</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role" id="role2" value="0" checked="checked">
                                        <label class="form-check-label" for="role2">Cộng tác viên</label>
                                    </div>
                                </div>
                            </fieldset>
                            <center>
                                <button type="submit" class="btn btn-primary" name="btnAddUser">Thêm</button>
                                <a href="./index.php?controller=admin&action=user" class="btn btn-secondary">Hủy</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>