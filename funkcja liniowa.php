<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>


<body>
    <form action="" method="post">
        <input type="number" name="liczba1" placeholder="podaj liczbę a">
        <input type="number" name="liczba2" placeholder="podaj liczbę b">
        <input type="submit" value="Oblicz">
    </form>

    <?php

        function suma($a, $b)
        {
            return $a*3+$b;
        }

       
        if(isset($_POST['liczba1']))
        {
        $l1 = $_POST['liczba1'];
        $l2 = $_POST['liczba2'];

        echo '<br><br>';
        
        echo 'Wartość funkcji liniowej y wynosi: ';
        echo suma($l1, $l2);
        
        }
    ?>

    
</body>


</html>
