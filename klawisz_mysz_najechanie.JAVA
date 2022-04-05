<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style> 

        div {
           background-color: black;
           color: white;
        }

        .zmiana{
            background-color: rebeccapurple;
            color: gold;
        }



    </style>
    

    

    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </div>
    



    <script>

        function getRandomInt(min, max) {
         min = Math.ceil(min);
          max = Math.floor(max);
         return Math.floor(Math.random() * (max - min)) + min;
        }

        //pobieramy diva
        const divZeStrony = document.querySelector('div');
        const napisy = ['Rysio ma tatuaż', 'Mucha leci samolotem', 'Sęku w klatce', 'Sowa porywa Szczygła'];

        //przypisujemy obsługę zdarzenia najechania kursorem myszy na diva
        divZeStrony.addEventListener('mouseover', function(){
            //divZeStrony.style.color = 'yellow';

            //dodajemy klasę zmiana do diva
            divZeStrony.classList.add('zmiana');

        });

        //przypisujemy obsługę zdarzenia zjechania kursorem myszy na diva
        divZeStrony.addEventListener('mouseout', function (){
            //divZeStrony.style.color = 'white';

            //usuwamy klase zmiana z diva
            divZeStrony.classList.remove('zmiana');
            
        });

        //przypisujemy obsługe zdarzenia klikania w diva
        divZeStrony.addEventListener('click', function(){
            let los = getRandomInt(0, 3);
            //podmieniamy treść diva na nową 
            divZeStrony.textContent = napisy[los];

        });
    </script>
    
</body>
</html>     
