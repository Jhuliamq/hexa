<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formgerali.css">
</head>
<body>
<div class="container">
      <span class="big-circle"></span>
      <img src="imggeral/bolinhas.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
            <br><br>
          <h3 class="title">Cadastrar Fornecedor</h3><br>
          <p class="text">
          Por favor, insira os dados do Fornecedor que 
          deseja cadastrar.
          </p>

          <div class="social-media">
            <br><br><br><br>
            <a href="funcoeschefe.html" class="btn-volt">Voltar </a><br> <br>
            <a href="index.html" class="btn-volt">Menu</a>

          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
    <form action="fornecedor.php" method="post">
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
        <label for="cidade">Cidade</label>
        <span>Cidade</span>

        <input class="input" type="text" name="cidade" id="cidade" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="telefone">Telefone</label>
        <span>Telefone</span>

        <input class="input" type="number" name="telefone" id="telefone" required autofocus><br>
        </div>

        <div class="select-box">
        <label class="label"for="uf">UF:</label>
        
       
        <select class="input"  name="uf" id="uf">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from UF";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['nome'].'</option>';
            }
        ?>
        </select><br>
        </div> <br><br>
        
        <input type="reset" value="Apagar dados" class="btn"><br> <br>
        <input type="submit" value="Cadastrar" class="btn"><br>
    
</form>
    <script src="formgerali.js"></script>
</body>
</html>