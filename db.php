<?php
//Estabelecendo a conexão
 $connection = mysqli_connect('localhost', 'root', 'fiap', 'desafio');
    if(!$connection){
         die("Conexão falhou");
    }
?>
