<?php include "functions.php" ?>
<?php include "db.php";



 // $query = "SELECT * FROM usuarios";
 // $resultado = mysqli_query($connection, $query);
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

</div>
</body>
</html>
