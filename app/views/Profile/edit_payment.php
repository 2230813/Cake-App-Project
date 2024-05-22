<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?__('Edit Payment Information')?> | <?__('Cake Shop')?></title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background-color: #ff6b81;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }

        button:hover {
            background-color: #ff4a61;
        }

        a.add-to-cart-btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background-color: #ff6b81;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin-top: 10px;
        }

        a.add-to-cart-btn:hover {
            background-color: #ff4a61;
        }
    </style>
</head>
<body>
<div class="container">
    <h2><?__('Edit Payment Information')?></h2>
    <form method="post" action="/Profile/edit_payment">
        <label for="name"><?__('Card Holder Name:')?></label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($payment->name, ENT_QUOTES, 'UTF-8') ?>" required>
        <br>
        <label for="card_number"><?__('Card Number:')?></label>
        <input type="text" id="card_number" name="card_number" value="<?= htmlspecialchars($payment->card_number, ENT_QUOTES, 'UTF-8') ?>" required>
        <br>
        <label for="expire_date"><?__('Expiry Date:')?></label>
        <input type="text" id="expire_date" name="expire_date" value="<?= htmlspecialchars($payment->expire_date, ENT_QUOTES, 'UTF-8') ?>" required>
        <br>
        <button type="submit"><?__('Update Payment')?></button>
    </form>
    <a href="/Profile/index" class="add-to-cart-btn"><?__('Cancel')?></a>
    </div>
</body>
</html>
