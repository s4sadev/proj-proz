<?php
session_start();
session_destroy(); // Destrói a sessão
header('Location: login.html'); // Redireciona de volta para a página de login
exit;
?>
