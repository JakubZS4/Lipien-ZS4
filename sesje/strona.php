<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesje</title>
</head>
<body>

    <h1>Witaj w serwisie promującym język PHP.</h1>
    <h3>Jesteś zalogowany jako: <?php echo $_SESSION['login_uzytkownika']; ?>
    </h3>
    <a href="wyloguj.php">Wyloguj się</a>

</body>
</html>