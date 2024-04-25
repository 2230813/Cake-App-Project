<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History | Cake Shop</title>
    <link rel="stylesheet" href="../../../common/css/base.css">
    <link rel="stylesheet" href="../../../common/css/order.css">
</head>
<body>
<div class="container">
    <h1 class="h3">Publications</h1>
    <p>========================================================</p>
    <?php foreach ($data as $order) { ?>
    <div class="order">
    <h1> Order : 
        <a href="/Profile/Order<?= urlencode($profile_id->profile_id) ?>">
           NOOOOOOOOOOOOOOOOOOO<?= htmlspecialchars($order->order_id) ?>
        </a>
    </h1>
        <p>========================================================</p>
    </div>
<?php } ?>
</div>
</body>
</html>