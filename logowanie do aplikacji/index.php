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
    <style>
        body {
            font-family: Arial;
            background-color: gainsboro;
        }

        .form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form input {
            display: block;
            margin: 20px;
        }

       h2 {
           display: flex;
           justify-content: center;
       }

       .error{
           color: red;
            
       }

    </style>
</head>


<body>

    <h2>Witaj! Aby rozpocząć pracę musisz się zalogować</h2>
    <div class="form">
        <form action ="logowanie.php" method="POST">
            <input type="text" name="login" placeholder="wpisz login"/>
            <input type="password" name="haslo" placeholder="wpisz hasło"/>
            <input type="submit" value="Zaloguj się" name="loguj"/>
        </form>

        <?php if(isset($_SESSION['error'])) : ?>

        <div class="error">
            <?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
        <?php endif; ?>

        <p>Nie masz konta? <a href="">Utwórz konto </a></p>

    </div>
</body>



</html>