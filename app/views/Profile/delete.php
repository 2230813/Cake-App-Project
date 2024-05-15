<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Profile | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
</head>
<body>
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link">Cake Shop</a>
            </div>
            <div class="nav-links">
                <a href="/User/login">Login</a>
                <a href="/User/logout">Logout</a>
                <a href="/Cart/index">View Cart</a>
                <a href="/Cake/catalog">View Catalog</a>
                <a href="/Profile/index">View Profile</a>
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