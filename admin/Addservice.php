<?php

require('../fun.php');
$con = connect();



$Sfor=$_POST['Sfor'];
$Sname=$_POST['Sname'];


$q2="INSERT INTO `tbl_services`(`Sname`, `Sfor`, `status`) VALUES ('$Sname','$Sfor',1)";
mysqli_query($con,$q2);
mysqli_close($con);

?>

<script>
location.href="AddServices.php";
        </script>
