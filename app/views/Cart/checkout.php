<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Cake Shop</title>
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
                <a href="/Cart/checkout?lang=en">EN</a>
                <a href="/Cart/checkout?lang=fr">FR</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Checkout</h2>
        <div class="ordered-items">
            <h3>Your Order</h3>
            <?php foreach ($cartItems as $product) { ?>
            <div class="order-item">
                <div class="item-name"><?= $product->name ?></div>
                <div class="item-quantity">Quantity: 1</div>
                <div class="item-price"><?= $product->price ?></div>
            </div>
            <?php } ?>
            <div class="order-total">
                <div class="total-title">Total:</div>
                <div class="total-price">$<?= $cart->total_price ?></div>
            </div>
                      
        </div>  
              <form class="checkout-form" >
            <div class="billing-info">
                <h4>Billing Information</h4>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" placeholder="Jane Dough" value="<?= $profile->first_name ?> <?= $profile->last_name ?>" required>
                <br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="123 Cake Street" value="<?= $profile->address ?>" required>
                
            </div>
            
            <div class="payment-info">
                <h4>Payment Information</h4>
                <?php if (empty($payments)) { ?>
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" id="cardNumber" name="cardNumber" placeholder="•••• •••• •••• 1234" required>
                    <br>
                    <label for="cardExpiry">Expiry Date:</label>
                    <input type="text" id="cardExpiry" name="cardExpiry" placeholder="YYYY-MM-DD" required>
                    <br>
                    <label for="cardName">Name:</label>
                    <input type="text" id="cardName" name="cardName" placeholder="Name" required>
                <?php } else { ?>
                    <?php foreach ($payments as $payment) { ?>
                        <label for="cardNumber">Card Number:</label>
                        <input type="text" id="cardNumber" name="cardNumber" placeholder="•••• •••• •••• 1234" value="<?= htmlspecialchars($payment->card_number, ENT_QUOTES, 'UTF-8') ?>" required>
                        <br>
                        <label for="cardExpiry">Expiry Date:</label>
                        <input type="text" id="cardExpiry" name="cardExpiry" placeholder="YYYY-MM-DD" value="<?= htmlspecialchars($payment->expire_date, ENT_QUOTES, 'UTF-8') ?>" required>
                        <br>
                        <label for="cardName">Name:</label>
                        <input type="text" id="cardName" name="cardName" placeholder="Name" value="<?= htmlspecialchars($payment->name, ENT_QUOTES, 'UTF-8') ?>" required>
                    <?php } ?>
                <?php } ?>
                </form>
            </div>
            <form action="" method="post">
                <div class="delivery-options">
                <input type="radio" id="pickup" name="delivery" value="pickup" checked>
                <label for="pickup">Pick Up</label>
                <input type="radio" id="delivery" name="delivery" value="delivery">
                <label for="delivery">Delivery</label>
                </div>
                <div class="ordered-items">
                    <button type="submit" name="action" class="submit-btn">Confirm Payment</button>
                </div>
                
            </form> 
                
        
        <br>
        
    </div>
</body>
</html>
