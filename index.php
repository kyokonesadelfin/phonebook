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
        $usersObj = new UsersView();
        $usersObj->showUser("Daniel");

        // $usersObj2 = new UsersContr();
        // $usersObj2->createUser("Jane", "Doe", "2534564") 
    ?>
</body>
</html>