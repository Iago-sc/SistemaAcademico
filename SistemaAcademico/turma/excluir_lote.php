<?php

ini_set("display_errors", true);

include '../bd/conectar.php';

$id = $_POST['id'];

foreach ($id as $value) {
    $sql = "delete from turma where id= $value";
    mysqli_query($conexao, $sql);
}

header('Location: listar.php');
