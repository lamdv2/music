<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="main">
        <div class="content">
            <h2 class="heading center">Đăng nhập vào Zing Mp3</h2>
            <p class="heading-sub center">Cùng nhau tận hưởng âm nhạc
                <i class="fa fa-heartbeat"></i>
            </p>
            <form action="login_submit.php" method="POST" class="input">
                <div class="row">
                    <p>Tên đăng nhập</p>
                    <input type="text" name="username" required placeholder="VD: Dream Team">
                </div>
                <div class="row">
                    <p>Mật khẩu</p>
                    <input type="password" name="password" required placeholder="Nhập mật khẩu">
                </div>
                <div class="row">
                    <input type="submit" name="submit" value="Đăng nhập" class="bton">
                </div>
            </form>
        </div>
    </div>
</body>
</html>