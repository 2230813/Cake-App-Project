<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Cake Shop</title>
    <link rel="stylesheet" href="../../../common/css/base.css">
    <link rel="stylesheet" href="../../../common/css/authentication.css">
</head>
<body>
    <div class="auth-container">
        <h2>Join Our Cake Community</h2>
        <form id="registrationForm" method='post' action=''>
            <div class="form-control">
                <label for="name">Name:</label>
                <input type="text" id="name" name="username" required>
            </div>
            <div class="form-control">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-control">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" name="action">Sign Up</button>
            <p>Already have an account? <a href="/User/login">Log in</a></p>
        </form>
    </div>
</body>
</html>