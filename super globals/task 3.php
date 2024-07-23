<?php

$result;

if (isset($_POST['addition'])){
    $result = $_POST['firstNumber'] + $_POST['secondNumber'];
}
if (isset($_POST['subtract'])){
    $result = $_POST['firstNumber'] - $_POST['secondNumber'];
}
if (isset($_POST['multiply'])){
    $result = $_POST['firstNumber'] * $_POST['secondNumber'];
}
if (isset($_POST['division'])){
    $result = $_POST['firstNumber'] / $_POST['secondNumber'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="first number" name="firstNumber">
        <input type="text" placeholder="second number" name="secondNumber">
        <br>
        <input type="submit" value="addition" name="addition">
        <input type="submit" value="subtract" name="subtract">
        <input type="submit" value="multiply" name="multiply">
        <input type="submit" value="division" name="division">
    </form>
    <?php if (isset($result)) echo $result;  ?>
</body>
</html>