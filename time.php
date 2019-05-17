<?php
    date_default_timezone_set("Europe/Amsterdam");

    $hour = date("H");
    $minute = date("i");

    $type = "";
    $background = "";

    if ($hour >= 6 && $hour <= 12) {
      $type = "morgen";
      $background = "img/morning.png";
    }
    if ($hour >= 12 && $hour <= 18) {
      $type = "middag";
      $background = "img/afternoon.png";
    }
    if ($hour >= 18 && $hour <= 24) {
      $type = "avond";
      $background = "img/evening.png";
    }
    if ($hour >= 0 && $hour <= 6) {
      $type = "nacht";
      $background = "img/night.png";
    }

?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php include 'nav.php'; ?>
    <div class="box">
      <div class="container">
        <h1><?php echo "Goede " . $type . " !"; ?></h1>
        <h1><?php echo "Het is nu " . $hour . ":" . $minute; ?></h1>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
<style>
  .box{
    background-image:url('<?php echo $background ?>');
  }
  *{
    margin: 0;
    padding: 0;
  }
  footer{
    top: 100%;
  }
  .box{
    width: 100%;
    height: 100%;
    position: absolute;
  }
  .container {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
  }
  h1{
    text-align: center;
    position: relative;
    font-size: 60px;
    color: white;
  }
</style>
