<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set("Asia/Kolkata");

require('../fun.php');
$con = connect();
session_start();


$uname=$_POST['username'];
$umob=$_POST['phno'];
$ugender=$_POST['gender'];
$udob=$_POST['dob'];
$uadd=$_POST['add'];
$upin=$_POST['pin'];
$upass=$_POST['pass'];
$upass=md5($upass);

$ustate=$_POST['Mstate'];
$udist=$_POST['Mdist'];

$uemail=mb_strtolower($_POST['useremail']);

$uemail=strtolower($uemail);
$_SESSION['email']=$uemail;

$q1="INSERT INTO `tbl_login`(`email`, `password`, `role`, `status`) VALUES ('$uemail','$upass','cust',0)";
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


$q2="INSERT INTO `tbl_user`(`login_id`, `name`, `email`, `phone`, `gender`, `dob`, `address`, `pincode`, `state_id`, `city_id`, `status`) VALUES
($loginid,'$uname','$uemail','$umob','$ugender','$udob','$uadd',$upin,$ustate,$udist,0)";
mysqli_query($con,$q2);


    require '../mail/vendor/autoload.php';
    $message = "<p>Hey,". $uname  ."<br>Your accout Verification code <b>". $otp ."<b></p>";
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
        $mail->addAddress($uemail);

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
