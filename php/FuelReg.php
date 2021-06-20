<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set("Asia/Kolkata");

require('../fun.php');
$con = connect();
session_start();


$FCname=$_POST['FCname'];
$Fphno=$_POST['Fphno'];
$Flicense=$_POST['Flicense'];
$Fadd=$_POST['Fadd'];
$Fpin=$_POST['Fpin'];
$Fstate=$_POST['Fstate'];
$Fdist=$_POST['Fdist'];
$Fowner=$_POST['Fowner'];
$FOphno=$_POST['FOphno'];
$Flat=$_POST['Flat'];
$Flon=$_POST['Flon'];
$Fpassword=$_POST['Fpassword'];
$Fpassword=md5($Fpassword);


$Femail=mb_strtolower($_POST['Femail']);
$Femail=strtolower($Femail);
$_SESSION['email']=$Femail;

$q1="INSERT INTO `tbl_login`(`email`, `password`, `role`, `status`) VALUES ('$Femail','$Fpassword','fuel',0)";
mysqli_query($con,$q1);
$loginid=mysqli_insert_id($con);
$_SESSION['loginid']=$loginid;

$otp=rand(999999, 111111);

$date=date("Y-m-d H:i:s");
$newtimestamp = strtotime($date. ' + 5 minute');
$newdate = date('Y-m-d H:i:s', strtotime('+5 minutes'));
$_SESSION['exp']=$newdate;

?>
<script>
console.log("<?php echo $newdate ?>");
</script>
<?php

$q3="INSERT INTO `tbl_otp`(`login_id`,`otp`,`verification_status`,`created_at`,`end_time`) VALUES ($loginid,$otp,0,'$date','$newdate')";
mysqli_query($con,$q3);
$lid=mysqli_insert_id($con);


$q2="INSERT INTO `tbl_fuel`(`login_id`, `Fcompany`, `Fphno`, `Femail`, `Flicense`, `Fadd`, `Fpin`, `state_id`, `city_id`, `Fowner`, `FOphno`, `Flat`, `Flon`, `Fstatus`)
VALUES ($loginid,'$FCname','$Fphno','$Femail','$Flicense','$Fadd',$Fpin,$Fstate,$Fdist,'$Fowner','$FOphno','$Flat','$Flon',0)";



mysqli_query($con,$q2);



    require '../mail/vendor/autoload.php';
    $message = "<p>Hey,". $FCname  ."<br>Your accout Verification code <b>". $otp ."<b></p>";
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
        $mail->addAddress($Femail);

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "RSA : Account Verification Code";
        $mail->Body    = $message;
        $mail->send();




mysqli_close($con);
?>

<script>
location.href="../otp_verification.php";
        </script>
