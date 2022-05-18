<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warunki</title>
</head>
<body>
    <form action="">
        <input type="text" name="pole" />
        <button type="submit">Pokaż</button> 
    </form>

    <div class="wynik"></div>

        <script>
        
            alert('WITAMY w programie JS');
            const formularz = document.querySelector('form');

            const wynik = document.querySelector('.wynik');

                formularz.addEventListener('submit', (e) => {
                    e.preventDefault();

                    const poleWFormularzu = document.querySelector('input[name="pole"]').value

                    if(poleWFormularzu % 2 == 0) {
                        wynik.textContent = poleWFormularzu;
                        wynik.textContent = 'Liczba jest parzysta';
                    } else {
                        wynik.textContent = poleWFormularzu;
                        wynik.textContent = "Liczba jest nieparzysta";
                    }
                    
            });           

        </script>
</body>
</html>
