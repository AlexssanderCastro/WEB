<?php

include("../includes/conexao.php");

$id = $_GET['id'];


$sql = "DELETE from produtos where id= $id ";

$conexao->query($sql);

header("location: index.php");


