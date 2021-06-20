<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == true)
{
$fid=$_POST['rid'];
$lid=$_SESSION['loginid']; //customer login ID

$lat=$_POST['myLat'];
$log=$_POST['myLong'];
$Sno=$_POST['Pplace']; //service name
$desc=$_POST['Mstate'];

$q=mysqli_query($con,"INSERT INTO `tbl_fuel_service_request`(`Sno`, `description`, `lat`, `log`, `Fid`, `user_id`,`req_status`,`status`)
VALUES ($Sno,'$desc',$lat,$log,$fid,$lid,1,1)")or die("Sign in Error q1");
}
else
{
echo "Some Error Occoured.. Try again !!";
}
?>
