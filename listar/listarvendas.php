<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="tabelavend.css">
</head>
<body>
    <h1>Vendas</h1>
    <table border="1" class="content-table">
        <tr class="content-table thead tr">
            <th class="content-table th">Produto</th>
            <th class="content-table th">Fornecedor</th>
            <th class="content-table th">Data</th>
        </tr>
                <?php 
                $con = mysqli_connect("localhost","root","","supermercado");
                $select = "select p.*, v.* from produto p, vendas v where p.codigo = v.codprod";
                $result = mysqli_query($con,$select);
                while($linha = mysqli_fetch_array($result)){
                    echo '<tr class="content-table thead tr">';
                    echo '<td class="content-table td">'.$linha['nome'].'</td>';
                
                $select2 = "select * from fornecedor where codigo =".$linha['codfor'];
                $result2 = mysqli_query($con,$select2);
                while($linha2 = mysqli_fetch_array($result2)){
                    echo '<td class="content-table td"><a href="listarfornecedor.php?op='.$linha2['codigo'].'">'.$linha2['nome'].'</a></td>';
                }
                $select3 = "select * from vendas where codprod=".$linha['codigo'];
                $result3 = mysqli_query($con,$select3);
                while($linha3 = mysqli_fetch_array($result3)){
                    echo '<td class="content-table td">'.$linha3['data'].'</td>';
                }
                echo '</tr>';
            }
                ?>
    </table>
</body>
</html>