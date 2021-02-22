<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrA = [0,1,2,3];

var_dump($arrA);

$arrayIndex = [
    "Nome 1",
    "Nome 2",
    "Nome 3",
];

$arrayIndex[] = "Nome 4";
$arrayIndex[] = "Nome 5";

var_dump($arrayIndex);
/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    'vocal' => 'Cantor',
    'solo_guitar' => "Angus",
    'base_guitar' => 'Malcolm',
    'bass_guitar' => 'Cliff',
];

$arrayAssoc['drums'] = "Phil";
$arrayAssoc['rock_band'] = "BlaBla";

var_dump($arrayAssoc);


/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ['Brian, Mic'];
$angus = ["name" => "Angus", "instruments" => "Guitar"];

$instruments = [
    $brian,
    $angus
];

var_dump($instruments);

var_dump([
    'brian' => $brian,
    'angus' => $angus
]);


/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    'band' => 'AC/DC',
    'vocal' => 'Cantor',
    'solo_guitar' => "Angus",
    'base_guitar' => 'Malcolm',
    'bass_guitar' => 'Cliff',
    'drums' => 'Phil'
];

echo "<p>O vocal da banda AC/DC é {$acdc['vocal']} e o Guitarra é {$acdc['base_guitar']}</p>";

$pearl = [
    'band' => 'Pearl Jam',
    'vocal' => 'Cantor 2',
    'solo_guitar' => "Angus 2",
    'base_guitar' => 'Malcolm 2',
    'bass_guitar' => 'Cliff 2',
    'drums' => 'Phil 2'
];

$rockBands = [
    'acdc' => $acdc,
    'pearl_jam' => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl_jam']['vocal']}</p>";

foreach ($acdc as $item){
    echo "<p>{$item}</p>";
}

foreach ($rockBands as $rockBand){
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand);
}


