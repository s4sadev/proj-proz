<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body> 

    <h1>Listagem de funcionarios</h1>
    <a href="formulario-funcionario"><button>Adicionar</button></a>

    <table border = 3>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Setor</th>
                <th>Opçoes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($funcionarios as $funcionario) { ?>
                <td><?= $funcionario['id'] ?></td>
                <td><?= $funcionario['nome'] ?></td>
                <td><?= $funcionario['email'] ?></td>
                <td><?= $funcionario['cargo'] ?></td>
                <td><?= $funcionario['setor'] ?></td>
                
                <td>
                <button >Apagar</button>
                <a href="<?= 'edita-funcionario?id='. $funcionario['id'] ?>">editar</a>
                </td>
            </tr>
    <?php } ?>

        </tbody>
    </table>

</body>
</html>     