<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle</title>
</head>

<body>
    <div>
    <?php

        //pętla for
        for($i = 1; $i <= 100; $i++)
            {
                if($i % 2==0) echo $i . ' ';
            }
    ?>
    </div>

    <div>
    <?php 
        //petle while
        $j = 1;
        while($j <= 100)
            {
                if($j % 5 ==0) echo $j . ' ';
                $j++;
            }
    ?>

    </div>

    <div>
    <?php
        //pętla do while
        $k = 1;
        do 
        {
            if($k % 3==0) echo $k . ' ';
            $k++;
        }   while($k <=100);
    ?>

    
</body>

</html>