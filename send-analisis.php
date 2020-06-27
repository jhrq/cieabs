<?php
	session_start();
	include('connection.php');

	$satisfacao = mysqli_real_escape_string($conexao, $_POST['satisfacao']);
	$andar = mysqli_real_escape_string($conexao, $_POST['andar']);
	$sala = mysqli_real_escape_string($conexao, $_POST['sala']);
	$texto = mysqli_real_escape_string($conexao, $_POST['texto']);

	$sql = "INSERT INTO analises (NVL_SATISFACAO, ANDAR, SALA, TEXTO) VALUES ('$satisfacao', '$andar', '$sala', '$texto');";

	if ($conexao->query($sql) === TRUE ) {
		$_SESSION['status_envio'] = true;
	}

	$conexao->close();

	header('Location: painel.php');

?>