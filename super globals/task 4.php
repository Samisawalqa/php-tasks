<?php
session_start();
function tasksFun($arr){
    foreach($arr as $ind => $value){
        echo  $value . "<form style='display:inline' method='POST'><input type='hidden' name='index' value='$ind'><input type='submit' value='delete' name='delete'></form><br>";
    }
}

if (isset($_POST['add'])) $_SESSION["tasks"][] = $_POST['newTask'];

if (isset($_POST['delete'])) unset($_SESSION["tasks"][$_POST['index']]);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" placeholder="new task"  name="newTask"><input type="submit" value="add" name="add"><br>
</form>
    <?php if(!empty($_SESSION["tasks"])) tasksFun($_SESSION["tasks"]) ?>
</body>
</html>