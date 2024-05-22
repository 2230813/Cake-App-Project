<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?__('Register')?> | <?__('Cake Shop')?></title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\authentication.css">
</head>
<body>
    <div class="auth-container">
        <h2><?= __('Join Our Cake Community')?></h2>
        <form id="registrationForm" method='post' action=''>
            <div class="form-control">
                <label for="name"><?= __('Name:')?></label>
                <input type="text" id="name" name="username" required>
            </div>
            <div class="form-control">
                <label for="email"><?= __('Email:')?></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-control">
                <label for="password"><?= __('Password:')?></label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" name="action"><?= __('Sign Up')?></button>
            <p><?= __('Already have an account?')?> <a href="/User/login"><?= __('Log In')?></a></p>
        </form>
    </div>
</body>
</html>