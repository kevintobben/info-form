<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<form  action="index.php" method="POST">
    <label>First name</label>
    <input type="text" name="firstName">

    <label>Last name</label>
    <input type="text" name="lastName">

    <label>Initials</label>
    <input type="text" name="initials">

    <label>Email address</label>
    <input type="text" name="email">

    <label>Postal Code</label>
    <input type="text" name="postalCode">

    <label>House number</label>
    <input type="text" name="houseNumber">

    <label>Address</label>
    <input type="text" name="address">

    <label>Country</label>
    <select type="text" name="country">
        <option value=""></option>
        <option value="DE">Germany</option>
        <option value="NL">Netherlands</option>
    </select>

    <label>Phone number</label>
    <input type="text" name="phoneNumber"  pattern="^[0-9]{9}|[0-9]{10}|[0-9]{11}$">


    <label>Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>