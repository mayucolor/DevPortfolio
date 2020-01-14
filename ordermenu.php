<?php require_once('data.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="order-wrapper">            
       <h2>Confirm Order Details</h2>                     
       <?php $totalPayment = 0 ?>            
       <?php foreach ($order as $s): ?>            
         <?php             
           $orderCount = $_POST[$s->getName()];            
           $s->setOrderCount($orderCount);                    
           $totalPayment += $s->getTotalPrice();            
                       
         ?>            
         <p class="order-amount">            
           <?php echo $s->getName() ?>            
           x            

         </p>            
         <p class="order-price">$<?php echo $s->getTotalPrice() ?></p>            
       <?php endforeach ?>            
       
       <h3>Total: $<?php echo $totalPayment ?></h3>            
     </div>
</body>
</html>