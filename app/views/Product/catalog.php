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
        <h2>Our Products</h2>
        <a href="/Profile/index" class="add-to-cart-btn">Profile</a>
        <a href="/Cart/index" class="add-to-cart-btn">View Cart</a>
        <form method='post' action=''>
        <div class="product-grid">
            <!-- Repeat for more products -->
            <?php foreach ($data as $product) { ?>
                <div class="product">
                    <!-- <img src=<?= $product->image_path ?>> -->
                        <div class="product-info">
                            <h3><?= $product->name ?></h3>
                            <p class="product-price"><?= $product->price ?></p>
                            <a href="/Cake/details/<?= $product->product_id ?>" class="add-to-cart-btn">View Details</a>
                            <a href="/Cart/add/<?= $product->product_id ?>" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                </div>
            <?php } ?>

        </div>
        </form>
    </div>
</body>
</html>
