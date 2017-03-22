<?php include "db.php"; ?>

<?php include "functions.php" ?>

<?php

  if(isset($_POST['update'])){
    atualizaTabela();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="col-sm-6">
      <h1 class="text-center">UPDATE</h1>
        <form action="login_update.php" method="post">

            <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
              <select name="id">
                <!-- Estático <option value="">1</option> -->
                <?php
                  mostraDados();
                 ?>
              </select>
            </div>

            <input class="btn btn-primary" type="submit" name="update" value="Atualizar">
            <?php include "includes/buttons.php" ?>
        </form>
    </div>
</div>
</body>
</html>
