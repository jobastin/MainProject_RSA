<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == false)
{
header('Location: index.html');
}
else
{

    $lid = $_POST['r_id'];
    $q1=mysqli_query($con,"UPDATE `tbl_mech_services` SET `status`=1 WHERE `Msno`=$lid")or die("Sign in Error res");

}
?>
