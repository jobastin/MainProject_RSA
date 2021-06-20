<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require('../fun.php');

$con = connect();

//if(isset($_POST['mailsend']))
//{
//

$lid=$_POST['e_id'];

$q2=mysqli_query($con,"SELECT * FROM `tbl_login` WHERE `login_id`=$lid")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);
$email=$r1['email'];


$sub=$_POST['sub'];
$body=$_POST['body'];

require '../mail/vendor/autoload.php';
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
    $mail->Subject = $sub;
    $mail->Body    = $body;
    $mail->send();
?>

<script>
    location.href="..\admin\Mechview.php";

        </script>
