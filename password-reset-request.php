<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set("Asia/Kolkata");

require('fun.php');
$con = connect();

?>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Forgot Password</title>
        <link rel="shortcut icon" href="image/favicon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="msapplication-TileColor" content="#dd3d31">
        <meta name="theme-color" content="#dd3d31">

    <link id="sb-website-styles-css" rel="stylesheet" href="css/styles.css">
    <link id="sb-website-dynamic-css" rel="stylesheet" href="css/styles-admin.css">
    <link rel="canonical" href="password-reset-request.html">
    <style>
    #pageloader
    {
    background: rgba( 255, 255, 255, 0.8 );
    display: none;
    height: 100%;
    position: fixed;
    width: 100%;
    z-index: 9999;
    }

    #pageloader img
    {
    left: 50%;
    margin-left: -32px;
    margin-top: -32px;
    position: absolute;
    top: 50%;
    }
    </style>
    <style ng-transition="serverApp">[_nghost-sc110]{position:fixed;bottom:0;right:0;margin:.5em;z-index:1200;width:350px}</style>
    <style ng-transition="serverApp">
        #overlay[_ngcontent-sc112]{display:flex;justify-content:center;position:fixed;top:0;left:0;width:100vw;height:100%;min-height:100vh;z-index:1090;background-color:rgba(0,0,0,.5)}</style><style ng-transition="serverApp">[_nghost-sc132]{display:contents}
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </head>
    <body>

      <div id="pageloader">
         <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
      </div>

        <div _ngcontent-sc159="" id="layoutAuthentication" class="bg-primary">
        <div _ngcontent-sc159="" id="layoutAuthentication_content">
        <main _ngcontent-sc159="">
        <div _ngcontent-sc205="" class="container">
        <div _ngcontent-sc205="" class="row justify-content-center">
        <div _ngcontent-sc132="" class="col-xl-10 col-lg-12">
        <div _ngcontent-sc132="" class="card border my-5">
        <div _ngcontent-sc205="" class="card-body p-5 text-center">
        <a href="#">
        <img _ngcontent-sc205="" src="image/favicon.png" style="height: 7rem; width: 7rem;"></a>
        <div _ngcontent-sc205="" class="row justify-content-center">
        <div _ngcontent-sc205="" class="col-xl-8 col-lg-9">
        <h1 _ngcontent-sc194="">Roadside Assistance</h1>
        <hr>
        <h2 _ngcontent-sc205="">Reset Your Password</h2>
        <p _ngcontent-sc205="" class="mb-0">Enter your email address below and we'll send you a link to reset your password.</p>
        </div>
        </div>
        </div>
        <hr _ngcontent-sc205="" class="my-0">
        <div _ngcontent-sc205="" class="card-body p-5">
        <div _ngcontent-sc205="" class="row justify-content-center">
        <div _ngcontent-sc205="" class="col-xl-8 col-lg-9">


          <?php
                      if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
                          $email = $_POST["email"];
                          $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                          $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                          if (!$email) {
                              $error .="<div id='error' style='background-color: #e39d9f;'><center>Invalid email address</center></div>";
                          } else {
                              $sel_query = "SELECT * FROM `tbl_login` WHERE `email`='" . $email . "' AND `status`=1";
                              $results = mysqli_query($con, $sel_query);
                              $row = mysqli_num_rows($results);
                              if ($row == "") {
                                  $error .= "<div id='error' style='background-color: #e39d9f;'><center>User Not Found</center></div>";
                              }
                          }
                          if ($error != "") {
                              echo $error;
                          } else {

                              require 'mail/vendor/autoload.php';
                              $mail = new PHPMailer(true);

                              $output = '';

                              $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                              $expDate = date("Y-m-d H:i:s", $expFormat);
                              $key = md5(time());
                              $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
                              $key = $key . $addKey;
                              // Insert Temp Table
                              mysqli_query($con, "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");


                              $output.='<p>Please click on the following link to reset your password.</p>';
                              //replace the site url
                              $output.='<p><a href="http://localhost/rsa/reset_password.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">Reset Password</a></p>';
                              $body = $output;
                              $subject = "Password Recovery";
                              $mail = new PHPMailer(true);

                              $email_to = $email;

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


                                  // Content
                                  $mail->isHTML(true);                                  // Set email format to HTML
                                  $mail->Subject = $subject;
                                  $mail->Body = $body;
                                  $mail->addAddress($email_to);
                                  if (!$mail->Send()) {
                                      echo "Mailer Error: " . $mail->ErrorInfo;
                                  } else {
                                      echo "<div id='error' style='background-color: #9de39d;'><center>An email has been sent</center></div>";
                                  }
                              }
                              }
                              ?>

        <form _ngcontent-sc205="" method="post" action="" id="form1"  name="reset"  class="ng-untouched ng-pristine ng-invalid">
        <div _ngcontent-sc205="" class="form-group">
        <label _ngcontent-sc205="" for="email" class="text-gray-600 small">Email address</label>
        <input _ngcontent-sc205="" id="email" name="email"  type="email" placeholder="username@email.com" class="form-control form-control-solid ng-untouched ng-pristine ng-invalid">
        <div _ngcontent-sc205="" class="invalid-feedback">Email required.</div>
        </div>
        <div _ngcontent-sc205="" class="text-right">
        <!-- <button _ngcontent-sc205="" data-cy="requestPasswordResetButton" type="submit" class="btn btn-primary">Send Password Reset Link</button> -->
        <input type="submit" id="reset" value="Reset Password"  class="btn btn-primary"/>
        </div>
        </form>


        </div>
        </div>
        </div>
        <hr _ngcontent-sc205="" class="my-0">
        <div _ngcontent-sc205="" class="card-body px-5 py-4">
        <div _ngcontent-sc205="" class="small text-center">New user?
        <a _ngcontent-sc205="" href="register.php">Create an account!</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </main>
        </div>
        </div>
        <script>
        // loader on submitting form
          $(document).ready(function(){
            $("#form1").on("submit", function(){
              $("#pageloader").fadeIn();
              setTimeout(function(){
                alert("An email has been sent")
                 window.location.href="login.php";
              }, 3000)
            });
          });
        </script>
</body>
</html>
