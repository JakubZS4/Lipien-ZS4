 <?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazyn części</title>
    <link rel="stylesheet" href="style2.css">
</head>


<body>

    <header class="header">
    <h1>Magazyn części komputerowych</h1>
    <div class="obrazek">
    <img src="1.png">
    </div>
    <h2>Zaloguj się</h2>


        <div class="logowanie">
    <form action="" method="POST">
        <input type="text" name="login" placeholder="wpisz login">
        <input type="password" name="haslo" placeholder="wpisz hasło">
        <input type="submit" value="zaloguj się"> 
    </form>   
        </div>
    </header>
    
    <?php
        if(isset($_POST['login']))
            {
                //sprawdzamy czy pola formularza są uzupełnione
                if(empty($_POST['login'])|| empty($_POST['haslo']))
                {
                    //jeśli pola są puste
                    echo 'Uzupełnij dane logowania';
                }
                else 
                {
                    //w przeciwnym razie (logowanie)
                    $_SESSION['login_uzytkownika'] = $_POST['login'];
                    $_SESSION['czy_zalogowany'] = true;
                    header ('location: strona.php');
                }
            }
    ?>

        


</body>
</html>

</body>
</html>