<?php if(isset($_GET["login"]) && $_GET["login"]== true) {?>
<p class="alert-success">Logado com sucesso!</a>
<?php } ?>
<?php if(isset($_GET["login"]) && $_GET["login"]== false) {?>
<p class="alert-danger">Usuário ou senha invalida!</a>
<?php } ?>

<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/loja.css">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
	<div class "navbar header">
		<a class="navbar-brand" href="cadastrar.php">HOME</a>
		<a class="navbar-brand" href="cadastro.html">CADASTRAR</a>
	 </div>
		
   </div>
</div>

<div class="container">
<div class="principal">
<h1>Login</h1>
<form action="log.php" method="post">
<TABLE class="table">
	

	<tr>
	<td> Nome: <td/>
	<td><input class="form-control" type="text" name="name"><td/>
	</tr>
	<tr>
	<td> Email: <td/>
	<td><input class="form-control" type="text" name="email"><td/>
	</tr>
	<tr>
	<td>Senha: 	<td/>
	<td><input class="form-control" type="password" name="password"><td/>
</tr> 

	<tr>
	<td><button class="btn btn-primary">Login</button><td/>
	</tr>
	
	</TABLE>	
</form>
</div>
</div>
</body>
</html>