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
            <li><a href="/order/index">Order Management</a></li>
            <li><a href="/user/index">User Management</a></li>
            <li><a href="/User/logout" class="btn btn-warning">Logout</a></li>
        </ul>
    </nav>
    <main class="admin-main">
        <!-- Product Form -->
        <?php include('partials/edit.php'); ?>
        <!-- Product List -->
        <?php include('partials/product_list_Edit.php'); ?>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>
