<?php
    include 'config.php';
    if( isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $level = 0;

        if($password!=$repassword){
            echo "<script language='javascript'>alert('Sai password xác nhận');";
            echo " location.href='index.php';</script>";
            die();
        }

        $sql = "select * from signin where username='$username' ";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);

        if(mysqli_num_rows($old) > 0){
            echo "<script language='javascript'>alert('Tên người dùng đã tồn tại!');";
            echo " location.href='index.php';</script>";
            die();
        }

        $sql = "insert into signin (username, email, password, level) values('$username', '$email', '$password','$level')";
        mysqli_query($conn, $sql);
        echo "<script language='javascript'>alert('Đã đăng ký thành công!');";
        echo " location.href='index.php';</script>";
    }
    
?>