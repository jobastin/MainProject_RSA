<?php
require('../fun.php');
require('../config.php');
$con = connect();

\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];
$pid=$_POST['pid'];
$amount=$_POST['amount'];

$q2=mysqli_query($con,"UPDATE `tbl_payment` SET `status`=1 WHERE `payment_id`=$pid")or die("Sign in Error q1");

$data=\Stripe\Charge::create(array(
    "currency"=>"inr",
    "description"=>"Payment with Roadside Assistance",
    "source"=>$token,
    "amount"=>$amount,
));


?>
<script>
    location.href ="../fuel_station/ViewBill.php";
</script>
