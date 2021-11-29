<?php



$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];


//che name sia più lungo di 3 caratteri
$hasLengthThree = strlen($name) > 3;
//che mail contenga un punto e una chiocciola
$hasDot = strchr($email , "@");
$hasAt = strchr($email , ".");
// $hasDotAndAt = preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9]+.[a-zA-Z]+/", $email);
//che age sia un numero
$isNumber = is_numeric($age);

if($hasLengthThree && $hasDot && $hasAt && $isNumber){
    echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }

?>


<!DOCTYPE html>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
<title>PHP</title>
    </head>
    <body>
        <header></header>
        <main>
            
        </main>
        <footer></footer>
    </body>
</html>