<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krt - Jakub Lipień</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="hobby">
        <input type="submit">
    </form>

    <?php
        $server = "localhost";             // połączenie z bazą danych 
        $user = "root";
        $pass = '';
        $database = 'krt1';

        mysqli_report(MYSQLI_REPORT_STRICT);
        $polaczenie = new mysqli($server, $user, $pass, $database);
        $hobby = @$_POST['hobby'];                                                         //  do formularza
        $zapytanie = "SELECT imię, nazwisko FROM portal WHERE hobby = '$hobby'";          // wysyłanie zapytania do bazy danych zeby wyswietlila to o co pytamy
        $wynik = $polaczenie->query($zapytanie);                                   

        while($result = $wynik->fetch_assoc()){
            foreach($result as $rekord){
                echo $rekord . " ";
            }
            echo "<br>";
        }
    ?>
    
        <br>
        </br>
    

       <p>Ziomek z największą liczbą znajomych:</p>
        <?php
        $server = "localhost";
        $user = "root";
        $pass = '';
        $database = 'krt1';

        mysqli_report(MYSQLI_REPORT_STRICT);
        $polaczenie = new mysqli($server, $user, $pass, $database);
        $liczba_znajomych = @$_POST['liczba_znajomych'];
        $zapytanie = "SELECT imię, nazwisko, max(liczba_znajomych) FROM portal ";
        $wynik = $polaczenie->query($zapytanie);

        while($result = $wynik->fetch_assoc()){
            foreach($result as $rekord){
                echo $rekord . " ";
            }
            echo "<br>";
        }
    ?>

        <p>Ilość wszystkich postów dodanych przez użytkownika:</p>
        <?php
        $server = "localhost";
        $user = "root";
        $pass = '';
        $database = 'krt1';

        mysqli_report(MYSQLI_REPORT_STRICT);
        $polaczenie = new mysqli($server, $user, $pass, $database);
        $liczba_postów = @$_POST['liczba_postów'];
        $zapytanie = "SELECT liczba_postów FROM portal WHERE liczba_postów  = liczba_postów ";
        $wynik = $polaczenie->query($zapytanie);

        while($result = $wynik->fetch_assoc()){
            foreach($result as $rekord){
                echo $rekord . " ";
            }
            echo "<br>";
        }
    ?>
    
        <br>
        </br>
    
       

        <p>Ziomek z liczbą znajomych mniejszą od 10:</p>
        <?php
        $server = "localhost";
        $user = "root";
        $pass = '';
        $database = 'krt1';

        mysqli_report(MYSQLI_REPORT_STRICT);
        $polaczenie = new mysqli($server, $user, $pass, $database);
        $liczba_znajomych = @$_POST['liczba_znajomych'];
        $zapytanie = "SELECT imię, nazwisko FROM portal WHERE liczba_znajomych < 10 ";
        $wynik = $polaczenie->query($zapytanie);

        while($result = $wynik->fetch_assoc()){
            foreach($result as $rekord){
                echo $rekord . " ";
            }
            echo "<br>";
        }
    ?>
    
        <br>
        </br>
</body>
</html>
