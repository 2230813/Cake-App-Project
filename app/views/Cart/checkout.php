<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/order.css">
</head>
<body>
    <a href="/User/login" class="remove-item-btn">Login</a>
    <a href="/User/logout" class="remove-item-btn">Logout</a>
    <div class="container">
        <h2>Checkout</h2>
        <a href="/Cart/index" class="remove-item-btn">View Cart</a>
        <a href="/Cake/catalog" class="remove-item-btn">View Catalog</a>
        <div class="ordered-items">
            <h3>Your Order</h3>
            <?php foreach ($cartItems as $product) { ?>
            <div class="order-item">
                <div class="item-name"><?= $product->name ?></div>
                <div class="item-quantity">Quantity: 1</div>
                <div class="item-price"><?= $product->price ?></div>
            </div>
            <?php } ?>
            
            <div class="delivery-options">
                <input type="radio" id="pickup" name="delivery" value="pickup" checked>
                <label for="pickup">Pick Up</label>
                <input type="radio" id="delivery" name="delivery" value="delivery">
                <label for="delivery">Delivery</label>
            </div>            
        </div>        
        <br>
        <form class="checkout-form">
            <div class="billing-info">
                <h4>Billing Information</h4>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" placeholder="Jane Dough" value="<?= $profile->first_name ?> <?= $profile->last_name ?>" required>
                <br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="123 Cake Street" value="<?= $profile->address ?>" required>
                
                <!-- Add more billing fields if necessary -->
            </div>
            
            <div class="payment-info">
                <h4>Payment Information</h4>
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="•••• •••• •••• 1234" required>
                <br>
                <label for="cardExpiry">Expiry Date:</label>
                <input type="text" id="cardExpiry" name="cardExpiry" placeholder="MM/YY" required>
                <br>
                <label for="cardCVC">CVC:</label>
                <input type="text" id="cardCVC" name="cardCVC" placeholder="123" required>
                
                <!-- Add more payment fields if necessary -->
            </div>
            
            <button type="submit" class="submit-btn">Confirm Payment</button>
        </form>
    </div>
</body>
</html>
