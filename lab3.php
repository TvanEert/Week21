<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<?php
include 'nav.php';
for($i = 1; $i <= 10; $i++)
{
    $antwoord = $i * 6;
    echo($i.' * '."6".' = '.$antwoord."<br>");
}

echo("<br>");

function calculate($num1)
{
    for($i = 1; $i <= 10; $i++)
    {
        $antwoordF = $i * $num1;
        echo($i.' * '.$num1.' = '.$antwoordF."<br>");
    }
}

calculate(6);

echo("<br>");

$array = [3, 5, 8, 12];

foreach($array as $value)
{
    for($i = 1; $i <= 10; $i++)
    {
        $antwoordA = $i * $value;
        echo($i.' * '.$value.' = '.$antwoordA."<br>");
    }
    echo("<br>");
}
include 'footer.php';

?>

</body>

<style>


</style>
</html>
