<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/order.css">
</head>
<body>
    <div class="container">
        <h2>Your Order </h2>
        <a href="/Profile/index" class="remove-item-btn">Profile</a>
        <div class="orders">
            <div class="order">
                <div class="order-date">Date: <?= $order->date ?></div>
                <?php foreach ($cartDetails as $product) { ?>
                <div class="order-summary"><?= $product->name ?> - <strong><?= $product->price ?></strong></div>
                <?php } ?>
                <div class="order-summary">Status: <?= $order->status ?></div>
            </div>
        </div>
       
    </div>
</body>
</html>