<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'nav.php';
      define('START', 'yathzee');
      define('SPELEN', false);
      define('TIJD', 99);

      switch (START) {
        case 'schaken':
          echo "Je gaat schaken. <br>";
          if (SPELEN == true) {
            if (TIJD == 2) {
              echo "Je wilt schaken want je vind zwart en wit leuk.<br>";
            }
            elseif (TIJD < 2 Or TIJD > 2) {
              echo "Je wilt schaken want je denkt slimmer dan mij te zijn.<br>";
            }
          }
          else {
            if (TIJD == -1) {
              echo "Je wilt echt niet schaken.<br>";
            }
            else {
              echo "Je wilt gewoon niet schaken.<br>";
            }
          }
          break;
        case 'monopoly':
          echo "Je gaat monopoly spelen.<br>";
          if (SPELEN == true) {
            if (TIJD == 1) {
              echo "Je wilt momopoly spelen want je hebt aan 1 spelletje genoeg.<br>";
            }
            elseif (TIJD > 1) {
              echo "Je wilt monopoly spelen want je houd er van om iedereen blut te maken.<br>";
            }
          }
          else {
            if (TIJD == 2 Or TIJD > 120) {
              echo "je wilt momopoly niet spelen want je hebt geen zin in een spel van 2 uur.<br>";
            }
            else {
              echo "Je  wilt momopolyniet spelen want je houd niet van hotels.<br>";
            }
          }
          break;
        case 'yathzee':
          echo "Je gaat yathzee spelen.<br>";
          if (SPELEN == true) {
            if (TIJD > 15 And TIJD < 30) {
              echo "Je wilt yathzee spelen want jehetb tussen de 15 en 30 minuten tijd.<br>";
            }
            elseif (TIJD < 15 Or TIJD > 30) {
              echo "Je wilt yathzee spelen want dat vind je gewoon leuk.<br>";
            }
          }
          else {
            if (TIJD > 100) {
              echo "Je wilt geen yathzee spelen want je wilt meer dan 100x met een dobbelseen gooien.<br>";
            }
            elseif (TIJD <= 100) {
              echo "Je wilt geen yathzee spelen want je wilt minder dan 100 punten halen.<br>";
            }
          }
          break;
      }
      include 'footer.php';
    ?>
  </body>
</html>
