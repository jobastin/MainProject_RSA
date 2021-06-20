<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['h_id']))
{
$con = connect();
$lid=$_POST['h_id'];

$q2=mysqli_query($con,"SELECT * FROM `tbl_user` WHERE `login_id`=$lid")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);


?>
    <div>
    <h5><b>Customer Details :</b></h5>
    <br>
        <h6><b>Name :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['name']; ?></h6>
        <h6><b>Phone Number:</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['phone']; ?></h6>
        <h6><b>Email :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['email']; ?></h6>
        <h6><b>Gender :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['gender']; ?></h6>
        <h6><b>Date of Birth :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['dob']; ?></h6>
        <hr>
        <h6><b>Address :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['address']; ?></h6>
        <h6><b>Pin :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['pincode']; ?></h6>

        <?php
             $s=$r1['state_id'];
             $s1=mysqli_query($con,"SELECT * FROM `tbl_states` WHERE `state_id`=$s")or die("Sign in Error q1");
             $row1 = mysqli_fetch_array($s1);
             ?>
        <h6><b>State :</b>&nbsp;&nbsp;&nbsp;<?php echo $row1['Name']; ?></h6>

        <?php
            $d=$r1['city_id'];
            $d1=mysqli_query($con,"SELECT * FROM `tbl_cities` WHERE `city_id`=$d AND `state_id`=$s")or die("Sign in Error q1");
           $row2 = mysqli_fetch_array($d1);
          ?>
        <h6><b>District :</b>&nbsp;&nbsp;&nbsp;<?php echo $row2['Name']; ?></h6>
    </div>
<?php
}
?>
