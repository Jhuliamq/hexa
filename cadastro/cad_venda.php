<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="formgerali.css">
</head>
<body>
<div class="container">
      <span class="big-circle"></span>
      <img src="imggeral/bolinhas.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
            <br><br>
          <h3 class="title">Registrar Venda</h3><br>
          <p class="text">
          Por favor, insira os dados da Venda que 
          deseja registrar.
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
    <form action="vendas.php" method="post">

        <div class="input-container">
        <label for="codprod">Código Produto</label>
        <span>Código Produto</span>
        <input  class="input" type="number" name="codprod" id="codprod" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="codfor">Código Fornecedor</label>
        <span>Código Fornecedor</span>
        <input class="input" type="number" name="codfor" id="codfor" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="data">Data</label>
        <span>Data</span>
        <input style="padding:9px 1px 10px 70px;" class="input" type="date" name="data" id="data" required autofocus><br>
        </div>

        <input type="reset" value="Apagar dados" class="btn"><br> <br>
        <input type="submit" value="Cadastrar" class="btn"><br> <br>


    </form>
    <script src="formgerali.js"></script>
</body>
</html>