<?php
	session_start();
	include('connection.php');

	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$codigo = mysqli_real_escape_string($conexao, $_POST['codigo']);

	$sql = "SELECT COUNT(*) AS TOTAL FROM usuarios WHERE USUARIO='{$usuario}'; ";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	if ($row['total'] == 1) {
		$_SESSION['usuario_existe'] = true;
		header('Location: cadastro.php');
		exit;
	}

	$sql = "INSERT INTO usuarios (COD_MATRICULA, USUARIO, SENHA, NOME_COMPLETO) VALUES ('$codigo', '$usuario', '$senha', '$nome')";

	if ($conexao->query($sql) === TRUE ) {
		$_SESSION['status_cadastro'] = true;
		header('Location: cadastro.php');
		exit;
	} else {
		$_SESSION['usuario_existe'] = true;
		header('Location: cadastro.php');
		exit;
	}

	$conexao->close();

	header('Location: cadastro.php');
?>