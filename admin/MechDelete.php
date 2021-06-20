<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == false)
{
header('Location: index.html');
}
else
{

    $lid = $_POST['d_id'];
    $q1=mysqli_query($con,"UPDATE `tbl_login` SET `status`=0 WHERE `login_id`=$lid")or die("Sign in Error res");

    $q4=mysqli_query($con,"UPDATE `tbl_mech` SET `Mstatus`=0 WHERE `login_id`=$lid")or die("Sign in Error res");

}
?>
