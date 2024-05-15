<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/product.css">
</head>
<body>
    <a href="/User/login" class="add-to-cart-btn">Login</a>
    <a href="/User/logout" class="add-to-cart-btn">Logout</a>
    <div class="container">
        <h2>Our Products</h2>
        <a href="/Profile/index" class="add-to-cart-btn">Profile</a>
        <a href="/Cart/index" class="add-to-cart-btn">View Cart</a>
        
        <form method="get" action="/Cake/catalog">
            <label for="type">Filter by type:</label>
            <select name="type" id="type">
                <option value="">All Types</option>
                <option value="Birthday Cake" <?= isset($type) && $type == 'Birthday Cake' ? 'selected' : '' ?>>Birthday Cake</option>
                <option value="Wedding Cake" <?= isset($type) && $type == 'Wedding Cake' ? 'selected' : '' ?>>Wedding Cake</option>
                <option value="Custom Cake" <?= isset($type) && $type == 'Custom Cake' ? 'selected' : '' ?>>Custom Cake</option>
            </select>
            <button type="submit">Filter</button>
        </form>

        <div class="product-grid">
            <?php if (isset($products) && is_array($products) && !empty($products)) { ?>
                <?php foreach ($products as $product) { ?>
                    <div class="product">
                        <div class="product-info">
                            <h3><?= htmlspecialchars($product->name) ?></h3>
                            <p class="product-price"><?= htmlspecialchars($product->price) ?></p>
                            <a href="/Cake/details/<?= $product->product_id ?>" class="add-to-cart-btn">View Details</a>
                            <a href="/Cart/add/<?= $product->product_id ?>" class="add-to-cart-btn">Add to Cart</a>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>No products found.</p>
            <?php } ?>
        </div>
    </div>
</body>
</html>
