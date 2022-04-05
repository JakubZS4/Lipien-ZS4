<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Współrzędna X kursora myszy:</h2>
    <h2>Współrzędna Y kursora myszy:</h2>
    


    <script>
        //pobieramy wszystkie nagłówki h2
        const naglowki = document.querySelectorAll('h2');

        //obsługa zdarzenia ruchu kursora myszy
        document.addEventListener('mousemove', function (event){
        //współrzędna X kursora myszy - event.clientX
        //współrzędna X kursora myszy - event.clientY

        naglowki[0].textContent = `Współrzędna X kursora myszy: ${event.clientX}`;
        naglowki[1].textContent = `Współrzędna Y kursora myszy: ${event.clientY}`;
        });
       
    </script>
    
</body>
</html>     
