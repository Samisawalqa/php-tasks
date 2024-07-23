<!DOCTYPE html>
<html>
<head>
    <title>Project and Script Name</title>
</head>
<body>
    <?php
    $scriptName = basename($_SERVER['PHP_SELF']);

    $projectName = basename(dirname($_SERVER['PHP_SELF']));

    echo "<p><strong>Project Name:</strong> $projectName</p>";
    echo "<p><strong>Script Name:</strong> $scriptName</p>";
    ?>
</body>
</html>
