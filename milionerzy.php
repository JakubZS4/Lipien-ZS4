<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice 1</title>
    
</head>
<body>
    <?php
$ile_pytan = 20; //z ilu pytan losujemy?
$ile_wylosowac = 5; //ile pytan wylosowac?
$ile_juz_wylosowano=0; //zmienna pomocnicza

for ($i=1; $i<=$ile_wylosowac; $i++)
 {
 	do
 	{
 		$liczba=rand(1,$ile_pytan); //losowanie w PHP
 		$losowanie_ok=true;

 		for ($j=1; $j<=$ile_juz_wylosowano; $j++)
 		{
 			//czy liczba nie zostala juz wczesniej wylosowana?
 			if ($liczba==$wylosowane[$j]) $losowanie_ok=false;
 		}

 		if ($losowanie_ok==true)
 		{
 			//mamy unikatowa liczbe, zapiszmy ja do tablicy
 			$ile_juz_wylosowano++;
 			$wylosowane[$ile_juz_wylosowano]=$liczba;
 		}

 	} while($losowanie_ok!=true);
 }

 // ZOBACZ REZULTATY LOSOWANIA
 echo "Wylosowane numery: ";
 for ($i=1; $i<=$ile_wylosowac; $i++)
 {
 	echo $wylosowane[$i]." ";
 }
 ?>
</body>
</html>
