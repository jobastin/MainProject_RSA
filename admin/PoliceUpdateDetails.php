<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == true or isset($_POST['p_id']))
{
$pid=$_POST['p_id'];
$lid=$_SESSION['loginid'];

$Pplace=$_POST['Pplace'];
$Padd=$_POST['Padd'];
$Mstate=$_POST['Mstate'];
$Mdist=$_POST['Mdist'];
$Ppin=$_POST['Ppin'];
$Pphno=$_POST['Pphno'];
$q=mysqli_query($con,"UPDATE `tbl_police` SET `Pplace`='$Pplace' ,`Padd`='$Padd' ,`state_id`=$Mstate,`city_id`=$Mdist,`Ppin`=$Ppin,`Pphno`='$Pphno' WHERE `Pid`=$pid")or die("Sign in Error q1");
}
else
{
echo "Some Error Occoured.. Try again !!";
}
?>
