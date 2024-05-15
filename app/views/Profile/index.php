<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
    <link rel="stylesheet" href="\css\product.css">
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
    <div class="profile-container">
        <h2>User Profile</h2>
        <a href="/Profile/edit" class="add-to-cart-btn">Edit</a>
        <a href="/Profile/delete" class="add-to-cart-btn">Delete</a>
        <a href="/Cart/index" class="add-to-cart-btn">View Cart</a>
        <a href="/Cake/catalog" class="add-to-cart-btn">View Catalog</a>
        <div class="profile-flex">
            <div class="profile-sidebar">
                <div class="profile-info">
                    <p><strong><?= __('First Name:')?></strong> <?= $profile->first_name ?></p>
                    <p><strong><?= __('Last Name:')?></strong> <?= $profile->last_name ?></p>
                    <p><strong><?= __('Language:')?></strong> <?= $profile->language_preference ?></p>
                    <section class="billing-info">
                        <h3><?= __('Billing Information')?></h3>
                        <p><strong><?= __('Address:')?></strong> <?= $profile->address ?></p>
                        <p><strong><?= __('Phone Number:')?></strong> <?= $profile->phone_number ?></p>
                    </section>
                    <section class="payment-info">
                        <h3><?= __('Payment Information')?></h3>
                        <?php if (empty($payments)) { ?>
                            <p><strong><?= __('Card Holder:')?></strong> Empty</p>
                                <p><strong><?= __('Card Number:')?></strong> Empty</p>
                                <p><strong>Expiry:</strong> Empty</p>
                                <p>======================================</p>
                                <a href="/Profile/add_payment" class="add-to-cart-btn"><?= __('Add Payment')?></a>
                        <?php } else { ?>
                            <?php foreach ($payments as $payment) { ?>
                                <p><strong><?= __('Card Holder:')?></strong> <?= htmlspecialchars($payment->name) ?></p>
                                <p><strong><?= __('Card Number:')?></strong> <?= htmlspecialchars($payment->card_number) ?></p>
                                <p><strong>Expiry:</strong> <?= htmlspecialchars($payment->expire_date) ?></p>
                                <p>======================================</p>
                                <a href="/Profile/edit_payment" class="add-to-cart-btn"><?= __('Modify Payment')?></a>
                            <?php } ?>
                        <?php } ?>
                    </section>
                </div>
            </div>
            <div class="profile-main">
                <section class="profile-orders">
                    <h3>Your Orders</h3>
                    <ul class="order-list">
                        <?php foreach ($orders as $order) {?>
                        <li>Order #10<?=$order->order_id ?> - <span><?= $order->status ?></span> - <a href="/Order/seeOrder/<?= $order->cart_id ?>">View</a></li>
                        <?php } ?>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
