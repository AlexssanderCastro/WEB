<?php

include("../includes/conexao.php");


$nome = $_POST["campo-nome"];
$valor = $_POST["campo-valor"];
$quantidade = $_POST["campo-quantidade"];
$codigo = $_POST["campo-codigo"];
$descricao = $_POST["campo-descricao"];


$sql = "INSERT INTO produtos (nome, valor, quantidade, codigo, descricao)
        VALUES('$nome','$valor','$quantidade','$codigo','$descricao')";

$conexao->query($sql);

header("location: index.php");


