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
  </div>
</nav>

<div class="container-md">
  <div class="row justify-content-center mt-5">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-primary text-white">
          Login
        </div>
        <div class="card-body">
          <form action="valida_login.php" method="post">
            <div class="mb-3">
              <input name="email" type="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
              <input name="senha" type="password" class="form-control" placeholder="Senha">
            </div>
            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>
            <div class="text-danger mb-3">
              Usuário ou senha inválido(s)
            </div>
            <?php } ?>
            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>
            <div class="text-danger mb-3">
              Por favor, faça login antes de acessar as páginas protegidas
            </div>
            <?php } ?>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
