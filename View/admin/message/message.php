<?php require_once("./View/templates/adminHeader.php");?>

<title>Quản lý tin nhắn</title>
<style>
    .content .side-nav a:nth-child(6){
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
</style>
            <div class="col-md-9 right-content">
                <div class="row">
                    <div class="col title">
                        <img class="float-left rounded" src="./View/images/ContentTitle.png" alt="title">
                        <div>
                            <span style="font-size: 1.25rem;">Quản lý tin nhắn</span>
                            <br>Danh sách tin nhắn
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <h4>Danh sách tin nhắn</h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ tên</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Ngày gửi</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Tính năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- begin foreach -->
                                <?php $count = 1;
                                foreach($listMessage as $message){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><?php echo $message['fullName'] ?></td>
                                        <td><?php echo $message['email'] ?></td>
                                        <td><?php echo $message['phoneNumber'] ?></td>
                                        <td><?php echo $message['address'] ?></td>
                                        <td><?php echo date("d-m-Y H:i:s", strtotime($message['sendDate'])) ?></td>
                                        <td>
                                            <a href="./index.php?controller=admin&action=changeState&id=<?php echo $message['id'] ?>" class="btn btn-secondary btn-sm">Đang chờ</a>
                                        </td>
                                        <td>
                                            <a href="./index.php?controller=admin&action=messageDetail&id=<?php echo $message['id'] ?>" class="btn btn-success btn-sm">Xem thêm</a>
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