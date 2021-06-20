<?php
require('../fun.php');
if(sessioncheck() == true)
{
$con = connect();
$lid=$_POST['h_id'];
$sub=$_POST['sub'];

$q2=mysqli_query($con,"UPDATE `tbl_fuel_service_request` SET `req_status`=0,`comment`='$sub',`status`=0 WHERE `req_id`=$lid")or die("Sign in Error q1");

}
?>
