<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function($year){
    $age = date("Y") - $year;
    return "<h5>Você tem {$age} anos!</h5>";
};

echo $myAge(1995);

$priceBrl = function($price){
    return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa R$ {$priceBrl(5000)}. Vamos fechar?</p>";

$myCart = [];
$myCart['totalPrice'] = 0;
$carAdd = function($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart['totalPrice'] += $myCart[$item];
};

$carAdd("HTML5", 1, 497);
$carAdd("JS", 1, 497);

var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 100;

function showDates($days)
{
 $saveDate = [];
 for ($day = 1; $day < $days; $day++){
     $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
 }
 return $saveDate;
}

echo "<div style='text-aling: center'>";
foreach (showDates(0) as $date) {
    echo "<small class='tag'>{$date}</small>". PHP_EOL;
}
echo "</div>";

function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++){
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-aling: center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>". PHP_EOL;
}
echo "</div>";
