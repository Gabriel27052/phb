<?php
include "conexao.php";

$result = mysqli_query($conexao, "SELECT * FROM usuerio");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="irreal">
    <div class="veridico">
        <form class="talvez">
            <h1 id="nomezin">cadastro</h1>
            <input type="text" placeholder="login" id="login">
            <input type="password" placeholder="senha" id="senha">
            <input type="email" placeholder="e-mail" id="e-mail">
            <input type="tel" placeholder="telefone" id="telefone">
            <input type="submit" onclick="logar();return false">
        
        
        </form>
    </div>
</body>
</html>



