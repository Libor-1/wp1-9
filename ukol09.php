<?php
 
// hádané číslo od 0 do 100
$guessNumber = 9;
 
define('MAX_NUMBER', 100);
define('MIN_NUMBER', 0);
 
$yourNumber = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <p>Hádej číslo mezi <?= MIN_NUMBER ?> - <?= MAX_NUMBER ?></p>
 
 
    <!--<p>Hádám, že je číslo: <?= $yourNumber ?></p>-->
 
    <?php
/*
Toto je pouze ukázka podmínky, kde se zeptáme jenom jednou, namísto cyklu while, kde se ptáme dokud je podmínka splněna) Porovnejte oba zápisy jazykových konstrukcí - především podmínky)
    if($guessNumber == $yourNumber) { ?>
        <p>Uhádl jsi!</p>
<?php
    } else {  ?>
        <p>Vedle jak ta jedle ! </p>
    <?php }
*/

 
    while ($guessNumber != $yourNumber) { ?>
        <p>Tvé číslo: <?= $yourNumber ?> není správné. Zkus jiné.</p>
    <?php
        $yourNumber = rand(MIN_NUMBER, MAX_NUMBER);
    }
    ?>
 
    <p>Gratulujeme, uhádl jsi číslo guessNumber=<?= $guessNumber ?> svým hádaným číslem <?= $yourNumber ?></p>

    
</body>
</html>