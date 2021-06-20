<?php
require('fun.php');
$con = connect();
session_start();
$u= $_POST["username"];
$p= md5($_POST["password"]);

$q = mysqli_query($con,"SELECT * FROM `tbl_login` WHERE `email`='$u' AND `password`='$p' AND `status`=1")or die("Sign in Error");
if(mysqli_num_rows($q) > 0)
{
  $row = mysqli_fetch_array($q);
  $lid=$row['login_id'];
  $role=$row['role'];

  if ($row['role'] == 'admin' and $row['status'] == 1){
            $_SESSION['loginid'] = $row['login_id'];
            $_SESSION['r'] = $row['role'];
            echo "1";
        }
         else if($row['role'] == 'cust' and $row['status'] == 1)
         {
            $_SESSION['loginid'] = $row['login_id'];
            $_SESSION['r'] = $row['role'];
            echo "2";
            // header('Location: customer/');
         }
         else if($row['role'] == 'mech' and $row['status'] == 1)
         {
            $_SESSION['loginid'] = $row['login_id'];
            $_SESSION['r'] = $row['role'];
            echo "3";
         }
         else if($row['role'] == 'fuel' and $row['status'] == 1)
         {
            $_SESSION['loginid'] = $row['login_id'];
            $_SESSION['r'] = $row['role'];
            echo "4";
         }
         else if($row['role'] == 'hos' and $row['status'] == 1)
         {
            $_SESSION['loginid'] = $row['login_id'];
            $_SESSION['r'] = $row['role'];
            echo "5";
         }
        else
        {
        header("Location: loginMain.php");
        }


}

 ?>
