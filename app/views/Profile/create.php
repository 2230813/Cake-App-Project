<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=__('Create Profile')?> | <?=__('Cake Shop')?></title>
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
                <a href="/Profile/create?lang=en">EN</a>
                <a href="/Profile/create?lang=fr">FR</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="/User/logout"><?=__('Logout')?></a>
                <?php else: ?>
                    <a href="/User/login"><?=__('Login')?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="form-container">
        <h2><?= __('Create Profile')?></h2>
        <form id="createProfileForm" method='post' action=''>
            <div class="form-group">
                <label for="name"><?= __('First Name:')?></label>
                <input type="text" id="name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name"><?= __('Last Name:')?></label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="address"><?= __('Address:')?></label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone"><?= __('Phone Number:')?></label>
                <input type="text" id="phone" name="phone" required>
            </div>
            
            <button type="submit" class="btn" name="action"><?= __('Create Profile')?></button>
        </form>
    </div>
</body>
</html>
