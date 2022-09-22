<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>


<body>
    Dodawanie:
    <br></br>

    <form action="" method="post">
        <input type="number" name="liczba1" placeholder="podaj liczbę">
        <input type="number" name="liczba2" placeholder="podaj liczbę">
        <input type="submit" value="Oblicz">
    </form>

        <?php

        function dodawanie($a, $b)
        {
            return $a+$b;
        }

        if(isset($_POST['liczba1']))
        {
        $l1 = $_POST['liczba1'];
        $l2 = $_POST['liczba2'];
        
        echo 'Wywołanie funkcji dodawanie =  ';
        echo dodawanie($l1, $l2);
        echo '<br><br>';
        
        }
    ?>
    
    Odejmowanie:
    <br></br>

    <form action="" method="post">
        <input type="number" name="liczba3" placeholder="podaj liczbę">
        <input type="number" name="liczba4" placeholder="podaj liczbę">
        <input type="submit" value="Oblicz">
    </form>

    <?php

        function odejmowanie($c, $d)
        {
            return $c-$d;
        }

        if(isset($_POST['liczba3']))
        {
        $l3 = $_POST['liczba3'];
        $l4 = $_POST['liczba4'];
        
        echo 'Wywołanie funkcji odejmowanie =  ';
        echo odejmowanie($l3, $l4);
        echo '<br><br>';
        
        }
    ?>
    
    Mnożenie:
    <br></br>

    <form action="" method="post">
        <input type="number" name="liczba5" placeholder="podaj liczbę">
        <input type="number" name="liczba6" placeholder="podaj liczbę">
        <input type="submit" value="Oblicz">
    </form>

        <?php

        function mnozenie($e, $f)
        {
            return $e*$f;
        }

        if(isset($_POST['liczba5']))
        {
        $l5 = $_POST['liczba5'];
        $l6 = $_POST['liczba6'];
        
        echo 'Wywołanie funkcji mnozenie =  ';
        echo mnozenie($l5, $l6);
        echo '<br><br>';
        
        }
    ?>

    Dzielenie: 
    <br></br>

    <form action="" method="post">
        <input type="number" name="liczba7" placeholder="podaj liczbę">
        <input type="number" name="liczba8" placeholder="podaj liczbę">
        <input type="submit" value="Oblicz">
    </form>

    <?php

        function dzielenie($g, $h)
        {
            return $g/$h;
        }

        if(isset($_POST['liczba7']))
        {
        $l7 = $_POST['liczba7'];
        $l8 = $_POST['liczba8'];
        
        echo 'Wywołanie funkcji dzielenie =  ';
        echo dzielenie($l7, $l8);
        echo '<br><br>';
        
        }
    ?>
    

    
</body>


</html>
