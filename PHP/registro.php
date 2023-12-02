<?php
    include "conexion.php";

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];

    $conectar->query("INSERT INTO libros (titulo,autor,descripcion) VALUES ('$titulo', '$autor', '$descripcion')");

    header("Location: ../index.php");
?>