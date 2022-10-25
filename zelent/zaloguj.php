<?php

session_start();  

    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header('Location: index.php');
        exit();
    }

    require_once "polaczenie.php";  //require wymaga pliku bez niego nic dalej nie wyjdzie 

    $polacz = @new mysqli($host, $db_user, $db_password, $db_name);  //@ nie wyświetli się błąd

    if ($polacz ->  connect_errno!=0)
    {
        echo "ERROR: " .$polacz -> connect_errno;  // błąd połączenie
    }
    else 
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
    
        $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";    //wybór uzytkownika i hasla

        if ($rezultat = @$polacz -> query($sql))
        {
            $ile_userow = $rezultat->num_rows;
            if($ile_userow>0)
            {

                $_SESSION['zalogowany'] = true;
                

                $wiersz = $rezultat->fetch_assoc();    //tablica asocjacyjna 
                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['usernumber'] = $wiersz['usernumber'];     // TUTAJ WPISUJEMYU INNE RZECZY JAKIE CHCEMY WYCIĄGNĄĆ Z BAZY

                unset($_SESSION['blad']);


                $rezultat->close();

                header('Location: strona.php');
                
            }else {

                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło </span>';
                header('Location: index.php');

            }
        }

    $polacz -> close();   //zamyaknie połączenie z bazą danych

    }
?>