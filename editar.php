<?php
session_start();

if(!isset($_SESSION['usuario'])) {
   header('Location:index.php');
   exit();
}
require_once("conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$usuarios = $conn->query($sql);
foreach($usuarios as $usuario);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="btn btn-primary" href="home.php">Home</a>
                     </li>                    
                  </ul>
                  <div class="d-flex">
                    <span class="form-control m-2">
                    <?php
                       echo"Seja bem vindos:  ".$_SESSION['usuario'];
                       ?>
                     </span>
                    <a href="sair.php" class="btn btn-danger">Sair</a>
                 </div>
               </div>
            </div>
      </nav>
       <!--inicio do formulário-->
         <form action="acoes.php?acao=editar" class="container card card p-5 m-5" method="post" >
         <h1 class="text-center">Cadastrar novo usuário:</h1>
         <div class="mb-3">
            <label for="nome" class="form-label">Nome Cliente</label>
            <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $usuario['nome']?>">
         </div>
         <div class="mb-3">
            <label for="senha" class="form-label">senha</label>
            <input type="password" name="senha" class="form-control" id="senha" value="<?php echo $usuario['senha']?>">
            <input type="hidden" name="id" value="<?php echo $usuario['id']?>">
            
         </div>
         <button class="btn btn-danger col-5">Atualizar</button>
         </form><!--fim do formulário-->
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>