<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/product.css">
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
            <label for="search">Search:</label>
            <input type="text" name="search" id="search" placeholder="Search products by name..." value="<?= htmlspecialchars($searchTerm ?? '') ?>">
            <button type="submit">Filter</button>
        </form>

        <div class="product-grid">
            <?php if (isset($products) && is_array($products) && !empty($products)) { ?>
                <?php foreach ($products as $product) { ?>
                    <div class="product">
                        <div class="product-info">
                            <h3><?= htmlspecialchars($product->name) ?></h3>
                            <p class="product-price"><?= htmlspecialchars($product->price) ?></p>
                            <div class="product-rating">
                                <p>Rating: <?= htmlspecialchars(number_format($product->average_rating, 1)) ?></p>
                                <div class="rating-stars">
                                    <?= str_repeat("★", round($product->average_rating)) . str_repeat("☆", 5 - round($product->average_rating)) ?>
                                </div>
                            </div>
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
