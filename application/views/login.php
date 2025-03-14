<?php
session_start();

// Conectar ao banco de dados
$host = 'localhost'; // ou o IP do seu servidor
$dbname = 'login_system';
$db_username = 'root'; // seu usuário do banco de dados
$db_password = ''; // sua senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura as informações do formulário
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Verificar se o usuário existe no banco de dados
    $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $user]);
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se o usuário foi encontrado e a senha está correta
    if ($userData && password_verify($pass, $userData['password'])) {
        // Iniciar a sessão e armazenar informações do usuário
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['username'] = $userData['username'];

        // Redirecionar para a página de destino após login bem-sucedido
        header('Location: dashboard.php'); // Aqui você pode colocar qualquer página protegida
        exit;
    } else {
        // Se as credenciais estiverem erradas, redireciona de volta para o login com erro
        header('Location: login.html?error=true');
        exit;
    }
}
?>
