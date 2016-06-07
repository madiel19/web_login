    <meta charset="utf-8">
<?php 

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$connect = mysql_connect('localhost','root','1571');
$db = mysql_select_db('array_enterprises');
$query_select = "SELECT name FROM users WHERE name = '$name'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['name'];
 
    if($name == "" || $name == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo nome deve ser preenchido');window.location.href='cadastro.html';</script>";
 
        }else{
            if($logarray == $name){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
                die();
 
            }else{
                $query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastro.html'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
                }
            }
        }
?>

