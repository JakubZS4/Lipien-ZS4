<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis</title>
</head>

<body>
    <h2>Witaj w naszym serwisie</h2>
    <p>jesteś zalogowany jako: 
        <span>
            <?php
                if(isset($_SESSION['user']))
                {
                    echo $_SESSION['user'];
                }
            ?>
        </span>
    </p>
    <p><a href=""> Wyloguj się </a></p>
</body>

</html>
