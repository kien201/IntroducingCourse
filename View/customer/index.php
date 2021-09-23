<?php require_once("./View/templates/customerHeader.php") ?>

<title>Trang chủ</title>
<style>
    .top-nav ul li:nth-child(4) a{
        color: #1865f2;
    }
    .banner{
        padding: 20px 10%;
    }
    .banner .banner-title{
        margin-top: 160px;
        text-align: center;
    }
    .banner .banner-title p{
        margin: 30px auto;
    }
    .btn{
        background-color: rgb(44, 49, 207);
        font-weight: 600;
        color: #FFF;
        padding: 8px 15px;
        border-radius: 3px;
        transition: all 300ms;
        margin: 5px;
    }
    .btn:hover{
        background-color: rgb(77, 150, 255);
        color: #FFF;
    }
    .section-gray{
        background-color: #eff1f1;
        padding: 20px 10%;
        text-align: center;
    }
    .section-gray h1{
        padding: 20px;
    }
    .section-white{
        padding: 30px 10%;
        text-align: center;
    }
    .section-white h1{
        padding: 20px;
    }
    .course a{
        color: #1e266d;
        text-decoration: none;
    }
    .course a:hover h4{
        color: rgb(44, 49, 207);
    }
    .course a:hover img{
        transform: scale(1.03);
    }
    .course img{
        height: 150px;
        border-radius: 10px;
        transition: all 300ms;
        box-shadow: 0 0 20px 0 rgb(29 31 89 / 20%);
    }
    .course h4{
        margin-top: 10px;
    }
    .reason{
        padding: 30px 0;
    }
    .reason img{
        height: 60px;
    }
    .reason .row h1{
        color: red;
    }
    .contact-form .item-form{
        margin: 5px 0;
    }
</style>
<!-- content -->
<div class="row banner">
    <div class="col">
        <div class="row"><img src="./View/images/Banner.png" alt="Banner"></div>
    </div>
    <div class="col banner-title">
        <h1>Học lập trình để đi làm</h1>
        <p>Cùng tạo nhiều giá trị hơn cho xã hội</p>
        <a href="#" class="btn">Khóa học</a>
        <a href="#" class="btn">Tham gia ngay</a>
    </div>
</div>
<div class="row section-gray">
    <div class="col">
        <h1>Về chúng tôi</h1>
        <p>Kedu được xây dựng bởi đội ngũ chuyên gia, với hệ thống bài giảng và bài tập thực hành phong phú. Học viên có thể học từ con số 0 tới khi trở thành lập trình viên chuyên nghiệp tại đây.</p>
    </div>
</div>
<div class="row section-white">
    <div class="col">
        <h1>Khóa học nổi bật</h1>
        <div class="row course">
            <!-- take course from database -->
            <?php foreach($listCourse as $course){ ?>
                <div class="col">
                    <a href="#">
                        <center><img src="./View/images/<?php echo $course['image'] ?>" alt="Course"></center>
                        <h4><?php echo $course['name'] ?></h4>
                        <div><?php echo $course['fullName'] ?></div>
                        <p><?php echo substr($course['description'], 0, 50)."..." ?></p>
                    </a>
                </div>
            <?php } ?>
            <!-- end foreach -->
        </div>
        <a href="#" class="btn">Xem thêm</a>
    </div>
</div>
<div class="row section-gray">
    <div class="col reason">
        <h1>Điều gì làm chúng tôi khác biệt</h1>
        <div class="row">
            <div class="col">
                <img src="./View/images/DoanhNghiep.png" alt="Doanh Nghiep">
                <h1>50+</h1>
                <h4>Đối tác là các doanh nghiệp CNTT lớn</h4>
            </div>
            <div class="col">
                <img src="./View/images/Student.png" alt="Student">
                <h1>600+</h1>
                <h4>Học viên đã tốt nghiệp</h4>
            </div>
            <div class="col">
                <img src="./View/images/GioiThieu.png" alt="Gioi Thieu">
                <h1>100%</h1>
                <h4>Học viên được giới thiệu thực tập và việc làm</h3>
            </div>
            <div class="col">
                <img src="./View/images/KinhNghiem.png" alt="Kinh Nghiem">
                <h1>100%</h1>
                <h4>Giảng viên có kinh nghiệm và tay nghề cao</h3>
            </div>
        </div>
    </div>
</div>
<div class="row section-white">
    <div class="col">
        <div class="row">
            <div class="col">
                <h1>Liên hệ</h1>
                <p>Nếu bạn đang quan tâm đến chúng tôi, vui lòng để lại thông tin dưới đây để nhận được sự chăm sóc tốt nhất, trong 5 phút chúng tôi sẽ liên lạc ngay để được phục vụ bạn (Mọi thông tin Quý khách sẽ được bảo mật)</p>
            </div>
        </div>
        <div class="row contact-form">
            <div class="col">
                <form action="" method="POST">
                    <div class="form-row">
                        <div class="col-md-6 item-form">
                            <input class="form-control" placeholder="Họ tên" type="text" name="name" id="name">
                        </div>
                        <div class="col-md-6 item-form">
                            <input class="form-control" placeholder="Email" type="text" name="email" id="email">
                        </div>
                        <div class="col-md-6 item-form">
                            <input class="form-control" placeholder="Số điện thoại" type="text" name="phone" id="phone">
                        </div>
                        <div class="col-md-6 item-form">
                            <input class="form-control" placeholder="Địa chỉ" type="text" name="address" id="address">
                        </div>
                        <div class="col-md-12 item-form">
                            <textarea class="form-control" name="content" id="content" cols="30" rows="4" placeholder="Nội dung"></textarea>
                        </div>
                        <input type="hidden" name="state" value="0">
                    </div>
                    <button type="submit" class="btn" name="btnSendMessage">Gửi đi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once("./View/templates/customerFooter.php") ?>