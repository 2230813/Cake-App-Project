<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?__('Shopping Cart')?> | <?__('Cake Shop')?></title>
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
                <a href="/Cart/index?lang=en">EN</a>
                <a href="/Cart/index?lang=fr">FR</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2><?__('Your Shopping Cart')?></h2>
        <div class="cart">
        <?php foreach ($cartItems as $product) { ?>
            <div class="cart-item">
                <img src="../../../common/images/cake-thumbnail.jpg" alt="Chocolate Cake" class="cart-item-image">
                <div class="cart-item-details">
                    <h4><?= $product->name ?></h4>
                    <p><?__('Quantity:')?> 1</p>
                    <p><?= $product->price ?></p>
                </div>
                    
            </div>
            <a href="/Cart/delete/<?= $product->product_id ?>" class="remove-item-btn"><?__('Remove')?></a>
            <?php } ?>
            <div class="cart-total">
                <strong><?__('Total:')?> $<?= $cart->total_price ?></strong>
            </div>
            <div class="checkout-btn-container">
            <a href="/Cart/checkout" class="checkout-btn"><?__('Proceed to Checkout')?></a>
            </div>
        </div>
    </div>
</body>
</html>

