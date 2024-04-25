<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile | Cake Shop</title>
    <link rel="stylesheet" href="../../../common/css/base.css">
    <link rel="stylesheet" href="../../../common/css/profile.css">
</head>
<body>
    <div class="form-container">
        <h2>Create Profile</h2>
        <form id="createProfileForm" method='post' action=''>
            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" id="name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="language">Language Preference:</label> <br>
                <input type="radio" id="language" name="language" value="EN" required> English<br>
                <input type="radio" id="" name="language" value="FR" required> French
            </div>
            
            <button type="submit" class="btn" name="action">Create Profile</button>
        </form>
    </div>
</body>
</html>
