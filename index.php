<?php
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['color'] = $_POST['userColor'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="getColor.php" method="post">
    <label for="id-color">Choose ur color: </label>
    <select name="userColor" id="id-color">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value="yellow">yellow</option>
        <option value="brown">brown</option>
    </select>
    <input type="submit" name="submit">
</form>
</body>
</html>