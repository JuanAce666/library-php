<?php
include "conexion.php";
    $id = $_GET['id'];

    $conectar->query("DELETE FROM libros WHERE id=$id");
    header("Location: ../index.php");
    
?>