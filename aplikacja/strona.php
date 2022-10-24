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
    <link rel="stylesheet" href="style.css">
    
</head>


<body>

        <div class="container">
			<nav class="menu">
            <ul>
				<li><a href="./index.html">Strona główna</a></li> 
                <li><a href="podstrona_Playstation.html">Playstation</a></li>
                <li><a href="podstrona_Microsoft.html">Microsoft</a></li>
                <li><a href="podstrona_Nintendo.html">Nintendo</a></li>
                <li><a href="podstrona_inne_konsole.html">Inne konsole</a></li>          
            </ul>
		    </nav>
        

        <h1>Witamy w magazynie części komputerowych</h1>
            <h2>Jesteś zalogowany jako :
                 <?php echo $_SESSION['login_uzytkownika']; ?>
            </h2>
         <a href="wyloguj.php">Wyloguj się</a>



</body>
</html>