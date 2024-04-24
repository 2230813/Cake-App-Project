<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products | Admin</title>
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
    <header>
        <h1>Product Management</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/product/index">Manage Products</a></li>
            <li><a href="/order/index">Order Management</a></li>
            <li><a href="/user/index">User Management</a></li>
        </ul>
    </nav>
    <main class="admin-main">
        <!-- Product Form -->
        <?php include('partials/product_form.php'); ?>
        <!-- Product List -->
        <?php include('partials/product_list.php'); ?>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>
