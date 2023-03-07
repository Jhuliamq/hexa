<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="formgerali.css">
</head>
<body>
<div class="container">
      <span class="big-circle"></span>
      <img src="imggeral/bolinhas.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
            <br><br>
          <h3 class="title">Cadastrar Produto</h3><br>
          <p class="text">
          Por favor, insira os dados do Produto que 
          deseja cadastrar.
          </p>

          <div class="social-media">
            <br><br><br><br>
            <a href="funcoesfuncionario.html" class="btn-volt">Voltar </a><br> <br>
            <a href="index.html" class="btn-volt">Menu </a>

          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
    <form action="produto.php" method="post" enctype="multipart/form-data">


    <div class="input-container">
        <label for="codigo">Código</label>
        <span>Código</span>
        <input class="input" type="number" name="codigo" id="codigo" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="nome">Nome</label>
        <span>Nome</span>
        <input class="input" type="text" name="nome" id="nome" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="valor">Preço</label>
        <span>Preço</span>
        <input class="input" type="number" name="valor" id="valor" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="datavalidade">Validade</label>
        <span>Validade</span>
        <input style="padding:9px 1px 10px 100px;" class="input" type="date" name="datavalidade" id="datavalidade" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="datafab">Fabricação</label>
        <span>Fabricação</span>
        <input style="padding:9px 1px 10px 120px;" class="input" type="date" name="datafab" id="datafab" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="lote">Lote</label>
        <span>Lote</span>
        <input class="input" type="number" name="lote" id="lote" required autofocus><br>
        </div>

        <div class="select-box">
        <label class="label"  for="codSet">Setor:</label>
        <select style="padding:9px 1px 10px 70px;" class="input" name="codSet" id="codSet">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from setores";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['tipo'].'</option>';
            }
        ?>
        </select><br> 
        </div>

        <div class="select-box">
        <label class="label"  for="codfor">Fornecedor:</label>
        <select style="padding:10px 1px 10px 120px;" class="input" name="codfor" id="codfor">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from fornecedor";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['nome'].'</option>';
            }
        ?>
        </select><br>
        <label for="imagem">Imagem:</label>
        <input type="file" name="upload" id="imagem" accept="image/*" class="input">
        </div>
        <br>
        <input type="reset" value="Apagar dados" class="btn"><br> <br>
        <input type="submit" value="Cadastrar" class="btn"><br> 
    </form>

    
    <script src="formgerali.js"></script>
    </body>
</html>