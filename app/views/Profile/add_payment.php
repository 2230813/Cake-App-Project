<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payment Information | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/profile.css">
</head>
<body>
    <h2><?= __('Add Payment Information')?></h2>
    <form method="post" action="/Profile/add_payment">
        <label for="name"><?= __('Card Holder Name:')?></label>
        <input type="text" id="name" placeholder="Name"  name="name" required>
        <br>
        <label for="card_number"><?= __('Card Number:')?></label>
        <input type="text" id="card_number" placeholder="•••• •••• •••• 1234" name="card_number" required>
        <br>
        <label for="expire_date"><?= __('Expiry Date:')?></label>
        <input type="text" id="expire_date" placeholder="YYYY-MM-DD" name="expire_date" required>
        <br>
        <button type="submit" href="/Profile/index" ><?= __('Add Payment')?></button>
    </form>
    <a href="/Profile/index" class="add-to-cart-btn"><?= __('Cancel')?></a>
</body>
</html>
