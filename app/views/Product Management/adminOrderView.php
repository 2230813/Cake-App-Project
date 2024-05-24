<!DOCTYPE html>
<html lang="en">
<head>
    <!-- views/Product Management/adminEdit.php -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/admin_style.css">
</head>
<body>
    <header>
        <h1>Product Management</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/Admin/dashboard">Dashboard</a></li>
            <li><a href="/Product/adminCreate">Manage Products</a></li>
            <li><a href="/Order/manage">Order Management</a></li>
            <li><a href="/User/logout" class="btn btn-warning">Logout</a></li>
        </ul>
    </nav>
    <main class="admin-main">
        <div class="order-details">
            <h2>Order #10<?= $order->order_id ?></h2>
            <div class="order-info">
                <div class="order-date"><strong>Date:</strong> <?= $order->date ?></div>
                <div class="order-items">
                    <?php foreach ($cartItems as $product) { ?>
                    <div class="order-item"><?= $product->name ?> - <strong><?= $product->price ?></strong></div>
                    <?php } ?>
                </div>
                <div class="order-type"><strong>Type:</strong> <?= $order->options ?></div>
                <div class="order-status"><strong>Status:</strong> <?= $order->status ?></div>
            </div>
            <a href="/Order/adminEdit/<?= $order->cart_id ?>" class="btn btn-primary update-status">Update Status</a>
        </div>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>
