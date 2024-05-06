<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile | Cake Shop</title>
    <link rel="stylesheet" href="../../../common/css/base.css">
    <link rel="stylesheet" href="../../../common/css/profile.css">
</head>
<body>
    <div class="profile-container">
        <h2>User Profile</h2>
        <a href="/Profile/edit">Edit</a>
        <a href="/Profile/delete">Delete</a>
        <a href="/Cart/index">View Cart</a>
        <a href="/Cake/catalog">View cakes</a>
        <div class="profile-flex">
            <div class="profile-sidebar">
                <div class="profile-info">
                    <p><strong>First Name:</strong> <?= $data->first_name ?></p>
                    <p><strong>Last Name:</strong> <?= $data->last_name ?></p>
                    <p><strong>Language:</strong> <?= $data->language_preference ?></p>
                    <section class="billing-info">
                        <h3>Billing Information</h3>
                        <p><strong>Address:</strong> <?= $data->address ?></p>
                        <p><strong>Phone:</strong> <?= $data->phone_number ?></p>
                    </section>
                    <section class="payment-info">
                        <h3>Payment Information</h3>
                        <p><strong>Card Holder:</strong> John Doe</p>
                        <p><strong>Card Number:</strong> **** **** **** 1234</p>
                        <p><strong>Expiry:</strong> 12/25</p>
                    </section>
                </div>
            </div>
            <div class="profile-main">
                <section class="profile-orders">
                    <h3>Your Orders</h3>
                    <ul class="order-list">
                        <li>Order #1001 - <span>Delivered</span> - <a href="#">View</a></li>
                        <li>Order #1002 - <span>In Transit</span> - <a href="#">View</a></li>
                        <!-- More orders can be listed here -->
                    </ul>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
