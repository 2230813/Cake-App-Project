<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
    <link rel="stylesheet" href="\css\product.css">
</head>
<body>
<h1>Orders </h1>
    <div class="container product-details">
        <h2>Order #<?= $data->order_id ?></h2>

        <div class="product-info">
            <p class="order_id"> Order ID :<?= $data->order_id ?></p>
            <p class="user_id"><?= $data->user_id ?></p>
            <p class="price"><?= $data->totalAmount ?></p>
            <p class="date"><?= $data->date ?></p>
            <h3> Status : <?= $data->status ?></h3>
            <a href="/Order/cancelOrder" class="add-to-cart-btn">Cancel My Order</a>
        </div>
    </div>
</body>
</html>