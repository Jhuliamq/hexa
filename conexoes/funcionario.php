<?php 
$cpf = $_POST['cpf'];
$turno = $_POST['turno'];
$departamento = $_POST['departamento'];

$con = mysqli_connect("localhost","root","","supermercado");
$insert = "insert into funcionario values($cpf,$turno,$departamento)";
$result = mysqli_query($con,$insert);
if($result){
    echo "Funcionário inserido no sistema <br><br>";
    echo '<a href="funcoesgerente.html">Voltar</a>';
}
else{
    echo "Erro...";
}
?>