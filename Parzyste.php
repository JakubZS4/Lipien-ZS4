<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartkówka</title>
</head>
<body>
    <!-- Grupa A
    Napisz aplikację obliczającą sumę kolejnych liczb parzystych z przedziału podanego przez użytkownika. 
    Początek i koniec przedziału wpisz ręcznie jako zmienne. -->

    <?php 
        $poczatek = 10;
        $koniec = 20;
        $suma = 0;

        for ($i = $poczatek; $i <= $koniec; $i++) {
            if ($i % 2 == 0) {
                $suma += $i;
            }
        }

        echo "Suma parzystych liczb z przedziału od $poczatek do $koniec wynosi: $suma";

    ?>
    
</body>
</html>
