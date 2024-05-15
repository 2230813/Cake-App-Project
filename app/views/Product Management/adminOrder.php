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
    </style>
</head>
<body>
    <header>
        <h1>Product Management</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/Product/adminCreate">Manage Products</a></li>
            <li><a href="/Order/manage">Order Management</a></li>
            <li><a href="/user/index">User Management</a></li>
            <li><a href="/User/logout" class="btn btn-warning">Logout</a></li>
        </ul>
    </nav>
    <main class="admin-main">
        <!-- views/Product Management/partials/product_list.php -->
<?php if (isset($data) && is_array($data) && !empty($data)): ?>
<section class="product-list">
    <h2>Current Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Cart ID</th>
                <th>Profile ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Options</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $order): ?>
            <tr>
                <td><?= htmlspecialchars($order->order_id) ?></td>
                <td><?= htmlspecialchars($order->cart_id) ?></td>
                <td><?= htmlspecialchars($order->profile_id) ?></td>
                <td><?= htmlspecialchars($order->date) ?></td>
                <td><?= htmlspecialchars($order->status) ?></td>
                <td><?= htmlspecialchars($order->options) ?></td>
                <td>
                    <a href="/Order/adminView/<?= htmlspecialchars($order->order_id) ?>" class="btn btn-primary">View</a>
                    <a href="/Order/adminDelete/<?= htmlspecialchars($order->order_id) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?php else: ?>
<p>No orders found.</p>
<?php endif; ?>

    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>