<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url("./View/images/backgroundLogin.jpg");
            background-size: 100%;
        }
        .login-form{
            padding: 8% 30% 16%;
        }
        .login-form .col{
            background-color: rgba(121, 208, 219, 0.9);
        }
        .login-form .col{
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px;
            padding: 30px;
        }
        .login-form h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row login-form">
            <div class="col">
                <h3>Đăng Nhập</h3>
                <form action="" method="POST">
                    <div class="form-group">
                      <label for="userName">Tài khoản:</label>
                      <input type="text" class="form-control" placeholder="Nhập tài khoản" id="userName" name="userName">
                    </div>
                    <div class="form-group">
                      <label for="pass">Mật khẩu:</label>
                      <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="pass" name="pass">
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                      </label>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" name="btnLogin">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>