<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\product.css">
</head>
<body>
    <a href="/User/login" class="add-to-cart-btn">Login</a>
    <a href="/User/logout" class="add-to-cart-btn">Logout</a>
    <div class="container product-details">
        <h2><?= $data->name ?></h2>
        <a href="/Cake/catalog" class="add-to-cart-btn">View Catalog</a>
        <div class="product-image">
            <img src="../../../common/images/deluxe-chocolate-cake.jpg" alt="Vanilla Bean Cake">
        </div>
        <div class="product-info">
            <p class="description"><?= $data->details ?></p>
            <p class="description"><?= $data->type ?></p>
            <p class="price"><?= $data->price ?></p>
            <p class="description"><?= $data->quantity ?></p>
            <button class="add-to-cart-btn">Add to Cart</button>
        </div>
    </div>
</body>
</html>