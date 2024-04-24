<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cake Shop</title>
    <link rel="stylesheet" href="../../../common/css/base.css">
    <link rel="stylesheet" href="../../../common/css/authentication.css">
</head>
<body>
    <div class="auth-container">
        <h2>Welcome Back!</h2>
        <form id="loginForm" method='post' action=''>
            <div class="form-control">
                <label for="name">Name:</label>
                <input type="text" id="name" name="username" required>
            </div>
            <div class="form-control">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" name="action">Log In</button>
            <p>Don't have an account? <a href="/User/register">Sign up</a></p>
        </form>
    </div>
</body>
</html>