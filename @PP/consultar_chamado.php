<?php 
require_once "validador_acesso.php";
?>

<?php
// Array para armazenar os chamados
$chamados = array();

// Abrir o arquivo de chamados
$arquivo = fopen('arquivo.hd', 'r');

// Verificar se o arquivo foi aberto com sucesso
if ($arquivo) {
    // Ler o arquivo linha por linha
    while (!feof($arquivo)) {
        $registro = fgets($arquivo);
        $chamados[] = $registro;
    }
    // Fechar o arquivo após a leitura
    fclose($arquivo);
} else {
    // Tratamento de erro caso o arquivo não possa ser aberto
    die("Não foi possível abrir o arquivo de chamados.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de Chamado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Consultar chamado</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="nav-link">SAIR</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Consulta de chamado
                </div>
                <div class="card-body">
                    <?php foreach ($chamados as $chamado) { ?>
                        <?php
                        $chamado_dados = explode('#', $chamado);
                        if (count($chamado_dados) < 3) {
                            continue;
                        }
                        ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($chamado_dados[0]) ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($chamado_dados[1]) ?></h6>
                                <p class="card-text"><?= htmlspecialchars($chamado_dados[2]) ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="text-center">
                        <a href="home.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
