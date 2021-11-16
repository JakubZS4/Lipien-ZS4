<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad3</title>
</head>
<body>
    <form action="" method= "post">
        <input type="number" name= "liczba1" />
        <input type="number" name= "liczba2" />
        <input type="submit" value= "Oblicz NWD" />
    </form>
    <div class="wynikNWD"></div>

    <script>
        const form = document.querySelector('form');
        const nwd = document.querySelector('.wynikNWD');
        form.addEventListener('submit' , (e)=>{
            e.preventDefault();
            let liczba1 = document.querySelector('input[name="liczba1"]').value * 1;
            let liczba2 = document.querySelector('input[name="liczba2"]').value * 1;

            

            while(liczba1) != liczba2){
                if(liczba1 > liczba2){
                    liczba1 = liczba1 - liczba2;
                } 
                else {
                    liczba2 = liczba2 - liczba1;
                }
                if(a == b){break;}
            }

            nwd.textContent = "NWD wynosi: " + liczba1;

        });


    </script>

</body>
</html>
