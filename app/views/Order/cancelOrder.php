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
                <a href="/Order/delete/<?= $order->cart_id ?>?lang=en">EN</a>
                <a href="/Order/delete/<?= $order->cart_id ?>?lang=fr">FR</a>
            </div>
        </div>
    </div>
<h1>Orders </h1>
    <div class="container product-details">
        <h2> Are you sure you want to cancel Order #<?= $data->order_id ?></h2>
        <form method='post' action='/Order/delete/<?= $data->order_id ?>'>
                <div class="form-group">
            <input type="submit" name="action" value="Delete Post"/>
          </div>
        </form>
    </div>
</body>
</html>