<?php include "functions.php" ?>
<?php include "db.php";



 // $query = "SELECT * FROM usuarios";
 // $resultado = mysqli_query($connection, $query);
?>

<?php include "includes/header.php" ?>
<div class="container">

    <div class="col-sm-6">
    <h1 class="text-center">READ</h1>
      <pre>
      <?php
        buscaDados();
      ?>
    </pre>


        <!-- </?php
        //while($row = mysqli_fetch_assoc($resultado)){
        //?>

        //<pre>
        //</?php
        //    print_r($row);
        //}
        //?>
      </pre> -->
      <?php include "includes/buttons.php" ?>
    </div>
  <?php include "includes/footer.php" ?>
