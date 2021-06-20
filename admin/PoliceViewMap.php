<?php
require('../fun.php');
if(sessioncheck() == true or isset($_POST['m_id']))
{
$con = connect();
$lid=$_POST['m_id'];

$q2=mysqli_query($con,"SELECT * FROM `tbl_user` WHERE `login_id`=$lid")or die("Sign in Error q1");
$r1 = mysqli_fetch_array($q2);

?>

<h3>My Google Maps</h3>
    <!--The div element for the map -->
    <div id="map"></div>
<?php
}
?>
