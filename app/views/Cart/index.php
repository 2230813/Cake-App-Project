<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Cake Shop</title>
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
        <h2>Your Shopping Cart</h2>
        <div class="cart">
        <?php foreach ($cartItems as $product) { ?>
            <div class="cart-item">
                <img src="../../../common/images/cake-thumbnail.jpg" alt="Chocolate Cake" class="cart-item-image">
                <div class="cart-item-details">
                    <h4><?= $product->name ?></h4>
                    <p>Quantity: 1</p>
                    <p><?= $product->price ?></p>
                </div>
                    <a href="/Cart/delete/<?= $product->product_id ?>" class="remove-item-btn">Remove</a>
            </div>
            <?php } ?>
            <div class="cart-total">
                <strong>Total: $<?= $cart->total_price ?></strong>
            </div>
            <div class="checkout-btn-container">
            <a href="/Cart/checkout" class="checkout-btn">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</body>
</html>

