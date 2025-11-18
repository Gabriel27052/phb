<?php
// Configurações do banco de dados
$host    = "localhost"; // servidor do banco
$usuario = "root";      // usuário do banco
$senha   = " ";          // senha do banco
$banco   = " ";     // nome do banco de dados

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão funcionou
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Opcional: definir charset para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");

// Substituam os valores abaixo pelas credenciais da sua própria conta do Cloudinary
$cloud_name = "ddbfhnopx";  // exemplo: "meucloud123"
$api_key    = "733826338833621";     // exemplo: "123456789012345"
$api_secret = "kDh3qaw4V8-41WYvgvPG0gL8hWg";  // exemplo: "abcdeFGHijkLMNopqrstu"

?>

