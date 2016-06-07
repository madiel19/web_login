
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
		<a class="navbar-brand" href="index.php">HOME</a>
	 </div>
		
   </div>
</div>

<div class="container">
<div class="principal">
<h1>Formulario cadastro</h1>
<form action="cadastro.php">
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
	<td><button class="btn btn-primary">Cadastrar</button><td/>
	</tr>
	
	</TABLE>	
</form>
</div>
</div>
</body>
</html>