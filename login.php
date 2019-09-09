<?php require_once("banco-usuario.php");
	require_once("logica-usuario.php");

	$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);

	if($usuario==null){
		$_SESSION["danger"] = "Usuário ou senha incorreto";
		header("Location: index.php");
	}else{
		$_SESSION["success"] = "Usuário ou senha inválido";
		header("Location: index.php?login=true");
		logaUsuario($usuario['email']);
	}
	die();
