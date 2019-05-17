
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'nav.php';

      echo "<h1>Hello World!</h1>";

      define('myString', 'Hello World! <br>');
      echo myString;

      $newString = "learning php";
      $newString = "Hello World! <br>";
      echo $newString;

      $kaas = "<h1>Hello ";
      $kaas2 = "World!</h1>";

      echo $kaas . $kaas2;

      $array = ["Hello ", "World!"];

      echo $array[0] . $array[1];
    include 'footer.php';
    ?>
  </body>
</html>
