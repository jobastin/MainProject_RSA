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
    $q1=mysqli_query($con,"UPDATE `tbl_services` SET `status`=0 WHERE `Sno`=$lid")or die("Sign in Error res");


}
?>
