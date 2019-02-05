<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black Jack</title>
</head>
<body>
    <form action="drawtwo.php" method="get">
        <input type="submit" value="Draw 2 Cards">
    </form>
</body>
</html>