<?php 
    include 'class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $testObj = new Test();
        echo $testObj->getUsersStmt("Daniel", "Nielsen", "0912282998");
    ?>
</body>
</html>