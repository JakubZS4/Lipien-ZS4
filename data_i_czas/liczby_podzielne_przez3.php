<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablice na lekcji</title>
</head>

<body>

    <?php                                   
        $liczby = array();             /* Liczby randomowe i wypisanie ilości tych podzielnych przez 3 */

        for($i = 0; $i < 100; $i++)
        {
            $liczby[$i] = rand(1, 50);
        }


        echo implode (', ', $liczby );

        echo '<h3> Liczby podzielne przez 3: </h3>';

        foreach($liczby as $liczba)
        {
            if($liczba % 3 == 0)
            {
                echo $liczba . '';
                $ile++;
            }
        }

        echo '<h4>Ilość liczb podzielnych przez trzy: ' .$ile . '</h4>';
    ?>





    
</body>
</html>
