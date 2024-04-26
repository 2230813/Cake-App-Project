<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products | Cake Shop</title>
    <link rel="stylesheet" href="../../../common/css/base.css">
    <link rel="stylesheet" href="../../../common/css/product.css">
</head>
<body>
    <div class="container">
        <h2>Our Products</h2>
        <a href="/Profile/index">Profile</a>
        <a href="/Cart/index">View Cart</a>
        <form method='post' action=''>
        <div class="product-grid">
            <!-- <div class="product">
                <img src="../../common/images/cake1.jpg" alt="Classic Chocolate Cake">
                <div class="product-info">
                    <h3>Classic Chocolate Cake</h3>
                    <p class="product-price">$15.00</p>
                    <a href="product_details.html" class="add-to-cart-btn">View Details</a>
                </div>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="product">
                <img src="../../common/images/cake2.jpg" alt="Vanilla Bean Cake">
                <div class="product-info">
                    <h3>Vanilla Bean Cake</h3>
                    <p class="product-price">$18.00</p>
                    <a href="product_details.html" class="add-to-cart-btn">View Details</a>
                </div>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="product">
                <img src="../../common/images/cake3.jpg" alt="Red Velvet Cake">
                <div class="product-info">
                    <h3>Red Velvet Cake</h3>
                    <p class="product-price">$20.00</p>
                    <a href="product_details.html" class="add-to-cart-btn">View Details</a>
                </div>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div> -->
            <!-- Repeat for more products -->
            <?php foreach ($data as $product) { ?>
                <div class="product">
                    <img src=<?= $product->image_path ?>>
                        <div class="product-info">
                            <h3><?= $product->name ?></h3>
                            <p class="product-price"><?= $product->price ?></p>
                            <a href="/Cake/details/<?= $product->product_id ?>" class="add-to-cart-btn">View Details</a>
                        </div>
                    <button class="add-to-cart-btn" name="action">Add to Cart</button>
                </div>
            <?php } ?>   

        </div>
        </form>
    </div>
</body>
</html>
