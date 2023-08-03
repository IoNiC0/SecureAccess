<?php
    include 'dbconnect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email = '$email' and password = '".md5($password)."'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_num_rows($result);
    if($row==1)
    {
        session_start();
        $_SESSION['email'] = $email;
        header("Location:admin.php");

    }
    else
    {
        echo '<script>';
		echo 'alert("Invalid Username or Password");';
		echo 'window.location="login.php";';
		echo '</script>';
    }
?>