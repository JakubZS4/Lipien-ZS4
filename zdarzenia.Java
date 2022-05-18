<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ZD4</title>
</head>
<body>    
    <div>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis molestie arcu. Proin a laoreet neque, sed mollis dui. Etiam a nulla et massa sollicitudin luctus. Curabitur nibh nibh, finibus luctus mollis non, consectetur a sapien. Proin viverra nunc a volutpat dapibus. Aenean euismod sem velit, eu rhoncus enim sollicitudin quis. Nunc pretium, erat sit amet tempus convallis, ligula turpis ullamcorper enim, et consequat nibh erat vel libero.
        Donec interdum vitae lectus eget tempus. Praesent rutrum maximus mauris. Proin ante ipsum, lacinia nec scelerisque sit amet, venenatis vel elit. Donec tincidunt, sapien sed porttitor rutrum, sapien dui consectetur purus, ac congue dui felis id massa. Sed facilisis vitae nulla in porta. Morbi a ante nisl. Donec blandit augue augue, in tincidunt tellus sodales a. Nullam blandit malesuada sapien non auctor. Aliquam volutpat, diam ac vestibulum commodo, ante lectus consectetur purus, ac porttitor nisi dui eu tellus. In ipsum nunc, hendrerit non suscipit a, auctor a enim.
        Quisque sollicitudin risus venenatis malesuada interdum. Aenean ut nunc diam. Proin non magna libero. Quisque eu congue orci.
    </div>
    
    
    <script>
        function getRandomIntInclusive(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
        }       
        
        // Bierzemy diva
        const div = document.querySelector('div');
        const colors = ['red', 'green', 'orange', 'gray', 'white']
        
        // Przypisujemy zdarzenie klikacz
        div.addEventListener('click', (event)=>{
        
        // Zmiana koloru czcionki
        let los = getRandomIntInclusive(0,4);
        div.style.color = colors[los];
        });
        
        // Zdarzenia
        div.addEventListener('mouseover', (event)=>{
            div.textContent = "Bardzo dobra robota";
        });
        
        div.addEventListener('mouseout', (event)=>{
            div.textContent = "A elegancko";
        });

    </script>   
</body>
</html>
