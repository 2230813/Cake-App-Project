<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History | Cake Shop</title>
    <link rel="stylesheet" href="../../../common/css/base.css">
    <link rel="stylesheet" href="../../../common/css/order.css">
</head>
<body>
<div class="container">
<h1>Orders</h1>
    <?php if (!empty($order)): ?>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Details</th>
                    <!-- Add other fields as necessary -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $ord): ?>
                    <tr>
                        <td><?= htmlspecialchars($ord->id) ?></td>
                        <td><?= htmlspecialchars($ord->details) ?></td>
                        <!-- Output other fields as necessary -->
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