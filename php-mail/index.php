<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    $mail = $_GET['mail'];
    $mailPunto = strpos($mail, '.');
    $mailChiocciola = strpos($mail, '@');
    ?>
  </head>
  <body>
    <!-- passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->
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
