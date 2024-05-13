<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History | Cake Shop</title>
    <link rel="stylesheet" href="\css\base.css">
    <link rel="stylesheet" href="\css\profile.css">
    <link rel="stylesheet" href="\css\product.css">
</head>
<body>
<h1>Orders </h1>
    <div class="container product-details">
        <h2> Are you sure you want to cancel Order #<?= $data->order_id ?></h2>
        <form method='post' action='/Order/delete/<?= $data->order_id ?>'>
                <div class="form-group">
            <input type="submit" name="action" value="Delete Post"/>
          </div>
        </form>
    </div>
</body>
</html>