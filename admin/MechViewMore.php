<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['h_id']))
{
$con = connect();
$lid=$_POST['h_id'];

$q2=mysqli_query($con,"SELECT * FROM `tbl_mech` WHERE `login_id`=$lid")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);

$two=$r1['Mtwo'];
$four=$r1['Mfour'];
$heavy=$r1['Mheavy'];

?>
    <div>
    <h5><b>Mechanical Shop Details :</b></h5>
    <br>
        <h6><b>Name :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Mname']; ?></h6>
        <h6><b>Phone Number:</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Mphno']; ?></h6>
        <h6><b>Email :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Memail']; ?></h6>
    <hr>
        <h6><b>License :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Mlicense']; ?></h6>
        <h6><b>Two Wheeler :</b>&nbsp;&nbsp;&nbsp;<?php
        if($two)
        {
          echo "Yes";
        }
        else {
          echo "No";
        }
         ?></h6>
        <h6><b>Four Wheeler :</b>&nbsp;&nbsp;&nbsp;<?php
        if($four)
        {
          echo "Yes";
        }
        else {
          echo "No";
        }
        ?></h6>
        <h6><b>Heavy Vehicle :</b>&nbsp;&nbsp;&nbsp;<?php
        if($heavy)
        {
          echo "Yes";
        }
        else {
          echo "No";
        }
        ?></h6>
        <hr>
        <h6><b>Address :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Madd']; ?></h6>
        <h6><b>Pin :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Mpin']; ?></h6>

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
        <h6><b>Shop Owner :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['Mowner']; ?></h6>
        <h6><b>Mobile :</b>&nbsp;&nbsp;&nbsp;<?php echo $r1['MOphno']; ?></h6>
    </div>
<?php
}
?>
