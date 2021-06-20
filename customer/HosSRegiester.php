<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == true)
{
$fid=$_POST['rid'];
$lid=$_SESSION['loginid']; //customer login ID

$lat=$_POST['myLat'];
$log=$_POST['myLong'];


$q=mysqli_query($con,"INSERT INTO `tbl_hos_service_request`(`lat`, `log`, `Hid`, `user_id`, `req_status`, `comment`, `status`)
VALUES ($lat,$log,$fid,$lid,1,'Service Requested',1)")or die("Sign in Error q1");


}
else
{
echo "Some Error Occoured.. Try again !!";
}
?>
