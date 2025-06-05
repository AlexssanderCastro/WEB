<?php

include("../includes/conexao.php");

$id = $_POST["campo-id"];
$nome = $_POST["campo-nome"];
$responsavel = $_POST["campo-responsavel"];
$data = $_POST["campo-data"];
$hora = $_POST["campo-hora"];
$descricao = $_POST["campo-descricao"];

$sql = "UPDATE atividades set nome='$nome',responsavel='$responsavel',data='$data',hora='$hora',descricao='$descricao'
        where id=$id ";

$conexao->query($sql);

header("location: index.php");


