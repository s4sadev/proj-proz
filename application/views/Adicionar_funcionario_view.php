<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('salva/funcionario')?>" method="post">
    <div>
        <label for="nome">nome</label> 
        <input type="text" required name="nome" id="nome"></div>
    <div>
        <label for="cargo">cargo</label> 
        <input type="text" required name="cargo" id="cargo"></div>
    <div>
        <label for="setor">setor</label> 
        <input type="text" required name="setor" id="setor"></div>
    <div>
        <label for="cpf">cpf</label> 
        <input type="text" required name="cpf" id="cpf"></div>
    <div>
        <label for="email">email</label> 
        <input type="text" required name="email" id="email"></div>
    <div>
        <label for="telefone">telefone</label> 
        <input type="telefone" required name="telefone" id="telefone"></div>
    <div>
        <label for="senha">senha</label> 
        <input type="senha" required name="senha" id="senha"></div>
    <div>
        <select name="tipo" id="tipo">
            <option value="comum">comum</option>
            <option value="gestor">gestor</option>
        </select>

        <button type="submit">Adicionar</button>
        <button type="submit"><a href="<?=base_url('funcionarios')?>">Cancelar</a></button>

    </form>
</body>
</html>