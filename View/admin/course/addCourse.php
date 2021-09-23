<?php require_once("./View/templates/adminHeader.php");?>

<title>Thêm khóa học</title>
<style>
    .content .side-nav a:nth-child(5){
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
                            <span style="font-size: 1.25rem;">Khóa học</span>
                            <br>Thêm khóa học
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <h4>Thêm khóa học</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="categoryId" class="col-md-2 col-form-label">Danh mục</label>
                                <div class="col-md-10">
                                    <select id="categoryId" class="form-control" name="categoryId">
                                        <option value="null">---Chọn danh mục---</option>
                                        <?php foreach($listCategory as $category){ ?>
                                            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="courseName" class="col-md-2 col-form-label">Tên khóa học</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="courseName" name="courseName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-md-2 col-form-label">Ảnh</label>
                                <div class="col-md-10">
                                    <input type="file" id="image" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-2 col-form-label pt-0">Mô tả</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cost" class="col-md-2 col-form-label">Học phí</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" id="cost" name="cost" value="0">
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" name="btnAddCourse">Thêm</button>
                                <a href="./index.php?controller=admin&action=course" class="btn btn-secondary">Hủy</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>