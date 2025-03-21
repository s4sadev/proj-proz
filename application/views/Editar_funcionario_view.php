<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POUTRA COISA</title>
</head>
<body>
<form action="<?php echo base_url('editar/funcionario/salvar?id='. $funcionario['id'])?>" method="post">

    <div>
        <label for="nome">nome</label> 
        <input type="text" required name="nome" value="<?=$funcionario['nome'];?>" id="nome">
    </div>
    <div>
        <label for="cargo">cargo</label> 
        <input type="text" required name="cargo" value="<?=$funcionario['cargo'];?>" id="cargo">
    </div>
    <div>
        <label for="setor">setor</label> 
        <input type="text" required name="setor" value="<?=$funcionario['setor'];?>" id="setor">
    </div>
    <div>
        <label for="cpf">cpf</label> 
        <input type="number" required name="cpf" value="<?=$funcionario['cpf'];?>" id="cpf">
    </div>
    <div>
        <label for="email">email</label> 
        <input type="text" required name="email" value="<?=$funcionario['email'];?>" id="email">
    </div>
    <div>
        <label for="telefone">telefone</label> 
        <input type="number" required name="" value="<?=$funcionario['telefone'];?>" id="telefone">
    </div>
    <div>
        <label for="senha">senha</label> 
        <input type="password" required name="senha" value="<?=$funcionario['senha'];?>" id="senha">
    </div>
    <div>
        <label for="tipo">tipo</label> 
        <select name="tipo" id="tipo" value="gestor">
            <option value="comum" <?php if($funcionario['tipo'] == 'comum'){ echo 'selected';}?>>comum</option>
            <option value="gestor" <?php if($funcionario['tipo'] == 'gestor'){ echo 'selected';}?>>gestor</option>
        </select>
    </div>
    </div>
    <div>
        <button type="submit">Salvar</button>
        <button><a href="<?=base_url('funcionarios')?>">Cancelar</a></button>        
    </div>

    </form>
</body>
</html>