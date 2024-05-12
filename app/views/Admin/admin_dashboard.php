<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/admin_style.css">
</head>
<body>
    <header>
        <h1>Welcome to Your Dashboard, Admin</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/Product/adminCreate">Manage Products</a></li>
            <li><a href="/order/index">Order Management</a></li>
            <li><a href="/user/index">User Management</a></li>
        </ul>
    </nav>
    <main>
        <div class="dashboard-overview">
            <a href="manage_products.html" class="dashboard-link">Manage Products</a>
            <a href="order_management.html" class="dashboard-link">View Orders</a>
            <a href="user_management.html" class="dashboard-link">User Accounts</a>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>
