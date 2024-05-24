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
            <li><a href="/Admin/dashboard">Dashboard</a></li>
            <li><a href="/Product/adminCreate">Manage Products</a></li>
            <li><a href="/Order/manage">Order Management</a></li>
            <li><a href="/Review/manage">Review Management</a></li>
            <li><a href="/User/logout" class="btn btn-warning">Logout</a></li>
        </ul>
    </nav>
    <main class="admin-main">
        <!-- views/Product Management/partials/product_list.php -->
<?php if (isset($data) && is_array($data) && !empty($data)): ?>
<section class="product-list">
    <h2>Current Reviews</h2>
    <table>
        <thead>
            <tr>
                <th>Review ID</th>
                <th>Product ID</th>
                <th>User ID</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $review): ?>
            <tr>
                <td><?= htmlspecialchars($review->review_id) ?></td>
                <td><?= htmlspecialchars($review->product_id) ?></td>
                <td><?= htmlspecialchars($review->user_id) ?></td>
                <td><?= htmlspecialchars($review->rating) ?></td>
                <td><?= htmlspecialchars($review->comment) ?></td>
                <td>
                    <a href="/Review/adminDelete/<?= $review->review_id ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?php else: ?>
<p>No Reviews found.</p>
<?php endif; ?>

    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>