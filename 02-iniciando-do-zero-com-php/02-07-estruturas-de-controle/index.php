<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;

if($test){
    var_dump(true);
}else{
    var_dump(false);
}

$age = 19;

if($age < 20){
    var_dump("Bandas coloridas");
}elseif($age > 20 && $age < 50){
    var_dump("Ótimas bandas");
}else{
    var_dump("Rock and Roll Raiz");
}

$hour = 9;

if($hour >= 5 && $hour < 23){
    if($hour < 7){
        var_dump("Banda 1");
    }else{
        var_dump("Banda 2");
    }
}else{
    var_dump("ZzzzzZZZZ");
}



/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if(isset($rock)){
    var_dump("Rock and Roll");
}else{
    var_dump("Die");
}

$rockAndRoll = "Banda 1";

if(!empty($rockAndRoll)){
    var_dump("Rock existe e toca {$rockAndRoll}");
}else{
    var_dump("Não existe ou não está tocando");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "asd";

switch ($payment){
    case "billet_printed":
        var_dump("Boleto Impresso");
        break;
    case "canceled":
        var_dump("Boleto Cancelado");
        break;
    case "past_due":
    case "pending":
        var_dump("Aguardando Pagamento");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento Aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento!");
        break;
}


