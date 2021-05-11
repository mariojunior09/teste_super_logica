<?php

//"1) Crie um array"
$array = array();

//2) Popule este array com 7 números
$min = 1;
$max = 7;
$numbers = range($min, $max);
shuffle($numbers);
foreach ($numbers as $number) {
    $array[] = $number;
}
var_dump($array);
echo '<br>';
echo '<br>';

// //Imprima o número da posição 3 do array
echo $array[2];
echo '<br>';
echo '<br>';



// //4) Crie uma variável com todas as posições do array no formato de string separado por vírgula
$var = implode(',', $array);
echo $var;
echo '<br>';
echo '<br>';


// //Crie um novo array a partir da variável no formato de string que foi criada
$novoArray = explode(",", $var);
print_r($novoArray);
echo '<br>';
echo '<br>';

// //6) Crie uma condição para verificar se existe o valor 14 no array
if (in_array(14, $novoArray)) {
    echo 'O valor existe';
    echo '<br>';
    echo '<br>';
} else {
    echo 'O valor não existe';
    echo '<br>';
    echo '<br>';
}

// 7) Faça uma busca em cada posição. Se o número da posição atual for menor que a posição anterior, exclua esta posição
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] < $array[$i - 1]) {
        array_splice($array, $i, 1);
    }
}
var_dump($array);
echo '<br>';
echo '<br>';

//8) Remova a última posição deste array
$positon = array_pop($array);
$key = array_search( $positon, $array );

if($key){
    unset($array[$key]);
}
print_r($array);
echo '<br>';
echo '<br>';

//9) Conte quantos elementos tem neste array
$countElementos = count($array);
echo $countElementos;
echo '<br>';
echo '<br>';


//10) Inverta as posições deste array
$arrayInvertido = array_reverse($array);
print_r($arrayInvertido);
echo '<br>';
echo '<br>';