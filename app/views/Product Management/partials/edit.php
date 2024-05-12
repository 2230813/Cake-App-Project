<!-- views/Product Management/partials/edit.php -->
<?php if (isset($product)): ?>
<aside class="product-form">
    <h2>Edit Product</h2>
    <form action="/Product/modify/<?= htmlspecialchars($product->product_id) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required value="<?= htmlspecialchars($product->name) ?>">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select id="type" name="type" required>
                <option value="">Select Type</option>
                <option value="Birthday Cake" <?= $product->type == 'Birthday Cake' ? 'selected' : '' ?>>Birthday Cake</option>
                <option value="Wedding Cake" <?= $product->type == 'Wedding Cake' ? 'selected' : '' ?>>Wedding Cake</option>
                <option value="Anniversary Cake" <?= $product->type == 'Anniversary Cake' ? 'selected' : '' ?>>Anniversary Cake</option>
                <option value="Custom Cake" <?= $product->type == 'Custom Cake' ? 'selected' : '' ?>>Custom Cake</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required value="<?= htmlspecialchars($product->price) ?>">
        </div>
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea id="details" name="details" required><?= htmlspecialchars($product->details) ?></textarea>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required value="<?= htmlspecialchars($product->quantity) ?>">
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <?php if (!empty($product->image_path)): ?>
                <img src="/uploads/<?= htmlspecialchars($product->image_path) ?>" alt="<?= htmlspecialchars($product->image_path) ?>" style="max-width: 100px; max-height: 100px;">
            <?php endif; ?>
            <input type="file" id="image" name="image">
        </div>
        <input type="hidden" name="product_id" value="<?= htmlspecialchars($product->product_id) ?>">
        <input type="submit" value="Save Changes" class="btn btn-primary">
    </form>
</aside>
<?php else: ?>
<p>Product not found.</p>
<?php endif; ?>
