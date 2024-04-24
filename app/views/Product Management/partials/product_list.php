<section class="product-list">
    <h2>Current Products</h2>
    <table>
        <thead>
            <!-- Table headers -->
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product->product_id ?></td>
                <td><?= $product->name ?></td>
                <td>$<?= number_format($product->price, 2) ?></td>
                <td><?= $product->details ?></td>
                <td><?= $product->quantity ?></td>
                <td><img src="<?= $product->image_path ?>" alt="<?= $product->name ?>" style="width: 50px;"></td>
                <td>
                    <a href="/product/modify/<?= $product->product_id ?>">Edit</a>
                    <a href="/product/delete/<?= $product->product_id ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>