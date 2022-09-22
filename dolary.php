<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Próba</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="liczba1" placeholder="podaj ilość złotówek">
        <input type="submit" value="Oblicz">
    </form>

    <?php

        function mnozenie($a)
        {
            $wynik = $a * 4.55;
            echo $wynik;
        }


        if(isset($_POST['liczba1']))
        {
        $l1 = $_POST['liczba1'];
        
        
        
       // echo '<br><br>';
        echo 'Wywołannie funkcji roznica: ';
        mnozenie($l1);
        }
    ?>

    
</body>


</html>
