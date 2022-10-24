<?php
    session_start();

    //zabezpieczenie
    if(!isset($_SESSION['czy_zalogowany']) || $_SESSION
        ['czy_zalogowany'] == false)
        {
            header('Location: loguj.php');
            exit;
        }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazyn części</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <h1>Witamy w magazynie części komputerowych</h1>
    <h3>Jesteś zalogowany jako: <?php echo $_SESSION['login_uzytkownika']; ?>
    </h3>
    <a href="wyloguj.php">Wyloguj się</a>

    


</body>
</html>