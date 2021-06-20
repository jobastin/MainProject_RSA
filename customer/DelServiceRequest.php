<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == false)
{
header('Location: index.html');
}
else
{

    $rid = $_POST['d_id'];
    $q2=mysqli_query($con,"UPDATE `tbl_fuel_service_request` SET `req_status`=0,`comment`='Request Deleted',`status`=0 WHERE `req_id`=$rid")or die("Sign in Error q1");

}
?>
