<!DOCTYPE html>
<html lang="en">
<head>
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
            <li><a href="/Review/manage">Review Management</a></li>
            <li><a href="/User/logout" class="btn btn-warning">Logout</a></li>
        </ul>
    </nav>
    <main class="admin-main">
        <h2>Order #10<?= $order->order_id ?></h2>
        <form action="" method="post" class="status-form">
            <div class="delivery-options">
                <input type="radio" id="ordered" name="status" value="ordered" checked>
                <label for="ordered">Ordered</label>
                <input type="radio" id="ongoing" name="status" value="pending">
                <label for="ongoing">Pending</label>
                <input type="radio" id="delivery" name="status" value="delivery">
                <label for="delivery">Delivery</label>
                <input type="radio" id="completed" name="status" value="completed">
                <label for="completed">Completed</label>
            </div>
            <button type="submit" name="action" class="btn btn-primary">Update</button>
        </form>  
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>
