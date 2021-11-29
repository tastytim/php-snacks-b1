<?php



$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];


//che name sia più lungo di 3 caratteri
$hasLengthThree = strlen($name) > 3;


//che mail contenga un punto e una chiocciola
// $hasDot = strchr($email , "@");
// $hasAt = strchr($email , ".");


// https://thisinterestsme.com/php-email-regex/
$hasDotAndAt = preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email);
//che age sia un numero
$isNumber = is_numeric($age);

if($hasLengthThree && $hasDotAndAt && $isNumber){
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