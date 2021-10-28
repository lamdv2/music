<?php
    include 'config.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $password = md5($password);

        $sql = "select * from signin where username='$username' and password = '$password'";
        $user = mysqli_query($conn, $sql);

        if(mysqli_num_rows($user) > 0){
            header("location:index.php");
        }
        else{
            echo "<script language='javascript'>alert('Bạn đã nhập sai username or password');";
            echo " location.href='index.php';</script>"; 
        }
    }
?>