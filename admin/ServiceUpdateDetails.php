<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == true or isset($_POST['p_id']))
{
$pid=$_POST['p_id'];
$lid=$_SESSION['loginid'];

$Pplace=$_POST['Pplace'];
$Mstate=$_POST['Mstate'];

$q=mysqli_query($con,"UPDATE `tbl_services` SET `Sname`='$Pplace',`Sfor`='$Mstate' WHERE `Sno`=$pid")or die("Sign in Error q1");

}
else
{
echo "Some Error Occoured.. Try again !!";
}
?>
