<?php

$raça = "vira lata";
$nome = "brow";
$idade = 2;
$cor ="caramelo";

$brow = compact("raça","nome","idade","cor");

print_r($brow);
echo"<br>";

foreach( $brow as $caracteristica =>$value ) {

    echo"$caracteristica: $value <br>";
    
}