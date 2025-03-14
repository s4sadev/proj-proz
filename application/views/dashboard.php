<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}

echo "Bem-vindo, " . $_SESSION['username'] . "!";
?>

<a href="logout.php">Sair</a>
