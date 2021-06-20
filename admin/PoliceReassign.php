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
    $q4=mysqli_query($con,"UPDATE `tbl_police` SET `Pstatus`=1 WHERE `Pid`=$lid")or die("Sign in Error res");

}
?>
