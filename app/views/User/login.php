<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?__('Login')?> | <?__('Cake Shop')?></title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\authentication.css">
    
</head>
<body><div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link">Cake Shop</a>
            </div>
            <div class="nav-links">
                <a href="/User/login?lang=en">EN</a>
                <a href="/User/logout?lang=fr">FR</a>
            </div>
        </div>
    </div>
    <div class="auth-container">
        <h2><?=__('Welcome Back!') ?></h2>
        <form id="loginForm" method='post' action=''>
            <div class="form-control">
                <label for="name"><?= __('Name:') ?></label>
                <input type="text" id="name" name="username" >
            </div>
            <div class="form-control">
                <label for="password"><?= __('Password:') ?></label>
                <input type="password" id="password" name="password" >
            </div>
            <input type="submit" class="btn" name="action" value="<?= __('Log In')?>"/>
            <p><?= __("Don't have an account?")?> <a href="/User/register"><?= __('Sign up')?></a></p>
        </form>
    </div>
</body>
</html>