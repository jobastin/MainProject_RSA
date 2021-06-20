<?php
require('../fun.php');
$con = connect();
if(sessioncheck() == true)
{
$lid=$_SESSION['loginid'];
$Sfor=$_POST['Sfor'];
$Stype=$_POST['Stype'];



$s3=mysqli_query($con,"SELECT * FROM `tbl_mech_services` WHERE `MType`='$Stype' AND `Sno`='$Sfor' and `Mid`='$lid'")or die("Sign in Error");
if(mysqli_num_rows($s3)>0)
{
  ?>
  <script>
  alert("Service Category alredy Exist");
  location.href="manageService.php";
  </script>
  <?php
}
else
{
$q2="INSERT INTO `tbl_mech_services`(`Mid`, `MType`, `Sno`, `status`) VALUES ('$lid','$Stype','$Sfor',1)";



mysqli_query($con,$q2);
mysqli_close($con);

?>

<script>
location.href="manageService.php";
        </script>
<?php
}
}
?>
