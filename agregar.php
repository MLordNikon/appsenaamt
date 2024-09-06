<?php
include("conn.php");

if ($_POST) {
    $tipo = $_POST["tipo"];
    $numero = $_POST["numero"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $programa = $_POST["programa"];
    $ficha = $_POST["ficha"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];

    $query = $conn->query("INSERT INTO `aprendices`(`tipo`, `numero`, `nombres`, `apellidos`, `programa`, `ficha`, `correo`, `celular`) 
    VALUES ('$tipo',' $numero','$nombres','$apellidos','$programa','$ficha','$correo','$celular')");
}

header("location: index.php");