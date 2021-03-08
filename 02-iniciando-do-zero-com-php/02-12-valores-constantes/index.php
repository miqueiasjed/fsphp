<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "Full Stack PHP");
const AUTHOR = "Miquéias";

$formation = true;
if($formation){
    define("COURSE_TYPE", "FORMAÇÃO");
}else{
    define("COURSE_TYPE", "FORMAÇÃO");
    //Não posso usar o const aqui dentro pois não reconhece
}
echo "<p>COURSE COURSE_TYPE AUTHOR</p>";
echo "<p>{COURSE} {COURSE_TYPE} {AUTHOR}</p>";
echo "<p>", COURSE_TYPE, " ", COURSE, " de ", AUTHOR, "</p>";
echo "<p>". COURSE_TYPE. " ". COURSE. " de ". AUTHOR. "</p>";


class Config
{
    const USER = "root";
    const HOST = "localhost";
}

echo "<p>", Config::HOST, "</p>";
echo "<p>", Config::USER, "</p>";

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);


function fullStackPhp()
{
    //Exibe qual função está sendo usada.
    return __FUNCTION__;
}

var_dump(fullStackPhp());

trait MyTrait
{
    public $traitName = __TRAIT__;
}

class FsPHP
{
    use MyTrait;
    public $className = __CLASS__;
}

var_dump(new FsPHP());

require __DIR__ . "/MyClass.php";

var_dump(new \Source\MyClass());
