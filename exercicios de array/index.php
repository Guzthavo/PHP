<?php

$arr = [
    [ 1, 2, 4],
    [2, 4, 6, 8],
    [3, 6, 9, 12]
    ];

    // looop no arry externo
    for($i = 0; $i < count ($arr); $i++ ) {

  // imprimindo arry
  echo" Imprimindo array externo ".( $i +1) .  "<br>";

  // imprimindo o array interno
  for($j = 0; $j< count ($arr[$i]); $j++) {

    echo $arr[$i][$j]. "<br>";

  }
  

    }
// descontruindo o array
    echo "<br>"; 

    $pessoa = ["gustavo", 30,"Programador", "rasta" ];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissão, $estilo) = $pessoa;

    echo " $nome <br>";
    echo " $idade <br>";
    echo " $profissão <br>";
    echo " $estilo <br>";
    echo "<br>"; 

    
// contrução e desconstruido o arry carro



 $carro = ["jagua", 3.0,  "Azul", 18,  "Teto solar", "Automatico"];

 print_r($carro); 
 echo "<br>";

 list($marca, $motor, $cor, $aro, $opicional, $cambio) = $carro;


 echo"$marca <br>";
 echo"$motor <br>";
 echo"$cor <br>";
 echo"$aro <br>";
 echo"$opicional<br>";
 echo"$cambio <br>";


