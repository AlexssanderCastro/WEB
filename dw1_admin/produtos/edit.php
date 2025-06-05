<?php

include("../includes/conexao.php");

$id = $_POST["campo-id"];
$nome = $_POST["campo-nome"];
$valor = $_POST["campo-valor"];
$quantidade = $_POST["campo-quantidade"];
$codigo = $_POST["campo-codigo"];
$descricao = $_POST["campo-descricao"];

$sql = "UPDATE produtos set nome='$nome',valor='$valor',quantidade='$quantidade',codigo='$codigo',descricao='$descricao'
        where id=$id ";

$conexao->query($sql);

header("location: index.php");


