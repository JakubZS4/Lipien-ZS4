<?php
    session_start();
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
    <h1>Zaloguj się do serwisu</h1>
    <form action="" method="POST">
        <input type="text" name="login">
        <input type="password" name="haslo">
        <input type="submit" value="zaloguj się">
    </form>   
    
    <?php
        if(isset($_POST['login']))
            {
                //sprawdzamy czy pola formularza są uzupełnione
                if(empty($_POST['login'])|| empty($_POST['haslo']))
                {
                    //jeśeli pola są puste
                    echo 'Uzupełnij dane logowania';
                }
                else 
                {
                    //w przeciwnym razie 
                    $_SESSION['login_uzytkownika'] = $_POST['login'];
                    header ('location: strona.php');
                }
            }
    ?>
</body>
</html>