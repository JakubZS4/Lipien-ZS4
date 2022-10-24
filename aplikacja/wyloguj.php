<?php
    session_start();
    unset($_SESSION['login_uzytkownika']);
    session_destroy();

    echo '<h3>Operacja wylogowania przebiegła pomyślnie. </h3>';
    echo '<a href="index.php">Zaloguj się ponownie</a>';
?>