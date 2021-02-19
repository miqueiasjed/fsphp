<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Miquéias";
$userLastName = "Mesquita";

echo "<h3>{$userFirstName} {$userLastName}</h3>";

//Usar um padrão ou outro, escolher apenas um!
$user_first_name = $userFirstName;
$user_last_name = $userLastName;

echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "25";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'> tem {$userAge}</span></p>";

$calcA = 10;
$calcB = 20;
$calcB = &$calcA;

$calcB = 30;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 20);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>A call User Function!</h1></article>";
$codeClear = call_user_func('strip_tags', $code);

var_dump($code, $codeClear);

$codeMore = function ($code){
    var_dump($code);
};

$codeMore("#BoraProgramar");


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo!";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 345;
$float = 1.2224;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);