<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set("Asia/Kolkata");

require('../fun.php');
$con = connect();
session_start();


$Mname=$_POST['Mname'];
$Mphno=$_POST['Mphno'];
$Mlicense=$_POST['Mlicense'];
$Mtwo=isset($_POST['Mtwo']) && $_POST['Mtwo']  ? "1" : "0";
$Mfour=isset($_POST['Mfour']) && $_POST['Mfour']  ? "1" : "0";
$Mheavy=isset($_POST['Mheavy']) && $_POST['Mheavy']  ? "1" : "0";
$Maddress=$_POST['Maddress'];
$Mpin=$_POST['Mpin'];
$Mstate=$_POST['Mstate'];
$Mdist=$_POST['Mdist'];
$Mowner=$_POST['Mowner'];
$MOphno=$_POST['MOphno'];
$Mlat=$_POST['Mlat'];
$Mlon=$_POST['Mlon'];
$Mpassword=$_POST['Mpassword'];
$Mpassword=md5($Mpassword);


$Memail=mb_strtolower($_POST['Memail']);
$Memail=strtolower($Memail);
$_SESSION['email']=$Memail;

$q1="INSERT INTO `tbl_login`(`email`, `password`, `role`, `status`) VALUES ('$Memail','$Mpassword','mech',0)";
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


$q2="INSERT INTO `tbl_mech`(`login_id`, `Mname`, `Mphno`, `Memail`, `Mlicense`, `Mtwo`, `Mfour`, `Mheavy`, `Madd`, `Mpin`,`state_id`,`city_id`, `Mowner`, `MOphno`, `Mlat`, `Mlong`, `Mstatus`)
VALUES ($loginid,'$Mname','$Mphno','$Memail','$Mlicense','$Mtwo','$Mfour','$Mheavy','$Maddress','$Mpin','$Mstate','$Mdist','$Mowner','$MOphno','$Mlat','$Mlon',0)";



mysqli_query($con,$q2);


    require '../mail/vendor/autoload.php';
    $message = "<p>Hey,". $Mname  ."<br>Your accout Verification code <b>". $otp ."<b></p>";
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
        $mail->addAddress($Memail);

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

