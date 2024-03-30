
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--navbar reposicionada -->


    <form action="cadastro.php" method="POST">
    <div>
        <input type="marca" placeholder=" marca do carro" >
    </div>
    <div>
        <input type="text" name="preco" placeholder=" preço do carro"> 
    </div>
    <div>
    
        <div>
        <input type="chebox" name="opicionais[]" value="telo solar"> 
        </div>
        <div>
        <input type="chebox" name="opicionais[]" value="pelicula"> 
        </div>
        <div>
        <input type="chebox" name="opicionais[]" value="blindado">
        </div>
        <div>
        <input type="chebox" name="opicionais[]" value="kit sportivo"> 
        </div>
        <input type="submit" value=" enviar">
    </div>
    </form>
</body>
</html>
</header>

