<?php
    session_start();

    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<p>Witaj ".$_SESSION['user'].'![ <a href="wyloguj.php">Wyloguj się</a>]</p>'; 
        echo "<p><b>Numer pracownika </b>: ".$_SESSION['usernumber'];     //WYŚWIETLENIE DANYCH Z BAZY  -  Z TABEL
    ?>

    
</body>
</html>