<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body> 
    <?php
    if($this->session->flashdata('sucess')){
        echo '<div>';
        echo $this->session->flashdata('sucess');
        echo '</div>';
    }
    elseif($this->session->flashdata('block')){
        echo '<div>';
        echo $this->session->flashdata('block');
        echo '</div>';

    }    
    ?>

    <h1>Listagem de funcionarios</h1>
    <a href="<?= base_url('formulario/funcionario')?>"><button>Adicionar</button></a>

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
                <button><a href="<?php echo base_url('remove/funcionario?id='. $funcionario['id' ])?>" >Apagar</a></button>    
                <button><a href="<?php echo base_url('editar/funcionario?id='. $funcionario['id' ])?>">editar</a></button>
                </td>
            </tr>
    <?php } ?>

        </tbody>
    </table>

    <a href="<?=base_url('/perfil')?>">Voltar para pagina Inicial</a>

</body>
</html>     