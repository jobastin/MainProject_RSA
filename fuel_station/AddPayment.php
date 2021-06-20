<?php
require('../fun.php');
if(sessioncheck() == true)
{
$con = connect();
$fid=$_SESSION['loginid'];
$lid=$_POST['b_id'];
$bdesc=$_POST['bdesc'];
$amount=$_POST['amount'];
$q2=mysqli_query($con,"SELECT * FROM `tbl_fuel_service_request` WHERE `req_id`=$lid")or die("Sign in Error q1");
$s5 = mysqli_fetch_array($q2);
$userid=$s5['user_id'];

$q2=mysqli_query($con,"UPDATE `tbl_fuel_service_request` SET `req_status`=0,`comment`='Bill Generated',`status`=0 WHERE `req_id`=$lid")or die("Sign in Error q1");


$q3="INSERT INTO `tbl_payment`(`login_id`, `reciever_id`, `req_id`,`description`, `amount`, `status`)
VALUES ('$userid','$fid','$lid','$bdesc','$amount',0)";
mysqli_query($con,$q3);
}
?>
<script>
location.href="../fuel_station/ViewServiceRequest.php";
        </script>
