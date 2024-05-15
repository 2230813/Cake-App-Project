<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
</head>
<body>
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
            <div class="form-group">
                <label for="language"><?= __('Language Preference:')?></label> <br>
                <input type="radio" id="language" name="language" value="EN" required> <?= __('English')?><br>
                <input type="radio" id="" name="language" value="FR" required> <?= __('French')?>
            </div>
            
            <button type="submit" class="btn" name="action"><?= __('Create Profile')?></button>
        </form>
    </div>
</body>
</html>
