<?php

    $usuario = "root";
    $senha = "";
    $hostname = "localhost";
    $database = "line_o";

    $con = new mysqli($hostname, $usuario, $senha, $database);
    if ($con->connect_errno) {
        die("Falha ao conectar:(" . $con->connetc_error);
    } else 
        echo "Conectado com sucesso!";
?>