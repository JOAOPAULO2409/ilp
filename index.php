<?php
    $login = $senha = $check = "";
    if(isset($_COOKIE["login"])){
        $login = $_COOKIE["login"];
        $check = "checked";
    }
    if(isset($_COOKIE["senha"]))
        $senha = $_COOKIE["senha"];
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href=".//bootstrap-4.6.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">

    <title>login</title>
  </head>
  <body>
    <div class="card" id="telalogin">
        <!--<img src="..." class="card-img-top" alt="...">-->
        <div class="card-body">
            <form action="indexx.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Login</label>
                  <input type="text" name="login" class="form-control" id="login" aria-describedby="emailHelp" value="<?= $login ?>">
                  <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input  name= "senha" type="password" class="form-control" id="senha" value="<?= $senha ?>">
                </div>
                <label>
                  <input type="checkbox" name ="salvar" <?=$check?>>
                  salvar dados de acesso
                </label>

                <input type = "submit" class="btn btn-success btn-lg btn-block" value="Logar">
                <button type="button" class="btn btn-danger btn-lg btn-block">Esqueceu a senha</button>
                <a href="cadastro.php"><button onclick="cadastro" type="button" class="btn btn-primary btn-lg btn-block">Fazer cadastro</button></a>
              </form>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
