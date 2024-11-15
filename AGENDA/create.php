<?php  
include_once("templates/header.php");
?>

<div class=" container">
    <?php include_once("templates/backbtn.html"); ?>

<h1 id="main-title">Criando contato</h1>

<form id="create-form" action="<?=$BASE_URL?>confing/process.php " method="$_POST">
<input type="hindden" name="type" value="create">
<div class="form-grup">
    <label for="name">Nome do contato</label>
    <input type="text"class =" form-control " id=" name" placeholder="Digite o name" required>
</div>
<input type="hindden" name="type" value="create">
<div class="form-grup">
    <label for="phone">Telefone do contato</label>
    <input type="text"class =" form-control " id=" phone" placeholder="Digite o phone" required>
</div> 
<div class="form-grup">
    <label for="observations">Observaçoes</label>
    <textarea type="text"class =" form-control " id=" observations" placeholder="Insira as observaçoes" rows="3"></textarea>
</div> 
<button type="submit" class=" btn btn-primary">Cadastrar</button>
</form>
</div>
    
 <?php
 include_once("templates/footer.php");
 ?>