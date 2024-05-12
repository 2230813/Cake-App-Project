<aside class="product-form">
    <!-- views/Product Management/partials/create.php -->
    <h2>Add a New Product</h2>
    <form action="/Product/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select id="type" name="type" required>
                <option value="">Select Type</option>
                <option value="Birthday Cake">Birthday Cake</option>
                <option value="Wedding Cake">Wedding Cake</option>
                <option value="Anniversary Cake">Anniversary Cake</option>
                <option value="Custom Cake">Custom Cake</option>
                <!-- Additional options can be dynamically populated here if needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea id="details" name="details" required></textarea>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <!-- <input type="file" id="image" name="image" required> -->
            <input type="file" id="image" name="image">
        </div>
        <input type="submit" value="Add Product" class="btn btn-primary">
    </form>
</aside>
