<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
       body{
      
            background-image: url("CarrosEletricos2.jpg");
            background-size: cover; /* Faz a imagem cobrir todo o fundo */
            background-repeat: no-repeat; /* Impede a repetição da imagem */
            background-position: center; /* Centraliza a imagem no fundo */
        
       }
</style>
<body>
    <h1>Cadastrar dados</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form action="processa.electra.php" method="post">
        <label>Nome:</label>
        <input type="text"name="nome" placeholder="Digite o nome completo"> <br><br>
        <label>cpf:</label>
        <input type="number" name="cpf" placeholder="Digite o seu cpf"> <br><br>
        <label>endereço:</label>
        <input type="text" name="endereco" placeholder="Digite o seu endereço"> <br><br>
        <label>bairro:</label>
        <input type="text" name="bairro" placeholder="Digite o seu bairro"> <br><br>
        <label>cidade:</label>
        <input type="text" name="cidade" placeholder="Digite o sua cidade"> <br><br>
        <label>estado:</label>
        <input type="text" name="estado" placeholder="Digite o seu estado"> <br><br>
        <label>data de nascimento:</label>
        <input type="number" name="datadenascemento" placeholder="Digite o sua data de nascimento"> <br><br>
        <label>email</label>
        <input type="text" name="email" placeholder="Digite o seu e-mail"> <br><br>
        <label>telefone:</label>
        <input type="number" name="telefone" placeholder="Digite o seu telefone"> <br><br>
        <input type="submit" value="Cadastra">
        <a href="lista.electra.php"><input type="button" value="listar"></a>
    </form>
</body>
</html>
