<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require  __DIR__."/functions.php";

var_dump(functionName("Nome 1","Nome 2","Nome 3"));
var_dump(functionName("Nome 4","Nome 5","Nome 6"));
var_dump(optionArgs("Nome 4"));
var_dump(optionArgs("Nome 4","Nome 5"));
var_dump(optionArgs("Nome 4","Nome 5","Nome 6"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 86;
$height = 1.83;

echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(100);
$pay = payTotal(100);

echo $pay;


/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Nome 1","Nome 2", "Nome 3","Nome 4"));
