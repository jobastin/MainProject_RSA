<?php
require('fun.php');
$con = connect();
$u= $_POST["username"];
$p= md5($_POST["password"]);

$q = mysqli_query($con,"SELECT * FROM `tbl_login` WHERE `email`='$u' AND `password`='$p' AND `status`=0")or die("Sign in Error");
if(mysqli_num_rows($q) > 0)
{
  $row = mysqli_fetch_array($q);
  echo "0"
}

 ?>
