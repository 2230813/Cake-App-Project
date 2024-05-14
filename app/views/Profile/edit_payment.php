<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Payment Information | Cake Shop</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/profile.css">
</head>
<body>
    <h2>Edit Payment Information</h2>
    <form method="post" action="/Profile/edit_payment">
        <label for="name">Card Holder Name:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($payment->name, ENT_QUOTES, 'UTF-8') ?>" required>
        <br>
        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" value="<?= htmlspecialchars($payment->card_number, ENT_QUOTES, 'UTF-8') ?>" required>
        <br>
        <label for="expire_date">Expiry Date:</label>
        <input type="text" id="expire_date" name="expire_date" value="<?= htmlspecialchars($payment->expire_date, ENT_QUOTES, 'UTF-8') ?>" required>
        <br>
        <button type="submit">Update Payment</button>
    </form>
    <a href="/Profile/index" class="add-to-cart-btn">Cancel</a>
</body>
</html>
