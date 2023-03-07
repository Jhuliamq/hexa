<?php 
$cpf = $_POST['cpf'];
$turno = $_POST['turno'];
$departamento = $_POST['departamento'];

$con = mysqli_connect("localhost","root","","supermercado");
$insert = "insert into gerente values($cpf,$turno,$departamento)";
$result = mysqli_query($con,$insert);
if($result){
    echo "Gerente inserido no sistema <br><br>";
    echo '<a href="funcoeschefe.html">Voltar</a>';
}
else{
    echo "Erro...";
}
?>