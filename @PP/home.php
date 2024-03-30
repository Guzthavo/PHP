<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">@app</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">SAIR</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Menu
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-6 text-center">
              <a href="abrir_chamado.php" class="text-decoration-none">
                <img src="formulario_abrir_chamado.png" width="70" height="70" class="mb-3">
                <p class="m-0">Abrir Chamado</p>
              </a>
            </div>
            <div class="col-6 text-center">
              <a href="consultar_chamado.php" class="text-decoration-none">
                <img src="formulario_consultar_chamado.png" width="70" height="70" class="mb-3">
                <p class="m-0">Consultar Chamado</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
