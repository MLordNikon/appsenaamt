<?php
include("conn.php");

if($_POST) {
    $tipo = $_POST["tipo"];
    $numero = $_POST["numero"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $programa = $_POST["programa"];
    $ficha = $_POST["ficha"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];

    $query = $conn->query("UPDATE `aprendices`
    SET `tipo`='$tipo',`numero`='$numero',`nombres`='$nombres',`apellidos`='$apellidos',`programa`='$programa',`ficha`='$ficha',`correo`='$correo',`celular`='$celular' 
    WHERE numero = $numero");
}

header("location: index.php");