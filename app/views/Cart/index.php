<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\product.css">
</head>
<body>
    <a href="/User/login" class="add-to-cart-btn">Login</a>
    <a href="/User/logout" class="add-to-cart-btn">Logout</a>
    <div class="container">
        <h2>Shopping Cart</h2>
        <a href="/Profile/index" class="add-to-cart-btn">Profile</a>
        <a href="/Cake/catalog" class="add-to-cart-btn">View Catalog</a>
        <form method='post' action='/Cart/addToCart'>
    <div class="product-grid">
        <?php foreach ($data as $product) { ?>
            <div class="product">
                <!-- <img src="image.png" alt="<?= $product->name ?>"> -->
                <div class="product-info">
                    <h3><?= $product->name ?></h3>
                    <p class="product-price"><?= $product->price ?></p>
                    <a href="/Cake/details/<?= $product->product_id ?>" class="add-to-cart-btn">View Details</a>
                    <!-- to implement below, make route and contoller method -->
                    <a href="/Cart/delete/<?= $product->product_id ?>" class="add-to-cart-btn">Delete Item</a>
                </div>
            </div>
        <?php } ?>
    </div>
</form>

    </div>
</body>
</html>
