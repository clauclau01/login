<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <!--inicio do formulário-->
    <form action="login.php" class="container card card p-5 m-5" method="post" >
    <h1 class="text-center">faça seu longin</h1>
     <div class="mb-3">
       <label for="nome" class="form-label">Nome Cliente</label>
       <input type="text" name="nome" class="form-control" id="nome">
     </div>
     <div class="mb-3">
       <label for="senha" class="form-label">senha</label>
       <input type="password" name="senha" class="form-control" id="senha">
     </div>
     <button class="btn btn-danger col-5">Entrar no Sistema</button>
    </form><!--fim do formulário-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>