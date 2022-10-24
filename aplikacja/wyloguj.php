<?php
    session_start();
    unset($_SESSION['login_uzytkownika']);
    session_destroy();

    echo '<h3>Operacja wylogowania przebiegła pomyślnie. </h3>';
    echo '<a href="index.php">Zaloguj się ponownie</a>';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazyn części </title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    
</body>
</html>