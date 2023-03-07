<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="tabelaprod.css">

</head>
<body>
    <h1>Produtos</h1>
    <form action="busca.php" method="post">
        <label for="busca">Pesquisa: </label>
        <input type="text" name="busca" id="busca" class="input">
        <input type="submit" value="buscar">
    </form>
    <table border="1" class="content-table"> 
        <tr class="content-table thead tr">
            <th class="content-table th">Código</th>
            <th class="content-table th">Nome</th>
            <th class="content-table th">Valor</th>
            <th class="content-table th">Data de validade</th>
            <th class="content-table th">Data de fabricação</th>
            <th class="content-table th">Lote</th>
            <th class="content-table th">Setor</th>
            <th class="content-table th">Fornecedor</th>
            <th class="content-table th">Imagem</th>
        </tr>
        <tr>
            <?php
            $con = mysqli_connect("localhost","root","","supermercado");
            $op = isset($_GET['op']) ? $_GET['op'] : '0';
            if($op == '0'){
            $select = "select * from produto";
            }
            else{
                $select = "select * from produto where nome like '%".$op."%'";
            }
            $result = mysqli_query($con, $select);
            while($linha = mysqli_fetch_array($result)){
                echo '<tr class="content-table thead tr">';
                echo '<td class="content-table td">'.$linha['codigo'].'</td>';
                echo '<td class="content-table td"> '.$linha['nome'].'</td>';
                echo '<td class="content-table td">'.$linha['valor'].'</td>';
                echo '<td class="content-table td">'.$linha['datavalidade'].'</td>';
                echo '<td class="content-table td">'.$linha['datafab'].'</td>';
                echo '<td class="content-table td">'.$linha['lote'].'</td>';
            
                $select2 = "select * from setores where codigo =".$linha['codSet'];
                $result2 = mysqli_query($con, $select2);
                while($linha2 = mysqli_fetch_array($result2)){
                    echo '<td class="content-table td">'.$linha2['tipo'].'</td>';
            }
    
                $select3 = "select * from fornecedor where codigo =".$linha['codfor'];
                $result3 = mysqli_query($con, $select3);
                while($linha3 = mysqli_fetch_array($result3)){
                    echo '<td class="content-table td"><a href="listarfornecedor.php?op='.$linha3['codigo'].'">'.$linha3['nome'].'</a></td>';
            }
              /*
            $dados = base64_decode($linha['imagem']);
            $arquivo = uniqid($dados) . '.png' ;
	        $sucesso = file_put_contents( $arquivo , $dados );
            echo '<td>'.$sucesso.'</td>';
            */
            echo '</tr>';
        }
            ?>
        </tr>
    </table>
</body>
</html>