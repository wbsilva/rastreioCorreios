<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome_destinatario', FILTER_SANITIZE_STRING);
$etiquetas = filter_input(INPUT_POST, 'etiquetas', FILTER_SANITIZE_STRING);
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
$dtConsulta = filter_input(INPUT_POST, 'dtConsulta', FILTER_SANITIZE_STRING);

$result_etiqueta = "INSERT INTO etiqueta (nome_destinatario, etiqueta, status_etiqueta, dt_consulta)
										VALUES ('$nome', '$etiquetas', '$status', '$dtConsulta')";
$result_etiqueta = mysqli_query($conn, $result_etiqueta);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: indexdeuruin.php");
}
