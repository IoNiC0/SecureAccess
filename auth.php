<?php
    session_start();
    if(!isset($_SESSION['email']))
    {
        echo'<script>';
		echo 'alert("Login Needed To access this page");';
		echo 'window.location="login.php";';
		echo '</script>';
        /*header("location:login.php");
        exit();*/
    }
    else{
        $email = $_SESSION['email'];
    }
?>