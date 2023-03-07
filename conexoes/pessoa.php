<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="funcoes.css">
</head>
<body>

<?php 
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$datanasc = $_POST['datanasc'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$status = $_POST['status'];

$con = mysqli_connect("localhost","root","","supermercado");
$insert = "insert into pessoa values($cpf,'$nome',$idade,'$datanasc','$sexo','$email','$senha','$cidade',$uf,'$telefone',$status)";
$result = mysqli_query($con,$insert);
if($result){
    echo"<header>";
    echo'<h2 class="supe">Hexa</h2>';
    echo'<nav class="navigation">';
    echo'<a href="index.html" class="active">Inicio</a>';
    echo'<a href="login.php">Login</a>';
    echo'<a href="cad_pessoa.php">Cadastro</a>';
    echo'<a href="listarprod.php">Produtos</a>';
    echo'<a href="#">Contatos</a>';
    echo'<a href="#">Sobre</a>'; 
    echo"</nav>";
    echo"</header>";
    echo'<div class="container">';
    echo'<img src="imggeral/naocad.jpg">';
    echo'<img src="imggeral/bolinhas.png" class="square" alt="" />';
    echo'<div class="form">';
    echo'<div class="contact-info">';
    echo"<h1>Dados salvos</h1><br>";
    echo"<h1>com sucesso!!!</h1><br>";
    echo'<a href="index.html" class="btn" style="text-align: center; text-decoration: none; color:white;line-height: 100%;">Menu</a>';
    echo'<a href="login.php" class="btn" style="text-align: center; color:white; text-decoration: none; line-height: 100%;">Login</a>';
    echo"</div>";
}
else{
    echo "Erro...";
}
?>
    
</body>
</html>