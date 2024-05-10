<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\product.css">
</head>
<body>
    <div class="container">
        <h2>Shopping Cart</h2>
        <a href="/Profile/index">Profile</a>
        <a href="/Cake/catalog">View Catalog</a>
        <form method='post' action='/Cart/addToCart'>
    <div class="product-grid">
        <?php foreach ($data as $product) { ?>
            <div class="product">
                <img src="<?= $product->image_path ?>" alt="<?= $product->name ?>">
                <div class="product-info">
                    <h3><?= $product->name ?></h3>
                    <p class="product-price"><?= $product->price ?></p>
                    <a href="/Cake/details/<?= $product->product_id ?>" class="add-to-cart-btn">View Details</a>
                </div>
                <button class="add-to-cart-btn" type="submit" name="productId" value="<?= $product->product_id ?>">Add to Cart</button>
            </div>
        <?php } ?>
    </div>
</form>

    </div>
</body>
</html>
