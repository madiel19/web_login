<?php 


function buscaUsuario($conexao, $name, $email, $password){
	$query = "select * from users where name='{$name}'and email='{$email}'and password='{$password}' ";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario ;
}