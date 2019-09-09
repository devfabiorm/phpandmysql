<?php require_once("logica-usuario.php");

logout();
$_SESSION["success"] = "Desloago com sucesso.";
header("Location: index.php");
die();