<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- passo come argomenti in GET mail -->
    <?php
    $mail = $_GET['mail'];
    $mailPunto = strpos($mail, '.');
    $mailChiocciola = strpos($mail, '@');
    ?>
  </head>
  <body>
    <!-- stampo un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->
    <!-- esempio url : http://localhost:81/?mail=mia@mail.it -->
    <div class="">
      <?php
        if($mailPunto && $mailChiocciola){
          echo 'OK';
        } else {
          echo 'KO';
        }
      ?>
    </div>

  </body>
</html>
