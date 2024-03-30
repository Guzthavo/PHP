<?php
// arry sociativo custuma descrecer alguma coisa 

$Gustavo = [
'nome'=> 'Gustavo',
'idade' => 30,
'profissao' => 'programador'
 
];

$Helena = [
    'nome'=> 'Helena',
    'idade' => 24,
    'profissao' => ' segunra da informação'
    
    ];

foreach ($Gustavo as $carac => $value) {

echo "$carac => $value <br>";

}

foreach($Helena as $carac => $value) {

    echo "$carac => $value <br>";
}

// exercicios:
$pessoas =[
    'Pedro' => 30,
    'João' =>55,
    'Tiago'=>29,
];
?>
<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade);?>
<tr>
    <td><?=$nome;?></td>
    <td><?$idade;?></td>
</tr>
   endforeach:


</table>