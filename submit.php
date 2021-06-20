<?php
require('config.php');

\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];

$data=\Stripe\Charge::create(array("amount"=>500,
    "currency"=>"inr",
    "description"=>"Payment with Roadside Assistance",
    "source"=>$token,
));


?>
<script>
    location.href ="index.html";  
</script>