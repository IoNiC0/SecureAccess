<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = md5($_POST["password"]);
    // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $_SESSION['email'] = $email;
    $otp = generateOTP();
    $otp_expiration = date('Y-m-d H:i:s', strtotime('+5 minutes'));

    $sql = "INSERT INTO users (first_name, middle_name, last_name, email, phone_number, password, otp, otp_expiration) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssssssss", $first_name, $middle_name, $last_name, $email, $phone_number, $password, $otp, $otp_expiration);

    if ($stmt->execute()) {
        $mail = new PHPMailer(true); 

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465; 
    $mail->SMTPSecure = 'ssl'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email_id@gmail.com';
    $mail->Password = 'your_password';

    $mail->setFrom('your_email_id@gmail.com', 'your_username');
    $mail->addAddress($email);
    $mail->Subject = 'OTP Verification';
    $mail->Body = 'Your OTP is: ' . $otp;

    $mail->send();
    echo '<script>';
        echo 'alert("OTP has been sent to your mail address");';
        echo 'window.location="otpverify.php";';
        echo '</script>';
        // $_SESSION['email'] = $email;
} catch (Exception $e) {
    echo "Error sending email: " . $mail->ErrorInfo;
}
    // $_SESSION['email'] = $email;
    $stmt->close();
    $connect->close();
}}

function generateOTP()
{
    return str_pad(mt_rand(100000, 999999), 6, '0', STR_PAD_LEFT);
}




?>