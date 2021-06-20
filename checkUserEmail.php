<?php
require('fun.php');
$u= $_POST["uemail"];
if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $u))
{
$con = connect();
if(!empty($_POST["uemail"])) {
  $query = mysqli_query($con,"SELECT * FROM `tbl_login` WHERE `email`='".$_POST["uemail"]."' AND `status`=1")or die("Sign in Error email");

 if(mysqli_num_rows($query) > 0){
      echo "<span class='status-not-available1'>Email Alredy Registered</span>";
     ?>
<script>
// document.getElementById("useremail").style.borderColor = "red";
document.getElementById("useremail").style.background ="#FFCECE";
c[7]=0;
button();
</script>
<?php
  }else{
      echo "<span class='status-available1'></span>";
     ?>
<script>
document.getElementById("useremail").style.borderColor ="#eef2f8";
document.getElementById("useremail").style.background ="#eef2f8";
c[7]=1;
button();
</script>
<?php
  }
}
}
else
{
echo "<span class='status-available1'></span>"; ?>
<script>
// document.getElementById("useremail").style.borderColor = "red";
document.getElementById("useremail").style.background ="#FFCECE";
c[7]=0;
button();
</script>
<?php
}
?>
