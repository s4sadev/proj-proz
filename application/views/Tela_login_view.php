<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        if($this->session->flashdata('fail')){
            echo $this->session->flashdata('fail');
        }
    ?>
    <div class="page">
        <form method="post" action="login" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email"></label>
            <input name="email" type="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="senha">Senha</label>
            <input type="senha" name="senha" placeholder="Digite sua senha" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
</body>
</html>