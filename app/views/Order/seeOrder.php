<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?__('Order History')?> | <?__('Cake Shop')?></title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/order.css">
</head>
<body>
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link"><?__('Cake Shop')?></a>
            </div>
            <div class="nav-links">
            <a href="/User/login"><?__('Login')?></a>
                <a href="/User/logout"><?__('Logout')?></a>
                <a href="/Cart/index"><?__('View Cart')?></a>
                <a href="/Cake/catalog"><?__('View Catalog')?></a>
                <a href="/Profile/index"><?__('View Profile')?></a>
                <a href="/Order/seeOrder/<?= $order->cart_id ?>?lang=en">EN</a>
                <a href="/Order/seeOrder/<?= $order->cart_id ?>?lang=fr">FR</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2><?__('Your Order')?> </h2>
        <div class="orders">
            <div class="order">
                <div class="order-date"><?__('Date:')?> <?= $order->date ?></div>
                <?php foreach ($cartDetails as $product) { ?>
                <div class="order-summary"><?= $product->name ?> - <strong><?= $product->price ?></strong></div>
                <?php } ?>
                <div class="order-summary"><?__('Status:')?> <?= $order->status ?></div>
                <div class="order-summary"><?__('Type:')?> <?= $order->options ?></div>
                
            </div>
        </div>
       <a href="/Order/delete/<?= $order->cart_id ?>" class="remove-item-btn"><?__('Cancel')?></a>
    </div>
</body>
</html>