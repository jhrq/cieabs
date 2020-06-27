<?php
	session_start();
	include('connection.php');

	if(empty($_POST['usuario']) || empty($_POST['senha'])) {
		header('Location: index.php');
		exit();
	}

	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$query = "SELECT admin, COD_MATRICULA FROM usuarios WHERE USUARIO = '{$usuario}' and SENHA = '{$senha}'";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);

	if($row == 0) {
		$_SESSION['NAOAUTENTICADO'] = true;
		header('Location: index.php');
		exit();
	} else {
		
		$_SESSION['usuario'] = $usuario;
		header('Location: painel.php');
		
	}

?>