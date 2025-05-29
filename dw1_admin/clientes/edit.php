<?php

include("../includes/conexao.php");

$id = $_POST["campo-id"];
$nome = $_POST["campo-nome"];
$email = $_POST["campo-email"];
$cpf = $_POST["campo-cpf"];
$salario = $_POST["campo-salario"];
$sexo = $_POST["campo-sexo"];
$data = $_POST["campo-data"];
$obs = $_POST["campo-obs"];

$sql = "UPDATE clientes set nome='$nome',email='$email',cpf='$cpf',salario='$salario',data='$data',obs='$obs',sexo='$sexo'
        where id=$id ";

$conexao->query($sql);

header("location: index.php");


