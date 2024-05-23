<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=__('Add Payment Information')?> | <?=__('Cake Shop')?></title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
    <link rel="stylesheet" href="\css\product.css">
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
<div class="nav-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="" class="nav-logo-link"><?=__('Cake Shop')?></a>
            </div>
            <div class="nav-links">
                <a href="/Cart/index"><?=__('View Cart')?></a>
                <a href="/Cake/catalog"><?=__('View Catalog')?></a>
                <a href="/Profile/index"><?=__('View Profile')?></a>
                <a href="/Profile/add_payment?lang=en">EN</a>
                <a href="/Profile/add_payment?lang=fr">FR</a>
                 <a href="/User/login"><?=__('Login')?></a>
                <a href="/User/logout"><?=__('Logout')?></a>
            </div>
        </div>
    </div>
    <div class="container">
    <h2><?=__('Add Payment Information')?></h2>
    <form method="post" action="/Profile/add_payment">
        <label for="name"><?=__('Card Holder Name:')?></label>
        <input type="text" id="name" placeholder="Name"  name="name" required>
        <br>
        <label for="card_number"><?=__('Card Number:')?></label>
        <input type="text" id="card_number" placeholder="•••• •••• •••• 1234" name="card_number" required>
        <br>
        <label for="expire_date"><?=__('Expiry Date:')?></label>
        <input type="text" id="expire_date" placeholder="YYYY-MM-DD" name="expire_date" required>
        <br>
        <button type="submit" href="/Profile/index" ><?=__('Add Payment')?></button>
    </form>
    <a href="/Profile/index" class="add-to-cart-btn"><?=__('Cancel')?></a>
    </div>
</body>
</html>
