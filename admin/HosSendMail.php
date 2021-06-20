<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['e_id']))
{
$con = connect();
$lid=$_POST['e_id'];

$q2=mysqli_query($con,"SELECT * FROM `tbl_login` WHERE `login_id`=$lid AND `role`='hos'")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);
echo $r1['email'];
}
?>
