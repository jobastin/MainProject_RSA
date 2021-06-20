<?php
require('fun.php');
$t= $_POST["tp"];
$con = connect();
if(sessioncheckotp() == true)
{
  $email=$_SESSION['email'];
  $lid=$_SESSION['loginid'];
  if(!empty($_POST["tp"])) {
      $query = mysqli_query($con,"SELECT * FROM `tbl_otp` WHERE `login_id`='".$lid."' AND `otp`='" . $_POST["tp"] . "' AND `verification_status`= 0 AND  NOW() <= DATE_ADD(`created_at`, INTERVAL 4 MINUTE)")or die("Sign in Error");
      if(mysqli_num_rows($query) > 0)
      {
      $q1=mysqli_query($con,"UPDATE `tbl_otp` SET `verification_status`=1 WHERE `login_id`='".$lid."'")or die("Sign in Error");
      $q2=mysqli_query($con,"UPDATE `tbl_login` SET `status`=1 WHERE `login_id`='".$lid."'")or die("Sign in Error");
      $q3=mysqli_query($con,"UPDATE `tbl_user` SET `status`=1 WHERE `login_id`='".$lid."'")or die("Sign in Error");
      $q3=mysqli_query($con,"UPDATE `tbl_mech` SET `Mstatus`=1 WHERE `login_id`='".$lid."'")or die("Sign in Error");
      $q4=mysqli_query($con,"UPDATE `tbl_fuel` SET `Fstatus`=1 WHERE `login_id`='".$lid."'")or die("Sign in Error");
      $q6=mysqli_query($con,"UPDATE `tbl_hospital` SET `Hstatus`=1 WHERE `login_id`='".$lid."'")or die("Sign in Error");
      $q5=mysqli_query($con,"  DELETE FROM `tbl_otp` WHERE `login_id`='".$lid."'")or die("Sign in Error");

      sessiondeleteotp1();
      ?>
        <script>
        document.getElementById("otpinput").style.borderColor = "#eef2f8";
        window.location.href ="login.php";
        </script>
        <?php
      }
      else {
        echo "Enter a Valid OTP"; ?>
        <script>
        document.getElementById("otpinput").style.borderColor = "red";
        </script>
        <?php
      }

  }
  else {
    echo "Enter a Valid OTP"; ?>
    <script>
    document.getElementById("otpinput").style.borderColor = "red";
    </script>
    <?php
  }
  }
  else {
    ?>
    <script>
    window.location.href ="login.php";
    </script>
    <?php
  }
?>
