<?php
// 1. As informações de acesso
$host    = "localhost";
$banco   = "loja_roupas";
$usuario = "root";
$senha   = "";

try {
    // 2. A tentativa de conexão (A ponte entre o PHP e o MySQL)
    $conexao = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    
    // 3. O que acontece se a conexão der certo
    echo "Conexão bem-sucedida!";
} 
catch (PDOException $erro) {
    // 4. O que acontece se algo der errado (Senha errada, banco não existe, etc.)
    echo "Ops, deu erro: " . $erro->getMessage();
}
?>