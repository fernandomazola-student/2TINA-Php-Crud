<?php include "functions.php" ?>
<?php include "db.php";

    if(isset($_POST['enviar'])){

      insereDados();




//
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        //
        // //Query para inserir os dados de acordo com os nomes das variáveis.
        // $query = "INSERT INTO usuarios(username,password) VALUES ('$username', '$password')";
        //
        // //Função para inserir executar um query em nosso banco.
        // $resultado = mysqli_query($connection, $query);
        //
        // //Validação
        // if(!$resultado){
        //     die("Não deu certo a inclusão" .mysqli_error($connection));
        // } else {
        //     echo "Dados criados com sucesso";
        // }

    }


?>

<?php include "includes/header.php" ?>
<div class="container">

    <div class="col-sm-6">
      <h1 class="text-center">DELETE</h1>
        <form action="login_create.php" method="post">

            <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
            <br><br>

          <?php include "includes/buttons.php" ?>
        </form>
    </div>
  <?php include "includes/footer.php" ?>
