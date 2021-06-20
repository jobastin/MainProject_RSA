<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set("Asia/Kolkata");

require('fun.php');
$remail= $_POST["re"];
$rid= $_POST["rl"];
$con = connect();
if(sessioncheckotp() == true)
{
  $email=$_SESSION['email'];
  $lid=$_SESSION['loginid'];


  $otp=rand(999999, 111111);
  $date=date("Y-m-d H:i:s");
  $newtimestamp = strtotime($date. ' + 5 minute');
  $newdate = date('Y-m-d H:i:s', strtotime('+5 minutes'));
  $_SESSION['exp']=$newdate;


  if(!empty($_POST["re"])) {
      $query = mysqli_query($con,"UPDATE `tbl_otp` SET `otp`=$otp,`created_at`='$date',`end_time`='$newdate' WHERE `login_id`=$lid")or die("Sign in Error");


      require 'mail/vendor/autoload.php';
      $message = "<p>Hey,<br>Your accout Verification code <b>". $otp ."<b></p>";
      $mail = new PHPMailer(true);


          //Server settings
          $mail->SMTPDebug = 0;                                       // Enable verbose debug output
          $mail->isSMTP();                                            // Set mailer to use SMTP
          $mail->Host       = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'rsaproject02@gmail.com';                     // SMTP username
          $mail->Password   = 'Road@123';                               // SMTP password
          $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to

          $mail->setFrom('rsaproject02@gmail.com', 'Roadside Assistance');
          //Recipients
          $mail->addAddress($email);

          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = "RSA : Account Verification Code";
          $mail->Body    = $message;
          $mail->send();

      ?>
        <script>
        document.getElementById("otpinput").style.borderColor = "#eef2f8";
        window.location.href ="otp_verification.php";
        </script>
        <?php
      }
  }
?>
