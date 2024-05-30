<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="activity5.css">
</head>

<body>
    <h1>Registration Form</h1>
    <form action="activity5-preview.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name"><br>
        <label for="username">Username:</label>
        <input type="text" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" name="password"><br>
        <label for="address">Address:</label>
        <input type="text" name="address"><br>


        <label for="Country">Country:</label>
        <select id="country" name="country">
            <option value="">(Please select a country)</option>
            <option value="Germany">Germany</option>
            <option value="Turkey">Turkey</option>
            <option value="England">England</option>
            <option value="French">French</option>
        </select><br>

        <label for="zipcode">ZIP Code:</label>
        <input type="text" name="zipcode"><br>
        <label for="email">Email:</label>
        <input type="text" name="email"><br>

        <label for="sex">Sex:</label>
        <input type="radio" name="sex" value="male"> Male
        <input type="radio" name="sex" value="female"> Female<br>

        <label for="language">Language:</label>
        English <input type="checkbox" id="english" name="language[]" value="English">
        French <input type="checkbox" id="french" name="language[]" value="French">
        German <input type="checkbox" id="german" name="language[]" value="German"><br>

        <label for="about">About:</label>
        <textarea name="about" rows="5" cols="25">
      </textarea>
        <br>

        <label for="submit"></label>
        <input type="submit" value="Submit">
    </form>
</body>

</html>