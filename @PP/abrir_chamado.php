<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Abertura de Chamado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Abertura de Chamado</a>
    <a href="logoff.php" class="btn btn-outline-light">SAIR</a>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Abertura de chamado
        </div>
        <div class="card-body">
          <form method="POST" action="registra_chamado.php">
            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Título" required>
            </div>
            <div class="mb-3">
              <label for="categoria" class="form-label">Categoria</label>
              <select class="form-select" name="categoria" id="categoria" required>
                <option selected disabled>Selecione uma categoria</option>
                <option>Criação Usuário</option>
                <option>Impressora</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Rede</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição</label>
              <textarea name="descricao" class="form-control" id="descricao" rows="3" required></textarea>
            </div>
            <div class="row">
              <div class="col">
                <a href="home.php" class="btn btn-lg btn-secondary btn-block">Voltar</a>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Abrir</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
