<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=__('Update Profile')?> | <?=__('Cake Shop')?></title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
</head>
<body>
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link"><?=__('Cake Shop')?></a>
            </div>
            <div class="nav-links">
            <a href="/User/login"><?=__('Login')?></a>
                <a href="/User/logout"><?=__('Logout')?></a>
                <a href="/Cart/index"><?=__('View Cart')?></a>
                <a href="/Cake/catalog"><?=__('View Catalog')?></a>
                <a href="/Profile/index"><?=__('View Profile')?></a>
                <a href="/Profile/edit?lang=en">EN</a>
                <a href="/Profile/edit?lang=fr">FR</a>
            </div>
        </div>
    </div>
    <div class="form-container">
        <h2><?= __('Update Profile')?></h2>
        <form id="updateProfileForm" method='post' action=''>
            <div class="form-group">
                <label for="name"><?= __('First Name:')?></label>
                <input type="text" id="name" name="first_name" value="<?= $data->first_name ?>" required>
            </div>
            <div class="form-group">
                <label for="last_name"><?= __('Last Name:')?></label>
                <input type="text" id="last_name" name="last_name" value="<?= $data->last_name ?>" required>
            </div>
            <div class="form-group">
                <label for="address"><?= __('Address:')?></label>
                <input type="text" id="address" name="address" value="<?= $data->address ?>" required>
            </div>
            <div class="form-group">
                <label for="phone"><?= __('Phone Number:')?></label>
                <input type="text" id="phone" name="phone" value="<?= $data->phone_number ?>" required>
            </div>
            
            <button type="submit" class="btn" name="action"><?= __('Update Profile')?></button>
        </form>
    </div>
</body>
</html>
