<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- passo come argomenti in GET nome e cognome -->
    <?php
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
     ?>
  </head>
  <body>
    <!-- saluto l'interlocutore -->
    <!-- esempio url : http://localhost:81/?nome=mioNome&cognome=mioCognome -->
    <h1><?php
    echo "Ciao " . $nome . " " . $cognome;
     ?></h1>

  </body>
</html>
