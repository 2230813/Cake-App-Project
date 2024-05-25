<!-- views/Product Management/partials/product_list.php -->

<?php if (isset($products) && is_array($products) && !empty($products)): ?>
<section class="product-list">
    <h2>Current Products</h2>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?= htmlspecialchars($_SESSION['error']) ?>
        </div>
        <?php unset($_SESSION['error']); // Clear the error message ?>
    <?php endif; ?>

    <form method="get" action="/Product/adminCreate">
        <input type="text" name="search" placeholder="Search products by name..." />
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Details</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product->product_id) ?></td>
                <td><?= htmlspecialchars($product->name) ?></td>
                <td><?= htmlspecialchars($product->type) ?></td>
                <td>$<?= htmlspecialchars(number_format($product->price, 2)) ?></td>
                <td><?= htmlspecialchars($product->details) ?></td>
                <td><?= htmlspecialchars($product->quantity) ?></td>
                <td>
                    <?php if (!empty($product->image_path)): ?>
                        <img src="/<?= htmlspecialchars($product->image_path) ?>" alt="<?= htmlspecialchars($product->name) ?>" style="width: 50px;">
                    <?php else: ?>
                        <p>No image available.</p>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="/Product/adminEdit/<?= htmlspecialchars($product->product_id) ?>" class="btn btn-primary">Edit</a>
                    <a href="/Product/delete/<?= htmlspecialchars($product->product_id) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete: <?= htmlspecialchars($product->name) ?>?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?php else: ?>
<p>No products found.</p>
<?php endif; ?>
