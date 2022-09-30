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
        $liczby = array();

        for($i = 0; $i < 100; $i++)
        {
            $liczby[$i] = rand(1, 50);
        }

        echo implode (', ', $liczby);
    ?>





    
</body>
</html>
