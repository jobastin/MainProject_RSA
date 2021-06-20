<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == true)
{
$lid=$_SESSION['loginid'];
$Sfor=$_POST['Sfor'];

echo $lid."  ";
echo $Sfor;
$q2="INSERT INTO `tbl_fuel_service`(`Fid`, `Sno`, `status`) VALUES ('$lid','$Sfor',1)";

mysqli_query($con,$q2);
mysqli_close($con);
}
?>

<script>
location.href="manageService.php";
        </script>
