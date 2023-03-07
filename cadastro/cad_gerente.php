<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente</title>
    <link rel="stylesheet" href="formgerali.css">
</head>
<body>
<div class="container">
      <span class="big-circle"></span>
      <img src="imggeral/bolinhas.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
            <br><br>
          <h3 class="title">Cadastrar Gerente</h3><br>
          <p class="text">
          Por favor, insira os dados do Gerente que 
          deseja cadastrar.
          </p>

          <div class="social-media">
            <br><br><br><br>
            <a href="funcoeschefe.html" class="btn-volt">Voltar </a><br> <br>
            <a href="index.html" class="btn-volt">Menu </a>

          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
    <form action="gerente.php" method="post">
      
        <div class="input-container">
        <label for="cpf">CPF</label>
        <span>CPF</span>
        <input class="input" type="number" name="cpf" id="cpf" required autofocus><br>
        </div>

        <div class="select-box">
        <label class="label" for="turno">Turno:</label>
        <select style="padding:10px 1px 10px 80px;" class="input" name="turno" id="turno">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from turno";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['tipo'].'</option>';
            }
        ?>
        </select><br>
        </div>

        <div class="select-box">

        <label  class="label" for="departamento">Departamento:</label>
        <select style="padding:9px 1px 10px 150px;" class="input" name="departamento" id="departamento">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from departamento";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['nome'].'</option>';
            }
        ?>
        </select><br>
        </div>
        
        <input type="reset" value="Apagar dados" class="btn"><br> <br>
        <input type="submit" value="Cadastrar" class="btn"><br>
    </form>
    <script src="formgerali.js"></script>
</body>
</html>