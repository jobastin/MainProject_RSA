<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == false)
{
header('Location: index.html');
}
else
{
    $lid = $_POST['id'];
    $lat= $_POST['latP'];
    $long= $_POST['longP'];


    $q1=mysqli_query($con,"UPDATE `tbl_police` SET `Plat`='$lat',`Plon`='$long' WHERE `Pid`=$lid")or die("Sign in Error res");

}
?>
