<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>

<body >


    <form method="post" action="login" class="">
        <h1 class="text-center text-[35px]">Login</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
        
        <section class="">
            <div class=" ">
                <label for="email">Email</label>
                <input name="email" type="email" class="" placeholder="Digite seu e-mail" autofocus="true" />
            </div>
            
            <div class="">
                <label for="senha">Senha</label>
                <input type="password" name="senha"  class="" placeholder="Digite sua senha" />
            </div>

            <div > <!--aqui  uma mensagem de erro que vai aparecer caso a credencial esteja incorreta,  tenta colocar ela vermelha--->
                <?php
                    if($this->session->flashdata('fail')){
                    echo $this->session->flashdata('fail');
                    }
                ?>     
            </div>
        </section>

        <div class="">
            <input type="submit" value="Acessar" class="" />
            <a href="/" class="">Esqueci minha senha</a>
        </div>

    </form>

</body>

</html>