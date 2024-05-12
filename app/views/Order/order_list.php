<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/product.css">
</head>
<body>
<div class="container">
    <h1>Orders</h1>
    <?php if (!empty($order)): ?>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $ord): ?>
                    <tr>
                        <td><?= htmlspecialchars($ord->orderID) ?></td>
                        <td><?= htmlspecialchars($ord->status) ?></td>
                        <td><a href="/Order/seeOrder/<?= htmlspecialchars($ord->orderID) ?>">View</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No orders found.</p>
    <?php endif; ?>
</div>
</body>
</html>
