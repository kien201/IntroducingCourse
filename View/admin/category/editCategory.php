<?php require_once("./View/templates/adminHeader.php");?>

<title>Sửa danh mục</title>
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
                            <span style="font-size: 1.25rem;">Danh mục</span>
                            <br>Sửa danh mục
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <h4>Sửa danh mục</h4>
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="categoryName" class="col-md-2 col-form-label">Tên danh mục</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="categoryName" name="categoryName" value="<?php echo $cur_category['name'] ?>">
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" name="btnEditCategory">Sửa</button>
                                <a href="./index.php?controller=admin&action=category" class="btn btn-secondary">Hủy</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>