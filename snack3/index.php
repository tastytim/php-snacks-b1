<?php
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$numbers = [];

do {
    $randNumber = rand(0 , 99);
    if(!in_array($randNumber, $numbers)){
        array_push($numbers, $randNumber);
    }
} while (count($numbers) < 15);

var_dump($numbers);

?>


<!DOCTYPE html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
<title>PHP</title>
    </head>
    <body>
        <header></header>
        <main>
       
<?php
        
?>

        </main>
        <footer></footer>
    </body>
</html>