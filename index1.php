<?php
require('config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body> 
    <form action="submit.php" method="POST">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $pubk?>"
            data-amount="5020"
            data-name="Roadside Assistance"
            data-description="Payment Portal"
            data-image="image\favicon.png"
            data-currency="inr"
            data-email="rsaproject02@gmail.com"
            ></script>
        </form>
      
</body>
</html>
    
