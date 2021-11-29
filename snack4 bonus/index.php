<?php
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.


$paragrafo = "

Anybody who programs in PHP can be a contributing member of the community that develops and deploys it; the task of deploying PHP, documentation and associated websites is a never ending one. With every release, or release candidate comes a wave of work, which takes a lot of organization and co-ordination.
    Running test suites in RC and release distributions of PHP.
    Help finding and diagnosing failed tests, see the phpt documentation.
    Filing and resolving bug reports at bugs.php.net.
    Help maintain and or translate documentation files at the doc-* repositories on github. Check out our guide for contributors.

Development of the PHP source ¶.

Someone hoping to become involved in the maintenance and development of the source should be experienced in all of the areas mentioned above, as this creates a strong team; everyone knows how every other part of the project works.

You will also need experience in C programming as PHP is written entirely in C.
Useful links for developers ¶.

    lxr - an online interface to the PHP source, providing search facilities useful for programmers and researchers.
    The RFC process - the process by which developers can suggest and discuss new ideas with the community.
    Developer Setup Help - some helpful information regarding setting up a development environment for PHP.
    Mailing List - list of general and internal mailing lists used by PHP.
";

$listParagraphs = explode(".", $paragrafo);

var_dump($listParagraphs);

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