<?php include "db.php"; ?>

<?php include "functions.php" ?>

<?php
if(isset($_POST['delete'])){
  deleta();
}

?>


  <?php include "includes/header.php" ?>
<div class="container">

    <div class="col-sm-6">
      <h1 class="text-center">CREATE</h1>
        <form action="login_delete.php" method="post">

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

            <input class="btn btn-primary" type="submit" name="delete" value="Deletar"><br><br>
            <?php include "includes/buttons.php" ?>
        </form>
    </div>


    <?php include "includes/footer.php" ?>
