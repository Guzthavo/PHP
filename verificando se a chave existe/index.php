<?php

$arr=[
  'nome' => 'Gustavo',

  'idade' => '29'  
];

if (array_key_exists("nome",$arr));{

}
    echo"A chave exixte ! <br>";
 {

 echo " A chavea existe ! <br>";
}

if (array_key_exists("profisaão",$arr));{
    
}
    echo"A chave  não exixte ! <br>";
 {

 echo " A chavea não existe ! <br>";
}
// outro metodo, o isset  não e apenas para verificar valores 
// ele tambem serve para verificar se valores estõ apresentes arry ou variavel

if(isset($arr['nome'])) {
    echo "A chave existe ! ISSET <br>";

} else{
    echo " Achave não existe! <br>" ;
}