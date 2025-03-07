<?php
=
$dsn = 'sqlite:banco.db';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
      
        echo "Login bem-sucedido! Bem-vindo, " . htmlspecialchars($usuario) . ".";

    } else {

        echo "Usuário ou senha incorretos.";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
