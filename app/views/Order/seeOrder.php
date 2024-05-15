<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/order.css">
</head>
<body>
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link">Cake Shop</a>
            </div>
            <div class="nav-links">
                <a href="/User/login">Login</a>
                <a href="/User/logout">Logout</a>
                <a href="/Cart/index">View Cart</a>
                <a href="/Cake/catalog">View Catalog</a>
                <a href="/Profile/index">View Profile</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Your Order </h2>
        <div class="orders">
            <div class="order">
                <div class="order-date">Date: <?= $order->date ?></div>
                <?php foreach ($cartDetails as $product) { ?>
                <div class="order-summary"><?= $product->name ?> - <strong><?= $product->price ?></strong></div>
                <?php } ?>
                <div class="order-summary">Status: <?= $order->status ?></div>
                <div class="order-summary">Type: <?= $order->options ?></div>
                
            </div>
        </div>
       <a href="/Order/delete/<?= $order->cart_id ?>" class="remove-item-btn">Cancel</a>
    </div>
</body>
</html>