<?php
include("conn.php");

if($_GET) {
    $numero = $_GET["numero"];
    $query = $conn->query("DELETE FROM `aprendices` WHERE numero = $numero");
}
header("location: index.php");