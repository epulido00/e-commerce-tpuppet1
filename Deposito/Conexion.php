<?php
    $s='localhost';
    $db='deposito';
    $u='root';
    $p='root';

    $connection=mysqli_connect($s,$u,$p,$db);
    
    $tabla_usuario="usuario";
    $tabla_producto="producto";

    if($connection->connect_errno){
        echo 'valio madres';
    }else{
        echo ' ';
    }
    
?>