<?php

include("../includes/conexao.php");

$id = $_GET['id'];


$sql = "DELETE from atividades where id= $id ";

$conexao->query($sql);

header("location: index.php");


