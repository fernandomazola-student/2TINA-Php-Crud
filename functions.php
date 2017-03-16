<?php include "db.php";?>

<?php

function mostraDados(){
  global $connection;
  $query = "SELECT * FROM usuarios";
  $resultado = mysqli_query($connection, $query);


  while($row = mysqli_fetch_assoc($resultado)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function atualizaTabela(){
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];


  //$query = "UPDATE usuarios SET username = '$username', password = '$password' WHERE id = $id ";


  $query = "UPDATE usuarios SET ";
  $query .= "username = '$username',";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id ";

  $resultado = mysqli_query($connection, $query);

  if(!$resultado){
    die("Shiii, falhou na hora de atualizar");
  }else{
    echo "Dados atualizados com sucesso!!";
  }
}


function deleta(){
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $query = "DELETE FROM usuarios WHERE id = '$id'";

  $resultado = mysqli_query($connection, $query);

  if(!$resultado){
    die("Deu ruim");
  }else{
    echo "Dados deletados";
  }
}

 ?>
