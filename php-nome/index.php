<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
     ?>
  </head>
  <body>
    <!-- passare come argomenti in GET nome e cognome; e salutare l'interlocutore -->
    <h1><?php
    echo "Ciao " . $nome . " " . $cognome;
     ?></h1>

  </body>
</html>
