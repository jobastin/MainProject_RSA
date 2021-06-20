<?php

require('../fun.php');
$con = connect();
session_start();


$Vregno=$_POST['Vregno'];
$Vtype=$_POST['Vtype'];
$Vcompany=$_POST['Vcompany'];
$Vmodel=$_POST['Vmodel'];



$lid=$_SESSION['loginid'];

$q1=mysqli_query($con,"SELECT * FROM `tbl_user` WHERE `login_id`=$lid")or die("Sign in Error res");
$r1 = mysqli_fetch_array($q1);
$uid=$r1['user_id'];


$q2="INSERT INTO `tbl_vehicle`(`user_id`, `Vregno`, `Vtype`, `Vcompany`, `Vmodel`, `Vstatus`)
VALUES ($uid,'$Vregno','$Vtype','$Vcompany','$Vmodel',1)";
mysqli_query($con,$q2);

mysqli_close($con);
?>

<script>
location.href="index.php";
        </script>
