<?php

    session_start();

    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: strona.php');
        exit();
    }

?>



<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Magazyn części z zelentem</title>

</head>


<body>

        Siemano witam w mojej kuchni

    <form action="zaloguj.php" method="POST">
    <input type="text" name="login" placeholder="wpisz login">
    <input type="password" name="haslo" placeholder="wpisz hasło">
    <input type="submit" value="zaloguj się"> 
    </form>   
 
    <?php
        if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
    ?>




    
</body>
</html>
