<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $preco = $_POST['valor'];
    $datavalidade = $_POST['datavalidade'];
    $datafab = $_POST['datafab'];
    $lote = $_POST['lote'];
    $setor = $_POST['codSet'];
    $codfor = $_POST['codfor'];
    $imagem = $_FILES['upload'];

    $img = addslashes (file_get_contents($imagem["tmp_name"]));
    $data = base64_encode($img); 
    $con = mysqli_connect("localhost","root","","supermercado");
    $result = mysqli_query($con,"call inserir($codigo,'$nome',$preco,'$datavalidade','$datafab',$lote,$setor,$codfor,'$data')");
    if($result){
        echo 'Produto cadastrado<br>';
        echo '<a href="funcoesfuncionario.html">Voltar</a>';
    }
    else{
        echo 'Erro...';
    }

    ?>
</body>
</html>