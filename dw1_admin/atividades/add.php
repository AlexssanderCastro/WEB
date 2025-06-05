<?php

include("../includes/conexao.php");


$nome = $_POST["campo-nome"];
$responsavel = $_POST["campo-responsavel"];
$data = $_POST["campo-data"];
$hora = $_POST["campo-hora"];
$descricao = $_POST["campo-descricao"];


$sql = "INSERT INTO atividades (nome, responsavel, data, hora, descricao)
        VALUES('$nome','$responsavel','$data','$hora','$descricao')";

$conexao->query($sql);

header("location: index.php");


