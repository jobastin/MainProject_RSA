<?php
require('stripe-php-master/init.php');
$pubk="pk_test_51IzllLSI2wnPtd83cuHbxoAi9gSTfWyEmnGocld9nLJGDrCGd9kG480aFnTzumtogaEWz7V1inKuhMXAeRVXlxh100ZSM5vAII";
$sek="sk_test_51IzllLSI2wnPtd830FJLjw8jQfUr5jcnDtS1Pn0TOQCv3wPtv8cmSbJ9mboVUxlq7dyEwnieuiKyYFOqlwLEiiow00eOerBy3t";

\Stripe\Stripe::setApiKey($sek);
?>