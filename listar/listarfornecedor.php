<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
    <link rel="stylesheet" href="tabelaz.css">

</head>
<body>
    <h1>Fornecedores do sistema</h1>
    <table border="1" class="content-table">
        <tr class="content-table thead tr">
            <th class="content-table th">Código</th>
            <th class="content-table th">Nome</th>
            <th class="content-table th">UF</th>
            <th class="content-table th">Cidade</th>
            <th class="content-table th">Telefone</th>
        </tr > 
            <?php
            $con = mysqli_connect("localhost","root","","supermercado");

            $op = isset($_GET['op']) ? $_GET['op'] : '0';

            if($op == '0'){
            $select = "select * from fornecedor";
            }
            else{
                $select = "select * from fornecedor where codigo =$op";
            }
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<tr class="content-table thead tr">';
                echo '<td class="content-table td">'.$linha['codigo'].'</td>';
                echo '<td class="content-table td">'.$linha['nome'].'</td>';
               
                $select2 = "select * from UF where codigo =".$linha['UF'];
                $result2 = mysqli_query($con,$select2);
                while($linha2 = mysqli_fetch_array($result2)){
                    echo '<td class="content-table td">'.$linha2['nome'].'</td>';
                }
                echo '<td class="content-table td">'.$linha['cidade'].'</td>';
                echo '<td class="content-table td">'.$linha['telefone'].'</td>';
                echo '</tr>';
            }
            ?>
    </table>
    
</body>
</html>
