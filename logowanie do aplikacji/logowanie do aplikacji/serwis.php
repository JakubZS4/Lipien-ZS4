<?php
    session_start();

    if(!isset($_SESSION['user']))
    {
        header('Location: index.php');
        exit;
    }
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
    <p><a href="wyloguj.php"> Wyloguj się </a></p>

        <h3>Wybierz operację do wykonania: </h3>

        <form acton="" method="POST">
            <input type="submit" value="Pokaż użytkowników" name="pokaz">
        </form>

        <?php
    if(isset($_POST['pokaz']))
                {
                    require_once('funkcje.php');
                    //jeśli klikniemy przycisk wywoła nam się funkcja wyświetlająca użytkowników
                    show_users(); 
                }
        ?>

</body>

</html>
