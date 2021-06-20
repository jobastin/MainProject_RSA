<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set("Asia/Kolkata");

require('../fun.php');
$con = connect();
session_start();


$Hname=$_POST['Hname'];
$Hphno=$_POST['Hphno'];
$Hadd=$_POST['Hadd'];
$Hpin=$_POST['Hpin'];
$Hstate=$_POST['Hstate'];
$Hdist=$_POST['Hdist'];
$Hlat=$_POST['Hlat'];
$Hlon=$_POST['Hlon'];
$Hpassword=$_POST['Hpassword'];
$Hpassword=md5($Hpassword);



$Hemail=mb_strtolower($_POST['Hemail']);
$Hemail=strtolower($Hemail);
$_SESSION['email']=$Hemail;

$q1="INSERT INTO `tbl_login`(`email`, `password`, `role`, `status`) VALUES ('$Hemail','$Hpassword','hos',0)";
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


$q2="INSERT INTO `tbl_hospital`(`login_id`, `Hname`, `Hphno`, `Hemail`, `Hadd`, `Hpin`, `state_id`, `city_id`, `Hlat`, `Hlon`, `Hstatus`)
VALUES ($loginid,'$Hname','$Hphno','$Hemail','$Hadd','$Hpin','$Hstate','$Hdist','$Hlat','$Hlon',0)";



mysqli_query($con,$q2);


    require '../mail/vendor/autoload.php';
    $message = "<p>Hey,". $Hname  ."<br>Your accout Verification code <b>". $otp ."<b></p>";
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
        $mail->addAddress($Hemail);

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
