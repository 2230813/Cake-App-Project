<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?__('Delete Profile')?> | <?__('Cake Shop')?></title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
</head>
<body>
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link"><?__('Cake Shop')?></a>
            </div>
            <div class="nav-links">
                <a href="/User/login"><?__('Login')?></a>
                <a href="/User/logout"><?__('Logout')?></a>
                <a href="/Cart/index"><?__('View Cart')?></a>
                <a href="/Cake/catalog"><?__('View Catalog')?></a>
                <a href="/Profile/index"><?__('View Profile')?></a>
                <a href="/Profile/delete?lang=en">EN</a>
                <a href="/Profile/delete?lang=fr">FR</a>
            </div>
        </div>
    </div>
    <div class="form-container">
        <h2><?= __('Delete Profile')?></h2>
        <p><?= __('Are you sure you want to delete your profile? This action cannot be undone.')?></p>
        <form id="deleteProfileForm" method='post' action=''>
            <button type="submit" class="btn btn-danger" name="action"><?= __('Delete Profile')?></button>
        </form>
    </div>
</body>
</html>