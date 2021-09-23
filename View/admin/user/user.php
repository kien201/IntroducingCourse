<?php require_once("./View/templates/adminHeader.php");?>

<title>Quản lý tài khoản</title>
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
        padding: 12px;
    }
    .right-content .white table{
        text-align: center;
    }
    .right-content .white table .btn{
        margin-bottom: 5px;
    }
</style>
            <div class="col-md-9 right-content">
                <div class="row">
                    <div class="col title">
                        <img class="float-left rounded" src="./View/images/ContentTitle.png" alt="title">
                        <div>
                            <span style="font-size: 1.25rem;">Quản lý tài khoản</span>
                            <br>Danh sách tài khoản
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <h4>Danh sách tài khoản</h4>
                        <a href="./index.php?controller=admin&action=addUser" class="btn btn-primary btn-sm">Thêm</a>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ tên</th>
                                    <th scope="col">Tên tài khoản</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Chức vụ</th>
                                    <th scope="col">Tính năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- begin foreach -->
                                <?php $count = 1;
                                foreach($listUser as $user){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><?php echo $user['fullName'] ?></td>
                                        <td><?php echo $user['userName'] ?></td>
                                        <td><?php echo $user['email'] ?></td>
                                        <td><?php echo $user['phoneNumber'] ?></td>
                                        <td><?php echo $user['address'] ?></td>
                                        <td>
                                            <?php if($user['role']==1){
                                                echo "Quản trị viên";
                                            }else{
                                                echo "Cộng tác viên";
                                            } ?>
                                        </td>
                                        <td>
                                            <a href="./index.php?controller=admin&action=editUser&id=<?php echo $user['id'] ?>" class="btn btn-secondary btn-sm">Chỉnh sửa</a>
                                            <a href="./index.php?controller=admin&action=deleteUser&id=<?php echo $user['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                                            <a href="./index.php?controller=admin&action=resetPass&id=<?php echo $user['id'] ?>" class="btn btn-success btn-sm">Đặt lại mật khẩu</a>
                                        </td>
                                    </tr>
                                    
                                <?php $count++; } ?>
                                <!-- end foreach -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>