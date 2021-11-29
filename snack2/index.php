<?php
// Creare un array di array. 
$posts = [

    '10/01/2019' => [
        [
            'post' => 'Post 3',
        ],
        [
            'post' => 'Post 3',
        ],
    ],
    '10/02/2019' => [
        [
            'post' => 'Post 3',
        ]
    ],
    '15/05/2019' => [
        [
            'post' => 'Post 3',
        ],
        [
            'post' => 'Post 3',
        ],
        [
            'post' => 'Post 3',
        ]
    ],
];

var_dump($posts);

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
        $dateList = array_keys($posts);
        for($i=0;$i<count($dateList);$i++){
            echo "<h1>$dateList[$i]</h1>";
            

            
        }
?>

        </main>
        <footer></footer>
    </body>
</html>