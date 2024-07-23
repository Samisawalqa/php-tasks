<?php
if (isset($_POST['go'])){
    echo 'jlksdfj';
   header('Location: '.$_POST['url']);
};

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
        <label >URL</label>
        <input type="text" placeholder="ENTER URL" name='url'>
        <input type='submit' name="go">
    </form>
</body>
</html>