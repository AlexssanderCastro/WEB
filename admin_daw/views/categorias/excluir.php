<?php
if(isset($_GET['id']) && $_GET['id'] != "") {
    require_once "../../controllers/CategoriaController.php";
    $CategoriaController = new CategoriaController();

    $rs = $CategoriaController->remove(htmlspecialchars($_GET['id']));

    if ($rs) {
        header("location: index.php");
    }
}

?>