<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=__('Our Products')?> | <?=__('Cake Shop')?></title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/product.css">

</head>
<body>
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link"><?=__('Cake Shop')?></a>
            </div>
            <div class="nav-links">
            <a href="/User/login"><?=__('Login')?></a>
                <a href="/User/logout"><?=__('Logout')?></a>
                <a href="/Cart/index"><?=__('View Cart')?></a>
                <a href="/Cake/catalog"><?=__('View Catalog')?></a>
                <a href="/Profile/index"><?=__('View Profile')?></a>
                <a href="/Cake/catalog?lang=en">EN</a>
                <a href="/Cake/catalog?lang=fr">FR</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2><?=__('Our Products')?></h2>
        
        <form method="get" action="/Cake/catalog">
            <label for="type"><?=__('Filter by type:')?></label>
            <select name="type" id="type">
                <option value=""><?=__('All Types')?></option>
                <option value="Birthday Cake" <?= isset($type) && $type == 'Birthday Cake' ? 'selected' : '' ?>><?=__('Birthday Cake')?></option>
                <option value="Wedding Cake" <?= isset($type) && $type == 'Wedding Cake' ? 'selected' : '' ?>><?=__('Wedding Cake')?></option>
                <option value="Custom Cake" <?= isset($type) && $type == 'Custom Cake' ? 'selected' : '' ?>><?=__('Custom Cake')?></option>
            </select>
            <label for="search"><?=__('Search:')?></label>
            <input type="text" name="search" id="search" placeholder="Search products by name..." value="<?= htmlspecialchars($searchTerm ?? '') ?>">
            <button type="submit">Filter</button>
        </form>

        <div class="product-grid">
            <?php if (isset($products) && is_array($products) && !empty($products)) { ?>
                <?php foreach ($products as $product) { ?>
                    <div class="product">
                        <div class="product-info">
                            <img src="/<?= htmlspecialchars($product->image_path) ?>" alt="Product Image" class="product-image">
                            <h3><?= htmlspecialchars($product->name) ?></h3>
                            <p class="product-price"><?= htmlspecialchars($product->price) ?></p>
                            <div class="product-rating">
                                <p><?=__('Rating:')?> <?= htmlspecialchars(number_format($product->average_rating, 1)) ?></p>
                                <div class="rating-stars">
                                    <?= str_repeat("★", round($product->average_rating)) . str_repeat("☆", 5 - round($product->average_rating)) ?>
                                </div>
                            </div>
                            <a href="/Cake/details/<?= $product->product_id ?>" class="add-to-cart-btn"><?=__('View Details')?></a>
                            <a href="/Cart/add/<?= $product->product_id ?>" class="add-to-cart-btn"><?=__('Add to Cart')?></a>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p><?=__('No products found.')?></p>
            <?php } ?>
        </div>
    </div>
</body>
</html>
