<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Działanie na plikach</title>
</head>

<body>
    <form action = "" method="POST">
        <textarea name = "opinia"></textarea>
        <input type = "submit" value="Zapisz opinię">
    </form>

    <?php
       if(isset($_POST['opinia']));
       {
           $opinia = $_POST['opinia'].PHP_EOL;
           $plikOpinie = '.opinie.txt';
           file_put_contents($plikOpinie, $opinia, FILE_APPEND | LOCK_EX);

          // echo file_get_get_contents($plikOpinie);
          $zawartoscPliku = explode(PHP_EOL, file_get_contents
          ($plikOpinie));

          foreach($zawartoscPliku as $p)
          {
              echo "<p>$p</p>";
          }

       }
    ?>


    
</body>
</html>
