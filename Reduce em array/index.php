<?php


$arr = [1,2,3,3,2,1,4,5,6,6,5,4,7,8,9,9,8,7, ];
// soma
function soma($a, $b) {
    return $a + $b;
}
$resultado = array_reduce( $arr, "soma");

echo "$resultado <br>";

// subtração
function subtração($a, $b) {
    return $a - $b;
}

$resultado2 = array_reduce( $arr, "subtração");

echo "$resultado2 <br>";

//multipicação
function multiplicação ($a, $b) {
    return $a * $b;
}
$resultado3 = array_reduce( $arr, "multiplicação");

echo "$resultado3 <br>";


// verificar in_array verificar se um item  passaso por parâmetro está no Array
