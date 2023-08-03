<?php

include 'auth.php';
require 'dbconnect.php';


function verifyOTP($email, $otp) {
    global $connect;

    $sql = "SELECT * FROM users WHERE email = ? AND otp = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ss", $email, $otp);

    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    return $user !== null;
}


if (isset($_SESSION['email']) && isset($_POST['otpv'])) {
    $email = $_SESSION['email'];
    $submitted_otp = $_POST['otpv'];

    if (verifyOTP($email, $submitted_otp)) {
        
        echo '<script>';
		echo 'alert("OTP Verified Succesfully");';
		echo 'window.location="login.php";';
		echo '</script>';
        
    } else {
        
        echo '<script>';
		echo 'alert("Invalid OTP");';
		echo 'window.location="index.php";';
		echo '</script>';
    }
}
?>
