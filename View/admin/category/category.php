<?php require_once("./View/templates/adminHeader.php");?>

<title>Quản lý danh mục</title>
<style>
    .content .side-nav a:nth-child(4){
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
                            <span style="font-size: 1.25rem;">Danh mục</span>
                            <br>Danh sách danh mục
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <h4>Danh sách danh mục</h4>
                        <a href="./index.php?controller=admin&action=addCategory" class="btn btn-primary btn-sm">Thêm</a>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Tính năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- begin foreach -->
                                <?php $count = 1;
                                foreach($listCategory as $category){ ?>
                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><?php echo $category['name'] ?></td>
                                        <td>
                                            <a href="./index.php?controller=admin&action=editCategory&id=<?php echo $category['id'] ?>" class="btn btn-secondary btn-sm">Chỉnh sửa</a>
                                            <a href="./index.php?controller=admin&action=deleteCategory&id=<?php echo $category['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
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