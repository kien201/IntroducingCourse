<?php require_once("./View/templates/adminHeader.php");?>

<title>Sửa khóa học</title>
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
                            <br>Sửa khóa học
                        </div>
                    </div>
                </div>
                <div class="row gray">
                    <div class="col white">
                        <h4>Sửa khóa học</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <?php if(isset($listUser)){ ?>
                                <div class="form-group row">
                                    <label for="userId" class="col-md-2 col-form-label">Chủ sở hữu</label>
                                    <div class="col-md-10">
                                        <select id="userId" class="form-control" name="userId">
                                            <option value="null">---Chọn người sở hữu---</option>
                                            <?php foreach($listUser as $user){ ?>
                                                <option value="<?php echo $user['id'] ?>" <?php if($course['user_id']==$user['id']) echo "selected" ?>><?php echo $user['fullName'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="form-group row">
                                <label for="categoryId" class="col-md-2 col-form-label">Danh mục</label>
                                <div class="col-md-10">
                                    <select id="categoryId" class="form-control" name="categoryId">
                                        <option value="null">---Chọn danh mục---</option>
                                        <?php foreach($listCategory as $category){ ?>
                                            <option value="<?php echo $category['id'] ?>" <?php if($course['category_id']==$category['id']) echo "selected" ?>><?php echo $category['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="courseName" class="col-md-2 col-form-label">Tên khóa học</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="courseName" name="courseName" value="<?php echo $course['name'] ?>">
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
                                    <textarea class="form-control" name="description" id="description" rows="3"><?php echo $course['description'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cost" class="col-md-2 col-form-label">Học phí</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" id="cost" name="cost" value="<?php echo $course['cost'] ?>">
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" name="btnEditCourse">Sửa</button>
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