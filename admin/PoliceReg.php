<?php

require('../fun.php');
$con = connect();



$Pplace=$_POST['Pplace'];
$Padd=$_POST['Padd'];
$Pstate=$_POST['Mstate'];
$Pdist=$_POST['Mdist'];
$Ppin=$_POST['Ppin'];
$Pphno=$_POST['Pphno'];
$Plat=$_POST['Mlat'];
$Plon=$_POST['Mlon'];







$q2="INSERT INTO `tbl_police`(`Pplace`, `Padd`, `state_id`, `city_id`, `Ppin`, `Pphno`, `Plat`, `Plon`, `Pstatus`)
VALUES ('$Pplace','$Padd',$Pstate,$Pdist,$Ppin,'$Pphno',$Plat,$Plon,1)";
mysqli_query($con,$q2);

mysqli_close($con);
?>

<script>
location.href="AddPolice.php";
        </script>
