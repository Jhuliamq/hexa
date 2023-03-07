<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="styled.css">
</head>
<body>
    <?php 
    $codprod = $_POST['codprod'];
    $codfor = $_POST['codfor'];
    $data = $_POST['data'];

    $con = mysqli_connect("localhost","root","","supermercado");
    $insert = "insert into vendas values($codprod,$codfor,'$data')";
    $result = mysqli_query($con,$insert);
    if($result){
        echo 'Venda cadastrada <br><br>';
        echo '<a href="funcoesfuncionario.html">Voltar</a>';
    }
    else{
        echo 'Erro...';
    }
    ?>
</body>
</html>