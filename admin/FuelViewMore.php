<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['h_id']))
{
$con = connect();
$lid=$_POST['h_id'];

$q2=mysqli_query($con,"SELECT * FROM `tbl_fuel` WHERE `login_id`=$lid")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);


?>
    <div>
    <h5><b>Fuel Station Details :</b></h5>
    <br>
        <h6><b>Company :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Fcompany']; ?></h6>
        <h6><b>Phone Number:</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Fphno']; ?></h6>
        <h6><b>Email :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Femail']; ?></h6>
    <hr>
        <h6><b>License :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Flicense']; ?></h6>
        <hr>
        <h6><b>Address :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Fadd']; ?></h6>
        <h6><b>Pin :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Fpin']; ?></h6>

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
        <hr>
        <h6><b>Shop Owner :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Fowner']; ?></h6>
        <h6><b>Mobile :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['FOphno']; ?></h6>
    </div>
<?php
}
?>
