<?php 
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$status = $_POST['status'];

$con = mysqli_connect("localhost","root","","supermercado");
$select = "select * from pessoa where cpf = $cpf and senha = '".$senha."' and status = '".$status."'";
$result = mysqli_query($con,$select);
if($result -> num_rows == 0){
    header("location:naocad.html");
}
while($linha = mysqli_fetch_array($result)){
    if($status == '1'){
        header("location:funcoesfuncionario.html?op=".$linha['CPF']);
    }
    else if($status == '2'){
        header("location:funcoeschefe.html?op=".$linha['CPF']);
    }
    else{
        header("location:funcoesgerente.html?op=".$linha['CPF']);
    }
}
?>