<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="x">
    <input type="submit" value="Oblicz">
</form>


<?php 
    if(isset($_POST['x'])) 
    {
        $x = $_POST['x'];
        $suma = 0;
        $i = 0;

        while($i<50){
            if($x%2 == 1){
                $suma = $suma + $x;
                $x = $x+2;
                $i = $i+1;

            }
            else{
                $x=$x+1;
            }
        }
        echo'suma kolejnych 50 liczb nieparzystych wynosi: ' . $suma;

    }
?>
</body>
</html>
