<?php include("conecta.php");
include ("bancoUsuario.php");

$usuario = buscaUsuario($conexao, $_POST["name"], $_POST["email"], $_POST["password"]);
if($usuario == null){
	header("Location: index.php?login=0");

}else {
	header("Location: index.php?login=true");
}
die();